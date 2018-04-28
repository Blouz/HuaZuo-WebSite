<?php
class ControllerExtensionModuleAnyport extends Controller {
	private $log;
	private $version;
	private $adminDir;
	private $moduleName;
	private $call_model;
	private $module_path;
	private $moduleModel;
	private $anyportHelper;
	private $data = array();
	private $error = array();
	private $dropboxCallback;
	private $extensions_link;
	private $moduleNameSmall;
	private $language_variables;
	private $googleDriveCallback;
	private $default_chunk_size = 4000000;


	public function __construct($registry){
		parent::__construct($registry);
		// Anyport Library
		$this->anyportHelper = new Anyport($registry);

		$this->load->config('isenselabs/anyport');
		$this->log = new Log('anyport_log');
		
		$this->version = $this->config->get('anyport_version');
		$this->moduleName = $this->config->get('anyport_name');
		$this->call_model = $this->config->get('anyport_model');
		$this->module_path = $this->config->get('anyport_path');
		$this->moduleNameSmall = $this->config->get('anyport_name_small');

		// Module specific declaration
		$this->load->model($this->module_path);
		$this->moduleModel = $this->{$this->call_model};
		$this->moduleLanguage = $this->load->language($this->module_path, $this->moduleNameSmall);
        $this->moduleLanguage = $this->moduleLanguage[$this->moduleNameSmall];

        // Api callbacks
		$this->dropboxCallback = HTTPS_CATALOG.'index.php?route='.$this->module_path.'/dropbox';
		$this->googleDriveCallback = HTTPS_CATALOG.'index.php?route='.$this->module_path.'/googleDrive';

		$this->document->addScript('view/javascript/summernote/summernote.js');
		$this->document->addStyle('view/javascript/summernote/summernote.css');
		$this->extensions_link = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'].'&type=module', 'SSL');

    	//Loading framework models
	 	$this->load->model('setting/store');
		$this->load->model('setting/setting');
        $this->load->model('localisation/language');

        $this->data = $this->moduleLanguage->all();
		$this->data['moduleName']      = $this->moduleName;
		$this->data['module_path']     = $this->module_path;
		$this->data['moduleNameSmall'] = $this->moduleNameSmall;
	}

	public function index() {
		// Module initial variable declaration
		$this->document->setTitle($this->data['heading_title']);
		$this->document->addStyle('view/stylesheet/anyport/upload/jquery.fileupload.css');
		$this->document->addStyle('view/stylesheet/anyport.css');

		$this->document->addScript('view/javascript/anyport/jquery.bootstrap.wizard.min.js');
		$this->document->addScript('view/javascript/anyport/upload/vendor/jquery.ui.widget.js');
		$this->document->addScript('view/javascript/anyport/upload/jquery.iframe-transport.js');
		
		$this->document->addScript('view/javascript/anyport/upload/jquery.fileupload.js');
		$this->document->addScript('view/javascript/anyport/upload/jquery.fileupload-process.js');
		$this->document->addScript('view/javascript/anyport/upload/jquery.fileupload-validate.js');

		$preSaveSettings = $this->moduleModel->getSetting('AnyPort');

		if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			if (!$this->user->hasPermission('modify', $this->module_path)) {
				$this->validate();
				$this->response->redirect($this->extensions_link);
			}
			if (!empty($this->request->post['OaXRyb1BhY2sgLSBDb21'])) {
				$this->request->post['AnyPort']['LicensedOn'] = $this->request->post['OaXRyb1BhY2sgLSBDb21'];
			}
			if (!empty($this->request->post['cHRpbWl6YXRpb24ef4fe'])) {
				$this->request->post['AnyPort']['License'] = json_decode(base64_decode($this->request->post['cHRpbWl6YXRpb24ef4fe']),true);
			}

			if (!empty($this->request->post['AnyPort']['License'])) {
				$this->session->data['success'] = $this->language->get('text_success_activation');
				$this->request->post['AnyPort']['Activated'] = 'yes';
			}

			$googleDriveSettingsCheck = $this->checkAuthenticationSettings($preSaveSettings['AnyPort']['Settings']['GoogleDrive'],$this->request->post['AnyPort']['Settings']['GoogleDrive']);
			
			if ($this->request->post['AnyPort']['Settings']['GoogleDrive']['Enable'] == '1') {
				if ($googleDriveSettingsCheck['logged']) {
					if ($this->request->post['AnyPort']['Settings']['GoogleAuthSettingsChanged'] == '1') {
						if ($googleDriveSettingsCheck['changed']) {
							$this->request->post['AnyPort']['Settings']['GoogleDrive'] = $preSaveSettings['AnyPort']['Settings']['GoogleDrive'];
							$this->error['googleDriveAuthentication'] = htmlspecialchars(sprintf($this->data['text_google_drive_auth_changed'], $googleDriveSettingsCheck['keyChanged']));
						} 
					}
				} else {
					$this->error['googleDriveAuthentication'] = htmlspecialchars($googleDriveSettingsCheck['message']);
				}
			}

			if ($this->request->post['AnyPort']['Settings']['DropboxAuthSettingsChanged'] == '1' && $this->request->post['AnyPort']['Settings']['Dropbox']['Enable'] == '1') {
				$dropboxSettingsCheck = $this->checkDropboxAuthSettings($preSaveSettings['AnyPort']['Settings']['Dropbox'],$this->request->post['AnyPort']['Settings']['Dropbox']);
				if ($dropboxSettingsCheck['changed']) {
					$this->request->post['AnyPort']['Settings']['Dropbox'] = $preSaveSettings['AnyPort']['Settings']['Dropbox'];
					$this->error['dropboxAuthentication'] = htmlspecialchars(sprintf($this->data['text_dropbox_auth_changed'], $dropboxSettingsCheck['keyChanged']));
				}
			}

			$this->moduleModel->editSetting('AnyPort', $this->request->post);
			$this->session->data['success'] = $this->data['text_success'];
			$selectedTab = (empty($this->request->post['selectedTab'])) ? 0 : $this->request->post['selectedTab'];
		}
		
