<?php

/* extension/module/isenselabs_seo/advanced_editor_tab/products_ajax.twig */
class __TwigTemplate_bb19f16ae4cbee8ca6aa90142901d8ba8bfa73b96bb2a3e416ee79497b36c2e2 extends Twig_Template
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
<table class=\"table table-striped table-editor table-editor-products\" data-type=\"product\" data-language-id=\"";
        // line 10
        echo (isset($context["language_id"]) ? $context["language_id"] : null);
        echo "\"> 
    <thead>
        <tr> 
            <th>#</th> 
            <th class=\"\">";
        // line 14
        echo (isset($context["text_editor_name"]) ? $context["text_editor_name"] : null);
        echo "</th> 
            <th class=\"\">";
        // line 15
        echo (isset($context["text_editor_seo_keyword"]) ? $context["text_editor_seo_keyword"] : null);
        echo "</th> 
            <th class=\"\">";
        // line 16
        echo (isset($context["text_editor_meta_title"]) ? $context["text_editor_meta_title"] : null);
        echo "</th> 
            <th class=\"\">";
        // line 17
        echo (isset($context["text_editor_meta_description"]) ? $context["text_editor_meta_description"] : null);
        echo "</th> 
            <th class=\"\">";
        // line 18
        echo (isset($context["text_editor_meta_keyword"]) ? $context["text_editor_meta_keyword"] : null);
        echo "</th> 
            <th class=\"\">";
        // line 19
        echo (isset($context["text_editor_h1"]) ? $context["text_editor_h1"] : null);
        echo "</th> 
            <th class=\"\">";
        // line 20
        echo (isset($context["text_editor_h2"]) ? $context["text_editor_h2"] : null);
        echo "</th> 
            <th class=\"text-right\">";
        // line 21
        echo (isset($context["text_show"]) ? $context["text_show"] : null);
        echo "</th>
            <th class=\"text-right\">";
        // line 22
        echo (isset($context["text_action"]) ? $context["text_action"] : null);
        echo "</th>
        </tr> 
        <tr class=\"filter-products filter-form\" data-route=\"editor_products\" data-view=\"editor-products\"> 
            <th></th> 
            <th><input type=\"text\" name=\"filter_name\" class=\"form-control\" value=\"";
        // line 26
        echo (isset($context["filter_name"]) ? $context["filter_name"] : null);
        echo "\" /></th> 
            <th><input type=\"text\" name=\"filter_keyword\" class=\"form-control\" value=\"";
        // line 27
        echo (isset($context["filter_keyword"]) ? $context["filter_keyword"] : null);
        echo "\" /></th> 
            <th><input type=\"text\" name=\"filter_meta_title\" class=\"form-control\" value=\"";
        // line 28
        echo (isset($context["filter_meta_title"]) ? $context["filter_meta_title"] : null);
        echo "\" /></th> 
            <th><input type=\"text\" name=\"filter_meta_description\" class=\"form-control\" value=\"";
        // line 29
        echo (isset($context["filter_meta_description"]) ? $context["filter_meta_description"] : null);
        echo "\" /></th> 
            <th><input type=\"text\" name=\"filter_meta_keywords\" class=\"form-control\" value=\"";
        // line 30
        echo (isset($context["filter_meta_keywords"]) ? $context["filter_meta_keywords"] : null);
        echo "\" /></th> 
            <th><input type=\"text\" name=\"filter_h1\" class=\"form-control\" value=\"";
        // line 31
        echo (isset($context["filter_h1"]) ? $context["filter_h1"] : null);
        echo "\" /></th>
            <th><input type=\"text\" name=\"filter_h2\" class=\"form-control\" value=\"";
        // line 32
        echo (isset($context["filter_h2"]) ? $context["filter_h2"] : null);
        echo "\" /></th>
               <th class=\"text-right\">
                <select name=\"filter_limit\" class=\"form-control\">
                    <option value=\"10\" ";
        // line 35
        echo ((((isset($context["filter_limit"]) ? $context["filter_limit"] : null) == 10)) ? ("selected=\"selected\"") : (""));
        echo ">10</option>
                    <option value=\"20\" ";
        // line 36
        echo ((((isset($context["filter_limit"]) ? $context["filter_limit"] : null) == 20)) ? ("selected=\"selected\"") : (""));
        echo ">20</option>
                    <option value=\"50\" ";
        // line 37
        echo ((((isset($context["filter_limit"]) ? $context["filter_limit"] : null) == 50)) ? ("selected=\"selected\"") : (""));
        echo ">50</option>
                    <option value=\"100\" ";
        // line 38
        echo ((((isset($context["filter_limit"]) ? $context["filter_limit"] : null) == 100)) ? ("selected=\"selected\"") : (""));
        echo ">100</option>
                </select>
            </th>
           
            <th class=\"text-right\">
                <input type=\"hidden\" name=\"language_id\" value=\"";
        // line 43
        echo (isset($context["language_id"]) ? $context["language_id"] : null);
        echo "\" />
                <a onClick=\"filterData('.filter-products');\" class=\"btn btn-primary\">";
        // line 44
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</a>
            </th>
        </tr>
    </thead> 
    <tbody> 
        ";
        // line 49
        if ((twig_length_filter($this->env, (isset($context["sources"]) ? $context["sources"] : null)) > 0)) {
            echo "   
            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) ? $context["sources"] : null));
            foreach ($context['_seq'] as $context["index"] => $context["result"]) {
                echo "  
            <tr> 
                <th scope=\"row\">";
                // line 52
                echo $this->getAttribute($context["result"], "product_id", array());
                echo "</th> 
                <td>";
                // line 53
                echo $this->getAttribute($context["result"], "name", array());
                echo "</td> 
                <td id=\"product_seo_keyword_";
                // line 54
                echo $this->getAttribute($context["result"], "product_id", array());
                echo "\" onDblClick=\"editField(";
                echo $this->getAttribute($context["result"], "product_id", array());
                echo ", 'url_alias', this);\"><span class=\"editable\">";
                echo $this->getAttribute($context["result"], "seo_keyword", array());
                echo "</span></td> 
                <td id=\"product_meta_title_";
                // line 55
                echo $this->getAttribute($context["result"], "product_id", array());
                echo "\" onDblClick=\"editField(";
                echo $this->getAttribute($context["result"], "product_id", array());
                echo ", 'meta_title', this);\"><span class=\"editable\">";
                echo $this->getAttribute($context["result"], "meta_title", array());
                echo "</span></td> 
                <td id=\"product_meta_description_";
                // line 56
                echo $this->getAttribute($context["result"], "product_id", array());
                echo "\" onDblClick=\"editField(";
                echo $this->getAttribute($context["result"], "product_id", array());
                echo ", 'meta_description', this);\"><span class=\"editable\">";
                echo $this->getAttribute($context["result"], "meta_description", array());
                echo "</span></td> 
                <td id=\"product_meta_keyword_";
                // line 57
                echo $this->getAttribute($context["result"], "product_id", array());
                echo "\" onDblClick=\"editField(";
                echo $this->getAttribute($context["result"], "product_id", array());
                echo ", 'meta_keyword', this);\"><span class=\"editable\">";
                echo $this->getAttribute($context["result"], "meta_keyword", array());
                echo "</span></td> 
                <td id=\"product_h1_";
                // line 58
                echo $this->getAttribute($context["result"], "product_id", array());
                echo "\" onDblClick=\"editField(";
                echo $this->getAttribute($context["result"], "product_id", array());
                echo ", 'h1', this);\"><span class=\"editable\">";
                echo $this->getAttribute($context["result"], "h1", array());
                echo "</span></td> 
                <td id=\"product_h2_";
                // line 59
                echo $this->getAttribute($context["result"], "product_id", array());
                echo "\" onDblClick=\"editField(";
                echo $this->getAttribute($context["result"], "product_id", array());
                echo ", 'h2', this);\"><span class=\"editable\">";
                echo $this->getAttribute($context["result"], "h2", array());
                echo "</span></td> 
                <td></td>
                <td></td>
            </tr> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo " 
         ";
        } else {
            // line 64
            echo "   
            <tr>
                <td colspan=\"11\" class=\"text-center\">";
            // line 66
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
            </tr>
         ";
        }
        // line 69
        echo "    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"11\">
    \t        <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 74
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 75
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
        return "extension/module/isenselabs_seo/advanced_editor_tab/products_ajax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 75,  259 => 74,  252 => 69,  246 => 66,  242 => 64,  238 => 63,  223 => 59,  215 => 58,  207 => 57,  199 => 56,  191 => 55,  183 => 54,  179 => 53,  175 => 52,  168 => 50,  164 => 49,  156 => 44,  152 => 43,  144 => 38,  140 => 37,  136 => 36,  132 => 35,  126 => 32,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  95 => 22,  91 => 21,  87 => 20,  83 => 19,  79 => 18,  75 => 17,  71 => 16,  67 => 15,  63 => 14,  56 => 10,  52 => 8,  37 => 5,  29 => 4,  23 => 3,  19 => 1,);
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
/* <table class="table table-striped table-editor table-editor-products" data-type="product" data-language-id="{{ language_id }}"> */
/*     <thead>*/
/*         <tr> */
/*             <th>#</th> */
/*             <th class="">{{ text_editor_name }}</th> */
/*             <th class="">{{ text_editor_seo_keyword }}</th> */
/*             <th class="">{{ text_editor_meta_title }}</th> */
/*             <th class="">{{ text_editor_meta_description }}</th> */
/*             <th class="">{{ text_editor_meta_keyword }}</th> */
/*             <th class="">{{ text_editor_h1 }}</th> */
/*             <th class="">{{ text_editor_h2 }}</th> */
/*             <th class="text-right">{{ text_show }}</th>*/
/*             <th class="text-right">{{ text_action }}</th>*/
/*         </tr> */
/*         <tr class="filter-products filter-form" data-route="editor_products" data-view="editor-products"> */
/*             <th></th> */
/*             <th><input type="text" name="filter_name" class="form-control" value="{{ filter_name }}" /></th> */
/*             <th><input type="text" name="filter_keyword" class="form-control" value="{{ filter_keyword }}" /></th> */
/*             <th><input type="text" name="filter_meta_title" class="form-control" value="{{ filter_meta_title }}" /></th> */
/*             <th><input type="text" name="filter_meta_description" class="form-control" value="{{ filter_meta_description }}" /></th> */
/*             <th><input type="text" name="filter_meta_keywords" class="form-control" value="{{ filter_meta_keywords }}" /></th> */
/*             <th><input type="text" name="filter_h1" class="form-control" value="{{ filter_h1 }}" /></th>*/
/*             <th><input type="text" name="filter_h2" class="form-control" value="{{ filter_h2 }}" /></th>*/
/*                <th class="text-right">*/
/*                 <select name="filter_limit" class="form-control">*/
/*                     <option value="10" {{ filter_limit == 10 ? 'selected="selected"' : '' }}>10</option>*/
/*                     <option value="20" {{ filter_limit == 20 ? 'selected="selected"' : '' }}>20</option>*/
/*                     <option value="50" {{ filter_limit == 50 ? 'selected="selected"' : '' }}>50</option>*/
/*                     <option value="100" {{ filter_limit == 100 ? 'selected="selected"' : '' }}>100</option>*/
/*                 </select>*/
/*             </th>*/
/*            */
/*             <th class="text-right">*/
/*                 <input type="hidden" name="language_id" value="{{ language_id }}" />*/
/*                 <a onClick="filterData('.filter-products');" class="btn btn-primary">{{ text_filter }}</a>*/
/*             </th>*/
/*         </tr>*/
/*     </thead> */
/*     <tbody> */
/*         {% if sources|length > 0 %}   */
/*             {% for index, result in sources %}  */
/*             <tr> */
/*                 <th scope="row">{{ result.product_id }}</th> */
/*                 <td>{{ result.name }}</td> */
/*                 <td id="product_seo_keyword_{{ result.product_id }}" onDblClick="editField({{ result.product_id }}, 'url_alias', this);"><span class="editable">{{ result.seo_keyword }}</span></td> */
/*                 <td id="product_meta_title_{{ result.product_id }}" onDblClick="editField({{ result.product_id }}, 'meta_title', this);"><span class="editable">{{ result.meta_title }}</span></td> */
/*                 <td id="product_meta_description_{{ result.product_id }}" onDblClick="editField({{ result.product_id }}, 'meta_description', this);"><span class="editable">{{ result.meta_description }}</span></td> */
/*                 <td id="product_meta_keyword_{{ result.product_id }}" onDblClick="editField({{ result.product_id }}, 'meta_keyword', this);"><span class="editable">{{ result.meta_keyword }}</span></td> */
/*                 <td id="product_h1_{{ result.product_id }}" onDblClick="editField({{ result.product_id }}, 'h1', this);"><span class="editable">{{ result.h1 }}</span></td> */
/*                 <td id="product_h2_{{ result.product_id }}" onDblClick="editField({{ result.product_id }}, 'h2', this);"><span class="editable">{{ result.h2 }}</span></td> */
/*                 <td></td>*/
/*                 <td></td>*/
/*             </tr> */
/*             {% endfor %} */
/*          {% else %}   */
/*             <tr>*/
/*                 <td colspan="11" class="text-center">{{ text_no_results }}</td>*/
/*             </tr>*/
/*          {% endif %}*/
/*     </tbody>*/
/*     <tfoot>*/
/*         <tr>*/
/*             <td colspan="11">*/
/*     	        <div class="row">*/
/*                     <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*                     <div class="col-sm-6 text-right">{{ results }}</div>*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*     </tfoot>*/
/* </table>*/
