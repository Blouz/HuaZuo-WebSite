<?php

/* extension/module/isenselabs_seo/tab_image_names_ajax.twig */
class __TwigTemplate_f797ef8c2768d86b7713fda197c5e603c845cb6e59654fd0a94e3c87ef115fa0 extends Twig_Template
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
            <h3>";
        // line 4
        echo (isset($context["text_image_renamer_tool_heading"]) ? $context["text_image_renamer_tool_heading"] : null);
        echo "</h3>
            <div class=\"image_renaming_results\">
                <p><br /><strong>";
        // line 6
        echo (isset($context["text_image_last_usage"]) ? $context["text_image_last_usage"] : null);
        echo "</strong></p>
                <ul>
                    <li>";
        // line 8
        echo ((twig_test_empty((isset($context["seo_image_titles_date"]) ? $context["seo_image_titles_date"] : null))) ? ((isset($context["text_never"]) ? $context["text_never"] : null)) : ((isset($context["seo_image_titles_date"]) ? $context["seo_image_titles_date"] : null)));
        echo "</li>
                </ul>
                <p><strong>";
        // line 10
        echo (isset($context["text_image_last_results"]) ? $context["text_image_last_results"] : null);
        echo "</strong></p>
                ";
        // line 11
        if (twig_test_empty((isset($context["seo_image_last_activity"]) ? $context["seo_image_last_activity"] : null))) {
            // line 12
            echo "                <ul>
                     <li>";
            // line 13
            echo (isset($context["text_not_used"]) ? $context["text_not_used"] : null);
            echo "</li>
                </ul>
                ";
        } else {
            // line 15
            echo "   
                <ul>
                    <li>";
            // line 17
            echo (isset($context["text_images_renamed"]) ? $context["text_images_renamed"] : null);
            echo " ";
            echo $this->getAttribute((isset($context["seo_image_last_activity"]) ? $context["seo_image_last_activity"] : null), "renamed_images", array());
            echo "</li>
                    <li>";
            // line 18
            echo (isset($context["text_images_already_renamed"]) ? $context["text_images_already_renamed"] : null);
            echo " ";
            echo $this->getAttribute((isset($context["seo_image_last_activity"]) ? $context["seo_image_last_activity"] : null), "already_renamed", array());
            echo "</li>
                    <li>";
            // line 19
            echo (isset($context["text_product_images_ids"]) ? $context["text_product_images_ids"] : null);
            echo " ";
            if (($this->getAttribute((isset($context["seo_image_last_activity"]) ? $context["seo_image_last_activity"] : null), "products_with_no_image", array()) == "")) {
                echo " ";
                echo (isset($context["text_none"]) ? $context["text_none"] : null);
            } else {
                echo " ";
                echo twig_join_filter($this->getAttribute((isset($context["seo_image_last_activity"]) ? $context["seo_image_last_activity"] : null), "products_with_no_image", array()), ",");
            }
            echo "</li>
                    <li>";
            // line 20
            echo (isset($context["text_errors"]) ? $context["text_errors"] : null);
            echo " ";
            echo ((twig_test_empty($this->getAttribute((isset($context["seo_image_last_activity"]) ? $context["seo_image_last_activity"] : null), "errors", array()))) ? ((isset($context["text_no_errors"]) ? $context["text_no_errors"] : null)) : ((("<strong>" . $this->getAttribute((isset($context["seo_image_last_activity"]) ? $context["seo_image_last_activity"] : null), "errors", array())) . "</strong>")));
            echo "</li>
                </ul>
                ";
        }
        // line 22
        echo "                
            </div>           
            <p>
                <br />
                <a onClick=\"generateImageNames();\" class=\"btn btn-primary btn-md\">";
        // line 26
        echo (isset($context["text_generate_image_names"]) ? $context["text_generate_image_names"] : null);
        echo "</a>
            </p>
            <br>
            <hr>
            <div id=\"seo_images_advanced\" role=\"tabpanel\" class=\"tab-pane fade in\">
                <br />
                <h3>";
        // line 32
        echo (isset($context["text_advanced_settings"]) ? $context["text_advanced_settings"] : null);
        echo "</h3>
                <br>
                <label for=\"images_filename_string\"><strong>";
        // line 34
        echo (isset($context["text_image_string"]) ? $context["text_image_string"] : null);
        echo "</strong></label>
                <input name=\"images_filename_string\" type=\"text\" class=\"form-control\" value=\"";
        // line 35
        echo (isset($context["images_filename_string"]) ? $context["images_filename_string"] : null);
        echo "\" id=\"images_filename_string\"/>
                <br />";
        // line 36
        echo (isset($context["text_short_codes"]) ? $context["text_short_codes"] : null);
        echo "<br />
                [product], [model], [sku], [upc]
                <p>
                    <br />
                    <a onClick=\"saveChanges('#seo_images_advanced');\" class=\"btn btn-md btn-primary\">";
        // line 40
        echo (isset($context["text_save_changes"]) ? $context["text_save_changes"] : null);
        echo "</a>
                </p>
            </div>
  \t\t</div>
  \t\t
  \t\t<div class=\"col-xs-12 col-md-4\">
            <div class=\"box-heading\">
                <h1><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>";
        // line 47
        echo (isset($context["tab_image_titles_helper_title"]) ? $context["tab_image_titles_helper_title"] : null);
        echo "</h1>
            </div>
            <div class=\"box-content\">
                ";
        // line 50
        echo (isset($context["tab_image_titles_helper"]) ? $context["tab_image_titles_helper"] : null);
        echo "
            </div>
        </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/tab_image_names_ajax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 50,  135 => 47,  125 => 40,  118 => 36,  114 => 35,  110 => 34,  105 => 32,  96 => 26,  90 => 22,  82 => 20,  70 => 19,  64 => 18,  58 => 17,  54 => 15,  48 => 13,  45 => 12,  43 => 11,  39 => 10,  34 => 8,  29 => 6,  24 => 4,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/*   		<div class="col-xs-12 col-md-8">*/
