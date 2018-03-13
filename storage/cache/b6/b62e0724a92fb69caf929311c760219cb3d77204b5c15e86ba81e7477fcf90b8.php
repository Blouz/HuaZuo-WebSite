<?php

/* extension/module/isenselabs_seo/tab_social_seo_ajax.twig */
class __TwigTemplate_de58a86f355d247bb3b1ac08b8d0c6ca5e5fa0b9d53cdbee6d4623819c639c85 extends Twig_Template
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
        echo "<div class=\"container-fluid\">
\t<div class=\"row\">
  \t\t<div class=\"col-xs-12 col-md-8\">
            <div id=\"seo_social_links\" role=\"tabpanel\" class=\"tab-pane fade in\">
                <h3>";
        // line 5
        echo (isset($context["tab_social_seo"]) ? $context["tab_social_seo"] : null);
        echo "</h3>
                <br />
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-6\">
                        <label>
                          ";
        // line 10
        echo (isset($context["text_enable_fb_og"]) ? $context["text_enable_fb_og"] : null);
        echo " 
                        </label>
                    </div>
                    <div class=\"col-md-4 col-xs-6\">
                        <select name=\"facebook_open_graph\" class=\"form-control\">
                          <option value=\"1\" ";
        // line 15
        echo ((((isset($context["facebook_open_graph"]) ? $context["facebook_open_graph"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">Yes</option>
                          <option value=\"0\" ";
        // line 16
        echo ((((isset($context["facebook_open_graph"]) ? $context["facebook_open_graph"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo ">No</option>
                        </select>
                        <br />
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">";
        // line 20
        echo (isset($context["text_product_data"]) ? $context["text_product_data"] : null);
        echo " :</span>
                            <select name=\"facebook_open_graph_product_data\" class=\"form-control\">
                              <option value=\"1\" ";
        // line 22
        echo ((((isset($context["facebook_open_graph_product_data"]) ? $context["facebook_open_graph_product_data"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enable"]) ? $context["text_enable"] : null);
        echo "</option>
                              <option value=\"0\" ";
        // line 23
        echo ((((isset($context["facebook_open_graph_product_data"]) ? $context["facebook_open_graph_product_data"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_disable"]) ? $context["text_disable"] : null);
        echo "</option>
                            </select>
                        </div>
                        <br />
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">";
        // line 28
        echo (isset($context["text_app_id"]) ? $context["text_app_id"] : null);
        echo " :</span>
                            <input name=\"facebook_open_graph_app_id\" type=\"text\" class=\"form-control\" value=\"";
        // line 29
        echo (isset($context["facebook_open_graph_app_id"]) ? $context["facebook_open_graph_app_id"] : null);
        echo " \" />
                        </div>
                    </div>
                </div>
                <br />
                <hr />
                <br />
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-6\">
                        <label>
                          ";
        // line 39
        echo (isset($context["text_enable_twitter_card"]) ? $context["text_enable_twitter_card"] : null);
        echo " 
                        </label>
                    </div>
                    <div class=\"col-md-4 col-xs-6\">
                        <select name=\"twitter_card\" class=\"form-control\">
                          <option value=\"1\" ";
        // line 44
        echo ((((isset($context["twitter_card"]) ? $context["twitter_card"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">Yes</option>
                          <option value=\"0\" ";
        // line 45
        echo ((((isset($context["twitter_card"]) ? $context["twitter_card"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo ">No</option>
                        </select>
                        <br />
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">";
        // line 49
        echo (isset($context["text_product_data"]) ? $context["text_product_data"] : null);
        echo " :</span>
                            <select name=\"twitter_card_product_data\" class=\"form-control\">
                              <option value=\"1\" ";
        // line 51
        echo ((((isset($context["twitter_card_product_data"]) ? $context["twitter_card_product_data"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enable"]) ? $context["text_enable"] : null);
        echo "</option>
                              <option value=\"0\" ";
        // line 52
        echo ((((isset($context["twitter_card_product_data"]) ? $context["twitter_card_product_data"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_disable"]) ? $context["text_disable"] : null);
        echo "</option>
                            </select>
                        </div>
                        <br />
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">";
        // line 57
        echo (isset($context["text_username"]) ? $context["text_username"] : null);
        echo " :</span>
                            <input name=\"twitter_card_username\" type=\"text\" class=\"form-control\" value=\"";
        // line 58
        echo (isset($context["twitter_card_username"]) ? $context["twitter_card_username"] : null);
        echo " \" />
                        </div>
                    </div>
                </div>
                <br />
                <hr />
                <br />
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-6\">
                        <label>
                          ";
        // line 68
        echo (isset($context["text_enable_google_publisher"]) ? $context["text_enable_google_publisher"] : null);
        echo " 
                        </label>
                    </div>
                    <div class=\"col-md-4 col-xs-6\">
                        <select name=\"google_publisher\" class=\"form-control\">
                          <option value=\"1\" ";
        // line 73
        echo ((((isset($context["google_publisher"]) ? $context["google_publisher"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "</option>
                          <option value=\"0\" ";
        // line 74
        echo ((((isset($context["google_publisher"]) ? $context["google_publisher"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "</option>
                        </select>
                        <br />
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">";
        // line 78
        echo (isset($context["text_google_plus_id"]) ? $context["text_google_plus_id"] : null);
        echo " :</span>
                            <input name=\"google_publisher_id\" type=\"text\" class=\"form-control\" value=\"";
        // line 79
        echo (isset($context["google_publisher_id"]) ? $context["google_publisher_id"] : null);
        echo " \" />
                        </div>
                    </div>
                </div>
                <br />
                <hr />
                <br />
                <div class=\"row\">
                    <div class=\"col-md-6 col-xs-6\">
                        <label>
                          ";
        // line 89
        echo (isset($context["text_enable_hreflang"]) ? $context["text_enable_hreflang"] : null);
        echo " 
                        </label>
                    </div>
                    <div class=\"col-md-4 col-xs-6\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">";
        // line 94
        echo (isset($context["text_products"]) ? $context["text_products"] : null);
        echo "</span>
                            <select name=\"hreflang_products\" class=\"form-control\">
                              <option value=\"1\" ";
        // line 96
        echo ((((isset($context["hreflang_products"]) ? $context["hreflang_products"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enable"]) ? $context["text_enable"] : null);
        echo "</option>
                              <option value=\"0\" ";
        // line 97
        echo ((((isset($context["hreflang_products"]) ? $context["hreflang_products"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_disable"]) ? $context["text_disable"] : null);
        echo "</option>
                            </select>
                        </div>
                        <br />
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">";
        // line 102
        echo (isset($context["text_categories"]) ? $context["text_categories"] : null);
        echo "</span>
                            <select name=\"hreflang_categories\" class=\"form-control\">
                              <option value=\"1\" ";
        // line 104
        echo ((((isset($context["hreflang_categories"]) ? $context["hreflang_categories"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enable"]) ? $context["text_enable"] : null);
        echo "</option>
                              <option value=\"0\" ";
        // line 105
        echo ((((isset($context["hreflang_categories"]) ? $context["hreflang_categories"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_disable"]) ? $context["text_disable"] : null);
        echo "</option>
                            </select>
                        </div>
                        <br />
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">";
        // line 110
        echo (isset($context["text_manufacturers"]) ? $context["text_manufacturers"] : null);
        echo "</span>
                            <select name=\"hreflang_manufacturers\" class=\"form-control\">
                              <option value=\"1\" ";
        // line 112
        echo ((((isset($context["hreflang_manufacturers"]) ? $context["hreflang_manufacturers"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enable"]) ? $context["text_enable"] : null);
        echo "</option>
                              <option value=\"0\" ";
        // line 113
        echo ((((isset($context["hreflang_manufacturers"]) ? $context["hreflang_manufacturers"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_disable"]) ? $context["text_disable"] : null);
        echo "</option>
                            </select>
                        </div>
                        <br />
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">";
        // line 118
        echo (isset($context["text_informations"]) ? $context["text_informations"] : null);
        echo "</span>
                            <select name=\"hreflang_informations\" class=\"form-control\">
                              <option value=\"1\" ";
        // line 120
        echo ((((isset($context["hreflang_informations"]) ? $context["hreflang_informations"] : null) == "1")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_enable"]) ? $context["text_enable"] : null);
        echo "</option>
                              <option value=\"0\" ";
        // line 121
        echo ((((isset($context["hreflang_informations"]) ? $context["hreflang_informations"] : null) == "0")) ? ("selected=\"selected\"") : (""));
        echo ">";
        echo (isset($context["text_disable"]) ? $context["text_disable"] : null);
        echo "</option>
                            </select>
                        </div>
                        <br />
                    </div>
                </div>
                <p>
                    <br />
                    <a onClick=\"saveChanges('#seo_social_links');\" class=\"btn btn-md btn-primary\">";
        // line 129
        echo (isset($context["text_save_changes"]) ? $context["text_save_changes"] : null);
        echo "</a>
                </p>
            </div>
  \t\t</div>
  \t\t
  \t\t<div class=\"col-xs-12 col-md-4\">
            <div class=\"box-heading\">
                <h1><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>";
        // line 136
        echo (isset($context["tab_social_links_helper_title"]) ? $context["tab_social_links_helper_title"] : null);
        echo "</h1>
            </div>
            <div class=\"box-content\">
                ";
        // line 139
        echo (isset($context["tab_social_links_helper"]) ? $context["tab_social_links_helper"] : null);
        echo " 
            </div>
        </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/tab_social_seo_ajax.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 139,  292 => 136,  282 => 129,  269 => 121,  263 => 120,  258 => 118,  248 => 113,  242 => 112,  237 => 110,  227 => 105,  221 => 104,  216 => 102,  206 => 97,  200 => 96,  195 => 94,  187 => 89,  174 => 79,  170 => 78,  161 => 74,  155 => 73,  147 => 68,  134 => 58,  130 => 57,  120 => 52,  114 => 51,  109 => 49,  102 => 45,  98 => 44,  90 => 39,  77 => 29,  73 => 28,  63 => 23,  57 => 22,  52 => 20,  45 => 16,  41 => 15,  33 => 10,  25 => 5,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/*   		<div class="col-xs-12 col-md-8">*/
/*             <div id="seo_social_links" role="tabpanel" class="tab-pane fade in">*/
/*                 <h3>{{ tab_social_seo }}</h3>*/
/*                 <br />*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 col-xs-6">*/
/*                         <label>*/
/*                           {{ text_enable_fb_og }} */
/*                         </label>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-xs-6">*/
/*                         <select name="facebook_open_graph" class="form-control">*/
/*                           <option value="1" {{ facebook_open_graph == '1' ? 'selected="selected"' : '' }}>Yes</option>*/
/*                           <option value="0" {{ facebook_open_graph == '0' ? 'selected="selected"' : '' }}>No</option>*/
/*                         </select>*/
/*                         <br />*/
/*                         <div class="input-group">*/
/*                             <span class="input-group-addon">{{ text_product_data }} :</span>*/
/*                             <select name="facebook_open_graph_product_data" class="form-control">*/
/*                               <option value="1" {{ facebook_open_graph_product_data == '1' ? 'selected="selected"' : '' }}>{{ text_enable }}</option>*/
/*                               <option value="0" {{ facebook_open_graph_product_data == '0' ? 'selected="selected"' : '' }}>{{ text_disable }}</option>*/
/*                             </select>*/
/*                         </div>*/
/*                         <br />*/
/*                         <div class="input-group">*/
/*                             <span class="input-group-addon">{{ text_app_id }} :</span>*/
/*                             <input name="facebook_open_graph_app_id" type="text" class="form-control" value="{{ facebook_open_graph_app_id }} " />*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <br />*/
/*                 <hr />*/
/*                 <br />*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 col-xs-6">*/
/*                         <label>*/
/*                           {{ text_enable_twitter_card }} */
/*                         </label>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-xs-6">*/
/*                         <select name="twitter_card" class="form-control">*/
/*                           <option value="1" {{ twitter_card == '1' ? 'selected="selected"' : '' }}>Yes</option>*/
/*                           <option value="0" {{ twitter_card == '0' ? 'selected="selected"' : '' }}>No</option>*/
/*                         </select>*/
/*                         <br />*/
/*                         <div class="input-group">*/
/*                             <span class="input-group-addon">{{ text_product_data }} :</span>*/
/*                             <select name="twitter_card_product_data" class="form-control">*/
/*                               <option value="1" {{ twitter_card_product_data == '1' ? 'selected="selected"' : '' }}>{{ text_enable }}</option>*/
/*                               <option value="0" {{ twitter_card_product_data == '0' ? 'selected="selected"' : '' }}>{{ text_disable }}</option>*/
/*                             </select>*/
/*                         </div>*/
/*                         <br />*/
/*                         <div class="input-group">*/
/*                             <span class="input-group-addon">{{ text_username }} :</span>*/
/*                             <input name="twitter_card_username" type="text" class="form-control" value="{{ twitter_card_username }} " />*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <br />*/
/*                 <hr />*/
/*                 <br />*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 col-xs-6">*/
/*                         <label>*/
/*                           {{ text_enable_google_publisher }} */
/*                         </label>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-xs-6">*/
/*                         <select name="google_publisher" class="form-control">*/
/*                           <option value="1" {{ google_publisher == '1' ? 'selected="selected"' : '' }}>{{ text_yes }}</option>*/
/*                           <option value="0" {{ google_publisher == '0' ? 'selected="selected"' : '' }}>{{ text_no }}</option>*/
/*                         </select>*/
/*                         <br />*/
/*                         <div class="input-group">*/
/*                             <span class="input-group-addon">{{ text_google_plus_id }} :</span>*/
/*                             <input name="google_publisher_id" type="text" class="form-control" value="{{ google_publisher_id }} " />*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <br />*/
/*                 <hr />*/
/*                 <br />*/
/*                 <div class="row">*/
/*                     <div class="col-md-6 col-xs-6">*/
/*                         <label>*/
/*                           {{ text_enable_hreflang }} */
/*                         </label>*/
/*                     </div>*/
/*                     <div class="col-md-4 col-xs-6">*/
/*                         <div class="input-group">*/
/*                             <span class="input-group-addon">{{ text_products }}</span>*/
/*                             <select name="hreflang_products" class="form-control">*/
/*                               <option value="1" {{ hreflang_products == '1' ? 'selected="selected"' : '' }}>{{ text_enable }}</option>*/
/*                               <option value="0" {{ hreflang_products == '0' ? 'selected="selected"' : '' }}>{{ text_disable }}</option>*/
/*                             </select>*/
/*                         </div>*/
/*                         <br />*/
/*                         <div class="input-group">*/
/*                             <span class="input-group-addon">{{ text_categories }}</span>*/
/*                             <select name="hreflang_categories" class="form-control">*/
/*                               <option value="1" {{ hreflang_categories == '1' ? 'selected="selected"' : '' }}>{{ text_enable }}</option>*/
/*                               <option value="0" {{ hreflang_categories == '0' ? 'selected="selected"' : '' }}>{{ text_disable }}</option>*/
/*                             </select>*/
/*                         </div>*/
/*                         <br />*/
/*                         <div class="input-group">*/
/*                             <span class="input-group-addon">{{ text_manufacturers }}</span>*/
/*                             <select name="hreflang_manufacturers" class="form-control">*/
/*                               <option value="1" {{ hreflang_manufacturers == '1' ? 'selected="selected"' : '' }}>{{ text_enable }}</option>*/
/*                               <option value="0" {{ hreflang_manufacturers == '0' ? 'selected="selected"' : '' }}>{{ text_disable }}</option>*/
/*                             </select>*/
/*                         </div>*/
/*                         <br />*/
/*                         <div class="input-group">*/
/*                             <span class="input-group-addon">{{ text_informations }}</span>*/
/*                             <select name="hreflang_informations" class="form-control">*/
/*                               <option value="1" {{ hreflang_informations == '1' ? 'selected="selected"' : '' }}>{{ text_enable }}</option>*/
/*                               <option value="0" {{ hreflang_informations == '0' ? 'selected="selected"' : '' }}>{{ text_disable }}</option>*/
/*                             </select>*/
/*                         </div>*/
/*                         <br />*/
/*                     </div>*/
/*                 </div>*/
/*                 <p>*/
/*                     <br />*/
/*                     <a onClick="saveChanges('#seo_social_links');" class="btn btn-md btn-primary">{{ text_save_changes }}</a>*/
/*                 </p>*/
/*             </div>*/
/*   		</div>*/
/*   		*/
/*   		<div class="col-xs-12 col-md-4">*/
/*             <div class="box-heading">*/
/*                 <h1><i class="fa fa-info-circle" aria-hidden="true"></i>{{ tab_social_links_helper_title }}</h1>*/
/*             </div>*/
/*             <div class="box-content">*/
/*                 {{ tab_social_links_helper }} */
/*             </div>*/
/*         </div>*/
/* 	</div>*/
/* </div>*/
