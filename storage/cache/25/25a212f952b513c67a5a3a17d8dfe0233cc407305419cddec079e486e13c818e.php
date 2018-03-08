<?php

/* extension/module/isenselabs_seo/tab_seo_analysis_ajax.twig */
class __TwigTemplate_994acf8f26a0f1a0c04e5f728b018c104ec922ef48f76f07b94d17c5f20c07a9 extends Twig_Template
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
        <h3>";
        // line 3
        echo (isset($context["tab_seo_analysis"]) ? $context["tab_seo_analysis"] : null);
        echo "</h3><br />
        <div class=\"seo-analysis-filter-row well\">
            <div class=\"col-xs-12 col-sm-12 col-md-6\">
                <div class=\"form-group\">
                    <label for=\"crawler_entry\">";
        // line 7
        echo (isset($context["text_crawler"]) ? $context["text_crawler"] : null);
        echo ":</label>
                    <select name=\"crawler\" id=\"crawler_entry\" class=\"form-control\">
                        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["crawler_list"]) ? $context["crawler_list"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["crawler_entry"]) {
            echo " 
                        <option value=\"";
            // line 10
            echo $context["crawler_entry"];
            echo "\" ";
            if (((isset($context["crawler"]) ? $context["crawler"] : null) == $context["crawler_entry"])) {
                echo " selected=\"selected\" ";
            }
            echo " >";
            echo $context["crawler_entry"];
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['crawler_entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "                    </select>
                </div>
                <div class=\"form-group\">
                    <label for=\"date_start_entry\">";
        // line 15
        echo (isset($context["text_date_start"]) ? $context["text_date_start"] : null);
        echo ":</label>
                    <input name=\"date_start\" id=\"date_start_entry\" class=\"form-control date\" data-date-format=\"YYYY-MM-DD\" value=\"";
        // line 16
        echo (isset($context["date_start"]) ? $context["date_start"] : null);
        echo "\" />
                </div>
            </div>
            <div class=\"col-xs-12 col-sm-12 col-md-6\">
                <div class=\"form-group\">
                    <label for=\"url_entry\">";
        // line 21
        echo (isset($context["text_url"]) ? $context["text_url"] : null);
        echo ":</label>
                    <input name=\"url\" id=\"url_entry\" class=\"form-control seo-analysis-url-filter\" value=\"";
        // line 22
        echo (isset($context["url"]) ? $context["url"] : null);
        echo "\" />
                </div>
                <div class=\"form-group\">
                    <label for=\"date_end_entry\">";
        // line 25
        echo (isset($context["text_date_end"]) ? $context["text_date_end"] : null);
        echo ":</label>
                    <input name=\"date_end\" id=\"date_end_entry\" class=\"form-control date\" data-date-format=\"YYYY-MM-DD\" value=\"";
        // line 26
        echo (isset($context["date_end"]) ? $context["date_end"] : null);
        echo "\" />
                </div>
            </div>         
            <div class=\"col-xs-12 col-sm-12 col-md-12\">
                <div class=\"form-group text-right\">
                     <button class=\"btn btn-seo-analysis-filter btn-primary\" onClick=\"filterSeoAnalysis(this, event);\">";
        // line 31
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</button>
                </div>
            </div>
            <div class=\"clearfix\"></div>            
        </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <table class=\"table table-striped table-seo-analysis\"> 
                    <thead>
                        <tr> 
                            <th>#</th> 
                            <th>";
        // line 42
        echo (isset($context["text_crawler"]) ? $context["text_crawler"] : null);
        echo "</th> 
                            <th>";
        // line 43
        echo (isset($context["text_visited_url"]) ? $context["text_visited_url"] : null);
        echo "</th> 
                            <th class=\"text-right\">";
        // line 44
        echo (isset($context["text_date_time"]) ? $context["text_date_time"] : null);
        echo "</th> 
                        </tr> 
                    </thead> 
                    <tbody> 
                        ";
        // line 48
        if ((twig_length_filter($this->env, (isset($context["sources"]) ? $context["sources"] : null)) > 0)) {
            echo " 
                            ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["sources"]) ? $context["sources"] : null));
            foreach ($context['_seq'] as $context["index"] => $context["result"]) {
                echo "  
                            <tr> 
                                <th scope=\"row\">";
                // line 51
                echo ($context["index"] + (1 * (isset($context["page"]) ? $context["page"] : null)));
                echo "</th> 
                                <td>";
                // line 52
                echo $this->getAttribute($context["result"], "crawler", array());
                echo "</td> 
                                <td><a href=\"";
                // line 53
                echo $this->getAttribute($context["result"], "url", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["result"], "url", array());
                echo "</a></td> 
                                <td class=\"text-right\">";
                // line 54
                echo $this->getAttribute($context["result"], "date_added", array());
                echo "</td> 
                            </tr> 
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                         ";
        } else {
            echo "   
                            <tr>
                                <td colspan=\"4\" class=\"text-center\">";
            // line 59
            echo (isset($context["text_no_crawler_results"]) ? $context["text_no_crawler_results"] : null);
            echo "</td>
                            </tr>
                         ";
        }
        // line 61
        echo " 
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan=\"5\">
                                <div class=\"row\">
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
                </table>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\">
