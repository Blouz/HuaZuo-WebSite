<?php

/* extension/module/isenselabs_seo/urls_linking_tab/tab_seo_links.twig */
class __TwigTemplate_4471c1c71da695f3b9c7057a370e51b431414d2cceadd7443428a3cd3e31f1c9 extends Twig_Template
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
           <ul id=\"seo_url_languages_tabs\" class=\"nav nav-pills\" role=\"tablist\">
               ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
               <li ";
            // line 6
            echo ((($this->getAttribute($context["language"], "language_id", array()) == (isset($context["default_language_id"]) ? $context["default_language_id"] : null))) ? ("class=\"active\"") : (""));
            echo "><a role=\"tab\" data-toggle=\"tab\" href=\"#seo_links_";
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
               <li><a role=\"tab\" data-toggle=\"tab\" href=\"#seo_links_advanced\">";
        // line 10
        echo (isset($context["tab_seo_links_title"]) ? $context["tab_seo_links_title"] : null);
        echo "</a></li>
            </ul>
            <div class=\"tab-content tabs\">
                ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
                ";
            // line 14
            $context["lid"] = $this->getAttribute($context["language"], "language_id", array());
            echo " 
                <div id=\"seo_links_";
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
            echo (isset($context["text_manufacturers"]) ? $context["text_manufacturers"] : null);
            echo "</th>
                                <th class=\"text-center\">";
            // line 23
            echo (isset($context["text_information_pages"]) ? $context["text_information_pages"] : null);
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
            echo $this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_products", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td>";
            // line 30
            echo $this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_categories", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td>";
            // line 31
            echo $this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_manufacturers", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td>";
            // line 32
            echo $this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_informations", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">";
            // line 35
            echo (isset($context["text_seo_urls"]) ? $context["text_seo_urls"] : null);
            echo "</th>
                                <td>";
            // line 36
            echo $this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_products_meta", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td>";
            // line 37
            echo $this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_categories_meta", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td>";
            // line 38
            echo $this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_manufacturers_meta", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td>";
            // line 39
            echo $this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_informations_meta", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">";
            // line 42
            echo (isset($context["text_missing_urls"]) ? $context["text_missing_urls"] : null);
            echo "</th>
                                <td class=\"";
            // line 43
            echo ((($this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_products_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array") > 0)) ? ("danger") : ("success"));
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_products_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td class=\"";
            // line 44
            echo ((($this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_categories_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array") > 0)) ? ("danger") : ("success"));
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_categories_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td class=\"";
            // line 45
            echo ((($this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_manufacturers_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array") > 0)) ? ("danger") : ("success"));
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_manufacturers_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                                <td class=\"";
            // line 46
            echo ((($this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_informations_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array") > 0)) ? ("danger") : ("success"));
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_informations_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array");
            echo "</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">";
            // line 49
            echo (isset($context["text_action"]) ? $context["text_action"] : null);
            echo "</th>
                                <td>
                                    <a onclick=\"seoFixNow('product_seo_urls', ";
            // line 51
            echo $this->getAttribute($context["language"], "language_id", array());
            echo ");\" class=\"btn btn-md btn-primary ";
            echo ((($this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_products_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array") > 0)) ? ("") : ("disabled"));
            echo " btn-seo-fix margin-fix\">";
            echo (isset($context["text_generate"]) ? $context["text_generate"] : null);
            echo "</a>
                                    <br /><br />
                                    <a onclick=\"seoFixNow('product_seo_urls_all', ";
            // line 53
            echo $this->getAttribute($context["language"], "language_id", array());
            echo ");\" class=\"btn btn-md btn-success btn-seo-fix\">";
            echo (isset($context["text_start_fresh"]) ? $context["text_start_fresh"] : null);
            echo "</a>
                                </td>
                                <td>
                                    <a onclick=\"seoFixNow('category_seo_urls', ";
            // line 56
            echo $this->getAttribute($context["language"], "language_id", array());
            echo ");\" class=\"btn btn-md btn-primary ";
            echo ((($this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_categories_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array") > 0)) ? ("") : ("disabled"));
            echo " btn-seo-fix margin-fix\">";
            echo (isset($context["text_generate"]) ? $context["text_generate"] : null);
            echo "</a>
                                    <br /><br />
                                    <a onclick=\"seoFixNow('category_seo_urls_all', ";
            // line 58
            echo $this->getAttribute($context["language"], "language_id", array());
            echo ");\" class=\"btn btn-md btn-success btn-seo-fix\">";
            echo (isset($context["text_start_fresh"]) ? $context["text_start_fresh"] : null);
            echo "</a>
                                </td>
                                <td>
                                    <a onclick=\"seoFixNow('manufacturer_seo_urls', ";
            // line 61
            echo $this->getAttribute($context["language"], "language_id", array());
            echo ");\" class=\"btn btn-md btn-primary ";
            echo ((($this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_manufacturers_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array") > 0)) ? ("") : ("disabled"));
            echo " btn-seo-fix margin-fix\">";
            echo (isset($context["text_generate"]) ? $context["text_generate"] : null);
            echo "</a>
                                    <br /><br />
                                    <a onclick=\"seoFixNow('manufacturer_seo_urls_all', ";
            // line 63
            echo $this->getAttribute($context["language"], "language_id", array());
            echo ");\" class=\"btn btn-md btn-success btn-seo-fix\">";
            echo (isset($context["text_start_fresh"]) ? $context["text_start_fresh"] : null);
            echo "</a>
                                </td>
                                <td>
                                    <a onclick=\"seoFixNow('information_seo_urls', ";
            // line 66
            echo $this->getAttribute($context["language"], "language_id", array());
            echo ");\" class=\"btn btn-md btn-primary ";
            echo ((($this->getAttribute($this->getAttribute((isset($context["seo_link_data"]) ? $context["seo_link_data"] : null), "total_informations_difference", array()), (isset($context["lid"]) ? $context["lid"] : null), array(), "array") > 0)) ? ("") : ("disabled"));
            echo " btn-seo-fix margin-fix\">";
            echo (isset($context["text_generate"]) ? $context["text_generate"] : null);
            echo "</a>
                                    <br /><br />
                                    <a onclick=\"seoFixNow('information_seo_urls_all', ";
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
                <div id=\"seo_links_advanced\" role=\"tabpanel\" class=\"tab-pane fade in\">
                    <div class=\"col-xs-12 col-md-6\">
                        <br />
                        <h3>";
        // line 78
        echo (isset($context["text_product_url_string"]) ? $context["text_product_url_string"] : null);
        echo "</h3>
                        <input name=\"product_url_string\" type=\"text\" class=\"form-control input-md\" value=\"";
        // line 79
        echo (isset($context["product_url_string"]) ? $context["product_url_string"] : null);
        echo "\" />
                        <br />";
        // line 80
        echo (isset($context["text_short_codes"]) ? $context["text_short_codes"] : null);
        echo "<br />
                        [product], [model], [sku], [upc], [manufacturer], [lang], [id], [random]
                    </div>
                    <div class=\"col-xs-12 col-md-6\">
                        <br />
                        <h3>";
        // line 85
        echo (isset($context["text_category_url_string"]) ? $context["text_category_url_string"] : null);
        echo "</h3>
                        <input name=\"category_url_string\" type=\"text\" class=\"form-control input-md\" value=\"";
        // line 86
        echo (isset($context["category_url_string"]) ? $context["category_url_string"] : null);
        echo "\" />
                        <br />";
        // line 87
        echo (isset($context["text_short_codes"]) ? $context["text_short_codes"] : null);
        echo "<br />
                        [category], [lang], [random]
                    </div>
                    <div class=\"col-xs-12 col-md-6\">
                        <br />
                        <br />
                        <h3>";
        // line 93
        echo (isset($context["text_manufacturer_url_string"]) ? $context["text_manufacturer_url_string"] : null);
        echo "</h3>
                        <input name=\"manufacturer_url_string\" type=\"text\" class=\"form-control input-md\" value=\"";
        // line 94
        echo (isset($context["manufacturer_url_string"]) ? $context["manufacturer_url_string"] : null);
        echo "\" />
                        <br />";
        // line 95
        echo (isset($context["text_short_codes"]) ? $context["text_short_codes"] : null);
        echo "<br />
                        [manufacturer], [lang], [random]
                    </div>
                    <div class=\"col-xs-12 col-md-6\">
                        <br />
                        <br />
                        <h3>";
        // line 101
        echo (isset($context["text_information_url_string"]) ? $context["text_information_url_string"] : null);
        echo "</h3>
                        <input name=\"information_url_string\" type=\"text\" class=\"form-control input-md\" value=\"";
        // line 102
        echo (isset($context["information_url_string"]) ? $context["information_url_string"] : null);
        echo "\" />
                        <br />";
        // line 103
        echo (isset($context["text_short_codes"]) ? $context["text_short_codes"] : null);
        echo "<br />
                        [information], [lang], [random]
                    </div>
                    <div class=\"col-xs-12 col-md-12\">
                        <p>
                            <br />
                            ";
        // line 109
        echo (isset($context["text_random_shortcode"]) ? $context["text_random_shortcode"] : null);
        echo "
                        </p>
                        <p class=\"text-left\">
                            <br />
                            <a onClick=\"saveChanges('#seo_links_advanced');\" class=\"btn btn-md btn-primary\">";
        // line 113
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
        // line 122
        echo (isset($context["tab_seo_links_helper_title"]) ? $context["tab_seo_links_helper_title"] : null);
        echo "</h1>
            </div>
            <div class=\"box-content\">
            ";
        // line 125
        echo (isset($context["tab_seo_links_helper"]) ? $context["tab_seo_links_helper"] : null);
        echo "
            </div>
        </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/urls_linking_tab/tab_seo_links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  353 => 125,  347 => 122,  335 => 113,  328 => 109,  319 => 103,  315 => 102,  311 => 101,  302 => 95,  298 => 94,  294 => 93,  285 => 87,  281 => 86,  277 => 85,  269 => 80,  265 => 79,  261 => 78,  255 => 74,  240 => 68,  231 => 66,  223 => 63,  214 => 61,  206 => 58,  197 => 56,  189 => 53,  180 => 51,  175 => 49,  167 => 46,  161 => 45,  155 => 44,  149 => 43,  145 => 42,  139 => 39,  135 => 38,  131 => 37,  127 => 36,  123 => 35,  117 => 32,  113 => 31,  109 => 30,  105 => 29,  101 => 28,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  71 => 15,  67 => 14,  61 => 13,  55 => 10,  52 => 9,  37 => 7,  31 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/*   		<div class="col-xs-12 col-md-8">*/
/*            <ul id="seo_url_languages_tabs" class="nav nav-pills" role="tablist">*/
/*                {% for language in languages %} */
/*                <li {{ language.language_id == default_language_id ? 'class="active"' : '' }}><a role="tab" data-toggle="tab" href="#seo_links_{{ language.language_id }}">*/
/*                     <img src="language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}" />*/
/*                </a></li> */
/*                {% endfor %} */
/*                <li><a role="tab" data-toggle="tab" href="#seo_links_advanced">{{ tab_seo_links_title }}</a></li>*/
/*             </ul>*/
/*             <div class="tab-content tabs">*/
/*                 {% for language in languages %} */
/*                 {% set lid = language.language_id  %} */
/*                 <div id="seo_links_{{ language.language_id }}" role="tabpanel" class="tab-pane fade in {{ language.language_id == default_language_id ? 'active' : '' }}">                */
/*                     <table class="table table-hover text-center"> */
/*                         <thead> */
/*                             <tr> */
/*                                 <th>#</th>*/
/*                                 <th class="text-center">{{ text_products }}</th>*/
/*                                 <th class="text-center">{{ text_categories }}</th>*/
/*                                 <th class="text-center">{{ text_manufacturers }}</th>*/
/*                                 <th class="text-center">{{ text_information_pages }}</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             <tr>*/
/*                                 <th scope="row">{{ text_total_items }}</th>*/
/*                                 <td>{{ seo_link_data.total_products[lid] }}</td>*/
/*                                 <td>{{ seo_link_data.total_categories[lid] }}</td>*/
/*                                 <td>{{ seo_link_data.total_manufacturers[lid] }}</td>*/
/*                                 <td>{{ seo_link_data.total_informations[lid] }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th scope="row">{{ text_seo_urls }}</th>*/
/*                                 <td>{{ seo_link_data.total_products_meta[lid] }}</td>*/
/*                                 <td>{{ seo_link_data.total_categories_meta[lid] }}</td>*/
/*                                 <td>{{ seo_link_data.total_manufacturers_meta[lid] }}</td>*/
/*                                 <td>{{ seo_link_data.total_informations_meta[lid] }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th scope="row">{{ text_missing_urls }}</th>*/
/*                                 <td class="{{ seo_link_data.total_products_difference[lid] > 0 ? 'danger' : 'success' }}">{{ seo_link_data.total_products_difference[lid] }}</td>*/
/*                                 <td class="{{ seo_link_data.total_categories_difference[lid] > 0 ? 'danger' : 'success' }}">{{ seo_link_data.total_categories_difference[lid] }}</td>*/
/*                                 <td class="{{ seo_link_data.total_manufacturers_difference[lid] > 0 ? 'danger' : 'success' }}">{{ seo_link_data.total_manufacturers_difference[lid] }}</td>*/
/*                                 <td class="{{ seo_link_data.total_informations_difference[lid] > 0 ? 'danger' : 'success' }}">{{ seo_link_data.total_informations_difference[lid] }}</td>*/
/*                             </tr>*/
/*                             <tr>*/
/*                                 <th scope="row">{{ text_action }}</th>*/
/*                                 <td>*/
/*                                     <a onclick="seoFixNow('product_seo_urls', {{ language.language_id }});" class="btn btn-md btn-primary {{ seo_link_data.total_products_difference[lid] > 0 ? '' : 'disabled' }} btn-seo-fix margin-fix">{{ text_generate }}</a>*/
/*                                     <br /><br />*/
/*                                     <a onclick="seoFixNow('product_seo_urls_all', {{ language.language_id }});" class="btn btn-md btn-success btn-seo-fix">{{ text_start_fresh }}</a>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <a onclick="seoFixNow('category_seo_urls', {{ language.language_id }});" class="btn btn-md btn-primary {{ seo_link_data.total_categories_difference[lid] > 0 ? '' : 'disabled' }} btn-seo-fix margin-fix">{{ text_generate }}</a>*/
/*                                     <br /><br />*/
/*                                     <a onclick="seoFixNow('category_seo_urls_all', {{ language.language_id }});" class="btn btn-md btn-success btn-seo-fix">{{ text_start_fresh }}</a>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <a onclick="seoFixNow('manufacturer_seo_urls', {{ language.language_id }});" class="btn btn-md btn-primary {{ seo_link_data.total_manufacturers_difference[lid] > 0 ? '' : 'disabled' }} btn-seo-fix margin-fix">{{ text_generate }}</a>*/
/*                                     <br /><br />*/
/*                                     <a onclick="seoFixNow('manufacturer_seo_urls_all', {{ language.language_id }});" class="btn btn-md btn-success btn-seo-fix">{{ text_start_fresh }}</a>*/
/*                                 </td>*/
/*                                 <td>*/
/*                                     <a onclick="seoFixNow('information_seo_urls', {{ language.language_id }});" class="btn btn-md btn-primary {{ seo_link_data.total_informations_difference[lid] > 0 ? '' : 'disabled' }} btn-seo-fix margin-fix">{{ text_generate }}</a>*/
/*                                     <br /><br />*/
/*                                     <a onclick="seoFixNow('information_seo_urls_all', {{ language.language_id }});" class="btn btn-md btn-success btn-seo-fix">{{ text_start_fresh }}</a>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*                 {% endfor %} */
/*                 <div id="seo_links_advanced" role="tabpanel" class="tab-pane fade in">*/
/*                     <div class="col-xs-12 col-md-6">*/
/*                         <br />*/
/*                         <h3>{{ text_product_url_string }}</h3>*/
/*                         <input name="product_url_string" type="text" class="form-control input-md" value="{{ product_url_string }}" />*/
/*                         <br />{{ text_short_codes }}<br />*/
/*                         [product], [model], [sku], [upc], [manufacturer], [lang], [id], [random]*/
/*                     </div>*/
/*                     <div class="col-xs-12 col-md-6">*/
/*                         <br />*/
/*                         <h3>{{ text_category_url_string }}</h3>*/
/*                         <input name="category_url_string" type="text" class="form-control input-md" value="{{ category_url_string }}" />*/
/*                         <br />{{ text_short_codes }}<br />*/
/*                         [category], [lang], [random]*/
/*                     </div>*/
/*                     <div class="col-xs-12 col-md-6">*/
/*                         <br />*/
/*                         <br />*/
/*                         <h3>{{ text_manufacturer_url_string }}</h3>*/
/*                         <input name="manufacturer_url_string" type="text" class="form-control input-md" value="{{ manufacturer_url_string }}" />*/
/*                         <br />{{ text_short_codes }}<br />*/
/*                         [manufacturer], [lang], [random]*/
/*                     </div>*/
/*                     <div class="col-xs-12 col-md-6">*/
/*                         <br />*/
/*                         <br />*/
/*                         <h3>{{ text_information_url_string }}</h3>*/
/*                         <input name="information_url_string" type="text" class="form-control input-md" value="{{ information_url_string }}" />*/
/*                         <br />{{ text_short_codes }}<br />*/
/*                         [information], [lang], [random]*/
/*                     </div>*/
/*                     <div class="col-xs-12 col-md-12">*/
/*                         <p>*/
/*                             <br />*/
/*                             {{ text_random_shortcode }}*/
/*                         </p>*/
/*                         <p class="text-left">*/
/*                             <br />*/
/*                             <a onClick="saveChanges('#seo_links_advanced');" class="btn btn-md btn-primary">{{ text_save_changes }}</a>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*   		</div>*/
/*   		*/
/*   		<div class="col-xs-12 col-md-4">*/
/*             <div class="box-heading">*/
/*                 <h1><i class="fa fa-info-circle" aria-hidden="true"></i>{{ tab_seo_links_helper_title }}</h1>*/
/*             </div>*/
/*             <div class="box-content">*/
/*             {{ tab_seo_links_helper }}*/
/*             </div>*/
/*         </div>*/
/* 	</div>*/
/* </div>*/
