<?php

/* extension/module/product_option_image_pro.twig */
class __TwigTemplate_3602340e283ec7cf7f137e681fe00e766f47d72cf2210274e39e9f64bccb147f extends Twig_Template
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
        <button type=\"submit\" form=\"form-poip\" data-toggle=\"tooltip\" title=\"";
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
            echo $this->getAttribute($context["breadcrumb"], "href", array(), "array");
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array(), "array");
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      </ul>
    </div>
  </div>
\t
\t<div class=\"container-fluid\">
    ";
        // line 23
        if ((((array_key_exists("error_warning", $context) &&  !(null === (isset($context["error_warning"]) ? $context["error_warning"] : null)))) ? ((isset($context["error_warning"]) ? $context["error_warning"] : null)) : (false))) {
            // line 24
            echo "\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
    ";
        }
        // line 28
        echo "    ";
        if ((((array_key_exists("updated", $context) &&  !(null === (isset($context["updated"]) ? $context["updated"] : null)))) ? ((isset($context["updated"]) ? $context["updated"] : null)) : (false))) {
            // line 29
            echo "\t\t\t<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["updated"]) ? $context["updated"] : null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
    ";
        }
        // line 33
        echo "\t\t";
        if ((((array_key_exists("success", $context) &&  !(null === (isset($context["success"]) ? $context["success"] : null)))) ? ((isset($context["success"]) ? $context["success"] : null)) : (false))) {
            // line 34
            echo "\t\t\t<div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t</div>
    ";
        }
        // line 38
        echo "
\t\t
\t\t";
        // line 91
        echo "\t\t
\t\t<div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 94
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
\t\t\t\t
\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t<li class=\"active\"><a href=\"#tab-settings\" data-toggle=\"tab\">";
        // line 99
        echo (isset($context["entry_settings"]) ? $context["entry_settings"] : null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-import\" data-toggle=\"tab\">";
        // line 100
        echo (isset($context["entry_import"]) ? $context["entry_import"] : null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-export\" data-toggle=\"tab\">";
        // line 101
        echo (isset($context["entry_export"]) ? $context["entry_export"] : null);
        echo "</a></li>
\t\t\t\t\t<li><a href=\"#tab-about\" data-toggle=\"tab\" id=\"tab-about-button\">";
        // line 102
        echo (isset($context["entry_about"]) ? $context["entry_about"] : null);
        echo "</a></li>
\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-settings\">
\t\t\t\t\t\t
\t\t\t\t\t\t<form action=\"";
        // line 108
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-ro\" class=\"form-horizontal\">
\t\t\t\t
\t\t\t\t\t\t\t";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 111
            echo "\t\t\t\t\t\t\t\t";
            echo $this->getAttribute($this, "display_setting", array(0 => (isset($context["modules"]) ? $context["modules"] : null), 1 => $context["field"]), "method");
            echo "
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
        // line 115
        echo (isset($context["entry_custom_theme_id_help"]) ? $context["entry_custom_theme_id_help"] : null);
        echo "\">";
        echo (isset($context["entry_custom_theme_id"]) ? $context["entry_custom_theme_id"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\" >
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"poip_module[custom_theme_id]\" value=\"";
        // line 117
        echo ((($this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), "custom_theme_id", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), "custom_theme_id", array())))) ? ($this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), "custom_theme_id", array())) : (""));
        echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t\t<div class=\"tab-pane form-horizontal\" id=\"tab-import\">
