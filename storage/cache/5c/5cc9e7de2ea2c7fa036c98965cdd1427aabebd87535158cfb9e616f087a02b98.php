<?php

/* extension/module/city.twig */
class __TwigTemplate_7f630b2f8e6280ad9c75d78f14484a6bb37c24788ab02dbdc91a19e33178cc6e extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
    <div class=\"page-header\">
        <div class=\"container-fluid\">
            <div class=\"pull-right\">
                <button type=\"submit\" id=\"btn-save\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" data-loading-text=\"Loading...\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
                <a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
            <h1><a href=\"http://mmosolution.com\" target=\"_blank\" title=\"Go to MMOSolution.com\" ><img src=\"//mmosolution.com/image/mmosolution.com_34.png\"></a>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
            <ul class=\"breadcrumb\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
                <li><a href=\"";
            // line 11
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "            </ul>
        </div>
    </div>
    <div class=\"container-fluid\">
        ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo " 
        <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 18
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 21
        echo " 
        ";
        // line 22
        if ((isset($context["success"]) ? $context["success"] : null)) {
            echo " 
        <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 23
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 26
        echo " 
        <div id=\"mmosolutionmain\" class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 29
        echo (isset($context["text_form"]) ? $context["text_form"] : null);
        echo "</h3>
            </div>
            <ul style=\"margin-top: 10px;\" class=\"nav nav-tabs\">
                <li class=\"active\"><a href=\"#tab-setting\" data-toggle=\"tab\">";
        // line 32
        echo (isset($context["tab_setting"]) ? $context["tab_setting"] : null);
        echo "</a>   </li>
                <li><a href=\"#supporttabs\" data-toggle=\"tab\">";
        // line 33
        echo (isset($context["tab_support"]) ? $context["tab_support"] : null);
        echo "</a></li>
                <li class=\"pull-right hidden-xs\"><a style=\"background: url('//mmosolution.com/image/opencart.gif') 0px 10px no-repeat; padding-left: 20px; \" title=\"go to Opencart Market\"  href=\"http://www.opencart.com/index.php?route=extension/extension&filter_username=mmosolution\" target=\"_blank\">Get Extensions <span class=\"badge\" style=\"background: gold;\">80++</span></a></li>
                <li class=\"pull-right hidden-xs\"><a style=\"background: url('//mmosolution.com/image/mmosolution_20x20.gif') 0px 8px no-repeat; padding-left: 25px; \" title=\"go to MMOS market\"  href=\"http://mmosolution.com\" target=\"_blank\" class=\"text-success\">Get Extensions <span class=\"badge\" style=\"background: gold;\">80++</span></a></li>
            </ul>
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab-setting\">
                    <div class=\"panel-body\">
                        <form action=\"";
        // line 40
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-zone-city\" class=\"form-horizontal\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 42
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">

                                    <select name=\"country_id\" id=\"input-country\" class=\"form-control\" onchange=\"\$('#input-zone').load('index.php?route=extension/module/city/zone&user_token=";
        // line 45
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + this.value + '&zone_id=0');\">
                                        <option value=\"0\">";
        // line 46
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
                                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            echo " 
                                         ";
            // line 48
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                echo " 
                                        <option value=\"";
                // line 49
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                                         ";
            } else {
                // line 50
                echo "   
                                        <option value=\"";
                // line 51
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
                                        ";
            }
            // line 52
            echo " 
                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 58
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
                                <div class=\"col-sm-10\">
                                    <select name=\"zone_id\" id=\"input-zone\" class=\"form-control\">
                                    </select>
                                    ";
        // line 62
        if ((isset($context["error_zone"]) ? $context["error_zone"] : null)) {
            echo " 
                                    <div class=\"text-danger\">";
            // line 63
            echo (isset($context["error_zone"]) ? $context["error_zone"] : null);
            echo "</div>
                                    ";
        }
        // line 64
        echo " 
                                </div>
                            </div>
                            <table id=\"zone-to-city\" class=\"table table-striped table-bordered table-hover\">
                                <thead>
                                    <tr>
                                        <td class=\"text-left required\">";
        // line 70
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</td>
                                        <td class=\"text-left\">";
        // line 71
        echo (isset($context["entry_code"]) ? $context["entry_code"] : null);
        echo "</td>
                                        <td class=\"text-center\">";
        // line 72
        echo (isset($context["entry_sort_order"]) ? $context["entry_sort_order"] : null);
        echo "</td>
                                        <td class=\"text-center\">";
        // line 73
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["zone_to_cities"]) ? $context["zone_to_cities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["zone_to_city"]) {
            echo " 
\t\t\t\t  
                                    <tr id=\"zone-to-city-row";
            // line 81
            echo (isset($context["row"]) ? $context["row"] : null);
            echo "\">
                                        <td class=\"text-left\">
                                            <input type=\"text\" name=\"zone_to_city[";
            // line 83
            echo (isset($context["row"]) ? $context["row"] : null);
            echo "][name]\" value=\"";
            echo $this->getAttribute($context["zone_to_city"], "name", array());
            echo "\" class=\"form-control\"/>
                                            ";
            // line 84
            if (((isset($context["error_name"]) ? $context["error_name"] : null) && $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), "row", array()))) {
                echo " 
                                            <div class=\"text-danger\">";
                // line 85
                echo $this->getAttribute((isset($context["error_name"]) ? $context["error_name"] : null), "row", array());
                echo "</div>
                                            ";
            }
            // line 86
            echo " 
                                        </td>
                                        <td class=\"text-left\"><input type=\"text\" name=\"zone_to_city[";
            // line 88
            echo (isset($context["row"]) ? $context["row"] : null);
            echo "][code]\" value=\"";
            echo $this->getAttribute($context["zone_to_city"], "code", array());
            echo "\" class=\"form-control\"/></td>
