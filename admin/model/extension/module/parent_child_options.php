<?php
//  Parent-child Options
//  Support: support@liveopencart.com / Поддержка: help@liveopencart.ru

class ModelExtensionModuleParentChildOptions extends Model {
  
  private $extension_code = 'pcop3';
	private $tables_are_checked = false;
	
	public function __construct() {
		call_user_func_array('parent::__construct', func_get_args());
		if ( !$this->parent_child_options_common ) {
			$this->load->library('liveopencart/parent_child_options_common');
		}
	}
	
	public function installed() {
		return $this->parent_child_options_common->installed();
    //$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "extension WHERE `type` = 'module' AND `code` = 'parent_child_options'");
    //return $query->num_rows;
	}
	
	public function getExtensionCode() {
		return $this->extension_code;
	}
	
  public function ocmodIsApplied() {
    
    if ( !$this->model_catalog_product ) {
      $this->load->model('catalog/product');
    }
    return method_exists('ModelCatalogProduct', 'pcop_front_getProductOptionParents');
    
  }
	
	public function getProductEditPageScriptPath() {
		$basic_path = 'view/javascript/liveopencart/parent_child_options/pcop_product_edit_page.js';
		$modified = filemtime( DIR_APPLICATION.$basic_path );
		return $basic_path.'?v='.$modified; 
	}
  
