<?php
//  Live Price PRO / Живая цена PRO
//  Support: support@liveopencart.com / Поддержка: help@liveopencart.ru

class ControllerExtensionLiveopencartLivePrice extends Controller {
	
	public function price() {
		
		if ( $this->config->get('config_customer_price') && !$this->customer->isLogged() ) {
			$this->response->setOutput(json_encode(array()));
			return;
		}
		
		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			exit;
		}
		
		if (isset($this->request->get['quantity'])) {
			$quantity = (int)$this->request->get['quantity'];
		} else {
			$quantity = 1;
		}
		
		if (isset($this->request->post['option_oc'])) {
			$options = $this->request->post['option_oc'];
		} elseif (isset($this->request->post['option'])) {
			$options = $this->request->post['option'];
		} else {
			$options = array();
		}
		
		
		
		if ( !empty($this->request->post['quantity_per_option']) && is_array($this->request->post['quantity_per_option']) ) {
			// specific calculation for a specific options (quantity is set for each option value)
			$quantity_per_options = $this->request->post['quantity_per_option'];
			$lp_data = $this->getProductTotalPriceForQuantityPerOptionWithHtml( $product_id, $options, $quantity_per_options);
		} else { // standard way
			$lp_data = $this->getProductPriceWithHtml( $product_id, max($quantity, 1), $options, true );
		}
		
		// return only required data
		$prices = array('htmls'=>$lp_data['prices']['htmls'], 'ct'=>$lp_data['prices']['ct']);
		if (isset($this->request->get['rnd'])) {
			$prices['rnd'] = $this->request->get['rnd'];
		}
		
