<?php

/* extension/module/anyport/tab_auto_backup.twig */
class __TwigTemplate_6fafcbd9287450befc8c5a5560def25bba1fa7201ccfdbf80696fc26d25da213 extends Twig_Template
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
        echo "<div id=\"autoBackupPage\">
    <input type=\"hidden\" name=\"AnyPort[AutoBackup][AdminFolder]\" value=\"";
        // line 2
        echo (isset($context["anyport_admin_folder_name"]) ? $context["anyport_admin_folder_name"] : null);
        echo "\">
    <div class=\"col-xs-2\">
        <ul class=\"nav nav-pills nav-stacked\">
            <li class=\"active\"><a href=\"#dropbox-auto-backup\" data-toggle=\"tab\"><i class=\"fa fa-chevron-circle-right\"></i>&nbsp";
        // line 5
        echo (isset($context["text_dropbox_auto_backup"]) ? $context["text_dropbox_auto_backup"] : null);
        echo "</a></li>
            <li><a href=\"#google-drive-auto-backup\" data-toggle=\"tab\"><i class=\"fa fa-chevron-circle-right\"></i>&nbsp";
        // line 6
        echo (isset($context["text_google_drive_auto_backup"]) ? $context["text_google_drive_auto_backup"] : null);
        echo "</a></li>
        </ul>
    </div>
    <!-- <div style=\"padding:0 10px 0 10px;\"> -->
    <div class=\"col-xs-10\">
        <div class=\"tab-content\">
            <div id=\"dropbox-auto-backup\" class=\"tab-pane active\">
                ";
        // line 13
        echo (isset($context["dropbox_auto_backup"]) ? $context["dropbox_auto_backup"] : null);
        echo "
            </div>
            <div id=\"google-drive-auto-backup\" class=\"tab-pane\">
                ";
        // line 16
        echo (isset($context["google_drive_auto_backup"]) ? $context["google_drive_auto_backup"] : null);
        echo "
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\">
    var token = '';
    var vars = window.location.search.split('&');
    for (var i = 0; i < vars.length; i++) {
        var parts = vars[i].split('=');
        if (parts[0] == 'token') token = parts[1];
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "extension/module/anyport/tab_auto_backup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  42 => 13,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <div id="autoBackupPage">*/
/*     <input type="hidden" name="AnyPort[AutoBackup][AdminFolder]" value="{{ anyport_admin_folder_name }}">*/
/*     <div class="col-xs-2">*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*             <li class="active"><a href="#dropbox-auto-backup" data-toggle="tab"><i class="fa fa-chevron-circle-right"></i>&nbsp{{ text_dropbox_auto_backup }}</a></li>*/
/*             <li><a href="#google-drive-auto-backup" data-toggle="tab"><i class="fa fa-chevron-circle-right"></i>&nbsp{{ text_google_drive_auto_backup }}</a></li>*/
/*         </ul>*/
/*     </div>*/
/*     <!-- <div style="padding:0 10px 0 10px;"> -->*/
/*     <div class="col-xs-10">*/
/*         <div class="tab-content">*/
/*             <div id="dropbox-auto-backup" class="tab-pane active">*/
/*                 {{ dropbox_auto_backup }}*/
/*             </div>*/
/*             <div id="google-drive-auto-backup" class="tab-pane">*/
/*                 {{ google_drive_auto_backup }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script type="text/javascript">*/
/*     var token = '';*/
/*     var vars = window.location.search.split('&');*/
/*     for (var i = 0; i < vars.length; i++) {*/
/*         var parts = vars[i].split('=');*/
/*         if (parts[0] == 'token') token = parts[1];*/
/*     }*/
/* </script>*/
/* */
