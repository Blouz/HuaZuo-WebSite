<?php

/* extension/module/isenselabs_seo/tab_support.twig */
class __TwigTemplate_aa33e935d030a99c7cf9c289e4f35777014ceb32c71e4e774b872e0ba09322a5 extends Twig_Template
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
\t<div class=\"row\">
  \t\t<div class=\"col-xs-6 col-md-4\">
    \t\t<div class=\"box-heading\">
      \t\t\t<h2><i class=\"fa fa-user\"></i>&nbsp;&nbsp;";
        // line 5
        echo (isset($context["text_your_license"]) ? $context["text_your_license"] : null);
        echo "</h2>
    \t\t</div>
    \t\t<div class=\"box-contents\">
\t\t\t    ";
        // line 8
        if (twig_test_empty($this->getAttribute((isset($context["moduleData"]) ? $context["moduleData"] : null), "LicensedOn", array()))) {
            // line 9
            echo "                <table class=\"table notLicensedTable\">
                \t<tr>
                    \t<td colspan=\"2\">
                            <div class=\"form-group\">
                                <label for=\"moduleLicense\">";
            // line 13
            echo (isset($context["text_please_enter_the_code"]) ? $context["text_please_enter_the_code"] : null);
            echo "</label>
                                <input type=\"text\" class=\"licenseCodeBox form-control input-lg\" placeholder=\"XXXXXX-XXXXXX-XXXXXX-XXXXXX-XXXXXX\" name=\"";
            // line 14
            echo (isset($context["moduleName"]) ? $context["moduleName"] : null);
            echo " [LicenseCode]\" id=\"moduleLicense\" value=\"";
            if ($this->getAttribute((isset($context["moduleData"]) ? $context["moduleData"] : null), "LicenseCode", array())) {
                echo $this->getAttribute((isset($context["moduleData"]) ? $context["moduleData"] : null), "LicenseCode", array());
            }
            echo "\" />
                                <br />
                                <div class=\"licenseAlerts\"></div>
    \t\t\t                <div class=\"licenseDiv\"></div>
                                <button type=\"button\" class=\"btn btn-success btn-lg btnActivateLicense\"><i class=\"fa fa-check\"></i>&nbsp;";
            // line 18
            echo (isset($context["text_activate_license"]) ? $context["text_activate_license"] : null);
            echo "</button>
                                <br /><br />
                                <button type=\"button\" class=\"btn btn-default btn-sm\" onclick=\"window.open('http://isenselabs.com/users/purchases/')\">";
            // line 20
            echo (isset($context["text_not_having_a_license"]) ? $context["text_not_having_a_license"] : null);
            echo " &nbsp;&nbsp;<i class=\"fa fa-external-link\"></i></button>
                        \t</div>
                  \t\t</td>
                \t</tr>
              \t</table>
                <script type=\"text/javascript\" src=\"view/javascript/val.js\"></script>
    \t\t    ";
        }
        // line 26
        echo " 
    \t\t    
\t\t\t    ";
        // line 28
        if ($this->getAttribute((isset($context["moduleData"]) ? $context["moduleData"] : null), "LicensedOn", array())) {
            echo " 
    \t\t\t<input name=\"cHRpbWl6YXRpb24ef4fe\" type=\"hidden\" value=\"";
            // line 29
            echo (isset($context["licenseDataBase64"]) ? $context["licenseDataBase64"] : null);
            echo "\" />
    \t\t\t<input name=\"OaXRyb1BhY2sgLSBDb21\" type=\"hidden\" value=\"";
            // line 30
            echo $this->getAttribute((isset($context["moduleData"]) ? $context["moduleData"] : null), "LicensedOn", array());
            echo "\" />
    \t\t\t<table class=\"table licensedTable\">
                    <tr>
                    \t<td>";
            // line 33
            echo (isset($context["text_license_holder"]) ? $context["text_license_holder"] : null);
            echo "</td>
                    \t<td>";
            // line 34
            echo $this->getAttribute($this->getAttribute((isset($context["moduleData"]) ? $context["moduleData"] : null), "License", array()), "customerName", array());
            echo "</td>
                    </tr>
                \t<tr>
                \t\t<td>";
            // line 37
            echo (isset($context["text_registered_domains"]) ? $context["text_registered_domains"] : null);
            echo "</td>
                \t\t<td>
                    \t\t<ul class=\"registeredDomains\">
                    \t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["moduleData"]) ? $context["moduleData"] : null), "License", array()), "licenseDomainsUsed", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 41
                echo "                        \t\t\t<li><i class=\"fa fa-check\"></i>&nbsp;";
                echo $context["domain"];
                echo "</li>
                    \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo " 
                    \t\t</ul>
                \t\t</td>
                \t</tr>
                \t<tr>
                \t\t<td>";
            // line 47
            echo (isset($context["text_expires_on"]) ? $context["text_expires_on"] : null);
            echo "</td>
                \t\t<td>";
            // line 48
            echo (isset($context["LicenseExpireDate"]) ? $context["LicenseExpireDate"] : null);
            echo "</td>
                \t</tr>
                \t<tr>
                    \t<td colspan=\"2\" style=\"text-align:center;background-color:#EAF7D9;\">";
            // line 51
            echo (isset($context["text_valid_license"]) ? $context["text_valid_license"] : null);
            echo " (<a href=\"http://isenselabs.com/users/purchases\" target=\"_blank\">";
            echo (isset($context["text_manage"]) ? $context["text_manage"] : null);
            echo "</a>)</td>
                \t</tr>
