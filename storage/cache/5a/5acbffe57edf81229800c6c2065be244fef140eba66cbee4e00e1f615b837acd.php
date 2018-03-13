<?php

/* extension/module/anyport/restore/restore_from_file.twig */
class __TwigTemplate_210330b788f8946390daeb1ecb96e921b31f55d5a132fbaccdd5ef978ea15193 extends Twig_Template
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
        echo "<!-- The fileinput-button span is used to style the file input field as button -->
<span class=\"btn btn-success fileinput-button\">
\t<i class=\"glyphicon glyphicon-plus\"></i>
\t<span>Add files...</span>
\t<!-- The file input field used as target for the file upload widget -->
\t<input id=\"fileupload\" type=\"file\" name=\"files[]\" multiple>
</span>
<br>
<br>
<!-- The global progress bar -->
<div id=\"progress\" class=\"progress\">
\t<div class=\"progress-bar progress-bar-success\"></div>
</div>
<!-- The container for the uploaded files -->
<div id=\"files\" class=\"files\"></div>
<script>
/*jslint unparam: true, regexp: true */
/*global window, \$ */
\$(function () {
    // Change this to the location of your server-side upload handler:
var url = 'index.php?route=";
        // line 21
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/upload&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\tuploadButton = \$('<button/>')
\t    .addClass('btn btn-primary upload-button')
\t    .prop('disabled', true)
\t    .text('Processing...')
\t    .on('click', function (e) {
\t    \te.preventDefault();
\t        var \$this = \$(this),
\t            data = \$this.data();
\t        \$this
\t            .off('click')
\t            .text('Abort')
\t            .on('click', function () {
\t                \$this.remove();
\t                data.abort();
\t            });
\t        data.submit().always(function () {
\t            \$this.remove();
\t        });
\t        return false;
\t    });
    \$('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\\.|\\/)(gif|jpe?g|png|txt|tar|zip)\$/i,
        maxFileSize: 9990000000,
        maxChunkSize:1500000,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
        data.context = \$('<div/>').appendTo('#files');
        \$.each(data.files, function (index, file) {
            var node = \$('<p/>').append(\$('<span/>').text(file.name));
            if (!index) {
                node.append('<br>').append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = \$(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append(\$('<span class=\"text-danger\"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        \$('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {

        \$.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = \$('<input>')
                    .attr({
                        type:'hidden',
                        id:'anyport-restore-file',
                        value:file.name,
                    });

                \$(data.context.children()[index])
                    .wrap(link);
                \$('#restore-step-3-next').show();
            } else if (file.error) {
                var error = \$('<span class=\"text-danger\"/>').text(file.error);
                \$(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).on('fileuploadfail', function (e, data) {
        \$.each(data.files, function (index) {
            var error = \$('<span class=\"text-danger\"/>').text('File upload cancelled.');
            \$(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !\$.support.fileInput)
        .parent().addClass(\$.support.fileInput ? undefined : 'disabled');
});
</script>
";
    }

    public function getTemplateName()
    {
        return "extension/module/anyport/restore/restore_from_file.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 21,  19 => 1,);
    }
}
/* <!-- The fileinput-button span is used to style the file input field as button -->*/
/* <span class="btn btn-success fileinput-button">*/
/* 	<i class="glyphicon glyphicon-plus"></i>*/
/* 	<span>Add files...</span>*/
/* 	<!-- The file input field used as target for the file upload widget -->*/
/* 	<input id="fileupload" type="file" name="files[]" multiple>*/
/* </span>*/
/* <br>*/
/* <br>*/
/* <!-- The global progress bar -->*/
/* <div id="progress" class="progress">*/
/* 	<div class="progress-bar progress-bar-success"></div>*/
/* </div>*/
/* <!-- The container for the uploaded files -->*/
/* <div id="files" class="files"></div>*/
/* <script>*/
/* /*jslint unparam: true, regexp: true *//* */
/* /*global window, $ *//* */
/* $(function () {*/
/*     // Change this to the location of your server-side upload handler:*/
/* var url = 'index.php?route={{ module_path }}/upload&user_token={{ user_token }}',*/
/* 	uploadButton = $('<button/>')*/
/* 	    .addClass('btn btn-primary upload-button')*/
/* 	    .prop('disabled', true)*/
/* 	    .text('Processing...')*/
/* 	    .on('click', function (e) {*/
/* 	    	e.preventDefault();*/
/* 	        var $this = $(this),*/
/* 	            data = $this.data();*/
/* 	        $this*/
/* 	            .off('click')*/
/* 	            .text('Abort')*/
/* 	            .on('click', function () {*/
/* 	                $this.remove();*/
/* 	                data.abort();*/
/* 	            });*/
/* 	        data.submit().always(function () {*/
/* 	            $this.remove();*/
/* 	        });*/
/* 	        return false;*/
/* 	    });*/
/*     $('#fileupload').fileupload({*/
/*         url: url,*/
/*         dataType: 'json',*/
/*         autoUpload: false,*/
/*         acceptFileTypes: /(\.|\/)(gif|jpe?g|png|txt|tar|zip)$/i,*/
/*         maxFileSize: 9990000000,*/
/*         maxChunkSize:1500000,*/
/*         // Enable image resizing, except for Android and Opera,*/
/*         // which actually support image resizing, but fail to*/
/*         // send Blob objects via XHR requests:*/
/*         disableImageResize: /Android(?!.*Chrome)|Opera/*/
/*             .test(window.navigator.userAgent),*/
/*         previewMaxWidth: 100,*/
/*         previewMaxHeight: 100,*/
/*         previewCrop: true*/
/*     }).on('fileuploadadd', function (e, data) {*/
/*         data.context = $('<div/>').appendTo('#files');*/
/*         $.each(data.files, function (index, file) {*/
/*             var node = $('<p/>').append($('<span/>').text(file.name));*/
/*             if (!index) {*/
/*                 node.append('<br>').append(uploadButton.clone(true).data(data));*/
/*             }*/
/*             node.appendTo(data.context);*/
/*         });*/
/*     }).on('fileuploadprocessalways', function (e, data) {*/
/*         var index = data.index,*/
/*             file = data.files[index],*/
/*             node = $(data.context.children()[index]);*/
/*         if (file.preview) {*/
/*             node*/
/*                 .prepend('<br>')*/
/*                 .prepend(file.preview);*/
/*         }*/
/*         if (file.error) {*/
/*             node*/
/*                 .append('<br>')*/
/*                 .append($('<span class="text-danger"/>').text(file.error));*/
/*         }*/
/*         if (index + 1 === data.files.length) {*/
/*             data.context.find('button')*/
/*                 .text('Upload')*/
/*                 .prop('disabled', !!data.files.error);*/
/*         }*/
/*     }).on('fileuploadprogressall', function (e, data) {*/
/*         var progress = parseInt(data.loaded / data.total * 100, 10);*/
/*         $('#progress .progress-bar').css(*/
/*             'width',*/
/*             progress + '%'*/
/*         );*/
/*     }).on('fileuploaddone', function (e, data) {*/
/* */
/*         $.each(data.result.files, function (index, file) {*/
/*             if (file.url) {*/
/*                 var link = $('<input>')*/
/*                     .attr({*/
/*                         type:'hidden',*/
/*                         id:'anyport-restore-file',*/
/*                         value:file.name,*/
/*                     });*/
/* */
/*                 $(data.context.children()[index])*/
/*                     .wrap(link);*/
/*                 $('#restore-step-3-next').show();*/
/*             } else if (file.error) {*/
/*                 var error = $('<span class="text-danger"/>').text(file.error);*/
/*                 $(data.context.children()[index])*/
/*                     .append('<br>')*/
/*                     .append(error);*/
/*             }*/
/*         });*/
/*     }).on('fileuploadfail', function (e, data) {*/
/*         $.each(data.files, function (index) {*/
/*             var error = $('<span class="text-danger"/>').text('File upload cancelled.');*/
/*             $(data.context.children()[index])*/
/*                 .append('<br>')*/
/*                 .append(error);*/
/*         });*/
/*     }).prop('disabled', !$.support.fileInput)*/
/*         .parent().addClass($.support.fileInput ? undefined : 'disabled');*/
/* });*/
/* </script>*/
/* */