		$this->data['maxSize']                   = $this->moduleModel->returnMaxUploadSize();
		$this->data['maxSizeReadable']           = $this->moduleModel->returnMaxUploadSize(true);
		
		$this->data['autoBackup']['Dropbox']     = $this->moduleModel->getDropboxAutoBackup();
		$this->data['autoBackup']['GoogleDrive'] = $this->moduleModel->getGoogleUserInfo();

		if ($this->data['autoBackup']['GoogleDrive']['Error'] && $this->data['autoBackup']['GoogleDrive']['Code'] !== 333) {
			$this->error['googleDriveAuthentication'] = $this->data['text_google_drive_authentication_error'];
		}

		if ($this->data['autoBackup']['Dropbox']['Error']) {
			$this->error['dropboxAuthentication'] = $this->data['text_dropbox_authentication_error'];
		}

		$this->data['dropboxCallback']     = $this->dropboxCallback;
		$this->data['googleDriveCallback'] = $this->googleDriveCallback;

		if (isset($this->session->data['success'])) {
			$this->data['success'] = $this->session->data['success'];
			unset($this->session->data['success']);
		} else {
			$this->data['success'] = '';
		}

		if (isset($this->error['warning'])) {
			$this->data['error_warning'] = $this->error['warning'];
		} else {
			$this->data['error_warning'] = '';
		}
		if (!empty($this->error['dropboxAuthentication'])) {
			$this->data['dropbox_notice'] = $this->error['dropboxAuthentication'];
		} else {
			$this->data['dropbox_notice'] = '';
		}

		if (!empty($this->error['googleDriveAuthentication'])) {
			$this->data['google_drive_notice'] = $this->error['googleDriveAuthentication'];
		} else {
			$this->data['google_drive_notice'] = '';
		}

 		if (isset($this->error['code'])) {
			$this->data['error_code'] = $this->error['code'];
		} else {
			$this->data['error_code'] = '';
		}

  		$this->data['breadcrumbs'] = array();

   		$this->data['breadcrumbs'][] = array(
       		'text'      => $this->registry->get('language')->get('text_home'),
			'href'      => $this->url->link('common/home', 'user_token=' . $this->session->data['user_token'], 'SSL'),
      		'separator' => false
   		);

   		$this->data['breadcrumbs'][] = array(
       		'text'      => $this->moduleLanguage->get('text_module'),
			'href'      => $this->extensions_link,
      		'separator' => ' :: '
   		);

   		$this->data['breadcrumbs'][] = array(
       		'text'      => $this->data['heading_title'],
			'href'      => $this->url->link($this->module_path, 'user_token=' . $this->session->data['user_token'], 'SSL'),
      		'separator' => ' :: '
   		);

		$this->data['heading_title'] = $this->data['heading_title'].' '.$this->version;
		
		$this->data['action']        = $this->url->link($this->module_path, 'user_token=' . $this->session->data['user_token'], 'SSL');
		$this->data['cancel']        = $this->extensions_link;
		$this->data['user_token']    = $this->session->data['user_token'];

