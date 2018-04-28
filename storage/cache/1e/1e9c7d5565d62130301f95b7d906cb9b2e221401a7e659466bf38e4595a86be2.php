<?php

/* common/login.twig */
class __TwigTemplate_ec6e268111583a4e110a59cf844d3bd95a86c26d90323d6da165a657330be2f2 extends Twig_Template
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
        echo "
";
        // line 2
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
  <style type=\"text/css\">
  * {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    font-family: arial;
  }
  
  html {
    position: relative;
    min-height: 100%;
}
  #container{
    background:#ffffff !important;
  }
  footer {
    position: absolute;
    left: 0;
    bottom: 0;
    height: 100px;
    width: 100%;
    overflow:hidden;
}

  .login-form {
    width: 350px;
    padding: 40px 30px;
    background: #eee;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    position: absolute;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    right: 0;


    top: 50%;
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
  }

  .mod-form-group {
    position: relative;
    margin-bottom: 15px;
  }

  .mod-form-control {
    width: 100%;
    height: 50px;
    border: none;
    padding: 5px 7px 5px 15px;
    background: #fff;
    color: #666;
    border: 2px solid #ddd;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
  }
  .mod-form-control:focus, .mod-form-control:focus + .fa {
    border-color: #10CE88;
    color: #10CE88;
  }

  .mod-form-group .fa {
    position:absolute;
    right: 15px;
    top: 17px;
    color: #999;
  }
  .log-status.wrong-entry .mod-form-control, .wrong-entry .mod-form-control + .fa {
    border-color: #ed1c24;
    color: #ed1c24;
  }

  .log-btn {
    background: #0AC986;
    display: inline-block;
    width: 100%;
    font-size: 16px;
    height: 50px;
    color: #fff;
    text-decoration: none;
    border: none;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
  }

  .link {
    text-decoration: none;
    color: #C6C6C6;
    float: right;
    font-size: 12px;
    margin-bottom: 15px;
  }
  .link:hover {
    text-decoration: underline;
    color: #8C918F;
  }

  @-moz-keyframes wrong-log {
    0%, 100% {
      left: 0px;
    }
    20% , 60% {
      left: 15px;
    }
    40% , 80% {
      left: -15px;
    }
  }

