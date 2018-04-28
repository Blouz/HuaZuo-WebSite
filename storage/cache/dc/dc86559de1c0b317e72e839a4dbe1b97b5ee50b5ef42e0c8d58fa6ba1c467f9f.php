<?php

/* journal2/template/account/address_form.twig */
class __TwigTemplate_541f1eaa6b7b3d5be7e13099858ecb5fb579b54c43c1b50bc61862dc27034ef9 extends Twig_Template
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
        echo "
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</span></a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo " edit-address\"> ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h2 class=\"secondary-title\">";
        // line 17
        echo (isset($context["text_address"]) ? $context["text_address"] : null);
        echo "</h2>
      <div class=\"content\">
        <form action=\"";
        // line 19
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <fieldset>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 22
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"firstname\" value=\"";
        // line 24
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                ";
        // line 25
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 26
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
                ";
        }
        // line 27
        echo " </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 30
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"lastname\" value=\"";
        // line 32
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
                ";
        // line 33
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 34
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
                ";
        }
        // line 35
        echo " </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-company\">";
        // line 38
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"company\" value=\"";
        // line 40
        echo (isset($context["company"]) ? $context["company"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-company\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-address-1\">";
        // line 44
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"address_1\" value=\"";
        // line 46
        echo (isset($context["address_1"]) ? $context["address_1"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-address-1\" class=\"form-control\"/>
                ";
        // line 47
        if ((isset($context["error_address_1"]) ? $context["error_address_1"] : null)) {
            // line 48
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_address_1"]) ? $context["error_address_1"] : null);
            echo "</div>
                ";
        }
        // line 49
        echo " </div>
            </div>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\" for=\"input-address-2\">";
        // line 52
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"address_2\" value=\"";
        // line 54
        echo (isset($context["address_2"]) ? $context["address_2"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-address-2\" class=\"form-control\"/>
              </div>
            </div>
            <div class=\"form-group required\">
              <div class=\"mmos-city\"></div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-postcode\">";
        // line 61
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"postcode\" value=\"";
        // line 63
        echo (isset($context["postcode"]) ? $context["postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-postcode\" class=\"form-control\"/>
                ";
        // line 64
        if ((isset($context["error_postcode"]) ? $context["error_postcode"] : null)) {
            // line 65
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_postcode"]) ? $context["error_postcode"] : null);
            echo "</div>
                ";
        }
        // line 66
        echo " </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-country\">";
        // line 69
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"country_id\" id=\"input-country\" class=\"form-control\">
                  <option value=\"\">";
        // line 72
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>

                  ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 75
            echo "                    ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 76
                echo "
                      <option value=\"";
                // line 77
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>

                    ";
            } else {
                // line 80
                echo "
                      <option value=\"";
                // line 81
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>

                    ";
            }
            // line 84
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "
                </select>
                ";
        // line 87
        if ((isset($context["error_country"]) ? $context["error_country"] : null)) {
            // line 88
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_country"]) ? $context["error_country"] : null);
            echo "</div>
                ";
        }
        // line 89
        echo " </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-zone\">";
        // line 92
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <select name=\"zone_id\" id=\"input-zone\" class=\"form-control\">
                </select>
                ";
        // line 96
        if ((isset($context["error_zone"]) ? $context["error_zone"] : null)) {
            // line 97
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_zone"]) ? $context["error_zone"] : null);
            echo "</div>
                ";
        }
        // line 98
        echo " </div>
            </div>

\t\t<div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-city\">";
        // line 102
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo " </label>
            <div class=\"col-sm-10\">
               <select name=\"city\" id=\"input-city\" class=\"form-control\">
              </select>
              ";
        // line 106
        if ((isset($context["error_city"]) ? $context["error_city"] : null)) {
            echo " 
              <div class=\"text-danger\">";
            // line 107
            echo (isset($context["error_city"]) ? $context["error_city"] : null);
            echo " </div>
              ";
        }
        // line 108
        echo " 
            </div>
          </div>
           
        
            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 114
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 115
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 116
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"custom_field[";
                // line 118
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
                      <option value=\"\">";
                // line 119
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>


                      ";
                // line 122
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 123
                    echo "                        ";
                    if (($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 124
                        echo "
                          <option value=\"";
                        // line 125
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>



                        ";
                    } else {
                        // line 130
                        echo "


                          <option value=\"";
                        // line 133
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>



                        ";
                    }
                    // line 138
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "

                    </select>
                    ";
                // line 142
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 143
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 144
                echo "</div>
                </div>
              ";
            }
            // line 147
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 148
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\">";
                // line 149
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                // line 151
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 152
                    echo "                        <div class=\"radio\"> ";
                    if (($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 153
                        echo "                            <label>
                              <input type=\"radio\" name=\"custom_field[";
                        // line 154
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\"/>
                              ";
                        // line 155
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                          ";
                    } else {
                        // line 157
                        echo "                            <label>
                              <input type=\"radio\" name=\"custom_field[";
                        // line 158
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"/>
                              ";
                        // line 159
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                          ";
                    }
                    // line 160
                    echo " </div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                echo " </div>
                    ";
                // line 162
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 163
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 164
                echo " </div>
                </div>
              ";
            }
            // line 167
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 168
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\">";
                // line 169
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                // line 171
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 172
                    echo "                        <div class=\"checkbox\"> ";
                    if (($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 173
                        echo "                            <label>
                              <input type=\"checkbox\" name=\"custom_field[";
                        // line 174
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\"/>
                              ";
                        // line 175
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                          ";
                    } else {
                        // line 177
                        echo "                            <label>
                              <input type=\"checkbox\" name=\"custom_field[";
                        // line 178
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"/>
                              ";
                        // line 179
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                          ";
                    }
                    // line 180
                    echo " </div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                echo " </div>
                    ";
                // line 182
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 183
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 184
                echo " </div>
                </div>
              ";
            }
            // line 187
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 188
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 189
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[";
                // line 191
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\"/>
                    ";
                // line 192
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 193
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 194
                echo " </div>
                </div>
              ";
            }
            // line 197
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 198
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 199
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[";
                // line 201
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" rows=\"5\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "</textarea>
                    ";
                // line 202
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 203
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 204
                echo " </div>
                </div>
              ";
            }
            // line 207
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 208
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\">";
                // line 209
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <button type=\"button\" id=\"button-custom-field";
                // line 211
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default button\"><i class=\"fa fa-upload\"></i> ";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                // line 212
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo "  ";
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo " ";
                }
                echo "\"/>
                    ";
                // line 213
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 214
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 215
                echo " </div>
                </div>
              ";
            }
            // line 218
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 219
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 220
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"custom_field[";
                // line 223
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\"/>
                      <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                    ";
                // line 227
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 228
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 229
                echo " </div>
                </div>
              ";
            }
            // line 232
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 233
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 234
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"custom_field[";
                // line 237
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"HH:mm\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\"/>
                      <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                    ";
                // line 241
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 242
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 243
                echo " </div>
                </div>
              ";
            }
            // line 246
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 247
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 248
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"custom_field[";
                // line 251
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["address_custom_field"]) ? $context["address_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\"/>
                      <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                    ";
                // line 255
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 256
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 257
                echo " </div>
                </div>
              ";
            }
            // line 260
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 261
        echo "            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 262
        echo (isset($context["entry_default"]) ? $context["entry_default"] : null);
        echo "</label>
              <div class=\"col-sm-10\"> ";
        // line 263
        if ((isset($context["default"]) ? $context["default"] : null)) {
            // line 264
            echo "                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"default\" value=\"1\" checked=\"checked\"/>
                    ";
            // line 266
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"default\" value=\"0\"/>
                    ";
            // line 269
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                ";
        } else {
            // line 271
            echo "                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"default\" value=\"1\"/>
                    ";
            // line 273
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"default\" value=\"0\" checked=\"checked\"/>
                    ";
            // line 276
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                ";
        }
        // line 277
        echo " </div>
            </div>
          </fieldset>
          <div class=\"buttons clearfix\">
            <div class=\"pull-left\"><a href=\"";
        // line 281
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default button\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a></div>
            <div class=\"pull-right\">
              <input type=\"submit\" value=\"";
        // line 283
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-primary button\"/>
            </div>
          </div>
        </form>
      </div>
      ";
        // line 288
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>
<script type=\"text/javascript\"><!--
  // Sort the custom fields
  \$('.form-group[data-sort]').detach().each(function () {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('.form-group').length - 2) {
      \$('.form-group').eq(parseInt(\$(this).attr('data-sort')) + 2).before(this);
    }

    if (\$(this).attr('data-sort') > \$('.form-group').length - 2) {
      \$('.form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') == \$('.form-group').length - 2) {
      \$('.form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('.form-group').length - 2) {
      \$('.form-group:first').before(this);
    }
  });
  //--></script>
<script type=\"text/javascript\"><!--
  \$('button[id^=\\'button-custom-field\\']').on('click', function () {
    var element = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
      clearInterval(timer);
    }

    timer = setInterval(function () {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function () {
            \$(element).button('loading');
          },
          complete: function () {
            \$(element).button('reset');
          },
          success: function (json) {
            \$(element).parent().find('.text-danger').remove();

            if (json['error']) {
              \$(element).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);

              \$(element).parent().find('input').val(json['code']);
            }
          },
          error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });
  //--></script>
<script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickTime: false
  });

  \$('.datetime').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickDate: true,
    pickTime: true
  });

  \$('.time').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickDate: false
  });
  //--></script>