		if (isset($this->request->post['AnyPort'])) {
			foreach ($this->request->post['AnyPort'] as $key => $value) {
				$this->data['data']['AnyPort'][$key] = $this->request->post['AnyPort'][$key];
			}
		} else {
			$configValue = $this->config->get('AnyPort');
			set_error_handler(array($this, 'error_handler'));
			try {
				if (@unserialize(@base64_decode($configValue)) === false) { 
					$this->data['data']['AnyPort'] = @unserialize($configValue) === false ? $configValue : unserialize($configValue); 
				} else { 
					$this->data['data']['AnyPort'] = @unserialize(@base64_decode($configValue)) === false ? $configValue : unserialize(base64_decode($configValue)); 
				} 
			} catch (Exception $e) {
				$error = $e->getMessage();
			}
			restore_error_handler();
		}

		$this->data['currenttemplate'] =  $this->config->get('config_template');
		$this->data['tableList']       =  $this->moduleModel->getListOfTables(false);
		
		$this->data['modules']         = array();

		if (isset($this->request->post['anyport_module'])) {
			$this->data['modules'] = $this->request->post['anyport_module'];
		} elseif ($this->config->get('anyport_module')) {
			$this->data['modules'] = $this->config->get('anyport_module');
		}

		$this->data['ClientID']       = $this->data['data']['AnyPort']['Settings']['Dropbox']['AppKey'];
		
		$this->data['googleClientId'] = !empty($this->data['data']['AnyPort']['Settings']['GoogleDrive']['AppKey']) ? $this->data['data']['AnyPort']['Settings']['GoogleDrive']['AppKey'] : '';
		
		$this->data['developerKey']   = !empty($this->data['data']['AnyPort']['Settings']['GoogleDrive']['PickerKey']) ? $this->data['data']['AnyPort']['Settings']['GoogleDrive']['PickerKey'] : '';

		if (!empty($this->data['googleClientId'])) {
			$appId = explode('-', $this->data['googleClientId']);
			$this->data['appId'] = $appId[0];
		} else {
			$this->data['appId'] = '';
		}

		// check if there already is an acceess token set.
		$settingName            =  'AnyPortAuth';
		$authCode               = $this->moduleModel->getSetting($settingName);
		$hostname               = (!empty($_SERVER['HTTP_HOST'])) ? $_SERVER['HTTP_HOST'] : '' ;
		$this->data['authCode'] = !empty($authCode['AnyPortAuth_dropBoxAccessToken']['access_token']) ? true : false;

		//constants
		$this->data['anyport_admin_folder_name'] = ANYPORT_ADMIN_FOLDER_NAME;
		$this->data['hostname']                  = (strstr($hostname,'http://') === false) ? 'http://'.$hostname: $hostname;

		$this->data['licenseDataBase64'] = !empty($this->data['data']['AnyPort']['License']) ? base64_encode(json_encode($this->data['data']['AnyPort']['License'])) : '';

		$this->data['supportTicketLink'] = 'http://isenselabses.net/tickets/open/' . base64_encode('Support Request').'/'.base64_encode('46').'/'. base64_encode($_SERVER['SERVER_NAME']);
		
		$folder                          = (empty($setting['AnyPort']['Settings']['Dropbox']['WorkingFolder'])) ? '' : $setting['AnyPort']['Settings']['Dropbox']['WorkingFolder'];

		$this->data['header']                   = $this->load->controller('common/header');
		$this->data['column_left']              = $this->load->controller('common/column_left');
		$this->data['footer']                   = $this->load->controller('common/footer');
		$this->data['dropbox_auto_backup']      = $this->load->view($this->module_path.'/autobackup/dropbox_auto_backup', $this->data);
		$this->data['google_drive_auto_backup'] = $this->load->view($this->module_path.'/autobackup/google_drive_auto_backup', $this->data);
		$this->data['dropbox_settings']         = $this->load->view($this->module_path.'/settings/dropbox', $this->data);
		$this->data['google_drive_settings']    = $this->load->view($this->module_path.'/settings/googledrive', $this->data);
		$this->data['tab_backup']               = $this->load->view($this->module_path.'/tab_backup', $this->data);
		$this->data['tab_restore']              = $this->load->view($this->module_path.'/tab_restore', $this->data);
		$this->data['tab_auto_backup']          = $this->load->view($this->module_path.'/tab_auto_backup', $this->data);
		$this->data['tab_settings']             = $this->load->view($this->module_path.'/tab_settings', $this->data);
		$this->data['tab_support']              = $this->load->view($this->module_path.'/tab_support', $this->data);
		
		$this->data['google_drive_auto_backup'] = $this->load->view($this->module_path.'/autobackup/google_drive_auto_backup', $this->data);
		
