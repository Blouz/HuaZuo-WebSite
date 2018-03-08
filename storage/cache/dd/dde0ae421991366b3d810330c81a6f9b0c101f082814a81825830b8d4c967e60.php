<?php

/* extension/module/isenselabs_seo/urls_linking_tab/tab_customurls.twig */
class __TwigTemplate_e6451580fc601f7c54dbae40b68106230c05d7a51fe9d7126c4758b11998134f extends Twig_Template
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
  \t\t<div class=\"col-xs-12 col-md-8 custom-urls-results\">
            <br />
            <div class=\"loader\"></div>
  \t\t</div>
  \t\t<div class=\"col-xs-12 col-md-4\">
          <div class=\"box-heading\">
  \t\t    <h1><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>";
        // line 9
        echo (isset($context["tab_custom_urls_helper_title"]) ? $context["tab_custom_urls_helper_title"] : null);
        echo "</h1>
          </div>
          <div class=\"box-content\">
  \t\t    ";
        // line 12
        echo (isset($context["tab_custom_urls_helper"]) ? $context["tab_custom_urls_helper"] : null);
        echo "
          </div>
      </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/urls_linking_tab/tab_customurls.twig";
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
/*   		<div class="col-xs-12 col-md-8 custom-urls-results">*/
/*             <br />*/
/*             <div class="loader"></div>*/
/*   		</div>*/
/*   		<div class="col-xs-12 col-md-4">*/
/*           <div class="box-heading">*/
/*   		    <h1><i class="fa fa-info-circle" aria-hidden="true"></i>{{ tab_custom_urls_helper_title }}</h1>*/
/*           </div>*/
/*           <div class="box-content">*/
/*   		    {{ tab_custom_urls_helper }}*/
/*           </div>*/
/*       </div>*/
/* 	</div>*/
/* </div>*/
