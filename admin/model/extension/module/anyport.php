<?php 
class ModelExtensionModuleAnyport extends Model {
	private   $log;
	private   $seed               = 0;
	private   $fileCount          = 0;
	private   $timeLimit          = 2;
	private   $now                = NULL;
	private   $moduleNameSmall;
	private   $default_chunk_size = 4000000;

	public function __construct($registry) {
		parent::__construct($registry);
		$this->log = new Log('anyport_log');
		$this->load->config('isenselabs/anyport');
		$this->moduleNameSmall = $this->config->get('anyport_name_small');
		$this->module_path = $this->config->get('anyport_path');

		$this->moduleLanguage = $this->load->language($this->module_path, $this->moduleNameSmall);
        $this->moduleLanguage = $this->moduleLanguage[$this->moduleNameSmall];
        $this->data = $this->moduleLanguage->all();
		if (!defined('ANYPORT_ROOT')) define('ANYPORT_ROOT', str_replace('\\', '/',dirname(DIR_APPLICATION)));
		if (!defined('ANYPORT_LIB_FOLDER')) define('ANYPORT_LIB_FOLDER', DIR_SYSTEM.'vendor/isenselabs/anyport/lib');
		if (!defined('ANYPORT_SERVER_NAME_READABLE')) define('ANYPORT_SERVER_NAME_READABLE', str_replace('/', '_', ANYPORT_SERVER_NAME));
		if (!defined('ANYPORT_ADMIN_FOLDER_NAME')) define('ANYPORT_ADMIN_FOLDER_NAME', substr(HTTP_SERVER, strripos(HTTP_SERVER, '/', -2) + 1, strlen(HTTP_SERVER) - 2 - strripos(HTTP_SERVER, '/', -2)));
		if (!defined('ANYPORT_SERVER_NAME')) define('ANYPORT_SERVER_NAME', substr((defined('HTTP_CATALOG') ? HTTP_CATALOG: HTTP_SERVER), 7, strlen((defined('HTTP_CATALOG') ? HTTP_CATALOG : HTTP_SERVER)) - 8));
	}
	
	/* NEW FUNCTIONS */
	public function initGoogleDrive($apiKey = NULL,$apiSecret = NULL)
	{	
		$this->load->model('setting/setting');
		$setting = $this->getSetting('AnyPort');
		require_once(ANYPORT_LIB_FOLDER.'/Google/autoload.php');
		if (is_null($apiKey) && is_null($apiSecret)) {
			$apiKey = (empty($setting['AnyPort']['Settings']['GoogleDrive']['AppKey'])) ? NULL : $setting['AnyPort']['Settings']['GoogleDrive']['AppKey'];
			$apiSecret = (empty($setting['AnyPort']['Settings']['GoogleDrive']['AppSecret'])) ? NULL : $setting['AnyPort']['Settings']['GoogleDrive']['AppSecret'];
		}

		$client = new Google_Client();
		$client->setApplicationName("Anyport");
		$client->setAccessType('offline');
		$client->setClientId($apiKey);
		$client->setClientSecret($apiSecret);
		$client->addScope(array(Google_Service_Drive::DRIVE,Google_Service_Oauth2::USERINFO_PROFILE,Google_Service_Oauth2::USERINFO_EMAIL));

		return $client;
	}

