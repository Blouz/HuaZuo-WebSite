<?php

/* extension/module/isenselabs_seo/isenselabs_seo.twig */
class __TwigTemplate_518d3e5a39c0d37d5cf2f0815765d163d301ee7de10d590ce63c2d9eb1e101cd extends Twig_Template
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
        echo "
";
        // line 2
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 
<div id=\"content\" class=\"isense_seo_module\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">

            <div class=\"pull-right\">
                <button type=\"submit\" form=\"form-filter\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo " \" class=\"btn btn-primary save-changes\" style=\"display:none;\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 9
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo " \" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo " \" class=\"btn btn-default\" style=\"display:none;\"><i class=\"fa fa-reply\"></i></a>
            </div>

            <h1>";
        // line 12
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " </h1>

            <ul class=\"breadcrumb\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
                <li><a href=\"";
            // line 16
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo " \">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo " </a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo " 
            </ul>

        </div>
    </div>

    <div class=\"container-fluid\">
        ";
        // line 24
        echo (isset($context["unlicensedHtml"]) ? $context["unlicensedHtml"] : null);
        echo "    

        ";
        // line 26
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo " 
        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 27
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo " 
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 30
        echo " 

        ";
        // line 32
        if ((isset($context["success"]) ? $context["success"] : null)) {
            echo " 
        <div class=\"alert alert-success autoSlideUp\"><i class=\"fa fa-check-circle\"></i> ";
            // line 33
            echo (isset($context["success"]) ? $context["success"] : null);
            echo " 
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        <script>\$('.autoSlideUp').delay(3000).fadeOut(600, function(){ \$(this).show().css({'visibility':'hidden'}); }).slideUp(600);</script>
        ";
        }
        // line 37
        echo " 

        <div class=\"row row-main\">
            <form action=\"";
        // line 40
        echo (isset($context["action"]) ? $context["action"] : null);
        echo " \" method=\"post\" enctype=\"multipart/form-data\" id=\"form-filter\" class=\"form-horizontal\">
                <div class=\"panel panel-default\">
                    <div class=\"panel-body\">
                       <ul class=\"nav nav-tabs mainMenuTabs\" role=\"tablist\">
                          <li class=\"active\">
                              <a role=\"tab\" data-toggle=\"tab\" href=\"#home-tab\">";
        // line 45
        echo (isset($context["tab_home"]) ? $context["tab_home"] : null);
        echo " </a>
                          </li>
                          <li>
                              <a role=\"tab\" data-toggle=\"tab\" href=\"#urls-linking-tab\">";
        // line 48
        echo (isset($context["tab_urls_linking"]) ? $context["tab_urls_linking"] : null);
        echo " </a>
                          </li>
                          <li>
                              <a role=\"tab\" data-toggle=\"tab\" href=\"#content-tab\">";
        // line 51
        echo (isset($context["tab_content"]) ? $context["tab_content"] : null);
        echo " </a>
                          </li>
                          <li>
                              <a role=\"tab\" data-toggle=\"tab\" href=\"#advanced-editor-tab\">";
        // line 54
        echo (isset($context["tab_advanced_editor"]) ? $context["tab_advanced_editor"] : null);
        echo " </a>
                          </li>
                          <li>
                              <a role=\"tab\" data-toggle=\"tab\" href=\"#social-seo-tab\">";
        // line 57
        echo (isset($context["tab_social_seo"]) ? $context["tab_social_seo"] : null);
        echo " </a>
                          </li>
                          <li>
                              <a role=\"tab\" data-toggle=\"tab\" href=\"#structured-data-tab\">";
        // line 60
        echo (isset($context["tab_structured_data"]) ? $context["tab_structured_data"] : null);
        echo " </a>
                          </li>
                          <li>
                              <a role=\"tab\" data-toggle=\"tab\" href=\"#image-names-tab\">";
        // line 63
        echo (isset($context["tab_image_names"]) ? $context["tab_image_names"] : null);
        echo " </a>
                          </li>
                          <li>
                              <a role=\"tab\" data-toggle=\"tab\" href=\"#crawler-tab\">";
        // line 66
        echo (isset($context["tab_page_crawler"]) ? $context["tab_page_crawler"] : null);
        echo " </a>
                          </li>
                          <li>
                              <a role=\"tab\" data-toggle=\"tab\" href=\"#analysis-tab\">";
        // line 69
        echo (isset($context["tab_seo_analysis"]) ? $context["tab_seo_analysis"] : null);
        echo " </a>
                          </li>
                          <li>
                              <a role=\"tab\" data-toggle=\"tab\" href=\"#missing-pages-tab\">";
        // line 72
        echo (isset($context["text_404_manager"]) ? $context["text_404_manager"] : null);
        echo " </a>
                          </li>
                          <li>
                              <a role=\"tab\" data-toggle=\"tab\" href=\"#file-editor-tab\">";
        // line 75
        echo (isset($context["tab_file_editor"]) ? $context["tab_file_editor"] : null);
        echo " </a>
                          </li>
                          <li>
                              <a role=\"tab\" data-toggle=\"tab\" href=\"#faq-tab\">";
        // line 78
        echo (isset($context["tab_what_is_seo"]) ? $context["tab_what_is_seo"] : null);
        echo " </a>
                          </li>
                          <li>
                              <a role=\"tab\" data-toggle=\"tab\" href=\"#isense-support\">";
        // line 81
        echo (isset($context["tab_support"]) ? $context["tab_support"] : null);
        echo " </a>
                          </li>
                        </ul>

                        <div class=\"tab-content\">
                            <div id=\"home-tab\" role=\"tabpanel\" class=\"tab-pane seo-home-tab seo-tabs-main fade in active\">
                                <br />
                                <div class=\"loader\"></div>
                            </div>
                            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moduleTabs"]) ? $context["moduleTabs"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 91
            echo "                            <div id=\"";
            echo $this->getAttribute($context["tab"], "id", array());
            echo "\" role=\"tabpanel\" class=\"tab-pane seo-tabs-main fade\">
                              ";
            // line 92
            echo twig_include($this->env, $context, $this->getAttribute($context["tab"], "file", array()));
            echo "
                            </div>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                        </div>

                    </div>
                </div><!--.panel-->
            </form> 

        </div>
    </div>
  
