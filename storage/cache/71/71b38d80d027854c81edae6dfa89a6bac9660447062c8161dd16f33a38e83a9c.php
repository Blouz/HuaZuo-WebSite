<?php

/* extension/module/isenselabs_seo/tab_missing_pages.twig */
class __TwigTemplate_8c06eb59dfd61e5c37a1208f89951c9cf7eb49fe41afa5ce0e93b80f3209a532 extends Twig_Template
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
  \t\t<div class=\"col-xs-12 col-md-12\">
            <ul class=\"nav nav-tabs nav-missing-pages-tabs\">
                <li class=\"active\"><a href=\"#tab-missing-pages\" data-toggle=\"tab\">";
        // line 5
        echo (isset($context["text_detected_missing_pages"]) ? $context["text_detected_missing_pages"] : null);
        echo " </a></li>
                <li><a href=\"#tab-redirects\" data-toggle=\"tab\">";
        // line 6
        echo (isset($context["text_404_redirects"]) ? $context["text_404_redirects"] : null);
        echo " </a></li>
            </ul>
            
            <div class=\"tab-content\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["missingPagesTabs"]) ? $context["missingPagesTabs"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 11
            echo "                <div id=\"";
            echo $this->getAttribute($context["tab"], "id", array());
            echo "\" role=\"tabpanel\" class=\"tab-pane fade ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo "in active";
            }
            echo "\">
                  ";
            // line 12
            echo twig_include($this->env, $context, $this->getAttribute($context["tab"], "file", array()));
            echo "
                </div>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </div>
            
  \t\t</div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/tab_missing_pages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 15,  62 => 12,  53 => 11,  36 => 10,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/*   		<div class="col-xs-12 col-md-12">*/
/*             <ul class="nav nav-tabs nav-missing-pages-tabs">*/
/*                 <li class="active"><a href="#tab-missing-pages" data-toggle="tab">{{ text_detected_missing_pages }} </a></li>*/
/*                 <li><a href="#tab-redirects" data-toggle="tab">{{ text_404_redirects }} </a></li>*/
/*             </ul>*/
/*             */
/*             <div class="tab-content">*/
/*                 {% for tab in missingPagesTabs %}*/
/*                 <div id="{{ tab.id }}" role="tabpanel" class="tab-pane fade {% if loop.first %}in active{% endif %}">*/
/*                   {{ include(tab.file) }}*/
/*                 </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*             */
/*   		</div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
