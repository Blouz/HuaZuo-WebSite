<?php
class ControllerExtensionModuleiSenseLabsSeo extends Controller {
    
    private $modulePath;
    private $callModel;
    private $storeUrl;
    private $storeId;
    private $languageId;
    private $storeLogo;
    
    public function __construct($registry) {
        parent::__construct($registry);
        
        $this->config->load('isenselabs/isenselabs_seo');
        $this->modulePath = $this->config->get('isenselabs_seo_path');
        $this->callModel  = $this->config->get('isenselabs_seo_model');
        $this->load->model($this->modulePath);
        
        if ($this->request->server['HTTPS']) {
            $this->storeUrl = $this->config->get('config_ssl');
        } else {
            $this->storeUrl = $this->config->get('config_url');
        }
        
        $this->languageId = $this->config->get('config_language_id');
        $this->storeId = $this->config->get('config_store_id');
        
        $this->registry = $registry;
        
        if (is_file(DIR_IMAGE . $this->config->get('config_image')) && !empty($this->storeUrl)) {
            $this->storeLogo = $this->storeUrl . 'image/' . $this->config->get('config_image');
        } else {
            $this->storeLogo = '';
        }
    }
    
    /*
    * Event for catalog/view/common/header/before
    * Used for canonical URL manipulation
    */
    public function canonicalManager($eventRoute, &$data) {
        $route = !empty($this->request->get['route']) ? $this->request->get['route'] : '';
        $variable = '';
        switch($route) {
            case 'product/product':
                $variable = 'canonical_products';
                break;
            case 'product/category':
                $variable = 'canonical_categories';
                break;
            case 'product/manufacturer/info':
                $variable = 'canonical_manufacturers';
                break;
            case 'information/information':
                $variable = 'canonical_information_pages';
                break;
            case 'product/special':
                $variable = 'canonical_special_page';
                break;
            case 'common/home':
                $variable = 'canonical_home_page';
                break;
            default:
                break;
        }

        $canonical_check = $this->{$this->callModel}->getSetting($variable);
        foreach ($data['links'] as $key => $link) {
            if ($link['rel'] == 'canonical' && !$canonical_check) {
                unset($data['links'][$key]);
            }
        }
    }
    
    /*
    * Event for catalog/controller/common/header/after
    * Used for gathering data from search engine bots
    */
    public function searchEngineAnalytics($eventRoute, $data) {
        $search_engine_analytics_enable = $this->{$this->callModel}->getSetting('search_engine_analytics_enable');
            
        if (!empty($search_engine_analytics_enable) && $search_engine_analytics_enable == '1') {
            $crawlers = array(
                'Googlebot',
                'Googlebot-Image',
                'Bingbot',
                'YandexBot',
                'YandexImages'
            );
            $crawlers_agents = implode('|', $crawlers);
            $user_agent = (isset($_SERVER['HTTP_USER_AGENT']) && !empty($_SERVER['HTTP_USER_AGENT'])) ? $_SERVER['HTTP_USER_AGENT'] : '';
            $current_protocol = 'http://';
            if (isset($_SERVER['HTTPS']) && (($_SERVER['HTTPS'] == 'on') || ($_SERVER['HTTPS'] == '1'))) {
                $current_protocol = 'https://';
            }
            $current_url = $current_protocol . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

            if (preg_match('/('.$crawlers_agents.')/', $crawlers_agents, $matches)) {
                $bot_name = current($matches);
                $this->db->query("INSERT INTO `" . DB_PREFIX . "seo_analysis` SET crawler='" . $this->db->escape($bot_name) . "', url='" . $this->db->escape($current_url) . "', date_added=NOW()");
            }
        }
    }
    
    
    /*
    * Event for catalog/controller/product/manufacturer/info/before
    * Used for adding meta data for the manufacturers
    */    
     public function manufacturerMetaData($eventRoute, &$data) {
        $manufacturer_id = !empty($this->request->get['manufacturer_id']) ? $this->request->get['manufacturer_id'] : '0'; 

        $manufacturer_seo_data = $this->{$this->callModel}->getManufacturerData($manufacturer_id);

         if ($manufacturer_seo_data) {
            if (!empty($manufacturer_seo_data['meta_title']))
                $this->document->setTitle($manufacturer_seo_data['meta_title']);
            if (!empty($manufacturer_seo_data['meta_description']))
                $this->document->setDescription($manufacturer_seo_data['meta_description']);
            if (!empty($manufacturer_seo_data['meta_keyword']))
                $this->document->setKeywords($manufacturer_seo_data['meta_keyword']);
        }
     }
    
