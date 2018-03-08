<?php

/* extension/module/isenselabs_seo/tab_crawler.twig */
class __TwigTemplate_5bb14fac9a16745ad1ee71d50a028304c4ac0ea4050c499f2eed52762f082fae extends Twig_Template
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
            <h3>";
        // line 4
        echo (isset($context["text_seo_crawler"]) ? $context["text_seo_crawler"] : null);
        echo "</h3><br />
            <div class=\"well page-crawler\">
              <div class=\"row\">
                <div class=\"col-xs-12 col-md-12\">
                 <div class=\"input-group url-buttons\">
                       <div class=\"input-group-btn\">
                           <h4>Choose page:</h4>
                           <button type=\"button\" class=\"btn btn-default btn-crawler-fix\" onClick=\"addUrl(this);\" data-url=\"";
        // line 11
        echo $this->getAttribute((isset($context["urls_array"]) ? $context["urls_array"] : null), "home", array());
        echo "\">";
        echo (isset($context["text_home_page"]) ? $context["text_home_page"] : null);
        echo "</button> 
                           <button type=\"button\" class=\"btn btn-default btn-crawler-fix\" onClick=\"addUrl(this);\" data-url=\"";
        // line 12
        echo $this->getAttribute((isset($context["urls_array"]) ? $context["urls_array"] : null), "product", array());
        echo "\">";
        echo (isset($context["text_product_page"]) ? $context["text_product_page"] : null);
        echo "</button> 
                           <button type=\"button\" class=\"btn btn-default btn-crawler-fix\" onClick=\"addUrl(this);\" data-url=\"";
        // line 13
        echo $this->getAttribute((isset($context["urls_array"]) ? $context["urls_array"] : null), "category", array());
        echo "\">";
        echo (isset($context["text_category_page"]) ? $context["text_category_page"] : null);
        echo "</button> 
                           <button type=\"button\" class=\"btn btn-default btn-crawler-fix\" onClick=\"addUrl(this);\" data-url=\"";
        // line 14
        echo $this->getAttribute((isset($context["urls_array"]) ? $context["urls_array"] : null), "information", array());
        echo "\">";
        echo (isset($context["text_information_page"]) ? $context["text_information_page"] : null);
        echo "</button> 
                       </div> 
                    </div>
                </div>
              </div>
              <br>
              <div class=\"row\">
                <div class=\"col-xs-12 col-md-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-6\">
                      <select class=\"form-control input-md\" name=\"seo_crawler_left_url\">
                          ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store_data"]) {
            echo " 
                              <option value=\"";
            // line 26
            echo $this->getAttribute($context["store_data"], "url", array());
            echo "\">";
            echo $this->getAttribute($context["store_data"], "url", array());
            echo "</option>
                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store_data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo " 
                      </select>
                    </div>
                    <div class=\"col-sm-6\">
                      <input type=\"text\" placeholder=\"";
        // line 31
        echo (isset($context["text_enter_a_web_page_url"]) ? $context["text_enter_a_web_page_url"] : null);
        echo "\" class=\"form-control seo_crawler_input input-md\" aria-describedby=\"sizing-addon1\">
                    </div>
                  </div>
                </div>
                <div class=\"col-xs-2 col-md-2\">
                  <button type=\"button\" onClick=\"crawlerAnalyze(this);\" class=\"btn-crawler-analyze btn btn-primary btn-block btn-md\">";
        // line 36
        echo (isset($context["text_analyze"]) ? $context["text_analyze"] : null);
        echo "</button>
                </div>
                <div class=\"clearfix\"></div>
              </div>
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"seo_crawler_results\">
            
            </div>
  \t\t</div>
  \t\t
  \t\t<div class=\"col-xs-12 col-md-4\">
        <div class=\"box-heading\">
\t\t      <h1><i class=\"fa fa-info-circle\" aria-hidden=\"true\"></i>";
        // line 49
        echo (isset($context["text_crawler_helper_title"]) ? $context["text_crawler_helper_title"] : null);
        echo "</h1>
        </div>
        <div class=\"box-content\">
          ";
        // line 52
        echo (isset($context["text_crawler_helper"]) ? $context["text_crawler_helper"] : null);
        echo "
        </div>
      </div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "extension/module/isenselabs_seo/tab_crawler.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 52,  114 => 49,  98 => 36,  90 => 31,  84 => 27,  74 => 26,  68 => 25,  52 => 14,  46 => 13,  40 => 12,  34 => 11,  24 => 4,  19 => 1,);
    }
}
/* <div class="container-fluid">*/
/* 	<div class="row">*/
/*   		<div class="col-xs-12 col-md-8">*/
/*             <h3>{{ text_seo_crawler }}</h3><br />*/
/*             <div class="well page-crawler">*/
/*               <div class="row">*/
/*                 <div class="col-xs-12 col-md-12">*/
/*                  <div class="input-group url-buttons">*/
/*                        <div class="input-group-btn">*/
/*                            <h4>Choose page:</h4>*/
/*                            <button type="button" class="btn btn-default btn-crawler-fix" onClick="addUrl(this);" data-url="{{ urls_array.home }}">{{ text_home_page }}</button> */
/*                            <button type="button" class="btn btn-default btn-crawler-fix" onClick="addUrl(this);" data-url="{{ urls_array.product }}">{{ text_product_page }}</button> */
/*                            <button type="button" class="btn btn-default btn-crawler-fix" onClick="addUrl(this);" data-url="{{ urls_array.category }}">{{ text_category_page }}</button> */
/*                            <button type="button" class="btn btn-default btn-crawler-fix" onClick="addUrl(this);" data-url="{{ urls_array.information }}">{{ text_information_page }}</button> */
/*                        </div> */
/*                     </div>*/
/*                 </div>*/
/*               </div>*/
/*               <br>*/
/*               <div class="row">*/
/*                 <div class="col-xs-12 col-md-10">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-6">*/
/*                       <select class="form-control input-md" name="seo_crawler_left_url">*/
/*                           {% for store_data in stores %} */
/*                               <option value="{{ store_data.url }}">{{ store_data.url }}</option>*/
/*                           {% endfor %} */
/*                       </select>*/
/*                     </div>*/
/*                     <div class="col-sm-6">*/
/*                       <input type="text" placeholder="{{ text_enter_a_web_page_url }}" class="form-control seo_crawler_input input-md" aria-describedby="sizing-addon1">*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*                 <div class="col-xs-2 col-md-2">*/
/*                   <button type="button" onClick="crawlerAnalyze(this);" class="btn-crawler-analyze btn btn-primary btn-block btn-md">{{ text_analyze }}</button>*/
/*                 </div>*/
/*                 <div class="clearfix"></div>*/
/*               </div>*/
/*             </div>*/
/*             <div class="clearfix"></div>*/
/*             <div class="seo_crawler_results">*/
/*             */
/*             </div>*/
/*   		</div>*/
/*   		*/
/*   		<div class="col-xs-12 col-md-4">*/
/*         <div class="box-heading">*/
/* 		      <h1><i class="fa fa-info-circle" aria-hidden="true"></i>{{ text_crawler_helper_title }}</h1>*/
/*         </div>*/
/*         <div class="box-content">*/
/*           {{ text_crawler_helper }}*/
/*         </div>*/
/*       </div>*/
/* 	</div>*/
/* </div>*/