\t\t\t\t\t\t<div class=\"form-group\" ><div class=\"col-sm-12\" >";
        // line 125
        echo (isset($context["entry_import_description"]) ? $context["entry_import_description"] : null);
        echo "</div></div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 127
        if ((isset($context["PHPExcelExists"]) ? $context["PHPExcelExists"] : null)) {
            // line 128
            echo "\t\t\t\t\t\t
              <div class=\"form-group\" >
\t\t\t\t\t\t\t\t\t
                <label class=\"col-sm-2 control-label\"></label>
                
                <div class=\"col-sm-10\" >
                
                  <label class=\"radio\">
                    <input type=\"radio\" name=\"import_delete_before\" value=\"0\" checked>";
            // line 136
            echo (isset($context["entry_import_nothing_before"]) ? $context["entry_import_nothing_before"] : null);
            echo "
                  </label>
                  <label class=\"radio\">
                    <input type=\"radio\" name=\"import_delete_before\" value=\"1\">";
            // line 139
            echo (isset($context["entry_import_delete_before"]) ? $context["entry_import_delete_before"] : null);
            echo "
                  </label>
                  
                </div>\t
               
              </div>
            
\t\t\t\t\t\t\t<div class=\"form-group\" style=\"min-height: 50px;\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\" >
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-upload\" data-toggle=\"tooltip\" title=\"\" class='btn btn-primary' data-original-title=\"";
            // line 149
            echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
            echo "\">";
            echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
            echo "</button>
\t\t\t\t\t\t\t\t\t<span class=\"help-block\">";
            // line 150
            echo (isset($context["button_upload_help"]) ? $context["button_upload_help"] : null);
            echo "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        } else {
            // line 156
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ((isset($context["PHPExcelNotFound"]) ? $context["PHPExcelNotFound"] : null) . (isset($context["PHPExcelPath"]) ? $context["PHPExcelPath"] : null));
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 158
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\" ><div class=\"col-sm-10\" id=\"import_result_text\"></div></div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-export\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div style=\"margin-bottom: 30px;\">";
        // line 164
        echo (isset($context["entry_export_description"]) ? $context["entry_export_description"] : null);
        echo "</div>
\t\t\t\t\t\t
\t\t\t\t\t\t";
        // line 166
        if ((isset($context["PHPExcelExists"]) ? $context["PHPExcelExists"] : null)) {
            // line 167
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<form id=\"form_export\" action=\"";
            // line 168
            echo (isset($context["action_export"]) ? $context["action_export"] : null);
            echo "\" method=\"post\" target=\"export_frame\">
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\" >
\t\t\t\t\t\t\t\t\t<button type=\"button\" id=\"button-export\" onclick=\"\$('#form_export').submit();\" data-toggle=\"tooltip\" title=\"\" class='btn btn-primary' data-original-title=\"";
            // line 174
            echo (isset($context["button_export"]) ? $context["button_export"] : null);
            echo "\">";
            echo (isset($context["button_export"]) ? $context["button_export"] : null);
            echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
        } else {
            // line 180
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ((isset($context["PHPExcelNotFound"]) ? $context["PHPExcelNotFound"] : null) . (isset($context["PHPExcelPath"]) ? $context["PHPExcelPath"] : null));
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 182
        echo "\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t<iframe name=\"export_frame\" src=\"\" id=\"export_frame\" style=\"display: none\"></iframe>
\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-about\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t<div id=\"module_description\">
\t\t\t\t\t\t\t";
        // line 191
        echo (isset($context["module_description"]) ? $context["module_description"] : null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t";
        // line 195
        echo (isset($context["text_conversation"]) ? $context["text_conversation"] : null);
        echo "
\t\t\t\t\t\t<hr>\t
\t\t\t\t\t\t
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<h4>";
        // line 199
        echo (isset($context["entry_we_recommend"]) ? $context["entry_we_recommend"] : null);
        echo "</h4><br>
\t\t\t\t\t\t<div id=\"we_recommend\">
\t\t\t\t\t\t\t";
        // line 201
        echo (isset($context["text_we_recommend"]) ? $context["text_we_recommend"] : null);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<hr >
\t\t\t\t<span class=\"help-block\">";
        // line 209
        echo (isset($context["text_module_version"]) ? $context["text_module_version"] : null);
        echo ": ";
        echo (isset($context["module_version"]) ? $context["module_version"] : null);
        echo " | ";
        echo (isset($context["text_module_support"]) ? $context["text_module_support"] : null);
        echo " | <span id=\"module_page\">";
        echo (isset($context["module_page"]) ? $context["module_page"] : null);
        echo "</span></span><span class=\"help-block\" style=\"font-size: 80%; line-height: 130%;\">";
        echo (isset($context["module_copyright"]) ? $context["module_copyright"] : null);
        echo "</span>
\t\t\t\t\t
      </div>
    </div>
  </div>
</div>
\t

<script type=\"text/javascript\"><!--
\$('#button-upload').on('click', function() {
\t
\t\$('#form-upload').remove();
\t
\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');
\t
\ttimer = setInterval(function() {
    
    if ( !\$('#form-upload input[name=\"file\"]').length ) {
      clearInterval(timer);
      return;
    }
    
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);
      
      var form_data = new FormData(\$('#form-upload')[0]);
      
      form_data.append(\"import_delete_before\", \$('input:radio[name=\"import_delete_before\"]:checked').val() );
\t\t\t
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/module/product_option_image_pro/import&user_token=";
        // line 241
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\t\t\ttype: 'post',\t\t
\t\t\t\tdataType: 'json',
\t\t\t\tdata: form_data,
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
        // line 256
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
        // line 265
        echo (isset($context["entry_import_result"]) ? $context["entry_import_result"] : null);
        echo ": '+json['rows']+'/'+json['images']+'/'+json['skipped']);
          }
          
\t\t\t\t},\t\t\t
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
      
      \$('#form-upload').remove();
      
\t\t}
\t}, 500);
});
//--></script>


