<?php
class ControllerExtensionModuleFeatured extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/featured');


				// << Product Option Image PRO module
				liveopencart\poip::initLibrary($this->registry);
				
				$data['poip_installed'] 	= $this->liveopencart_poip->installed();
				$data['poip_theme_name'] 	= $this->liveopencart_poip->getModel()->getThemeName();
				
				// >> Product Option Image PRO module
      
		$this->load->model('catalog/product');

                $this->load->model('journal2/product');
            

		$this->load->model('tool/image');

		$data['products'] = array();

		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}

		if (!empty($setting['product'])) {
			$products = array_slice($setting['product'], 0, (int)$setting['limit']);

			foreach ($products as $product_id) {
				$product_info = $this->model_catalog_product->getProduct($product_id);

				if ($product_info) {
					if ($product_info['image']) {
						$image = $this->model_tool_image->resize($product_info['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$product_info['special']) {
						$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $product_info['rating'];
					} else {
						$rating = false;
					}


                $additional_images = $this->model_catalog_product->getProductImages($product_id);

                $image2 = false;

                if (count($additional_images) > 0) {
                    $image2 = $this->model_tool_image->resize($additional_images[0]['image'], $this->config->get('config_image_product_width'), $this->config->get('config_image_product_height'));
                }
            
					// << Live Price
				$this->load->model('extension/liveopencart/liveprice');
				
				if ( isset($result) ) {
					$lp_product = $result;
				} else {
					$lp_product = $product_info;
				}
				
				$prices = $this->model_extension_liveopencart_liveprice->getPriceStartingFrom( $lp_product, $price, $special, isset($tax) ? $tax : false );
				if ( $prices ) {
					$price = $prices['f_price'];
					if ($prices['f_special']) {
						$special = $prices['f_special'];
					}
					if ( isset($tax) ) {
						$tax = $prices['f_tax'];
					}
				}
				// >> Live Price
				
				$data['products'][] = array(
						'product_id'  => $product_info['product_id'],

				// << Product Option Image PRO module
				'poip_images'  => $this->liveopencart_poip->getModel()->getCategoryImagesForController( $product_info['product_id'], isset($setting)?($setting):(false) ),
				// >> Product Option Image PRO module
      
						'thumb'       => $image,

                'thumb2'       => $image2,
            

                'labels'        => $this->model_journal2_product->getLabels($product_id),
            
						'name'        => $product_info['name'],
						'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
						'price'       => $price,
						'special'     => $special,
						'tax'         => $tax,
						'rating'      => $rating,
						'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
					);
				}
			}
		}

		if ($data['products']) {
			return $this->load->view('extension/module/featured', $data);
		}
	}
}