<script type=\"text/javascript\"><!--
  \$('select[name=\\'country_id\\']').on('change', function () {
    \$.ajax({
      url: 'index.php?route=account/account/country&country_id=' + this.value,
      dataType: 'json',
      beforeSend: function () {
        \$('select[name=\\'country_id\\']').prop('disabled', true);
      },
      complete: function () {
        \$('select[name=\\'country_id\\']').prop('disabled', false);
      },
      success: function (json) {
        if (json['postcode_required'] == '1') {
          \$('input[name=\\'postcode\\']').parent().parent().addClass('required');
        } else {
          \$('input[name=\\'postcode\\']').parent().parent().removeClass('required');
        }

        html = '<option value=\"\">";
        // line 399
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

        if (json['zone'] && json['zone'] != '') {
          for (i = 0; i < json['zone'].length; i++) {
            html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

            if (json['zone'][i]['zone_id'] == '";
        // line 405
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
              html += ' selected=\"selected\"';
            }

            html += '>' + json['zone'][i]['name'] + '</option>';
          }
        } else {
          html += '<option value=\"0\" selected=\"selected\">";
        // line 412
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
        }

        \$('select[name=\\'zone_id\\']').html(html);

\t  
              \$('select[name=\\'zone_id\\']').trigger('change');
        
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('select[name=\\'country_id\\']').trigger('change');
  //--></script>

              <script type=\"text/javascript\"><!-- 
                    \$('.mmos-city').parent().hide();
             \$( document ).ready(function() {   
            \$(document).on('change', 'select[name=\\'zone_id\\']',  function() {
            \$.ajax({
                    url: 'index.php?route=extension/module/city&zone_id=' + this.value,
                    dataType: 'json',
                    beforeSend: function() {
                            \$('select[name=\\'zone_id\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                    },
                    complete: function() {
                            \$('.fa-spin').remove();
                    },
                    success: function(json) {

                    html = '<option value=\"\">";
        // line 445
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo " </option>';

                            if (json['cities'] && json['cities'] != '') {
                                    for (i = 0; i < json['cities'].length; i++) {
                                            html += '<option value=\"' + json['cities'][i]['name'] + '\"';

                                            if (json['cities'][i]['name'] == '";
        // line 451
        echo (((isset($context["city"]) ? $context["city"] : null)) ? ((isset($context["city"]) ? $context["city"] : null)) : (0));
        echo "') {
                                                    html += ' selected=\"selected\"';
                                            }

                                            html += '>' + json['cities'][i]['name'] + '</option>';
                                    }
                            } else {
                                    html += '<option value=\"0\" selected=\"selected\">";
        // line 458
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo " </option>';
                            }

                            \$('select[name=\\'city\\']').html(html);
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"
\" + xhr.statusText + \"
\" + xhr.responseText);
                    }
            });
        });
       
        });
        //--></script>
      
";
        // line 474
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/account/address_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1149 => 474,  1130 => 458,  1120 => 451,  1111 => 445,  1075 => 412,  1065 => 405,  1056 => 399,  942 => 288,  934 => 283,  927 => 281,  921 => 277,  916 => 276,  910 => 273,  906 => 271,  901 => 269,  895 => 266,  891 => 264,  889 => 263,  885 => 262,  882 => 261,  876 => 260,  871 => 257,  865 => 256,  863 => 255,  844 => 251,  836 => 248,  827 => 247,  824 => 246,  819 => 243,  813 => 242,  811 => 241,  792 => 237,  784 => 234,  775 => 233,  772 => 232,  767 => 229,  761 => 228,  759 => 227,  740 => 223,  732 => 220,  723 => 219,  720 => 218,  715 => 215,  709 => 214,  707 => 213,  695 => 212,  687 => 211,  682 => 209,  673 => 208,  670 => 207,  665 => 204,  659 => 203,  657 => 202,  641 => 201,  634 => 199,  625 => 198,  622 => 197,  617 => 194,  611 => 193,  609 => 192,  593 => 191,  586 => 189,  577 => 188,  574 => 187,  569 => 184,  563 => 183,  561 => 182,  558 => 181,  551 => 180,  546 => 179,  538 => 178,  535 => 177,  530 => 175,  522 => 174,  519 => 173,  516 => 172,  512 => 171,  507 => 169,  498 => 168,  495 => 167,  490 => 164,  484 => 163,  482 => 162,  479 => 161,  472 => 160,  467 => 159,  459 => 158,  456 => 157,  451 => 155,  443 => 154,  440 => 153,  437 => 152,  433 => 151,  428 => 149,  419 => 148,  416 => 147,  411 => 144,  405 => 143,  403 => 142,  398 => 139,  392 => 138,  382 => 133,  377 => 130,  367 => 125,  364 => 124,  361 => 123,  357 => 122,  351 => 119,  343 => 118,  336 => 116,  327 => 115,  324 => 114,  320 => 113,  313 => 108,  308 => 107,  304 => 106,  297 => 102,  291 => 98,  285 => 97,  283 => 96,  276 => 92,  271 => 89,  265 => 88,  263 => 87,  259 => 85,  253 => 84,  245 => 81,  242 => 80,  234 => 77,  231 => 76,  228 => 75,  224 => 74,  219 => 72,  213 => 69,  208 => 66,  202 => 65,  200 => 64,  194 => 63,  189 => 61,  177 => 54,  172 => 52,  167 => 49,  161 => 48,  159 => 47,  153 => 46,  148 => 44,  139 => 40,  134 => 38,  129 => 35,  123 => 34,  121 => 33,  115 => 32,  110 => 30,  105 => 27,  99 => 26,  97 => 25,  91 => 24,  86 => 22,  80 => 19,  75 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  50 => 10,  48 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }} edit-address"> {{ content_top }}*/
/*       <h2 class="secondary-title">{{ text_address }}</h2>*/
/*       <div class="content">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*           <fieldset>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control"/>*/
/*                 {% if error_firstname %}*/
/*                   <div class="text-danger">{{ error_firstname }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control"/>*/
/*                 {% if error_lastname %}*/
/*                   <div class="text-danger">{{ error_lastname }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-company">{{ entry_company }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="company" value="{{ company }}" placeholder="{{ entry_company }}" id="input-company" class="form-control"/>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-address-1">{{ entry_address_1 }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="address_1" value="{{ address_1 }}" placeholder="{{ entry_address_1 }}" id="input-address-1" class="form-control"/>*/
/*                 {% if error_address_1 %}*/
/*                   <div class="text-danger">{{ error_address_1 }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label" for="input-address-2">{{ entry_address_2 }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="address_2" value="{{ address_2 }}" placeholder="{{ entry_address_2 }}" id="input-address-2" class="form-control"/>*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <div class="mmos-city"></div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-postcode">{{ entry_postcode }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="postcode" value="{{ postcode }}" placeholder="{{ entry_postcode }}" id="input-postcode" class="form-control"/>*/
/*                 {% if error_postcode %}*/
/*                   <div class="text-danger">{{ error_postcode }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-country">{{ entry_country }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="country_id" id="input-country" class="form-control">*/
/*                   <option value="">{{ text_select }}</option>*/
/* */
/*                   {% for country in countries %}*/
/*                     {% if country.country_id == country_id %}*/
/* */
/*                       <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/* */
/*                     {% else %}*/
/* */
/*                       <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/* */
/*                     {% endif %}*/
/*                   {% endfor %}*/
/* */
/*                 </select>*/
/*                 {% if error_country %}*/
/*                   <div class="text-danger">{{ error_country }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-zone">{{ entry_zone }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <select name="zone_id" id="input-zone" class="form-control">*/
/*                 </select>*/
/*                 {% if error_zone %}*/
/*                   <div class="text-danger">{{ error_zone }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/* */
/* 		<div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-city">{{ entry_city }} </label>*/
/*             <div class="col-sm-10">*/
/*                <select name="city" id="input-city" class="form-control">*/
/*               </select>*/
/*               {% if  error_city %} */
/*               <div class="text-danger">{{ error_city }} </div>*/
/*               {% endif %} */
/*             </div>*/
/*           </div>*/
/*            */
/*         */
/*             {% for custom_field in custom_fields %}*/
/*               {% if custom_field.type == 'select' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                       <option value="">{{ text_select }}</option>*/
/* */
/* */
/*                       {% for custom_field_value in custom_field.custom_field_value %}*/
/*                         {% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address_custom_field[custom_field.custom_field_id] %}*/
/* */
/*                           <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/* */
/* */
/* */
/*                         {% else %}*/
/* */
/* */
/* */
/*                           <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/* */
/* */
/* */
/*                         {% endif %}*/
/*                       {% endfor %}*/
/* */
/* */
/*                     </select>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'radio' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                         <div class="radio"> {% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == address_custom_field[custom_field.custom_field_id] %}*/
/*                             <label>*/
/*                               <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked"/>*/
/*                               {{ custom_field_value.name }}</label>*/
/*                           {% else %}*/
/*                             <label>*/
/*                               <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/*                               {{ custom_field_value.name }}</label>*/
/*                           {% endif %} </div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'checkbox' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                         <div class="checkbox"> {% if address_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in address_custom_field[custom_field.custom_field_id] %}*/
/*                             <label>*/
/*                               <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked"/>*/
/*                               {{ custom_field_value.name }}</label>*/
/*                           {% else %}*/
/*                             <label>*/
/*                               <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/*                               {{ custom_field_value.name }}</label>*/
/*                           {% endif %} </div>*/
/*                       {% endfor %} </div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'text' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'textarea' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'file' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default button"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                     <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}  {{ address_custom_field[custom_field.custom_field_id] }} {% endif %}"/>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'date' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group date">*/
/*                       <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'time' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group time">*/
/*                       <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'time' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group datetime">*/
/*                       <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if address_custom_field[custom_field.custom_field_id] %}{{ address_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label">{{ entry_default }}</label>*/
/*               <div class="col-sm-10"> {% if default %}*/
/*                   <label class="radio-inline">*/
/*                     <input type="radio" name="default" value="1" checked="checked"/>*/
/*                     {{ text_yes }}</label>*/
/*                   <label class="radio-inline">*/
/*                     <input type="radio" name="default" value="0"/>*/
/*                     {{ text_no }}</label>*/
/*                 {% else %}*/
/*                   <label class="radio-inline">*/
/*                     <input type="radio" name="default" value="1"/>*/
/*                     {{ text_yes }}</label>*/
/*                   <label class="radio-inline">*/
/*                     <input type="radio" name="default" value="0" checked="checked"/>*/
/*                     {{ text_no }}</label>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*           </fieldset>*/
/*           <div class="buttons clearfix">*/
/*             <div class="pull-left"><a href="{{ back }}" class="btn btn-default button">{{ button_back }}</a></div>*/
/*             <div class="pull-right">*/
/*               <input type="submit" value="{{ button_continue }}" class="btn btn-primary button"/>*/
/*             </div>*/
/*           </div>*/
/*         </form>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   // Sort the custom fields*/
/*   $('.form-group[data-sort]').detach().each(function () {*/
/*     if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('.form-group').length - 2) {*/
/*       $('.form-group').eq(parseInt($(this).attr('data-sort')) + 2).before(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') > $('.form-group').length - 2) {*/
/*       $('.form-group:last').after(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') == $('.form-group').length - 2) {*/
/*       $('.form-group:last').after(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') < -$('.form-group').length - 2) {*/
/*       $('.form-group:first').before(this);*/
/*     }*/
/*   });*/
/*   //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('button[id^=\'button-custom-field\']').on('click', function () {*/
/*     var element = this;*/
/* */
/*     $('#form-upload').remove();*/
/* */
/*     $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*     $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*     if (typeof timer != 'undefined') {*/
/*       clearInterval(timer);*/
/*     }*/
/* */
/*     timer = setInterval(function () {*/
/*       if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*         clearInterval(timer);*/
/* */
/*         $.ajax({*/
/*           url: 'index.php?route=tool/upload',*/
/*           type: 'post',*/
/*           dataType: 'json',*/
/*           data: new FormData($('#form-upload')[0]),*/
/*           cache: false,*/
/*           contentType: false,*/
/*           processData: false,*/
/*           beforeSend: function () {*/
/*             $(element).button('loading');*/
/*           },*/
/*           complete: function () {*/
/*             $(element).button('reset');*/
/*           },*/
/*           success: function (json) {*/
/*             $(element).parent().find('.text-danger').remove();*/
/* */
/*             if (json['error']) {*/
/*               $(element).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*               alert(json['success']);*/
/* */
/*               $(element).parent().find('input').val(json['code']);*/
/*             }*/
/*           },*/
/*           error: function (xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*           }*/
/*         });*/
/*       }*/
/*     }, 500);*/
/*   });*/
/*   //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('.date').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickTime: false*/
/*   });*/
/* */
/*   $('.datetime').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickDate: true,*/
/*     pickTime: true*/
/*   });*/
/* */
/*   $('.time').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickDate: false*/
/*   });*/
/*   //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('select[name=\'country_id\']').on('change', function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=account/account/country&country_id=' + this.value,*/
/*       dataType: 'json',*/
/*       beforeSend: function () {*/
/*         $('select[name=\'country_id\']').prop('disabled', true);*/
/*       },*/
/*       complete: function () {*/
/*         $('select[name=\'country_id\']').prop('disabled', false);*/
/*       },*/
/*       success: function (json) {*/
/*         if (json['postcode_required'] == '1') {*/
/*           $('input[name=\'postcode\']').parent().parent().addClass('required');*/
/*         } else {*/
/*           $('input[name=\'postcode\']').parent().parent().removeClass('required');*/
/*         }*/
/* */
/*         html = '<option value="">{{ text_select }}</option>';*/
/* */
/*         if (json['zone'] && json['zone'] != '') {*/
/*           for (i = 0; i < json['zone'].length; i++) {*/
/*             html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/*             if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {*/
/*               html += ' selected="selected"';*/
/*             }*/
/* */
/*             html += '>' + json['zone'][i]['name'] + '</option>';*/
/*           }*/
/*         } else {*/
/*           html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/*         }*/
/* */
/*         $('select[name=\'zone_id\']').html(html);*/
/* */
/* 	  */
/*               $('select[name=\'zone_id\']').trigger('change');*/
/*         */
/*       },*/
/*       error: function (xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $('select[name=\'country_id\']').trigger('change');*/
/*   //--></script>*/
/* */
/*               <script type="text/javascript"><!-- */
/*                     $('.mmos-city').parent().hide();*/
/*              $( document ).ready(function() {   */
/*             $(document).on('change', 'select[name=\'zone_id\']',  function() {*/
/*             $.ajax({*/
/*                     url: 'index.php?route=extension/module/city&zone_id=' + this.value,*/
/*                     dataType: 'json',*/
/*                     beforeSend: function() {*/
/*                             $('select[name=\'zone_id\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');*/
/*                     },*/
/*                     complete: function() {*/
/*                             $('.fa-spin').remove();*/
/*                     },*/
/*                     success: function(json) {*/
/* */
/*                     html = '<option value="">{{ text_select }} </option>';*/
/* */
/*                             if (json['cities'] && json['cities'] != '') {*/
/*                                     for (i = 0; i < json['cities'].length; i++) {*/
/*                                             html += '<option value="' + json['cities'][i]['name'] + '"';*/
/* */
/*                                             if (json['cities'][i]['name'] == '{{ city ? city : 0 }}') {*/
/*                                                     html += ' selected="selected"';*/
/*                                             }*/
/* */
/*                                             html += '>' + json['cities'][i]['name'] + '</option>';*/
/*                                     }*/
/*                             } else {*/
/*                                     html += '<option value="0" selected="selected">{{ text_none }} </option>';*/
/*                             }*/
/* */
/*                             $('select[name=\'city\']').html(html);*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "*/
/* " + xhr.statusText + "*/
/* " + xhr.responseText);*/
/*                     }*/
/*             });*/
/*         });*/
/*        */
/*         });*/
/*         //--></script>*/
/*       */
/* {{ footer }}*/
/* */