	public function getGoogleUserInfo($apiKey = NULL,$apiSecret = NULL)
	{
		$authCode = $this->getSetting('AnyPortGoogle');
		$token = !empty($authCode['AnyPortGoogle_AccessToken']) ? $authCode['AnyPortGoogle_AccessToken'] : NULL;

		try {
			if(empty($token)) throw new Exception($this->data['anyport_no_access_token']);	
			$token = @unserialize($token);
		} catch (Exception $e) {
			$data = array(
				'Error' => true,
				'Status' => true,
				'Message' =>$e->getMessage(),
				'Code' => 333,
				'User' => NULL
			);
			return $data;
		}
		

		$data = array(
			'Error' => false,
			'Status' => true,
			'Message' =>$this->data['google_drive_not_logged_in'],
			'Code' => NULL,
			'User' => NULL
		);

		$setting = $this->getSetting('AnyPort');
		if (empty($setting['AnyPort']['AutoBackup']['GoogleDrive']['Enable']) || $setting['AnyPort']['AutoBackup']['GoogleDrive']['Enable'] == "No") {
			$data['Message'] = $this->data['text_google_drive_auto_backup_not_enabled'];
			return $data;	
		}

		if (empty($setting['AnyPort']['Settings']['GoogleDrive']['Enable'])) {
			$data['Message'] = $this->data['google_drive_not_enabled'];
			return $data;
		}

		$googleDrive = $this->initGoogleDrive(); 
		$googleDrive->setAccessToken($token);

		/* Refresh token when expired */
		if ($googleDrive->isAccessTokenExpired()) {
		  // the new access token comes with a refresh token as well
			$this->load->model('setting/setting');
			$refreshToken = $this->model_setting_setting->getSetting('AnyPortGoogleRefresh');
			$googleDrive->fetchAccessTokenWithRefreshToken($refreshToken['AnyPortGoogleRefresh_RefreshToken']);
			$this->model_setting_setting->editSetting('AnyPortGoogle', array('AnyPortGoogle_AccessToken' => serialize($googleDrive->getAccessToken())));
		}
		
		$oauth2 = new Google_Service_Oauth2($googleDrive);
		try {
			$userInfo = $oauth2->userinfo->get();
			if ($userInfo) {
				$message = $this->data['google_drive_active'];
				$user = $userInfo->getName().' ('.$userInfo->getEmail().')';
				$final_message = str_replace('{USER}',$user,$message);	
			}
		} catch (Exception $e) {
			$errors = $e->getErrors();
			$final_message = $errors[0]['message'];
			$data['Error'] = true;
			return $data;
		}

		$data = array(
			'Error' => false,
			'Status' => true,
			'Message' =>$final_message,
			'Code' => PHP_BINDIR.'/php -q '.ANYPORT_CRON_FOLDER.'/google_drive_cron.php',
			'User' => $user
		);
		return $data;
	}

	public function getDropboxAutoBackup() {
		$data = array(
			'Error' => false,
			'Status' => true,
			'Message' => $this->data['dropbox_not_logged_in'],
			'Code' => NULL,
			'User' => NULL
		);

		$setting = $this->getSetting('AnyPort');
		
		if (empty($setting['AnyPort']['AutoBackup']['Dropbox']['Enable']) || $setting['AnyPort']['AutoBackup']['Dropbox']['Enable'] == "No") {
			$data['Message'] = $this->data['text_dropbox_auto_backup_not_enabled'];
			return $data;	
		}
		
		if (empty($setting['AnyPort']['Settings']['Dropbox']['Enable'])) {
			$data['Message'] = $this->data['dropbox_not_enabled'];
			return $data;
		}
		
		$dropbox = &$this->initDropbox();
		$authCode = $this->getSetting('AnyPortAuth');
		
		$token = !empty($authCode['AnyPortAuth_dropBoxAccessToken']['access_token']) ? $authCode['AnyPortAuth_dropBoxAccessToken']['access_token'] : NULL;
		
		if (empty($token)) return $data;
		
		try {
			$dropbox->SetAccessToken($token);		
			$info = $dropbox->getCurrentAccount();	
			if ($info) {
				$message = $this->data['dropbox_active'];
				$user = $info->display_name.' ('.$info->email.')';
				$final_message = str_replace('{USER}',$user,$message);		
			}		
		} catch (Exception $e) {
			$data['Error'] = true;
			$data['Message'] = $this->data['dropbox_access_token_expired'];
			return $data;
		}
		
		$data = array(
			'Error' => false,
			'Status' => true,
			'Message' =>$final_message,
			'Code' => PHP_BINDIR.'/php -q '.ANYPORT_CRON_FOLDER.'/dropbox_cron.php',
			'User' => $info->display_name.' ('.$info->email.')'
		);
		
		return $data;
	}
	public function initGoogleService($googleClient)
	{
		require_once(ANYPORT_LIB_FOLDER.'/Google/autoload.php');
		$service = new Google_Service_Drive($googleClient);
		return $service;
	}

