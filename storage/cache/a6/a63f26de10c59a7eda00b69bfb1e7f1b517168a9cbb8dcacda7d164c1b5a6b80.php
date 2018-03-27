<?php

/* extension/module/anyport/anyport.twig */
class __TwigTemplate_c26106a80f94ba16b9638ecb69012f895191dcf040fd7db9dba8b1acf68ca15f extends Twig_Template
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
";
        // line 2
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\" class=\"iModuleContent\">

 \t<div class=\"page-header\">
        <div class=\"container-fluid\">
          <h1>";
        // line 7
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
          <ul class=\"breadcrumb\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "            <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "          </ul>
        </div>
    </div>
  \t<div class=\"container-fluid\">
\t\t";
        // line 16
        echo (isset($context["b64"]) ? $context["b64"] : null);
        echo "
\t\t";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "        <div class=\"alert alert-danger autoSlideUp\">
            <i class=\"fa fa-exclamation-circle\"></i>&nbsp;";
            // line 19
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo " <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 22
        echo "        ";
        if ((isset($context["dropbox_notice"]) ? $context["dropbox_notice"] : null)) {
            // line 23
            echo "        <div class=\"alert alert-warning\">
            <i class=\"fa fa-exclamation-circle\"></i>&nbsp;";
            // line 24
            echo (isset($context["dropbox_notice"]) ? $context["dropbox_notice"] : null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 27
        echo "        ";
        if ((isset($context["google_drive_notice"]) ? $context["google_drive_notice"] : null)) {
            // line 28
            echo "        <div class=\"alert alert-warning\">
            <i class=\"fa fa-exclamation-circle\"></i>&nbsp;";
            // line 29
            echo (isset($context["google_drive_notice"]) ? $context["google_drive_notice"] : null);
            echo "<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        ";
        }
        // line 32
        echo "        ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 33
            echo "        <div class=\"alert alert-success autoSlideUp\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
        \t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        </div>
        <script>\$('.autoSlideUp').delay(3000).fadeOut(600, function(){ \$(this).show().css({'visibility':'hidden'}); }).slideUp(600);</script>
        ";
        }
        // line 38
        echo "
  \t\t  <div class=\"panel panel-default\">
  \t\t     <div class=\"panel-heading\">
                <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i>&nbsp;<span style=\"vertical-align:middle;font-weight:bold;\">Module Settings</span></h3>
            </div>
        <div class=\"panel-body\">
            <form action=\"";
        // line 44
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
            \t<input type=\"hidden\" name=\"AnyPort[Activated]\" value=\"";
        // line 45
        echo (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Activated", array())) ? ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Activated", array())) : ("no"));
        echo "\"/>
                <div class=\"tabbable\">
                    <div class=\"tab-navigation main-nav form-inline\">
                        <ul class=\"nav nav-tabs mainMenuTabs\">
                            <li><a href=\"#backup\" data-toggle=\"tab\">";
        // line 49
        echo (isset($context["text_backup"]) ? $context["text_backup"] : null);
        echo "</a></li>
                            <li><a href=\"#restore\" role=\"tab\" data-toggle=\"tab\">";
        // line 50
        echo (isset($context["text_restore"]) ? $context["text_restore"] : null);
        echo "</a></li>
                            <li><a href=\"#auto_backup\" role=\"tab\" data-toggle=\"tab\">";
        // line 51
        echo (isset($context["text_auto_backup"]) ? $context["text_auto_backup"] : null);
        echo "</a></li>
                            <li><a href=\"#settings\" role=\"tab\" data-toggle=\"tab\">";
        // line 52
        echo (isset($context["text_settings"]) ? $context["text_settings"] : null);
        echo "</a></li>
                        </ul>
                        <div class=\"tab-buttons\" style=\"display:none;\">
                        \t<button class=\"btn btn-success save-changes\" role=\"button\" tabindex=\"0\" type=\"submit\"><i class=\"fa fa-check\"></i>&nbsp;";
        // line 55
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "</button>

        \t\t\t\t\t<a onclick=\"location = '";
        // line 57
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "';\" class=\"btn btn-warning\">";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "</a>
                        </div>
                    </div><!-- /.tab-navigation -->