<script type=\"text/javascript\"><!--

\tfunction check_for_updates() {
\t\t
\t\t\$.ajax({
\t\t\turl: '//update.liveopencart.com/upd.php',
\t\t\ttype: 'post',
\t\t\tdata: {module:'";
        // line 289
        echo (isset($context["extension_code"]) ? $context["extension_code"] : null);
        echo "', version:'";
        echo (isset($context["module_version"]) ? $context["module_version"] : null);
        echo "', lang: '";
        echo (isset($context["config_admin_language"]) ? $context["config_admin_language"] : null);
        echo "'},
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
        // line 300
        echo twig_escape_filter($this->env, (isset($context["text_update_alert"]) ? $context["text_update_alert"] : null));
        echo "</font>');
\t\t\t\t\t\t\$('#module_description').after('<hr><div class=\"alert alert-info\" role=\"alert\">'+data['update']+'</div>');
\t\t\t\t\t}
\t\t\t\t\tif (data['product_pages']) {
\t\t\t\t\t\t\$('#module_page').html(data['product_pages']);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t});
\t\t
\t}

\tcheck_for_updates();

//--></script>

";
        // line 316
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    // line 40
    public function getdisplay_setting($__modules__ = null, $__field__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "modules" => $__modules__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 41
            echo "\t\t\t
\t\t\t
\t\t\t<div class=\"form-group\"
\t\t\t\t";
            // line 44
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "parent", array())) {
                // line 45
                echo "\t\t\t\t\tstyle=\"display:none;\" data-parent=\"";
                echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "parent", array());
                echo "\"
\t\t\t\t";
            }
            // line 47
            echo "\t\t\t>
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"";
            // line 48
            echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array());
            echo "\" >
\t\t\t\t\t";
            // line 49
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array())) {
                // line 50
                echo "\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"\" data-original-title=\"";
                echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "help", array());
                echo "\">";
                echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array());
                echo "</span>
\t\t\t\t\t";
            } else {
                // line 52
                echo "\t\t\t\t\t\t";
                echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array());
                echo "
\t\t\t\t\t";
            }
            // line 54
            echo "\t\t\t\t</label>
\t\t\t\t
\t\t\t\t";
            // line 56
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "values", array())) {
                // line 57
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 59
                echo "\t\t\t\t\t<div class=\"col-sm-10\" >
\t\t\t\t\t<select name=\"poip_module[";
                // line 60
                echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array());
                echo "]\" id=\"";
                echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array());
                echo "\" class=\"form-control\">
\t\t\t\t\t
\t\t\t\t\t\t";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "values", array()));
                foreach ($context['_seq'] as $context["val_id"] => $context["val_text"]) {
                    // line 63
                    echo "\t\t\t\t\t\t\t<option value=\"";
                    echo $context["val_id"];
                    echo "\" 
\t\t\t\t\t\t\t\t";
                    // line 64
                    if (($this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), array(), "array", true, true) && ($this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), array(), "array") == $context["val_id"]))) {
                        // line 65
                        echo "\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t";
                    }
                    // line 67
                    echo "\t\t\t\t\t\t\t>";
                    echo $context["val_text"];
                    echo "</option>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['val_id'], $context['val_text'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "\t\t\t\t\t
