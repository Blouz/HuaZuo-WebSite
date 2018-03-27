<?php

/* common/footer.twig */
class __TwigTemplate_baad47129a536a47175c2aed50c4d2f6c64fdea473cd12677a47f94953ceb80b extends Twig_Template
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
        if (((isset($context["pim_status"]) ? $context["pim_status"] : null) == true)) {
            // line 3
            echo "
<script type=\"text/javascript\"><!--
\$(document).ready(function() {
\t
  \$(document).undelegate('a[data-toggle=\\'image\\']', 'click');
  
  \$(document).delegate('a[data-toggle=\\'image\\']', 'click', function(e) {
    e.preventDefault();    
    var element = this;
    \$(element).popover({
      html: true,
      placement: 'right',
      trigger: 'manual',
      content: function() {
        return '<button type=\"button\" id=\"button-image\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></button> <button type=\"button\" id=\"button-clear\" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></button>';
      }
    });
    location.hash = 'pim';
    \$(element).popover('toggle');

    \$('#button-image').on('click', function() {
      \$(element).popover('hide');
      var target = \$(element).parent().find('input').attr('id');
      var thumb = \$(element).attr('id');
      var fm = \$('<div/>').dialogelfinder({
        url : 'index.php?route=common/filemanager/connector&user_token='+getURLVar('user_token'),
        lang : '";
            // line 29
            echo (isset($context["lang"]) ? $context["lang"] : null);
            echo "',
        width : ";
            // line 30
            echo (isset($context["width"]) ? $context["width"] : null);
            echo ",
        height: ";
            // line 31
            echo (isset($context["height"]) ? $context["height"] : null);
            echo ",
        destroyOnClose : true,
        
        uiOptions : {toolbar : [['home', 'back', 'forward'],['reload'],['mkdir', 'upload'],['open', 'download', 'getfile'],['info'],['quicklook'],['copy', 'cut', 'paste'],['rm'],['duplicate', 'rename', 'edit', 'resize'],['extract', 'archive','multiupload'],['search'],['view'],['help']]},
  
        contextmenu: {navbar: [\"open\", \"|\", \"copy\", \"cut\", \"paste\", \"duplicate\", \"|\", \"rm\", \"|\", \"info\"],cwd: [\"reload\", \"back\", \"|\", \"upload\", \"mkdir\", \"mkfile\", \"paste\", \"|\", \"sort\", \"|\", \"info\"],files: [\"getfile\", \"|\", \"open\", \"quicklook\", \"|\", \"download\", \"|\", \"copy\", \"cut\", \"paste\", \"duplicate\", \"|\", \"rm\", \"|\", \"edit\", \"rename\", \"resize\", \"|\", \"archive\",\"multiupload\", \"extract\", \"|\", \"info\"]},
        
        getFileCallback : function(files, fm) {
          a = files.url;

\t\t\t\t\tb = a.replace('";
            // line 41
            echo (isset($context["image_url"]) ? $context["image_url"] : null);
            echo "','');\t
\t\t\t\t\tb = b.replace('";
            // line 42
            echo (isset($context["image_url2"]) ? $context["image_url2"] : null);
            echo "','');\t
          
          
          \$('#'+thumb).find('img').attr('src', files.tmb);
          \$('#'+target).val(decodeURIComponent(b));
          \$('#radio-'+target).removeAttr('disabled');
          \$('#radio-'+target).val(b);
        },
        commandsOptions : {
          getfile : {
            oncomplete : 'close',
          }
        }
      }).dialogelfinder('instance');
      return;
    });

    \$('#button-clear').on('click', function() {
      \$(element).find('img').attr('src', \$(element).find('img').attr('data-placeholder'));
      \$(element).parent().find('input').attr('value', '');
      \$(element).popover('hide');
    });
  });

  \$(document).delegate('a[data-toggle=\\'manager\\']', 'click', function(e) {
    e.preventDefault();
    var fm = \$('<div/>').dialogelfinder({
      url : 'index.php?route=common/filemanager/connector&user_token='+getURLVar('user_token'),
      lang : '";
            // line 70
            echo (isset($context["lang"]) ? $context["lang"] : null);
            echo "',
      width : ";
            // line 71
            echo (isset($context["width"]) ? $context["width"] : null);
            echo ",
      height: ";
            // line 72
            echo (isset($context["height"]) ? $context["height"] : null);
            echo ",
      destroyOnClose : true,
      
      uiOptions : {toolbar : [['home', 'back', 'forward'],['reload'],['mkdir', 'upload'],['open', 'download', 'getfile'],['info'],['quicklook'],['copy', 'cut', 'paste'],['rm'],['duplicate', 'rename', 'edit', 'resize'],['extract', 'archive','multiupload', 'sort'],['search'],['view'],['help']]},

      contextmenu: {navbar: [\"open\", \"|\", \"copy\", \"cut\", \"paste\", \"duplicate\", \"|\", \"rm\", \"|\", \"info\"],cwd: [\"reload\", \"back\", \"|\", \"upload\", \"mkdir\", \"mkfile\", \"paste\", \"|\", \"sort\", \"|\", \"info\"],files: [\"getfile\", \"|\", \"open\", \"quicklook\", \"|\", \"download\", \"|\", \"copy\", \"cut\", \"paste\", \"duplicate\", \"|\", \"rm\", \"|\", \"edit\", \"rename\", \"resize\", \"|\", \"archive\",\"multiupload\", \"extract\", \"|\", \"info\"]},
      
      getFileCallback : function(files, fm) {
        a = files.url;
\t\t\t\t\tb = a.replace('";
            // line 81
            echo (isset($context["image_url"]) ? $context["image_url"] : null);
            echo "','');\t
\t\t\t\t\tb = b.replace('";
            // line 82
            echo (isset($context["image_url2"]) ? $context["image_url2"] : null);
            echo "','');\t
        addMultiImage(decodeURIComponent(b));
      },
      commandsOptions : {
        getfile : {
          oncomplete : 'close',
          folders : false
        }
      }
    }).dialogelfinder('instance');
  });

 \$(document).undelegate('button[data-toggle=\\'image\\']', 'click');
 
    \$(document).delegate('button[data-toggle=\\'image\\']', 'click', function(e) {
\t\t\te.preventDefault();
      location.hash = '';
      var fm = \$('<div/>').dialogelfinder({
        url : 'index.php?route=common/filemanager/connector&user_token=' + getURLVar('user_token'),
        lang : '";
            // line 101
            echo (isset($context["lang"]) ? $context["lang"] : null);
            echo "',
        width : ";
            // line 102
            echo (isset($context["width"]) ? $context["width"] : null);
            echo ",
        height: ";
            // line 103
            echo (isset($context["height"]) ? $context["height"] : null);
            echo ",
        destroyOnClose : true,
        getFileCallback : function(files, fm) {
          var range, sel = window.getSelection();  
          if (sel.rangeCount) {
            var img = document.createElement('img');
            a = files.url;
            b = a.replace(files.baseUrl,'');
            img.src = files.baseUrl+''+b;
            range = sel.getRangeAt(0);
            range.insertNode(img);
          }
        },
        commandsOptions : {
          getfile : {
            oncomplete : 'close',
            folders : false
          }
        }
      }).dialogelfinder('instance');
    });
\t\t
\$('[data-toggle=\\'summernote\\']').each(function() {
\t\tvar element = this;
\t\tif (\$(this).attr('data-lang')) {
\t\t\t\$('head').append('<script type=\"text/javascript\" src=\"view/javascript/summernote/lang/summernote-' + \$(this).attr('data-lang') + '.js\"></script>');
\t\t}
\t\t
\t\t\$(element).summernote({
\t\t\tlang: \$(this).attr('data-lang'),
\t\t\tdisableDragAndDrop: true,
\t\t\theight: 300,
\t\t\t
\t\t\t
\t\t\ttoolbar: [
\t\t\t\t['style', ['style']],
\t\t\t\t['font', ['bold', 'underline', 'clear']],
\t\t\t\t['fontname', ['fontname']],
\t\t\t\t['color', ['color']],
\t\t\t\t['para', ['ul', 'ol', 'paragraph']],
\t\t\t\t['table', ['table']],
\t\t\t\t['insert', ['link', 'pimimage', 'video']],
\t\t\t\t['view', ['fullscreen', 'codeview', 'help']]
\t\t\t],
\t\t\tbuttons: {
    \t\t\tpimimage: function() {
\t\t\t\t\tvar ui = \$.summernote.ui;

\t\t\t\t\t
\t\t\t\t\tvar button = ui.button({
\t\t\t\t\t\tcontents: '<i class=\"note-icon-picture\" />',
\t\t\t\t\t\ttooltip: \$.summernote.lang[\$.summernote.options.lang].image.image,
\t\t\t\t\t\tclick: function () {
\t\t\t\t\t\t\t\$('#modal-image').remove();
\t\t\t\t\t\t\tvar fm = \$('<div/>').dialogelfinder({
\t\t\t\t\t\t\t\turl : 'index.php?route=common/filemanager/connector&user_token=' + getURLVar('user_token'),
\t\t\t\t\t\t\t\tlang : '";
            // line 159
            echo (isset($context["lang"]) ? $context["lang"] : null);
            echo "',
\t\t\t\t\t\t\t\twidth : ";
            // line 160
            echo (isset($context["width"]) ? $context["width"] : null);
            echo ",
\t\t\t\t\t\t\t\theight: ";
            // line 161
            echo (isset($context["height"]) ? $context["height"] : null);
            echo ",
\t\t\t\t\t\t\t\tdestroyOnClose : true,
\t\t\t\t\t\t\t\tgetFileCallback : function(files, fm) {
\t\t\t\t\t\t\t\t\t\tvar img = document.createElement('img');
\t\t\t\t\t\t\t\t\t\ta = files.url;
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\$(element).summernote('insertImage', a);
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tcommandsOptions : {
\t\t\t\t\t\t\t\t\tgetfile : {
\t\t\t\t\t\t\t\t\t\toncomplete : 'close',
\t\t\t\t\t\t\t\t\t\tfolders : false
\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}).dialogelfinder('instance');\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t
\t\t\t\t\treturn button.render();
\t\t\t\t}
  \t\t\t}
\t\t});
\t});\t\t
\t\t
});
//--></script> \t\t\t\t\t

\t\t";
        }
        // line 189
        echo "
        
<footer id=\"footer\">";
        // line 191
        echo (isset($context["text_footer"]) ? $context["text_footer"] : null);
        echo "<br />";
        echo (isset($context["text_version"]) ? $context["text_version"] : null);
        echo "</footer></div>
</body></html>
";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 191,  260 => 189,  229 => 161,  225 => 160,  221 => 159,  162 => 103,  158 => 102,  154 => 101,  132 => 82,  128 => 81,  116 => 72,  112 => 71,  108 => 70,  77 => 42,  73 => 41,  60 => 31,  56 => 30,  52 => 29,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% if pim_status == true %}*/
/* */
/* <script type="text/javascript"><!--*/
/* $(document).ready(function() {*/
/* 	*/
/*   $(document).undelegate('a[data-toggle=\'image\']', 'click');*/
/*   */
/*   $(document).delegate('a[data-toggle=\'image\']', 'click', function(e) {*/
/*     e.preventDefault();    */
/*     var element = this;*/
/*     $(element).popover({*/
/*       html: true,*/
/*       placement: 'right',*/
/*       trigger: 'manual',*/
/*       content: function() {*/
/*         return '<button type="button" id="button-image" class="btn btn-primary"><i class="fa fa-pencil"></i></button> <button type="button" id="button-clear" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>';*/
/*       }*/
/*     });*/
/*     location.hash = 'pim';*/
/*     $(element).popover('toggle');*/
/* */
/*     $('#button-image').on('click', function() {*/
/*       $(element).popover('hide');*/
/*       var target = $(element).parent().find('input').attr('id');*/
/*       var thumb = $(element).attr('id');*/
/*       var fm = $('<div/>').dialogelfinder({*/
/*         url : 'index.php?route=common/filemanager/connector&user_token='+getURLVar('user_token'),*/
/*         lang : '{{ lang }}',*/
/*         width : {{ width }},*/
/*         height: {{ height }},*/
/*         destroyOnClose : true,*/
/*         */
/*         uiOptions : {toolbar : [['home', 'back', 'forward'],['reload'],['mkdir', 'upload'],['open', 'download', 'getfile'],['info'],['quicklook'],['copy', 'cut', 'paste'],['rm'],['duplicate', 'rename', 'edit', 'resize'],['extract', 'archive','multiupload'],['search'],['view'],['help']]},*/
/*   */
/*         contextmenu: {navbar: ["open", "|", "copy", "cut", "paste", "duplicate", "|", "rm", "|", "info"],cwd: ["reload", "back", "|", "upload", "mkdir", "mkfile", "paste", "|", "sort", "|", "info"],files: ["getfile", "|", "open", "quicklook", "|", "download", "|", "copy", "cut", "paste", "duplicate", "|", "rm", "|", "edit", "rename", "resize", "|", "archive","multiupload", "extract", "|", "info"]},*/
/*         */
/*         getFileCallback : function(files, fm) {*/
/*           a = files.url;*/
/* */
/* 					b = a.replace('{{ image_url }}','');	*/
/* 					b = b.replace('{{ image_url2 }}','');	*/
/*           */
/*           */
/*           $('#'+thumb).find('img').attr('src', files.tmb);*/
/*           $('#'+target).val(decodeURIComponent(b));*/
/*           $('#radio-'+target).removeAttr('disabled');*/
/*           $('#radio-'+target).val(b);*/
/*         },*/
/*         commandsOptions : {*/
/*           getfile : {*/
/*             oncomplete : 'close',*/
/*           }*/
/*         }*/
/*       }).dialogelfinder('instance');*/
/*       return;*/
/*     });*/
/* */
/*     $('#button-clear').on('click', function() {*/
/*       $(element).find('img').attr('src', $(element).find('img').attr('data-placeholder'));*/
/*       $(element).parent().find('input').attr('value', '');*/
/*       $(element).popover('hide');*/
/*     });*/
/*   });*/
/* */
/*   $(document).delegate('a[data-toggle=\'manager\']', 'click', function(e) {*/
/*     e.preventDefault();*/
/*     var fm = $('<div/>').dialogelfinder({*/
/*       url : 'index.php?route=common/filemanager/connector&user_token='+getURLVar('user_token'),*/
/*       lang : '{{ lang }}',*/
/*       width : {{ width }},*/
/*       height: {{ height }},*/
/*       destroyOnClose : true,*/
/*       */
/*       uiOptions : {toolbar : [['home', 'back', 'forward'],['reload'],['mkdir', 'upload'],['open', 'download', 'getfile'],['info'],['quicklook'],['copy', 'cut', 'paste'],['rm'],['duplicate', 'rename', 'edit', 'resize'],['extract', 'archive','multiupload', 'sort'],['search'],['view'],['help']]},*/
/* */
/*       contextmenu: {navbar: ["open", "|", "copy", "cut", "paste", "duplicate", "|", "rm", "|", "info"],cwd: ["reload", "back", "|", "upload", "mkdir", "mkfile", "paste", "|", "sort", "|", "info"],files: ["getfile", "|", "open", "quicklook", "|", "download", "|", "copy", "cut", "paste", "duplicate", "|", "rm", "|", "edit", "rename", "resize", "|", "archive","multiupload", "extract", "|", "info"]},*/
/*       */
/*       getFileCallback : function(files, fm) {*/
/*         a = files.url;*/
/* 					b = a.replace('{{ image_url }}','');	*/
/* 					b = b.replace('{{ image_url2 }}','');	*/
/*         addMultiImage(decodeURIComponent(b));*/
/*       },*/
/*       commandsOptions : {*/
/*         getfile : {*/
/*           oncomplete : 'close',*/
/*           folders : false*/
/*         }*/
/*       }*/
/*     }).dialogelfinder('instance');*/
/*   });*/
/* */
/*  $(document).undelegate('button[data-toggle=\'image\']', 'click');*/
/*  */
/*     $(document).delegate('button[data-toggle=\'image\']', 'click', function(e) {*/
/* 			e.preventDefault();*/
/*       location.hash = '';*/
/*       var fm = $('<div/>').dialogelfinder({*/
/*         url : 'index.php?route=common/filemanager/connector&user_token=' + getURLVar('user_token'),*/
/*         lang : '{{ lang }}',*/
/*         width : {{ width }},*/
/*         height: {{ height }},*/
/*         destroyOnClose : true,*/
/*         getFileCallback : function(files, fm) {*/
/*           var range, sel = window.getSelection();  */
/*           if (sel.rangeCount) {*/
/*             var img = document.createElement('img');*/
/*             a = files.url;*/
/*             b = a.replace(files.baseUrl,'');*/
/*             img.src = files.baseUrl+''+b;*/
/*             range = sel.getRangeAt(0);*/
/*             range.insertNode(img);*/
/*           }*/
/*         },*/
/*         commandsOptions : {*/
/*           getfile : {*/
/*             oncomplete : 'close',*/
/*             folders : false*/
/*           }*/
/*         }*/
/*       }).dialogelfinder('instance');*/
/*     });*/
/* 		*/
/* $('[data-toggle=\'summernote\']').each(function() {*/
/* 		var element = this;*/
/* 		if ($(this).attr('data-lang')) {*/
/* 			$('head').append('<script type="text/javascript" src="view/javascript/summernote/lang/summernote-' + $(this).attr('data-lang') + '.js"></script>');*/
/* 		}*/
/* 		*/
/* 		$(element).summernote({*/
/* 			lang: $(this).attr('data-lang'),*/
/* 			disableDragAndDrop: true,*/
/* 			height: 300,*/
/* 			*/
/* 			*/
/* 			toolbar: [*/
/* 				['style', ['style']],*/
/* 				['font', ['bold', 'underline', 'clear']],*/
/* 				['fontname', ['fontname']],*/
/* 				['color', ['color']],*/
/* 				['para', ['ul', 'ol', 'paragraph']],*/
/* 				['table', ['table']],*/
/* 				['insert', ['link', 'pimimage', 'video']],*/
/* 				['view', ['fullscreen', 'codeview', 'help']]*/
/* 			],*/
/* 			buttons: {*/
/*     			pimimage: function() {*/
/* 					var ui = $.summernote.ui;*/
/* */
/* 					*/
/* 					var button = ui.button({*/
/* 						contents: '<i class="note-icon-picture" />',*/
/* 						tooltip: $.summernote.lang[$.summernote.options.lang].image.image,*/
/* 						click: function () {*/
/* 							$('#modal-image').remove();*/
/* 							var fm = $('<div/>').dialogelfinder({*/
/* 								url : 'index.php?route=common/filemanager/connector&user_token=' + getURLVar('user_token'),*/
/* 								lang : '{{ lang }}',*/
/* 								width : {{ width }},*/
/* 								height: {{ height }},*/
/* 								destroyOnClose : true,*/
/* 								getFileCallback : function(files, fm) {*/
/* 										var img = document.createElement('img');*/
/* 										a = files.url;*/
/* 										*/
/* 										$(element).summernote('insertImage', a);*/
/* 								},*/
/* 								commandsOptions : {*/
/* 									getfile : {*/
/* 										oncomplete : 'close',*/
/* 										folders : false*/
/* 									}*/
/* 								}*/
/* 							}).dialogelfinder('instance');			*/
/* 						}*/
/* 					});*/
/* 				*/
/* 					return button.render();*/
/* 				}*/
/*   			}*/
/* 		});*/
/* 	});		*/
/* 		*/
/* });*/
/* //--></script> 					*/
/* */
/* 		{% endif %}*/
/* */
/*         */
/* <footer id="footer">{{ text_footer }}<br />{{ text_version }}</footer></div>*/
/* </body></html>*/
/* */