\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div id=\"backup\" class=\"tab-pane fade\">";
        // line 62
        echo (isset($context["tab_backup"]) ? $context["tab_backup"] : null);
        echo "</div>
\t\t\t\t\t\t<div id=\"restore\" class=\"tab-pane\">";
        // line 63
        echo (isset($context["tab_restore"]) ? $context["tab_restore"] : null);
        echo "</div>
\t\t\t\t\t\t<div id=\"auto_backup\" class=\"tab-pane\">";
        // line 64
        echo (isset($context["tab_auto_backup"]) ? $context["tab_auto_backup"] : null);
        echo "</div>
\t\t\t\t\t\t<div id=\"settings\" class=\"tab-pane\">";
        // line 65
        echo (isset($context["tab_settings"]) ? $context["tab_settings"] : null);
        echo "</div>
\t\t\t\t\t</div> <!-- /.tab-content -->
                </div><!-- /.tabbable -->
            </form>
        </div>
    </div>
  \t</div>
</div>
<script>
\t\$('.main-nav a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
      var tab = \$(e.target).attr(\"href\") // activated tab
     \tif (tab == '#settings' || tab == '#auto_backup') {
     \t\t\$('.tab-buttons').show();
     \t} else {
     \t\t\$('.tab-buttons').hide();
     \t}
    });

\t\$('.mainMenuTabs a:first').tab('show'); // Select first tab
\t\$('.popup-list').children().last().children('a').click();
\tif (window.localStorage && window.localStorage['currentTab']) {
\t\t\$('.mainMenuTabs a[href=\"'+window.localStorage['currentTab']+'\"]').tab('show');
\t}
\tif (window.localStorage && window.localStorage['currentSubTab']) {
\t\t\$('a[href=\"'+window.localStorage['currentSubTab']+'\"]').tab('show');
\t}
\t\$('.fadeInOnLoad').css('visibility','visible');
\t\$('.mainMenuTabs a[data-toggle=\"tab\"]').click(function() {
\t\tif (window.localStorage) {
\t\t\twindow.localStorage['currentTab'] = \$(this).attr('href');
\t\t}
\t});
\tvar selectedTab = \$('.selectedTab').val();
\tvar accordionDivs = [jQuery('#accordion_restore'), jQuery('#accordion_backup')];
\tvar anyportPopup = null;
\tvar anyportDrivePopup = null;

