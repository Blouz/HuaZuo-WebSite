<?php
// Heading
$_['heading_title']       = 'AnyPort';

// Text
$_['text_module']         = 'Modules';
$_['text_success']        = 'Success: You have modified module AnyPort!';
$_['text_success_activation']        = 'ACTIVATED: You have successfully activated AnyPort!';
$_['text_content_top']    = 'Content Top';
$_['text_content_bottom'] = 'Content Bottom';
$_['text_column_left']    = 'Column Left';
$_['text_column_right']   = 'Column Right';
$_['text_pick_destination_and_tables'] = 'Please pick a backup destination and/or tables and/or folders.';
$_['text_pick_source_and_file'] = 'Please pick a restore source and file.';
$_['text_feature_unsupported'] = 'This feature is supported only for OpenCart version {VERSION}';
$_['text_dropbox_auto_backup_not_enabled'] = 'Dropbox automatic backup is not enabled.';
$_['text_google_drive_auto_backup_not_enabled'] = 'Google Drive automatic backup is not enabled.';
$_['text_version_not_supported'] = 'Version {VERSION} of OpenCart cannot use this feature.';
$_['text_dropbox_authentication_error'] = 'Dropbox authentication failed. Please check your settings.';
$_['text_google_drive_authentication_error'] = 'GoogleDrive authentication failed. Please check your settings.';
$_['text_google_drive_auth_changed'] = 'Google %s was changed without reconfirming your application. Google auth credentilas were not saved. Please click the "Confirm Google App" button.';
$_['text_dropbox_auth_changed'] = 'Dropbox %s was changed without reconfirming your application. Dropbox auth credentilas were not saved. Please click the "Confirm Dropbox App" button.';

// Entry
$_['entry_code']          = 'AnyPort status:<br /><span class="help">Enable or disable AnyPort</span>';
$_['entry_layouts_active']          = 'Activated on:<br /><span class="help">Choose which pages AnyPort to be active</span>';
$_['entry_highlightcolor']        = 'Highlight color:<br /><span class="help">This is the color the keyword in the results highlights in.<br/><br/><em>Examples: red, blue, #F7FF8C</em></span>';

// Success
$_['restore_success'] 	  = 'Data was successfully restored!';
$_['restore_success_warnings'] = 'Data was restored, with {COUNT} warnings during the process. <a href="javascript:void(0)" class="showWarnings">Show warnings</a>';

// Error
$_['error_permission']    = 'Warning: You do not have permission to modify module AnyPort!';
$_['error_code']          = 'Highlight color is required';

// Dropbox
$_['dropbox_success']	  = 'You have successfully uploaded to Dropbox!';
$_['dropbox_failure']	  = 'Could not upload to Dropbox.';
$_['dropbox_redirect']	  = 'The file was too big to upload to Dropbox. Please go to <a target="_blank" href="https://www.dropbox.com/home/{FOLDER_ID}">Dropbox</a> and upload the file from there.';
$_['dropbox_not_logged_in'] = 'You are not logged into Dropbox. Please click Refresh to log in.';
$_['dropbox_access_token_expired'] = 'Please refresh your Dropbox connection.';
$_['dropbox_active'] = 'You are logged into Dropbox as <strong>{USER}</strong>. You can now paste the Command bellow to your Cron job settings.';
$_['dropbox_not_enabled'] = 'Dropbox is not enabled. Please go to the Settings tab and re-enable it.';

// Google Drive
$_['google_drive_success']       = 'You have successfully uploaded to Google Drive!';
$_['google_drive_failure']       = 'Could not upload to Google Drive.';
$_['google_drive_not_logged_in'] = 'You are not logged into Google.';
$_['google_drive_active'] = 'You are logged into Google as <strong>{USER}</strong>. You can now paste the Command bellow to your Cron job settings.';
$_['google_drive_redirect']      = 'The file was too big to upload to Google Drive. Please go to <a target="_blank" href="https://drive.google.com/#{FOLDER_ID}">Google Drive</a> and upload the file from there.';
$_['google_drive_not_enabled'] = 'Google Drive is not enabled. Please go to the Settings tab and re-enable it.';

// OneDrive
$_['sky_drive_success']	  = 'You have successfully uploaded to OneDrive!';
$_['sky_drive_failure']	  = 'Could not upload to OneDrive.';
$_['onedrive_redirect']   = 'The file was too big to upload to OneDrive. Please go to <a target="_blank" href="https://onedrive.live.com/?id={FOLDER_ID}">OneDrive</a> and upload the file from there.';

