<?php

/* journal2/template/account/register.twig */
class __TwigTemplate_1ad3d309d9487ed3f2aabdc6a74a296ca5f0b67470525a64dc7a5b936c49fd74 extends Twig_Template
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
        echo "<!--catalog/view/theme/journal2/template/accout/register.twig  -->
";
        // line 2
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"registely\" style=\"background-image:  url(/image/login.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  position: relative;
  height:864px;\">

<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
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
        // line 15
        echo "  </ul>
  ";
        // line 16
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 17
            echo "    <div class=\"alert alert-danger warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 19
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 20
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 21
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 22
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 23
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 26
            echo "    ";
        }
        // line 27
        echo "        <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      <h1 class=\"heading-title\">";
        // line 28
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 29
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <p class=\"account-text\">";
        // line 30
        echo (isset($context["text_account_already"]) ? $context["text_account_already"] : null);
        echo "</p>
      <div class=\"content\">
        <form action=\"";
        // line 32
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <fieldset id=\"account\">
            <div class=\"form-group required\" style=\"display: ";
        // line 34
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
              <label class=\"col-sm-2 control-label\">";
        // line 35
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
              <div class=\"col-sm-10\">";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 37
            echo "                  ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 38
                echo "                    <div class=\"radio\">
                      <label>
                        <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 40
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\"/>
                        ";
                // line 41
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
                    </div>
                  ";
            } else {
                // line 44
                echo "                    <div class=\"radio\">
                      <label>
                        <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 46
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\"/>
                        ";
                // line 47
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
                    </div>
                  ";
            }
            // line 50
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 53
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"firstname\" value=\"";
        // line 55
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                ";
        // line 56
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 57
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
                ";
        }
        // line 58
        echo " </div>
            </div>
            <div class=\"form-group required\" style=\"display:none\">
              <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 61
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"lastname\" value=\"用户\" placeholder=\"";
        // line 63
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
                ";
        // line 64
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 65
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
                ";
        }
        // line 66
        echo " </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 69
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"email\" name=\"email\" value=\"";
        // line 71
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                ";
        // line 72
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 73
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                ";
        }
        // line 74
        echo " </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 77
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"tel\" name=\"telephone\" value=\"";
        // line 79
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                ";
        // line 80
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 81
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                ";
        }
        // line 82
        echo " </div>
            </div>
            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 85
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 86
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 87
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"custom_field[";
                // line 89
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
                      <option value=\"\">";
                // line 90
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>


                      ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 94
                    echo "                        ";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 95
                        echo "



                          <option value=\"";
                        // line 99
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>





                        ";
                    } else {
                        // line 106
                        echo "




                          <option value=\"";
                        // line 111
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>





                        ";
                    }
                    // line 118
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 119
                echo "

                    </select>
                    ";
                // line 122
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 123
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 124
                echo "</div>
                </div>
              ";
            }
            // line 127
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 128
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\">";
                // line 129
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                // line 131
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 132
                    echo "                        <div class=\"radio\">";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 133
                        echo "                            <label>
                              <input type=\"radio\" name=\"custom_field[";
                        // line 134
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\"/>
                              ";
                        // line 135
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                          ";
                    } else {
                        // line 137
                        echo "                            <label>
                              <input type=\"radio\" name=\"custom_field[";
                        // line 138
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"/>
                              ";
                        // line 139
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                          ";
                    }
                    // line 140
                    echo " </div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo " </div>
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
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 148
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
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
                    echo "                        <div class=\"checkbox\">";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 153
                        echo "                            <label>
                              <input type=\"checkbox\" name=\"custom_field[";
                        // line 154
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
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
                              <input type=\"checkbox\" name=\"custom_field[";
                        // line 158
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
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
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 168
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 169
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[";
                // line 171
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\"/>
                    ";
                // line 172
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 173
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 174
                echo " </div>
                </div>
              ";
            }
            // line 177
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 178
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 179
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[";
                // line 181
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" rows=\"5\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "</textarea>
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
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 188
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\">";
                // line 189
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <button type=\"button\" id=\"button-custom-field";
                // line 191
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default button\"><i class=\"fa fa-upload\"></i> ";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                // line 192
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo "  ";
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo " ";
                }
                echo "\"/>
                    ";
                // line 193
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 194
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 195
                echo "</div>
                </div>
              ";
            }
            // line 198
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 199
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 200
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"custom_field[";
                // line 203
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
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
                // line 207
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 208
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 209
                echo " </div>
                </div>
              ";
            }
            // line 212
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 213
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 214
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"custom_field[";
                // line 217
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
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
                // line 221
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 222
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 223
                echo " </div>
                </div>
              ";
            }
            // line 226
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 227
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 228
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"custom_field[";
                // line 231
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
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
                // line 235
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 236
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 237
                echo " </div>
                </div>
              ";
            }
            // line 240
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "          </fieldset>
          <fieldset>
        
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 245
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"password\" name=\"password\" value=\"";
        // line 247
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                ";
        // line 248
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 249
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
                ";
        }
        // line 250
        echo " </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 253
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"password\" name=\"confirm\" value=\"";
        // line 255
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                ";
        // line 256
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            // line 257
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</div>
                ";
        }
        // line 258
        echo " </div>
            </div>
          </fieldset>
      
          ";
        // line 262
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
          ";
        // line 263
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 264
            echo "            <div class=\"buttons\">
              <div class=\"pull-right\">";
            // line 265
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
                ";
            // line 266
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 267
                echo "                  <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
                ";
            } else {
                // line 269
                echo "                  <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
                ";
            }
            // line 271
            echo "                &nbsp;
                <input type=\"submit\" value=\"";
            // line 272
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" class=\"btn btn-primary button\"/>
              </div>
            </div>
          ";
        } else {
            // line 276
            echo "            <div class=\"buttons\">
              <div class=\"pull-right\">
                <input type=\"submit\" value=\"";
            // line 278
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" class=\"btn btn-primary button\"/>
              </div>
            </div>
          ";
        }
        // line 282
        echo "        </form>
      </div>
      ";
        // line 284
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>
<script type=\"text/javascript\"><!--
  // Sort the custom fields
  \$('#account .form-group[data-sort]').detach().each(function () {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
      \$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('#account .form-group').length) {
      \$('#account .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') == \$('#account .form-group').length) {
      \$('#account .form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
      \$('#account .form-group:first').before(this);
    }
  });

  \$('input[name=\\'customer_group_id\\']').on('change', function () {
    \$.ajax({
      url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,
      dataType: 'json',
      success: function (json) {
        \$('.custom-field').hide();
        \$('.custom-field').removeClass('required');

        for (i = 0; i < json.length; i++) {
          custom_field = json[i];

          \$('#custom-field' + custom_field['custom_field_id']).show();

          if (custom_field['required']) {
            \$('#custom-field' + custom_field['custom_field_id']).addClass('required');
          }
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });

  \$('input[name=\\'customer_group_id\\']:checked').trigger('change');
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
              \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
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

  \$('.time').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickDate: false
  });

  \$('.datetime').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickDate: true,
    pickTime: true
  });
  //--></script>
  </div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  916 => 284,  912 => 282,  905 => 278,  901 => 276,  894 => 272,  891 => 271,  887 => 269,  883 => 267,  881 => 266,  877 => 265,  874 => 264,  872 => 263,  868 => 262,  862 => 258,  856 => 257,  854 => 256,  848 => 255,  843 => 253,  838 => 250,  832 => 249,  830 => 248,  824 => 247,  819 => 245,  813 => 241,  807 => 240,  802 => 237,  796 => 236,  794 => 235,  775 => 231,  767 => 228,  760 => 227,  757 => 226,  752 => 223,  746 => 222,  744 => 221,  725 => 217,  717 => 214,  710 => 213,  707 => 212,  702 => 209,  696 => 208,  694 => 207,  675 => 203,  667 => 200,  660 => 199,  657 => 198,  652 => 195,  646 => 194,  644 => 193,  632 => 192,  624 => 191,  619 => 189,  612 => 188,  609 => 187,  604 => 184,  598 => 183,  596 => 182,  580 => 181,  573 => 179,  566 => 178,  563 => 177,  558 => 174,  552 => 173,  550 => 172,  534 => 171,  527 => 169,  520 => 168,  517 => 167,  512 => 164,  506 => 163,  504 => 162,  501 => 161,  494 => 160,  489 => 159,  481 => 158,  478 => 157,  473 => 155,  465 => 154,  462 => 153,  459 => 152,  455 => 151,  450 => 149,  443 => 148,  440 => 147,  435 => 144,  429 => 143,  427 => 142,  424 => 141,  417 => 140,  412 => 139,  404 => 138,  401 => 137,  396 => 135,  388 => 134,  385 => 133,  382 => 132,  378 => 131,  373 => 129,  366 => 128,  363 => 127,  358 => 124,  352 => 123,  350 => 122,  345 => 119,  339 => 118,  327 => 111,  320 => 106,  308 => 99,  302 => 95,  299 => 94,  295 => 93,  289 => 90,  281 => 89,  274 => 87,  267 => 86,  264 => 85,  260 => 84,  256 => 82,  250 => 81,  248 => 80,  242 => 79,  237 => 77,  232 => 74,  226 => 73,  224 => 72,  218 => 71,  213 => 69,  208 => 66,  202 => 65,  200 => 64,  196 => 63,  191 => 61,  186 => 58,  180 => 57,  178 => 56,  172 => 55,  167 => 53,  157 => 50,  151 => 47,  147 => 46,  143 => 44,  137 => 41,  133 => 40,  129 => 38,  126 => 37,  122 => 36,  118 => 35,  110 => 34,  105 => 32,  100 => 30,  96 => 29,  92 => 28,  87 => 27,  84 => 26,  81 => 25,  78 => 24,  75 => 23,  72 => 22,  69 => 21,  67 => 20,  61 => 19,  55 => 17,  53 => 16,  50 => 15,  39 => 13,  35 => 12,  22 => 2,  19 => 1,);
    }
}
/* <!--catalog/view/theme/journal2/template/accout/register.twig  -->*/
/* {{ header }}*/
/* <div class="registely" style="background-image:  url(/image/login.jpg);*/
/*   background-position: center;*/
/*   background-repeat: no-repeat;*/
/*   background-attachment: fixed;*/
/*   position: relative;*/
/*   height:864px;">*/
/* */
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if error_warning %}*/
/*     <div class="alert alert-danger warning"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*         <div id="content" class="{{ class }}">*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {{ content_top }}*/
/*       <p class="account-text">{{ text_account_already }}</p>*/
/*       <div class="content">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*           <fieldset id="account">*/
/*             <div class="form-group required" style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/*               <label class="col-sm-2 control-label">{{ entry_customer_group }}</label>*/
/*               <div class="col-sm-10">{% for customer_group in customer_groups %}*/
/*                   {% if customer_group.customer_group_id == customer_group_id %}*/
/*                     <div class="radio">*/
/*                       <label>*/
/*                         <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" checked="checked"/>*/
/*                         {{ customer_group.name }}</label>*/
/*                     </div>*/
/*                   {% else %}*/
/*                     <div class="radio">*/
/*                       <label>*/
/*                         <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}"/>*/
/*                         {{ customer_group.name }}</label>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                 {% endfor %}</div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control"/>*/
/*                 {% if error_firstname %}*/
/*                   <div class="text-danger">{{ error_firstname }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             <div class="form-group required" style="display:none">*/
/*               <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="lastname" value="用户" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control"/>*/
/*                 {% if error_lastname %}*/
/*                   <div class="text-danger">{{ error_lastname }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="email" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control"/>*/
/*                 {% if error_email %}*/
/*                   <div class="text-danger">{{ error_email }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="tel" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control"/>*/
/*                 {% if error_telephone %}*/
/*                   <div class="text-danger">{{ error_telephone }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             {% for custom_field in custom_fields %}*/
/*               {% if custom_field.type == 'select' %}*/
/*                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                       <option value="">{{ text_select }}</option>*/
/* */
/* */
/*                       {% for custom_field_value in custom_field.custom_field_value %}*/
/*                         {% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
/* */
/* */
/* */
/* */
/*                           <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/* */
/* */
/* */
/* */
/* */
/*                         {% else %}*/
/* */
/* */
/* */
/* */
/* */
/*                           <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/* */
/* */
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
/*                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                         <div class="radio">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == register_custom_field[custom_field.custom_field_id] %}*/
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
/*                     {% endif %}</div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'checkbox' %}*/
/*                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div> {% for custom_field_value in custom_field.custom_field_value %}*/
/*                         <div class="checkbox">{% if register_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in register_custom_field[custom_field.custom_field_id] %}*/
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
/*                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'textarea' %}*/
/*                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'file' %}*/
/*                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default button"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                     <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}  {{ register_custom_field[custom_field.custom_field_id] }} {% endif %}"/>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}</div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'date' %}*/
/*                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group date">*/
/*                       <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'time' %}*/
/*                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group time">*/
/*                       <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'time' %}*/
/*                 <div id="custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group datetime">*/
/*                       <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{% if register_custom_field[custom_field.custom_field_id] %}{{ register_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %} </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </fieldset>*/
/*           <fieldset>*/
/*         */
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-password">{{ entry_password }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control"/>*/
/*                 {% if error_password %}*/
/*                   <div class="text-danger">{{ error_password }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-confirm">{{ entry_confirm }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="password" name="confirm" value="{{ confirm }}" placeholder="{{ entry_confirm }}" id="input-confirm" class="form-control"/>*/
/*                 {% if error_confirm %}*/
/*                   <div class="text-danger">{{ error_confirm }}</div>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*           </fieldset>*/
/*       */
/*           {{ captcha }}*/
/*           {% if text_agree %}*/
/*             <div class="buttons">*/
/*               <div class="pull-right">{{ text_agree }}*/
/*                 {% if agree %}*/
/*                   <input type="checkbox" name="agree" value="1" checked="checked"/>*/
/*                 {% else %}*/
/*                   <input type="checkbox" name="agree" value="1"/>*/
/*                 {% endif %}*/
/*                 &nbsp;*/
/*                 <input type="submit" value="{{ button_continue }}" class="btn btn-primary button"/>*/
/*               </div>*/
/*             </div>*/
/*           {% else %}*/
/*             <div class="buttons">*/
/*               <div class="pull-right">*/
/*                 <input type="submit" value="{{ button_continue }}" class="btn btn-primary button"/>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/*         </form>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   // Sort the custom fields*/
/*   $('#account .form-group[data-sort]').detach().each(function () {*/
/*     if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {*/
/*       $('#account .form-group').eq($(this).attr('data-sort')).before(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') > $('#account .form-group').length) {*/
/*       $('#account .form-group:last').after(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') == $('#account .form-group').length) {*/
/*       $('#account .form-group:last').after(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') < -$('#account .form-group').length) {*/
/*       $('#account .form-group:first').before(this);*/
/*     }*/
/*   });*/
/* */
/*   $('input[name=\'customer_group_id\']').on('change', function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=account/register/customfield&customer_group_id=' + this.value,*/
/*       dataType: 'json',*/
/*       success: function (json) {*/
/*         $('.custom-field').hide();*/
/*         $('.custom-field').removeClass('required');*/
/* */
/*         for (i = 0; i < json.length; i++) {*/
/*           custom_field = json[i];*/
/* */
/*           $('#custom-field' + custom_field['custom_field_id']).show();*/
/* */
/*           if (custom_field['required']) {*/
/*             $('#custom-field' + custom_field['custom_field_id']).addClass('required');*/
/*           }*/
/*         }*/
/*       },*/
/*       error: function (xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $('input[name=\'customer_group_id\']:checked').trigger('change');*/
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
/*               $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
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
/*   $('.time').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickDate: false*/
/*   });*/
/* */
/*   $('.datetime').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickDate: true,*/
/*     pickTime: true*/
/*   });*/
/*   //--></script>*/
/*   </div>*/
/* */
