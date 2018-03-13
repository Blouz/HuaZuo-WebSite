<?php

/* extension/module/isenselabs_seo/urls_linking_tab/tab_autolinks.twig */
class __TwigTemplate_25bf3e660046e35e27ae9cf17fe959992027ba1b9c0575021eae985325e12963 extends Twig_Template
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
  \t\t<div class=\"col-xs-12 col-md-8 auto-links-results\">
            <br />
            <div class=\"loader\"></div>
  \t\t</div>
  \t\t<div class=\"col-xs-12 col-md-4\">
            <div class=\"box-heading\">
                <h1>";
        // line 9
        echo (isset($context["tab_autolinks_helper_title"]) ? $context["tab_autolinks_helper_title"] : null);
        echo "</h1>
            </div>
            <div class=\"box-content\">
                ";
        // line 12
        echo (isset($context["tab_autolinks_helper"]) ? $context["tab_autolinks_helper"] : null);
        echo "
            </div>
        </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/urls_linking_tab/tab_autolinks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  29 => 9,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/*   		<div class="col-xs-12 col-md-8 auto-links-results">*/
/*             <br />*/
/*             <div class="loader"></div>*/
/*   		</div>*/
/*   		<div class="col-xs-12 col-md-4">*/
/*             <div class="box-heading">*/
/*                 <h1>{{ tab_autolinks_helper_title }}</h1>*/
/*             </div>*/
/*             <div class="box-content">*/
/*                 {{ tab_autolinks_helper }}*/
/*             </div>*/
/*         </div>*/
/* 	</div>*/
/* </div>*/
