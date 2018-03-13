<?php

/* extension/module/fmpim.twig */
class __TwigTemplate_24ae24c3701848eb4816006f3202f5983b6ece0806d6821a5e17018e42111b64 extends Twig_Template
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
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
";
        // line 2
        if (((isset($context["cke"]) ? $context["cke"] : null) &&  !(isset($context["header"]) ? $context["header"] : null))) {
            // line 3
            echo "  <!DOCTYPE html>
  <html dir=\"";
            // line 4
            echo (((isset($context["direction"]) ? $context["direction"] : null)) ? ((isset($context["direction"]) ? $context["direction"] : null)) : ("ltr"));
            echo " \" lang=\"";
            echo (((isset($context["lang"]) ? $context["lang"] : null)) ? ((isset($context["lang"]) ? $context["lang"] : null)) : (""));
            echo " \">
  <head>
  <meta charset=\"UTF-8\" />
  <title>";
            // line 7
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo " </title>
  <base href=\"";
            // line 8
            echo (isset($context["base"]) ? $context["base"] : null);
            echo " \" />

  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
  <script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>

  
  <!-- Power Image Manager -->
  <link rel=\"stylesheet\" href=\"view/javascript/jquery/jquery-ui-1.11.4.custom/jquery-ui.css\" />
  <script src=\"view/javascript/jquery/jquery-ui-1.11.4.custom/jquery-ui.min.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/pim/pim.min.js\"></script>          
  <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"view/stylesheet/pim/pim.min.css\">
  <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"view/stylesheet/pim/theme.css\">
    ";
            // line 20
            if ((isset($context["lang"]) ? $context["lang"] : null)) {
                echo " 
     <script type=\"text/javascript\" src=\"view/javascript/pim/i18n/";
                // line 21
                echo (isset($context["lang"]) ? $context["lang"] : null);
                echo ".js\"></script>  
    ";
            }
            // line 22
            echo "         \t
  <!-- Power Image Manager -->        

  <script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
  <link href=\"view/javascript/bootstrap/opencart/opencart.css\" type=\"text/css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <script src=\"view/javascript/jquery/datetimepicker/moment.js\" type=\"text/javascript\"></script>
  <script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
  <link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
  <link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />  
  </head>
  <body>
";
        }
        // line 37
        echo "<div id=\"content\">
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 41
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h3>
        <div class=\"btn-group pull-right\">
            <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" id=\"pimClose\" type=\"button\">×</button>
        </div>
      </div>
      <div class=\"panel-body\">
        <div id=\"pim\"></div>      
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
function getUrlParam(paramName) {
    var reParam = new RegExp('(?:[\\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;
    var match = window.location.search.match(reParam) ;

    return (match && match.length > 1) ? match[1] : '' ;
}  
\$().ready(function() {
  var funcNum = '';

  ";
        // line 62
        if (((isset($context["cke"]) ? $context["cke"] : null) && ((isset($context["cke"]) ? $context["cke"] : null) != ""))) {
            // line 63
            echo "    funcNum = getUrlParam('CKEditorFuncNum');
  ";
        }
        // line 64
        echo "  
  ";
        // line 65
        if (((isset($context["CKEditorFuncNum"]) ? $context["CKEditorFuncNum"] : null) && ((isset($context["CKEditorFuncNum"]) ? $context["CKEditorFuncNum"] : null) != ""))) {
            // line 66
            echo "    funcNum = ";
            echo (isset($context["CKEditorFuncNum"]) ? $context["CKEditorFuncNum"] : null);
            echo "
  ";
        }
        // line 67
        echo "    
    
\t\tvar elf = \$('#pim').elfinder({
\t\t\turl : 'index.php?route=common/filemanager/connector&user_token=";
        // line 70
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',  // connector URL (REQUIRED)
\t\t\tlang : '";
        // line 71
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "', /* Setup your language here! */
\t\t\tdirimage: '";
        // line 72
        echo (isset($context["dirimage"]) ? $context["dirimage"] : null);
        echo "', 
\t\t\theight: '";
        // line 73
        echo (isset($context["height"]) ? $context["height"] : null);
        echo "',
      useBrowserHistory: false,
      uiOptions : {toolbar : [['home', 'back', 'forward'],['reload'],['mkdir', 'upload'],['open', 'download', 'getfile'],['info'],['quicklook'],['copy', 'cut', 'paste'],['rm'],['duplicate', 'rename', 'edit', 'resize'],['extract', 'archive', 'sort'],['search'],['view'],['help']]},\t\t
      contextmenu: {navbar: [\"open\", \"|\", \"copy\", \"cut\", \"paste\", \"duplicate\", \"|\", \"rm\", \"|\", \"info\"],cwd: [\"reload\", \"back\", \"|\", \"upload\", \"mkdir\", \"mkfile\", \"paste\", \"|\", \"sort\", \"|\", \"info\"],files: [\"getfile\", \"|\", \"open\", \"quicklook\", \"|\", \"download\", \"|\", \"copy\", \"cut\", \"paste\", \"duplicate\", \"|\", \"rm\", \"|\", \"edit\", \"rename\", \"resize\", \"|\", \"archive\",\"extract\", \"|\", \"info\"]},
      ";
        // line 77
        if (((((isset($context["target"]) ? $context["target"] : null) && (isset($context["thumb"]) ? $context["thumb"] : null)) && (isset($context["target"]) ? $context["target"] : null)) && (isset($context["thumb"]) ? $context["thumb"] : null))) {
            // line 78
            echo "        getFileCallback : function(files, fm) {
          a = files.url;
\t\t\t\t\tb = a.replace('";
            // line 80
            echo (isset($context["https_catalog"]) ? $context["https_catalog"] : null);
            echo "','');\t
\t\t\t\t\tb = b.replace('";
            // line 81
            echo (isset($context["dirimage"]) ? $context["dirimage"] : null);
            echo "','');\t
          var img = \$('#";
            // line 82
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "').find('img');
          ";
            // line 83
            if ((isset($context["target"]) ? $context["target"] : null)) {
                // line 84
                echo "\t\t\t\t\t\t\$('#";
                echo (isset($context["target"]) ? $context["target"] : null);
                echo "').val(decodeURIComponent(b));
\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t
          
          var jorunal_is_unbelivable_piece_of_SHIT = img.attr('data-ng-src');
          if (typeof Journal2Config !== typeof undefined && Journal2Config !== false && angular !== typeof undefined && typeof jorunal_is_unbelivable_piece_of_SHIT !== typeof undefined && jorunal_is_unbelivable_piece_of_SHIT !== false) {
            img.attr('data-ng-src',a);
            img.attr('src',a);
            var currentElement = \$('#";
            // line 92
            echo (isset($context["target"]) ? $context["target"] : null);
            echo "');
            var scope = angular.element(currentElement).scope();
            scope.image = b;
            scope.\$apply();
            \$('#pimClose').click();
          } else {
            img.attr('src', files.tmb);
          }
          \$('#modal-image').remove();
\t\t\t\t\t\$('.modal-backdrop').remove();
        }, 
      ";
        }
        // line 103
        echo " 
      ";
        // line 104
        if (((isset($context["cke"]) ? $context["cke"] : null) && ((isset($context["cke"]) ? $context["cke"] : null) != ""))) {
            echo " 
        getFileCallback : function(file) {
          window.opener.CKEDITOR.tools.callFunction(funcNum, file.url)
          self.close();\t
        },
        ";
        }
        // line 109
        echo " 
      ";
        // line 110
        if (((isset($context["CKEditorFuncNum"]) ? $context["CKEditorFuncNum"] : null) && ((isset($context["CKEditorFuncNum"]) ? $context["CKEditorFuncNum"] : null) != ""))) {
            echo " 
        getFileCallback : function(file) {
          window.CKEDITOR.tools.callFunction(funcNum,file.url);
          self.close();\t
      \t\tdelete CKEditorFuncNum;
      \t\t\$('#modal-image').modal('hide');
      \t\t\$('#modal-image').remove();          
        },
        ";
        }
        // line 118
        echo "         
        
        
\t\t\t\t";
        // line 121
        if (((isset($context["productmanager"]) ? $context["productmanager"] : null) && ((isset($context["productmanager"]) ? $context["productmanager"] : null) != ""))) {
            echo " 
\t\t\t\t\t\tgetFileCallback : function(file) {
\t\t\t\t\t\t\tvar pr_id = \$('body').attr('data-current-product-id');
\t\t\t\t\t\t\ta = file.url;
\t\t\t\t\t\t\tb = a.replace('";
            // line 125
            echo (isset($context["dirimage"]) ? $context["dirimage"] : null);
            echo "','');\t
\t\t\t\t\t\t\tb = b.replace('";
            // line 126
            echo (isset($context["https_catalog"]) ? $context["https_catalog"] : null);
            echo "','');\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\tdoSave(pr_id, 'image',b );
\t\t\t\t\t\t\t\$('#modal-image').modal('hide');\t\t\t\t\t\t\t\t
\t\t\t\t\t\t},
\t\t\t\t";
        }
        // line 130
        echo " 
\t\t\t\t
        commandsOptions : {
          getfile : {
            oncomplete : 'close',
          }
        }              
      
\t\t}).elfinder('instance');


  });
  
//--></script>
";
        // line 144
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
        // line 145
        if ((((isset($context["cke"]) ? $context["cke"] : null) && ((isset($context["cke"]) ? $context["cke"] : null) != "")) &&  !(isset($context["footer"]) ? $context["footer"] : null))) {
            // line 146
            echo "</body>
</html>
";
        }
        // line 148
        echo " ";
    }

    public function getTemplateName()
    {
        return "extension/module/fmpim.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 148,  275 => 146,  273 => 145,  269 => 144,  253 => 130,  245 => 126,  241 => 125,  234 => 121,  229 => 118,  217 => 110,  214 => 109,  205 => 104,  202 => 103,  187 => 92,  179 => 86,  173 => 84,  171 => 83,  167 => 82,  163 => 81,  159 => 80,  155 => 78,  153 => 77,  146 => 73,  142 => 72,  138 => 71,  134 => 70,  129 => 67,  123 => 66,  121 => 65,  118 => 64,  114 => 63,  112 => 62,  88 => 41,  82 => 37,  65 => 22,  60 => 21,  56 => 20,  41 => 8,  37 => 7,  29 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* {% if (cke  and  not header) %}*/
/*   <!DOCTYPE html>*/
/*   <html dir="{{ direction?direction:'ltr' }} " lang="{{ lang?lang }} ">*/
/*   <head>*/
/*   <meta charset="UTF-8" />*/
/*   <title>{{ heading_title }} </title>*/
/*   <base href="{{ base }} " />*/
/* */
/*   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />*/
/*   <script type="text/javascript" src="view/javascript/jquery/jquery-2.1.1.min.js"></script>*/
/* */
/*   */
/*   <!-- Power Image Manager -->*/
/*   <link rel="stylesheet" href="view/javascript/jquery/jquery-ui-1.11.4.custom/jquery-ui.css" />*/
/*   <script src="view/javascript/jquery/jquery-ui-1.11.4.custom/jquery-ui.min.js"></script>*/
/*   <script type="text/javascript" src="view/javascript/pim/pim.min.js"></script>          */
/*   <link rel="stylesheet" type="text/css" media="screen" href="view/stylesheet/pim/pim.min.css">*/
/*   <link rel="stylesheet" type="text/css" media="screen" href="view/stylesheet/pim/theme.css">*/
/*     {% if lang %} */
/*      <script type="text/javascript" src="view/javascript/pim/i18n/{{ lang }}.js"></script>  */
/*     {% endif %}         	*/
/*   <!-- Power Image Manager -->        */
/* */
/*   <script type="text/javascript" src="view/javascript/bootstrap/js/bootstrap.min.js"></script>*/
/*   <link href="view/javascript/bootstrap/opencart/opencart.css" type="text/css" rel="stylesheet" />*/
/*   <link href="view/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />*/
/*   <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/*   <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/*   <script src="view/javascript/jquery/datetimepicker/moment.js" type="text/javascript"></script>*/
/*   <script src="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>*/
/*   <link href="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />*/
/*   <link type="text/css" href="view/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />  */
/*   </head>*/
/*   <body>*/
/* {% endif %}*/
/* <div id="content">*/
/*   <div class="container-fluid">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ heading_title }}</h3>*/
/*         <div class="btn-group pull-right">*/
/*             <button aria-hidden="true" data-dismiss="modal" class="close" id="pimClose" type="button">×</button>*/
/*         </div>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div id="pim"></div>      */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* function getUrlParam(paramName) {*/
/*     var reParam = new RegExp('(?:[\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;*/
/*     var match = window.location.search.match(reParam) ;*/
/* */
/*     return (match && match.length > 1) ? match[1] : '' ;*/
/* }  */
/* $().ready(function() {*/
/*   var funcNum = '';*/
/* */
/*   {% if (cke  and  cke != '') %}*/
/*     funcNum = getUrlParam('CKEditorFuncNum');*/
/*   {% endif %}  */
/*   {% if (CKEditorFuncNum  and  CKEditorFuncNum != '') %}*/
/*     funcNum = {{ CKEditorFuncNum }}*/
/*   {% endif %}    */
/*     */
/* 		var elf = $('#pim').elfinder({*/
/* 			url : 'index.php?route=common/filemanager/connector&user_token={{user_token}}',  // connector URL (REQUIRED)*/
/* 			lang : '{{ lang }}', /* Setup your language here! *//* */
/* 			dirimage: '{{ dirimage }}', */
/* 			height: '{{ height }}',*/
/*       useBrowserHistory: false,*/
/*       uiOptions : {toolbar : [['home', 'back', 'forward'],['reload'],['mkdir', 'upload'],['open', 'download', 'getfile'],['info'],['quicklook'],['copy', 'cut', 'paste'],['rm'],['duplicate', 'rename', 'edit', 'resize'],['extract', 'archive', 'sort'],['search'],['view'],['help']]},		*/
/*       contextmenu: {navbar: ["open", "|", "copy", "cut", "paste", "duplicate", "|", "rm", "|", "info"],cwd: ["reload", "back", "|", "upload", "mkdir", "mkfile", "paste", "|", "sort", "|", "info"],files: ["getfile", "|", "open", "quicklook", "|", "download", "|", "copy", "cut", "paste", "duplicate", "|", "rm", "|", "edit", "rename", "resize", "|", "archive","extract", "|", "info"]},*/
/*       {% if target  and  thumb  and  target  and  thumb  %}*/
/*         getFileCallback : function(files, fm) {*/
/*           a = files.url;*/
/* 					b = a.replace('{{ https_catalog }}','');	*/
/* 					b = b.replace('{{ dirimage }}','');	*/
/*           var img = $('#{{ thumb }}').find('img');*/
/*           {% if target %}*/
/* 						$('#{{ target }}').val(decodeURIComponent(b));*/
/* 					{% endif %}*/
/* 					*/
/*           */
/*           var jorunal_is_unbelivable_piece_of_SHIT = img.attr('data-ng-src');*/
/*           if (typeof Journal2Config !== typeof undefined && Journal2Config !== false && angular !== typeof undefined && typeof jorunal_is_unbelivable_piece_of_SHIT !== typeof undefined && jorunal_is_unbelivable_piece_of_SHIT !== false) {*/
/*             img.attr('data-ng-src',a);*/
/*             img.attr('src',a);*/
/*             var currentElement = $('#{{ target }}');*/
/*             var scope = angular.element(currentElement).scope();*/
/*             scope.image = b;*/
/*             scope.$apply();*/
/*             $('#pimClose').click();*/
/*           } else {*/
/*             img.attr('src', files.tmb);*/
/*           }*/
/*           $('#modal-image').remove();*/
/* 					$('.modal-backdrop').remove();*/
/*         }, */
/*       {% endif %} */
/*       {% if  cke  and  cke != '' %} */
/*         getFileCallback : function(file) {*/
/*           window.opener.CKEDITOR.tools.callFunction(funcNum, file.url)*/
/*           self.close();	*/
/*         },*/
/*         {% endif %} */
/*       {% if CKEditorFuncNum  and  CKEditorFuncNum != '' %} */
/*         getFileCallback : function(file) {*/
/*           window.CKEDITOR.tools.callFunction(funcNum,file.url);*/
/*           self.close();	*/
/*       		delete CKEditorFuncNum;*/
/*       		$('#modal-image').modal('hide');*/
/*       		$('#modal-image').remove();          */
/*         },*/
/*         {% endif %}         */
/*         */
/*         */
/* 				{% if productmanager  and  productmanager != '' %} */
/* 						getFileCallback : function(file) {*/
/* 							var pr_id = $('body').attr('data-current-product-id');*/
/* 							a = file.url;*/
/* 							b = a.replace('{{ dirimage }}','');	*/
/* 							b = b.replace('{{ https_catalog }}','');								*/
/* 							doSave(pr_id, 'image',b );*/
/* 							$('#modal-image').modal('hide');								*/
/* 						},*/
/* 				{% endif %} */
/* 				*/
/*         commandsOptions : {*/
/*           getfile : {*/
/*             oncomplete : 'close',*/
/*           }*/
/*         }              */
/*       */
/* 		}).elfinder('instance');*/
/* */
/* */
/*   });*/
/*   */
/* //--></script>*/
/* {{ footer }}*/
/* {% if cke  and  cke != ''  and  not footer %}*/
/* </body>*/
/* </html>*/
/* {% endif %} */
