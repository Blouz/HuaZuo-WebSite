<?php
set_time_limit(0);
ini_set('memory_limit', '256M');

require_once (dirname(dirname(dirname(dirname(dirname(dirname(dirname(__FILE__))))))) . '/config.php');

// Registry

require_once (DIR_SYSTEM . 'engine/registry.php');

$registry = new Registry();

// Modification Override

function modification($filename)
{
	if (!defined('DIR_CATALOG'))
	{
		$file = DIR_MODIFICATION . 'catalog/' . substr($filename, strlen(DIR_APPLICATION));
	}
	else
	{
		$file = DIR_MODIFICATION . 'admin/' . substr($filename, strlen(DIR_APPLICATION));
	}

	if (substr($filename, 0, strlen(DIR_SYSTEM)) == DIR_SYSTEM)
	{
		$file = DIR_MODIFICATION . 'system/' . substr($filename, strlen(DIR_SYSTEM));
	}

	if (is_file($file))
	{
		return $file;
	}

	return $filename;
}

// Autoloader

function library($class)
{
	$file = DIR_SYSTEM . 'library/' . str_replace('\\', '/', strtolower($class)) . '.php';
	if (is_file($file))
	{
		include_once (modification($file));

		return true;
	}
	else
	{
		return false;
	}
}

spl_autoload_register('library');
$config = new Config();
$config->load('default');
// Session
$session = new Session($config->get('session_engine'), $registry);

$registry->set('session', $session);
clearSession();
// Database

$db = new DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
$registry->set('db', $db);

// Anyport

$anyport = new Anyport($registry);

$result_length = $db->query("SHOW COLUMNS FROM " . DB_PREFIX . "setting LIKE 'group'");

if ($result_length->num_rows == 0)
{
	$settingsColumn = 'code';
}
else
{
	$settingsColumn = 'group';
}

// Settings

$data = array();
$query = $db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$store_id . "' AND `" . $settingsColumn . "` = '" . $db->escape('AnyPort') . "'");

foreach($query->rows as $result)
{
	if (!$result['serialized'])
	{
		$data[$result['key']] = $result['value'];
	}
	else
	{
		$data[$result['key']] = unserialize($result['value']);
	}
}

$settings = unserialize(base64_decode($data['AnyPort']));

// Created dropbox object

require_once(ANYPORT_LIB_FOLDER.'/Google/autoload.php');

$apiKey = (empty($settings['Settings']['GoogleDrive']['AppKey'])) ? NULL : $settings['Settings']['GoogleDrive']['AppKey'];
$apiSecret = (empty($settings['Settings']['GoogleDrive']['AppSecret'])) ? NULL : $settings['Settings']['GoogleDrive']['AppSecret'];
$client = new Google_Client();
$client->setApplicationName("Anyport");
$client->setAccessType('offline');
$client->setClientId($apiKey);
$client->setClientSecret($apiSecret);
$client->addScope(array(
	Google_Service_Drive::DRIVE,
	Google_Service_Oauth2::USERINFO_PROFILE,
	Google_Service_Oauth2::USERINFO_EMAIL
));
$query = $db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$store_id . "' AND `" . $settingsColumn . "` = '" . $db->escape('AnyPortGoogle') . "'");
$auth = array();

foreach($query->rows as $result)
{
	if (!$result['serialized'])
	{
		$auth[$result['key']] = $result['value'];
	}
	else
	{
		$auth[$result['key']] = unserialize($result['value']);
	}
}

$authSettings = unserialize($auth['AnyPortGoogle_AccessToken']);
$token = !empty($authSettings) ? $authSettings : NULL;

if (empty($token)) throw new Exception($this->language->get('anyport_no_access_token'));
$client->setAccessToken($token);
/* Refresh token when expired */