\tvar refreshDisabled = function(myaccordion, next) {
\t\tvar index = \$(myaccordion).accordion( \"option\", \"active\" );
\t\tif (next) index = next;
\t\t\$.each(\$(myaccordion).children('h3'), function() {
\t\t\tif (!\$(this).hasClass('permanent-disable')) \$(this).removeClass(\"ui-state-disabled\");
\t\t})
\t\t\$(myaccordion).children('h3:gt('+index+')').addClass(\"ui-state-disabled\");

\t\treturn index;
\t}

\tvar getIndexOf = function(myclass, myaccordion) {
\t\tvar found = false;
\t\t\$.each(\$(myaccordion).children('div'), function(index, value) {
\t\t\tif (\$(this).hasClass(myclass)) {
\t\t\t\tfound = index;
\t\t\t}
\t\t});

\t\treturn found;
\t}

\t\$('.iModuleAdminSuperMenu li').removeClass('selected').eq(selectedTab).addClass('selected');
\t\$('.iModuleAdminSuperWrappers > li').hide().eq(selectedTab).show();

\t\$('.iModuleAdminMenu li').click(function() {
\t\t\$('.iModuleAdminMenu li',\$(this).parents('li')).removeClass('selected');
\t\t\$(this).addClass('selected');
\t\t\$(\$('.iModuleAdminWrappers li',\$(this).parents('li')).hide().get(\$(this).index())).fadeIn(200);
\t});

\t\$('.needMoreSize').click(function() {
\t\twindow.open('../vendors/anyport/help_increase_size.php', '_blank', 'location=no,width=830,height=650,resizable=no');
\t});

\t\$('.showWarnings').click(function() {
\t\t\$(this).parent().children('.warningContainer').slideToggle();
\t});

</script>
";
        // line 142
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "extension/module/anyport/anyport.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 142,  172 => 65,  168 => 64,  164 => 63,  160 => 62,  150 => 57,  145 => 55,  139 => 52,  135 => 51,  131 => 50,  127 => 49,  120 => 45,  116 => 44,  108 => 38,  99 => 33,  96 => 32,  90 => 29,  87 => 28,  84 => 27,  78 => 24,  75 => 23,  72 => 22,  66 => 19,  63 => 18,  61 => 17,  57 => 16,  51 => 12,  40 => 10,  36 => 9,  31 => 7,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* {{ column_left }}*/
/* <div id="content" class="iModuleContent">*/
/* */
/*  	<div class="page-header">*/
/*         <div class="container-fluid">*/
/*           <h1>{{ heading_title }}</h1>*/
/*           <ul class="breadcrumb">*/
/*             {% for breadcrumb in breadcrumbs %}*/
/*             <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*     </div>*/
/*   	<div class="container-fluid">*/
/* 		{{ b64 }}*/
/* 		{% if error_warning %}*/
/*         <div class="alert alert-danger autoSlideUp">*/
/*             <i class="fa fa-exclamation-circle"></i>&nbsp;{{ error_warning }} <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if dropbox_notice %}*/
/*         <div class="alert alert-warning">*/
/*             <i class="fa fa-exclamation-circle"></i>&nbsp;{{ dropbox_notice }}<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if google_drive_notice %}*/
/*         <div class="alert alert-warning">*/
/*             <i class="fa fa-exclamation-circle"></i>&nbsp;{{ google_drive_notice }}<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         {% endif %}*/
/*         {% if success %}*/
/*         <div class="alert alert-success autoSlideUp"><i class="fa fa-check-circle"></i> {{ success }}*/
/*         	<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*         </div>*/
/*         <script>$('.autoSlideUp').delay(3000).fadeOut(600, function(){ $(this).show().css({'visibility':'hidden'}); }).slideUp(600);</script>*/
/*         {% endif %}*/
/* */
/*   		  <div class="panel panel-default">*/
/*   		     <div class="panel-heading">*/
/*                 <h3 class="panel-title"><i class="fa fa-list"></i>&nbsp;<span style="vertical-align:middle;font-weight:bold;">Module Settings</span></h3>*/
/*             </div>*/
/*         <div class="panel-body">*/
/*             <form action="{{ action }}" method="post" enctype="multipart/form-data">*/
/*             	<input type="hidden" name="AnyPort[Activated]" value="{{ data.AnyPort.Activated ? data.AnyPort.Activated : 'no'}}"/>*/
/*                 <div class="tabbable">*/
/*                     <div class="tab-navigation main-nav form-inline">*/
/*                         <ul class="nav nav-tabs mainMenuTabs">*/
/*                             <li><a href="#backup" data-toggle="tab">{{ text_backup }}</a></li>*/
/*                             <li><a href="#restore" role="tab" data-toggle="tab">{{ text_restore }}</a></li>*/
/*                             <li><a href="#auto_backup" role="tab" data-toggle="tab">{{ text_auto_backup }}</a></li>*/
/*                             <li><a href="#settings" role="tab" data-toggle="tab">{{ text_settings }}</a></li>*/
/*                         </ul>*/
/*                         <div class="tab-buttons" style="display:none;">*/
/*                         	<button class="btn btn-success save-changes" role="button" tabindex="0" type="submit"><i class="fa fa-check"></i>&nbsp;{{ button_save }}</button>*/
/* */
/*         					<a onclick="location = '{{ cancel }}';" class="btn btn-warning">{{ button_cancel }}</a>*/
/*                         </div>*/
/*                     </div><!-- /.tab-navigation -->*/
/* */
/* 					<div class="tab-content">*/
/* 						<div id="backup" class="tab-pane fade">{{ tab_backup }}</div>*/
/* 						<div id="restore" class="tab-pane">{{ tab_restore }}</div>*/
/* 						<div id="auto_backup" class="tab-pane">{{ tab_auto_backup }}</div>*/
/* 						<div id="settings" class="tab-pane">{{ tab_settings }}</div>*/
/* 					</div> <!-- /.tab-content -->*/
/*                 </div><!-- /.tabbable -->*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/*   	</div>*/
/* </div>*/
/* <script>*/
/* 	$('.main-nav a[data-toggle="tab"]').on('shown.bs.tab', function (e) {*/
/*       var tab = $(e.target).attr("href") // activated tab*/
/*      	if (tab == '#settings' || tab == '#auto_backup') {*/
/*      		$('.tab-buttons').show();*/
/*      	} else {*/
/*      		$('.tab-buttons').hide();*/
/*      	}*/
/*     });*/
/* */
/* 	$('.mainMenuTabs a:first').tab('show'); // Select first tab*/
/* 	$('.popup-list').children().last().children('a').click();*/
/* 	if (window.localStorage && window.localStorage['currentTab']) {*/
/* 		$('.mainMenuTabs a[href="'+window.localStorage['currentTab']+'"]').tab('show');*/
/* 	}*/
/* 	if (window.localStorage && window.localStorage['currentSubTab']) {*/
/* 		$('a[href="'+window.localStorage['currentSubTab']+'"]').tab('show');*/
/* 	}*/
/* 	$('.fadeInOnLoad').css('visibility','visible');*/
/* 	$('.mainMenuTabs a[data-toggle="tab"]').click(function() {*/
/* 		if (window.localStorage) {*/
/* 			window.localStorage['currentTab'] = $(this).attr('href');*/
/* 		}*/
/* 	});*/
/* 	var selectedTab = $('.selectedTab').val();*/
/* 	var accordionDivs = [jQuery('#accordion_restore'), jQuery('#accordion_backup')];*/
/* 	var anyportPopup = null;*/
/* 	var anyportDrivePopup = null;*/
/* */
/* 	var refreshDisabled = function(myaccordion, next) {*/
/* 		var index = $(myaccordion).accordion( "option", "active" );*/
/* 		if (next) index = next;*/
/* 		$.each($(myaccordion).children('h3'), function() {*/
/* 			if (!$(this).hasClass('permanent-disable')) $(this).removeClass("ui-state-disabled");*/
/* 		})*/
/* 		$(myaccordion).children('h3:gt('+index+')').addClass("ui-state-disabled");*/
/* */
/* 		return index;*/
/* 	}*/
/* */
/* 	var getIndexOf = function(myclass, myaccordion) {*/
/* 		var found = false;*/
/* 		$.each($(myaccordion).children('div'), function(index, value) {*/
/* 			if ($(this).hasClass(myclass)) {*/
/* 				found = index;*/
/* 			}*/
/* 		});*/
/* */
/* 		return found;*/
/* 	}*/
/* */
/* 	$('.iModuleAdminSuperMenu li').removeClass('selected').eq(selectedTab).addClass('selected');*/
/* 	$('.iModuleAdminSuperWrappers > li').hide().eq(selectedTab).show();*/
/* */
/* 	$('.iModuleAdminMenu li').click(function() {*/
/* 		$('.iModuleAdminMenu li',$(this).parents('li')).removeClass('selected');*/
/* 		$(this).addClass('selected');*/
/* 		$($('.iModuleAdminWrappers li',$(this).parents('li')).hide().get($(this).index())).fadeIn(200);*/
/* 	});*/
/* */
/* 	$('.needMoreSize').click(function() {*/
/* 		window.open('../vendors/anyport/help_increase_size.php', '_blank', 'location=no,width=830,height=650,resizable=no');*/
/* 	});*/
/* */
/* 	$('.showWarnings').click(function() {*/
/* 		$(this).parent().children('.warningContainer').slideToggle();*/
/* 	});*/
/* */
/* </script>*/
/* {{ footer }}*/
/* */
