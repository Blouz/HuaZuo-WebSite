<?php

/* common/header.twig */
class __TwigTemplate_d03cf4bed7e4b69bcc778d867cc7937a395123d070818240b9426e2e5755ca17 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 6
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 7
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 8
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 10
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 11
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 13
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>

\t\t\t\t";
        // line 16
        if (((isset($context["pim_status"]) ? $context["pim_status"] : null) == true)) {
            // line 17
            echo "\t\t\t\t\t
\t\t\t\t
          
          
          <link rel=\"stylesheet\" href=\"view/javascript/jquery/jquery-ui-1.11.4.custom/jquery-ui.css\" />
          <script src=\"view/javascript/jquery/jquery-ui-1.11.4.custom/jquery-ui.min.js\"></script>
          <script type=\"text/javascript\" src=\"view/javascript/pim/pim.min.js\"></script>          
          <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"view/stylesheet/pim/pim.min.css\">
          <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"view/stylesheet/pim/theme.css\">
\t\t\t\t\t";
            // line 26
            if ((isset($context["lang"]) ? $context["lang"] : null)) {
                // line 27
                echo "\t\t\t\t\t\t<script type=\"text/javascript\" src=\"view/javascript/pim/i18n/";
                echo (isset($context["lang"]) ? $context["lang"] : null);
                echo ".js\"></script>  
\t\t\t\t\t";
            }
            // line 28
            echo "             
          
          ";
        }
        // line 31
        echo "        
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/stylesheet/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<script src=\"view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />
";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 41
            echo "<link type=\"text/css\" href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 44
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "<script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 48
            echo "<script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</head>
<body>
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">
  <div class=\"container-fluid\">

  
    <div id=\"header-logo\" class=\"navbar-header\"><a href=\"";
        // line 57
        echo (isset($context["home"]) ? $context["home"] : null);
        echo "\" class=\"navbar-brand\"><img src=\"view/image/logo.png\" alt=\"";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "\" title=\"";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "\" /></a></div>
    <a href=\"#\" id=\"button-menu\" class=\"hidden-md hidden-lg\"><span class=\"fa fa-bars\"></span></a>";
        // line 58
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 59
            echo "    
    

    
    <ul class=\"nav navbar-nav navbar-right\">
      <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            // line 64
            echo (isset($context["image"]) ? $context["image"] : null);
            echo "\" alt=\"";
            echo (isset($context["firstname"]) ? $context["firstname"] : null);
            echo " ";
            echo (isset($context["lastname"]) ? $context["lastname"] : null);
            echo "\" title=\"";
            echo (isset($context["username"]) ? $context["username"] : null);
            echo "\" id=\"user-profile\" class=\"img-circle\" />";
            echo (isset($context["firstname"]) ? $context["firstname"] : null);
            echo " ";
            echo (isset($context["lastname"]) ? $context["lastname"] : null);
            echo " <i class=\"fa fa-caret-down fa-fw\"></i></a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          <li><a href=\"";
            // line 66
            echo (isset($context["profile"]) ? $context["profile"] : null);
            echo "\"><i class=\"fa fa-user-circle-o fa-fw\"></i> ";
            echo (isset($context["text_profile"]) ? $context["text_profile"] : null);
            echo "</a></li>
          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 68
            echo (isset($context["text_store"]) ? $context["text_store"] : null);
            echo "</li>
          ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 70
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["store"], "href", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 73
            echo (isset($context["text_help"]) ? $context["text_help"] : null);
            echo "</li>
          <li><a href=\"http://www.opencart.com\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i> ";
            // line 74
            echo (isset($context["text_homepage"]) ? $context["text_homepage"] : null);
            echo "</a></li>
          <li><a href=\"http://docs.opencart.com\" target=\"_blank\"><i class=\"fa fa-file-text-o fa-fw\"></i> ";
            // line 75
            echo (isset($context["text_documentation"]) ? $context["text_documentation"] : null);
            echo "</a></li>
          <li><a href=\"http://forum.opencart.com\" target=\"_blank\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
            // line 76
            echo (isset($context["text_support"]) ? $context["text_support"] : null);
            echo "</a></li>
        </ul>
      </li>
      <li><a href=\"";
            // line 79
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\"><i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</span></a></li>
    </ul>
    ";
        }
        // line 81
        echo " </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 81,  232 => 79,  226 => 76,  222 => 75,  218 => 74,  214 => 73,  211 => 72,  200 => 70,  196 => 69,  192 => 68,  185 => 66,  170 => 64,  163 => 59,  161 => 58,  153 => 57,  144 => 50,  135 => 48,  131 => 47,  128 => 46,  117 => 44,  113 => 43,  100 => 41,  96 => 40,  85 => 31,  80 => 28,  74 => 27,  72 => 26,  61 => 17,  59 => 16,  54 => 13,  48 => 11,  46 => 10,  40 => 8,  38 => 7,  34 => 6,  30 => 5,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />*/
