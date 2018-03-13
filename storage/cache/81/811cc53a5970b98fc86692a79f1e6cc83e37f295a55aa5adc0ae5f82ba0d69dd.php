<?php

/* extension/module/isenselabs_seo/tab_file_editor.twig */
class __TwigTemplate_912b071a7deafdee35572f9e71dcf6371a7aba96837949c21f8557024611ee6e extends Twig_Template
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
  \t\t<div class=\"col-xs-12 col-md-12\">
            <ul class=\"nav nav-tabs nav-file-editor-tabs\">
                <li class=\"active\"><a href=\"#tab-htaccess\" data-toggle=\"tab\">";
        // line 5
        echo (isset($context["text_htaccess"]) ? $context["text_htaccess"] : null);
        echo "</a></li>
                <li><a href=\"#tab-robots\" data-toggle=\"tab\">";
        // line 6
        echo (isset($context["text_robots"]) ? $context["text_robots"] : null);
        echo "</a></li>
            </ul>
            
            <div class=\"tab-content\">
                <div class=\"tab-pane fade in active\" id=\"tab-htaccess\">
                    <div class=\"tab-htaccess\">
                        <br />
                        <div class=\"loader\"></div>
                    </div>
                </div>
                
                <div class=\"tab-pane fade\" id=\"tab-robots\">
                    <div class=\"tab-robots\">
                        <br />
                        <div class=\"loader\"></div>
                    </div>
                </div>
            </div>
            
  \t\t</div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/tab_file_editor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/*   		<div class="col-xs-12 col-md-12">*/
/*             <ul class="nav nav-tabs nav-file-editor-tabs">*/
/*                 <li class="active"><a href="#tab-htaccess" data-toggle="tab">{{ text_htaccess }}</a></li>*/
/*                 <li><a href="#tab-robots" data-toggle="tab">{{ text_robots }}</a></li>*/
/*             </ul>*/
/*             */
/*             <div class="tab-content">*/
/*                 <div class="tab-pane fade in active" id="tab-htaccess">*/
/*                     <div class="tab-htaccess">*/
/*                         <br />*/
/*                         <div class="loader"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="tab-pane fade" id="tab-robots">*/
/*                     <div class="tab-robots">*/
/*                         <br />*/
/*                         <div class="loader"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             */
/*   		</div>*/
/*     </div>*/
/* </div>*/
