<?php
class Anyport
{
	private $db;
	private $log;
	private $session;
	private $timeLimit = 3;
	private $default_chunk_size = 4000000;

	public function __construct($registry) {
		if (!defined('ANYPORT_ROOT')) define('ANYPORT_ROOT', str_replace('\\', '/',dirname(DIR_APPLICATION)));
		if (!defined('ANYPORT_SERVER_NAME')) define('ANYPORT_SERVER_NAME', substr((defined('HTTP_CATALOG') ? HTTP_CATALOG : HTTP_SERVER), 7, strlen((defined('HTTP_CATALOG') ? HTTP_CATALOG : HTTP_SERVER)) - 8));
		if (!defined('ANYPORT_SERVER_NAME_READABLE')) define('ANYPORT_SERVER_NAME_READABLE', str_replace('/', '_', ANYPORT_SERVER_NAME));
		if (!defined('ANYPORT_ADMIN_FOLDER_NAME')) define('ANYPORT_ADMIN_FOLDER_NAME', substr(HTTP_SERVER, strripos(HTTP_SERVER, '/', -2) + 1, strlen(HTTP_SERVER) - 2 - strripos(HTTP_SERVER, '/', -2)));
		
		if (!defined('ANYPORT_SYSTEM_FOLDER')) define('ANYPORT_SYSTEM_FOLDER', DIR_SYSTEM.'vendor/isenselabs/anyport');
		if (!defined('ANYPORT_LIB_FOLDER')) define('ANYPORT_LIB_FOLDER', DIR_SYSTEM.'library/vendor/isenselabs/anyport/lib');
		if (!defined('ANYPORT_TEMP_FOLDER')) define('ANYPORT_TEMP_FOLDER',str_replace('\\', '/',dirname(DIR_APPLICATION)).'/temp/');
		if (!defined('ANYPORT_CRON_FOLDER')) define('ANYPORT_CRON_FOLDER', DIR_SYSTEM.'library/vendor/isenselabs/anyport/cron');
		
		$this->session = $registry->get('session');
		$this->db = $registry->get('db');
	}

