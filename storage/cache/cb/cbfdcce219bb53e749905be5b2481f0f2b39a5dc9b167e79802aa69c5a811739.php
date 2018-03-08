<?php

/* extension/module/isenselabs_seo/content_tab/tab_seo_keywords.twig */
class __TwigTemplate_ddff9685685857636dcc5e639fe4e9f7cadf234990c193234f1a1a2873dcdd8d extends Twig_Template
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
           <ul id=\"seo_keyword_languages_tabs\" class=\"nav nav-pills\" role=\"tablist\">
               ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
               <li ";
            // line 6
            echo ((($this->getAttribute($context["language"], "language_id", array()) == (isset($context["default_language_id"]) ? $context["default_language_id"] : null))) ? ("class=\"active\"") : (""));
            echo "><a role=\"tab\" data-toggle=\"tab\" href=\"#seo_keywords_";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
                   <img src=\"language/";
            // line 7
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" alt=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" />
               </a></li> 
               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo " 
               <li><a role=\"tab\" data-toggle=\"tab\" href=\"#seo_keywords_advanced\">";
        // line 10
        echo (isset($context["tab_seo_meta_keywords_title"]) ? $context["tab_seo_meta_keywords_title"] : null);
        echo "</a></li>
            </ul>
            <div class=\"tab-content tabs\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 14
            echo "                ";
            $context["lid"] = $this->getAttribute($context["language"], "language_id", array());
            echo " 
                <div id=\"seo_keywords_";
            // line 15
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" role=\"tabpanel\" class=\"tab-pane fade in ";
            echo ((($this->getAttribute($context["language"], "language_id", array()) == (isset($context["default_language_id"]) ? $context["default_language_id"] : null))) ? ("active") : (""));
            echo "\">                
                    <table class=\"table table-hover text-center\"> 
                        <thead> 
                            <tr> 
                                <th>#</th>
                                <th class=\"text-center\">";
            // line 20
            echo (isset($context["text_products"]) ? $context["text_products"] : null);
            echo "</th>
                                <th class=\"text-center\">";
            // line 21
            echo (isset($context["text_categories"]) ? $context["text_categories"] : null);
            echo "</th>
                                <th class=\"text-center\">";
            // line 22
            echo (isset($context["text_information_pages"]) ? $context["text_information_pages"] : null);
            echo "</th>
                                <th class=\"text-center\">";
            // line 23
            echo (isset($context["text_manufacturers"]) ? $context["text_manufacturers"] : null);
            echo "</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope=\"row\">";
            // line 28
            echo (isset($context["text_total_items"]) ? $context["text_total_items"] : null);
            echo "</th>
                                <td>";
            // line 29
            echo $this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_products", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td>";
            // line 30
            echo $this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_categories", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td>";
            // line 31
            echo $this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_informations", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td>";
            // line 32
            echo $this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_manufacturers", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">";
            // line 35
            echo (isset($context["text_meta_keywords"]) ? $context["text_meta_keywords"] : null);
            echo "</th>
                                <td>";
            // line 36
            echo $this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_products_meta", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td>";
            // line 37
            echo $this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_categories_meta", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td>";
            // line 38
            echo $this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_informations_meta", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td>";
            // line 39
            echo $this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_manufacturers_meta", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">";
            // line 42
            echo (isset($context["text_missing_keywords"]) ? $context["text_missing_keywords"] : null);
            echo "</th>
                                <td class=\"";
            // line 43
            echo ((($this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_products_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array") > 0)) ? ("danger") : ("success"));
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_products_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td class=\"";
            // line 44
            echo ((($this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_categories_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array") > 0)) ? ("danger") : ("success"));
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_categories_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td class=\"";
            // line 45
            echo ((($this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_informations_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array") > 0)) ? ("danger") : ("success"));
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_informations_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td class=\"";
            // line 46
            echo ((($this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_manufacturers_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array") > 0)) ? ("danger") : ("success"));
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_manufacturers_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">";
            // line 49
            echo (isset($context["text_action"]) ? $context["text_action"] : null);
            echo "</th>
                                <td>
                                    <a onclick=\"seoFixNow('product_seo_keywords', ";
            // line 51
            echo $this->getAttribute($context["language"], "language_id", array());
            echo ");\" class=\"btn btn-md btn-primary ";
            echo ((($this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_products_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array") > 0)) ? ("") : ("disabled"));
            echo " btn-seo-fix margin-fix\">";
            echo (isset($context["text_generate"]) ? $context["text_generate"] : null);
            echo "</a>
                                    <br /><br />
                                    <a onclick=\"seoFixNow('product_seo_keywords_all', ";
            // line 53
            echo $this->getAttribute($context["language"], "language_id", array());
            echo ");\" class=\"btn btn-md btn-success btn-seo-fix\">";
            echo (isset($context["text_start_fresh"]) ? $context["text_start_fresh"] : null);
            echo "</a>
                                </td>
                                <td>
                                    <a onclick=\"seoFixNow('category_seo_keywords', ";
            // line 56
            echo $this->getAttribute($context["language"], "language_id", array());
            echo ");\" class=\"btn btn-md btn-primary ";
            echo ((($this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_categories_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array") > 0)) ? ("") : ("disabled"));
            echo " btn-seo-fix margin-fix\">";
            echo (isset($context["text_generate"]) ? $context["text_generate"] : null);
            echo "</a>
                                    <br /><br />
                                    <a onclick=\"seoFixNow('category_seo_keywords_all', ";
            // line 58
            echo $this->getAttribute($context["language"], "language_id", array());
            echo ");\" class=\"btn btn-md btn-success btn-seo-fix\">";
            echo (isset($context["text_start_fresh"]) ? $context["text_start_fresh"] : null);
            echo "</a>
                                </td>
                                <td>
                                    <a onclick=\"seoFixNow('information_seo_keywords', ";
            // line 61
            echo $this->getAttribute($context["language"], "language_id", array());
            echo ");\" class=\"btn btn-md btn-primary ";
            echo ((($this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_informations_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array") > 0)) ? ("") : ("disabled"));
            echo " btn-seo-fix margin-fix\">";
            echo (isset($context["text_generate"]) ? $context["text_generate"] : null);
            echo "</a>
                                    <br /><br />
                                    <a onclick=\"seoFixNow('information_seo_keywords_all', ";
            // line 63
            echo $this->getAttribute($context["language"], "language_id", array());
            echo ");\" class=\"btn btn-md btn-success btn-seo-fix\">";
            echo (isset($context["text_start_fresh"]) ? $context["text_start_fresh"] : null);
            echo "</a>
                                </td>
                                <td>
                                    <a onclick=\"seoFixNow('manufacturer_seo_keywords', ";
            // line 66
            echo $this->getAttribute($context["language"], "language_id", array());
            echo ");\" class=\"btn btn-md btn-primary ";
            echo ((($this->getAttribute($this->getAttribute((isset($context["seo_data"]) ? $context["seo_data"] : null), "total_manufacturers_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array") > 0)) ? ("") : ("disabled"));
            echo " btn-seo-fix margin-fix\">";
            echo (isset($context["text_generate"]) ? $context["text_generate"] : null);
            echo "</a>
                                    <br /><br />
                                    <a onclick=\"seoFixNow('manufacturer_seo_keywords_all', ";
            // line 68
            echo $this->getAttribute($context["language"], "language_id", array());
            echo ");\" class=\"btn btn-md btn-success btn-seo-fix\">";
            echo (isset($context["text_start_fresh"]) ? $context["text_start_fresh"] : null);
            echo "</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo " 
                <div id=\"seo_keywords_advanced\" role=\"tabpanel\" class=\"tab-pane fade in\">
                    <div class=\"col-xs-12 col-md-6\">
                        <br />
                        <h3>";
        // line 78
        echo (isset($context["text_product_keywords_string"]) ? $context["text_product_keywords_string"] : null);
        echo "</h3>
                        <input name=\"product_keyword_string\" type=\"text\" class=\"form-control input-md\" value=\"";
        // line 79
        echo (isset($context["product_keyword_string"]) ? $context["product_keyword_string"] : null);
        echo "\" />
                        <br />";
        // line 80
        echo (isset($context["text_short_codes"]) ? $context["text_short_codes"] : null);
        echo "<br />
                        [product], [model], [sku], [upc], [site_name]
                    </div>
                    <div class=\"col-xs-12 col-md-6\">
                        <br />
                        <h3>";
        // line 85
        echo (isset($context["text_category_keywords_string"]) ? $context["text_category_keywords_string"] : null);
        echo "</h3>
                        <input name=\"category_keyword_string\" type=\"text\" class=\"form-control input-md\" value=\"";
        // line 86
        echo (isset($context["category_keyword_string"]) ? $context["category_keyword_string"] : null);
        echo "\" />
                        <br />";
        // line 87
        echo (isset($context["text_short_codes"]) ? $context["text_short_codes"] : null);
        echo "<br />
                        [category], [site_name]
                    </div>
                    <div class=\"col-xs-12 col-md-6\">
                        <br />
                        <br />
                        <h3>";
        // line 93
        echo (isset($context["text_information_keywords_string"]) ? $context["text_information_keywords_string"] : null);
        echo "</h3>
                        <input name=\"information_keyword_string\" type=\"text\" class=\"form-control input-md\" value=\"";
        // line 94
        echo (isset($context["information_keyword_string"]) ? $context["information_keyword_string"] : null);
        echo "\" />
                        <br />";
        // line 95
        echo (isset($context["text_short_codes"]) ? $context["text_short_codes"] : null);
        echo "<br />
                        [information], [site_name]
                    </div>
                    <div class=\"col-xs-12 col-md-6\">
                        <br />
                        <br />
                        <h3>";
        // line 101
        echo (isset($context["text_manufacturer_keywords_string"]) ? $context["text_manufacturer_keywords_string"] : null);
        echo "</h3>
                        <input name=\"manufacturer_keyword_string\" type=\"text\" class=\"form-control input-md\" value=\"";
        // line 102
        echo (isset($context["manufacturer_keyword_string"]) ? $context["manufacturer_keyword_string"] : null);
        echo "\" />
                        <br />";
        // line 103
        echo (isset($context["text_short_codes"]) ? $context["text_short_codes"] : null);
        echo "<br />
                        [manufacturer], [site_name]
                    </div>
                    <div class=\"col-xs-12 col-md-12\">
                        <p class=\"text-left\">
                            <br />
                            <a onClick=\"saveChanges('#seo_keywords_advanced');\" class=\"btn btn-md btn-primary\">";
        // line 109
        echo (isset($context["text_save_changes"]) ? $context["text_save_changes"] : null);
        echo "</a>
                        </p>
                    </div>
                </div>
            </div>
  \t\t</div>
  \t\t
  \t\t<div class=\"col-xs-12 col-md-4\">
            <div class=\"box-heading\">
                <h1><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>";
        // line 118
        echo (isset($context["tab_seo_meta_keywords_helper_title"]) ? $context["tab_seo_meta_keywords_helper_title"] : null);
        echo "</h1>
            </div>
            <div class=\"box-content\">
                ";
        // line 121
        echo (isset($context["tab_seo_meta_keywords_helper"]) ? $context["tab_seo_meta_keywords_helper"] : null);
        echo "
            </div>
        </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/content_tab/tab_seo_keywords.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 121,  339 => 118,  327 => 109,  318 => 103,  314 => 102,  310 => 101,  301 => 95,  297 => 94,  293 => 93,  284 => 87,  280 => 86,  276 => 85,  268 => 80,  264 => 79,  260 => 78,  254 => 74,  239 => 68,  230 => 66,  222 => 63,  213 => 61,  205 => 58,  196 => 56,  188 => 53,  179 => 51,  174 => 49,  166 => 46,  160 => 45,  154 => 44,  148 => 43,  144 => 42,  138 => 39,  134 => 38,  130 => 37,  126 => 36,  122 => 35,  116 => 32,  112 => 31,  108 => 30,  104 => 29,  100 => 28,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  70 => 15,  65 => 14,  61 => 13,  55 => 10,  52 => 9,  37 => 7,  31 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/*   		<div class="col-xs-12 col-md-8">*/
/*            <ul id="seo_keyword_languages_tabs" class="nav nav-pills" role="tablist">*/
/*                {% for language in languages %} */
/*                <li {{ language.language_id == default_language_id ? 'class="active"' : '' }}><a role="tab" data-toggle="tab" href="#seo_keywords_{{ language.language_id }}">*/
/*                    <img src="language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}" />*/
/*                </a></li> */
/*                {% endfor %} */
/*                <li><a role="tab" data-toggle="tab" href="#seo_keywords_advanced">{{ tab_seo_meta_keywords_title }}</a></li>*/
/*             </ul>*/
/*             <div class="tab-content tabs">*/
/*                 {% for language in languages %}*/
/*                 {% set lid = language.language_id  %} */
/*                 <div id="seo_keywords_{{ language.language_id }}" role="tabpanel" class="tab-pane fade in {{ language.language_id == default_language_id ? 'active' : '' }}">                */
/*                     <table class="table table-hover text-center"> */
/*                         <thead> */
/*                             <tr> */
/*                                 <th>#</th>*/
/*                                 <th class="text-center">{{ text_products }}</th>*/
/*                                 <th class="text-center">{{ text_categories }}</th>*/
/*                                 <th class="text-center">{{ text_information_pages }}</th>*/
/*                                 <th class="text-center">{{ text_manufacturers }}</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             <tr>*/
/*                                 <th scope="row">{{ text_total_items }}</th>*/
/*                                 <td>{{ seo_data.total_products[lid] }}</td>*/
/*                                 <td>{{ seo_data.total_categories[lid] }}</td>*/
/*                                 <td>{{ seo_data.total_informations[lid] }}</td>*/
/*                                 <td>{{ seo_data.total_manufacturers[lid] }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th scope="row">{{ text_meta_keywords }}</th>*/
/*                                 <td>{{ seo_data.total_products_meta[lid] }}</td>*/
/*                                 <td>{{ seo_data.total_categories_meta[lid] }}</td>*/
/*                                 <td>{{ seo_data.total_informations_meta[lid] }}</td>*/
/*                                 <td>{{ seo_data.total_manufacturers_meta[lid] }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th scope="row">{{ text_missing_keywords }}</th>*/
/*                                 <td class="{{ seo_data.total_products_difference[lid] > 0 ? 'danger' : 'success' }}">{{ seo_data.total_products_difference[lid] }}</td>*/
/*                                 <td class="{{ seo_data.total_categories_difference[lid] > 0 ? 'danger' : 'success' }}">{{ seo_data.total_categories_difference[lid] }}</td>*/
/*                                 <td class="{{ seo_data.total_informations_difference[lid] > 0 ? 'danger' : 'success' }}">{{ seo_data.total_informations_difference[lid] }}</td>*/
/*                                 <td class="{{ seo_data.total_manufacturers_difference[lid] > 0 ? 'danger' : 'success' }}">{{ seo_data.total_manufacturers_difference[lid] }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th scope="row">{{ text_action }}</th>*/
/*                                 <td>*/
/*                                     <a onclick="seoFixNow('product_seo_keywords', {{ language.language_id }});" class="btn btn-md btn-primary {{ seo_data.total_products_difference[lid] > 0 ? '' : 'disabled' }} btn-seo-fix margin-fix">{{ text_generate }}</a>*/
/*                                     <br /><br />*/
/*                                     <a onclick="seoFixNow('product_seo_keywords_all', {{ language.language_id }});" class="btn btn-md btn-success btn-seo-fix">{{ text_start_fresh }}</a>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <a onclick="seoFixNow('category_seo_keywords', {{ language.language_id }});" class="btn btn-md btn-primary {{ seo_data.total_categories_difference[lid] > 0 ? '' : 'disabled' }} btn-seo-fix margin-fix">{{ text_generate }}</a>*/
/*                                     <br /><br />*/
/*                                     <a onclick="seoFixNow('category_seo_keywords_all', {{ language.language_id }});" class="btn btn-md btn-success btn-seo-fix">{{ text_start_fresh }}</a>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <a onclick="seoFixNow('information_seo_keywords', {{ language.language_id }});" class="btn btn-md btn-primary {{ seo_data.total_informations_difference[lid] > 0 ? '' : 'disabled' }} btn-seo-fix margin-fix">{{ text_generate }}</a>*/
/*                                     <br /><br />*/
/*                                     <a onclick="seoFixNow('information_seo_keywords_all', {{ language.language_id }});" class="btn btn-md btn-success btn-seo-fix">{{ text_start_fresh }}</a>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <a onclick="seoFixNow('manufacturer_seo_keywords', {{ language.language_id }});" class="btn btn-md btn-primary {{ seo_data.total_manufacturers_difference[lid] > 0 ? '' : 'disabled' }} btn-seo-fix margin-fix">{{ text_generate }}</a>*/
/*                                     <br /><br />*/
/*                                     <a onclick="seoFixNow('manufacturer_seo_keywords_all', {{ language.language_id }});" class="btn btn-md btn-success btn-seo-fix">{{ text_start_fresh }}</a>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 {% endfor %} */
/*                 <div id="seo_keywords_advanced" role="tabpanel" class="tab-pane fade in">*/
/*                     <div class="col-xs-12 col-md-6">*/
/*                         <br />*/
/*                         <h3>{{ text_product_keywords_string }}</h3>*/
/*                         <input name="product_keyword_string" type="text" class="form-control input-md" value="{{ product_keyword_string }}" />*/
/*                         <br />{{ text_short_codes }}<br />*/
/*                         [product], [model], [sku], [upc], [site_name]*/
/*                     </div>*/
/*                     <div class="col-xs-12 col-md-6">*/
/*                         <br />*/
/*                         <h3>{{ text_category_keywords_string }}</h3>*/
/*                         <input name="category_keyword_string" type="text" class="form-control input-md" value="{{ category_keyword_string }}" />*/
/*                         <br />{{ text_short_codes }}<br />*/
/*                         [category], [site_name]*/
/*                     </div>*/
/*                     <div class="col-xs-12 col-md-6">*/
/*                         <br />*/
/*                         <br />*/
/*                         <h3>{{ text_information_keywords_string }}</h3>*/
/*                         <input name="information_keyword_string" type="text" class="form-control input-md" value="{{ information_keyword_string }}" />*/
/*                         <br />{{ text_short_codes }}<br />*/
/*                         [information], [site_name]*/
/*                     </div>*/
/*                     <div class="col-xs-12 col-md-6">*/
/*                         <br />*/
/*                         <br />*/
/*                         <h3>{{ text_manufacturer_keywords_string }}</h3>*/
/*                         <input name="manufacturer_keyword_string" type="text" class="form-control input-md" value="{{ manufacturer_keyword_string }}" />*/
/*                         <br />{{ text_short_codes }}<br />*/
/*                         [manufacturer], [site_name]*/
/*                     </div>*/
/*                     <div class="col-xs-12 col-md-12">*/
/*                         <p class="text-left">*/
/*                             <br />*/
/*                             <a onClick="saveChanges('#seo_keywords_advanced');" class="btn btn-md btn-primary">{{ text_save_changes }}</a>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*   		</div>*/
/*   		*/
/*   		<div class="col-xs-12 col-md-4">*/
/*             <div class="box-heading">*/
/*                 <h1><i class="fa fa-info-circle" aria-hidden="true"></i>{{ tab_seo_meta_keywords_helper_title }}</h1>*/
/*             </div>*/
/*             <div class="box-content">*/
/*                 {{ tab_seo_meta_keywords_helper }}*/
/*             </div>*/
/*         </div>*/
/* 	</div>*/
/* </div>*/
