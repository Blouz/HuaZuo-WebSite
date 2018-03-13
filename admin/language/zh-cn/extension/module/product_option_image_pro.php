<?php
//  Product Option Image PRO / Изображения опций PRO
//  Support: support@liveopencart.com / Поддержка: help@liveopencart.ru

// Heading
$_['module_name']           = '选项图';
$_['heading_title']         = $_['module_name'];
$_['text_edit']             = '编辑'.$_['module_name'].'模块';
$_['poip_module_name']      = $_['module_name'];

// Text
$_['text_module']         = '模块';
$_['text_success']        = '成功："'.$_['module_name'] .'"配置已更改！';
$_['text_content_top']    = '内容顶部';
$_['text_content_bottom'] = '内容底部';
$_['text_column_left']    = '列左侧';
$_['text_column_right']   = '列右侧';

// Entry
$_['entry_settings']                  = '模块设置';
$_['entry_custom_theme_id']           = '自定义主题ID';
$_['entry_custom_theme_id_help']      = '仅当使用的主题的原始目录被重命名或主题目录的名称不唯一时才应填充。';
$_['entry_import']                    = '导入';
$_['entry_import_description']        = '导入文件格式：XLS。导入只用第一页读取数据。
<br>第一行(表头) 应该包含字段名称：product_id, option_value_id, image (不是 product_option_id)
<br>下一行应该包含第一行对应的数据。';
$_['entry_import_nothing_before']     = '导入之前不删除选项图';
$_['entry_import_delete_before']      = '导入之前删除所有选项图';
$_['PHPExcelNotFound']                = '<a href="https://liveopencart.com/PHPExcel" target="_blank">PHPExcel</a> 未发现。丢失的文件: ';
$_['button_upload']		                = '导入文件';
$_['button_upload_help']              = '选择文件后立即开始导入';
$_['entry_server_response']           = '服务器应答';
$_['entry_import_result']             = '处理 行/图像/跳过';
$_['entry_export']                    = '导出';
$_['button_export']		                = '导出数据';
$_['entry_export_description']        = '导出产品选项图数据。文件格式: XLS。导出只用第一页放置数据。
<br>第一行(表头) 应该包含字段名称：product_id, option_value_id, image (不是 product_option_id)
<br>下一行应该包含第一行对应的数据。';

$_['entry_layout']        = '布局:';
$_['entry_position']      = '位置:';
$_['entry_status']        = '状态:';
$_['entry_sort_order']    = '排序:';
$_['entry_sort_order_short']    = '排列:';
$_['entry_settings_default']          = '全局设置';
$_['entry_settings_yes']          = '开';
$_['entry_settings_no']          = '关';

$_['entry_no_value'] 			= '未设置';
$_['entry_no_value_help'] = '显示图像如果没有选择该选项（只有该选项至少一个值被选中时图像才有意义）';

$_['entry_options_images_edit']       = '编辑选项图的方式';
$_['entry_options_images_edit_help']  = '设置一个方法（位置）编辑选项图';
$_['entry_options_images_edit_v0']    = '选项的图 (在 \'选项\' 页编辑)';
$_['entry_options_images_edit_v1']    = '图的选项 (在 \'图像\' 页编辑)';

$_['entry_img_use_v0']          = '关';
$_['entry_img_use_v1']          = '对所有打开';
$_['entry_img_use_v2']          = '对已选打开';

$_['entry_img_first_v0']          = '不要更改';
$_['entry_img_first_v1']          = '用第一张产品选项图替换';
$_['entry_img_first_v2']          = '像产品选项图一样使用';

// Entry Module Settings
$_['entry_img_change']          = '选中选项后更改主产品图';
$_['entry_img_change_help']     = '选中选项后，更改客户页面主产品图（使用第一选项图）';
$_['entry_img_hover']           = '鼠标悬停时更改主产品图';
$_['entry_img_hover_help']      = '当鼠标悬停在附加产品图上时更改客户页面主产品图';
$_['entry_img_main_to_additional']           = '将主图加入附加产品图';
$_['entry_img_main_to_additional_help']      = '在客户产品页面将主产品图加入附加产品图列表中';
$_['entry_img_main_to_additional_v0']        = '关 (默认)';
$_['entry_img_main_to_additional_v1']        = '开';
$_['entry_img_main_to_additional_v2']        = '只在有其他附加产品图时开';

