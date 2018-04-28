<?php

/* journal2/template/account/wishlist.twig */
class __TwigTemplate_08e6545cac9db43d492483215e5b68e629ecdc9ff65ebb0b8a6a7a47cc7595db extends Twig_Template
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
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "    <div class=\"alert alert-success alert-dismissible success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1 class=\"heading-title\">";
        // line 22
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 23
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 24
            echo "        <div class=\"content wishlist-info\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
            <tr>
              <td class=\"text-center image\">";
            // line 29
            echo (isset($context["column_image"]) ? $context["column_image"] : null);
            echo "</td>
              <td class=\"text-left name\">";
            // line 30
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</td>
              <td class=\"text-left model\">";
            // line 31
            echo (isset($context["column_model"]) ? $context["column_model"] : null);
            echo "</td>
              <td class=\"text-right stock\">";
            // line 32
            echo (isset($context["column_stock"]) ? $context["column_stock"] : null);
            echo "</td>
              <td class=\"text-right price\">";
            // line 33
            echo (isset($context["column_price"]) ? $context["column_price"] : null);
            echo "</td>
              <td class=\"text-right action\">";
            // line 34
            echo (isset($context["column_action"]) ? $context["column_action"] : null);
            echo "</td>
            </tr>
            </thead>
            <tbody>

            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 40
                echo "              <tr>
                <td class=\"text-center image\">";
                // line 41
                if ($this->getAttribute($context["product"], "thumb", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\"/></a>";
                }
                echo "</td>
                <td class=\"text-left name\"><a href=\"";
                // line 42
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></td>
                <td class=\"text-left model\">";
                // line 43
                echo $this->getAttribute($context["product"], "model", array());
                echo "</td>
                <td class=\"text-right stock\">";
                // line 44
                echo $this->getAttribute($context["product"], "stock", array());
                echo "</td>
                <td class=\"text-right price\">";
                // line 45
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 46
                    echo "                    <div class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 47
                        echo "                        ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                      ";
                    } else {
                        // line 48
                        echo " <b>";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</b> <s>";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</s> ";
                    }
                    echo " </div>
                  ";
                }
                // line 49
                echo "</td>
                <td class=\"text-right action\">
                  <button type=\"button\" onclick=\"cart.add('";
                // line 51
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
                  <a href=\"";
                // line 52
                echo $this->getAttribute($context["product"], "remove", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "            </tbody>

          </table>
        </div>
        </div>
      ";
        } else {
            // line 61
            echo "        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
      ";
        }
        // line 63
        echo "      <div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
        // line 64
        echo (isset($context["continue"]) ? $context["continue"] : null);
        echo "\" class=\"btn btn-primary button\">";
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "</a></div>
      </div>
      ";
        // line 66
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>
";
        // line 69
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 69,  228 => 66,  221 => 64,  218 => 63,  212 => 61,  204 => 55,  193 => 52,  187 => 51,  183 => 49,  173 => 48,  167 => 47,  164 => 46,  162 => 45,  158 => 44,  154 => 43,  148 => 42,  134 => 41,  131 => 40,  127 => 39,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  103 => 30,  99 => 29,  92 => 24,  90 => 23,  86 => 22,  79 => 21,  76 => 20,  73 => 19,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  59 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if success %}*/
/*     <div class="alert alert-success alert-dismissible success"><i class="fa fa-check-circle"></i> {{ success }}*/
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
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {% if products %}*/
/*         <div class="content wishlist-info">*/
/*         <div class="table-responsive">*/
/*           <table class="table table-bordered table-hover">*/
/*             <thead>*/
/*             <tr>*/
/*               <td class="text-center image">{{ column_image }}</td>*/
/*               <td class="text-left name">{{ column_name }}</td>*/
/*               <td class="text-left model">{{ column_model }}</td>*/
/*               <td class="text-right stock">{{ column_stock }}</td>*/
/*               <td class="text-right price">{{ column_price }}</td>*/
/*               <td class="text-right action">{{ column_action }}</td>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/* */
/*             {% for product in products %}*/
/*               <tr>*/
/*                 <td class="text-center image">{% if product.thumb %}<a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}"/></a>{% endif %}</td>*/
/*                 <td class="text-left name"><a href="{{ product.href }}">{{ product.name }}</a></td>*/
/*                 <td class="text-left model">{{ product.model }}</td>*/
/*                 <td class="text-right stock">{{ product.stock }}</td>*/
/*                 <td class="text-right price">{% if product.price %}*/
/*                     <div class="price"> {% if not product.special %}*/
/*                         {{ product.price }}*/
/*                       {% else %} <b>{{ product.special }}</b> <s>{{ product.price }}</s> {% endif %} </div>*/
/*                   {% endif %}</td>*/
/*                 <td class="text-right action">*/
/*                   <button type="button" onclick="cart.add('{{ product.product_id }}');" data-toggle="tooltip" title="{{ button_cart }}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></button>*/
/*                   <a href="{{ product.remove }}" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-times"></i></a></td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/* */
/*           </table>*/
/*         </div>*/
/*         </div>*/
/*       {% else %}*/
/*         <p>{{ text_empty }}</p>*/
/*       {% endif %}*/
/*       <div class="buttons clearfix">*/
/*         <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary button">{{ button_continue }}</a></div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