\$('.date').datetimepicker({
\tpickTime: false
});
    
// SEO-Analysis input auto-send query
\$('.seo-analysis-url-filter').on('keydown', function(e) {
    if (e.keyCode == 13) {
        e.preventDefault();
        e.stopImmediatePropagation();
        \$('.btn-seo-analysis-filter').trigger('click');
    }
});
</script>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/tab_seo_analysis_ajax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 68,  177 => 67,  169 => 61,  163 => 59,  157 => 57,  148 => 54,  142 => 53,  138 => 52,  134 => 51,  127 => 49,  123 => 48,  116 => 44,  112 => 43,  108 => 42,  94 => 31,  86 => 26,  82 => 25,  76 => 22,  72 => 21,  64 => 16,  60 => 15,  55 => 12,  41 => 10,  35 => 9,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/*         <h3>{{ tab_seo_analysis }}</h3><br />*/
/*         <div class="seo-analysis-filter-row well">*/
/*             <div class="col-xs-12 col-sm-12 col-md-6">*/
/*                 <div class="form-group">*/
/*                     <label for="crawler_entry">{{ text_crawler }}:</label>*/
/*                     <select name="crawler" id="crawler_entry" class="form-control">*/
/*                         {% for crawler_entry in crawler_list %} */
/*                         <option value="{{ crawler_entry }}" {% if crawler == crawler_entry %} selected="selected" {% endif %} >{{ crawler_entry }}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="date_start_entry">{{ text_date_start }}:</label>*/
/*                     <input name="date_start" id="date_start_entry" class="form-control date" data-date-format="YYYY-MM-DD" value="{{ date_start }}" />*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-xs-12 col-sm-12 col-md-6">*/
/*                 <div class="form-group">*/
/*                     <label for="url_entry">{{ text_url }}:</label>*/
/*                     <input name="url" id="url_entry" class="form-control seo-analysis-url-filter" value="{{ url }}" />*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="date_end_entry">{{ text_date_end }}:</label>*/
/*                     <input name="date_end" id="date_end_entry" class="form-control date" data-date-format="YYYY-MM-DD" value="{{ date_end }}" />*/
/*                 </div>*/
/*             </div>         */
/*             <div class="col-xs-12 col-sm-12 col-md-12">*/
/*                 <div class="form-group text-right">*/
/*                      <button class="btn btn-seo-analysis-filter btn-primary" onClick="filterSeoAnalysis(this, event);">{{ text_filter }}</button>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clearfix"></div>            */
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-xs-12">*/
/*                 <table class="table table-striped table-seo-analysis"> */
/*                     <thead>*/
/*                         <tr> */
/*                             <th>#</th> */
/*                             <th>{{ text_crawler }}</th> */
/*                             <th>{{ text_visited_url }}</th> */
/*                             <th class="text-right">{{ text_date_time }}</th> */
/*                         </tr> */
/*                     </thead> */
/*                     <tbody> */
/*                         {% if sources|length > 0 %} */
/*                             {% for index, result in sources %}  */
/*                             <tr> */
/*                                 <th scope="row">{{ index+1*page }}</th> */
/*                                 <td>{{ result.crawler }}</td> */
/*                                 <td><a href="{{ result.url }}" target="_blank">{{ result.url }}</a></td> */
/*                                 <td class="text-right">{{ result.date_added }}</td> */
/*                             </tr> */
/*                             {% endfor %}*/
/*                          {% else %}   */
/*                             <tr>*/
/*                                 <td colspan="4" class="text-center">{{ text_no_crawler_results }}</td>*/
/*                             </tr>*/
/*                          {% endif %} */
/*                     </tbody>*/
/*                     <tfoot>*/
/*                         <tr>*/
/*                             <td colspan="5">*/
/*                                 <div class="row">*/
/*                                     <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*                                     <div class="col-sm-6 text-right">{{ results }}</div>*/
/*                                 </div>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </tfoot>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/* $('.date').datetimepicker({*/
/* 	pickTime: false*/
/* });*/
/*     */
/* // SEO-Analysis input auto-send query*/
/* $('.seo-analysis-url-filter').on('keydown', function(e) {*/
/*     if (e.keyCode == 13) {*/
/*         e.preventDefault();*/
/*         e.stopImmediatePropagation();*/
/*         $('.btn-seo-analysis-filter').trigger('click');*/
/*     }*/
/* });*/
/* </script>*/
