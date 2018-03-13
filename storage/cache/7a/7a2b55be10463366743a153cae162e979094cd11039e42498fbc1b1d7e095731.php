<?php

/* extension/payment/wechat_pay.twig */
class __TwigTemplate_a6069fc40d13bf8e08017100be5557c79364b32e0511131e309c2c5aeb63d4c3 extends Twig_Template
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
        <button type=\"submit\" form=\"form-payment\" data-toggle=\"tooltip\" title=\"";
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
  <div class=\"container-fluid\">
    ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-payment\" class=\"form-horizontal\">
          <div class=\"tab-content\">
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"entry-app-id\">";
        // line 30
        echo (isset($context["entry_app_id"]) ? $context["entry_app_id"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_wechat_pay_app_id\" value=\"";
        // line 32
        echo (isset($context["payment_wechat_pay_app_id"]) ? $context["payment_wechat_pay_app_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_app_id"]) ? $context["entry_app_id"] : null);
        echo "\" id=\"entry-app-id\" class=\"form-control\"/>
                ";
        // line 33
        if ((isset($context["error_app_id"]) ? $context["error_app_id"] : null)) {
            // line 34
            echo "                <div class=\"text-danger\">";
            echo (isset($context["error_app_id"]) ? $context["error_app_id"] : null);
            echo "</div>
                ";
        }
        // line 36
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"entry-app-secret\">";
        // line 39
        echo (isset($context["entry_app_secret"]) ? $context["entry_app_secret"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_wechat_pay_app_secret\" value=\"";
        // line 41
        echo (isset($context["payment_wechat_pay_app_secret"]) ? $context["payment_wechat_pay_app_secret"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_app_secret"]) ? $context["entry_app_secret"] : null);
        echo "\" id=\"entry-app-secret\" class=\"form-control\"/>
                ";
        // line 42
        if ((isset($context["error_app_secret"]) ? $context["error_app_secret"] : null)) {
            // line 43
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_app_secret"]) ? $context["error_app_secret"] : null);
            echo "</div>
                ";
        }
        // line 45
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"entry-mch-id\">";
        // line 48
        echo (isset($context["entry_mch_id"]) ? $context["entry_mch_id"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_wechat_pay_mch_id\" value=\"";
        // line 50
        echo (isset($context["payment_wechat_pay_mch_id"]) ? $context["payment_wechat_pay_mch_id"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_mch_id"]) ? $context["entry_mch_id"] : null);
        echo "\" id=\"entry-mch-id\" class=\"form-control\"/>
                ";
        // line 51
        if ((isset($context["error_mch_id"]) ? $context["error_mch_id"] : null)) {
            // line 52
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_mch_id"]) ? $context["error_mch_id"] : null);
            echo "</div>
                ";
        }
        // line 54
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"entry-api-secret\">";
        // line 57
        echo (isset($context["entry_api_secret"]) ? $context["entry_api_secret"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_wechat_pay_api_secret\" value=\"";
        // line 59
        echo (isset($context["payment_wechat_pay_api_secret"]) ? $context["payment_wechat_pay_api_secret"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_api_secret"]) ? $context["entry_api_secret"] : null);
        echo "\" id=\"entry-api-secret\" class=\"form-control\"/>
                ";
        // line 60
        if ((isset($context["error_api_secret"]) ? $context["error_api_secret"] : null)) {
            // line 61
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_api_secret"]) ? $context["error_api_secret"] : null);
            echo "</div>
                ";
        }
        // line 63
        echo "              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-total\"><span data-toggle=\"tooltip\" title=\"";
        // line 66
        echo (isset($context["help_total"]) ? $context["help_total"] : null);
        echo "\">";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_wechat_pay_total\" value=\"";
        // line 68
        echo (isset($context["payment_wechat_pay_total"]) ? $context["payment_wechat_pay_total"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_total"]) ? $context["entry_total"] : null);
        echo "\" id=\"input-total\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-currency\"><span data-toggle=\"tooltip\" title=\"";
        // line 72
        echo (isset($context["help_currency"]) ? $context["help_currency"] : null);
        echo "\">";
        echo (isset($context["entry_currency"]) ? $context["entry_currency"] : null);
        echo "</span></label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_wechat_pay_currency\" value=\"";
        // line 74
        echo (isset($context["payment_wechat_pay_currency"]) ? $context["payment_wechat_pay_currency"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_currency"]) ? $context["entry_currency"] : null);
        echo "\" id=\"input-currency\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-completed-status\">";
        // line 78
        echo (isset($context["entry_completed_status"]) ? $context["entry_completed_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_wechat_pay_completed_status_id\" id=\"input-completed-status\" class=\"form-control\">
                  ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["order_statuses"]) ? $context["order_statuses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order_status"]) {
            // line 82
            echo "                    ";
            if (($this->getAttribute($context["order_status"], "order_status_id", array()) == (isset($context["payment_wechat_pay_completed_status_id"]) ? $context["payment_wechat_pay_completed_status_id"] : null))) {
                // line 83
                echo "                      <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            } else {
                // line 85
                echo "                      <option value=\"";
                echo $this->getAttribute($context["order_status"], "order_status_id", array());
                echo "\">";
                echo $this->getAttribute($context["order_status"], "name", array());
                echo "</option>
                    ";
            }
            // line 87
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-geo-zone\">";
        // line 92
        echo (isset($context["entry_geo_zone"]) ? $context["entry_geo_zone"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_wechat_pay_geo_zone_id\" id=\"input-geo-zone\" class=\"form-control\">
                  <option value=\"0\">";
        // line 95
        echo (isset($context["text_all_zones"]) ? $context["text_all_zones"] : null);
        echo "</option>
                  ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geo_zones"]) ? $context["geo_zones"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["geo_zone"]) {
            // line 97
            echo "                  ";
            if (($this->getAttribute($context["geo_zone"], "geo_zone_id", array()) == (isset($context["payment_wechat_pay_geo_zone_id"]) ? $context["payment_wechat_pay_geo_zone_id"] : null))) {
                // line 98
                echo "                  <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                  ";
            } else {
                // line 100
                echo "                  <option value=\"";
                echo $this->getAttribute($context["geo_zone"], "geo_zone_id", array());
                echo "\">";
                echo $this->getAttribute($context["geo_zone"], "name", array());
                echo "</option>
                  ";
            }
            // line 102
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 107
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"payment_wechat_pay_status\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 110
        if ((isset($context["payment_wechat_pay_status"]) ? $context["payment_wechat_pay_status"] : null)) {
            // line 111
            echo "                  <option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\">";
            // line 112
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        } else {
            // line 114
            echo "                  <option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
                  <option value=\"0\" selected=\"selected\">";
            // line 115
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
                  ";
        }
        // line 117
        echo "                </select>
              </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 121
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"payment_wechat_pay_sort_order\" value=\"";
        // line 123
        echo (isset($context["payment_wechat_pay_sort_order"]) ? $context["payment_wechat_pay_sort_order"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
              </div>
            </div>
          </div>
        </form>
        <div class=\"alert alert-info\">";
        // line 128
        echo (isset($context["help_wechat_pay_setup"]) ? $context["help_wechat_pay_setup"] : null);
        echo "</div>
      </div>
    </div>
  </div>
</div>
";
        // line 133
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/payment/wechat_pay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 133,  353 => 128,  343 => 123,  338 => 121,  332 => 117,  327 => 115,  322 => 114,  317 => 112,  312 => 111,  310 => 110,  304 => 107,  298 => 103,  292 => 102,  284 => 100,  276 => 98,  273 => 97,  269 => 96,  265 => 95,  259 => 92,  253 => 88,  247 => 87,  239 => 85,  231 => 83,  228 => 82,  224 => 81,  218 => 78,  209 => 74,  202 => 72,  193 => 68,  186 => 66,  181 => 63,  175 => 61,  173 => 60,  167 => 59,  162 => 57,  157 => 54,  151 => 52,  149 => 51,  143 => 50,  138 => 48,  133 => 45,  127 => 43,  125 => 42,  119 => 41,  114 => 39,  109 => 36,  103 => 34,  101 => 33,  95 => 32,  90 => 30,  84 => 27,  78 => 24,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-payment" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
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
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-payment" class="form-horizontal">*/
/*           <div class="tab-content">*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="entry-app-id">{{ entry_app_id }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="payment_wechat_pay_app_id" value="{{ payment_wechat_pay_app_id }}" placeholder="{{ entry_app_id }}" id="entry-app-id" class="form-control"/>*/
/*                 {% if error_app_id %}*/
/*                 <div class="text-danger">{{ error_app_id }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="entry-app-secret">{{ entry_app_secret }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="payment_wechat_pay_app_secret" value="{{ payment_wechat_pay_app_secret }}" placeholder="{{ entry_app_secret }}" id="entry-app-secret" class="form-control"/>*/
/*                 {% if error_app_secret %}*/
/*                   <div class="text-danger">{{ error_app_secret }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="entry-mch-id">{{ entry_mch_id }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="payment_wechat_pay_mch_id" value="{{ payment_wechat_pay_mch_id }}" placeholder="{{ entry_mch_id }}" id="entry-mch-id" class="form-control"/>*/
/*                 {% if error_mch_id %}*/
/*                   <div class="text-danger">{{ error_mch_id }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="entry-api-secret">{{ entry_api_secret }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="payment_wechat_pay_api_secret" value="{{ payment_wechat_pay_api_secret }}" placeholder="{{ entry_api_secret }}" id="entry-api-secret" class="form-control"/>*/
/*                 {% if error_api_secret %}*/
/*                   <div class="text-danger">{{ error_api_secret }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-total"><span data-toggle="tooltip" title="{{ help_total }}">{{ entry_total }}</span></label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="payment_wechat_pay_total" value="{{ payment_wechat_pay_total }}" placeholder="{{ entry_total }}" id="input-total" class="form-control"/>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-currency"><span data-toggle="tooltip" title="{{ help_currency }}">{{ entry_currency }}</span></label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="payment_wechat_pay_currency" value="{{ payment_wechat_pay_currency }}" placeholder="{{ entry_currency }}" id="input-currency" class="form-control"/>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-completed-status">{{ entry_completed_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_wechat_pay_completed_status_id" id="input-completed-status" class="form-control">*/
/*                   {% for order_status in order_statuses %}*/
/*                     {% if order_status.order_status_id == payment_wechat_pay_completed_status_id %}*/
/*                       <option value="{{ order_status.order_status_id }}" selected="selected">{{ order_status.name }}</option>*/
/*                     {% else %}*/
/*                       <option value="{{ order_status.order_status_id }}">{{ order_status.name }}</option>*/
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-geo-zone">{{ entry_geo_zone }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_wechat_pay_geo_zone_id" id="input-geo-zone" class="form-control">*/
/*                   <option value="0">{{ text_all_zones }}</option>*/
/*                   {% for geo_zone in geo_zones %}*/
/*                   {% if geo_zone.geo_zone_id == payment_wechat_pay_geo_zone_id %}*/
/*                   <option value="{{ geo_zone.geo_zone_id }}" selected="selected">{{ geo_zone.name }}</option>*/
/*                   {% else %}*/
/*                   <option value="{{ geo_zone.geo_zone_id }}">{{ geo_zone.name }}</option>*/
/*                   {% endif %}*/
/*                   {% endfor %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-status">{{ entry_status }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="payment_wechat_pay_status" id="input-status" class="form-control">*/
/*                   {% if payment_wechat_pay_status %}*/
/*                   <option value="1" selected="selected">{{ text_enabled }}</option>*/
/*                   <option value="0">{{ text_disabled }}</option>*/
/*                   {% else %}*/
/*                   <option value="1">{{ text_enabled }}</option>*/
/*                   <option value="0" selected="selected">{{ text_disabled }}</option>*/
/*                   {% endif %}*/
/*                 </select>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-sort-order">{{ entry_sort_order }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="payment_wechat_pay_sort_order" value="{{ payment_wechat_pay_sort_order }}" placeholder="{{ entry_sort_order }}" id="input-sort-order" class="form-control"/>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*         <div class="alert alert-info">{{ help_wechat_pay_setup }}</div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