</div>

<script type=\"text/javascript\">
var storeId                                 = '";
        // line 107
        echo $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "store_id", array());
        echo "';
var domain                                  = '";
        // line 108
        echo (isset($context["hostname_base64"]) ? $context["hostname_base64"] : null);
        echo "';
var domainraw                               = '";
        // line 109
        echo (isset($context["hostname"]) ? $context["hostname"] : null);
        echo "';
var timenow                                 = '";
        // line 110
        echo (isset($context["time_now"]) ? $context["time_now"] : null);
        echo "';
var MID                                     = 'VBHAVAKDXS';
var token                                   = '";
        // line 112
        echo (isset($context["token"]) ? $context["token"] : null);
        echo "';
var token_string                            = '";
        // line 113
        echo (isset($context["token_string"]) ? $context["token_string"] : null);
        echo "';
var moduleName                              = '";
        // line 114
        echo (isset($context["moduleName"]) ? $context["moduleName"] : null);
        echo "';
var modulePath                              = '";
        // line 115
        echo (isset($context["modulePath"]) ? $context["modulePath"] : null);
        echo "';
var fixIssuesAjaxURL                        = 'index.php?route=";
        // line 116
        echo (isset($context["modulePath"]) ? $context["modulePath"] : null);
        echo "/fix_seo_issues&";
        echo (isset($context["token_string"]) ? $context["token_string"] : null);
        echo "=";
        echo (isset($context["token"]) ? $context["token"] : null);
        echo "&store_id=";
        echo $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "store_id", array());
        echo "'
