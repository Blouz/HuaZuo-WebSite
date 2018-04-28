<?php
set_time_limit(0);
require_once (dirname(dirname(dirname(dirname(dirname(dirname(dirname(__FILE__))))))) . '/config.php');
// Registry
require_once(DIR_SYSTEM.'engine/registry.php');

$registry = new Registry();

// Modification Override
function modification($filename) {
	if (!defined('DIR_CATALOG')) {
		$file = DIR_MODIFICATION . 'catalog/' . substr($filename, strlen(DIR_APPLICATION));
	} else {
		$file = DIR_MODIFICATION . 'admin/' .  substr($filename, strlen(DIR_APPLICATION));
	}

	if (substr($filename, 0, strlen(DIR_SYSTEM)) == DIR_SYSTEM) {
		$file = DIR_MODIFICATION . 'system/' . substr($filename, strlen(DIR_SYSTEM));
	}

	if (is_file($file)) {
		return $file;
	}

	return $filename;
}
// Autoloader
function library($class) {
	$file = DIR_SYSTEM . 'library/' . str_replace('\\', '/', strtolower($class)) . '.php';

	if (is_file($file)) {
		include_once(modification($file));

		return true;
	} else {
		return false;
	}
}
spl_autoload_register('library');
// Config
$config = new Config();
$config->load('default');

// Session
$session = new Session($config->get('session_engine'), $registry);
$registry->set('session', $session);


//Database
$db = new DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
$registry->set('db', $db);


// Anyport
$anyport = new Anyport($registry);


$result_length = $db->query("SHOW COLUMNS FROM " .DB_PREFIX . "setting LIKE 'group'");
if ($result_length->num_rows==0) {
	$settingsColumn = 'code';
} else {
	$settingsColumn = 'group';
}
//Settings
$data = array(); 

$query = $db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$store_id . "' AND `".$settingsColumn."` = '" . $db->escape('AnyPort') . "'");
foreach ($query->rows as $result) {
	if (!$result['serialized']) {
		$data[$result['key']] = $result['value'];
	} else {
		$data[$result['key']] = unserialize($result['value']);
	}
}
$settings = unserialize(base64_decode($data['AnyPort']));
//Created dropbox object
require_once(ANYPORT_LIB_FOLDER.'/Dropbox/autoload.php');
$dropboxApp = new Kunnu\Dropbox\DropboxApp(
			(empty($settings['Settings']['Dropbox']['AppKey'])) ? NULL : $settings['AnyPort']['Settings']['Dropbox']['AppKey'], 
			(empty($settings['Settings']['Dropbox']['AppSecret'])) ? NULL : $settings['AnyPort']['Settings']['Dropbox']['AppSecret']);
	
$dropbox = new Kunnu\Dropbox\Dropbox($dropboxApp);
$query = $db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$store_id . "' AND `".$settingsColumn."` = '" . $db->escape('AnyPortAuth') . "'");

$auth = array();

foreach ($query->rows as $result) {
	if (!$result['serialized']) {
		$auth[$result['key']] = $result['value'];
	} else {
		$auth[$result['key']] = unserialize($result['value']);
	}
}
$authSettings = unserialize($auth['AnyPortAuth_dropBoxAccessToken']);

$token = !empty($authSettings['access_token']) ? $authSettings['access_token'] : NULL;

$dropbox->setAccessToken($token);

if (empty($settings['Settings']['Dropbox']['Enable']) || empty($settings['AutoBackup']['Dropbox']['Enable']) || $settings['AutoBackup']['Dropbox']['Enable'] == "No") exit;

$backupType = $settings['AutoBackup']['Dropbox']['Folders'];

switch ($backupType) {
	case 'FullBackup':
		$anyport->createBackupList();
		$fileStatus == 'inprogress';
		$progress = 0;
		do {
			$data       = $anyport->backupFiles($progress,$backupType);
			$fileStatus = $data['status'];
			$progress   = !empty($data['data']['progress']) ? $data['data']['progress'] : '';
		} while ($fileStatus != 'finished');
		
		if ($fileStatus == 'finished') {
			$tables = $anyport->getListOfTables(false);
			$dataBaseOffset = 0;
			$dataBaseStatus = 'inprogress';
			do {
				$dataBase = $anyport->exportSQL($tables,$dataBaseOffset);
				$tables = $dataBase['data']['tables'];
				$dataBaseOffset = !empty($dataBase['data']['offset']) ? $dataBase['data']['offset'] : NULL;
				$dataBaseStatus = $dataBase['status'];

			} while ($dataBaseStatus != 'finished');
			
		} 
		break;
	case 'FilesBackup':
		// Create backup list
		$anyport->createBackupList();
		$status == 'inprogress';
		$progress = 0;

		// Backup files
		do {
			$data = $anyport->backupFiles($progress,$backupType);
			$status = $data['status'];
			$progress = !empty($data['data']['progress']) ? $data['data']['progress'] : '';
		} while ($status != 'finished');
		
		
		break;
	case 'Database':
		if (!isset($session->data['anyportfileszip'])) {
			$tempdir = ANYPORT_ROOT.'/temp';
			$today =  $date = date('Y-m-d H:i:s');
			$today = str_replace(" ","_",$today);
			$zipfilename = $today.ANYPORT_SERVER_NAME_READABLE.'_Backup_AnyPort_'.$backupType.'.tar';
			$archiveName = $tempdir.'/'.$zipfilename;
			$session->data['anyportfileszip'] = $archiveName;
		}
	
		$tables = $anyport->getListOfTables(false);

		$dataBaseOffset = 0;
		$dataBaseStatus = 'inprogress';
		do {
			$dataBase = $anyport->exportSQL($tables,$dataBaseOffset);
			$tables = $dataBase['data']['tables'];
			$dataBaseOffset = !empty($dataBase['data']['offset']) ? $dataBase['data']['offset'] : NULL;

			$dataBaseStatus = $dataBase['status'];
		} while ($dataBaseStatus != 'finished');
		break;
}

$dbxUploadStatus == 'inprogress';
$file = $session->data['anyportfileszip'];
//Make Dropbox File
$dropboxFile = $dropbox->makeDropboxFile($file);
$session_id ='0';
$uploaded = 0;
$chunkSize = 0;
$remaining;
$message = '';
try {
	do {
		$dbxResult = $anyport->sendToDropbox($dropboxFile,$dropbox,$session_id,$uploaded,$chunkSize,$remaining);
		$session_id = $dbxResult['data']['session_id'];
		$uploaded = $dbxResult['data']['uploaded'];
		$remaining = $dbxResult['data']['remaining'];
		$chunkSize = $dbxResult['data']['chunkSize'];
		$dbxUploadStatus = $dbxResult['status'];
		$message = $dbxResult['data']['message'];
	} while ($dbxUploadStatus != 'finished');
	
	unset($session->data['anyportfileszip']);
} catch (Exception $e) {
			
}
function clearSession()
{
if (isset($session->data['anyport_current_position'])) {
		unset($session->data['anyport_current_position']);
	}
	if (isset($session->data['total_files'])) {
		unset($session->data['total_files']);
	}
	if (isset($session->data['db_file_name'])) {
		unset($session->data['db_file_name']);
	}
}
exit;