	public function createGoogleDriveFolder($name)
	{
		$googleDrive = $this->initGoogleDrive(); 
		$this->load->model('setting/setting');
		$authCode = $this->getSetting('AnyPortGoogle');
		$data = array();
	
		$token = !empty($authCode['AnyPortGoogle_AccessToken']) ? $authCode['AnyPortGoogle_AccessToken'] : NULL;

		if(empty($token)) throw new Exception($this->data['anyport_no_access_token']);	
		$token = @unserialize($token);
		$googleDrive->setAccessToken($token);

		/* Refresh token when expired */
		if ($googleDrive->isAccessTokenExpired()) {
		  // the new access token comes with a refresh token as well
		  $refreshToken = $this->model_setting_setting->getSetting('AnyPortGoogleRefresh');
		  $googleDrive->fetchAccessTokenWithRefreshToken($refreshToken['AnyPortGoogleRefresh_RefreshToken']);
		  $this->model_setting_setting->editSetting('AnyPortGoogle', array('AnyPortGoogle_AccessToken' => serialize($googleDrive->getAccessToken())));
		}

		$driveService = $this->initGoogleService($googleDrive);
		$fileMetadata = new Google_Service_Drive_DriveFile(array(
		  'name' => $name,
		  'mimeType' => 'application/vnd.google-apps.folder'));
		$file = $driveService->files->create($fileMetadata, array(
		  'fields' => 'id'));
		$data['AnyPortGoogleDriveFolderId'] = $file->id;

		$this->model_setting_setting->editSetting('AnyPortGoogleDriveFolder',$data);
	}

	public function getGoogleDriveFolder()
	{
		$this->load->model('setting/setting');
		$folderId = $this->model_setting_setting->getSetting('AnyPortGoogleDriveFolder');
		return $folderId['AnyPortGoogleDriveFolderId'];
	}

	public function &initDropbox($apiKey = NULL,$apiSecret = NULL) {
		require_once(ANYPORT_LIB_FOLDER.'/Dropbox/autoload.php');

		$setting = $this->getSetting('AnyPort');

		if (is_null($apiKey) && is_null($apiSecret)) {
			$apiKey    = (empty($setting['AnyPort']['Settings']['Dropbox']['AppKey'])) ? NULL : $setting['AnyPort']['Settings']['Dropbox']['AppKey'];
			$apiSecret = (empty($setting['AnyPort']['Settings']['Dropbox']['AppSecret'])) ? NULL : $setting['AnyPort']['Settings']['Dropbox']['AppSecret'];
		}
		
		$dropboxApp = new Kunnu\Dropbox\DropboxApp($apiKey, $apiSecret);
		$dropbox    = new Kunnu\Dropbox\Dropbox($dropboxApp);
		
		return $dropbox;
	}

	public function restoreRootFromFile($file,$index,$totalFiles,$tempTotalFiles) {

		if ($file === false) throw new Exception($this->data['anyport_invalid_file']);		
		require_once(ANYPORT_LIB_FOLDER.'/Anyport/Tar.php');
		$nextIndex = 0;
		$timeElapsed = 0;
		$finished = true;
		$result = false;
		$currentFile = '';
		$originalFile = $file;
		$info = pathinfo($file);
		$start = microtime(true);
		$file = ANYPORT_TEMP_FOLDER.$file;
		$result = false;
		$json = array();

		//decompression
		$decompressFolder = ANYPORT_ROOT.'/';
		
		if ($info['extension'] == 'tar') {
			$zip = new Tar();
			$zip->setCompression(0);
			$seek = !empty($this->session->data['anyport_current_position']) ? $this->session->data['anyport_current_position'] : false;
			file_put_contents('anyport_debug',var_export($seek,true).PHP_EOL,FILE_APPEND);
			$zip->open($file,$seek);
			if (isset($this->session->data['total_files'])) {
				$totalFiles = $this->session->data['total_files'];
			} else {
				$totalFiles = count($zip->contents());
				$this->session->data['total_files'] = $totalFiles;
				$zip->close();
				$zip->open($file,$seek);
			}

			try {				
				if ($totalFiles) {
					for($i = $index; $i < $totalFiles; $i++) {

				  		$result = $zip->extract($decompressFolder,'Files/','/^Database\//','',1);  

				  		$nextIndex = $i+1;
					  	if (count($result) == 1) {
					  		$finished = true;
					  		break;
					  	} else {
					  		$file_object = reset($result);
				  			$currentFile = $file_object->getPath();
					  	}
					  	$this->session->data['anyport_current_position'] = $result['current_position']; 
				    	$timeElapsed = microtime(true) - $start;
				    	if ($timeElapsed > $this->timeLimit) {
							$finished = false;
							break;	    		
						}	
				    }  			     
				} 
			} catch (\Exception $e) {
				$this->log->write($e->getMessage());
			}
		}
		$zip->close();

		if ($finished) {
			unset($this->session->data['anyport_current_position']);
			$json = array(
				'status' => 'finished',
				'data'   => array(
					'message' => 'Files Restored!',
					'currentFile' => $currentFile,
					'index' => $nextIndex,
					'percentage' => '100%',
					'seek' => $seek,
				)
			);
		} else {
			$percentage = floor(($nextIndex / $totalFiles) * 100) .'%';
			$json = array(
				'status' => 'inprogress',
				'data'   => array(
					'current_position' => $this->session->data['anyport_current_position'],
					'seek' => $seek,
					'index' => $nextIndex,
					'currentFile' => $currentFile,
					'zipFile'  => $originalFile,
					'totalFiles' => $totalFiles,
					'removedFiles' => $tempTotalFiles,
					'percentage' => $percentage
				)
			);
		}
		return $json;
	}

