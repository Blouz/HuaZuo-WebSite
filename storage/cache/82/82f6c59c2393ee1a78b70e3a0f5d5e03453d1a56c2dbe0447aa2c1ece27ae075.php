<?php

/* journal2/template/account/edit.twig */
class __TwigTemplate_b6bf7e162c1a261798f26721b64f04d4c29c2138cdaa7ec1789563dbbc541e09 extends Twig_Template
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
  ";
        // line 8
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 9
            echo "    <div class=\"alert alert-danger warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 12
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      <h1 class=\"heading-title\">";
        // line 20
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 21
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"content\">
        <form action=\"";
        // line 23
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <fieldset>
            <legend>";
        // line 25
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 27
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo " </label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"firstname\" value=\"";
        // line 29
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                ";
        // line 30
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 31
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
                ";
        }
        // line 33
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 36
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"lastname\" value=\"";
        // line 38
        echo (isset($context["lastname"]) ? $context["lastname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
                ";
        // line 39
        if ((isset($context["error_lastname"]) ? $context["error_lastname"] : null)) {
            // line 40
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_lastname"]) ? $context["error_lastname"] : null);
            echo "</div>
                ";
        }
        // line 42
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 45
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"email\" name=\"email\" value=\"";
        // line 47
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                ";
        // line 48
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 49
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                ";
        }
        // line 51
        echo "              </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 54
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"tel\" name=\"telephone\" value=\"";
        // line 56
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                ";
        // line 57
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 58
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                ";
        }
        // line 60
        echo "              </div>
            </div>
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 63
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 64
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 65
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"custom_field[";
                // line 67
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
                      <option value=\"\">";
                // line 68
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>
                      ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 70
                    echo "                        ";
                    if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 71
                        echo "                          <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                        ";
                    } else {
                        // line 73
                        echo "                          <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
                        ";
                    }
                    // line 75
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "                    </select>
                    ";
                // line 77
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 78
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 80
                echo "                  </div>
                </div>
              ";
            }
            // line 83
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 84
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\">";
                // line 85
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div>
                      ";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 89
                    echo "                        <div class=\"radio\">
                          ";
                    // line 90
                    if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 91
                        echo "                            <label>
                              <input type=\"radio\" name=\"custom_field[";
                        // line 92
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\"/>
                              ";
                        // line 93
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                          ";
                    } else {
                        // line 95
                        echo "                            <label>
                              <input type=\"radio\" name=\"custom_field[";
                        // line 96
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"/>
                              ";
                        // line 97
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                          ";
                    }
                    // line 99
                    echo "                        </div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "                    </div>
                    ";
                // line 102
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 103
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 105
                echo "                  </div>
                </div>
              ";
            }
            // line 108
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 109
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\">";
                // line 110
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div>
                      ";
                // line 113
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 114
                    echo "                        <div class=\"checkbox\">
                          ";
                    // line 115
                    if (($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 116
                        echo "                            <label>
                              <input type=\"checkbox\" name=\"custom_field[";
                        // line 117
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\"/>
                              ";
                        // line 118
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                          ";
                    } else {
                        // line 120
                        echo "                            <label>
                              <input type=\"checkbox\" name=\"custom_field[";
                        // line 121
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"/>
                              ";
                        // line 122
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                          ";
                    }
                    // line 124
                    echo "                        </div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "                    </div>
                    ";
                // line 127
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 128
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 130
                echo "                  </div>
                </div>
              ";
            }
            // line 133
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 134
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 135
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[";
                // line 137
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\"/>
                    ";
                // line 138
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 139
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 141
                echo "                  </div>
                </div>
              ";
            }
            // line 144
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 145
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 146
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[";
                // line 148
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" rows=\"5\" placeholder=\"";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">";
                if ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                } else {
                    echo $this->getAttribute($context["custom_field"], "value", array());
                }
                echo "</textarea>
                    ";
                // line 149
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 150
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 152
                echo "                  </div>
                </div>
              ";
            }
            // line 155
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 156
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\">";
                // line 157
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <button type=\"button\" id=\"button-custom-field";
                // line 159
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default button\"><i class=\"fa fa-upload\"></i> ";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                // line 160
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo " ";
                }
                echo "\"/>
                    ";
                // line 161
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 162
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 164
                echo "                  </div>
                </div>
              ";
            }
            // line 167
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 168
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 169
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"custom_field[";
                // line 172
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
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
                // line 176
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 177
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 179
                echo "                  </div>
                </div>
              ";
            }
            // line 182
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 183
                echo "                <div class=\"form-group";
                if ($this->getAttribute($context["custom_field"], "required", array())) {
                    echo " required ";
                }
                echo " custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 184
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"custom_field[";
                // line 187
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
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
                // line 191
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 192
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 194
                echo "                  </div>
                </div>
              ";
            }
            // line 197
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
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
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"custom_field[";
                // line 202
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" value=\"";
                if ($this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    echo $this->getAttribute((isset($context["account_custom_field"]) ? $context["account_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
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
                // line 206
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 207
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 209
                echo "                  </div>
                </div>
              ";
            }
            // line 212
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        echo "          </fieldset>
          <div class=\"buttons clearfix\">
            <div class=\"pull-left\"><a href=\"";
        // line 215
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default button\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a></div>
            <div class=\"pull-right\">
              <input type=\"submit\" value=\"";
        // line 217
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-primary button\"/>
            </div>
          </div>
        </form>
      </div>
      ";
        // line 222
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>
<script type=\"text/javascript\"><!--
  // Sort the custom fields
  \$('.form-group[data-sort]').detach().each(function () {
    if (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('.form-group').length) {
      \$('.form-group').eq(\$(this).attr('data-sort')).before(this);
    }

    if (\$(this).attr('data-sort') > \$('.form-group').length) {
      \$('.form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') == \$('.form-group').length) {
      \$('.form-group:last').after(this);
    }

    if (\$(this).attr('data-sort') < -\$('.form-group').length) {
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
";
        // line 315
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/account/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  840 => 315,  744 => 222,  736 => 217,  729 => 215,  725 => 213,  719 => 212,  714 => 209,  708 => 207,  706 => 206,  689 => 202,  681 => 199,  672 => 198,  669 => 197,  664 => 194,  658 => 192,  656 => 191,  639 => 187,  631 => 184,  622 => 183,  619 => 182,  614 => 179,  608 => 177,  606 => 176,  589 => 172,  581 => 169,  572 => 168,  569 => 167,  564 => 164,  558 => 162,  556 => 161,  547 => 160,  539 => 159,  534 => 157,  525 => 156,  522 => 155,  517 => 152,  511 => 150,  509 => 149,  495 => 148,  488 => 146,  479 => 145,  476 => 144,  471 => 141,  465 => 139,  463 => 138,  449 => 137,  442 => 135,  433 => 134,  430 => 133,  425 => 130,  419 => 128,  417 => 127,  414 => 126,  407 => 124,  402 => 122,  396 => 121,  393 => 120,  388 => 118,  382 => 117,  379 => 116,  377 => 115,  374 => 114,  370 => 113,  364 => 110,  355 => 109,  352 => 108,  347 => 105,  341 => 103,  339 => 102,  336 => 101,  329 => 99,  324 => 97,  318 => 96,  315 => 95,  310 => 93,  304 => 92,  301 => 91,  299 => 90,  296 => 89,  292 => 88,  286 => 85,  277 => 84,  274 => 83,  269 => 80,  263 => 78,  261 => 77,  258 => 76,  252 => 75,  244 => 73,  236 => 71,  233 => 70,  229 => 69,  225 => 68,  219 => 67,  212 => 65,  203 => 64,  200 => 63,  196 => 62,  192 => 60,  186 => 58,  184 => 57,  178 => 56,  173 => 54,  168 => 51,  162 => 49,  160 => 48,  154 => 47,  149 => 45,  144 => 42,  138 => 40,  136 => 39,  130 => 38,  125 => 36,  120 => 33,  114 => 31,  112 => 30,  106 => 29,  101 => 27,  96 => 25,  91 => 23,  86 => 21,  82 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  57 => 12,  51 => 11,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
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
/*     <div id="content" class="{{ class }}">*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {{ content_top }}*/
/*       <div class="content">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*           <fieldset>*/
/*             <legend>{{ text_your_details }}</legend>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-firstname">{{ entry_firstname }} </label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="firstname" value="{{ firstname }}" placeholder="{{ entry_firstname }}" id="input-firstname" class="form-control"/>*/
/*                 {% if error_firstname %}*/
/*                   <div class="text-danger">{{ error_firstname }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="text" name="lastname" value="{{ lastname }}" placeholder="{{ entry_lastname }}" id="input-lastname" class="form-control"/>*/
/*                 {% if error_lastname %}*/
/*                   <div class="text-danger">{{ error_lastname }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="email" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control"/>*/
/*                 {% if error_email %}*/
/*                   <div class="text-danger">{{ error_email }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-telephone">{{ entry_telephone }}</label>*/
/*               <div class="col-sm-10">*/
/*                 <input type="tel" name="telephone" value="{{ telephone }}" placeholder="{{ entry_telephone }}" id="input-telephone" class="form-control"/>*/
/*                 {% if error_telephone %}*/
/*                   <div class="text-danger">{{ error_telephone }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*             {% for custom_field in custom_fields %}*/
/*               {% if custom_field.type == 'select' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <select name="custom_field[{{ custom_field.custom_field_id }}]" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*                       <option value="">{{ text_select }}</option>*/
/*                       {% for custom_field_value in custom_field.custom_field_value %}*/
/*                         {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                           <option value="{{ custom_field_value.custom_field_value_id }}" selected="selected">{{ custom_field_value.name }}</option>*/
/*                         {% else %}*/
/*                           <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'radio' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div>*/
/*                       {% for custom_field_value in custom_field.custom_field_value %}*/
/*                         <div class="radio">*/
/*                           {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id == account_custom_field[custom_field.custom_field_id] %}*/
/*                             <label>*/
/*                               <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked"/>*/
/*                               {{ custom_field_value.name }}</label>*/
/*                           {% else %}*/
/*                             <label>*/
/*                               <input type="radio" name="custom_field[{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/*                               {{ custom_field_value.name }}</label>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'checkbox' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div>*/
/*                       {% for custom_field_value in custom_field.custom_field_value %}*/
/*                         <div class="checkbox">*/
/*                           {% if account_custom_field[custom_field.custom_field_id] and custom_field_value.custom_field_value_id in account_custom_field[custom_field.custom_field_id] %}*/
/*                             <label>*/
/*                               <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" checked="checked"/>*/
/*                               {{ custom_field_value.name }}</label>*/
/*                           {% else %}*/
/*                             <label>*/
/*                               <input type="checkbox" name="custom_field[{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}"/>*/
/*                               {{ custom_field_value.name }}</label>*/
/*                           {% endif %}*/
/*                         </div>*/
/*                       {% endfor %}*/
/*                     </div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'text' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'textarea' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <textarea name="custom_field[{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control">{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}</textarea>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'file' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <button type="button" id="button-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default button"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                     <input type="hidden" name="custom_field[{{ custom_field.custom_field_id }}]" value="{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }} {% endif %}"/>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'date' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group date">*/
/*                       <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'time' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group time">*/
/*                       <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if custom_field.type == 'time' %}*/
/*                 <div class="form-group{% if custom_field.required %} required {% endif %} custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*                   <label class="col-sm-2 control-label" for="input-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*                   <div class="col-sm-10">*/
/*                     <div class="input-group datetime">*/
/*                       <input type="text" name="custom_field[{{ custom_field.custom_field_id }}]" value="{% if account_custom_field[custom_field.custom_field_id] %}{{ account_custom_field[custom_field.custom_field_id] }}{% else %}{{ custom_field.value }}{% endif %}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field{{ custom_field.custom_field_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     {% if error_custom_field[custom_field.custom_field_id] %}*/
/*                       <div class="text-danger">{{ error_custom_field[custom_field.custom_field_id] }}</div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*             {% endfor %}*/
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
/*     if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('.form-group').length) {*/
/*       $('.form-group').eq($(this).attr('data-sort')).before(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') > $('.form-group').length) {*/
/*       $('.form-group:last').after(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') == $('.form-group').length) {*/
/*       $('.form-group:last').after(this);*/
/*     }*/
/* */
/*     if ($(this).attr('data-sort') < -$('.form-group').length) {*/
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
/* {{ footer }}*/
/* */
