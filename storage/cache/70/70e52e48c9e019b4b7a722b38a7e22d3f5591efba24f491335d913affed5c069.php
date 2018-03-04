<?php

/* extension/module/anyport/backup/files_backup.twig */
class __TwigTemplate_e35db39284ae2bfb507732528b86b3d119ef7a8037e728845efedb111efe7a28 extends Twig_Template
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
        echo "<h2 class=\"files-backu-heading\">";
        echo (isset($context["text_select_files"]) ? $context["text_select_files"] : null);
        echo "</h2>
<div class=\"well\" id=\"directoryListingContainer\" style=\"margin-left: 15px;\">
\t<div id=\"directoryListing\">
    </div>
</div>

<script>
var cwd = '";
        // line 8
        echo (isset($context["cwd"]) ? $context["cwd"] : null);
        echo "';
var dir_listing = [];
var dirListingObj = \$('#directoryListing');
var progressLogObj = \$('#processLog');
var progressBarObj = \$('#progressBar');
var progressBarMsgObj = \$('#progressBarMsg');
var processFinished = true;
var progressLastRun = false;
var lastPrintedMessage = '';
var initialRun = 1;
var selected_paths = [];
var lastZipResponse = {};
var isPaused = false;

function populate_dir_listing(entries) {
\tdirListingObj.empty();

\tif (entries.dirs) {
\t\tvar dir_html = '';
\t\tfor (x in entries.dirs) {
\t\t\tif (entries.dirs[x].name == '../') {
\t\t\t\tdir_html += '<div><label for=\"'+x+'\"><a class=\"dir-listing-entry\" data-key=\"'+x+'\"><i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i></a></label></div>';
\t\t\t} else {
\t\t\t\tdir_html += '<div class=\"checkbox\"><input type=\"checkbox\" class=\"selected-to-zip\" name=\"targetEntries\" value=\"'+entries.dirs[x].absolute_path+'\" id=\"'+x+'\" /><label for=\"'+x+'\"><i class=\"fa fa-folder\"></i>&nbsp;<a class=\"dir-listing-entry\" data-key=\"'+x+'\">'+entries.dirs[x].name+'</a></label></div>';
\t\t\t}

\t\t}
\t\tdirListingObj.append(dir_html);
\t}

\tif (entries.files) {
\t\tvar files_html = '';
\t\tfor (x in entries.files) {
\t\t\tfiles_html += '<div class=\"checkbox\"><input class=\"selected-to-zip\" type=\"checkbox\" name=\"targetEntries\" value=\"'+entries.files[x].absolute_path+'\" id=\"'+x+'\" /><label for=\"'+x+'\"><i class=\"fa fa-file\"></i>&nbsp;'+entries.files[x].name+'</label></div>';
\t\t}
\t\tdirListingObj.append(files_html);
\t}
}

function get_dir_listing(target_dir) {
\ttarget_dir = target_dir ? target_dir : '';
\t\$.ajax({
\t\turl: 'index.php?route=";
        // line 50
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/listDirectory&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
\t\ttype: 'GET',
\t\tdata: {
\t\t\tdir: target_dir
\t\t},
\t\tdataType: 'json',
\t\tsuccess: function(resp) {
\t\t\tif (!resp.error) {
\t\t\t\tcwd = resp.cwd;
\t\t\t\tdir_listing = resp.entries;
\t\t\t\tpopulate_dir_listing(dir_listing);
\t\t\t} else {
\t\t\t\tswal({
\t\t\t\t    title: 'Error:',
\t\t\t\t    text: resp.msg,
\t\t\t\t    type: 'error'
\t\t\t\t});
\t\t\t}
\t\t}
\t});
}

\$(document).on('click', '.dir-listing-entry', function(e){
\te.preventDefault();
\tvar key = \$(this).attr('data-key');
\tif (dir_listing.dirs[key]) {
\t\tget_dir_listing(dir_listing.dirs[key].absolute_path);
\t}
});