	public function restoreDatabaseFromFile($file,$progress) {
		
		if ($file === false) throw new Exception($this->data['anyport_invalid_file']);		
		require_once(ANYPORT_LIB_FOLDER.'/Anyport/Tar.php');
		$info = pathinfo($file);
		$originalFile = $file;
		$file = ANYPORT_TEMP_FOLDER.$file;
		$timeElapsed = 0;
		$db_file_name = isset($this->session->data['db_file_name']) ? $this->session->data['db_file_name'] : false;
		$finished = false;
		$start = microtime(true);
		$json = array();

		if ($info['extension'] != 'tar') throw new Exception($this->data['anyport_invalid_file']);

		if ($info['extension'] == 'tar' && !$db_file_name) {
			$zip = new Tar();
			$zip->setCompression(0);
			$seek = !empty($this->session->data['anyport_current_position']) ? $this->session->data['anyport_current_position'] : false;
			$zip->open($file,$seek);

			if (isset($this->session->data['total_files'])) {
				$totalFiles = $this->session->data['total_files'];
			} else {
				$totalFiles = count($zip->contents());
				$this->session->data['total_files'] = $totalFiles;
				$zip->close();
				$zip->open($file,$seek);
			}
			
			if ($totalFiles) {			
				for($i = 0; $i < $totalFiles; $i++) {	
					if ($timeElapsed > $this->timeLimit) {
		    			break;
		    		}	

		    		$result = $zip->extract(ANYPORT_ROOT.'/temp/','Database/','/^Files\//','',1);
		    		
					foreach ($result as $file) {
						if (is_a($file,'FileInfo')) {
							if (!$file->getIsdir() && (pathinfo($file->getPath(), PATHINFO_EXTENSION) == 'sql')) {
								$db_file_name = ANYPORT_ROOT.'/temp/'.$file->getPath();
								$this->session->data['db_file_name'] = $db_file_name;
								break;
							}
						}
					}	
			    }  
			} else {
				throw new Exception($this->data['anyport_unable_zip_file_open']);
				$this->log->write($this->data['anyport_unable_zip_file_open']);
			}
			$zip->close();
			sleep(2);
		}

		if (!empty($result)) {
			$this->session->data['anyport_current_position'] = $result['current_position'];
		}
		
        if ($db_file_name && pathinfo($db_file_name, PATHINFO_EXTENSION) == 'sql') {
			$fh = fopen($db_file_name, "r");
		
			if (!empty($progress)) {
				fseek($fh,$progress,SEEK_SET);
			}

		    while (true) {	
		    	$read = fgets($fh);
		    	if ($read !== false) {					    		
		    	 	$read = trim($read);
					if ($read == '') continue;
					try {
						$query = $this->db->query(str_replace('`{ANYPORT_DB_PREFIX}', '`' . DB_PREFIX, $read));
						file_put_contents('anyport_debug',var_export($read,true).PHP_EOL,FILE_APPEND);
						file_put_contents('anyport_debug',var_export($query,true).PHP_EOL,FILE_APPEND);
					} catch (\Exception $e) {
						$result[] = $e->getMessage();
					}
		    		
		    		$timeElapsed = microtime(true) - $start;
		    		if ($timeElapsed > $this->timeLimit) {
		    			$progress = ftell($fh);	
		    			$finished = false;			    			
		    			break;
		    		}
		    	} else {
		    		$finished = true;
		    		$progress = ftell($fh);	
		    		break;
		    	}   
		    }
			fclose($fh);	
        }

		if ($finished) {
			$json = array(
				'status' => 'finished',
				'data' => array(
					'message' => 'Database restored!',
					'progress' => $progress,
					'sql_file' => $db_file_name,	
				)
			);		
		} else {
			$json = array(
				'status' => 'inprogress',
				'data' => array(
					'progress' => $progress,
					'file' => $originalFile,
					'sql_file' => $db_file_name
				),
			);
		}
					
		return $json;
	}