\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t";
            } else {
                // line 74
                echo "\t\t\t\t\t
\t\t\t\t\t";
                // line 76
                echo "\t\t\t\t
\t\t\t\t\t<div class=\"col-sm-10\" >
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"";
                // line 80
                echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array());
                echo "\" name=\"poip_module[";
                echo $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array());
                echo "]\" value=\"1\"
\t\t\t\t\t\t\t\t\t";
                // line 81
                if (((($this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), array(), "array", true, true) &&  !(null === $this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), array(), "array")))) ? ($this->getAttribute((isset($context["modules"]) ? $context["modules"] : null), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()), array(), "array")) : (false))) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t\tchecked
\t\t\t\t\t\t\t\t\t";
                }
                // line 84
                echo "\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 89
            echo "\t\t\t</div>
\t\t";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "extension/module/product_option_image_pro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 89,  579 => 84,  575 => 82,  573 => 81,  567 => 80,  561 => 76,  558 => 74,  551 => 69,  542 => 67,  538 => 65,  536 => 64,  531 => 63,  527 => 62,  520 => 60,  517 => 59,  514 => 57,  512 => 56,  508 => 54,  502 => 52,  494 => 50,  492 => 49,  488 => 48,  485 => 47,  479 => 45,  477 => 44,  472 => 41,  459 => 40,  455 => 316,  436 => 300,  418 => 289,  391 => 265,  379 => 256,  361 => 241,  318 => 209,  307 => 201,  302 => 199,  295 => 195,  288 => 191,  277 => 182,  271 => 180,  260 => 174,  251 => 168,  248 => 167,  246 => 166,  241 => 164,  233 => 158,  227 => 156,  218 => 150,  212 => 149,  199 => 139,  193 => 136,  183 => 128,  181 => 127,  176 => 125,  165 => 117,  158 => 115,  154 => 113,  145 => 111,  141 => 110,  136 => 108,  127 => 102,  123 => 101,  119 => 100,  115 => 99,  107 => 94,  102 => 91,  98 => 38,  90 => 34,  87 => 33,  79 => 29,  76 => 28,  68 => 24,  66 => 23,  59 => 18,  48 => 16,  44 => 15,  39 => 13,  33 => 12,  29 => 11,  19 => 5,);
    }
}
/* {#*/
/* //  Product Option Image PRO / Изображения опций PRO*/
/* //  Support: support@liveopencart.com / Поддержка: help@liveopencart.ru*/
/* #}*/
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* 	*/
/* 	<div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-poip" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ module_name }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/* 					<li><a href="{{ breadcrumb['href'] }}">{{ breadcrumb['text'] }}</a></li>*/
/* 				{% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* 	*/
/* 	<div class="container-fluid">*/
/*     {% if (error_warning ?? false) %}*/
/* 			<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/* 				<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 			</div>*/
/*     {% endif %}*/
/*     {% if (updated ?? false) %}*/
/* 			<div class="alert alert-success"><i class="fa fa-exclamation-circle"></i> {{ updated }}*/
/* 				<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 			</div>*/
/*     {% endif %}*/
/* 		{% if (success ?? false) %}*/
/* 			<div class="alert alert-success"><i class="fa fa-exclamation-circle"></i> {{ success }}*/
/* 				<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 			</div>*/
/*     {% endif %}*/
/* */
/* 		*/
/* 		{% macro display_setting(modules, field) %}*/
/* 			*/
/* 			*/
/* 			<div class="form-group"*/
/* 				{% if field.parent %}*/
/* 					style="display:none;" data-parent="{{ field.parent }}"*/
/* 				{% endif %}*/
/* 			>*/
/* 				<label class="col-sm-2 control-label" for="{{ field.name }}" >*/
/* 					{% if field.help %}*/
/* 						<span data-toggle="tooltip" title="" data-original-title="{{ field.help }}">{{ field.title }}</span>*/
/* 					{% else %}*/
/* 						{{ field.title }}*/
/* 					{% endif %}*/
/* 				</label>*/
/* 				*/
/* 				{% if field.values %}*/
/* 					*/
/* 					{# select #}*/
/* 					<div class="col-sm-10" >*/
/* 					<select name="poip_module[{{ field.name }}]" id="{{ field.name }}" class="form-control">*/
/* 					*/
/* 						{% for val_id, val_text in field.values %}*/
/* 							<option value="{{ val_id }}" */
/* 								{% if modules[field.name] is defined and modules[field.name] == val_id %}*/
/* 									selected*/
/* 								{% endif %}*/
/* 							>{{ val_text }}</option>*/
/* 						{% endfor %}*/
/* 					*/
/* 					</select>*/
/* 					</div>*/
/* 					*/
/* 				{% else %}*/
/* 					*/
/* 					{# checkbox #}*/
/* 				*/
/* 					<div class="col-sm-10" >*/
/* 						<div class="checkbox">*/
/* 							<label>*/
/* 								<input type="checkbox" id="{{ field.name }}" name="poip_module[{{ field.name }}]" value="1"*/
/* 									{% if ( modules[field.name] ?? false ) %}*/
/* 										checked*/
/* 									{% endif %}*/
/* 								>*/
/* 							</label>*/
/* 						</div>*/
/* 					</div>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		{% endmacro display_setting %}*/
/* 		*/
/* 		<div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/* 				*/
/* 				<ul class="nav nav-tabs">*/
/* 					<li class="active"><a href="#tab-settings" data-toggle="tab">{{ entry_settings }}</a></li>*/
/* 					<li><a href="#tab-import" data-toggle="tab">{{ entry_import }}</a></li>*/
/* 					<li><a href="#tab-export" data-toggle="tab">{{ entry_export }}</a></li>*/
/* 					<li><a href="#tab-about" data-toggle="tab" id="tab-about-button">{{ entry_about }}</a></li>*/
/* 				</ul>*/
/* 				*/
/* 				<div class="tab-content">*/
/* 					<div class="tab-pane active" id="tab-settings">*/
/* 						*/
/* 						<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-ro" class="form-horizontal">*/
/* 				*/
/* 							{% for field in fields %}*/
/* 								{{ _self.display_setting(modules, field) }}*/
/* 							{% endfor %}*/
/* 				*/
/* 							<div class="form-group" >*/
/* 								<label class="col-sm-2 control-label"><span data-toggle="tooltip" title="" data-original-title="{{ entry_custom_theme_id_help }}">{{ entry_custom_theme_id }}</span></label>*/
/* 								<div class="col-sm-10" >*/
/* 									<input type="text" class="form-control" name="poip_module[custom_theme_id]" value="{{ modules.custom_theme_id ?? '' }}">*/
/* 								</div>*/
/* 							</div>*/
/* 				*/
/* 						</form>*/
/* 					</div>*/
/* 				*/
/* 					<div class="tab-pane form-horizontal" id="tab-import">*/
/* 						<div class="form-group" ><div class="col-sm-12" >{{ entry_import_description }}</div></div>*/
/* 						*/
/* 						{% if PHPExcelExists %}*/
/* 						*/
/*               <div class="form-group" >*/
/* 									*/
/*                 <label class="col-sm-2 control-label"></label>*/
/*                 */
/*                 <div class="col-sm-10" >*/
/*                 */
/*                   <label class="radio">*/
/*                     <input type="radio" name="import_delete_before" value="0" checked>{{ entry_import_nothing_before }}*/
/*                   </label>*/
/*                   <label class="radio">*/
/*                     <input type="radio" name="import_delete_before" value="1">{{ entry_import_delete_before }}*/
/*                   </label>*/
/*                   */
/*                 </div>	*/
/*                */
/*               </div>*/
/*             */
/* 							<div class="form-group" style="min-height: 50px;">*/
/* 								<label class="col-sm-2 control-label"></label>*/
/* 								<div class="col-sm-10" >*/
/* 									<button type="button" id="button-upload" data-toggle="tooltip" title="" class='btn btn-primary' data-original-title="{{ button_upload }}">{{ button_upload }}</button>*/
/* 									<span class="help-block">{{ button_upload_help }}</span>*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 							*/
/* 						{% else %}*/
/* 							<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ PHPExcelNotFound ~ PHPExcelPath }}</div>*/
/* 						{% endif %}*/
/* 						*/
/* 						<div class="form-group" ><div class="col-sm-10" id="import_result_text"></div></div>*/
/* 					</div>*/
/* 					*/
/* 					<div class="tab-pane" id="tab-export">*/
/* 						*/
/* 						<div style="margin-bottom: 30px;">{{ entry_export_description }}</div>*/
/* 						*/
/* 						{% if PHPExcelExists %}*/
/* 							*/
/* 							<form id="form_export" action="{{ action_export }}" method="post" target="export_frame">*/
/* 							</form>*/
/* 						*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label"></label>*/
/* 								<div class="col-sm-10" >*/
/* 									<button type="button" id="button-export" onclick="$('#form_export').submit();" data-toggle="tooltip" title="" class='btn btn-primary' data-original-title="{{ button_export }}">{{ button_export }}</button>*/
/* 								</div>*/
/* 							</div>*/
/* 							*/
/* 							*/
/* 						{% else %}*/
/* 							<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ PHPExcelNotFound ~ PHPExcelPath }}</div>*/
/* 						{% endif %}*/
/* 						*/
/* 						*/
/* 						<iframe name="export_frame" src="" id="export_frame" style="display: none"></iframe>*/
/* 							*/
/* 					</div>*/
/* 					*/
/* 					<div class="tab-pane" id="tab-about">*/
/* 							*/
/* 						<div id="module_description">*/
/* 							{{ module_description }}*/
/* 						</div>*/
/* 						*/
/* 						<hr>*/
/* 						{{ text_conversation }}*/
/* 						<hr>	*/
/* 						*/
/* 						<br>*/
/* 						<h4>{{ entry_we_recommend }}</h4><br>*/
/* 						<div id="we_recommend">*/
/* 							{{ text_we_recommend }}*/
/* 						</div>*/
/* 						*/
/* 					</div>*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 				<hr >*/
/* 				<span class="help-block">{{ text_module_version }}: {{ module_version }} | {{ text_module_support }} | <span id="module_page">{{ module_page }}</span></span><span class="help-block" style="font-size: 80%; line-height: 130%;">{{ module_copyright }}</span>*/
/* 					*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* 	*/
/* */
/* <script type="text/javascript"><!--*/
/* $('#button-upload').on('click', function() {*/
/* 	*/
/* 	$('#form-upload').remove();*/
/* 	*/
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* 	*/
/* 	timer = setInterval(function() {*/
/*     */
/*     if ( !$('#form-upload input[name="file"]').length ) {*/
/*       clearInterval(timer);*/
/*       return;*/
/*     }*/
/*     */
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/*       */
/*       var form_data = new FormData($('#form-upload')[0]);*/
/*       */
/*       form_data.append("import_delete_before", $('input:radio[name="import_delete_before"]:checked').val() );*/
/* 			*/
/* 			$.ajax({*/
/* 				url: 'index.php?route=extension/module/product_option_image_pro/import&user_token={{ user_token }}',*/
/* 				type: 'post',		*/
/* 				dataType: 'json',*/
/* 				data: form_data,*/
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
/*             $('#import_result_text').html('{{ entry_import_result }}: '+json['rows']+'/'+json['images']+'/'+json['skipped']);*/
/*           }*/
/*           */
/* 				},			*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/*       */
/*       $('#form-upload').remove();*/
/*       */
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script>*/
/* */
/* */
/* <script type="text/javascript"><!--*/
/* */
/* 	function check_for_updates() {*/
/* 		*/
/* 		$.ajax({*/
/* 			url: '//update.liveopencart.com/upd.php',*/
/* 			type: 'post',*/
/* 			data: {module:'{{ extension_code }}', version:'{{ module_version }}', lang: '{{ config_admin_language }}'},*/
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
/* 		});*/
/* 		*/
/* 	}*/
/* */
/* 	check_for_updates();*/
/* */
/* //--></script>*/
/* */
/* {{ footer }}*/