		$this->setAllowOriginHeader(); 
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($prices));
		
	}
	
	public function getProductPriceWithHtml($product_id, $current_quantity=0, $options=array(), $multiplied_price=false) {
    
		$this->load->model('extension/liveopencart/liveprice');
		
    $lp_data = $this->model_extension_liveopencart_liveprice->getProductPrice( $product_id, $current_quantity, $options, 0, $multiplied_price );
    $prices       = $lp_data['prices'];
    $product_data = $lp_data['product_data'];
    $option_data  = $lp_data['option_data'];
    
    $simple_prices = array( 'price'       =>  $prices['f_price_old_opt'],
                            'special'     =>  ( ($prices['special'] || $prices['special_opt']) ? $prices['f_special_opt'] : '' ),
                            
                            'tax'         =>  ( $prices['config_tax'] ? $prices['f_price_opt_notax'] : $prices['config_tax'] ),
                            'discounts'   =>  $prices['discounts'],
                            'points'      =>  $prices['points'],
														'reward'      =>  isset($product_data['reward']) ? $product_data['reward'] : '',
                            'minimum'     =>  isset($product_data['minimum']) ? $product_data['minimum'] : '',
                            
                            'price_val'   =>  $this->tax->calculate($prices['price_old_opt'], $prices['tax_class_id'], $prices['config_tax']),
														'special_val' =>  $this->tax->calculate($prices['special_opt'], $prices['tax_class_id'], $prices['config_tax']),
                            
                            'product_id'  =>  $product_id,
                            );
    
    $prices['htmls'] = $this->getPriceHtmls($simple_prices);
    $prices['ct'] = $this->model_extension_liveopencart_liveprice->getThemeName();
    
    return array('prices'=>$prices, 'product_data'=>$product_data, 'option_data'=>$option_data);
  }
	
	private function getPriceHtmls($prices) {
		
		$lp_settings = $this->config->get('liveprice_settings');
    
    $this->load->language('product/product');
		$data['text_price']         = $this->language->get('text_price');
    $data['text_tax']           = $this->language->get('text_tax');
    $data['text_discount']      = $this->language->get('text_discount');
    $data['text_points']        = $this->language->get('text_points');
    $data['text_reward']        = $this->language->get('text_reward');
    $data['text_stock']         = $this->language->get('text_stock');
    $data['text_minimum']       = sprintf($this->language->get('text_minimum'), $prices['minimum']);
    $data['text_manufacturer']  = $this->language->get('text_manufacturer');
    
    $data['price'] = $prices['price'];
    $data['special'] = $prices['special'];
		if ( !empty($lp_settings['hide_tax']) ) {
			$data['tax'] = '';
		} else {
			$data['tax'] = $prices['tax'];
		}
    $data['points'] = $prices['points'];
    $data['discounts'] = $prices['discounts'];
    $data['minimum'] = $prices['minimum'];
    $data['price_val'] = $prices['price_val'];
    $data['special_val'] = $prices['special_val'];
		$data['theme_name'] = $this->model_extension_liveopencart_liveprice->getThemeName();
    
    $htmls = array();
    
		$templates = $this->model_extension_liveopencart_liveprice->getPriceTemplates();
    
		foreach ( $templates as $template_name => $template_path ) {
			$htmls[$template_name] = $this->render($template_path, $data);
			//$htmls[$template_name] = $this->load->view($template_path, $data);
		}
		
		return $htmls;
		
  }
	
	private function render($route, $data) {
		// $this->registry is added for compatibility with d_twig_manager.xml
		$template = new Template($this->registry->get('config')->get('template_engine'), $this->registry);
				
		foreach ($data as $key => $value) {
			$template->set($key, $value);
		}
		
		$output = $template->render( $route );
		
		return $output;
	}
	
	
	private function getProductTotalPriceForQuantityPerOptionWithHtml($p_product_id, $p_options, $p_quantity_per_options) {
		
		$this->load->model('extension/liveprice/liveprice');
		
		$total_quantity = 0;
		$total_price_old_opt = 0;
		$total_special_opt = 0;
		$total_price_opt = 0;
		$total_points = 0;
		
		$this->load->model('extension/liveopencart/quantity_per_option');
		
		if ( $this->model_extension_liveopencart_quantity_per_option->installed() ) {
			
			$quantity_per_options = $this->model_extension_liveopencart_quantity_per_option->normalizeArrayOfQPO($p_quantity_per_options);
			$qpo_all_combinations = $this->model_extension_liveopencart_quantity_per_option->getCombinationsOfOptions($quantity_per_options, $p_options);
			
			$qpo_total_quantity = 0;
			foreach ($qpo_all_combinations as $qpo_of_options) {
				$qpo_total_quantity+= $qpo_of_options['quantity'];
			}
			
			$stored_discounts = array();
			foreach ( $qpo_all_combinations as $qpo_of_options ) { // get prices for all combinations of options
				
				if ( $qpo_of_options['quantity'] ) {
				
					$quantity = $qpo_of_options['quantity'];
					
					$qpo_total_quantity_except_current = $qpo_total_quantity - $quantity;
					
					$lp_data = $this->model_extension_liveopencart_liveprice->getProductPriceByParamsArray( array('product_id' =>$p_product_id,
																																																	'quantity' => $quantity,
																																																	'options' => $qpo_of_options['options'],
																																																	'multiplied_price' => true, 
																																																	'qpo_discount_quantity_addition' => $qpo_total_quantity_except_current,
																																																) );
					
					$total_quantity+= $quantity;
					$current_product_data = $lp_data['product_data'];
					$current_tax_class_id = $lp_data['prices']['tax_class_id'];
					$current_config_tax = $lp_data['prices']['config_tax'];
					
					$current_price_old_opt = (float)$lp_data['prices']['price_old_opt'];
					$current_special_opt = $lp_data['prices']['special'] ? (float)$lp_data['prices']['special_opt'] : 0;
					$current_price_opt = (float)$lp_data['prices']['price_opt'];
					$current_points = $lp_data['prices']['points'];
		
					$total_price_old_opt+= $quantity*$current_price_old_opt;
					$total_special_opt+= $quantity*$current_special_opt;
					$total_price_opt+= $quantity*$current_price_opt;
					$total_points+= $current_points; // points are already multiplied
					
					if ( count($stored_discounts) == 0 ) {
						$stored_discounts[] = $lp_data['prices']['discounts'];
					} else {
						if ( $stored_discounts[ count($stored_discounts)-1 ] != $lp_data['prices']['discounts'] ) {
							$stored_discounts[] = $lp_data['prices']['discounts'];
						}
					}
				}
			}
		}
		
		if ( $total_quantity ) {
			
			$prices = array();
			$simple_prices = array(
				'price'       =>  $this->model_extension_liveopencart_liveprice->format( $this->tax->calculate($total_price_old_opt, $current_tax_class_id, $current_config_tax) ), 
				'special'     =>  $total_special_opt ? $this->model_extension_liveopencart_liveprice->format( $this->tax->calculate($total_special_opt, $current_tax_class_id, $current_config_tax) ) : '',
				
				'tax'         =>  $current_config_tax ? $this->model_extension_liveopencart_liveprice->format( $this->tax->calculate($total_price_opt, $current_tax_class_id, $current_config_tax) ) : $current_config_tax,
				'discounts'   =>  (!empty($stored_discounts) && count($stored_discounts) == 1 ? $stored_discounts[0] : array()),
				'points'      =>  $total_points, // $prices['points']
				'reward'      =>  $current_product_data['reward'],
				'minimum'     =>  $current_product_data['minimum'],
				
				'price_val'   =>  $this->tax->calculate($total_price_old_opt, $current_tax_class_id, $current_config_tax),
				'special_val' =>  $this->tax->calculate($total_special_opt, $current_tax_class_id, $current_tax_class_id),
				
				'product_id'  =>  $p_product_id,
			);
			
			$prices['htmls'] = $this->getPriceHtmls($simple_prices);
			$prices['ct'] = $this->model_extension_liveopencart_liveprice->getThemeName();
			
			return array('prices'=>$prices);
			
		} else { // no quantity per options, use standard calculation
			return $this->model_extension_liveopencart_liveprice->getProductPriceWithHtml( $p_product_id, 1, $p_options, true );
		}
		
	}
	
	// fix for www and non-www requests
	private function setAllowOriginHeader() { 
		
		if ( !empty($this->request->server['HTTP_ORIGIN']) ) {
		
			if ( $this->request->server['HTTPS'] ) { // the HTTPS propety should be set properly in startup.php
				$server = $this->config->get('config_ssl');
			} else {
				$server = $this->config->get('config_url');
			}
			$http_origin = trim($this->request->server['HTTP_ORIGIN'], '/');
			$server = trim($server, '/');
			
			if ( $server != $http_origin ) { 
				$url_beginnings = array('http://www.', 'https://www.', 'http://', 'https://');
				foreach ( $url_beginnings as $url_beginning ) {
					if ( substr($server, 0, strlen($url_beginning)) == $url_beginning ) {
						$server = substr($server, strlen($url_beginning));
					}
					if ( substr($http_origin, 0, strlen($url_beginning)) == $url_beginning ) {
						$http_origin = substr($http_origin, strlen($url_beginning));
					}
				}
				if ( $server == $http_origin ) {
					$this->response->addHeader('Access-Control-Allow-Origin: ' . $this->request->server['HTTP_ORIGIN']);
					$this->response->addHeader('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
				}
			}
		}
	}
	
}
