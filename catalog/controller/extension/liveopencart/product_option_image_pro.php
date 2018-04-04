<?php
//  Product Option Image PRO / Изображения опций PRO
//  Support: support@liveopencart.com / Поддержка: help@liveopencart.ru

class ControllerExtensionLiveopencartProductOptionImagePro extends Model {

	public function getProductListImages() {
		
		$json = array('products'=>array());
		
		if (isset($this->request->post['products_ids']) && is_array($this->request->post['products_ids'])) {
			
			$products_ids = $this->request->post['products_ids'];
		
			\liveopencart\poip::initLibrary($this->registry);
			
			foreach ($products_ids as $product_id) {
				$product_id = (int)$product_id;
				if ($product_id) {
					$json['products'][$product_id] = $this->liveopencart_poip->getModel()->getCategoryImages($product_id, false, true);
				}
			}
		
		}
		
		$this->response->addHeader('Content-Type: application/json');

		$this->response->setOutput(json_encode($json));
		
	}

}