\$(document).ready(function(){
\tget_dir_listing(cwd);
});
</script>
";
    }

    public function getTemplateName()
    {
        return "extension/module/anyport/backup/files_backup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 50,  30 => 8,  19 => 1,);
    }
}
/* <h2 class="files-backu-heading">{{ text_select_files }}</h2>*/
/* <div class="well" id="directoryListingContainer" style="margin-left: 15px;">*/
/* 	<div id="directoryListing">*/
/*     </div>*/
/* </div>*/
/* */
/* <script>*/
/* var cwd = '{{ cwd }}';*/
/* var dir_listing = [];*/
/* var dirListingObj = $('#directoryListing');*/
/* var progressLogObj = $('#processLog');*/
/* var progressBarObj = $('#progressBar');*/
/* var progressBarMsgObj = $('#progressBarMsg');*/
/* var processFinished = true;*/
/* var progressLastRun = false;*/
/* var lastPrintedMessage = '';*/
/* var initialRun = 1;*/
/* var selected_paths = [];*/
/* var lastZipResponse = {};*/
/* var isPaused = false;*/
/* */
/* function populate_dir_listing(entries) {*/
/* 	dirListingObj.empty();*/
/* */
/* 	if (entries.dirs) {*/
/* 		var dir_html = '';*/
/* 		for (x in entries.dirs) {*/
/* 			if (entries.dirs[x].name == '../') {*/
/* 				dir_html += '<div><label for="'+x+'"><a class="dir-listing-entry" data-key="'+x+'"><i class="fa fa-arrow-left" aria-hidden="true"></i></a></label></div>';*/
/* 			} else {*/
/* 				dir_html += '<div class="checkbox"><input type="checkbox" class="selected-to-zip" name="targetEntries" value="'+entries.dirs[x].absolute_path+'" id="'+x+'" /><label for="'+x+'"><i class="fa fa-folder"></i>&nbsp;<a class="dir-listing-entry" data-key="'+x+'">'+entries.dirs[x].name+'</a></label></div>';*/
/* 			}*/
/* */
/* 		}*/
/* 		dirListingObj.append(dir_html);*/
/* 	}*/
/* */
/* 	if (entries.files) {*/
/* 		var files_html = '';*/
/* 		for (x in entries.files) {*/
/* 			files_html += '<div class="checkbox"><input class="selected-to-zip" type="checkbox" name="targetEntries" value="'+entries.files[x].absolute_path+'" id="'+x+'" /><label for="'+x+'"><i class="fa fa-file"></i>&nbsp;'+entries.files[x].name+'</label></div>';*/
/* 		}*/
/* 		dirListingObj.append(files_html);*/
/* 	}*/
/* }*/
/* */
/* function get_dir_listing(target_dir) {*/
/* 	target_dir = target_dir ? target_dir : '';*/
/* 	$.ajax({*/
/* 		url: 'index.php?route={{ module_path }}/listDirectory&user_token={{ user_token }}',*/
/* 		type: 'GET',*/
/* 		data: {*/
/* 			dir: target_dir*/
/* 		},*/
/* 		dataType: 'json',*/
/* 		success: function(resp) {*/
/* 			if (!resp.error) {*/
/* 				cwd = resp.cwd;*/
/* 				dir_listing = resp.entries;*/
/* 				populate_dir_listing(dir_listing);*/
/* 			} else {*/
/* 				swal({*/
/* 				    title: 'Error:',*/
/* 				    text: resp.msg,*/
/* 				    type: 'error'*/
/* 				});*/
/* 			}*/
/* 		}*/
/* 	});*/
/* }*/
/* */
/* $(document).on('click', '.dir-listing-entry', function(e){*/
/* 	e.preventDefault();*/
/* 	var key = $(this).attr('data-key');*/
/* 	if (dir_listing.dirs[key]) {*/
/* 		get_dir_listing(dir_listing.dirs[key].absolute_path);*/
/* 	}*/
/* });*/
/* */
/* */
/* $(document).ready(function(){*/
/* 	get_dir_listing(cwd);*/
/* });*/
/* </script>*/
/* */
