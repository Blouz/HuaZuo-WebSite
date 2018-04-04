<?php
//  Parent-child Options
//  Support: support@liveopencart.com / Поддержка: help@liveopencart.ru
namespace liveopencart;
class parent_child_options_common {
	protected $registry;
	
	public function __construct($registry) {
		$this->registry = $registry;
	}

	public function __get($key) {
		return $this->registry->get($key);
	}
	
	public function installed() {
    $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "extension WHERE `type` = 'module' AND `code` = 'parent_child_options'");
    return $query->num_rows;
	}
	
	public function getThemeName() {
		if ($this->config->get('config_theme') == 'theme_default') {
			return $this->config->get('theme_default_directory');
		} else {
			return substr($this->config->get('config_theme'), 0, 6) == 'theme_' ? substr($this->config->get('config_theme'), 6) : $this->config->get('config_theme') ;
		}
	}
	
	public function getProductPageScriptPath() {
		
		$basic_path = 'view/javascript/liveopencart/parent_child_options/pcop_front.js';
		
		if ( defined('DIR_CATALOG') && defined('HTTP_CATALOG') ) { // admin section
			$file_path = DIR_CATALOG.$basic_path;
			$script_path = HTTP_CATALOG.'catalog/'.$basic_path;
		} else { // customer section
			$file_path = DIR_APPLICATION.$basic_path;
			$script_path = HTTP_SERVER.'catalog/'.$basic_path;
		}
		
		$modified = filemtime( $file_path );
		
		$remove_prefixes = array('http:', 'https:');
		foreach ( $remove_prefixes as $remove_prefix ) {
			if ( strpos($script_path, $remove_prefix) === 0 ) {
				$script_path = substr($script_path, strlen($remove_prefix));
			}
		}
		
		return $script_path.'?v='.$modified; 
	}
	
	private function tablesExist() {
	
		$query = $this->db->query('SHOW TABLES LIKE "' . DB_PREFIX . 'pcop"');
		if ( $query->num_rows ) {
			$query = $this->db->query('SHOW TABLES LIKE "' . DB_PREFIX . 'pcop_value"');
			if ( $query->num_rows ) {
				return true;
			}
		}
	
		return false;
	}
	
	// product_option_id & product_option_value_id, old name getPCOPForProductOption
	public function getProductOptionFrontParents($product_option_id) {
	
		if (!$this->tablesExist()) return false;
		
		$pcop = array();
		
		$language_id = (int)$this->config->get('config_language_id');
		
		// PCOP.product_option_id - product_option_id, PCOP.parent_option_id - option_id of parent
		$query_pcop = $this->db->query("SELECT PCOP.pcop_id, PCOP.pcop_or, PCOP.product_id, PCOP.parent_product_option_id
																		FROM  `".DB_PREFIX."pcop` PCOP
																		WHERE PCOP.product_option_id = '" . (int)$product_option_id . "'
																		");
		/*
		$query_pcop = $this->db->query("SELECT PCOP.pcop_id, PCOP.pcop_or, PO.product_id, POP.product_option_id parent_product_option_id
																		FROM  `".DB_PREFIX."pcop` PCOP
																				,	`".DB_PREFIX."product_option` PO
																				,	`".DB_PREFIX."product_option` POP
																		WHERE PCOP.product_option_id = '" . (int)$product_option_id . "'
																			AND PO.product_option_id = PCOP.product_option_id
																			AND POP.product_id = PO.product_id
																			AND POP.option_id = PCOP.parent_option_id
																		");
		*/
		
		
		foreach ($query_pcop->rows as $row_pcop) {
			
			$query_pcop_values = $this->db->query(" SELECT PCOPV.parent_product_option_value_id
																							FROM  `".DB_PREFIX."pcop_value` PCOPV
																							WHERE PCOPV.pcop_id = '" . (int)$row_pcop['pcop_id'] . "'
																						");
			/*
			$query_pcop_values = $this->db->query(" SELECT POVP.product_option_value_id
																							FROM  `".DB_PREFIX."pcop_value` PCOPV
																									, `".DB_PREFIX."product_option_value` POVP
																							WHERE PCOPV.pcop_id = '" . (int)$row_pcop['pcop_id'] . "'
																								AND POVP.option_value_id = PCOPV.parent_option_value_id
																								AND POVP.product_id = ".(int)$row_pcop['product_id']."
																							");
			*/
			
			$row_pcop['values'] = array();
			foreach ($query_pcop_values->rows as $row_pcop_value) {
				$row_pcop['values'][] = $row_pcop_value['parent_product_option_value_id'];
				//$row_pcop['values'][] = $row_pcop_value['product_option_value_id'];
			}
		
			$pcop[] = $row_pcop;
		}
		
		return $pcop;
	}
	

}