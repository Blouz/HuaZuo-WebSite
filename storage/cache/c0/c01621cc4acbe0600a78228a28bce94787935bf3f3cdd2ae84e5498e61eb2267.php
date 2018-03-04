<?php

/* extension/module/anyport/settings/googledrive.twig */
class __TwigTemplate_aef52553d6bf90e9a4a300de8a0c23ebd2a230a088125ad4f6fe1f7580dcfe82 extends Twig_Template
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
        echo "<table class=\"table\">
\t<tbody>
\t\t<tr>
\t\t\t<td class=\"col-xs-3\">
\t\t\t\t<h5 class=\"option_title\">";
        // line 5
        echo (isset($context["text_google_drive_enable"]) ? $context["text_google_drive_enable"] : null);
        echo "</h5>
                <span class=\"help\"><i class=\"fa fa-info-circle\"></i>&nbsp;
                    ";
        // line 7
        echo (isset($context["text_google_drive_enable_desc"]) ? $context["text_google_drive_enable_desc"] : null);
        echo " <a href=\"https://www.youtube.com/watch?v=SewWd2JyVns\" target=\"_blank\">here.</a>
                </span>
\t\t\t</td>
\t\t\t<td class=\"col-xs-9\">
                <div class=\"col-xs-4\">
                    <select class=\"form-control\" id=\"AnyPortGoogleDriveEnable\" name=\"AnyPort[Settings][GoogleDrive][Enable]\">
                        <option value=\"1\" ";
        // line 13
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "GoogleDrive", array()), "Enable", array()) == true)) ? (" selected=\"selected\"") : (""));
        echo ">Yes</option>
                        <option value=\"0\" ";
        // line 14
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "GoogleDrive", array()), "Enable", array()) == false)) ? (" selected=\"selected\"") : (""));
        echo ">No</option>
                    </select>
                </div>
                <input type=\"hidden\" name=\"AnyPort[Settings][GoogleAuthSettingsChanged]\" value=\"0\" id=\"AnyPortGoogleDriveSettingsChanged\">
            </td>
\t\t</tr>
\t\t <tr>
            <td class=\"col-xs-3\"><h5 class=\"option_title\">App key</h5></td>
            <td class=\"col-xs-9\">
                <div class=\"col-xs-4\">
                    <input class=\"form-control\" type=\"text\" id=\"AnyPortGoogleDriveAppKey\" name=\"AnyPort[Settings][GoogleDrive][AppKey]\" value=\"";
        // line 24
        echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "GoogleDrive", array()), "AppKey", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "GoogleDrive", array()), "AppKey", array())) : (""));
        echo "\" />
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"col-xs-3\"><h5 class=\"option_title\">App secret</h5></td>
            <td class=\"col-xs-9\">
                <div class=\"col-xs-4\">
                    <input class=\"form-control\" type=\"text\" id=\"AnyPortGoogleDriveAppSecret\" name=\"AnyPort[Settings][GoogleDrive][AppSecret]\" value=\"";
        // line 32
        echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "GoogleDrive", array()), "AppSecret", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "GoogleDrive", array()), "AppSecret", array())) : (""));
        echo "\" />
                </div>
            </td>
        </tr>

         <tr>
            <td class=\"col-xs-3\"><h5 class=\"option_title\">Google Picker API Key</h5></td>
            <td class=\"col-xs-9\">
                <div class=\"col-xs-4\">
                    <input class=\"form-control\" type=\"text\" id=\"AnyPortGoogleDriveAppSecret\" name=\"AnyPort[Settings][GoogleDrive][PickerKey]\" value=\"";
        // line 41
        echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "GoogleDrive", array()), "PickerKey", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "GoogleDrive", array()), "PickerKey", array())) : (""));
        echo "\" />
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"col-xs-3\"><h5 class=\"option_title\">Google Drive Folder</h5>
               <span class=\"help\"><i class=\"fa fa-info-circle\"></i>&nbsp;
                    ";
        // line 48
        echo (isset($context["text_google_drive_folder_dsec"]) ? $context["text_google_drive_folder_dsec"] : null);
        echo "
                </span>
            </td>

            <td class=\"col-xs-9\">
                <div class=\"col-xs-4\">
                    <input class=\"form-control\" type=\"text\" id=\"AnyPortGoogleDriveAppFolder\" name=\"AnyPort[Settings][GoogleDrive][Folder]\" value=\"";
        // line 54
        echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "GoogleDrive", array()), "Folder", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "GoogleDrive", array()), "Folder", array())) : (""));
        echo "\" />
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"col-xs-3\"><h5 class=\"option_title\">Redirect URL</h5></td>
            <td class=\"col-xs-9\">
                <div class=\"col-xs-12\">
                    <a href=\"javascript:void(0)\">";
        // line 62
        echo (isset($context["googleDriveCallback"]) ? $context["googleDriveCallback"] : null);
        echo "</a>
                </div>
            </td>
        </tr>

        <tr>
            <td class=\"col-xs-3\"><h5 class=\"option_title\">GoogleDrive account status</h5></td>
            <td class=\"col-xs-9\">
                <div class=\"col-xs-4\">
                    <span id=\"google-reconfirm-app\" style=\"display:none\" class=\"changed-credentials\">";
        // line 71
        echo (isset($context["text_google_drive_acc_status"]) ? $context["text_google_drive_acc_status"] : null);
        echo "</span>
                    <button id=\"confirmGoogleDrive\" class=\"btn btn-primary\">Confirm GoogleDrive App</button>
                    <div id=\"show-google-drive-activated\">
                        <span class=\"label label-success\" id=\"google-drive-activated\"></span>
                    </div>
                </div>
            </td>
        </tr>