	public function downloadFromGoogleDrive($googleDrive, $service, $fileId, $size, $fileName, $chunkStart = 0)
	{
		$finished = true;
		$json = array();
		$tempDir = ANYPORT_TEMP_FOLDER;

		// Get the authorized Guzzle HTTP client
	    $http = $googleDrive->authorize();

	    // Open a file for writing
	    $fp = fopen($tempDir.$fileName, 'a+');

	    $startTime = microtime(true);
	    $timeElapsed = 0;
	    // Iterate over each chunk and write it to our file
	    if ($size < $this->default_chunk_size) {
			$chunkSizeBytes = ceil($size / 2);
		} else {
			$chunkSizeBytes = $this->default_chunk_size;
		}
		
	    while ($chunkStart < $size) {
	      $finished = false;
	      if ($timeElapsed > $this->timeLimit) {
	      	$progress = round((($chunkStart / $size)  * 100) ,2)  .'%';
	      	break;
	      }

	      $chunkEnd = $chunkStart + $chunkSizeBytes;
	      $response = $http->request(
	        'GET',
	        sprintf('/drive/v3/files/%s', $fileId),
	        [
	          'query' => ['alt' => 'media'],
	          'headers' => [
	            'Range' => sprintf('bytes=%s-%s', $chunkStart, $chunkEnd)
	          ]
	        ]
	      );
	      
	      $chunkStart = $chunkEnd + 1;
	      $progress = round((($chunkStart / $size)  * 100) ,2)  .'%';
	      fwrite($fp, $response->getBody()->getContents());
	      if ($chunkStart > $size) {
	      	$finished = true;
	      	break;
	      }
	      $timeElapsed = microtime(true) - $startTime;
	    }
	    // close the file pointer
	    fclose($fp);

	    if ($finished) {
	    	$this->clearSession();
	    	$json = array(
				'status' => 'finished',
				'data' => array(
					'message'    => 'GoogleDrive file download finished',
					'percentage' => '100%'
				)
			);
	    } else {
	    	$json = array(
				'status' => 'inprogress',
				'data' => array(
					'chunkStart' => $chunkStart,
					'fileName' 		=> $fileName,
					'fileId'     => $fileId,
					'size'       => $size,
					'percentage' => $progress
				)
			);
    	}
		return $json;
	}