		$this->response->setOutput($this->load->view($this->module_path.'/anyport', $this->data));
	}

	public function cleanTempFolder()
	{
		try {
			$this->moduleModel->cleanTemp();
		} catch (Exception $e) {
			$this->log->write('There was an error while cleaning temp folder!');
		}
		echo 'Success!';
	}

	public function getBackupInfo()
	{
		$type = $this->request->get['type'];
		switch ($type) {
			case 'FullBackup':
			break;
			case 'DatabaseBackup':
				$this->data['tables_to_backup'] =  $this->moduleModel->getListOfTables(false);
				$this->response->setOutput($this->load->view($this->module_path.'/backup/database_backup',$this->data));
			break;
			case 'FilesBackup':
				$this->data['user_token'] = $this->session->data['user_token'];
				$this->data['cwd']        = ANYPORT_ROOT;
				$this->response->setOutput($this->load->view($this->module_path.'/backup/files_backup',$this->data));
			break;
			case 'CustomBackup':
				$this->data['tables_to_backup'] =  $this->moduleModel->getListOfTables(false);
				$this->data['user_token']       = $this->session->data['user_token'];
				$this->data['cwd']              = ANYPORT_ROOT;
				$this->response->setOutput($this->load->view($this->module_path.'/backup/custom_backup',$this->data));
			break;
		}
	}

	public function createBackupList(){

		if (isset($this->session->data['filesCount'])) {
			unset($this->session->data['filesCount']);
		}

		$json = array();
		$rootFolders = !empty($this->request->post['folders']) ? $this->request->post['folders'] : NULL;
		$json = $this->anyportHelper->createBackupList($rootFolders);

		header('Content-Type: application/json');
		echo json_encode($json);
		exit;
	}

	public function backupFiles() {
		$progress = !empty($this->request->post['progress']) ? $this->request->post['progress'] : 0;
		$type = !empty($this->request->post['type']) ? $this->request->post['type'] : 'Basic';
		$filesZipped = !empty($this->request->post['filesZipped']) ? $this->request->post['filesZipped'] : 0;
		$json = $this->anyportHelper->backupFiles($progress,$type,$filesZipped);
		header('Content-Type: application/json');
		echo json_encode($json);
	}

	public function backupTables()
	{
		$json = array();
		$backupType = !empty($this->request->post['type']) ? $this->request->post['type'] : false;
		$tables = !empty($this->request->post['tables']) ? $this->request->post['tables'] : array();
		$offset = !empty($this->request->post['offset']) ? $this->request->post['offset'] : 0;
		$completedTables = !empty($this->request->post['completedTables']) ? $this->request->post['completedTables'] : 0;
		if (!isset($this->session->data['anyportfileszip'])) {
			$today =  $date = date('Y-m-d H-i-s');
			$today = str_replace(" ","_",$today);
			$zipfilename = $today.'_'.ANYPORT_SERVER_NAME_READABLE.'_Backup_AnyPort_'.$backupType.'.tar';
			$archiveName = ANYPORT_TEMP_FOLDER.$zipfilename;
			$this->session->data['anyportfileszip'] = $archiveName;
		}

		if (empty($tables)) {
			$tables = $this->moduleModel->getListOfTables(false);
		}

		$json = $this->anyportHelper->exportSQL($tables,$offset,$completedTables);

		header('Content-Type: application/json');
		echo json_encode($json);
	}


	public function createDownloadLink()
	{
		$json = array();

		$file = isset($this->session->data['anyportfileszip']) ? $this->session->data['anyportfileszip'] : false;
		$file = stripslashes($file);
		$this->session->data['lastZip'] = $this->session->data['anyportfileszip'];
		unset($this->session->data['anyportfileszip']);
		if ($file===false) {
			$json = array(
				'status' => 'error',
				'data' => array(
					'message' => 'Unable to create file',
				)
			);
		} else {
			$fileSize = $this->moduleModel->sizeToString(filesize($file));
			$fileName = basename($file);
			$json = array(
				'status' => 'success',
				'data' => array(
					'message' => 'Download complete',
					'type'    => 'download',
					'file'    => html_entity_decode($this->url->link($this->module_path.'/downloadZip', 'user_token='.$this->session->data['user_token'], 'SSL')),
					'fileSize'=> $fileSize,
					'fileName'=> $fileName
				)
			);
		}

		header('Content-Type: application/json');
		echo json_encode($json);
		exit;
	}

	public function downloadZip()
	{
		if (ob_get_level()) ob_end_clean();
		session_write_close();
		$file = isset($this->session->data['lastZip']) ? $this->session->data['lastZip'] : false;
		$file = stripslashes($file);
		//unset($this->session->data['anyportfileszip']);
		header('Content-Type: application/octet-stream');
		header("Content-Transfer-Encoding: Binary");
		header("Content-disposition: attachment; filename=\"" . basename($file) . "\"");
		readfile($file); // do the double-download-dance (dirty but worky)
		exit;
	}

	public function sendToGoogleDrive()
	{
		$googleDrive = $this->moduleModel->initGoogleDrive();
		$this->load->model('setting/setting');
		$authCode = $this->moduleModel->getSetting('AnyPortGoogle');

		$token = !empty($authCode['AnyPortGoogle_AccessToken']) ? $authCode['AnyPortGoogle_AccessToken'] : NULL;

		if(empty($token)) throw new Exception($this->language->get('anyport_no_access_token'));
		$token = @unserialize($token);
		$googleDrive->setAccessToken($token);

		/* Refresh token when expired */
		if ($googleDrive->isAccessTokenExpired()) {
		  // the new access token comes with a refresh token as well
		  $refreshToken = $this->model_setting_setting->getSetting('AnyPortGoogleRefresh');
		  $googleDrive->fetchAccessTokenWithRefreshToken($refreshToken['AnyPortGoogleRefresh_RefreshToken']);
		  $this->model_setting_setting->editSetting('AnyPortGoogle', array('AnyPortGoogle_AccessToken' => serialize($googleDrive->getAccessToken())));
		}

		$service = $this->moduleModel->initGoogleService($googleDrive);
		$progress = !empty($this->request->get['progress']) ? $this->request->get['progress'] : 0 ;
		$resumeUri = !empty($this->request->get['resumeUri']) ? $this->request->get['resumeUri'] : null;
		$file = $this->session->data['anyportfileszip'];
		$driveFolderId = $this->moduleModel->getGoogleDriveFolder();
		$json = $this->anyportHelper->sendToGoogleDrive($googleDrive,$service,$file,$progress,$resumeUri,$driveFolderId);
		header('Content-Type: application/json');
		echo json_encode($json);
		exit;

	}

	public function sendToDropbox()
	{
		$folder = (empty($setting['AnyPort']['Settings']['Dropbox']['WorkingFolder'])) ? '' : $setting['AnyPort']['Settings']['Dropbox']['WorkingFolder'];

		$dropbox = $this->moduleModel->initDropbox();

		$settingName =  'AnyPortAuth';
		$authCode = $this->moduleModel->getSetting($settingName);

		$token = !empty($authCode['AnyPortAuth_dropBoxAccessToken']['access_token']) ? $authCode['AnyPortAuth_dropBoxAccessToken']['access_token'] : NULL;

		if(empty($token)) throw new Exception($this->language->get('anyport_no_access_token'));
		$this->log->write($this->language->get('anyport_no_access_token'));
		$dropbox->SetAccessToken($token);

		$file = $this->session->data['anyportfileszip'];

		//Make Dropbox File
		$dropboxFile = $dropbox->makeDropboxFile($file);

		$json = array();
		$json = $this->anyportHelper->sendToDropbox($dropboxFile,$dropbox,$this->request->get['session_id'],$this->request->get['offset'],$this->request->get['chunkSize'],$this->request->get['remaining']);
		header('Content-Type: application/json');
		echo json_encode($json);
		exit;
	}

	public function listDirectory()
	{
		header('Content-Type: application/json');
		$requested_dir = !empty($_GET['dir']) ? rtrim($_GET['dir'], '/') : dirname(__FILE__);
		$requested_dir = realpath($requested_dir);
		$rootOpenCart = dirname(DIR_APPLICATION);

		$json = array();
		if (!is_dir($requested_dir)) {
			$json['error'] = true;
			$json['msg'] = 'Bad directory';
			echo json_encode($json);exit;
		}

		$entries = scandir($requested_dir);
		$json['entries'] = array(
			'dirs' => array(),
			'files' => array()
		);
		foreach ($entries as $entry) {
			if ($entry == '.') continue;
			$full_path = $requested_dir.'/'.$entry;

			if (($full_path !== $rootOpenCart.'/..') && is_dir($full_path)) {
				$json['entries']['dirs'][md5($full_path)] = array(
					'absolute_path' => $full_path,
					'name' => $entry.'/'
				);
			} else if (($full_path !== $rootOpenCart.'/..') && is_file($full_path)) {
				$json['entries']['files'][md5($full_path)] = array(
					'absolute_path' => $full_path,
					'name' => $entry
				);
			}
		}

		$json['error'] = false;
		$json['cwd'] = $requested_dir;
		echo json_encode($json);exit;
	}

	// Restore functions START
	public function upload()
	{
		$this->moduleModel->clearSession();
		$options = array(
			'upload_dir' => ANYPORT_TEMP_FOLDER,
			'upload_url' => $this->config->get('config_url').'temp/',
		);
		$upload_handler = new UploadHandler($options);
	}

	public function restoreFiles()
	{
		$index = (isset($this->request->post['index']) && !empty($this->request->post['index'])) ? $this->request->post['index'] : 0;
		$file = (isset($this->request->post['file']) && !empty($this->request->post['file'])) ? $this->request->post['file'] : NULL;
		$totalFiles = (isset($this->request->post['totalFiles']) && !empty($this->request->post['totalFiles'])) ? $this->request->post['totalFiles'] : 0;
		$tempTotalFiles = (isset($this->request->post['tempTotalFiles']) && !empty($this->request->post['tempTotalFiles'])) ? $this->request->post['tempTotalFiles'] : 0;
		$json = $this->moduleModel->restoreRootFromFile($file, $index,$totalFiles,$tempTotalFiles);

		header('Content-Type: application/json');
		echo json_encode($json);
		exit;
	}

	public function restoreDatabase()
	{
		$file = (isset($this->request->post['file']) && !empty($this->request->post['file'])) ? $this->request->post['file'] : NULL;

		$progress = (isset($this->request->post['progress']) && !empty($this->request->post['progress'])) ? $this->request->post['progress'] : 0;

		$json = $this->moduleModel->restoreDatabaseFromFile($file,$progress);

		header('Content-Type: application/json');
		echo json_encode($json);
		exit;
	}

	public function getRestoreInfo()
	{
		$source = $this->request->get['source'];
		switch ($source) {
			case 'Dropbox':
				$this->response->setOutput($this->load->view($this->module_path.'/restore/restore_from_dropbox'));
				break;
			case 'GoogleDrive':
				if (isset($this->request->post['AnyPort'])) {
					foreach ($this->request->post['AnyPort'] as $key => $value) {
						$this->data['data']['AnyPort'][$key] = $this->request->post['AnyPort'][$key];
					}
				} else {
					$configValue = $this->config->get('AnyPort');
					set_error_handler(array($this, 'error_handler'));
					if (@unserialize(@base64_decode($configValue)) === false) { 
						$this->data['data']['AnyPort'] = @unserialize($configValue) === false ? $configValue : unserialize($configValue); 
					} else { 
						$this->data['data']['AnyPort'] = @unserialize(@base64_decode($configValue)) === false ? $configValue : unserialize(base64_decode($configValue)); 
					} 
					restore_error_handler();
				}

				$this->data['googleClientId'] = !empty($this->data['data']['AnyPort']['Settings']['GoogleDrive']['AppKey']) ? $this->data['data']['AnyPort']['Settings']['GoogleDrive']['AppKey'] : '';

				$this->data['developerKey'] = !empty($this->data['data']['AnyPort']['Settings']['GoogleDrive']['PickerKey']) ? $this->data['data']['AnyPort']['Settings']['GoogleDrive']['PickerKey'] : '';

				if (!empty($this->data['googleClientId'])) {
					$appId = explode('-', $this->data['googleClientId']);
					$this->data['appId'] = $appId[0];
				} else {
					$this->data['appId'] = '';
				}
				$this->response->setOutput($this->load->view($this->module_path.'/restore/restore_from_google_drive',$this->data));
				break;
			case 'FileStandard':
				$this->data['user_token'] = $this->session->data['user_token'];
				$this->response->setOutput($this->load->view($this->module_path.'/restore/restore_from_file',$this->data));
				break;
		}
	}

	public function downloadFromGoogleDrive()
	{
		$googleDrive = $this->moduleModel->initGoogleDrive();
		$this->load->model('setting/setting');
		$authCode = $this->moduleModel->getSetting('AnyPortGoogle');

		$token = !empty($authCode['AnyPortGoogle_AccessToken']) ? $authCode['AnyPortGoogle_AccessToken'] : NULL;
		if(empty($token)) throw new Exception($this->language->get('anyport_no_access_token'));
		$this->log->write($this->language->get('anyport_no_access_token'));
		$token = @unserialize($token);
		$googleDrive->setAccessToken($token);

		/* Refresh token when expired */
		if ($googleDrive->isAccessTokenExpired()) {
		  // the new access token comes with a refresh token as well
		  $refreshToken = $this->model_setting_setting->getSetting('AnyPortGoogleRefresh');
		  $googleDrive->fetchAccessTokenWithRefreshToken($refreshToken['AnyPortGoogleRefresh_RefreshToken']);
		  $this->model_setting_setting->editSetting('AnyPortGoogle', array('AnyPortGoogle_AccessToken' => serialize($googleDrive->getAccessToken())));
		}

		$service = $this->moduleModel->initGoogleService($googleDrive);

		$file = $this->request->post['fileId'];
		$size = $this->request->post['size'];
		$name = $this->request->post['fileName'];
		$chunkStart = !empty($this->request->post['chunkStart']) ? $this->request->post['chunkStart'] : 0;
		$json = $this->moduleModel->downloadFromGoogleDrive($googleDrive,$service,$file,$size,$name,$chunkStart);
		header('Content-Type: application/json');
		echo json_encode($json);
		exit;
	}

	public function downloadFromDropbox()
	{
		$file = $this->request->post['file'];
		$size = $this->request->post['size'];
		$offset = $this->request->post['offset'];
		$limit = $this->request->post['limit'];
		$downloaded = isset($this->request->post['downloaded']) ? $this->request->post['downloaded'] : 0;
		$remaining = isset($this->request->post['remaining']) ? $this->request->post['remaining'] : 0;

		$setting = $this->moduleModel->getSetting('AnyPort');
		$folder = (empty($setting['AnyPort']['Settings']['Dropbox']['WorkingFolder'])) ? '' : $setting['AnyPort']['Settings']['Dropbox']['WorkingFolder'];
		$json = $this->moduleModel->downloadFromDropbox($folder,$file,$size,$offset,$downloaded,$limit,$remaining);
		header('Content-Type: application/json');
		echo json_encode($json);
		exit;
	}


	private function validate() {
		if (!$this->user->hasPermission('modify', $this->module_path)) {
			$this->error['warning'] = $this->language->get('error_permission');
			$this->error = true;
		}
		if (!$this->error) {
			return true;
		} else {
			return false;
		}
	}

	private function checkAuthenticationSettings($oldSettings,$newSettings)
	{
		$data['logged'] = false;
		$data['message'] = '';
		$getGoogleUserInfo = $this->moduleModel->getGoogleUserInfo();
		if (!$getGoogleUserInfo['Error']) {
			if (!empty($oldSettings) && !empty($newSettings)) {
				foreach ($oldSettings as $key => $value) {
					if ($oldSettings[$key] != $newSettings[$key]) {
						$data['logged'] = true;
						$data['changed'] = true;
						$data['keyChanged'] = $key;
						$data['message'] = $key.' was changed without reconfitming the app. Changes are not saved! Please confirm your Google drive app and try again.';
					}
				}
			}
		} elseif($getGoogleUserInfo['Code'] === 333){
			$data['logged'] = false;
			$data['message'] = 'You have enabled Google Drive but your app is not configured!';
		}
		return $data;
	}

	private function checkDropboxAuthSettings($oldSettings,$newSettings)
	{
		$data = array();
		foreach ($oldSettings as $key => $value) {
			if ($oldSettings[$key] != $newSettings[$key]) {
				$data['changed'] = true;
				$data['keyChanged'] = $key;
				$data['message'] = $key.' was changed without reconfitming the app. Changes are not saved! Please confirm your Google drive app and try again.';
			}
		}
		return $data;
	}

	public function googleDrive()
	{
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
		$page = (empty($_GET['page'])) ? 'popup' : (!in_array($_GET['page'], array('popup', 'callback', 'list')) ? 'popup' : $_GET['page']);
		$setting = $this->moduleModel->getSetting('AnyPort');
		$authCode = $this->moduleModel->getSetting('AnyPortGoogle');

		$token = !empty($authCode['AnyPortGoogle_AccessToken']) ? $authCode['AnyPortGoogle_AccessToken'] : NULL;
		if ($token) {
			$token = @unserialize($token);
		}
		if ($page == 'popup' ) {
			$apiKey = $this->session->data['googleApiKey'] = !empty($_GET['appKey']) ? $_GET['appKey'] : NULL;
			$apiSecret = $this->session->data['googleApiSecret'] = !empty($_GET['appSecret']) ? $_GET['appSecret'] : NULL;
			$this->session->data['appFolder'] = !empty($_GET['appFolder']) ? $_GET['appFolder'] : NULL;
		} else {
			$apiKey = $this->session->data['googleApiKey'];
			$apiSecret = $this->session->data['googleApiSecret'];
		}

		$client = $this->moduleModel->initGoogleDrive($apiKey,$apiSecret);
		if (!empty($token)) {
			$client->revokeToken($token);
		}

		$client->setRedirectUri($this->googleDriveCallback);
		if ($page == 'popup') {
			$auth_url = $client->createAuthUrl();
			header('Location: ' .$auth_url);
		} else if($page == 'callback'){
			if (isset($_GET['code']) && !empty($_GET['code'])) {

				$accessToken = $client->fetchAccessTokenWithAuthCode($_GET['code']);
				
				$folderName = $this->session->data['appFolder'];
				unset($this->session->data['appFolder']);
				unset($this->session->data['googleApiKey']);
				unset($this->session->data['googleApiSecret']);
				$this->model_setting_setting->editSetting('AnyPortGoogle', array('AnyPortGoogle_AccessToken' => serialize($accessToken)));
				$this->model_setting_setting->editSetting('AnyPortGoogleRefresh',array('AnyPortGoogleRefresh_RefreshToken' => $accessToken['refresh_token']));
				$this->moduleModel->createGoogleDriveFolder($folderName);
				$this->closePopup("googledrive");
			}
		}
	}

	public function dropbox() {
		$page = (empty($_GET['page'])) ? 'popup' : (!in_array($_GET['page'], array('popup', 'callback', 'list')) ? 'popup' : $_GET['page']);
		$setting = $this->moduleModel->getSetting('AnyPort');

		if ($page == 'popup' ) {
			$apiKey = $this->session->data['apiKey'] = !empty($_GET['appKey']) ? $_GET['appKey'] : NULL;
			$apiSecret = $this->session->data['apiSecret'] = !empty($_GET['appSecret']) ? $_GET['appSecret'] : NULL;
		} else {
			$apiKey = $this->session->data['apiKey'];
			$apiSecret = $this->session->data['apiSecret'];
		}

		$dropbox = $this->moduleModel->initDropbox($apiKey,$apiSecret);
		$oAuth2 = $this->moduleModel->getOAuth2Client($apiKey,$apiSecret);

		$return_url = $this->dropboxCallback;
		if ($page == 'popup') {
			try {
				$auth_url = $oAuth2->getAuthorizationUrl($return_url);
				header("Location: ".$auth_url);
			} catch (Exception $e) {
				$this->closePopup('dropbox', $e->getMessage());
			}
		} else if ($page == 'callback') {
			try {
				$authCode = $oAuth2->getAccessToken($_GET['code'],$return_url);
				$this->model_setting_setting->editSetting('AnyPortAuth', array('AnyPortAuth_dropBoxAccessToken' => serialize($authCode)));
				unset($this->session->data['apiSecret']);
				unset($this->session->data['apiKey']);
				$this->closePopup("dropbox");
			} catch (Exception $e) {
				$this->log->write($e->getMessage());
				$this->closePopup('dropbox', $e->getMessage());
			}
		} else if ($page == 'list') {
			$folder = (empty($setting['AnyPort']['Settings']['Dropbox']['WorkingFolder'])) ? '' : $setting['AnyPort']['Settings']['Dropbox']['WorkingFolder'];
			try {
				$list = $this->moduleModel->listFromDropbox($folder);
			} catch (Exception $e) {
				$this->log->write($e->getMessage());
				$list = $e->getMessage();
			}
			$this->generateOutput($list);
		}
	}

	private function closePopup($show, $message = '') {
		switch ($show) {
			case 'dropbox':
				if ($message == '') {
					print_r ('<script>
					if(window.opener && !window.opener.closed) {
						var index = 0;
						if (index == 0) {
							window.close();
						}
						window.opener.anyportPopup.close();
						window.opener.$(".save-changes").click();
					}
					</script>');
				} else {
					print_r ('<script>
					if(window.opener && !window.opener.closed) {
						window.opener.alert("'.str_replace('"', '\\"', $message).' Please check your settings.");
						window.opener.anyportPopup.close();
					}
					</script>');
				}
				break;
			case 'googledrive':
				if ($message == '') {
					print_r ('<script>
					if(window.opener && !window.opener.closed) {
						var index = 0;
						if (index == 0) {
							window.close();
						}
						window.opener.anyportDrivePopup.close();
						window.opener.$(".save-changes").click();
					}
					</script>');
				} else {
					print_r ('<script>
					if(window.opener && !window.opener.closed) {
						window.opener.alert("'.str_replace('"', '\\"', $message).' Please check your settings.");
						window.opener.anyportPopup.close();
					}
					</script>');
				}
				break;
		}
	}

	private function generateOutput($list) {
		if (!empty($list)) {
			if (is_array($list)) {
				$output = array();
				foreach($list as $id => $content) {
					if (stripos($content, 'AnyPort') !== FALSE && (stripos($content, '.zip') === strlen($content) - 4 || stripos($content, '.gz') === strlen($content) - 3)) {
						$output[$id] = $content;
					}
				}
				arsort($output);
				echo (json_encode($output));
			} else if (is_string($list)) {
				echo ($list);
			}
		}
	}

	public function error_handler($severity, $message, $file, $line) {
        throw new Exception($message . " in file " . $file . " on line " . $line);
    }

	public function install()
	{
		$this->moduleModel->install();
	}

	public function uninstall()
	{
		$this->moduleModel->uninstall();
	}
}
