<?php

/* extension/module/isenselabs_seo/urls_linking_tab/autolinks_ajax.twig */
class __TwigTemplate_f3ed970ae8c644597574f1ad62b59b1fc9bd475e54f21763d03d631bcf89bd85 extends Twig_Template
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
        echo "<div class=\"pull-left\">
    <a class=\"btn btn-primary\" onClick=\"addAutoLink();\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i>&nbsp;&nbsp;";
        // line 2
        echo (isset($context["text_add_new_autolink"]) ? $context["text_add_new_autolink"] : null);
        echo "</a>
</div>
<div class=\"clearfix\"></div>
<table class=\"table table-striped table-autolinks table-hover\"> 
    <thead>
        <tr> 
            <th><input type=\"checkbox\" onclick=\"\$('input[name*=\\'autolinks_ids\\']').prop('checked', this.checked);\$('input[name*=\\'autolinks_ids\\']').trigger('change');\"></th> 
            <th>";
        // line 9
        echo (isset($context["text_keyword"]) ? $context["text_keyword"] : null);
        echo "</th> 
            <th>";
        // line 10
        echo (isset($context["text_link"]) ? $context["text_link"] : null);
        echo "</th> 
            <th class=\"text-right\">";
        // line 11
        echo (isset($context["text_action"]) ? $context["text_action"] : null);
        echo "</th> 
        </tr> 
    </thead> 
    <tbody> 
        ";
        // line 15
        if ((twig_length_filter($this->env, (isset($context["sources"]) ? $context["sources"] : null)) > 0)) {
            echo "  
            <tr class=\"autolinks-options\" style=\"display:none;\">
                <td colspan=\"5\">
                    <a onClick=\"deleteAutoLinks();\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i> ";
            // line 18
            echo (isset($context["text_delete_selected_items"]) ? $context["text_delete_selected_items"] : null);
            echo "</a>
                </td>
            </tr>    
            ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) ? $context["sources"] : null));
            foreach ($context['_seq'] as $context["index"] => $context["result"]) {
                echo "  
            <tr> 
                <td scope=\"row\">
                    <input type=\"checkbox\" name=\"autolinks_ids[]\" value=\"";
                // line 24
                echo $this->getAttribute($context["result"], "id", array());
                echo "\" />
                </td> 
                <td>";
                // line 26
                echo $this->getAttribute($context["result"], "keyword", array());
                echo "</td> 
                <td><a href=\"";
                // line 27
                echo $this->getAttribute($context["result"], "url", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["result"], "url", array());
                echo "</a></td> 
                <td class=\"text-right\">
                    <a onClick=\"editAutoLink(";
                // line 29
                echo $this->getAttribute($context["result"], "id", array());
                echo ");\" class=\"btn btn-primary btn-md\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                    &nbsp;
                    <a onClick=\"deleteAutoLink(";
                // line 31
                echo $this->getAttribute($context["result"], "id", array());
                echo ");\" class=\"btn btn-danger btn-md\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                </td> 
            </tr> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo " 
         ";
        } else {
            // line 35
            echo "   
            <tr>
                <td colspan=\"4\" class=\"text-center\">";
            // line 37
            echo (isset($context["text_no_auto_links"]) ? $context["text_no_auto_links"] : null);
            echo "</td>
            </tr>
         ";
        }
        // line 40
        echo "    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"5\">
    \t        <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 45
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 46
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
        return "extension/module/isenselabs_seo/urls_linking_tab/autolinks_ajax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 46,  119 => 45,  112 => 40,  106 => 37,  102 => 35,  98 => 34,  88 => 31,  83 => 29,  76 => 27,  72 => 26,  67 => 24,  59 => 21,  53 => 18,  47 => 15,  40 => 11,  36 => 10,  32 => 9,  22 => 2,  19 => 1,);
    }
}
/* <div class="pull-left">*/
/*     <a class="btn btn-primary" onClick="addAutoLink();"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;{{ text_add_new_autolink }}</a>*/
/* </div>*/
/* <div class="clearfix"></div>*/
/* <table class="table table-striped table-autolinks table-hover"> */
/*     <thead>*/
/*         <tr> */
/*             <th><input type="checkbox" onclick="$('input[name*=\'autolinks_ids\']').prop('checked', this.checked);$('input[name*=\'autolinks_ids\']').trigger('change');"></th> */
/*             <th>{{ text_keyword }}</th> */
/*             <th>{{ text_link }}</th> */
/*             <th class="text-right">{{ text_action }}</th> */
/*         </tr> */
/*     </thead> */
/*     <tbody> */
/*         {% if sources|length > 0 %}  */
/*             <tr class="autolinks-options" style="display:none;">*/
/*                 <td colspan="5">*/
/*                     <a onClick="deleteAutoLinks();" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i> {{ text_delete_selected_items}}</a>*/
/*                 </td>*/
/*             </tr>    */
/*             {% for index, result in sources %}  */
/*             <tr> */
/*                 <td scope="row">*/
/*                     <input type="checkbox" name="autolinks_ids[]" value="{{ result.id }}" />*/
/*                 </td> */
/*                 <td>{{ result.keyword }}</td> */
/*                 <td><a href="{{ result.url }}" target="_blank">{{ result.url }}</a></td> */
/*                 <td class="text-right">*/
/*                     <a onClick="editAutoLink({{ result.id }});" class="btn btn-primary btn-md"><i class="fa fa-pencil" aria-hidden="true"></i></a>*/
/*                     &nbsp;*/
/*                     <a onClick="deleteAutoLink({{ result.id }});" class="btn btn-danger btn-md"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/*                 </td> */
/*             </tr> */
/*             {% endfor %} */
/*          {% else %}   */
/*             <tr>*/
/*                 <td colspan="4" class="text-center">{{ text_no_auto_links }}</td>*/
/*             </tr>*/
/*          {% endif %}*/
/*     </tbody>*/
/*     <tfoot>*/
/*         <tr>*/
/*             <td colspan="5">*/
/*     	        <div class="row">*/
/*                     <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*                     <div class="col-sm-6 text-right">{{ results }}</div>*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*     </tfoot>*/
/* </table>*/
