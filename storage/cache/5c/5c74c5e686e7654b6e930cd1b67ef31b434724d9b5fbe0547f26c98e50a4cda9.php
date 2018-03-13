<?php

/* extension/module/isenselabs_seo/tab_seo_analysis.twig */
class __TwigTemplate_d35d7968a18722e52d8b8e020c6426f7e2ca527ae2d05209a3cb86f943d69997 extends Twig_Template
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
        echo "<div class=\"col-xs-12 col-md-8 seo-analysis-tab\">
    <br />
    <div class=\"loader\"></div>
</div>
<div class=\"col-xs-12 col-md-4\">
\t<div class=\"box-heading\">
    \t<h1><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>";
        // line 7
        echo (isset($context["text_seo_analysis_helper_title"]) ? $context["text_seo_analysis_helper_title"] : null);
        echo "</h1>
    </div>
    <div class=\"box-content\">
    \t";
        // line 10
        echo (isset($context["text_seo_analysis_helper"]) ? $context["text_seo_analysis_helper"] : null);
        echo " 
    </div>
    <br /><br />
    <strong>";
        // line 13
        echo (isset($context["text_crawler_actions"]) ? $context["text_crawler_actions"] : null);
        echo " </strong>:
    <p><br />
    ";
        // line 15
        if ((isset($context["toggle_seo_analysis"]) ? $context["toggle_seo_analysis"] : null)) {
            echo " 
    <a class=\"btn btn-sm btn-default\" href=\"";
            // line 16
            echo (isset($context["toggle_seo_analysis_url"]) ? $context["toggle_seo_analysis_url"] : null);
            echo " \">";
            echo (isset($context["btn_disable_seo_analysis"]) ? $context["btn_disable_seo_analysis"] : null);
            echo "</a>
    ";
        } else {
            // line 17
            echo "  
    <a class=\"btn btn-sm btn-primary\" href=\"";
            // line 18
            echo (isset($context["toggle_seo_analysis_url"]) ? $context["toggle_seo_analysis_url"] : null);
            echo " \">";
            echo (isset($context["btn_enable_seo_analysis"]) ? $context["btn_enable_seo_analysis"] : null);
            echo "</a>
    ";
        }
        // line 19
        echo " 
    <br /><br />
    <a class=\"btn btn-sm btn-primary\" onClick=\"clearAnalysisResults();\">";
        // line 21
        echo (isset($context["text_clear_analysis_list"]) ? $context["text_clear_analysis_list"] : null);
        echo "</a>
    </p>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/tab_seo_analysis.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 21,  65 => 19,  58 => 18,  55 => 17,  48 => 16,  44 => 15,  39 => 13,  33 => 10,  27 => 7,  19 => 1,);
    }
}
/* <div class="col-xs-12 col-md-8 seo-analysis-tab">*/
/*     <br />*/
/*     <div class="loader"></div>*/
/* </div>*/
/* <div class="col-xs-12 col-md-4">*/
/* 	<div class="box-heading">*/
/*     	<h1><i class="fa fa-info-circle" aria-hidden="true"></i>{{ text_seo_analysis_helper_title }}</h1>*/
/*     </div>*/
/*     <div class="box-content">*/
/*     	{{ text_seo_analysis_helper }} */
/*     </div>*/
/*     <br /><br />*/
/*     <strong>{{ text_crawler_actions }} </strong>:*/
/*     <p><br />*/
/*     {% if toggle_seo_analysis %} */
/*     <a class="btn btn-sm btn-default" href="{{ toggle_seo_analysis_url }} ">{{ btn_disable_seo_analysis }}</a>*/
/*     {% else %}  */
/*     <a class="btn btn-sm btn-primary" href="{{ toggle_seo_analysis_url }} ">{{ btn_enable_seo_analysis }}</a>*/
/*     {% endif %} */
/*     <br /><br />*/
/*     <a class="btn btn-sm btn-primary" onClick="clearAnalysisResults();">{{ text_clear_analysis_list }}</a>*/
/*     </p>*/
/* </div>*/
