<?php
// Heading
$_['heading_title']       = '备份恢复';

// Text
$_['text_module']         = '模块';
$_['text_success']        = '成功：您已成功设置备份恢复！';
$_['text_success_activation']        = '已激活：您已成功激活备份恢复！';
$_['text_content_top']    = '内容顶部';
$_['text_content_bottom'] = '内容底部';
$_['text_column_left']    = '列左侧';
$_['text_column_right']   = '列右侧';
$_['text_pick_destination_and_tables'] = '请选择一个备份目标和/或表和/或文件夹。';
$_['text_pick_source_and_file'] = '请选择恢复源和文件';
$_['text_feature_unsupported'] = '此功能仅支持Opencart {VERSION}';
$_['text_dropbox_auto_backup_not_enabled'] = 'Dropbox automatic backup is not enabled.';
$_['text_google_drive_auto_backup_not_enabled'] = 'Google Drive automatic backup is not enabled.';
$_['text_version_not_supported'] = 'Opencart {VERSION} 无法使用此功能。';
$_['text_dropbox_authentication_error'] = 'Dropbox authentication failed. Please check your settings.';
$_['text_google_drive_authentication_error'] = 'GoogleDrive authentication failed. Please check your settings.';
$_['text_google_drive_auth_changed'] = 'Google %s was changed without reconfirming your application. Google auth credentilas were not saved. Please click the "Confirm Google App" button.';
$_['text_dropbox_auth_changed'] = 'Dropbox %s was changed without reconfirming your application. Dropbox auth credentilas were not saved. Please click the "Confirm Dropbox App" button.';

// Entry
$_['entry_code']          = '备份恢复状态：<br /><span class="help">启用或禁用备份恢复</span>';
$_['entry_layouts_active']          = '激活显示：<br /><span class="help">请选择要激备份恢复的页面</span>';
$_['entry_highlightcolor']        = '高亮色：<br /><span class="help">这是结果中关键词的高亮颜色显示。<br/><br/><em>Examples: red, blue, #F7FF8C</em></span>';

// Success
$_['restore_success'] 	  = '数据已成功恢复！';
$_['restore_success_warnings'] = '数据已恢复， 进程中出现{COUNT}个警告。  <a href="javascript:void(0)" class="showWarnings">显示警告</a>';

// Error
$_['error_permission']    = '警告：您没有权限编辑模块！';
$_['error_code']          = '需要高亮颜色';

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
$_['anyport_no_file']	  = '文件未选取。';
$_['anyport_no_access_token']= '未设置通行令牌。';
$_['anyport_no_auth_code']= '未找到认证代码。';
$_['anyport_temp_dir_error'] = '无法建立临时路径。';
$_['anyport_folder_not_string'] = '文件夹不是"String"类型。';
$_['anyport_destination_not_string'] = '目标路径不是"String"类型"。';
$_['anyport_folder_empty'] = '文件夹为空';
$_['anyport_unable_file'] = '无法生成文件。';
$_['anyport_unable_write_file'] = '无法写入文件。';
$_['anyport_unable_read_file'] = '无法读取文件。';
$_['anyport_unable_zip_file'] = '无法建立压缩文件。';
$_['anyport_unable_zip_file_open'] = '无法打开压缩文件，请重试。';
$_['anyport_unable_zip_file_extract'] = '无法解压压缩文件。';
$_['anyport_unable_cache'] = '无法设置缓存存储方法。';
$_['anyport_unable_find_folder'] = '无法定位文件夹';
$_['anyport_invalid_data'] = '提交不可用数据';
$_['anyport_invalid_file'] = '文件不可用';
$_['anyport_unknown_loading_mode'] = '未知加载模式';
$_['anyport_no_download_url'] = '无法找到下载链接';
$_['anyport_mismatch_size'] = '输出文件大小与源文件大小不匹配';
$_['anyport_unable_download'] = '找不到要下载的文件';
$_['anyport_need_authorize'] = '权限不足';
$_['anyport_curl_disabled'] = 'cURL已关闭。请开启。';
$_['anyport_unable_upload'] = '无法上传文件';
$_['anyport_error_while_restoring'] = '恢复时出现错误';
$_['anyport_file_too_big_download'] = '文件过大。请手动从 <a target="_blank" href="{LINK}">{LINK}</a>下载并恢复您的计算机。';
$_['text_your_license']         = '许可证';
$_['text_please_enter_the_code']= '请输入许可证购买编码';
$_['text_activate_license']     = '激活许可';
$_['text_not_having_a_license'] = '没有编码？从这获取';
$_['text_license_holder']       = '许可所有者';
$_['text_registered_domains']   = '注册域';
$_['text_expires_on']           = '过期时间';
$_['text_valid_license']        = '可用许可';
$_['text_manage']               = '管理';
$_['text_get_support']          = '获取援助';
$_['text_community']            = '社区';
$_['text_ask_our_community']    = 'We have a big community. You are free to ask it about your issue on the iSenseLabs forum.';
$_['text_browse_forums']        = 'Browse forums';
$_['text_tickets']              = 'Tickets';
$_['text_open_a_ticket']        = 'Want to comminicate one-to-one with our tech people? Then open a support ticket.';
$_['text_open_ticket_for_real'] = 'Open a ticket';
$_['text_pre_sale']             = 'Pre-sale';
$_['text_pre_sale_text']        = 'Have a brilliant idea for your webstore? Our team of top-notch developers can make it real.';
$_['text_bump_the_sales']       = 'Bump the sales';

