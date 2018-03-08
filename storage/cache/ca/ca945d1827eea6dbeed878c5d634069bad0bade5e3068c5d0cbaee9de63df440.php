<?php

/* extension/module/isenselabs_seo/urls_linking_tab/customurls_ajax.twig */
class __TwigTemplate_3ffc441e5e3c9eefa882cb47b99cb80fd66add0b53010cbfe69338f26982fd57 extends Twig_Template
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
    <a class=\"btn btn-primary\" onClick=\"addCustomUrl();\"><i class=\"fa fa-plus\" aria-hidden=\"true\"></i>&nbsp;&nbsp;";
        // line 2
        echo (isset($context["text_add_custom_url"]) ? $context["text_add_custom_url"] : null);
        echo "</a>
</div>
<div class=\"clearfix\"></div>
<table class=\"table table-striped table-customurls table-hover\"> 
    <thead>
        <tr>
             <th><input type=\"checkbox\" onclick=\"\$('input[name*=\\'customurls_ids\\']').prop('checked', this.checked);\$('input[name*=\\'customurls_ids\\']').trigger('change');\"></th> 
            <th>";
        // line 9
        echo (isset($context["text_route"]) ? $context["text_route"] : null);
        echo "</th> 
            <th>";
        // line 10
        echo (isset($context["text_custom_url"]) ? $context["text_custom_url"] : null);
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
            <tr class=\"customurls-options\" style=\"display:none;\">
                <td colspan=\"5\">
                    <a onClick=\"deleteCustomUrls();\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i> ";
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
                    <input type=\"checkbox\" name=\"customurls_ids[]\" value=\"";
                // line 24
                echo $this->getAttribute($context["result"], "id", array());
                echo "\" />
                </td>
                <td><a href=\"/index.php?route=";
                // line 26
                echo $this->getAttribute($context["result"], "query", array());
                echo "\" target=\"_blank\">/";
                echo $this->getAttribute($context["result"], "query", array());
                echo "</a></td> 
                <td><a href=\"/index.php?route=";
                // line 27
                echo $this->getAttribute($context["result"], "keyword", array());
                echo "\" target=\"_blank\">/";
                echo $this->getAttribute($context["result"], "keyword", array());
                echo "</a></td> 
                <td class=\"text-right\">
                    <a onClick=\"editCustomUrl(";
                // line 29
                echo $this->getAttribute($context["result"], "id", array());
                echo ");\" class=\"btn btn-primary btn-md\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                    &nbsp;
                    <a onClick=\"deleteCustomUrl(";
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
            echo (isset($context["text_no_custom_urls"]) ? $context["text_no_custom_urls"] : null);
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
        return "extension/module/isenselabs_seo/urls_linking_tab/customurls_ajax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 46,  121 => 45,  114 => 40,  108 => 37,  104 => 35,  100 => 34,  90 => 31,  85 => 29,  78 => 27,  72 => 26,  67 => 24,  59 => 21,  53 => 18,  47 => 15,  40 => 11,  36 => 10,  32 => 9,  22 => 2,  19 => 1,);
    }
}
/* <div class="pull-left">*/
/*     <a class="btn btn-primary" onClick="addCustomUrl();"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;&nbsp;{{ text_add_custom_url }}</a>*/
/* </div>*/
/* <div class="clearfix"></div>*/
/* <table class="table table-striped table-customurls table-hover"> */
/*     <thead>*/
/*         <tr>*/
/*              <th><input type="checkbox" onclick="$('input[name*=\'customurls_ids\']').prop('checked', this.checked);$('input[name*=\'customurls_ids\']').trigger('change');"></th> */
/*             <th>{{ text_route }}</th> */
/*             <th>{{ text_custom_url }}</th> */
/*             <th class="text-right">{{ text_action }}</th> */
/*         </tr> */
/*     </thead> */
/*     <tbody> */
/*         {% if sources|length > 0 %} */
/*             <tr class="customurls-options" style="display:none;">*/
/*                 <td colspan="5">*/
/*                     <a onClick="deleteCustomUrls();" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i> {{ text_delete_selected_items}}</a>*/
/*                 </td>*/
/*             </tr>  */
/*             {% for index, result in sources %}  */
/*             <tr> */
/*                 <td scope="row">*/
/*                     <input type="checkbox" name="customurls_ids[]" value="{{ result.id }}" />*/
/*                 </td>*/
/*                 <td><a href="/index.php?route={{ result.query }}" target="_blank">/{{ result.query }}</a></td> */
/*                 <td><a href="/index.php?route={{ result.keyword }}" target="_blank">/{{ result.keyword }}</a></td> */
/*                 <td class="text-right">*/
/*                     <a onClick="editCustomUrl({{ result.id }});" class="btn btn-primary btn-md"><i class="fa fa-pencil" aria-hidden="true"></i></a>*/
/*                     &nbsp;*/
/*                     <a onClick="deleteCustomUrl({{ result.id }});" class="btn btn-danger btn-md"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/*                 </td> */
/*             </tr> */
/*             {% endfor %} */
/*          {% else %}   */
/*             <tr>*/
/*                 <td colspan="4" class="text-center">{{ text_no_custom_urls }}</td>*/
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
