<?php

/* catalog/product_form.twig */
class __TwigTemplate_3863be7db22d323a1106fb99001c0bcffda7b41f411b3f2ef5c3dc4ea6dfafde extends Twig_Template
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

\t\t\t\t<!-- Product Option Image PRO module << -->
\t\t\t\t";
        // line 5
        if ((((array_key_exists("poip_installed", $context) &&  !(null === (isset($context["poip_installed"]) ? $context["poip_installed"] : null)))) ? ((isset($context["poip_installed"]) ? $context["poip_installed"] : null)) : (false))) {
            // line 6
            echo "\t\t\t\t";
            // line 7
            echo "\t\t\t\t\t
\t\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\t\t\$().ready(function(){
\t\t\t\t\t\t\tpoip.init({
\t\t\t\t\t\t\t\tproduct_options \t\t\t\t\t\t\t\t: ";
            // line 11
            echo twig_jsonencode_filter((((array_key_exists("product_options", $context) &&  !(null === (isset($context["product_options"]) ? $context["product_options"] : null)))) ? ((isset($context["product_options"]) ? $context["product_options"] : null)) : (false)));
            echo ",
\t\t\t\t\t\t\t\toption_values \t\t\t\t\t\t\t\t\t: ";
            // line 12
            echo twig_jsonencode_filter((((array_key_exists("option_values", $context) &&  !(null === (isset($context["option_values"]) ? $context["option_values"] : null)))) ? ((isset($context["option_values"]) ? $context["option_values"] : null)) : (false)));
            echo ",
\t\t\t\t\t\t\t\ttexts \t\t\t\t\t\t\t\t\t\t\t\t\t: ";
            // line 13
            echo twig_jsonencode_filter((((array_key_exists("poip_texts", $context) &&  !(null === (isset($context["poip_texts"]) ? $context["poip_texts"] : null)))) ? ((isset($context["poip_texts"]) ? $context["poip_texts"] : null)) : (false)));
            echo ",
\t\t\t\t\t\t\t\tsettings_details \t\t\t\t\t\t\t\t: ";
            // line 14
            echo twig_jsonencode_filter((((array_key_exists("poip_settings_details", $context) &&  !(null === (isset($context["poip_settings_details"]) ? $context["poip_settings_details"] : null)))) ? ((isset($context["poip_settings_details"]) ? $context["poip_settings_details"] : null)) : (false)));
            echo ",
\t\t\t\t\t\t\t\tsettings_enable_disable_options : ";
            // line 15
            echo twig_jsonencode_filter((((array_key_exists("poip_settings_enable_disable_options", $context) &&  !(null === (isset($context["poip_settings_enable_disable_options"]) ? $context["poip_settings_enable_disable_options"] : null)))) ? ((isset($context["poip_settings_enable_disable_options"]) ? $context["poip_settings_enable_disable_options"] : null)) : (false)));
            echo ",
\t\t\t\t\t\t\t\tsaved_settings\t\t\t\t\t\t\t\t\t: ";
            // line 16
            echo twig_jsonencode_filter((isset($context["poip_saved_settings"]) ? $context["poip_saved_settings"] : null));
            echo ",
\t\t\t\t\t\t\t\timage_placeholder \t\t\t\t\t\t\t: '";
            // line 17
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "',
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t//--></script>
\t\t\t\t\t\t
\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t<!-- >> Product Option Image PRO module -->
\t\t\t
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-product\" data-toggle=\"tooltip\" title=\"";
        // line 28
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 29
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 30
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 33
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
        // line 35
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> ";
        // line 38
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 39
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 43
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 45
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 48
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 50
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 51
        echo (isset($context["tab_data"]) ? $context["tab_data"] : null);
        echo "</a></li>
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 52
        echo (isset($context["tab_links"]) ? $context["tab_links"] : null);
        echo "</a></li>
            <li><a href=\"#tab-attribute\" data-toggle=\"tab\">";
        // line 53
        echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
        echo "</a></li>
            <li><a href=\"#tab-option\" data-toggle=\"tab\">";
        // line 54
        echo (isset($context["tab_option"]) ? $context["tab_option"] : null);
        echo "</a></li>
            <li><a href=\"#tab-recurring\" data-toggle=\"tab\">";
        // line 55
        echo (isset($context["tab_recurring"]) ? $context["tab_recurring"] : null);
        echo "</a></li>
            <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 56
        echo (isset($context["tab_discount"]) ? $context["tab_discount"] : null);
        echo "</a></li>
            <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 57
        echo (isset($context["tab_special"]) ? $context["tab_special"] : null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 58
        echo (isset($context["tab_image"]) ? $context["tab_image"] : null);
        echo "</a></li>
            <li><a href=\"#tab-reward\" data-toggle=\"tab\">";
        // line 59
        echo (isset($context["tab_reward"]) ? $context["tab_reward"] : null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 60
        echo (isset($context["tab_seo"]) ? $context["tab_seo"] : null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 61
        echo (isset($context["tab_design"]) ? $context["tab_design"] : null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 67
            echo "                <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "              </ul>
              <div class=\"tab-content\">";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 71
            echo "                <div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 73
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 75
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][name]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "name", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" id=\"input-name";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                      ";
            // line 76
            if ($this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 77
                echo "                      <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                      ";
            }
            // line 78
            echo " </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 81
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"product_description[";
            // line 83
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][description]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo (isset($context["summernote"]) ? $context["summernote"] : null);
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 87
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 89
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_title]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_title", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_meta_title"]) ? $context["entry_meta_title"] : null);
            echo "\" id=\"input-meta-title";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                      ";
            // line 90
            if ($this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                // line 91
                echo "                      <div class=\"text-danger\">";
                echo $this->getAttribute((isset($context["error_meta_title"]) ? $context["error_meta_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                echo "</div>
                      ";
            }
            // line 92
            echo " </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 95
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"product_description[";
            // line 97
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_description"]) ? $context["entry_meta_description"] : null);
            echo "\" id=\"input-meta-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_description", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 101
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"product_description[";
            // line 103
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_meta_keyword"]) ? $context["entry_meta_keyword"] : null);
            echo "\" id=\"input-meta-keyword";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\">";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "meta_keyword", array())) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-tag";
            // line 107
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\"><span data-toggle=\"tooltip\" title=\"";
            echo (isset($context["help_tag"]) ? $context["help_tag"] : null);
            echo "\">";
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "</span></label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"product_description[";
            // line 109
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][tag]\" value=\"";
            echo (($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_description"]) ? $context["product_description"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "tag", array())) : (""));
            echo "\" placeholder=\"";
            echo (isset($context["entry_tag"]) ? $context["entry_tag"] : null);
            echo "\" id=\"input-tag";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 117
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 119
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_model"]) ? $context["entry_model"] : null);
        echo "\" id=\"input-model\" class=\"form-control\" />
                  ";
        // line 120
        if ((isset($context["error_model"]) ? $context["error_model"] : null)) {
            // line 121
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_model"]) ? $context["error_model"] : null);
            echo "</div>
                  ";
        }
        // line 122
        echo "</div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 125
        echo (isset($context["help_sku"]) ? $context["help_sku"] : null);
        echo "\">";
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sku\" value=\"";
        // line 127
        echo (isset($context["sku"]) ? $context["sku"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sku"]) ? $context["entry_sku"] : null);
        echo "\" id=\"input-sku\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-upc\"><span data-toggle=\"tooltip\" title=\"";
        // line 131
        echo (isset($context["help_upc"]) ? $context["help_upc"] : null);
        echo "\">";
        echo (isset($context["entry_upc"]) ? $context["entry_upc"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"upc\" value=\"";
        // line 133
        echo (isset($context["upc"]) ? $context["upc"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_upc"]) ? $context["entry_upc"] : null);
        echo "\" id=\"input-upc\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-ean\"><span data-toggle=\"tooltip\" title=\"";
        // line 137
        echo (isset($context["help_ean"]) ? $context["help_ean"] : null);
        echo "\">";
        echo (isset($context["entry_ean"]) ? $context["entry_ean"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"ean\" value=\"";
        // line 139
        echo (isset($context["ean"]) ? $context["ean"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_ean"]) ? $context["entry_ean"] : null);
        echo "\" id=\"input-ean\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-jan\"><span data-toggle=\"tooltip\" title=\"";
        // line 143
        echo (isset($context["help_jan"]) ? $context["help_jan"] : null);
        echo "\">";
        echo (isset($context["entry_jan"]) ? $context["entry_jan"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"jan\" value=\"";
        // line 145
        echo (isset($context["jan"]) ? $context["jan"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_jan"]) ? $context["entry_jan"] : null);
        echo "\" id=\"input-jan\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-isbn\"><span data-toggle=\"tooltip\" title=\"";
        // line 149
        echo (isset($context["help_isbn"]) ? $context["help_isbn"] : null);
        echo "\">";
        echo (isset($context["entry_isbn"]) ? $context["entry_isbn"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"isbn\" value=\"";
        // line 151
        echo (isset($context["isbn"]) ? $context["isbn"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_isbn"]) ? $context["entry_isbn"] : null);
        echo "\" id=\"input-isbn\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-mpn\"><span data-toggle=\"tooltip\" title=\"";
        // line 155
        echo (isset($context["help_mpn"]) ? $context["help_mpn"] : null);
        echo "\">";
        echo (isset($context["entry_mpn"]) ? $context["entry_mpn"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"mpn\" value=\"";
        // line 157
        echo (isset($context["mpn"]) ? $context["mpn"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mpn"]) ? $context["entry_mpn"] : null);
        echo "\" id=\"input-mpn\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 161
        echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"location\" value=\"";
        // line 163
        echo (isset($context["location"]) ? $context["location"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_location"]) ? $context["entry_location"] : null);
        echo "\" id=\"input-location\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 167
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"price\" value=\"";
        // line 169
        echo (isset($context["price"]) ? $context["price"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" id=\"input-price\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-tax-class\">";
        // line 173
        echo (isset($context["entry_tax_class"]) ? $context["entry_tax_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"tax_class_id\" id=\"input-tax-class\" class=\"form-control\">
                    <option value=\"0\">";
        // line 176
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
                    

                    ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tax_classes"]) ? $context["tax_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tax_class"]) {
            // line 180
            echo "                    ";
            if (($this->getAttribute($context["tax_class"], "tax_class_id", array()) == (isset($context["tax_class_id"]) ? $context["tax_class_id"] : null))) {
                // line 181
                echo "
                    
                    <option value=\"";
                // line 183
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                    

                    ";
            } else {
                // line 187
                echo "
                    
                    <option value=\"";
                // line 189
                echo $this->getAttribute($context["tax_class"], "tax_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["tax_class"], "title", array());
                echo "</option>
                    

                    ";
            }
            // line 193
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tax_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 200
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 202
        echo (isset($context["quantity"]) ? $context["quantity"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" id=\"input-quantity\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"";
        // line 206
        echo (isset($context["help_minimum"]) ? $context["help_minimum"] : null);
        echo "\">";
        echo (isset($context["entry_minimum"]) ? $context["entry_minimum"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"minimum\" value=\"";
        // line 208
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_minimum"]) ? $context["entry_minimum"] : null);
        echo "\" id=\"input-minimum\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 212
        echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">
                    

                    ";
        // line 217
        if ((isset($context["subtract"]) ? $context["subtract"] : null)) {
            // line 218
            echo "
                    
                    <option value=\"1\" selected=\"selected\">";
            // line 220
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 221
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    

                    ";
        } else {
            // line 225
            echo "
                    
                    <option value=\"1\">";
            // line 227
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 228
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</option>
                    

                    ";
        }
        // line 232
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 238
        echo (isset($context["help_stock_status"]) ? $context["help_stock_status"] : null);
        echo "\">";
        echo (isset($context["entry_stock_status"]) ? $context["entry_stock_status"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">
                    

                    ";
        // line 243
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stock_statuses"]) ? $context["stock_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 244
            echo "                    ";
            if (($this->getAttribute($context["stock_status"], "stock_status_id", array()) == (isset($context["stock_status_id"]) ? $context["stock_status_id"] : null))) {
                // line 245
                echo "
                    
                    <option value=\"";
                // line 247
                echo $this->getAttribute($context["stock_status"], "stock_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["stock_status"], "name", array());
                echo "</option>
                    

                    ";
            } else {
                // line 251
                echo "
                    
                    <option value=\"";
                // line 253
                echo $this->getAttribute($context["stock_status"], "stock_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["stock_status"], "name", array());
                echo "</option>
                    

                    ";
            }
            // line 257
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 258
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 264
        echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 266
        if ((isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 267
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\" />
                    ";
            // line 268
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        } else {
            // line 270
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"1\" />
                    ";
            // line 271
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
                    ";
        }
        // line 272
        echo " </label>
                  <label class=\"radio-inline\"> ";
        // line 273
        if ( !(isset($context["shipping"]) ? $context["shipping"] : null)) {
            // line 274
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\" />
                    ";
            // line 275
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        } else {
            // line 277
            echo "                    <input type=\"radio\" name=\"shipping\" value=\"0\" />
                    ";
            // line 278
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
                    ";
        }
        // line 279
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 283
        echo (isset($context["entry_date_available"]) ? $context["entry_date_available"] : null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_available\" value=\"";
        // line 286
        echo (isset($context["date_available"]) ? $context["date_available"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_date_available"]) ? $context["entry_date_available"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 293
        echo (isset($context["entry_dimension"]) ? $context["entry_dimension"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 297
        echo (isset($context["length"]) ? $context["length"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_length"]) ? $context["entry_length"] : null);
        echo "\" id=\"input-length\" class=\"form-control\" />
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 300
        echo (isset($context["width"]) ? $context["width"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\" id=\"input-width\" class=\"form-control\" />
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 303
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\" id=\"input-height\" class=\"form-control\" />
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 309
        echo (isset($context["entry_length_class"]) ? $context["entry_length_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">
                    

                    ";
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["length_classes"]) ? $context["length_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 315
            echo "                    ";
            if (($this->getAttribute($context["length_class"], "length_class_id", array()) == (isset($context["length_class_id"]) ? $context["length_class_id"] : null))) {
                // line 316
                echo "
                    
                    <option value=\"";
                // line 318
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                    

                    ";
            } else {
                // line 322
                echo "
                    
                    <option value=\"";
                // line 324
                echo $this->getAttribute($context["length_class"], "length_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["length_class"], "title", array());
                echo "</option>
                    

                    ";
            }
            // line 328
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 329
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 335
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"weight\" value=\"";
        // line 337
        echo (isset($context["weight"]) ? $context["weight"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "\" id=\"input-weight\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 341
        echo (isset($context["entry_weight_class"]) ? $context["entry_weight_class"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">
                    

                    ";
        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weight_classes"]) ? $context["weight_classes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 347
            echo "                    ";
            if (($this->getAttribute($context["weight_class"], "weight_class_id", array()) == (isset($context["weight_class_id"]) ? $context["weight_class_id"] : null))) {
                // line 348
                echo "
                    
                    <option value=\"";
                // line 350
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                    

                    ";
            } else {
                // line 354
                echo "
                    
                    <option value=\"";
                // line 356
                echo $this->getAttribute($context["weight_class"], "weight_class_id", array());
                echo "\">";
                echo $this->getAttribute($context["weight_class"], "title", array());
                echo "</option>
                    

                    ";
            }
            // line 360
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 361
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 367
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    

                    ";
        // line 372
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 373
            echo "
                    
                    <option value=\"1\" selected=\"selected\">";
            // line 375
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 376
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    

                    ";
        } else {
            // line 380
            echo "
                    
                    <option value=\"1\">";
            // line 382
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 383
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    

                    ";
        }
        // line 387
        echo "
                  
                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 393
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 395
        echo (isset($context["sort_order"]) ? $context["sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
        // line 401
        echo (isset($context["help_manufacturer"]) ? $context["help_manufacturer"] : null);
        echo "\">";
        echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 403
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_manufacturer"]) ? $context["entry_manufacturer"] : null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        // line 404
        echo (isset($context["manufacturer_id"]) ? $context["manufacturer_id"] : null);
        echo "\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 408
        echo (isset($context["help_category"]) ? $context["help_category"] : null);
        echo "\">";
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 410
        echo (isset($context["entry_category"]) ? $context["entry_category"] : null);
        echo "\" id=\"input-category\" class=\"form-control\" />
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 411
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_categories"]) ? $context["product_categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 412
            echo "                    <div id=\"product-category";
            echo $this->getAttribute($context["product_category"], "category_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_category"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 413
            echo $this->getAttribute($context["product_category"], "category_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 415
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 419
        echo (isset($context["help_filter"]) ? $context["help_filter"] : null);
        echo "\">";
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 421
        echo (isset($context["entry_filter"]) ? $context["entry_filter"] : null);
        echo "\" id=\"input-filter\" class=\"form-control\" />
                  <div id=\"product-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 422
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_filters"]) ? $context["product_filters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_filter"]) {
            // line 423
            echo "                    <div id=\"product-filter";
            echo $this->getAttribute($context["product_filter"], "filter_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_filter"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_filter[]\" value=\"";
            // line 424
            echo $this->getAttribute($context["product_filter"], "filter_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 426
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 430
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 432
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 433
            echo "                    <div class=\"checkbox\">
                      <label> ";
            // line 434
            if (twig_in_filter($this->getAttribute($context["store"], "store_id", array()), (isset($context["product_store"]) ? $context["product_store"] : null))) {
                // line 435
                echo "                        <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" checked=\"checked\" />
                        ";
                // line 436
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                        ";
            } else {
                // line 438
                echo "                        <input type=\"checkbox\" name=\"product_store[]\" value=\"";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\" />
                        ";
                // line 439
                echo $this->getAttribute($context["store"], "name", array());
                echo "
                        ";
            }
            // line 440
            echo " </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 442
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-download\"><span data-toggle=\"tooltip\" title=\"";
        // line 446
        echo (isset($context["help_download"]) ? $context["help_download"] : null);
        echo "\">";
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"download\" value=\"\" placeholder=\"";
        // line 448
        echo (isset($context["entry_download"]) ? $context["entry_download"] : null);
        echo "\" id=\"input-download\" class=\"form-control\" />
                  <div id=\"product-download\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 449
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_downloads"]) ? $context["product_downloads"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_download"]) {
            // line 450
            echo "                    <div id=\"product-download";
            echo $this->getAttribute($context["product_download"], "download_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_download"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_download[]\" value=\"";
            // line 451
            echo $this->getAttribute($context["product_download"], "download_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_download'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 453
        echo "</div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 457
        echo (isset($context["help_related"]) ? $context["help_related"] : null);
        echo "\">";
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 459
        echo (isset($context["entry_related"]) ? $context["entry_related"] : null);
        echo "\" id=\"input-related\" class=\"form-control\" />
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 460
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_relateds"]) ? $context["product_relateds"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 461
            echo "                    <div id=\"product-related";
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product_related"], "name", array());
            echo "
                      <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 462
            echo $this->getAttribute($context["product_related"], "product_id", array());
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 464
        echo "</div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-attribute\">
              <div class=\"table-responsive\">
                <table id=\"attribute\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 473
        echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 474
        echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 480
        $context["attribute_row"] = 0;
        // line 481
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_attributes"]) ? $context["product_attributes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_attribute"]) {
            // line 482
            echo "                  <tr id=\"attribute-row";
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "\">
                    <td class=\"text-left\" style=\"width: 40%;\"><input type=\"text\" name=\"product_attribute[";
            // line 483
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "][name]\" value=\"";
            echo $this->getAttribute($context["product_attribute"], "name", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
            echo "\" class=\"form-control\" />
                      <input type=\"hidden\" name=\"product_attribute[";
            // line 484
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "][attribute_id]\" value=\"";
            echo $this->getAttribute($context["product_attribute"], "attribute_id", array());
            echo "\" /></td>
                    <td class=\"text-left\">";
            // line 485
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 486
                echo "                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
                        <textarea name=\"product_attribute[";
                // line 487
                echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
                echo "][product_attribute_description][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "][text]\" rows=\"5\" placeholder=\"";
                echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
                echo "\" class=\"form-control\">";
                echo (($this->getAttribute($this->getAttribute($context["product_attribute"], "product_attribute_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($context["product_attribute"], "product_attribute_description", array()), $this->getAttribute($context["language"], "language_id", array()), array(), "array"), "text", array())) : (""));
                echo "</textarea>
                      </div>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 489
            echo "</td>
                    <td class=\"text-right\"><button type=\"button\" onclick=\"\$('#attribute-row";
            // line 490
            echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 492
            $context["attribute_row"] = ((isset($context["attribute_row"]) ? $context["attribute_row"] : null) + 1);
            // line 493
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 494
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-right\"><button type=\"button\" onclick=\"addAttribute();\" data-toggle=\"tooltip\" title=\"";
        // line 499
        echo (isset($context["button_attribute_add"]) ? $context["button_attribute_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-option\">
              <div class=\"row\">
                <div class=\"col-sm-2\">
                  <ul class=\"nav nav-pills nav-stacked\" id=\"option\">
                    ";
        // line 509
        $context["option_row"] = 0;
        // line 510
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 511
            echo "                    <li><a href=\"#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\"\$('a[href=\\'#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\\']').parent().remove(); \$('#tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "').remove(); \$('#option a:first').tab('show');\"></i> ";
            echo $this->getAttribute($context["product_option"], "name", array());
            echo "</a></li>
                    ";
            // line 512
            $context["option_row"] = ((isset($context["option_row"]) ? $context["option_row"] : null) + 1);
            // line 513
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 514
        echo "                    <li>
                      <input type=\"text\" name=\"option\" value=\"\" placeholder=\"";
        // line 515
        echo (isset($context["entry_option"]) ? $context["entry_option"] : null);
        echo "\" id=\"input-option\" class=\"form-control\" />
                    </li>
                  </ul>
                </div>
                <div class=\"col-sm-10\">
                  <div class=\"tab-content\"> ";
        // line 520
        $context["option_row"] = 0;
        // line 521
        echo "                    ";
        $context["option_value_row"] = 0;
        // line 522
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_options"]) ? $context["product_options"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
            // line 523
            echo "                    <div class=\"tab-pane\" id=\"tab-option";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">

\t\t\t\t<!-- // << Product Option Image PRO module -->
\t\t\t\t";
            // line 526
            if ((((array_key_exists("poip_installed", $context) &&  !(null === (isset($context["poip_installed"]) ? $context["poip_installed"] : null)))) ? ((isset($context["poip_installed"]) ? $context["poip_installed"] : null)) : (false))) {
                // line 527
                echo "\t\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\t\t\$().ready(function(){
\t\t\t\t\t\t\tpoip.displayProductOptionSettings( ";
                // line 529
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo ", '";
                echo $this->getAttribute($context["product_option"], "type", array());
                echo "', ";
                echo $this->getAttribute($context["product_option"], "product_option_id", array());
                echo " );
\t\t\t\t\t\t});
\t\t\t\t\t//--></script>
\t\t\t\t";
            }
            // line 533
            echo "\t\t\t\t<!-- // >> Product Option Image PRO module -->
      
                      <input type=\"hidden\" name=\"product_option[";
            // line 535
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][product_option_id]\" value=\"";
            echo $this->getAttribute($context["product_option"], "product_option_id", array());
            echo "\" />
                      <input type=\"hidden\" name=\"product_option[";
            // line 536
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][name]\" value=\"";
            echo $this->getAttribute($context["product_option"], "name", array());
            echo "\" />
                      <input type=\"hidden\" name=\"product_option[";
            // line 537
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][option_id]\" value=\"";
            echo $this->getAttribute($context["product_option"], "option_id", array());
            echo "\" />
                      <input type=\"hidden\" name=\"product_option[";
            // line 538
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][type]\" value=\"";
            echo $this->getAttribute($context["product_option"], "type", array());
            echo "\" />
                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-required";
            // line 540
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\">";
            echo (isset($context["entry_required"]) ? $context["entry_required"] : null);
            echo "</label>
                        <div class=\"col-sm-10\">
                          <select name=\"product_option[";
            // line 542
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "][required]\" id=\"input-required";
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo "\" class=\"form-control\">
                            

                            ";
            // line 545
            if ($this->getAttribute($context["product_option"], "required", array())) {
                // line 546
                echo "
                            
                            <option value=\"1\" selected=\"selected\">";
                // line 548
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
                            <option value=\"0\">";
                // line 549
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
                            

                            ";
            } else {
                // line 553
                echo "
                            
                            <option value=\"1\">";
                // line 555
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "</option>
                            <option value=\"0\" selected=\"selected\">";
                // line 556
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "</option>
                            

                            ";
            }
            // line 560
            echo "
                          
                          </select>
                        </div>
                      </div>
                      ";
            // line 565
            if (($this->getAttribute($context["product_option"], "type", array()) == "text")) {
                // line 566
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 567
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_option[";
                // line 569
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      ";
            }
            // line 573
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "textarea")) {
                // line 574
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 575
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <textarea name=\"product_option[";
                // line 577
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" rows=\"5\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\">";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "</textarea>
                        </div>
                      </div>
                      ";
            }
            // line 581
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "file")) {
                // line 582
                echo "                      <div class=\"form-group\" style=\"display: none;\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 583
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <input type=\"text\" name=\"product_option[";
                // line 585
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\" />
                        </div>
                      </div>
                      ";
            }
            // line 589
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "date")) {
                // line 590
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 591
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-3\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_option[";
                // line 594
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                        </div>
                      </div>
                      ";
            }
            // line 601
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "time")) {
                // line 602
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 603
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group time\">
                            <input type=\"text\" name=\"product_option[";
                // line 606
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"HH:mm\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                        </div>
                      </div>
                      ";
            }
            // line 613
            echo "                      ";
            if (($this->getAttribute($context["product_option"], "type", array()) == "datetime")) {
                // line 614
                echo "                      <div class=\"form-group\">
                        <label class=\"col-sm-2 control-label\" for=\"input-value";
                // line 615
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\">";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</label>
                        <div class=\"col-sm-10\">
                          <div class=\"input-group datetime\">
                            <input type=\"text\" name=\"product_option[";
                // line 618
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "][value]\" value=\"";
                echo $this->getAttribute($context["product_option"], "value", array());
                echo "\" placeholder=\"";
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"form-control\" />
                            <span class=\"input-group-btn\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                            </span></div>
                        </div>
                      </div>
                      ";
            }
            // line 625
            echo "                      ";
            if ((((($this->getAttribute($context["product_option"], "type", array()) == "select") || ($this->getAttribute($context["product_option"], "type", array()) == "radio")) || ($this->getAttribute($context["product_option"], "type", array()) == "checkbox")) || ($this->getAttribute($context["product_option"], "type", array()) == "image"))) {
                // line 626
                echo "                      <div class=\"table-responsive\">
                        <table id=\"option-value";
                // line 627
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" class=\"table table-striped table-bordered table-hover\">
                          <thead>
                            <tr>
                              <td class=\"text-left\">";
                // line 630
                echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 631
                echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
                echo "</td>
                              <td class=\"text-left\">";
                // line 632
                echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 633
                echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 634
                echo (isset($context["entry_option_points"]) ? $context["entry_option_points"] : null);
                echo "</td>
                              <td class=\"text-right\">";
                // line 635
                echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
                echo "</td> ";
                if (((((array_key_exists("poip_installed", $context) &&  !(null === (isset($context["poip_installed"]) ? $context["poip_installed"] : null)))) ? ((isset($context["poip_installed"]) ? $context["poip_installed"] : null)) : (false)) &&  !$this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array"))) {
                    echo " <td class=\"text-left\" style=\"width:240px;\">";
                    echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
                    echo "</td>";
                }
                // line 636
                echo "                              <td></td>
                            </tr>
                          </thead>
                          <tbody>
                          
                          ";
                // line 641
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product_option"], "product_option_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["product_option_value"]) {
                    // line 642
                    echo "                          <tr id=\"option-value-row";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "\">
                            <td class=\"text-left\"><select name=\"product_option[";
                    // line 643
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][option_value_id]\" class=\"form-control\">
                                

                                  ";
                    // line 646
                    if ($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array")) {
                        // line 647
                        echo "
                                  ";
                        // line 648
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                            // line 649
                            echo "
                                  ";
                            // line 650
                            if (($this->getAttribute($context["option_value"], "option_value_id", array()) == $this->getAttribute($context["product_option_value"], "option_value_id", array()))) {
                                // line 651
                                echo "
                                
                                <option value=\"";
                                // line 653
                                echo $this->getAttribute($context["option_value"], "option_value_id", array());
                                echo "\" selected=\"selected\">";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "</option>
                                

                                  ";
                            } else {
                                // line 657
                                echo "
                                
                                <option value=\"";
                                // line 659
                                echo $this->getAttribute($context["option_value"], "option_value_id", array());
                                echo "\">";
                                echo $this->getAttribute($context["option_value"], "name", array());
                                echo "</option>
                                

                                  ";
                            }
                            // line 663
                            echo "                                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 664
                        echo "                                  ";
                    }
                    // line 665
                    echo "
                              
                              </select>

\t\t\t\t";
                    // line 670
                    echo "\t\t\t\t";
                    if (((((array_key_exists("pcop_installed", $context) &&  !(null === (isset($context["pcop_installed"]) ? $context["pcop_installed"] : null)))) ? ((isset($context["pcop_installed"]) ? $context["pcop_installed"] : null)) : (false)) && ((($this->getAttribute($context["product_option_value"], "product_option_value_temp_id", array(), "any", true, true) &&  !(null === $this->getAttribute($context["product_option_value"], "product_option_value_temp_id", array())))) ? ($this->getAttribute($context["product_option_value"], "product_option_value_temp_id", array())) : (false)))) {
                        // line 671
                        echo "\t\t\t\t\t<input type=\"hidden\" name=\"product_option[";
                        echo (isset($context["option_row"]) ? $context["option_row"] : null);
                        echo "][product_option_value][";
                        echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                        echo "][product_option_value_temp_id]\" value=\"";
                        echo $this->getAttribute($context["product_option_value"], "product_option_value_temp_id", array());
                        echo "\" />
\t\t\t\t";
                    }
                    // line 672
                    echo "\t
\t\t\t\t";
                    // line 674
                    echo "      
                              <input type=\"hidden\" name=\"product_option[";
                    // line 675
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][product_option_value_id]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "product_option_value_id", array());
                    echo "\" /></td>
                            <td class=\"text-right\"><input type=\"text\" name=\"product_option[";
                    // line 676
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][quantity]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "quantity", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
                    echo "\" class=\"form-control\" /></td>
                            <td class=\"text-left\"><select name=\"product_option[";
                    // line 677
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][subtract]\" class=\"form-control\">
                                

                                  ";
                    // line 680
                    if ($this->getAttribute($context["product_option_value"], "subtract", array())) {
                        // line 681
                        echo "
                                
                                <option value=\"1\" selected=\"selected\">";
                        // line 683
                        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                        echo "</option>
                                <option value=\"0\">";
                        // line 684
                        echo (isset($context["text_no"]) ? $context["text_no"] : null);
                        echo "</option>
                                

                                  ";
                    } else {
                        // line 688
                        echo "
                                
                                <option value=\"1\">";
                        // line 690
                        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                        echo "</option>
                                <option value=\"0\" selected=\"selected\">";
                        // line 691
                        echo (isset($context["text_no"]) ? $context["text_no"] : null);
                        echo "</option>
                                

                                  ";
                    }
                    // line 695
                    echo "
                              
                              </select></td>
                            <td class=\"text-right\"><select name=\"product_option[";
                    // line 698
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][price_prefix]\" class=\"form-control\">
                                

                                  ";
                    // line 701
                    if (($this->getAttribute($context["product_option_value"], "price_prefix", array()) == "+")) {
                        // line 702
                        echo "
                                
                                <option value=\"+\" selected=\"selected\">+</option>
                                

                                  ";
                    } else {
                        // line 708
                        echo "
                                
                                <option value=\"+\">+</option>
                                

                                  ";
                    }
                    // line 714
                    echo "
\t\t\t\t<!-- << Live Price -->
\t\t\t\t
\t\t\t\t";
                    // line 717
                    if ((((array_key_exists("liveprice_installed", $context) &&  !(null === (isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)))) ? ((isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)) : (0))) {
                        // line 718
                        echo "\t\t\t\t\t<option value=\"+%\" ";
                        echo (((($this->getAttribute($context["product_option_value"], "price_prefix", array(), "array") == "%") || ($this->getAttribute($context["product_option_value"], "price_prefix", array(), "array") == "+%"))) ? ("selected") : (""));
                        echo ">+%</option>
\t\t\t\t\t<option value=\"-%\" ";
                        // line 719
                        echo ((($this->getAttribute($context["product_option_value"], "price_prefix", array(), "array") == "-%")) ? ("selected") : (""));
                        echo ">&ndash;%</option>
\t\t\t\t\t<option value=\"=%\" ";
                        // line 720
                        echo ((($this->getAttribute($context["product_option_value"], "price_prefix", array(), "array") == "=%")) ? ("selected") : (""));
                        echo ">=%</option>
\t\t\t\t\t<option value=\"*\" ";
                        // line 721
                        echo ((($this->getAttribute($context["product_option_value"], "price_prefix", array(), "array") == "*")) ? ("selected") : (""));
                        echo ">*</option>
\t\t\t\t\t<option value=\"/\" ";
                        // line 722
                        echo ((($this->getAttribute($context["product_option_value"], "price_prefix", array(), "array") == "/")) ? ("selected") : (""));
                        echo ">/</option>
\t\t\t\t\t<option value=\"=\" ";
                        // line 723
                        echo ((($this->getAttribute($context["product_option_value"], "price_prefix", array(), "array") == "=")) ? ("selected") : (""));
                        echo ">=</option>
\t\t\t\t";
                    }
                    // line 725
                    echo "\t\t\t\t
\t\t\t\t<!-- >> Live Price -->
\t\t\t
                                  ";
                    // line 728
                    if (($this->getAttribute($context["product_option_value"], "price_prefix", array()) == "-")) {
                        // line 729
                        echo "
                                
                                <option value=\"-\" selected=\"selected\">-</option>
                                

                                  ";
                    } else {
                        // line 735
                        echo "
                                
                                <option value=\"-\">-</option>
                                

                                  ";
                    }
                    // line 741
                    echo "
                              
                              </select>
                              <input type=\"text\" name=\"product_option[";
                    // line 744
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][price]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "price", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
                    echo "\" class=\"form-control\" /></td>
                            <td class=\"text-right\"><select name=\"product_option[";
                    // line 745
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][points_prefix]\" class=\"form-control\">
                                

                                  ";
                    // line 748
                    if (($this->getAttribute($context["product_option_value"], "points_prefix", array()) == "+")) {
                        // line 749
                        echo "
                                
                                <option value=\"+\" selected=\"selected\">+</option>
                                

                                  ";
                    } else {
                        // line 755
                        echo "
                                
                                <option value=\"+\">+</option>
                                

                                  ";
                    }
                    // line 761
                    echo "                                  ";
                    if (($this->getAttribute($context["product_option_value"], "points_prefix", array()) == "-")) {
                        // line 762
                        echo "
                                
                                <option value=\"-\" selected=\"selected\">-</option>
                                

                                  ";
                    } else {
                        // line 768
                        echo "
                                
                                <option value=\"-\">-</option>
                                

                                  ";
                    }
                    // line 774
                    echo "
                              
                              </select>
                              <input type=\"text\" name=\"product_option[";
                    // line 777
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][points]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "points", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
                    echo "\" class=\"form-control\" /></td>
                            <td class=\"text-right\"><select name=\"product_option[";
                    // line 778
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][weight_prefix]\" class=\"form-control\">
                                

                                  ";
                    // line 781
                    if (($this->getAttribute($context["product_option_value"], "weight_prefix", array()) == "+")) {
                        // line 782
                        echo "
                                
                                <option value=\"+\" selected=\"selected\">+</option>
                                

                                  ";
                    } else {
                        // line 788
                        echo "
                                
                                <option value=\"+\">+</option>
                                

                                  ";
                    }
                    // line 794
                    echo "                                  ";
                    if (($this->getAttribute($context["product_option_value"], "weight_prefix", array()) == "-")) {
                        // line 795
                        echo "
                                
                                <option value=\"-\" selected=\"selected\">-</option>
                                

                                  ";
                    } else {
                        // line 801
                        echo "
                                
                                <option value=\"-\">-</option>
                                

                                  ";
                    }
                    // line 807
                    echo "
                              
                              </select>
                              <input type=\"text\" name=\"product_option[";
                    // line 810
                    echo (isset($context["option_row"]) ? $context["option_row"] : null);
                    echo "][product_option_value][";
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "][weight]\" value=\"";
                    echo $this->getAttribute($context["product_option_value"], "weight", array());
                    echo "\" placeholder=\"";
                    echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
                    echo "\" class=\"form-control\" /></td>

\t\t\t\t<!-- << Product Option Image PRO module -->
\t\t\t\t";
                    // line 813
                    if (((((array_key_exists("poip_installed", $context) &&  !(null === (isset($context["poip_installed"]) ? $context["poip_installed"] : null)))) ? ((isset($context["poip_installed"]) ? $context["poip_installed"] : null)) : (false)) &&  !$this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array"))) {
                        // line 814
                        echo "\t\t\t\t\t";
                        if (((($this->getAttribute($context["product_option_value"], "images", array(), "array", true, true) &&  !(null === $this->getAttribute($context["product_option_value"], "images", array(), "array")))) ? ($this->getAttribute($context["product_option_value"], "images", array(), "array")) : (false))) {
                            // line 815
                            echo "\t\t\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\t\t\t";
                            // line 816
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product_option_value"], "images", array(), "array"));
                            foreach ($context['_seq'] as $context["_key"] => $context["pov_image"]) {
                                // line 817
                                echo "\t\t\t\t\t\t\t\tpoip.addProductOptionImage( ";
                                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                                echo ", ";
                                echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                                echo ", '";
                                echo $this->getAttribute($context["pov_image"], "thumb", array(), "array");
                                echo "', '";
                                echo $this->getAttribute($context["pov_image"], "image", array(), "array");
                                echo "', ";
                                echo $this->getAttribute($context["pov_image"], "srt", array(), "array");
                                echo " );
\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pov_image'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 819
                            echo "\t\t\t\t\t\t//--></script>
\t\t\t\t\t";
                        }
                        // line 821
                        echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default\" onclick=\"poip.addProductOptionImage(";
                        // line 822
                        echo (isset($context["option_row"]) ? $context["option_row"] : null);
                        echo ", ";
                        echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                        echo " )\" title=\"";
                        echo (isset($context["button_image_add"]) ? $context["button_image_add"] : null);
                        echo "\">
\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div id=\"option_images";
                        // line 825
                        echo (isset($context["option_row"]) ? $context["option_row"] : null);
                        echo "_";
                        echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                        echo "\"></div>
\t\t\t\t\t</td>
\t\t\t\t";
                    }
                    // line 828
                    echo "\t\t\t\t<!-- >> Product Option Image PRO module -->
      
                            <td class=\"text-right\"><button type=\"button\" onclick=\"\$(this).tooltip('destroy');\$('#option-value-row";
                    // line 830
                    echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                    echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                          </tr>
                          ";
                    // line 832
                    $context["option_value_row"] = ((isset($context["option_value_row"]) ? $context["option_value_row"] : null) + 1);
                    // line 833
                    echo "                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 834
                echo "                            </tbody>
                          
                          <tfoot>
                            <tr>
                              <td colspan=\"6\"></td>
                              ";
                // line 839
                if (((((array_key_exists("poip_installed", $context) &&  !(null === (isset($context["poip_installed"]) ? $context["poip_installed"] : null)))) ? ((isset($context["poip_installed"]) ? $context["poip_installed"] : null)) : (false)) &&  !$this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array"))) {
                    echo "<td></td>";
                }
                echo "<td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue('";
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                            </tr>
                          </tfoot>
                        </table>
                      </div>
                      <select id=\"option-values";
                // line 844
                echo (isset($context["option_row"]) ? $context["option_row"] : null);
                echo "\" style=\"display: none;\">
                        

                        ";
                // line 847
                if ($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array")) {
                    // line 848
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["option_values"]) ? $context["option_values"] : null), $this->getAttribute($context["product_option"], "option_id", array()), array(), "array"));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 849
                        echo "
                        
                        <option value=\"";
                        // line 851
                        echo $this->getAttribute($context["option_value"], "option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "</option>
                        

                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 855
                    echo "                        ";
                }
                // line 856
                echo "
                      
                      </select>
                      ";
            }
            // line 859
            echo " </div>
                    ";
            // line 860
            $context["option_row"] = ((isset($context["option_row"]) ? $context["option_row"] : null) + 1);
            // line 861
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-recurring\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 870
        echo (isset($context["entry_recurring"]) ? $context["entry_recurring"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 871
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-left\"></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 877
        $context["recurring_row"] = 0;
        // line 878
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_recurrings"]) ? $context["product_recurrings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_recurring"]) {
            // line 879
            echo "                  <tr id=\"recurring-row";
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "\">
                    <td class=\"text-left\"><select name=\"product_recurring[";
            // line 880
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "][recurring_id]\" class=\"form-control\">
                        

                          ";
            // line 883
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 884
                echo "                          ";
                if (($this->getAttribute($context["recurring"], "recurring_id", array()) == $this->getAttribute($context["product_recurring"], "recurring_id", array()))) {
                    // line 885
                    echo "
                        
                        <option value=\"";
                    // line 887
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["recurring"], "name", array());
                    echo "</option>
                        

                          ";
                } else {
                    // line 891
                    echo "
                        
                        <option value=\"";
                    // line 893
                    echo $this->getAttribute($context["recurring"], "recurring_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["recurring"], "name", array());
                    echo "</option>
                        

                          ";
                }
                // line 897
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 898
            echo "
                      
                      </select></td>
                    <td class=\"text-left\"><select name=\"product_recurring[";
            // line 901
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">
                        

                          ";
            // line 904
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 905
                echo "                          ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_recurring"], "customer_group_id", array()))) {
                    // line 906
                    echo "
                        
                        <option value=\"";
                    // line 908
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        

                          ";
                } else {
                    // line 912
                    echo "
                        
                        <option value=\"";
                    // line 914
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        

                          ";
                }
                // line 918
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 919
            echo "
                      
                      </select></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#recurring-row";
            // line 922
            echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
            echo "').remove()\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 924
            $context["recurring_row"] = ((isset($context["recurring_row"]) ? $context["recurring_row"] : null) + 1);
            // line 925
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 926
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addRecurring()\" data-toggle=\"tooltip\" title=\"";
        // line 931
        echo (isset($context["button_recurring_add"]) ? $context["button_recurring_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-discount\">
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 942
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 943
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 944
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 945
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 946
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 947
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 953
        $context["discount_row"] = 0;
        // line 954
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_discounts"]) ? $context["product_discounts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 955
            echo "                  <tr id=\"discount-row";
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "\">
                    <td class=\"text-left\"><select name=\"product_discount[";
            // line 956
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">

\t\t\t\t<!-- << Live Price -->
\t\t\t\t";
            // line 959
            if ((((array_key_exists("liveprice_installed", $context) &&  !(null === (isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)))) ? ((isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)) : (0))) {
                // line 960
                echo "\t\t\t\t\t<option value=\"-1\">";
                echo (isset($context["liveprice_all_customers_groups"]) ? $context["liveprice_all_customers_groups"] : null);
                echo "</option>
\t\t\t\t";
            }
            // line 962
            echo "\t\t\t\t<!-- >> Live Price -->
\t\t\t
                        ";
            // line 964
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 965
                echo "                        ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_discount"], "customer_group_id", array()))) {
                    // line 966
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        ";
                } else {
                    // line 968
                    echo "                        <option value=\"";
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        ";
                }
                // line 970
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 971
            echo "                      </select></td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 972
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][quantity]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "quantity", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 973
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][priority]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "priority", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-right\"><!-- << Live Price -->
\t\t\t\t";
            // line 975
            if ((((array_key_exists("liveprice_installed", $context) &&  !(null === (isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)))) ? ((isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)) : (0))) {
                // line 976
                echo "\t\t\t\t\t<select name=\"product_discount[";
                echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
                echo "][price_prefix]\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"=\"
\t\t\t\t\t\t\t";
                // line 978
                if ((((($this->getAttribute($context["product_discount"], "price_prefix", array(), "array", true, true) &&  !(null === $this->getAttribute($context["product_discount"], "price_prefix", array(), "array")))) ? ($this->getAttribute($context["product_discount"], "price_prefix", array(), "array")) : ("")) == "=")) {
                    // line 979
                    echo "\t\t\t\t\t\t\t\tselected\"
\t\t\t\t\t\t\t";
                }
                // line 981
                echo "\t\t\t\t\t\t>=</option>
\t\t\t\t\t\t<option value=\"_\"
\t\t\t\t\t\t\t";
                // line 983
                if ((((($this->getAttribute($context["product_discount"], "price_prefix", array(), "array", true, true) &&  !(null === $this->getAttribute($context["product_discount"], "price_prefix", array(), "array")))) ? ($this->getAttribute($context["product_discount"], "price_prefix", array(), "array")) : ("")) == "_")) {
                    // line 984
                    echo "\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t";
                }
                // line 986
                echo "\t\t\t\t\t\t\t>= %</option>
\t\t\t\t\t\t<option value=\"%\"
\t\t\t\t\t\t\t";
                // line 988
                if ((((($this->getAttribute($context["product_discount"], "price_prefix", array(), "array", true, true) &&  !(null === $this->getAttribute($context["product_discount"], "price_prefix", array(), "array")))) ? ($this->getAttribute($context["product_discount"], "price_prefix", array(), "array")) : ("")) == "%")) {
                    // line 989
                    echo "\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t";
                }
                // line 991
                echo "\t\t\t\t\t\t>&ndash; %</option>
\t\t\t\t\t</select>
\t\t\t\t";
            }
            // line 994
            echo "\t\t\t\t
\t\t\t\t<!-- >> Live Price -->
\t\t\t\t<input type=\"text\" name=\"product_discount[";
            // line 996
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][price]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "price", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                        <input type=\"text\" name=\"product_discount[";
            // line 998
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][date_start]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "date_start", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div></td>
                    <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                        <input type=\"text\" name=\"product_discount[";
            // line 1003
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "][date_end]\" value=\"";
            echo $this->getAttribute($context["product_discount"], "date_end", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 1007
            echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 1009
            $context["discount_row"] = ((isset($context["discount_row"]) ? $context["discount_row"] : null) + 1);
            // line 1010
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1011
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 1016
        echo (isset($context["button_discount_add"]) ? $context["button_discount_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-special\">
              <div class=\"table-responsive\">
                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1027
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1028
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1029
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1030
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1031
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 1037
        $context["special_row"] = 0;
        // line 1038
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_specials"]) ? $context["product_specials"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 1039
            echo "                  <tr id=\"special-row";
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "\">
                    <td class=\"text-left\"><select name=\"product_special[";
            // line 1040
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][customer_group_id]\" class=\"form-control\">

\t\t\t\t<!-- << Live Price -->
\t\t\t\t<option value=\"-1\">";
            // line 1043
            echo (isset($context["liveprice_all_customers_groups"]) ? $context["liveprice_all_customers_groups"] : null);
            echo "</option>
\t\t\t
\t\t\t\t<!-- >> Live Price -->
\t\t\t
                        

                          ";
            // line 1049
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 1050
                echo "                          ";
                if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == $this->getAttribute($context["product_special"], "customer_group_id", array()))) {
                    // line 1051
                    echo "
                        
                        <option value=\"";
                    // line 1053
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        

                          ";
                } else {
                    // line 1057
                    echo "
                        
                        <option value=\"";
                    // line 1059
                    echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["customer_group"], "name", array());
                    echo "</option>
                        

                          ";
                }
                // line 1063
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1064
            echo "
                      
                      </select></td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 1067
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][priority]\" value=\"";
            echo $this->getAttribute($context["product_special"], "priority", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-right\"><!-- << Live Price -->
\t\t\t\t";
            // line 1069
            if ((((array_key_exists("liveprice_installed", $context) &&  !(null === (isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)))) ? ((isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)) : (0))) {
                // line 1070
                echo "\t\t\t\t\t<select name=\"product_special[";
                echo (isset($context["special_row"]) ? $context["special_row"] : null);
                echo "][price_prefix]\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"=\" ";
                // line 1071
                echo (((((($this->getAttribute($context["product_special"], "price_prefix", array(), "array", true, true) &&  !(null === $this->getAttribute($context["product_special"], "price_prefix", array(), "array")))) ? ($this->getAttribute($context["product_special"], "price_prefix", array(), "array")) : ("")) == "=")) ? ("selected") : (""));
                echo " >=</option>
\t\t\t\t\t\t<option value=\"_\" ";
                // line 1072
                echo (((((($this->getAttribute($context["product_special"], "price_prefix", array(), "array", true, true) &&  !(null === $this->getAttribute($context["product_special"], "price_prefix", array(), "array")))) ? ($this->getAttribute($context["product_special"], "price_prefix", array(), "array")) : ("")) == "_")) ? ("selected") : (""));
                echo " >= %</option>
\t\t\t\t\t\t<option value=\"%\" ";
                // line 1073
                echo (((((($this->getAttribute($context["product_special"], "price_prefix", array(), "array", true, true) &&  !(null === $this->getAttribute($context["product_special"], "price_prefix", array(), "array")))) ? ($this->getAttribute($context["product_special"], "price_prefix", array(), "array")) : ("")) == "%")) ? ("selected") : (""));
                echo " >&ndash; %</option>
\t\t\t\t\t</select>
\t\t\t\t";
            }
            // line 1076
            echo "\t\t\t\t<!-- >> Live Price -->
\t\t\t\t<input type=\"text\" name=\"product_special[";
            // line 1077
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][price]\" value=\"";
            echo $this->getAttribute($context["product_special"], "price", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                        <input type=\"text\" name=\"product_special[";
            // line 1079
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][date_start]\" value=\"";
            echo $this->getAttribute($context["product_special"], "date_start", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div></td>
                    <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\">
                        <input type=\"text\" name=\"product_special[";
            // line 1084
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "][date_end]\" value=\"";
            echo $this->getAttribute($context["product_special"], "date_end", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" />
                        <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 1088
            echo (isset($context["special_row"]) ? $context["special_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>
                  ";
            // line 1090
            $context["special_row"] = ((isset($context["special_row"]) ? $context["special_row"] : null) + 1);
            // line 1091
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1092
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 1097
        echo (isset($context["button_special_add"]) ? $context["button_special_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <div class=\"table-responsive\">
                <table class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1108
        echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class=\"text-left\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1113
        echo (isset($context["thumb"]) ? $context["thumb"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a>
                        <input type=\"hidden\" name=\"image\" value=\"";
        // line 1114
        echo (isset($context["image"]) ? $context["image"] : null);
        echo "\" id=\"input-image\" /></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class=\"table-responsive\">
                <table id=\"images\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1123
        echo (isset($context["entry_additional_image"]) ? $context["entry_additional_image"] : null);
        echo "</td>

\t\t\t\t<!-- Product Option Image PRO module << -->
\t\t\t\t";
        // line 1126
        if (((((array_key_exists("poip_installed", $context) &&  !(null === (isset($context["poip_installed"]) ? $context["poip_installed"] : null)))) ? ((isset($context["poip_installed"]) ? $context["poip_installed"] : null)) : (false)) && ((($this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array", true, true) &&  !(null === $this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array")))) ? ($this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array")) : (0)))) {
            // line 1127
            echo "\t\t\t\t\t\t<td class=\"text-left\">";
            echo (isset($context["entry_option"]) ? $context["entry_option"] : null);
            echo "</td>
\t\t\t\t";
        }
        // line 1129
        echo "\t\t\t\t<!-- >> Product Option Image PRO module -->
\t\t\t

            
\t\t\t\t\t\t";
        // line 1133
        if ((((isset($context["pim_status"]) ? $context["pim_status"] : null) == true) &&  !(isset($context["pim_miu"]) ? $context["pim_miu"] : null))) {
            // line 1134
            echo "\t\t\t\t\t\t\t\t<td class=\"text-left\">Default Image</td>
\t\t\t\t\t\t";
        }
        // line 1136
        echo "            
                      <td class=\"text-right\">";
        // line 1137
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 1143
        $context["image_row"] = 0;
        // line 1144
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["product_images"]) ? $context["product_images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_image"]) {
            // line 1145
            echo "                  <tr id=\"image-row";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\">
                    <td class=\"text-left\"><a href=\"\" id=\"thumb-image";
            // line 1146
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
            echo $this->getAttribute($context["product_image"], "thumb", array());
            echo "\" alt=\"\" title=\"\" data-placeholder=\"";
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" /></a>
                      <input type=\"hidden\" name=\"product_image[";
            // line 1147
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][image]\" value=\"";
            echo $this->getAttribute($context["product_image"], "image", array());
            echo "\" id=\"input-image";
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "\" /></td>

        ";
            // line 1149
            if ((((isset($context["pim_status"]) ? $context["pim_status"] : null) == true) &&  !(isset($context["pim_miu"]) ? $context["pim_miu"] : null))) {
                // line 1150
                echo "          <td class=\"text-right\"><input type=\"radio\" name=\"def_img\" value=\"";
                echo $this->getAttribute($context["product_image"], "image", array());
                echo "\" class=\"form-control\" /></td>
        ";
            }
            // line 1152
            echo "        
                    <td class=\"text-right\"><input type=\"text\" name=\"product_image[";
            // line 1153
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "][sort_order]\" value=\"";
            echo $this->getAttribute($context["product_image"], "sort_order", array());
            echo "\" placeholder=\"";
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "\" class=\"form-control\" /></td>
                    <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#image-row";
            // line 1154
            echo (isset($context["image_row"]) ? $context["image_row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                  </tr>

\t\t\t\t<!-- Product Option Image PRO module << -->
\t\t\t\t";
            // line 1158
            if (((((array_key_exists("poip_installed", $context) &&  !(null === (isset($context["poip_installed"]) ? $context["poip_installed"] : null)))) ? ((isset($context["poip_installed"]) ? $context["poip_installed"] : null)) : (false)) && (((($this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array", true, true) &&  !(null === $this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array")))) ? ($this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array")) : (0)) == 1))) {
                // line 1159
                echo "\t\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\t\tpoip.displayImageOptions( ";
                // line 1160
                echo (isset($context["image_row"]) ? $context["image_row"] : null);
                echo ", ";
                echo twig_jsonencode_filter($context["product_image"]);
                echo " );
\t\t\t\t\t//--></script>
\t\t\t\t";
            }
            // line 1163
            echo "\t\t\t\t<!-- >> Product Option Image PRO module -->
\t\t\t
                  ";
            // line 1165
            $context["image_row"] = ((isset($context["image_row"]) ? $context["image_row"] : null) + 1);
            // line 1166
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1167
        echo "                    </tbody>
                  
                  <tfoot>
                    <tr>
                      <td colspan=\"2\"></td>

\t\t\t\t<!-- Product Option Image PRO module << -->
\t\t\t\t";
        // line 1174
        if (((((array_key_exists("poip_installed", $context) &&  !(null === (isset($context["poip_installed"]) ? $context["poip_installed"] : null)))) ? ((isset($context["poip_installed"]) ? $context["poip_installed"] : null)) : (false)) && ((($this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array", true, true) &&  !(null === $this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array")))) ? ($this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array")) : (0)))) {
            // line 1175
            echo "\t\t\t\t\t\t<td class=\"text-left\"></td>
\t\t\t\t";
        }
        // line 1177
        echo "\t\t\t\t<!-- >> Product Option Image PRO module -->
\t\t\t
                      <td class=\"text-left\">";
        // line 1179
        if (((isset($context["pim_status"]) ? $context["pim_status"] : null) == true)) {
            echo " <a type=\"button\" data-toggle=\"manager\" title=\"Power Image Manager\" class=\"btn btn-success\"><i class=\"fa fa-upload\"></i> Power Image Manager</a>&nbsp;";
        }
        echo "<button type=\"button\" onclick=\"addImage();\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_image_add"]) ? $context["button_image_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
        // line 1187
        echo (isset($context["help_points"]) ? $context["help_points"] : null);
        echo "\">";
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 1189
        echo (isset($context["points"]) ? $context["points"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "\" id=\"input-points\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1196
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 1197
        echo (isset($context["entry_reward"]) ? $context["entry_reward"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  ";
        // line 1202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1203
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 1204
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</td>
                    <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 1205
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "][points]\" value=\"";
            echo (($this->getAttribute((isset($context["product_reward"]) ? $context["product_reward"] : null), $this->getAttribute($context["customer_group"], "customer_group_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["product_reward"]) ? $context["product_reward"] : null), $this->getAttribute($context["customer_group"], "customer_group_id", array()), array(), "array"), "points", array())) : (""));
            echo "\" class=\"form-control\" /></td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1208
        echo "                    </tbody>
                  
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1214
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</div>            
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1219
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
\t\t      <td class=\"text-left\">";
        // line 1220
        echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 1224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1225
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 1226
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                    <td class=\"text-left\">";
            // line 1227
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1228
                echo "                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" /></span>
                        <input type=\"text\" name=\"product_seo_url[";
                // line 1229
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute($this->getAttribute((isset($context["product_seo_url"]) ? $context["product_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    echo $this->getAttribute($this->getAttribute((isset($context["product_seo_url"]) ? $context["product_seo_url"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                }
                echo "\" placeholder=\"";
                echo (isset($context["entry_keyword"]) ? $context["entry_keyword"] : null);
                echo "\" class=\"form-control\" />
                      </div>
                      ";
                // line 1231
                if ($this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) {
                    // line 1232
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["error_keyword"]) ? $context["error_keyword"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array");
                    echo "</div>
                      ";
                }
                // line 1233
                echo " 
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1234
            echo "</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1237
        echo "                    </tbody>
                  
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1247
        echo (isset($context["entry_store"]) ? $context["entry_store"] : null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1248
        echo (isset($context["entry_layout"]) ? $context["entry_layout"] : null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 1252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1253
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 1254
            echo $this->getAttribute($context["store"], "name", array());
            echo "</td>
                    <td class=\"text-left\"><select name=\"product_layout[";
            // line 1255
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "]\" class=\"form-control\">
                        <option value=\"\"></option>
                        

                          ";
            // line 1259
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["layouts"]) ? $context["layouts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1260
                echo "                          ";
                if (($this->getAttribute((isset($context["product_layout"]) ? $context["product_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") && ($this->getAttribute((isset($context["product_layout"]) ? $context["product_layout"] : null), $this->getAttribute($context["store"], "store_id", array()), array(), "array") == $this->getAttribute($context["layout"], "layout_id", array())))) {
                    // line 1261
                    echo "
                        
                        <option value=\"";
                    // line 1263
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                        

                          ";
                } else {
                    // line 1267
                    echo "
                        
                        <option value=\"";
                    // line 1269
                    echo $this->getAttribute($context["layout"], "layout_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["layout"], "name", array());
                    echo "</option>
                        

                          ";
                }
                // line 1273
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1274
            echo "
                      
                      </select></td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1279
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script> 
  <script type=\"text/javascript\"><!--
// Manufacturer
\$('input[name=\\'manufacturer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 1302
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tmanufacturer_id: 0,
\t\t\t\t\tname: '";
        // line 1307
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['manufacturer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t\$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t}
});

// Category
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1329
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val('');

\t\t\$('#product-category' + item['value']).remove();

\t\t\$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Filter
\$('input[name=\\'filter\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1358
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['filter_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter\\']').val('');

\t\t\$('#product-filter' + item['value']).remove();

\t\t\$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Downloads
\$('input[name=\\'download\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 1387
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['download_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'download\\']').val('');

\t\t\$('#product-download' + item['value']).remove();

\t\t\$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Related
\$('input[name=\\'related\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1416
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'related\\']').val('');

\t\t\$('#product-related' + item['value']).remove();

\t\t\$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script> 
  <script type=\"text/javascript\"><!--
var attribute_row = ";
        // line 1442
        echo (isset($context["attribute_row"]) ? $context["attribute_row"] : null);
        echo ";

function addAttribute() {
    html  = '<tr id=\"attribute-row' + attribute_row + '\">';
\thtml += '  <td class=\"text-left\" style=\"width: 20%;\"><input type=\"text\" name=\"product_attribute[' + attribute_row + '][name]\" value=\"\" placeholder=\"";
        // line 1446
        echo (isset($context["entry_attribute"]) ? $context["entry_attribute"] : null);
        echo "\" class=\"form-control\" /><input type=\"hidden\" name=\"product_attribute[' + attribute_row + '][attribute_id]\" value=\"\" /></td>';
\thtml += '  <td class=\"text-left\">';
\t";
        // line 1448
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1449
            echo "\thtml += '<div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span><textarea name=\"product_attribute[' + attribute_row + '][product_attribute_description][";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "][text]\" rows=\"5\" placeholder=\"";
            echo (isset($context["entry_text"]) ? $context["entry_text"] : null);
            echo "\" class=\"form-control\"></textarea></div>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1451
        echo "\thtml += '  </td>';
\thtml += '  <td class=\"text-right\"><button type=\"button\" onclick=\"\$(\\'#attribute-row' + attribute_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1452
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
    html += '</tr>';

\t\$('#attribute tbody').append(html);

\tattributeautocomplete(attribute_row);

\tattribute_row++;
}

function attributeautocomplete(attribute_row) {
\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').autocomplete({
\t\t'source': function(request, response) {
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=catalog/attribute/autocomplete&user_token=";
        // line 1466
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\t\tdataType: 'json',
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\t\treturn {
\t\t\t\t\t\t\tcategory: item.attribute_group,
\t\t\t\t\t\t\tlabel: item.name,
\t\t\t\t\t\t\tvalue: item.attribute_id
\t\t\t\t\t\t}
\t\t\t\t\t}));
\t\t\t\t}
\t\t\t});
\t\t},
\t\t'select': function(item) {
\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][name]\\']').val(item['label']);
\t\t\t\$('input[name=\\'product_attribute[' + attribute_row + '][attribute_id]\\']').val(item['value']);
\t\t}
\t});
}

\$('#attribute tbody tr').each(function(index, element) {
\tattributeautocomplete(index);
});
//--></script> 
  <script type=\"text/javascript\"><!--
var option_row = ";
        // line 1491
        echo (isset($context["option_row"]) ? $context["option_row"] : null);
        echo ";

\$('input[name=\\'option\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 1496
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tcategory: item['category'],
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['option_id'],
\t\t\t\t\t\ttype: item['type'],
\t\t\t\t\t\toption_value: item['option_value']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\thtml  = '<div class=\"tab-pane\" id=\"tab-option' + option_row + '\">';
\t\thtml += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_id]\" value=\"\" />';
\t\thtml += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][name]\" value=\"' + item['label'] + '\" />';
\t\thtml += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][option_id]\" value=\"' + item['value'] + '\" />';
\t\thtml += '\t<input type=\"hidden\" name=\"product_option[' + option_row + '][type]\" value=\"' + item['type'] + '\" />';

\t\thtml += '\t<div class=\"form-group\">';
\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-required' + option_row + '\">";
        // line 1519
        echo (isset($context["entry_required"]) ? $context["entry_required"] : null);
        echo "</label>';
\t\thtml += '\t  <div class=\"col-sm-10\"><select name=\"product_option[' + option_row + '][required]\" id=\"input-required' + option_row + '\" class=\"form-control\">';
\t\thtml += '\t      <option value=\"1\">";
        // line 1521
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
\t\thtml += '\t      <option value=\"0\">";
        // line 1522
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';
\t\thtml += '\t  </select></div>';
\t\thtml += '\t</div>';

\t\tif (item['type'] == 'text') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1528
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1529
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'textarea') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1535
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><textarea name=\"product_option[' + option_row + '][value]\" rows=\"5\" placeholder=\"";
        // line 1536
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\"></textarea></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'file') {
\t\t\thtml += '\t<div class=\"form-group\" style=\"display: none;\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1542
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1543
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" id=\"input-value' + option_row + '\" class=\"form-control\" /></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'date') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1549
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-3\"><div class=\"input-group date\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1550
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'time') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1556
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><div class=\"input-group time\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1557
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'datetime') {
\t\t\thtml += '\t<div class=\"form-group\">';
\t\t\thtml += '\t  <label class=\"col-sm-2 control-label\" for=\"input-value' + option_row + '\">";
        // line 1563
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</label>';
\t\t\thtml += '\t  <div class=\"col-sm-10\"><div class=\"input-group datetime\"><input type=\"text\" name=\"product_option[' + option_row + '][value]\" value=\"\" placeholder=\"";
        // line 1564
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value' + option_row + '\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></div>';
\t\t\thtml += '\t</div>';
\t\t}

\t\tif (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {
\t\t\thtml += '<div class=\"table-responsive\">';
\t\t\thtml += '  <table id=\"option-value' + option_row + '\" class=\"table table-striped table-bordered table-hover\">';
\t\t\thtml += '  \t <thead>';
\t\t\thtml += '      <tr>';
\t\t\thtml += '        <td class=\"text-left\">";
        // line 1573
        echo (isset($context["entry_option_value"]) ? $context["entry_option_value"] : null);
        echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
        // line 1574
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "</td>';
\t\t\thtml += '        <td class=\"text-left\">";
        // line 1575
        echo (isset($context["entry_subtract"]) ? $context["entry_subtract"] : null);
        echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
        // line 1576
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
        // line 1577
        echo (isset($context["entry_option_points"]) ? $context["entry_option_points"] : null);
        echo "</td>';
\t\t\thtml += '        <td class=\"text-right\">";
        // line 1578
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "</td> ";
        if (((((array_key_exists("poip_installed", $context) &&  !(null === (isset($context["poip_installed"]) ? $context["poip_installed"] : null)))) ? ((isset($context["poip_installed"]) ? $context["poip_installed"] : null)) : (false)) &&  !$this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array"))) {
            echo " <td class=\"text-left\" style=\"width:240px;\">";
            echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
            echo "</td>";
        }
        echo "';
\t\t\thtml += '        <td></td>';
\t\t\thtml += '      </tr>';
\t\t\thtml += '  \t </thead>';
\t\t\thtml += '  \t <tbody>';
\t\t\thtml += '    </tbody>';
\t\t\thtml += '    <tfoot>';
\t\t\thtml += '      <tr>';
\t\t\thtml += '        <td colspan=\"6\"></td>';
\t\t\thtml += '        ";
        // line 1587
        if (((((array_key_exists("poip_installed", $context) &&  !(null === (isset($context["poip_installed"]) ? $context["poip_installed"] : null)))) ? ((isset($context["poip_installed"]) ? $context["poip_installed"] : null)) : (false)) &&  !$this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array"))) {
            echo "<td></td>";
        }
        echo "<td class=\"text-left\"><button type=\"button\" onclick=\"addOptionValue(' + option_row + ');\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_option_value_add"]) ? $context["button_option_value_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>';
\t\t\thtml += '      </tr>';
\t\t\thtml += '    </tfoot>';
\t\t\thtml += '  </table>';
\t\t\thtml += '</div>';

            html += '  <select id=\"option-values' + option_row + '\" style=\"display: none;\">';

            for (i = 0; i < item['option_value'].length; i++) {
\t\t\t\thtml += '  <option value=\"' + item['option_value'][i]['option_value_id'] + '\">' + item['option_value'][i]['name'] + '</option>';
            }

            html += '  </select>';
\t\t\thtml += '</div>';
\t\t}

\t\t\$('#tab-option .tab-content').append(html);

\t\t\t\t// << Product Option Image PRO module 
\t\t\t\t";
        // line 1606
        if ((((array_key_exists("poip_installed", $context) &&  !(null === (isset($context["poip_installed"]) ? $context["poip_installed"] : null)))) ? ((isset($context["poip_installed"]) ? $context["poip_installed"] : null)) : (false))) {
            // line 1607
            echo "\t\t\t\t\tpoip.displayProductOptionSettings( option_row, item['type'] );
\t\t\t\t";
        }
        // line 1609
        echo "\t\t\t\t// >> Product Option Image PRO module 
      

\t\t\t\t// << Parent-child Options
\t\t\t\t";
        // line 1613
        if ((((array_key_exists("pcop_installed", $context) &&  !(null === (isset($context["pcop_installed"]) ? $context["pcop_installed"] : null)))) ? ((isset($context["pcop_installed"]) ? $context["pcop_installed"] : null)) : (0))) {
            // line 1614
            echo "\t\t\t\t\tpcop.showOptionSettings(option_row);
\t\t\t\t";
        }
        // line 1615
        echo "\t
\t\t\t\t// >> Parent-child Options
      

\t\t\$('#option > li:last-child').before('<li><a href=\"#tab-option' + option_row + '\" data-toggle=\"tab\"><i class=\"fa fa-minus-circle\" onclick=\" \$(\\'#option a:first\\').tab(\\'show\\');\$(\\'a[href=\\\\\\'#tab-option' + option_row + '\\\\\\']\\').parent().remove(); \$(\\'#tab-option' + option_row + '\\').remove();\"></i>' + item['label'] + '</li>');

\t\t\$('#option a[href=\\'#tab-option' + option_row + '\\']').tab('show');

\t\t\$('[data-toggle=\\'tooltip\\']').tooltip({
\t\t\tcontainer: 'body',
\t\t\thtml: true
\t\t});

\t\t\$('.date').datetimepicker({
\t\t\tlanguage: '";
        // line 1629
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\tpickTime: false
\t\t});

\t\t\$('.time').datetimepicker({
\t\t\tlanguage: '";
        // line 1634
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\tpickDate: false
\t\t});

\t\t\$('.datetime').datetimepicker({
\t\t\tlanguage: '";
        // line 1639
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\t\tpickDate: true,
\t\t\tpickTime: true
\t\t});

\t\toption_row++;
\t}
});
//--></script> 
  <script type=\"text/javascript\"><!--
var option_value_row = ";
        // line 1649
        echo (isset($context["option_value_row"]) ? $context["option_value_row"] : null);
        echo ";

function addOptionValue(option_row) {
\thtml  = '<tr id=\"option-value-row' + option_value_row + '\">';
\thtml += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]\" class=\"form-control\">';
\thtml += \$('#option-values' + option_row).html();
\thtml += '  </select><input type=\"hidden\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]\" value=\"\" /></td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1656
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]\" class=\"form-control\">';
\thtml += '    <option value=\"1\">";
        // line 1658
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>';
\thtml += '    <option value=\"0\">";
        // line 1659
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>';
\thtml += '  </select></td>';
\thtml += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]\" class=\"form-control\">';
\thtml += '    <option value=\"+\">+</option>';
\thtml += '    <option value=\"-\">-</option>';
\thtml += '  </select>';
\thtml += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]\" value=\"\" placeholder=\"";
        // line 1665
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]\" class=\"form-control\">';
\thtml += '    <option value=\"+\">+</option>';
\thtml += '    <option value=\"-\">-</option>';
\thtml += '  </select>';
\thtml += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]\" value=\"\" placeholder=\"";
        // line 1670
        echo (isset($context["entry_points"]) ? $context["entry_points"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\"><select name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]\" class=\"form-control\">';
\thtml += '    <option value=\"+\">+</option>';
\thtml += '    <option value=\"-\">-</option>';
\thtml += '  </select>';
\thtml += '  <input type=\"text\" name=\"product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]\" value=\"\" placeholder=\"";
        // line 1675
        echo (isset($context["entry_weight"]) ? $context["entry_weight"] : null);
        echo "\" class=\"form-control\" /></td>';

\t\t\t\t// Product Option Image PRO module <<
\t\t\t\t";
        // line 1678
        if (((((array_key_exists("poip_installed", $context) &&  !(null === (isset($context["poip_installed"]) ? $context["poip_installed"] : null)))) ? ((isset($context["poip_installed"]) ? $context["poip_installed"] : null)) : (false)) &&  !$this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array"))) {
            // line 1679
            echo "\t\t\t\t\thtml += '<td><button type=\"button\" class=\"btn btn-default\" onclick=\"poip.addProductOptionImage('+option_row+', '+option_value_row+');\"><i class=\"fa fa-plus-circle\"></i></button><div id=\"option_images'+option_row+'_'+option_value_row+'\"></div></td>';
\t\t\t\t";
        }
        // line 1681
        echo "\t\t\t\t// >> Product Option Image PRO module
      
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(this).tooltip(\\'destroy\\');\$(\\'#option-value-row' + option_value_row + '\\').remove();\" data-toggle=\"tooltip\" rel=\"tooltip\" title=\"";
        // line 1683
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#option-value' + option_row + ' tbody').append(html);

\t\t\t\t// << Live Price
\t\t\t\t";
        // line 1689
        if ((((array_key_exists("liveprice_installed", $context) &&  !(null === (isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)))) ? ((isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)) : (0))) {
            // line 1690
            echo "\t\t\t\t\tvar ppm_option = \$('#option-value-row'+option_value_row).find('select[name*=price_prefix]').find('option[value=\"-\"]');
\t\t\t\t\tppm_option.before('<option value=\"+%\">+%</option>');
\t\t\t\t\tppm_option.before('<option value=\"-%\">&ndash;%</option>');
\t\t\t\t\tppm_option.before('<option value=\"=%\">=%</option>');
\t\t\t\t\tppm_option.before('<option value=\"*\">*</option>');
\t\t\t\t\tppm_option.before('<option value=\"/\">/</option>');
\t\t\t\t\tppm_option.before('<option value=\"=\">=</option>');
\t\t\t\t";
        }
        // line 1697
        echo "\t\t\t\t
\t\t\t\t// >> Live Price
\t\t\t
\t\$('[rel=tooltip]').tooltip();

\toption_value_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
var discount_row = ";
        // line 1706
        echo (isset($context["discount_row"]) ? $context["discount_row"] : null);
        echo ";

function addDiscount() {
\thtml  = '<tr id=\"discount-row' + discount_row + '\">';
    html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';

\t\t\t// << Live Price
\t\t\t";
        // line 1713
        if ((((array_key_exists("liveprice_installed", $context) &&  !(null === (isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)))) ? ((isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)) : (0))) {
            // line 1714
            echo "\t\t\t\thtml += '<option value=\"-1\">";
            echo (isset($context["liveprice_all_customers_groups"]) ? $context["liveprice_all_customers_groups"] : null);
            echo "</option>';
\t\t\t";
        }
        // line 1715
        echo "\t
\t\t\t// >> Live Price
\t\t\t
    ";
        // line 1718
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1719
            echo "    html += '    <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer_group"], "name", array()), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1721
        echo "    html += '  </select></td>';
    html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 1722
        echo (isset($context["entry_quantity"]) ? $context["entry_quantity"] : null);
        echo "\" class=\"form-control\" /></td>';
    html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1723
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\">';
\t\t\t\t// << Live Price
\t\t\t\t";
        // line 1726
        if ((((array_key_exists("liveprice_installed", $context) &&  !(null === (isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)))) ? ((isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)) : (0))) {
            // line 1727
            echo "\t\t\t\t\thtml += '<select name=\"product_discount[' + discount_row + '][price_prefix]\" class=\"form-control\">';
\t\t\t\t\thtml += '\t<option value=\"=\" >=</option>';
\t\t\t\t\thtml += '\t<option value=\"_\" >= %</option>';
\t\t\t\t\thtml += '\t<option value=\"%\" >&ndash; %</option>';
\t\t\t\t\thtml += '</select>';
\t\t\t\t";
        }
        // line 1733
        echo "\t\t\t\t// >> Live Price
\t\t\t\thtml += '<input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 1734
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
    html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1735
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\thtml += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1736
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1737
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#discount tbody').append(html);

\t\$('.date').datetimepicker({
\t\tpickTime: false
\t});

\tdiscount_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
var special_row = ";
        // line 1750
        echo (isset($context["special_row"]) ? $context["special_row"] : null);
        echo ";

function addSpecial() {
\thtml  = '<tr id=\"special-row' + special_row + '\">';
    html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';

\t\t\t\t// << Live Price
\t\t\t\thtml += '<option value=\"-1\">";
        // line 1757
        echo (isset($context["liveprice_all_customers_groups"]) ? $context["liveprice_all_customers_groups"] : null);
        echo "</option>';
\t\t\t\t// >> Live Price
\t\t\t
    ";
        // line 1760
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1761
            echo "    html += '      <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["customer_group"], "name", array()), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1763
        echo "    html += '  </select></td>';
    html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 1764
        echo (isset($context["entry_priority"]) ? $context["entry_priority"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-right\">'; // <--- !!!
\t\t\t\t// << Live Price
\t\t\t\t";
        // line 1767
        if ((((array_key_exists("liveprice_installed", $context) &&  !(null === (isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)))) ? ((isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)) : (0))) {
            // line 1768
            echo "\t\t\t\t\thtml += '<select name=\"product_special[' + special_row + '][price_prefix]\" class=\"form-control\">';
\t\t\t\t\thtml += '\t<option value=\"=\" >=</option>';
\t\t\t\t\thtml += '\t<option value=\"_\" >= %</option>';
\t\t\t\t\thtml += '\t<option value=\"%\" >&ndash; %</option>';
\t\t\t\t\thtml += '</select>';
\t\t\t\t";
        }
        // line 1774
        echo "\t\t\t\t// >> Live Price
\t\t\t\thtml += '<input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 1775
        echo (isset($context["entry_price"]) ? $context["entry_price"] : null);
        echo "\" class=\"form-control\" /></td>';
    html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 1776
        echo (isset($context["entry_date_start"]) ? $context["entry_date_start"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\thtml += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 1777
        echo (isset($context["entry_date_end"]) ? $context["entry_date_end"] : null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1778
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#special tbody').append(html);

\t\$('.date').datetimepicker({
\t\tlanguage: '";
        // line 1784
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\t\tpickTime: false
\t});

\tspecial_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
var image_row = ";
        // line 1792
        echo (isset($context["image_row"]) ? $context["image_row"] : null);
        echo ";

function addImage() {
\thtml  = '<tr id=\"image-row' + image_row + '\">';
\thtml += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 1796
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
        echo "\" /></a><input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"\" id=\"input-image' + image_row + '\" /></td>';

         ";
        // line 1798
        if ((((isset($context["pim_status"]) ? $context["pim_status"] : null) == true) &&  !(isset($context["pim_miu"]) ? $context["pim_miu"] : null))) {
            // line 1799
            echo "          html += '<td class=\"text-right\"><input type=\"radio\" name=\"def_img\" id=\"radio-input-image' + image_row + '\" value=\"\" disabled=\"disabled\" class=\"form-control\"></td>';   
         ";
        }
        // line 1801
        echo "        
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 1802
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1803
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';

\t\$('#images tbody').append(html);

\t\t\t\t<!-- Product Option Image PRO module << -->
\t\t\t\t";
        // line 1809
        if (((((array_key_exists("poip_installed", $context) &&  !(null === (isset($context["poip_installed"]) ? $context["poip_installed"] : null)))) ? ((isset($context["poip_installed"]) ? $context["poip_installed"] : null)) : (false)) && (((($this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array", true, true) &&  !(null === $this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array")))) ? ($this->getAttribute((isset($context["poip_global_settings"]) ? $context["poip_global_settings"] : null), "options_images_edit", array(), "array")) : (0)) == 1))) {
            // line 1810
            echo "\t\t\t\t\tpoip.displayImageOptions(image_row);
\t\t\t\t";
        }
        // line 1812
        echo "\t\t\t\t<!-- >> Product Option Image PRO module -->
\t\t\t

\timage_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
var recurring_row = ";
        // line 1819
        echo (isset($context["recurring_row"]) ? $context["recurring_row"] : null);
        echo ";

function addRecurring() {
\thtml  = '<tr id=\"recurring-row' + recurring_row + '\">';
\thtml += '  <td class=\"left\">';
\thtml += '    <select name=\"product_recurring[' + recurring_row + '][recurring_id]\" class=\"form-control\">>';
\t";
        // line 1825
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
            // line 1826
            echo "\thtml += '      <option value=\"";
            echo $this->getAttribute($context["recurring"], "recurring_id", array());
            echo "\">";
            echo $this->getAttribute($context["recurring"], "name", array());
            echo "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1828
        echo "\thtml += '    </select>';
\thtml += '  </td>';
\thtml += '  <td class=\"left\">';
\thtml += '    <select name=\"product_recurring[' + recurring_row + '][customer_group_id]\" class=\"form-control\">>';
\t";
        // line 1832
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 1833
            echo "\thtml += '      <option value=\"";
            echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
            echo "\">";
            echo $this->getAttribute($context["customer_group"], "name", array());
            echo "</option>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1835
        echo "\thtml += '    <select>';
\thtml += '  </td>';
\thtml += '  <td class=\"left\">';
\thtml += '    <a onclick=\"\$(\\'#recurring-row' + recurring_row + '\\').remove()\" data-toggle=\"tooltip\" title=\"";
        // line 1838
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>';
\thtml += '  </td>';
\thtml += '</tr>';

\t\$('#tab-recurring table tbody').append(html);

\trecurring_row++;
}
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 1849
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 1854
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 1859
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
\$('#option a:first').tab('show');
//--></script></div>

        <!-- << Parent-child Options -->
\t\t\t\t";
        // line 1870
        if ((((array_key_exists("pcop_installed", $context) &&  !(null === (isset($context["pcop_installed"]) ? $context["pcop_installed"] : null)))) ? ((isset($context["pcop_installed"]) ? $context["pcop_installed"] : null)) : (0))) {
            // line 1871
            echo "\t\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\t
\t\t\t\t\t\tpcop.all_product_options = ";
            // line 1873
            echo (((((array_key_exists("pcop_all_product_options", $context) &&  !(null === (isset($context["pcop_all_product_options"]) ? $context["pcop_all_product_options"] : null)))) ? ((isset($context["pcop_all_product_options"]) ? $context["pcop_all_product_options"] : null)) : (0))) ? (twig_jsonencode_filter((isset($context["pcop_all_product_options"]) ? $context["pcop_all_product_options"] : null))) : ("false"));
            echo ";
\t\t\t\t\t\tpcop.basic_product_options = ";
            // line 1874
            echo ((array_key_exists("product_options", $context)) ? (twig_jsonencode_filter((isset($context["product_options"]) ? $context["product_options"] : null))) : ("{}"));
            echo ";
\t\t\t\t\t\tpcop.texts = ";
            // line 1875
            echo ((array_key_exists("pcop_texts", $context)) ? (twig_jsonencode_filter((isset($context["pcop_texts"]) ? $context["pcop_texts"] : null))) : ("{}"));
            echo ";
\t\t\t\t\t\tpcop.init( ";
            // line 1876
            echo (isset($context["option_row"]) ? $context["option_row"] : null);
            echo " );
\t\t\t\t\t\t
\t\t\t\t\t\t";
            // line 1883
            echo "\t\t\t\t\t\t
\t\t\t\t\t//--></script>
\t\t\t\t";
        }
        // line 1886
        echo "        <!-- << Parent-child Options -->
      

        ";
        // line 1889
        if (((isset($context["pim_status"]) ? $context["pim_status"] : null) == true)) {
            // line 1890
            echo "        <script type=\"text/javascript\">
            if (typeof addMultiImage != 'function') {

              function addMultiImage(img) {
                    if (image_row>0) {
                        var k = (image_row-1);

                        if (\$('#input-image'+k).val() == \"\") {
                            \$('#image-row'+k).remove();
                        }
                    }
                      \$.ajax({
                        url: 'index.php?route=catalog/product/pimage&user_token=";
            // line 1902
            echo (isset($context["user_token"]) ? $context["user_token"] : null);
            echo "&image=' + encodeURIComponent(img),
                        dataType: 'json',
                        success: function(json) {

                          if (json.file) {
                          html  = '<tr id=\"image-row' + image_row + '\">';
                          html += '  <td class=\"text-left\"><a href=\"\" id=\"thumb-image' + image_row + '\"data-toggle=\"image\" class=\"img-thumbnail\">';
                          html += '<img src=\"'+json.file+'\" alt=\"\" title=\"\" data-placeholder=\"";
            // line 1909
            echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
            echo "\" />';
                          html+='<input type=\"hidden\" name=\"product_image[' + image_row + '][image]\" value=\"' + decodeURIComponent(json.abs) + '\" id=\"input-image' + image_row + '\" /></td>';
                          html += '<td class=\"text-right\"><input type=\"radio\" name=\"def_img\" value=\"'+json.abs+'\" class=\"form-control\"></td>';
  
                          html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_image[' + image_row + '][sort_order]\" value=\"\" placeholder=\"";
            // line 1913
            echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
            echo "\" class=\"form-control\" /></td>';
                          html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#image-row' + image_row  + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
            // line 1914
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
                          html += '</tr>';
                          \$('#images tbody').append(html);
                          image_row++;
                        }
                      }
                  });
              }
            }
        </script>
      ";
        }
        // line 1924
        echo "        
        
";
        // line 1926
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4242 => 1926,  4238 => 1924,  4224 => 1914,  4220 => 1913,  4213 => 1909,  4203 => 1902,  4189 => 1890,  4187 => 1889,  4182 => 1886,  4177 => 1883,  4172 => 1876,  4168 => 1875,  4164 => 1874,  4160 => 1873,  4156 => 1871,  4154 => 1870,  4140 => 1859,  4132 => 1854,  4124 => 1849,  4110 => 1838,  4105 => 1835,  4094 => 1833,  4090 => 1832,  4084 => 1828,  4073 => 1826,  4069 => 1825,  4060 => 1819,  4051 => 1812,  4047 => 1810,  4045 => 1809,  4036 => 1803,  4032 => 1802,  4029 => 1801,  4025 => 1799,  4023 => 1798,  4016 => 1796,  4009 => 1792,  3998 => 1784,  3989 => 1778,  3985 => 1777,  3981 => 1776,  3977 => 1775,  3974 => 1774,  3966 => 1768,  3964 => 1767,  3958 => 1764,  3955 => 1763,  3944 => 1761,  3940 => 1760,  3934 => 1757,  3924 => 1750,  3908 => 1737,  3904 => 1736,  3900 => 1735,  3896 => 1734,  3893 => 1733,  3885 => 1727,  3883 => 1726,  3877 => 1723,  3873 => 1722,  3870 => 1721,  3859 => 1719,  3855 => 1718,  3850 => 1715,  3844 => 1714,  3842 => 1713,  3832 => 1706,  3821 => 1697,  3811 => 1690,  3809 => 1689,  3800 => 1683,  3796 => 1681,  3792 => 1679,  3790 => 1678,  3784 => 1675,  3776 => 1670,  3768 => 1665,  3759 => 1659,  3755 => 1658,  3750 => 1656,  3740 => 1649,  3727 => 1639,  3719 => 1634,  3711 => 1629,  3695 => 1615,  3691 => 1614,  3689 => 1613,  3683 => 1609,  3679 => 1607,  3677 => 1606,  3651 => 1587,  3633 => 1578,  3629 => 1577,  3625 => 1576,  3621 => 1575,  3617 => 1574,  3613 => 1573,  3601 => 1564,  3597 => 1563,  3588 => 1557,  3584 => 1556,  3575 => 1550,  3571 => 1549,  3562 => 1543,  3558 => 1542,  3549 => 1536,  3545 => 1535,  3536 => 1529,  3532 => 1528,  3523 => 1522,  3519 => 1521,  3514 => 1519,  3488 => 1496,  3480 => 1491,  3452 => 1466,  3435 => 1452,  3432 => 1451,  3415 => 1449,  3411 => 1448,  3406 => 1446,  3399 => 1442,  3370 => 1416,  3338 => 1387,  3306 => 1358,  3274 => 1329,  3249 => 1307,  3241 => 1302,  3216 => 1279,  3206 => 1274,  3200 => 1273,  3191 => 1269,  3187 => 1267,  3178 => 1263,  3174 => 1261,  3171 => 1260,  3167 => 1259,  3160 => 1255,  3156 => 1254,  3153 => 1253,  3149 => 1252,  3142 => 1248,  3138 => 1247,  3126 => 1237,  3118 => 1234,  3111 => 1233,  3105 => 1232,  3103 => 1231,  3090 => 1229,  3081 => 1228,  3077 => 1227,  3073 => 1226,  3070 => 1225,  3066 => 1224,  3059 => 1220,  3055 => 1219,  3047 => 1214,  3039 => 1208,  3028 => 1205,  3024 => 1204,  3021 => 1203,  3017 => 1202,  3009 => 1197,  3005 => 1196,  2993 => 1189,  2986 => 1187,  2971 => 1179,  2967 => 1177,  2963 => 1175,  2961 => 1174,  2952 => 1167,  2946 => 1166,  2944 => 1165,  2940 => 1163,  2932 => 1160,  2929 => 1159,  2927 => 1158,  2918 => 1154,  2910 => 1153,  2907 => 1152,  2901 => 1150,  2899 => 1149,  2890 => 1147,  2882 => 1146,  2877 => 1145,  2872 => 1144,  2870 => 1143,  2861 => 1137,  2858 => 1136,  2854 => 1134,  2852 => 1133,  2846 => 1129,  2840 => 1127,  2838 => 1126,  2832 => 1123,  2820 => 1114,  2814 => 1113,  2806 => 1108,  2792 => 1097,  2785 => 1092,  2779 => 1091,  2777 => 1090,  2770 => 1088,  2759 => 1084,  2747 => 1079,  2738 => 1077,  2735 => 1076,  2729 => 1073,  2725 => 1072,  2721 => 1071,  2716 => 1070,  2714 => 1069,  2705 => 1067,  2700 => 1064,  2694 => 1063,  2685 => 1059,  2681 => 1057,  2672 => 1053,  2668 => 1051,  2665 => 1050,  2661 => 1049,  2652 => 1043,  2646 => 1040,  2641 => 1039,  2636 => 1038,  2634 => 1037,  2625 => 1031,  2621 => 1030,  2617 => 1029,  2613 => 1028,  2609 => 1027,  2595 => 1016,  2588 => 1011,  2582 => 1010,  2580 => 1009,  2573 => 1007,  2562 => 1003,  2550 => 998,  2541 => 996,  2537 => 994,  2532 => 991,  2528 => 989,  2526 => 988,  2522 => 986,  2518 => 984,  2516 => 983,  2512 => 981,  2508 => 979,  2506 => 978,  2500 => 976,  2498 => 975,  2489 => 973,  2481 => 972,  2478 => 971,  2472 => 970,  2464 => 968,  2456 => 966,  2453 => 965,  2449 => 964,  2445 => 962,  2439 => 960,  2437 => 959,  2431 => 956,  2426 => 955,  2421 => 954,  2419 => 953,  2410 => 947,  2406 => 946,  2402 => 945,  2398 => 944,  2394 => 943,  2390 => 942,  2376 => 931,  2369 => 926,  2363 => 925,  2361 => 924,  2354 => 922,  2349 => 919,  2343 => 918,  2334 => 914,  2330 => 912,  2321 => 908,  2317 => 906,  2314 => 905,  2310 => 904,  2304 => 901,  2299 => 898,  2293 => 897,  2284 => 893,  2280 => 891,  2271 => 887,  2267 => 885,  2264 => 884,  2260 => 883,  2254 => 880,  2249 => 879,  2244 => 878,  2242 => 877,  2233 => 871,  2229 => 870,  2213 => 861,  2211 => 860,  2208 => 859,  2202 => 856,  2199 => 855,  2187 => 851,  2183 => 849,  2178 => 848,  2176 => 847,  2170 => 844,  2156 => 839,  2149 => 834,  2143 => 833,  2141 => 832,  2134 => 830,  2130 => 828,  2122 => 825,  2112 => 822,  2109 => 821,  2105 => 819,  2088 => 817,  2084 => 816,  2081 => 815,  2078 => 814,  2076 => 813,  2064 => 810,  2059 => 807,  2051 => 801,  2043 => 795,  2040 => 794,  2032 => 788,  2024 => 782,  2022 => 781,  2014 => 778,  2004 => 777,  1999 => 774,  1991 => 768,  1983 => 762,  1980 => 761,  1972 => 755,  1964 => 749,  1962 => 748,  1954 => 745,  1944 => 744,  1939 => 741,  1931 => 735,  1923 => 729,  1921 => 728,  1916 => 725,  1911 => 723,  1907 => 722,  1903 => 721,  1899 => 720,  1895 => 719,  1890 => 718,  1888 => 717,  1883 => 714,  1875 => 708,  1867 => 702,  1865 => 701,  1857 => 698,  1852 => 695,  1845 => 691,  1841 => 690,  1837 => 688,  1830 => 684,  1826 => 683,  1822 => 681,  1820 => 680,  1812 => 677,  1802 => 676,  1794 => 675,  1791 => 674,  1788 => 672,  1778 => 671,  1775 => 670,  1769 => 665,  1766 => 664,  1760 => 663,  1751 => 659,  1747 => 657,  1738 => 653,  1734 => 651,  1732 => 650,  1729 => 649,  1725 => 648,  1722 => 647,  1720 => 646,  1712 => 643,  1707 => 642,  1703 => 641,  1696 => 636,  1688 => 635,  1684 => 634,  1680 => 633,  1676 => 632,  1672 => 631,  1668 => 630,  1662 => 627,  1659 => 626,  1656 => 625,  1640 => 618,  1632 => 615,  1629 => 614,  1626 => 613,  1610 => 606,  1602 => 603,  1599 => 602,  1596 => 601,  1580 => 594,  1572 => 591,  1569 => 590,  1566 => 589,  1553 => 585,  1546 => 583,  1543 => 582,  1540 => 581,  1527 => 577,  1520 => 575,  1517 => 574,  1514 => 573,  1501 => 569,  1494 => 567,  1491 => 566,  1489 => 565,  1482 => 560,  1475 => 556,  1471 => 555,  1467 => 553,  1460 => 549,  1456 => 548,  1452 => 546,  1450 => 545,  1442 => 542,  1435 => 540,  1428 => 538,  1422 => 537,  1416 => 536,  1410 => 535,  1406 => 533,  1395 => 529,  1391 => 527,  1389 => 526,  1382 => 523,  1377 => 522,  1374 => 521,  1372 => 520,  1364 => 515,  1361 => 514,  1355 => 513,  1353 => 512,  1342 => 511,  1337 => 510,  1335 => 509,  1322 => 499,  1315 => 494,  1309 => 493,  1307 => 492,  1300 => 490,  1297 => 489,  1282 => 487,  1273 => 486,  1269 => 485,  1263 => 484,  1255 => 483,  1250 => 482,  1245 => 481,  1243 => 480,  1234 => 474,  1230 => 473,  1219 => 464,  1210 => 462,  1203 => 461,  1199 => 460,  1195 => 459,  1188 => 457,  1182 => 453,  1173 => 451,  1166 => 450,  1162 => 449,  1158 => 448,  1151 => 446,  1145 => 442,  1137 => 440,  1132 => 439,  1127 => 438,  1122 => 436,  1117 => 435,  1115 => 434,  1112 => 433,  1108 => 432,  1103 => 430,  1097 => 426,  1088 => 424,  1081 => 423,  1077 => 422,  1073 => 421,  1066 => 419,  1060 => 415,  1051 => 413,  1044 => 412,  1040 => 411,  1036 => 410,  1029 => 408,  1022 => 404,  1016 => 403,  1009 => 401,  998 => 395,  993 => 393,  985 => 387,  978 => 383,  974 => 382,  970 => 380,  963 => 376,  959 => 375,  955 => 373,  953 => 372,  945 => 367,  937 => 361,  931 => 360,  922 => 356,  918 => 354,  909 => 350,  905 => 348,  902 => 347,  898 => 346,  890 => 341,  881 => 337,  876 => 335,  868 => 329,  862 => 328,  853 => 324,  849 => 322,  840 => 318,  836 => 316,  833 => 315,  829 => 314,  821 => 309,  810 => 303,  802 => 300,  794 => 297,  787 => 293,  775 => 286,  769 => 283,  763 => 279,  758 => 278,  755 => 277,  750 => 275,  747 => 274,  745 => 273,  742 => 272,  737 => 271,  734 => 270,  729 => 268,  726 => 267,  724 => 266,  719 => 264,  711 => 258,  705 => 257,  696 => 253,  692 => 251,  683 => 247,  679 => 245,  676 => 244,  672 => 243,  662 => 238,  654 => 232,  647 => 228,  643 => 227,  639 => 225,  632 => 221,  628 => 220,  624 => 218,  622 => 217,  614 => 212,  605 => 208,  598 => 206,  589 => 202,  584 => 200,  576 => 194,  570 => 193,  561 => 189,  557 => 187,  548 => 183,  544 => 181,  541 => 180,  537 => 179,  531 => 176,  525 => 173,  516 => 169,  511 => 167,  502 => 163,  497 => 161,  488 => 157,  481 => 155,  472 => 151,  465 => 149,  456 => 145,  449 => 143,  440 => 139,  433 => 137,  424 => 133,  417 => 131,  408 => 127,  401 => 125,  396 => 122,  390 => 121,  388 => 120,  382 => 119,  377 => 117,  371 => 113,  354 => 109,  345 => 107,  332 => 103,  325 => 101,  312 => 97,  305 => 95,  300 => 92,  294 => 91,  292 => 90,  282 => 89,  275 => 87,  260 => 83,  253 => 81,  248 => 78,  242 => 77,  240 => 76,  230 => 75,  223 => 73,  217 => 71,  213 => 70,  210 => 69,  193 => 67,  189 => 66,  181 => 61,  177 => 60,  173 => 59,  169 => 58,  165 => 57,  161 => 56,  157 => 55,  153 => 54,  149 => 53,  145 => 52,  141 => 51,  137 => 50,  132 => 48,  126 => 45,  122 => 43,  114 => 39,  112 => 38,  107 => 35,  96 => 33,  92 => 32,  87 => 30,  81 => 29,  77 => 28,  70 => 23,  61 => 17,  57 => 16,  53 => 15,  49 => 14,  45 => 13,  41 => 12,  37 => 11,  31 => 7,  29 => 6,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* */
/* 				<!-- Product Option Image PRO module << -->*/
/* 				{% if (poip_installed ?? false) %}*/
/* 				{# {% if (poip_installed ?? false) and ( (poip_global_settings['options_images_edit'] ?? 0) == 1 ) %} #}*/
/* 					*/
/* 					<script type="text/javascript"><!--*/
/* 						$().ready(function(){*/
/* 							poip.init({*/
/* 								product_options 								: {{ (product_options ?? false)|json_encode }},*/
/* 								option_values 									: {{ (option_values ?? false)|json_encode }},*/
/* 								texts 													: {{ (poip_texts ?? false)|json_encode }},*/
/* 								settings_details 								: {{ (poip_settings_details ?? false)|json_encode }},*/
/* 								settings_enable_disable_options : {{ (poip_settings_enable_disable_options ?? false)|json_encode }},*/
/* 								saved_settings									: {{ poip_saved_settings|json_encode }},*/
/* 								image_placeholder 							: '{{ placeholder }}',*/
/* 							});*/
/* 						});*/
/* 					//--></script>*/
/* 						*/
/* 				{% endif %}*/
/* 				<!-- >> Product Option Image PRO module -->*/
/* 			*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-product" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-product" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             <li><a href="#tab-data" data-toggle="tab">{{ tab_data }}</a></li>*/
/*             <li><a href="#tab-links" data-toggle="tab">{{ tab_links }}</a></li>*/
/*             <li><a href="#tab-attribute" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*             <li><a href="#tab-option" data-toggle="tab">{{ tab_option }}</a></li>*/
/*             <li><a href="#tab-recurring" data-toggle="tab">{{ tab_recurring }}</a></li>*/
/*             <li><a href="#tab-discount" data-toggle="tab">{{ tab_discount }}</a></li>*/
/*             <li><a href="#tab-special" data-toggle="tab">{{ tab_special }}</a></li>*/
/*             <li><a href="#tab-image" data-toggle="tab">{{ tab_image }}</a></li>*/
/*             <li><a href="#tab-reward" data-toggle="tab">{{ tab_reward }}</a></li>*/
/*             <li><a href="#tab-seo" data-toggle="tab">{{ tab_seo }}</a></li>*/
/*             <li><a href="#tab-design" data-toggle="tab">{{ tab_design }}</a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <ul class="nav nav-tabs" id="language">*/
/*                 {% for language in languages %}*/
/*                 <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*               <div class="tab-content">{% for language in languages %}*/
/*                 <div class="tab-pane" id="language{{ language.language_id }}">*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-name{{ language.language_id }}">{{ entry_name }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="product_description[{{ language.language_id }}][name]" value="{{ product_description[language.language_id] ? product_description[language.language_id].name }}" placeholder="{{ entry_name }}" id="input-name{{ language.language_id }}" class="form-control" />*/
/*                       {% if error_name[language.language_id] %}*/
/*                       <div class="text-danger">{{ error_name[language.language_id] }}</div>*/
/*                       {% endif %} </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-description{{ language.language_id }}">{{ entry_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="product_description[{{ language.language_id }}][description]" placeholder="{{ entry_description }}" id="input-description{{ language.language_id }}" data-toggle="summernote" data-lang="{{ summernote }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].description }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group required">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-title{{ language.language_id }}">{{ entry_meta_title }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="product_description[{{ language.language_id }}][meta_title]" value="{{ product_description[language.language_id] ? product_description[language.language_id].meta_title }}" placeholder="{{ entry_meta_title }}" id="input-meta-title{{ language.language_id }}" class="form-control" />*/
/*                       {% if error_meta_title[language.language_id] %}*/
/*                       <div class="text-danger">{{ error_meta_title[language.language_id] }}</div>*/
/*                       {% endif %} </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-description{{ language.language_id }}">{{ entry_meta_description }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="product_description[{{ language.language_id }}][meta_description]" rows="5" placeholder="{{ entry_meta_description }}" id="input-meta-description{{ language.language_id }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].meta_description }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-meta-keyword{{ language.language_id }}">{{ entry_meta_keyword }}</label>*/
/*                     <div class="col-sm-10">*/
/*                       <textarea name="product_description[{{ language.language_id }}][meta_keyword]" rows="5" placeholder="{{ entry_meta_keyword }}" id="input-meta-keyword{{ language.language_id }}" class="form-control">{{ product_description[language.language_id] ? product_description[language.language_id].meta_keyword }}</textarea>*/
/*                     </div>*/
/*                   </div>*/
/*                   <div class="form-group">*/
/*                     <label class="col-sm-2 control-label" for="input-tag{{ language.language_id }}"><span data-toggle="tooltip" title="{{ help_tag }}">{{ entry_tag }}</span></label>*/
/*                     <div class="col-sm-10">*/
/*                       <input type="text" name="product_description[{{ language.language_id }}][tag]" value="{{ product_description[language.language_id] ? product_description[language.language_id].tag }}" placeholder="{{ entry_tag }}" id="input-tag{{ language.language_id }}" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 {% endfor %}</div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-data">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-model">{{ entry_model }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="model" value="{{ model }}" placeholder="{{ entry_model }}" id="input-model" class="form-control" />*/
/*                   {% if error_model %}*/
/*                   <div class="text-danger">{{ error_model }}</div>*/
/*                   {% endif %}</div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sku"><span data-toggle="tooltip" title="{{ help_sku }}">{{ entry_sku }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="sku" value="{{ sku }}" placeholder="{{ entry_sku }}" id="input-sku" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-upc"><span data-toggle="tooltip" title="{{ help_upc }}">{{ entry_upc }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="upc" value="{{ upc }}" placeholder="{{ entry_upc }}" id="input-upc" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-ean"><span data-toggle="tooltip" title="{{ help_ean }}">{{ entry_ean }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="ean" value="{{ ean }}" placeholder="{{ entry_ean }}" id="input-ean" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-jan"><span data-toggle="tooltip" title="{{ help_jan }}">{{ entry_jan }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="jan" value="{{ jan }}" placeholder="{{ entry_jan }}" id="input-jan" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-isbn"><span data-toggle="tooltip" title="{{ help_isbn }}">{{ entry_isbn }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="isbn" value="{{ isbn }}" placeholder="{{ entry_isbn }}" id="input-isbn" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-mpn"><span data-toggle="tooltip" title="{{ help_mpn }}">{{ entry_mpn }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="mpn" value="{{ mpn }}" placeholder="{{ entry_mpn }}" id="input-mpn" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-location">{{ entry_location }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="location" value="{{ location }}" placeholder="{{ entry_location }}" id="input-location" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-price">{{ entry_price }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="price" value="{{ price }}" placeholder="{{ entry_price }}" id="input-price" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-tax-class">{{ entry_tax_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="tax_class_id" id="input-tax-class" class="form-control">*/
/*                     <option value="0">{{ text_none }}</option>*/
/*                     */
/* */
/*                     {% for tax_class in tax_classes %}*/
/*                     {% if tax_class.tax_class_id == tax_class_id %}*/
/* */
/*                     */
/*                     <option value="{{ tax_class.tax_class_id }}" selected="selected">{{ tax_class.title }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="{{ tax_class.tax_class_id }}">{{ tax_class.title }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-quantity">{{ entry_quantity }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="quantity" value="{{ quantity }}" placeholder="{{ entry_quantity }}" id="input-quantity" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-minimum"><span data-toggle="tooltip" title="{{ help_minimum }}">{{ entry_minimum }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="minimum" value="{{ minimum }}" placeholder="{{ entry_minimum }}" id="input-minimum" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-subtract">{{ entry_subtract }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="subtract" id="input-subtract" class="form-control">*/
/*                     */
/* */
/*                     {% if subtract %}*/
/* */
/*                     */
/*                     <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                     <option value="0">{{ text_no }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="1">{{ text_yes }}</option>*/
/*                     <option value="0" selected="selected">{{ text_no }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-stock-status"><span data-toggle="tooltip" title="{{ help_stock_status }}">{{ entry_stock_status }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="stock_status_id" id="input-stock-status" class="form-control">*/
/*                     */
/* */
/*                     {% for stock_status in stock_statuses %}*/
/*                     {% if stock_status.stock_status_id == stock_status_id %}*/
/* */
/*                     */
/*                     <option value="{{ stock_status.stock_status_id }}" selected="selected">{{ stock_status.name }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="{{ stock_status.stock_status_id }}">{{ stock_status.name }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_shipping }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <label class="radio-inline"> {% if shipping %}*/
/*                     <input type="radio" name="shipping" value="1" checked="checked" />*/
/*                     {{ text_yes }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="shipping" value="1" />*/
/*                     {{ text_yes }}*/
/*                     {% endif %} </label>*/
/*                   <label class="radio-inline"> {% if not shipping %}*/
/*                     <input type="radio" name="shipping" value="0" checked="checked" />*/
/*                     {{ text_no }}*/
/*                     {% else %}*/
/*                     <input type="radio" name="shipping" value="0" />*/
/*                     {{ text_no }}*/
/*                     {% endif %} </label>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-date-available">{{ entry_date_available }}</label>*/
/*                 <div class="col-sm-3">*/
/*                   <div class="input-group date">*/
/*                     <input type="text" name="date_available" value="{{ date_available }}" placeholder="{{ entry_date_available }}" data-date-format="YYYY-MM-DD" id="input-date-available" class="form-control" />*/
/*                     <span class="input-group-btn">*/
/*                     <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                     </span></div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length">{{ entry_dimension }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="length" value="{{ length }}" placeholder="{{ entry_length }}" id="input-length" class="form-control" />*/
/*                     </div>*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="width" value="{{ width }}" placeholder="{{ entry_width }}" id="input-width" class="form-control" />*/
/*                     </div>*/
/*                     <div class="col-sm-4">*/
/*                       <input type="text" name="height" value="{{ height }}" placeholder="{{ entry_height }}" id="input-height" class="form-control" />*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-length-class">{{ entry_length_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="length_class_id" id="input-length-class" class="form-control">*/
/*                     */
/* */
/*                     {% for length_class in length_classes %}*/
/*                     {% if length_class.length_class_id == length_class_id %}*/
/* */
/*                     */
/*                     <option value="{{ length_class.length_class_id }}" selected="selected">{{ length_class.title }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="{{ length_class.length_class_id }}">{{ length_class.title }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight">{{ entry_weight }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="weight" value="{{ weight }}" placeholder="{{ entry_weight }}" id="input-weight" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-weight-class">{{ entry_weight_class }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="weight_class_id" id="input-weight-class" class="form-control">*/
/*                     */
/* */
/*                     {% for weight_class in weight_classes %}*/
/*                     {% if weight_class.weight_class_id == weight_class_id %}*/
/* */
/*                     */
/*                     <option value="{{ weight_class.weight_class_id }}" selected="selected">{{ weight_class.title }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="{{ weight_class.weight_class_id }}">{{ weight_class.title }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="status" id="input-status" class="form-control">*/
/*                     */
/* */
/*                     {% if status %}*/
/* */
/*                     */
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     */
/* */
/*                     {% else %}*/
/* */
/*                     */
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     */
/* */
/*                     {% endif %}*/
/* */
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="sort_order" value="{{ sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-links">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-manufacturer"><span data-toggle="tooltip" title="{{ help_manufacturer }}">{{ entry_manufacturer }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="manufacturer" value="{{ manufacturer }}" placeholder="{{ entry_manufacturer }}" id="input-manufacturer" class="form-control" />*/
/*                   <input type="hidden" name="manufacturer_id" value="{{ manufacturer_id }}" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-category"><span data-toggle="tooltip" title="{{ help_category }}">{{ entry_category }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="category" value="" placeholder="{{ entry_category }}" id="input-category" class="form-control" />*/
/*                   <div id="product-category" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_category in product_categories %}*/
/*                     <div id="product-category{{ product_category.category_id }}"><i class="fa fa-minus-circle"></i> {{ product_category.name }}*/
/*                       <input type="hidden" name="product_category[]" value="{{ product_category.category_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-filter"><span data-toggle="tooltip" title="{{ help_filter }}">{{ entry_filter }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="filter" value="" placeholder="{{ entry_filter }}" id="input-filter" class="form-control" />*/
/*                   <div id="product-filter" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_filter in product_filters %}*/
/*                     <div id="product-filter{{ product_filter.filter_id }}"><i class="fa fa-minus-circle"></i> {{ product_filter.name }}*/
/*                       <input type="hidden" name="product_filter[]" value="{{ product_filter.filter_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label">{{ entry_store }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="well well-sm" style="height: 150px; overflow: auto;"> {% for store in stores %}*/
/*                     <div class="checkbox">*/
/*                       <label> {% if store.store_id in product_store %}*/
/*                         <input type="checkbox" name="product_store[]" value="{{ store.store_id }}" checked="checked" />*/
/*                         {{ store.name }}*/
/*                         {% else %}*/
/*                         <input type="checkbox" name="product_store[]" value="{{ store.store_id }}" />*/
/*                         {{ store.name }}*/
/*                         {% endif %} </label>*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-download"><span data-toggle="tooltip" title="{{ help_download }}">{{ entry_download }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="download" value="" placeholder="{{ entry_download }}" id="input-download" class="form-control" />*/
/*                   <div id="product-download" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_download in product_downloads %}*/
/*                     <div id="product-download{{ product_download.download_id }}"><i class="fa fa-minus-circle"></i> {{ product_download.name }}*/
/*                       <input type="hidden" name="product_download[]" value="{{ product_download.download_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-related"><span data-toggle="tooltip" title="{{ help_related }}">{{ entry_related }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="related" value="" placeholder="{{ entry_related }}" id="input-related" class="form-control" />*/
/*                   <div id="product-related" class="well well-sm" style="height: 150px; overflow: auto;"> {% for product_related in product_relateds %}*/
/*                     <div id="product-related{{ product_related.product_id }}"><i class="fa fa-minus-circle"></i> {{ product_related.name }}*/
/*                       <input type="hidden" name="product_related[]" value="{{ product_related.product_id }}" />*/
/*                     </div>*/
/*                     {% endfor %}</div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-attribute">*/
/*               <div class="table-responsive">*/
/*                 <table id="attribute" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_attribute }}</td>*/
/*                       <td class="text-left">{{ entry_text }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% set attribute_row = 0 %}*/
/*                   {% for product_attribute in product_attributes %}*/
/*                   <tr id="attribute-row{{ attribute_row }}">*/
/*                     <td class="text-left" style="width: 40%;"><input type="text" name="product_attribute[{{ attribute_row }}][name]" value="{{ product_attribute.name }}" placeholder="{{ entry_attribute }}" class="form-control" />*/
/*                       <input type="hidden" name="product_attribute[{{ attribute_row }}][attribute_id]" value="{{ product_attribute.attribute_id }}" /></td>*/
/*                     <td class="text-left">{% for language in languages %}*/
/*                       <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                         <textarea name="product_attribute[{{ attribute_row }}][product_attribute_description][{{ language.language_id }}][text]" rows="5" placeholder="{{ entry_text }}" class="form-control">{{ product_attribute.product_attribute_description[language.language_id] ? product_attribute.product_attribute_description[language.language_id].text }}</textarea>*/
/*                       </div>*/
/*                       {% endfor %}</td>*/
/*                     <td class="text-right"><button type="button" onclick="$('#attribute-row{{ attribute_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set attribute_row = attribute_row + 1 %}*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-right"><button type="button" onclick="addAttribute();" data-toggle="tooltip" title="{{ button_attribute_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-option">*/
/*               <div class="row">*/
/*                 <div class="col-sm-2">*/
/*                   <ul class="nav nav-pills nav-stacked" id="option">*/
/*                     {% set option_row = 0 %}*/
/*                     {% for product_option in product_options %}*/
/*                     <li><a href="#tab-option{{ option_row }}" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('a[href=\'#tab-option{{ option_row }}\']').parent().remove(); $('#tab-option{{ option_row }}').remove(); $('#option a:first').tab('show');"></i> {{ product_option.name }}</a></li>*/
/*                     {% set option_row = option_row + 1 %}*/
/*                     {% endfor %}*/
/*                     <li>*/
/*                       <input type="text" name="option" value="" placeholder="{{ entry_option }}" id="input-option" class="form-control" />*/
/*                     </li>*/
/*                   </ul>*/
/*                 </div>*/
/*                 <div class="col-sm-10">*/
/*                   <div class="tab-content"> {% set option_row = 0 %}*/
/*                     {% set option_value_row = 0 %}*/
/*                     {% for product_option in product_options %}*/
/*                     <div class="tab-pane" id="tab-option{{ option_row }}">*/
/* */
/* 				<!-- // << Product Option Image PRO module -->*/
/* 				{% if poip_installed ?? false %}*/
/* 					<script type="text/javascript"><!--*/
/* 						$().ready(function(){*/
/* 							poip.displayProductOptionSettings( {{ option_row }}, '{{ product_option.type }}', {{ product_option.product_option_id }} );*/
/* 						});*/
/* 					//--></script>*/
/* 				{% endif %}*/
/* 				<!-- // >> Product Option Image PRO module -->*/
/*       */
/*                       <input type="hidden" name="product_option[{{ option_row }}][product_option_id]" value="{{ product_option.product_option_id }}" />*/
/*                       <input type="hidden" name="product_option[{{ option_row }}][name]" value="{{ product_option.name }}" />*/
/*                       <input type="hidden" name="product_option[{{ option_row }}][option_id]" value="{{ product_option.option_id }}" />*/
/*                       <input type="hidden" name="product_option[{{ option_row }}][type]" value="{{ product_option.type }}" />*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-required{{ option_row }}">{{ entry_required }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <select name="product_option[{{ option_row }}][required]" id="input-required{{ option_row }}" class="form-control">*/
/*                             */
/* */
/*                             {% if product_option.required %}*/
/* */
/*                             */
/*                             <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                             <option value="0">{{ text_no }}</option>*/
/*                             */
/* */
/*                             {% else %}*/
/* */
/*                             */
/*                             <option value="1">{{ text_yes }}</option>*/
/*                             <option value="0" selected="selected">{{ text_no }}</option>*/
/*                             */
/* */
/*                             {% endif %}*/
/* */
/*                           */
/*                           </select>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% if product_option.type == 'text' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control" />*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'textarea' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <textarea name="product_option[{{ option_row }}][value]" rows="5" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control">{{ product_option.value }}</textarea>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'file' %}*/
/*                       <div class="form-group" style="display: none;">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" id="input-value{{ option_row }}" class="form-control" />*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'date' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-3">*/
/*                           <div class="input-group date">*/
/*                             <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD" id="input-value{{ option_row }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'time' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group time">*/
/*                             <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="HH:mm" id="input-value{{ option_row }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'datetime' %}*/
/*                       <div class="form-group">*/
/*                         <label class="col-sm-2 control-label" for="input-value{{ option_row }}">{{ entry_option_value }}</label>*/
/*                         <div class="col-sm-10">*/
/*                           <div class="input-group datetime">*/
/*                             <input type="text" name="product_option[{{ option_row }}][value]" value="{{ product_option.value }}" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-value{{ option_row }}" class="form-control" />*/
/*                             <span class="input-group-btn">*/
/*                             <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                             </span></div>*/
/*                         </div>*/
/*                       </div>*/
/*                       {% endif %}*/
/*                       {% if product_option.type == 'select' or product_option.type == 'radio' or product_option.type == 'checkbox' or product_option.type == 'image' %}*/
/*                       <div class="table-responsive">*/
/*                         <table id="option-value{{ option_row }}" class="table table-striped table-bordered table-hover">*/
/*                           <thead>*/
/*                             <tr>*/
/*                               <td class="text-left">{{ entry_option_value }}</td>*/
/*                               <td class="text-right">{{ entry_quantity }}</td>*/
/*                               <td class="text-left">{{ entry_subtract }}</td>*/
/*                               <td class="text-right">{{ entry_price }}</td>*/
/*                               <td class="text-right">{{ entry_option_points }}</td>*/
/*                               <td class="text-right">{{ entry_weight }}</td> {% if (poip_installed ?? false) and not(poip_global_settings['options_images_edit']) %} <td class="text-left" style="width:240px;">{{ entry_image }}</td>{% endif %}*/
/*                               <td></td>*/
/*                             </tr>*/
/*                           </thead>*/
/*                           <tbody>*/
/*                           */
/*                           {% for product_option_value in product_option.product_option_value %}*/
/*                           <tr id="option-value-row{{ option_value_row }}">*/
/*                             <td class="text-left"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][option_value_id]" class="form-control">*/
/*                                 */
/* */
/*                                   {% if option_values[product_option.option_id] %}*/
/* */
/*                                   {% for option_value in option_values[product_option.option_id] %}*/
/* */
/*                                   {% if option_value.option_value_id == product_option_value.option_value_id %}*/
/* */
/*                                 */
/*                                 <option value="{{ option_value.option_value_id }}" selected="selected">{{ option_value.name }}</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="{{ option_value.option_value_id }}">{{ option_value.name }}</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/*                                   {% endfor %}*/
/*                                   {% endif %}*/
/* */
/*                               */
/*                               </select>*/
/* */
/* 				{# // << Parent-child Options #}*/
/* 				{% if ( (pcop_installed ?? false) and (product_option_value.product_option_value_temp_id ?? false) ) %}*/
/* 					<input type="hidden" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][product_option_value_temp_id]" value="{{ product_option_value.product_option_value_temp_id }}" />*/
/* 				{% endif %}	*/
/* 				{# // >> Parent-child Options #}*/
/*       */
/*                               <input type="hidden" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][product_option_value_id]" value="{{ product_option_value.product_option_value_id }}" /></td>*/
/*                             <td class="text-right"><input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][quantity]" value="{{ product_option_value.quantity }}" placeholder="{{ entry_quantity }}" class="form-control" /></td>*/
/*                             <td class="text-left"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][subtract]" class="form-control">*/
/*                                 */
/* */
/*                                   {% if product_option_value.subtract %}*/
/* */
/*                                 */
/*                                 <option value="1" selected="selected">{{ text_yes }}</option>*/
/*                                 <option value="0">{{ text_no }}</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="1">{{ text_yes }}</option>*/
/*                                 <option value="0" selected="selected">{{ text_no }}</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/* */
/*                               */
/*                               </select></td>*/
/*                             <td class="text-right"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price_prefix]" class="form-control">*/
/*                                 */
/* */
/*                                   {% if product_option_value.price_prefix == '+' %}*/
/* */
/*                                 */
/*                                 <option value="+" selected="selected">+</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="+">+</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/* */
/* 				<!-- << Live Price -->*/
/* 				*/
/* 				{% if liveprice_installed ?? 0 %}*/
/* 					<option value="+%" {{ (product_option_value['price_prefix']=='%' or product_option_value['price_prefix']=='+%') ? 'selected' : '' }}>+%</option>*/
/* 					<option value="-%" {{ product_option_value['price_prefix']=='-%' ? 'selected' : '' }}>&ndash;%</option>*/
/* 					<option value="=%" {{ product_option_value['price_prefix']=='=%' ? 'selected' : '' }}>=%</option>*/
/* 					<option value="*" {{ product_option_value['price_prefix']=='*' ? 'selected' : '' }}>*</option>*/
/* 					<option value="/" {{ product_option_value['price_prefix']=='/' ? 'selected' : '' }}>/</option>*/
/* 					<option value="=" {{ product_option_value['price_prefix']=='=' ? 'selected' : '' }}>=</option>*/
/* 				{% endif %}*/
/* 				*/
/* 				<!-- >> Live Price -->*/
/* 			*/
/*                                   {% if product_option_value.price_prefix == '-' %}*/
/* */
/*                                 */
/*                                 <option value="-" selected="selected">-</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="-">-</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/* */
/*                               */
/*                               </select>*/
/*                               <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][price]" value="{{ product_option_value.price }}" placeholder="{{ entry_price }}" class="form-control" /></td>*/
/*                             <td class="text-right"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points_prefix]" class="form-control">*/
/*                                 */
/* */
/*                                   {% if product_option_value.points_prefix == '+' %}*/
/* */
/*                                 */
/*                                 <option value="+" selected="selected">+</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="+">+</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/*                                   {% if product_option_value.points_prefix == '-' %}*/
/* */
/*                                 */
/*                                 <option value="-" selected="selected">-</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="-">-</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/* */
/*                               */
/*                               </select>*/
/*                               <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][points]" value="{{ product_option_value.points }}" placeholder="{{ entry_points }}" class="form-control" /></td>*/
/*                             <td class="text-right"><select name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight_prefix]" class="form-control">*/
/*                                 */
/* */
/*                                   {% if product_option_value.weight_prefix == '+' %}*/
/* */
/*                                 */
/*                                 <option value="+" selected="selected">+</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="+">+</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/*                                   {% if product_option_value.weight_prefix == '-' %}*/
/* */
/*                                 */
/*                                 <option value="-" selected="selected">-</option>*/
/*                                 */
/* */
/*                                   {% else %}*/
/* */
/*                                 */
/*                                 <option value="-">-</option>*/
/*                                 */
/* */
/*                                   {% endif %}*/
/* */
/*                               */
/*                               </select>*/
/*                               <input type="text" name="product_option[{{ option_row }}][product_option_value][{{ option_value_row }}][weight]" value="{{ product_option_value.weight }}" placeholder="{{ entry_weight }}" class="form-control" /></td>*/
/* */
/* 				<!-- << Product Option Image PRO module -->*/
/* 				{% if (poip_installed ?? false) and not( poip_global_settings['options_images_edit']) %}*/
/* 					{% if (product_option_value['images'] ?? false) %}*/
/* 						<script type="text/javascript"><!--*/
/* 							{% for pov_image in product_option_value['images'] %}*/
/* 								poip.addProductOptionImage( {{ option_row }}, {{ option_value_row }}, '{{ pov_image['thumb'] }}', '{{ pov_image['image'] }}', {{ pov_image['srt'] }} );*/
/* 							{% endfor %}*/
/* 						//--></script>*/
/* 					{% endif %}*/
/* 					<td>*/
/* 						<button type="button" class="btn btn-default" onclick="poip.addProductOptionImage({{ option_row }}, {{ option_value_row }} )" title="{{ button_image_add }}">*/
/* 							<i class="fa fa-plus-circle"></i>*/
/* 						</button>*/
/* 						<div id="option_images{{ option_row }}_{{ option_value_row }}"></div>*/
/* 					</td>*/
/* 				{% endif %}*/
/* 				<!-- >> Product Option Image PRO module -->*/
/*       */
/*                             <td class="text-right"><button type="button" onclick="$(this).tooltip('destroy');$('#option-value-row{{ option_value_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                           </tr>*/
/*                           {% set option_value_row = option_value_row + 1 %}*/
/*                           {% endfor %}*/
/*                             </tbody>*/
/*                           */
/*                           <tfoot>*/
/*                             <tr>*/
/*                               <td colspan="6"></td>*/
/*                               {% if (poip_installed ?? false) and not( poip_global_settings['options_images_edit']) %}<td></td>{% endif %}<td class="text-left"><button type="button" onclick="addOptionValue('{{ option_row }}');" data-toggle="tooltip" title="{{ button_option_value_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                             </tr>*/
/*                           </tfoot>*/
/*                         </table>*/
/*                       </div>*/
/*                       <select id="option-values{{ option_row }}" style="display: none;">*/
/*                         */
/* */
/*                         {% if option_values[product_option.option_id] %}*/
/*                         {% for option_value in option_values[product_option.option_id] %}*/
/* */
/*                         */
/*                         <option value="{{ option_value.option_value_id }}">{{ option_value.name }}</option>*/
/*                         */
/* */
/*                         {% endfor %}*/
/*                         {% endif %}*/
/* */
/*                       */
/*                       </select>*/
/*                       {% endif %} </div>*/
/*                     {% set option_row = option_row + 1 %}*/
/*                     {% endfor %} </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-recurring">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_recurring }}</td>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-left"></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% set recurring_row = 0 %}*/
/*                   {% for product_recurring in product_recurrings %}*/
/*                   <tr id="recurring-row{{ recurring_row }}">*/
/*                     <td class="text-left"><select name="product_recurring[{{ recurring_row }}][recurring_id]" class="form-control">*/
/*                         */
/* */
/*                           {% for recurring in recurrings %}*/
/*                           {% if recurring.recurring_id == product_recurring.recurring_id %}*/
/* */
/*                         */
/*                         <option value="{{ recurring.recurring_id }}" selected="selected">{{ recurring.name }}</option>*/
/*                         */
/* */
/*                           {% else %}*/
/* */
/*                         */
/*                         <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                         */
/* */
/*                           {% endif %}*/
/*                           {% endfor %}*/
/* */
/*                       */
/*                       </select></td>*/
/*                     <td class="text-left"><select name="product_recurring[{{ recurring_row }}][customer_group_id]" class="form-control">*/
/*                         */
/* */
/*                           {% for customer_group in customer_groups %}*/
/*                           {% if customer_group.customer_group_id == product_recurring.customer_group_id %}*/
/* */
/*                         */
/*                         <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                         */
/* */
/*                           {% else %}*/
/* */
/*                         */
/*                         <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                         */
/* */
/*                           {% endif %}*/
/*                           {% endfor %}*/
/* */
/*                       */
/*                       </select></td>*/
/*                     <td class="text-left"><button type="button" onclick="$('#recurring-row{{ recurring_row }}').remove()" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set recurring_row = recurring_row + 1 %}*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addRecurring()" data-toggle="tooltip" title="{{ button_recurring_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-discount">*/
/*               <div class="table-responsive">*/
/*                 <table id="discount" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_quantity }}</td>*/
/*                       <td class="text-right">{{ entry_priority }}</td>*/
/*                       <td class="text-right">{{ entry_price }}</td>*/
/*                       <td class="text-left">{{ entry_date_start }}</td>*/
/*                       <td class="text-left">{{ entry_date_end }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% set discount_row = 0 %}*/
/*                   {% for product_discount in product_discounts %}*/
/*                   <tr id="discount-row{{ discount_row }}">*/
/*                     <td class="text-left"><select name="product_discount[{{ discount_row }}][customer_group_id]" class="form-control">*/
/* */
/* 				<!-- << Live Price -->*/
/* 				{% if liveprice_installed ?? 0 %}*/
/* 					<option value="-1">{{ liveprice_all_customers_groups }}</option>*/
/* 				{% endif %}*/
/* 				<!-- >> Live Price -->*/
/* 			*/
/*                         {% for customer_group in customer_groups %}*/
/*                         {% if customer_group.customer_group_id == product_discount.customer_group_id %}*/
/*                         <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                         {% else %}*/
/*                         <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                         {% endif %}*/
/*                         {% endfor %}*/
/*                       </select></td>*/
/*                     <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][quantity]" value="{{ product_discount.quantity }}" placeholder="{{ entry_quantity }}" class="form-control" /></td>*/
/*                     <td class="text-right"><input type="text" name="product_discount[{{ discount_row }}][priority]" value="{{ product_discount.priority }}" placeholder="{{ entry_priority }}" class="form-control" /></td>*/
/*                     <td class="text-right"><!-- << Live Price -->*/
/* 				{% if liveprice_installed ?? 0 %}*/
/* 					<select name="product_discount[{{ discount_row }}][price_prefix]" class="form-control">*/
/* 						<option value="="*/
/* 							{% if (product_discount['price_prefix'] ?? '') == '=' %}*/
/* 								selected"*/
/* 							{% endif %}*/
/* 						>=</option>*/
/* 						<option value="_"*/
/* 							{% if (product_discount['price_prefix'] ?? '') == '_' %}*/
/* 								selected*/
/* 							{% endif %}*/
/* 							>= %</option>*/
/* 						<option value="%"*/
/* 							{% if ( product_discount['price_prefix'] ?? '') == '%' %}*/
/* 								selected*/
/* 							{% endif %}*/
/* 						>&ndash; %</option>*/
/* 					</select>*/
/* 				{% endif %}*/
/* 				*/
/* 				<!-- >> Live Price -->*/
/* 				<input type="text" name="product_discount[{{ discount_row }}][price]" value="{{ product_discount.price }}" placeholder="{{ entry_price }}" class="form-control" /></td>*/
/*                     <td class="text-left" style="width: 20%;"><div class="input-group date">*/
/*                         <input type="text" name="product_discount[{{ discount_row }}][date_start]" value="{{ product_discount.date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" />*/
/*                         <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div></td>*/
/*                     <td class="text-left" style="width: 20%;"><div class="input-group date">*/
/*                         <input type="text" name="product_discount[{{ discount_row }}][date_end]" value="{{ product_discount.date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" />*/
/*                         <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div></td>*/
/*                     <td class="text-left"><button type="button" onclick="$('#discount-row{{ discount_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set discount_row = discount_row + 1 %}*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="6"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addDiscount();" data-toggle="tooltip" title="{{ button_discount_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-special">*/
/*               <div class="table-responsive">*/
/*                 <table id="special" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_priority }}</td>*/
/*                       <td class="text-right">{{ entry_price }}</td>*/
/*                       <td class="text-left">{{ entry_date_start }}</td>*/
/*                       <td class="text-left">{{ entry_date_end }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% set special_row = 0 %}*/
/*                   {% for product_special in product_specials %}*/
/*                   <tr id="special-row{{ special_row }}">*/
/*                     <td class="text-left"><select name="product_special[{{ special_row }}][customer_group_id]" class="form-control">*/
/* */
/* 				<!-- << Live Price -->*/
/* 				<option value="-1">{{ liveprice_all_customers_groups }}</option>*/
/* 			*/
/* 				<!-- >> Live Price -->*/
/* 			*/
/*                         */
/* */
/*                           {% for customer_group in customer_groups %}*/
/*                           {% if customer_group.customer_group_id == product_special.customer_group_id %}*/
/* */
/*                         */
/*                         <option value="{{ customer_group.customer_group_id }}" selected="selected">{{ customer_group.name }}</option>*/
/*                         */
/* */
/*                           {% else %}*/
/* */
/*                         */
/*                         <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>*/
/*                         */
/* */
/*                           {% endif %}*/
/*                           {% endfor %}*/
/* */
/*                       */
/*                       </select></td>*/
/*                     <td class="text-right"><input type="text" name="product_special[{{ special_row }}][priority]" value="{{ product_special.priority }}" placeholder="{{ entry_priority }}" class="form-control" /></td>*/
/*                     <td class="text-right"><!-- << Live Price -->*/
/* 				{% if liveprice_installed ?? 0 %}*/
/* 					<select name="product_special[{{ special_row }}][price_prefix]" class="form-control">*/
/* 						<option value="=" {{ ((product_special['price_prefix'] ?? '') == '=' ) ? 'selected' : '' }} >=</option>*/
/* 						<option value="_" {{ ((product_special['price_prefix'] ?? '') == '_' ) ? 'selected' : '' }} >= %</option>*/
/* 						<option value="%" {{ ((product_special['price_prefix'] ?? '') == '%' ) ? 'selected' : '' }} >&ndash; %</option>*/
/* 					</select>*/
/* 				{% endif %}*/
/* 				<!-- >> Live Price -->*/
/* 				<input type="text" name="product_special[{{ special_row }}][price]" value="{{ product_special.price }}" placeholder="{{ entry_price }}" class="form-control" /></td>*/
/*                     <td class="text-left" style="width: 20%;"><div class="input-group date">*/
/*                         <input type="text" name="product_special[{{ special_row }}][date_start]" value="{{ product_special.date_start }}" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" />*/
/*                         <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div></td>*/
/*                     <td class="text-left" style="width: 20%;"><div class="input-group date">*/
/*                         <input type="text" name="product_special[{{ special_row }}][date_end]" value="{{ product_special.date_end }}" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" />*/
/*                         <span class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                         </span></div></td>*/
/*                     <td class="text-left"><button type="button" onclick="$('#special-row{{ special_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/*                   {% set special_row = special_row + 1 %}*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="5"></td>*/
/*                       <td class="text-left"><button type="button" onclick="addSpecial();" data-toggle="tooltip" title="{{ button_special_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-image">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_image }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                     <tr>*/
/*                       <td class="text-left"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="{{ thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                         <input type="hidden" name="image" value="{{ image }}" id="input-image" /></td>*/
/*                     </tr>*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*               <div class="table-responsive">*/
/*                 <table id="images" class="table table-striped table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_additional_image }}</td>*/
/* */
/* 				<!-- Product Option Image PRO module << -->*/
/* 				{% if (poip_installed ?? false) and (poip_global_settings['options_images_edit'] ?? 0) %}*/
/* 						<td class="text-left">{{ entry_option }}</td>*/
/* 				{% endif %}*/
/* 				<!-- >> Product Option Image PRO module -->*/
/* 			*/
/* */
/*             */
/* 						{% if pim_status==true and not pim_miu %}*/
/* 								<td class="text-left">Default Image</td>*/
/* 						{% endif %}*/
/*             */
/*                       <td class="text-right">{{ entry_sort_order }}</td>*/
/*                       <td></td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% set image_row = 0 %}*/
/*                   {% for product_image in product_images %}*/
/*                   <tr id="image-row{{ image_row }}">*/
/*                     <td class="text-left"><a href="" id="thumb-image{{ image_row }}" data-toggle="image" class="img-thumbnail"><img src="{{ product_image.thumb }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a>*/
/*                       <input type="hidden" name="product_image[{{ image_row }}][image]" value="{{ product_image.image }}" id="input-image{{ image_row }}" /></td>*/
/* */
/*         {% if pim_status==true and not pim_miu %}*/
/*           <td class="text-right"><input type="radio" name="def_img" value="{{ product_image.image }}" class="form-control" /></td>*/
/*         {% endif %}*/
/*         */
/*                     <td class="text-right"><input type="text" name="product_image[{{ image_row }}][sort_order]" value="{{ product_image.sort_order }}" placeholder="{{ entry_sort_order }}" class="form-control" /></td>*/
/*                     <td class="text-left"><button type="button" onclick="$('#image-row{{ image_row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/*                   </tr>*/
/* */
/* 				<!-- Product Option Image PRO module << -->*/
/* 				{% if (poip_installed ?? false) and ( (poip_global_settings['options_images_edit'] ?? 0) == 1 ) %}*/
/* 					<script type="text/javascript"><!--*/
/* 						poip.displayImageOptions( {{ image_row }}, {{ product_image|json_encode }} );*/
/* 					//--></script>*/
/* 				{% endif %}*/
/* 				<!-- >> Product Option Image PRO module -->*/
/* 			*/
/*                   {% set image_row = image_row + 1 %}*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                   <tfoot>*/
/*                     <tr>*/
/*                       <td colspan="2"></td>*/
/* */
/* 				<!-- Product Option Image PRO module << -->*/
/* 				{% if (poip_installed ?? false) and (poip_global_settings['options_images_edit'] ?? 0) %}*/
/* 						<td class="text-left"></td>*/
/* 				{% endif %}*/
/* 				<!-- >> Product Option Image PRO module -->*/
/* 			*/
/*                       <td class="text-left">{% if pim_status == true %} <a type="button" data-toggle="manager" title="Power Image Manager" class="btn btn-success"><i class="fa fa-upload"></i> Power Image Manager</a>&nbsp;{% endif %}<button type="button" onclick="addImage();" data-toggle="tooltip" title="{{ button_image_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>*/
/*                     </tr>*/
/*                   </tfoot>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-reward">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-points"><span data-toggle="tooltip" title="{{ help_points }}">{{ entry_points }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="points" value="{{ points }}" placeholder="{{ entry_points }}" id="input-points" class="form-control" />*/
/*                 </div>*/
/*               </div>*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_customer_group }}</td>*/
/*                       <td class="text-right">{{ entry_reward }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   */
/*                   {% for customer_group in customer_groups %}*/
/*                   <tr>*/
/*                     <td class="text-left">{{ customer_group.name }}</td>*/
/*                     <td class="text-right"><input type="text" name="product_reward[{{ customer_group.customer_group_id }}][points]" value="{{ product_reward[customer_group.customer_group_id] ? product_reward[customer_group.customer_group_id].points }}" class="form-control" /></td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-seo">*/
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_keyword }}</div>            */
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/* 		      <td class="text-left">{{ entry_keyword }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for store in stores %}*/
/*                   <tr>*/
/*                     <td class="text-left">{{ store.name }}</td>*/
/*                     <td class="text-left">{% for language in languages %}*/
/*                       <div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/*                         <input type="text" name="product_seo_url[{{ store.store_id }}][{{ language.language_id }}]" value="{% if product_seo_url[store.store_id][language.language_id] %}{{ product_seo_url[store.store_id][language.language_id] }}{% endif %}" placeholder="{{ entry_keyword }}" class="form-control" />*/
/*                       </div>*/
/*                       {% if error_keyword[store.store_id][language.language_id] %}*/
/*                       <div class="text-danger">{{ error_keyword[store.store_id][language.language_id] }}</div>*/
/*                       {% endif %} */
/*                       {% endfor %}</td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                     </tbody>*/
/*                   */
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-design">*/
/*               <div class="table-responsive">*/
/*                 <table class="table table-bordered table-hover">*/
/*                   <thead>*/
/*                     <tr>*/
/*                       <td class="text-left">{{ entry_store }}</td>*/
/*                       <td class="text-left">{{ entry_layout }}</td>*/
/*                     </tr>*/
/*                   </thead>*/
/*                   <tbody>*/
/*                   {% for store in stores %}*/
/*                   <tr>*/
/*                     <td class="text-left">{{ store.name }}</td>*/
/*                     <td class="text-left"><select name="product_layout[{{ store.store_id }}]" class="form-control">*/
/*                         <option value=""></option>*/
/*                         */
/* */
/*                           {% for layout in layouts %}*/
/*                           {% if product_layout[store.store_id] and product_layout[store.store_id] == layout.layout_id %}*/
/* */
/*                         */
/*                         <option value="{{ layout.layout_id }}" selected="selected">{{ layout.name }}</option>*/
/*                         */
/* */
/*                           {% else %}*/
/* */
/*                         */
/*                         <option value="{{ layout.layout_id }}">{{ layout.name }}</option>*/
/*                         */
/* */
/*                           {% endif %}*/
/*                           {% endfor %}*/
/* */
/*                       */
/*                       </select></td>*/
/*                   </tr>*/
/*                   {% endfor %}*/
/*                   </tbody>*/
/*                 </table>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet" />*/
/*   <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script> */
/*   <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script> */
/*   <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*   <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script> */
/*   <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script> */
/*   <script type="text/javascript"><!--*/
/* // Manufacturer*/
/* $('input[name=\'manufacturer\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/manufacturer/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				json.unshift({*/
/* 					manufacturer_id: 0,*/
/* 					name: '{{ text_none }}'*/
/* 				});*/
/* */
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['manufacturer_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'manufacturer\']').val(item['label']);*/
/* 		$('input[name=\'manufacturer_id\']').val(item['value']);*/
/* 	}*/
/* });*/
/* */
/* // Category*/
/* $('input[name=\'category\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/category/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['category_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'category\']').val('');*/
/* */
/* 		$('#product-category' + item['value']).remove();*/
/* */
/* 		$('#product-category').append('<div id="product-category' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_category[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#product-category').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* // Filter*/
/* $('input[name=\'filter\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/filter/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['filter_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'filter\']').val('');*/
/* */
/* 		$('#product-filter' + item['value']).remove();*/
/* */
/* 		$('#product-filter').append('<div id="product-filter' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_filter[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#product-filter').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* // Downloads*/
/* $('input[name=\'download\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/download/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['download_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'download\']').val('');*/
/* */
/* 		$('#product-download' + item['value']).remove();*/
/* */
/* 		$('#product-download').append('<div id="product-download' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_download[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#product-download').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* */
/* // Related*/
/* $('input[name=\'related\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		$('input[name=\'related\']').val('');*/
/* */
/* 		$('#product-related' + item['value']).remove();*/
/* */
/* 		$('#product-related').append('<div id="product-related' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product_related[]" value="' + item['value'] + '" /></div>');*/
/* 	}*/
/* });*/
/* */
/* $('#product-related').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var attribute_row = {{ attribute_row }};*/
/* */
/* function addAttribute() {*/
/*     html  = '<tr id="attribute-row' + attribute_row + '">';*/
/* 	html += '  <td class="text-left" style="width: 20%;"><input type="text" name="product_attribute[' + attribute_row + '][name]" value="" placeholder="{{ entry_attribute }}" class="form-control" /><input type="hidden" name="product_attribute[' + attribute_row + '][attribute_id]" value="" /></td>';*/
/* 	html += '  <td class="text-left">';*/
/* 	{% for language in languages %}*/
/* 	html += '<div class="input-group"><span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span><textarea name="product_attribute[' + attribute_row + '][product_attribute_description][{{ language.language_id }}][text]" rows="5" placeholder="{{ entry_text }}" class="form-control"></textarea></div>';*/
/*     {% endfor %}*/
/* 	html += '  </td>';*/
/* 	html += '  <td class="text-right"><button type="button" onclick="$(\'#attribute-row' + attribute_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*     html += '</tr>';*/
/* */
/* 	$('#attribute tbody').append(html);*/
/* */
/* 	attributeautocomplete(attribute_row);*/
/* */
/* 	attribute_row++;*/
/* }*/
/* */
/* function attributeautocomplete(attribute_row) {*/
/* 	$('input[name=\'product_attribute[' + attribute_row + '][name]\']').autocomplete({*/
/* 		'source': function(request, response) {*/
/* 			$.ajax({*/
/* 				url: 'index.php?route=catalog/attribute/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 				dataType: 'json',*/
/* 				success: function(json) {*/
/* 					response($.map(json, function(item) {*/
/* 						return {*/
/* 							category: item.attribute_group,*/
/* 							label: item.name,*/
/* 							value: item.attribute_id*/
/* 						}*/
/* 					}));*/
/* 				}*/
/* 			});*/
/* 		},*/
/* 		'select': function(item) {*/
/* 			$('input[name=\'product_attribute[' + attribute_row + '][name]\']').val(item['label']);*/
/* 			$('input[name=\'product_attribute[' + attribute_row + '][attribute_id]\']').val(item['value']);*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* $('#attribute tbody tr').each(function(index, element) {*/
/* 	attributeautocomplete(index);*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var option_row = {{ option_row }};*/
/* */
/* $('input[name=\'option\']').autocomplete({*/
/* 	'source': function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/option/autocomplete&user_token={{ user_token }}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						category: item['category'],*/
/* 						label: item['name'],*/
/* 						value: item['option_id'],*/
/* 						type: item['type'],*/
/* 						option_value: item['option_value']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	'select': function(item) {*/
/* 		html  = '<div class="tab-pane" id="tab-option' + option_row + '">';*/
/* 		html += '	<input type="hidden" name="product_option[' + option_row + '][product_option_id]" value="" />';*/
/* 		html += '	<input type="hidden" name="product_option[' + option_row + '][name]" value="' + item['label'] + '" />';*/
/* 		html += '	<input type="hidden" name="product_option[' + option_row + '][option_id]" value="' + item['value'] + '" />';*/
/* 		html += '	<input type="hidden" name="product_option[' + option_row + '][type]" value="' + item['type'] + '" />';*/
/* */
/* 		html += '	<div class="form-group">';*/
/* 		html += '	  <label class="col-sm-2 control-label" for="input-required' + option_row + '">{{ entry_required }}</label>';*/
/* 		html += '	  <div class="col-sm-10"><select name="product_option[' + option_row + '][required]" id="input-required' + option_row + '" class="form-control">';*/
/* 		html += '	      <option value="1">{{ text_yes }}</option>';*/
/* 		html += '	      <option value="0">{{ text_no }}</option>';*/
/* 		html += '	  </select></div>';*/
/* 		html += '	</div>';*/
/* */
/* 		if (item['type'] == 'text') {*/
/* 			html += '	<div class="form-group">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-10"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control" /></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'textarea') {*/
/* 			html += '	<div class="form-group">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-10"><textarea name="product_option[' + option_row + '][value]" rows="5" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control"></textarea></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'file') {*/
/* 			html += '	<div class="form-group" style="display: none;">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-10"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" id="input-value' + option_row + '" class="form-control" /></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'date') {*/
/* 			html += '	<div class="form-group">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-3"><div class="input-group date"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'time') {*/
/* 			html += '	<div class="form-group">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-10"><div class="input-group time"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="HH:mm" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'datetime') {*/
/* 			html += '	<div class="form-group">';*/
/* 			html += '	  <label class="col-sm-2 control-label" for="input-value' + option_row + '">{{ entry_option_value }}</label>';*/
/* 			html += '	  <div class="col-sm-10"><div class="input-group datetime"><input type="text" name="product_option[' + option_row + '][value]" value="" placeholder="{{ entry_option_value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-value' + option_row + '" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></div>';*/
/* 			html += '	</div>';*/
/* 		}*/
/* */
/* 		if (item['type'] == 'select' || item['type'] == 'radio' || item['type'] == 'checkbox' || item['type'] == 'image') {*/
/* 			html += '<div class="table-responsive">';*/
/* 			html += '  <table id="option-value' + option_row + '" class="table table-striped table-bordered table-hover">';*/
/* 			html += '  	 <thead>';*/
/* 			html += '      <tr>';*/
/* 			html += '        <td class="text-left">{{ entry_option_value }}</td>';*/
/* 			html += '        <td class="text-right">{{ entry_quantity }}</td>';*/
/* 			html += '        <td class="text-left">{{ entry_subtract }}</td>';*/
/* 			html += '        <td class="text-right">{{ entry_price }}</td>';*/
/* 			html += '        <td class="text-right">{{ entry_option_points }}</td>';*/
/* 			html += '        <td class="text-right">{{ entry_weight }}</td> {% if (poip_installed ?? false) and not(poip_global_settings['options_images_edit']) %} <td class="text-left" style="width:240px;">{{ entry_image }}</td>{% endif %}';*/
/* 			html += '        <td></td>';*/
/* 			html += '      </tr>';*/
/* 			html += '  	 </thead>';*/
/* 			html += '  	 <tbody>';*/
/* 			html += '    </tbody>';*/
/* 			html += '    <tfoot>';*/
/* 			html += '      <tr>';*/
/* 			html += '        <td colspan="6"></td>';*/
/* 			html += '        {% if (poip_installed ?? false) and not( poip_global_settings['options_images_edit']) %}<td></td>{% endif %}<td class="text-left"><button type="button" onclick="addOptionValue(' + option_row + ');" data-toggle="tooltip" title="{{ button_option_value_add }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>';*/
/* 			html += '      </tr>';*/
/* 			html += '    </tfoot>';*/
/* 			html += '  </table>';*/
/* 			html += '</div>';*/
/* */
/*             html += '  <select id="option-values' + option_row + '" style="display: none;">';*/
/* */
/*             for (i = 0; i < item['option_value'].length; i++) {*/
/* 				html += '  <option value="' + item['option_value'][i]['option_value_id'] + '">' + item['option_value'][i]['name'] + '</option>';*/
/*             }*/
/* */
/*             html += '  </select>';*/
/* 			html += '</div>';*/
/* 		}*/
/* */
/* 		$('#tab-option .tab-content').append(html);*/
/* */
/* 				// << Product Option Image PRO module */
/* 				{% if poip_installed ?? false %}*/
/* 					poip.displayProductOptionSettings( option_row, item['type'] );*/
/* 				{% endif %}*/
/* 				// >> Product Option Image PRO module */
/*       */
/* */
/* 				// << Parent-child Options*/
/* 				{% if ( pcop_installed ?? 0 ) %}*/
/* 					pcop.showOptionSettings(option_row);*/
/* 				{% endif %}	*/
/* 				// >> Parent-child Options*/
/*       */
/* */
/* 		$('#option > li:last-child').before('<li><a href="#tab-option' + option_row + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick=" $(\'#option a:first\').tab(\'show\');$(\'a[href=\\\'#tab-option' + option_row + '\\\']\').parent().remove(); $(\'#tab-option' + option_row + '\').remove();"></i>' + item['label'] + '</li>');*/
/* */
/* 		$('#option a[href=\'#tab-option' + option_row + '\']').tab('show');*/
/* */
/* 		$('[data-toggle=\'tooltip\']').tooltip({*/
/* 			container: 'body',*/
/* 			html: true*/
/* 		});*/
/* */
/* 		$('.date').datetimepicker({*/
/* 			language: '{{ datepicker }}',*/
/* 			pickTime: false*/
/* 		});*/
/* */
/* 		$('.time').datetimepicker({*/
/* 			language: '{{ datepicker }}',*/
/* 			pickDate: false*/
/* 		});*/
/* */
/* 		$('.datetime').datetimepicker({*/
/* 			language: '{{ datepicker }}',*/
/* 			pickDate: true,*/
/* 			pickTime: true*/
/* 		});*/
/* */
/* 		option_row++;*/
/* 	}*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var option_value_row = {{ option_value_row }};*/
/* */
/* function addOptionValue(option_row) {*/
/* 	html  = '<tr id="option-value-row' + option_value_row + '">';*/
/* 	html += '  <td class="text-left"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][option_value_id]" class="form-control">';*/
/* 	html += $('#option-values' + option_row).html();*/
/* 	html += '  </select><input type="hidden" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][product_option_value_id]" value="" /></td>';*/
/* 	html += '  <td class="text-right"><input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][quantity]" value="" placeholder="{{ entry_quantity }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-left"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][subtract]" class="form-control">';*/
/* 	html += '    <option value="1">{{ text_yes }}</option>';*/
/* 	html += '    <option value="0">{{ text_no }}</option>';*/
/* 	html += '  </select></td>';*/
/* 	html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][price_prefix]" class="form-control">';*/
/* 	html += '    <option value="+">+</option>';*/
/* 	html += '    <option value="-">-</option>';*/
/* 	html += '  </select>';*/
/* 	html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][points_prefix]" class="form-control">';*/
/* 	html += '    <option value="+">+</option>';*/
/* 	html += '    <option value="-">-</option>';*/
/* 	html += '  </select>';*/
/* 	html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][points]" value="" placeholder="{{ entry_points }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-right"><select name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight_prefix]" class="form-control">';*/
/* 	html += '    <option value="+">+</option>';*/
/* 	html += '    <option value="-">-</option>';*/
/* 	html += '  </select>';*/
/* 	html += '  <input type="text" name="product_option[' + option_row + '][product_option_value][' + option_value_row + '][weight]" value="" placeholder="{{ entry_weight }}" class="form-control" /></td>';*/
/* */
/* 				// Product Option Image PRO module <<*/
/* 				{% if (poip_installed ?? false) and not( poip_global_settings['options_images_edit']) %}*/
/* 					html += '<td><button type="button" class="btn btn-default" onclick="poip.addProductOptionImage('+option_row+', '+option_value_row+');"><i class="fa fa-plus-circle"></i></button><div id="option_images'+option_row+'_'+option_value_row+'"></div></td>';*/
/* 				{% endif %}*/
/* 				// >> Product Option Image PRO module*/
/*       */
/* 	html += '  <td class="text-left"><button type="button" onclick="$(this).tooltip(\'destroy\');$(\'#option-value-row' + option_value_row + '\').remove();" data-toggle="tooltip" rel="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#option-value' + option_row + ' tbody').append(html);*/
/* */
/* 				// << Live Price*/
/* 				{% if liveprice_installed ?? 0 %}*/
/* 					var ppm_option = $('#option-value-row'+option_value_row).find('select[name*=price_prefix]').find('option[value="-"]');*/
/* 					ppm_option.before('<option value="+%">+%</option>');*/
/* 					ppm_option.before('<option value="-%">&ndash;%</option>');*/
/* 					ppm_option.before('<option value="=%">=%</option>');*/
/* 					ppm_option.before('<option value="*">*</option>');*/
/* 					ppm_option.before('<option value="/">/</option>');*/
/* 					ppm_option.before('<option value="=">=</option>');*/
/* 				{% endif %}				*/
/* 				// >> Live Price*/
/* 			*/
/* 	$('[rel=tooltip]').tooltip();*/
/* */
/* 	option_value_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var discount_row = {{ discount_row }};*/
/* */
/* function addDiscount() {*/
/* 	html  = '<tr id="discount-row' + discount_row + '">';*/
/*     html += '  <td class="text-left"><select name="product_discount[' + discount_row + '][customer_group_id]" class="form-control">';*/
/* */
/* 			// << Live Price*/
/* 			{% if liveprice_installed ?? 0 %}*/
/* 				html += '<option value="-1">{{ liveprice_all_customers_groups }}</option>';*/
/* 			{% endif %}	*/
/* 			// >> Live Price*/
/* 			*/
/*     {% for customer_group in customer_groups %}*/
/*     html += '    <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name|escape('js') }}</option>';*/
/*     {% endfor %}*/
/*     html += '  </select></td>';*/
/*     html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][quantity]" value="" placeholder="{{ entry_quantity }}" class="form-control" /></td>';*/
/*     html += '  <td class="text-right"><input type="text" name="product_discount[' + discount_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-right">';*/
/* 				// << Live Price*/
/* 				{% if liveprice_installed ?? 0 %}*/
/* 					html += '<select name="product_discount[' + discount_row + '][price_prefix]" class="form-control">';*/
/* 					html += '	<option value="=" >=</option>';*/
/* 					html += '	<option value="_" >= %</option>';*/
/* 					html += '	<option value="%" >&ndash; %</option>';*/
/* 					html += '</select>';*/
/* 				{% endif %}*/
/* 				// >> Live Price*/
/* 				html += '<input type="text" name="product_discount[' + discount_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/*     html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_discount[' + discount_row + '][date_start]" value="" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_discount[' + discount_row + '][date_end]" value="" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#discount-row' + discount_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#discount tbody').append(html);*/
/* */
/* 	$('.date').datetimepicker({*/
/* 		pickTime: false*/
/* 	});*/
/* */
/* 	discount_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var special_row = {{ special_row }};*/
/* */
/* function addSpecial() {*/
/* 	html  = '<tr id="special-row' + special_row + '">';*/
/*     html += '  <td class="text-left"><select name="product_special[' + special_row + '][customer_group_id]" class="form-control">';*/
/* */
/* 				// << Live Price*/
/* 				html += '<option value="-1">{{ liveprice_all_customers_groups }}</option>';*/
/* 				// >> Live Price*/
/* 			*/
/*     {% for customer_group in customer_groups %}*/
/*     html += '      <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name|escape('js') }}</option>';*/
/*     {% endfor %}*/
/*     html += '  </select></td>';*/
/*     html += '  <td class="text-right"><input type="text" name="product_special[' + special_row + '][priority]" value="" placeholder="{{ entry_priority }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-right">'; // <--- !!!*/
/* 				// << Live Price*/
/* 				{% if liveprice_installed ?? 0 %}*/
/* 					html += '<select name="product_special[' + special_row + '][price_prefix]" class="form-control">';*/
/* 					html += '	<option value="=" >=</option>';*/
/* 					html += '	<option value="_" >= %</option>';*/
/* 					html += '	<option value="%" >&ndash; %</option>';*/
/* 					html += '</select>';*/
/* 				{% endif %}*/
/* 				// >> Live Price*/
/* 				html += '<input type="text" name="product_special[' + special_row + '][price]" value="" placeholder="{{ entry_price }}" class="form-control" /></td>';*/
/*     html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_special[' + special_row + '][date_start]" value="" placeholder="{{ entry_date_start }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	html += '  <td class="text-left" style="width: 20%;"><div class="input-group date"><input type="text" name="product_special[' + special_row + '][date_end]" value="" placeholder="{{ entry_date_end }}" data-date-format="YYYY-MM-DD" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#special-row' + special_row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#special tbody').append(html);*/
/* */
/* 	$('.date').datetimepicker({*/
/* 		language: '{{ datepicker }}',*/
/* 		pickTime: false*/
/* 	});*/
/* */
/* 	special_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var image_row = {{ image_row }};*/
/* */
/* function addImage() {*/
/* 	html  = '<tr id="image-row' + image_row + '">';*/
/* 	html += '  <td class="text-left"><a href="" id="thumb-image' + image_row + '"data-toggle="image" class="img-thumbnail"><img src="{{ placeholder }}" alt="" title="" data-placeholder="{{ placeholder }}" /></a><input type="hidden" name="product_image[' + image_row + '][image]" value="" id="input-image' + image_row + '" /></td>';*/
/* */
/*          {% if pim_status==true and not pim_miu %}*/
/*           html += '<td class="text-right"><input type="radio" name="def_img" id="radio-input-image' + image_row + '" value="" disabled="disabled" class="form-control"></td>';   */
/*          {% endif %}*/
/*         */
/* 	html += '  <td class="text-right"><input type="text" name="product_image[' + image_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" class="form-control" /></td>';*/
/* 	html += '  <td class="text-left"><button type="button" onclick="$(\'#image-row' + image_row  + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#images tbody').append(html);*/
/* */
/* 				<!-- Product Option Image PRO module << -->*/
/* 				{% if (poip_installed ?? false) and ( (poip_global_settings['options_images_edit'] ?? 0) == 1 ) %}*/
/* 					poip.displayImageOptions(image_row);*/
/* 				{% endif %}*/
/* 				<!-- >> Product Option Image PRO module -->*/
/* 			*/
/* */
/* 	image_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* var recurring_row = {{ recurring_row }};*/
/* */
/* function addRecurring() {*/
/* 	html  = '<tr id="recurring-row' + recurring_row + '">';*/
/* 	html += '  <td class="left">';*/
/* 	html += '    <select name="product_recurring[' + recurring_row + '][recurring_id]" class="form-control">>';*/
/* 	{% for recurring in recurrings %}*/
/* 	html += '      <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>';*/
/* 	{% endfor %}*/
/* 	html += '    </select>';*/
/* 	html += '  </td>';*/
/* 	html += '  <td class="left">';*/
/* 	html += '    <select name="product_recurring[' + recurring_row + '][customer_group_id]" class="form-control">>';*/
/* 	{% for customer_group in customer_groups %}*/
/* 	html += '      <option value="{{ customer_group.customer_group_id }}">{{ customer_group.name }}</option>';*/
/* 	{% endfor %}*/
/* 	html += '    <select>';*/
/* 	html += '  </td>';*/
/* 	html += '  <td class="left">';*/
/* 	html += '    <a onclick="$(\'#recurring-row' + recurring_row + '\').remove()" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>';*/
/* 	html += '  </td>';*/
/* 	html += '</tr>';*/
/* */
/* 	$('#tab-recurring table tbody').append(html);*/
/* */
/* 	recurring_row++;*/
/* }*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('#language a:first').tab('show');*/
/* $('#option a:first').tab('show');*/
/* //--></script></div>*/
/* */
/*         <!-- << Parent-child Options -->*/
/* 				{% if ( pcop_installed ?? 0 ) %}*/
/* 					<script type="text/javascript"><!--*/
/* 					*/
/* 						pcop.all_product_options = {{ (pcop_all_product_options ?? 0) ? pcop_all_product_options|json_encode : 'false' }};*/
/* 						pcop.basic_product_options = {{ product_options is defined ? product_options|json_encode : '{}' }};*/
/* 						pcop.texts = {{ pcop_texts is defined ? pcop_texts|json_encode : '{}' }};*/
/* 						pcop.init( {{ option_row }} );*/
/* 						*/
/* 						{#*/
/* 						{% for i_option_row in 0..option_row %}*/
/* 							pcop.showOptionSettings( {{ i_option_row }} );*/
/* 						{% endfor %}*/
/* 						#}*/
/* 						*/
/* 					//--></script>*/
/* 				{% endif %}*/
/*         <!-- << Parent-child Options -->*/
/*       */
/* */
/*         {% if pim_status == true %}*/
/*         <script type="text/javascript">*/
/*             if (typeof addMultiImage != 'function') {*/
/* */
/*               function addMultiImage(img) {*/
/*                     if (image_row>0) {*/
/*                         var k = (image_row-1);*/
/* */
/*                         if ($('#input-image'+k).val() == "") {*/
/*                             $('#image-row'+k).remove();*/
/*                         }*/
/*                     }*/
/*                       $.ajax({*/
/*                         url: 'index.php?route=catalog/product/pimage&user_token={{ user_token }}&image=' + encodeURIComponent(img),*/
/*                         dataType: 'json',*/
/*                         success: function(json) {*/
/* */
/*                           if (json.file) {*/
/*                           html  = '<tr id="image-row' + image_row + '">';*/
/*                           html += '  <td class="text-left"><a href="" id="thumb-image' + image_row + '"data-toggle="image" class="img-thumbnail">';*/
/*                           html += '<img src="'+json.file+'" alt="" title="" data-placeholder="{{ placeholder }}" />';*/
/*                           html+='<input type="hidden" name="product_image[' + image_row + '][image]" value="' + decodeURIComponent(json.abs) + '" id="input-image' + image_row + '" /></td>';*/
/*                           html += '<td class="text-right"><input type="radio" name="def_img" value="'+json.abs+'" class="form-control"></td>';*/
/*   */
/*                           html += '  <td class="text-right"><input type="text" name="product_image[' + image_row + '][sort_order]" value="" placeholder="{{ entry_sort_order }}" class="form-control" /></td>';*/
/*                           html += '  <td class="text-left"><button type="button" onclick="$(\'#image-row' + image_row  + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*                           html += '</tr>';*/
/*                           $('#images tbody').append(html);*/
/*                           image_row++;*/
/*                         }*/
/*                       }*/
/*                   });*/
/*               }*/
/*             }*/
/*         </script>*/
/*       {% endif %}        */
/*         */
/* {{ footer }} */
/* */
