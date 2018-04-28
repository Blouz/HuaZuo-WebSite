<?php

/* default/template/extension/payment/wechat_pay.twig */
class __TwigTemplate_3d5681a62b8ddc48054790daa7da7786398d5bd52380bac3e8e12399a4ebacad extends Twig_Template
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
        echo "<div class=\"buttons\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
        // line 3
        echo (isset($context["button_confirm"]) ? $context["button_confirm"] : null);
        echo "\" id=\"button-confirm\" class=\"btn btn-primary\" />
  </div>
</div>
<script type=\"text/javascript\"><!--
  \$('#button-confirm').bind('click', function() {
    location.href = \"";
        // line 8
        echo (isset($context["redirect"]) ? $context["redirect"] : null);
        echo "\";
  });
//--></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/wechat_pay.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  23 => 3,  19 => 1,);
    }
}
/* <div class="buttons">*/
/*   <div class="pull-right">*/
/*     <input type="button" value="{{ button_confirm }}" id="button-confirm" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   $('#button-confirm').bind('click', function() {*/
/*     location.href = "{{ redirect }}";*/
/*   });*/
/* //--></script>*/
/* */