var saveSettingsAjaxURL                     = 'index.php?route=";
        // line 117
        echo (isset($context["modulePath"]) ? $context["modulePath"] : null);
        echo "/save_settings&";
        echo (isset($context["token_string"]) ? $context["token_string"] : null);
        echo "=";
        echo (isset($context["token"]) ? $context["token"] : null);
        echo "&store_id=";
        echo $this->getAttribute((isset($context["store"]) ? $context["store"] : null), "store_id", array());
        echo "';
var defaultLanguageId                       = '";
        // line 118
        echo (isset($context["config_language_id"]) ? $context["config_language_id"] : null);
        echo "';
var text_running_tests                      = '";
        // line 119
        echo (isset($context["text_running_tests"]) ? $context["text_running_tests"] : null);
        echo "';
var text_loading_please_wait                = '";
        // line 120
        echo (isset($context["text_loading_please_wait"]) ? $context["text_loading_please_wait"] : null);
        echo "';
var text_performing_operation               = '";
        // line 121
        echo (isset($context["text_performing_operation"]) ? $context["text_performing_operation"] : null);
        echo "';
var text_unexpected_error_id                = '";
        // line 122
        echo (isset($context["text_unexpected_error_id"]) ? $context["text_unexpected_error_id"] : null);
        echo "';
var text_delete                             = '";
        // line 123
        echo (isset($context["text_delete"]) ? $context["text_delete"] : null);
        echo "';
var text_delete_confirmation                = '";
        // line 124
        echo (isset($context["text_delete_confirmation"]) ? $context["text_delete_confirmation"] : null);
        echo "';
var text_delete_a_confirmation              = '";
        // line 125
        echo (isset($context["text_delete_a_confirmation"]) ? $context["text_delete_a_confirmation"] : null);
        echo "';
var text_add_custom_url                     = '";
        // line 126
        echo (isset($context["text_add_custom_url"]) ? $context["text_add_custom_url"] : null);
        echo "';
var text_opencart_route                     = '";
        // line 127
        echo (isset($context["text_opencart_route"]) ? $context["text_opencart_route"] : null);
        echo "';
var text_cancel                             = '";
        // line 128
        echo (isset($context["text_cancel"]) ? $context["text_cancel"] : null);
        echo "';
var text_submit                             = '";
        // line 129
        echo (isset($context["text_submit"]) ? $context["text_submit"] : null);
        echo "';
var text_confirm                            = '";
        // line 130
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "';
var text_url_address                        = '";
        // line 131
        echo (isset($context["text_url_address"]) ? $context["text_url_address"] : null);
        echo "';
var text_fields_filled_in_helper            = '";
        // line 132
        echo (isset($context["text_fields_filled_in_helper"]) ? $context["text_fields_filled_in_helper"] : null);
        echo "';
var text_add_new_autolink                   = '";
        // line 133
        echo (isset($context["text_add_new_autolink"]) ? $context["text_add_new_autolink"] : null);
        echo "';
var text_edit_autolink                      = '";
        // line 134
        echo (isset($context["text_edit_autolink"]) ? $context["text_edit_autolink"] : null);
        echo "';
var text_keyword_field                      = '";
        // line 135
        echo (isset($context["text_keyword_field"]) ? $context["text_keyword_field"] : null);
        echo "';
var text_edit_customurl                     = '";
        // line 136
        echo (isset($context["text_edit_customurl"]) ? $context["text_edit_customurl"] : null);
        echo "';
var text_complete                           = '";
        // line 137
        echo (isset($context["text_complete"]) ? $context["text_complete"] : null);
        echo "';
var text_error                              = '";
        // line 138
        echo (isset($context["text_error"]) ? $context["text_error"] : null);
        echo "';
var text_show_more                          = '";
        // line 139
        echo (isset($context["text_show_more"]) ? $context["text_show_more"] : null);
        echo "';
