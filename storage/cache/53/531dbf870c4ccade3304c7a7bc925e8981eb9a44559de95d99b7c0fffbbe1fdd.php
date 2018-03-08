<?php

/* extension/module/isenselabs_seo/tab_structured_data_ajax.twig */
class __TwigTemplate_59404f1500b849d0fddc3363672f62baa8da9d186558c81b72f3443708897ee8 extends Twig_Template
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
            <div id=\"seo_rich_snippets\" role=\"tabpanel\" class=\"tab-pane fade in\">
                <h3>";
        // line 5
        echo (isset($context["tab_structured_data"]) ? $context["tab_structured_data"] : null);
        echo "</h3>
                <br />
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-6\">
                        <label>
                          ";
        // line 10
        echo (isset($context["text_enable_product_data"]) ? $context["text_enable_product_data"] : null);
        echo " 
                        </label>
                    </div>
                    <div class=\"col-md-4 col-xs-6\">
                        <select name=\"richsnippets_product_data\" class=\"form-control\">
                          <option value=\"1\" ";
        // line 15
        echo ((((isset($context["richsnippets_product_data"]) ? $context["richsnippets_product_data"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo " >";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>
                          <option value=\"0\" ";
        // line 16
        echo ((((isset($context["richsnippets_product_data"]) ? $context["richsnippets_product_data"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo " >";
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
        // line 24
        echo (isset($context["text_enable_product_breadcrumbs"]) ? $context["text_enable_product_breadcrumbs"] : null);
        echo " 
                        </label>
                    </div>
                    <div class=\"col-md-4 col-xs-6\">
                        <select name=\"richsnippets_product_breadcrumbs\" class=\"form-control\">
                          <option value=\"1\" ";
        // line 29
        echo ((((isset($context["richsnippets_product_breadcrumbs"]) ? $context["richsnippets_product_breadcrumbs"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo " >";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>
                          <option value=\"0\" ";
        // line 30
        echo ((((isset($context["richsnippets_product_breadcrumbs"]) ? $context["richsnippets_product_breadcrumbs"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo " >";
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
        // line 38
        echo (isset($context["text_enable_company_info"]) ? $context["text_enable_company_info"] : null);
        echo " 
                        </label>
                    </div>
                    <div class=\"col-md-4 col-xs-6\">
                        <select name=\"richsnippets_company_info\" class=\"form-control\">
                          <option value=\"1\" ";
        // line 43
        echo ((((isset($context["richsnippets_company_info"]) ? $context["richsnippets_company_info"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo " >";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>
                          <option value=\"0\" ";
        // line 44
        echo ((((isset($context["richsnippets_company_info"]) ? $context["richsnippets_company_info"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo " >";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>
                        </select>
                    </div>
                </div>
                <p>
                    <br />
                    <a onClick=\"saveChanges('#seo_rich_snippets');\" class=\"btn btn-md btn-primary\">";
        // line 50
        echo (isset($context["text_save_changes"]) ? $context["text_save_changes"] : null);
        echo "</a>
                </p>
            </div>
  \t\t</div>
  \t\t
  \t\t<div class=\"col-xs-12 col-md-4\">
          <div class=\"box-heading\">
            <h1><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>";
        // line 57
        echo (isset($context["tab_rich_snippets_helper_title"]) ? $context["tab_rich_snippets_helper_title"] : null);
        echo "</h1>
          </div>
          <div class=\"box-content\">
            ";
        // line 60
        echo (isset($context["tab_rich_snippets_helper"]) ? $context["tab_rich_snippets_helper"] : null);
        echo " 
          </div>
      </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/tab_structured_data_ajax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 60,  122 => 57,  112 => 50,  101 => 44,  95 => 43,  87 => 38,  74 => 30,  68 => 29,  60 => 24,  47 => 16,  41 => 15,  33 => 10,  25 => 5,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/*   		<div class="col-xs-12 col-md-8">*/
/*             <div id="seo_rich_snippets" role="tabpanel" class="tab-pane fade in">*/
/*                 <h3>{{ tab_structured_data }}</h3>*/
/*                 <br />*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 col-xs-6">*/
/*                         <label>*/
/*                           {{ text_enable_product_data }} */
/*                         </label>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-xs-6">*/
/*                         <select name="richsnippets_product_data" class="form-control">*/
/*                           <option value="1" {{ richsnippets_product_data == '1' ? 'selected="selected"' : '' }} >{{ text_yes }}</option>*/
/*                           <option value="0" {{ richsnippets_product_data == '0' ? 'selected="selected"' : '' }} >{{ text_no }}</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <br />*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 col-xs-6">*/
/*                         <label>*/
/*                           {{ text_enable_product_breadcrumbs }} */
/*                         </label>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-xs-6">*/
/*                         <select name="richsnippets_product_breadcrumbs" class="form-control">*/
/*                           <option value="1" {{ richsnippets_product_breadcrumbs == '1' ? 'selected="selected"' : '' }} >{{ text_yes }}</option>*/
/*                           <option value="0" {{ richsnippets_product_breadcrumbs == '0' ? 'selected="selected"' : '' }} >{{ text_no }}</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <br />*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 col-xs-6">*/
/*                         <label>*/
/*                           {{ text_enable_company_info }} */
/*                         </label>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-xs-6">*/
/*                         <select name="richsnippets_company_info" class="form-control">*/
/*                           <option value="1" {{ richsnippets_company_info == '1' ? 'selected="selected"' : '' }} >{{ text_yes }}</option>*/
/*                           <option value="0" {{ richsnippets_company_info == '0' ? 'selected="selected"' : '' }} >{{ text_no }}</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </div>*/
/*                 <p>*/
/*                     <br />*/
/*                     <a onClick="saveChanges('#seo_rich_snippets');" class="btn btn-md btn-primary">{{ text_save_changes }}</a>*/
/*                 </p>*/
/*             </div>*/
/*   		</div>*/
/*   		*/
/*   		<div class="col-xs-12 col-md-4">*/
/*           <div class="box-heading">*/
/*             <h1><i class="fa fa-info-circle" aria-hidden="true"></i>{{ tab_rich_snippets_helper_title }}</h1>*/
/*           </div>*/
/*           <div class="box-content">*/
/*             {{ tab_rich_snippets_helper }} */
/*           </div>*/
/*       </div>*/
/* 	</div>*/
/* </div>*/
