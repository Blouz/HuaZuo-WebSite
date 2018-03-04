<?php

/* default/template/extension/module/isenselabs_seo/social_seo.twig */
class __TwigTemplate_15fbeba8b383b35f8e4b44e0d45d4223e0c6990b208f995ed22e0f803cd81ebd extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 2
            echo "<meta ";
            echo $this->getAttribute($context["link"], 2, array());
            echo "=\"";
            echo $this->getAttribute($context["link"], 1, array());
            echo "\" content=\"";
            echo trim($this->getAttribute($context["link"], 0, array()));
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/isenselabs_seo/social_seo.twig";
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
/* {% for link in links %}*/
/* <meta {{ link.2 }}="{{ link.1 }}" content="{{ link.0|trim }}" />*/
/* {% endfor %}*/
