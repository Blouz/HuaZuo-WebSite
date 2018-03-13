<?php

/* default/template/checkout/payment_address.twig */
class __TwigTemplate_44488f1cf8b9abdf8cda780d60e1932748d6bf04d33a4407d0d68204c1963517 extends Twig_Template
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
        echo "<form class=\"form-horizontal\">
  ";
        // line 2
        if ((isset($context["addresses"]) ? $context["addresses"] : null)) {
            // line 3
            echo "  <div class=\"radio\">
    <label>
      <input type=\"radio\" name=\"payment_address\" value=\"existing\" checked=\"checked\" />
      ";
            // line 6
            echo (isset($context["text_address_existing"]) ? $context["text_address_existing"] : null);
            echo "</label>
  </div>
  <div id=\"payment-existing\">
    <select name=\"address_id\" class=\"form-control\">
     ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 11
                echo "      ";
                if (($this->getAttribute($context["address"], "address_id", array(), "array") == (isset($context["address_id"]) ? $context["address_id"] : null))) {
                    // line 12
                    echo "      <option value=\"";
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
                    // line 14
                    echo "      <option value=\"";
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
                // line 16
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "    </select>
  </div>
  <div class=\"radio\">
    <label>
      <input type=\"radio\" name=\"payment_address\" value=\"new\" />
      ";
            // line 22
            echo (isset($context["text_address_new"]) ? $context["text_address_new"] : null);
            echo "</label>
  </div>
  ";
        }
        // line 25
        echo "  <br />
  <div id=\"payment-new\" style=\"display: ";
        // line 26
        if ((isset($context["addresses"]) ? $context["addresses"] : null)) {
            echo "none";
        } else {
            echo "block";
        }
        echo ";\">
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-firstname\">";
        // line 28
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 30
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-lastname\">";
        // line 34
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 36
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-company\">";
        // line 40
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 42
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-payment-company\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-address-1\">";
        // line 46
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 48
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-address-2\">";
        // line 52
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 54
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <div class=\"mmos-city\"></div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-postcode\">";
        // line 61
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"postcode\" value=\"\" placeholder=\"";
        // line 63
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\" />
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-country\">";
        // line 67
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
          <option value=\"\">";
        // line 70
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
         ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 72
            echo "          ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 73
                echo "          <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
          ";
            } else {
                // line 75
                echo "          <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
          ";
            }
            // line 77
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </select>
      </div>
    </div>
    <div class=\"form-group required\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-zone\">";
        // line 82
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
      <div class=\"col-sm-10\">
        <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
        </select>
      </div>
    </div>

\t\t<div class=\"form-group required\">
\t\t    <label class=\"col-sm-2 control-label\" for=\"input-payment-city\">";
        // line 90
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
\t\t    <div class=\"col-sm-10\">
\t\t      <select name=\"city\" id=\"input-payment-city\" class=\"form-control\">
\t\t     </select>
\t\t    </div>
\t\t</div>
        
    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 98
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 99
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 100
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <select name=\"custom_field[";
                // line 102
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-payment-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
          <option value=\"\">";
                // line 103
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
          ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 105
                    echo "          <option value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "        </select>
      </div>
    </div>
    ";
            }
            // line 111
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 112
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 113
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <div id=\"input-payment-custom-field";
                // line 115
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
          ";
                // line 116
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 117
                    echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                    // line 119
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\" />
              ";
                    // line 120
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "</label>
          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "        </div>
      </div>
    </div>
    ";
            }
            // line 127
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 128
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 129
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <div id=\"input-payment-custom-field";
                // line 131
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">
          ";
                // line 132
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 133
                    echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                    // line 135
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "][]\" value=\"";
                    echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                    echo "\" />
              ";
                    // line 136
                    echo $this->getAttribute($context["custom_field_value"], "name", array());
                    echo "</label>
          </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "        </div>
      </div>
    </div>
    ";
            }
            // line 143
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 144
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 145
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <input type=\"text\" name=\"custom_field[";
                // line 147
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-payment-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
      </div>
    </div>
    ";
            }
            // line 151
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 152
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 153
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <textarea name=\"custom_field[";
                // line 155
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
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
            // line 159
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 160
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\">";
                // line 161
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <button type=\"button\" id=\"button-payment-custom-field";
                // line 163
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                // line 164
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"\" id=\"input-payment-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" />
      </div>
    </div>
    ";
            }
            // line 168
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 169
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 170
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                // line 173
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 180
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 181
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 182
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                // line 185
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 192
            echo "    ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 193
                echo "    <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
      <label class=\"col-sm-2 control-label\" for=\"input-payment-custom-field";
                // line 194
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
      <div class=\"col-sm-10\">
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                // line 197
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                echo $this->getAttribute($context["custom_field"], "value", array());
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\" />
          <span class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </span></div>
      </div>
    </div>
    ";
            }
            // line 204
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "  </div>
  <div class=\"buttons clearfix\">
    <div class=\"pull-right\">
      <input type=\"button\" value=\"";
        // line 208
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" id=\"button-payment-address\" data-loading-text=\"";
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary\" />
    </div>
  </div>
