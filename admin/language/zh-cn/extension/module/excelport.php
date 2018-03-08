<?php
// Heading
$_['heading_title']						= '批量操作';
$_['heading_title_version']				= '批量操作';

// Text
$_['text_module']         				= '模块';
$_['text_success']						= '成功：您已成功配置模块！';
$_['text_activate']						= '激活';
$_['text_not_activated']				= 'ExcelPort尚未激活。';
$_['text_click_activate']				= '激活ExcelPort';
$_['text_success_activation']			= '已激活：您已成功激活ExcelPort！';
$_['text_content_top']					= '内容顶部';
$_['text_content_bottom']				= '内容底部';
$_['text_column_left']					= '列左侧';
$_['text_column_right']					= '列右侧';
$_['text_datatype_option_products']		= '产品';
$_['text_datatype_option_categories']	= '分类';
$_['text_datatype_option_attributes']	= '属性和属性组';
$_['text_datatype_option_coupons']		= '优惠券';
$_['text_datatype_option_vouchers']		= '礼品券';
$_['text_question_data']				= '您想导出哪一类数据？';
$_['text_question_store']				= '您想导出哪一个商城？';
$_['text_question_language']			= '您想导出哪一种语言？';
$_['text_note']							= '注意：';
$_['text_supported_in_oc1541']			= '如果出现了Error 500, 可能是由于您服务器内存不足引起的。';
$_['text_learn_to_increase']			= '学习如何增加内存。';
$_['text_feature_unsupported']			= '该功能只支持OpenCart {VERSION}';
$_['text_question_data_import']			= '您想导入哪一类数据？';
$_['text_question_store_import']		= '您想导入到哪一个商城？';
$_['text_question_language_import']		= '您想导入哪一种语言？';
$_['text_question_file_import']			= '请选择您要上传的 .xlsx 或者 .zip 文件：';
$_['text_file_generating']				= '生成文件中，请等候...';
$_['text_file_downloading']				= '下载文件中...';
$_['text_import_done']					= '导入结束。 {COUNT} {TYPE} 已导入。';
$_['text_preparing_data']				= '数据准备中...';
$_['text_export_entries_number']		= '每个导出部分的条目数量：<span class="help">如果内存不足请将该值调低。该值越低，您会收到的导出文件越多。不要赋值给“属性”项目。</span>';
$_['text_import_limit']					= '每个导入步骤中最大条目数量：<span class="help">默认值是100。如果在导入时遇到内存问题，请减少该值。不要赋值给“属性”和“选项”项目。</span>';
$_['text_export_entries_number']		= '<span data-toggle="tooltip" title="如果内存不足请将该值调低。该值越低，您会收到的导出文件越多。不要赋值给“属性”项目。">每个导出部分的条目数量</span>';
$_['text_import_limit']					= '<span data-toggle="tooltip" title="默认值是100。如果在导入时遇到内存问题，请减少该值。不要赋值给“属性”和“选项”项目。">每个导入步骤中最大条目数量</span>';
$_['text_question_product_type']		= '您希望以怎样的结构组织导出的商品？';
$_['text_question_delete_other']		= '在导入之前删除条目：这将首先删除所选导入类型的所有数据库条目之后进行导入。建议在使用此选项之前进行完整的数据库备份。';
$_['text_confirm_delete_other']			= '这将在导入之前删除所有条目。建议在导入之前备份数据库。如果确定要继续，请单击“确定”。';
$_['text_question_product_type_quick']			= '基础导出 - 产品的单行导出，不包括属性，重复付款概况，选项，折扣，特价，图片，奖励点和设计。';
$_['text_question_product_type_full']			= '群组导出 - 单页导出。产品分组以行显示。';
$_['text_question_product_type_bulk']			= '批量导出 - 多页批量导出，适合批量编辑。 <a href="https://isenselabs.com/posts/excelport-introducing-bulk-mode" target="_blank"><i class="fa fa-external-link"></i> 更多信息</a>';
$_['text_question_add_as_new']			= '作为新产品导入：这将忽略“产品ID”部分，将产品作为新产品导入。注意：对于手动添加的ID，“相关产品”将不会生效。';
$_['text_toggle_filter']				= '切换筛选器';
$_['text_conjunction']					= '筛选器结合';
$_['help_conjunction']					= '如果使用 &quot;AND&quot;, 那么所有条件必须全部符合。 如果使用 &quot;OR&quot;, 那么至少一个条件符合就会列入条目。';
$_['text_the_value']					= '值';
$_['text_datatype_option_customers']	= '会员';
$_['text_datatype_option_customer_groups'] = '会员组';
$_['text_datatype_option_options']		= '选项';
$_['text_datatype_option_orders']		= '订单';
$_['text_datatype_option_manufacturers'] = '制造商';
$_['text_last_import']                  = '您最后导入的文件是：<br /><strong>{FILE}</strong>';

