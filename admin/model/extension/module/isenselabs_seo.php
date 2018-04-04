<?php
class ModelExtensionModuleiSenseLabsSeo extends Model {  
    
    public function initDb() {
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "seo_module_settings` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `store_id` int(11) NOT NULL DEFAULT '0',
            `key` varchar(255) NOT NULL,
            `value` text NOT NULL,
            PRIMARY KEY (`id`)
        ) CHARACTER SET utf8 COLLATE utf8_general_ci");
        
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "seo_autolinks` (
            `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
            `keyword` varchar(100) NOT NULL,
            `url` varchar(255) NOT NULL,
            `date_added` datetime NOT NULL,
            PRIMARY KEY (`id`),
            KEY `keyword` (`keyword`),
            KEY `url` (`url`)
        ) CHARACTER SET utf8 COLLATE utf8_general_ci");
        
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "seo_analysis` (
            `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
            `crawler` varchar(100) NOT NULL,
            `url` varchar(255) NOT NULL,
            `date_added` datetime NOT NULL,
            PRIMARY KEY (`id`),
            KEY `crawler` (`crawler`),
            KEY `url` (`url`)
        ) CHARACTER SET utf8 COLLATE utf8_general_ci");        
        
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "seo_custom_urls` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `query` varchar(255) NOT NULL,
            `keyword` varchar(255) NOT NULL,
            `language_id` int(11) NOT NULL DEFAULT '1',
            PRIMARY KEY (`id`),
            KEY `query` (`query`),
            KEY `keyword` (`keyword`)
        ) CHARACTER SET utf8 COLLATE utf8_general_ci");
        
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "seo_manufacturer_description` (
            `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT,
            `language_id` int(11) NOT NULL DEFAULT '1',
            `meta_title` varchar(255) NOT NULL,
            `meta_description` varchar(255) NOT NULL,
            `meta_keyword` varchar(255) NOT NULL,
            PRIMARY KEY (`manufacturer_id`, `language_id`)
        ) CHARACTER SET utf8 COLLATE utf8_general_ci");
        
        $check_if_manufacturer_table_is_filled = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_manufacturer_description`")->num_rows;
        if ($check_if_manufacturer_table_is_filled == 0) {
            $ids = $this->db->query("SELECT m.manufacturer_id FROM `" . DB_PREFIX . "manufacturer` m")->rows;
            $this->load->model('localisation/language');
            $languages = $this->model_localisation_language->getLanguages();

            foreach ($ids as $manufacturer_id) {
                foreach ($languages as $language) {
                    $this->db->query("INSERT INTO `" . DB_PREFIX . "seo_manufacturer_description` SET `manufacturer_id` = '" . $manufacturer_id['manufacturer_id'] . "', `language_id` = '" . $language['language_id'] . "'");
                }
            }
        }
        
        $check_if_table_is_filled = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_module_settings`")->num_rows;
        
        if ($check_if_table_is_filled == 0) {
            $this->db->query("INSERT INTO `" . DB_PREFIX . "seo_module_settings` 
                (`id`, `store_id`, `key`, `value`) VALUES
                (1, 0, 'product_url_string', '[product]-[model]'),
                (2, 0, 'category_url_string', '[category]'),
                (3, 0, 'manufacturer_url_string', '[manufacturer]'),
                (4, 0, 'information_url_string', '[information]'),
                (8, 0, 'product_description_string', '[description]'),
                (5, 0, 'product_title_string', '[product] - [site_name] '),
                (6, 0, 'category_title_string', '[category] - [site_name]'),
                (7, 0, 'information_title_string', '[information] - [site_name]'),
                (9, 0, 'category_description_string', '[category] - [description]'),
                (10, 0, 'information_description_string', '[information] - [site_name]'),
                (11, 0, 'meta_description_word_limit', '10'),
                (12, 0, 'product_keyword_string', '[product], [model]'),
                (13, 0, 'category_keyword_string', '[category], [site_name]'),
                (14, 0, 'information_keyword_string', '[information], [site_name]'),
                (15, 0, 'seo_image_titles_date', ''),
                (16, 0, 'images_filename_string', '[product][model]'),
                (19, 0, 'richsnippets_product_data', '0'),
                (17, 0, 'seo_image_last_activity', ''),
                (20, 0, 'richsnippets_product_breadcrumbs', '0'),
                (18, 0, 'seo_score', '0'),
                (21, 0, 'facebook_open_graph', '0'),
                (22, 0, 'twitter_card', '0'),
                (23, 0, 'google_publisher', '0'),
                (24, 0, 'google_publisher_id', '+iSenseLabs'),
                (25, 0, 'twitter_card_username', '@test'),
                (26, 0, 'twitter_card_product_data', '0'),
                (27, 0, 'facebook_open_graph_product_data', '0'),
                (28, 0, 'facebook_open_graph_app_id', '966242223397117'),
                (29, 0, 'seo_score_last_checked', ''),
                (30, 0, 'hreflang_products', '0'),
                (31, 0, 'hreflang_categories', '0'),
                (32, 0, 'hreflang_manufacturers', '0'),
                (33, 0, 'hreflang_informations', '0'),
                (34, 0, 'richsnippets_company_info', '0')"); 
        }
        
         $check_if_manufacturer_info_is_filled = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_module_settings` WHERE `key`='manufacturer_title_string'")->num_rows;
        