</form>
<script type=\"text/javascript\"><!--
\$('input[name=\\'payment_address\\']').on('change', function() {
\tif (this.value == 'new') {
\t\t\$('#payment-existing').hide();
\t\t\$('#payment-new').show();
\t} else {
\t\t\$('#payment-existing').show();
\t\t\$('#payment-new').hide();
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#collapse-payment-address .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#collapse-payment-address .form-group').length-2) {
\t\t\$('#collapse-payment-address .form-group').eq(parseInt(\$(this).attr('data-sort'))+2).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#collapse-payment-address .form-group').length-2) {
\t\t\$('#collapse-payment-address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#collapse-payment-address .form-group').length-2) {
\t\t\$('#collapse-payment-address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#collapse-payment-address .form-group').length-2) {
\t\t\$('#collapse-payment-address .form-group:first').before(this);
\t}
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$(element).parent().find('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--

                  \$('.mmos-city').parent().hide();
             \$( document ).ready(function() {   
            \$(document).on('change', '#payment-new #input-payment-zone',  function() {
            \$.ajax({
                    url: 'index.php?route=extension/module/city&zone_id=' + this.value,
                    dataType: 'json',
                    beforeSend: function() {
                            \$('#payment-new #input-payment-zone').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
                    },
                    complete: function() {
                            \$('.fa-spin').remove();
                    },
                    success: function(json) {

                    html = '<option value=\"\">";
        // line 312
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo " </option>';

                            if (json['cities'] && json['cities'] != '') {
                                    for (i = 0; i < json['cities'].length; i++) {
                                            html += '<option value=\"' + json['cities'][i]['name'] + '\"';

                                            if (json['cities'][i]['name'] == '";
        // line 318
        echo (((isset($context["city"]) ? $context["city"] : null)) ? ((isset($context["city"]) ? $context["city"] : null)) : (0));
        echo "') {
                                                    html += ' selected=\"selected\"';
                                            }

                                            html += '>' + json['cities'][i]['name'] + '</option>';
                                    }
                            } else {
                                    html += '<option value=\"0\" selected=\"selected\">";
        // line 325
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo " </option>';
                            }

                            \$('#payment-new #input-payment-city').html(html);
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                    }
            });
        });
       
        });

      
\$('.date').datetimepicker({
\tlanguage: '";
        // line 340
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 345
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 350
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 373
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 379
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 386
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#collapse-payment-address select[name=\\'zone_id\\']').html(html);

              \$('#payment-new #input-payment-zone').trigger('change');
        
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-payment-address select[name=\\'country_id\\']').trigger('change');
//--></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/payment_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  847 => 386,  837 => 379,  828 => 373,  802 => 350,  794 => 345,  786 => 340,  768 => 325,  758 => 318,  749 => 312,  640 => 208,  635 => 205,  629 => 204,  611 => 197,  603 => 194,  594 => 193,  591 => 192,  573 => 185,  565 => 182,  556 => 181,  553 => 180,  535 => 173,  527 => 170,  518 => 169,  515 => 168,  504 => 164,  496 => 163,  491 => 161,  482 => 160,  479 => 159,  464 => 155,  457 => 153,  448 => 152,  445 => 151,  430 => 147,  423 => 145,  414 => 144,  411 => 143,  405 => 139,  396 => 136,  388 => 135,  384 => 133,  380 => 132,  376 => 131,  371 => 129,  362 => 128,  359 => 127,  353 => 123,  344 => 120,  336 => 119,  332 => 117,  328 => 116,  324 => 115,  319 => 113,  310 => 112,  307 => 111,  301 => 107,  290 => 105,  286 => 104,  282 => 103,  274 => 102,  267 => 100,  258 => 99,  255 => 98,  251 => 97,  241 => 90,  230 => 82,  224 => 78,  218 => 77,  210 => 75,  202 => 73,  199 => 72,  195 => 71,  191 => 70,  185 => 67,  178 => 63,  173 => 61,  163 => 54,  158 => 52,  151 => 48,  146 => 46,  139 => 42,  134 => 40,  127 => 36,  122 => 34,  115 => 30,  110 => 28,  101 => 26,  98 => 25,  92 => 22,  85 => 17,  79 => 16,  61 => 14,  43 => 12,  40 => 11,  36 => 10,  29 => 6,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <form class="form-horizontal">*/
/*   {% if addresses %}*/
/*   <div class="radio">*/
/*     <label>*/
/*       <input type="radio" name="payment_address" value="existing" checked="checked" />*/
/*       {{ text_address_existing }}</label>*/
/*   </div>*/
/*   <div id="payment-existing">*/
/*     <select name="address_id" class="form-control">*/
/*      {% for address in addresses %}*/
/*       {% if address['address_id'] == address_id %}*/
/*       <option value="{{ address.address_id }}" selected="selected">{{ address.firstname }} {{ address.lastname }}, {{ address.address_1 }}, {{ address.city }}, {{ address.zone }}, {{ address.country }}</option>*/
/*       {% else %}*/
/*       <option value="{{ address.address_id }}">{{ address.firstname }} {{ address.lastname }}, {{ address.address_1 }}, {{ address.city }}, {{ address.zone }}, {{ address.country }}</option>*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*     </select>*/
/*   </div>*/
/*   <div class="radio">*/
/*     <label>*/
/*       <input type="radio" name="payment_address" value="new" />*/
/*       {{ text_address_new }}</label>*/
/*   </div>*/
/*   {% endif %}*/
/*   <br />*/
/*   <div id="payment-new" style="display: {% if addresses %}none{% else %}block{% endif %};">*/
/*     <div class="form-group required">*/
/*       <label class="col-sm-2 control-label" for="input-payment-firstname">{{ entry_firstname }}</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" name="firstname" value="" placeholder="{{ entry_firstname }}" id="input-payment-firstname" class="form-control" />*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group required">*/
/*       <label class="col-sm-2 control-label" for="input-payment-lastname">{{ entry_lastname }}</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" name="lastname" value="" placeholder="{{ entry_lastname }}" id="input-payment-lastname" class="form-control" />*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="input-payment-company">{{ entry_company }}</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" name="company" value="" placeholder="{{ entry_company }}" id="input-payment-company" class="form-control" />*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group required">*/
/*       <label class="col-sm-2 control-label" for="input-payment-address-1">{{ entry_address_1 }}</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" name="address_1" value="" placeholder="{{ entry_address_1 }}" id="input-payment-address-1" class="form-control" />*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <label class="col-sm-2 control-label" for="input-payment-address-2">{{ entry_address_2 }}</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" name="address_2" value="" placeholder="{{ entry_address_2 }}" id="input-payment-address-2" class="form-control" />*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group required">*/
/*       <div class="mmos-city"></div>*/
/*     </div>*/
/*     <div class="form-group required">*/
/*       <label class="col-sm-2 control-label" for="input-payment-postcode">{{ entry_postcode }}</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" name="postcode" value="" placeholder="{{ entry_postcode }}" id="input-payment-postcode" class="form-control" />*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group required">*/
/*       <label class="col-sm-2 control-label" for="input-payment-country">{{ entry_country }}</label>*/
/*       <div class="col-sm-10">*/
/*         <select name="country_id" id="input-payment-country" class="form-control">*/
/*           <option value="">{{ text_select }}</option>*/
/*          {% for country in countries %}*/
/*           {% if country.country_id == country_id %}*/
/*           <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*           {% else %}*/
/*           <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </select>*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group required">*/
/*       <label class="col-sm-2 control-label" for="input-payment-zone">{{ entry_zone }}</label>*/
/*       <div class="col-sm-10">*/
/*         <select name="zone_id" id="input-payment-zone" class="form-control">*/
/*         </select>*/
/*       </div>*/
/*     </div>*/
/* */
/* 		<div class="form-group required">*/
/* 		    <label class="col-sm-2 control-label" for="input-payment-city">{{ entry_city }}</label>*/
/* 		    <div class="col-sm-10">*/
/* 		      <select name="city" id="input-payment-city" class="form-control">*/
/* 		     </select>*/
/* 		    </div>*/
/* 		</div>*/
/*         */
/*     {% for custom_field in custom_fields %}*/
/*     {% if custom_field.type == 'select' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*           <option value="">{{ text_select }}</option>*/
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*           {% endfor %}*/
/*         </select>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if custom_field.type == 'radio' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="radio">*/
/*             <label>*/
/*               <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*               {{ custom_field_value.name }}</label>*/
/*           </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if custom_field.type == 'checkbox' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}">*/
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="checkbox">*/
/*             <label>*/
/*               <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*               {{ custom_field_value.name }}</label>*/
/*           </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if custom_field.type == 'text' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if custom_field.type == 'textarea' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value }}</textarea>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if custom_field.type == 'file' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*         <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="" id="input-payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if custom_field.type == 'date' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <div class="input-group date">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </span></div>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if custom_field.type == 'time' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <div class="input-group time">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </span></div>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if custom_field.type == 'time' %}*/
/*     <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*       <label class="col-sm-2 control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*       <div class="col-sm-10">*/
/*         <div class="input-group datetime">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <span class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </span></div>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% endfor %}*/
/*   </div>*/
/*   <div class="buttons clearfix">*/
/*     <div class="pull-right">*/
/*       <input type="button" value="{{ button_continue }}" id="button-payment-address" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* <script type="text/javascript"><!--*/
/* $('input[name=\'payment_address\']').on('change', function() {*/
/* 	if (this.value == 'new') {*/
/* 		$('#payment-existing').hide();*/
/* 		$('#payment-new').show();*/
/* 	} else {*/
/* 		$('#payment-existing').show();*/
/* 		$('#payment-new').hide();*/
/* 	}*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* // Sort the custom fields*/
/* $('#collapse-payment-address .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#collapse-payment-address .form-group').length-2) {*/
/* 		$('#collapse-payment-address .form-group').eq(parseInt($(this).attr('data-sort'))+2).before(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') > $('#collapse-payment-address .form-group').length-2) {*/
/* 		$('#collapse-payment-address .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') == $('#collapse-payment-address .form-group').length-2) {*/
/* 		$('#collapse-payment-address .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#collapse-payment-address .form-group').length-2) {*/
/* 		$('#collapse-payment-address .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#collapse-payment-address button[id^=\'button-payment-custom-field\']').on('click', function() {*/
/* 	var element = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(element).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(element).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$(element).parent().find('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(element).parent().find('input[name^=\'custom_field\']').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(element).parent().find('input[name^=\'custom_field\']').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* */
/*                   $('.mmos-city').parent().hide();*/
/*              $( document ).ready(function() {   */
/*             $(document).on('change', '#payment-new #input-payment-zone',  function() {*/
/*             $.ajax({*/
/*                     url: 'index.php?route=extension/module/city&zone_id=' + this.value,*/
/*                     dataType: 'json',*/
/*                     beforeSend: function() {*/
/*                             $('#payment-new #input-payment-zone').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');*/
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
/*                             $('#payment-new #input-payment-city').html(html);*/
/*                     },*/
/*                     error: function(xhr, ajaxOptions, thrownError) {*/
/*                             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*                     }*/
/*             });*/
/*         });*/
/*        */
/*         });*/
/* */
/*       */
/* $('.date').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	language: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#collapse-payment-address select[name=\'country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#collapse-payment-address select[name=\'country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#collapse-payment-address select[name=\'country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['postcode_required'] == '1') {*/
/* 				$('#collapse-payment-address input[name=\'postcode\']').parent().parent().addClass('required');*/
/* 			} else {*/
/* 				$('#collapse-payment-address input[name=\'postcode\']').parent().parent().removeClass('required');*/
/* 			}*/
/* */
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/* 					html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('#collapse-payment-address select[name=\'zone_id\']').html(html);*/
/* */
/*               $('#payment-new #input-payment-zone').trigger('change');*/
/*         */
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#collapse-payment-address select[name=\'country_id\']').trigger('change');*/
/* //--></script>*/
/* */