	/**
     * Create a .txt file containing the absolute path of each of the files we are going to backup
	 *
     * @param  array               $folders  - folder to back up
     *
     * @return path to txt file
     */
	public function createBackupList($folders = NULL){
		$json = array();
		$filesCount = 0;
		if (is_null($folders)) {
			$folders[]= ANYPORT_ROOT.'/';
		}

		try {
			//create a txt file
			$fh = fopen(ANYPORT_TEMP_FOLDER.'filelisting.txt','w');
			foreach ($folders as $backupObject) {

				// if the current index is a file write its absolute path to the file
				if (is_file($backupObject)) {
					fwrite($fh,$backupObject."\n");
					$filesCount++;
				} else {
					//check if empty dir
					$iterator = new \FilesystemIterator($backupObject);
					$isDirEmpty = !$iterator->valid();
					if ($isDirEmpty) {
						fwrite($fh,$backupObject."\n");
						$filesCount++;
					}
					//if the current index is a directory iterate through it recursively and write the file paths of each of its files.
					foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($backupObject,FilesystemIterator::SKIP_DOTS)) as $filename){
						//Filter out '.','..' and image/cache, NitroPack assets directory, system/cache, journal-cache, system/storage/logs directories!
						$filepath = str_replace('\\','/',$filename->getPath());

					   	if (strpos($filepath, 'image/cache') !== false || strpos($filepath, 'vqmod/vqcache') !== false || strpos($filepath, 'system/cache') !== false || strpos($filepath, 'journal-cache') !== false || strpos($filepath, ANYPORT_ROOT.'/assets') !== false || strpos($filepath, ANYPORT_ROOT.'/temp') !== false ||  strpos($filepath, 'system/storage/logs') !== false || strpos($filepath, 'system/storage/cache') !== false) {
					   		continue;
					   	}
					    if ($filename->isDir()) continue;
					    fwrite($fh,str_replace('\\','/',$filename)."\n");
					    $filesCount++;
					}
				}
			}
			fclose($fh);
			$this->session->data['filesCount'] = $filesCount;
			$json = array(
				'status' => 'success',
				'data' => array(
					'message' => 'List created',
					'totalLines' => $filesCount
				)
			);
		} catch (Exception $e) {
			$json = array(
				'status' => 'error',
				'data' => array(
					'message' => $e->getMessage(),
				)
			);
		}
		return $json;
	}

	/**
     * Create a zip archive containing the selected files
     *
     * @param  int              	$progress - ammount of bytes read up to this point.
     * @param  string               $type  - the type of the selected backup.
     *
     * @return array();
     */
	public function backupFiles($progress,$type,$filesZipped = 0)
	{
		require_once(ANYPORT_LIB_FOLDER.'/Anyport/Tar.php');
		
		$finished = false;
		$tempdir = ANYPORT_TEMP_FOLDER;
		$fileSize = filesize($tempdir.'filelisting.txt');
		$totalNumberOfLines = $this->session->data['filesCount'];
		$today =  $date = date('Y-m-d H-i-s');
		$today = str_replace(" ","_",$today);
		$zipArchive = new Tar();
		$zipArchive->setCompression(0);
		$rootDir = ANYPORT_ROOT.'/';
		if (!isset($this->session->data['anyportFileName'])) {
			//Create the zip archive with a unique name
			$zipfilename = $today.'_'.ANYPORT_SERVER_NAME_READABLE.'_Backup_AnyPort_'.$type.'.tar';
			$archiveName = $tempdir.'/'.$zipfilename;
			$zipArchive->create($archiveName);
			//Save the name in the session so we can use it in the next iteration.
			$this->session->data['anyportFileName'] = $zipfilename;
		} else if(isset($this->session->data['anyportFileName']) && !empty($this->session->data['anyportFileName'])){
			$zipfilename = $this->session->data['anyportFileName'];
			$archiveName = $tempdir.'/'.$zipfilename;
			$zipArchive->open($archiveName,true);
		}

		$json = array();
		$start = microtime(true);
		$filesAdded = 0;
		$timeElapsed = 0;
		$handle = fopen($tempdir.'/filelisting.txt', "r");
		
		if ($handle) {
			if (!empty($progress)) {
				fseek($handle,$progress,SEEK_SET);
			}

		    while (true) {
		    	$line = fgets($handle);
		    	if ($line !== false) {
		    		$filesZipped++;
		    		$line = trim($line);
		    		
		    	 	$relativePath = substr($line, strlen($rootDir));
		    	 	
 		    		$zipArchive->addFile($line,'Files/'.$relativePath);
 		    		$timeElapsed = microtime(true) - $start;

 		    		if ($timeElapsed >= $this->timeLimit) {
		    			$progress = ftell($handle);
		    			$percentage = floor(($progress / $fileSize) * 100).'%';
		    			fclose($handle);
		    			break;
		    		}
		    	} else {
				    $filesZipped = $totalNumberOfLines;
		    		$finished = true;
		    		fclose($handle);
		    		break;
		    	}
		    }

		}
		
		$zipArchive->close();
		
		if ($finished) {
			unset($this->session->data['filesCount']);
		    unset($this->session->data['anyportFileName']);

		    $percentage = '100%';
			if (!empty($archiveName)) {
				$this->session->data['anyportfileszip'] = $archiveName;
			}
			$totalTables = count($this->getListOfTables(false));
			$json = array(
				'status' => 'finished',
				'data' => array(
					'message' => 'Zip Created',
					'totalFiles' => $totalNumberOfLines,
					'filesZipped' =>$filesZipped,
					'percentage' => $percentage,
					'totalTables' => $totalTables
				)
			);
		} else {
			$json = array(
				'status' => 'inprogress',
				'data' => array(
					'progress' => $progress,
					'percentage' => $percentage,
					'totalFiles' => $totalNumberOfLines,
					'filesZipped' =>$filesZipped,
					'backupType'  =>$type
				),
			);
		}
		return $json;
	}

	/**
     * Create the sql file containing all database inforamtion and add it to the zip archive
	 *
     * @param  array();              $tables (all store tables or the ones specified by the user)
     * @param  int                $offset  pointer to the current table row.
     *
     * @return array();
     */
	public function exportSQL($tables,$offset,$completedTables = 0) {
		if ((!is_array($tables) && $this->array_depth($tables) != 1) || empty($tables)) return false;

		$this->now = empty($this->now) ? time() : $this->now;
		$now = $this->now;
		$start = microtime(true);
		$filename = ANYPORT_SERVER_NAME_READABLE.'_Backup_AnyPort_Database.sql';
		$tempDir =  ANYPORT_TEMP_FOLDER;
		$timeElapsed = 0;
		$path = $tempDir.$filename;
		$fh = fopen($path, 'a');//Open sql file for writting.
		$json = array();
		$new_tables = $tables;
		$new_offset = 0;

		if ($fh === false) throw new Exception($this->language->get('anyport_no_file'));

			foreach ($tables as $id=>$table) {
				//If the whole process takes more than $this->timeLimit seconds break the cycle and return the current position .
				if ($timeElapsed > $this->timeLimit) {
					break;
				}

				$oldtable = $table;

				$create = $this->db->query("SHOW CREATE TABLE `" . $table . "`");

				if (isset($create->row['Create Table'])) {
					$output = str_replace(array("\r", "\r\n", "\n"), '', str_replace('CREATE TABLE', 'CREATE TABLE IF NOT EXISTS', $create->row['Create Table']) . ";")."\n\n";

					if (DB_PREFIX) {

						if (strpos($table, DB_PREFIX) !== false) {
							$output = str_replace("IF NOT EXISTS `" . $table . "`", "IF NOT EXISTS `" . "{ANYPORT_DB_PREFIX}".substr($table, strlen(DB_PREFIX)) . "`", $output);
							$table = "{ANYPORT_DB_PREFIX}".substr($table, strlen(DB_PREFIX));
						}
					} else {
						$output = str_replace("IF NOT EXISTS `" . $table . "`", "IF NOT EXISTS `" . "{ANYPORT_DB_PREFIX}".substr($table, strlen(DB_PREFIX)) . "`", $output);
						$table = "{ANYPORT_DB_PREFIX}".$table;
					}
					$remove = true;
					$output .= 'TRUNCATE TABLE `' . $table . '`;' . "\n\n";
					$this->writeToFile($fh, $output, $path);
					//Write to the sql file on chunks of 200 rows from table.
					do {
						$query = $this->db->query("SELECT * FROM `" . $oldtable . "` LIMIT ".$offset.",200");
						$offset += 200;
						foreach ($query->rows as $result) {
							$fields = '';

							foreach (array_keys($result) as $value) {
								$fields .= '`' . $value . '`, ';
							}

							$values = '';
							foreach (array_values($result) as $value) {
								$value = str_replace(array("\x00", "\x0a", "\x0d", "\x1a"), array('\0', '\n', '\r', '\Z'), $value);
								$value = str_replace(array("\n", "\r", "\t"), array('\n', '\r', '\t'), $value);
								$value = str_replace('\\', '\\\\',	$value);
								$value = str_replace('\'', '\\\'',	$value);
								if (strpos($oldtable,'journal2') === false) {
									$value = str_replace('\\\n', '\n',	$value);
								}
								$value = str_replace('\\\r', '\r',	$value);
								$value = str_replace('\\\t', '\t',	$value);
								$values .= '\'' . $value . '\', ';
							}


							$output = 'INSERT INTO `' . $table . '` (' . preg_replace('/, $/', '', $fields) . ') VALUES (' . preg_replace('/, $/', '', $values) . ');' . "\n";
							$this->writeToFile($fh, $output, $path);

						}
						$output = "\n\n";
						$this->writeToFile($fh, $output, $path);
						$timeElapsed = (microtime(true)) - $start;
					} while($query->num_rows > 0 && $timeElapsed < $this->timeLimit);

					$totalRecords = $this->getTotalRecords($oldtable);

					if ($totalRecords > $offset) {
						//remember the current table row if the time has elapsed and we have not finished reading the table
						$new_offset = $offset;
						//do not remove the table from the array.
						$remove = false;
					} else {
						//if we have finished the current table reset the offset and remove the table from the array.
						$new_offset = 0 ;
						$offset = 0;
						$completedTables++;
						unset($new_tables[$id]);
					}
				} else {
					$new_offset = 0 ;
					$offset = 0;
					$completedTables++;
					unset($new_tables[$id]);
				}
			}
		fclose($fh);
		//If there are still tables in the array return the current table offset and the remaining tables in the array.
		if (count($new_tables) > 0) {
			$totalTables = count($this->getListOfTables(false));
			$percentage = ($completedTables / $totalTables) * 100 . '%';
			$json = array(
				'status' => 'inprogress',
				'data' => array(
					'offset' => $new_offset,
					'tables' => $new_tables,
					'completedTables' => $completedTables,
					'percentage' => $percentage
				),
			);
		} else {
			require_once(ANYPORT_LIB_FOLDER.'/Anyport/Tar.php');
			$success[] = $filename;
			$zipfilename = $this->session->data['anyportfileszip'];
			$tempdir = ANYPORT_TEMP_FOLDER;
			//$zipArchive = new ZipArchive();
			$zipArchive = new Tar();
			$zipArchive->setCompression(0);
			$zipArchive->open($zipfilename,true);
			
			//if we have compleated the process add the newly created file to the zip archive.
			$zipArchive->addFile($tempdir.$filename, 'Database/'.$filename);
			//close the zip
			$zipArchive->close();
			//remove the sql file from the server
			unlink($tempDir.$filename);
			$json = array(
				'status' => 'finished',
				'data' => array(
					'completedTables' => $completedTables,
					'percentage' => '100%'
				)
			);
		}

		return $json;
	}


	public function sendToGoogleDrive($googleDrive,$service,$zipFile,$progress,$resumeUri,$folderId)
	{
		require_once(ANYPORT_LIB_FOLDER.'/Google/autoload.php');
		$finished = false;
		$json = array();

		$file = new Google_Service_Drive_DriveFile();
		$file->name = basename($zipFile);
		$file->setParents(array($folderId));
		$chunkSizeBytes = 1 * 1024 * 1024;

		// Call the API with the media upload, defer so it doesn't immediately return.
		$googleDrive->setDefer(true);

		$request = $service->files->create($file);
		// Create a media file upload to represent our upload process.
		$media = new Google_Http_MediaFileUpload(
		  $googleDrive,
		  $request,
		  'application/zip',
		  null,
		  true,
		  $chunkSizeBytes
		);

		$fileSize = filesize($zipFile);
		$media->setFileSize($fileSize);

		$handle = fopen($zipFile, "rb");
		if ($handle) {
			if ($progress != 0 && !is_null($resumeUri)) {
				$media->resume(html_entity_decode($resumeUri));
				fseek($handle,$progress,SEEK_SET);
			}
			$start = microtime(true);
			$timeElapsed = 0;
			while (true) {
				if ($timeElapsed > $this->timeLimit) {
					$progress = $media->getProgress();
		    		$percentage = floor(($progress / $fileSize) * 100).'%';
		    		$resumeUri = $media->getResumeUri();
		    		break;
				}
				$chunk  = fread($handle,$chunkSizeBytes);
				$status = $media->nextChunk($chunk);
				$resumeUri = $media->getResumeUri();
				if ($status !== false) {
					$finished = true;
					$fileName = $status->getName();
					break;
				}
				$timeElapsed = microtime(true) - $start;
			}
		    fclose($handle);
		}

		$googleDrive->setDefer(false);
		if ($finished) {
			$json = array(
				'status' => 'finished',
				'data' => array(
					'message' => 'GoogleDrive file upload finished',
					'percentage'    => '100%',
					'fileName'     => $fileName,
					'fileSize'    => $this->sizeToString($fileSize)
				)
			);
		} else {
			$json = array(
				'status' => 'inprogress',
				'data' => array(
					'progress' => $progress,
					'percentage' => $percentage,
					'resumeUri' => $resumeUri,
				),
			);
		}

		return $json;

	}

    /**
     * Send data to Dropbox
     *
     * @param  string|DropboxFile $dropboxFile DropboxFile object or Path to file
     * @param  string             $sessionId   Session ID returned by `startUploadSession`
     * @param  int                $uploaded      The amount of data that has been uploaded so far
     * @param  int                $chunkSize   The amount of data to upload
     * @param  int                $remaining   The amount of data remaining
     *
     * @return array()
     */
	public function sendToDropbox($dropboxFile,$dropbox,$session_id ='0',$uploaded = 0,$chunkSize = 0,$remaining)
	{
		$json = array();
		$fileSize = $dropboxFile->getSize();

		//If this is the first time the function is called initiate the upload session.
 		if (($session_id == '0')) {

		    //If the filesize is smaller
		    //than the chunk size, we'll
		    //make the chunk size relatively
		    //smaller than the file size
			if ($fileSize < $this->default_chunk_size) {
				$chunkSize = ceil($fileSize / 2);//Round the chunkSize to an int. This way no data will be lost.
			} else {
				$chunkSize = $this->default_chunk_size;
			}
			//get the initial session id
			$session_id = $dropbox->startUploadSession($dropboxFile->getFilePath(), (int)$chunkSize);
			$uploaded = $chunkSize;
			$percentage = floor(($uploaded / $fileSize) * 100).'%';

			$remaining = $fileSize - $chunkSize;
			$json = array(
				'status' => 'inprogress',
				'data' => array(
					'message' => 'Dropbox upload session started',
					'session_id'    => $session_id,
					'uploaded'      => $uploaded,
					'remaining'     => $remaining,
					'chunkSize'     => $chunkSize,
					'percentage'    => $percentage
				)
			);
		} else { //Else - append each next chunk to the session.

			$timeElapsed = 0;
			$start = microtime(true);
			$finished = false;
			while ($timeElapsed < $this->timeLimit) {
				if ($remaining > $chunkSize) {
					//append the current chunk and get the new session id.
					$session_id = $dropbox->appendUploadSession($dropboxFile, $session_id, (int)$uploaded, (int)$chunkSize);
					$uploaded = $uploaded + $chunkSize;
					$percentage = floor(($uploaded / $fileSize) * 100).'%';
		        	$remaining = $remaining - $chunkSize;
				} else {
					$finished = true;
					break;
				}
				$timeElapsed = (microtime(true)) - $start;
			}

			if ($finished) {
				//Send the last chunk and save the file in the Dropbox App directory.
				$uploadMetadata = $dropbox->finishUploadSession($dropboxFile, $session_id, (int)$uploaded, (int)$remaining, '/'.$dropboxFile->getFileName());

				if (!empty($uploadMetadata)) {
					//Delete the zip file from the server after it is uploaded to Dropboz.
					$this->cleanTemp();
				}

				$json = array(
					'status' => 'finished',
					'data' => array(
						'message' => 'Dropbox file upload finished',
						'fileSize' => $this->sizeToString($uploadMetadata->getSize()),
						'fileName' => $uploadMetadata->getName(),
						'percentage'    => '100%'
					)
				);
				unset($this->session->data['dropboxUploadFile']);
			} else {
				$json = array(
					'status' => 'inprogress',
					'data' => array(
						'message' => 'Dropbox session append in progress',
						'session_id'    => $session_id,
						'uploaded'      => $uploaded,
						'remaining'     => $remaining,
						'chunkSize'     => $chunkSize,
						'percentage'    => $percentage
					)
				);
			}
		}

		return $json;
	}

	private function sizeToString($size) {
		$count = 0;
		for ($i = $size; $i >= 1024; $i /= 1024) $count++;
		switch ($count) {
			case 0 : $suffix = ' B'; break;
			case 1 : $suffix = ' KB'; break;
			case 2 : $suffix = ' MB'; break;
			case 3 : $suffix = ' GB'; break;
			case ($count >= 4) : $suffix = ' TB'; break;
		}
		return round($i, 2).$suffix;
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

	private function getTotalRecords($table)
	{
		return $this->db->query("SELECT COUNT(*) as counter FROM `" . $table . "`")->row['counter'];
	}

	private function writeToFile(&$fh, &$data, &$path) {
		if (fwrite($fh, $data) === false) {
			fclose($fh);
			unlink($path);
			throw new Exception($this->language->get('anyport_unable_write_file'));
		}
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
}
