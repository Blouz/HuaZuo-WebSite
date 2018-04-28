<?php

/* journal2/template/account/password.twig */
class __TwigTemplate_d55eb60d7e49b59adc41f42c5dcd31ab038808c3b158967e1bc182530ba5bb7e extends Twig_Template
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
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      <h1 class=\"heading-title\">";
        // line 17
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 18
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"content\">
        <form action=\"";
        // line 20
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 22
        echo (isset($context["text_password"]) ? $context["text_password"] : null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 24
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"password\" name=\"password\" value=\"";
        // line 26
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                ";
        // line 27
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 28
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
                ";
        }
        // line 30
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 33
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"password\" name=\"confirm\" value=\"";
        // line 35
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                ";
        // line 36
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            // line 37
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</div>
                ";
        }
        // line 39
        echo "              </div>
            </div>
          </fieldset>
          <div class=\"buttons clearfix\">
            <div class=\"pull-left\"><a href=\"";
        // line 43
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default button\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a></div>
            <div class=\"pull-right\">
              <input type=\"submit\" value=\"";
        // line 45
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-primary button\"/>
            </div>
          </div>
        </form>
      </div>
      ";
        // line 50
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>
";
        // line 53
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/account/password.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 53,  156 => 50,  148 => 45,  141 => 43,  135 => 39,  129 => 37,  127 => 36,  121 => 35,  116 => 33,  111 => 30,  105 => 28,  103 => 27,  97 => 26,  92 => 24,  87 => 22,  82 => 20,  77 => 18,  73 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  50 => 10,  48 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {{ content_top }}*/
/*       <div class="content">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*           <fieldset>*/
/*             <legend>{{ text_password }}</legend>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-password">{{ entry_password }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control"/>*/
/*                 {% if error_password %}*/
/*                   <div class="text-danger">{{ error_password }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-confirm">{{ entry_confirm }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="password" name="confirm" value="{{ confirm }}" placeholder="{{ entry_confirm }}" id="input-confirm" class="form-control"/>*/
/*                 {% if error_confirm %}*/
/*                   <div class="text-danger">{{ error_confirm }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <div class="buttons clearfix">*/
/*             <div class="pull-left"><a href="{{ back }}" class="btn btn-default button">{{ button_back }}</a></div>*/
/*             <div class="pull-right">*/
/*               <input type="submit" value="{{ button_continue }}" class="btn btn-primary button"/>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
