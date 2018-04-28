<?php

/* journal2/template/account/login.twig */
class __TwigTemplate_8e6945777ca5900ed6d0afe2c66cbf3bc13dcc63ceab156f06085cb27df43ee2 extends Twig_Template
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
        echo "<!--catalog/view/theme/journal2/template/accout/login.twig  -->
";
        // line 2
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div class=\"bigbox\" style=\"background-image: url(/image/login.jpg);background-position: center;background-repeat: no-repeat;background-attachment: fixed;position: relative;height:864px;\">

<div id=\"container\" class=\"container j-container\">
  ";
        // line 6
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 7
            echo "    <div class=\"alert alert-success success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
  ";
        }
        // line 9
        echo "  ";
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
      ";
        // line 21
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row login-content\" style=\"margin-top:156px\">
        <div class=\"col-sm-6\" style=\"margin:0 auto;width:500px;\">
          <div class=\"well\">
            <h2 class=\"secondary-title\" style=\"color:white\">";
        // line 25
        echo (isset($context["text_returning_customer"]) ? $context["text_returning_customer"] : null);
        echo "</h2>
            <form action=\"";
        // line 26
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
              <div class=\"login-wrap\">
                <p style=\"color:white\">";
        // line 28
        echo (isset($context["text_i_am_returning_customer"]) ? $context["text_i_am_returning_customer"] : null);
        echo "</p>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-email\" style=\"color:white\">";
        // line 30
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
                  <input type=\"text\" name=\"email\" value=\"";
        // line 31
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                  <label class=\"control-label\" for=\"input-password\"style=\"color:white\" >";
        // line 34
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
                  <input type=\"password\" name=\"password\" value=\"";
        // line 35
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
                  <a href=\"";
        // line 36
        echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
        echo "\" style=\"display:inline-block;padding-top:20px\">";
        echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
        echo "</a></div>
              </div>
              <hr/>
              <input type=\"submit\" value=\"";
        // line 39
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "\" class=\"btn btn-primary button\"/>
              <a href=\"";
        // line 40
        echo (isset($context["register"]) ? $context["register"] : null);
        echo "\" class=\"results\" style=\"border-radius: 2px;padding: 0 15px;line-height: 35px;background-color: rgb(68, 67, 73);transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-color 0.15s ease-in-out;text-align: center;position: relative;display: inline-block;color:white;top:1px;margin-left:40px\">注册</a>
              ";
        // line 41
        if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 42
            echo "                <input type=\"hidden\" name=\"redirect\" value=\"";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\"/>
              ";
        }
        // line 44
        echo "            </form>
          </div>
        </div>
      </div>
      ";
        // line 48
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 48,  144 => 44,  138 => 42,  136 => 41,  132 => 40,  128 => 39,  120 => 36,  114 => 35,  110 => 34,  102 => 31,  98 => 30,  93 => 28,  88 => 26,  84 => 25,  77 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  52 => 13,  46 => 12,  40 => 10,  37 => 9,  31 => 7,  29 => 6,  22 => 2,  19 => 1,);
    }
}
/* <!--catalog/view/theme/journal2/template/accout/login.twig  -->*/
/* {{ header }}*/
/* <div class="bigbox" style="background-image: url(/image/login.jpg);background-position: center;background-repeat: no-repeat;background-attachment: fixed;position: relative;height:864px;">*/
/* */
/* <div id="container" class="container j-container">*/
/*   {% if success %}*/
/*     <div class="alert alert-success success"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
/*   {% endif %}*/
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
/*       {{ content_top }}*/
/*       <div class="row login-content" style="margin-top:156px">*/
/*         <div class="col-sm-6" style="margin:0 auto;width:500px;">*/
/*           <div class="well">*/
/*             <h2 class="secondary-title" style="color:white">{{ text_returning_customer }}</h2>*/
/*             <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*               <div class="login-wrap">*/
/*                 <p style="color:white">{{ text_i_am_returning_customer }}</p>*/
/*                 <div class="form-group">*/
/*                   <label class="control-label" for="input-email" style="color:white">{{ entry_email }}</label>*/
/*                   <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control"/>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <label class="control-label" for="input-password"style="color:white" >{{ entry_password }}</label>*/
/*                   <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="form-control"/>*/
/*                   <a href="{{ forgotten }}" style="display:inline-block;padding-top:20px">{{ text_forgotten }}</a></div>*/
/*               </div>*/
/*               <hr/>*/
/*               <input type="submit" value="{{ button_login }}" class="btn btn-primary button"/>*/
/*               <a href="{{ register }}" class="results" style="border-radius: 2px;padding: 0 15px;line-height: 35px;background-color: rgb(68, 67, 73);transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-color 0.15s ease-in-out;text-align: center;position: relative;display: inline-block;color:white;top:1px;margin-left:40px">注册</a>*/
/*               {% if redirect %}*/
/*                 <input type="hidden" name="redirect" value="{{ redirect }}"/>*/
/*               {% endif %}*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* </div>*/
/* */
