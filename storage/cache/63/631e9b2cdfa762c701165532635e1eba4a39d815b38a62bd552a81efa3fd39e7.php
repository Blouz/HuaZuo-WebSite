<?php

/* extension/module/isenselabs_seo/advanced_editor_tab/manufacturers_ajax.twig */
class __TwigTemplate_a37fe969bbfbae5a9e6b7b39958feb861cb7a07bc867d08deec4aeeacb10efb8 extends Twig_Template
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
        echo "<br />
<ul class=\"nav nav-pills nav-pills-languages\" role=\"tablist\">
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
        <li ";
            // line 4
            echo ((($this->getAttribute($context["language"], "language_id", array()) == (isset($context["language_id"]) ? $context["language_id"] : null))) ? ("class=\"active\"") : (""));
            echo "><a role=\"tab\" data-toggle=\"tab\" href=\"";
            echo (isset($context["action_url"]) ? $context["action_url"] : null);
            echo "&language_id=";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
            <img src=\"language/";
            // line 5
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
        // line 8
        echo "</ul>
<br />
<table class=\"table table-striped table-editor table-editor-manufacturers\" data-type=\"manufacturer\" data-language-id=\"";
        // line 10
        echo (isset($context["language_id"]) ? $context["language_id"] : null);
        echo "\"> 
    <thead>
        <tr> 
            <th>#</th> 
            <th class=\"col-xs-2\">";
        // line 14
        echo (isset($context["text_editor_name"]) ? $context["text_editor_name"] : null);
        echo "</th> 
            <th class=\"col-xs-2\">";
        // line 15
        echo (isset($context["text_editor_seo_keyword"]) ? $context["text_editor_seo_keyword"] : null);
        echo "</th> 
            <th class=\"col-xs-2\">";
        // line 16
        echo (isset($context["text_editor_meta_title"]) ? $context["text_editor_meta_title"] : null);
        echo "</th> 
            <th class=\"col-xs-2\">";
        // line 17
        echo (isset($context["text_editor_meta_description"]) ? $context["text_editor_meta_description"] : null);
        echo "</th> 
            <th class=\"col-xs-2\">";
        // line 18
        echo (isset($context["text_editor_meta_keyword"]) ? $context["text_editor_meta_keyword"] : null);
        echo "</th> 
            <th class=\"col-xs-1 text-right\">";
        // line 19
        echo (isset($context["text_show"]) ? $context["text_show"] : null);
        echo "</th>
            <th class=\"col-xs-1 text-right\">";
        // line 20
        echo (isset($context["text_action"]) ? $context["text_action"] : null);
        echo "</th>
        </tr> 
        <tr class=\"filter-manufacturers filter-form\" data-route=\"editor_manufacturers\" data-view=\"editor-manufacturers\"> 
            <th></th> 
            <th><input type=\"text\" name=\"filter_name\" class=\"form-control\" value=\"";
        // line 24
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" /></th> 
            <th><input type=\"text\" name=\"filter_keyword\" class=\"form-control\" value=\"";
        // line 25
        echo (isset($context["filter_keyword"]) ? $context["filter_keyword"] : null);
        echo "\" /></th> 
            <th><input type=\"text\" name=\"filter_meta_title\" class=\"form-control\" value=\"";
        // line 26
        echo (isset($context["filter_meta_title"]) ? $context["filter_meta_title"] : null);
        echo "\" /></th> 
            <th><input type=\"text\" name=\"filter_meta_description\" class=\"form-control\" value=\"";
        // line 27
        echo (isset($context["filter_meta_description"]) ? $context["filter_meta_description"] : null);
        echo "\" /></th> 
            <th><input type=\"text\" name=\"filter_meta_keywords\" class=\"form-control\" value=\"";
        // line 28
        echo (isset($context["filter_meta_keywords"]) ? $context["filter_meta_keywords"] : null);
        echo "\" /></th>
            <th>
                <select name=\"filter_limit\" class=\"form-control\">
                    <option value=\"10\" ";
        // line 31
        echo ((((isset($context["filter_limit"]) ? $context["filter_limit"] : null) == 10)) ? ("selected=\"selected\"") : (""));
        echo ">10</option>
                    <option value=\"20\" ";
        // line 32
        echo ((((isset($context["filter_limit"]) ? $context["filter_limit"] : null) == 20)) ? ("selected=\"selected\"") : (""));
        echo ">20</option>
                    <option value=\"50\" ";
        // line 33
        echo ((((isset($context["filter_limit"]) ? $context["filter_limit"] : null) == 50)) ? ("selected=\"selected\"") : (""));
        echo ">50</option>
                    <option value=\"100\" ";
        // line 34
        echo ((((isset($context["filter_limit"]) ? $context["filter_limit"] : null) == 100)) ? ("selected=\"selected\"") : (""));
        echo ">100</option>
                </select>
            </th>
            <th class=\"text-right\">
                <input type=\"hidden\" name=\"language_id\" value=\"";
        // line 38
        echo (isset($context["language_id"]) ? $context["language_id"] : null);
        echo "\" />
                <a onClick=\"filterData('.filter-manufacturers');\" class=\"btn btn-primary\">";
        // line 39
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</a>
            </th>
        </tr>
    </thead> 
    <tbody> 
        ";
        // line 44
        if ((twig_length_filter($this->env, (isset($context["sources"]) ? $context["sources"] : null)) > 0)) {
            echo "   
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) ? $context["sources"] : null));
            foreach ($context['_seq'] as $context["index"] => $context["result"]) {
                echo "  
            <tr> 
                <th scope=\"row\">";
                // line 47
                echo $this->getAttribute($context["result"], "manufacturer_id", array());
                echo "</th> 
                <td>";
                // line 48
                echo $this->getAttribute($context["result"], "name", array());
                echo "</td> 
                <td id=\"manufacturer_seo_keyword_";
                // line 49
                echo $this->getAttribute($context["result"], "manufacturer_id", array());
                echo "\" onDblClick=\"editField(";
                echo $this->getAttribute($context["result"], "manufacturer_id", array());
                echo ", 'url_alias', this);\"><span class=\"editable\">";
                echo $this->getAttribute($context["result"], "seo_keyword", array());
                echo "</span></td> 
                <td id=\"manufacturer_meta_title_";
                // line 50
                echo $this->getAttribute($context["result"], "manufacturer_id", array());
                echo "\" onDblClick=\"editField(";
                echo $this->getAttribute($context["result"], "manufacturer_id", array());
                echo ", 'meta_title', this);\"><span class=\"editable\">";
                echo $this->getAttribute($context["result"], "meta_title", array());
                echo "</span></td> 
                <td id=\"manufacturer_meta_description_";
                // line 51
                echo $this->getAttribute($context["result"], "manufacturer_id", array());
                echo "\" onDblClick=\"editField(";
                echo $this->getAttribute($context["result"], "manufacturer_id", array());
                echo ", 'meta_description', this);\"><span class=\"editable\">";
                echo $this->getAttribute($context["result"], "meta_description", array());
                echo "</span></td> 
                <td id=\"manufacturer_meta_keyword_";
                // line 52
                echo $this->getAttribute($context["result"], "manufacturer_id", array());
                echo "\"onDblClick=\"editField(";
                echo $this->getAttribute($context["result"], "manufacturer_id", array());
                echo ", 'meta_keyword', this);\"><span class=\"editable\">";
                echo $this->getAttribute($context["result"], "meta_keyword", array());
                echo "</span></td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo " 
         ";
        } else {
            // line 57
            echo "   
            <tr>
                <td colspan=\"9\" class=\"text-center\">";
            // line 59
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
            </tr>
         ";
        }
        // line 62
        echo "    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"9\">
    \t        <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 67
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 68
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
                </div>
            </td>
        </tr>
    </tfoot>
