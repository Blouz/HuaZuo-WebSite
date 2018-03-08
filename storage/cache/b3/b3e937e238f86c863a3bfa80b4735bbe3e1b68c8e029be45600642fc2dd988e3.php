<?php

/* extension/module/excelport/tab_export.twig */
class __TwigTemplate_291fb32807969bc7b3db4c418928ce0d1fc4bd832b2ef12ac1e7ef18631e6213 extends Twig_Template
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
        if ((isset($context["openstock_installed"]) ? $context["openstock_installed"] : null)) {
            // line 2
            echo "<div class=\"alert alert-success\">";
            echo (isset($context["openstock_installed"]) ? $context["openstock_installed"] : null);
            echo "</div>
";
        }
        // line 4
        echo "<table class=\"form\">
    <tr>
        <td>
            <div class=\"question\">";
        // line 7
        echo (isset($context["text_question_data"]) ? $context["text_question_data"] : null);
        echo " <a id=\"filter_popover\" rel=\"popover\" data-toggle=\"popover\" data-content=\"";
        echo (isset($context["text_toggle_filter"]) ? $context["text_toggle_filter"] : null);
        echo "\" class=\"btn btn-default btn ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "Filter", array())) ? ("active") : (""));
        echo "\"><i class=\"fa fa-filter\"></i></a></div>
            <input type=\"hidden\" id=\"toggle_filter\" name=\"ExcelPort[Export][Filter]\" value=\"";
        // line 8
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "Filter", array())) ? ("1") : ("0"));
        echo "\">
            <div class=\"option\">
            \t<input id=\"DataTypeProductsOption\" type=\"radio\" name=\"ExcelPort[Export][DataType]\" value=\"Products\" ";
        // line 10
        echo ((( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "DataType", array()) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "DataType", array()) == "Products"))) ? ("checked") : (""));
        echo " /><label for=\"DataTypeProductsOption\">";
        echo (isset($context["text_datatype_option_products"]) ? $context["text_datatype_option_products"] : null);
        echo "</label>
            </div>
            <div class=\"dataTypeFilter\" data-type=\"Products\">
            \t<table>
                \t<thead>
                    \t<tr>
                        \t<td colspan=\"2\">
                            \t";
        // line 17
        echo (isset($context["text_conjunction"]) ? $context["text_conjunction"] : null);
        echo " <select name=\"ExcelPort[Export][Filters][Products][Conjunction]\" class=\"conjunctionSelect\">
                                \t<option value=\"OR\">OR</option>
                                    <option value=\"AND\" ";
        // line 19
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "Filters", array()), "Products", array()), "Conjunction", array()) == "AND")) ? ("selected") : (""));
        echo ">AND</option>
                            \t</select> <a data-toggle=\"tooltip\" title=\"";
        // line 20
        echo (isset($context["help_conjunction"]) ? $context["help_conjunction"] : null);
        echo "\"><i class=\"icon-info-sign\"></i></a>
                            </td>
                        </tr>
                    </thead>
                \t<tbody>
                    \t
                    </tbody>
                    <tfoot>
                    \t<tr>
                        \t<td></td>
                            <td class=\"right\"><a class=\"btn btn-success addCondition\"><i class=\"icon-plus icon-white\"></i> ";
        // line 30
        echo (isset($context["button_add_condition"]) ? $context["button_add_condition"] : null);
        echo "</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class=\"option\">
            \t<input id=\"DataTypeCategoriesOption\" type=\"radio\" name=\"ExcelPort[Export][DataType]\" value=\"Categories\" ";
        // line 36
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "DataType", array()) == "Categories")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeCategoriesOption\">";
        echo (isset($context["text_datatype_option_categories"]) ? $context["text_datatype_option_categories"] : null);
        echo "</label>
            </div>
            <div class=\"dataTypeFilter\" data-type=\"Categories\">
            \t<table>
                \t<thead>
                    \t<tr>
                        \t<td colspan=\"2\">
                            \t";
        // line 43
        echo (isset($context["text_conjunction"]) ? $context["text_conjunction"] : null);
        echo " <select name=\"ExcelPort[Export][Filters][Categories][Conjunction]\" class=\"conjunctionSelect\">
                                \t<option value=\"OR\">OR</option>
                                    <option value=\"AND\" ";
        // line 45
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "Filters", array()), "Categories", array()), "Conjunction", array()) == "AND")) ? ("selected") : (""));
        echo ">AND</option>
                            \t</select> <a data-toggle=\"tooltip\" title=\"";
        // line 46
        echo (isset($context["help_conjunction"]) ? $context["help_conjunction"] : null);
        echo "\"><i class=\"icon-info-sign\"></i></a>
                            </td>
                        </tr>
                    </thead>
                \t<tbody>
                    \t
                    </tbody>
                    <tfoot>
                    \t<tr>
                        \t<td></td>
                            <td class=\"right\"><a class=\"btn btn-success addCondition\"><i class=\"icon-plus icon-white\"></i> ";
        // line 56
        echo (isset($context["button_add_condition"]) ? $context["button_add_condition"] : null);
        echo "</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class=\"option\">
            \t<input id=\"DataTypeOptionsOption\" type=\"radio\" name=\"ExcelPort[Export][DataType]\" value=\"Options\" ";
        // line 62
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "DataType", array()) == "Options")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeOptionsOption\">";
        echo (isset($context["text_datatype_option_options"]) ? $context["text_datatype_option_options"] : null);
        echo "</label>
            </div>
            <div class=\"dataTypeFilter\" data-type=\"Options\">
            \t<table>
                \t<thead>
                    \t<tr>
                        \t<td colspan=\"2\">
                            \t";
        // line 69
        echo (isset($context["text_conjunction"]) ? $context["text_conjunction"] : null);
        echo " <select name=\"ExcelPort[Export][Filters][Options][Conjunction]\" class=\"conjunctionSelect\">
                                \t<option value=\"OR\">OR</option>
                                    <option value=\"AND\" ";
        // line 71
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "Filters", array()), "Options", array()), "Conjunction", array()) == "AND")) ? ("selected") : (""));
        echo ">AND</option>
                            \t</select> <a data-toggle=\"tooltip\" title=\"";
        // line 72
        echo (isset($context["help_conjunction"]) ? $context["help_conjunction"] : null);
        echo "\"><i class=\"icon-info-sign\"></i></a>
                            </td>
                        </tr>
                    </thead>
                \t<tbody>
                    \t
                    </tbody>
                    <tfoot>
                    \t<tr>
                        \t<td></td>
                            <td class=\"right\"><a class=\"btn btn-success addCondition\"><i class=\"icon-plus icon-white\"></i> ";
        // line 82
        echo (isset($context["button_add_condition"]) ? $context["button_add_condition"] : null);
        echo "</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class=\"option\">
            \t<input id=\"DataTypeAttributesOption\" type=\"radio\" name=\"ExcelPort[Export][DataType]\" value=\"Attributes\" ";
        // line 88
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "DataType", array()) == "Attributes")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeAttributesOption\">";
        echo (isset($context["text_datatype_option_attributes"]) ? $context["text_datatype_option_attributes"] : null);
        echo "</label>
            </div>
        \t<div class=\"dataTypeFilter\" data-type=\"Attributes\">
            \t<table>
                \t<thead>
                    \t<tr>
                        \t<td colspan=\"2\">
                            \t";
        // line 95
        echo (isset($context["text_conjunction"]) ? $context["text_conjunction"] : null);
        echo " <select name=\"ExcelPort[Export][Filters][Attributes][Conjunction]\" class=\"conjunctionSelect\">
                                \t<option value=\"OR\">OR</option>
                                    <option value=\"AND\" ";
        // line 97
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "Filters", array()), "Attributes", array()), "Conjunction", array()) == "AND")) ? ("selected") : (""));
        echo ">AND</option>
                            \t</select> <a data-toggle=\"tooltip\" title=\"";
        // line 98
        echo (isset($context["help_conjunction"]) ? $context["help_conjunction"] : null);
        echo "\"><i class=\"icon-info-sign\"></i></a>
                            </td>
                        </tr>
                    </thead>
                \t<tbody>
                    \t
                    </tbody>
                    <tfoot>
                    \t<tr>
                        \t<td></td>
                            <td class=\"right\"><a class=\"btn btn-success addCondition\"><i class=\"icon-plus icon-white\"></i> ";
        // line 108
        echo (isset($context["button_add_condition"]) ? $context["button_add_condition"] : null);
        echo "</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class=\"option\">
            \t<input id=\"DataTypeCustomersOption\" type=\"radio\" name=\"ExcelPort[Export][DataType]\" value=\"Customers\" ";
        // line 114
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "DataType", array()) == "Customers")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeCustomersOption\">";
        echo (isset($context["text_datatype_option_customers"]) ? $context["text_datatype_option_customers"] : null);
        echo "</label>
            </div>
            <div class=\"dataTypeFilter\" data-type=\"Customers\">
            \t<table>
                \t<thead>
                    \t<tr>
                        \t<td colspan=\"2\">
                            \t";
        // line 121
        echo (isset($context["text_conjunction"]) ? $context["text_conjunction"] : null);
        echo " <select name=\"ExcelPort[Export][Filters][Customers][Conjunction]\" class=\"conjunctionSelect\">
                                \t<option value=\"OR\">OR</option>
                                    <option value=\"AND\" ";
        // line 123
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "Filters", array()), "Customers", array()), "Conjunction", array()) == "AND")) ? ("selected") : (""));
        echo ">AND</option>
                            \t</select> <a data-toggle=\"tooltip\" title=\"";
        // line 124
        echo (isset($context["help_conjunction"]) ? $context["help_conjunction"] : null);
        echo "\"><i class=\"icon-info-sign\"></i></a>
                            </td>
                        </tr>
                    </thead>
                \t<tbody>
                    \t
                    </tbody>
                    <tfoot>
                    \t<tr>
                        \t<td></td>
                            <td class=\"right\"><a class=\"btn btn-success addCondition\"><i class=\"icon-plus icon-white\"></i> ";
        // line 134
        echo (isset($context["button_add_condition"]) ? $context["button_add_condition"] : null);
        echo "</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class=\"option\">
            \t<input id=\"DataTypeCustomerGroupsOption\" type=\"radio\" name=\"ExcelPort[Export][DataType]\" value=\"CustomerGroups\" ";
        // line 140
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "DataType", array()) == "CustomerGroups")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeCustomerGroupsOption\">";
        echo (isset($context["text_datatype_option_customer_groups"]) ? $context["text_datatype_option_customer_groups"] : null);
        echo "</label>
            </div>
            <div class=\"dataTypeFilter\" data-type=\"CustomerGroups\">
            \t<table>
                \t<thead>
                    \t<tr>
                        \t<td colspan=\"2\">
                            \t";
        // line 147
        echo (isset($context["text_conjunction"]) ? $context["text_conjunction"] : null);
        echo " <select name=\"ExcelPort[Export][Filters][CustomerGroups][Conjunction]\" class=\"conjunctionSelect\">
                                \t<option value=\"OR\">OR</option>
                                    <option value=\"AND\" ";
        // line 149
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "Filters", array()), "CustomerGroups", array()), "Conjunction", array()) == "AND")) ? ("selected") : (""));
        echo ">AND</option>
                            \t</select> <a data-toggle=\"tooltip\" title=\"";
        // line 150
        echo (isset($context["help_conjunction"]) ? $context["help_conjunction"] : null);
        echo "\"><i class=\"icon-info-sign\"></i></a>
                            </td>
                        </tr>
                    </thead>
                \t<tbody>
                    \t
                    </tbody>
                    <tfoot>
                    \t<tr>
                        \t<td></td>
                            <td class=\"right\"><a class=\"btn btn-success addCondition\"><i class=\"icon-plus icon-white\"></i> ";
        // line 160
        echo (isset($context["button_add_condition"]) ? $context["button_add_condition"] : null);
        echo "</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class=\"option\">
            \t<input id=\"DataTypeOrdersOption\" type=\"radio\" name=\"ExcelPort[Export][DataType]\" value=\"Orders\" ";
        // line 166
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "DataType", array()) == "Orders")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeOrdersOption\">";
        echo (isset($context["text_datatype_option_orders"]) ? $context["text_datatype_option_orders"] : null);
        echo "</label>
            </div>
            <div class=\"dataTypeFilter\" data-type=\"Orders\">
            \t<table>
                \t<thead>
                    \t<tr>
                        \t<td colspan=\"2\">
                            \t";
        // line 173
        echo (isset($context["text_conjunction"]) ? $context["text_conjunction"] : null);
        echo " <select name=\"ExcelPort[Export][Filters][Orders][Conjunction]\" class=\"conjunctionSelect\">
                                \t<option value=\"OR\">OR</option>
                                    <option value=\"AND\" ";
        // line 175
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "Filters", array()), "Orders", array()), "Conjunction", array()) == "AND")) ? ("selected") : (""));
        echo ">AND</option>
                            \t</select> <a data-toggle=\"tooltip\" title=\"";
        // line 176
        echo (isset($context["help_conjunction"]) ? $context["help_conjunction"] : null);
        echo "\"><i class=\"icon-info-sign\"></i></a>
                            </td>
                        </tr>
                    </thead>
                \t<tbody>
                    \t
                    </tbody>
                    <tfoot>
                    \t<tr>
                        \t<td></td>
                            <td class=\"right\"><a class=\"btn btn-success addCondition\"><i class=\"icon-plus icon-white\"></i> ";
        // line 186
        echo (isset($context["button_add_condition"]) ? $context["button_add_condition"] : null);
        echo "</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class=\"option\">
                <input id=\"DataTypeManufacturersOption\" type=\"radio\" name=\"ExcelPort[Export][DataType]\" value=\"Manufacturers\" ";
        // line 192
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "DataType", array()) == "Manufacturers")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeManufacturersOption\">";
        echo (isset($context["text_datatype_option_manufacturers"]) ? $context["text_datatype_option_manufacturers"] : null);
        echo "</label>
            </div>
            <div class=\"dataTypeFilter\" data-type=\"Manufacturers\">
                <table>
                    <thead>
                        <tr>
                            <td colspan=\"2\">
                                ";
        // line 199
        echo (isset($context["text_conjunction"]) ? $context["text_conjunction"] : null);
        echo " <select name=\"ExcelPort[Export][Filters][Manufacturers][Conjunction]\" class=\"conjunctionSelect\">
                                    <option value=\"OR\">OR</option>
                                    <option value=\"AND\" ";
        // line 201
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "Filters", array()), "Manufacturers", array()), "Conjunction", array()) == "AND")) ? ("selected") : (""));
        echo ">AND</option>
                                </select> <a data-toggle=\"tooltip\" title=\"";
        // line 202
        echo (isset($context["help_conjunction"]) ? $context["help_conjunction"] : null);
        echo "\"><i class=\"icon-info-sign\"></i></a>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td class=\"right\"><a class=\"btn btn-success addCondition\"><i class=\"icon-plus icon-white\"></i> ";
        // line 212
        echo (isset($context["button_add_condition"]) ? $context["button_add_condition"] : null);
        echo "</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class=\"option\">
                <input id=\"DataTypeCouponsOption\" type=\"radio\" name=\"ExcelPort[Export][DataType]\" value=\"Coupons\" ";
        // line 219
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "DataType", array()) == "Coupons")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeCouponsOption\">";
        echo (isset($context["text_datatype_option_coupons"]) ? $context["text_datatype_option_coupons"] : null);
        echo "</label>
            </div>
            <div class=\"dataTypeFilter\" data-type=\"Coupons\">
                <table>
                    <thead>
                        <tr>
                            <td colspan=\"2\">
                                ";
        // line 226
        echo (isset($context["text_conjunction"]) ? $context["text_conjunction"] : null);
        echo " <select name=\"ExcelPort[Export][Filters][Coupons][Conjunction]\" class=\"conjunctionSelect\">
                                    <option value=\"OR\">OR</option>
                                    <option value=\"AND\" ";
        // line 228
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "Filters", array()), "Coupons", array()), "Conjunction", array()) == "AND")) ? ("selected") : (""));
        echo ">AND</option>
                                </select> <a data-toggle=\"tooltip\" title=\"";
        // line 229
        echo (isset($context["help_conjunction"]) ? $context["help_conjunction"] : null);
        echo "\"><i class=\"icon-info-sign\"></i></a>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td class=\"right\"><a class=\"btn btn-success addCondition\"><i class=\"icon-plus icon-white\"></i> ";
        // line 239
        echo (isset($context["button_add_condition"]) ? $context["button_add_condition"] : null);
        echo "</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class=\"option\">
                <input id=\"DataTypeVouchersOption\" type=\"radio\" name=\"ExcelPort[Export][DataType]\" value=\"Vouchers\" ";
        // line 246
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "DataType", array()) == "Vouchers")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeVouchersOption\">";
        echo (isset($context["text_datatype_option_vouchers"]) ? $context["text_datatype_option_vouchers"] : null);
        echo "</label>
            </div>
            <div class=\"dataTypeFilter\" data-type=\"Vouchers\">
                <table>
                    <thead>
                        <tr>
                            <td colspan=\"2\">
                                ";
        // line 253
        echo (isset($context["text_conjunction"]) ? $context["text_conjunction"] : null);
        echo " <select name=\"ExcelPort[Export][Filters][Vouchers][Conjunction]\" class=\"conjunctionSelect\">
                                    <option value=\"OR\">OR</option>
                                    <option value=\"AND\" ";
        // line 255
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "Filters", array()), "Vouchers", array()), "Conjunction", array()) == "AND")) ? ("selected") : (""));
        echo ">AND</option>
                                </select> <a data-toggle=\"tooltip\" title=\"";
        // line 256
        echo (isset($context["help_conjunction"]) ? $context["help_conjunction"] : null);
        echo "\"><i class=\"icon-info-sign\"></i></a>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td class=\"right\"><a class=\"btn btn-success addCondition\"><i class=\"icon-plus icon-white\"></i> ";
        // line 266
        echo (isset($context["button_add_condition"]) ? $context["button_add_condition"] : null);
        echo "</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            
            <div data-depends-on=\"#DataTypeProductsOption, #DataTypeCategoriesOption, #DataTypeCustomersOption, #DataTypeManufacturersOption\" class=\"question\">";
        // line 272
        echo (isset($context["text_question_store"]) ? $context["text_question_store"] : null);
        echo "</div>
            <div data-depends-on=\"#DataTypeProductsOption, #DataTypeCategoriesOption, #DataTypeCustomersOption, #DataTypeManufacturersOption\" class=\"option\">
            \t<input id=\"Store0Option\" type=\"radio\" name=\"ExcelPort[Export][Store]\" value=\"0\" ";
        // line 274
        echo (( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "Store", array())) ? ("checked") : (""));
        echo " /><label for=\"Store0Option\">";
        echo (isset($context["default_store_name"]) ? $context["default_store_name"] : null);
        echo "</label>
            </div>
            ";
        // line 276
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 277
            echo "            <div data-depends-on=\"#DataTypeProductsOption, #DataTypeCategoriesOption, #DataTypeCustomersOption, #DataTypeManufacturersOption\" class=\"option\">
            \t<input id=\"Store";
            // line 278
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "Option\" type=\"radio\" name=\"ExcelPort[Export][Store]\" value=\"";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "\" ";
            echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "Store", array()) == $this->getAttribute($context["store"], "store_id", array()))) ? ("checked") : (""));
            echo "/><label for=\"Store";
            echo $this->getAttribute($context["store"], "store_id", array());
            echo "Option\">";
            echo $this->getAttribute($context["store"], "name", array());
            echo "</label>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 281
        echo "            
            <div data-depends-on=\"#DataTypeProductsOption, #DataTypeCategoriesOption, #DataTypeOptionsOption, #DataTypeAttributesOption, #DataTypeCustomersOption, #DataTypeCustomerGroupsOption, #DataTypeManufacturersOption\" class=\"question\">";
        // line 282
        echo (isset($context["text_question_language"]) ? $context["text_question_language"] : null);
        echo "</div>

            ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 285
            echo "            <div data-depends-on=\"#DataTypeProductsOption, #DataTypeCategoriesOption, #DataTypeOptionsOption, #DataTypeAttributesOption, #DataTypeCustomersOption, #DataTypeCustomerGroupsOption, #DataTypeManufacturersOption\" class=\"option\">
            \t<input id=\"Language";
            // line 286
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "Option\" type=\"radio\" name=\"ExcelPort[Export][Language]\" value=\"";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" ";
            echo (((( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "Language", array()) && ($this->getAttribute($context["loop"], "index0", array()) == 0)) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "Language", array()) == $this->getAttribute($context["language"], "language_id", array())))) ? ("checked") : (""));
            echo " /><label for=\"Language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "Option\">";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</label>
            </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "            
            <div class=\"question\" data-depends-on=\"#DataTypeProductsOption\">
                <p>";
        // line 291
        echo (isset($context["text_question_product_type"]) ? $context["text_question_product_type"] : null);
        echo "</p>
            </div>
            <div class=\"question\" data-depends-on=\"#DataTypeProductsOption\">
                <input type=\"radio\" name=\"ExcelPort[Export][ProductExportMode]\" ";
        // line 294
        echo ((( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "ProductExportMode", array()) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "ProductExportMode", array()) == "0"))) ? ("checked") : (""));
        echo " value=\"0\" id=\"radioBulkExport\" /><label for=\"radioBulkExport\">";
        echo (isset($context["text_question_product_type_bulk"]) ? $context["text_question_product_type_bulk"] : null);
        echo "</label>
            </div>
            <div class=\"question\" data-depends-on=\"#DataTypeProductsOption\">
                <input type=\"radio\" name=\"ExcelPort[Export][ProductExportMode]\" ";
        // line 297
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "ProductExportMode", array()) == "2")) ? ("checked") : (""));
        echo " value=\"2\" id=\"radioFullExport\" /><label for=\"radioFullExport\">";
        echo (isset($context["text_question_product_type_full"]) ? $context["text_question_product_type_full"] : null);
        echo "</label>
            </div>
            <div class=\"question\" data-depends-on=\"#DataTypeProductsOption\">
                <input type=\"radio\" name=\"ExcelPort[Export][ProductExportMode]\" ";
        // line 300
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Export", array()), "ProductExportMode", array()) == "1")) ? ("checked") : (""));
        echo " value=\"1\" id=\"radioQuickExport\" /><label for=\"radioQuickExport\">";
        echo (isset($context["text_question_product_type_quick"]) ? $context["text_question_product_type_quick"] : null);
        echo "</label>
            </div>
        </td>  
    </tr>
    <tr>
        <td>
        \t<div>
        \t\t<a data-action=\"export\" class=\"btn btn-success continueAction ExcelPortSubmitButton\">";
        // line 307
        echo (isset($context["button_export"]) ? $context["button_export"] : null);
        echo "</a>
            </div>
