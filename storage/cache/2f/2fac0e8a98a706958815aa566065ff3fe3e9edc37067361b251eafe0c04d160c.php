<?php

/* journal2/template/account/register.twig */
class __TwigTemplate_efec3952d61c5839bb6a92307daa33db47de9c8e305da6d3a20afcc6afdab8fe extends Twig_Template
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
        echo "<!--catalog/view/theme/journal2/template/account  -->
";
        // line 2
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
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
        // line 8
        echo "  </ul>
  ";
        // line 9
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 10
            echo "    <div class=\"alert alert-danger warning\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 12
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 13
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 14
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 15
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 16
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 17
            echo "    ";
        } else {
            // line 18
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
      <h1 class=\"heading-title\">";
        // line 21
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 22
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <p class=\"account-text\">";
        // line 23
        echo (isset($context["text_account_already"]) ? $context["text_account_already"] : null);
        echo "</p>
      <div class=\"content\">
        <form action=\"";
        // line 25
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
          <fieldset id=\"account\">
            <legend>";
        // line 27
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</legend>
            <div class=\"form-group required\" style=\"display: ";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
              <label class=\"col-sm-2 control-label\">";
        // line 29
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
              <div class=\"col-sm-10\">";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 31
            echo "                  ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 32
                echo "                    <div class=\"radio\">
                      <label>
                        <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 34
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\"/>
                        ";
                // line 35
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
                    </div>
                  ";
            } else {
                // line 38
                echo "                    <div class=\"radio\">
                      <label>
                        <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 40
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\"/>
                        ";
                // line 41
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
                    </div>
                  ";
            }
            // line 44
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-firstname\">";
        // line 47
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"text\" name=\"firstname\" value=\"";
        // line 49
        echo (isset($context["firstname"]) ? $context["firstname"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
                ";
        // line 50
        if ((isset($context["error_firstname"]) ? $context["error_firstname"] : null)) {
            // line 51
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_firstname"]) ? $context["error_firstname"] : null);
            echo "</div>
                ";
        }
        // line 52
        echo " </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-lastname\">";
        // line 55
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
             <select>

                <option value =\"man\">男士</option>
                <option value =\"woman\">女士</option>
             </select>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 63
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"email\" name=\"email\" value=\"";
        // line 65
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                ";
        // line 66
        if ((isset($context["error_email"]) ? $context["error_email"] : null)) {
            // line 67
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_email"]) ? $context["error_email"] : null);
            echo "</div>
                ";
        }
        // line 68
        echo " </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-telephone\">";
        // line 71
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"tel\" name=\"telephone\" value=\"";
        // line 73
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-telephone\" class=\"form-control\"/>
                ";
        // line 74
        if ((isset($context["error_telephone"]) ? $context["error_telephone"] : null)) {
            // line 75
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_telephone"]) ? $context["error_telephone"] : null);
            echo "</div>
                ";
        }
        // line 76
        echo " </div>
            </div>
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 79
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                // line 80
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 81
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"custom_field[";
                // line 83
                echo $this->getAttribute($context["custom_field"], "location", array());
                echo "][";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "]\" id=\"input-custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-control\">
                      <option value=\"\">";
                // line 84
                echo (isset($context["text_select"]) ? $context["text_select"] : null);
                echo "</option>


                      ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 88
                    echo "                        ";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 89
                        echo "



                          <option value=\"";
                        // line 93
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" selected=\"selected\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>





                        ";
                    } else {
                        // line 100
                        echo "




                          <option value=\"";
                        // line 105
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>





                        ";
                    }
                    // line 112
                    echo "                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "

                    </select>
                    ";
                // line 116
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 117
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 118
                echo "</div>
                </div>
              ";
            }
            // line 121
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                // line 122
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\">";
                // line 123
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                // line 125
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 126
                    echo "                        <div class=\"radio\">";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && ($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()) == $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 127
                        echo "                            <label>
                              <input type=\"radio\" name=\"custom_field[";
                        // line 128
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\"/>
                              ";
                        // line 129
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                          ";
                    } else {
                        // line 131
                        echo "                            <label>
                              <input type=\"radio\" name=\"custom_field[";
                        // line 132
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"/>
                              ";
                        // line 133
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                          ";
                    }
                    // line 134
                    echo " </div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo " </div>
                    ";
                // line 136
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 137
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 138
                echo "</div>
                </div>
              ";
            }
            // line 141
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                // line 142
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\">";
                // line 143
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div> ";
                // line 145
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 146
                    echo "                        <div class=\"checkbox\">";
                    if (($this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array") && twig_in_filter($this->getAttribute($context["custom_field_value"], "custom_field_value_id", array()), $this->getAttribute((isset($context["register_custom_field"]) ? $context["register_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")))) {
                        // line 147
                        echo "                            <label>
                              <input type=\"checkbox\" name=\"custom_field[";
                        // line 148
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" checked=\"checked\"/>
                              ";
                        // line 149
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                          ";
                    } else {
                        // line 151
                        echo "                            <label>
                              <input type=\"checkbox\" name=\"custom_field[";
                        // line 152
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\"/>
                              ";
                        // line 153
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
                          ";
                    }
                    // line 154
                    echo " </div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                echo " </div>
                    ";
                // line 156
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 157
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 158
                echo " </div>
                </div>
              ";
            }
            // line 161
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                // line 162
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 163
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"custom_field[";
                // line 165
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
                // line 166
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 167
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 168
                echo " </div>
                </div>
              ";
            }
            // line 171
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                // line 172
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 173
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"custom_field[";
                // line 175
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
                // line 176
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 177
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 178
                echo " </div>
                </div>
              ";
            }
            // line 181
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                // line 182
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\">";
                // line 183
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <button type=\"button\" id=\"button-custom-field";
                // line 185
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" data-loading-text=\"";
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-default button\"><i class=\"fa fa-upload\"></i> ";
                echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                echo "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                // line 186
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
                // line 187
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 188
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 189
                echo "</div>
                </div>
              ";
            }
            // line 192
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                // line 193
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 194
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"custom_field[";
                // line 197
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
                // line 201
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 202
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 203
                echo " </div>
                </div>
              ";
            }
            // line 206
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 207
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 208
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"custom_field[";
                // line 211
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
                // line 215
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 216
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 217
                echo " </div>
                </div>
              ";
            }
            // line 220
            echo "              ";
            if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                // line 221
                echo "                <div id=\"custom-field";
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\" class=\"form-group custom-field\" data-sort=\"";
                echo $this->getAttribute($context["custom_field"], "sort_order", array());
                echo "\">
                  <label class=\"col-sm-2 control-label\" for=\"input-custom-field";
                // line 222
                echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                echo "\">";
                echo $this->getAttribute($context["custom_field"], "name", array());
                echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"custom_field[";
                // line 225
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
                // line 229
                if ($this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array")) {
                    // line 230
                    echo "                      <div class=\"text-danger\">";
                    echo $this->getAttribute((isset($context["error_custom_field"]) ? $context["error_custom_field"] : null), $this->getAttribute($context["custom_field"], "custom_field_id", array()), array(), "array");
                    echo "</div>
                    ";
                }
                // line 231
                echo " </div>
                </div>
              ";
            }
            // line 234
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo "          </fieldset>
          <fieldset>
            <legend>";
        // line 237
        echo (isset($context["text_your_password"]) ? $context["text_your_password"] : null);
        echo "</legend>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-password\">";
        // line 239
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"password\" name=\"password\" value=\"";
        // line 241
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                ";
        // line 242
        if ((isset($context["error_password"]) ? $context["error_password"] : null)) {
            // line 243
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_password"]) ? $context["error_password"] : null);
            echo "</div>
                ";
        }
        // line 244
        echo " </div>
            </div>
            <div class=\"form-group required\">
              <label class=\"col-sm-2 control-label\" for=\"input-confirm\">";
        // line 247
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"password\" name=\"confirm\" value=\"";
        // line 249
        echo (isset($context["confirm"]) ? $context["confirm"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
                ";
        // line 250
        if ((isset($context["error_confirm"]) ? $context["error_confirm"] : null)) {
            // line 251
            echo "                  <div class=\"text-danger\">";
            echo (isset($context["error_confirm"]) ? $context["error_confirm"] : null);
            echo "</div>
                ";
        }
        // line 252
        echo " </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 256
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</legend>
            <div class=\"form-group\">
              <label class=\"col-sm-2 control-label\">";
        // line 258
        echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
        echo "</label>
              <div class=\"col-sm-10\"> ";
        // line 259
        if ((isset($context["newsletter"]) ? $context["newsletter"] : null)) {
            // line 260
            echo "                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"newsletter\" value=\"1\" checked=\"checked\"/>
                    ";
            // line 262
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"newsletter\" value=\"0\"/>
                    ";
            // line 265
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                ";
        } else {
            // line 267
            echo "                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"newsletter\" value=\"1\"/>
                    ";
            // line 269
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "</label>
                  <label class=\"radio-inline\">
                    <input type=\"radio\" name=\"newsletter\" value=\"0\" checked=\"checked\"/>
                    ";
            // line 272
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "</label>
                ";
        }
        // line 273
        echo " </div>
            </div>
          </fieldset>
          ";
        // line 276
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "
          ";
        // line 277
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 278
            echo "            <div class=\"buttons\">
              <div class=\"pull-right\">";
            // line 279
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo "
                ";
            // line 280
            if ((isset($context["agree"]) ? $context["agree"] : null)) {
                // line 281
                echo "                  <input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\"/>
                ";
            } else {
                // line 283
                echo "                  <input type=\"checkbox\" name=\"agree\" value=\"1\"/>
                ";
            }
            // line 285
            echo "                &nbsp;
                <input type=\"submit\" value=\"";
            // line 286
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" class=\"btn btn-primary button\"/>
              </div>
            </div>
          ";
        } else {
            // line 290
            echo "            <div class=\"buttons\">
              <div class=\"pull-right\">
                <input type=\"submit\" value=\"";
            // line 292
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" class=\"btn btn-primary button\"/>
              </div>
            </div>
          ";
        }
        // line 296
        echo "        </form>
      </div>
      ";
        // line 298
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
";
        // line 417
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
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
        return array (  1073 => 417,  951 => 298,  947 => 296,  940 => 292,  936 => 290,  929 => 286,  926 => 285,  922 => 283,  918 => 281,  916 => 280,  912 => 279,  909 => 278,  907 => 277,  903 => 276,  898 => 273,  893 => 272,  887 => 269,  883 => 267,  878 => 265,  872 => 262,  868 => 260,  866 => 259,  862 => 258,  857 => 256,  851 => 252,  845 => 251,  843 => 250,  837 => 249,  832 => 247,  827 => 244,  821 => 243,  819 => 242,  813 => 241,  808 => 239,  803 => 237,  799 => 235,  793 => 234,  788 => 231,  782 => 230,  780 => 229,  761 => 225,  753 => 222,  746 => 221,  743 => 220,  738 => 217,  732 => 216,  730 => 215,  711 => 211,  703 => 208,  696 => 207,  693 => 206,  688 => 203,  682 => 202,  680 => 201,  661 => 197,  653 => 194,  646 => 193,  643 => 192,  638 => 189,  632 => 188,  630 => 187,  618 => 186,  610 => 185,  605 => 183,  598 => 182,  595 => 181,  590 => 178,  584 => 177,  582 => 176,  566 => 175,  559 => 173,  552 => 172,  549 => 171,  544 => 168,  538 => 167,  536 => 166,  520 => 165,  513 => 163,  506 => 162,  503 => 161,  498 => 158,  492 => 157,  490 => 156,  487 => 155,  480 => 154,  475 => 153,  467 => 152,  464 => 151,  459 => 149,  451 => 148,  448 => 147,  445 => 146,  441 => 145,  436 => 143,  429 => 142,  426 => 141,  421 => 138,  415 => 137,  413 => 136,  410 => 135,  403 => 134,  398 => 133,  390 => 132,  387 => 131,  382 => 129,  374 => 128,  371 => 127,  368 => 126,  364 => 125,  359 => 123,  352 => 122,  349 => 121,  344 => 118,  338 => 117,  336 => 116,  331 => 113,  325 => 112,  313 => 105,  306 => 100,  294 => 93,  288 => 89,  285 => 88,  281 => 87,  275 => 84,  267 => 83,  260 => 81,  253 => 80,  250 => 79,  246 => 78,  242 => 76,  236 => 75,  234 => 74,  228 => 73,  223 => 71,  218 => 68,  212 => 67,  210 => 66,  204 => 65,  199 => 63,  188 => 55,  183 => 52,  177 => 51,  175 => 50,  169 => 49,  164 => 47,  154 => 44,  148 => 41,  144 => 40,  140 => 38,  134 => 35,  130 => 34,  126 => 32,  123 => 31,  119 => 30,  115 => 29,  107 => 28,  103 => 27,  98 => 25,  93 => 23,  89 => 22,  85 => 21,  80 => 20,  77 => 19,  74 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  60 => 13,  54 => 12,  48 => 10,  46 => 9,  43 => 8,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <!--catalog/view/theme/journal2/template/account  -->*/
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
/*       <p class="account-text">{{ text_account_already }}</p>*/
/*       <div class="content">*/
/*         <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*           <fieldset id="account">*/
/*             <legend>{{ text_your_details }}</legend>*/
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
/*             <div class="form-group required">*/
/*               <label class="col-sm-2 control-label" for="input-lastname">{{ entry_lastname }}</label>*/
/*              <select>*/
/* */
/*                 <option value ="man">男士</option>*/
/*                 <option value ="woman">女士</option>*/
/*              </select>*/
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
/*             <legend>{{ text_your_password }}</legend>*/
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
/*           <fieldset>*/
/*             <legend>{{ text_newsletter }}</legend>*/
/*             <div class="form-group">*/
/*               <label class="col-sm-2 control-label">{{ entry_newsletter }}</label>*/
/*               <div class="col-sm-10"> {% if newsletter %}*/
/*                   <label class="radio-inline">*/
/*                     <input type="radio" name="newsletter" value="1" checked="checked"/>*/
/*                     {{ text_yes }}</label>*/
/*                   <label class="radio-inline">*/
/*                     <input type="radio" name="newsletter" value="0"/>*/
/*                     {{ text_no }}</label>*/
/*                 {% else %}*/
/*                   <label class="radio-inline">*/
/*                     <input type="radio" name="newsletter" value="1"/>*/
/*                     {{ text_yes }}</label>*/
/*                   <label class="radio-inline">*/
/*                     <input type="radio" name="newsletter" value="0" checked="checked"/>*/
/*                     {{ text_no }}</label>*/
/*                 {% endif %} </div>*/
/*             </div>*/
/*           </fieldset>*/
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
/* {{ footer }}*/
/* */