var text_show_less                          = '";
        // line 140
        echo (isset($context["text_show_less"]) ? $context["text_show_less"] : null);
        echo "';
var text_confirm_action                     = '";
        // line 141
        echo (isset($context["text_confirm_action"]) ? $context["text_confirm_action"] : null);
        echo "';
var text_confirm_image_rename               = '";
        // line 142
        echo (isset($context["text_confirm_image_rename"]) ? $context["text_confirm_image_rename"] : null);
        echo "';
var text_crawler_error_heading              = '";
        // line 143
        echo (isset($context["text_crawler_error_heading"]) ? $context["text_crawler_error_heading"] : null);
        echo "';
var text_crawler_url_error                  = '";
        // line 144
        echo (isset($context["text_crawler_url_error"]) ? $context["text_crawler_url_error"] : null);
        echo "';
var text_loading_data                       = '";
        // line 145
        echo (isset($context["text_loading_data"]) ? $context["text_loading_data"] : null);
        echo "';
var text_confirm_clear_analysis             = '";
        // line 146
        echo (isset($context["text_confirm_clear_analysis"]) ? $context["text_confirm_clear_analysis"] : null);
        echo "';
var text_empty_field_alert                  = '";
        // line 147
        echo (isset($context["text_empty_field_alert"]) ? $context["text_empty_field_alert"] : null);
        echo "';
var text_remove_selected_row                = '";
        // line 148
        echo (isset($context["text_remove_selected_row"]) ? $context["text_remove_selected_row"] : null);
        echo "'; 
var text_old_address                        = '";
        // line 149
        echo (isset($context["text_old_address"]) ? $context["text_old_address"] : null);
        echo "'; 
var text_new_address                        = '";
        // line 150
        echo (isset($context["text_new_address"]) ? $context["text_new_address"] : null);
        echo "'; 
var text_add_new_redirect                   = '";
        // line 151
        echo (isset($context["text_add_new_redirect"]) ? $context["text_add_new_redirect"] : null);
        echo "'; 
</script>

