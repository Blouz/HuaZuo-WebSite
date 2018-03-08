<?php
//  Parent-child Options
//  Support: support@liveopencart.com / Поддержка: help@liveopencart.ru

// Heading
$_['module_name']           = '级联选项';
$_['heading_title']         = $_['module_name'];
$_['text_edit']             = '编辑'.$_['module_name'].'模块';

// Text
$_['text_module']           = '模块';
$_['text_success']          = '设置已修改！';
$_['text_content_top']      = '内容顶部';
$_['text_content_bottom']   = '内容底部';
$_['text_column_left']      = '列左侧';
$_['text_column_right']     = '列右侧';
$_['text_m_all_options']    = '所有可用选项';
$_['text_m_support']        = "Developer: <a href='https://liveopencart.com' target='_blank'>liveopencart.com</a> | Support, questions and suggestions: <a href=\"mailto:support@liveopencart.com\">support@liveopencart.com</a>";

// for the product edit page
$_['pcop_entry_settings']               = '上级选项';
$_['pcop_entry_no_parent_options']      = '当前没有上级选项';
$_['pcop_entry_add_parent_option']      = '加入上级选项';
$_['pcop_entry_or']                     = '或';
$_['pcop_entry_remove_parent_option']   = '移除上级选项';


// Entry
$_['entry_settings']                  = '主设置';
$_['entry_additional']                = '其他字段';

$_['entry_PHPExcel_not_found']        = '<a href="https://liveopencart.com/PHPExcel" target="_blank">PHPExcel</a> 库未找到。<br> 丢失文件：';
$_['entry_export']                    = '导出';
$_['entry_export_description']        = '导出文件格式: XLS.<br>第一行为字段名，第二行为数据。';
$_['entry_export_get_file']           = '导出文件';
$_['entry_export_check_all']          = '全选';
$_['entry_export_fields']             = '导出字段:';
$_['entry_import']                    = '导入';
$_['entry_import_ok']                 = '导入完成';
$_['entry_import_description']        = '
导入文件格式: XLS。导入只用数据表的第一页。
<br>第一行应该包括字段名（表头）： product_id, option_id, parent_option_id, parent_option_values_ids, pcop_or.
<br>在第一个表中第二行应该包括对应字段名的数据 (在 \'parent_option_values_ids\' 列的ID应该用","分隔)。
';
$_['button_upload']		                = '导入文件';
$_['button_upload_help']              = '文件选中时导入将立即开始';
$_['entry_server_response']           = '服务器应答：';
$_['entry_import_result']             = '处理 产品 / 选项';
$_['entry_import_delete_yes']         = '导入前删除现有级联关系';
$_['entry_import_delete_no']          = '将新级联关系加在现有关系后';
$_['entry_use_po_ids']          			= '使用 <b>product_option_id</b> 和 <b>product_option_value_id</b> 代替 <b>option_id</b> 和 <b>option_value_id</b>';
$_['entry_use_po_ids_help']      			= '如果对同一个产品，同一个选项使用了不止一次会很有用。
(如果 product_option_id 或 product_option_value_id 在导出后及导入前因为各种原因发生了改变他将不会生效)';


$_['entry_m_version']                 = '级联选项, 版本';

$_['text_update_alert']               = '(a new version is available)';

$_['text_extension_page']             = '<a href="https://www.opencart.com/index.php?route=extension/extension/info&extension_id=23337" target="_blank" title="Parent-child Options on opencart.com">Parent-child Options on opencart.com</a>';

$_['entry_about']               			= 'About';
$_['module_description']    					= '
The module is designed to show/hide child options (option groups) depending on selected values of their parent options.';

$_['text_conversation'] 							= 'We are open for conversation. If you need to modify or integrate our modules, to add new functionality or develop new modules, email as to <b><a href="mailto:support@liveopencart.com">support@liveopencart.com</a></b>.';

$_['entry_we_recommend'] 							= 'We also recommend:';
$_['text_we_recommend'] 							= '

';
$_['module_copyright'] 								= '"'.$_['module_name'].'". is a commercial extension. Resell or transfer it to other users is NOT ALLOWED.
<br>By purchasing this module, you get it for use on one site. 
If you want to use the module on multiple sites, you should purchase a separate copy for each site.
<br>Thank you for purchasing the module.
';

$_['error_modificaton']               = '警告：'.$_['module_name'].'修改(OCMOD)未应用！';
$_['error_permission']                = '警告：您没有权限编辑模块！';
?>