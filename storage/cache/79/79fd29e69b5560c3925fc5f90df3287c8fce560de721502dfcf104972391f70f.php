<?php

/* extension/module/isenselabs_seo/tab_advanced_editor.twig */
class __TwigTemplate_d5eba5c15a69a9cebd619fdee3a504ff9119bc9a4c44d3703222779b22ede26c extends Twig_Template
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
        <ul class=\"nav nav-tabs\" role=\"tablist\">
            <li class=\"active\"><a data-toggle=\"tab\" href=\"#editor-products\">";
        // line 4
        echo (isset($context["text_editor_products"]) ? $context["text_editor_products"] : null);
        echo "</a></li>
            <li><a data-toggle=\"tab\" href=\"#editor-categories\">";
        // line 5
        echo (isset($context["text_editor_categories"]) ? $context["text_editor_categories"] : null);
        echo "</a></li>
            <li><a data-toggle=\"tab\" href=\"#editor-informations\">";
        // line 6
        echo (isset($context["text_editor_information_pages"]) ? $context["text_editor_information_pages"] : null);
        echo "</a></li>
            <li><a data-toggle=\"tab\" href=\"#editor-manufacturers\">";
        // line 7
        echo (isset($context["text_editor_manufacturers"]) ? $context["text_editor_manufacturers"] : null);
        echo "</a></li>
        </ul>
        
        <div class=\"tab-content\">
            <div id=\"editor-products\" role=\"tabpanel\" class=\"editor-products tab-pane fade in active\">
                <br />
                <div class=\"loader\"></div>
            </div>
            <div id=\"editor-categories\" role=\"tabpanel\" class=\"editor-categories tab-pane fade\">
                <br />
                <div class=\"loader\"></div>
            </div>
            <div id=\"editor-informations\" role=\"tabpanel\" class=\"editor-informations tab-pane fade\">
                <br />
                <div class=\"loader\"></div>
            </div>
            <div id=\"editor-manufacturers\" role=\"tabpanel\" class=\"editor-manufacturers tab-pane fade\">
                <br />
                <div class=\"loader\"></div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/tab_advanced_editor.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/*     <div class="row">*/
/*         <ul class="nav nav-tabs" role="tablist">*/
/*             <li class="active"><a data-toggle="tab" href="#editor-products">{{ text_editor_products }}</a></li>*/
/*             <li><a data-toggle="tab" href="#editor-categories">{{ text_editor_categories }}</a></li>*/
/*             <li><a data-toggle="tab" href="#editor-informations">{{ text_editor_information_pages }}</a></li>*/
/*             <li><a data-toggle="tab" href="#editor-manufacturers">{{ text_editor_manufacturers }}</a></li>*/
/*         </ul>*/
/*         */
/*         <div class="tab-content">*/
/*             <div id="editor-products" role="tabpanel" class="editor-products tab-pane fade in active">*/
/*                 <br />*/
/*                 <div class="loader"></div>*/
/*             </div>*/
/*             <div id="editor-categories" role="tabpanel" class="editor-categories tab-pane fade">*/
/*                 <br />*/
/*                 <div class="loader"></div>*/
/*             </div>*/
/*             <div id="editor-informations" role="tabpanel" class="editor-informations tab-pane fade">*/
/*                 <br />*/
/*                 <div class="loader"></div>*/
/*             </div>*/
/*             <div id="editor-manufacturers" role="tabpanel" class="editor-manufacturers tab-pane fade">*/
/*                 <br />*/
/*                 <div class="loader"></div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