/*             <h3>{{ text_image_renamer_tool_heading }}</h3>*/
/*             <div class="image_renaming_results">*/
/*                 <p><br /><strong>{{ text_image_last_usage }}</strong></p>*/
/*                 <ul>*/
/*                     <li>{{ seo_image_titles_date is empty ? text_never : seo_image_titles_date }}</li>*/
/*                 </ul>*/
/*                 <p><strong>{{ text_image_last_results }}</strong></p>*/
/*                 {% if seo_image_last_activity is empty  %}*/
/*                 <ul>*/
/*                      <li>{{ text_not_used }}</li>*/
/*                 </ul>*/
/*                 {% else %}   */
/*                 <ul>*/
/*                     <li>{{ text_images_renamed }} {{ seo_image_last_activity.renamed_images }}</li>*/
/*                     <li>{{ text_images_already_renamed }} {{ seo_image_last_activity.already_renamed }}</li>*/
/*                     <li>{{ text_product_images_ids }} {% if seo_image_last_activity.products_with_no_image == '' %} {{ text_none }}{% else %} {{ seo_image_last_activity.products_with_no_image|join(',') }}{% endif %}</li>*/
/*                     <li>{{ text_errors }} {{ seo_image_last_activity.errors is empty ? text_no_errors : '<strong>' ~ seo_image_last_activity.errors ~ '</strong>' }}</li>*/
/*                 </ul>*/
/*                 {% endif %}                */
/*             </div>           */
/*             <p>*/
/*                 <br />*/
/*                 <a onClick="generateImageNames();" class="btn btn-primary btn-md">{{ text_generate_image_names }}</a>*/
/*             </p>*/
/*             <br>*/
/*             <hr>*/
/*             <div id="seo_images_advanced" role="tabpanel" class="tab-pane fade in">*/
/*                 <br />*/
/*                 <h3>{{ text_advanced_settings }}</h3>*/
/*                 <br>*/
/*                 <label for="images_filename_string"><strong>{{ text_image_string }}</strong></label>*/
/*                 <input name="images_filename_string" type="text" class="form-control" value="{{ images_filename_string }}" id="images_filename_string"/>*/
/*                 <br />{{ text_short_codes }}<br />*/
/*                 [product], [model], [sku], [upc]*/
/*                 <p>*/
/*                     <br />*/
/*                     <a onClick="saveChanges('#seo_images_advanced');" class="btn btn-md btn-primary">{{ text_save_changes }}</a>*/
/*                 </p>*/
/*             </div>*/
/*   		</div>*/
/*   		*/
/*   		<div class="col-xs-12 col-md-4">*/
/*             <div class="box-heading">*/
/*                 <h1><i class="fa fa-info-circle" aria-hidden="true"></i>{{ tab_image_titles_helper_title }}</h1>*/
/*             </div>*/
/*             <div class="box-content">*/
/*                 {{ tab_image_titles_helper }}*/
/*             </div>*/
/*         </div>*/
/* 	</div>*/
/* </div>*/
