<?php

/* extension/module/amazon_login.twig */
class __TwigTemplate_367e89ba78a5e0887b5ca5ed872635672d769a5d9f28272951f5980771d0641a extends Twig_Template
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
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-check-circle\"></i></button>
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
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-button-type\">";
        // line 28
        echo (isset($context["entry_button_type"]) ? $context["entry_button_type"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"amazon_login_button_type\" id=\"input-button-type\" class=\"form-control\">
                
\t\t\t\t";
        // line 32
        if (((isset($context["amazon_login_button_type"]) ? $context["amazon_login_button_type"] : null) == "Login")) {
            // line 33
            echo "\t\t\t\t\t
                <option value=\"LwA\" >";
            // line 34
            echo (isset($context["text_lwa_button"]) ? $context["text_lwa_button"] : null);
            echo "</option>
                <option value=\"Login\" selected=\"selected\">";
            // line 35
            echo (isset($context["text_login_button"]) ? $context["text_login_button"] : null);
            echo "</option>
                <option value=\"A\">";
            // line 36
            echo (isset($context["text_a_button"]) ? $context["text_a_button"] : null);
            echo "</option>
                
\t\t\t\t";
        } elseif ((        // line 38
(isset($context["amazon_login_button_type"]) ? $context["amazon_login_button_type"] : null) == "A")) {
            // line 39
            echo "\t\t\t\t\t
                <option value=\"LwA\" >";
            // line 40
            echo (isset($context["text_lwa_button"]) ? $context["text_lwa_button"] : null);
            echo "</option>
                <option value=\"Login\" >";
            // line 41
            echo (isset($context["text_login_button"]) ? $context["text_login_button"] : null);
            echo "</option>
                <option value=\"A\" selected=\"selected\">";
            // line 42
            echo (isset($context["text_a_button"]) ? $context["text_a_button"] : null);
            echo "</option>
                
\t\t\t\t";
        } else {
            // line 45
            echo "\t\t\t\t\t
                <option value=\"LwA\" selected=\"selected\">";
            // line 46
            echo (isset($context["text_lwa_button"]) ? $context["text_lwa_button"] : null);
            echo "</option>
                <option value=\"Login\" >";
            // line 47
            echo (isset($context["text_login_button"]) ? $context["text_login_button"] : null);
            echo "</option>
                <option value=\"A\">";
            // line 48
            echo (isset($context["text_a_button"]) ? $context["text_a_button"] : null);
            echo "</option>
                
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t  
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-button-colour\">";
        // line 56
        echo (isset($context["entry_button_colour"]) ? $context["entry_button_colour"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"amazon_login_button_colour\" id=\"input-button-colour\" class=\"form-control\">
                
\t\t\t\t";
        // line 60
        if (((isset($context["amazon_login_button_colour"]) ? $context["amazon_login_button_colour"] : null) == "DarkGray")) {
            // line 61
            echo "\t\t\t\t\t
                <option value=\"Gold\" >";
            // line 62
            echo (isset($context["text_gold_button"]) ? $context["text_gold_button"] : null);
            echo "</option>
                <option value=\"DarkGray\" selected=\"selected\">";
            // line 63
            echo (isset($context["text_darkgray_button"]) ? $context["text_darkgray_button"] : null);
            echo "</option>
                <option value=\"LightGray\">";
            // line 64
            echo (isset($context["text_lightgray_button"]) ? $context["text_lightgray_button"] : null);
            echo "</option>
                
\t\t\t\t";
        } elseif ((        // line 66
(isset($context["amazon_login_button_colour"]) ? $context["amazon_login_button_colour"] : null) == "LightGray")) {
            // line 67
            echo "\t\t\t\t\t
                <option value=\"Gold\" >";
            // line 68
            echo (isset($context["text_gold_button"]) ? $context["text_gold_button"] : null);
            echo "</option>
                <option value=\"DarkGray\">";
            // line 69
            echo (isset($context["text_darkgray_button"]) ? $context["text_darkgray_button"] : null);
            echo "</option>
                <option value=\"LightGray\" selected=\"selected\">";
            // line 70
            echo (isset($context["text_lightgray_button"]) ? $context["text_lightgray_button"] : null);
            echo "</option>
                
\t\t\t\t";
        } else {
            // line 73
            echo "\t\t\t\t\t
                <option value=\"Gold\" selected=\"selected\">";
            // line 74
            echo (isset($context["text_gold_button"]) ? $context["text_gold_button"] : null);
            echo "</option>
                <option value=\"DarkGray\">";
            // line 75
            echo (isset($context["text_darkgray_button"]) ? $context["text_darkgray_button"] : null);
            echo "</option>
                <option value=\"LightGray\">";
            // line 76
            echo (isset($context["text_lightgray_button"]) ? $context["text_lightgray_button"] : null);
            echo "</option>
                
\t\t\t\t";
        }
        // line 79
        echo "\t\t\t  
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-button-size\">";
        // line 84
        echo (isset($context["entry_button_size"]) ? $context["entry_button_size"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"amazon_login_button_size\" id=\"input-button-size\" class=\"form-control\">
                
\t\t\t\t";
        // line 88
        if (((isset($context["amazon_login_button_size"]) ? $context["amazon_login_button_size"] : null) == "small")) {
            // line 89
            echo "\t\t\t\t\t
                <option value=\"small\" selected=\"selected\">";
            // line 90
            echo (isset($context["text_small_button"]) ? $context["text_small_button"] : null);
            echo "</option>
                <option value=\"medium\">";
            // line 91
            echo (isset($context["text_medium_button"]) ? $context["text_medium_button"] : null);
            echo "</option>
                <option value=\"large\" selected=\"selected\">";
            // line 92
            echo (isset($context["text_large_button"]) ? $context["text_large_button"] : null);
            echo "</option>
                <option value=\"x-large\">";
            // line 93
            echo (isset($context["text_x_large_button"]) ? $context["text_x_large_button"] : null);
            echo "</option>
                
\t\t\t\t";
        } elseif ((        // line 95
(isset($context["amazon_login_button_size"]) ? $context["amazon_login_button_size"] : null) == "large")) {
            // line 96
            echo "\t\t\t\t\t
                <option value=\"small\" >";
            // line 97
            echo (isset($context["text_small_button"]) ? $context["text_small_button"] : null);
            echo "</option>
                <option value=\"medium\">";
            // line 98
            echo (isset($context["text_medium_button"]) ? $context["text_medium_button"] : null);
            echo "</option>
                <option value=\"large\" selected=\"selected\">";
            // line 99
            echo (isset($context["text_large_button"]) ? $context["text_large_button"] : null);
            echo "</option>
                <option value=\"x-large\">";
            // line 100
            echo (isset($context["text_x_large_button"]) ? $context["text_x_large_button"] : null);
            echo "</option>
                
\t\t\t\t";
        } elseif ((        // line 102
(isset($context["amazon_login_button_size"]) ? $context["amazon_login_button_size"] : null) == "x-large")) {
            // line 103
            echo "\t\t\t\t\t
                <option value=\"small\">";
            // line 104
            echo (isset($context["text_small_button"]) ? $context["text_small_button"] : null);
            echo "</option>
                <option value=\"medium\">";
            // line 105
            echo (isset($context["text_medium_button"]) ? $context["text_medium_button"] : null);
            echo "</option>
                <option value=\"large\">";
            // line 106
            echo (isset($context["text_large_button"]) ? $context["text_large_button"] : null);
            echo "</option>
                <option value=\"x-large\" selected=\"selected\">";
            // line 107
            echo (isset($context["text_x_large_button"]) ? $context["text_x_large_button"] : null);
            echo "</option>
                
\t\t\t\t";
        } else {
            // line 110
            echo "\t\t\t\t\t
                <option value=\"small\">";
            // line 111
            echo (isset($context["text_small_button"]) ? $context["text_small_button"] : null);
            echo "</option>
                <option value=\"medium\" selected=\"selected\">";
            // line 112
            echo (isset($context["text_medium_button"]) ? $context["text_medium_button"] : null);
            echo "</option>
                <option value=\"large\">";
            // line 113
            echo (isset($context["text_large_button"]) ? $context["text_large_button"] : null);
            echo "</option>
                <option value=\"x-large\">";
            // line 114
            echo (isset($context["text_x_large_button"]) ? $context["text_x_large_button"] : null);
            echo "</option>
                
\t\t\t\t";
        }
        // line 117
        echo "\t\t\t  
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 122
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"amazon_login_status\" id=\"input-status\" class=\"form-control\">
                
\t\t\t\t";
        // line 126
        if ((isset($context["amazon_login_status"]) ? $context["amazon_login_status"] : null)) {
            // line 127
            echo "\t\t\t\t\t
                <option value=\"1\" selected=\"selected\">";
            // line 128
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\">";
            // line 129
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                
\t\t\t\t";
        } else {
            // line 132
            echo "\t\t\t\t\t
                <option value=\"1\">";
            // line 133
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 134
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                
\t\t\t\t";
        }
        // line 137
        echo "              
              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 146
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/amazon_login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 146,  361 => 137,  355 => 134,  351 => 133,  348 => 132,  342 => 129,  338 => 128,  335 => 127,  333 => 126,  326 => 122,  319 => 117,  313 => 114,  309 => 113,  305 => 112,  301 => 111,  298 => 110,  292 => 107,  288 => 106,  284 => 105,  280 => 104,  277 => 103,  275 => 102,  270 => 100,  266 => 99,  262 => 98,  258 => 97,  255 => 96,  253 => 95,  248 => 93,  244 => 92,  240 => 91,  236 => 90,  233 => 89,  231 => 88,  224 => 84,  217 => 79,  211 => 76,  207 => 75,  203 => 74,  200 => 73,  194 => 70,  190 => 69,  186 => 68,  183 => 67,  181 => 66,  176 => 64,  172 => 63,  168 => 62,  165 => 61,  163 => 60,  156 => 56,  149 => 51,  143 => 48,  139 => 47,  135 => 46,  132 => 45,  126 => 42,  122 => 41,  118 => 40,  115 => 39,  113 => 38,  108 => 36,  104 => 35,  100 => 34,  97 => 33,  95 => 32,  88 => 28,  83 => 26,  77 => 23,  73 => 21,  65 => 17,  63 => 16,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-module" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-check-circle"></i></button>*/
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
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ heading_title }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-button-type">{{ entry_button_type }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="amazon_login_button_type" id="input-button-type" class="form-control">*/
/*                 */
/* 				{% if amazon_login_button_type == 'Login' %}*/
/* 					*/
/*                 <option value="LwA" >{{ text_lwa_button }}</option>*/
/*                 <option value="Login" selected="selected">{{ text_login_button }}</option>*/
/*                 <option value="A">{{ text_a_button }}</option>*/
/*                 */
/* 				{% elseif amazon_login_button_type == 'A' %}*/
/* 					*/
/*                 <option value="LwA" >{{ text_lwa_button }}</option>*/
/*                 <option value="Login" >{{ text_login_button }}</option>*/
/*                 <option value="A" selected="selected">{{ text_a_button }}</option>*/
/*                 */
/* 				{% else %}*/
/* 					*/
/*                 <option value="LwA" selected="selected">{{ text_lwa_button }}</option>*/
/*                 <option value="Login" >{{ text_login_button }}</option>*/
/*                 <option value="A">{{ text_a_button }}</option>*/
/*                 */
/* 				{% endif %}*/
/* 			  */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-button-colour">{{ entry_button_colour }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="amazon_login_button_colour" id="input-button-colour" class="form-control">*/
/*                 */
/* 				{% if amazon_login_button_colour == 'DarkGray' %}*/
/* 					*/
/*                 <option value="Gold" >{{ text_gold_button }}</option>*/
/*                 <option value="DarkGray" selected="selected">{{ text_darkgray_button }}</option>*/
/*                 <option value="LightGray">{{ text_lightgray_button }}</option>*/
/*                 */
/* 				{% elseif amazon_login_button_colour == 'LightGray' %}*/
/* 					*/
/*                 <option value="Gold" >{{ text_gold_button }}</option>*/
/*                 <option value="DarkGray">{{ text_darkgray_button }}</option>*/
/*                 <option value="LightGray" selected="selected">{{ text_lightgray_button }}</option>*/
/*                 */
/* 				{% else %}*/
/* 					*/
/*                 <option value="Gold" selected="selected">{{ text_gold_button }}</option>*/
/*                 <option value="DarkGray">{{ text_darkgray_button }}</option>*/
/*                 <option value="LightGray">{{ text_lightgray_button }}</option>*/
/*                 */
/* 				{% endif %}*/
/* 			  */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-button-size">{{ entry_button_size }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="amazon_login_button_size" id="input-button-size" class="form-control">*/
/*                 */
/* 				{% if amazon_login_button_size == 'small' %}*/
/* 					*/
/*                 <option value="small" selected="selected">{{ text_small_button }}</option>*/
/*                 <option value="medium">{{ text_medium_button }}</option>*/
/*                 <option value="large" selected="selected">{{ text_large_button }}</option>*/
/*                 <option value="x-large">{{ text_x_large_button }}</option>*/
/*                 */
/* 				{% elseif amazon_login_button_size == 'large' %}*/
/* 					*/
/*                 <option value="small" >{{ text_small_button }}</option>*/
/*                 <option value="medium">{{ text_medium_button }}</option>*/
/*                 <option value="large" selected="selected">{{ text_large_button }}</option>*/
/*                 <option value="x-large">{{ text_x_large_button }}</option>*/
/*                 */
/* 				{% elseif amazon_login_button_size == 'x-large' %}*/
/* 					*/
/*                 <option value="small">{{ text_small_button }}</option>*/
/*                 <option value="medium">{{ text_medium_button }}</option>*/
/*                 <option value="large">{{ text_large_button }}</option>*/
/*                 <option value="x-large" selected="selected">{{ text_x_large_button }}</option>*/
/*                 */
/* 				{% else %}*/
/* 					*/
/*                 <option value="small">{{ text_small_button }}</option>*/
/*                 <option value="medium" selected="selected">{{ text_medium_button }}</option>*/
/*                 <option value="large">{{ text_large_button }}</option>*/
/*                 <option value="x-large">{{ text_x_large_button }}</option>*/
/*                 */
/* 				{% endif %}*/
/* 			  */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="amazon_login_status" id="input-status" class="form-control">*/
/*                 */
/* 				{% if amazon_login_status %}*/
/* 					*/
/*                 <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                 <option value="0">{{ text_disabled }}</option>*/
/*                 */
/* 				{% else %}*/
/* 					*/
/*                 <option value="1">{{ text_enabled }}</option>*/
/*                 <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                 */
/* 				{% endif %}*/
/*               */
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
