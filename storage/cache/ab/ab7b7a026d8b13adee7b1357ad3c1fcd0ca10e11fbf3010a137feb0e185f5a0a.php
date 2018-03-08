<?php

/* extension/module/parent_child_options.twig */
class __TwigTemplate_81729ffceffb22a4051f3c011f571f9bba40edc90f591b4e338928d5a5c8e61b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
\t
\t<div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-parent-child-options\" data-toggle=\"tooltip\" title=\"";
        // line 11
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 12
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 13
        echo (isset($context["module_name"]) ? $context["module_name"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
       ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "\t\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      </ul>
    </div>
  </div>
\t<div class=\"container-fluid\">
    ";
        // line 22
        if ((array_key_exists("error_warning", $context) && (isset($context["error_warning"]) ? $context["error_warning"] : null))) {
            // line 23
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
\t\t";
        }
        // line 27
        echo "\t\t";
        if ((array_key_exists("success", $context) && (isset($context["success"]) ? $context["success"] : null))) {
            // line 28
            echo "\t\t\t<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
    ";
        }
        // line 32
        echo "    
\t\t<div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 35
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
\t\t\t\t
        ";
        // line 39
        if ( !(isset($context["ocmod_is_applied"]) ? $context["ocmod_is_applied"] : null)) {
            // line 40
            echo "          <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_modificaton"]) ? $context["error_modificaton"] : null);
            echo "</div>
        ";
        }
        // line 42
        echo "        
        <ul class=\"nav nav-tabs\">
          <li class=\"active\"><a href=\"#tab-export\" data-toggle=\"tab\">";
        // line 44
        echo (isset($context["entry_export"]) ? $context["entry_export"] : null);
        echo "</a></li>
          <li><a href=\"#tab-import\" data-toggle=\"tab\">";
        // line 45
        echo (isset($context["entry_import"]) ? $context["entry_import"] : null);
        echo "</a></li>
          <li><a href=\"#tab-about\" data-toggle=\"tab\" id=\"tab-about-button\">";
        // line 46
        echo (isset($context["entry_about"]) ? $context["entry_about"] : null);
        echo "</a></li>
        </ul>