\t\t\t\t</table>
    \t\t    ";
        }
        // line 54
        echo " 
            </div>
  \t\t</div>
  
\t\t<div class=\"col-xs-6 col-md-8\">
    \t\t<div class=\"box-heading\">
      \t\t\t<h2><i class=\"fa fa-users\"></i>&nbsp;&nbsp;";
        // line 60
        echo (isset($context["text_get_support"]) ? $context["text_get_support"] : null);
        echo "</h2>
    \t\t</div>
    \t\t<div class=\"box-contents\">
                <br />
                <div class=\"row\">
                    <div class=\"col-xs-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <img src=\"view/image/";
        // line 67
        echo (isset($context["moduleName"]) ? $context["moduleName"] : null);
        echo "/community.png\">
                            <div class=\"caption\" style=\"text-align:center;padding-top:0px;\">
                                <h3>";
        // line 69
        echo (isset($context["text_community"]) ? $context["text_community"] : null);
        echo "</h3>
                                <p>";
        // line 70
        echo (isset($context["text_ask_our_community"]) ? $context["text_ask_our_community"] : null);
        echo "</p>
                                <p style=\"padding-top: 5px;\"><a href=\"http://isenselabs.com/forum\" target=\"_blank\" class=\"btn btn-lg btn-default\">";
        // line 71
        echo (isset($context["text_browse_forums"]) ? $context["text_browse_forums"] : null);
        echo "</a></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-md-4\">
                        <div class=\"thumbnail\">
                            <img src=\"view/image/";
        // line 77
        echo (isset($context["moduleName"]) ? $context["moduleName"] : null);
        echo "/tickets.png\">
                            <div class=\"caption\" style=\"text-align:center;padding-top:0px;\">
                                <h3>";
        // line 79
        echo (isset($context["text_tickets"]) ? $context["text_tickets"] : null);
        echo "</h3>
                                <p>";
        // line 80
        echo (isset($context["text_open_a_ticket"]) ? $context["text_open_a_ticket"] : null);
        echo "</p>
                                <p style=\"padding-top: 5px;\"><a href=\"";
        // line 81
        echo (isset($context["supportTicketLink"]) ? $context["supportTicketLink"] : null);
        echo "\" target=\"_blank\" class=\"btn btn-lg btn-default\">";
        echo (isset($context["text_open_ticket_for_real"]) ? $context["text_open_ticket_for_real"] : null);
        echo "</a></p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-xs-6 col-md-4 \">
                        <div class=\"thumbnail\">
                            <img alt=\"Pre-sale support\" src=\"view/image/";
        // line 87
        echo (isset($context["moduleName"]) ? $context["moduleName"] : null);
        echo "/pre-sale.png\">
                            <div class=\"caption\" style=\"text-align:center;padding-top:0px;\">
                                <h3>";
        // line 89
        echo (isset($context["text_pre_sale"]) ? $context["text_pre_sale"] : null);
        echo "</h3>
                                <p>";
        // line 90
        echo (isset($context["text_pre_sale_text"]) ? $context["text_pre_sale_text"] : null);
        echo "</p>
                                <p style=\"padding-top: 5px;\"><a href=\"https://isenselabs.com/pages/premium-services#section-contact\" target=\"_blank\" class=\"btn btn-lg btn-default\">";
        // line 91
        echo (isset($context["text_bump_the_sales"]) ? $context["text_bump_the_sales"] : null);
        echo "</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