// Exceptions
$_['anyport_no_file']	  = 'No file selected.';
$_['anyport_no_access_token']= 'No access token set.';
$_['anyport_no_auth_code']= 'No auth code was found.';
$_['anyport_temp_dir_error'] = 'Could not create temporary directory.';
$_['anyport_folder_not_string'] = 'The folder is not of type "String".';
$_['anyport_destination_not_string'] = 'The destination path is not of type "String".';
$_['anyport_folder_empty'] = 'The folder is empty.';
$_['anyport_unable_file'] = 'Could not generate file.';
$_['anyport_unable_write_file'] = 'Unable to write to file.';
$_['anyport_unable_read_file'] = 'Unable to read from file.';
$_['anyport_unable_zip_file'] = 'Could not create archive file.';
$_['anyport_unable_zip_file_open'] = 'Could not open the archive file. Please try again.';
$_['anyport_unable_zip_file_extract'] = 'Could not extract the archive file.';
$_['anyport_unable_cache'] = 'Could not set cache storage method.';
$_['anyport_unable_find_folder'] = 'Could not locate the folder.';
$_['anyport_invalid_data'] = 'Invalid data is passed.';
$_['anyport_invalid_file'] = 'Invalid file.';
$_['anyport_unknown_loading_mode'] = 'Unknown loading mode.';
$_['anyport_no_download_url'] = 'Could not find download URL.';
$_['anyport_mismatch_size'] = 'The resulting file size does not match with the source file size.';
$_['anyport_unable_download'] = 'Could not download file.';
$_['anyport_need_authorize'] = 'Please authorize yourself.';
$_['anyport_curl_disabled'] = 'cURL is disabled. Please enable it.';
$_['anyport_unable_upload'] = 'Could not upload the file.';
$_['anyport_error_while_restoring'] = 'There was an error while restoring the files.';
$_['anyport_file_too_big_download'] = 'The file is too big to download. Please download it manually from <a target="_blank" href="{LINK}">{LINK}</a> and do a restore form your computer.';
$_['text_your_license']         = 'Your License';
$_['text_please_enter_the_code']= 'Please enter your product purchase license code:';
$_['text_activate_license']     = 'Activate License';
$_['text_not_having_a_license'] = 'Not having a code? Get it from here.';
$_['text_license_holder']       = 'License Holder';
$_['text_registered_domains']   = 'Registered domains';
$_['text_expires_on']           = 'License Expires on';
$_['text_valid_license']        = 'VALID LICENSE';
$_['text_manage']               = 'manage';
$_['text_get_support']          = 'Get Support';
$_['text_community']            = 'Community';
$_['text_ask_our_community']    = 'We have a big community. You are free to ask it about your issue on the iSenseLabs forum.';
$_['text_browse_forums']        = 'Browse forums';
$_['text_tickets']              = 'Tickets';
$_['text_open_a_ticket']        = 'Want to comminicate one-to-one with our tech people? Then open a support ticket.';
$_['text_open_ticket_for_real'] = 'Open a ticket';
$_['text_pre_sale']             = 'Pre-sale';
$_['text_pre_sale_text']        = 'Have a brilliant idea for your webstore? Our team of top-notch developers can make it real.';
$_['text_bump_the_sales']       = 'Bump the sales';

//Main twig
$_['text_backup'] = 'Backup';
$_['text_restore'] = 'Restore';
$_['text_auto_backup'] = 'Auto Backup';
$_['text_settings'] = 'Settings';
$_['text_support'] = 'Support';

//Tab Auto Backup
$_['text_dropbox_auto_backup'] = 'Dropbox Auto Backup';
$_['text_google_drive_auto_backup'] = 'Google Drive Auto Backup';

//Tab Backup
$_['text_select_backup_type'] = 'Select Backup Type';
$_['text_what_to_backup'] = 'Choose What to Backup';
$_['text_set_destination'] = 'Set Destination';
$_['text_backup_summary'] = 'Backup Summary';
$_['text_full_open_cart_backup'] = 'Full OpenCart Backup';
$_['text_full_open_cart_backup_desc'] = 'Generate a backup of your OpenCart system. This includes all the OpenCart folders and files and the whole database.';
$_['text_database_backup'] = 'Database Backup';
$_['text_database_backup_desc'] = 'Generate a database backup. You can select the tables you need to back up in the next steps.';
$_['text_files_backup'] = 'Files Backup';
$_['text_files_backup_desc'] = 'Back up your root folders and files. You can select the folders and files you need to back up in the next steps.';
$_['text_custom_backup'] = 'Custom Backup';
$_['text_custom_backup_desc'] = 'Generate a custom backup, where you can select which folders and files and/or database tables you need to back up.';
$_['text_preconfigured_dropbox_folder'] = 'Send the generated file to a pre-configured Dropbox work folder.';
$_['text_preconfigured_google_drive_storage'] = 'Send the generated file to a pre-configured GoogleDrive storage.';
$_['text_no_could_storage'] = 'No Cloud Services are enabled. Please go to the Settings tab where you can configure and enable them. You can refer to AnyPort\'s User Documentation if you need help with the setup.';
$_['text_zipped_files_for_download'] = 'Archived Files for Download';
$_['text_zipped_files_for_download_desc'] = 'Download the generated file to your Computer.';

