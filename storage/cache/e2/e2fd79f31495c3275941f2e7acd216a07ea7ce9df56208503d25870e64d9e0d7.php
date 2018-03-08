<?php

/* extension/module/excelport/tab_settings.twig */
class __TwigTemplate_ffe67deade86dc212dfc1f2b36293fa1cd54fed2a6936383e5679542db355b33 extends Twig_Template
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
        echo "<div class=\"form-horizontal\">
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\">
            ";
        // line 4
        echo (isset($context["text_export_product_description_html"]) ? $context["text_export_product_description_html"] : null);
        echo "
        </label>
        <div class=\"col-sm-10\">
            <select name=\"ExcelPort[Settings][DescriptionEncoding]\" class=\"form-control\">
                <option value=\"encoded_html\" ";
        // line 8
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Settings", array()), "DescriptionEncoding", array()) == "encoded_html")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["option_encoded_html"]) ? $context["option_encoded_html"] : null);
        echo "</option>
                <option value=\"standard_html\" ";
        // line 9
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Settings", array()), "DescriptionEncoding", array()) == "standard_html")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["option_standard_html"]) ? $context["option_standard_html"] : null);
        echo "</option>
                <option value=\"no_html\" ";
        // line 10
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Settings", array()), "DescriptionEncoding", array()) == "no_html")) ? ("selected") : (""));
        echo ">";
        echo (isset($context["option_no_html"]) ? $context["option_no_html"] : null);
        echo "</option>
            </select>
        </div> 
    </div>
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\">
            ";
        // line 16
        echo (isset($context["text_export_entries_number"]) ? $context["text_export_entries_number"] : null);
        echo "
        </label>
        <div class=\"col-sm-10\">
            <input type=\"number\" min=\"50\" max=\"800\" name=\"ExcelPort[Settings][ExportLimit]\" value=\"";
        // line 19
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Settings", array()), "ExportLimit", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Settings", array()), "ExportLimit", array())) : ("500"));
        echo "\" class=\"form-control\" />
        </div> 
    </div>
    <div class=\"form-group\">
        <label class=\"control-label col-sm-2\">
        ";
        // line 24
        echo (isset($context["text_import_limit"]) ? $context["text_import_limit"] : null);
        echo "
        </label>
        <div class=\"col-sm-10\">
            <input type=\"number\" min=\"10\" max=\"800\" name=\"ExcelPort[Settings][ImportLimit]\" value=\"";
        // line 27
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Settings", array()), "ImportLimit", array())) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "ExcelPort", array()), "Settings", array()), "ImportLimit", array())) : ("100"));
        echo "\" class=\"form-control\" />
        </div> 
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/excelport/tab_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 27,  68 => 24,  60 => 19,  54 => 16,  43 => 10,  37 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }
}
/* <div class="form-horizontal">*/
/*     <div class="form-group">*/
/*         <label class="control-label col-sm-2">*/
/*             {{ text_export_product_description_html }}*/
/*         </label>*/
/*         <div class="col-sm-10">*/
/*             <select name="ExcelPort[Settings][DescriptionEncoding]" class="form-control">*/
/*                 <option value="encoded_html" {{ data.ExcelPort.Settings.DescriptionEncoding == "encoded_html" ? 'selected' }}>{{ option_encoded_html }}</option>*/
/*                 <option value="standard_html" {{ data.ExcelPort.Settings.DescriptionEncoding == "standard_html" ? 'selected' }}>{{ option_standard_html }}</option>*/
/*                 <option value="no_html" {{ data.ExcelPort.Settings.DescriptionEncoding == "no_html" ? 'selected' }}>{{ option_no_html }}</option>*/
/*             </select>*/
/*         </div> */
/*     </div>*/
/*     <div class="form-group">*/
/*         <label class="control-label col-sm-2">*/
/*             {{ text_export_entries_number }}*/
/*         </label>*/
/*         <div class="col-sm-10">*/
/*             <input type="number" min="50" max="800" name="ExcelPort[Settings][ExportLimit]" value="{{ data.ExcelPort.Settings.ExportLimit ?: '500' }}" class="form-control" />*/
/*         </div> */
/*     </div>*/
/*     <div class="form-group">*/
/*         <label class="control-label col-sm-2">*/
/*         {{ text_import_limit }}*/
/*         </label>*/
/*         <div class="col-sm-10">*/
/*             <input type="number" min="10" max="800" name="ExcelPort[Settings][ImportLimit]" value="{{ data.ExcelPort.Settings.ImportLimit ?: '100' }}" class="form-control" />*/
/*         </div> */
/*     </div>*/
/* </div>*/