\t\t</div>
\t\t
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/tab_support.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 91,  215 => 90,  211 => 89,  206 => 87,  195 => 81,  191 => 80,  187 => 79,  182 => 77,  173 => 71,  169 => 70,  165 => 69,  160 => 67,  150 => 60,  142 => 54,  133 => 51,  127 => 48,  123 => 47,  116 => 42,  107 => 41,  103 => 40,  97 => 37,  91 => 34,  87 => 33,  81 => 30,  77 => 29,  73 => 28,  69 => 26,  59 => 20,  54 => 18,  43 => 14,  39 => 13,  33 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/*   		<div class="col-xs-6 col-md-4">*/
/*     		<div class="box-heading">*/
/*       			<h2><i class="fa fa-user"></i>&nbsp;&nbsp;{{ text_your_license }}</h2>*/
/*     		</div>*/
/*     		<div class="box-contents">*/
/* 			    {% if moduleData.LicensedOn is empty  %}*/
/*                 <table class="table notLicensedTable">*/
/*                 	<tr>*/
/*                     	<td colspan="2">*/
/*                             <div class="form-group">*/
/*                                 <label for="moduleLicense">{{ text_please_enter_the_code }}</label>*/
/*                                 <input type="text" class="licenseCodeBox form-control input-lg" placeholder="XXXXXX-XXXXXX-XXXXXX-XXXXXX-XXXXXX" name="{{ moduleName }} [LicenseCode]" id="moduleLicense" value="{% if moduleData.LicenseCode %}{{ moduleData.LicenseCode }}{% endif %}" />*/
/*                                 <br />*/
/*                                 <div class="licenseAlerts"></div>*/
/*     			                <div class="licenseDiv"></div>*/
/*                                 <button type="button" class="btn btn-success btn-lg btnActivateLicense"><i class="fa fa-check"></i>&nbsp;{{ text_activate_license }}</button>*/
/*                                 <br /><br />*/
/*                                 <button type="button" class="btn btn-default btn-sm" onclick="window.open('http://isenselabs.com/users/purchases/')">{{ text_not_having_a_license }} &nbsp;&nbsp;<i class="fa fa-external-link"></i></button>*/
/*                         	</div>*/
/*                   		</td>*/
/*                 	</tr>*/
/*               	</table>*/
/*                 <script type="text/javascript" src="view/javascript/val.js"></script>*/
/*     		    {% endif %} */
/*     		    */
/* 			    {% if moduleData.LicensedOn %} */
/*     			<input name="cHRpbWl6YXRpb24ef4fe" type="hidden" value="{{ licenseDataBase64 }}" />*/
/*     			<input name="OaXRyb1BhY2sgLSBDb21" type="hidden" value="{{ moduleData.LicensedOn }}" />*/
/*     			<table class="table licensedTable">*/
/*                     <tr>*/
/*                     	<td>{{ text_license_holder }}</td>*/
/*                     	<td>{{ moduleData.License.customerName }}</td>*/
/*                     </tr>*/
/*                 	<tr>*/
/*                 		<td>{{ text_registered_domains }}</td>*/
/*                 		<td>*/
/*                     		<ul class="registeredDomains">*/
/*                     			{% for domain in moduleData.License.licenseDomainsUsed %}*/
/*                         			<li><i class="fa fa-check"></i>&nbsp;{{ domain }}</li>*/
/*                     			{% endfor %} */
/*                     		</ul>*/
/*                 		</td>*/
/*                 	</tr>*/
/*                 	<tr>*/
/*                 		<td>{{ text_expires_on }}</td>*/
/*                 		<td>{{ LicenseExpireDate }}</td>*/
/*                 	</tr>*/
/*                 	<tr>*/
/*                     	<td colspan="2" style="text-align:center;background-color:#EAF7D9;">{{ text_valid_license}} (<a href="http://isenselabs.com/users/purchases" target="_blank">{{ text_manage }}</a>)</td>*/
/*                 	</tr>*/
/* 				</table>*/
/*     		    {% endif %} */
/*             </div>*/
/*   		</div>*/
/*   */
/* 		<div class="col-xs-6 col-md-8">*/
/*     		<div class="box-heading">*/
/*       			<h2><i class="fa fa-users"></i>&nbsp;&nbsp;{{ text_get_support }}</h2>*/
/*     		</div>*/
/*     		<div class="box-contents">*/
/*                 <br />*/
/*                 <div class="row">*/
/*                     <div class="col-xs-6 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <img src="view/image/{{ moduleName }}/community.png">*/
/*                             <div class="caption" style="text-align:center;padding-top:0px;">*/
/*                                 <h3>{{ text_community }}</h3>*/
/*                                 <p>{{ text_ask_our_community }}</p>*/
/*                                 <p style="padding-top: 5px;"><a href="http://isenselabs.com/forum" target="_blank" class="btn btn-lg btn-default">{{ text_browse_forums }}</a></p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-xs-6 col-md-4">*/
/*                         <div class="thumbnail">*/
/*                             <img src="view/image/{{ moduleName }}/tickets.png">*/
/*                             <div class="caption" style="text-align:center;padding-top:0px;">*/
/*                                 <h3>{{ text_tickets }}</h3>*/
/*                                 <p>{{ text_open_a_ticket }}</p>*/
/*                                 <p style="padding-top: 5px;"><a href="{{ supportTicketLink }}" target="_blank" class="btn btn-lg btn-default">{{ text_open_ticket_for_real}}</a></p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-xs-6 col-md-4 ">*/
/*                         <div class="thumbnail">*/
/*                             <img alt="Pre-sale support" src="view/image/{{ moduleName}}/pre-sale.png">*/
/*                             <div class="caption" style="text-align:center;padding-top:0px;">*/
/*                                 <h3>{{ text_pre_sale }}</h3>*/
/*                                 <p>{{ text_pre_sale_text }}</p>*/
/*                                 <p style="padding-top: 5px;"><a href="https://isenselabs.com/pages/premium-services#section-contact" target="_blank" class="btn btn-lg btn-default">{{ text_bump_the_sales }}</a></p>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* 		</div>*/
/* 		*/
/* 	</div>*/
/* </div>*/