/* <script type="text/javascript" src="view/javascript/jquery/jquery-2.1.1.min.js"></script>*/
/* */
/* 				{% if pim_status == true  %}*/
/* 					*/
/* 				*/
/*           */
/*           */
/*           <link rel="stylesheet" href="view/javascript/jquery/jquery-ui-1.11.4.custom/jquery-ui.css" />*/
/*           <script src="view/javascript/jquery/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>*/
/*           <script type="text/javascript" src="view/javascript/pim/pim.min.js"></script>          */
/*           <link rel="stylesheet" type="text/css" media="screen" href="view/stylesheet/pim/pim.min.css">*/
/*           <link rel="stylesheet" type="text/css" media="screen" href="view/stylesheet/pim/theme.css">*/
/* 					{% if lang %}*/
/* 						<script type="text/javascript" src="view/javascript/pim/i18n/{{ lang }}.js"></script>  */
/* 					{% endif %}             */
/*           */
/*           {% endif %}*/
/*         */
/* <script type="text/javascript" src="view/javascript/bootstrap/js/bootstrap.min.js"></script>*/
/* <link href="view/stylesheet/bootstrap.css" type="text/css" rel="stylesheet" />*/
/* <link href="view/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />*/
/* <script src="view/javascript/jquery/datetimepicker/moment/moment.min.js" type="text/javascript"></script>*/
/* <script src="view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js" type="text/javascript"></script>*/
/* <script src="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>*/
/* <link href="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />*/
/* <link type="text/css" href="view/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />*/
/* {% for style in styles %}*/
/* <link type="text/css" href="{{ style.href }}" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* <script src="view/javascript/common.js" type="text/javascript"></script>*/
/* {% for script in scripts %}*/
/* <script type="text/javascript" src="{{ script }}"></script>*/
/* {% endfor %}*/
/* </head>*/
/* <body>*/
/* <div id="container">*/
/* <header id="header" class="navbar navbar-static-top">*/
/*   <div class="container-fluid">*/
/* */
/*   */
/*     <div id="header-logo" class="navbar-header"><a href="{{ home }}" class="navbar-brand"><img src="view/image/logo.png" alt="{{ heading_title }}" title="{{ heading_title }}" /></a></div>*/
/*     <a href="#" id="button-menu" class="hidden-md hidden-lg"><span class="fa fa-bars"></span></a>{% if logged %}*/
/*     */
/*     */
/* */
/*     */
/*     <ul class="nav navbar-nav navbar-right">*/
/*       <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ image }}" alt="{{ firstname }} {{ lastname }}" title="{{ username }}" id="user-profile" class="img-circle" />{{ firstname }} {{ lastname }} <i class="fa fa-caret-down fa-fw"></i></a>*/
/*         <ul class="dropdown-menu dropdown-menu-right">*/
/*           <li><a href="{{ profile }}"><i class="fa fa-user-circle-o fa-fw"></i> {{ text_profile }}</a></li>*/
/*           <li role="separator" class="divider"></li>*/
/*           <li class="dropdown-header">{{ text_store }}</li>*/
/*           {% for store in stores %}*/
/*           <li><a href="{{ store.href }}" target="_blank">{{ store.name }}</a></li>*/
/*           {% endfor %}*/
/*           <li role="separator" class="divider"></li>*/
/*           <li class="dropdown-header">{{ text_help }}</li>*/
/*           <li><a href="http://www.opencart.com" target="_blank"><i class="fa fa-opencart fa-fw"></i> {{ text_homepage }}</a></li>*/
/*           <li><a href="http://docs.opencart.com" target="_blank"><i class="fa fa-file-text-o fa-fw"></i> {{ text_documentation }}</a></li>*/
/*           <li><a href="http://forum.opencart.com" target="_blank"><i class="fa fa-comments-o fa-fw"></i> {{ text_support }}</a></li>*/
/*         </ul>*/
/*       </li>*/
/*       <li><a href="{{ logout }}"><i class="fa fa-sign-out"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_logout }}</span></a></li>*/
/*     </ul>*/
/*     {% endif %} </div>*/
/* </header>*/
/* */