    /*
    * Event for catalog/controller/error/not_found/before
    * Used for tracking 404 pages & redirecting
    */    
     public function notFoundPageHandler($eventRoute, $data) {
        $opened_route = !empty($this->request->get['_route_']) ? $this->request->get['_route_'] : '';
        
         if (!empty($opened_route)) {
            $route = $this->{$this->callModel}->MissingPageWorker($opened_route);

            if ($route) {
                $this->response->redirect($route, 301);
            }
        }
     }
    
    /*
    * Event for catalog/view/common/header/before
    * Used for hreflang URL manipulation (1/2)
    */
    public function hreflangControllerManager($eventRoute, &$data) {
        $route = !empty($this->request->get['route']) ? $this->request->get['route'] : '';
        $variable = '';
        $type = '';
        $id = '';
       
        switch($route) {
            case 'product/product':
                $variable = 'hreflang_products';
                $type = 'product_id';
                break;
            case 'product/category':
                $variable = 'hreflang_categories';
                $type = 'category_id';
                break;
            case 'product/manufacturer/info':
                $variable = 'hreflang_manufacturers';
                $type = 'manufacturer_id';
                break;
            case 'information/information':
                $variable = 'hreflang_informations';
                $type = 'information_id';
                break;
            default:
                break;
        }

        $hreflang_check = $this->{$this->callModel}->getSetting($variable);
        $data['hreflangs'] = array();
        $id = !empty($this->request->get[$type]) ? $this->request->get[$type] : 0;
        
        $this->load->model('localisation/language');
        $languages = $this->model_localisation_language->getLanguages();
        
        if ($hreflang_check) {
            foreach ($languages as $language) {
                $query = $this->db->query("SELECT `keyword` FROM `" . DB_PREFIX . "seo_url` WHERE `query` = '" . $type . "=" . (int)$id . "' AND `language_id` = '".  $language['language_id']."' AND `store_id` = '" . $this->storeId . "' LIMIT 1");

                if ($query->num_rows) {
                    $data['hreflangs'][] = array(
                        'href' => $this->storeUrl . $query->row['keyword'],
                        'lang' => $language['code']
                    );
                }
            }
        }
        
        $data['hreflang_links'] = $this->load->view('extension/module/isenselabs_seo/hreflangs', array('data' => ($data['hreflangs'])));
    }
    
    /*
    * Event for catalog/view/common/header/after
    * Used for hreflang URL manipulation (2/2)
    */
    public function hreflangViewManager($eventRoute, &$data, &$output) {
        if (!empty($data['hreflang_links'])) {
            $output = str_replace('</head>' , $data['hreflang_links'] . PHP_EOL . '</head>', $output); 
        }
    }
    
