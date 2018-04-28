<?php

/* catalog/option_form.twig */
class __TwigTemplate_ad2e1f430d883ce79b725a86c9937f00f1dce0e9c263098e0174b3627d32c967 extends Twig_Template
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
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-option\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-option\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 28
        echo (isset($context["text_option"]) ? $context["text_option"] : null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\">";
        // line 30
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
              <div class=\"col-sm-10\"> ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 32
            echo "                <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
                  <input type=\"text\" name=\"option_description[";
            // line 33
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"";
            echo (($this->getAttribute((isset($context["option_description"]) ? $context["option_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["option_description"]) ? $context["option_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" class=\"form-control\" />
                </div>
                ";
            // line 35
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 36
                echo "                <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                ";
            }
            // line 38
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-type\">";
        // line 41
        echo (isset($context["entry_type"]) ? $context["entry_type"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"type\" id=\"input-type\" class=\"form-control\">
                  <optgroup label=\"";
        // line 44
        echo (isset($context["text_choose"]) ? $context["text_choose"] : null);
        echo "\">
                ";
        // line 45
        if (((isset($context["type"]) ? $context["type"] : null) == "select")) {
            // line 46
            echo "                
                
                  <option value=\"select\" selected=\"selected\">";
            // line 48
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                  
                
                ";
        } else {
            // line 52
            echo "                
                
                  <option value=\"select\">";
            // line 54
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                  
                
                ";
        }
        // line 58
        echo "                ";
        if (((isset($context["type"]) ? $context["type"] : null) == "radio")) {
            // line 59
            echo "                
                
                  <option value=\"radio\" selected=\"selected\">";
            // line 61
            echo (isset($context["text_radio"]) ? $context["text_radio"] : null);
            echo "</option>
                  
                
                ";
        } else {
            // line 65
            echo "                
                
                  <option value=\"radio\">";
            // line 67
            echo (isset($context["text_radio"]) ? $context["text_radio"] : null);
            echo "</option>
                  
                
                ";
        }
        // line 71
        echo "                ";
        if (((isset($context["type"]) ? $context["type"] : null) == "checkbox")) {
            // line 72
            echo "                
                
                  <option value=\"checkbox\" selected=\"selected\">";
            // line 74
            echo (isset($context["text_checkbox"]) ? $context["text_checkbox"] : null);
            echo "</option>
                  
                
                ";
        } else {
            // line 78
            echo "                
                
                  <option value=\"checkbox\">";
            // line 80
            echo (isset($context["text_checkbox"]) ? $context["text_checkbox"] : null);
            echo "</option>
                  
                
                ";
        }
        // line 84
        echo "                </optgroup>
                  <optgroup label=\"";
        // line 85
        echo (isset($context["text_input"]) ? $context["text_input"] : null);
        echo "\">
                ";
        // line 86
        if (((isset($context["type"]) ? $context["type"] : null) == "text")) {
            // line 87
            echo "                
                
                  <option value=\"text\" selected=\"selected\">";
            // line 89
            echo (isset($context["text_text"]) ? $context["text_text"] : null);
            echo "</option>
                  
                
                ";
        } else {
            // line 93
            echo "                
                
                  <option value=\"text\">";
            // line 95
            echo (isset($context["text_text"]) ? $context["text_text"] : null);
            echo "</option>
                  
                
                ";
        }
        // line 99
        echo "                ";
        if (((isset($context["type"]) ? $context["type"] : null) == "textarea")) {
            // line 100
            echo "                
                
                  <option value=\"textarea\" selected=\"selected\">";
            // line 102
            echo (isset($context["text_textarea"]) ? $context["text_textarea"] : null);
            echo "</option>
                  
                
                ";
        } else {
            // line 106
            echo "                
                
                  <option value=\"textarea\">";
            // line 108
            echo (isset($context["text_textarea"]) ? $context["text_textarea"] : null);
            echo "</option>
                  
                
                ";
        }
        // line 112
        echo "                </optgroup>
                  <optgroup label=\"";
        // line 113
        echo (isset($context["text_file"]) ? $context["text_file"] : null);
        echo "\">
                ";
        // line 114
        if (((isset($context["type"]) ? $context["type"] : null) == "file")) {
            // line 115
            echo "                
                
                  <option value=\"file\" selected=\"selected\">";
            // line 117
            echo (isset($context["text_file"]) ? $context["text_file"] : null);
            echo "</option>
                  
                
                ";
        } else {
            // line 121
            echo "                
                
                  <option value=\"file\">";
            // line 123
            echo (isset($context["text_file"]) ? $context["text_file"] : null);
            echo "</option>
                  
                
                ";
        }
        // line 127
        echo "                </optgroup>
                  <optgroup label=\"";
        // line 128
        echo (isset($context["text_date"]) ? $context["text_date"] : null);
        echo "\">
                ";
        // line 129
        if (((isset($context["type"]) ? $context["type"] : null) == "date")) {
            // line 130
            echo "                
                
                  <option value=\"date\" selected=\"selected\">";
            // line 132
            echo (isset($context["text_date"]) ? $context["text_date"] : null);
            echo "</option>
                  
                
                ";
        } else {
            // line 136
            echo "                
                
                  <option value=\"date\">";
            // line 138
            echo (isset($context["text_date"]) ? $context["text_date"] : null);
            echo "</option>
                  
                
                ";
        }
        // line 142
        echo "                ";
        if (((isset($context["type"]) ? $context["type"] : null) == "time")) {
            // line 143
            echo "                
                
                  <option value=\"time\" selected=\"selected\">";
            // line 145
            echo (isset($context["text_time"]) ? $context["text_time"] : null);
            echo "</option>
                  
                
                ";
        } else {
            // line 149
            echo "                
                
                  <option value=\"time\">";
            // line 151
            echo (isset($context["text_time"]) ? $context["text_time"] : null);
            echo "</option>
                  
                
                ";
        }
        // line 155
        echo "                ";
        if (((isset($context["type"]) ? $context["type"] : null) == "datetime")) {
            // line 156
            echo "                
                
                  <option value=\"datetime\" selected=\"selected\">";
            // line 158
            echo (isset($context["text_datetime"]) ? $context["text_datetime"] : null);
            echo "</option>
                  
                
                ";
        } else {
            // line 162
            echo "                
                
                  <option value=\"datetime\">";
            // line 164
            echo (isset($context["text_datetime"]) ? $context["text_datetime"] : null);
            echo "</option>
                  
                
                ";
        }
        // line 168
        echo "                </optgroup>
                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 173
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"sort_order\" value=\"";
        // line 175
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />

\t\t\t\t<!-- << Live Price -->
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-calculate-once\">
\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"";
        // line 182
        echo (isset($context["entry_calculate_once_help"]) ? $context["entry_calculate_once_help"] : null);
        echo "\">
\t\t\t\t\t\t\t";
        // line 183
        echo (isset($context["entry_calculate_once"]) ? $context["entry_calculate_once"] : null);
        echo "
\t\t\t\t\t\t</span>\t
\t\t\t\t\t</label>
\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"calculate_once\" value=\"1\" id=\"input-calculate-once\" ";
        // line 189
        echo (((((array_key_exists("calculate_once", $context) &&  !(null === (isset($context["calculate_once"]) ? $context["calculate_once"] : null)))) ? ((isset($context["calculate_once"]) ? $context["calculate_once"] : null)) : (0))) ? ("checked") : (""));
        echo " />
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t
\t\t\t\t<!-- >> Live Price -->
\t\t\t
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 200
        echo (isset($context["text_value"]) ? $context["text_value"] : null);
        echo "</legend>

\t\t\t\t<!-- Product Option Image PRO module << -->
\t\t\t\t";
        // line 203
        if ((((array_key_exists("poip_installed", $context) &&  !(null === (isset($context["poip_installed"]) ? $context["poip_installed"] : null)))) ? ((isset($context["poip_installed"]) ? $context["poip_installed"] : null)) : (false))) {
            // line 204
            echo "\t\t\t\t
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
            // line 206
            echo (isset($context["poip_module_name"]) ? $context["poip_module_name"] : null);
            echo ":</label>
\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["poip_settings_details"]) ? $context["poip_settings_details"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["poip_setting"]) {
                // line 211
                echo "\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t";
                // line 212
                echo $this->getAttribute($context["poip_setting"], "title", array());
                echo ":
\t\t\t\t\t\t\t\t\t<select name=\"poip_settings[";
                // line 213
                echo $this->getAttribute($context["poip_setting"], "name", array());
                echo "]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
                // line 214
                if ($this->getAttribute($context["poip_setting"], "values", array())) {
                    // line 215
                    echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
                    echo $this->getAttribute((isset($context["poip_settings_enable_disable_options"]) ? $context["poip_settings_enable_disable_options"] : null), 0, array(), "array");
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 216
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["poip_setting"], "values", array()));
                    foreach ($context['_seq'] as $context["val_id"] => $context["val_text"]) {
                        // line 217
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo (1 + $context["val_id"]);
                        echo "\" 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 218
                        if ((((($this->getAttribute((isset($context["poip_saved_settings"]) ? $context["poip_saved_settings"] : null), $this->getAttribute($context["poip_setting"], "name", array()), array(), "array", true, true) &&  !(null === $this->getAttribute((isset($context["poip_saved_settings"]) ? $context["poip_saved_settings"] : null), $this->getAttribute($context["poip_setting"], "name", array()), array(), "array")))) ? ($this->getAttribute((isset($context["poip_saved_settings"]) ? $context["poip_saved_settings"] : null), $this->getAttribute($context["poip_setting"], "name", array()), array(), "array")) : (0)) == ($context["val_id"] + 1))) {
                            // line 219
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 221
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t>";
                        echo $context["val_text"];
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['val_id'], $context['val_text'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 223
                    echo "\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 224
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["poip_settings_enable_disable_options"]) ? $context["poip_settings_enable_disable_options"] : null));
                    foreach ($context['_seq'] as $context["poip_settings_enable_disable_option_value"] => $context["poip_settings_enable_disable_option_name"]) {
                        // line 225
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                        echo $context["poip_settings_enable_disable_option_value"];
                        echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 226
                        if ((((($this->getAttribute((isset($context["poip_saved_settings"]) ? $context["poip_saved_settings"] : null), $this->getAttribute($context["poip_setting"], "name", array()), array(), "array", true, true) &&  !(null === $this->getAttribute((isset($context["poip_saved_settings"]) ? $context["poip_saved_settings"] : null), $this->getAttribute($context["poip_setting"], "name", array()), array(), "array")))) ? ($this->getAttribute((isset($context["poip_saved_settings"]) ? $context["poip_saved_settings"] : null), $this->getAttribute($context["poip_setting"], "name", array()), array(), "array")) : (0)) == $context["poip_settings_enable_disable_option_value"])) {
                            // line 227
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 229
                        echo "\t\t\t\t\t\t\t\t\t\t\t\t>";
                        echo $context["poip_settings_enable_disable_option_name"];
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['poip_settings_enable_disable_option_value'], $context['poip_settings_enable_disable_option_name'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 231
                    echo "\t\t\t\t\t\t\t\t\t\t";
                }
                // line 232
                echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poip_setting'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "\t\t\t\t\t\t\t\t";
            // line 264
            echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        }
        // line 270
        echo "\t\t\t\t<!-- >> Product Option Image PRO module -->
\t\t\t
            <table id=\"option-value\" class=\"table table-striped table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left required\">";
        // line 275
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</td>
                  <td class=\"text-center\">";
        // line 276
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 277
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
              
              ";
        // line 283
        $context["option_value_row"] = 0;
        // line 284
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["option_values"]) ? $context["option_values"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
            // line 285
            echo "              <tr id=\"option-value-row";
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "\">
                <td class=\"text-center\"><input type=\"hidden\" name=\"option_value[";
            // line 286
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "][option_value_id]\" value=\"";
            echo $this->getAttribute($context["option_value"], "option_value_id", array());
            echo "\" />
                  ";
            // line 287
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 288
                echo "                  <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
                    <input type=\"text\" name=\"option_value[";
                // line 289
                echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                echo "][option_value_description][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][name]\" value=\"";
                echo (($this->getAttribute($this->getAttribute($context["option_value"], "option_value_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["option_value"], "option_value_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" class=\"form-control\" />
                  </div>
                  ";
                // line 291
                if ($this->getAttribute($this->getAttribute((isset($context["error_option_value"]) ? $context["error_option_value"] : null), (isset($context["option_value_row"]) ? $context["option_value_row"] : null), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 292
                    echo "                  <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_option_value"]) ? $context["error_option_value"] : null), (isset($context["option_value_row"]) ? $context["option_value_row"] : null), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
                  ";
                }
                // line 294
                echo "                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 295
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo $this->getAttribute($context["option_value"], "thumb", array());
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" /></a>
                  <input type=\"hidden\" name=\"option_value[";
            // line 296
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "][image]\" value=\"";
            echo $this->getAttribute($context["option_value"], "image", array());
            echo "\" id=\"input-image";
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "\" /></td>
                <td class=\"text-right\"><input type=\"text\" name=\"option_value[";
            // line 297
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "][sort_order]\" value=\"";
            echo $this->getAttribute($context["option_value"], "sort_order", array());
            echo "\" class=\"form-control\" /></td>
                <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#option-value-row";
            // line 298
            echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
              </tr>
              ";
            // line 300
            $context["option_value_row"] = ((isset($context["option_value_row"]) ? $context["option_value_row"] : null) + 1);
            // line 301
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        echo "                </tbody>
              
              <tfoot>
                <tr>
                  <td colspan=\"3\"></td>
                  <td class=\"text-right\"><button type=\"button\" onclick=\"addOptionValue();\" data-toggle=\"tooltip\" title=\"";
        // line 307
        echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'type\\']').on('change', function() {
\tif (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {
\t\t\$('#option-value').parent().show();
\t} else {
\t\t\$('#option-value').parent().hide();
\t}
});

\$('select[name=\\'type\\']').trigger('change');

var option_value_row = ";
        // line 327
        echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
        echo ";

function addOptionValue() {
\thtml  = '<tr id=\"option-value-row' + option_value_row + '\">';
    html += '  <td class=\"text-left\"><input type=\"hidden\" name=\"option_value[' + option_value_row + '][option_value_id]\" value=\"\" />';
\t";
        // line 332
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 333
            echo "\thtml += '    <div class=\"input-group\">';
\thtml += '      <span class=\"input-group-addon\"><img src=\"language/";
            // line 334
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span><input type=\"text\" name=\"option_value[' + option_value_row + '][option_value_description][";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"\" placeholder=\"";
            echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
            echo "\" class=\"form-control\" />';
    html += '    </div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "\thtml += '  </td>';
    html += '  <td class=\"text-center\"><a href=\"\" id=\"thumb-image' + option_value_row + '\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 338
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a><input type=\"hidden\" name=\"option_value[' + option_value_row + '][image]\" value=\"\" id=\"input-image' + option_value_row + '\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"option_value[' + option_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 339
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 340
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#option-value tbody').append(html);

\toption_value_row++;
}
//--></script></div>
";
        // line 348
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "catalog/option_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  759 => 348,  748 => 340,  744 => 339,  738 => 338,  735 => 337,  718 => 334,  715 => 333,  711 => 332,  703 => 327,  680 => 307,  673 => 302,  667 => 301,  665 => 300,  658 => 298,  652 => 297,  644 => 296,  636 => 295,  628 => 294,  622 => 292,  620 => 291,  609 => 289,  600 => 288,  596 => 287,  590 => 286,  585 => 285,  580 => 284,  578 => 283,  569 => 277,  565 => 276,  561 => 275,  554 => 270,  546 => 264,  544 => 235,  536 => 232,  533 => 231,  524 => 229,  520 => 227,  518 => 226,  513 => 225,  508 => 224,  505 => 223,  496 => 221,  492 => 219,  490 => 218,  485 => 217,  481 => 216,  476 => 215,  474 => 214,  470 => 213,  466 => 212,  463 => 211,  459 => 210,  452 => 206,  448 => 204,  446 => 203,  440 => 200,  426 => 189,  417 => 183,  413 => 182,  401 => 175,  396 => 173,  389 => 168,  382 => 164,  378 => 162,  371 => 158,  367 => 156,  364 => 155,  357 => 151,  353 => 149,  346 => 145,  342 => 143,  339 => 142,  332 => 138,  328 => 136,  321 => 132,  317 => 130,  315 => 129,  311 => 128,  308 => 127,  301 => 123,  297 => 121,  290 => 117,  286 => 115,  284 => 114,  280 => 113,  277 => 112,  270 => 108,  266 => 106,  259 => 102,  255 => 100,  252 => 99,  245 => 95,  241 => 93,  234 => 89,  230 => 87,  228 => 86,  224 => 85,  221 => 84,  214 => 80,  210 => 78,  203 => 74,  199 => 72,  196 => 71,  189 => 67,  185 => 65,  178 => 61,  174 => 59,  171 => 58,  164 => 54,  160 => 52,  153 => 48,  149 => 46,  147 => 45,  143 => 44,  137 => 41,  127 => 38,  121 => 36,  119 => 35,  110 => 33,  101 => 32,  97 => 31,  93 => 30,  88 => 28,  83 => 26,  77 => 23,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-option" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid"> {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-option" class="form-horizontal">*/
/*           <fieldset>*/
/*             <legend>{{ text_option }}</legend>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label">{{ entry_name }}</label>*/
/*               <div class="col-sm-10"> {% for language in languages %}*/
/*                 <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                   <input type="text" name="option_description[{{ language.language_id }}][name]" value="{{ option_description[language.language_id] ? option_description[language.language_id].name }}" placeholder="{{ entry_name }}" class="form-control" />*/
/*                 </div>*/
/*                 {% if error_name[language.language_id] %}*/
/*                 <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                 {% endif %}*/
/*                 {% endfor %}</div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-type">{{ entry_type }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="type" id="input-type" class="form-control">*/
/*                   <optgroup label="{{ text_choose }}">*/
/*                 {% if type == 'select' %}*/
/*                 */
/*                 */
/*                   <option value="select" selected="selected">{{ text_select }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="select">{{ text_select }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 {% if type == 'radio' %}*/
/*                 */
/*                 */
/*                   <option value="radio" selected="selected">{{ text_radio }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="radio">{{ text_radio }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 {% if type == 'checkbox' %}*/
/*                 */
/*                 */
/*                   <option value="checkbox" selected="selected">{{ text_checkbox }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="checkbox">{{ text_checkbox }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 </optgroup>*/
/*                   <optgroup label="{{ text_input }}">*/
/*                 {% if type == 'text' %}*/
/*                 */
/*                 */
/*                   <option value="text" selected="selected">{{ text_text }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="text">{{ text_text }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 {% if type == 'textarea' %}*/
/*                 */
/*                 */
/*                   <option value="textarea" selected="selected">{{ text_textarea }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="textarea">{{ text_textarea }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 </optgroup>*/
/*                   <optgroup label="{{ text_file }}">*/
/*                 {% if type == 'file' %}*/
/*                 */
/*                 */
/*                   <option value="file" selected="selected">{{ text_file }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="file">{{ text_file }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 </optgroup>*/
/*                   <optgroup label="{{ text_date }}">*/
/*                 {% if type == 'date' %}*/
/*                 */
/*                 */
/*                   <option value="date" selected="selected">{{ text_date }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="date">{{ text_date }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 {% if type == 'time' %}*/
/*                 */
/*                 */
/*                   <option value="time" selected="selected">{{ text_time }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="time">{{ text_time }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 {% if type == 'datetime' %}*/
/*                 */
/*                 */
/*                   <option value="datetime" selected="selected">{{ text_datetime }}</option>*/
/*                   */
/*                 */
/*                 {% else %}*/
/*                 */
/*                 */
/*                   <option value="datetime">{{ text_datetime }}</option>*/
/*                   */
/*                 */
/*                 {% endif %}*/
/*                 </optgroup>*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/* */
/* 				<!-- << Live Price -->*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="form-group">*/
/* 					<label class="col-sm-2 control-label" for="input-calculate-once">*/
/* 						<span data-toggle="tooltip" title="{{ entry_calculate_once_help }}">*/
/* 							{{ entry_calculate_once }}*/
/* 						</span>	*/
/* 					</label>*/
/* 					<div class="col-sm-10">*/
/* 						<div class="checkbox">*/
/* 							<label>*/
/* 								<input type="checkbox" name="calculate_once" value="1" id="input-calculate-once" {{ (calculate_once ?? 0) ? 'checked' : '' }} />*/
/* 							</label>*/
/* 						</div>*/
/* 					*/
/* 				*/
/* 				<!-- >> Live Price -->*/
/* 			*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <fieldset>*/
/*             <legend>{{ text_value }}</legend>*/
/* */
/* 				<!-- Product Option Image PRO module << -->*/
/* 				{% if poip_installed ?? false %}*/
/* 				*/
/* 					<div class="form-group">*/
/* 						<label class="col-sm-2 control-label" for="input-sort-order">{{ poip_module_name }}:</label>*/
/* 						<div class="col-sm-10">*/
/* 							<div class="row">*/
/* 						*/
/* 								{% for poip_setting in poip_settings_details %}*/
/* 									<div class="col-sm-4">*/
/* 									{{ poip_setting.title }}:*/
/* 									<select name="poip_settings[{{ poip_setting.name }}]" class="form-control">*/
/* 										{% if poip_setting.values %}*/
/* 											<option value="0">{{ poip_settings_enable_disable_options[0] }}</option>*/
/* 											{% for val_id, val_text in poip_setting.values %}*/
/* 												<option value="{{ 1+val_id }}" */
/* 													{% if (poip_saved_settings[poip_setting.name] ?? 0) == (val_id+1) %}*/
/* 														selected*/
/* 													{% endif %}*/
/* 												>{{ val_text }}</option>*/
/* 											{% endfor %}*/
/* 										{% else %}*/
/* 											{% for poip_settings_enable_disable_option_value,poip_settings_enable_disable_option_name in poip_settings_enable_disable_options %}*/
/* 												<option value="{{ poip_settings_enable_disable_option_value }}"*/
/* 													{% if (poip_saved_settings[poip_setting.name] ?? 0) == poip_settings_enable_disable_option_value %}*/
/* 														selected*/
/* 													{% endif %}*/
/* 												>{{ poip_settings_enable_disable_option_name }}</option>*/
/* 											{% endfor %}*/
/* 										{% endif %}*/
/* 									</select>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								{#*/
/* 								<?php foreach ($poip_settings_names as $poip_setting_name) { ?>*/
/* 									<div class="col-sm-4">*/
/* 									<?php echo ${"entry_".$poip_setting_name}; ?>:*/
/* 									<select name="poip_settings[<?php echo $poip_setting_name; ?>]" class="form-control">*/
/* 										<?php*/
/* 											$poip_html = "";*/
/* 											*/
/* 											// new*/
/* 											if (in_array('entry_'.$poip_setting_name."_v0", $poip_settings_values)) {*/
/* 												$poip_html .= "<option value=\"0\" ".(isset($poip_saved_settings[$poip_setting_name]) && $poip_saved_settings[$poip_setting_name]==0 ? "selected":"").">".$poip_settings_select_options[0]."</option>";*/
/* 												for ($i=1; $i<9; $i++) {*/
/* 													if (in_array('entry_'.$poip_setting_name."_v".$i, $poip_settings_values)) {*/
/* 														$poip_html .= "<option value=\"".(1+$i)."\" ".(isset($poip_saved_settings[$poip_setting_name]) && $poip_saved_settings[$poip_setting_name]==(1+$i) ? "selected":"").">".${("entry_".$poip_setting_name."_v".$i)}."</option>";*/
/* 													}*/
/* 												}*/
/* 												$poip_html .= "<option value=\"".(1)."\" ".(isset($poip_saved_settings[$poip_setting_name]) && $poip_saved_settings[$poip_setting_name]==1 ? "selected":"").">".${("entry_".$poip_setting_name."_v0")}."</option>";*/
/* 											} else {*/
/* 												foreach ($poip_settings_select_options as $select_value => $select_name) {*/
/* 													$poip_html .= "<option value=\"".$select_value."\" ".(isset($poip_saved_settings[$poip_setting_name]) && $poip_saved_settings[$poip_setting_name]==$select_value ? "selected":"").">".$select_name."</option>";*/
/* 												}*/
/* 											}*/
/* 											echo $poip_html;*/
/* 										?>*/
/* 										*/
/* 									</select>*/
/* 									</div>*/
/* 								<?php } ?>*/
/* 								#}*/
/* 						*/
/* 							</div>	*/
/* 						</div>*/
/* 					</div>*/
/* 				*/
/* 				{% endif %}*/
/* 				<!-- >> Product Option Image PRO module -->*/
/* 			*/
/*             <table id="option-value" class="table table-striped table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td class="text-left required">{{ entry_option_value }}</td>*/
/*                   <td class="text-center">{{ entry_image }}</td>*/
/*                   <td class="text-right">{{ entry_sort_order }}</td>*/
/*                   <td></td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*               */
/*               {% set option_value_row = 0 %}*/
/*               {% for option_value in option_values %}*/
/*               <tr id="option-value-row{{ option_value_row }}">*/
/*                 <td class="text-center"><input type="hidden" name="option_value[{{ option_value_row }}][option_value_id]" value="{{ option_value.option_value_id }}" />*/
/*                   {% for language in languages %}*/
/*                   <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                     <input type="text" name="option_value[{{ option_value_row }}][option_value_description][{{ language.language_id }}][name]" value="{{ option_value.option_value_description[language.language_id] ? option_value.option_value_description[language.language_id].name }}" placeholder="{{ entry_option_value }}" class="form-control" />*/
/*                   </div>*/
/*                   {% if error_option_value[option_value_row][language.language_id] %}*/
/*                   <div class="text-danger">{{ error_option_value[option_value_row][language.language_id] }}</div>*/
/*                   {% endif %}*/
/*                   {% endfor %}</td>*/
/*                 <td class="text-left"><a href="" id="thumb-image{{ option_value_row }}" data-toggle="image" class="img-thumbnail"><img src="{{ option_value.thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                   <input type="hidden" name="option_value[{{ option_value_row }}][image]" value="{{ option_value.image }}" id="input-image{{ option_value_row }}" /></td>*/
/*                 <td class="text-right"><input type="text" name="option_value[{{ option_value_row }}][sort_order]" value="{{ option_value.sort_order }}" class="form-control" /></td>*/
/*                 <td class="text-right"><button type="button" onclick="$('#option-value-row{{ option_value_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*               </tr>*/
/*               {% set option_value_row = option_value_row + 1 %}*/
/*               {% endfor %}*/
/*                 </tbody>*/
/*               */
/*               <tfoot>*/
/*                 <tr>*/
/*                   <td colspan="3"></td>*/
/*                   <td class="text-right"><button type="button" onclick="addOptionValue();" data-toggle="tooltip" title="{{ button_option_value_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                 </tr>*/
/*               </tfoot>*/
/*             </table>*/
/*           </fieldset>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <script type="text/javascript"><!--*/
/* $('select[name=\'type\']').on('change', function() {*/
/* 	if (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox' || this.value == 'image') {*/
/* 		$('#option-value').parent().show();*/
/* 	} else {*/
/* 		$('#option-value').parent().hide();*/
/* 	}*/
/* });*/
/* */
/* $('select[name=\'type\']').trigger('change');*/
/* */
/* var option_value_row = {{ option_value_row }};*/
/* */
/* function addOptionValue() {*/
/* 	html  = '<tr id="option-value-row' + option_value_row + '">';*/
/*     html += '  <td class="text-left"><input type="hidden" name="option_value[' + option_value_row + '][option_value_id]" value="" />';*/
/* 	{% for language in languages %}*/
/* 	html += '    <div class="input-group">';*/
/* 	html += '      <span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span><input type="text" name="option_value[' + option_value_row + '][option_value_description][{{ language.language_id }}][name]" value="" placeholder="{{ entry_option_value }}" class="form-control" />';*/
/*     html += '    </div>';*/
/* 	{% endfor %}*/
/* 	html += '  </td>';*/
/*     html += '  <td class="text-center"><a href="" id="thumb-image' + option_value_row + '" data-toggle="image" class="img-thumbnail"><img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a><input type="hidden" name="option_value[' + option_value_row + '][image]" value="" id="input-image' + option_value_row + '" /></td>';*/
/* 	html += '  <td class="text-right"><input type="text" name="option_value[' + option_value_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-right"><button type="button" onclick="$(\'#option-value-row' + option_value_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#option-value tbody').append(html);*/
/* */
/* 	option_value_row++;*/
/* }*/
/* //--></script></div>*/
/* {{ footer }} */
