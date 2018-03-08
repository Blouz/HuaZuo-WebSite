<?php

/* extension/module/isenselabs_seo/missing_pages_tab/tab_detected_pages.twig */
class __TwigTemplate_9eebee912b0d6d31ab4374dcd504f47bf0ba655279d2aa289dd079cd4d982674 extends Twig_Template
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
        echo "<div class=\"container-fluid\">
\t<div class=\"row\">
  \t\t<div class=\"col-xs-12 col-md-8 tab-detected-pages-results\">
            <br />
            <div class=\"loader\"></div>
  \t\t</div>
  \t\t
  \t\t<div class=\"col-xs-12 col-md-4\">
          <div class=\"box-heading\">
  \t\t    <h1><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>";
        // line 10
        echo (isset($context["tab_detected_pages_helper_title"]) ? $context["tab_detected_pages_helper_title"] : null);
        echo "</h1>
          </div>
          <div class=\"box-content\">
  \t\t    ";
        // line 13
        echo (isset($context["tab_detected_pages_helper"]) ? $context["tab_detected_pages_helper"] : null);
        echo " 
            <br />
            <strong>";
        // line 15
        echo (isset($context["text_crawler_actions"]) ? $context["text_crawler_actions"] : null);
        echo " </strong>:
            <br />
            <br />
            ";
        // line 18
        if ((isset($context["toggle_404_detection"]) ? $context["toggle_404_detection"] : null)) {
            echo " 
            <a class=\"btn btn-sm btn-default\" href=\"";
            // line 19
            echo (isset($context["toggle_404_detection_url"]) ? $context["toggle_404_detection_url"] : null);
            echo " \">";
            echo (isset($context["text_disable_404_detection"]) ? $context["text_disable_404_detection"] : null);
            echo "</a>
            ";
        } else {
            // line 21
            echo "            <a class=\"btn btn-sm btn-primary\" href=\"";
            echo (isset($context["toggle_404_detection_url"]) ? $context["toggle_404_detection_url"] : null);
            echo " \">";
            echo (isset($context["text_enable_404_detection"]) ? $context["text_enable_404_detection"] : null);
            echo "</a>
            ";
        }
        // line 22
        echo " 
          </div>
      </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/missing_pages_tab/tab_detected_pages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  58 => 21,  51 => 19,  47 => 18,  41 => 15,  36 => 13,  30 => 10,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/*   		<div class="col-xs-12 col-md-8 tab-detected-pages-results">*/
/*             <br />*/
/*             <div class="loader"></div>*/
/*   		</div>*/
/*   		*/
/*   		<div class="col-xs-12 col-md-4">*/
/*           <div class="box-heading">*/
/*   		    <h1><i class="fa fa-info-circle" aria-hidden="true"></i>{{ tab_detected_pages_helper_title }}</h1>*/
/*           </div>*/
/*           <div class="box-content">*/
/*   		    {{ tab_detected_pages_helper }} */
/*             <br />*/
/*             <strong>{{ text_crawler_actions }} </strong>:*/
/*             <br />*/
/*             <br />*/
/*             {% if toggle_404_detection %} */
/*             <a class="btn btn-sm btn-default" href="{{ toggle_404_detection_url }} ">{{ text_disable_404_detection }}</a>*/
/*             {% else %}*/
/*             <a class="btn btn-sm btn-primary" href="{{ toggle_404_detection_url }} ">{{ text_enable_404_detection }}</a>*/
/*             {% endif %} */
/*           </div>*/
/*       </div>*/
/* 	</div>*/
/* </div>*/
