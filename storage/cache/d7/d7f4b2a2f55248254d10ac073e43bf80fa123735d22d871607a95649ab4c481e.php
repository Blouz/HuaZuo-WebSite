<?php

/* extension/module/isenselabs_seo/tab_home.twig */
class __TwigTemplate_c1bab007218d97adc4f1ee852a12e57f0ad8568abb2dd6ae761a26a70773b5c0 extends Twig_Template
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
  \t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-5 text-center\">
            <div class=\"well\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"seo_score_chart\">
                            <h1>";
        // line 8
        echo (isset($context["text_seo_score_for"]) ? $context["text_seo_score_for"] : null);
        echo "</h1>
                            <div id=\"seo_score\"></div>
                            <div class=\"clearfix\"></div>

                            <div class=\"button\">
                                <br />
                                <a class=\"btn btn-lg btn-primary btn-retest\" data-loading-text=\"Please wait...\" onclick=\"getSEOScore();\">";
        // line 14
        echo (isset($context["button_test_again"]) ? $context["button_test_again"] : null);
        echo "</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
                        <a onClick=\"showSeoScoreHelper();\" class=\"pointer-cursor\">";
        // line 21
        echo (isset($context["text_seo_score_meaning"]) ? $context["text_seo_score_meaning"] : null);
        echo "</a>
                    </div>
                    <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-6\">
                        <p>";
        // line 24
        echo (isset($context["text_seo_score_last_checked"]) ? $context["text_seo_score_last_checked"] : null);
        echo " ";
        echo (isset($context["seo_score_last_checked"]) ? $context["seo_score_last_checked"] : null);
        echo "</p>
                    </div>
                </div>
            </div>
            <div class=\"clearfix\"></div>
  \t\t</div>
  \t\t<div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-7\">
            <h3>";
        // line 31
        echo ((((isset($context["text_what_can_be_improved"]) ? $context["text_what_can_be_improved"] : null) . " (<span class=\"improved_count\">") . twig_length_filter($this->env, (isset($context["fixes"]) ? $context["fixes"] : null))) . "</span>)");
        echo "</h3>
            <br />
            <div class=\"list-group list-group-fixes\">
                ";
        // line 34
        if ((twig_length_filter($this->env, (isset($context["fixes"]) ? $context["fixes"] : null)) > 0)) {
            // line 35
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fixes"]) ? $context["fixes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["fix"]) {
                echo " 
                    <div class=\"list-group-item\">
                        <span class=\"pull-left\">
                            <a onclick=\"seoFixQuick('";
                // line 38
                echo $this->getAttribute($context["fix"], "event", array());
                echo "', this);\" class=\"btn btn-sm btn-primary\">";
                echo (isset($context["text_fix_now"]) ? $context["text_fix_now"] : null);
                echo "</a>
                        </span>
                        &nbsp;
                        ";
                // line 41
                echo $this->getAttribute($context["fix"], "name", array());
                echo "
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fix'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                 ";
        } else {
            echo "   
                    <i class=\"fa fa-check-square\" aria-hidden=\"true\"></i>&nbsp;&nbsp;";
            // line 45
            echo (isset($context["text_already_improved_great_result"]) ? $context["text_already_improved_great_result"] : null);
            echo "
                 ";
        }
        // line 46
        echo "  
            </div>
            
            <div class=\"padding-top\"></div>
            <h3>";
        // line 50
        echo ((((isset($context["text_what_is_already_improved"]) ? $context["text_what_is_already_improved"] : null) . " (") . twig_length_filter($this->env, (isset($context["fixed"]) ? $context["fixed"] : null))) . ")");
        echo "</h3>
            <br />
            <div class=\"list-group list-group-fixes\">
                ";
        // line 53
        if ((twig_length_filter($this->env, (isset($context["fixed"]) ? $context["fixed"] : null)) > 0)) {
            // line 54
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fixed"]) ? $context["fixed"] : null));
            foreach ($context['_seq'] as $context["index"] => $context["fix"]) {
                echo "  
                        <div class=\"list-group-item ";
                // line 55
                echo ((($context["index"] > 4)) ? ("show-hide-list") : (""));
                echo "\">
                            <span class=\"pull-left\">
                                <a onclick=\"seoFixQuick('";
                // line 57
                echo $this->getAttribute($context["fix"], "event", array());
                echo "', this);\" class=\"btn btn-sm btn-success disabled\">";
                echo (isset($context["text_success_btn"]) ? $context["text_success_btn"] : null);
                echo "</a>
                            </span>
                            &nbsp;
                            ";
                // line 60
                echo $this->getAttribute($context["fix"], "name", array());
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['fix'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                    ";
            if ((twig_length_filter($this->env, (isset($context["fixed"]) ? $context["fixed"] : null)) > 4)) {
                // line 64
                echo "                        <div class=\"text-center padding-top\"><a onClick=\"showHideList();\" class=\"btn btn-default btn-sm btn-show-hide-list\">";
                echo (isset($context["text_show_more"]) ? $context["text_show_more"] : null);
                echo "</a></div>
                    ";
            }
            // line 65
            echo " 
                ";
        }
        // line 66
        echo "  
            </div>
        </div>
\t</div>
</div>


<script>
var seo_score = c3.generate({
    bindto: '#seo_score',
    data: {
        columns: [
            ['SEO Score', ";
        // line 78
        echo (isset($context["seo_score"]) ? $context["seo_score"] : null);
        echo "],
            ['Can be Improved', ";
        // line 79
        echo (100 - (isset($context["seo_score"]) ? $context["seo_score"] : null));
        echo "]
        ],
        type: 'donut',
        onclick: function (d, i) { /*console.log(\"onclick\", d, i);*/ },
        onmouseover: function (d, i) { /*console.log(\"onmouseover\", d, i);*/ },
        onmouseout: function (d, i) { /*console.log(\"onmouseout\", d, i);*/ }
    }
});
</script>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/tab_home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 79,  179 => 78,  165 => 66,  161 => 65,  155 => 64,  152 => 63,  143 => 60,  135 => 57,  130 => 55,  123 => 54,  121 => 53,  115 => 50,  109 => 46,  104 => 45,  99 => 44,  90 => 41,  82 => 38,  73 => 35,  71 => 34,  65 => 31,  53 => 24,  47 => 21,  37 => 14,  28 => 8,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/*   		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 text-center">*/
/*             <div class="well">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-12">*/
/*                         <div class="seo_score_chart">*/
/*                             <h1>{{ text_seo_score_for }}</h1>*/
/*                             <div id="seo_score"></div>*/
/*                             <div class="clearfix"></div>*/
/* */
/*                             <div class="button">*/
/*                                 <br />*/
/*                                 <a class="btn btn-lg btn-primary btn-retest" data-loading-text="Please wait..." onclick="getSEOScore();">{{ button_test_again }}</a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">*/
/*                         <a onClick="showSeoScoreHelper();" class="pointer-cursor">{{ text_seo_score_meaning }}</a>*/
/*                     </div>*/
/*                     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">*/
/*                         <p>{{ text_seo_score_last_checked }} {{ seo_score_last_checked }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clearfix"></div>*/
/*   		</div>*/
/*   		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">*/
/*             <h3>{{ text_what_can_be_improved ~ ' (<span class="improved_count">' ~ fixes|length ~ '</span>)' }}</h3>*/
/*             <br />*/
/*             <div class="list-group list-group-fixes">*/
/*                 {% if fixes|length > 0 %}*/
/*                     {% for fix in fixes %} */
/*                     <div class="list-group-item">*/
/*                         <span class="pull-left">*/
/*                             <a onclick="seoFixQuick('{{ fix.event }}', this);" class="btn btn-sm btn-primary">{{ text_fix_now }}</a>*/
/*                         </span>*/
/*                         &nbsp;*/
/*                         {{ fix.name }}*/
/*                     </div>*/
/*                     {% endfor %}*/
/*                  {% else %}   */
/*                     <i class="fa fa-check-square" aria-hidden="true"></i>&nbsp;&nbsp;{{ text_already_improved_great_result }}*/
/*                  {% endif %}  */
/*             </div>*/
/*             */
/*             <div class="padding-top"></div>*/
/*             <h3>{{ text_what_is_already_improved ~ ' (' ~ fixed|length ~ ')' }}</h3>*/
/*             <br />*/
/*             <div class="list-group list-group-fixes">*/
/*                 {% if fixed|length > 0 %}*/
/*                     {% for index, fix in fixed %}  */
/*                         <div class="list-group-item {{ index > 4 ? 'show-hide-list' : '' }}">*/
/*                             <span class="pull-left">*/
/*                                 <a onclick="seoFixQuick('{{ fix.event }}', this);" class="btn btn-sm btn-success disabled">{{ text_success_btn }}</a>*/
/*                             </span>*/
/*                             &nbsp;*/
/*                             {{ fix.name }}*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                     {% if fixed|length > 4 %}*/
/*                         <div class="text-center padding-top"><a onClick="showHideList();" class="btn btn-default btn-sm btn-show-hide-list">{{ text_show_more }}</a></div>*/
/*                     {% endif %} */
/*                 {% endif %}  */
/*             </div>*/
/*         </div>*/
/* 	</div>*/
/* </div>*/
/* */
/* */
/* <script>*/
/* var seo_score = c3.generate({*/
/*     bindto: '#seo_score',*/
/*     data: {*/
/*         columns: [*/
/*             ['SEO Score', {{ seo_score }}],*/
/*             ['Can be Improved', {{ 100-seo_score }}]*/
/*         ],*/
/*         type: 'donut',*/
/*         onclick: function (d, i) { /*console.log("onclick", d, i);*//*  },*/
/*         onmouseover: function (d, i) { /*console.log("onmouseover", d, i);*//*  },*/
/*         onmouseout: function (d, i) { /*console.log("onmouseout", d, i);*//*  }*/
/*     }*/
/* });*/
/* </script>*/