  public function checkTables() {
    
		// parent_option_id - option_id
		// parent_option_value_id - option_value_id
		
		$this->db->query("
			CREATE TABLE IF NOT EXISTS
				`".DB_PREFIX."pcop` (
					`pcop_id` int(11) NOT NULL AUTO_INCREMENT,
					`product_option_id` int(11) NOT NULL,
					`parent_option_id` int(11) NOT NULL,
					`pcop_or` tinyint(1) NOT NULL,
					PRIMARY KEY (`pcop_id`),
					FOREIGN KEY (`product_option_id`) 		REFERENCES `'. DB_PREFIX .'product_option`(`product_option_id`) 			ON DELETE CASCADE,
					FOREIGN KEY (`parent_option_id`) 			REFERENCES `'. DB_PREFIX .'option`(`option_id`) 			ON DELETE CASCADE
				) ENGINE=MyISAM DEFAULT CHARSET=utf8
		");
		
		$this->db->query("
			CREATE TABLE IF NOT EXISTS
				`".DB_PREFIX."pcop_value` (
					`pcop_id` int(11) NOT NULL,
					`product_option_id` int(11) NOT NULL,
					`parent_option_value_id` int(11) NOT NULL,
					FOREIGN KEY (`product_option_id`) 		REFERENCES `'. DB_PREFIX .'product_option`(`product_option_id`) 			ON DELETE CASCADE,
					FOREIGN KEY (`parent_option_value_id`) 			REFERENCES `'. DB_PREFIX .'option_value`(`option_value_id`) 			ON DELETE CASCADE
				) ENGINE=MyISAM DEFAULT CHARSET=utf8
		");
		
  }
	
	public function getProductOptionParents($product_option_id) {
		
		$pcop = array();
		
		if ( !$this->installed() ) {
			return $pcop;
		}
      
		$language_id = $this->config->get('config_language_id');
		
		$query_pcop = $this->db->query("SELECT PCOP.*, OD.name
																		FROM `".DB_PREFIX."pcop` PCOP, `".DB_PREFIX."option` O, `".DB_PREFIX."option_description` OD
																		WHERE PCOP.product_option_id = '" . (int)$product_option_id . "'
																			AND O.option_id = PCOP.parent_option_id
																			AND OD.option_id = PCOP.parent_option_id
																			AND OD.language_id = ".(int)$language_id."
																		ORDER BY O.sort_order ASC, OD.name ASC, O.option_id ASC
																		");
		foreach ($query_pcop->rows as $row_pcop) {
			
			$query_pcop_values = $this->db->query(" SELECT PCOPV.*, OVD.name
																							FROM `".DB_PREFIX."pcop_value` PCOPV, `".DB_PREFIX."option_value` OV, `".DB_PREFIX."option_value_description` OVD
																							WHERE PCOPV.pcop_id = '" . (int)$row_pcop['pcop_id'] . "'
																								AND OV.option_value_id = PCOPV.parent_option_value_id
																								AND OVD.option_value_id = PCOPV.parent_option_value_id
																								AND OVD.language_id = ".(int)$language_id."
																							ORDER BY OV.sort_order ASC, OVD.name ASC, OV.option_value_id ASC
																							");
			$row_pcop['values'] = array();
			foreach ($query_pcop_values->rows as $row_pcop_value) {
				$row_pcop['values'][] = $row_pcop_value['parent_option_value_id'];
			}
		
			$pcop[] = $row_pcop;
		}
		
		return $pcop;
		
	}
	
	public function setProductOptionParents($product_option_id, $product_option) {
		
		if ( !$this->installed() ) {
			return;
		}
		
		$this->db->query("DELETE FROM `".DB_PREFIX."pcop` WHERE product_option_id = '" . (int)$product_option_id . "' ");
		$this->db->query("DELETE FROM `".DB_PREFIX."pcop_value` WHERE product_option_id = '" . (int)$product_option_id . "' ");
		
		if (isset($product_option['pcop'])) {
			foreach ($product_option['pcop'] as $pcop) {
				
				if (isset($pcop['parent_option_id']) && $pcop['parent_option_id']) {
				
					$query = $this->db->query("SELECT * FROM `".DB_PREFIX."pcop` WHERE pcop_id = ".(int)$pcop['pcop_id']." ");
					if ($query->num_rows) { //possible copying
						$pcop['pcop_id'] = 0;
					}
				
					$this->db->query("INSERT INTO `".DB_PREFIX."pcop`
														SET product_option_id = '" . (int)$product_option_id . "'
															, parent_option_id = '" . (int)$pcop['parent_option_id'] . "'
															, pcop_id = '" . (int)$pcop['pcop_id'] . "'
															, pcop_or = '" . ( isset($pcop['pcop_or']) ? (int)$pcop['pcop_or'] : 0 ) . "'
														");
														
					$pcop_id = $this->db->getLastId();                  
																					
					if ( isset($pcop['values']) && $pcop['values'] ) {
						
						foreach ($pcop['values'] as $parent_option_value_id) {
							$this->db->query("INSERT INTO `".DB_PREFIX."pcop_value`
																SET product_option_id = '" . (int)$product_option_id . "'
																	, parent_option_value_id = '" . (int)$parent_option_value_id . "'
																	, pcop_id = '" . (int)$pcop_id . "'
																");
						}
					}
				}
			}
		}
		
	}
	
	public function reinsertProductOption($product_option_id) {
		
		if ( !$this->installed() ) {
			return;
		}
		
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "product_option WHERE product_option_id = ".(int)$product_option_id." ");
		if ( $query->num_rows ) {
			
			$sql_set = "";
			foreach ($query->row as $key => $value) {
				$sql_set .= ", `".$key."` = '".$value."' ";
			}
			$sql_set = substr($sql_set, 1);
			$this->db->query("DELETE FROM ".DB_PREFIX."product_option WHERE product_option_id = ".$product_option_id." ");
			$this->db->query("INSERT INTO ".DB_PREFIX."product_option SET ".$sql_set);
		}
	}
	
	public function getAllProductOptionsByProductId($product_id) {
		
		$product_option_data = array();
		if ( !$this->installed() ) {
			return $product_option_data;
		}
      
		$product_option_query = $this->db->query("SELECT *
																							FROM `" . DB_PREFIX . "product_option` po
																								LEFT JOIN `" . DB_PREFIX . "option` o ON (po.option_id = o.option_id)
																								LEFT JOIN `" . DB_PREFIX . "option_description` od ON (o.option_id = od.option_id)
																							WHERE po.product_id = '" . (int)$product_id . "'
																								AND od.language_id = '" . (int)$this->config->get('config_language_id') . "'
																							ORDER BY o.sort_order ASC, od.name, po.product_option_id ASC
																							");

		foreach ($product_option_query->rows as $product_option) {
			$product_option_value_data = array();

			$product_option_value_query = $this->db->query("SELECT *
																											FROM " . DB_PREFIX . "product_option_value POV
																												LEFT JOIN `" . DB_PREFIX . "option_value` OV
																													ON (POV.option_value_id = OV.option_value_id)
																												LEFT JOIN `" . DB_PREFIX . "option_value_description` OVD
																													ON (POV.option_value_id = OVD.option_value_id)
																											WHERE POV.product_option_id = '" . (int)$product_option['product_option_id'] . "'
																												AND OVD.language_id = '" . (int)$this->config->get('config_language_id') . "'
																											ORDER BY OV.sort_order ASC, OVD.name ASC, POV.product_option_value_id ASC
																										");

			foreach ($product_option_value_query->rows as $product_option_value) {
				$product_option_value_data[] = array(
					'product_option_value_id' => $product_option_value['product_option_value_id'],
					'option_value_id'         => $product_option_value['option_value_id'],
					'name'                    => $product_option_value['name'],
					'quantity'                => $product_option_value['quantity'],
					'subtract'                => $product_option_value['subtract'],
					'price'                   => $product_option_value['price'],
					'price_prefix'            => $product_option_value['price_prefix'],
					'points'                  => $product_option_value['points'],
					'points_prefix'           => $product_option_value['points_prefix'],
					'weight'                  => $product_option_value['weight'],
					'weight_prefix'           => $product_option_value['weight_prefix']
				);
			}

			$product_option_data[] = array(
				'product_option_id'    => $product_option['product_option_id'],
				'product_option_value' => $product_option_value_data,
				'option_id'            => $product_option['option_id'],
				'name'                 => $product_option['name'],
				'type'                 => $product_option['type'],
				'value'                => $product_option['value'],
				'required'             => $product_option['required']
			);
		}

		return $product_option_data;
	}
  
  public function importData($data, $delete_before_import, $use_po_ids) {
    
    $this->checkTables();
    
		if ($delete_before_import) {
			$this->removeAllPCOPData();
		}
    
    $result = array('products'=>array(), 'options'=>array(), 'warnings'=>array());
    
    foreach ( $data as $row ) {
      
      if ( !$this->productExists($row['product_id']) ) {
        $result['warnings'][] = "product not found by ID: ".$row['product_id'];
        continue;
      }
			if ($use_po_ids) {
				if ( !$this->productOptionExists($row['product_option_id']) ) {
					$result['warnings'][] = "product option not found by ID: ".$row['product_option_id'];
					continue;
				}
				if ( !$this->productOptionExists($row['parent_option_id']) ) {
					$result['warnings'][] = "parent product option not found by ID: ".$row['parent_option_id'];
					continue;
				}
			} else {
				if ( !$this->optionExists($row['option_id']) ) {
					$result['warnings'][] = "option not found by ID: ".$row['option_id'];
					continue;
				}
				if ( !$this->optionExists($row['parent_option_id']) ) {
					$result['warnings'][] = "parent option not found by ID: ".$row['parent_option_id'];
					continue;
				}
			}
      
      $vals_ids_temp = explode(',', $row['parent_option_values_ids']);
      $vals_ids = array();
      foreach ( $vals_ids_temp as $val ) {
        if ( (int)$val ) {
					if ($use_po_ids) {
						if ( $this->productOptionValueExists((int)$val) ) {
							$vals_ids[] = (int)$val;
						} else {
							$result['warnings'][] = "parent product option value not found by ID: ".$val;
						}
					} else {
						if ( $this->optionValueExists((int)$val) ) {
							$vals_ids[] = (int)$val;
						} else {
							$result['warnings'][] = "parent option value not found by ID: ".$val;
						}
					}
        }
      }
      
			if ($use_po_ids) {
				$product_option_id = (int)$row['product_option_id'];
	      $parent_option_id = $this->getOptionIdByProductOptionId($row['parent_option_id']);
				$parent_product_option_id = (int)$row['parent_option_id'];
			} else {
				$product_option_id = $this->getProductOptionIdByOptionId($row['product_id'], $row['option_id']);
				$parent_option_id = (int)$row['parent_option_id'];
	      $parent_product_option_id = $this->getProductOptionIdByOptionId($row['product_id'], $row['parent_option_id']);
			}
      
      $this->db->query("INSERT INTO ".DB_PREFIX."pcop
                        SET product_option_id = ".(int)$product_option_id."
                          , parent_option_id = ".(int)$parent_option_id."
                          , pcop_or = ".(int)$row['pcop_or']."
                        ");
      $pcop_id = $this->db->getLastId();
      
      if ( !in_array((int)$row['product_id'], $result['products']) ) {
        $result['products'][] = (int)$row['product_id'];
      }
      if ( !in_array($parent_product_option_id, $result['options']) ) {
        $result['options'][] = (int)$parent_product_option_id;
      }
      
      foreach ( $vals_ids as $val_id ) {
        
				if ($use_po_ids) {
					$parent_option_value_id = $this->getOptionValueIdByProductOptionValueId($val_id);;
				} else {
					$parent_option_value_id = (int)$val_id;
					//$product_option_value_id = $this->getProductOptionValueIdByOptionValueId($row['product_id'], $parent_product_option_id, $val_id);
				}
        
        $this->db->query("INSERT INTO ".DB_PREFIX."pcop_value
                          SET pcop_id = ".(int)$pcop_id."
                            , product_option_id = ".(int)$product_option_id."
                            , parent_option_value_id = ".(int)$parent_option_value_id."
                          ");
        
      }
      
    }
    
    return $result;
  }
  
  private function getProductOptionValueIdByOptionValueId($product_id, $product_option_id, $option_value_id) {
    $query = $this->db->query(" SELECT product_option_value_id FROM ".DB_PREFIX."product_option_value
                                WHERE product_id = ".(int)$product_id."
                                  AND product_option_id = ".(int)$product_option_id."
                                  AND option_value_id = ".(int)$option_value_id."
                                ");
    if ( $query->num_rows ) {
      return $query->row['product_option_value_id'];
    } else {
      $query = $this->db->query(" INSERT INTO ".DB_PREFIX."product_option_value
                                  SET product_id = ".(int)$product_id."
                                    , product_option_id = ".(int)$product_option_id."
                                    , option_value_id = ".(int)$option_value_id."
                                  ");
      return $this->db->getLastId();
    }
  }
	
	private function getOptionValueIdByProductOptionValueId($product_option_value_id) {
    
    $query = $this->db->query(" SELECT option_value_id FROM ".DB_PREFIX."product_option_value
                                WHERE product_option_value_id = ".(int)$product_option_value_id."
                                ");
    if ( $query->num_rows ) {
      return $query->row['option_value_id'];
    }
    return 0;
  }
  
  private function getProductOptionIdByOptionId($product_id, $option_id) {
    $query = $this->db->query(" SELECT product_option_id FROM ".DB_PREFIX."product_option
                                WHERE product_id = ".(int)$product_id."
                                  AND option_id = ".(int)$option_id."
                                ");
    if ( $query->num_rows ) {
      return $query->row['product_option_id'];
    } else {
      $this->db->query("INSERT INTO ".DB_PREFIX."product_option
                        SET product_id = ".(int)$product_id."
                          , option_id = ".(int)$option_id."
                        ");
      return $this->db->getLastId();
    }
    return 0;
  }
	private function getOptionIdByProductOptionId($product_option_id) {
    $query = $this->db->query(" SELECT option_id FROM ".DB_PREFIX."product_option
                                WHERE product_option_id = ".(int)$product_option_id."
                                ");
    if ( $query->num_rows ) {
      return $query->row['option_id'];
    }
    return 0;
  }
  
  private function productExists($product_id) {
    return $this->db->query(" SELECT product_id FROM ".DB_PREFIX."product WHERE product_id = ".(int)$product_id." ")->num_rows;
  }
  
  private function optionExists($option_id) {
    return $this->db->query(" SELECT option_id FROM `".DB_PREFIX."option` WHERE option_id = ".(int)$option_id." ")->num_rows;
  }
  private function optionValueExists($option_value_id) {
    return $this->db->query(" SELECT option_value_id FROM `".DB_PREFIX."option_value` WHERE option_value_id = ".(int)$option_value_id." ")->num_rows;
  }
	private function productOptionExists($product_option_id) {
    return $this->db->query(" SELECT product_option_id FROM `".DB_PREFIX."product_option` WHERE product_option_id = ".(int)$product_option_id." ")->num_rows;
  }
  private function productOptionValueExists($product_option_value_id) {
    return $this->db->query(" SELECT product_option_value_id FROM `".DB_PREFIX."product_option_value` WHERE product_option_value_id = ".(int)$product_option_value_id." ")->num_rows;
  }
  
  
  private function removeAllPCOPData() {
    $this->db->query("TRUNCATE TABLE ".DB_PREFIX."pcop ");
		$this->db->query("TRUNCATE TABLE ".DB_PREFIX."pcop_value ");
  }
  
  public function getExportData($use_po_ids) {
    
    $this->checkTables();
    
    $query = $this->db->query(" SELECT PO.product_id, PO.option_id, PO.product_option_id, PCOP.pcop_id, PCOP.pcop_or
																			, PCOP.parent_option_id, PPO.product_option_id AS parent_product_option_id
																			, PCOPV.parent_option_value_id, PPOV.product_option_value_id AS parent_product_option_value_id
                                FROM ".DB_PREFIX."pcop PCOP
																		,".DB_PREFIX."pcop_value PCOPV
																		,".DB_PREFIX."product_option PO
																		,".DB_PREFIX."product_option PPO
																		,".DB_PREFIX."product_option_value PPOV
                                WHERE PCOP.product_option_id = PO.product_option_id
                                  AND PCOP.pcop_id = PCOPV.pcop_id
																	
																	AND PCOP.parent_option_id = PPO.option_id
																	AND PO.product_id = PPO.product_id
																	
																	AND PCOPV.parent_option_value_id = PPOV.option_value_id
																	AND PO.product_id = PPOV.product_id
																	AND PPO.product_option_id = PPOV.product_option_id
                              ");
    
    $data = array();
    
    foreach ( $query->rows as $row ) {
      
      if ( !isset($data[$row['pcop_id']]) ) {
				
        $data[$row['pcop_id']] = array();
				$data[$row['pcop_id']]['product_id'] 	= $row['product_id'];
				if ($use_po_ids) {
					$data[$row['pcop_id']]['product_option_id'] 				= $row['product_option_id'];
					$data[$row['pcop_id']]['parent_option_id'] 					= $row['parent_product_option_id'];
					$data[$row['pcop_id']]['parent_option_values_ids'] 	= ''.$row['parent_product_option_value_id'];
				} else {
					$data[$row['pcop_id']]['option_id'] 								= $row['option_id'];
					$data[$row['pcop_id']]['parent_option_id'] 					= $row['parent_option_id'];
					$data[$row['pcop_id']]['parent_option_values_ids'] 	= ''.$row['parent_option_value_id'];
				}
        
        $data[$row['pcop_id']]['pcop_or'] 		= $row['pcop_or'];
      } else {
				if ($use_po_ids) {
					$data[$row['pcop_id']]['parent_option_values_ids'] .= ','.$row['parent_product_option_value_id'];
				} else {
					$data[$row['pcop_id']]['parent_option_values_ids'] .= ','.$row['parent_option_value_id'];
				}
      }
      
    }
    
    return $data;
    
  }
  
  public function getCurrentVersion() {
    return '3.0.0';
  }
  
  public function install() {
    $this->checkTables();
  }
  
  public function uninstall() {
    $this->db->query("DROP TABLE IF EXISTS `".DB_PREFIX."pcop`;");
		$this->db->query("DROP TABLE IF EXISTS `".DB_PREFIX."pcop_value`;");
  }
  
  
  
}