</table>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/advanced_editor_tab/manufacturers_ajax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 68,  226 => 67,  219 => 62,  213 => 59,  209 => 57,  205 => 56,  190 => 52,  182 => 51,  174 => 50,  166 => 49,  162 => 48,  158 => 47,  151 => 45,  147 => 44,  139 => 39,  135 => 38,  128 => 34,  124 => 33,  120 => 32,  116 => 31,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  56 => 10,  52 => 8,  37 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <br />*/
/* <ul class="nav nav-pills nav-pills-languages" role="tablist">*/
/*     {% for language in languages %} */
/*         <li {{ language.language_id == language_id ? 'class="active"' : '' }}><a role="tab" data-toggle="tab" href="{{ action_url }}&language_id={{ language.language_id }}">*/
/*             <img src="language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}" />*/
/*         </a></li> */
/*     {% endfor %}*/
/* </ul>*/
/* <br />*/
/* <table class="table table-striped table-editor table-editor-manufacturers" data-type="manufacturer" data-language-id="{{ language_id }}"> */
/*     <thead>*/
/*         <tr> */
/*             <th>#</th> */
/*             <th class="col-xs-2">{{ text_editor_name }}</th> */
/*             <th class="col-xs-2">{{ text_editor_seo_keyword }}</th> */
/*             <th class="col-xs-2">{{ text_editor_meta_title }}</th> */
/*             <th class="col-xs-2">{{ text_editor_meta_description }}</th> */
/*             <th class="col-xs-2">{{ text_editor_meta_keyword }}</th> */
/*             <th class="col-xs-1 text-right">{{ text_show }}</th>*/
/*             <th class="col-xs-1 text-right">{{ text_action }}</th>*/
/*         </tr> */
/*         <tr class="filter-manufacturers filter-form" data-route="editor_manufacturers" data-view="editor-manufacturers"> */
/*             <th></th> */
/*             <th><input type="text" name="filter_name" class="form-control" value="{{ filter_name }}" /></th> */
/*             <th><input type="text" name="filter_keyword" class="form-control" value="{{ filter_keyword }}" /></th> */
/*             <th><input type="text" name="filter_meta_title" class="form-control" value="{{ filter_meta_title }}" /></th> */
/*             <th><input type="text" name="filter_meta_description" class="form-control" value="{{ filter_meta_description }}" /></th> */
/*             <th><input type="text" name="filter_meta_keywords" class="form-control" value="{{ filter_meta_keywords }}" /></th>*/
/*             <th>*/
/*                 <select name="filter_limit" class="form-control">*/
/*                     <option value="10" {{ filter_limit == 10 ? 'selected="selected"' : '' }}>10</option>*/
/*                     <option value="20" {{ filter_limit == 20 ? 'selected="selected"' : '' }}>20</option>*/
/*                     <option value="50" {{ filter_limit == 50 ? 'selected="selected"' : '' }}>50</option>*/
/*                     <option value="100" {{ filter_limit == 100 ? 'selected="selected"' : '' }}>100</option>*/
/*                 </select>*/
/*             </th>*/
/*             <th class="text-right">*/
/*                 <input type="hidden" name="language_id" value="{{ language_id }}" />*/
/*                 <a onClick="filterData('.filter-manufacturers');" class="btn btn-primary">{{ text_filter }}</a>*/
/*             </th>*/
/*         </tr>*/
/*     </thead> */
/*     <tbody> */
/*         {% if sources|length > 0 %}   */
/*             {% for index, result in sources %}  */
/*             <tr> */
/*                 <th scope="row">{{ result.manufacturer_id }}</th> */
/*                 <td>{{ result.name }}</td> */
/*                 <td id="manufacturer_seo_keyword_{{ result.manufacturer_id }}" onDblClick="editField({{ result.manufacturer_id }}, 'url_alias', this);"><span class="editable">{{ result.seo_keyword }}</span></td> */
/*                 <td id="manufacturer_meta_title_{{ result.manufacturer_id }}" onDblClick="editField({{ result.manufacturer_id }}, 'meta_title', this);"><span class="editable">{{ result.meta_title }}</span></td> */
/*                 <td id="manufacturer_meta_description_{{ result.manufacturer_id }}" onDblClick="editField({{ result.manufacturer_id }}, 'meta_description', this);"><span class="editable">{{ result.meta_description }}</span></td> */
/*                 <td id="manufacturer_meta_keyword_{{ result.manufacturer_id }}"onDblClick="editField({{ result.manufacturer_id }}, 'meta_keyword', this);"><span class="editable">{{ result.meta_keyword }}</span></td>*/
/*                 <td>&nbsp;</td>*/
/*                 <td>&nbsp;</td>*/
/*             </tr> */
/*             {% endfor %} */
/*          {% else %}   */
/*             <tr>*/
/*                 <td colspan="9" class="text-center">{{ text_no_results }}</td>*/
/*             </tr>*/
/*          {% endif %}*/
/*     </tbody>*/
/*     <tfoot>*/
/*         <tr>*/
/*             <td colspan="9">*/
/*     	        <div class="row">*/
/*                     <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*                     <div class="col-sm-6 text-right">{{ results }}</div>*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*     </tfoot>*/
/* </table>*/