\t\t\t<div class=\"help\"><strong>";
        // line 309
        echo (isset($context["text_note"]) ? $context["text_note"] : null);
        echo "</strong> ";
        echo (isset($context["text_supported_in_oc1541"]) ? $context["text_supported_in_oc1541"] : null);
        echo " <a class='needMoreSize' href=\"javascript:void(0)\"><i class=\"fa fa-external-link\"></i> ";
        echo (isset($context["text_learn_to_increase"]) ? $context["text_learn_to_increase"] : null);
        echo "</a></div>
        </td>  
    </tr>
</table>";
    }

    public function getTemplateName()
    {
        return "extension/module/excelport/tab_export.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  609 => 309,  604 => 307,  592 => 300,  584 => 297,  576 => 294,  570 => 291,  566 => 289,  541 => 286,  538 => 285,  521 => 284,  516 => 282,  513 => 281,  496 => 278,  493 => 277,  489 => 276,  482 => 274,  477 => 272,  468 => 266,  455 => 256,  451 => 255,  446 => 253,  434 => 246,  424 => 239,  411 => 229,  407 => 228,  402 => 226,  390 => 219,  380 => 212,  367 => 202,  363 => 201,  358 => 199,  346 => 192,  337 => 186,  324 => 176,  320 => 175,  315 => 173,  303 => 166,  294 => 160,  281 => 150,  277 => 149,  272 => 147,  260 => 140,  251 => 134,  238 => 124,  234 => 123,  229 => 121,  217 => 114,  208 => 108,  195 => 98,  191 => 97,  186 => 95,  174 => 88,  165 => 82,  152 => 72,  148 => 71,  143 => 69,  131 => 62,  122 => 56,  109 => 46,  105 => 45,  100 => 43,  88 => 36,  79 => 30,  66 => 20,  62 => 19,  57 => 17,  45 => 10,  40 => 8,  32 => 7,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if openstock_installed %}*/
/* <div class="alert alert-success">{{ openstock_installed }}</div>*/
/* {% endif %}*/
/* <table class="form">*/
/*     <tr>*/
/*         <td>*/
/*             <div class="question">{{ text_question_data }} <a id="filter_popover" rel="popover" data-toggle="popover" data-content="{{ text_toggle_filter }}" class="btn btn-default btn {{ data.ExcelPort.Export.Filter ? 'active' }}"><i class="fa fa-filter"></i></a></div>*/
/*             <input type="hidden" id="toggle_filter" name="ExcelPort[Export][Filter]" value="{{ data.ExcelPort.Export.Filter ? '1' : '0' }}">*/
/*             <div class="option">*/
/*             	<input id="DataTypeProductsOption" type="radio" name="ExcelPort[Export][DataType]" value="Products" {{ not data.ExcelPort.Export.DataType or data.ExcelPort.Export.DataType == 'Products' ? 'checked' : '' }} /><label for="DataTypeProductsOption">{{ text_datatype_option_products }}</label>*/
/*             </div>*/
/*             <div class="dataTypeFilter" data-type="Products">*/
/*             	<table>*/
/*                 	<thead>*/
/*                     	<tr>*/
/*                         	<td colspan="2">*/
/*                             	{{ text_conjunction }} <select name="ExcelPort[Export][Filters][Products][Conjunction]" class="conjunctionSelect">*/
/*                                 	<option value="OR">OR</option>*/
/*                                     <option value="AND" {{ data.ExcelPort.Export.Filters.Products.Conjunction == 'AND' ? 'selected' : '' }}>AND</option>*/
/*                             	</select> <a data-toggle="tooltip" title="{{ help_conjunction }}"><i class="icon-info-sign"></i></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </thead>*/
/*                 	<tbody>*/
/*                     	*/
/*                     </tbody>*/
/*                     <tfoot>*/
/*                     	<tr>*/
/*                         	<td></td>*/
/*                             <td class="right"><a class="btn btn-success addCondition"><i class="icon-plus icon-white"></i> {{ button_add_condition }}</a></td>*/
/*                         </tr>*/
/*                     </tfoot>*/
/*                 </table>*/
/*             </div>*/
/*             <div class="option">*/
/*             	<input id="DataTypeCategoriesOption" type="radio" name="ExcelPort[Export][DataType]" value="Categories" {{ data.ExcelPort.Export.DataType == 'Categories' ? 'checked' : '' }} /><label for="DataTypeCategoriesOption">{{ text_datatype_option_categories }}</label>*/
/*             </div>*/
/*             <div class="dataTypeFilter" data-type="Categories">*/
/*             	<table>*/
/*                 	<thead>*/
/*                     	<tr>*/
/*                         	<td colspan="2">*/
/*                             	{{ text_conjunction }} <select name="ExcelPort[Export][Filters][Categories][Conjunction]" class="conjunctionSelect">*/
/*                                 	<option value="OR">OR</option>*/
/*                                     <option value="AND" {{ data.ExcelPort.Export.Filters.Categories.Conjunction == 'AND' ? 'selected' : '' }}>AND</option>*/
/*                             	</select> <a data-toggle="tooltip" title="{{ help_conjunction }}"><i class="icon-info-sign"></i></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </thead>*/
/*                 	<tbody>*/
/*                     	*/
/*                     </tbody>*/
/*                     <tfoot>*/
/*                     	<tr>*/
/*                         	<td></td>*/
/*                             <td class="right"><a class="btn btn-success addCondition"><i class="icon-plus icon-white"></i> {{ button_add_condition }}</a></td>*/
/*                         </tr>*/
/*                     </tfoot>*/
/*                 </table>*/
/*             </div>*/
/*             <div class="option">*/
/*             	<input id="DataTypeOptionsOption" type="radio" name="ExcelPort[Export][DataType]" value="Options" {{ data.ExcelPort.Export.DataType == 'Options' ? 'checked' : '' }} /><label for="DataTypeOptionsOption">{{ text_datatype_option_options }}</label>*/
/*             </div>*/
/*             <div class="dataTypeFilter" data-type="Options">*/
/*             	<table>*/
/*                 	<thead>*/
/*                     	<tr>*/
/*                         	<td colspan="2">*/
/*                             	{{ text_conjunction }} <select name="ExcelPort[Export][Filters][Options][Conjunction]" class="conjunctionSelect">*/
/*                                 	<option value="OR">OR</option>*/
/*                                     <option value="AND" {{ data.ExcelPort.Export.Filters.Options.Conjunction == 'AND' ? 'selected' : '' }}>AND</option>*/
/*                             	</select> <a data-toggle="tooltip" title="{{ help_conjunction }}"><i class="icon-info-sign"></i></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </thead>*/
/*                 	<tbody>*/
/*                     	*/
/*                     </tbody>*/
/*                     <tfoot>*/
/*                     	<tr>*/
/*                         	<td></td>*/
/*                             <td class="right"><a class="btn btn-success addCondition"><i class="icon-plus icon-white"></i> {{ button_add_condition }}</a></td>*/
/*                         </tr>*/
/*                     </tfoot>*/
/*                 </table>*/
/*             </div>*/
/*             <div class="option">*/
/*             	<input id="DataTypeAttributesOption" type="radio" name="ExcelPort[Export][DataType]" value="Attributes" {{ data.ExcelPort.Export.DataType == 'Attributes' ? 'checked' : '' }} /><label for="DataTypeAttributesOption">{{ text_datatype_option_attributes }}</label>*/
/*             </div>*/
/*         	<div class="dataTypeFilter" data-type="Attributes">*/
/*             	<table>*/
/*                 	<thead>*/
/*                     	<tr>*/
/*                         	<td colspan="2">*/
/*                             	{{ text_conjunction }} <select name="ExcelPort[Export][Filters][Attributes][Conjunction]" class="conjunctionSelect">*/
/*                                 	<option value="OR">OR</option>*/
/*                                     <option value="AND" {{ data.ExcelPort.Export.Filters.Attributes.Conjunction == 'AND' ? 'selected' : '' }}>AND</option>*/
/*                             	</select> <a data-toggle="tooltip" title="{{ help_conjunction }}"><i class="icon-info-sign"></i></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </thead>*/
/*                 	<tbody>*/
/*                     	*/
/*                     </tbody>*/
/*                     <tfoot>*/
/*                     	<tr>*/
/*                         	<td></td>*/
/*                             <td class="right"><a class="btn btn-success addCondition"><i class="icon-plus icon-white"></i> {{ button_add_condition }}</a></td>*/
/*                         </tr>*/
/*                     </tfoot>*/
/*                 </table>*/
/*             </div>*/
/*             <div class="option">*/
/*             	<input id="DataTypeCustomersOption" type="radio" name="ExcelPort[Export][DataType]" value="Customers" {{ data.ExcelPort.Export.DataType == 'Customers' ? 'checked' : '' }} /><label for="DataTypeCustomersOption">{{ text_datatype_option_customers }}</label>*/
/*             </div>*/
/*             <div class="dataTypeFilter" data-type="Customers">*/
/*             	<table>*/
/*                 	<thead>*/
/*                     	<tr>*/
/*                         	<td colspan="2">*/
/*                             	{{ text_conjunction }} <select name="ExcelPort[Export][Filters][Customers][Conjunction]" class="conjunctionSelect">*/
/*                                 	<option value="OR">OR</option>*/
/*                                     <option value="AND" {{ data.ExcelPort.Export.Filters.Customers.Conjunction == 'AND' ? 'selected' : '' }}>AND</option>*/
/*                             	</select> <a data-toggle="tooltip" title="{{ help_conjunction }}"><i class="icon-info-sign"></i></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </thead>*/
/*                 	<tbody>*/
/*                     	*/
/*                     </tbody>*/
/*                     <tfoot>*/
/*                     	<tr>*/
/*                         	<td></td>*/
/*                             <td class="right"><a class="btn btn-success addCondition"><i class="icon-plus icon-white"></i> {{ button_add_condition }}</a></td>*/
/*                         </tr>*/
/*                     </tfoot>*/
/*                 </table>*/
/*             </div>*/
/*             <div class="option">*/
/*             	<input id="DataTypeCustomerGroupsOption" type="radio" name="ExcelPort[Export][DataType]" value="CustomerGroups" {{ data.ExcelPort.Export.DataType == 'CustomerGroups' ? 'checked' : '' }} /><label for="DataTypeCustomerGroupsOption">{{ text_datatype_option_customer_groups }}</label>*/
/*             </div>*/
/*             <div class="dataTypeFilter" data-type="CustomerGroups">*/
/*             	<table>*/
/*                 	<thead>*/
/*                     	<tr>*/
/*                         	<td colspan="2">*/
/*                             	{{ text_conjunction }} <select name="ExcelPort[Export][Filters][CustomerGroups][Conjunction]" class="conjunctionSelect">*/
/*                                 	<option value="OR">OR</option>*/
/*                                     <option value="AND" {{ data.ExcelPort.Export.Filters.CustomerGroups.Conjunction == 'AND' ? 'selected' : '' }}>AND</option>*/
/*                             	</select> <a data-toggle="tooltip" title="{{ help_conjunction }}"><i class="icon-info-sign"></i></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </thead>*/
/*                 	<tbody>*/
/*                     	*/
/*                     </tbody>*/
/*                     <tfoot>*/
/*                     	<tr>*/
/*                         	<td></td>*/
/*                             <td class="right"><a class="btn btn-success addCondition"><i class="icon-plus icon-white"></i> {{ button_add_condition }}</a></td>*/
/*                         </tr>*/
/*                     </tfoot>*/
/*                 </table>*/
/*             </div>*/
/*             <div class="option">*/
/*             	<input id="DataTypeOrdersOption" type="radio" name="ExcelPort[Export][DataType]" value="Orders" {{ data.ExcelPort.Export.DataType == 'Orders' ? 'checked' : '' }} /><label for="DataTypeOrdersOption">{{ text_datatype_option_orders }}</label>*/
/*             </div>*/
/*             <div class="dataTypeFilter" data-type="Orders">*/
/*             	<table>*/
/*                 	<thead>*/
/*                     	<tr>*/
/*                         	<td colspan="2">*/
/*                             	{{ text_conjunction }} <select name="ExcelPort[Export][Filters][Orders][Conjunction]" class="conjunctionSelect">*/
/*                                 	<option value="OR">OR</option>*/
/*                                     <option value="AND" {{ data.ExcelPort.Export.Filters.Orders.Conjunction == 'AND' ? 'selected' : '' }}>AND</option>*/
/*                             	</select> <a data-toggle="tooltip" title="{{ help_conjunction }}"><i class="icon-info-sign"></i></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </thead>*/
/*                 	<tbody>*/
/*                     	*/
/*                     </tbody>*/
/*                     <tfoot>*/
/*                     	<tr>*/
/*                         	<td></td>*/
/*                             <td class="right"><a class="btn btn-success addCondition"><i class="icon-plus icon-white"></i> {{ button_add_condition }}</a></td>*/
/*                         </tr>*/
/*                     </tfoot>*/
/*                 </table>*/
/*             </div>*/
/*             <div class="option">*/
/*                 <input id="DataTypeManufacturersOption" type="radio" name="ExcelPort[Export][DataType]" value="Manufacturers" {{ data.ExcelPort.Export.DataType == 'Manufacturers' ? 'checked' : '' }} /><label for="DataTypeManufacturersOption">{{ text_datatype_option_manufacturers }}</label>*/
/*             </div>*/
/*             <div class="dataTypeFilter" data-type="Manufacturers">*/
/*                 <table>*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <td colspan="2">*/
/*                                 {{ text_conjunction }} <select name="ExcelPort[Export][Filters][Manufacturers][Conjunction]" class="conjunctionSelect">*/
/*                                     <option value="OR">OR</option>*/
/*                                     <option value="AND" {{ data.ExcelPort.Export.Filters.Manufacturers.Conjunction == 'AND' ? 'selected' : '' }}>AND</option>*/
/*                                 </select> <a data-toggle="tooltip" title="{{ help_conjunction }}"><i class="icon-info-sign"></i></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         */
/*                     </tbody>*/
/*                     <tfoot>*/
/*                         <tr>*/
/*                             <td></td>*/
/*                             <td class="right"><a class="btn btn-success addCondition"><i class="icon-plus icon-white"></i> {{ button_add_condition }}</a></td>*/
/*                         </tr>*/
/*                     </tfoot>*/
/*                 </table>*/
/*             </div>*/
/* */
/*             <div class="option">*/
/*                 <input id="DataTypeCouponsOption" type="radio" name="ExcelPort[Export][DataType]" value="Coupons" {{ data.ExcelPort.Export.DataType == 'Coupons' ? 'checked' : '' }} /><label for="DataTypeCouponsOption">{{ text_datatype_option_coupons }}</label>*/
/*             </div>*/
/*             <div class="dataTypeFilter" data-type="Coupons">*/
/*                 <table>*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <td colspan="2">*/
/*                                 {{ text_conjunction }} <select name="ExcelPort[Export][Filters][Coupons][Conjunction]" class="conjunctionSelect">*/
/*                                     <option value="OR">OR</option>*/
/*                                     <option value="AND" {{ data.ExcelPort.Export.Filters.Coupons.Conjunction == 'AND' ? 'selected' : '' }}>AND</option>*/
/*                                 </select> <a data-toggle="tooltip" title="{{ help_conjunction }}"><i class="icon-info-sign"></i></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         */
/*                     </tbody>*/
/*                     <tfoot>*/
/*                         <tr>*/
/*                             <td></td>*/
/*                             <td class="right"><a class="btn btn-success addCondition"><i class="icon-plus icon-white"></i> {{ button_add_condition }}</a></td>*/
/*                         </tr>*/
/*                     </tfoot>*/
/*                 </table>*/
/*             </div>*/
/* */
/*             <div class="option">*/
/*                 <input id="DataTypeVouchersOption" type="radio" name="ExcelPort[Export][DataType]" value="Vouchers" {{ data.ExcelPort.Export.DataType == 'Vouchers' ? 'checked' : '' }} /><label for="DataTypeVouchersOption">{{ text_datatype_option_vouchers }}</label>*/
/*             </div>*/
/*             <div class="dataTypeFilter" data-type="Vouchers">*/
/*                 <table>*/
/*                     <thead>*/
/*                         <tr>*/
/*                             <td colspan="2">*/
/*                                 {{ text_conjunction }} <select name="ExcelPort[Export][Filters][Vouchers][Conjunction]" class="conjunctionSelect">*/
/*                                     <option value="OR">OR</option>*/
/*                                     <option value="AND" {{ data.ExcelPort.Export.Filters.Vouchers.Conjunction == 'AND' ? 'selected' : '' }}>AND</option>*/
/*                                 </select> <a data-toggle="tooltip" title="{{ help_conjunction }}"><i class="icon-info-sign"></i></a>*/
/*                             </td>*/
/*                         </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                         */
/*                     </tbody>*/
/*                     <tfoot>*/
/*                         <tr>*/
/*                             <td></td>*/
/*                             <td class="right"><a class="btn btn-success addCondition"><i class="icon-plus icon-white"></i> {{ button_add_condition }}</a></td>*/
/*                         </tr>*/
/*                     </tfoot>*/
/*                 </table>*/
/*             </div>*/
/*             */
/*             <div data-depends-on="#DataTypeProductsOption, #DataTypeCategoriesOption, #DataTypeCustomersOption, #DataTypeManufacturersOption" class="question">{{ text_question_store }}</div>*/
/*             <div data-depends-on="#DataTypeProductsOption, #DataTypeCategoriesOption, #DataTypeCustomersOption, #DataTypeManufacturersOption" class="option">*/
/*             	<input id="Store0Option" type="radio" name="ExcelPort[Export][Store]" value="0" {{ not data.ExcelPort.Export.Store ? 'checked' }} /><label for="Store0Option">{{ default_store_name }}</label>*/
/*             </div>*/
/*             {% for store in stores %}*/
/*             <div data-depends-on="#DataTypeProductsOption, #DataTypeCategoriesOption, #DataTypeCustomersOption, #DataTypeManufacturersOption" class="option">*/
/*             	<input id="Store{{ store.store_id }}Option" type="radio" name="ExcelPort[Export][Store]" value="{{ store.store_id }}" {{ data.ExcelPort.Export.Store == store.store_id ? 'checked' }}/><label for="Store{{ store.store_id }}Option">{{ store.name }}</label>*/
/*             </div>*/
/*             {% endfor %}*/
/*             */
/*             <div data-depends-on="#DataTypeProductsOption, #DataTypeCategoriesOption, #DataTypeOptionsOption, #DataTypeAttributesOption, #DataTypeCustomersOption, #DataTypeCustomerGroupsOption, #DataTypeManufacturersOption" class="question">{{ text_question_language }}</div>*/
/* */
/*             {% for language in languages %}*/
/*             <div data-depends-on="#DataTypeProductsOption, #DataTypeCategoriesOption, #DataTypeOptionsOption, #DataTypeAttributesOption, #DataTypeCustomersOption, #DataTypeCustomerGroupsOption, #DataTypeManufacturersOption" class="option">*/
/*             	<input id="Language{{ language.language_id }}Option" type="radio" name="ExcelPort[Export][Language]" value="{{ language.language_id }}" {{ (not data.ExcelPort.Export.Language and loop.index0 == 0) or (data.ExcelPort.Export.Language == language.language_id) ? 'checked' }} /><label for="Language{{ language.language_id }}Option">{{ language.name }}</label>*/
/*             </div>*/
/*             {% endfor %}*/
/*             */
/*             <div class="question" data-depends-on="#DataTypeProductsOption">*/
/*                 <p>{{ text_question_product_type }}</p>*/
/*             </div>*/
/*             <div class="question" data-depends-on="#DataTypeProductsOption">*/
/*                 <input type="radio" name="ExcelPort[Export][ProductExportMode]" {{ not data.ExcelPort.Export.ProductExportMode or data.ExcelPort.Export.ProductExportMode == '0' ? 'checked' }} value="0" id="radioBulkExport" /><label for="radioBulkExport">{{ text_question_product_type_bulk }}</label>*/
/*             </div>*/
/*             <div class="question" data-depends-on="#DataTypeProductsOption">*/
/*                 <input type="radio" name="ExcelPort[Export][ProductExportMode]" {{ data.ExcelPort.Export.ProductExportMode == '2' ? 'checked' }} value="2" id="radioFullExport" /><label for="radioFullExport">{{ text_question_product_type_full }}</label>*/
/*             </div>*/
/*             <div class="question" data-depends-on="#DataTypeProductsOption">*/
/*                 <input type="radio" name="ExcelPort[Export][ProductExportMode]" {{ data.ExcelPort.Export.ProductExportMode == '1' ? 'checked' }} value="1" id="radioQuickExport" /><label for="radioQuickExport">{{ text_question_product_type_quick }}</label>*/
/*             </div>*/
/*         </td>  */
/*     </tr>*/
/*     <tr>*/
/*         <td>*/
/*         	<div>*/
/*         		<a data-action="export" class="btn btn-success continueAction ExcelPortSubmitButton">{{ button_export }}</a>*/
/*             </div>*/
/* 			<div class="help"><strong>{{ text_note }}</strong> {{ text_supported_in_oc1541 }} <a class='needMoreSize' href="javascript:void(0)"><i class="fa fa-external-link"></i> {{ text_learn_to_increase }}</a></div>*/
/*         </td>  */
/*     </tr>*/
/* </table>*/