        if ($check_if_manufacturer_info_is_filled == 0) {
            $this->db->query("INSERT INTO `" . DB_PREFIX . "seo_module_settings` 
                (`store_id`, `key`, `value`) VALUES
                (0, 'manufacturer_title_string', '[manufacturer] - [site_name]'),
                (0, 'manufacturer_description_string', '[manufacturer] - [site_name]'),
                (0, 'manufacturer_keyword_string', '[manufacturer], [site_name]')");         
        }
        
        $check_if_sea_field_exists = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_module_settings` WHERE `key`='search_engine_analytics_enable'")->num_rows;
        
        if ($check_if_sea_field_exists == 0) {
            $this->db->query("INSERT INTO `" . DB_PREFIX . "seo_module_settings` 
                (`store_id`, `key`, `value`) VALUES
                (0, 'search_engine_analytics_enable', '1')");         
        }
        
        $check_if_404_gathering_is_enabled = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_module_settings` WHERE `key`='404_pages_gathering'")->num_rows;
        
        if ($check_if_404_gathering_is_enabled == 0) {
            $this->db->query("INSERT INTO `" . DB_PREFIX . "seo_module_settings` 
                (`store_id`, `key`, `value`) VALUES
                (0, '404_pages_gathering', '1')");         
        }
        
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "seo_404_pages` (
            `page_id` int(11) NOT NULL AUTO_INCREMENT,
            `visits` int(11) NOT NULL DEFAULT '1',
            `route` varchar(255) NOT NULL,
            `first_visited` datetime NOT NULL NOT NULL,
            `last_visited` datetime NOT NULL NOT NULL,
            PRIMARY KEY (`page_id`)
        ) CHARACTER SET utf8 COLLATE utf8_general_ci");
        
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "seo_404_redirects` (
            `redirect_id` int(11) NOT NULL AUTO_INCREMENT,
            `route_from` varchar(255) NOT NULL,
            `route_to` varchar(255) NOT NULL,
            `date_added` datetime NOT NULL NOT NULL,
            `date_modified` datetime NOT NULL NOT NULL,
            PRIMARY KEY (`redirect_id`)
        ) CHARACTER SET utf8 COLLATE utf8_general_ci");
        
        
        $check_if_canonical_settings_are_filled = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_module_settings` WHERE `key`='canonical_products'")->num_rows;
        
        if ($check_if_canonical_settings_are_filled == 0) {
            $this->db->query("INSERT INTO `" . DB_PREFIX . "seo_module_settings` 
                (`store_id`, `key`, `value`) VALUES
                (0, 'canonical_products', '1'),
                (0, 'canonical_information_pages', '1'),
                (0, 'canonical_home_page', '1'),
                (0, 'canonical_special_page', '1'),
                (0, 'canonical_manufacturers', '1'),
                (0, 'canonical_categories', '1')");         
        }
        
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "seo_product_description` (
            `product_id` int(11) NOT NULL AUTO_INCREMENT,
            `language_id` int(11) NOT NULL DEFAULT '1',
            `h1` varchar(255) NOT NULL,
            `h2` varchar(255) NOT NULL,
            PRIMARY KEY (`product_id`, `language_id`)
        ) CHARACTER SET utf8 COLLATE utf8_general_ci");
        
    }

    public function getSetting($key = '') {
        $result = $this->db->query("SELECT `value` FROM `" . DB_PREFIX . "seo_module_settings` WHERE `key` = '" . $this->db->escape($key) . "' LIMIT 1");
        
        if ($result->num_rows > 0) { 
            return $result->row['value'];
        } else {
            return false;
        }
    }
    
    public function saveSetting($key, $value) {
        $this->db->query("UPDATE `" . DB_PREFIX . "seo_module_settings` SET `value`='" . $this->db->escape($value) . "' WHERE `key`='" . $key . "' LIMIT 1");
        
        return true;
    }
    
    public function enableSEOUrls($store_id = 0) {
        $this->db->query("UPDATE `" . DB_PREFIX . "setting` SET `value`=1 WHERE `code`='config' AND `key`='config_seo_url' AND `store_id`=".$this->db->escape($store_id)." LIMIT 1");
        
        return true;
    }
    
    public function getKeywords($item_id = 0, $type = 'product') {
        $keywords = array();
        
        switch($type) {
            case "category":
                $results = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_url` WHERE `query` = 'category_id=" . (int)$this->db->escape($item_id) . "'");
                break;
            case "product":
                $results = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_url` WHERE `query` = 'product_id=" . (int)$this->db->escape($item_id) . "'");
                break;
            case "manufacturer":
                $results = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_url` WHERE `query` = 'manufacturer_id=" . (int)$this->db->escape($item_id) . "'");
                break;
            case "information":
                $results = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_url` WHERE `query` = 'information_id=" . (int)$item_id . "'");
                break;
            default:
                return false;
                break;
        }
        
        foreach ($results->rows as $result) {
            $keywords[$result['language_id']] = $result['keyword'];					
        }
        
        return $keywords;
    }
    
    public function checkSEOUrlsCount() {
        $this->load->model('localisation/language');
		$languages                                  = $this->model_localisation_language->getLanguages();
        $total_products                             = array();
        $total_products_with_seo_titles             = array();
        $total_categories                           = array();
        $total_categories_with_seo_titles           = array();
        $total_manufacturers                        = array();
        $total_manufacturers_with_seo_titles        = array();
        $total_informations                         = array();
        $total_informations_with_seo_titles         = array();
        $total_products_difference                  = array();
        $total_categories_difference                = array();
        $total_manufacturers_difference             = array();
        $total_informations_difference              = array();
        
        foreach ($languages as $language) { 
            $total_products[$language['language_id']]       = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "product`")->row['count'];
            $total_products_with_seo_titles[$language['language_id']] = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "seo_url` WHERE `query` LIKE '%product_id=%' AND `language_id` = " . $language['language_id'] . "")->row['count'];
            $total_products_difference[$language['language_id']] = $total_products[$language['language_id']]-$total_products_with_seo_titles[$language['language_id']];

            $total_categories[$language['language_id']]     = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "category`")->row['count'];
            $total_categories_with_seo_titles[$language['language_id']] = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "seo_url` WHERE `query` LIKE '%category_id=%' AND `language_id` = " . $language['language_id'] . "")->row['count'];
            $total_categories_difference[$language['language_id']] = $total_categories[$language['language_id']]-$total_categories_with_seo_titles[$language['language_id']];

            $total_manufacturers[$language['language_id']]  = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "manufacturer`")->row['count'];
            $total_manufacturers_with_seo_titles[$language['language_id']] = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "seo_url` WHERE `query` LIKE '%manufacturer_id=%' AND `language_id` = " . $language['language_id'] . "")->row['count'];
            $total_manufacturers_difference[$language['language_id']] = $total_manufacturers[$language['language_id']]-$total_manufacturers_with_seo_titles[$language['language_id']];

            $total_informations[$language['language_id']]   = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "information`")->row['count'];
            $total_informations_with_seo_titles[$language['language_id']] = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "seo_url` WHERE `query` LIKE '%information_id=%' AND `language_id` = " . $language['language_id'] . "")->row['count'];
            $total_informations_difference[$language['language_id']] = $total_informations[$language['language_id']]-$total_informations_with_seo_titles[$language['language_id']];

        }
        
        return array(
            'total_products'                => $total_products,
            'total_products_meta'           => $total_products_with_seo_titles,
            'total_categories'              => $total_categories,
            'total_categories_meta'         => $total_categories_with_seo_titles,
            'total_manufacturers'           => $total_manufacturers,
            'total_manufacturers_meta'      => $total_manufacturers_with_seo_titles,
            'total_informations'            => $total_informations,
            'total_informations_meta'       => $total_informations_with_seo_titles,
            'total_products_difference'     => $total_products_difference,
            'total_categories_difference'   => $total_categories_difference,
            'total_manufacturers_difference'=> $total_manufacturers_difference,
            'total_informations_difference' => $total_informations_difference
        );
    }
    
    public function createSEOUrls($type = '', $language_id = '1') {
        $ids = array();
        $pattern = '';
        
        switch($type) {
            case "categories":
                $ids = $this->db->query("SELECT c.category_id FROM `" . DB_PREFIX . "category` c WHERE CONCAT('category_id=',c.category_id) NOT IN (SELECT `query` FROM `" . DB_PREFIX . "seo_url` WHERE `query` = CONCAT('category_id=',c.category_id) AND `language_id`=" . $language_id . ")")->rows;
                
                $result = $this->SeoCategoryURLs($ids, $language_id);
                return $result;
            case "categories_all":
                $this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE `query` LIKE '%category_id=%' AND `language_id`=" . $language_id . "");
                
                $ids = $this->db->query("SELECT c.category_id FROM `" . DB_PREFIX . "category` c")->rows;
                
                $result = $this->SeoCategoryURLs($ids, $language_id);
                return $result;
            case "products":
                $ids = $this->db->query("SELECT p.product_id FROM `" . DB_PREFIX . "product` p WHERE CONCAT('product_id=',p.product_id) NOT IN (SELECT `query` FROM `" . DB_PREFIX . "seo_url` WHERE `query` = CONCAT('product_id=',p.product_id) AND `language_id`=" . $language_id . ")")->rows;
                
                $result = $this->SeoProductURLs($ids, $language_id);
                return $result;
            case "products_all":
                $this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE `query` LIKE '%product_id=%' AND `language_id`=" . $language_id . "");
                
                $ids = $this->db->query("SELECT p.product_id FROM `" . DB_PREFIX . "product` p")->rows;
                
                $result = $this->SeoProductURLs($ids, $language_id);
                return $result;
            case "manufacturers":
                $ids = $this->db->query("SELECT m.manufacturer_id FROM `" . DB_PREFIX . "manufacturer` m WHERE CONCAT('manufacturer_id=',m.manufacturer_id) NOT IN (SELECT `query` FROM `" . DB_PREFIX . "seo_url` WHERE `query` = CONCAT('manufacturer_id=',m.manufacturer_id) AND `language_id`=" . $language_id . ")")->rows;
                
                $result = $this->SeoManufacturerURLs($ids, $language_id);
                return $result;
            case "manufacturers_all":
                $this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE `query` LIKE '%manufacturer_id=%' AND `language_id`=" . $language_id . "");
                
                $ids = $this->db->query("SELECT m.manufacturer_id FROM `" . DB_PREFIX . "manufacturer` m")->rows;
                
                $result = $this->SeoManufacturerURLs($ids, $language_id);
                return $result;
            case "informations":
                $ids = $this->db->query("SELECT i.information_id FROM `" . DB_PREFIX . "information` i WHERE CONCAT('information_id=',i.information_id) NOT IN (SELECT `query` FROM `" . DB_PREFIX . "seo_url` WHERE `query` = CONCAT('information_id=',i.information_id) AND `language_id`=" . $language_id . ")")->rows;
               
                $result = $this->SeoInformationURLs($ids, $language_id);
                return $result;
            case "informations_all":
                $this->db->query("DELETE FROM `" . DB_PREFIX . "seo_url` WHERE `query` LIKE '%information_id=%' AND `language_id`=" . $language_id . "");

                $ids = $this->db->query("SELECT i.information_id FROM `" . DB_PREFIX . "information` i")->rows;
               
                $result = $this->SeoInformationURLs($ids, $language_id);
                return $result;
            default:
                return true;
                break;
        }
        
    }
    
    private function SeoProductURLs($product_ids = array(), $language_id) {
        $pattern    = $this->getSetting('product_url_string');
        $search     = array('[product]', '[model]', '[sku]', '[upc]', '[random]', '[lang]', '[manufacturer]', '[id]');
        $counter    = 0;
        $items      = array();
        
        $language_code = $this->db->query("SELECT `code` FROM `" . DB_PREFIX . "language` WHERE `language_id` = '".$language_id."'")->row['code'];

        foreach ($product_ids as $id) {
            $product_info = $this->db->query("SELECT p.*, pd.*, m.name as manufacturer FROM `" . DB_PREFIX . "product` p LEFT JOIN `" . DB_PREFIX . "product_description` pd on (p.product_id=pd.product_id AND pd.language_id=" . $language_id . ") LEFT JOIN `" . DB_PREFIX . "manufacturer` m on (p.manufacturer_id=m.manufacturer_id) WHERE p.product_id=" . $id['product_id'] . " LIMIT 1")->row;

            $replace = array($product_info['name'], $product_info['model'], $product_info['sku'], $product_info['upc'], rand(), $language_code, $product_info['manufacturer'], $product_info['product_id']);

            $string = str_replace($search, $replace, $pattern);
            $generated_slug = $this->formatSEOUrl($string);

            $slug_exists = $this->db->query("SELECT `query` FROM `" . DB_PREFIX . "seo_url` WHERE `keyword` = '" . $generated_slug . "'")->num_rows;
            if ($slug_exists > 0) {
                $generated_slug = $generated_slug.'-'.rand();
            }

            $this->db->query("INSERT INTO `" . DB_PREFIX . "seo_url` (query, keyword, language_id) VALUES ('product_id=" . $id['product_id'] . "', '" . $generated_slug . "', " . $language_id . ")");

            $counter++;
            $items[$product_info['product_id']] = array('name' => $product_info['name'], 'result' => $generated_slug);
        }
        
        return array('counter' => $counter, 'items' => $items);
    }
    
    private function SeoCategoryURLs($category_ids = array(), $language_id) {
        $pattern    = $this->getSetting('category_url_string');
        $search     = array('[category]', '[random]', '[lang]');
        $counter    = 0;
        $items      = array();
        
        $language_code = $this->db->query("SELECT `code` FROM `" . DB_PREFIX . "language` WHERE `language_id` = '".$language_id."'")->row['code'];
        
        foreach ($category_ids as $id) {
            $category_info = $this->db->query("SELECT cd.* FROM `" . DB_PREFIX . "category_description` cd WHERE cd.category_id=" . $id['category_id'] . " AND cd.language_id=" . $language_id . " LIMIT 1")->row;

            $replace = array($category_info['name'], rand(), $language_code);

            $string = str_replace($search, $replace, $pattern);
            $generated_slug = $this->formatSEOUrl($string);

            $slug_exists = $this->db->query("SELECT `query` FROM `" . DB_PREFIX . "seo_url` WHERE `keyword` = '" . $generated_slug . "'")->num_rows;
            if ($slug_exists > 0) {
                $generated_slug = $generated_slug.'-'.rand();
            }

            $this->db->query("INSERT INTO `" . DB_PREFIX . "seo_url` (query, keyword, language_id) VALUES ('category_id=" . $id['category_id'] . "', '" . $generated_slug . "', " . $language_id . ")");

            $counter++;
            $items[$category_info['category_id']] = array('name' => $category_info['name'], 'result' => $generated_slug);
        }
        
        return array('counter' => $counter, 'items' => $items);
    }
    
    private function SeoManufacturerURLs($manufacturer_ids = array(), $language_id) {
        $pattern    = $this->getSetting('manufacturer_url_string');
        $search     = array('[manufacturer]', '[random]', '[lang]');
        $counter    = 0;
        $items      = array();
        
        $language_code = $this->db->query("SELECT `code` FROM `" . DB_PREFIX . "language` WHERE `language_id` = '".$language_id."'")->row['code'];
        
        foreach ($manufacturer_ids as $id) {
            $manufacturer_info = $this->db->query("SELECT m.* FROM `" . DB_PREFIX . "manufacturer` m WHERE m.manufacturer_id=" . $id['manufacturer_id'] . " LIMIT 1")->row;

            $replace = array($manufacturer_info['name'], rand(), $language_code);

            $string = str_replace($search, $replace, $pattern);
            $generated_slug = $this->formatSEOUrl($string);

            $slug_exists = $this->db->query("SELECT `query` FROM `" . DB_PREFIX . "seo_url` WHERE `keyword` = '" . $generated_slug . "'")->num_rows;
            if ($slug_exists > 0) {
                $generated_slug = $generated_slug.'-'.rand();
            }

            $this->db->query("INSERT INTO `" . DB_PREFIX . "seo_url` (query, keyword, language_id) VALUES ('manufacturer_id=" . $id['manufacturer_id'] . "', '" . $generated_slug . "', " . $language_id . ")");

            $counter++;
            $items[$manufacturer_info['manufacturer_id']] = array('name' => $manufacturer_info['name'], 'result' => $generated_slug);
        }
        
        return array('counter' => $counter, 'items' => $items);
    }
    
    private function SeoInformationURLs($information_ids = array(), $language_id) {
        $pattern    = $this->getSetting('information_url_string');
        $search     = array('[information]', '[random]', '[lang]');
        $counter    = 0;
        
        $language_code = $this->db->query("SELECT `code` FROM `" . DB_PREFIX . "language` WHERE `language_id` = '".$language_id."'")->row['code'];
        
        foreach ($information_ids as $id) {
            $information_info = $this->db->query("SELECT id.* FROM `" . DB_PREFIX . "information_description` id WHERE id.information_id=" . $id['information_id'] . " AND id.language_id=" . $language_id . " LIMIT 1")->row;
            
            if (!empty($information_info) && !empty($information_info['title'])) {
                $replace = array($information_info['title'], rand(), $language_code);

                $string = str_replace($search, $replace, $pattern);
                $generated_slug = $this->formatSEOUrl($string);

                $slug_exists = $this->db->query("SELECT `query` FROM `" . DB_PREFIX . "seo_url` WHERE `keyword` = '" . $generated_slug . "'")->num_rows;
                if ($slug_exists > 0) {
                    $generated_slug = $generated_slug.'-'.rand();
                }

                $this->db->query("INSERT INTO `" . DB_PREFIX . "seo_url` (query, keyword, language_id) VALUES ('information_id=" . $id['information_id'] . "', '" . $generated_slug . "', " . $language_id . ")");

                $counter++;
                $items[$information_info['information_id']] = array('name' => $information_info['title'], 'result' => $generated_slug);
            }
        }
        
        return array('counter' => $counter, 'items' => $items);
    }
    
    public function checkSEOTitlesCount() {
        $this->load->model('localisation/language');
		$languages                                  = $this->model_localisation_language->getLanguages();
        $total_products                             = array();
        $total_products_with_meta_titles            = array();
        $total_categories                           = array();
        $total_categories_with_meta_titles          = array();
        $total_informations                         = array();
        $total_informations_with_meta_titles        = array();
        $total_manufacturers                        = array();
        $total_manufacturers_with_meta_titles       = array();
        $total_products_difference                  = array();
        $total_categories_difference                = array();
        $total_informations_difference              = array();
        $total_manufacturers_difference             = array();
        
        foreach ($languages as $language) { 
            $total_products[$language['language_id']]       = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "product`")->row['count'];
            $total_products_with_meta_titles[$language['language_id']] = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "product_description` WHERE `meta_title` != '' AND `language_id` = " . $language['language_id'] . "")->row['count'];
            $total_products_difference[$language['language_id']] = $total_products[$language['language_id']]-$total_products_with_meta_titles[$language['language_id']];

            $total_categories[$language['language_id']]     = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "category`")->row['count'];
            $total_categories_with_meta_titles[$language['language_id']] = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "category_description` WHERE `meta_title` != '' AND `language_id` = " . $language['language_id'] . "")->row['count'];
            $total_categories_difference[$language['language_id']] = $total_categories[$language['language_id']]-$total_categories_with_meta_titles[$language['language_id']];

            $total_informations[$language['language_id']]   = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "information`")->row['count'];
            $total_informations_with_meta_titles[$language['language_id']] = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "information_description` WHERE `meta_title` != '' AND `language_id` = " . $language['language_id'] . "")->row['count'];
            $total_informations_difference[$language['language_id']] = $total_informations[$language['language_id']]-$total_informations_with_meta_titles[$language['language_id']];
            
            $total_manufacturers[$language['language_id']]   = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "manufacturer`")->row['count'];
            $total_manufacturers_with_meta_titles[$language['language_id']] = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "seo_manufacturer_description` WHERE `meta_title` != '' AND `language_id` = " . $language['language_id'] . "")->row['count'];
            $total_manufacturers_difference[$language['language_id']] = $total_manufacturers[$language['language_id']]-$total_manufacturers_with_meta_titles[$language['language_id']];
        }
        
        return array(
            'total_products'                => $total_products,
            'total_products_meta'           => $total_products_with_meta_titles,
            'total_categories'              => $total_categories,
            'total_categories_meta'         => $total_categories_with_meta_titles,
            'total_informations'            => $total_informations,
            'total_informations_meta'       => $total_informations_with_meta_titles,
            'total_manufacturers'           => $total_manufacturers,
            'total_manufacturers_meta'      => $total_manufacturers_with_meta_titles,
            'total_products_difference'     => $total_products_difference,
            'total_categories_difference'   => $total_categories_difference,
            'total_informations_difference' => $total_informations_difference,
            'total_manufacturers_difference' => $total_manufacturers_difference
        );
    }
    
    public function createSEOTitles($type = '', $language_id = '1') {
        $ids = array();
        $pattern = '';
        
        switch($type) {
            case "categories":
                $ids = $this->db->query("SELECT c.category_id FROM `" . DB_PREFIX . "category_description` c WHERE c.meta_title='' AND `language_id`=" . $language_id . "")->rows;

                $result = $this->SeoCategoryTitles($ids, $language_id);
                return $result;
            case "categories_all":
                $ids = $this->db->query("SELECT c.category_id FROM `" . DB_PREFIX . "category_description` c WHERE `language_id`=" . $language_id . "")->rows;

                $result = $this->SeoCategoryTitles($ids, $language_id);
                return $result;
            case "products":
                $ids = $this->db->query("SELECT p.product_id FROM `" . DB_PREFIX . "product_description` p WHERE p.meta_title='' AND `language_id`=" . $language_id . "")->rows;
                
                $result = $this->SeoProductTitles($ids, $language_id);
                return $result;
            case "products_all":
                $ids = $this->db->query("SELECT p.product_id FROM `" . DB_PREFIX . "product_description` p WHERE `language_id`=" . $language_id . "")->rows;
                
                $result = $this->SeoProductTitles($ids, $language_id);
                return $result;
            case "informations":
                $ids = $this->db->query("SELECT i.information_id FROM `" . DB_PREFIX . "information_description` i WHERE i.meta_title='' AND `language_id`=" . $language_id . "")->rows;
               
                $result = $this->SeoInformationTitles($ids, $language_id);
                return $result;
            case "informations_all":
                $ids = $this->db->query("SELECT i.information_id FROM `" . DB_PREFIX . "information_description` i WHERE `language_id`=" . $language_id . "")->rows;
               
                $result = $this->SeoInformationTitles($ids, $language_id);
                return $result;
            case "manufacturers":
                $ids = $this->db->query("SELECT m.manufacturer_id FROM `" . DB_PREFIX . "manufacturer` m WHERE m.manufacturer_id NOT IN (SELECT manufacturer_id FROM `" . DB_PREFIX . "seo_manufacturer_description` smd WHERE m.manufacturer_id=manufacturer_id AND meta_title!='' AND `language_id`=" . $language_id . ")")->rows;

                $result = $this->SeoManufacturerTitles($ids, $language_id);
                return $result;
            case "manufacturers_all":
                $this->db->query("UPDATE `" . DB_PREFIX . "seo_manufacturer_description` SET `meta_title` = '' WHERE `language_id` = '" . $language_id . "'");
                
                $ids = $this->db->query("SELECT m.manufacturer_id FROM `" . DB_PREFIX . "manufacturer` m")->rows;
               
                $result = $this->SeoManufacturerTitles($ids, $language_id);
                return $result;
            default:
                return true;
        }
    }
    
    private function SeoProductTitles($product_ids = array(), $language_id) {
        $pattern    = $this->getSetting('product_title_string');
        $search     = array('[product]', '[model]', '[sku]', '[upc]', '[site_name]');
        $counter    = 0;
        $site_name  = '';
        $items      = array();
        
        foreach ($product_ids as $id) {
            $product_info = $this->db->query("SELECT p.*, pd.* FROM `" . DB_PREFIX . "product` p LEFT JOIN `" . DB_PREFIX . "product_description` pd on (p.product_id=pd.product_id AND pd.language_id=" . $language_id . ") WHERE p.product_id=" . $id['product_id'] . " LIMIT 1")->row;
            
            if (!empty($product_info['name'])) {
                $site_name = $this->getSiteName($language_id);

                $replace = array($product_info['name'], $product_info['model'], $product_info['sku'], $product_info['upc'], $site_name);

                $string = str_replace($search, $replace, $pattern);

                $this->db->query("UPDATE `" . DB_PREFIX . "product_description` SET `meta_title`='" . $this->db->escape($string) . "' WHERE `product_id`=" . $id['product_id'] . " AND `language_id` = '" . $language_id . "'");

                $counter++;
                $items[$product_info['product_id']] = array('name' => $product_info['name'], 'result' => $string);
            }
        }
        
        return array('counter' => $counter, 'items' => $items);
    }
    
    private function SeoCategoryTitles($category_ids = array(), $language_id) {
        $pattern    = $this->getSetting('category_title_string');
        $search     = array('[category]','[site_name]');
        $counter    = 0;
        $site_name  = '';
        $items      = array();
        
        foreach ($category_ids as $id) {
            $category_info = $this->db->query("SELECT cd.* FROM `" . DB_PREFIX . "category_description` cd WHERE cd.category_id=" . $id['category_id'] . " AND cd.language_id=" . $language_id . " LIMIT 1")->row;
            
            if (!empty($category_info['name'])) {
                $site_name = $this->getSiteName($language_id);

                $replace = array($category_info['name'], $site_name);

                $string = str_replace($search, $replace, $pattern);

                $this->db->query("UPDATE `" . DB_PREFIX . "category_description` SET `meta_title`='" . $this->db->escape($string) . "' WHERE `category_id`=" . $id['category_id'] . " AND `language_id` = '" . $language_id . "'");

                $counter++;
                $items[$category_info['category_id']] = array('name' => $category_info['name'], 'result' => $string);
            }
        }
        
        return array('counter' => $counter, 'items' => $items);
    }
    
    private function SeoInformationTitles($information_ids = array(), $language_id) {
        $pattern    = $this->getSetting('information_title_string');
        $search     = array('[information]','[site_name]');
        $counter    = 0;
        $site_name  = '';
        $items      = '';

        foreach ($information_ids as $id) {
            $information_info = $this->db->query("SELECT i.* FROM `" . DB_PREFIX . "information_description` i WHERE i.information_id=" . $id['information_id'] . " AND i.language_id=" . $language_id . " LIMIT 1")->row;
            
            if (!empty($information_info['title'])) {
                $site_name = $this->getSiteName($language_id);

                $replace = array($information_info['title'], $site_name);

                $string = str_replace($search, $replace, $pattern);

                $this->db->query("UPDATE `" . DB_PREFIX . "information_description` SET `meta_title`='" . $this->db->escape($string) . "' WHERE `information_id`=" . $id['information_id'] . " AND `language_id` = '" . $language_id . "'");

                $counter++;
                $items[$information_info['information_id']] = array('name' => $information_info['title'], 'result' => $string);
            }
        }
        
        return array('counter' => $counter, 'items' => $items);
    }
    
    private function SeoManufacturerTitles($manufacturer_ids = array(), $language_id) {
        $pattern    = $this->getSetting('manufacturer_title_string');
        $search     = array('[manufacturer]','[site_name]');
        $counter    = 0;
        $site_name  = '';
        $items      = '';

        foreach ($manufacturer_ids as $id) {
            $manufacturer_info = $this->db->query("SELECT m.* FROM `" . DB_PREFIX . "manufacturer` m WHERE m.manufacturer_id=" . $id['manufacturer_id'] . " LIMIT 1")->row;
            $manufacturer_description = $this->db->query("SELECT m.* FROM `" . DB_PREFIX . "seo_manufacturer_description` m WHERE m.manufacturer_id=" . $id['manufacturer_id'] . " AND `language_id` = '" . $language_id . "' LIMIT 1");
            
            if (!empty($manufacturer_info['name'])) {
                $site_name = $this->getSiteName($language_id);

                $replace = array($manufacturer_info['name'], $site_name);

                $string = str_replace($search, $replace, $pattern);
                
                if ($manufacturer_description->num_rows == 0) {
                    $this->db->query("INSERT `" . DB_PREFIX . "seo_manufacturer_description` SET `meta_title`='" . $this->db->escape($string) . "', `manufacturer_id`='" . $id['manufacturer_id'] . "', `language_id` = '" . $language_id . "'");
                } else {
                    $this->db->query("UPDATE `" . DB_PREFIX . "seo_manufacturer_description` SET `meta_title`='" . $this->db->escape($string) . "' WHERE `manufacturer_id`='" . $id['manufacturer_id'] . "' AND `language_id` = '" . $language_id . "'");
                }
                
                $counter++;
                $items[$manufacturer_info['manufacturer_id']] = array('name' => $manufacturer_info['name'], 'result' => $string);
            }
        }
        
        return array('counter' => $counter, 'items' => $items);
    }
    
    public function checkSEODescriptionsCount() {
        $this->load->model('localisation/language');
		$languages                                  = $this->model_localisation_language->getLanguages();
        $total_products                             = array();
        $total_products_with_meta_descriptions      = array();
        $total_categories                           = array();
        $total_categories_with_meta_descriptions    = array();
        $total_informations                         = array();
        $total_informations_with_meta_descriptions  = array();
        $total_manufacturers                        = array();
        $total_manufacturers_with_meta_descriptions = array();
        $total_products_difference                  = array();
        $total_categories_difference                = array();
        $total_informations_difference              = array();
        $total_manufacturers_difference             = array();
        
        foreach ($languages as $language) { 
            $total_products[$language['language_id']]       = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "product`")->row['count'];
            $total_products_with_meta_descriptions[$language['language_id']] = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "product_description` WHERE `meta_description` != '' AND `language_id` = " . $language['language_id'] . "")->row['count'];
            $total_products_difference[$language['language_id']] = $total_products[$language['language_id']]-$total_products_with_meta_descriptions[$language['language_id']];

            $total_categories[$language['language_id']]     = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "category`")->row['count'];
            $total_categories_with_meta_descriptions[$language['language_id']] = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "category_description` WHERE `meta_description` != '' AND `language_id` = " . $language['language_id'] . "")->row['count'];
            $total_categories_difference[$language['language_id']] = $total_categories[$language['language_id']]-$total_categories_with_meta_descriptions[$language['language_id']];

            $total_informations[$language['language_id']]   = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "information`")->row['count'];
            $total_informations_with_meta_descriptions[$language['language_id']] = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "information_description` WHERE `meta_description` != '' AND `language_id` = " . $language['language_id'] . "")->row['count'];
            $total_informations_difference[$language['language_id']] = $total_informations[$language['language_id']]-$total_informations_with_meta_descriptions[$language['language_id']];
            
            $total_manufacturers[$language['language_id']]   = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "manufacturer`")->row['count'];
            $total_manufacturers_with_meta_descriptions[$language['language_id']] = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "seo_manufacturer_description` WHERE `meta_description` != '' AND `language_id` = " . $language['language_id'] . "")->row['count'];
            $total_manufacturers_difference[$language['language_id']] = $total_manufacturers[$language['language_id']]-$total_manufacturers_with_meta_descriptions[$language['language_id']];

        }
        
        return array(
            'total_products'                => $total_products,
            'total_products_meta'           => $total_products_with_meta_descriptions,
            'total_categories'              => $total_categories,
            'total_categories_meta'         => $total_categories_with_meta_descriptions,
            'total_informations'            => $total_informations,
            'total_informations_meta'       => $total_informations_with_meta_descriptions,
            'total_manufacturers'           => $total_manufacturers,
            'total_manufacturers_meta'      => $total_manufacturers_with_meta_descriptions,
            'total_products_difference'     => $total_products_difference,
            'total_categories_difference'   => $total_categories_difference,
            'total_informations_difference' => $total_informations_difference,
            'total_manufacturers_difference' => $total_manufacturers_difference
        );
    }
    
    public function createSEODescriptions($type = '', $language_id = '1') {
        $ids = array();
        $pattern = '';
        
        switch($type) {
            case "categories":
                $ids = $this->db->query("SELECT c.category_id FROM `" . DB_PREFIX . "category_description` c WHERE c.meta_description='' AND `language_id`=" . $language_id . "")->rows;

                $result = $this->SeoCategoryDescriptions($ids, $language_id);
                return $result;
            case "categories_all":
                $ids = $this->db->query("SELECT c.category_id FROM `" . DB_PREFIX . "category_description` c WHERE `language_id`=" . $language_id . "")->rows;

                $result = $this->SeoCategoryDescriptions($ids, $language_id);
                return $result;
            case "products":
                $ids = $this->db->query("SELECT p.product_id FROM `" . DB_PREFIX . "product_description` p WHERE p.meta_description='' AND `language_id`=" . $language_id . "")->rows;
                
                $result = $this->SeoProductDescriptions($ids, $language_id);
                return $result;
            case "products_all":
                $ids = $this->db->query("SELECT p.product_id FROM `" . DB_PREFIX . "product_description` p WHERE `language_id`=" . $language_id . "")->rows;
                
                $result = $this->SeoProductDescriptions($ids, $language_id);
                return $result;
            case "informations":
                $ids = $this->db->query("SELECT i.information_id FROM `" . DB_PREFIX . "information_description` i WHERE i.meta_description='' AND `language_id`=" . $language_id . "")->rows;
               
                $result = $this->SeoInformationDescriptions($ids, $language_id);
                return $result;
            case "informations_all":
                $ids = $this->db->query("SELECT i.information_id FROM `" . DB_PREFIX . "information_description` i WHERE `language_id`=" . $language_id . "")->rows;
               
                $result = $this->SeoInformationDescriptions($ids, $language_id);
                return $result;
            case "manufacturers":
                $ids = $this->db->query("SELECT m.manufacturer_id FROM `" . DB_PREFIX . "manufacturer` m WHERE m.manufacturer_id NOT IN (SELECT manufacturer_id FROM `" . DB_PREFIX . "seo_manufacturer_description` smd WHERE m.manufacturer_id=manufacturer_id AND meta_description!='' AND `language_id`=" . $language_id . ")")->rows;

                $result = $this->SeoManufacturerDescriptions($ids, $language_id);
                return $result;
            case "manufacturers_all":
                $this->db->query("UPDATE `" . DB_PREFIX . "seo_manufacturer_description` SET `meta_description` = '' WHERE `language_id` = '" . $language_id . "'");
                
                $ids = $this->db->query("SELECT m.manufacturer_id FROM `" . DB_PREFIX . "manufacturer` m")->rows;
               
                $result = $this->SeoManufacturerDescriptions($ids, $language_id);
                return $result;
            default:
                return true;
        }
    }
    
    private function SeoProductDescriptions($product_ids = array(), $language_id) {
        $pattern    = $this->getSetting('product_description_string');
        $wordLimit  = $this->getSetting('meta_description_word_limit');
        $search     = array('[product]', '[description]', '[model]', '[sku]', '[upc]', '[site_name]');
        $counter    = 0;
        $site_name  = '';
        $items      = '';
        
        foreach ($product_ids as $id) {
            $product_info = $this->db->query("SELECT p.*, pd.* FROM `" . DB_PREFIX . "product` p LEFT JOIN `" . DB_PREFIX . "product_description` pd on (p.product_id=pd.product_id AND pd.language_id=" . $language_id . ") WHERE p.product_id=" . $id['product_id'] . " LIMIT 1")->row;
            
            if (!empty($product_info)) {
                $site_name = $this->getSiteName($language_id);

                if (empty($product_info['description'])) continue;
                $description = $this->formatMetaDescription($product_info['description'], $wordLimit);

                $replace = array($product_info['name'], $description, $product_info['model'], $product_info['sku'], $product_info['upc'], $site_name);

                $string = str_replace($search, $replace, $pattern);

                $this->db->query("UPDATE `" . DB_PREFIX . "product_description` SET `meta_description`='" . $this->db->escape($string) . "' WHERE `product_id`=" . $id['product_id'] . " AND `language_id` = '" . $language_id . "'");

                $counter++;
                $items[$product_info['product_id']] = array('name' => $product_info['name'], 'result' => $string);
            }
        }
        
        return array('counter' => $counter, 'items' => $items);
    }
    
    private function SeoCategoryDescriptions($category_ids = array(), $language_id) {
        $pattern    = $this->getSetting('category_description_string');
        $wordLimit  = $this->getSetting('meta_description_word_limit');
        $search     = array('[category]','[description]','[site_name]');
        $counter    = 0;
        $site_name  = '';
        $items      = '';

        foreach ($category_ids as $id) {
            $category_info = $this->db->query("SELECT cd.* FROM `" . DB_PREFIX . "category_description` cd WHERE cd.category_id=" . $id['category_id'] . " AND cd.language_id=" . $language_id . " LIMIT 1")->row;
            
            if (!empty($category_info)) {
                $site_name = $this->getSiteName($language_id);

                if (empty($category_info['description'])) {
                    $description = $this->formatMetaDescription($category_info['name'], $wordLimit);
                } else {
                    $description = $this->formatMetaDescription($category_info['description'], $wordLimit);
                }

                $replace = array($category_info['name'], $description, $site_name);

                $string = str_replace($search, $replace, $pattern);

                $this->db->query("UPDATE `" . DB_PREFIX . "category_description` SET `meta_description`='" . $this->db->escape($string) . "' WHERE `category_id`=" . $id['category_id'] . " AND `language_id` = '" . $language_id . "'");

                $counter++;
                $items[$category_info['category_id']] = array('name' => $category_info['name'], 'result' => $string);
            }
        }
        
        return array('counter' => $counter, 'items' => $items);
    }
    
    private function SeoInformationDescriptions($information_ids = array(), $language_id) {
        $pattern    = $this->getSetting('information_description_string');
        $wordLimit  = $this->getSetting('meta_description_word_limit');
        $search     = array('[information]','[description]','[site_name]');
        $counter    = 0;
        $site_name  = '';
        $items      = '';

        foreach ($information_ids as $id) {
            $information_info = $this->db->query("SELECT i.* FROM `" . DB_PREFIX . "information_description` i WHERE i.information_id=" . $id['information_id'] . " AND i.language_id=" . $language_id . " LIMIT 1")->row;
            
            if (!empty($information_info)) {
                $site_name = $this->getSiteName($language_id);

                if (empty($information_info['description'])) continue;
                $description = $this->formatMetaDescription($information_info['description'], $wordLimit);

                $replace = array($information_info['title'], $description, $site_name);

                $string = str_replace($search, $replace, $pattern);

                $this->db->query("UPDATE `" . DB_PREFIX . "information_description` SET `meta_description`='" . $this->db->escape($string) . "' WHERE `information_id`=" . $id['information_id'] . " AND `language_id` = '" . $language_id . "'");

                $counter++;
                $items[$information_info['information_id']] = array('name' => $information_info['title'], 'result' => $string);
            }
        }
        
        return array('counter' => $counter, 'items' => $items);
    }
    
    private function SeoManufacturerDescriptions($manufacturer_ids = array(), $language_id) {
        $pattern    = $this->getSetting('manufacturer_description_string');
        $wordLimit  = $this->getSetting('meta_description_word_limit');
        $search     = array('[manufacturer]','[site_name]');
        $counter    = 0;
        $site_name  = '';
        $items      = '';
        
        foreach ($manufacturer_ids as $id) {
            $manufacturer_info = $this->db->query("SELECT m.* FROM `" . DB_PREFIX . "manufacturer` m WHERE m.manufacturer_id=" . $id['manufacturer_id'] . " LIMIT 1")->row;
            $manufacturer_description = $this->db->query("SELECT m.* FROM `" . DB_PREFIX . "seo_manufacturer_description` m WHERE m.manufacturer_id=" . $id['manufacturer_id'] . " AND `language_id` = '" . $language_id . "' LIMIT 1");
            
            if (!empty($manufacturer_info['name'])) {
                $site_name = $this->getSiteName($language_id);

                $replace = array($manufacturer_info['name'], $site_name);

                $string = str_replace($search, $replace, $pattern);
                
                if ($manufacturer_description->num_rows == 0) {
                    $this->db->query("INSERT `" . DB_PREFIX . "seo_manufacturer_description` SET `meta_description`='" . $this->db->escape($string) . "', `manufacturer_id`='" . $id['manufacturer_id'] . "', `language_id` = '" . $language_id . "'");
                } else {
                    $this->db->query("UPDATE `" . DB_PREFIX . "seo_manufacturer_description` SET `meta_description`='" . $this->db->escape($string) . "' WHERE `manufacturer_id`='" . $id['manufacturer_id'] . "' AND `language_id` = '" . $language_id . "'");
                }
                
                $counter++;
                $items[$manufacturer_info['manufacturer_id']] = array('name' => $manufacturer_info['name'], 'result' => $string);
            }
        }
        
        return array('counter' => $counter, 'items' => $items);
    }
    
    public function checkSEOKeywordsCount() {
        $this->load->model('localisation/language');
		$languages                                  = $this->model_localisation_language->getLanguages();
        $total_products                             = array();
        $total_products_with_meta_keywords          = array();
        $total_categories                           = array();
        $total_categories_with_meta_keywords        = array();
        $total_informations                         = array();
        $total_informations_with_meta_keywords      = array();
        $total_manufacturers                        = array();
        $total_manufacturers_with_meta_keywords     = array();
        $total_products_difference                  = array();
        $total_categories_difference                = array();
        $total_informations_difference              = array();
        $total_manufacturers_difference             = array();
        
        foreach ($languages as $language) { 
            $total_products[$language['language_id']]       = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "product`")->row['count'];
            $total_products_with_meta_keywords[$language['language_id']] = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "product_description` WHERE `meta_keyword` != '' AND `language_id` = " . $language['language_id'] . "")->row['count'];
            $total_products_difference[$language['language_id']] = $total_products[$language['language_id']]-$total_products_with_meta_keywords[$language['language_id']];

            $total_categories[$language['language_id']]     = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "category`")->row['count'];
            $total_categories_with_meta_keywords[$language['language_id']] = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "category_description` WHERE `meta_keyword` != '' AND `language_id` = " . $language['language_id'] . "")->row['count'];
            $total_categories_difference[$language['language_id']] = $total_categories[$language['language_id']]-$total_categories_with_meta_keywords[$language['language_id']];

            $total_informations[$language['language_id']]   = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "information`")->row['count'];
            $total_informations_with_meta_keywords[$language['language_id']] = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "information_description` WHERE `meta_keyword` != '' AND `language_id` = " . $language['language_id'] . "")->row['count'];
            $total_informations_difference[$language['language_id']] = $total_informations[$language['language_id']]-$total_informations_with_meta_keywords[$language['language_id']];
            
            $total_manufacturers[$language['language_id']]   = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "manufacturer`")->row['count'];
            $total_manufacturers_with_meta_keywords[$language['language_id']] = $this->db->query("SELECT count(*) as `count` FROM `" . DB_PREFIX . "seo_manufacturer_description` WHERE `meta_keyword` != '' AND `language_id` = " . $language['language_id'] . "")->row['count'];
            $total_manufacturers_difference[$language['language_id']] = $total_manufacturers[$language['language_id']]-$total_manufacturers_with_meta_keywords[$language['language_id']];
        }
        
        return array(
            'total_products'                => $total_products,
            'total_products_meta'           => $total_products_with_meta_keywords,
            'total_categories'              => $total_categories,
            'total_categories_meta'         => $total_categories_with_meta_keywords,
            'total_informations'            => $total_informations,
            'total_informations_meta'       => $total_informations_with_meta_keywords,
            'total_manufacturers'           => $total_manufacturers,
            'total_manufacturers_meta'      => $total_manufacturers_with_meta_keywords,
            'total_products_difference'     => $total_products_difference,
            'total_categories_difference'   => $total_categories_difference,
            'total_informations_difference' => $total_informations_difference,
            'total_manufacturers_difference' => $total_manufacturers_difference
        );
    }
    
    public function createSEOKeywords($type = '', $language_id = '1') {
        $ids = array();
        $pattern = '';
        
        switch($type) {
            case "categories":
                $ids = $this->db->query("SELECT c.category_id FROM `" . DB_PREFIX . "category_description` c WHERE c.meta_keyword='' AND `language_id`=" . $language_id . "")->rows;

                $result = $this->SeoCategoryKeywords($ids, $language_id);
                return $result;
            case "categories_all":
                $ids = $this->db->query("SELECT c.category_id FROM `" . DB_PREFIX . "category_description` c WHERE `language_id`=" . $language_id . "")->rows;

                $result = $this->SeoCategoryKeywords($ids, $language_id);
                return $result;
            case "products":
                $ids = $this->db->query("SELECT p.product_id FROM `" . DB_PREFIX . "product_description` p WHERE p.meta_keyword='' AND `language_id`=" . $language_id . "")->rows;
                
                $result = $this->SeoProductKeywords($ids, $language_id);
                return $result;
            case "products_all":
                $ids = $this->db->query("SELECT p.product_id FROM `" . DB_PREFIX . "product_description` p WHERE `language_id`=" . $language_id . "")->rows;
                
                $result = $this->SeoProductKeywords($ids, $language_id);
                return $result;
            case "informations":
                $ids = $this->db->query("SELECT i.information_id FROM `" . DB_PREFIX . "information_description` i WHERE i.meta_keyword='' AND `language_id`=" . $language_id . "")->rows;
               
                $result = $this->SeoInformationKeywords($ids, $language_id);
                return $result;
            case "informations_all":
                $ids = $this->db->query("SELECT i.information_id FROM `" . DB_PREFIX . "information_description` i WHERE `language_id`=" . $language_id . "")->rows;
               
                $result = $this->SeoInformationKeywords($ids, $language_id);
                return $result;
            case "manufacturers":
                $ids = $this->db->query("SELECT m.manufacturer_id FROM `" . DB_PREFIX . "manufacturer` m WHERE m.manufacturer_id NOT IN (SELECT manufacturer_id FROM `" . DB_PREFIX . "seo_manufacturer_description` smd WHERE m.manufacturer_id=manufacturer_id AND meta_keyword!='' AND `language_id`=" . $language_id . ")")->rows;

                $result = $this->SeoManufacturerKeywords($ids, $language_id);
                return $result;
            case "manufacturers_all":
                $this->db->query("UPDATE `" . DB_PREFIX . "seo_manufacturer_description` SET `meta_keyword` = '' WHERE `language_id` = '" . $language_id . "'");
                
                $ids = $this->db->query("SELECT m.manufacturer_id FROM `" . DB_PREFIX . "manufacturer` m")->rows;
               
                $result = $this->SeoManufacturerKeywords($ids, $language_id);
                return $result;
            default:
                return true;
        }
    }
    
    private function SeoProductKeywords($product_ids = array(), $language_id) {
        $pattern    = $this->getSetting('product_keyword_string');
        $search     = array('[product]', '[model]', '[sku]', '[upc]', '[site_name]');
        $counter    = 0;
        $site_name  = '';
        $items      = '';
        
        foreach ($product_ids as $id) {
            $product_info = $this->db->query("SELECT p.*, pd.* FROM `" . DB_PREFIX . "product` p LEFT JOIN `" . DB_PREFIX . "product_description` pd on (p.product_id=pd.product_id AND pd.language_id=" . $language_id . ") WHERE p.product_id=" . $id['product_id'] . " LIMIT 1")->row;
            
            if (!empty($product_info)) {
                $site_name = $this->getSiteName($language_id);

                $replace = array($product_info['name'], $product_info['model'], $product_info['sku'], $product_info['upc'], $site_name);
                $string = str_replace($search, $replace, $pattern);

                $string = $this->formatMetaKeywords($string);

                $this->db->query("UPDATE `" . DB_PREFIX . "product_description` SET `meta_keyword`='" . $this->db->escape($string) . "' WHERE `product_id`=" . $id['product_id'] . " AND `language_id` = '" . $language_id . "'");

                $counter++;
                $items[$product_info['product_id']] = array('name' => $product_info['name'], 'result' => $string);
            }
        }
        
        return array('counter' => $counter, 'items' => $items);
    }
    
    private function SeoCategoryKeywords($category_ids = array(), $language_id) {
        $pattern    = $this->getSetting('category_keyword_string');
        $search     = array('[category]', '[site_name]');
        $counter    = 0;
        $site_name  = '';
        $items      = '';
        
        foreach ($category_ids as $id) {
            $category_info = $this->db->query("SELECT cd.* FROM `" . DB_PREFIX . "category_description` cd WHERE cd.category_id=" . $id['category_id'] . " AND cd.language_id=" . $language_id . " LIMIT 1")->row;
            
            if (!empty($category_info)) {
                $site_name = $this->getSiteName($language_id);

                $replace = array($category_info['name'], $site_name);
                $string = str_replace($search, $replace, $pattern);

                $string = $this->formatMetaKeywords($string);

                $this->db->query("UPDATE `" . DB_PREFIX . "category_description` SET `meta_keyword`='" . $this->db->escape($string) . "' WHERE `category_id`=" . $id['category_id'] . " AND `language_id` = '" . $language_id . "'");

                $counter++;
                $items[$category_info['category_id']] = array('name' => $category_info['name'], 'result' => $string);
            }
        }
        
        return array('counter' => $counter, 'items' => $items);
    }
    
    private function SeoInformationKeywords($information_ids = array(), $language_id) {
        $pattern    = $this->getSetting('information_keyword_string');
        $search     = array('[information]', '[site_name]');
        $counter    = 0;
        $site_name  = '';
        $items      = '';

        foreach ($information_ids as $id) {
            $information_info = $this->db->query("SELECT i.* FROM `" . DB_PREFIX . "information_description` i WHERE i.information_id=" . $id['information_id'] . " AND i.language_id=" . $language_id . " LIMIT 1")->row;
            
            if (!empty($information_info)) {
                $site_name = $this->getSiteName($language_id);

                $replace = array($information_info['title'], $site_name);
                $string = str_replace($search, $replace, $pattern);

                $string = $this->formatMetaKeywords($string);

                $this->db->query("UPDATE `" . DB_PREFIX . "information_description` SET `meta_keyword`='" . $this->db->escape($string) . "' WHERE `information_id`=" . $id['information_id'] . " AND `language_id` = '" . $language_id . "'");

                $counter++;
                $items[$information_info['information_id']] = array('name' => $information_info['title'], 'result' => $string);
            }
        }
        
        return array('counter' => $counter, 'items' => $items);
    }
    
    private function SeoManufacturerKeywords($manufacturer_ids = array(), $language_id) {
        $pattern    = $this->getSetting('manufacturer_keyword_string');
        $search     = array('[manufacturer]', '[site_name]');
        $counter    = 0;
        $site_name  = '';
        $items      = '';
        
        foreach ($manufacturer_ids as $id) {
            $manufacturer_info = $this->db->query("SELECT m.* FROM `" . DB_PREFIX . "manufacturer` m WHERE m.manufacturer_id=" . $id['manufacturer_id'] . " LIMIT 1")->row;
            $manufacturer_description = $this->db->query("SELECT m.* FROM `" . DB_PREFIX . "seo_manufacturer_description` m WHERE m.manufacturer_id=" . $id['manufacturer_id'] . " AND `language_id` = '" . $language_id . "' LIMIT 1");
            
            if (!empty($manufacturer_info['name'])) {
                $site_name = $this->getSiteName($language_id);

                $replace = array($manufacturer_info['name'], $site_name);

                $string = str_replace($search, $replace, $pattern);
                $string = $this->formatMetaKeywords($string);
                
                if ($manufacturer_description->num_rows == 0) {
                    $this->db->query("INSERT `" . DB_PREFIX . "seo_manufacturer_description` SET `meta_keyword`='" . $this->db->escape($string) . "', `manufacturer_id`='" . $id['manufacturer_id'] . "', `language_id` = '" . $language_id . "'");
                } else {
                    $this->db->query("UPDATE `" . DB_PREFIX . "seo_manufacturer_description` SET `meta_keyword`='" . $this->db->escape($string) . "' WHERE `manufacturer_id`='" . $id['manufacturer_id'] . "' AND `language_id` = '" . $language_id . "'");
                }
                
                $counter++;
                $items[$manufacturer_info['manufacturer_id']] = array('name' => $manufacturer_info['name'], 'result' => $string);
            }
        }
        
        return array('counter' => $counter, 'items' => $items);
    }
    
    public function generateImageNames() {
        $language_id        = $this->config->get('config_language_id');
        $pattern            = $this->getSetting('images_filename_string');
        $search             = array('[product]', '[model]', '[sku]', '[upc]');
        
        $product_info       = $this->db->query("SELECT p.*, pd.* FROM `" . DB_PREFIX . "product` p LEFT JOIN `" . DB_PREFIX . "product_description` pd on (p.product_id=pd.product_id AND pd.language_id=" . $language_id . ")")->rows;
        $counter            = 0;
        $products_no_image  = array();
        $image_dir          = DIR_IMAGE;
        $errors             = false;
        $already_renamed    = 0;
        
        foreach ($product_info as $product) {
            
            if (!empty($product['image'])) {
                $replace = array($product['name'], $product['model'], $product['sku'], $product['upc']);
                $string = str_replace($search, $replace, $pattern);
            
                $old_image_name = $product['image'];
                $new_image_name = $this->formatSEOUrl($this->db->escape($string));
                
                if (strpos($product['image'], 'no_image') !== false) {
                    continue; // Fix that the no_image.png image dont get renamed
                }
                
                if (file_exists($image_dir.$old_image_name)) {
                    $ext = pathinfo($image_dir.$old_image_name, PATHINFO_EXTENSION);
                    $image_path = str_replace($image_dir, '', dirname($image_dir.$old_image_name));
                    $image_path = str_replace(rtrim($image_dir,"/"), '', dirname($image_dir.$old_image_name));
                    
                    $new_image_name = $image_path.'/'.$new_image_name.'-'.$product['product_id'].'.'.$ext;

                    if ($old_image_name != $new_image_name) {
                        $action = false;
                        
                        if (rename($image_dir.$old_image_name, $image_dir.$new_image_name)) {
                            $action = true;
                            $counter++;
                            
                            if ($action) {
                                $this->db->query("UPDATE `" . DB_PREFIX . "product` SET `image` = '" . $new_image_name . "' WHERE `image` = '" . $this->db->escape($old_image_name) . "'");
                                $this->db->query("UPDATE `" . DB_PREFIX . "product_image` SET `image` = '" . $new_image_name . "' WHERE `image` = '" . $this->db->escape($old_image_name) . "'");
                                $this->db->query("UPDATE `" . DB_PREFIX . "banner_image` SET `image` = '" . $new_image_name . "' WHERE `image` = '" . $this->db->escape($old_image_name) . "'");
                                $this->db->query("UPDATE `" . DB_PREFIX . "category` SET `image` = '" . $new_image_name . "' WHERE `image` = '" . $this->db->escape($old_image_name) . "'");
                                $this->db->query("UPDATE `" . DB_PREFIX . "language` SET `image` = '" . $new_image_name . "' WHERE `image` = '" . $this->db->escape($old_image_name) . "'");
                                $this->db->query("UPDATE `" . DB_PREFIX . "manufacturer` SET `image` = '" . $new_image_name . "' WHERE `image` = '" . $this->db->escape($old_image_name) . "'");
                                $this->db->query("UPDATE `" . DB_PREFIX . "option_value` SET `image` = '" . $new_image_name . "' WHERE `image` = '" . $this->db->escape($old_image_name) . "'");
                                $this->db->query("UPDATE `" . DB_PREFIX . "voucher_theme` SET `image` = '" . $new_image_name . "' WHERE `image` = '" . $this->db->escape($old_image_name) . "'");
                            }
                        } else {
                            $errors = true;
                        }
                    } else {
                        $already_renamed++;  
                    }
                    
                }
            } else {
                $products_no_image[] = $product['product_id'];
            }
        }
        
        if ($errors) {
            $errors = 'ERR_IRNP';
        }
        $result = array(
            'renamed_images'            => $counter,
            'already_renamed'           => $already_renamed,
            'products_with_no_image'    => $products_no_image,
            'errors'                    => $errors
        );
        
        return $result;
    }
    
    public function getSeoScore($save_data = true) {
        $score              = 0;
        $fixes              = array();
        $fixed              = array();
        $results            = array();
        $perfect_results    = 0;
        $bad_results        = 0;
        $improve_results    = 0;
        
        if ($this->config->get('config_seo_url') == 1) {
            $results[] = 100;
        } else {
            $results[] = 0;
            $fixes['config_seo_url'] = true;
        }
        
        $sets                       = array();
        $sets['seo_urls']           = $this->checkSEOUrlsCount();
        $sets['seo_titles']         = $this->checkSEOTitlesCount();
        $sets['seo_descriptions']   = $this->checkSEODescriptionsCount();
        $sets['seo_keywords']       = $this->checkSEOKeywordsCount();
        
        foreach ($sets as $index => $set) {
            if (isset($set['total_products_difference'])) {
                if (reset($set['total_products']) != 0) {
                    $percentage = ((reset($set['total_products']) - reset($set['total_products_difference'])) / (reset($set['total_products']))) * 100;
                } else {
                    $percentage = 100; 
                }
                
                $results[] = $percentage;
                if ($percentage != '100') {
                    $fixes['product_' . $index] = true; 
                } else {
                    $fixed['product_' . $index] = true; 
                }
            }
            
            if (isset($set['total_categories_difference'])) {
                if (reset($set['total_categories']) != 0) {
                    $percentage = ((reset($set['total_categories']) - reset($set['total_categories_difference'])) / (reset($set['total_categories']))) * 100;
                } else {
                    $percentage = 100;
                }
                
                $results[] = $percentage;
                if ($percentage != '100') {
                    $fixes['category_' . $index] = true; 
                } else {
                    $fixed['category_' . $index] = true; 
                }
            }
            
            if (isset($set['total_informations_difference'])) {
                if (reset($set['total_informations']) != 0) {
                    $percentage = ((reset($set['total_informations']) - reset($set['total_informations_difference'])) / (reset($set['total_informations']))) * 100;
                } else {
                    $percentage = 100;
                }
                
                $results[] = $percentage;
                if ($percentage != '100') {
                    $fixes['information_' . $index] = true; 
                } else {
                    $fixed['information_' . $index] = true; 
                }
            }
            
            if (isset($set['total_manufacturers_difference'])) {
                if (reset($set['total_manufacturers']) != 0) {
                    $percentage = ((reset($set['total_manufacturers']) - reset($set['total_manufacturers_difference'])) / (reset($set['total_manufacturers']))) * 100;
                } else {
                    $percentage = 100; 
                }
                
                $results[] = $percentage;
                if ($percentage != '100') {
                    $fixes['manufacturer_' . $index] = true; 
                } else {
                    $fixed['manufacturer_' . $index] = true;  
                }
            }
        }
        
        if ($this->getSetting('richsnippets_product_data') == '1') {
            $results[] = 100;
            $fixed['richsnippets_product_data'] = true; 
        } else {
            $results[] = 0;
            $fixes['richsnippets_product_data'] = true; 
        }
        
        if ($this->getSetting('richsnippets_product_breadcrumbs') == '1') {
            $results[] = 100;
            $fixed['richsnippets_product_breadcrumbs'] = true; 
        } else {
            $results[] = 0;
            $fixes['richsnippets_product_breadcrumbs'] = true; 
        }
        
        if ($this->getSetting('richsnippets_company_info') == '1') {
            $results[] = 100;
            $fixed['richsnippets_company_info'] = true; 
        } else {
            $results[] = 0;
            $fixes['richsnippets_company_info'] = true; 
        }
        
        
        $this->load->model('localisation/language');
		$languages = $this->model_localisation_language->getLanguages();
        
        if (count($languages)>1) {
            if ($this->getSetting('hreflang_products') == '1') {
                $results[] = 100;
                $fixed['hreflang_products'] = true; 
            } else {
                $results[] = 0;
                $fixes['hreflang_products'] = true; 
            }
            
            if ($this->getSetting('hreflang_categories') == '1') {
                $results[] = 100;
                $fixed['hreflang_categories'] = true; 
            } else {
                $results[] = 0;
                $fixes['hreflang_categories'] = true; 
            }

            if ($this->getSetting('hreflang_manufacturers') == '1') {
                $results[] = 100;
                $fixed['hreflang_manufacturers'] = true; 
            } else {
                $results[] = 0;
                $fixes['hreflang_manufacturers'] = true; 
            }

            if ($this->getSetting('hreflang_informations') == '1') {
                $results[] = 100;
                $fixed['hreflang_informations'] = true; 
            } else {
                $results[] = 0;
                $fixes['hreflang_informations'] = true; 
            }

        }
        
        /*
        if ($this->getSetting('seo_image_titles_date') != '') {
            $results[] = 100;
            $fixed['seo_images_rename'] = true; 
        } else {
            $results[] = 0;
            $fixes['seo_images_rename'] = true; 
        }
        */
        
        $htaccess_file_path = dirname(DIR_SYSTEM).'/.htaccess';
        if (file_exists($htaccess_file_path)) { 
            $results[] = 100;
            $fixed['htaccess_exists'] = true; 
        } else {
            $results[] = 0;
            $fixes['htaccess_exists'] = true; 
        }
        
        $robots_file_path = dirname(DIR_SYSTEM).'/robots.txt';
        if (file_exists($robots_file_path)) { 
            $results[] = 100;
            $fixed['robots_exists'] = true; 
        } else {
            $results[] = 0;
            $fixes['robots_exists'] = true; 
        }
          
        foreach ($results as $result) {
            if ($result == '100') $perfect_results++;
            if ($result >= '40' && $result < '100') $improve_results++;
            if ($result < '40') $bad_results++;
            $score += $result;
        }
        $score      = number_format(($score/count($results)),0);
        
        $total_results = count($results);

        if ($save_data) {
            $this->saveSetting('seo_score', $score);
            $this->saveSetting('seo_score_last_checked', date('M d, Y - H:i:s'));
        }    
        return array(
            'score' => $score,
            'fixes' => $fixes,
            'fixed' => $fixed,
            'total' => $total_results,
            'perfect_results' => number_format((($total_results - ($improve_results+$bad_results)) / ($total_results)) * 100, 0),
            'improve_results' => number_format((($total_results - ($perfect_results+$bad_results)) / ($total_results)) * 100, 0),
            'bad_results' => number_format((($total_results - ($improve_results+$perfect_results)) / ($total_results)) * 100, 0)
        );
        
    }
    
    private function getSiteName($language_id = 1) {
        $site_name = '';
        
        $site_name_array = $this->config->get('config_meta_title');
        
        if (is_array($site_name_array) && !empty($site_name_array[$language_id])) {
            $site_name = $site_name_array[$language_id];
        } else if (is_array($site_name_array) && empty($site_name_array[$language_id])) {
            $site_name = reset($site_name_array);
        } else if (!is_array($site_name_array) && !empty($site_name_array)) {
            $site_name = $site_name_array;  
        } else {
            $site_name = '';
        }
        
        return $site_name;
    }
    
    private function formatMetaKeywords($string) {
        $keyword    = '';
        $string     = trim(str_replace(',', ' ', $string));
        $string     = explode(' ', $string);
        
        foreach ($string as $index => $str) {
            $str = trim($str);
            if (empty($str) || $str == ' ') {
                unset($string[$index]);
            } else {
                $string[$index] = trim($str);
            }
        }
        
        $keyword    = implode(', ', $string);
        
        return trim($keyword);
    }
    
    private function formatMetaDescription($string, $wordCount = 10) {
        $string = strip_tags($this->db->escape(html_entity_decode($string,ENT_COMPAT, "UTF-8")));
        $string = str_replace('\r\n', '', $string);
        $string = trim(preg_replace('/\s+/', ' ', $string));
        $string = trim(preg_replace("/[\\n\\r]+/", " ", $string));
        
        return implode( 
            '', 
            array_slice( 
              preg_split(
                '/([\s,\.;\?\!]+)/', 
                $string, 
                $wordCount*2+1, 
                PREG_SPLIT_DELIM_CAPTURE
              ),
              0,
              $wordCount*2-1
            )
        );
    }
    
    /**
     * Unaccent the input string string. An example string like `ÀØėÿᾜὨζὅБю`
     * will be translated to `AOeyIOzoBY`. More complete than :
     *   strtr( (string)$str,
     *          "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ",
     *          "aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynn" );
     *
     * @param $str input string
     * @param $utf8 if null, function will detect input string encoding
     * @author http://www.evaisse.net/2008/php-translit-remove-accent-unaccent-21001
     * @return string input string without accent
     */
    private function remove_accents($str, $utf8=true) {
        $str = (string)$str;
        if( is_null($utf8) ) {
            if( !function_exists('mb_detect_encoding') ) {
                $utf8 = (strtolower( mb_detect_encoding($str) )=='utf-8');
            } else {
                $length = strlen($str);
                $utf8 = true;
                for ($i=0; $i < $length; $i++) {
                    $c = ord($str[$i]);
                    if ($c < 0x80) $n = 0; # 0bbbbbbb
                    elseif (($c & 0xE0) == 0xC0) $n=1; # 110bbbbb
                    elseif (($c & 0xF0) == 0xE0) $n=2; # 1110bbbb
                    elseif (($c & 0xF8) == 0xF0) $n=3; # 11110bbb
                    elseif (($c & 0xFC) == 0xF8) $n=4; # 111110bb
                    elseif (($c & 0xFE) == 0xFC) $n=5; # 1111110b
                    else return false; # Does not match any model
                    for ($j=0; $j<$n; $j++) { # n bytes matching 10bbbbbb follow ?
                        if ((++$i == $length)
                            || ((ord($str[$i]) & 0xC0) != 0x80)) {
                            $utf8 = false;
                            break;
                        }

                    }
                }
            }

        }

        if(!$utf8)
            $str = utf8_encode($str);

        $transliteration = array(
        'Ĳ' => 'I', 'Ö' => 'O','Œ' => 'O','Ü' => 'U','ä' => 'a','æ' => 'a',
        'ĳ' => 'i','ö' => 'o','œ' => 'o','ü' => 'u','ß' => 's','ſ' => 's',
        'À' => 'A','Á' => 'A','Â' => 'A','Ã' => 'A','Ä' => 'A','Å' => 'A',
        'Æ' => 'A','Ā' => 'A','Ą' => 'A','Ă' => 'A','Ç' => 'C','Ć' => 'C',
        'Č' => 'C','Ĉ' => 'C','Ċ' => 'C','Ď' => 'D','Đ' => 'D','È' => 'E',
        'É' => 'E','Ê' => 'E','Ë' => 'E','Ē' => 'E','Ę' => 'E','Ě' => 'E',
        'Ĕ' => 'E','Ė' => 'E','Ĝ' => 'G','Ğ' => 'G','Ġ' => 'G','Ģ' => 'G',
        'Ĥ' => 'H','Ħ' => 'H','Ì' => 'I','Í' => 'I','Î' => 'I','Ï' => 'I',
        'Ī' => 'I','Ĩ' => 'I','Ĭ' => 'I','Į' => 'I','İ' => 'I','Ĵ' => 'J',
        'Ķ' => 'K','Ľ' => 'K','Ĺ' => 'K','Ļ' => 'K','Ŀ' => 'K','Ł' => 'L',
        'Ñ' => 'N','Ń' => 'N','Ň' => 'N','Ņ' => 'N','Ŋ' => 'N','Ò' => 'O',
        'Ó' => 'O','Ô' => 'O','Õ' => 'O','Ø' => 'O','Ō' => 'O','Ő' => 'O',
        'Ŏ' => 'O','Ŕ' => 'R','Ř' => 'R','Ŗ' => 'R','Ś' => 'S','Ş' => 'S',
        'Ŝ' => 'S','Ș' => 'S','Š' => 'S','Ť' => 'T','Ţ' => 'T','Ŧ' => 'T',
        'Ț' => 'T','Ù' => 'U','Ú' => 'U','Û' => 'U','Ū' => 'U','Ů' => 'U',
        'Ű' => 'U','Ŭ' => 'U','Ũ' => 'U','Ų' => 'U','Ŵ' => 'W','Ŷ' => 'Y',
        'Ÿ' => 'Y','Ý' => 'Y','Ź' => 'Z','Ż' => 'Z','Ž' => 'Z','à' => 'a',
        'á' => 'a','â' => 'a','ã' => 'a','ā' => 'a','ą' => 'a','ă' => 'a',
        'å' => 'a','ç' => 'c','ć' => 'c','č' => 'c','ĉ' => 'c','ċ' => 'c',
        'ď' => 'd','đ' => 'd','è' => 'e','é' => 'e','ê' => 'e','ë' => 'e',
        'ē' => 'e','ę' => 'e','ě' => 'e','ĕ' => 'e','ė' => 'e','ƒ' => 'f',
        'ĝ' => 'g','ğ' => 'g','ġ' => 'g','ģ' => 'g','ĥ' => 'h','ħ' => 'h',
        'ì' => 'i','í' => 'i','î' => 'i','ï' => 'i','ī' => 'i','ĩ' => 'i',
        'ĭ' => 'i','į' => 'i','ı' => 'i','ĵ' => 'j','ķ' => 'k','ĸ' => 'k',
        'ł' => 'l','ľ' => 'l','ĺ' => 'l','ļ' => 'l','ŀ' => 'l','ñ' => 'n',
        'ń' => 'n','ň' => 'n','ņ' => 'n','ŉ' => 'n','ŋ' => 'n','ò' => 'o',
        'ó' => 'o','ô' => 'o','õ' => 'o','ø' => 'o','ō' => 'o','ő' => 'o',
        'ŏ' => 'o','ŕ' => 'r','ř' => 'r','ŗ' => 'r','ś' => 's','š' => 's',
        'ť' => 't','ù' => 'u','ú' => 'u','û' => 'u','ū' => 'u','ů' => 'u',
        'ű' => 'u','ŭ' => 'u','ũ' => 'u','ų' => 'u','ŵ' => 'w','ÿ' => 'y',
        'ý' => 'y','ŷ' => 'y','ż' => 'z','ź' => 'z','ž' => 'z','Α' => 'A',
        'Ά' => 'A','Ἀ' => 'A','Ἁ' => 'A','Ἂ' => 'A','Ἃ' => 'A','Ἄ' => 'A',
        'Ἅ' => 'A','Ἆ' => 'A','Ἇ' => 'A','ᾈ' => 'A','ᾉ' => 'A','ᾊ' => 'A',
        'ᾋ' => 'A','ᾌ' => 'A','ᾍ' => 'A','ᾎ' => 'A','ᾏ' => 'A','Ᾰ' => 'A',
        'Ᾱ' => 'A','Ὰ' => 'A','ᾼ' => 'A','Β' => 'B','Γ' => 'G','Δ' => 'D',
        'Ε' => 'E','Έ' => 'E','Ἐ' => 'E','Ἑ' => 'E','Ἒ' => 'E','Ἓ' => 'E',
        'Ἔ' => 'E','Ἕ' => 'E','Ὲ' => 'E','Ζ' => 'Z','Η' => 'I','Ή' => 'I',
        'Ἠ' => 'I','Ἡ' => 'I','Ἢ' => 'I','Ἣ' => 'I','Ἤ' => 'I','Ἥ' => 'I',
        'Ἦ' => 'I','Ἧ' => 'I','ᾘ' => 'I','ᾙ' => 'I','ᾚ' => 'I','ᾛ' => 'I',
        'ᾜ' => 'I','ᾝ' => 'I','ᾞ' => 'I','ᾟ' => 'I','Ὴ' => 'I','ῌ' => 'I',
        'Θ' => 'T','Ι' => 'I','Ί' => 'I','Ϊ' => 'I','Ἰ' => 'I','Ἱ' => 'I',
        'Ἲ' => 'I','Ἳ' => 'I','Ἴ' => 'I','Ἵ' => 'I','Ἶ' => 'I','Ἷ' => 'I',
        'Ῐ' => 'I','Ῑ' => 'I','Ὶ' => 'I','Κ' => 'K','Λ' => 'L','Μ' => 'M',
        'Ν' => 'N','Ξ' => 'K','Ο' => 'O','Ό' => 'O','Ὀ' => 'O','Ὁ' => 'O',
        'Ὂ' => 'O','Ὃ' => 'O','Ὄ' => 'O','Ὅ' => 'O','Ὸ' => 'O','Π' => 'P',
        'Ρ' => 'R','Ῥ' => 'R','Σ' => 'S','Τ' => 'T','Υ' => 'Y','Ύ' => 'Y',
        'Ϋ' => 'Y','Ὑ' => 'Y','Ὓ' => 'Y','Ὕ' => 'Y','Ὗ' => 'Y','Ῠ' => 'Y',
        'Ῡ' => 'Y','Ὺ' => 'Y','Φ' => 'F','Χ' => 'X','Ψ' => 'P','Ω' => 'O',
        'Ώ' => 'O','Ὠ' => 'O','Ὡ' => 'O','Ὢ' => 'O','Ὣ' => 'O','Ὤ' => 'O',
        'Ὥ' => 'O','Ὦ' => 'O','Ὧ' => 'O','ᾨ' => 'O','ᾩ' => 'O','ᾪ' => 'O',
        'ᾫ' => 'O','ᾬ' => 'O','ᾭ' => 'O','ᾮ' => 'O','ᾯ' => 'O','Ὼ' => 'O',
        'ῼ' => 'O','α' => 'a','ά' => 'a','ἀ' => 'a','ἁ' => 'a','ἂ' => 'a',
        'ἃ' => 'a','ἄ' => 'a','ἅ' => 'a','ἆ' => 'a','ἇ' => 'a','ᾀ' => 'a',
        'ᾁ' => 'a','ᾂ' => 'a','ᾃ' => 'a','ᾄ' => 'a','ᾅ' => 'a','ᾆ' => 'a',
        'ᾇ' => 'a','ὰ' => 'a','ᾰ' => 'a','ᾱ' => 'a','ᾲ' => 'a','ᾳ' => 'a',
        'ᾴ' => 'a','ᾶ' => 'a','ᾷ' => 'a','β' => 'b','γ' => 'g','δ' => 'd',
        'ε' => 'e','έ' => 'e','ἐ' => 'e','ἑ' => 'e','ἒ' => 'e','ἓ' => 'e',
        'ἔ' => 'e','ἕ' => 'e','ὲ' => 'e','ζ' => 'z','η' => 'i','ή' => 'i',
        'ἠ' => 'i','ἡ' => 'i','ἢ' => 'i','ἣ' => 'i','ἤ' => 'i','ἥ' => 'i',
        'ἦ' => 'i','ἧ' => 'i','ᾐ' => 'i','ᾑ' => 'i','ᾒ' => 'i','ᾓ' => 'i',
        'ᾔ' => 'i','ᾕ' => 'i','ᾖ' => 'i','ᾗ' => 'i','ὴ' => 'i','ῂ' => 'i',
        'ῃ' => 'i','ῄ' => 'i','ῆ' => 'i','ῇ' => 'i','θ' => 't','ι' => 'i',
        'ί' => 'i','ϊ' => 'i','ΐ' => 'i','ἰ' => 'i','ἱ' => 'i','ἲ' => 'i',
        'ἳ' => 'i','ἴ' => 'i','ἵ' => 'i','ἶ' => 'i','ἷ' => 'i','ὶ' => 'i',
        'ῐ' => 'i','ῑ' => 'i','ῒ' => 'i','ῖ' => 'i','ῗ' => 'i','κ' => 'k',
        'λ' => 'l','μ' => 'm','ν' => 'n','ξ' => 'k','ο' => 'o','ό' => 'o',
        'ὀ' => 'o','ὁ' => 'o','ὂ' => 'o','ὃ' => 'o','ὄ' => 'o','ὅ' => 'o',
        'ὸ' => 'o','π' => 'p','ρ' => 'r','ῤ' => 'r','ῥ' => 'r','σ' => 's',
        'ς' => 's','τ' => 't','υ' => 'y','ύ' => 'y','ϋ' => 'y','ΰ' => 'y',
        'ὐ' => 'y','ὑ' => 'y','ὒ' => 'y','ὓ' => 'y','ὔ' => 'y','ὕ' => 'y',
        'ὖ' => 'y','ὗ' => 'y','ὺ' => 'y','ῠ' => 'y','ῡ' => 'y','ῢ' => 'y',
        'ῦ' => 'y','ῧ' => 'y','φ' => 'f','χ' => 'x','ψ' => 'p','ω' => 'o',
        'ώ' => 'o','ὠ' => 'o','ὡ' => 'o','ὢ' => 'o','ὣ' => 'o','ὤ' => 'o',
        'ὥ' => 'o','ὦ' => 'o','ὧ' => 'o','ᾠ' => 'o','ᾡ' => 'o','ᾢ' => 'o',
        'ᾣ' => 'o','ᾤ' => 'o','ᾥ' => 'o','ᾦ' => 'o','ᾧ' => 'o','ὼ' => 'o',
        'ῲ' => 'o','ῳ' => 'o','ῴ' => 'o','ῶ' => 'o','ῷ' => 'o','А' => 'A',
        'Б' => 'B','В' => 'V','Г' => 'G','Д' => 'D','Е' => 'E','Ё' => 'E',
        'Ж' => 'Z','З' => 'Z','И' => 'I','Й' => 'I','К' => 'K','Л' => 'L',
        'М' => 'M','Н' => 'N','О' => 'O','П' => 'P','Р' => 'R','С' => 'S',
        'Т' => 'T','У' => 'U','Ф' => 'F','Х' => 'K','Ц' => 'T','Ч' => 'C',
        'Ш' => 'S','Щ' => 'S','Ы' => 'Y','Э' => 'E','Ю' => 'Y','Я' => 'Y',
        'а' => 'A','б' => 'B','в' => 'V','г' => 'G','д' => 'D','е' => 'E',
        'ё' => 'E','ж' => 'Z','з' => 'Z','и' => 'I','й' => 'I','к' => 'K',
        'л' => 'L','м' => 'M','н' => 'N','о' => 'O','п' => 'P','р' => 'R',
        'с' => 'S','т' => 'T','у' => 'U','ф' => 'F','х' => 'K','ц' => 'T',
        'ч' => 'C','ш' => 'S','щ' => 'S','ы' => 'Y','э' => 'E','ю' => 'Y',
        'я' => 'Y','ð' => 'd','Ð' => 'D','þ' => 't','Þ' => 'T','ა' => 'a',
        'ბ' => 'b','გ' => 'g','დ' => 'd','ე' => 'e','ვ' => 'v','ზ' => 'z',
        'თ' => 't','ი' => 'i','კ' => 'k','ლ' => 'l','მ' => 'm','ნ' => 'n',
        'ო' => 'o','პ' => 'p','ჟ' => 'z','რ' => 'r','ს' => 's','ტ' => 't',
        'უ' => 'u','ფ' => 'p','ქ' => 'k','ღ' => 'g','ყ' => 'q','შ' => 's',
        'ჩ' => 'c','ც' => 't','ძ' => 'd','წ' => 't','ჭ' => 'c','ხ' => 'k',
        'ჯ' => 'j','ჰ' => 'h', 'ấ' => 'a', 'ở' => 'o', 'ễ' => 'e', 'ậ' => 'a'
        );
        
        $str = str_replace( array_keys( $transliteration ),
                            array_values( $transliteration ),
                            $str);
        return $str;
    }
    
    public function formatSEOUrl($string) {
        $result = $this->remove_accents($string);

        if (function_exists('mb_strtolower')) {
            $result = mb_strtolower($result);
        } else {
            $result = strtolower($result);
        }

        $result = str_replace('&quot;', '', $result);
        $result = str_replace('&', '-', $result);
        $result = str_replace('^', '', $result);

        if (preg_match("/\p{Han}+/u", $result)) {
            $result = str_replace(' ','-', $result);
        } else if (preg_match("/\p{Arabic}+/u", $result)) {
            $result = str_replace(' ','-', $result);
        } else {
            $result = preg_replace("/[^a-z0-9-]/", "-", $result);
        }

        $result = preg_replace('{(-)\1+}','$1', $result); 
        $result = str_replace('-html','.html', $result);

        if (function_exists('mb_substr')) {
            $result = trim(mb_substr($result, 0, 200));
        } else {
            $result = trim(substr($result, 0, 200));
        }

        $result = trim($result,'-');

        return $result;     
    }
    
    public function getAutoLinks($page = 1, $limit = 10) {
        $query = "SELECT * FROM `" . DB_PREFIX . "seo_autolinks` WHERE 1=1 ";
        
        if ($page) {
			$start = ($page - 1) * $limit;
		}
        
        $query .= "ORDER BY `id` DESC LIMIT ".$start.", ".$limit;
        
        $query = $this->db->query($query);

        return $query->rows;
    }
    
    public function getTotalAutoLinks() {
		$query = "SELECT COUNT(*) as `count`  FROM `" . DB_PREFIX . "seo_autolinks`";
		
		$query = $this->db->query($query);
        
		return $query->row['count']; 
	}
    
    public function addAutoLink($data = array()) {
        $query = $this->db->query("INSERT INTO `" . DB_PREFIX . "seo_autolinks` SET `keyword` = '" . $this->db->escape($data['keyword']) . "', `url` = '" . $this->db->escape($data['url']). "', `date_added` = NOW()");
        
        return true;
    }
    
    public function getAutoLink($id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_autolinks` WHERE `id`= '" . (int)$id . "' LIMIT 1");
        
        if ($query->num_rows > 0) {
            return $query->row;
        } else {
            return false;
        }
    }
    
    public function editAutoLink($data = array(), $id) {
        $query = $this->db->query("UPDATE `" . DB_PREFIX . "seo_autolinks` SET `keyword` = '" . $this->db->escape($data['keyword']) . "', `url` = '" . $this->db->escape($data['url']). "' WHERE `id` = '".$id."'");
        
        return true;
    }
    
    public function deleteAutoLink($id) {
        $query = $this->db->query("DELETE FROM `" . DB_PREFIX . "seo_autolinks` WHERE `id`= '" . (int)$id . "'");
        
        return true;
    }
    
    public function getCustomUrls($page = 1, $limit = 10) {
        $query = "SELECT * FROM `" . DB_PREFIX . "seo_custom_urls` WHERE 1=1 ";
        
        if ($page) {
			$start = ($page - 1) * $limit;
		}
        
        $query .= "ORDER BY `id` DESC LIMIT ".$start.", ".$limit;
        
        $query = $this->db->query($query);

        return $query->rows;
    }
    
    public function getTotalCustomUrls() {
		$query = "SELECT COUNT(*) as `count`  FROM `" . DB_PREFIX . "seo_custom_urls`";
		
		$query = $this->db->query($query);
        
		return $query->row['count']; 
	}
    
    public function addCustomUrl($data = array()) {
        $query = $this->db->query("INSERT INTO `" . DB_PREFIX . "seo_custom_urls` SET `keyword` = '" . $this->db->escape($data['keyword']) . "', `query` = '" . $this->db->escape($data['query']). "'");
        
        return true;
    }

    public function getCustomUrl($id) {
        $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_custom_urls` WHERE `id`= '" . (int)$id . "' LIMIT 1");
        
        if ($query->num_rows > 0) {
            return $query->row;
        } else {
            return false;
        }
    }
    
    public function editCustomUrl($data = array(), $id) {
        $query = $this->db->query("UPDATE `" . DB_PREFIX . "seo_custom_urls` SET `keyword` = '" . $this->db->escape($data['keyword']) . "', `query` = '" . $this->db->escape($data['query']). "' WHERE `id` = '".$id."'");
        
        return true;
    }
    
    public function deleteCustomUrl($id) {
        $query = $this->db->query("DELETE FROM `" . DB_PREFIX . "seo_custom_urls` WHERE `id`= '" . (int)$id . "'");
        
        return true;
    }
    
    public function clearSeoAnalysisResults() {
        $query = $this->db->query("TRUNCATE `" . DB_PREFIX . "seo_analysis`");
        
        return true;
    }
    
    public function getCrawledUrls($page = 1, $crawler = "All", $url="", $date_start="", $date_end="", $limit = 15) {
        $query = "SELECT * FROM `" . DB_PREFIX . "seo_analysis` WHERE 1=1 ";
        
        if ($crawler != "All") {
            $query .= " AND `crawler` = '" . $this->db->escape($crawler) . "'";
        }
        
        if (!empty($url)) {
            $query .= " AND `url` LIKE '%" . $this->db->escape($url) . "%'";
        }
        
        if (!empty($date_start)) {
            $query .= " AND `date_added` >= '" . $this->db->escape($date_start) . " 00:00:00'";
        }
        
        if (!empty($date_end)) {
            $query .= " AND `date_added` <= '" . $this->db->escape($date_end) . " 23:59:59'";
        }
        
        if ($page) {
			$start = ($page - 1) * $limit;
		}
        
        $query .= "ORDER BY `id` DESC LIMIT ".$start.", ".$limit;
        
        $query = $this->db->query($query);

        return $query->rows;
    }
    
    public function getTotalCrawledUrls($crawler = "All", $url="", $date_start="", $date_end="") {
		$query = "SELECT COUNT(*) as `count`  FROM `" . DB_PREFIX . "seo_analysis` WHERE 1=1";
        
        if ($crawler != "All") {
            $query .= " AND `crawler` = '" . $this->db->escape($crawler) . "'";
        }
        
        if (!empty($url)) {
            $query .= " AND `url` LIKE '%" . $this->db->escape($url) . "%'";
        }
        
        if (!empty($date_start)) {
            $query .= " AND `date_added` >= '" . $this->db->escape($date_start) . " 00:00:00'";
        }
        
        if (!empty($date_end)) {
            $query .= " AND `date_added` <= '" . $this->db->escape($date_end) . " 23:59:59'";
        }
		
		$query = $this->db->query($query);
        
		return $query->row['count']; 
	}
    
    public function getDetectedPages($page = 1, $limit = 10) {
        $query = "SELECT * FROM `" . DB_PREFIX . "seo_404_pages` WHERE 1=1 ";
        
        if ($page) {
			$start = ($page - 1) * $limit;
		}
        
        $query .= "ORDER BY `page_id` DESC LIMIT ".$start.", ".$limit;
        
        $query = $this->db->query($query);

        return $query->rows;
    }
    
    public function getTotalDetectedPages() {
		$query = "SELECT COUNT(*) as `count`  FROM `" . DB_PREFIX . "seo_404_pages`";
		
		$query = $this->db->query($query);
        
		return $query->row['count']; 
	}
    
    public function deleteDetectedPage($id) {
        $query = $this->db->query("DELETE FROM `" . DB_PREFIX . "seo_404_pages` WHERE `page_id` = '" . (int)$id . "'");
        
        return true;
    }
    
    public function addMissingPageRedirect($data = array()) {
        $check_if_exists = $this->db->query("SELECT page_id FROM `" . DB_PREFIX . "seo_404_pages` WHERE route = '" . $this->db->escape($data['route_from']) . "' LIMIT 1");
        
        if ($check_if_exists->num_rows) {
            $result = $this->deleteDetectedPage($check_if_exists->row['page_id']);
        }
        
        $this->db->query("INSERT INTO `" . DB_PREFIX . "seo_404_redirects` SET route_from='" . $this->db->escape($data['route_from']) . "', route_to = '" . $this->db->escape($data['route_to']) . "', date_added=NOW(), date_modified=NOW()");

        return true;
    }
    
    public function getRedirects($page = 1, $limit = 10) {
        $query = "SELECT * FROM `" . DB_PREFIX . "seo_404_redirects` WHERE 1=1 ";
        
        if ($page) {
			$start = ($page - 1) * $limit;
		}
        
        $query .= "ORDER BY `redirect_id` DESC LIMIT ".$start.", ".$limit;
        
        $query = $this->db->query($query);

        return $query->rows;
    }
    
    public function getTotalRedirects() {
		$query = "SELECT COUNT(*) as `count`  FROM `" . DB_PREFIX . "seo_404_redirects`";
		
		$query = $this->db->query($query);
        
		return $query->row['count']; 
	}
    
    public function deleteRedirect($id) {
        $query = $this->db->query("DELETE FROM `" . DB_PREFIX . "seo_404_redirects` WHERE `redirect_id` = '" . (int)$id . "'");
        
        return true;
    }
    
    public function getH1Tags($product_id = 0) {
        $tags = array();
        
        $results = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_product_description` WHERE product_id=" . (int)$this->db->escape($product_id) . "");
          
        foreach ($results->rows as $result) {
            $tags[$result['language_id']] = $result['h1'];					
        }
        
        return $tags;
    }
    
    public function getH2Tags($product_id = 0) {
        $tags = array();
        
        $results = $this->db->query("SELECT * FROM `" . DB_PREFIX . "seo_product_description` WHERE product_id=" . (int)$this->db->escape($product_id) . "");
          
        foreach ($results->rows as $result) {
            $tags[$result['language_id']] = $result['h2'];					
        }
        
        return $tags;
    }

}