\t</tbody>
</table>
<script>

    var gDriveAuthentication = \"";
        // line 83
        echo (isset($context["google_drive_notice"]) ? $context["google_drive_notice"] : null);
        echo "\"
    var enabled = \$('#AnyPortGoogleDriveEnable').val();
    var apiKey = \$('#AnyPortGoogleDriveAppKey').val();
    var apiSecret = \$('#AnyPortGoogleDriveAppSecret').val();
    var workingFolder = \"";
        // line 87
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "GoogleDrive", array()), "Folder", array());
        echo "\";

    if (enabled == '1') {
        if(gDriveAuthentication == '') {
            \$('#show-google-drive-activated').show();
            \$('#google-drive-activated').html('Google Drive activated');
            \$('#confirmGoogleDrive').hide();
        } else if (apiKey != '' && apiSecret != '' && workingFolder != '') {
            \$('#confirmGoogleDrive').show();
        }
    }

    \$('#AnyPortGoogleDriveAppKey, #AnyPortGoogleDriveAppSecret').change(function(){
        if (\$('#AnyPortGoogleDriveAppKey').val() == '";
        // line 100
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "GoogleDrive", array()), "AppKey", array());
        echo "' && \$('#AnyPortGoogleDriveAppSecret').val() == '";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "GoogleDrive", array()), "AppSecret", array());
        echo "') {
            \$('#AnyPortGoogleDriveSettingsChanged').val('0');
        } else {
            \$('#google-reconfirm-app').css('display','block');
            \$('#AnyPortGoogleDriveSettingsChanged').val('1');
            \$('#google-drive-activated').hide();
            \$('#confirmGoogleDrive').show();
        }

    });

    \$('#confirmGoogleDrive').click(function(e){

        e.preventDefault();
        \$('#AnyPortGoogleDriveSettingsChanged').val('0');
        if (anyportDrivePopup != null) { anyportDrivePopup.close(); anyportDrivePopup = null; }
        anyportDrivePopup = window.open('../";
        // line 116
        echo (isset($context["anyport_admin_folder_name"]) ? $context["anyport_admin_folder_name"] : null);
        echo "/index.php?route=";
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/googleDrive&page=popup&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&appKey='+ \$('#AnyPortGoogleDriveAppKey').val() +'&appSecret='+\$('#AnyPortGoogleDriveAppSecret').val()+'&appFolder='+\$('#AnyPortGoogleDriveAppFolder').val(), '_blank', 'location=no,width=1000,height=620,resizable=no');
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "extension/module/anyport/settings/googledrive.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 116,  159 => 100,  143 => 87,  136 => 83,  121 => 71,  109 => 62,  98 => 54,  89 => 48,  79 => 41,  67 => 32,  56 => 24,  43 => 14,  39 => 13,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* <table class="table">*/
/* 	<tbody>*/
/* 		<tr>*/
/* 			<td class="col-xs-3">*/
/* 				<h5 class="option_title">{{ text_google_drive_enable }}</h5>*/
/*                 <span class="help"><i class="fa fa-info-circle"></i>&nbsp;*/
/*                     {{ text_google_drive_enable_desc }} <a href="https://www.youtube.com/watch?v=SewWd2JyVns" target="_blank">here.</a>*/
/*                 </span>*/
/* 			</td>*/
/* 			<td class="col-xs-9">*/
/*                 <div class="col-xs-4">*/
/*                     <select class="form-control" id="AnyPortGoogleDriveEnable" name="AnyPort[Settings][GoogleDrive][Enable]">*/
/*                         <option value="1" {{ data.AnyPort.Settings.GoogleDrive.Enable == true ? ' selected="selected"' : '' }}>Yes</option>*/
/*                         <option value="0" {{ data.AnyPort.Settings.GoogleDrive.Enable == false ? ' selected="selected"' : '' }}>No</option>*/
/*                     </select>*/
/*                 </div>*/
/*                 <input type="hidden" name="AnyPort[Settings][GoogleAuthSettingsChanged]" value="0" id="AnyPortGoogleDriveSettingsChanged">*/
/*             </td>*/
/* 		</tr>*/
/* 		 <tr>*/
/*             <td class="col-xs-3"><h5 class="option_title">App key</h5></td>*/
/*             <td class="col-xs-9">*/
/*                 <div class="col-xs-4">*/
/*                     <input class="form-control" type="text" id="AnyPortGoogleDriveAppKey" name="AnyPort[Settings][GoogleDrive][AppKey]" value="{{ data.AnyPort.Settings.GoogleDrive.AppKey ? data.AnyPort.Settings.GoogleDrive.AppKey : '' }}" />*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td class="col-xs-3"><h5 class="option_title">App secret</h5></td>*/
/*             <td class="col-xs-9">*/
/*                 <div class="col-xs-4">*/
/*                     <input class="form-control" type="text" id="AnyPortGoogleDriveAppSecret" name="AnyPort[Settings][GoogleDrive][AppSecret]" value="{{ data.AnyPort.Settings.GoogleDrive.AppSecret ? data.AnyPort.Settings.GoogleDrive.AppSecret : '' }}" />*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/* */
/*          <tr>*/
/*             <td class="col-xs-3"><h5 class="option_title">Google Picker API Key</h5></td>*/
/*             <td class="col-xs-9">*/
/*                 <div class="col-xs-4">*/
/*                     <input class="form-control" type="text" id="AnyPortGoogleDriveAppSecret" name="AnyPort[Settings][GoogleDrive][PickerKey]" value="{{ data.AnyPort.Settings.GoogleDrive.PickerKey ? data.AnyPort.Settings.GoogleDrive.PickerKey : '' }}" />*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td class="col-xs-3"><h5 class="option_title">Google Drive Folder</h5>*/
/*                <span class="help"><i class="fa fa-info-circle"></i>&nbsp;*/
/*                     {{ text_google_drive_folder_dsec }}*/
/*                 </span>*/
/*             </td>*/
/* */
/*             <td class="col-xs-9">*/
/*                 <div class="col-xs-4">*/
/*                     <input class="form-control" type="text" id="AnyPortGoogleDriveAppFolder" name="AnyPort[Settings][GoogleDrive][Folder]" value="{{ data.AnyPort.Settings.GoogleDrive.Folder ? data.AnyPort.Settings.GoogleDrive.Folder : '' }}" />*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td class="col-xs-3"><h5 class="option_title">Redirect URL</h5></td>*/
/*             <td class="col-xs-9">*/
/*                 <div class="col-xs-12">*/
/*                     <a href="javascript:void(0)">{{ googleDriveCallback }}</a>*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/* */
/*         <tr>*/
/*             <td class="col-xs-3"><h5 class="option_title">GoogleDrive account status</h5></td>*/
/*             <td class="col-xs-9">*/
/*                 <div class="col-xs-4">*/
/*                     <span id="google-reconfirm-app" style="display:none" class="changed-credentials">{{ text_google_drive_acc_status }}</span>*/
/*                     <button id="confirmGoogleDrive" class="btn btn-primary">Confirm GoogleDrive App</button>*/
/*                     <div id="show-google-drive-activated">*/
/*                         <span class="label label-success" id="google-drive-activated"></span>*/
/*                     </div>*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/* 	</tbody>*/
/* </table>*/
/* <script>*/
/* */
/*     var gDriveAuthentication = "{{ google_drive_notice }}"*/
/*     var enabled = $('#AnyPortGoogleDriveEnable').val();*/
/*     var apiKey = $('#AnyPortGoogleDriveAppKey').val();*/
/*     var apiSecret = $('#AnyPortGoogleDriveAppSecret').val();*/
/*     var workingFolder = "{{ data.AnyPort.Settings.GoogleDrive.Folder }}";*/
/* */
/*     if (enabled == '1') {*/
/*         if(gDriveAuthentication == '') {*/
/*             $('#show-google-drive-activated').show();*/
/*             $('#google-drive-activated').html('Google Drive activated');*/
/*             $('#confirmGoogleDrive').hide();*/
/*         } else if (apiKey != '' && apiSecret != '' && workingFolder != '') {*/
/*             $('#confirmGoogleDrive').show();*/
/*         }*/
/*     }*/
/* */
/*     $('#AnyPortGoogleDriveAppKey, #AnyPortGoogleDriveAppSecret').change(function(){*/
/*         if ($('#AnyPortGoogleDriveAppKey').val() == '{{ data.AnyPort.Settings.GoogleDrive.AppKey }}' && $('#AnyPortGoogleDriveAppSecret').val() == '{{ data.AnyPort.Settings.GoogleDrive.AppSecret }}') {*/
/*             $('#AnyPortGoogleDriveSettingsChanged').val('0');*/
/*         } else {*/
/*             $('#google-reconfirm-app').css('display','block');*/
/*             $('#AnyPortGoogleDriveSettingsChanged').val('1');*/
/*             $('#google-drive-activated').hide();*/
/*             $('#confirmGoogleDrive').show();*/
/*         }*/
/* */
/*     });*/
/* */
/*     $('#confirmGoogleDrive').click(function(e){*/
/* */
/*         e.preventDefault();*/
/*         $('#AnyPortGoogleDriveSettingsChanged').val('0');*/
/*         if (anyportDrivePopup != null) { anyportDrivePopup.close(); anyportDrivePopup = null; }*/
/*         anyportDrivePopup = window.open('../{{ anyport_admin_folder_name }}/index.php?route={{ module_path }}/googleDrive&page=popup&user_token={{user_token}}&appKey='+ $('#AnyPortGoogleDriveAppKey').val() +'&appSecret='+$('#AnyPortGoogleDriveAppSecret').val()+'&appFolder='+$('#AnyPortGoogleDriveAppFolder').val(), '_blank', 'location=no,width=1000,height=620,resizable=no');*/
/*     });*/
/* </script>*/
/* */