	public function downloadFromDropbox($folder = '', $file = '',$size = 0, $offset=0,$downloaded,$limit=0,$remaining = 0) {
		if (empty($file)) throw new Exception($this->data['anyport_no_file']);
		
		$dropbox = &$this->initDropbox();
		$this->load->model('setting/setting');
		$authCode = $this->getSetting('AnyPortAuth');
		
		$folder = $this->formatDropboxFolder($folder);
		$result = false;
		$source ='/'.$file;
		
		$token = !empty($authCode['AnyPortAuth_dropBoxAccessToken']['access_token']) ? $authCode['AnyPortAuth_dropBoxAccessToken']['access_token'] : NULL;
		$tempDir = ANYPORT_TEMP_FOLDER;
		$dropbox->SetAccessToken($token);
		
		if(empty($token)) throw new Exception($this->data['anyport_no_access_token']);
		if (!is_dir($tempDir)) if (!mkdir($tempDir, 0755)) throw new Exception($this->data['anyport_temp_dir_error']);
		$metaData = $dropbox->getMetaData($source);
		
		$fileMetaData = $metaData->getData();
		$fileSize = $fileMetaData['size'];
		$finished = false;

		if ($fileSize < $this->default_chunk_size) {
			$chunkSize = ceil($fileSize / 2);
		} else {
			$chunkSize = $this->default_chunk_size;
		}
		if ($remaining == 0) {
			$remaining = $fileSize;
		}
		if ($limit == 0) {
			$limit = $chunkSize;
		}

		$timeElapsed = 0;

		$start = microtime(true);
	
		while ($timeElapsed < 10) {
			
			if ($remaining > $chunkSize) {	
				
				$contents = $this->dropboxDownloadChunk($source,$offset,$limit);
				//Save file contents to disk
				file_put_contents($tempDir.$file,$contents,FILE_APPEND);				
				$downloaded = $limit;
				$percentage = (floor($downloaded / $size) * 100).'%';
				$remaining = $remaining - $chunkSize;
				$offset = $downloaded+1;
				$limit = $offset + $chunkSize;	        	
			} else {
				$contents = $this->dropboxDownloadChunk($source,$offset,$limit);
				file_put_contents($tempDir.$file,$contents,FILE_APPEND);
				$finished = true;
				break;					
			}				
			$timeElapsed = (microtime(true)) - $start;	
		}	

		if ($finished) {
			$this->clearSession();
			$json = array(
				'status' => 'finished',
				'data' => array(
					'message'    => 'Dropbox file download finished',
					'percentage' => '100%'
				)
			);
		} else {
			$json = array(
				'status' => 'inprogress',
				'data' => array(
					'downloaded' => $downloaded,
					'remaining'  => $remaining,
					'offset'     => $offset,
					'limit'      => $limit,
					'file'       => $file,
					'size'       => $size,
					'percentage' => $percentage
				)
			);
		}

		return $json;
	}

