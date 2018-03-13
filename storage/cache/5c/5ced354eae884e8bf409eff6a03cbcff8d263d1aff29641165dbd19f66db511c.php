<?php

/* extension/module/isenselabs_seo/missing_pages_tab/redirects_ajax.twig */
class __TwigTemplate_44bcc664be9a3220d683fc33de006409762734659064639dc5d8292a4f122c38 extends Twig_Template
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
    <a class=\"btn btn-primary\" onclick=\"addRedirectForMissingPage('', '.tab-redirects-results');\"><i class=\"fa fa-external-link-square\" aria-hidden=\"true\"></i>&nbsp;&nbsp;";
        // line 2
        echo (isset($context["text_add_404_redirect"]) ? $context["text_add_404_redirect"] : null);
        echo "</a>
</div>
<div class=\"clearfix\"></div>
<table class=\"table table-striped table-redirects table-hover\"> 
    <thead>
        <tr>
            <th><input type=\"checkbox\" onclick=\"\$('input[name*=\\'redirects_ids\\']').prop('checked', this.checked);\$('input[name*=\\'redirects_ids\\']').trigger('change');\"></th> 
            <th>";
        // line 9
        echo (isset($context["text_route_from"]) ? $context["text_route_from"] : null);
        echo "</th> 
            <th>";
        // line 10
        echo (isset($context["text_route_to"]) ? $context["text_route_to"] : null);
        echo "</th> 
            <th>";
        // line 11
        echo (isset($context["text_created"]) ? $context["text_created"] : null);
        echo "</th>
            <th class=\"text-right\">";
        // line 12
        echo (isset($context["text_action"]) ? $context["text_action"] : null);
        echo "</th> 
        </tr> 
    </thead> 
    <tbody> 
        ";
        // line 16
        if ((twig_length_filter($this->env, (isset($context["sources"]) ? $context["sources"] : null)) > 0)) {
            echo " 
            <tr class=\"redirects-options\" style=\"display:none;\">
                <td colspan=\"6\">
                    <a onClick=\"deleteRedirects();\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i> ";
            // line 19
            echo (isset($context["text_delete_selected_items"]) ? $context["text_delete_selected_items"] : null);
            echo "</a>
                </td>
            </tr>  
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) ? $context["sources"] : null));
            foreach ($context['_seq'] as $context["index"] => $context["result"]) {
                echo "  
            <tr> 
                <td scope=\"row\">
                    <input type=\"checkbox\" name=\"redirects_ids[]\" value=\"";
                // line 25
                echo $this->getAttribute($context["result"], "redirect_id", array());
                echo "\" />
                </td>
                <td><a href=\"/";
                // line 27
                echo $this->getAttribute($context["result"], "route_from", array());
                echo "\" target=\"_blank\">/";
                echo $this->getAttribute($context["result"], "route_from", array());
                echo "</a></td> 
                <td>";
                // line 28
                echo $this->getAttribute($context["result"], "route_to", array());
                echo "</td> 
                <td>";
                // line 29
                echo $this->getAttribute($context["result"], "date_added", array());
                echo "</td> 
                <td class=\"text-right\">
                    <a onClick=\"deleteRedirect(";
                // line 31
                echo $this->getAttribute($context["result"], "redirect_id", array());
                echo ");\" class=\"btn btn-danger btn-md\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                </td> 
            </tr> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "         ";
        } else {
            echo "   
            <tr>
                <td colspan=\"6\" class=\"text-center\">";
            // line 37
            echo (isset($context["text_no_redirects"]) ? $context["text_no_redirects"] : null);
            echo "</td>
            </tr>
         ";
        }
        // line 39
        echo " 
    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"6\">
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
        return "extension/module/isenselabs_seo/missing_pages_tab/redirects_ajax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 46,  121 => 45,  113 => 39,  107 => 37,  101 => 35,  91 => 31,  86 => 29,  82 => 28,  76 => 27,  71 => 25,  63 => 22,  57 => 19,  51 => 16,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  22 => 2,  19 => 1,);
    }
}
/* <div class="pull-left">*/
/*     <a class="btn btn-primary" onclick="addRedirectForMissingPage('', '.tab-redirects-results');"><i class="fa fa-external-link-square" aria-hidden="true"></i>&nbsp;&nbsp;{{ text_add_404_redirect }}</a>*/
/* </div>*/
/* <div class="clearfix"></div>*/
/* <table class="table table-striped table-redirects table-hover"> */
/*     <thead>*/
/*         <tr>*/
/*             <th><input type="checkbox" onclick="$('input[name*=\'redirects_ids\']').prop('checked', this.checked);$('input[name*=\'redirects_ids\']').trigger('change');"></th> */
/*             <th>{{ text_route_from }}</th> */
/*             <th>{{ text_route_to }}</th> */
/*             <th>{{ text_created }}</th>*/
/*             <th class="text-right">{{ text_action }}</th> */
/*         </tr> */
/*     </thead> */
/*     <tbody> */
/*         {% if sources|length > 0 %} */
/*             <tr class="redirects-options" style="display:none;">*/
/*                 <td colspan="6">*/
/*                     <a onClick="deleteRedirects();" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i> {{ text_delete_selected_items}}</a>*/
/*                 </td>*/
/*             </tr>  */
/*             {% for index, result in sources %}  */
/*             <tr> */
/*                 <td scope="row">*/
/*                     <input type="checkbox" name="redirects_ids[]" value="{{ result.redirect_id }}" />*/
/*                 </td>*/
/*                 <td><a href="/{{ result.route_from }}" target="_blank">/{{ result.route_from }}</a></td> */
/*                 <td>{{ result.route_to }}</td> */
/*                 <td>{{ result.date_added }}</td> */
/*                 <td class="text-right">*/
/*                     <a onClick="deleteRedirect({{ result.redirect_id }});" class="btn btn-danger btn-md"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/*                 </td> */
/*             </tr> */
/*             {% endfor %}*/
/*          {% else %}   */
/*             <tr>*/
/*                 <td colspan="6" class="text-center">{{ text_no_redirects }}</td>*/
/*             </tr>*/
/*          {% endif %} */
/*     </tbody>*/
/*     <tfoot>*/
/*         <tr>*/
/*             <td colspan="6">*/
/*     	        <div class="row">*/
/*                     <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*                     <div class="col-sm-6 text-right">{{ results }}</div>*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*     </tfoot>*/
/* </table>*/
