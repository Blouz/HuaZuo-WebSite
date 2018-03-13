<?php

/* extension/module/anyport/tab_settings.twig */
class __TwigTemplate_5d05db3f28f23b7d5abd4ece4340f124afba08101288ae2353f63623dec1c573 extends Twig_Template
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
        echo "<div id=\"settingsTable\">
    <!-- <div style=\"width:250px;float:left;padding: 0 10px 0 10px;\"> -->
    <div class=\"col-xs-2\">
        <ul class=\"nav nav-pills nav-stacked\">
            <li class=\"active\"><a href=\"#dropbox\" data-toggle=\"tab\"><i class=\"fa fa-chevron-circle-right\"></i>&nbspDropbox</a></li>
            <li><a href=\"#google\" data-toggle=\"tab\"><i class=\"fa fa-chevron-circle-right\"></i>&nbspGoogle Drive</a></li>
        </ul>
    </div>
    <!-- <div style=\"padding:0 10px 0 10px;\"> -->
    <div class=\"col-xs-10\">
        <div class=\"tab-content\">
            <div id=\"dropbox\" class=\"tab-pane active\">
                ";
        // line 13
        echo (isset($context["dropbox_settings"]) ? $context["dropbox_settings"] : null);
        echo "
            </div>
            <div id=\"google\" class=\"tab-pane\">
                ";
        // line 16
        echo (isset($context["google_drive_settings"]) ? $context["google_drive_settings"] : null);
        echo "
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/module/anyport/tab_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  33 => 13,  19 => 1,);
    }
}
/* <div id="settingsTable">*/
/*     <!-- <div style="width:250px;float:left;padding: 0 10px 0 10px;"> -->*/
/*     <div class="col-xs-2">*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*             <li class="active"><a href="#dropbox" data-toggle="tab"><i class="fa fa-chevron-circle-right"></i>&nbspDropbox</a></li>*/
/*             <li><a href="#google" data-toggle="tab"><i class="fa fa-chevron-circle-right"></i>&nbspGoogle Drive</a></li>*/
/*         </ul>*/
/*     </div>*/
/*     <!-- <div style="padding:0 10px 0 10px;"> -->*/
/*     <div class="col-xs-10">*/
/*         <div class="tab-content">*/
/*             <div id="dropbox" class="tab-pane active">*/
/*                 {{ dropbox_settings }}*/
/*             </div>*/
/*             <div id="google" class="tab-pane">*/
/*                 {{ google_drive_settings }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