</style>
<div id=\"content\">
  <div class=\"container-fluid\"><br />
    <br />
    <div class=\"row\"> 

          <form action=\"";
        // line 125
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" class=\"login-form\" enctype=\"multipart/form-data\">
              <h3><i class=\"fa fa-lock\"></i> ";
        // line 126
        echo (isset($context["text_login"]) ? $context["text_login"] : null);
        echo "</h3>
              ";
        // line 127
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 128
            echo "              <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>
              ";
        }
        // line 132
        echo "              ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 133
            echo "              <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
              </div>
              ";
        }
        // line 137
        echo "
              <div class=\"mod-form-group \">
                <input type=\"text\" name=\"username\" value=\"";
        // line 139
        echo (isset($context["username"]) ? $context["username"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_username"]) ? $context["entry_username"] : null);
        echo "\" id=\"input-username\" class=\"mod-form-control\" />
                <h3><i class=\"fa fa-user\"></i></h3>
              </div>

              <div class=\"mod-form-group log-status\">
                  <input type=\"password\" name=\"password\" value=\"";
        // line 144
        echo (isset($context["password"]) ? $context["password"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-password\" class=\"mod-form-control\" />
                  <h3><i class=\"fa fa-lock\"></i></h3>                
                ";
        // line 146
        if ((isset($context["forgotten"]) ? $context["forgotten"] : null)) {
            // line 147
            echo "                <span class=\"help-block\"><a href=\"";
            echo (isset($context["forgotten"]) ? $context["forgotten"] : null);
            echo "\">";
            echo (isset($context["text_forgotten"]) ? $context["text_forgotten"] : null);
            echo "</a></span>
                ";
        }
        // line 149
        echo "              </div>

              <div class=\"text-right\">
                <button type=\"submit\" class=\"log-btn\"><i class=\"fa fa-key\"></i> ";
        // line 152
        echo (isset($context["button_login"]) ? $context["button_login"] : null);
        echo "</button>
              </div>
              ";
        // line 154
        if ((isset($context["redirect"]) ? $context["redirect"] : null)) {
            // line 155
            echo "              <input type=\"hidden\" name=\"redirect\" value=\"";
            echo (isset($context["redirect"]) ? $context["redirect"] : null);
            echo "\" />
              ";
        }
        // line 157
        echo "            </form>
          </div>
        </div>
      </div>
";
        // line 161
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "common/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 161,  226 => 157,  220 => 155,  218 => 154,  213 => 152,  208 => 149,  200 => 147,  198 => 146,  191 => 144,  181 => 139,  177 => 137,  169 => 133,  166 => 132,  158 => 128,  156 => 127,  152 => 126,  148 => 125,  22 => 2,  19 => 1,);
    }
}
/* */
/* {{ header }}*/
/*   <style type="text/css">*/
/*   * {*/
/*     box-sizing: border-box;*/
/*     -moz-box-sizing: border-box;*/
/*     -webkit-box-sizing: border-box;*/
/*     font-family: arial;*/
/*   }*/
/*   */
/*   html {*/
/*     position: relative;*/
/*     min-height: 100%;*/
/* }*/
/*   #container{*/
/*     background:#ffffff !important;*/
/*   }*/
/*   footer {*/
/*     position: absolute;*/
/*     left: 0;*/
/*     bottom: 0;*/
/*     height: 100px;*/
/*     width: 100%;*/
/*     overflow:hidden;*/
/* }*/
/* */
/*   .login-form {*/
/*     width: 350px;*/
/*     padding: 40px 30px;*/
/*     background: #eee;*/
/*     -moz-border-radius: 4px;*/
/*     -webkit-border-radius: 4px;*/
/*     border-radius: 4px;*/
/*     position: absolute;*/
/*     margin-left: auto;*/
/*     margin-right: auto;*/
/*     left: 0;*/
/*     right: 0;*/
/* */
/* */
/*     top: 50%;*/
/*     -moz-transform: translateY(-50%);*/
/*     -ms-transform: translateY(-50%);*/
/*     -webkit-transform: translateY(-50%);*/
/*     transform: translateY(-50%);*/
/*   }*/
/* */
/*   .mod-form-group {*/
/*     position: relative;*/
/*     margin-bottom: 15px;*/
/*   }*/
/* */
/*   .mod-form-control {*/
/*     width: 100%;*/
/*     height: 50px;*/
/*     border: none;*/
/*     padding: 5px 7px 5px 15px;*/
/*     background: #fff;*/
/*     color: #666;*/
/*     border: 2px solid #ddd;*/
/*     -moz-border-radius: 4px;*/
/*     -webkit-border-radius: 4px;*/
/*     border-radius: 4px;*/
/*   }*/
/*   .mod-form-control:focus, .mod-form-control:focus + .fa {*/
/*     border-color: #10CE88;*/
/*     color: #10CE88;*/
/*   }*/
/* */
/*   .mod-form-group .fa {*/
/*     position:absolute;*/
/*     right: 15px;*/
/*     top: 17px;*/
/*     color: #999;*/
/*   }*/
/*   .log-status.wrong-entry .mod-form-control, .wrong-entry .mod-form-control + .fa {*/
/*     border-color: #ed1c24;*/
/*     color: #ed1c24;*/
/*   }*/
/* */
/*   .log-btn {*/
/*     background: #0AC986;*/
/*     display: inline-block;*/
/*     width: 100%;*/
/*     font-size: 16px;*/
/*     height: 50px;*/
/*     color: #fff;*/
/*     text-decoration: none;*/
/*     border: none;*/
/*     -moz-border-radius: 4px;*/
/*     -webkit-border-radius: 4px;*/
/*     border-radius: 4px;*/
/*   }*/
/* */
/*   .link {*/
/*     text-decoration: none;*/
/*     color: #C6C6C6;*/
/*     float: right;*/
/*     font-size: 12px;*/
/*     margin-bottom: 15px;*/
/*   }*/
/*   .link:hover {*/
/*     text-decoration: underline;*/
/*     color: #8C918F;*/
/*   }*/
/* */
/*   @-moz-keyframes wrong-log {*/
/*     0%, 100% {*/
/*       left: 0px;*/
/*     }*/
/*     20% , 60% {*/
/*       left: 15px;*/
/*     }*/
/*     40% , 80% {*/
/*       left: -15px;*/
/*     }*/
/*   }*/
/* */
/* </style>*/
/* <div id="content">*/
/*   <div class="container-fluid"><br />*/
/*     <br />*/
/*     <div class="row"> */
/* */
/*           <form action="{{ action }}" method="post" class="login-form" enctype="multipart/form-data">*/
/*               <h3><i class="fa fa-lock"></i> {{ text_login }}</h3>*/
/*               {% if success %}*/
/*               <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*               </div>*/
/*               {% endif %}*/
/*               {% if error_warning %}*/
/*               <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*                 <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*               </div>*/
/*               {% endif %}*/
/* */
/*               <div class="mod-form-group ">*/
/*                 <input type="text" name="username" value="{{username}}" placeholder="{{entry_username}}" id="input-username" class="mod-form-control" />*/
/*                 <h3><i class="fa fa-user"></i></h3>*/
/*               </div>*/
/* */
/*               <div class="mod-form-group log-status">*/
/*                   <input type="password" name="password" value="{{ password }}" placeholder="{{ entry_password }}" id="input-password" class="mod-form-control" />*/
/*                   <h3><i class="fa fa-lock"></i></h3>                */
/*                 {% if forgotten %}*/
/*                 <span class="help-block"><a href="{{ forgotten }}">{{ text_forgotten }}</a></span>*/
/*                 {% endif %}*/
/*               </div>*/
/* */
/*               <div class="text-right">*/
/*                 <button type="submit" class="log-btn"><i class="fa fa-key"></i> {{ button_login }}</button>*/
/*               </div>*/
/*               {% if redirect %}*/
/*               <input type="hidden" name="redirect" value="{{ redirect }}" />*/
/*               {% endif %}*/
/*             </form>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* {{ footer }}*/
