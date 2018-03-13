<?php

/* extension/module/isenselabs_seo/missing_pages_tab/tab_redirects.twig */
class __TwigTemplate_b79180c8322f47c628edeee07d6512e049fab6d093426ff7401de3312763fbbd extends Twig_Template
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
  \t\t<div class=\"col-xs-12 col-md-8 tab-redirects-results\">
            <br />
            <div class=\"loader\"></div>
  \t\t</div>
  \t\t
  \t\t<div class=\"col-xs-12 col-md-4\">
          <div class=\"box-heading\">
  \t\t    <h1><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>";
        // line 10
        echo (isset($context["tab_redirects_helper_title"]) ? $context["tab_redirects_helper_title"] : null);
        echo "</h1>
          </div>
          <div class=\"box-content\">
  \t\t    ";
        // line 13
        echo (isset($context["tab_redirects_helper"]) ? $context["tab_redirects_helper"] : null);
        echo " 
          </div>
      </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/missing_pages_tab/tab_redirects.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  30 => 10,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/*   		<div class="col-xs-12 col-md-8 tab-redirects-results">*/
/*             <br />*/
/*             <div class="loader"></div>*/
/*   		</div>*/
/*   		*/
/*   		<div class="col-xs-12 col-md-4">*/
/*           <div class="box-heading">*/
/*   		    <h1><i class="fa fa-info-circle" aria-hidden="true"></i>{{ tab_redirects_helper_title }}</h1>*/
/*           </div>*/
/*           <div class="box-content">*/
/*   		    {{ tab_redirects_helper }} */
/*           </div>*/
/*       </div>*/
/* 	</div>*/
/* </div>*/
