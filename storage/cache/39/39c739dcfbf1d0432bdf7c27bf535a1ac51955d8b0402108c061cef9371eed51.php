<?php

/* journal2/template/checkout/cart.twig */
class __TwigTemplate_3680aa4aa2d6ee06dacfdf9ebe2c2e739f5c3c411a82e3ff50151b65cc59a145 extends Twig_Template
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
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</span></a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if ((isset($context["attention"]) ? $context["attention"] : null)) {
            // line 9
            echo "    <div class=\"alert alert-info information\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["attention"]) ? $context["attention"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 13
        echo "  ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 14
            echo "    <div class=\"alert alert-success alert-dismissible success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 18
        echo "  ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 23
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 24
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 25
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 27
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1 class=\"heading-title\">购物车</h1>
      <form action=\"";
        // line 33
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"table-responsive cart-info\">
          <table class=\"table table-bordered\">
            <thead>
            <tr>
              <td class=\"text-center image\">";
        // line 38
        echo (isset($context["column_image"]) ? $context["column_image"] : null);
        echo "</td>
              <td class=\"text-left name\">";
        // line 39
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</td>
              <td class=\"text-left model\">";
        // line 40
        echo (isset($context["column_model"]) ? $context["column_model"] : null);
        echo "</td>
              <td class=\"text-left quantity\">";
        // line 41
        echo (isset($context["column_quantity"]) ? $context["column_quantity"] : null);
        echo "</td>
              <td class=\"text-right price\">";
        // line 42
        echo (isset($context["column_price"]) ? $context["column_price"] : null);
        echo "</td>
              <td class=\"text-right total\">";
        // line 43
        echo (isset($context["column_total"]) ? $context["column_total"] : null);
        echo "</td>
            </tr>
            </thead>
            <tbody>

            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 49
            echo "              <tr>
                <td class=\"text-center image\">";
            // line 50
            if ($this->getAttribute($context["product"], "thumb", array())) {
                echo " <a href=\"";
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-thumbnail\"/></a> ";
            }
            echo "</td>
                <td class=\"text-left name\"><a href=\"";
            // line 51
            echo $this->getAttribute($context["product"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["product"], "name", array());
            echo "</a> ";
            if ( !$this->getAttribute($context["product"], "stock", array())) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 52
            echo "                  ";
            if ($this->getAttribute($context["product"], "option", array())) {
                // line 53
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    echo " <br/>
                      <small>";
                    // line 54
                    echo $this->getAttribute($context["option"], "name", array());
                    echo ": ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</small> ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                  ";
            }
            // line 56
            echo "                  ";
            if ($this->getAttribute($context["product"], "reward", array())) {
                echo " <br/>
                    <small>";
                // line 57
                echo $this->getAttribute($context["product"], "reward", array());
                echo "</small> ";
            }
            // line 58
            echo "                  ";
            if ($this->getAttribute($context["product"], "recurring", array())) {
                echo " <br/>
                    <span class=\"label label-info\">";
                // line 59
                echo (isset($context["text_recurring_item"]) ? $context["text_recurring_item"] : null);
                echo "</span>
                    <small>";
                // line 60
                echo $this->getAttribute($context["product"], "recurring", array());
                echo "</small> ";
            }
            echo "</td>
                <td class=\"text-left model\">";
            // line 61
            echo $this->getAttribute($context["product"], "model", array());
            echo "</td>
                <td class=\"text-left quantity\">
                  <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                    <input type=\"text\" name=\"quantity[";
            // line 64
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "]\" value=\"";
            echo $this->getAttribute($context["product"], "quantity", array());
            echo "\" size=\"1\" class=\"form-control\"/>
                    <span class=\"input-group-btn\">
                  <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 66
            echo (isset($context["button_update"]) ? $context["button_update"] : null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 67
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo $this->getAttribute($context["product"], "cart_id", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div>
                </td>
                <td class=\"text-right price\">";
            // line 70
            echo $this->getAttribute($context["product"], "price", array());
            echo "</td>
                <td class=\"text-right total\">";
            // line 71
            echo $this->getAttribute($context["product"], "total", array());
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vouchers"]) ? $context["vouchers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 75
            echo "              <tr>
                <td></td>
                <td class=\"text-left name\">";
            // line 77
            echo $this->getAttribute($context["voucher"], "description", array());
            echo "</td>
                <td class=\"text-left\"></td>
                <td class=\"text-left quantity\">
                  <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                    <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\"/>
                    <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 83
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger button\" onclick=\"voucher.remove('";
            echo $this->getAttribute($context["voucher"], "key", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div>
                </td>
                <td class=\"text-right price\">";
            // line 86
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
                <td class=\"text-right total\">";
            // line 87
            echo $this->getAttribute($context["voucher"], "amount", array());
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "            </tbody>

          </table>
        </div>
      </form>
      <div class=\"action-area\">
        <div class=\"row\">
          <div class=\"col-sm-4 col-sm-offset-8 cart-total\">
            <table class=\"table table-bordered\" id=\"total\">
              ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 100
            echo "                <tr>
                  <td class=\"text-right right\"><strong>";
            // line 101
            echo $this->getAttribute($context["total"], "title", array());
            echo ":</strong></td>
                  <td class=\"text-right right\">";
            // line 102
            echo $this->getAttribute($context["total"], "text", array());
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "            </table>
          </div>
        </div>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 109
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-default button\">";
        echo (isset($context["button_shopping"]) ? $context["button_shopping"] : null);
        echo "</a></div>
          <div class=\"pull-right\"><a href=\"";
        // line 110
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" class=\"btn btn-primary button\">";
        echo (isset($context["button_checkout"]) ? $context["button_checkout"] : null);
        echo "</a></div>
        </div>
      </div>
      ";
        // line 113
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>
";
        // line 116
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "journal2/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 116,  348 => 113,  340 => 110,  334 => 109,  328 => 105,  319 => 102,  315 => 101,  312 => 100,  308 => 99,  297 => 90,  288 => 87,  284 => 86,  276 => 83,  267 => 77,  263 => 75,  258 => 74,  249 => 71,  245 => 70,  237 => 67,  233 => 66,  226 => 64,  220 => 61,  214 => 60,  210 => 59,  205 => 58,  201 => 57,  196 => 56,  193 => 55,  184 => 54,  177 => 53,  174 => 52,  166 => 51,  152 => 50,  149 => 49,  145 => 48,  137 => 43,  133 => 42,  129 => 41,  125 => 40,  121 => 39,  117 => 38,  109 => 33,  101 => 31,  98 => 30,  95 => 29,  92 => 28,  89 => 27,  86 => 26,  83 => 25,  81 => 24,  75 => 23,  67 => 19,  64 => 18,  56 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if attention %}*/
/*     <div class="alert alert-info information"><i class="fa fa-info-circle"></i> {{ attention }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if success %}*/
/*     <div class="alert alert-success alert-dismissible success"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible warning"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1 class="heading-title">购物车</h1>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*         <div class="table-responsive cart-info">*/
/*           <table class="table table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*               <td class="text-center image">{{ column_image }}</td>*/
/*               <td class="text-left name">{{ column_name }}</td>*/
/*               <td class="text-left model">{{ column_model }}</td>*/
/*               <td class="text-left quantity">{{ column_quantity }}</td>*/
/*               <td class="text-right price">{{ column_price }}</td>*/
/*               <td class="text-right total">{{ column_total }}</td>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% for product in products %}*/
/*               <tr>*/
/*                 <td class="text-center image">{% if product.thumb %} <a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-thumbnail"/></a> {% endif %}</td>*/
/*                 <td class="text-left name"><a href="{{ product.href }}">{{ product.name }}</a> {% if not product.stock %} <span class="text-danger">***</span> {% endif %}*/
/*                   {% if product.option %}*/
/*                     {% for option in product.option %} <br/>*/
/*                       <small>{{ option.name }}: {{ option.value }}</small> {% endfor %}*/
/*                   {% endif %}*/
/*                   {% if product.reward %} <br/>*/
/*                     <small>{{ product.reward }}</small> {% endif %}*/
/*                   {% if product.recurring %} <br/>*/
/*                     <span class="label label-info">{{ text_recurring_item }}</span>*/
/*                     <small>{{ product.recurring }}</small> {% endif %}</td>*/
/*                 <td class="text-left model">{{ product.model }}</td>*/
/*                 <td class="text-left quantity">*/
/*                   <div class="input-group btn-block" style="max-width: 200px;">*/
/*                     <input type="text" name="quantity[{{ product.cart_id }}]" value="{{ product.quantity }}" size="1" class="form-control"/>*/
/*                     <span class="input-group-btn">*/
/*                   <button type="submit" data-toggle="tooltip" title="{{ button_update }}" class="btn btn-primary"><i class="fa fa-refresh"></i></button>*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger" onclick="cart.remove('{{ product.cart_id }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div>*/
/*                 </td>*/
/*                 <td class="text-right price">{{ product.price }}</td>*/
/*                 <td class="text-right total">{{ product.total }}</td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             {% for voucher in vouchers %}*/
/*               <tr>*/
/*                 <td></td>*/
/*                 <td class="text-left name">{{ voucher.description }}</td>*/
/*                 <td class="text-left"></td>*/
/*                 <td class="text-left quantity">*/
/*                   <div class="input-group btn-block" style="max-width: 200px;">*/
/*                     <input type="text" name="" value="1" size="1" disabled="disabled" class="form-control"/>*/
/*                     <span class="input-group-btn">*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger button" onclick="voucher.remove('{{ voucher.key }}');"><i class="fa fa-times-circle"></i></button>*/
/*                   </span></div>*/
/*                 </td>*/
/*                 <td class="text-right price">{{ voucher.amount }}</td>*/
/*                 <td class="text-right total">{{ voucher.amount }}</td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/* */
/*           </table>*/
/*         </div>*/
/*       </form>*/
/*       <div class="action-area">*/
/*         <div class="row">*/
/*           <div class="col-sm-4 col-sm-offset-8 cart-total">*/
/*             <table class="table table-bordered" id="total">*/
/*               {% for total in totals %}*/
/*                 <tr>*/
/*                   <td class="text-right right"><strong>{{ total.title }}:</strong></td>*/
/*                   <td class="text-right right">{{ total.text }}</td>*/
/*                 </tr>*/
/*               {% endfor %}*/
/*             </table>*/
/*           </div>*/
/*         </div>*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-left"><a href="{{ continue }}" class="btn btn-default button">{{ button_shopping }}</a></div>*/
/*           <div class="pull-right"><a href="{{ checkout }}" class="btn btn-primary button">{{ button_checkout }}</a></div>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }} */
/* */
