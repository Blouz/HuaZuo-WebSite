<?php

/* extension/module/isenselabs_seo/missing_pages_tab/detected_pages_ajax.twig */
class __TwigTemplate_a19771e7af70ea2992155025644bef24034eb39c30dc473316d2beb058ac17f2 extends Twig_Template
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
        echo "<div class=\"clearfix\"></div>
<table class=\"table table-striped table-detected-pages table-hover\"> 
    <thead>
        <tr>
            <th><input type=\"checkbox\" onclick=\"\$('input[name*=\\'detectedpages_ids\\']').prop('checked', this.checked);\$('input[name*=\\'detectedpages_ids\\']').trigger('change');\"></th> 
            <th>";
        // line 6
        echo (isset($context["text_route"]) ? $context["text_route"] : null);
        echo "</th> 
            <th>";
        // line 7
        echo (isset($context["text_visits"]) ? $context["text_visits"] : null);
        echo "</th> 
            <th>";
        // line 8
        echo (isset($context["text_first_visited"]) ? $context["text_first_visited"] : null);
        echo "</th>
            <th>";
        // line 9
        echo (isset($context["text_last_visited"]) ? $context["text_last_visited"] : null);
        echo "</th>
            <th class=\"text-right\">";
        // line 10
        echo (isset($context["text_action"]) ? $context["text_action"] : null);
        echo "</th> 
        </tr> 
    </thead> 
    <tbody> 
        ";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["sources"]) ? $context["sources"] : null)) > 0)) {
            echo " 
            <tr class=\"detectedpages-options\" style=\"display:none;\">
                <td colspan=\"6\">
                    <a onClick=\"deleteDetectedPages();\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i> ";
            // line 17
            echo (isset($context["text_delete_selected_items"]) ? $context["text_delete_selected_items"] : null);
            echo "</a>
                </td>
            </tr>  
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) ? $context["sources"] : null));
            foreach ($context['_seq'] as $context["index"] => $context["result"]) {
                echo "  
            <tr> 
                <td scope=\"row\">
                    <input type=\"checkbox\" name=\"detectedpages_ids[]\" value=\"";
                // line 23
                echo $this->getAttribute($context["result"], "page_id", array());
                echo "\" />
                </td>
                <td><a href=\"/";
                // line 25
                echo $this->getAttribute($context["result"], "route", array());
                echo " \" target=\"_blank\">/";
                echo $this->getAttribute($context["result"], "route", array());
                echo "</a></td> 
                <td>";
                // line 26
                echo $this->getAttribute($context["result"], "visits", array());
                echo "</td> 
                <td>";
                // line 27
                echo $this->getAttribute($context["result"], "first_visited", array());
                echo "</td> 
                <td>";
                // line 28
                echo $this->getAttribute($context["result"], "last_visited", array());
                echo "</td> 
                <td class=\"text-right\">
                    <a onClick=\"addRedirectForMissingPage('";
                // line 30
                echo $this->getAttribute($context["result"], "route", array());
                echo "', '.tab-detected-pages-results');\" class=\"btn btn-primary btn-md\"><i class=\"fa fa-external-link-square\" aria-hidden=\"true\"></i></a>
                    &nbsp;
                    <a onClick=\"deleteDetectedPage(";
                // line 32
                echo $this->getAttribute($context["result"], "page_id", array());
                echo ");\" class=\"btn btn-danger btn-md\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>
                </td> 
            </tr> 
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "         ";
        } else {
            echo "   
            <tr>
                <td colspan=\"6\" class=\"text-center\">";
            // line 38
            echo (isset($context["text_no_detected_pages"]) ? $context["text_no_detected_pages"] : null);
            echo "</td>
            </tr>
         ";
        }
        // line 40
        echo " 
    </tbody>
    <tfoot>
        <tr>
            <td colspan=\"6\">
    \t        <div class=\"row\">
                    <div class=\"col-sm-6 text-left\">";
        // line 46
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
                    <div class=\"col-sm-6 text-right\">";
        // line 47
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
        return "extension/module/isenselabs_seo/missing_pages_tab/detected_pages_ajax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 47,  128 => 46,  120 => 40,  114 => 38,  108 => 36,  98 => 32,  93 => 30,  88 => 28,  84 => 27,  80 => 26,  74 => 25,  69 => 23,  61 => 20,  55 => 17,  49 => 14,  42 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="clearfix"></div>*/
/* <table class="table table-striped table-detected-pages table-hover"> */
/*     <thead>*/
/*         <tr>*/
/*             <th><input type="checkbox" onclick="$('input[name*=\'detectedpages_ids\']').prop('checked', this.checked);$('input[name*=\'detectedpages_ids\']').trigger('change');"></th> */
/*             <th>{{ text_route }}</th> */
/*             <th>{{ text_visits }}</th> */
/*             <th>{{ text_first_visited }}</th>*/
/*             <th>{{ text_last_visited }}</th>*/
/*             <th class="text-right">{{ text_action }}</th> */
/*         </tr> */
/*     </thead> */
/*     <tbody> */
/*         {% if sources|length > 0 %} */
/*             <tr class="detectedpages-options" style="display:none;">*/
/*                 <td colspan="6">*/
/*                     <a onClick="deleteDetectedPages();" class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i> {{ text_delete_selected_items }}</a>*/
/*                 </td>*/
/*             </tr>  */
/*             {% for index, result in sources %}  */
/*             <tr> */
/*                 <td scope="row">*/
/*                     <input type="checkbox" name="detectedpages_ids[]" value="{{ result.page_id }}" />*/
/*                 </td>*/
/*                 <td><a href="/{{ result.route }} " target="_blank">/{{ result.route }}</a></td> */
/*                 <td>{{ result.visits }}</td> */
/*                 <td>{{ result.first_visited }}</td> */
/*                 <td>{{ result.last_visited }}</td> */
/*                 <td class="text-right">*/
/*                     <a onClick="addRedirectForMissingPage('{{ result.route }}', '.tab-detected-pages-results');" class="btn btn-primary btn-md"><i class="fa fa-external-link-square" aria-hidden="true"></i></a>*/
/*                     &nbsp;*/
/*                     <a onClick="deleteDetectedPage({{ result.page_id }});" class="btn btn-danger btn-md"><i class="fa fa-times" aria-hidden="true"></i></a>*/
/*                 </td> */
/*             </tr> */
/*             {% endfor %}*/
/*          {% else %}   */
/*             <tr>*/
/*                 <td colspan="6" class="text-center">{{ text_no_detected_pages }}</td>*/
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
