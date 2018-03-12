<?php

/* extension/module/anyport/autobackup/dropbox_auto_backup.twig */
class __TwigTemplate_7b0b32b46756e8bc65e2ff4ccdd71d72d2a9447ea11ff871b5e28915ef9fb0bb extends Twig_Template
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
        echo "<div id=\"autoBackupTable\" >
        <table class=\"table\">
            <tr>
                <td class=\"col-xs-3\">
                    <h5 class=\"option_title\">";
        // line 5
        echo (isset($context["text_dropbox_automatic_backup"]) ? $context["text_dropbox_automatic_backup"] : null);
        echo "</h5>
                    <span class=\"help\"><i class=\"fa fa-info-circle\"></i>&nbsp;
                        ";
        // line 7
        echo (isset($context["text_dropbox_automatic_backup_desc"]) ? $context["text_dropbox_automatic_backup_desc"] : null);
        echo "
                    </span>
                </td>
                <td class=\"col-xs-9\">
                    <div class=\"col-xs-4\">
                        <select class=\"form-control\" id=\"useAutomaticBackupSelect\" name=\"AnyPort[AutoBackup][Dropbox][Enable]\">
                        <option value=\"No\" ";
        // line 13
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "AutoBackup", array()), "Dropbox", array()), "Enable", array()) == "No")) ? (" selected=\"selected\"") : (""));
        echo ">No</option>
                        <option value=\"Yes\"";
        // line 14
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "AutoBackup", array()), "Dropbox", array()), "Enable", array()) == "Yes")) ? (" selected=\"selected\"") : (""));
        echo ">Yes</option>
                    </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"col-xs-3\">
                    <h5 class=\"option_title\">
                       ";
        // line 22
        echo (isset($context["text_backup_type"]) ? $context["text_backup_type"] : null);
        echo "
                    </h5>
                    <span class=\"help\"><i class=\"fa fa-info-circle\"></i>&nbsp;
                        ";
        // line 25
        echo (isset($context["text_choose_backup_type"]) ? $context["text_choose_backup_type"] : null);
        echo "
                    </span>
                </td>
                <td class=\"col-xs-9\">
                    <div class=\"col-xs-4\">
                        <select name=\"AnyPort[AutoBackup][Dropbox][Folders]\" class=\"form-control\">
                            <option value=\"FullBackup\" ";
        // line 31
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "AutoBackup", array()), "Dropbox", array()), "Folders", array()) == "FullBackup")) ? (" selected=\"selected\"") : (""));
        echo ">Full Backup</option>
                            <option value=\"FilesBackup\" ";
        // line 32
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "AutoBackup", array()), "Dropbox", array()), "Folders", array()) == "FilesBackup")) ? (" selected=\"selected\"") : (""));
        echo ">Files Backup</option>
                            <option value=\"Database\" ";
        // line 33
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "AutoBackup", array()), "Dropbox", array()), "Folders", array()) == "Database")) ? (" selected=\"selected\"") : (""));
        echo ">Database</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td class=\"col-xs-3\">
                    <h5 class=\"option_title\">
                        ";
        // line 41
        echo (isset($context["text_account_information"]) ? $context["text_account_information"] : null);
        echo "
                    </h5>
                </td>
                <td class=\"col-xs-9\">
                    <div class=\"col-xs-4\">
                        <span class=\"";
        // line 46
        echo (($this->getAttribute($this->getAttribute((isset($context["autoBackup"]) ? $context["autoBackup"] : null), "Dropbox", array()), "Status", array())) ? ("successStatus") : ("warningStatus"));
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["autoBackup"]) ? $context["autoBackup"] : null), "Dropbox", array()), "Message", array());
        echo "</span>
                    </div>
                </td>
            </tr>
            ";
        // line 50
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "AutoBackup", array()), "Dropbox", array()), "Enable", array()) == "Yes")) {
            // line 51
            echo "                <tr>
                    <td class=\"col-xs-3\">
                        <h5 class=\"option_title\">
                            ";
            // line 54
            echo (isset($context["text_set_automatic_backup"]) ? $context["text_set_automatic_backup"] : null);
            echo "
                        </h5>
                        <span class=\"help\"><i class=\"fa fa-info-circle\"></i>&nbsp; ";
            // line 56
            echo (isset($context["text_automatic_backup_desc"]) ? $context["text_automatic_backup_desc"] : null);
            echo "</span>
                    </td>
                    <td class=\"col-xs-9\">
                        <div class=\"col-xs-4\">
                            <code>";
            // line 60
            echo $this->getAttribute($this->getAttribute((isset($context["autoBackup"]) ? $context["autoBackup"] : null), "Dropbox", array()), "Code", array());
            echo "</code>
                        </div>
                    </td>
               </tr>
            ";
        }
        // line 65
        echo "        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "extension/module/anyport/autobackup/dropbox_auto_backup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 65,  124 => 60,  117 => 56,  112 => 54,  107 => 51,  105 => 50,  96 => 46,  88 => 41,  77 => 33,  73 => 32,  69 => 31,  60 => 25,  54 => 22,  43 => 14,  39 => 13,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* <div id="autoBackupTable" >*/