if ($client->isAccessTokenExpired())
{

	// the new access token comes with a refresh token as well

	$refreshTokenSettings = $db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$store_id . "' AND `" . $settingsColumn . "` = '" . $db->escape('AnyPortGoogleRefresh') . "'");
	$refreshToken = $refreshTokenSettings->row['value'];
	$client->fetchAccessTokenWithRefreshToken($refreshToken);
	$data = array(
		'AnyPortGoogle_AccessToken' => serialize($client->getAccessToken())
	);
	$db->query("DELETE FROM `" . DB_PREFIX . "setting` WHERE store_id = 0 AND `" . $settingsColumn . "` = '" . $db->escape('AnyPortGoogle') . "'");
	foreach($data as $key => $value)
	{;
		if (substr($key, 0, strlen('AnyPortGoogle')) == 'AnyPortGoogle')
		{
			if (!is_array($value))
			{
				$db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = 0, `" . $settingsColumn . "` = '" . $db->escape('AnyPortGoogle') . "', `key` = '" . $db->escape($key) . "', `value` = '" . $db->escape($value) . "'");
			}
			else
			{
				$db->query("INSERT INTO " . DB_PREFIX . "setting SET store_id = 0 , `" . $settingsColumn . "` = '" . $db->escape('AnyPortGoogle') . "', `key` = '" . $db->escape($key) . "', `value` = '" . $db->escape(json_encode($value)) . "', serialized = '1'");
			}
		}
	}
}

$service = new Google_Service_Drive($client);

if (empty($settings['Settings']['GoogleDrive']['Enable']) || empty($settings['AutoBackup']['GoogleDrive']['Enable']) || $settings['AutoBackup']['GoogleDrive']['Enable'] == "No") exit;
$backupType = $settings['AutoBackup']['GoogleDrive']['Folders'];
switch ($backupType)
{
case 'FullBackup':
	$anyport->createBackupList();
	$fileStatus == 'inprogress';
	$progress = 0;
	do
	{
		$data = $anyport->backupFiles($progress, $backupType);
		$fileStatus = $data['status'];
		$progress = !empty($data['data']['progress']) ? $data['data']['progress'] : '';
	}

	while ($fileStatus !== 'finished');
	if ($fileStatus == 'finished')
	{
		$tables = $anyport->getListOfTables(false);
		$dataBaseOffset = 0;
		$dataBaseStatus = 'inprogress';
		do
		{
			$dataBase = $anyport->exportSQL($tables, $dataBaseOffset);
			$tables = $dataBase['data']['tables'];
			$dataBaseOffset = !empty($dataBase['data']['offset']) ? $dataBase['data']['offset'] : NULL;
			$dataBaseStatus = $dataBase['status'];
		}

		while ($dataBaseStatus !== 'finished');
	}

	break;

case 'FilesBackup':

	// Create backup list

	$anyport->createBackupList();
	$status == 'inprogress';
	$progress = 0;

	// Backup files

	do
	{
		$data = $anyport->backupFiles($progress, $backupType);
		$status = $data['status'];
		$progress = !empty($data['data']['progress']) ? $data['data']['progress'] : '';
	}

	while ($status !== 'finished');
	break;

case 'Database':
	if (!isset($session->data['anyportfileszip']))
	{
		$tempdir = ANYPORT_ROOT . '/temp';
		$today = $date = date('Y-m-d H:i:s');
		$today = str_replace(" ", "_", $today);
		$zipfilename = $today . ANYPORT_SERVER_NAME_READABLE . '_Backup_AnyPort_' . $backupType . '.tar';
		$archiveName = $tempdir . '/' . $zipfilename;
		$session->data['anyportfileszip'] = $archiveName;
	}

	$tables = $anyport->getListOfTables(false);
	$dataBaseOffset = 0;
	$dataBaseStatus = 'inprogress';
	do
	{
		$dataBase = $anyport->exportSQL($tables, $dataBaseOffset);
		$tables = $dataBase['data']['tables'];
		$dataBaseOffset = !empty($dataBase['data']['offset']) ? $dataBase['data']['offset'] : NULL;
		$dataBaseStatus = $dataBase['status'];
	}

	while ($dataBaseStatus !== 'finished');
	break;
}

$googleDriveStatus = 'inprogress';
$file = $session->data['anyportfileszip'];
$folderId = $db->query("SELECT * FROM " . DB_PREFIX . "setting WHERE store_id = '" . (int)$store_id . "' AND `" . $settingsColumn . "` = '" . $db->escape('AnyPortGoogleDriveFolder') . "'");
$driveFolderId = $folderId->row['value'];
$googleDriveProgress = 0;
$resumeUri = null;
do
{
	$googleDriveResult = $anyport->sendToGoogleDrive($client, $service, $file, $googleDriveProgress, $resumeUri, $driveFolderId);
	$googleDriveProgress = $googleDriveResult['data']['progress'];
	$resumeUri = $googleDriveResult['data']['resumeUri'];
	$googleDriveStatus = $googleDriveResult['status'];
}

while ($googleDriveStatus !== 'finished');
unset($session->data['anyportfileszip']);
$anyport->cleanTemp();
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
exit();