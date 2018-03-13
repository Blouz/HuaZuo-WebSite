<?php

/* extension/module/isenselabs_seo/tab_content.twig */
class __TwigTemplate_d2f0105d968364ffff753d0b1b26bf90ca6b969f45cb078e2795caf8980e533e extends Twig_Template
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
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-12\">

            <ul class=\"nav nav-tabs nav-settings-tabs\">
                <li class=\"active\"><a href=\"#tab-titles\" data-toggle=\"tab\">";
        // line 6
        echo (isset($context["text_titles"]) ? $context["text_titles"] : null);
        echo "</a></li>
                <li><a href=\"#tab-descriptions\" data-toggle=\"tab\">";
        // line 7
        echo (isset($context["text_descriptions"]) ? $context["text_descriptions"] : null);
        echo "</a></li>
                <li><a href=\"#tab-keywords\" data-toggle=\"tab\">";
        // line 8
        echo (isset($context["text_keywords"]) ? $context["text_keywords"] : null);
        echo "</a></li>

            </ul>

            <div class=\"tab-content\">
                <div class=\"tab-pane fade in active\" id=\"tab-titles\">
                    <div class=\"tab-titles\">
                        <br />
                        <div class=\"loader\"></div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-descriptions\">
                    <div class=\"tab-descriptions\">
                        <br />
                        <div class=\"loader\"></div>
                    </div>
                </div>

                <div class=\"tab-pane fade\" id=\"tab-keywords\">
                    <div class=\"tab-keywords\">
                        <br />
                        <div class=\"loader\"></div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/tab_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/*     <div class="row">*/
/*         <div class="col-xs-12 col-md-12">*/
/* */
/*             <ul class="nav nav-tabs nav-settings-tabs">*/
/*                 <li class="active"><a href="#tab-titles" data-toggle="tab">{{ text_titles }}</a></li>*/
/*                 <li><a href="#tab-descriptions" data-toggle="tab">{{ text_descriptions }}</a></li>*/
/*                 <li><a href="#tab-keywords" data-toggle="tab">{{ text_keywords }}</a></li>*/
/* */
/*             </ul>*/
/* */
/*             <div class="tab-content">*/
/*                 <div class="tab-pane fade in active" id="tab-titles">*/
/*                     <div class="tab-titles">*/
/*                         <br />*/
/*                         <div class="loader"></div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="tab-pane fade" id="tab-descriptions">*/
/*                     <div class="tab-descriptions">*/
/*                         <br />*/
/*                         <div class="loader"></div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="tab-pane fade" id="tab-keywords">*/
/*                     <div class="tab-keywords">*/
/*                         <br />*/
/*                         <div class="loader"></div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