/*         <table class="table">*/
/*             <tr>*/
/*                 <td class="col-xs-3">*/
/*                     <h5 class="option_title">{{ text_dropbox_automatic_backup }}</h5>*/
/*                     <span class="help"><i class="fa fa-info-circle"></i>&nbsp;*/
/*                         {{ text_dropbox_automatic_backup_desc }}*/
/*                     </span>*/
/*                 </td>*/
/*                 <td class="col-xs-9">*/
/*                     <div class="col-xs-4">*/
/*                         <select class="form-control" id="useAutomaticBackupSelect" name="AnyPort[AutoBackup][Dropbox][Enable]">*/
/*                         <option value="No" {{ data.AnyPort.AutoBackup.Dropbox.Enable == 'No' ? ' selected="selected"' : ''}}>No</option>*/
/*                         <option value="Yes"{{ data.AnyPort.AutoBackup.Dropbox.Enable == 'Yes' ? ' selected="selected"' : '' }}>Yes</option>*/
/*                     </select>*/
/*                     </div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td class="col-xs-3">*/
/*                     <h5 class="option_title">*/
/*                        {{ text_backup_type }}*/
/*                     </h5>*/
/*                     <span class="help"><i class="fa fa-info-circle"></i>&nbsp;*/
/*                         {{ text_choose_backup_type }}*/
/*                     </span>*/
/*                 </td>*/
/*                 <td class="col-xs-9">*/
/*                     <div class="col-xs-4">*/
/*                         <select name="AnyPort[AutoBackup][Dropbox][Folders]" class="form-control">*/
/*                             <option value="FullBackup" {{ data.AnyPort.AutoBackup.Dropbox.Folders == 'FullBackup' ? ' selected="selected"' : '' }}>Full Backup</option>*/
/*                             <option value="FilesBackup" {{ data.AnyPort.AutoBackup.Dropbox.Folders == 'FilesBackup' ? ' selected="selected"' : '' }}>Files Backup</option>*/
/*                             <option value="Database" {{ data.AnyPort.AutoBackup.Dropbox.Folders == 'Database' ? ' selected="selected"' : '' }}>Database</option>*/
/*                         </select>*/
/*                     </div>*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td class="col-xs-3">*/
/*                     <h5 class="option_title">*/
/*                         {{ text_account_information }}*/
/*                     </h5>*/
/*                 </td>*/
/*                 <td class="col-xs-9">*/
/*                     <div class="col-xs-4">*/
/*                         <span class="{{ autoBackup.Dropbox.Status ? 'successStatus' : 'warningStatus' }}">{{ autoBackup.Dropbox.Message }}</span>*/
/*                     </div>*/
/*                 </td>*/
/*             </tr>*/
/*             {% if data.AnyPort.AutoBackup.Dropbox.Enable == 'Yes' %}*/
/*                 <tr>*/
/*                     <td class="col-xs-3">*/
/*                         <h5 class="option_title">*/
/*                             {{ text_set_automatic_backup }}*/
/*                         </h5>*/
/*                         <span class="help"><i class="fa fa-info-circle"></i>&nbsp; {{ text_automatic_backup_desc }}</span>*/
/*                     </td>*/
/*                     <td class="col-xs-9">*/
/*                         <div class="col-xs-4">*/
/*                             <code>{{ autoBackup.Dropbox.Code }}</code>*/
/*                         </div>*/
/*                     </td>*/
/*                </tr>*/
/*             {% endif %}*/
/*         </table>*/
/*     </div>*/
/* */