\t\t\t\t    <td class=\"text-left\"><input type=\"text\" name=\"zone_to_city[";
            // line 89
            echo (isset($context["row"]) ? $context["row"] : null);
            echo "][sort_order]\" value=\"";
            echo $this->getAttribute($context["zone_to_city"], "sort_order", array());
            echo "\" class=\"form-control\"/></td>
\t\t\t\t    <td>
\t\t\t\t\t 
\t\t\t\t\t<select name=\"zone_to_city[";
            // line 92
            echo (isset($context["row"]) ? $context["row"] : null);
            echo "][status]\"  class=\"form-control\">
\t\t\t\t\t   
\t\t\t\t\t    ";
            // line 94
            if (($this->getAttribute($context["zone_to_city"], "status", array()) == 1)) {
                echo " 
\t\t\t\t\t    <option value=\"1\" selected=\"selected\">";
                // line 95
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t     <option value=\"0\" >";
                // line 96
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t    ";
            } else {
                // line 97
                echo "   
\t\t\t\t\t    <option value=\"1\" >";
                // line 98
                echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
                echo "</option>
\t\t\t\t\t     <option value=\"0\" selected=\"selected\">";
                // line 99
                echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
                echo "</option>
\t\t\t\t\t    ";
            }
            // line 100
            echo " 
