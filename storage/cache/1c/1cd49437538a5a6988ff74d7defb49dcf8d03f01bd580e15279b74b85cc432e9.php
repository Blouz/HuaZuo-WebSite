<?php

/* extension/module/anyport/settings/dropbox.twig */
class __TwigTemplate_f6053a9e324d6a15e9a7a8f1d3922ba6b2611b0ed9d5b65c2548892bd857cc32 extends Twig_Template
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
    <tbody>
        <tr>
            <td class=\"col-xs-3\">
                <h5 class=\"option_title\">";
        // line 5
        echo (isset($context["text_enable_dropbox"]) ? $context["text_enable_dropbox"] : null);
        echo " :</h5>
                <span class=\"help\"><i class=\"fa fa-info-circle\"></i>&nbsp;
                    ";
        // line 7
        echo (isset($context["text_enable_dropbox_desc"]) ? $context["text_enable_dropbox_desc"] : null);
        echo "
                </span>
            </td>
            <td class=\"col-xs-9\">
                <div class=\"col-xs-4\">
                    <select class=\"form-control\" id=\"AnyPortDropboxEnable\" name=\"AnyPort[Settings][Dropbox][Enable]\">
                        <option value=\"1\"";
        // line 13
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "Dropbox", array()), "Enable", array()) == true)) ? ("selected=\"selected\"") : (""));
        echo ">Yes</option>
                        <option value=\"0\"";
        // line 14
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "Dropbox", array()), "Enable", array()) == false)) ? ("selected=\"selected\"") : (""));
        echo ">No</option>
                    </select>
                     <input type=\"hidden\" name=\"AnyPort[Settings][DropboxAuthSettingsChanged]\" value=\"0\" id=\"AnyPortDropboxSettingsChanged\">
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"col-xs-3\"><h5 class=\"option_title\">App key</h5></td>
            <td class=\"col-xs-9\">
                <div class=\"col-xs-4\">
                    <input class=\"form-control\" type=\"text\" id=\"AnyPortDropboxAppKey\" name=\"AnyPort[Settings][Dropbox][AppKey]\" value=\"";
        // line 24
        echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "Dropbox", array()), "AppKey", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "Dropbox", array()), "AppKey", array())) : (""));
        echo "\" />
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"col-xs-3\"><h5 class=\"option_title\">App secret</h5></td>
            <td class=\"col-xs-9\">
                <div class=\"col-xs-4\">
                    <input class=\"form-control\" type=\"text\" id=\"AnyPortDropboxAppSecret\" name=\"AnyPort[Settings][Dropbox][AppSecret]\" value=\"";
        // line 32
        echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "Dropbox", array()), "AppSecret", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "Dropbox", array()), "AppSecret", array())) : (""));
        echo "\" />
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"col-xs-3\"><h5 class=\"option_title\">App folder</h5></td>
            <td class=\"col-xs-9\">
                <div class=\"col-xs-4\">
                    <input class=\"form-control\" type=\"text\" id=\"AnyPortDropboxWorkingFolder\" name=\"AnyPort[Settings][Dropbox][WorkingFolder]\" value=\"";
        // line 40
        echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "Dropbox", array()), "WorkingFolder", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "Dropbox", array()), "WorkingFolder", array())) : (""));
        echo "\" />
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"col-xs-3\"><h5 class=\"option_title\">Redirect URL</h5></td>
            <td class=\"col-xs-9\">
                <div class=\"col-xs-12\">
                    <a href=\"javascript:void(0)\">";
        // line 48
        echo (isset($context["dropboxCallback"]) ? $context["dropboxCallback"] : null);
        echo "</a>
                </div>
            </td>
        </tr>
        <tr>
            <td class=\"col-xs-3\"><h5 class=\"option_title\">Dropbox account status</h5></td>
            <td class=\"col-xs-9\">
                <div class=\"col-xs-4\">
                    <span id=\"reconfirm-app\" style=\"display:none\" class=\"changed-credentials\"> ";
        // line 56
        echo (isset($context["text_dropbox_acc_status_desc"]) ? $context["text_dropbox_acc_status_desc"] : null);
        echo "</span>
                    <button id=\"confirmDropBoxApp\" class=\"btn btn-primary\" style=\"display:none\">Confirm Dropbox App</button>
                    <div id=\"show-dropbox-activated\">
                        <span class=\"label label-success\" id=\"dropbox-activated\"></span>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<script>