";
        // line 154
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/isenselabs_seo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 154,  442 => 151,  438 => 150,  434 => 149,  430 => 148,  426 => 147,  422 => 146,  418 => 145,  414 => 144,  410 => 143,  406 => 142,  402 => 141,  398 => 140,  394 => 139,  390 => 138,  386 => 137,  382 => 136,  378 => 135,  374 => 134,  370 => 133,  366 => 132,  362 => 131,  358 => 130,  354 => 129,  350 => 128,  346 => 127,  342 => 126,  338 => 125,  334 => 124,  330 => 123,  326 => 122,  322 => 121,  318 => 120,  314 => 119,  310 => 118,  300 => 117,  290 => 116,  286 => 115,  282 => 114,  278 => 113,  274 => 112,  269 => 110,  265 => 109,  261 => 108,  257 => 107,  243 => 95,  226 => 92,  221 => 91,  204 => 90,  192 => 81,  186 => 78,  180 => 75,  174 => 72,  168 => 69,  162 => 66,  156 => 63,  150 => 60,  144 => 57,  138 => 54,  132 => 51,  126 => 48,  120 => 45,  112 => 40,  107 => 37,  99 => 33,  95 => 32,  91 => 30,  84 => 27,  80 => 26,  75 => 24,  66 => 17,  56 => 16,  50 => 15,  44 => 12,  36 => 9,  32 => 8,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {{ column_left }} */
/* <div id="content" class="isense_seo_module">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/* */
/*             <div class="pull-right">*/
/*                 <button type="submit" form="form-filter" data-toggle="tooltip" title="{{ button_save }} " class="btn btn-primary save-changes" style="display:none;"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }} " data-toggle="tooltip" title="{{ button_cancel }} " class="btn btn-default" style="display:none;"><i class="fa fa-reply"></i></a>*/
/*             </div>*/
/* */
/*             <h1>{{ heading_title }} </h1>*/
/* */
/*             <ul class="breadcrumb">*/
/*             {% for breadcrumb in breadcrumbs %} */
/*                 <li><a href="{{ breadcrumb.href }} ">{{ breadcrumb.text }} </a></li>*/
/*             {% endfor %} */
/*             </ul>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container-fluid">*/
/*         {{ unlicensedHtml }}    */
/* */
/*         {% if error_warning %} */
/*         <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }} */
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %} */
/* */
/*         {% if success %} */
/*         <div class="alert alert-success autoSlideUp"><i class="fa fa-check-circle"></i> {{ success }} */
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         <script>$('.autoSlideUp').delay(3000).fadeOut(600, function(){ $(this).show().css({'visibility':'hidden'}); }).slideUp(600);</script>*/
/*         {% endif %} */
/* */
/*         <div class="row row-main">*/
/*             <form action="{{ action }} " method="post" enctype="multipart/form-data" id="form-filter" class="form-horizontal">*/
/*                 <div class="panel panel-default">*/
/*                     <div class="panel-body">*/
/*                        <ul class="nav nav-tabs mainMenuTabs" role="tablist">*/
/*                           <li class="active">*/
/*                               <a role="tab" data-toggle="tab" href="#home-tab">{{ tab_home }} </a>*/
/*                           </li>*/
/*                           <li>*/
/*                               <a role="tab" data-toggle="tab" href="#urls-linking-tab">{{ tab_urls_linking }} </a>*/
/*                           </li>*/
/*                           <li>*/
/*                               <a role="tab" data-toggle="tab" href="#content-tab">{{ tab_content }} </a>*/
/*                           </li>*/
/*                           <li>*/
/*                               <a role="tab" data-toggle="tab" href="#advanced-editor-tab">{{ tab_advanced_editor }} </a>*/
/*                           </li>*/
/*                           <li>*/
/*                               <a role="tab" data-toggle="tab" href="#social-seo-tab">{{ tab_social_seo }} </a>*/
/*                           </li>*/
/*                           <li>*/
/*                               <a role="tab" data-toggle="tab" href="#structured-data-tab">{{ tab_structured_data }} </a>*/
/*                           </li>*/
/*                           <li>*/
/*                               <a role="tab" data-toggle="tab" href="#image-names-tab">{{ tab_image_names }} </a>*/
/*                           </li>*/
/*                           <li>*/
/*                               <a role="tab" data-toggle="tab" href="#crawler-tab">{{ tab_page_crawler }} </a>*/
/*                           </li>*/
/*                           <li>*/
/*                               <a role="tab" data-toggle="tab" href="#analysis-tab">{{ tab_seo_analysis }} </a>*/
/*                           </li>*/
/*                           <li>*/
/*                               <a role="tab" data-toggle="tab" href="#missing-pages-tab">{{ text_404_manager }} </a>*/
/*                           </li>*/
/*                           <li>*/
/*                               <a role="tab" data-toggle="tab" href="#file-editor-tab">{{ tab_file_editor }} </a>*/
/*                           </li>*/
/*                           <li>*/
/*                               <a role="tab" data-toggle="tab" href="#faq-tab">{{ tab_what_is_seo }} </a>*/
/*                           </li>*/
/*                           <li>*/
/*                               <a role="tab" data-toggle="tab" href="#isense-support">{{ tab_support }} </a>*/
/*                           </li>*/
/*                         </ul>*/
/* */
/*                         <div class="tab-content">*/
/*                             <div id="home-tab" role="tabpanel" class="tab-pane seo-home-tab seo-tabs-main fade in active">*/
/*                                 <br />*/
/*                                 <div class="loader"></div>*/
/*                             </div>*/
/*                             {% for tab in moduleTabs %}*/
/*                             <div id="{{ tab.id }}" role="tabpanel" class="tab-pane seo-tabs-main fade">*/
/*                               {{ include(tab.file) }}*/
/*                             </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/* */
/*                     </div>*/
/*                 </div><!--.panel-->*/
/*             </form> */
/* */
/*         </div>*/
/*     </div>*/
/*   */
/* </div>*/
/* */
/* <script type="text/javascript">*/
/* var storeId                                 = '{{ store.store_id }}';*/
/* var domain                                  = '{{ hostname_base64 }}';*/
/* var domainraw                               = '{{ hostname }}';*/
/* var timenow                                 = '{{ time_now }}';*/
/* var MID                                     = 'VBHAVAKDXS';*/
/* var token                                   = '{{ token }}';*/
/* var token_string                            = '{{ token_string }}';*/
/* var moduleName                              = '{{ moduleName }}';*/
/* var modulePath                              = '{{ modulePath }}';*/
/* var fixIssuesAjaxURL                        = 'index.php?route={{ modulePath }}/fix_seo_issues&{{ token_string }}={{ token }}&store_id={{ store.store_id }}'*/
/* var saveSettingsAjaxURL                     = 'index.php?route={{ modulePath }}/save_settings&{{ token_string }}={{ token }}&store_id={{ store.store_id }}';*/
/* var defaultLanguageId                       = '{{ config_language_id }}';*/
/* var text_running_tests                      = '{{ text_running_tests }}';*/
/* var text_loading_please_wait                = '{{ text_loading_please_wait }}';*/
/* var text_performing_operation               = '{{ text_performing_operation }}';*/
/* var text_unexpected_error_id                = '{{ text_unexpected_error_id }}';*/
/* var text_delete                             = '{{ text_delete }}';*/
/* var text_delete_confirmation                = '{{ text_delete_confirmation }}';*/
/* var text_delete_a_confirmation              = '{{ text_delete_a_confirmation }}';*/
/* var text_add_custom_url                     = '{{ text_add_custom_url }}';*/
/* var text_opencart_route                     = '{{ text_opencart_route }}';*/
/* var text_cancel                             = '{{ text_cancel }}';*/
/* var text_submit                             = '{{ text_submit }}';*/
/* var text_confirm                            = '{{ text_confirm }}';*/
/* var text_url_address                        = '{{ text_url_address }}';*/
/* var text_fields_filled_in_helper            = '{{ text_fields_filled_in_helper }}';*/
/* var text_add_new_autolink                   = '{{ text_add_new_autolink }}';*/
/* var text_edit_autolink                      = '{{ text_edit_autolink }}';*/
/* var text_keyword_field                      = '{{ text_keyword_field }}';*/
/* var text_edit_customurl                     = '{{ text_edit_customurl }}';*/
/* var text_complete                           = '{{ text_complete }}';*/
/* var text_error                              = '{{ text_error }}';*/
/* var text_show_more                          = '{{ text_show_more }}';*/
/* var text_show_less                          = '{{ text_show_less }}';*/
/* var text_confirm_action                     = '{{ text_confirm_action }}';*/
/* var text_confirm_image_rename               = '{{ text_confirm_image_rename }}';*/
/* var text_crawler_error_heading              = '{{ text_crawler_error_heading }}';*/
/* var text_crawler_url_error                  = '{{ text_crawler_url_error }}';*/
/* var text_loading_data                       = '{{ text_loading_data }}';*/
/* var text_confirm_clear_analysis             = '{{ text_confirm_clear_analysis }}';*/
/* var text_empty_field_alert                  = '{{ text_empty_field_alert }}';*/
/* var text_remove_selected_row                = '{{ text_remove_selected_row }}'; */
/* var text_old_address                        = '{{ text_old_address }}'; */
/* var text_new_address                        = '{{ text_new_address }}'; */
/* var text_add_new_redirect                   = '{{ text_add_new_redirect }}'; */
/* </script>*/
/* */
/* {{ footer }} */
