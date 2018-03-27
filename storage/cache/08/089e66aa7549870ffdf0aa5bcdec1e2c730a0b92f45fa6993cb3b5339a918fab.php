<?php

/* extension/module/anyport/tab_support.twig */
class __TwigTemplate_f33e37a4f404fbad95f03bb208027fa417e30195fb1475dc69478207c2cfebca extends Twig_Template
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
        <div class=\"col-md-4\">
            <div class=\"box-heading\">
                <h3><i class=\"fa fa-user\"></i>&nbsp;";
        // line 5
        echo (isset($context["text_your_license"]) ? $context["text_your_license"] : null);
        echo "</h3>
            </div>
            ";
        // line 7
        if (twig_test_empty($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "LicensedOn", array()))) {
            // line 8
            echo "                <div class=\"licenseAlerts\"></div>
                <div class=\"licenseDiv\"></div>
                <table class=\"table notLicensedTable\">
                    <tr>
                        <td colspan=\"2\">
                            <div class=\"form-group\">
                                <label for=\"moduleLicense\">";
            // line 14
            echo (isset($context["text_please_enter_the_code"]) ? $context["text_please_enter_the_code"] : null);
            echo "</label>
                                <input type=\"text\" class=\"licenseCodeBox form-control\" placeholder=\"&nbsp;License Code e.g. XXXXXX-XXXXXX-XXXXXX-XXXXXX-XXXXXX\" name=\"";
            // line 15
            echo (isset($context["moduleName"]) ? $context["moduleName"] : null);
            echo "[LicenseCode]\" id=\"moduleLicense\" value=\"";
            echo (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "LicenseCode", array())) ? ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "LicenseCode", array())) : (""));
            echo "\" />
                            </div>
                            <button type=\"button\" class=\"btn btn-success btnActivateLicense\"><i class=\"fa fa-check\"></i>&nbsp;";
            // line 17
            echo (isset($context["text_activate_license"]) ? $context["text_activate_license"] : null);
            echo "</button>
                            <div class=\"pull-right\"><button type=\"button\" class=\"btn btn-link small-link\" onclick=\"window.open('http://isenselabs.com/users/purchases/')\">";
            // line 18
            echo (isset($context["text_not_having_a_license"]) ? $context["text_not_having_a_license"] : null);
            echo "&nbsp;<i class=\"fa fa-external-link\"></i></button></div>
                        </td>
                    </tr>
                </table>
                <script type=\"text/javascript\">
                var domainraw       = location.protocol + '//' + location.host;
                var domain          = btoa(domainraw);
                var timenow         = parseInt(Date.now()/1000);
                var MID             = 'UX3C7U878M';
                </script>
                <script type=\"text/javascript\" src=\"//isenselabs.com/external/validate/\"></script>
            ";
        } else {
            // line 30
            echo "                <input name=\"cHRpbWl6YXRpb24ef4fe\" type=\"hidden\" value=\"";
            echo (isset($context["licenseDataBase64"]) ? $context["licenseDataBase64"] : null);
            echo "\" />
                <input name=\"OaXRyb1BhY2sgLSBDb21\" type=\"hidden\" value=\"";
            // line 31
            echo $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "LicensedOn", array());
            echo "\" />
                <table class=\"table licensedTable\">
                    <tr>
                        <td>";
            // line 34
            echo (isset($context["text_license_holder"]) ? $context["text_license_holder"] : null);
            echo "</td>
                        <td>";
            // line 35
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "License", array()), "customerName", array());
            echo "</td>
                    </tr>
                    <tr>
                        <td>";
            // line 38
            echo (isset($context["text_registered_domains"]) ? $context["text_registered_domains"] : null);
            echo "</td>
                        <td>
                            <ul class=\"registeredDomains\">
                                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "License", array()), "licenseDomainsUsed", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 42
                echo "                                    <li><i class=\"fa fa-check\"></i>&nbsp;";
                echo $context["domain"];
                echo "</li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>";
            // line 48
            echo (isset($context["text_expires_on"]) ? $context["text_expires_on"] : null);
            echo "</td>
                        <td>";
            // line 49
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "License", array()), "licenseExpireDate", array());
            echo "</td>
                    </tr>
                    <tr>
                        <td colspan=\"2\" style=\"text-align:center;background-color:#EAF7D9;\">";
            // line 52
            echo (isset($context["text_valid_license"]) ? $context["text_valid_license"] : null);
            echo "( <a href=\"http://isenselabs.com/users/purchases\" target=\"_blank\">";
            echo (isset($context["text_manage"]) ? $context["text_manage"] : null);
            echo "</a> )</td>
                    </tr>
                </table>
            ";
        }
        // line 56
        echo "        </div>

        <div class=\"col-md-8\">
            <div class=\"box-heading\">
                <h3><i class=\"fa fa-users\"></i>&nbsp;";
        // line 60
        echo (isset($context["text_get_support"]) ? $context["text_get_support"] : null);
        echo "</h3>
            </div>
            <div class=\"box-contents\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-4\">
                            <div class=\"thumbnail\">
                                <!-- <img alt=\"Community support\" style=\"width: 300px;\" src=\"view/image/<?php echo \$moduleName; ?>/community.png\"> -->
                                <img alt=\"Community support\" style=\"width: 300px;\" src=\"view/image/anyPort/community.png\">
                                <div class=\"caption\" style=\"text-align:center;padding-top:0px;\">
                                    <h3>";
        // line 70
        echo (isset($context["text_community"]) ? $context["text_community"] : null);
        echo "</h3>
                                    <p>";
        // line 71
        echo (isset($context["text_ask_our_community"]) ? $context["text_ask_our_community"] : null);
        echo " </p>
                                    <p style=\"padding-top: 5px;\"><a href=\"http://isenselabs.com/forum\" target=\"_blank\" class=\"btn btn-lg btn-default\">";
        // line 72
        echo (isset($context["text_browse_forums"]) ? $context["text_browse_forums"] : null);
        echo "</a></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"thumbnail\">
                                <!-- <img data-src=\"holder.js/300x200\" style=\"width: 300px;\" src=\"view/image/<?php echo \$moduleName; ?>/tickets.png\"> -->
                                <img data-src=\"holder.js/300x200\" style=\"width: 300px;\" src=\"view/image/anyPort/tickets.png\">
                                <div class=\"caption\" style=\"text-align:center;padding-top:0px;\">
                                    <h3>";
        // line 81
        echo (isset($context["text_tickets"]) ? $context["text_tickets"] : null);
        echo "</h3>
                                    <p>";
        // line 82
        echo (isset($context["text_open_a_ticket"]) ? $context["text_open_a_ticket"] : null);
        echo "</p>
                                    <p style=\"padding-top: 5px;\"><a href=\"";
        // line 83
        echo (isset($context["supportTicketLink"]) ? $context["supportTicketLink"] : null);
        echo "\" target=\"_blank\" class=\"btn btn-lg btn-default\">";
        echo (isset($context["text_open_ticket_for_real"]) ? $context["text_open_ticket_for_real"] : null);
        echo "</a></p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"thumbnail\">
                                <!-- <img alt=\"Pre-sale support\" style=\"width: 300px;\" src=\"view/image/<?php echo \$moduleName; ?>/pre-sale.png\"> -->
                                <img alt=\"Pre-sale support\" style=\"width: 300px;\" src=\"view/image/anyPort/pre-sale.png\">
                                <div class=\"caption\" style=\"text-align:center;padding-top:0px;\">
                                    <h3>";
        // line 92
        echo (isset($context["text_pre_sale"]) ? $context["text_pre_sale"] : null);
        echo "</h3>
                                    <p>";
        // line 93
        echo (isset($context["text_pre_sale"]) ? $context["text_pre_sale"] : null);
        echo "</p>
                                    <p style=\"padding-top: 5px;\"><a href=\"mailto:sales@isenselabs.com?subject=Pre-sale question\" target=\"_blank\" class=\"btn btn-lg btn-default\">";
        // line 94
        echo (isset($context["text_bump_the_sales"]) ? $context["text_bump_the_sales"] : null);
        echo "</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "extension/module/anyport/tab_support.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 94,  200 => 93,  196 => 92,  182 => 83,  178 => 82,  174 => 81,  162 => 72,  158 => 71,  154 => 70,  141 => 60,  135 => 56,  126 => 52,  120 => 49,  116 => 48,  110 => 44,  101 => 42,  97 => 41,  91 => 38,  85 => 35,  81 => 34,  75 => 31,  70 => 30,  55 => 18,  51 => 17,  44 => 15,  40 => 14,  32 => 8,  30 => 7,  25 => 5,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/*     <div class="row">*/