\$(document).ready(function() {
    var dbAuthentication = \"";
        // line 68
        echo (isset($context["dropbox_notice"]) ? $context["dropbox_notice"] : null);
        echo "\"
    var enabled = \$('#AnyPortDropboxEnable').val();
    var apiKey = \$('#AnyPortDropboxAppKey').val();
    var apiSecret = \$('#AnyPortDropboxAppSecret').val();
    var workingFolder = \"";
        // line 72
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "Dropbox", array()), "WorkingFolder", array());
        echo "\";

    if (enabled == '1') {
        if(dbAuthentication == '') {
            \$('#show-dropbox-activated').show();
            \$('#dropbox-activated').html('Dropbox activated');
            \$('#confirmDropBoxApp').hide();
        } else if (apiKey != '' && apiSecret != '' && workingFolder != '') {

            \$('#confirmDropBoxApp').show();
        }
    }

     \$('#AnyPortDropboxAppKey, #AnyPortDropboxAppSecret').change(function(){
        if (\$('#AnyPortDropboxAppKey').val() == '";
        // line 86
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "Dropbox", array()), "AppKey", array());
        echo "' && \$('#AnyPortDropboxAppSecret').val() == '";
        echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "Dropbox", array()), "AppSecret", array());
        echo "') {
            \$('#AnyPortDropboxSettingsChanged').val('0');
        } else {
            \$('#reconfirm-app').css('display','block');
            \$('#AnyPortDropboxSettingsChanged').val('1');
            \$('#dropbox-activated').hide();
            \$('#confirmDropBoxApp').show();
        }

    });

    \$('#confirmDropBoxApp').click(function(e){
        e.preventDefault();
        \$('#AnyPortDropboxSettingsChanged').val('0');
        if (anyportPopup != null) { anyportPopup.close(); anyportPopup = null; }
        anyportPopup = window.open('../";
        // line 101
        echo (isset($context["anyport_admin_folder_name"]) ? $context["anyport_admin_folder_name"] : null);
        echo "/index.php?route=";
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/dropbox&page=popup&user_token=' + user_token +'&appKey='+ \$('#AnyPortDropboxAppKey').val() +'&appSecret='+\$('#AnyPortDropboxAppSecret').val(), '_blank', 'location=no,width=1000,height=620,resizable=no,centerscreen=yes');
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "extension/module/anyport/settings/dropbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 101,  139 => 86,  122 => 72,  115 => 68,  100 => 56,  89 => 48,  78 => 40,  67 => 32,  56 => 24,  43 => 14,  39 => 13,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* <table class="table">*/
/*     <tbody>*/
/*         <tr>*/
/*             <td class="col-xs-3">*/
/*                 <h5 class="option_title">{{ text_enable_dropbox }} :</h5>*/
/*                 <span class="help"><i class="fa fa-info-circle"></i>&nbsp;*/
/*                     {{ text_enable_dropbox_desc }}*/
/*                 </span>*/
/*             </td>*/
/*             <td class="col-xs-9">*/
/*                 <div class="col-xs-4">*/
/*                     <select class="form-control" id="AnyPortDropboxEnable" name="AnyPort[Settings][Dropbox][Enable]">*/
/*                         <option value="1"{{ data.AnyPort.Settings.Dropbox.Enable == true ? 'selected="selected"' : '' }}>Yes</option>*/
/*                         <option value="0"{{ data.AnyPort.Settings.Dropbox.Enable == false ? 'selected="selected"' : '' }}>No</option>*/
/*                     </select>*/
/*                      <input type="hidden" name="AnyPort[Settings][DropboxAuthSettingsChanged]" value="0" id="AnyPortDropboxSettingsChanged">*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td class="col-xs-3"><h5 class="option_title">App key</h5></td>*/
/*             <td class="col-xs-9">*/
/*                 <div class="col-xs-4">*/
/*                     <input class="form-control" type="text" id="AnyPortDropboxAppKey" name="AnyPort[Settings][Dropbox][AppKey]" value="{{ data.AnyPort.Settings.Dropbox.AppKey ? data.AnyPort.Settings.Dropbox.AppKey : ''}}" />*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td class="col-xs-3"><h5 class="option_title">App secret</h5></td>*/
/*             <td class="col-xs-9">*/
/*                 <div class="col-xs-4">*/
/*                     <input class="form-control" type="text" id="AnyPortDropboxAppSecret" name="AnyPort[Settings][Dropbox][AppSecret]" value="{{ data.AnyPort.Settings.Dropbox.AppSecret ? data.AnyPort.Settings.Dropbox.AppSecret : '' }}" />*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td class="col-xs-3"><h5 class="option_title">App folder</h5></td>*/
/*             <td class="col-xs-9">*/
/*                 <div class="col-xs-4">*/
/*                     <input class="form-control" type="text" id="AnyPortDropboxWorkingFolder" name="AnyPort[Settings][Dropbox][WorkingFolder]" value="{{ data.AnyPort.Settings.Dropbox.WorkingFolder ? data.AnyPort.Settings.Dropbox.WorkingFolder : '' }}" />*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td class="col-xs-3"><h5 class="option_title">Redirect URL</h5></td>*/
/*             <td class="col-xs-9">*/
/*                 <div class="col-xs-12">*/
/*                     <a href="javascript:void(0)">{{ dropboxCallback }}</a>*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td class="col-xs-3"><h5 class="option_title">Dropbox account status</h5></td>*/
/*             <td class="col-xs-9">*/
/*                 <div class="col-xs-4">*/
/*                     <span id="reconfirm-app" style="display:none" class="changed-credentials"> {{ text_dropbox_acc_status_desc }}</span>*/
/*                     <button id="confirmDropBoxApp" class="btn btn-primary" style="display:none">Confirm Dropbox App</button>*/
/*                     <div id="show-dropbox-activated">*/
/*                         <span class="label label-success" id="dropbox-activated"></span>*/
/*                     </div>*/
/*                 </div>*/
/*             </td>*/
/*         </tr>*/
/*     </tbody>*/
/* </table>*/
/* <script>*/
/* $(document).ready(function() {*/
/*     var dbAuthentication = "{{ dropbox_notice }}"*/
/*     var enabled = $('#AnyPortDropboxEnable').val();*/
/*     var apiKey = $('#AnyPortDropboxAppKey').val();*/
/*     var apiSecret = $('#AnyPortDropboxAppSecret').val();*/
/*     var workingFolder = "{{ data.AnyPort.Settings.Dropbox.WorkingFolder }}";*/
/* */
/*     if (enabled == '1') {*/
/*         if(dbAuthentication == '') {*/
/*             $('#show-dropbox-activated').show();*/
/*             $('#dropbox-activated').html('Dropbox activated');*/
/*             $('#confirmDropBoxApp').hide();*/
/*         } else if (apiKey != '' && apiSecret != '' && workingFolder != '') {*/
/* */
/*             $('#confirmDropBoxApp').show();*/
/*         }*/
/*     }*/
/* */
/*      $('#AnyPortDropboxAppKey, #AnyPortDropboxAppSecret').change(function(){*/
/*         if ($('#AnyPortDropboxAppKey').val() == '{{ data.AnyPort.Settings.Dropbox.AppKey }}' && $('#AnyPortDropboxAppSecret').val() == '{{ data.AnyPort.Settings.Dropbox.AppSecret }}') {*/
/*             $('#AnyPortDropboxSettingsChanged').val('0');*/
/*         } else {*/
/*             $('#reconfirm-app').css('display','block');*/
/*             $('#AnyPortDropboxSettingsChanged').val('1');*/
/*             $('#dropbox-activated').hide();*/
/*             $('#confirmDropBoxApp').show();*/
/*         }*/
/* */
/*     });*/
/* */
/*     $('#confirmDropBoxApp').click(function(e){*/
/*         e.preventDefault();*/
/*         $('#AnyPortDropboxSettingsChanged').val('0');*/
/*         if (anyportPopup != null) { anyportPopup.close(); anyportPopup = null; }*/
/*         anyportPopup = window.open('../{{ anyport_admin_folder_name }}/index.php?route={{ module_path }}/dropbox&page=popup&user_token=' + user_token +'&appKey='+ $('#AnyPortDropboxAppKey').val() +'&appSecret='+$('#AnyPortDropboxAppSecret').val(), '_blank', 'location=no,width=1000,height=620,resizable=no,centerscreen=yes');*/
/*     });*/
/* });*/
/* </script>*/
/* */