    /*
    * Event for catalog/controller/common/language/language/before
    * Used for SEO URLs language switch
    */
    public function seoUrlLanguageSwitch($eventRoute, &$data) {
        if (isset($this->request->post['code'])) {
			$this->session->data['language'] = $this->request->post['code'];
		}
        
        if (isset($this->request->post['redirect'])) {
            $search_string = "";
            if (($position = strpos($this->request->post['redirect'], "_route_=")) !== FALSE) { 
                $search_string = substr($this->request->post['redirect'], $position+8); 
            } else {
                $search_string = $this->request->post['redirect']; 
            }

            if (!empty($search_string)) {
                $search_string = explode('/', urldecode($search_string));

                // remove any empty arrays from trailing
                if (utf8_strlen(end($search_string)) == 0) {
                    array_pop($search_string);
                }

                foreach ($search_string as $string) {
                    $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "seo_url WHERE keyword = '" . $this->db->escape($string) . "' AND `store_id` = '" . $this->storeId . "' LIMIT 1");
                    $redirect_url = "";
                    $redirect_path = "";
                    $redirect_query = "";

                    if ($query->num_rows > 0) {

                        $url = explode('=', $query->row['query']);

                        if (isset($this->request->post['code'])) {
                            $lang_query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "language` WHERE `code` = '" . $this->db->escape($this->request->post['code']) . "' LIMIT 1");
                            if ($lang_query->num_rows > 0) {
                                $this->config->set('config_language', $this->request->post['code']);
                                $this->config->set('config_language_id', $lang_query->row['language_id']);
                            }
                        }

                        if ($url[0] == 'category_id') {
                            if (!isset($this->request->get['path'])) {
                                $this->request->get['path'] = $url[1];
                            } else {
                                $this->request->get['path'] .= '_' . $url[1];
                            }
                        }

                        if ($url[0] == 'product_id') {
                            $redirect_path = "product/product";
                            $redirect_query = "product_id=" . $url[1];
                        }
                        if ($url[0] == 'manufacturer_id') {
                            $redirect_path = "product/manufacturer/info";
                            $redirect_query = "manufacturer_id=" . $url[1];
                        }
                        if ($url[0] == 'information_id') {
                            $redirect_path = "information/information";
                            $redirect_query = "information_id=" . $url[1];
                        }
                    }
                }

                if (isset($this->request->get['path']) && !empty($redirect_query)) {
                    $redirect_query = "path=" . $this->request->get['path'] . "&" . $redirect_query;
                } else if (isset($this->request->get['path'])) {
                    $redirect_path = "product/category";
                    $redirect_query = "path=" . $this->request->get['path'];
                }

                if (!empty($redirect_query) && !empty($redirect_path)) {
                    $redirect_url = $this->url->link($redirect_path, $redirect_query, 'SSL');
                }

                if (!empty($redirect_url)) {
                    $this->request->post['redirect'] = $redirect_url;
                } 
            }
        }

        if (isset($this->request->post['redirect'])) {
			return $this->response->redirect($this->request->post['redirect']);
		} else {
			return $this->response->redirect($this->url->link('common/home'));
		}
    }
    
    /*
    * Event for catalog/view/product/product/before
    * Used for auto-links, h1 and h2 tags in product pages
    */
    public function productAutoLinksH1H2Tags($eventRoute, &$data) {
        $autolinks = $this->{$this->callModel}->getAutoLinks();
            
        if ($autolinks) {
            $data['description'] = $this->{$this->callModel}->getDescriptionWithAutolinks($data['description']);
        }

        $h1 = $this->{$this->callModel}->getProductH1Tag($data['product_id']);
        $h2 = $this->{$this->callModel}->getProductH2Tag($data['product_id']);

        $data['description'] = (!empty($h2)) ? '<h2>' . $h2 . '</h2>' . $data['description'] : $data['description'];

        $data['heading_title'] = (!empty($h1)) ? $h1 : $data['heading_title'];
    }
    
    /*
    * Event for catalog/view/product/category/before
    * Used for auto-links in category pages
    */
    public function categoryAutoLinks($eventRoute, &$data) {
        $autolinks = $this->{$this->callModel}->getAutoLinks();
            
        if ($autolinks) {
            $data['description'] = $this->{$this->callModel}->getDescriptionWithAutolinks($data['description']);
        }   
    }
    
    public function customUrlFunctionalityBefore() {
        if (isset($this->request->get['_route_'])) {

			$parts = explode('/', $this->request->get['_route_']);

			// remove any empty arrays from trailing
			if (utf8_strlen(end($parts)) == 0) {
				array_pop($parts);
			}

			foreach ($parts as $part) {
                $custom_seo_urls = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_custom_urls` WHERE `keyword` = '" . $this->db->escape($part) . "' LIMIT 1");
                
                if ($custom_seo_urls->num_rows > 0) {
                    $this->request->get['route'] = $custom_seo_urls->row['query'];

                    break;
				}
			}
		}
    }
        
    /*
    * Event for catalog/asterisk/before
    * Used for Custom SEO URLs (1/2)
    */
    public function customUrlFunctionality($eventRoute, &$data) {
        $this->event->unregister("*/before", $this->modulePath . "/customUrlFunctionality");

		if ($this->config->get('config_seo_url')) {
			$this->url->addRewrite($this);
		}

        if (isset($this->request->get['_route_'])) {

			$parts = explode('/', $this->request->get['_route_']);

			if (utf8_strlen(end($parts)) == 0) {
				array_pop($parts);
			}

			foreach ($parts as $part) {
                $custom_seo_urls = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_custom_urls` WHERE `keyword` = '" . $this->db->escape($part) . "' LIMIT 1");
                
                if ($custom_seo_urls->num_rows > 0) {
                    $this->request->get['route'] = $custom_seo_urls->row['query'];
                    
                    return new Action($this->request->get['route']);
				} 

			}
		}
        
    }
    
    /*
    * Event for catalog/asterisk/before
    * Used for Custom SEO URLs (2/2)
    */
    public function rewrite($link) {
        $url_info = parse_url(str_replace('&amp;', '&', $link));

        $url = '';

		$data = array();

        if (!empty($url_info['query'])) {
            parse_str($url_info['query'], $data);

            foreach ($data as $key => $value) {
                if (isset($data['route'])) {
                    $custom_seo_urls = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_custom_urls` WHERE `query` = '" . $this->db->escape($data['route']) . "' LIMIT 1");

                    if ($custom_seo_urls->num_rows > 0) {
                        $url .= '/' . $custom_seo_urls->row['keyword'];    
                        unset($data['key']);
                    }
                }
            }

            if ($url) {
                unset($data['route']);

                $query = '';

                if ($data) {
                    foreach ($data as $key => $value) {
                        $query .= '&' . rawurlencode((string)$key) . '=' . rawurlencode((is_array($value) ? http_build_query($value) : (string)$value));
                    }

                    if ($query) {
                        $query = '?' . str_replace('&', '&amp;', trim($query, '&'));
                    }
                }

                return $url_info['scheme'] . '://' . $url_info['host'] . (isset($url_info['port']) ? ':' . $url_info['port'] : '') . str_replace('/index.php', '', $url_info['path']) . $url . $query;
            } else {
                return $link;
            }
        } else {
            return $link;
        }
    }
    
    /*
    * Event for catalog/view/common/header/before
    * Used for Structured Data (1/2)
    */
    public function structuredData($eventRoute, &$data) {
        $route = !empty($this->request->get['route']) ? $this->request->get['route'] : '';
        
        // Company info
        $seo_data = array();
        $seo_data['richsnippets_company_info']        = $this->{$this->callModel}->getSetting('richsnippets_company_info');

        if ($seo_data['richsnippets_company_info']) {
            $seo_data['richsnippet_phone'] = $this->config->get('config_telephone');

            $seo_data['seo_url_site'] = $this->storeUrl;
            $seo_data['seo_logo'] = $this->storeLogo;
            
            $seo_data['seo_search'] = html_entity_decode($this->url->link('product/search', 'search={search_term_string}', 'SSL'));
            
            $data['company_info'] = $this->load->view('extension/module/isenselabs_seo/sd_company_info', $seo_data);
        }
        
        // Product Data & Breadcrumbs
        $seo_data = array();
        if ($route == 'product/product') {
            $product_id = !empty($this->request->get['product_id']) ? $this->request->get['product_id'] : 0;
            
            if ($product_id) {
                $this->load->model('tool/image');
                $this->load->model('catalog/product');
                $product_info = $this->model_catalog_product->getProduct($product_id);
                
                if ($product_info) {
                    if ((float)$product_info['special']) {
                        $product_price = $this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax'));
                    } else {
                       // LoginToSeePrice Compatibility Fix
                       if (!empty($product_info['actual_special'])) {
                           $product_price = $this->tax->calculate($product_info['actual_special'], $product_info['tax_class_id'], $this->config->get('config_tax'));
                       } else if (!empty($product_info['actual_price'])) {
                           $product_price = $this->tax->calculate($product_info['actual_price'], $product_info['tax_class_id'], $this->config->get('config_tax'));
                       } else {                   
                           $product_price = $this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax'));
                       }
                    }

                    $product_price = number_format($product_price, 2);   
                }
            }
            
            $richsnippets_product_data = $this->{$this->callModel}->getSetting('richsnippets_product_data');
            $richsnippets_product_breadcrumbs = $this->{$this->callModel}->getSetting('richsnippets_product_breadcrumbs');
            
            if ($product_info && ($richsnippets_product_data || $richsnippets_product_breadcrumbs)) {
                
                if ($richsnippets_product_data) {
                    $seo_data['product_data']      = true;   
                    $seo_data['name']              = $product_info['name']; 
                    $seo_data['quantity']          = $product_info['quantity'];
                    $seo_data['currency_code']     = $this->session->data['currency'];
                    $seo_data['manufacturer']      = $product_info['manufacturer'];
                    $seo_data['review_count']      = $product_info['reviews'];
                    $seo_data['rating']            = (int)$product_info['rating'];
                    $seo_data['model']             = $product_info['model'];
                    $seo_data['url']               = $this->url->link('product/product', 'product_id=' . $product_info['product_id'], 'SSL');
                    $seo_data['description']       = substr(html_entity_decode(strip_tags($data['description'])), 0, 150);

                    if ($product_info['image']) {
                        $seo_data['image']         = $this->model_tool_image->resize($product_info['image'], 500, 500);
                    } else {
                        $seo_data['image']         = '';
                    }
                    
                    $seo_data['price'] = $product_price;   
                }
                
                if ($richsnippets_product_breadcrumbs) {  
                    $seo_data['product_breadcrumbs'] = true;
                    
                    $categories         = $this->model_catalog_product->getCategories($product_info['product_id']);
                    $first_category     = end($categories);

                    $seo_categories = $this->{$this->callModel}->getCategoryPathByCategoryId($first_category['category_id']);

                    if (count($seo_categories) > 0) {
                        $seo_data['breadcrumbs'] = array();
                        
                        $seo_data['breadcrumbs'][] = array(
                            'name' => $this->config->get('config_name'),
                            'href' => $this->url->link('common/home', '', 'SSL')
                        );

                        $seo_categories_parts = explode('_', (string) $seo_categories);
                        foreach ($seo_categories_parts as $seo_cat) {
                            $cat_info = $this->model_catalog_category->getCategory($seo_cat);
                            if ($cat_info) {
                                $cat_info['href'] = html_entity_decode($this->url->link('product/category', 'path='.$cat_info['category_id'], 'SSL'));
                                
                                $seo_data['breadcrumbs'][] = $cat_info;
                            }
                        }
                    }
                    
                }
                
                $data['product_data_breadcrumbs'] = $this->load->view('extension/module/isenselabs_seo/sd_product_data_breadcrumbs', $seo_data);
            }
            
            // Social SEO
            $seo_data = array();
            $twitter_card = $this->{$this->callModel}->getSetting('twitter_card');
            $twitter_card_username = $this->{$this->callModel}->getSetting('twitter_card_username');
            $twitter_card_product_data = $this->{$this->callModel}->getSetting('twitter_card_product_data');
            $facebook_open_graph = $this->{$this->callModel}->getSetting('facebook_open_graph');
            $facebook_open_graph_product_data = $this->{$this->callModel}->getSetting('facebook_open_graph_product_data');
            
            if ($product_info && $twitter_card && $twitter_card_product_data) {
                $seo_data[] = array('product', 'twitter:card', 'name');
                $seo_data[] = array($twitter_card_username, 'twitter:creator', 'name');
                $seo_data[] = array($twitter_card_username, 'twitter:site', 'name');

                if (!empty($product_info['meta_description'])) {
                    $seo_data[] = array($product_info['meta_description'].'...', 'twitter:description', 'name');
                }

                $seo_data[] = array($product_info['name'], 'twitter:title', 'name');
                $seo_data[] = array($this->url->link('product/product', 'product_id=' . $product_info['product_id'], 'SSL'), 'twitter:domain', 'name');
                
                if ($product_info['image']) {
                    $seo_data[] = array($this->model_tool_image->resize($product_info['image'], 500, 500), 'twitter:image', 'name');
                }
            }

            if ($product_info && $facebook_open_graph && $facebook_open_graph_product_data) {
                $seo_data[] = array('product', 'og:type', 'property');
                $seo_data[] = array($product_info['name'], 'og:title', 'property');

                if (!empty($product_info['meta_description'])) {
                    $seo_data[] = array($product_info['meta_description'].'...', 'og:description', 'property');
                }

                $seo_data[] = array($this->url->link('product/product', 'product_id=' . $product_info['product_id'], 'SSL'), 'og:url', 'property');

                if (!empty($seo_data['image'])) {
                    $seo_data[] = array($this->model_tool_image->resize($product_info['image'], 500, 500), 'og:image', 'property');
                }

                $seo_data[] = array($product_price, 'product:price:amount', 'property');
                $seo_data[] = array($this->session->data['currency'], 'product:price:currency', 'property');
            }
            
            $data['product_data_social_seo'] = $this->load->view('extension/module/isenselabs_seo/social_seo', array('links' => $seo_data));
        }
        
        // Home Page Tags
        if ($route == 'common/home' || $route === '') {
            $seo_data = array();
            
            $twitter_card = $this->{$this->callModel}->getSetting('twitter_card');
            $twitter_card_username = $this->{$this->callModel}->getSetting('twitter_card_username');
            $facebook_open_graph = $this->{$this->callModel}->getSetting('facebook_open_graph');
            
            $meta_title = $this->config->get('config_meta_title');
            $meta_description = $this->config->get('config_meta_description');
            
            if ($twitter_card) {
                $seo_data[] = array('summary', 'twitter:card', 'name');
                if ($twitter_card_username) {
                    $seo_data[] = array($twitter_card_username, 'twitter:creator', 'name');
                    $seo_data[] = array($twitter_card_username, 'twitter:site', 'name');
                }

                if (!empty($meta_description)) {
                    $seo_data[] = array($meta_description, 'twitter:description', 'name');
                }

                if (!empty($meta_title)) {
                    $seo_data[] = array($meta_title, 'twitter:title', 'name');
                }  

                if (!empty($this->storeUrl)) {
                    $seo_data[] = array($this->storeUrl, 'twitter:domain', 'name');
                }  

                if (!empty($this->storeLogo)) {
                    $seo_data[] = array($this->storeLogo, 'twitter:image', 'name');
                }                
            }  

            if ($facebook_open_graph) {
                $seo_data[] = array('website', 'og:type', 'property');
                if (!empty($meta_title)) {
                    $seo_data[] = array($meta_title, 'og:site_name', 'property');
                    $seo_data[] = array($meta_title, 'og:title', 'property');
                }

                if (!empty($meta_description)) {
                    $seo_data[] = array($meta_description, 'og:description', 'property');
                }

                if (!empty($this->storeUrl)) {
                    $seo_data[] = array($this->storeUrl, 'og:url', 'property');
                }

                if (!empty($this->storeLogo)) {
                    $seo_data[] = array($this->storeLogo, 'og:image', 'property');
                }
            }
            
            $seo_google_publisher = $this->{$this->callModel}->getSetting('google_publisher');
            $seo_google_publisher_id = $this->{$this->callModel}->getSetting('google_publisher_id');

            if ($seo_google_publisher && !empty($seo_google_publisher_id)) {
                $data['google_publisher_link'] = '<link href="https://plus.google.com/' . trim($seo_google_publisher_id) . '" rel="publisher" />';
            } 

            $data['home_page_social_seo'] = $this->load->view('extension/module/isenselabs_seo/social_seo', array('links' => $seo_data));
        }
        
    }
    
    /*
    * Event for catalog/view/common/header/after
    * Used for Structured Data (2/2)
    */
    public function structuredDataView($eventRoute, &$data, &$output) {
        
        if (!empty($data['company_info'])) {
            $output = str_replace('</head>' , $data['company_info'] . PHP_EOL . '</head>', $output); 
        }
        
        if (!empty($data['product_data_breadcrumbs'])) {
            $output = str_replace('</head>' , $data['product_data_breadcrumbs'] . PHP_EOL . '</head>', $output); 
        }
        
        if (!empty($data['product_data_social_seo'])) {
            $output = str_replace('</head>' , $data['product_data_social_seo'] . PHP_EOL . '</head>', $output); 
        }
        
        if (!empty($data['home_page_social_seo'])) {
            $output = str_replace('</head>' , $data['home_page_social_seo'] . PHP_EOL . '</head>', $output); 
        }
        
        if (!empty($data['google_publisher_link'])) {
            $output = str_replace('</head>' , $data['google_publisher_link'] . PHP_EOL . '</head>', $output); 
        }
        
    }
}