\t\t\t\t\t</select>
\t\t\t\t    </td>
\t\t\t\t   <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#zone-to-city-row";
            // line 103
            echo (isset($context["row"]) ? $context["row"] : null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
\t\t\t\t    </tr>
                                    ";
            // line 105
            $context["row"] = ((isset($context["row"]) ? $context["row"] : null) + 1);
            echo " 
\t\t\t\t     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone_to_city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                                     
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class=\"text-left\"><button type=\"button\" onclick=\"addCity();\" data-toggle=\"tooltip\" title=\"";
        // line 111
        echo (isset($context["button_city_add"]) ? $context["button_city_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></i></button></td>
                                        <td colspan=\"3\"></td>
                                        <td class=\"text-left\"><button type=\"button\" onclick=\"addCity();\" data-toggle=\"tooltip\" title=\"";
        // line 113
        echo (isset($context["button_city_add"]) ? $context["button_city_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></button></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </form>
                    </div>
                </div>
                <div class=\"tab-pane\" id=\"supporttabs\">
                    <div class=\"panel \">
                        <div class=\"panel-body \">
                            <!-- begin MMOSolution.com -->
                            <div class=\"row\">
                                <div class=\"col-md-6 col-xs-12\">
                                    <h2 class=\"text-success text-center\">Thank You For Choosing MMO Solution  <i class=\"fa fa-trophy\"></i></h2>
                                    <div class=\"panel-body text-center\">
                                        <h4><i class=\"fa fa-tags\"></i> About ";
        // line 128
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h4>
                                        <h5><i class=\"fa fa-lock\"></i> Installed Version: V.";
        // line 129
        echo (isset($context["MMOS_version"]) ? $context["MMOS_version"] : null);
        echo " </h5>
                                        <h5><i class=\"fa fa-tree\"></i> Latest version: <span id=\"mmos_latest_version\"><a href=\"http://mmosolution.com/index.php?route=product/search&search=";
        // line 130
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "\" target=\"_blank\">Unknown -- Check</a></span></h5>
                                        <br>
                                        <h5 class=\"hidden-sm\"><a style=\"background: url('//mmosolution.com/image/mmosolution_20x20.gif') 0px 0px no-repeat; padding-left: 25px; \" title=\"go to MMOS market\"  href=\"http://mmosolution.com\" target=\"_blank\" class=\"text-success\">Get More Extensions on our site <span id=\"ontabspromotion\"></span></a></h5>
                                        <h5 class=\"hidden-sm\"><a style=\"  background: url('//mmosolution.com/image/opencart.gif') 0px 0px no-repeat; padding-left: 20px; \" title=\"go to Opencart Market\"  href=\"http://www.opencart.com/index.php?route=extension/extension&filter_username=mmosolution\" target=\"_blank\"> Get More Our Extensions on Opencart Market</a></h5><br>
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-xs-12\">
                                    <h3><i class=\"fa fa-info-circle\"></i> Please inform us if you get any troubles & give feedback!</h3>
                                    <div id=\"contact-infor\" class=\"text-center\">
                                        <h4> <i class=\"fa fa-envelope-o text-primary\"></i> <a href=\"mailto:support@mmosolution.com?Subject=";
        // line 139
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " OC ";
        echo (isset($context["opencart_version"]) ? $context["opencart_version"] : null);
        echo "\" target=\"_top\">support@mmosolution.com</a></h4>
                                        <h4><i class=\"fa fa-globe text-success\"></i> <a href=\"http://MMOSolution.com\" target=\"_blank\">Www.MMOSolution.com</a></h4>
                                        <h4><i class=\"fa fa-ticket text-warning\"></i> <a href=\"http://MMOSolution.com/support/\" target=\"_blank\">Submit a support Ticket</a></h4>
                                        <h4><i class=\"fa fa-hand-o-right\"></i> <a href=\"http://MMOSolution.com/support/\" target=\"_blank\">Do you need custom-work, custom extensions, fix extensions of another developer? Resolve your site troubles.. ?</a></h4>
                                        <br>
                                        <h3><i class=\"fa fa-heart-o text-danger\"></i> Follow us on the social media web sites.</h3>
                                        <a href=\"http://www.facebook.com/MMOSolution\" target=\"_blank\" title=\" Facecook.com\"><i class=\"fa fa-2x fa-facebook-square\"></i></a>
                                        <a class=\"text-danger\" href=\"http://plus.google.com/+Mmosolution\" target=\"_blank\" title=\"Google Plus\"><i class=\"fa  fa-2x fa-google-plus-square\"></i></a>
                                        <a class=\"text-warning\" href=\"http://MMOSolution.com/mmosolution_rss.rss\" target=\"_blank\" title=\"RSS\"><i class=\"fa fa-2x fa-rss-square\"></i></a>
                                        <a href=\"http://twitter.com/MMOSolution\" target=\"_blank\" title=\"Twitter\"><i class=\"fa fa-2x fa-twitter-square\"></i></a>
                                        <a class=\"text-danger\" href=\"http://www.youtube.com/MMOSolution\" target=\"_blank\" title=\"Youtube.com\"><i class=\"fa fa-2x fa-youtube-square\"></i></a>
                                    </div>
                                </div>
                                <div id=\"relate-products\"></div> 
                                <script type=\"text/javascript\">
                                    var productcode = '";
        // line 154
        echo (isset($context["MMOS_code_id"]) ? $context["MMOS_code_id"] : null);
        echo "';
                                    \$('a[href=\"#supporttabs\"]').bind('click', function () {
                                        \$('#ontabspromotion').html('(' + \$('#mmos-offer').html() + ')');
                                    });
                                </script>
                                <!-- DO NOT REMOVE -->
                                <script type=\"text/javascript\" src=\"//mmosolution.com/support.js\"></script>
                            </div>
                            <!-- end MMOSolution.com -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\"><!--
var row = ' ";
        // line 171
        echo (isset($context["row"]) ? $context["row"] : null);
        echo "';
    function addCity() {
        \$('.text-danger').remove();
        if (\$('#input-country').val() == 0 || \$('#input-zone').val() == 0) {
            if (\$('#input-country').val() == 0) {
                \$('#input-country').after('<div class=\"text-danger\">";
        // line 176
        echo (isset($context["error_country_id"]) ? $context["error_country_id"] : null);
        echo "</div>');
            }

            if (\$('#input-zone').val() == 0) {
                \$('#input-zone').after('<div class=\"text-danger\">";
        // line 180
        echo (isset($context["error_zone_id"]) ? $context["error_zone_id"] : null);
        echo "</div>');

            }
        } else {
            html = '<tr id=\"zone-to-city-row' + row + '\">';
            html += '<td class=\"text-left\"><input type=\"text\" name=\"zone_to_city[' + row + '][name]\" class=\"form-control\"/></td>';
            html += '<td class=\"text-left\"><input type=\"text\" name=\"zone_to_city[' + row + '][code]\" class=\"form-control\"/></td>';
            html += '<td class=\"text-left\"><input type=\"text\" name=\"zone_to_city[' + row + '][sort_order]\" value=\"0\" class=\"form-control\"/></td>';
            html += '<td>';
            html += '    <select name=\"zone_to_city[' + row + '][status]\"  class=\"form-control\">';
            html += '        <option value=\"1\">";
        // line 190
        echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
        echo "</option>';
            html += '        <option value=\"0\" selected=\"selected\">";
        // line 191
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>';
            html += '    </select>';
            html += '</td>';
            html += '<td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#zone-to-city-row' + row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 194
        echo (isset($context["button_remove"]) ? $context["button_remove"] : null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
            html += '</tr>';
            \$('#zone-to-city tbody').append(html);
            row++;
        }

    }

    /* remove error massage*/
    \$(document).on('change', '#input-country, #input-zone', function () {
        \$('.text-danger').remove();

    });

    \$(function () {
        \$('#input-zone').load('index.php?route=extension/module/city/zone&user_token=";
        // line 209
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=";
        echo (isset($context["country_id"]) ? $context["country_id"] : null);
        echo "&zone_id=";
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "');
    });
    \$('#input-country').on('change', function () {
        \$('#form-zone-city tbody').html('');
    });
    \$('#input-zone').on('change', function () {
        \$.ajax({
            url: 'index.php?route=extension/module/city/ajaxcity&user_token=";
        // line 216
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
            type: 'post',
            data: 'zone_id=' + \$('select[name=\"zone_id\"]').val() + '&country_id=' + \$('select[name=\"country_id\"]').val(),
            dataType: 'json',
            success: function (json) {
                \$('.alert-success').remove();
                \$('#zone-to-city tbody').html(json['html']);
                row = json['row'];
            }
        });
    });
    \$(\"form#form-zone-city\").on(\"submit\", function (event) {
        event.preventDefault();
        \$.ajax({
            url: 'index.php?route=extension/module/city/savecity&user_token=";
        // line 230
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
            type: 'post',
            data: \$(this).serialize(),
            dataType: 'json',
            beforeSend: function () {
                \$('#btn-save').button('loading');
                \$('.text-danger,.alert').remove();
            },
            complete: function () {
                \$('#btn-save').button('reset');
            },
            success: function (json) {
\t    if(json.permission) {
\t\t\$('#mmosolutionmain').before('<div class=\"alert alert-danger\"><i class=\"fa fa-check-circle\"></i>  ' + json.permission + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t    } else {
\t\tif (json.error) {
                    if (json.error.warning != undefined) {
                        \$.each(json['error']['warning'], function (key, value) {
                            \$('input[name=' + key + '],select[name=' + key + ']').after('<div class=\"text-danger\">' + value + '</div>');
                        });
\t\t\tif (json.error.warning.zone_to_city != undefined) {
                         \$('#mmosolutionmain').before('<div class=\"alert alert-warning\"><i class=\"fa fa-check-circle\"></i>  ' + json.error.warning.zone_to_city + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
                    }
                    if (json.error.name != undefined) {
                        \$.each(json['error']['name'], function (key, value) {
                            \$('input[name=\"zone_to_city\\[' + key + '\\]\\[name\\]\"]').after('<div class=\"text-danger\">' + value + '</div>');
                        });
                    } 

                }
                if (json['success']) {
                    \$('#mmosolutionmain').before('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i>  ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

                }
\t    }
                
            }
        });
      
    });
//--></script>
";
        // line 272
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/city.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  535 => 272,  490 => 230,  473 => 216,  459 => 209,  441 => 194,  435 => 191,  431 => 190,  418 => 180,  411 => 176,  403 => 171,  383 => 154,  363 => 139,  351 => 130,  347 => 129,  343 => 128,  325 => 113,  320 => 111,  314 => 107,  306 => 105,  299 => 103,  294 => 100,  289 => 99,  285 => 98,  282 => 97,  277 => 96,  273 => 95,  269 => 94,  264 => 92,  256 => 89,  250 => 88,  246 => 86,  241 => 85,  237 => 84,  231 => 83,  226 => 81,  219 => 79,  210 => 73,  206 => 72,  202 => 71,  198 => 70,  190 => 64,  185 => 63,  181 => 62,  174 => 58,  168 => 54,  161 => 52,  154 => 51,  151 => 50,  144 => 49,  140 => 48,  134 => 47,  130 => 46,  126 => 45,  120 => 42,  115 => 40,  105 => 33,  101 => 32,  95 => 29,  90 => 26,  83 => 23,  79 => 22,  76 => 21,  69 => 18,  65 => 17,  59 => 13,  49 => 11,  43 => 10,  38 => 8,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*     <div class="page-header">*/
/*         <div class="container-fluid">*/
/*             <div class="pull-right">*/
/*                 <button type="submit" id="btn-save" data-toggle="tooltip" title="{{ button_save }}" data-loading-text="Loading..." class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*                 <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*             <h1><a href="http://mmosolution.com" target="_blank" title="Go to MMOSolution.com" ><img src="//mmosolution.com/image/mmosolution.com_34.png"></a>{{ heading_title }}</h1>*/
/*             <ul class="breadcrumb">*/
/*                 {% for breadcrumb in breadcrumbs %} */
/*                 <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*                   {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="container-fluid">*/
/*         {% if  error_warning %} */
/*         <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %} */
/*         {% if  success %} */
/*         <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}*/
/*             <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %} */
/*         <div id="mmosolutionmain" class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_form }}</h3>*/
/*             </div>*/
/*             <ul style="margin-top: 10px;" class="nav nav-tabs">*/
/*                 <li class="active"><a href="#tab-setting" data-toggle="tab">{{ tab_setting }}</a>   </li>*/
/*                 <li><a href="#supporttabs" data-toggle="tab">{{ tab_support }}</a></li>*/
/*                 <li class="pull-right hidden-xs"><a style="background: url('//mmosolution.com/image/opencart.gif') 0px 10px no-repeat; padding-left: 20px; " title="go to Opencart Market"  href="http://www.opencart.com/index.php?route=extension/extension&filter_username=mmosolution" target="_blank">Get Extensions <span class="badge" style="background: gold;">80++</span></a></li>*/
/*                 <li class="pull-right hidden-xs"><a style="background: url('//mmosolution.com/image/mmosolution_20x20.gif') 0px 8px no-repeat; padding-left: 25px; " title="go to MMOS market"  href="http://mmosolution.com" target="_blank" class="text-success">Get Extensions <span class="badge" style="background: gold;">80++</span></a></li>*/
/*             </ul>*/
/*             <div class="tab-content">*/
/*                 <div class="tab-pane active" id="tab-setting">*/
/*                     <div class="panel-body">*/
/*                         <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-zone-city" class="form-horizontal">*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-country">{{ entry_country }}</label>*/
/*                                 <div class="col-sm-10">*/
/* */
/*                                     <select name="country_id" id="input-country" class="form-control" onchange="$('#input-zone').load('index.php?route=extension/module/city/zone&user_token={{ user_token }}&country_id=' + this.value + '&zone_id=0');">*/
/*                                         <option value="0">{{ text_select }}</option>*/
/*                                         {% for country in countries %} */
/*                                          {% if  country.country_id == country_id %} */
/*                                         <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*                                          {% else %}   */
/*                                         <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*                                         {% endif %} */
/*                                           {% endfor %}*/
/*                                     </select>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label class="col-sm-2 control-label" for="input-zone">{{ entry_zone }}</label>*/
/*                                 <div class="col-sm-10">*/
/*                                     <select name="zone_id" id="input-zone" class="form-control">*/
/*                                     </select>*/
/*                                     {% if  error_zone %} */
/*                                     <div class="text-danger">{{ error_zone }}</div>*/
/*                                     {% endif %} */
/*                                 </div>*/
/*                             </div>*/
/*                             <table id="zone-to-city" class="table table-striped table-bordered table-hover">*/
/*                                 <thead>*/
/*                                     <tr>*/
/*                                         <td class="text-left required">{{ entry_name }}</td>*/
/*                                         <td class="text-left">{{ entry_code }}</td>*/
/*                                         <td class="text-center">{{ entry_sort_order }}</td>*/
/*                                         <td class="text-center">{{ entry_status }}</td>*/
/*                                         <td></td>*/
/*                                     </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                    */
/*                                     {% for zone_to_city in zone_to_cities %} */
/* 				  */
/*                                     <tr id="zone-to-city-row{{ row }}">*/
/*                                         <td class="text-left">*/
/*                                             <input type="text" name="zone_to_city[{{ row }}][name]" value="{{ zone_to_city.name}}" class="form-control"/>*/
/*                                             {% if  error_name  and  error_name.row %} */
/*                                             <div class="text-danger">{{ error_name.row }}</div>*/
/*                                             {% endif %} */
/*                                         </td>*/
/*                                         <td class="text-left"><input type="text" name="zone_to_city[{{ row }}][code]" value="{{ zone_to_city.code}}" class="form-control"/></td>*/
/* 				    <td class="text-left"><input type="text" name="zone_to_city[{{ row }}][sort_order]" value="{{ zone_to_city.sort_order}}" class="form-control"/></td>*/
/* 				    <td>*/
/* 					 */
/* 					<select name="zone_to_city[{{ row }}][status]"  class="form-control">*/
/* 					   */
/* 					    {% if zone_to_city.status == 1 %} */
/* 					    <option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 					     <option value="0" >{{ text_disabled }}</option>*/
/* 					    {% else %}   */
/* 					    <option value="1" >{{ text_enabled }}</option>*/
/* 					     <option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 					    {% endif %} */
/* 					</select>*/
/* 				    </td>*/
/* 				   <td class="text-left"><button type="button" onclick="$('#zone-to-city-row{{ row }}').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>*/
/* 				    </tr>*/
/*                                     {% set row = row + 1 %} */
/* 				     {% endfor %}*/
/*                                      */
/*                                 </tbody>*/
/*                                 <tfoot>*/
/*                                     <tr>*/
/*                                         <td class="text-left"><button type="button" onclick="addCity();" data-toggle="tooltip" title="{{ button_city_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></i></button></td>*/
/*                                         <td colspan="3"></td>*/
/*                                         <td class="text-left"><button type="button" onclick="addCity();" data-toggle="tooltip" title="{{ button_city_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></button></td>*/
/*                                     </tr>*/
/*                                 </tfoot>*/
/*                             </table>*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="tab-pane" id="supporttabs">*/
/*                     <div class="panel ">*/
/*                         <div class="panel-body ">*/
/*                             <!-- begin MMOSolution.com -->*/
/*                             <div class="row">*/
/*                                 <div class="col-md-6 col-xs-12">*/
/*                                     <h2 class="text-success text-center">Thank You For Choosing MMO Solution  <i class="fa fa-trophy"></i></h2>*/
/*                                     <div class="panel-body text-center">*/
/*                                         <h4><i class="fa fa-tags"></i> About {{ heading_title }}</h4>*/
/*                                         <h5><i class="fa fa-lock"></i> Installed Version: V.{{ MMOS_version }} </h5>*/
/*                                         <h5><i class="fa fa-tree"></i> Latest version: <span id="mmos_latest_version"><a href="http://mmosolution.com/index.php?route=product/search&search={{ heading_title }}" target="_blank">Unknown -- Check</a></span></h5>*/
/*                                         <br>*/
/*                                         <h5 class="hidden-sm"><a style="background: url('//mmosolution.com/image/mmosolution_20x20.gif') 0px 0px no-repeat; padding-left: 25px; " title="go to MMOS market"  href="http://mmosolution.com" target="_blank" class="text-success">Get More Extensions on our site <span id="ontabspromotion"></span></a></h5>*/
/*                                         <h5 class="hidden-sm"><a style="  background: url('//mmosolution.com/image/opencart.gif') 0px 0px no-repeat; padding-left: 20px; " title="go to Opencart Market"  href="http://www.opencart.com/index.php?route=extension/extension&filter_username=mmosolution" target="_blank"> Get More Our Extensions on Opencart Market</a></h5><br>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-md-6 col-xs-12">*/
/*                                     <h3><i class="fa fa-info-circle"></i> Please inform us if you get any troubles & give feedback!</h3>*/
/*                                     <div id="contact-infor" class="text-center">*/
/*                                         <h4> <i class="fa fa-envelope-o text-primary"></i> <a href="mailto:support@mmosolution.com?Subject={{ heading_title }}{{  ' OC ' }}{{  opencart_version }}" target="_top">support@mmosolution.com</a></h4>*/
/*                                         <h4><i class="fa fa-globe text-success"></i> <a href="http://MMOSolution.com" target="_blank">Www.MMOSolution.com</a></h4>*/
/*                                         <h4><i class="fa fa-ticket text-warning"></i> <a href="http://MMOSolution.com/support/" target="_blank">Submit a support Ticket</a></h4>*/
/*                                         <h4><i class="fa fa-hand-o-right"></i> <a href="http://MMOSolution.com/support/" target="_blank">Do you need custom-work, custom extensions, fix extensions of another developer? Resolve your site troubles.. ?</a></h4>*/
/*                                         <br>*/
/*                                         <h3><i class="fa fa-heart-o text-danger"></i> Follow us on the social media web sites.</h3>*/
/*                                         <a href="http://www.facebook.com/MMOSolution" target="_blank" title=" Facecook.com"><i class="fa fa-2x fa-facebook-square"></i></a>*/
/*                                         <a class="text-danger" href="http://plus.google.com/+Mmosolution" target="_blank" title="Google Plus"><i class="fa  fa-2x fa-google-plus-square"></i></a>*/
/*                                         <a class="text-warning" href="http://MMOSolution.com/mmosolution_rss.rss" target="_blank" title="RSS"><i class="fa fa-2x fa-rss-square"></i></a>*/
/*                                         <a href="http://twitter.com/MMOSolution" target="_blank" title="Twitter"><i class="fa fa-2x fa-twitter-square"></i></a>*/
/*                                         <a class="text-danger" href="http://www.youtube.com/MMOSolution" target="_blank" title="Youtube.com"><i class="fa fa-2x fa-youtube-square"></i></a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div id="relate-products"></div> */
/*                                 <script type="text/javascript">*/
/*                                     var productcode = '{{ MMOS_code_id }}';*/
/*                                     $('a[href="#supporttabs"]').bind('click', function () {*/
/*                                         $('#ontabspromotion').html('(' + $('#mmos-offer').html() + ')');*/
/*                                     });*/
/*                                 </script>*/
/*                                 <!-- DO NOT REMOVE -->*/
/*                                 <script type="text/javascript" src="//mmosolution.com/support.js"></script>*/
/*                             </div>*/
/*                             <!-- end MMOSolution.com -->*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* var row = ' {{ row }}';*/
/*     function addCity() {*/
/*         $('.text-danger').remove();*/
/*         if ($('#input-country').val() == 0 || $('#input-zone').val() == 0) {*/
/*             if ($('#input-country').val() == 0) {*/
/*                 $('#input-country').after('<div class="text-danger">{{ error_country_id }}</div>');*/
/*             }*/
/* */
/*             if ($('#input-zone').val() == 0) {*/
/*                 $('#input-zone').after('<div class="text-danger">{{ error_zone_id }}</div>');*/
/* */
/*             }*/
/*         } else {*/
/*             html = '<tr id="zone-to-city-row' + row + '">';*/
/*             html += '<td class="text-left"><input type="text" name="zone_to_city[' + row + '][name]" class="form-control"/></td>';*/
/*             html += '<td class="text-left"><input type="text" name="zone_to_city[' + row + '][code]" class="form-control"/></td>';*/
/*             html += '<td class="text-left"><input type="text" name="zone_to_city[' + row + '][sort_order]" value="0" class="form-control"/></td>';*/
/*             html += '<td>';*/
/*             html += '    <select name="zone_to_city[' + row + '][status]"  class="form-control">';*/
/*             html += '        <option value="1">{{ text_enabled }}</option>';*/
/*             html += '        <option value="0" selected="selected">{{ text_disabled }}</option>';*/
/*             html += '    </select>';*/
/*             html += '</td>';*/
/*             html += '<td class="text-left"><button type="button" onclick="$(\'#zone-to-city-row' + row + '\').remove();" data-toggle="tooltip" title="{{ button_remove }}" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';*/
/*             html += '</tr>';*/
/*             $('#zone-to-city tbody').append(html);*/
/*             row++;*/
/*         }*/
/* */
/*     }*/
/* */
/*     /* remove error massage*//* */
/*     $(document).on('change', '#input-country, #input-zone', function () {*/
/*         $('.text-danger').remove();*/
/* */
/*     });*/
/* */
/*     $(function () {*/
/*         $('#input-zone').load('index.php?route=extension/module/city/zone&user_token={{ user_token }}&country_id={{ country_id }}&zone_id={{ zone_id }}');*/
/*     });*/
/*     $('#input-country').on('change', function () {*/
/*         $('#form-zone-city tbody').html('');*/
/*     });*/
/*     $('#input-zone').on('change', function () {*/
/*         $.ajax({*/
/*             url: 'index.php?route=extension/module/city/ajaxcity&user_token={{ user_token }}',*/
/*             type: 'post',*/
/*             data: 'zone_id=' + $('select[name="zone_id"]').val() + '&country_id=' + $('select[name="country_id"]').val(),*/
/*             dataType: 'json',*/
/*             success: function (json) {*/
/*                 $('.alert-success').remove();*/
/*                 $('#zone-to-city tbody').html(json['html']);*/
/*                 row = json['row'];*/
/*             }*/
/*         });*/
/*     });*/
/*     $("form#form-zone-city").on("submit", function (event) {*/
/*         event.preventDefault();*/
/*         $.ajax({*/
/*             url: 'index.php?route=extension/module/city/savecity&user_token={{ user_token }}',*/
/*             type: 'post',*/
/*             data: $(this).serialize(),*/
/*             dataType: 'json',*/
/*             beforeSend: function () {*/
/*                 $('#btn-save').button('loading');*/
/*                 $('.text-danger,.alert').remove();*/
/*             },*/
/*             complete: function () {*/
/*                 $('#btn-save').button('reset');*/
/*             },*/
/*             success: function (json) {*/
/* 	    if(json.permission) {*/
/* 		$('#mmosolutionmain').before('<div class="alert alert-danger"><i class="fa fa-check-circle"></i>  ' + json.permission + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 	    } else {*/
/* 		if (json.error) {*/
/*                     if (json.error.warning != undefined) {*/
/*                         $.each(json['error']['warning'], function (key, value) {*/
/*                             $('input[name=' + key + '],select[name=' + key + ']').after('<div class="text-danger">' + value + '</div>');*/
/*                         });*/
/* 			if (json.error.warning.zone_to_city != undefined) {*/
/*                          $('#mmosolutionmain').before('<div class="alert alert-warning"><i class="fa fa-check-circle"></i>  ' + json.error.warning.zone_to_city + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 			}*/
/*                     }*/
/*                     if (json.error.name != undefined) {*/
/*                         $.each(json['error']['name'], function (key, value) {*/
/*                             $('input[name="zone_to_city\[' + key + '\]\[name\]"]').after('<div class="text-danger">' + value + '</div>');*/
/*                         });*/
/*                     } */
/* */
/*                 }*/
/*                 if (json['success']) {*/
/*                     $('#mmosolutionmain').before('<div class="alert alert-success"><i class="fa fa-check-circle"></i>  ' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*                 }*/
/* 	    }*/
/*                 */
/*             }*/
/*         });*/
/*       */
/*     });*/
/* //--></script>*/
/* {{ footer }}*/