//Tab Restore
$_['text_select_restore_type'] = 'Select Restore Type';
$_['text_select_restore_source'] = 'Select Restore Source';
$_['text_restore_file'] = 'Restore file';
$_['text_restore_summary'] = 'Restore summary';
$_['text_restore_types'] = 'Restore Types';
$_['text_full_restore'] = 'Full Restore';
$_['text_full_restore_desc'] = 'Do a full system restore, using an AnyPort generated backup file. This restores your root files and folders and your database.';
$_['text_restore_database'] = 'Database Restore';
$_['text_restore_database_desc'] = 'Do a database restore, using an AnyPort generated backup file.';
$_['text_restore_files'] = 'Files Restore';
$_['text_restore_files_desc'] = 'Do a files and folders restore, using an AnyPort generated backup file.';
$_['text_help_message_restore'] = 'When a Full Restore or a Database Restore is made the restore process will not be stopped if a mismatch occurs.';
$_['text_choose_source'] = 'Choose Source';
$_['text_restore_preconfigured_dropbox_folder'] = 'Get the restore file from your pre-configured Dropbox work folder.';
$_['text_restore_preconfigured_google_drive_stogare'] = 'Get the restore file from your pre-configured GoogleDrive storage.';
$_['text_restore_from_file'] = 'Restore From File';
$_['text_restore_from_file_desc'] = 'Restore from a file on your Computer.';
$_['text_select_restore_file'] = 'Select Restore File';

//Folder Autobackup
$_['text_dropbox_automatic_backup'] = 'Enable Dropbox Automatic Backup';
$_['text_dropbox_automatic_backup_desc'] = 'Enabling this option requres an active Dropbox account and Dropbox App.';
$_['text_backup_type'] = 'Backup Type';
$_['text_choose_backup_type'] = 'Choose the desired backup type.';
$_['text_account_information'] = 'Account Information';
$_['text_set_automatic_backup'] = 'Set Automatic Backup command';
$_['text_automatic_backup_desc'] = 'In order to set up automatic backups, please add the Command on the right to your Cron job service with the desired repetition time. You can see a tutorial for CPanel <a href="http://www.siteground.com/tutorials/cpanel/cron_jobs.htm" target="_blank">here</a>. Only UNIX-based servers support Cron jobs. This feature is available for OC versions 1.5.1.3 and later.';
$_['text_google_drive_automatic_backup'] = 'Enable Google Drive Automatic Backup';
$_['text_google_drive_automatic_backup_desc'] = 'Enabling this option requres an active Google account and Google Drive App.';

//Folder Backup
$_['text_select_tables'] = ' 2. Select Tables';
$_['text_select_files'] = ' 2. Select Files';


//Folder Settings
$_['text_enable_dropbox'] = 'Enable Dropbox';
$_['text_enable_dropbox_desc'] = 'After creating your Dropbox App (with Full access type) in <a href="https://www.dropbox.com/developers/apps" target="_blank">Dropbox Apps</a>, copy your App key and App secret here. You can watch a video tutorial <a href="http://screencast.com/t/zDKbRmHe7" target="_blank">here</a> or you can refer to the User Documentation for instructions on the setup.';
$_['text_dropbox_acc_status_desc'] = 'It seems you have changed your Dropbox credentials. То continue using Anyport Dropbox features you will have to reconfirm your application. Please double check your API key and secret and click the button bellow.';
$_['text_google_drive_enable'] = 'Enable GoogleDrive:';
$_['text_google_drive_enable_desc'] = 'After creating your Google Application in <a href="https://console.developers.google.com" target="_blank">Google Developer Console</a>, copy your App key and App secret here. You can watch a video tutorial on how to obtain those credentials <a href="https://www.youtube.com/watch?v=SewWd2JyVns" target="_blank">here.</a>';
$_['text_google_drive_folder_dsec'] = 'Please enter folder name. The folder name will be used during the authentication process while creating the AnyPort dedicated folder on your GoogleDrive';
$_['text_google_drive_acc_status'] = 'It seems you have changed your GoogleDrive credentials. То continue using Anyport GoogleDrive features you will have to reconfirm your application. Please double check your API key and secret and click the button bellow.';


?>