$_['text_openstock_installed'] = '您的ExcelPort支持OpenStock！';

$_['text_export_product_description_html'] = '<span data-toggle="tooltip" title="这个选项将影响导出。">选择ExcelPort应如何处理产品描述：</span>';
$_['option_encoded_html'] = '加密HTML字符: &amp;lt;p&amp;gt;';
$_['option_standard_html'] = '标准HTML字符: &lt;p&gt;';
$_['option_no_html'] = '不添加HTML字符';

// Entry
$_['entry_code']						= 'ExcelPort状态:<br /><span class="help">启用或禁用ExcelPort</span>';
$_['entry_layouts_active']				= '激活显示:<br /><span class="help">选择一个要激活ExcelPort显示的页面</span>';

// Error
$_['error_permission']					= '警告：您没有权限修改ExcelPort设置！';
$_['error_no_file']						= '文件未上传。';

// Button
$_['button_export']						= '立即导出';
$_['button_import']						= '导入数据';
$_['button_add_condition']				= '增加筛选器';
$_['button_discard_condition']			= '移除筛选器';

$_['excelport_unable_cache']			= '无法设置缓存方法。';
$_['excelport_unable_upload']			= '临时文件没有移动到目标文件夹。';
$_['excelport_invalid_file']			= '文件不可用——可能是由于过大或者文件格式不支持。';
$_['excelport_folder_not_string']		= '变量不是字符串。';
$_['excelport_file_not_exists']			= '您希望导入的文件在服务器上不存在。';
$_['excelport_export_limit_invalid'] 	= '单个文件条目数量不可用。请输入50-800之间的数值。';
$_['excelport_invalid_import_file']		= '已导入文件在文件系统中不存在！';
$_['excelport_unable_zip_file_open']	= '无法打开压缩文件，它可能已损坏。';
$_['excelport_unable_zip_file_extract'] = '无法展开压缩文件';
$_['excelport_unable_create_unzip_folder'] = '无法创建解压文件夹。';
$_['excelport_import_limit_invalid']	= '导入条目数不可用。请输入10-800之间的数值。';
$_['excelport_mode_unknown']			= '导入表格第一行(表头)不可用. 请使用快速模式或完整模式字段。参考ExcelPort获取更多帮助。';
$_['excelport_sheet_unknown'] = '.XLSX表中第一页必须命名为&quot;Products&quot;';

$_['excelport_openstock_failed'] = 'ExcelPort的OpenStock支持未应用。请将文件 %s 复制到 %s.';
$_['excelport_openstock_uninstall_failed'] = 'ExcelPort的OpenStock支持无法卸载。请删除文件 %s.';

$_['import_success']					= '成功：产品已导入。';

$_['license_your_license'] = '您的许可证';
$_['license_enter_code'] = '请输入您购买许可证的编号:';
$_['license_placeholder'] = '许可证编号示例： XXXXXX-XXXXXX-XXXXXX-XXXXXX-XXXXXX';
$_['license_activate'] = '激活许可证';
$_['license_get_code'] = '没有激活码？从此处获取。';
$_['license_holder'] = '许可证持有者';
$_['license_registered_domains'] = '注册域名';
$_['license_expires'] = '过期时间';
$_['license_valid'] = '可用许可证';
$_['license_manage'] = '管理';
$_['license_get_support'] = '获取援助';
$_['license_community'] = '社区';
$_['license_community_info'] = '在iSenseLabs论坛上询问社区你的问题.';
$_['license_forums'] = '浏览论坛';
$_['license_tickets'] = '咨询帖';
$_['license_tickets_info'] = '想与技术人员一对一交流？那么就开一个咨询帖吧！';
$_['license_tickets_open'] = '建立咨询帖';
$_['license_presale'] = '预售';
$_['license_presale_info'] = '对你的商店想出了一个绝妙的点子？我们出色的程序员可以帮你梦想成真。';
$_['license_presale_bump'] = '热卖';
$_['license_missing'] = '你正在使用未激活的模块！ <a href="javascript:void(0);" onclick="jq(\'.excelport_tab:eq(3)\').trigger(\'click\'); jq(\'.licenseCodeBox\').focus();">点击这里输入激活码</a>以确保功能正常，技术支持和获取更新。';