<?php

/* extension/module/isenselabs_seo/tab_urls_linking.twig */
class __TwigTemplate_2e8413ae8ac44daf0faf2a17fbc5f5ab9ffe2e53adfafe4567b439d6a44fd473 extends Twig_Template
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
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-12\">

            <ul class=\"nav nav-tabs nav-link-tabs\">
                <li class=\"active\"><a href=\"#tab-seo-links\" data-toggle=\"tab\">";
        // line 6
        echo (isset($context["text_seo_links"]) ? $context["text_seo_links"] : null);
        echo "</a></li>
                <li><a href=\"#tab-customredirections\" data-toggle=\"tab\">";
        // line 7
        echo (isset($context["text_custom_url_redirects"]) ? $context["text_custom_url_redirects"] : null);
        echo "</a></li>
                <li><a href=\"#tab-autolinks\" data-toggle=\"tab\">";
        // line 8
        echo (isset($context["text_auto_links"]) ? $context["text_auto_links"] : null);
        echo "</a></li>
                <li><a href=\"#tab-canonicals\" data-toggle=\"tab\">";
        // line 9
        echo (isset($context["text_canonicals"]) ? $context["text_canonicals"] : null);
        echo "</a></li>
            </ul>

            <div class=\"tab-content\">
               <div class=\"tab-pane fade in active\" id=\"tab-seo-links\">
                    <div class=\"tab-seo-links\">
                        <br />
                        <div class=\"loader\"></div>
                    </div>
               </div>   

               ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["urlLinkingTabs"]) ? $context["urlLinkingTabs"] : null));
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
            // line 21
            echo "               <div class=\"tab-pane fade\" id=\"";
            echo $this->getAttribute($context["tab"], "id", array());
            echo "\">
                   <div class=\"";
            // line 22
            echo $this->getAttribute($context["tab"], "id", array());
            echo "\">
                       ";
            // line 23
            echo twig_include($this->env, $context, $this->getAttribute($context["tab"], "file", array()));
            echo "
                   </div>
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
        // line 27
        echo "               
            </div>

        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/tab_urls_linking.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 27,  78 => 23,  74 => 22,  69 => 21,  52 => 20,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/*     <div class="row">*/
/*         <div class="col-xs-12 col-md-12">*/
/* */
/*             <ul class="nav nav-tabs nav-link-tabs">*/
/*                 <li class="active"><a href="#tab-seo-links" data-toggle="tab">{{ text_seo_links }}</a></li>*/
/*                 <li><a href="#tab-customredirections" data-toggle="tab">{{ text_custom_url_redirects }}</a></li>*/
/*                 <li><a href="#tab-autolinks" data-toggle="tab">{{ text_auto_links }}</a></li>*/
/*                 <li><a href="#tab-canonicals" data-toggle="tab">{{ text_canonicals }}</a></li>*/
/*             </ul>*/
/* */
/*             <div class="tab-content">*/
/*                <div class="tab-pane fade in active" id="tab-seo-links">*/
/*                     <div class="tab-seo-links">*/
/*                         <br />*/
/*                         <div class="loader"></div>*/
/*                     </div>*/
/*                </div>   */
/* */
/*                {% for tab in urlLinkingTabs %}*/
/*                <div class="tab-pane fade" id="{{ tab.id }}">*/
/*                    <div class="{{ tab.id }}">*/
/*                        {{ include(tab.file) }}*/
/*                    </div>*/
/*                </div>*/
/*                {% endfor %}*/
/*                */
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
