<?php

/* sale/voucher_form.twig */
class __TwigTemplate_d604460af00e4566f9befb336bd777033f44974ca58aefaf0b859cde3aa8d662 extends Twig_Template
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
        ";
        // line 6
        if ((isset($context["voucher_id"]) ? $context["voucher_id"] : null)) {
            // line 7
            echo "        <button type=\"button\" id=\"button-send\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_send"]) ? $context["button_send"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-envelope\"></i></button>
        ";
        }
        // line 9
        echo "        <button type=\"submit\" form=\"form-voucher\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 10
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 11
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
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
        // line 16
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 20
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 21
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 27
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 30
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-voucher\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            ";
        // line 33
        if ((isset($context["voucher_id"]) ? $context["voucher_id"] : null)) {
            // line 34
            echo "            <li><a href=\"#tab-history\" data-toggle=\"tab\">";
            echo (isset($context["tab_history"]) ? $context["tab_history"] : null);
            echo "</a></li>
            ";
        }
        // line 36
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-code\"><span data-toggle=\"tooltip\" title=\"";
        // line 40
        echo (isset($context["help_code"]) ? $context["help_code"] : null);
        echo "\">";
        echo (isset($context["entry_code"]) ? $context["entry_code"] : null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"code\" value=\"";
        // line 42
        echo (isset($context["code"]) ? $context["code"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_code"]) ? $context["entry_code"] : null);
        echo "\" id=\"input-code\" class=\"form-control\" />
                  ";
        // line 43
        if ((isset($context["error_code"]) ? $context["error_code"] : null)) {
            // line 44
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_code"]) ? $context["error_code"] : null);
            echo "</div>
                  ";
        }
        // line 46
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-from-name\">";
        // line 49
        echo (isset($context["entry_from_name"]) ? $context["entry_from_name"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"from_name\" value=\"";
        // line 51
        echo (isset($context["from_name"]) ? $context["from_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_from_name"]) ? $context["entry_from_name"] : null);
        echo "\" id=\"input-from-name\" class=\"form-control\" />
                  ";
        // line 52
        if ((isset($context["error_from_name"]) ? $context["error_from_name"] : null)) {
            // line 53
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_from_name"]) ? $context["error_from_name"] : null);
            echo "</div>
                  ";
        }
        // line 55
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-from-email\">";
        // line 58
        echo (isset($context["entry_from_email"]) ? $context["entry_from_email"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"from_email\" value=\"";
        // line 60
        echo (isset($context["from_email"]) ? $context["from_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_from_email"]) ? $context["entry_from_email"] : null);
        echo "\" id=\"input-from-email\" class=\"form-control\" />
                  ";
        // line 61
        if ((isset($context["error_from_email"]) ? $context["error_from_email"] : null)) {
            // line 62
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_from_email"]) ? $context["error_from_email"] : null);
            echo "</div>
                  ";
        }
        // line 64
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-to-name\">";
        // line 67
        echo (isset($context["entry_to_name"]) ? $context["entry_to_name"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"to_name\" value=\"";
        // line 69
        echo (isset($context["to_name"]) ? $context["to_name"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_to_name"]) ? $context["entry_to_name"] : null);
        echo "\" id=\"input-to-name\" class=\"form-control\" />
                  ";
        // line 70
        if ((isset($context["error_to_name"]) ? $context["error_to_name"] : null)) {
            // line 71
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_to_name"]) ? $context["error_to_name"] : null);
            echo "</div>
                  ";
        }
        // line 73
        echo "                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-to-email\">";
        // line 76
        echo (isset($context["entry_to_email"]) ? $context["entry_to_email"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"to_email\" value=\"";
        // line 78
        echo (isset($context["to_email"]) ? $context["to_email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_to_email"]) ? $context["entry_to_email"] : null);
        echo "\" id=\"input-to-email\" class=\"form-control\" />
                  ";
        // line 79
        if ((isset($context["error_to_email"]) ? $context["error_to_email"] : null)) {
            // line 80
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_to_email"]) ? $context["error_to_email"] : null);
            echo "</div>
                  ";
        }
        // line 82
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-theme\">";
        // line 85
        echo (isset($context["entry_theme"]) ? $context["entry_theme"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"voucher_theme_id\" id=\"input-theme\" class=\"form-control\">
                    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voucher_themes"]) ? $context["voucher_themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher_theme"]) {
            // line 89
            echo "                    ";
            if (($this->getAttribute($context["voucher_theme"], "voucher_theme_id", array()) == (isset($context["voucher_theme_id"]) ? $context["voucher_theme_id"] : null))) {
                // line 90
                echo "                    <option value=\"";
                echo $this->getAttribute($context["voucher_theme"], "voucher_theme_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["voucher_theme"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 92
                echo "                    <option value=\"";
                echo $this->getAttribute($context["voucher_theme"], "voucher_theme_id", array());
                echo "\">";
                echo $this->getAttribute($context["voucher_theme"], "name", array());
                echo "</option>
                    ";
            }
            // line 94
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher_theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-message\">";
        // line 99
        echo (isset($context["entry_message"]) ? $context["entry_message"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"message\" rows=\"5\" placeholder=\"";
        // line 101
        echo (isset($context["entry_message"]) ? $context["entry_message"] : null);
        echo "\" id=\"input-message\" class=\"form-control\">";
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "</textarea>
                </div>
              </div>
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-amount\">";
        // line 105
        echo (isset($context["entry_amount"]) ? $context["entry_amount"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"amount\" value=\"";
        // line 107
        echo (isset($context["amount"]) ? $context["amount"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_amount"]) ? $context["entry_amount"] : null);
        echo "\" id=\"input-amount\" class=\"form-control\" />
                  ";
        // line 108
        if ((isset($context["error_amount"]) ? $context["error_amount"] : null)) {
            // line 109
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_amount"]) ? $context["error_amount"] : null);
            echo "</div>
                  ";
        }
        // line 111
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 114
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 117
        if ((isset($context["status"]) ? $context["status"] : null)) {
            // line 118
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\">";
            // line 119
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        } else {
            // line 121
            echo "                    <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 122
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                    ";
        }
        // line 124
        echo "                  </select>
                </div>
              </div>
            </div>
            ";
        // line 128
        if ((isset($context["voucher_id"]) ? $context["voucher_id"] : null)) {
            // line 129
            echo "            <div class=\"tab-pane\" id=\"tab-history\">
              <div id=\"history\"></div>
            </div>
            ";
        }
        // line 133
        echo "          </div>
        </form>
      </div>
    </div>
  </div>
  ";
        // line 138
        if ((isset($context["voucher_id"]) ? $context["voucher_id"] : null)) {
            // line 139
            echo "  <script type=\"text/javascript\"><!--
\$('#button-send').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=sale/voucher/send&user_token=";
            // line 142
            echo (isset($context["user_token"]) ? $context["user_token"] : null);
            echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'voucher_id=";
            // line 145
            echo (isset($context["voucher_id"]) ? $context["voucher_id"] : null);
            echo "',
\t\tbeforeSend: function() {
\t\t\t\$('#button-send i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t\t\$('#button-send').prop('disabled', true);
\t\t},\t
\t\tcomplete: function() {
\t\t\t\$('#button-send i').replaceWith('<i class=\"fa fa-envelope\"></i>');
\t\t\t\$('#button-send').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();
\t\t\t
\t\t\tif (json['error']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}
\t\t\t
\t\t\tif (json['success']) {
\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i>  ' + json['success'] + '</div>');
\t\t\t}\t\t
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});\t
})
//--></script> 
  <script type=\"text/javascript\"><!--
\$('#history').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#history').load(this.href);
});\t\t\t

\$('#history').load('index.php?route=sale/voucher/history&user_token=";
            // line 178
            echo (isset($context["user_token"]) ? $context["user_token"] : null);
            echo "&voucher_id=";
            echo (isset($context["voucher_id"]) ? $context["voucher_id"] : null);
            echo "');
//--></script>
";
        }
        // line 181
        echo "</div>
";
        // line 182
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "sale/voucher_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 182,  423 => 181,  415 => 178,  379 => 145,  373 => 142,  368 => 139,  366 => 138,  359 => 133,  353 => 129,  351 => 128,  345 => 124,  340 => 122,  335 => 121,  330 => 119,  325 => 118,  323 => 117,  317 => 114,  312 => 111,  306 => 109,  304 => 108,  298 => 107,  293 => 105,  284 => 101,  279 => 99,  273 => 95,  267 => 94,  259 => 92,  251 => 90,  248 => 89,  244 => 88,  238 => 85,  233 => 82,  227 => 80,  225 => 79,  219 => 78,  214 => 76,  209 => 73,  203 => 71,  201 => 70,  195 => 69,  190 => 67,  185 => 64,  179 => 62,  177 => 61,  171 => 60,  166 => 58,  161 => 55,  155 => 53,  153 => 52,  147 => 51,  142 => 49,  137 => 46,  131 => 44,  129 => 43,  123 => 42,  116 => 40,  110 => 36,  104 => 34,  102 => 33,  98 => 32,  93 => 30,  87 => 27,  83 => 25,  75 => 21,  73 => 20,  67 => 16,  56 => 14,  52 => 13,  47 => 11,  41 => 10,  36 => 9,  30 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         {% if voucher_id %}*/
/*         <button type="button" id="button-send" data-toggle="tooltip" title="{{ button_send }}" class="btn btn-primary"><i class="fa fa-envelope"></i></button>*/
/*         {% endif %}*/
/*         <button type="submit" form="form-voucher" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-voucher" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }}</a></li>*/
/*             {% if voucher_id %}*/
/*             <li><a href="#tab-history" data-toggle="tab">{{ tab_history }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-code"><span data-toggle="tooltip" title="{{ help_code }}">{{ entry_code }}</span></label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="code" value="{{ code }}" placeholder="{{ entry_code }}" id="input-code" class="form-control" />*/
/*                   {% if error_code %}*/
/*                   <div class="text-danger">{{ error_code }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-from-name">{{ entry_from_name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="from_name" value="{{ from_name }}" placeholder="{{ entry_from_name }}" id="input-from-name" class="form-control" />*/
/*                   {% if error_from_name %}*/
/*                   <div class="text-danger">{{ error_from_name }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-from-email">{{ entry_from_email }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="from_email" value="{{ from_email }}" placeholder="{{ entry_from_email }}" id="input-from-email" class="form-control" />*/
/*                   {% if error_from_email %}*/
/*                   <div class="text-danger">{{ error_from_email }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-to-name">{{ entry_to_name }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="to_name" value="{{ to_name }}" placeholder="{{ entry_to_name }}" id="input-to-name" class="form-control" />*/
/*                   {% if error_to_name %}*/
/*                   <div class="text-danger">{{ error_to_name }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-to-email">{{ entry_to_email }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="to_email" value="{{ to_email }}" placeholder="{{ entry_to_email }}" id="input-to-email" class="form-control" />*/
/*                   {% if error_to_email %}*/
/*                   <div class="text-danger">{{ error_to_email }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-theme">{{ entry_theme }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="voucher_theme_id" id="input-theme" class="form-control">*/
/*                     {% for voucher_theme in voucher_themes %}*/
/*                     {% if voucher_theme.voucher_theme_id == voucher_theme_id %}*/
/*                     <option value="{{ voucher_theme.voucher_theme_id }}" selected="selected">{{ voucher_theme.name }}</option>*/
/*                     {% else %}*/
/*                     <option value="{{ voucher_theme.voucher_theme_id }}">{{ voucher_theme.name }}</option>*/
/*                     {% endif %}*/
/*                     {% endfor %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-message">{{ entry_message }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <textarea name="message" rows="5" placeholder="{{ entry_message }}" id="input-message" class="form-control">{{ message }}</textarea>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-amount">{{ entry_amount }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <input type="text" name="amount" value="{{ amount }}" placeholder="{{ entry_amount }}" id="input-amount" class="form-control" />*/
/*                   {% if error_amount %}*/
/*                   <div class="text-danger">{{ error_amount }}</div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*                 <div class="col-sm-10">*/
/*                   <select name="status" id="input-status" class="form-control">*/
/*                     {% if status %}*/
/*                     <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                     <option value="0">{{ text_disabled }}</option>*/
/*                     {% else %}*/
/*                     <option value="1">{{ text_enabled }}</option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                     {% endif %}*/
/*                   </select>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             {% if voucher_id %}*/
/*             <div class="tab-pane" id="tab-history">*/
/*               <div id="history"></div>*/
/*             </div>*/
/*             {% endif %}*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% if voucher_id %}*/
/*   <script type="text/javascript"><!--*/
/* $('#button-send').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=sale/voucher/send&user_token={{ user_token }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: 'voucher_id={{ voucher_id }}',*/
/* 		beforeSend: function() {*/
/* 			$('#button-send i').replaceWith('<i class="fa fa-circle-o-notch fa-spin"></i>');*/
/* 			$('#button-send').prop('disabled', true);*/
/* 		},	*/
/* 		complete: function() {*/
/* 			$('#button-send i').replaceWith('<i class="fa fa-envelope"></i>');*/
/* 			$('#button-send').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* 			*/
/* 			if (json['error']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* 			*/
/* 			if (json['success']) {*/
/* 				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i>  ' + json['success'] + '</div>');*/
/* 			}		*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});	*/
/* })*/
/* //--></script> */
/*   <script type="text/javascript"><!--*/
/* $('#history').delegate('.pagination a', 'click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#history').load(this.href);*/
/* });			*/
/* */
/* $('#history').load('index.php?route=sale/voucher/history&user_token={{ user_token }}&voucher_id={{ voucher_id }}');*/
/* //--></script>*/
/* {% endif %}*/
/* </div>*/
/* {{ footer }}*/
