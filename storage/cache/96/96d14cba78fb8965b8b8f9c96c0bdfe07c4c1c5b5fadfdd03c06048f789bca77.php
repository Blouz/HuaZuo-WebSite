<?php

/* extension/module/excelport/tab_import.twig */
class __TwigTemplate_0a4517b557551665ac8307d4f52c1be7b0875695ea791f16181ad8675ebd4cc5 extends Twig_Template
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
        echo "<table class=\"form\">
    <tr>
        <td>
            <div class=\"question\">";
        // line 4
        echo (isset($context["text_question_data_import"]) ? $context["text_question_data_import"] : null);
        echo "</div>
            <div class=\"option\">
            \t<input id=\"DataTypeProductsOptionImport\" type=\"radio\" name=\"ExcelPort[Import][DataType]\" value=\"Products\" ";
        // line 6
        echo ((( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Import", array()), "DataType", array()) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Import", array()), "DataType", array()) == "Products"))) ? ("checked") : (""));
        echo " /><label for=\"DataTypeProductsOptionImport\">";
        echo (isset($context["text_datatype_option_products"]) ? $context["text_datatype_option_products"] : null);
        echo "</label>
            </div>
            <div class=\"option\">
            \t<input id=\"DataTypeCategoriesOptionImport\" type=\"radio\" name=\"ExcelPort[Import][DataType]\" value=\"Categories\" ";
        // line 9
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Import", array()), "DataType", array()) == "Categories")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeCategoriesOptionImport\">";
        echo (isset($context["text_datatype_option_categories"]) ? $context["text_datatype_option_categories"] : null);
        echo "</label>
            </div>
            <div class=\"option\">
            \t<input id=\"DataTypeOptionsOptionImport\" type=\"radio\" name=\"ExcelPort[Import][DataType]\" value=\"Options\" ";
        // line 12
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Import", array()), "DataType", array()) == "Options")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeOptionsOptionImport\">";
        echo (isset($context["text_datatype_option_options"]) ? $context["text_datatype_option_options"] : null);
        echo "</label>
            </div>
            <div class=\"option\">
            \t<input id=\"DataTypeAttributesOptionImport\" type=\"radio\" name=\"ExcelPort[Import][DataType]\" value=\"Attributes\" ";
        // line 15
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Import", array()), "DataType", array()) == "Attributes")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeAttributesOptionImport\">";
        echo (isset($context["text_datatype_option_attributes"]) ? $context["text_datatype_option_attributes"] : null);
        echo "</label>
            </div>
            <div class=\"option\">
            \t<input id=\"DataTypeCustomersOptionImport\" type=\"radio\" name=\"ExcelPort[Import][DataType]\" value=\"Customers\" ";
        // line 18
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Import", array()), "DataType", array()) == "Customers")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeCustomersOptionImport\">";
        echo (isset($context["text_datatype_option_customers"]) ? $context["text_datatype_option_customers"] : null);
        echo "</label>
            </div>
            <div class=\"option\">
                <input id=\"DataTypeCustomerGroupsOptionImport\" type=\"radio\" name=\"ExcelPort[Import][DataType]\" value=\"CustomerGroups\" ";
        // line 21
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Import", array()), "DataType", array()) == "CustomerGroups")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeCustomerGroupsOptionImport\">";
        echo (isset($context["text_datatype_option_customer_groups"]) ? $context["text_datatype_option_customer_groups"] : null);
        echo "</label>
            </div>
            <div class=\"option\">
                <input id=\"DataTypeOrdersOptionImport\" type=\"radio\" name=\"ExcelPort[Import][DataType]\" value=\"Orders\" ";
        // line 24
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Import", array()), "DataType", array()) == "Orders")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeOrdersOptionImport\">";
        echo (isset($context["text_datatype_option_orders"]) ? $context["text_datatype_option_orders"] : null);
        echo "</label>
            </div>
            <div class=\"option\">
                <input id=\"DataTypeManufacturersOptionImport\" type=\"radio\" name=\"ExcelPort[Import][DataType]\" value=\"Manufacturers\" ";
        // line 27
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Import", array()), "DataType", array()) == "Manufacturers")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeManufacturersOptionImport\">";
        echo (isset($context["text_datatype_option_manufacturers"]) ? $context["text_datatype_option_manufacturers"] : null);
        echo "</label>
            </div>
            <div class=\"option\">
                <input id=\"DataTypeCouponsOptionImport\" type=\"radio\" name=\"ExcelPort[Import][DataType]\" value=\"Coupons\" ";
        // line 30
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Import", array()), "DataType", array()) == "Coupons")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeCouponsOptionImport\">";
        echo (isset($context["text_datatype_option_coupons"]) ? $context["text_datatype_option_coupons"] : null);
        echo "</label>
            </div>
            <div class=\"option\">
                <input id=\"DataTypeVouchersOptionImport\" type=\"radio\" name=\"ExcelPort[Import][DataType]\" value=\"Vouchers\" ";
        // line 33
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Import", array()), "DataType", array()) == "Vouchers")) ? ("checked") : (""));
        echo " /><label for=\"DataTypeVouchersOptionImport\">";
        echo (isset($context["text_datatype_option_vouchers"]) ? $context["text_datatype_option_vouchers"] : null);
        echo "</label>
            </div>
            
            <div class=\"question\" data-depends-on=\"#DataTypeProductsOptionImport, #DataTypeCategoriesOptionImport, #DataTypeOptionsOptionImport, #DataTypeAttributesOptionImport, #DataTypeCustomersOptionImport, #DataTypeCustomerGroupsOptionImport, #DataTypeManufacturersOptionImport\">";
        // line 36
        echo (isset($context["text_question_language_import"]) ? $context["text_question_language_import"] : null);
        echo "</div>
            ";
        // line 37
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
            // line 38
            echo "            <div class=\"option\" data-depends-on=\"#DataTypeProductsOptionImport, #DataTypeCategoriesOptionImport, #DataTypeOptionsOptionImport, #DataTypeAttributesOptionImport, #DataTypeCustomersOptionImport, #DataTypeCustomerGroupsOptionImport, #DataTypeManufacturersOptionImport\">
            \t<input id=\"Language";
            // line 39
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "OptionImport\" type=\"radio\" name=\"ExcelPort[Import][Language]\" value=\"";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" ";
            echo (((( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Import", array()), "Language", array()) && ($this->getAttribute($context["loop"], "index0", array()) == 0)) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Import", array()), "Language", array()) == $this->getAttribute($context["language"], "language_id", array())))) ? ("checked") : (""));
            echo " /><label for=\"Language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "OptionImport\">";
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
        // line 42
        echo "            <div class=\"question\">";
        echo (isset($context["text_question_file_import"]) ? $context["text_question_file_import"] : null);
        echo "</div>
            <div class=\"option\">
            \t<input type=\"file\" name=\"ExcelPort[Import][File]\" />
            </div>
            <div class=\"question\"><input id=\"checkboxDelete\" type=\"checkbox\" name=\"ExcelPort[Import][Delete]\" value=\"1\" /><label>";
        // line 46
        echo (isset($context["text_question_delete_other"]) ? $context["text_question_delete_other"] : null);
        echo "</label></div>
            <div class=\"question\" data-depends-on=\"#DataTypeProductsOptionImport\"><input id=\"checkboxAddAsNew\" type=\"checkbox\" name=\"ExcelPort[Import][AddAsNew]\" value=\"1\" ";
        // line 47
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Import", array()), "AddAsNew", array())) ? ("checked") : (""));
        echo " /><label>";
        echo (isset($context["text_question_add_as_new"]) ? $context["text_question_add_as_new"] : null);
        echo "</label></div>
        </td>  
    </tr>
    <tr>
        <td>
            <input type=\"hidden\" id=\"last_import_input\" name=\"ExcelPort[LastImport]\" value=\"";
        // line 52
        echo ((($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array(), "any", false, true), "LastImport", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array(), "any", false, true), "LastImport", array())))) ? ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array(), "any", false, true), "LastImport", array())) : (""));
        echo "\" />
            <div style=\"margin-top: 15px;\" id=\"last_import\" data-template=\"";
        // line 53
        echo (isset($context["text_last_import"]) ? $context["text_last_import"] : null);
        echo "\" data-text=\"";
        echo ((($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array(), "any", false, true), "LastImport", array(), "any", true, true) &&  !(null === $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array(), "any", false, true), "LastImport", array())))) ? ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array(), "any", false, true), "LastImport", array())) : (""));
        echo "\">
            </div>
        \t<div>
        \t\t<a data-action=\"import\" class=\"btn btn-success continueAction ExcelPortSubmitButton\">";
        // line 56
        echo (isset($context["button_import"]) ? $context["button_import"] : null);
        echo "</a>
            </div>