$_['entry_img_use']             = '将产品选项图加入附加图中';
$_['entry_img_use_help']        = '将产品选项图加入客户产品页面的附加产品图中';

$_['entry_img_limit']           = '过滤附加图';
$_['entry_img_limit_help']      = '在客户产品页面上根据已选中选项显示适当的图像<br>
与 "'.$_['entry_img_use'].'"'.'功能一起使用';
$_['entry_img_limit_v0']        = '关';
$_['entry_img_limit_v1']        = '所有附加图像';
$_['entry_img_limit_v2']        = '已选项的附加图像';

$_['entry_img_gal']             = '筛选弹出画廊';
$_['entry_img_gal_help']        = '在客户产品页面根据已选中选项筛选弹出式画廊的图片，推荐与 "'.$_['entry_img_use'].'"和"'.$_['entry_img_limit'].'"'.'功能一起使用';

$_['entry_img_option']          = '在选项下方显示图片';
$_['entry_img_option_help']     = '在选中的下拉框/单选/多选选项下方显示对应的产品选项图';
$_['entry_img_category']        = '为产品列表显示选项缩略图';
$_['entry_img_category_help']   = '产品列表显示产品选项值的缩略图（分类页面，制造商页面，标准模块，“新品”、“畅销”、“折扣”、“特色”等）';
$_['entry_img_first']           = '选项标准图';
$_['entry_img_first_help']      = '用在选项编辑页加入的标准选项图 (菜单：产品 - 选项 - 其他)';
$_['entry_img_cart']            = '在购物车显示选项图';
$_['entry_img_cart_help']       = '在购物车中显示选中的选项对应的产品缩略图';

$_['entry_show_settings']       = '对当前产品选项显示独立设置';
$_['entry_hide_settings']       = '对当前产品选项隐藏独立设置';
$_['entry_show_hide']           = '显示/隐藏';
$_['entry_img_radio_checkbox']  = '显示复选框缩略图';
$_['entry_img_radio_checkbox_help']  = '对 \'多选框\'类型选项显示缩略图，就像默认的 \'单选框\' 类型(只对于部分主题兼容)';
$_['entry_dependent_thumbnails']= '独立选项缩略图';
$_['entry_dependent_thumbnails_help']= '根据其他已选择选项更改用户产品页面选项缩略图';

$_['text_update_alert']     = '(new version is available)';

$_['entry_about']               = 'About';
$_['module_description']    = '
The module module is designed to improve standard OpenCart functionality of product images. It allows to assign images to product options (from 1 to several images per option value) and use them to better visualize a product together with its options for customers.
<br>Compatible types of options: "Select", "Radio", "Checkbox".
';

$_['text_conversation'] = 'We are open for conversation. If you need to modify or integrate our modules, to add a new functionality or develop a new extension, email as to <b>support@liveopencart.com</b>.';

$_['entry_we_recommend'] = 'We also recommend:';
$_['text_we_recommend'] = '

';
$_['module_copyright'] = '"'.$_['module_name'].'". is a commercial extension. Resell or transfer it to other users is NOT ALLOWED.
<br>By purchasing this module, you get it for use on one site. 
If you want to use the module on multiple sites, you should purchase a separate copy for each site.
<br>Thank you for purchasing the module.
';

// Error
$_['error_permission']    = '警告：您没有权限编辑"'.$_['module_name'] .'"!';

$_['text_module_version'] = $_['module_name'].', version';
$_['text_module_support'] = 'Developer: <a href="http://liveopencart.com" target="_blank">liveopencart.com</a> | Support, questions and suggestions: <a href=\"mailto:support@liveopencart.com\">support@liveopencart.com</a>';
$_['module_page'] 				= '';


