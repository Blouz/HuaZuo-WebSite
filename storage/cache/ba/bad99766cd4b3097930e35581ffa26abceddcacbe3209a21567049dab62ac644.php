<?php

/* default/template/extension/module/isenselabs_seo/hreflangs.twig */
class __TwigTemplate_20020071ae68924b7cc2843488de2fc332603440d64812ac87f85283e26668b0 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 2
            echo "<link rel=\"alternate\" href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" hreflang=\"";
            echo $this->getAttribute($context["link"], "lang", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/isenselabs_seo/hreflangs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 2,  19 => 1,);
    }
}
/* {% for link in data %}*/
/* <link rel="alternate" href="{{ link.href }}" hreflang="{{ link.lang }}" />*/
/* {% endfor %}*/