/*         <div class="col-md-4">*/
/*             <div class="box-heading">*/
/*                 <h3><i class="fa fa-user"></i>&nbsp;{{ text_your_license }}</h3>*/
/*             </div>*/
/*             {% if data.AnyPort.LicensedOn is empty %}*/
/*                 <div class="licenseAlerts"></div>*/
/*                 <div class="licenseDiv"></div>*/
/*                 <table class="table notLicensedTable">*/
/*                     <tr>*/
/*                         <td colspan="2">*/
/*                             <div class="form-group">*/
/*                                 <label for="moduleLicense">{{ text_please_enter_the_code }}</label>*/
/*                                 <input type="text" class="licenseCodeBox form-control" placeholder="&nbsp;License Code e.g. XXXXXX-XXXXXX-XXXXXX-XXXXXX-XXXXXX" name="{{ moduleName }}[LicenseCode]" id="moduleLicense" value="{{ data.AnyPort.LicenseCode ? data.AnyPort.LicenseCode : '' }}" />*/
/*                             </div>*/
/*                             <button type="button" class="btn btn-success btnActivateLicense"><i class="fa fa-check"></i>&nbsp;{{ text_activate_license }}</button>*/
/*                             <div class="pull-right"><button type="button" class="btn btn-link small-link" onclick="window.open('http://isenselabs.com/users/purchases/')">{{ text_not_having_a_license }}&nbsp;<i class="fa fa-external-link"></i></button></div>*/
/*                         </td>*/
/*                     </tr>*/
/*                 </table>*/
/*                 <script type="text/javascript">*/
/*                 var domainraw       = location.protocol + '//' + location.host;*/
/*                 var domain          = btoa(domainraw);*/
/*                 var timenow         = parseInt(Date.now()/1000);*/
/*                 var MID             = 'UX3C7U878M';*/
/*                 </script>*/
/*                 <script type="text/javascript" src="//isenselabs.com/external/validate/"></script>*/
/*             {% else %}*/
/*                 <input name="cHRpbWl6YXRpb24ef4fe" type="hidden" value="{{ licenseDataBase64 }}" />*/
/*                 <input name="OaXRyb1BhY2sgLSBDb21" type="hidden" value="{{ data.AnyPort.LicensedOn }}" />*/
/*                 <table class="table licensedTable">*/
/*                     <tr>*/
/*                         <td>{{ text_license_holder }}</td>*/
/*                         <td>{{ data.AnyPort.License.customerName }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>{{ text_registered_domains }}</td>*/
/*                         <td>*/
/*                             <ul class="registeredDomains">*/
/*                                 {% for domain in data.AnyPort.License.licenseDomainsUsed %}*/
/*                                     <li><i class="fa fa-check"></i>&nbsp;{{ domain }}</li>*/
/*                                 {% endfor %}*/
/*                             </ul>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td>{{ text_expires_on }}</td>*/
/*                         <td>{{ data.AnyPort.License.licenseExpireDate }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td colspan="2" style="text-align:center;background-color:#EAF7D9;">{{ text_valid_license }}( <a href="http://isenselabs.com/users/purchases" target="_blank">{{ text_manage }}</a> )</td>*/
/*                     </tr>*/
/*                 </table>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         <div class="col-md-8">*/
/*             <div class="box-heading">*/
/*                 <h3><i class="fa fa-users"></i>&nbsp;{{ text_get_support }}</h3>*/
/*             </div>*/
/*             <div class="box-contents">*/
/*                 <div class="container-fluid">*/
/*                     <div class="row">*/
/*                         <div class="col-md-4">*/
/*                             <div class="thumbnail">*/
/*                                 <!-- <img alt="Community support" style="width: 300px;" src="view/image/<?php echo $moduleName; ?>/community.png"> -->*/
/*                                 <img alt="Community support" style="width: 300px;" src="view/image/anyPort/community.png">*/
/*                                 <div class="caption" style="text-align:center;padding-top:0px;">*/
/*                                     <h3>{{ text_community }}</h3>*/
/*                                     <p>{{ text_ask_our_community }} </p>*/
/*                                     <p style="padding-top: 5px;"><a href="http://isenselabs.com/forum" target="_blank" class="btn btn-lg btn-default">{{ text_browse_forums }}</a></p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-4">*/
/*                             <div class="thumbnail">*/
/*                                 <!-- <img data-src="holder.js/300x200" style="width: 300px;" src="view/image/<?php echo $moduleName; ?>/tickets.png"> -->*/
/*                                 <img data-src="holder.js/300x200" style="width: 300px;" src="view/image/anyPort/tickets.png">*/
/*                                 <div class="caption" style="text-align:center;padding-top:0px;">*/
/*                                     <h3>{{ text_tickets }}</h3>*/
/*                                     <p>{{ text_open_a_ticket }}</p>*/
/*                                     <p style="padding-top: 5px;"><a href="{{ supportTicketLink }}" target="_blank" class="btn btn-lg btn-default">{{ text_open_ticket_for_real }}</a></p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-4">*/
/*                             <div class="thumbnail">*/
/*                                 <!-- <img alt="Pre-sale support" style="width: 300px;" src="view/image/<?php echo $moduleName; ?>/pre-sale.png"> -->*/
/*                                 <img alt="Pre-sale support" style="width: 300px;" src="view/image/anyPort/pre-sale.png">*/
/*                                 <div class="caption" style="text-align:center;padding-top:0px;">*/
/*                                     <h3>{{ text_pre_sale }}</h3>*/
/*                                     <p>{{ text_pre_sale }}</p>*/
/*                                     <p style="padding-top: 5px;"><a href="mailto:sales@isenselabs.com?subject=Pre-sale question" target="_blank" class="btn btn-lg btn-default">{{ text_bump_the_sales }}</a></p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