\t\t\t\t
\t\t\t\t<!-- always enabled -->
\t\t\t\t<form action=\"";
        // line 50
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-parent-child-options\" class=\"form-horizontal\">
\t\t\t\t<input type=\"hidden\" name=\"module_liveprice_status\" value=\"1\">
\t\t\t\t</form>
        
        <div class=\"tab-content\" style=\"margin-bottom: 30px;\">
          
          <div class=\"tab-pane active\" id=\"tab-export\">
            
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-12\" >
\t\t\t\t\t\t\t\t<div style=\"margin-bottom: 30px;\">";
        // line 60
        echo (isset($context["entry_export_description"]) ? $context["entry_export_description"] : null);
        echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
            
            ";
        // line 64
        if (((isset($context["PHPExcel_exists"]) ? $context["PHPExcel_exists"] : null) && (isset($context["ocmod_is_applied"]) ? $context["ocmod_is_applied"] : null))) {
            // line 65
            echo "            
              <form id=\"form_export\" action=\"";
            // line 66
            echo (isset($context["action_export"]) ? $context["action_export"] : null);
            echo "\" method=\"post\" target=\"export_frame\" class=\"form-horizontal\">
                <input type=\"hidden\" name=\"export\" value=\"export\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group\" >
                  <div class=\"col-sm-12\" >
                    <div class=\"checkbox\">
                      <label>
                        <input type=\"checkbox\" name=\"use_po_ids\" value=\"1\">
                        ";
            // line 74
            echo (isset($context["entry_use_po_ids"]) ? $context["entry_use_po_ids"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
            // line 75
            echo (isset($context["entry_use_po_ids_help"]) ? $context["entry_use_po_ids_help"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
                    </div>
                  </div>
                </div>
              
                <div class=\"form-group\" style=\"min-height: 40px;\">
                  <div class=\"col-sm-12\" >
                    <button type=\"button\" onclick=\"\$('#form_export').submit();\" data-toggle=\"tooltip\" title=\"\" class='btn btn-primary' data-original-title=\"";
            // line 83
            echo (isset($context["entry_export_get_file"]) ? $context["entry_export_get_file"] : null);
            echo "\">";
            echo (isset($context["entry_export_get_file"]) ? $context["entry_export_get_file"] : null);
            echo "</button>
                  </div>
                </div>
              
              </form>
            
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\" >
\t\t\t\t\t\t      <iframe name=\"export_frame\" src=\"\" id=\"export_frame\" style=\"display: none\"></iframe>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
            
\t\t\t\t\t\t";
        }
        // line 96
        echo "            ";
        if ( !(isset($context["PHPExcel_exists"]) ? $context["PHPExcel_exists"] : null)) {
            // line 97
            echo "\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\" >
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 99
            echo ((isset($context["entry_PHPExcel_not_found"]) ? $context["entry_PHPExcel_not_found"] : null) . (isset($context["PHPExcel_path"]) ? $context["PHPExcel_path"] : null));
            echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
            ";
        }
        // line 103
        echo "            
          </div>
          
          <div class=\"tab-pane\" id=\"tab-import\">
            <div style=\"margin-bottom: 30px;\">";
        // line 107
        echo (isset($context["entry_import_description"]) ? $context["entry_import_description"] : null);
        echo "</div>
            ";
        // line 108
        if (((isset($context["PHPExcel_exists"]) ? $context["PHPExcel_exists"] : null) && (isset($context["ocmod_is_applied"]) ? $context["ocmod_is_applied"] : null))) {
            // line 109
            echo "            
\t\t\t\t\t\t\t<div class=\"row\" >
                <div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"pcop_delete_before_import\" value=\"1\" checked>";
            // line 113
            echo (isset($context["entry_import_delete_yes"]) ? $context["entry_import_delete_yes"] : null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
                </div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"pcop_delete_before_import\" value=\"0\">";
            // line 118
            echo (isset($context["entry_import_delete_no"]) ? $context["entry_import_delete_no"] : null);
            echo "
\t\t\t\t\t\t\t\t\t</label>
                </div>
              </div>
\t\t\t\t\t\t
              <div class=\"row\" style=\"margin-top:20px;\">
                <div class=\"col-sm-12\" >
                  <button type=\"button\" id=\"button-upload\" data-toggle=\"tooltip\" title=\"\" class='btn btn-primary' data-original-title=\"";
            // line 125
            echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
            echo "\">";
            echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
            echo "</button>
                  <span class=\"help-block\">";
            // line 126
            echo (isset($context["button_upload_help"]) ? $context["button_upload_help"] : null);
            echo "</span>
                </div>
              </div>
            ";
        }
        // line 130
        echo "            
            ";
        // line 131
        if ( !(isset($context["PHPExcel_exists"]) ? $context["PHPExcel_exists"] : null)) {
            // line 132
            echo "\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12\" >
\t\t\t\t\t\t\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 134
            echo ((isset($context["entry_PHPExcel_not_found"]) ? $context["entry_PHPExcel_not_found"] : null) . (isset($context["PHPExcel_path"]) ? $context["PHPExcel_path"] : null));
            echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>\t
            ";
        }
        // line 138
        echo "            
            <div style=\"margin-top: 30px;\" id=\"import_result\"></div>
            
            <div style=\"margin-top: 30px;\" id=\"import_result_text\"></div>
          </div>
          
          <div class=\"tab-pane\" id=\"tab-about\">
            
            <div id=\"module_description\">
              ";
        // line 147
        echo (isset($context["module_description"]) ? $context["module_description"] : null);
        echo "
            </div>
            
            <hr>
            ";
        // line 151
        echo (isset($context["text_conversation"]) ? $context["text_conversation"] : null);
        echo "
            <hr>
            
            <br>
            <h4>";
        // line 155
        echo (isset($context["entry_we_recommend"]) ? $context["entry_we_recommend"] : null);
        echo "</h4><br>
            <div id=\"we_recommend\">
              ";
        // line 157
        echo (isset($context["text_we_recommend"]) ? $context["text_we_recommend"] : null);
        echo "
            </div>
            
          </div>
          
        </div>
        
          
\t\t\t\t<hr>
\t\t\t\t<span class=\"help-block\" >";
        // line 166
        echo (((isset($context["entry_m_version"]) ? $context["entry_m_version"] : null) . ": ") . (isset($context["module_version"]) ? $context["module_version"] : null));
        echo " | ";
        echo (isset($context["text_m_support"]) ? $context["text_m_support"] : null);
        echo " | <span id=\"module_page\">";
        echo (isset($context["text_extension_page"]) ? $context["text_extension_page"] : null);
        echo "</span></span><span class=\"help-block\" style=\"font-size: 80%; line-height: 130%; margin-bottom: 0px;\">";
        echo (isset($context["module_copyright"]) ? $context["module_copyright"] : null);
        echo "</span>
      </div>
    </div>
  </div>
</div>


<script type=\"text/javascript\"><!--
var import_upload_timer;
\$('#button-upload').on('click', function() {
\t\$('#form-upload').remove();
\t
\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');\t

\tclearInterval(import_upload_timer);
\timport_upload_timer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(import_upload_timer);\t\t
\t\t\t
\t\t\tvar form_data = new FormData(\$('#form-upload')[0]);
\t\t\t
\t\t\tform_data.append(\"pcop_delete_before_import\", \$('input:radio[name=\"pcop_delete_before_import\"]:checked').val() );
\t\t\t
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/module/parent_child_options/import&user_token=";
        // line 192
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\t\ttype: 'post',\t\t
\t\t\t\tdataType: 'json',
\t\t\t\tdata: form_data,
\t\t\t\t//data: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,\t\t
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-upload').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-upload').button('reset');
\t\t\t\t},\t
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t
          \$('#import_result_text').html(\"";
        // line 208
        echo (isset($context["entry_server_response"]) ? $context["entry_server_response"] : null);
        echo ": \"+json);
          \t\t\t
\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);
\t\t\t\t\t}
        
          if (json['error']) {
            \$('#import_result_text').html('Error: '+json['error']);
          } else {
            \$('#import_result_text').html('";
        // line 217
        echo (isset($context["entry_import_result"]) ? $context["entry_import_result"] : null);
        echo ": '+json['products']+'/'+json['options']);
          }
          if ( json['warnings'] && json['warnings'].length ) {
            \$('#import_result_text').append('<br><br>Warnings:');
            for (var i in json['warnings']) {
              if ( !json['warnings'].hasOwnProperty(i) ) continue;
              \$('#import_result_text').append('<br>'+json['warnings'][i]);  
            }
          }
          
\t\t\t\t},\t\t\t
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>

<script type=\"text/javascript\">
  function check_for_updates() {
\t\t\$.ajax({
\t\t\turl: '//update.liveopencart.com/upd.php',
\t\t\ttype: 'post',
\t\t\tdata: { module: '";
        // line 242
        echo (isset($context["extension_code"]) ? $context["extension_code"] : null);
        echo "', version:'";
        echo (isset($context["module_version"]) ? $context["module_version"] : null);
        echo "', lang: '";
        echo (isset($context["config_admin_language"]) ? $context["config_admin_language"] : null);
        echo "' },
\t\t\tdataType: 'json',
\t
\t\t\tsuccess: function(data) {
\t\t\t\t
\t\t\t\tif (data) {
\t\t\t\t\t
\t\t\t\t\tif (data['recommend']) {
\t\t\t\t\t\t\$('#we_recommend').html(data['recommend']);
\t\t\t\t\t}
\t\t\t\t\tif (data['update']) {
\t\t\t\t\t\t\$('#tab-about-button').append('&nbsp;&nbsp;<font style=\"color:red;font-weight:normal;\">";
        // line 253
        echo twig_escape_filter($this->env, (isset($context["text_update_alert"]) ? $context["text_update_alert"] : null));
        echo "</font>');
\t\t\t\t\t\t\$('#module_description').after('<hr><div class=\"alert alert-info\" role=\"alert\">'+data['update']+'</div>');
\t\t\t\t\t}
\t\t\t\t\tif (data['product_pages']) {
\t\t\t\t\t\t\$('#module_page').html(data['product_pages']);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t});\t
\t}
\t
  \$(document).ready(  function () {
\t\tcheck_for_updates();
  } );
\t
</script>

";
        // line 270
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/parent_child_options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 270,  427 => 253,  409 => 242,  381 => 217,  369 => 208,  350 => 192,  315 => 166,  303 => 157,  298 => 155,  291 => 151,  284 => 147,  273 => 138,  266 => 134,  262 => 132,  260 => 131,  257 => 130,  250 => 126,  244 => 125,  234 => 118,  226 => 113,  220 => 109,  218 => 108,  214 => 107,  208 => 103,  201 => 99,  197 => 97,  194 => 96,  176 => 83,  165 => 75,  161 => 74,  150 => 66,  147 => 65,  145 => 64,  138 => 60,  125 => 50,  118 => 46,  114 => 45,  110 => 44,  106 => 42,  100 => 40,  98 => 39,  91 => 35,  86 => 32,  78 => 28,  75 => 27,  67 => 23,  65 => 22,  59 => 18,  48 => 16,  44 => 15,  39 => 13,  33 => 12,  29 => 11,  19 => 5,);
    }
}
/* {#*/
/* //  Parent-child Options*/
/* //  Support: support@liveopencart.com / Поддержка: help@liveopencart.ru*/
/* #}*/
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* 	*/
/* 	<div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-parent-child-options" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ module_name }}</h1>*/
/*       <ul class="breadcrumb">*/
/*        {% for breadcrumb in breadcrumbs %}*/
/* 					<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* 	<div class="container-fluid">*/
/*     {% if error_warning is defined and error_warning %}*/
/* 			<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/* 				<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 			</div>*/
/* 		{% endif %}*/
/* 		{% if success is defined and success %}*/
/* 			<div class="alert alert-success"><i class="fa fa-exclamation-circle"></i> {{ success }}*/
/* 				<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 			</div>*/
/*     {% endif %}*/
/*     */
/* 		<div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/* 				*/
/*         {% if not ocmod_is_applied %}*/
/*           <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_modificaton }}</div>*/
/*         {% endif %}*/
/*         */
/*         <ul class="nav nav-tabs">*/
/*           <li class="active"><a href="#tab-export" data-toggle="tab">{{ entry_export }}</a></li>*/
/*           <li><a href="#tab-import" data-toggle="tab">{{ entry_import }}</a></li>*/
/*           <li><a href="#tab-about" data-toggle="tab" id="tab-about-button">{{ entry_about }}</a></li>*/
/*         </ul>*/
/* 				*/
/* 				<!-- always enabled -->*/
/* 				<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-parent-child-options" class="form-horizontal">*/
/* 				<input type="hidden" name="module_liveprice_status" value="1">*/
/* 				</form>*/
/*         */
/*         <div class="tab-content" style="margin-bottom: 30px;">*/
/*           */
/*           <div class="tab-pane active" id="tab-export">*/
/*             */
/* 						<div class="row">*/
/* 							<div class="col-sm-12" >*/
/* 								<div style="margin-bottom: 30px;">{{ entry_export_description }}</div>*/
/* 							</div>*/
/* 						</div>*/
/*             */
/*             {% if PHPExcel_exists and ocmod_is_applied %}*/
/*             */
/*               <form id="form_export" action="{{ action_export }}" method="post" target="export_frame" class="form-horizontal">*/
/*                 <input type="hidden" name="export" value="export">*/
/* 								*/
/* 								<div class="form-group" >*/
/*                   <div class="col-sm-12" >*/
/*                     <div class="checkbox">*/
/*                       <label>*/
/*                         <input type="checkbox" name="use_po_ids" value="1">*/
/*                         {{ entry_use_po_ids }}*/
/* 												<span class="help-block">{{ entry_use_po_ids_help }}</span>*/
/* 											</label>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               */
/*                 <div class="form-group" style="min-height: 40px;">*/
/*                   <div class="col-sm-12" >*/
/*                     <button type="button" onclick="$('#form_export').submit();" data-toggle="tooltip" title="" class='btn btn-primary' data-original-title="{{ entry_export_get_file }}">{{ entry_export_get_file }}</button>*/
/*                   </div>*/
/*                 </div>*/
/*               */
/*               </form>*/
/*             */
/* 							<div class="row">*/
/* 								<div class="col-sm-12" >*/
/* 						      <iframe name="export_frame" src="" id="export_frame" style="display: none"></iframe>*/
/* 								</div>*/
/* 							</div>*/
/*             */
/* 						{% endif %}*/
/*             {% if not PHPExcel_exists %}*/
/* 							<div class="row">*/
/* 								<div class="col-sm-12" >*/
/* 									<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ entry_PHPExcel_not_found~PHPExcel_path }}</div>*/
/* 								</div>*/
/* 							</div>	*/
/*             {% endif %}*/
/*             */
/*           </div>*/
/*           */
/*           <div class="tab-pane" id="tab-import">*/
/*             <div style="margin-bottom: 30px;">{{ entry_import_description }}</div>*/
/*             {% if PHPExcel_exists and ocmod_is_applied %}*/
/*             */
/* 							<div class="row" >*/
/*                 <div class="col-sm-12">*/
/* 									<label>*/
/* 										<input type="radio" name="pcop_delete_before_import" value="1" checked>{{ entry_import_delete_yes }}*/
/* 									</label>*/
/*                 </div>*/
/* 								<div class="col-sm-12">*/
/* 									<label>*/
/* 										<input type="radio" name="pcop_delete_before_import" value="0">{{ entry_import_delete_no }}*/
/* 									</label>*/
/*                 </div>*/
/*               </div>*/
/* 						*/
/*               <div class="row" style="margin-top:20px;">*/
/*                 <div class="col-sm-12" >*/
/*                   <button type="button" id="button-upload" data-toggle="tooltip" title="" class='btn btn-primary' data-original-title="{{ button_upload }}">{{ button_upload }}</button>*/
/*                   <span class="help-block">{{ button_upload_help }}</span>*/
/*                 </div>*/
/*               </div>*/
/*             {% endif %}*/
/*             */
/*             {% if not PHPExcel_exists %}*/
/* 							<div class="row">*/
/* 								<div class="col-sm-12" >*/
/* 									<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ entry_PHPExcel_not_found~PHPExcel_path }}</div>*/
/* 								</div>*/
/* 							</div>	*/
/*             {% endif %}*/
/*             */
/*             <div style="margin-top: 30px;" id="import_result"></div>*/
/*             */
/*             <div style="margin-top: 30px;" id="import_result_text"></div>*/
/*           </div>*/
/*           */
/*           <div class="tab-pane" id="tab-about">*/
/*             */
/*             <div id="module_description">*/
/*               {{ module_description }}*/
/*             </div>*/
/*             */
/*             <hr>*/
/*             {{ text_conversation }}*/
/*             <hr>*/
/*             */
/*             <br>*/
/*             <h4>{{ entry_we_recommend }}</h4><br>*/
/*             <div id="we_recommend">*/
/*               {{ text_we_recommend }}*/
/*             </div>*/
/*             */
/*           </div>*/
/*           */
/*         </div>*/
/*         */
/*           */
/* 				<hr>*/
/* 				<span class="help-block" >{{ entry_m_version~": "~module_version }} | {{ text_m_support }} | <span id="module_page">{{ text_extension_page }}</span></span><span class="help-block" style="font-size: 80%; line-height: 130%; margin-bottom: 0px;">{{ module_copyright }}</span>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* */
/* <script type="text/javascript"><!--*/
/* var import_upload_timer;*/
/* $('#button-upload').on('click', function() {*/
/* 	$('#form-upload').remove();*/
/* 	*/
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');	*/
/* */
/* 	clearInterval(import_upload_timer);*/
/* 	import_upload_timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(import_upload_timer);		*/
/* 			*/
/* 			var form_data = new FormData($('#form-upload')[0]);*/
/* 			*/
/* 			form_data.append("pcop_delete_before_import", $('input:radio[name="pcop_delete_before_import"]:checked').val() );*/
/* 			*/
/* 			$.ajax({*/
/* 				url: 'index.php?route=extension/module/parent_child_options/import&user_token={{ user_token }}',*/
/* 				type: 'post',		*/
/* 				dataType: 'json',*/
/* 				data: form_data,*/
/* 				//data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,		*/
/* 				beforeSend: function() {*/
/* 					$('#button-upload').button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$('#button-upload').button('reset');*/
/* 				},	*/
/* 				success: function(json) {*/
/* 					*/
/*           $('#import_result_text').html("{{ entry_server_response }}: "+json);*/
/*           			*/
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* 					}*/
/*         */
/*           if (json['error']) {*/
/*             $('#import_result_text').html('Error: '+json['error']);*/
/*           } else {*/
/*             $('#import_result_text').html('{{ entry_import_result }}: '+json['products']+'/'+json['options']);*/
/*           }*/
/*           if ( json['warnings'] && json['warnings'].length ) {*/
/*             $('#import_result_text').append('<br><br>Warnings:');*/
/*             for (var i in json['warnings']) {*/
/*               if ( !json['warnings'].hasOwnProperty(i) ) continue;*/
/*               $('#import_result_text').append('<br>'+json['warnings'][i]);  */
/*             }*/
/*           }*/
/*           */
/* 				},			*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script>*/
/* */
/* <script type="text/javascript">*/
/*   function check_for_updates() {*/
/* 		$.ajax({*/
/* 			url: '//update.liveopencart.com/upd.php',*/
/* 			type: 'post',*/
/* 			data: { module: '{{ extension_code }}', version:'{{ module_version }}', lang: '{{ config_admin_language }}' },*/
/* 			dataType: 'json',*/
/* 	*/
/* 			success: function(data) {*/
/* 				*/
/* 				if (data) {*/
/* 					*/
/* 					if (data['recommend']) {*/
/* 						$('#we_recommend').html(data['recommend']);*/
/* 					}*/
/* 					if (data['update']) {*/
/* 						$('#tab-about-button').append('&nbsp;&nbsp;<font style="color:red;font-weight:normal;">{{ text_update_alert|e }}</font>');*/
/* 						$('#module_description').after('<hr><div class="alert alert-info" role="alert">'+data['update']+'</div>');*/
/* 					}*/
/* 					if (data['product_pages']) {*/
/* 						$('#module_page').html(data['product_pages']);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		});	*/
/* 	}*/
/* 	*/
/*   $(document).ready(  function () {*/
/* 		check_for_updates();*/
/*   } );*/
/* 	*/
/* </script>*/
/* */
/* {{ footer }}*/