\t\t\t<div class=\"help\"><strong>";
        // line 58
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
        return "extension/module/excelport/tab_import.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 58,  192 => 56,  184 => 53,  180 => 52,  170 => 47,  166 => 46,  158 => 42,  133 => 39,  130 => 38,  113 => 37,  109 => 36,  101 => 33,  93 => 30,  85 => 27,  77 => 24,  69 => 21,  61 => 18,  53 => 15,  45 => 12,  37 => 9,  29 => 6,  24 => 4,  19 => 1,);
    }
}
/* <table class="form">*/
/*     <tr>*/
/*         <td>*/
/*             <div class="question">{{ text_question_data_import }}</div>*/
/*             <div class="option">*/
/*             	<input id="DataTypeProductsOptionImport" type="radio" name="ExcelPort[Import][DataType]" value="Products" {{ not data.ExcelPort.Import.DataType or data.ExcelPort.Import.DataType == 'Products' ? 'checked' }} /><label for="DataTypeProductsOptionImport">{{ text_datatype_option_products }}</label>*/
/*             </div>*/
/*             <div class="option">*/
/*             	<input id="DataTypeCategoriesOptionImport" type="radio" name="ExcelPort[Import][DataType]" value="Categories" {{ data.ExcelPort.Import.DataType == 'Categories' ? 'checked' }} /><label for="DataTypeCategoriesOptionImport">{{ text_datatype_option_categories }}</label>*/
/*             </div>*/
/*             <div class="option">*/
/*             	<input id="DataTypeOptionsOptionImport" type="radio" name="ExcelPort[Import][DataType]" value="Options" {{ data.ExcelPort.Import.DataType == 'Options' ? 'checked' }} /><label for="DataTypeOptionsOptionImport">{{ text_datatype_option_options }}</label>*/
/*             </div>*/
/*             <div class="option">*/
/*             	<input id="DataTypeAttributesOptionImport" type="radio" name="ExcelPort[Import][DataType]" value="Attributes" {{ data.ExcelPort.Import.DataType == 'Attributes' ? 'checked' }} /><label for="DataTypeAttributesOptionImport">{{ text_datatype_option_attributes }}</label>*/
/*             </div>*/
/*             <div class="option">*/
/*             	<input id="DataTypeCustomersOptionImport" type="radio" name="ExcelPort[Import][DataType]" value="Customers" {{ data.ExcelPort.Import.DataType == 'Customers' ? 'checked' }} /><label for="DataTypeCustomersOptionImport">{{ text_datatype_option_customers }}</label>*/
/*             </div>*/
/*             <div class="option">*/
/*                 <input id="DataTypeCustomerGroupsOptionImport" type="radio" name="ExcelPort[Import][DataType]" value="CustomerGroups" {{ data.ExcelPort.Import.DataType == 'CustomerGroups' ? 'checked' }} /><label for="DataTypeCustomerGroupsOptionImport">{{ text_datatype_option_customer_groups }}</label>*/
/*             </div>*/
/*             <div class="option">*/
/*                 <input id="DataTypeOrdersOptionImport" type="radio" name="ExcelPort[Import][DataType]" value="Orders" {{ data.ExcelPort.Import.DataType == 'Orders' ? 'checked' }} /><label for="DataTypeOrdersOptionImport">{{ text_datatype_option_orders }}</label>*/
/*             </div>*/
/*             <div class="option">*/
/*                 <input id="DataTypeManufacturersOptionImport" type="radio" name="ExcelPort[Import][DataType]" value="Manufacturers" {{ data.ExcelPort.Import.DataType == 'Manufacturers' ? 'checked' }} /><label for="DataTypeManufacturersOptionImport">{{ text_datatype_option_manufacturers }}</label>*/
/*             </div>*/
/*             <div class="option">*/
/*                 <input id="DataTypeCouponsOptionImport" type="radio" name="ExcelPort[Import][DataType]" value="Coupons" {{ data.ExcelPort.Import.DataType == 'Coupons' ? 'checked' }} /><label for="DataTypeCouponsOptionImport">{{ text_datatype_option_coupons }}</label>*/
/*             </div>*/
/*             <div class="option">*/
/*                 <input id="DataTypeVouchersOptionImport" type="radio" name="ExcelPort[Import][DataType]" value="Vouchers" {{ data.ExcelPort.Import.DataType == 'Vouchers' ? 'checked' }} /><label for="DataTypeVouchersOptionImport">{{ text_datatype_option_vouchers }}</label>*/
/*             </div>*/
/*             */
/*             <div class="question" data-depends-on="#DataTypeProductsOptionImport, #DataTypeCategoriesOptionImport, #DataTypeOptionsOptionImport, #DataTypeAttributesOptionImport, #DataTypeCustomersOptionImport, #DataTypeCustomerGroupsOptionImport, #DataTypeManufacturersOptionImport">{{ text_question_language_import }}</div>*/
/*             {% for language in languages %}*/
/*             <div class="option" data-depends-on="#DataTypeProductsOptionImport, #DataTypeCategoriesOptionImport, #DataTypeOptionsOptionImport, #DataTypeAttributesOptionImport, #DataTypeCustomersOptionImport, #DataTypeCustomerGroupsOptionImport, #DataTypeManufacturersOptionImport">*/
/*             	<input id="Language{{ language.language_id }}OptionImport" type="radio" name="ExcelPort[Import][Language]" value="{{ language.language_id }}" {{ (not data.ExcelPort.Import.Language and loop.index0 == 0) or (data.ExcelPort.Import.Language == language.language_id) ? 'checked' }} /><label for="Language{{ language.language_id }}OptionImport">{{ language.name }}</label>*/
/*             </div>*/
/*             {% endfor %}*/
/*             <div class="question">{{ text_question_file_import }}</div>*/
/*             <div class="option">*/
/*             	<input type="file" name="ExcelPort[Import][File]" />*/
/*             </div>*/
/*             <div class="question"><input id="checkboxDelete" type="checkbox" name="ExcelPort[Import][Delete]" value="1" /><label>{{ text_question_delete_other }}</label></div>*/
/*             <div class="question" data-depends-on="#DataTypeProductsOptionImport"><input id="checkboxAddAsNew" type="checkbox" name="ExcelPort[Import][AddAsNew]" value="1" {{ data.ExcelPort.Import.AddAsNew ? 'checked' }} /><label>{{ text_question_add_as_new }}</label></div>*/
/*         </td>  */
/*     </tr>*/
/*     <tr>*/
/*         <td>*/
/*             <input type="hidden" id="last_import_input" name="ExcelPort[LastImport]" value="{{ data.ExcelPort.LastImport ?? '' }}" />*/
/*             <div style="margin-top: 15px;" id="last_import" data-template="{{ text_last_import }}" data-text="{{ data.ExcelPort.LastImport ?? '' }}">*/
/*             </div>*/
/*         	<div>*/
/*         		<a data-action="import" class="btn btn-success continueAction ExcelPortSubmitButton">{{ button_import }}</a>*/
/*             </div>*/
/* 			<div class="help"><strong>{{ text_note }}</strong> {{ text_supported_in_oc1541 }} <a class='needMoreSize' href="javascript:void(0)"><i class="fa fa-external-link"></i> {{ text_learn_to_increase }}</a></div>*/
/*         </td>*/
/*     </tr>*/
/* </table>*/