//Main twig
$_['text_backup'] = '备份';
$_['text_restore'] = '恢复';
$_['text_auto_backup'] = '自动备份（境外）';
$_['text_settings'] = '设置';
$_['text_support'] = '支持';

//Tab Auto Backup
$_['text_dropbox_auto_backup'] = 'Dropbox 自动备份';
$_['text_google_drive_auto_backup'] = 'Google Drive 自动备份';

//Tab Backup
$_['text_select_backup_type'] = '选择备份类型';
$_['text_what_to_backup'] = '选择备份内容';
$_['text_set_destination'] = '设置备份目标';
$_['text_backup_summary'] = '备份小结';
$_['text_full_open_cart_backup'] = '全站备份';
$_['text_full_open_cart_backup_desc'] = '为你的电子商城生成一个备份。这将包含全部的文件夹、文件和数据库。';
$_['text_database_backup'] = '数据库备份';
$_['text_database_backup_desc'] = '生成一个数据库备份。你可以在下一步选择需要备份的表。';
$_['text_files_backup'] = '文件备份';
$_['text_files_backup_desc'] = '备份根目录的文件夹和文件。你可以在下一步选择需要备份的文件夹和文件。';
$_['text_custom_backup'] = '自定义备份';
$_['text_custom_backup_desc'] = '生成一个自定义备份，你可以选择哪些文件夹、文件和/或数据库表去备份。';
$_['text_preconfigured_dropbox_folder'] = 'Send the generated file to a pre-configured Dropbox work folder.';
$_['text_preconfigured_google_drive_storage'] = 'Send the generated file to a pre-configured GoogleDrive storage.';
$_['text_no_could_storage'] = 'No Cloud Services are enabled. Please go to the Settings tab where you can configure and enable them. You can refer to AnyPort\'s User Documentation if you need help with the setup.';
$_['text_zipped_files_for_download'] = '下载压缩文件包';
$_['text_zipped_files_for_download_desc'] = '将生成的文件下载至本地计算机。';

//Tab Restore
$_['text_select_restore_type'] = '选择恢复类型';
$_['text_select_restore_source'] = '选择恢复源';
$_['text_restore_file'] = '恢复文件';
$_['text_restore_summary'] = '恢复小结';
$_['text_restore_types'] = '恢复类型';
$_['text_full_restore'] = '完整恢复';
$_['text_full_restore_desc'] = '使用“备份恢复”生成的备份文件完整恢复网站。这将恢复根目录文件夹、文件和数据库。';
$_['text_restore_database'] = '数据库恢复';
$_['text_restore_database_desc'] = '使用“备份恢复”生成的备份文件恢复数据库。';
$_['text_restore_files'] = '文件恢复';
$_['text_restore_files_desc'] = '使用“备份恢复”生成的备份文件恢复文件夹和文件。';
$_['text_help_message_restore'] = '在启用“完整恢复”和“数据库恢复”时，如果发生不匹配，进程也不会中止。';
$_['text_choose_source'] = '选择源';
$_['text_restore_preconfigured_dropbox_folder'] = 'Get the restore file from your pre-configured Dropbox work folder.';
$_['text_restore_preconfigured_google_drive_stogare'] = 'Get the restore file from your pre-configured GoogleDrive storage.';
$_['text_restore_from_file'] = '从文件恢复';
$_['text_restore_from_file_desc'] = '从本地文件恢复';
$_['text_select_restore_file'] = '选择恢复文件';

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
$_['text_select_tables'] = ' 2. 选择表';
$_['text_select_files'] = ' 2. 选择文件';


//Folder Settings
$_['text_enable_dropbox'] = 'Enable Dropbox';
$_['text_enable_dropbox_desc'] = 'After creating your Dropbox App (with Full access type) in <a href="https://www.dropbox.com/developers/apps" target="_blank">Dropbox Apps</a>, copy your App key and App secret here. You can watch a video tutorial <a href="http://screencast.com/t/zDKbRmHe7" target="_blank">here</a> or you can refer to the User Documentation for instructions on the setup.';
$_['text_dropbox_acc_status_desc'] = 'It seems you have changed your Dropbox credentials. То continue using Anyport Dropbox features you will have to reconfirm your application. Please double check your API key and secret and click the button bellow.';
$_['text_google_drive_enable'] = 'Enable GoogleDrive:';
$_['text_google_drive_enable_desc'] = 'After creating your Google Application in <a href="https://console.developers.google.com" target="_blank">Google Developer Console</a>, copy your App key and App secret here. You can watch a video tutorial on how to obtain those credentials <a href="https://www.youtube.com/watch?v=SewWd2JyVns" target="_blank">here.</a>';
$_['text_google_drive_folder_dsec'] = 'Please enter folder name. The folder name will be used during the authentication process while creating the AnyPort dedicated folder on your GoogleDrive';
$_['text_google_drive_acc_status'] = 'It seems you have changed your GoogleDrive credentials. То continue using Anyport GoogleDrive features you will have to reconfirm your application. Please double check your API key and secret and click the button bellow.';


?>