	public function dropboxDownloadChunk($dropBoxFile = '', $offset = 0, $limit = 4000)
	{	
		$authCode = $this->getSetting('AnyPortAuth');		
		
		
		$token = !empty($authCode['AnyPortAuth_dropBoxAccessToken']['access_token']) ? $authCode['AnyPortAuth_dropBoxAccessToken']['access_token'] : NULL;

		$curl = curl_init();		
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://content.dropboxapi.com/2/files/download",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_HTTPHEADER => array(
		    "authorization: Bearer ".$token,
		    "cache-control: no-cache",
		    "dropbox-api-arg: {\"path\": \"".$dropBoxFile."\"}",
		    "range: bytes=".$offset."-".$limit
		  ),
		));		
		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);
		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  return $response;
		}
	}
	
	public function listFromDropbox($folder = '') {
		$dropbox = &$this->initDropbox();
		$this->load->model('setting/setting');
		$authCode = $this->getSetting('AnyPortAuth');
		
		$token = !empty($authCode['AnyPortAuth_dropBoxAccessToken']['access_token']) ? $authCode['AnyPortAuth_dropBoxAccessToken']['access_token'] : NULL;
		$folder = $this->formatDropboxFolder($folder);

		$result = array();
		
		if(empty($token)) throw new Exception('No access token set.');
		
		$dropbox->SetAccessToken($token);
		set_error_handler(array($this, 'error_handler'));
		try {
			$temp = $dropbox->listFolder($folder);
		} catch (Exception $e) {
			$error = $e->getMessage();
		}
		restore_error_handler();
		foreach ($temp->getData() as $content) {
			foreach ($content as $entrie) {
				$result[] = $entrie['name'];
			}
		}
		
		return $result;
	}

	public function getOAuth2Client($apiKey,$apiSecret)
	{
		$dropbox = &$this->initDropbox($apiKey,$apiSecret);
		$oauth2 = new Kunnu\Dropbox\Authentication\OAuth2Client($dropbox->getApp(),$dropbox->getClient());
		return $oauth2;
	}

	public function formatDropboxFolder($folder, $leadingSlash = true) {
		if (!is_string($folder)) throw new Exception($this->data['anyport_folder_not_string']);
		$folder = $this->clearInvalidEntries(explode('/', $folder));
		foreach ($folder as $index => $item) {
			$folder[$index] = rawurlencode($item);
		}
		if (empty($folder)) $folder = '';
		else $folder = ($leadingSlash ? '/' : '').implode('/', $folder);
		return $folder;
	}
	
	
	/* GENERIC FUNCTIONS */
	private function exec_enabled() {
		return function_exists('exec') &&
			!in_array('exec', array_map('trim',explode(', ', ini_get('disable_functions')))) &&
			!(strtolower(ini_get('safe_mode')) != 'off' && ini_get('safe_mode') != 0) && strtolower(PHP_OS) == 'linux';
	}
	
	public function getArchiveEngine() {
		
		$result = false;
		if (class_exists('ZipArchive')) {
			$result = 'ZipArchive';	
		}
		
		if ($result === false) throw new Exception("Error: Your web server does not have Tar and ZipArchive. Please enable one of them and try again.");

		return $result;
	}
	
	public function getListOfTables($readable = true) {
		$productTables = $this->db->query('SHOW TABLES'); 
		$i = 0;
		$tables = array();
    	foreach($productTables->rows as $k => $table) {
			$tableName = array_values($table);
			$tableName = $tableName[0];
			$tableName = $readable ? ucwords(str_replace('_',' ',$tableName)) : $tableName;
			
			array_push($tables,$tableName);
			$i++; 
		}
		return $tables;
	}
	
	public function createDownload($file, $die = true) {
		return (defined(HTTPS_CATALOG) ?  HTTPS_CATALOG : HTTP_CATALOG. '/temp/' . basename($file));
	}

	public function cleanTemp($tempDir = '') {
		if (empty($tempDir)) {
			$tempDir = ANYPORT_TEMP_FOLDER;
		}

		$files = scandir($tempDir);
		
		foreach ($files as $file) {
			if (!in_array($file, array('.', '..', 'index.html'))) {
				if (is_file($tempDir.$file)) unlink ($tempDir.$file);
				if (is_dir($tempDir.$file)) {
					$this->cleanTemp($tempDir.$file);	
					rmdir($tempDir.$file);
				}
			}
		}
	}

	public function getTables(&$data, $tables = array()) {
		if (!is_array($tables) && $this->array_depth($tables) != 1) throw new Exception($this->data['anyport_invalid_data']);
		if (empty($tables)) $tables = $this->db->query('SHOW TABLES'); 
		
		foreach ($tables as $table) {
			$fields = $this->db->query('SELECT * FROM `'.$table.'`');
			$fieldNames = $this->db->query('SHOW COLUMNS FROM `'.$table.'`');
			
			foreach ($fieldNames->rows as $name) {
				$data[$table][$table][0][$name['Field']] = $name['Field'];
			}
			
			foreach ($fields->rows as $index => $row) {
				$data[$table][$table][$index+1] = $row;
			}
		}
	}

	public function returnMaxUploadSize($readable = false) {
		(float)$upload = $this->sizeToString(ini_get('upload_max_filesize'));
		(float)$post = $this->sizeToString(ini_get('post_max_size'));
		
		if ((float)$upload >= (float)$post) return (float)$readable ?(float)$this->sizeToString((float)$post - (float)524288) : $post - (float)524288;
		else return $readable ? $this->sizeToString($upload) : $upload;
	}

	public function clearInvalidEntries($folders) {
		$result = array();
		foreach	($folders as $folder) {
			if ($folder != '') {
				$result[] = trim($folder);	
			}
		}
		return $result;
	}
	private function array_depth($array) { //FROM Jeremy Ruten @ http://stackoverflow.com/questions/262891/is-there-a-way-to-find-how-how-deep-a-php-array-is
		$max_depth = 1;
	
		if (is_array($array)) {
			foreach ($array as $value) {
				if (is_array($value)) {
					$depth = $this->array_depth($value) + 1;
		
					if ($depth > $max_depth) {
						$max_depth = $depth;
					}
				}
			}
		}
		return $max_depth;
	}

	private function writeToFile(&$fh, &$data, &$path) {
		if (fwrite($fh, $data) === false) {
			fclose($fh);
			unlink($path);
			throw new Exception($this->data['anyport_unable_write_file']);
		}
	}

	private function downloadFile($source, $destination) {
		$fh = fopen($destination, 'w+');
		if ($fh === false) throw new Exception($this->data['anyport_no_file']);
		$fr = fopen($source, 'r');
		if ($fr === false) throw new Exception($this->data['anyport_no_file']);
		
		while(!feof($fr)) { 
			$buffer = fread($fr, 524288);
			if ($buffer === false) throw new Exception($this->data['anyport_no_file']);
			
			$this->writeToFile($fh, $buffer, $destination);
		}
		
		fclose($fh);
		fclose($fr);
	}

	public function sizeToString($size) {
		$count = 0;
		for ($i = $size; $i >= (float)1024; $i /= (float)1024) $count++;
		switch ($count) {
			case 0 : $suffix = ' B'; break;
			case 1 : $suffix = ' KB'; break;
			case 2 : $suffix = ' MB'; break;
			case 3 : $suffix = ' GB'; break;
			case ((float)$count >= 4) : (float)$suffix = ' TB'; break;
		}
		return round((float)$i, 2).(float)$suffix;
	}

	public function getSetting($name) {
		$this->load->model('setting/setting');
		$setting = $this->model_setting_setting->getSetting($name);
		foreach($setting as $setKey => $setVal) {
			set_error_handler(array($this, 'error_handler'));
			try {
				$setting[$setKey] = @unserialize(@base64_decode($setVal)) === false ? unserialize($setVal) : unserialize(base64_decode($setVal)); 
			} catch (Exception $e) {
				$error = $e->getMessage();
			}
			restore_error_handler();
		}
		return $setting;
	}

	public function editSetting($name, $value) {
		$this->load->model('setting/setting');
		$requestPost = $value;
		
		foreach($value as $serKey => $serVal) {
			$requestPost[$serKey] = base64_encode(serialize($serVal));
		}

		$this->model_setting_setting->editSetting($name, $requestPost);	
	}

	public function getProgress($error = NULL) {
		$result = array(
			'error' => false,
			'message' => '',
			'done' => false
		);
		if (!empty($error)) {
			$result['error'] = true;
			$result['message'] = $error;
			$result['done'] = false;
			$this->setProgress($result);
		} else {
			if (file_exists(ANYPORT_ROOT . '/temp/anyport_progress.txt')) {
				$fh = fopen(ANYPORT_ROOT . '/temp/anyport_progress.txt', 'r');
				$data = fread($fh, filesize(ANYPORT_ROOT . '/temp/anyport_progress.txt'));
				$result = json_decode($data, true);
			} else {
				$fh = fopen(ANYPORT_ROOT . '/temp/anyport_progress.txt', 'w');
				fwrite($fh, json_encode($result));
			}
			fclose($fh);
		}
		return $result;
	}

	public function clearSession()
	{
		if (isset($this->session->data['anyport_current_position'])) {
			unset($this->session->data['anyport_current_position']);
		}
		if (isset($this->session->data['total_files'])) {
			unset($this->session->data['total_files']);
		}
		if (isset($this->session->data['db_file_name'])) {
			unset($this->session->data['db_file_name']);
		}
	}


	public function setProgress($progress) {
		$fh = fopen(ANYPORT_ROOT . '/temp/anyport_progress.txt', 'w');
		fwrite($fh, json_encode($progress));
		fclose($fh);
	}
	
	public function deleteProgress() {
		if (file_exists(ANYPORT_ROOT . 'temp/excelport_progress.txt')) unlink(ANYPORT_ROOT . 'temp/excelport_progress.txt');	
	}

	public function error_handler($severity, $message, $file, $line) {
        throw new Exception($message . " in file " . $file . " on line " . $line);
    }
    
	public function install()
	{
		if (!file_exists(ANYPORT_TEMP_FOLDER)) {
			try {
				mkdir(ANYPORT_TEMP_FOLDER, 0700);
			} catch (Exception $e) {
				
			}
		}
		
		$this->load->model('setting/setting');
		$this->model_setting_setting->editSetting('module_'.strtolower($this->moduleNameSmall), array('module_'.strtolower($this->moduleNameSmall).'_status' => 1));
	}	

	public function uninstall()
	{
		$this->load->model('setting/setting');
		$this->model_setting_setting->editSetting('module_'.strtolower($this->moduleNameSmall), array('module_'.strtolower($this->moduleNameSmall).'_status' => 0));
		$this->model_setting_setting->deleteSetting('AnyPort');
		$this->model_setting_setting->deleteSetting('AnyPortAuth');
		$this->model_setting_setting->deleteSetting('AnyPortGoogle');
		$this->model_setting_setting->deleteSetting('AnyPortGoogleDriveFolderId');
	}	
}
