<?php

/* extension/module/isenselabs_seo/file_editor_tab/tab_htaccess.twig */
class __TwigTemplate_ed48f06c8a4f7948ee853315277b16ca080b769f8777515ee72cc1e02295d1cc extends Twig_Template
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
  \t\t<div class=\"col-xs-12 col-md-8\">
            <div id=\"htaccess_form\" role=\"tabpanel\" class=\"tab-pane fade in\">
                <textarea id=\"htaccess\" rows=\"25\" name=\"htaccess\" class=\"form-control well\">";
        // line 5
        echo (isset($context["file_contents"]) ? $context["file_contents"] : null);
        echo "</textarea>
                <p>
                    <br />
                    <a onClick=\"saveChanges('#htaccess_form');\" class=\"btn btn-md btn-primary\">";
        // line 8
        echo (isset($context["text_save_changes"]) ? $context["text_save_changes"] : null);
        echo "</a>
                </p>
            </div>
  \t\t</div>
  \t\t
  \t\t<div class=\"col-xs-12 col-md-4\">
            <div class=\"box-heading\">
              <h1><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>";
        // line 15
        echo (isset($context["text_htaccess_helper_title"]) ? $context["text_htaccess_helper_title"] : null);
        echo "</h1>
            </div>
            <div class=\"box-content\">
              ";
        // line 18
        echo (isset($context["text_htaccess_helper"]) ? $context["text_htaccess_helper"] : null);
        echo " 
            </div>
        </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/file_editor_tab/tab_htaccess.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  41 => 15,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/*   		<div class="col-xs-12 col-md-8">*/
/*             <div id="htaccess_form" role="tabpanel" class="tab-pane fade in">*/
/*                 <textarea id="htaccess" rows="25" name="htaccess" class="form-control well">{{ file_contents }}</textarea>*/
/*                 <p>*/
/*                     <br />*/
/*                     <a onClick="saveChanges('#htaccess_form');" class="btn btn-md btn-primary">{{ text_save_changes }}</a>*/
/*                 </p>*/
/*             </div>*/
/*   		</div>*/
/*   		*/
/*   		<div class="col-xs-12 col-md-4">*/
/*             <div class="box-heading">*/
/*               <h1><i class="fa fa-info-circle" aria-hidden="true"></i>{{ text_htaccess_helper_title }}</h1>*/
/*             </div>*/
/*             <div class="box-content">*/
/*               {{ text_htaccess_helper }} */
/*             </div>*/
/*         </div>*/
/* 	</div>*/
/* </div>*/
