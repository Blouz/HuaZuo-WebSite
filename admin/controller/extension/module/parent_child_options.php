<?php
//  Parent-child Options
//  Support: support@liveopencart.com / Поддержка: help@liveopencart.ru

class ControllerExtensionModuleParentChildOptions extends Controller {
	private $error = array();
	
	private function getLinks() {
		
		$data = array();
		
		$route_home_page 			= 'common/dashboard';
		$route_extensions			= 'marketplace/extension';
		$route_extension_type	= '&type=module';
		$route_module 				= 'extension/module/parent_child_options';
		
		$data['breadcrumbs'] = array();
		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link($route_home_page, 'user_token=' . $this->session->data['user_token'], 'SSL'),
			'separator' => false
		);
		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('text_module'),
			'href'      => $this->url->link($route_extensions, 'user_token=' . $this->session->data['user_token'].$route_extension_type, 'SSL'),
			'separator' => ' :: '
		);
		$data['breadcrumbs'][] = array(
			'text'      => $this->language->get('module_name'),
			'href'      => $this->url->link($route_module, 'user_token=' . $this->session->data['user_token'], 'SSL'),
			'separator' => ' :: '
		);
		
		$data['action'] = $this->url->link($route_module, 'user_token=' . $this->session->data['user_token'], 'SSL');
		$data['action_export'] = $this->url->link($route_module.'/export', '&user_token=' . $this->session->data['user_token'], 'SSL');
	
		$data['cancel'] = $this->url->link($route_extensions, 'user_token=' . $this->session->data['user_token'].$route_extension_type, 'SSL');
		
		$data['redirect'] = $this->url->link($route_module, 'user_token=' . $this->session->data['user_token'], 'SSL');
		
		return $data;
	}
	
  public function index() {
    
    $pcop_lang = $this->load->language('extension/module/parent_child_options');
		//foreach ( $pcop_lang as $key => $val ) {
		//	$data[$key] = $val;
		//}
		
		$links = $this->getLinks();

		$this->document->setTitle($this->language->get('module_name'));
		
		$this->load->model('setting/setting');
    $this->load->model('extension/module/parent_child_options');
				
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
      
			$this->model_setting_setting->editSetting('parent_child_options', $this->request->post);
			$this->model_setting_setting->editSetting('module_parent_child_options', $this->request->post); // save status "enabled"
			
			$this->session->data['success'] = $this->language->get('text_success');
						
			$this->response->redirect($links['redirect']);
      
		}
		
		$this->load->model('extension/module/parent_child_options');
		
		$data['ocmod_is_applied'] 						= $this->model_extension_module_parent_child_options->ocmodIsApplied();
		
		
		$PHPExcelPath = $this->PHPExcelPath();
		$data['PHPExcel_path'] = str_replace(DIR_SYSTEM,"./system",$PHPExcelPath);
		$data['PHPExcel_exists'] = file_exists($PHPExcelPath);
		
		$data['user_token'] = $this->session->data['user_token'];
    
    if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
    
    if (isset($this->session->data['success'])) {
      $data['success'] = $this->session->data['success'];
      unset($this->session->data['success']);
    } 
		
		$data['breadcrumbs'] 		= $links['breadcrumbs'];
		$data['action'] 				= $links['action'];
		$data['action_export'] 	= $links['action_export'];
		$data['cancel'] 				= $links['cancel'];

    
		$data['modules'] = array();
    if (isset($this->request->post['parent_child_options'])) {
			$data['modules'] = $this->request->post['parent_child_options'];
		} elseif ($this->config->get('parent_child_options')) {
			$data['modules'] = $this->config->get('parent_child_options');
		}
		
		if ( $data['ocmod_is_applied'] ) {
			$this->model_extension_module_parent_child_options->checkTables();
		}
		
		$data['module_version'] = $this->model_extension_module_parent_child_options->getCurrentVersion();
		$data['module_info'] = sprintf($this->language->get('module_info'), $data['module_version']);
		/*
		if ( !isset($data['modules']['parent_child_options_version']) || $data['modules']['parent_child_options_version'] < $current_version
				|| "".$data['modules']['parent_child_options_version'] == ("".$current_version."b")) {
			$this->model_extension_module_parent_child_options->update_version();
			$data['modules']['parent_child_options_version'] = $current_version;
			$this->model_setting_setting->editSetting('parent_child_options', array('parent_child_options' => $data['modules']) );
			$data['updated'] = $this->language->get('text_m_updated_to')." ".($current_version);
		}
		*/
		$data['config_admin_language'] = $this->config->get('config_admin_language');
		
    
    /*
    $data['heading_title']                  = $this->language->get('heading_title');
    $data['button_save']                    = $this->language->get('button_save');
		$data['button_cancel']                  = $this->language->get('button_cancel');
    */
		
		$data['extension_code'] = $this->model_extension_module_parent_child_options->getExtensionCode();
    
    $data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
				
		$this->response->setOutput($this->load->view('extension/module/parent_child_options', $data));
    
  }
  
	private function PHPExcelPath() {
		return DIR_SYSTEM . '/PHPExcel/Classes/PHPExcel.php';
	}
	
	public function export() {
		
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && isset($this->request->post['export']) ) {
			
			$this->load->model('setting/setting');
			
      $this->load->model('extension/module/parent_child_options');
			$use_po_ids = isset($this->request->post['use_po_ids']) ? $this->request->post['use_po_ids'] : 0;
			$data = $this->model_extension_module_parent_child_options->getExportData($use_po_ids);
			
			require_once $this->PHPExcelPath();
			
			PHPExcel_Shared_File::setUseUploadTempDirectory(true);
			
			$cacheMethod = PHPExcel_CachedObjectStorageFactory:: cache_to_discISAM; //PHPExcel_CachedObjectStorageFactory::cache_to_discISAM ; //
			$cacheSettings = array( 'memoryCacheSize' => '32MB');
			if (!PHPExcel_Settings::setCacheStorageMethod($cacheMethod, $cacheSettings)) {
				$this->log->write("Related options, PHPExcel cache error");
			}
			
			$objPHPExcel = new PHPExcel();
			$objPHPExcel->setActiveSheetIndex(0);
			
      if ( $data ) {
        
        // cells to text format
        $objPHPExcel->getActiveSheet()->getStyle('A:E')->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_TEXT);
        
        $column = 0;
        $row = 1;
        $first_data_row = reset($data);
        foreach ( $first_data_row as $key => $val ) {
          $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($column, $row, $key);
          $column++;
        }
        
        foreach ( $data as $data_row ) {
          $column = 0;
          $row++;
          foreach ( $data_row as $key => $val ) {
            $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($column, $row, $val);
            $column++;
          }
        }
        
      }
      
      
			$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
			
			header('Content-Description: File Transfer');
      header('Content-Type: application/octet-stream');
      header('Content-Disposition: attachment; filename=parent_child_options.xls');
      header('Content-Transfer-Encoding: binary');
      header('Expires: 0');
      header('Cache-Control: must-revalidate');
      header('Pragma: public');
      
      $objWriter->save('php://output');
      
			exit;
			
		}
	}
  
	public function import() {
		
		$this->load->language('extension/module/parent_child_options');
		
		$json = array();
		
		if (!empty($this->request->files['file']['name']) && $this->request->files['file']['tmp_name'] ) {
			
			require_once $this->PHPExcelPath();
			
			$cacheMethod = PHPExcel_CachedObjectStorageFactory:: cache_to_phpTemp; //PHPExcel_CachedObjectStorageFactory::cache_to_discISAM ; //
			$cacheSettings = array( 'memoryCacheSize' => '32MB');
			PHPExcel_Settings::setCacheStorageMethod($cacheMethod, $cacheSettings);
			
			$excel = PHPExcel_IOFactory::load($this->request->files['file']['tmp_name']); // PHPExcel
			$sheet = $excel->getSheet(0);
			
			$data = $sheet->toArray();
			
			
			if (count($data) > 1) {
				
				$head = array_flip($data[0]);
				$use_po_ids = false;
				
				if (!isset($head['product_id'])) {
					$json['error'] = "column 'product_id' not found";
				}
				
				if (isset($head['product_option_id'])) {
					$use_po_ids = true;
				} elseif (!isset($head['option_id'])) {
					$json['error'] = "column 'option_id' not found";
				}
				
				if (!isset($head['parent_option_id'])) {
					$json['error'] = "column 'parent_option_id' not found";
				}
				
				if (!isset($head['parent_option_values_ids'])) {
					$json['error'] = "column 'parent_option_values_ids' not found";
				}
				
				if (!isset($json['error'])) {
					
					$pcop = array();
					
					for ($i=1;$i<count($data);$i++) {
						
						$row = $data[$i];
						
            $pcop_row = array();
            foreach ($head as $key => $val) {
              $pcop_row[$key] = $row[$val];
            }
            
            $pcop[] = $pcop_row;
            
					}
					
          $this->load->model('extension/module/parent_child_options');
					$delete_before_import = isset($this->request->post['pcop_delete_before_import']) ? (int)$this->request->post['pcop_delete_before_import'] : 0;
          $result = $this->model_extension_module_parent_child_options->importData($pcop, $delete_before_import, $use_po_ids);
					
					$json['products'] = count($result['products']);
					$json['options'] = count($result['options']);
          $json['warnings'] = $result['warnings'];
					
					$json['success'] = $this->language->get('entry_import_ok');
					
				}
				
			} else {
				$json['error'] = "empty table";
			}
			
		} else {
			$json['error'] = "file not uploaded";
		}
		
		$this->response->setOutput(json_encode($json));
	}
	
	
	
	
	public function install() {
    $this->load->model('extension/module/parent_child_options');
    $this->model_extension_module_parent_child_options->install();
		
		$this->load->model('setting/setting');

		$this->model_setting_setting->editSetting('module_parent_child_options', array('module_parent_child_options_status'=>1)); // status = enabled
  }
  
  public function uninstall() {
    $this->load->model('extension/module/parent_child_options');
    $this->model_extension_module_parent_child_options->uninstall();
  }
  
  private function validate() {
    if ( !$this->user->hasPermission('modify', 'extension/module/parent_child_options') ) {
      $this->error['warning'] = $this->language->get('error_permission');
    }
    
    if (!$this->error) {
      return true;
    } else {
      return false;
    }	
  }
  
}