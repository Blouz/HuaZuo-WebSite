<?php

/* journal2/template/journal2/checkout/address_form.twig */
class __TwigTemplate_e4058a3710cf2d7417597e3ef1becd698ab8b3610898451d6c4f1491acb272e9 extends Twig_Template
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
        echo "<div class=\"";
        if ((isset($context["is_logged_in"]) ? $context["is_logged_in"] : null)) {
            echo " checkout-content ";
        }
        echo " checkout-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-form\">
  ";
        // line 2
        if ((isset($context["is_logged_in"]) ? $context["is_logged_in"] : null)) {
            // line 3
            echo "    <h2 class=\"secondary-title\">";
            echo ((((isset($context["type"]) ? $context["type"] : null) == "payment")) ? ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_bill_address", 1 => "Billing Address"), "method")) : ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "one_page_lang_ship_address", 1 => "Delivery Address"), "method")));
            echo "</h2>
  ";
        }
        // line 5
        echo "  <form class=\"form-horizontal form-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "\">
    ";
        // line 6
        if ((isset($context["addresses"]) ? $context["addresses"] : null)) {
            // line 7
            echo "      <div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"";
            // line 9
            echo (isset($context["type"]) ? $context["type"] : null);
            echo "_address\" value=\"existing\" checked=\"checked\"/>
          ";
            // line 10
            echo (isset($context["text_address_existing"]) ? $context["text_address_existing"] : null);
            echo "
        </label>
      </div>
      <div id=\"";
            // line 13
            echo (isset($context["type"]) ? $context["type"] : null);
            echo "-existing\">
        <select name=\"";
            // line 14
            echo (isset($context["type"]) ? $context["type"] : null);
            echo "_address_id\" class=\"form-control\">
          ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 16
                echo "            ";
                if (($this->getAttribute($context["address"], "address_id", array(), "array") == (isset($context["address_id"]) ? $context["address_id"] : null))) {
                    // line 17
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["address"], "address_id", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["address"], "firstname", array());
                    echo " ";
                    echo $this->getAttribute($context["address"], "lastname", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "address_1", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "city", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "zone", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "country", array());
                    echo "</option>
            ";
                } else {
                    // line 19
                    echo "              <option value=\"";
                    echo $this->getAttribute($context["address"], "address_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["address"], "firstname", array());
                    echo " ";
                    echo $this->getAttribute($context["address"], "lastname", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "address_1", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "city", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "zone", array());
                    echo ", ";
                    echo $this->getAttribute($context["address"], "country", array());
                    echo "</option>
            ";
                }
                // line 21
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "        </select>
      </div>
      <div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"";
            // line 26
            echo (isset($context["type"]) ? $context["type"] : null);
            echo "_address\" value=\"new\"/>
          ";
            // line 27
            echo (isset($context["text_address_new"]) ? $context["text_address_new"] : null);
            echo "</label>
      </div>
    ";
        }
        // line 30
        echo "    <div id=\"";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-new\" style=\"display: ";
        echo (((isset($context["addresses"]) ? $context["addresses"] : null)) ? ("none") : ("block"));
        echo "\">
      ";
        // line 31
        if ((isset($context["name"]) ? $context["name"] : null)) {
            // line 32
            echo "        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-";
            // line 33
            echo (isset($context["type"]) ? $context["type"] : null);
            echo "-firstname\">";
            echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
            echo "</label>

          <input type=\"text\" name=\"";
            // line 35
            echo (isset($context["type"]) ? $context["type"] : null);
            echo "_firstname\" value=\"";
            echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProperty", array(0 => (isset($context["order_data"]) ? $context["order_data"] : null), 1 => ((isset($context["type"]) ? $context["type"] : null) . "_firstname"), 2 => "")));
            echo "\" placeholder=\"";
            echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
            echo "\"
                 id=\"input-";
            // line 36
            echo (isset($context["type"]) ? $context["type"] : null);
            echo "-firstname\" class=\"form-control\"/>
        </div>
        <div class=\"form-group required\">
          <label class=\"col-sm-2 control-label\" for=\"input-";
            // line 39
            echo (isset($context["type"]) ? $context["type"] : null);
            echo "-lastname\">";
            echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
            echo "</label>

          <input type=\"text\" name=\"";
            // line 41
            echo (isset($context["type"]) ? $context["type"] : null);
            echo "_lastname\" value=\"";
            echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProperty", array(0 => (isset($context["order_data"]) ? $context["order_data"] : null), 1 => ((isset($context["type"]) ? $context["type"] : null) . "_lastname"), 2 => "")));
            echo "\" placeholder=\"";
            echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
            echo "\"
                 id=\"input-";
            // line 42
            echo (isset($context["type"]) ? $context["type"] : null);
            echo "-lastname\" class=\"form-control\"/>
        </div>
      ";
        }
        // line 45
        echo "      <div class=\"form-group company-input\">
        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 46
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-company\">";
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>

        <input type=\"text\" name=\"";
        // line 48
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_company\" value=\"";
        echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProperty", array(0 => (isset($context["order_data"]) ? $context["order_data"] : null), 1 => ((isset($context["type"]) ? $context["type"] : null) . "_company"), 2 => "")));
        echo "\" placeholder=\"";
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\"
               id=\"input-";
        // line 49
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-company\" class=\"form-control\"/>
      </div>

      <div class=\"form-group required\">
        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 53
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-address-1\">";
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>

        <input type=\"text\" name=\"";
        // line 55
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address_1\" value=\"";
        echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProperty", array(0 => (isset($context["order_data"]) ? $context["order_data"] : null), 1 => ((isset($context["type"]) ? $context["type"] : null) . "_address_1"), 2 => "")));
        echo "\" placeholder=\"";
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\"
               id=\"input-";
        // line 56
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-address-1\" class=\"form-control\"/>
      </div>
      <div class=\"form-group address-2-input\">
        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 59
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-address-2\">";
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>

        <input type=\"text\" name=\"";
        // line 61
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address_2\" value=\"";
        echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProperty", array(0 => (isset($context["order_data"]) ? $context["order_data"] : null), 1 => ((isset($context["type"]) ? $context["type"] : null) . "_address_2"), 2 => "")));
        echo "\" placeholder=\"";
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\"
               id=\"input-";
        // line 62
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-address-2\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 65
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-city\">";
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>

        <input type=\"text\" name=\"";
        // line 67
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_city\" value=\"";
        echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProperty", array(0 => (isset($context["order_data"]) ? $context["order_data"] : null), 1 => ((isset($context["type"]) ? $context["type"] : null) . "_city"), 2 => "")));
        echo "\" placeholder=\"";
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-city\"
               class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 71
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-postcode\">";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>

        <input type=\"text\" name=\"";
        // line 73
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_postcode\" value=\"";
        echo (isset($context["postcode"]) ? $context["postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\"
               id=\"input-";
        // line 74
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-postcode\" class=\"form-control\"/>
      </div>
      <div class=\"form-group required\">
        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 77
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-country\">";
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
        <div class=\"col-sm-10\">

          <select name=\"";
        // line 80
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_country_id\" id=\"input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-country\" class=\"form-control\">
            <option value=\"\">";
        // line 81
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
            ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 83
            echo "              ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 84
                echo "                <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
              ";
            } else {
                // line 86
                echo "                <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
              ";
            }
            // line 88
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "          </select>
        </div>
      </div>
      <div class=\"form-group required\">
        <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 93
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-zone\">";
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
        <div class=\"col-sm-10\">

          <select name=\"";
        // line 96
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_zone_id\" id=\"input-";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-zone\" class=\"form-control\">
          </select>
        </div>
      </div>

\t\t<div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-";
        // line 102
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " -city\">";
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo " </label>
\t\t    <select name=\"";
        // line 103
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " _city\" id=\"input-city\" class=\"form-control\">
              </select>
            </div>\t
        
      ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 108
            echo "      ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                // line 109
                echo "        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 110
                    echo "          <div class=\"form-group";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 111
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"";
                    // line 113
                    echo (isset($context["type"]) ? $context["type"] : null);
                    echo "_custom_field[";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
                <option value=\"\">";
                    // line 114
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                ";
                    // line 115
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 116
                        echo "                  <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "              </select>
            </div>
          </div>
        ";
                }
                // line 122
                echo "        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 123
                    echo "          <div class=\"form-group";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\">";
                    // line 124
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <div id=\"input-payment-custom-field";
                    // line 126
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
                ";
                    // line 127
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 128
                        echo "                  <div class=\"radio\">
                    <label>
                      <input type=\"radio\" name=\"";
                        // line 130
                        echo (isset($context["type"]) ? $context["type"] : null);
                        echo "_custom_field[";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"/>
                      ";
                        // line 131
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 134
                    echo "              </div>
            </div>
          </div>
        ";
                }
                // line 138
                echo "        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 139
                    echo "          <div class=\"form-group";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\">";
                    // line 140
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <div id=\"input-payment-custom-field";
                    // line 142
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">
                ";
                    // line 143
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 144
                        echo "                  <div class=\"checkbox\">
                    <label>
                      <input type=\"checkbox\" name=\"";
                        // line 146
                        echo (isset($context["type"]) ? $context["type"] : null);
                        echo "_custom_field[";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"/>
                      ";
                        // line 147
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                  </div>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 150
                    echo "              </div>
            </div>
          </div>
        ";
                }
                // line 154
                echo "        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 155
                    echo "          <div class=\"form-group";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 156
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"";
                    // line 158
                    echo (isset($context["type"]) ? $context["type"] : null);
                    echo "_custom_field[";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
            </div>
          </div>
        ";
                }
                // line 162
                echo "        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 163
                    echo "          <div class=\"form-group";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 164
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"";
                    // line 166
                    echo (isset($context["type"]) ? $context["type"] : null);
                    echo "_custom_field[";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "</textarea>
            </div>
          </div>
        ";
                }
                // line 170
                echo "        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 171
                    echo "          <div class=\"form-group";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\">";
                    // line 172
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <button type=\"button\" id=\"button-payment-custom-field";
                    // line 174
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default button\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
              <input type=\"hidden\" name=\"";
                    // line 175
                    echo (isset($context["type"]) ? $context["type"] : null);
                    echo "_custom_field[";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"/>
            </div>
          </div>
        ";
                }
                // line 179
                echo "        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 180
                    echo "          <div class=\"form-group";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 181
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group date\">
                <input type=\"text\" name=\"";
                    // line 184
                    echo (isset($context["type"]) ? $context["type"] : null);
                    echo "_custom_field[";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default button\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
            </div>
          </div>
        ";
                }
                // line 191
                echo "        ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 192
                    echo "          <div class=\"form-group";
                    if ($this->getAttribute($context["custom_field"], "required", array())) {
                        echo " required ";
                    }
                    echo " custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
            <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                    // line 193
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group datetime\">
                <input type=\"text\" name=\"";
                    // line 196
                    echo (isset($context["type"]) ? $context["type"] : null);
                    echo "_custom_field[";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\"/>
                <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default button\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
            </div>
          </div>
        ";
                }
                // line 203
                echo "      ";
            }
            // line 204
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "    </div>
  </form>

              <script type=\"text/javascript\"><!-- 
              \$( document ).ready(function() {   
            \$(document).on('change', 'form.form-";
        // line 210
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "  select[name=\\'";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " _zone_id\\']',  function() {
\t\t
           \$.ajax({
                    url: 'index.php?route=city/city&zone_id=' + this.value,
                    dataType: 'json',
                    beforeSend: function() {
                            \$('form.form-";
        // line 216
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "  select[name=\\'";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " _zone_id\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                    },
                    complete: function() {
                            \$('.fa-spin').remove();
                    },
                    success: function(json) {
\t\t   
                    html = '<option value=\"\">";
        // line 223
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo " </option>';

                            if (json['cities'] && json['cities'] != '') {
                                    for (i = 0; i < json['cities'].length; i++) {
                                            html += '<option value=\"' + json['cities'][i]['name'] + '\"';

                                            if (json['cities'][i]['name'] == '";
        // line 229
        echo (((isset($context["city"]) ? $context["city"] : null)) ? ((isset($context["city"]) ? $context["city"] : null)) : (0));
        echo "') {
                                                    html += ' selected=\"selected\"';
                                            }

                                            html += '>' + json['cities'][i]['name'] + '</option>';
                                    }
                            } else {
                                    html += '<option value=\"0\" selected=\"selected\">";
        // line 236
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo " </option>';
                            }

                            \$('form.form-";
        // line 239
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "  select[name=\\'";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " _city\\']').html(html);
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
      
  <script>
    \$('form.form-";
        // line 253
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " input[name=\"";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address\"]').change(function () {
      if (this.value == 'new') {
        \$('#";
        // line 255
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-existing').hide();
        \$('#";
        // line 256
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-new').show().find('input[type=\"text\"]').val('');
      } else {
        \$('#";
        // line 258
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-existing').show();
        \$('#";
        // line 259
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-new').hide();
      }
      \$(document).trigger('journal_checkout_address_changed', '";
        // line 261
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "');
    });

    \$('form.form-";
        // line 264
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " select[name=\\'";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_country_id\\']').on('change', function (e, first) {
      if (!this.value) return;
      \$.ajax({
        url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
        dataType: 'json',
        beforeSend: function () {
          \$('form.form-";
        // line 270
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " select[name=\\'";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_country_id\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
        },
        complete: function () {
          \$('.fa-spin').remove();
        },
        success: function (json) {
          \$('.fa-spin').remove();

          if (json['postcode_required'] == '1') {
            \$('form.form-";
        // line 279
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " input[name=\\'";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_postcode\\']').parent().addClass('required');
          } else {
            \$('form.form-";
        // line 281
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " input[name=\\'";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_postcode\\']').parent().removeClass('required');
          }

          html = '<option value=\"\">";
        // line 284
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

          if (json['zone'] != '') {
            for (i = 0; i < json['zone'].length; i++) {
              html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

              if (json['zone'][i]['zone_id'] == '";
        // line 290
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
                html += ' selected=\"selected\"';
              }

              html += '>' + json['zone'][i]['name'] + '</option>';
            }
          } else {
            html += '<option value=\"0\" selected=\"selected\">";
        // line 297
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
          }

          \$('form.form-";
        // line 300
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " select[name=\\'";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_zone_id\\']').html(html);

          if (!first) {
            \$(document).trigger('journal_checkout_address_changed', '";
        // line 303
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "');
          }
        },
        error: function (xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    }).trigger('change', true);

    \$('form.form-";
        // line 312
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " select[name=\\'";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_zone_id\\']').on('change', function () {
      \$(document).trigger('journal_checkout_address_changed', '";
        // line 313
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "');
    });

    \$('form.form-";
        // line 316
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " select[name=\\'";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_address_id\\']').on('change', function () {
      \$(document).trigger('journal_checkout_address_changed', '";
        // line 317
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "');
    });

    var timeout_";
        // line 320
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " = null;

    \$('form.form-";
        // line 322
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " input[name=\\'";
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "_postcode\\']').on('keydown', function () {
      if (timeout_";
        // line 323
        echo (isset($context["type"]) ? $context["type"] : null);
        echo ") {
        clearTimeout(timeout_";
        // line 324
        echo (isset($context["type"]) ? $context["type"] : null);
        echo ");
      }
      timeout_";
        // line 326
        echo (isset($context["type"]) ? $context["type"] : null);
        echo " = setTimeout(function () {
        \$(document).trigger('journal_checkout_address_changed', '";
        // line 327
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "');
      }, 500);
    });
  </script>
  <script>
    \$('.checkout-";
        // line 332
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-form .form-group[data-sort]').detach().each(function () {
      if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('.checkout-";
        // line 333
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-form .form-group').length) {
        \$('.checkout-";
        // line 334
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-form .form-group').eq(\$(this).attr('data-sort')).before(this);
      }

      if (\$(this).attr('data-sort') > \$('.checkout-";
        // line 337
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-form .form-group').length) {
        \$('.checkout-";
        // line 338
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-form .form-group:last').after(this);
      }

      if (\$(this).attr('data-sort') < -\$('.checkout-";
        // line 341
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-form .form-group').length) {
        \$('.checkout-";
        // line 342
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-form .form-group:first').before(this);
      }
    });
  </script>
  <script type=\"text/javascript\"><!--
    \$('.checkout-";
        // line 347
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-form .date').datetimepicker({
      pickTime: false
    });

    \$('.checkout-";
        // line 351
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-form .time').datetimepicker({
      pickDate: false
    });

    \$('.checkout-";
        // line 355
        echo (isset($context["type"]) ? $context["type"] : null);
        echo "-form .datetime').datetimepicker({
      pickDate: true,
      pickTime: true
    });
    //--></script>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/checkout/address_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1027 => 355,  1020 => 351,  1013 => 347,  1005 => 342,  1001 => 341,  995 => 338,  991 => 337,  985 => 334,  981 => 333,  977 => 332,  969 => 327,  965 => 326,  960 => 324,  956 => 323,  950 => 322,  945 => 320,  939 => 317,  933 => 316,  927 => 313,  921 => 312,  909 => 303,  901 => 300,  895 => 297,  885 => 290,  876 => 284,  868 => 281,  861 => 279,  847 => 270,  836 => 264,  830 => 261,  825 => 259,  821 => 258,  816 => 256,  812 => 255,  805 => 253,  786 => 239,  780 => 236,  770 => 229,  761 => 223,  749 => 216,  738 => 210,  731 => 205,  725 => 204,  722 => 203,  704 => 196,  696 => 193,  687 => 192,  684 => 191,  666 => 184,  658 => 181,  649 => 180,  646 => 179,  633 => 175,  625 => 174,  620 => 172,  611 => 171,  608 => 170,  593 => 166,  586 => 164,  577 => 163,  574 => 162,  559 => 158,  552 => 156,  543 => 155,  540 => 154,  534 => 150,  525 => 147,  517 => 146,  513 => 144,  509 => 143,  505 => 142,  500 => 140,  491 => 139,  488 => 138,  482 => 134,  473 => 131,  465 => 130,  461 => 128,  457 => 127,  453 => 126,  448 => 124,  439 => 123,  436 => 122,  430 => 118,  419 => 116,  415 => 115,  411 => 114,  403 => 113,  396 => 111,  387 => 110,  384 => 109,  381 => 108,  377 => 107,  370 => 103,  364 => 102,  353 => 96,  345 => 93,  339 => 89,  333 => 88,  325 => 86,  317 => 84,  314 => 83,  310 => 82,  306 => 81,  300 => 80,  292 => 77,  286 => 74,  278 => 73,  271 => 71,  258 => 67,  251 => 65,  245 => 62,  237 => 61,  230 => 59,  224 => 56,  216 => 55,  209 => 53,  202 => 49,  194 => 48,  187 => 46,  184 => 45,  178 => 42,  170 => 41,  163 => 39,  157 => 36,  149 => 35,  142 => 33,  139 => 32,  137 => 31,  130 => 30,  124 => 27,  120 => 26,  114 => 22,  108 => 21,  90 => 19,  72 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  51 => 10,  47 => 9,  43 => 7,  41 => 6,  36 => 5,  30 => 3,  28 => 2,  19 => 1,);
    }
}
/* <div class="{% if is_logged_in %} checkout-content {% endif %} checkout-{{ type }}-form">*/
/*   {% if is_logged_in %}*/
/*     <h2 class="secondary-title">{{ type == 'payment' ? journal2.settings.get('one_page_lang_bill_address', 'Billing Address') : journal2.settings.get('one_page_lang_ship_address', 'Delivery Address') }}</h2>*/
/*   {% endif %}*/
/*   <form class="form-horizontal form-{{ type }}">*/
/*     {% if addresses %}*/
/*       <div class="radio">*/
/*         <label>*/
/*           <input type="radio" name="{{ type }}_address" value="existing" checked="checked"/>*/
/*           {{ text_address_existing }}*/
/*         </label>*/
/*       </div>*/
/*       <div id="{{ type }}-existing">*/
/*         <select name="{{ type }}_address_id" class="form-control">*/
/*           {% for address in addresses %}*/
/*             {% if address['address_id'] == address_id %}*/
/*               <option value="{{ address.address_id }}" selected="selected">{{ address.firstname }} {{ address.lastname }}, {{ address.address_1 }}, {{ address.city }}, {{ address.zone }}, {{ address.country }}</option>*/
/*             {% else %}*/
/*               <option value="{{ address.address_id }}">{{ address.firstname }} {{ address.lastname }}, {{ address.address_1 }}, {{ address.city }}, {{ address.zone }}, {{ address.country }}</option>*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         </select>*/
/*       </div>*/
/*       <div class="radio">*/
/*         <label>*/
/*           <input type="radio" name="{{ type }}_address" value="new"/>*/
/*           {{ text_address_new }}</label>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div id="{{ type }}-new" style="display: {{ addresses ? 'none' : 'block' }}">*/
/*       {% if name %}*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-{{ type }}-firstname">{{ entry_firstname }}</label>*/
/* */
/*           <input type="text" name="{{ type }}_firstname" value="{{ staticCall('Journal2Utils', 'getProperty', [order_data, type ~ '_firstname', '']) }}" placeholder="{{ entry_firstname }}"*/
/*                  id="input-{{ type }}-firstname" class="form-control"/>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*           <label class="col-sm-2 control-label" for="input-{{ type }}-lastname">{{ entry_lastname }}</label>*/
/* */
/*           <input type="text" name="{{ type }}_lastname" value="{{ staticCall('Journal2Utils', 'getProperty', [order_data, type ~ '_lastname', '']) }}" placeholder="{{ entry_lastname }}"*/
/*                  id="input-{{ type }}-lastname" class="form-control"/>*/
/*         </div>*/
/*       {% endif %}*/
/*       <div class="form-group company-input">*/
/*         <label class="col-sm-2 control-label" for="input-{{ type }}-company">{{ entry_company }}</label>*/
/* */
/*         <input type="text" name="{{ type }}_company" value="{{ staticCall('Journal2Utils', 'getProperty', [order_data, type ~ '_company', '']) }}" placeholder="{{ entry_company }}"*/
/*                id="input-{{ type }}-company" class="form-control"/>*/
/*       </div>*/
/* */
/*       <div class="form-group required">*/
/*         <label class="col-sm-2 control-label" for="input-{{ type }}-address-1">{{ entry_address_1 }}</label>*/
/* */
/*         <input type="text" name="{{ type }}_address_1" value="{{ staticCall('Journal2Utils', 'getProperty', [order_data, type ~ '_address_1', '']) }}" placeholder="{{ entry_address_1 }}"*/
/*                id="input-{{ type }}-address-1" class="form-control"/>*/
/*       </div>*/
/*       <div class="form-group address-2-input">*/
/*         <label class="col-sm-2 control-label" for="input-{{ type }}-address-2">{{ entry_address_2 }}</label>*/
/* */
/*         <input type="text" name="{{ type }}_address_2" value="{{ staticCall('Journal2Utils', 'getProperty', [order_data, type ~ '_address_2', '']) }}" placeholder="{{ entry_address_2 }}"*/
/*                id="input-{{ type }}-address-2" class="form-control"/>*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="col-sm-2 control-label" for="input-{{ type }}-city">{{ entry_city }}</label>*/
/* */
/*         <input type="text" name="{{ type }}_city" value="{{ staticCall('Journal2Utils', 'getProperty', [order_data, type ~ '_city', '']) }}" placeholder="{{ entry_city }}" id="input-{{ type }}-city"*/
/*                class="form-control"/>*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="col-sm-2 control-label" for="input-{{ type }}-postcode">{{ entry_postcode }}</label>*/
/* */
/*         <input type="text" name="{{ type }}_postcode" value="{{ postcode }}" placeholder="{{ entry_postcode }}"*/
/*                id="input-{{ type }}-postcode" class="form-control"/>*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="col-sm-2 control-label" for="input-{{ type }}-country">{{ entry_country }}</label>*/
/*         <div class="col-sm-10">*/
/* */
/*           <select name="{{ type }}_country_id" id="input-{{ type }}-country" class="form-control">*/
/*             <option value="">{{ text_select }}</option>*/
/*             {% for country in countries %}*/
/*               {% if country.country_id == country_id %}*/
/*                 <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*               {% else %}*/
/*                 <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </select>*/
/*         </div>*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="col-sm-2 control-label" for="input-{{ type }}-zone">{{ entry_zone }}</label>*/
/*         <div class="col-sm-10">*/
/* */
/*           <select name="{{ type }}_zone_id" id="input-{{ type }}-zone" class="form-control">*/
/*           </select>*/
/*         </div>*/
/*       </div>*/
/* */
/* 		<div class="form-group required">*/
/*                 <label class="col-sm-2 control-label" for="input-{{ type }} -city">{{ entry_city }} </label>*/
/* 		    <select name="{{ type }} _city" id="input-city" class="form-control">*/
/*               </select>*/
/*             </div>	*/
/*         */
/*       {% for custom_field in custom_fields %}*/
/*       {% if custom_field.location == 'address' %}*/
/*         {% if custom_field.type == 'select' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <select name="{{ type }}_custom_field[{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for custom_field_value in custom_field.custom_field_value %}*/
/*                   <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if custom_field.type == 'radio' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/*                 {% for custom_field_value in custom_field.custom_field_value %}*/
/*                   <div class="radio">*/
/*                     <label>*/
/*                       <input type="radio" name="{{ type }}_custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/*                       {{ custom_field_value.name }}</label>*/
/*                   </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if custom_field.type == 'checkbox' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/*                 {% for custom_field_value in custom_field.custom_field_value %}*/
/*                   <div class="checkbox">*/
/*                     <label>*/
/*                       <input type="checkbox" name="{{ type }}_custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/*                       {{ custom_field_value.name }}</label>*/
/*                   </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if custom_field.type == 'text' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="{{ type }}_custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if custom_field.type == 'textarea' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <textarea name="{{ type }}_custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value }}</textarea>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if custom_field.type == 'file' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default button"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*               <input type="hidden" name="{{ type }}_custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}"/>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if custom_field.type == 'date' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group date">*/
/*                 <input type="text" name="{{ type }}_custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                 <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*           </span></div>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if custom_field.type == 'time' %}*/
/*           <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*             <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*             <div class="col-sm-10">*/
/*               <div class="input-group datetime">*/
/*                 <input type="text" name="{{ type }}_custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                 <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*           </span></div>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*     </div>*/
/*   </form>*/
/* */
/*               <script type="text/javascript"><!-- */
/*               $( document ).ready(function() {   */
/*             $(document).on('change', 'form.form-{{ type }}  select[name=\'{{ type }} _zone_id\']',  function() {*/
/* 		*/
/*            $.ajax({*/
/*                     url: 'index.php?route=city/city&zone_id=' + this.value,*/
/*                     dataType: 'json',*/
/*                     beforeSend: function() {*/
/*                             $('form.form-{{ type }}  select[name=\'{{ type }} _zone_id\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');*/
/*                     },*/
/*                     complete: function() {*/
/*                             $('.fa-spin').remove();*/
/*                     },*/
/*                     success: function(json) {*/
/* 		   */
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
/*                             $('form.form-{{ type }}  select[name=\'{{ type }} _city\']').html(html);*/
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
/*   <script>*/
/*     $('form.form-{{ type }} input[name="{{ type }}_address"]').change(function () {*/
/*       if (this.value == 'new') {*/
/*         $('#{{ type }}-existing').hide();*/
/*         $('#{{ type }}-new').show().find('input[type="text"]').val('');*/
/*       } else {*/
/*         $('#{{ type }}-existing').show();*/
/*         $('#{{ type }}-new').hide();*/
/*       }*/
/*       $(document).trigger('journal_checkout_address_changed', '{{ type }}');*/
/*     });*/
/* */
/*     $('form.form-{{ type }} select[name=\'{{ type }}_country_id\']').on('change', function (e, first) {*/
/*       if (!this.value) return;*/
/*       $.ajax({*/
/*         url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,*/
/*         dataType: 'json',*/
/*         beforeSend: function () {*/
/*           $('form.form-{{ type }} select[name=\'{{ type }}_country_id\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');*/
/*         },*/
/*         complete: function () {*/
/*           $('.fa-spin').remove();*/
/*         },*/
/*         success: function (json) {*/
/*           $('.fa-spin').remove();*/
/* */
/*           if (json['postcode_required'] == '1') {*/
/*             $('form.form-{{ type }} input[name=\'{{ type }}_postcode\']').parent().addClass('required');*/
/*           } else {*/
/*             $('form.form-{{ type }} input[name=\'{{ type }}_postcode\']').parent().removeClass('required');*/
/*           }*/
/* */
/*           html = '<option value="">{{ text_select }}</option>';*/
/* */
/*           if (json['zone'] != '') {*/
/*             for (i = 0; i < json['zone'].length; i++) {*/
/*               html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/*               if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {*/
/*                 html += ' selected="selected"';*/
/*               }*/
/* */
/*               html += '>' + json['zone'][i]['name'] + '</option>';*/
/*             }*/
/*           } else {*/
/*             html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/*           }*/
/* */
/*           $('form.form-{{ type }} select[name=\'{{ type }}_zone_id\']').html(html);*/
/* */
/*           if (!first) {*/
/*             $(document).trigger('journal_checkout_address_changed', '{{ type }}');*/
/*           }*/
/*         },*/
/*         error: function (xhr, ajaxOptions, thrownError) {*/
/*           alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*         }*/
/*       });*/
/*     }).trigger('change', true);*/
/* */
/*     $('form.form-{{ type }} select[name=\'{{ type }}_zone_id\']').on('change', function () {*/
/*       $(document).trigger('journal_checkout_address_changed', '{{ type }}');*/
/*     });*/
/* */
/*     $('form.form-{{ type }} select[name=\'{{ type }}_address_id\']').on('change', function () {*/
/*       $(document).trigger('journal_checkout_address_changed', '{{ type }}');*/
/*     });*/
/* */
/*     var timeout_{{ type }} = null;*/
/* */
/*     $('form.form-{{ type }} input[name=\'{{ type }}_postcode\']').on('keydown', function () {*/
/*       if (timeout_{{ type }}) {*/
/*         clearTimeout(timeout_{{ type }});*/
/*       }*/
/*       timeout_{{ type }} = setTimeout(function () {*/
/*         $(document).trigger('journal_checkout_address_changed', '{{ type }}');*/
/*       }, 500);*/
/*     });*/
/*   </script>*/
/*   <script>*/
/*     $('.checkout-{{ type }}-form .form-group[data-sort]').detach().each(function () {*/
/*       if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('.checkout-{{ type }}-form .form-group').length) {*/
/*         $('.checkout-{{ type }}-form .form-group').eq($(this).attr('data-sort')).before(this);*/
/*       }*/
/* */
/*       if ($(this).attr('data-sort') > $('.checkout-{{ type }}-form .form-group').length) {*/
/*         $('.checkout-{{ type }}-form .form-group:last').after(this);*/
/*       }*/
/* */
/*       if ($(this).attr('data-sort') < -$('.checkout-{{ type }}-form .form-group').length) {*/
/*         $('.checkout-{{ type }}-form .form-group:first').before(this);*/
/*       }*/
/*     });*/
/*   </script>*/
/*   <script type="text/javascript"><!--*/
/*     $('.checkout-{{ type }}-form .date').datetimepicker({*/
/*       pickTime: false*/
/*     });*/
/* */
/*     $('.checkout-{{ type }}-form .time').datetimepicker({*/
/*       pickDate: false*/
/*     });*/
/* */
/*     $('.checkout-{{ type }}-form .datetime').datetimepicker({*/
/*       pickDate: true,*/
/*       pickTime: true*/
/*     });*/
/*     //--></script>*/
/* </div>*/
/* */
