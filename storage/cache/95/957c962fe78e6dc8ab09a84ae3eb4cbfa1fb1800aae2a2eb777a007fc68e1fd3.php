<?php

/* extension/module/isenselabs_seo/urls_linking_tab/tab_canonicals.twig */
class __TwigTemplate_ff13d23154e2d63b15469decc6b8dec277dbca8a086c9038ea7f911593811d6e extends Twig_Template
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
            <div id=\"seo_canonical_settings\" class=\"row\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-6\">
                        <label>
                          ";
        // line 8
        echo (isset($context["text_canonical_products"]) ? $context["text_canonical_products"] : null);
        echo "
                        </label>
                    </div>
                    <div class=\"col-md-4 col-xs-6\">
                        <select name=\"canonical_products\" class=\"form-control\">
                          <option value=\"1\" ";
        // line 13
        echo ((((isset($context["canonical_products"]) ? $context["canonical_products"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>
                          <option value=\"0\" ";
        // line 14
        echo ((((isset($context["canonical_products"]) ? $context["canonical_products"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>
                        </select>
                    </div>
                </div>
                <br />
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-6\">
                        <label>
                          ";
        // line 22
        echo (isset($context["text_canonical_categories"]) ? $context["text_canonical_categories"] : null);
        echo "
                        </label>
                    </div>
                    <div class=\"col-md-4 col-xs-6\">
                        <select name=\"canonical_categories\" class=\"form-control\">
                          <option value=\"1\" ";
        // line 27
        echo ((((isset($context["canonical_categories"]) ? $context["canonical_categories"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>
                          <option value=\"0\" ";
        // line 28
        echo ((((isset($context["canonical_categories"]) ? $context["canonical_categories"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>
                        </select>
                    </div>
                </div>
                <br />
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-6\">
                        <label>
                          ";
        // line 36
        echo (isset($context["text_canonical_manufacturers"]) ? $context["text_canonical_manufacturers"] : null);
        echo "
                        </label>
                    </div>
                    <div class=\"col-md-4 col-xs-6\">
                        <select name=\"canonical_manufacturers\" class=\"form-control\">
                          <option value=\"1\" ";
        // line 41
        echo ((((isset($context["canonical_manufacturers"]) ? $context["canonical_manufacturers"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>
                          <option value=\"0\" ";
        // line 42
        echo ((((isset($context["canonical_manufacturers"]) ? $context["canonical_manufacturers"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>
                        </select>
                    </div>
                </div>
                <br />
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-6\">
                        <label>
                          ";
        // line 50
        echo (isset($context["text_canonical_information_pages"]) ? $context["text_canonical_information_pages"] : null);
        echo "
                        </label>
                    </div>
                    <div class=\"col-md-4 col-xs-6\">
                        <select name=\"canonical_information_pages\" class=\"form-control\">
                          <option value=\"1\" ";
        // line 55
        echo ((((isset($context["canonical_information_pages"]) ? $context["canonical_information_pages"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>
                          <option value=\"0\" ";
        // line 56
        echo ((((isset($context["canonical_information_pages"]) ? $context["canonical_information_pages"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>
                        </select>
                    </div>
                </div>
                <br />
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-6\">
                        <label>
                          ";
        // line 64
        echo (isset($context["text_canonical_specials"]) ? $context["text_canonical_specials"] : null);
        echo "
                        </label>
                    </div>
                    <div class=\"col-md-4 col-xs-6\">
                        <select name=\"canonical_special_page\" class=\"form-control\">
                          <option value=\"1\" ";
        // line 69
        echo ((((isset($context["canonical_special_page"]) ? $context["canonical_special_page"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>
                          <option value=\"0\" ";
        // line 70
        echo ((((isset($context["canonical_special_page"]) ? $context["canonical_special_page"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>
                        </select>
                    </div>
                </div>
                <br />
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-6\">
                        <label>
                          ";
        // line 78
        echo (isset($context["text_canonical_home_page"]) ? $context["text_canonical_home_page"] : null);
        echo "
                        </label>
                    </div>
                    <div class=\"col-md-4 col-xs-6\">
                        <select name=\"canonical_home_page\" class=\"form-control\">
                          <option value=\"1\" ";
        // line 83
        echo ((((isset($context["canonical_home_page"]) ? $context["canonical_home_page"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>
                          <option value=\"0\" ";
        // line 84
        echo ((((isset($context["canonical_home_page"]) ? $context["canonical_home_page"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>
                        </select>
                    </div>
                </div>
                <p>
                    <br />
                    <a onClick=\"saveChanges('#seo_canonical_settings');\" class=\"btn btn-md btn-primary\">";
        // line 90
        echo (isset($context["text_save_changes"]) ? $context["text_save_changes"] : null);
        echo "</a>
                </p>
            </div>
  \t\t</div>
  \t\t
  \t\t<div class=\"col-xs-12 col-md-4\">
            <div class=\"box-heading\">
                <h1><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>";
        // line 97
        echo (isset($context["tab_canonicals_helper_title"]) ? $context["tab_canonicals_helper_title"] : null);
        echo "</h1>
            </div>
            <div class=\"box-content\">
                ";
        // line 100
        echo (isset($context["tab_canonicals_helper"]) ? $context["tab_canonicals_helper"] : null);
        echo "
            </div>
        </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/urls_linking_tab/tab_canonicals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 100,  198 => 97,  188 => 90,  177 => 84,  171 => 83,  163 => 78,  150 => 70,  144 => 69,  136 => 64,  123 => 56,  117 => 55,  109 => 50,  96 => 42,  90 => 41,  82 => 36,  69 => 28,  63 => 27,  55 => 22,  42 => 14,  36 => 13,  28 => 8,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/*   		<div class="col-xs-12 col-md-8">*/
/*             <div id="seo_canonical_settings" class="row">*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 col-xs-6">*/
/*                         <label>*/
/*                           {{ text_canonical_products }}*/
/*                         </label>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-xs-6">*/
/*                         <select name="canonical_products" class="form-control">*/
/*                           <option value="1" {{ canonical_products == '1' ? 'selected="selected"' : '' }}>{{ text_yes }}</option>*/
/*                           <option value="0" {{ canonical_products == '0' ? 'selected="selected"' : '' }}>{{ text_no }}</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <br />*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 col-xs-6">*/
/*                         <label>*/
/*                           {{ text_canonical_categories }}*/
/*                         </label>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-xs-6">*/
/*                         <select name="canonical_categories" class="form-control">*/
/*                           <option value="1" {{ canonical_categories == '1' ? 'selected="selected"' : '' }}>{{ text_yes }}</option>*/
/*                           <option value="0" {{ canonical_categories == '0' ? 'selected="selected"' : '' }}>{{ text_no }}</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <br />*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 col-xs-6">*/
/*                         <label>*/
/*                           {{ text_canonical_manufacturers }}*/
/*                         </label>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-xs-6">*/
/*                         <select name="canonical_manufacturers" class="form-control">*/
/*                           <option value="1" {{ canonical_manufacturers == '1' ? 'selected="selected"' : '' }}>{{ text_yes }}</option>*/
/*                           <option value="0" {{ canonical_manufacturers == '0' ? 'selected="selected"' : '' }}>{{ text_no }}</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <br />*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 col-xs-6">*/
/*                         <label>*/
/*                           {{ text_canonical_information_pages }}*/
/*                         </label>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-xs-6">*/
/*                         <select name="canonical_information_pages" class="form-control">*/
/*                           <option value="1" {{ canonical_information_pages == '1' ? 'selected="selected"' : '' }}>{{ text_yes }}</option>*/
/*                           <option value="0" {{ canonical_information_pages == '0' ? 'selected="selected"' : '' }}>{{ text_no }}</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <br />*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 col-xs-6">*/
/*                         <label>*/
/*                           {{ text_canonical_specials }}*/
/*                         </label>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-xs-6">*/
/*                         <select name="canonical_special_page" class="form-control">*/
/*                           <option value="1" {{ canonical_special_page == '1' ? 'selected="selected"' : '' }}>{{ text_yes }}</option>*/
/*                           <option value="0" {{ canonical_special_page == '0' ? 'selected="selected"' : '' }}>{{ text_no }}</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <br />*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 col-xs-6">*/
/*                         <label>*/
/*                           {{ text_canonical_home_page }}*/
/*                         </label>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-xs-6">*/
/*                         <select name="canonical_home_page" class="form-control">*/
/*                           <option value="1" {{ canonical_home_page == '1' ? 'selected="selected"' : '' }}>{{ text_yes }}</option>*/
/*                           <option value="0" {{ canonical_home_page == '0' ? 'selected="selected"' : '' }}>{{ text_no }}</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <p>*/
/*                     <br />*/
/*                     <a onClick="saveChanges('#seo_canonical_settings');" class="btn btn-md btn-primary">{{ text_save_changes }}</a>*/
/*                 </p>*/
/*             </div>*/
/*   		</div>*/
/*   		*/
/*   		<div class="col-xs-12 col-md-4">*/
/*             <div class="box-heading">*/
/*                 <h1><i class="fa fa-info-circle" aria-hidden="true"></i>{{ tab_canonicals_helper_title }}</h1>*/
/*             </div>*/
/*             <div class="box-content">*/
/*                 {{ tab_canonicals_helper }}*/
/*             </div>*/
/*         </div>*/
/* 	</div>*/
/* </div>*/
