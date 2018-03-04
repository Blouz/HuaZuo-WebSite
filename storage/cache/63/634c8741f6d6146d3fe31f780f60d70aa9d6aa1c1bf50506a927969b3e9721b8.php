<?php

/* extension/module/anyport/tab_restore.twig */
class __TwigTemplate_6e74fd654884b91f0dae8d8ea30de2e6e7ce3a2ff7d5c5495f702e58a903ebcf extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"https://www.dropbox.com/static/api/2/dropins.js\" id=\"dropboxjs\" data-app-key=\"";
        echo (isset($context["ClientID"]) ? $context["ClientID"] : null);
        echo "\"></script>
 
<div class=\"progress-steps\">
    <div class=\"restore-progress-track\">
        <span class=\"restore-progress\"></span>
    </div>
    <ul class=\"nav nav-tabs progress-points choose-restore\">
        <li rel-index=\"0\" class=\"active progress-point\">
            <a href=\"#restore-step-1\"  aria-controls=\"restore-step-1\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
            <span class=\"step-label\">1. ";
        // line 10
        echo (isset($context["text_select_restore_type"]) ? $context["text_select_restore_type"] : null);
        echo "</span>
        </li>
        <li rel-index=\"1\" class=\"progress-point\">
            <a href=\"#restore-step-2\" class=\"disabled\" aria-controls=\"restore-step-2\" role=\"tab\" data-toggle=\"tab\">
                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
            </a>
            <span class=\"step-label\">2. ";
        // line 16
        echo (isset($context["text_select_restore_source"]) ? $context["text_select_restore_source"] : null);
        echo "</span>
        </li>
        <li rel-index=\"2\" class=\"progress-point\">
            <a href=\"#restore-step-3\" class=\"disabled\" aria-controls=\"restore-step-3\" role=\"tab\" data-toggle=\"tab\">
                <i class=\"fa fa-check\" aria-hidden=\"true\"></i><span class=\"step-label\">3</span>
            </a>
            <span class=\"step-label\">3. ";
        // line 22
        echo (isset($context["text_restore_file"]) ? $context["text_restore_file"] : null);
        echo "</span>
        </li>
        <li rel-index=\"3\" class=\"progress-point\">
            <a href=\"#restore-step-4\" class=\"disabled\" aria-controls=\"restore-step-4\" role=\"tab\" data-toggle=\"tab\">
                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
            </a>
            <span class=\"step-label\">4. ";
        // line 28
        echo (isset($context["text_restore_summary"]) ? $context["text_restore_summary"] : null);
        echo "</span>
        </li>
    </ul>
</div>
<div class=\"tab-content\">
    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"restore-step-1\">
        <div class=\"col-md-12\">
            <table class=\"tableWrapper\">
                <tr>
                    <td valign=\"top\">
                        <ul class=\"backupTypesList\">
                            <li class=\"sectionHeading\"><h2>1. ";
        // line 39
        echo (isset($context["text_restore_types"]) ? $context["text_restore_types"] : null);
        echo "</h2></li>
                            <div class=\"row\">
                                <div class=\"col-xs-5\">
                                    <li class=\"fullRestore\">
                                        <input type=\"radio\" name=\"AnyPort[Restore][Type]\" id=\"FullRestore_Restore\" value=\"FullRestore\" />
                                        <label for=\"FullRestore_Restore\">";
        // line 44
        echo (isset($context["text_full_restore"]) ? $context["text_full_restore"] : null);
        echo "</label>
                                        <p>";
        // line 45
        echo (isset($context["text_full_restore_desc"]) ? $context["text_full_restore_desc"] : null);
        echo "</p>
                                    </li>
                                    <li class=\"databaseRestore\">
                                        <input type=\"radio\" name=\"AnyPort[Restore][Type]\" id=\"DatabaseRestore_Restore\" value=\"DatabaseRestore\" />
                                        <label for=\"DatabaseRestore_Restore\">";
        // line 49
        echo (isset($context["text_restore_database"]) ? $context["text_restore_database"] : null);
        echo "</label>
                                        <p>";
        // line 50
        echo (isset($context["text_restore_database_desc"]) ? $context["text_restore_database_desc"] : null);
        echo " </p>
                                    </li>
                                </div>
                                <div class=\"col-xs-5 col-xs-offset-2\">
                                   <li class=\"filesRestore\">
                                        <input type=\"radio\" name=\"AnyPort[Restore][Type]\" id=\"FilesRestore_Restore\" value=\"FilesRestore\" />
                                        <label for=\"FilesRestore_Restore\">";
        // line 56
        echo (isset($context["text_restore_files"]) ? $context["text_restore_files"] : null);
        echo "</label>
                                        <p>";
        // line 57
        echo (isset($context["text_restore_files_desc"]) ? $context["text_restore_files_desc"] : null);
        echo "</p>
                                    </li>

                                </div>
                            </div>
                             <li class=\"helpMessage\"><span class=\"cloudHelp\"><strong>Note:</strong> ";
        // line 62
        echo (isset($context["text_help_message_restore"]) ? $context["text_help_message_restore"] : null);
        echo "</span></li>
                            <li class=\"clearfix\"></li>
                        </ul>
                    </td>
                </tr>
            </table>
            <button id=\"restore-step-1-next\" class=\"btn btn-lg btn-primary nextBtn pull-right\">Next</button>
        </div>
    </div>
    <div role=\"tabpanel\" class=\"tab-pane\" id=\"restore-step-2\">
        <div class=\"col-md-12\">
            <table class=\" tableWrapper ChooseRestoreSource\">
                <tr>
                    <td valign=\"top\">
                        <ul>
                            <li class=\"sectionHeading\"><h2>2. ";
        // line 77
        echo (isset($context["text_choose_source"]) ? $context["text_choose_source"] : null);
        echo "</h2></li>
                            ";
        // line 78
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "Dropbox", array()), "Enable", array())) {
            // line 79
            echo "                            <li class=\"dropboxService\">
                                <input type=\"radio\" name=\"AnyPort[Restore][Source]\" id=\"Dropbox_Restore\" value=\"Dropbox\" />
                                <label for=\"Dropbox_Restore\"></label>
                                <p>";
            // line 82
            echo (isset($context["text_restore_preconfigured_dropbox_folder"]) ? $context["text_restore_preconfigured_dropbox_folder"] : null);
            echo "</p>
                            </li>
                            ";
        }
        // line 85
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "GoogleDrive", array()), "Enable", array())) {
            // line 86
            echo "                            <li class=\"googleDriveService\">
                                <input type=\"radio\" name=\"AnyPort[Restore][Source]\" id=\"GoogleDrive_Restore\" value=\"GoogleDrive\" />
                                <label for=\"GoogleDrive_Restore\"></label>
                                <p>";
            // line 89
            echo (isset($context["text_restore_preconfigured_google_drive_stogare"]) ? $context["text_restore_preconfigured_google_drive_stogare"] : null);
            echo "</p>
                            </li>
                            ";
        }
        // line 92
        echo "                            ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "GoogleDrive", array()), "Enable", array()) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "Dropbox", array()), "Enable", array()))) {
            // line 93
            echo "                            <li>
                                <p>";
            // line 94
            echo (isset($context["text_no_could_storage"]) ? $context["text_no_could_storage"] : null);
            echo "</p>
                            </li>
                            ";
        }
        // line 97
        echo "                        </ul>
                    </td>
                    <td valign=\"top\">
                        <ul>
                            <li class=\"standardFile\">
                                <input type=\"radio\" name=\"AnyPort[Restore][Source]\" id=\"StandardFile_Restore\" value=\"FileStandard\" />
                                <label for=\"StandardFile_Restore\">";
        // line 103
        echo (isset($context["text_restore_from_file"]) ? $context["text_restore_from_file"] : null);
        echo "</label>
                                <p>";
        // line 104
        echo (isset($context["text_restore_from_file_desc"]) ? $context["text_restore_from_file_desc"] : null);
        echo "</p>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
            <button id=\"restore-step-2-back\" class=\"btn btn-lg btn-primary pull-left\">Back</button>
            <button id=\"restore-step-2-next\" class=\"btn btn-lg btn-primary pull-right\">Next</button>
        </div>
    </div>
    <div role=\"tabpanel\" class=\"tab-pane\" id=\"restore-step-3\">
        <div class=\"col-md-12\">
            <h2 class=\"files-restore-heading\">3. ";
        // line 116
        echo (isset($context["text_select_restore_file"]) ? $context["text_select_restore_file"] : null);
        echo "</h2>
            <div id=\"restore-overlay\" style=\"display:none\"><div id=\"restore-loader\"><i class=\"fa fa-cog fa-spin\"></i></div></div>
            <div id=\"restoreSource\">

            </div>
            <button id=\"restore-step-3-back\" class=\"btn btn-lg btn-primary pull-left\">Back</button>
            <button id=\"restore-step-3-next\" class=\"btn btn-lg btn-primary pull-right\" style=\"display:none\">Next</button>
        </div>
    </div>
    <div role=\"tabpanel\" class=\"tab-pane\" id=\"restore-step-4\">

        <div class=\"col-md-12\">
            <div id=\"show-restore-progress\">
                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" id=\"watch-restore-progress\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                        <span id=\"show-restore-percentage\">0</span>
                    </div>
                </div>
                <div id=\"dropbox-download\" style=\"display:none\">
                    <i id=\"dropbox-download-progress\" class=\"fa fa-spinner fa-spin fa-fw\"></i>&nbsp;<small>Downloading from Dropbox. </small>
                </div>
                <div id=\"google-drive-download\" style=\"display:none\">
                    <i id=\"google-download-progress\" class=\"fa fa-spinner fa-spin fa-fw\"></i>&nbsp;<small>Downloading from Google Drive. </small>
                </div>
                <div id=\"restored-files-counter\" style=\"display:none\">
                    <i id=\"restored-files-progress\" class=\"fa fa-spinner fa-spin fa-fw\"></i>&nbsp;<small>Restoring files.</small>
                </div>
                <div id=\"restored-tables-counter\" style=\"display:none\">
                    <i id=\"restored-tables-progress\" class=\"fa fa-spinner fa-spin fa-fw\"></i>&nbsp;<small>Restoring tables. </small>
                </div>

            </div>
            <div id=\"show-restore-success\" style=\"display:none; text-align: center;\">
                <h3>System restored!</h3>
                <div class=\"row\">
                    <div class=\"col-xs-12 text-center\">
                        <button class=\"btn btn-info\" onclick=\"location.reload();\">Finish</button>
                    </div>
                </div>
            </div>
            <button id=\"restore-step-4-next\" style=\"display:none;\" class=\"btn btn-lg btn-primary pull-right\">Continue</button>
        </div>
    </div>
</div>
<script>
    \$('#restore-step-2-back').on('click', function(e){
        e.preventDefault();
        \$('a[aria-controls=\"restore-step-1\"]').click();
    });

    \$('#restore-step-3-back').on('click', function(e){
        e.preventDefault();
        \$('a[aria-controls=\"restore-step-2\"]').click();
    });


    \$('#restore a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
      var tab = \$(e.target).attr(\"href\") // activated tab
      updateRestoreNavigation(tab);
    });

    function updateRestoreNavigation(tab){
         \$('a[href=\"'+tab+'\"]').removeClass('completed');
         switch(tab){
                case '#restore-step-1':
                    \$('.restore-progress-track .restore-progress').css('width','0%');
                    \$('a[href=\"#restore-step-2\"]').removeClass('completed');
                    \$('a[href=\"#restore-step-3\"]').removeClass('completed');
                    break;
                case '#restore-step-2':
                     \$('.restore-progress-track .restore-progress').css('width','33.3%');
                     \$('a[href=\"#restore-step-3\"]').removeClass('completed');
                     \$('a[href=\"#restore-step-1\"]').addClass('completed');
                     break;
                case '#restore-step-3':
                    \$('.restore-progress-track .restore-progress').css('width','66.6%');
                    \$('a[href=\"#restore-step-1\"]').addClass('completed');
                    \$('a[href=\"#restore-step-2\"]').addClass('completed');
                    break;
            }
    };

    \$('#restore-step-1-next').click(function(e) {
        e.preventDefault();
        var isValid = true;
        var restoreType = \$(\"input[type='radio'][name='AnyPort[Restore][Type]']:checked\").val();

        if (typeof restoreType == 'undefined') {
            isValid = false;
        }
         \$.ajax({
            url: 'index.php?route=";
        // line 207
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/cleanTempFolder&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
            type: \"GET\",
            dataType: \"json\",
            success: function(json, status, xhr) {

            }
        });


        if(isValid) {
            \$('.choose-restore > li:nth-of-type(1) > a').addClass('completed');
            \$('.restore-progress-track .restore-progress').css('width','33.3%');
            \$('.choose-restore > li:nth-of-type(2) > a').removeClass('disabled').click();
        } else {
            alert('Please select a restore type!');
        }
    });

    \$('#restore-step-2-next').click(function(e) {
        e.preventDefault();
        //if destination is dropbox
        var isValid = true;
        var source = \$(\"input[type='radio'][name*='AnyPort[Restore][Source]']:checked\").val();
        if (typeof source == 'undefined') {
            isValid = false;
        }
        if (source == 'Dropbox' || source || 'GoogleDrive') {
            \$('#restore-step-3-next').show();
        }
        \$('#restore-overlay').css('display','block');
        \$('#restore-overlay').toggleClass('active');

        \$.ajax({
            url: 'index.php?route=";
        // line 240
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/getRestoreInfo&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
            type: \"GET\",
            data:{source:source},
                success: function(json, status, xhr) {
                    \$('#restore-overlay').css('display','none');
                    \$('#restore-overlay').toggleClass('active');
                    \$('#restoreSource').html(json);
                }
        });
        // Check values here

        if(isValid) {
            \$('.choose-restore > li:nth-of-type(2) > a').addClass('completed');
            \$('.restore-progress-track .restore-progress').css('width','66.6%');
            \$('.choose-restore > li:nth-of-type(3) > a').removeClass('disabled').click();
        } else {
            alert('Please choose source!');
        }
    });

    \$('#restore-step-3-next').click(function(e) {
        e.preventDefault();
        var isValid = true;
        if(isValid) {
            \$('.choose-restore > li:nth-of-type(3) > a').addClass('completed');
            \$('.restore-progress-track .restore-progress').css('width','100%');
            \$('.choose-restore > li:nth-of-type(4) > a').removeClass('disabled').click();
        }
        restoreDeferer = \$.Deferred();
        dbDeferer = \$.Deferred();
        dropBoxDef = \$.Deferred();
        GoogleDriveDef = \$.Deferred();
        var index = 0;
        var totalFiles = 0;
        var tempTotalFiles = 0;
        var dbProgress = 0;
        var dbxOffset = 0;
        var dbxLimit = 0;
        var chunkStart = 0;
        var type = \$(\"input[type='radio'][name*='AnyPort[Restore][Type]']:checked\").val();
        var file;
        var source = \$(\"input[type='radio'][name*='AnyPort[Restore][Source]']:checked\").val();
        if (source == 'Dropbox') {
            file = \$('#selectedFile').val();
            size = \$('#selectedFileSize').val();
            downloadFromDropbox(dropBoxDef,file,size,dbxOffset,dbxLimit).done(function(){
                setTimeout(function(){
                    \$('#watch-restore-progress').width('0%');
                    \$('#show-restore-percentage').html('0%');
                },500);
                switch(type){
                    case 'FullRestore':
                        restoreFiles(restoreDeferer,index,file,totalFiles,tempTotalFiles).done(function(){
                            restoreDatabase(dbDeferer,file,dbProgress).done(function(){
                                \$('#show-restore-progress').slideUp();
                                \$('#show-restore-success').slideDown();
                                \$('#restore-step-4-next').show();
                                \$('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();
                            });
                        });
                    break;
                    case 'DatabaseRestore':
                        restoreDatabase(dbDeferer,file,dbProgress).done(function(){
                            \$('#show-restore-progress').slideUp();
                            \$('#show-restore-success').slideDown();
                            \$('#restore-step-4-next').show();
                            \$('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();
                        });
                    break;
                    case 'FilesRestore':
                        restoreFiles(restoreDeferer,index,file,totalFiles,tempTotalFiles).done(function(){
                            \$('#show-restore-progress').slideUp();
                            \$('#show-restore-success').slideDown();
                            \$('#restore-step-4-next').show();
                            \$('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();
                        });
                    break;
                }
            });
        } else if(source == 'GoogleDrive'){
            googleDriveFile = \$('#selected-file-id').val();
            size = \$('#selected-file-size').val();
            googleDriveFileName = \$('#selected-drive-file').val();
            downloadFromGoogleDrive(GoogleDriveDef, googleDriveFile, size, googleDriveFileName, chunkStart).done(function(){

                setTimeout(function(){
                    \$('#watch-restore-progress').width('0%');
                    \$('#show-restore-percentage').html('0%');
                },500);
                switch(type){
                    case 'FullRestore':
                        restoreFiles(restoreDeferer,index,googleDriveFileName,totalFiles,tempTotalFiles).done(function(){
                            restoreDatabase(dbDeferer,googleDriveFileName,dbProgress).done(function(){
                                \$('#show-restore-progress').slideUp();
                                \$('#show-restore-success').slideDown();
                                \$('#restore-step-4-next').show();
                                \$('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();
                            });
                        });
                    break;
                    case 'DatabaseRestore':
                        restoreDatabase(dbDeferer,googleDriveFileName,dbProgress).done(function(){
                            \$('#show-restore-progress').slideUp();
                            \$('#show-restore-success').slideDown();
                            \$('#restore-step-4-next').show();
                            \$('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();
                        });
                    break;
                    case 'FilesRestore':
                        restoreFiles(restoreDeferer,index,googleDriveFileName,totalFiles,tempTotalFiles).done(function(){
                            \$('#show-restore-progress').slideUp();
                            \$('#show-restore-success').slideDown();
                            \$('#restore-step-4-next').show();
                            \$('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();
                        });
                    break;
                }
            });
        } else {
            file = \$('#anyport-restore-file').val();
            switch(type){
                case 'FullRestore':
                    restoreFiles(restoreDeferer,index,file,totalFiles,tempTotalFiles).done(function(){
                        \$('#watch-restore-progress').width('0%');
                        \$('#show-restore-percentage').html('0%');
                        restoreDatabase(dbDeferer,file,dbProgress).done(function(){
                            \$('#show-restore-progress').slideUp();
                            \$('#show-restore-success').slideDown();
                            \$('#restore-step-4-next').show();
                            \$('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();
                        });
                    });
                break;
                case 'DatabaseRestore':
                    restoreDatabase(dbDeferer,file,dbProgress).done(function(){
                        \$('#show-restore-progress').slideUp();
                        \$('#show-restore-success').slideDown();
                        \$('#restore-step-4-next').show();
                        \$('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();
                    });
                break;
                case 'FilesRestore':
                    restoreFiles(restoreDeferer,index,file,totalFiles,tempTotalFiles).done(function(){
                        \$('#show-restore-progress').slideUp();
                        \$('#show-restore-success').slideDown();
                        \$('#restore-step-4-next').show();
                        \$('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();
                    });
                break;
            }
        }
    });

    function downloadFromGoogleDrive(GoogleDriveDef,fileId,size,fileName,chunkStart){
        \$('#google-drive-download').show();
        \$.ajax({
            url: 'index.php?route=";
        // line 396
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/downloadFromGoogleDrive&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
            type: \"POST\",
            dataType: \"json\",
            data: {fileId:fileId,size:size,fileName:fileName,chunkStart:chunkStart},
            success: function(json, status, xhr) {
                response = json;
                \$('#watch-restore-progress').width(json.data.percentage);
                \$('#show-restore-percentage').html(response.data.percentage);
                if (json.status != 'finished') {
                   setTimeout(function(){
                      return downloadFromGoogleDrive(GoogleDriveDef, json.data.fileId, json.data.size, json.data.fileName, json.data.chunkStart);
                   },10);
                } else {
                    \$('#watch-restore-progress').width(response.data.percentage);
                    \$('#show-restore-percentage').html(response.data.percentage);
                    \$('#google-download-progress').removeClass('fa-spinner');
                    \$('#google-download-progress').removeClass('fa-spin');
                    \$('#google-download-progress').addClass('fa-check');
                   GoogleDriveDef.resolve();
                }
            }
        });
        return GoogleDriveDef;
    }

    function downloadFromDropbox(dropBoxDef,file,size,offset,limit,downloaded,remaining){
        \$('#dropbox-download').show();
        \$.ajax({
            url: 'index.php?route=";
        // line 424
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/downloadFromDropbox&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
            type: \"POST\",
            dataType: \"json\",
            data: {file:file,offset:offset,limit:limit,downloaded:downloaded,remaining:remaining,size:size},
            success: function(json, status, xhr) {
                response = json;
                \$('#watch-restore-progress').width(json.data.percentage);
                \$('#show-restore-percentage').html(response.data.percentage);
                if (json.status != 'finished') {
                   setTimeout(function(){
                      return downloadFromDropbox(dropBoxDef,json.data.file,json.data.size,json.data.offset,json.data.limit,json.data.downloaded,json.data.remaining);
                   },10);
                } else {
                    \$('#watch-restore-progress').width(response.data.percentage);
                    \$('#show-restore-percentage').html(response.data.percentage);
                    \$('#dropbox-download-progress').removeClass('fa-spinner');
                    \$('#dropbox-download-progress').removeClass('fa-spin');
                    \$('#dropbox-download-progress').addClass('fa-check');
                   dropBoxDef.resolve();
                }
            }
        });
        return dropBoxDef;
    }

    function restoreFiles(restoreDeferer,index,file,totalFiles,tempTotalFiles){
        \$('#restored-files-counter').show();
        index = index || 0;
            \$.ajax({
                url: 'index.php?route=";
        // line 453
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/restoreFiles&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
                type: \"POST\",
                dataType: \"json\",
                data: {file:file,index:index,totalFiles:totalFiles,tempTotalFiles:tempTotalFiles},
                success: function(json, status, xhr) {
                    response = json;
                    if (json.status != 'finished') {
                        \$('#watch-restore-progress').width(json.data.percentage);
                        \$('#show-restore-percentage').html(response.data.percentage);
                       setTimeout(function(){
                          return restoreFiles(restoreDeferer,json.data.index,json.data.zipFile,json.data.totalFiles,json.data.removedFiles);
                       },10);
                    } else {
                        \$('#watch-restore-progress').width(json.data.percentage);
                        \$('#show-restore-percentage').html(response.data.percentage);
                        \$('#restored-files-progress').removeClass('fa-spinner');
                        \$('#restored-files-progress').removeClass('fa-spin');
                        \$('#restored-files-progress').addClass('fa-check');
                       restoreDeferer.resolve();
                    }
                }
            });
        return restoreDeferer;
    };

    function restoreDatabase(dbDeferer,file,progress){

        \$('#restored-tables-counter').show();
            \$.ajax({
                url: 'index.php?route=";
        // line 482
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/restoreDatabase&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
                type: \"POST\",
                dataType: \"json\",
                data: {file:file,progress:progress},
                success: function(json, status, xhr) {
                    \$('#watch-restore-progress').width(\"50%\");
                    \$('#show-restore-percentage').html(\"50%\");
                    response = json;
                    if (json.status != 'finished') {
                       setTimeout(function(){
                            return restoreDatabase(dbDeferer,json.data.file,json.data.progress);
                       },10);
                    } else {
                        \$('#watch-restore-progress').width(\"100%\");
                        \$('#show-restore-percentage').html(\"100%\");
                        \$('#restored-tables-progress').removeClass('fa-spinner');
                        \$('#restored-tables-progress').removeClass('fa-spin');
                        \$('#restored-tables-progress').addClass('fa-check');
                       dbDeferer.resolve();
                    }
                }
            });
        return dbDeferer;
    };
</script>
";
    }

    public function getTemplateName()
    {
        return "extension/module/anyport/tab_restore.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  599 => 482,  565 => 453,  531 => 424,  498 => 396,  337 => 240,  299 => 207,  205 => 116,  190 => 104,  186 => 103,  178 => 97,  172 => 94,  169 => 93,  166 => 92,  160 => 89,  155 => 86,  152 => 85,  146 => 82,  141 => 79,  139 => 78,  135 => 77,  117 => 62,  109 => 57,  105 => 56,  96 => 50,  92 => 49,  85 => 45,  81 => 44,  73 => 39,  59 => 28,  50 => 22,  41 => 16,  32 => 10,  19 => 1,);
    }
}
/* <script type="text/javascript" src="https://www.dropbox.com/static/api/2/dropins.js" id="dropboxjs" data-app-key="{{ ClientID }}"></script>*/
/*  */
/* <div class="progress-steps">*/
/*     <div class="restore-progress-track">*/
/*         <span class="restore-progress"></span>*/
/*     </div>*/
/*     <ul class="nav nav-tabs progress-points choose-restore">*/
/*         <li rel-index="0" class="active progress-point">*/
/*             <a href="#restore-step-1"  aria-controls="restore-step-1" role="tab" data-toggle="tab"><i class="fa fa-check" aria-hidden="true"></i></a>*/
/*             <span class="step-label">1. {{ text_select_restore_type }}</span>*/
/*         </li>*/
/*         <li rel-index="1" class="progress-point">*/
/*             <a href="#restore-step-2" class="disabled" aria-controls="restore-step-2" role="tab" data-toggle="tab">*/
/*                 <i class="fa fa-check" aria-hidden="true"></i>*/
/*             </a>*/
/*             <span class="step-label">2. {{ text_select_restore_source }}</span>*/
/*         </li>*/
/*         <li rel-index="2" class="progress-point">*/
/*             <a href="#restore-step-3" class="disabled" aria-controls="restore-step-3" role="tab" data-toggle="tab">*/
/*                 <i class="fa fa-check" aria-hidden="true"></i><span class="step-label">3</span>*/
/*             </a>*/
/*             <span class="step-label">3. {{ text_restore_file }}</span>*/
/*         </li>*/
/*         <li rel-index="3" class="progress-point">*/
/*             <a href="#restore-step-4" class="disabled" aria-controls="restore-step-4" role="tab" data-toggle="tab">*/
/*                 <i class="fa fa-check" aria-hidden="true"></i>*/
/*             </a>*/
/*             <span class="step-label">4. {{ text_restore_summary }}</span>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* <div class="tab-content">*/
/*     <div role="tabpanel" class="tab-pane active" id="restore-step-1">*/
/*         <div class="col-md-12">*/
/*             <table class="tableWrapper">*/
/*                 <tr>*/
/*                     <td valign="top">*/
/*                         <ul class="backupTypesList">*/
/*                             <li class="sectionHeading"><h2>1. {{ text_restore_types }}</h2></li>*/
/*                             <div class="row">*/
/*                                 <div class="col-xs-5">*/
/*                                     <li class="fullRestore">*/
/*                                         <input type="radio" name="AnyPort[Restore][Type]" id="FullRestore_Restore" value="FullRestore" />*/
/*                                         <label for="FullRestore_Restore">{{ text_full_restore }}</label>*/
/*                                         <p>{{ text_full_restore_desc }}</p>*/
/*                                     </li>*/
/*                                     <li class="databaseRestore">*/
/*                                         <input type="radio" name="AnyPort[Restore][Type]" id="DatabaseRestore_Restore" value="DatabaseRestore" />*/
/*                                         <label for="DatabaseRestore_Restore">{{ text_restore_database }}</label>*/
/*                                         <p>{{ text_restore_database_desc }} </p>*/
/*                                     </li>*/
/*                                 </div>*/
/*                                 <div class="col-xs-5 col-xs-offset-2">*/
/*                                    <li class="filesRestore">*/
/*                                         <input type="radio" name="AnyPort[Restore][Type]" id="FilesRestore_Restore" value="FilesRestore" />*/
/*                                         <label for="FilesRestore_Restore">{{ text_restore_files }}</label>*/
/*                                         <p>{{ text_restore_files_desc }}</p>*/
/*                                     </li>*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                              <li class="helpMessage"><span class="cloudHelp"><strong>Note:</strong> {{ text_help_message_restore }}</span></li>*/
/*                             <li class="clearfix"></li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/*             <button id="restore-step-1-next" class="btn btn-lg btn-primary nextBtn pull-right">Next</button>*/
/*         </div>*/
/*     </div>*/
/*     <div role="tabpanel" class="tab-pane" id="restore-step-2">*/
/*         <div class="col-md-12">*/
/*             <table class=" tableWrapper ChooseRestoreSource">*/
/*                 <tr>*/
/*                     <td valign="top">*/
/*                         <ul>*/
/*                             <li class="sectionHeading"><h2>2. {{ text_choose_source }}</h2></li>*/
/*                             {% if data.AnyPort.Settings.Dropbox.Enable %}*/
/*                             <li class="dropboxService">*/
/*                                 <input type="radio" name="AnyPort[Restore][Source]" id="Dropbox_Restore" value="Dropbox" />*/
/*                                 <label for="Dropbox_Restore"></label>*/
/*                                 <p>{{ text_restore_preconfigured_dropbox_folder }}</p>*/
/*                             </li>*/
/*                             {% endif %}*/
/*                             {% if data.AnyPort.Settings.GoogleDrive.Enable %}*/
/*                             <li class="googleDriveService">*/
/*                                 <input type="radio" name="AnyPort[Restore][Source]" id="GoogleDrive_Restore" value="GoogleDrive" />*/
/*                                 <label for="GoogleDrive_Restore"></label>*/
/*                                 <p>{{ text_restore_preconfigured_google_drive_stogare }}</p>*/
/*                             </li>*/
/*                             {% endif %}*/
/*                             {% if data.AnyPort.Settings.GoogleDrive.Enable and data.AnyPort.Settings.Dropbox.Enable %}*/
/*                             <li>*/
/*                                 <p>{{ text_no_could_storage }}</p>*/
/*                             </li>*/
/*                             {% endif %}*/
/*                         </ul>*/
/*                     </td>*/
/*                     <td valign="top">*/
/*                         <ul>*/
/*                             <li class="standardFile">*/
/*                                 <input type="radio" name="AnyPort[Restore][Source]" id="StandardFile_Restore" value="FileStandard" />*/
/*                                 <label for="StandardFile_Restore">{{ text_restore_from_file }}</label>*/
/*                                 <p>{{ text_restore_from_file_desc }}</p>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/*             <button id="restore-step-2-back" class="btn btn-lg btn-primary pull-left">Back</button>*/
/*             <button id="restore-step-2-next" class="btn btn-lg btn-primary pull-right">Next</button>*/
/*         </div>*/
/*     </div>*/
/*     <div role="tabpanel" class="tab-pane" id="restore-step-3">*/
/*         <div class="col-md-12">*/
/*             <h2 class="files-restore-heading">3. {{ text_select_restore_file }}</h2>*/
/*             <div id="restore-overlay" style="display:none"><div id="restore-loader"><i class="fa fa-cog fa-spin"></i></div></div>*/
/*             <div id="restoreSource">*/
/* */
/*             </div>*/
/*             <button id="restore-step-3-back" class="btn btn-lg btn-primary pull-left">Back</button>*/
/*             <button id="restore-step-3-next" class="btn btn-lg btn-primary pull-right" style="display:none">Next</button>*/
/*         </div>*/
/*     </div>*/
/*     <div role="tabpanel" class="tab-pane" id="restore-step-4">*/
/* */
/*         <div class="col-md-12">*/
/*             <div id="show-restore-progress">*/
/*                 <div class="progress">*/
/*                     <div class="progress-bar" role="progressbar" id="watch-restore-progress" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">*/
/*                         <span id="show-restore-percentage">0</span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="dropbox-download" style="display:none">*/
/*                     <i id="dropbox-download-progress" class="fa fa-spinner fa-spin fa-fw"></i>&nbsp;<small>Downloading from Dropbox. </small>*/
/*                 </div>*/
/*                 <div id="google-drive-download" style="display:none">*/
/*                     <i id="google-download-progress" class="fa fa-spinner fa-spin fa-fw"></i>&nbsp;<small>Downloading from Google Drive. </small>*/
/*                 </div>*/
/*                 <div id="restored-files-counter" style="display:none">*/
/*                     <i id="restored-files-progress" class="fa fa-spinner fa-spin fa-fw"></i>&nbsp;<small>Restoring files.</small>*/
/*                 </div>*/
/*                 <div id="restored-tables-counter" style="display:none">*/
/*                     <i id="restored-tables-progress" class="fa fa-spinner fa-spin fa-fw"></i>&nbsp;<small>Restoring tables. </small>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div id="show-restore-success" style="display:none; text-align: center;">*/
/*                 <h3>System restored!</h3>*/
/*                 <div class="row">*/
/*                     <div class="col-xs-12 text-center">*/
/*                         <button class="btn btn-info" onclick="location.reload();">Finish</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <button id="restore-step-4-next" style="display:none;" class="btn btn-lg btn-primary pull-right">Continue</button>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script>*/
/*     $('#restore-step-2-back').on('click', function(e){*/
/*         e.preventDefault();*/
/*         $('a[aria-controls="restore-step-1"]').click();*/
/*     });*/
/* */
/*     $('#restore-step-3-back').on('click', function(e){*/
/*         e.preventDefault();*/
/*         $('a[aria-controls="restore-step-2"]').click();*/
/*     });*/
/* */
/* */
/*     $('#restore a[data-toggle="tab"]').on('shown.bs.tab', function (e) {*/
/*       var tab = $(e.target).attr("href") // activated tab*/
/*       updateRestoreNavigation(tab);*/
/*     });*/
/* */
/*     function updateRestoreNavigation(tab){*/
/*          $('a[href="'+tab+'"]').removeClass('completed');*/
/*          switch(tab){*/
/*                 case '#restore-step-1':*/
/*                     $('.restore-progress-track .restore-progress').css('width','0%');*/
/*                     $('a[href="#restore-step-2"]').removeClass('completed');*/
/*                     $('a[href="#restore-step-3"]').removeClass('completed');*/
/*                     break;*/
/*                 case '#restore-step-2':*/
/*                      $('.restore-progress-track .restore-progress').css('width','33.3%');*/
/*                      $('a[href="#restore-step-3"]').removeClass('completed');*/
/*                      $('a[href="#restore-step-1"]').addClass('completed');*/
/*                      break;*/
/*                 case '#restore-step-3':*/
/*                     $('.restore-progress-track .restore-progress').css('width','66.6%');*/
/*                     $('a[href="#restore-step-1"]').addClass('completed');*/
/*                     $('a[href="#restore-step-2"]').addClass('completed');*/
/*                     break;*/
/*             }*/
/*     };*/
/* */
/*     $('#restore-step-1-next').click(function(e) {*/
/*         e.preventDefault();*/
/*         var isValid = true;*/
/*         var restoreType = $("input[type='radio'][name='AnyPort[Restore][Type]']:checked").val();*/
/* */
/*         if (typeof restoreType == 'undefined') {*/
/*             isValid = false;*/
/*         }*/
/*          $.ajax({*/
/*             url: 'index.php?route={{ module_path }}/cleanTempFolder&user_token={{ user_token }}',*/
/*             type: "GET",*/
/*             dataType: "json",*/
/*             success: function(json, status, xhr) {*/
/* */
/*             }*/
/*         });*/
/* */
/* */
/*         if(isValid) {*/
/*             $('.choose-restore > li:nth-of-type(1) > a').addClass('completed');*/
/*             $('.restore-progress-track .restore-progress').css('width','33.3%');*/
/*             $('.choose-restore > li:nth-of-type(2) > a').removeClass('disabled').click();*/
/*         } else {*/
/*             alert('Please select a restore type!');*/
/*         }*/
/*     });*/
/* */
/*     $('#restore-step-2-next').click(function(e) {*/
/*         e.preventDefault();*/
/*         //if destination is dropbox*/
/*         var isValid = true;*/
/*         var source = $("input[type='radio'][name*='AnyPort[Restore][Source]']:checked").val();*/
/*         if (typeof source == 'undefined') {*/
/*             isValid = false;*/
/*         }*/
/*         if (source == 'Dropbox' || source || 'GoogleDrive') {*/
/*             $('#restore-step-3-next').show();*/
/*         }*/
/*         $('#restore-overlay').css('display','block');*/
/*         $('#restore-overlay').toggleClass('active');*/
/* */
/*         $.ajax({*/
/*             url: 'index.php?route={{ module_path }}/getRestoreInfo&user_token={{ user_token }}',*/
/*             type: "GET",*/
/*             data:{source:source},*/
/*                 success: function(json, status, xhr) {*/
/*                     $('#restore-overlay').css('display','none');*/
/*                     $('#restore-overlay').toggleClass('active');*/
/*                     $('#restoreSource').html(json);*/
/*                 }*/
/*         });*/
/*         // Check values here*/
/* */
/*         if(isValid) {*/
/*             $('.choose-restore > li:nth-of-type(2) > a').addClass('completed');*/
/*             $('.restore-progress-track .restore-progress').css('width','66.6%');*/
/*             $('.choose-restore > li:nth-of-type(3) > a').removeClass('disabled').click();*/
/*         } else {*/
/*             alert('Please choose source!');*/
/*         }*/
/*     });*/
/* */
/*     $('#restore-step-3-next').click(function(e) {*/
/*         e.preventDefault();*/
/*         var isValid = true;*/
/*         if(isValid) {*/
/*             $('.choose-restore > li:nth-of-type(3) > a').addClass('completed');*/
/*             $('.restore-progress-track .restore-progress').css('width','100%');*/
/*             $('.choose-restore > li:nth-of-type(4) > a').removeClass('disabled').click();*/
/*         }*/
/*         restoreDeferer = $.Deferred();*/
/*         dbDeferer = $.Deferred();*/
/*         dropBoxDef = $.Deferred();*/
/*         GoogleDriveDef = $.Deferred();*/
/*         var index = 0;*/
/*         var totalFiles = 0;*/
/*         var tempTotalFiles = 0;*/
/*         var dbProgress = 0;*/
/*         var dbxOffset = 0;*/
/*         var dbxLimit = 0;*/
/*         var chunkStart = 0;*/
/*         var type = $("input[type='radio'][name*='AnyPort[Restore][Type]']:checked").val();*/
/*         var file;*/
/*         var source = $("input[type='radio'][name*='AnyPort[Restore][Source]']:checked").val();*/
/*         if (source == 'Dropbox') {*/
/*             file = $('#selectedFile').val();*/
/*             size = $('#selectedFileSize').val();*/
/*             downloadFromDropbox(dropBoxDef,file,size,dbxOffset,dbxLimit).done(function(){*/
/*                 setTimeout(function(){*/
/*                     $('#watch-restore-progress').width('0%');*/
/*                     $('#show-restore-percentage').html('0%');*/
/*                 },500);*/
/*                 switch(type){*/
/*                     case 'FullRestore':*/
/*                         restoreFiles(restoreDeferer,index,file,totalFiles,tempTotalFiles).done(function(){*/
/*                             restoreDatabase(dbDeferer,file,dbProgress).done(function(){*/
/*                                 $('#show-restore-progress').slideUp();*/
/*                                 $('#show-restore-success').slideDown();*/
/*                                 $('#restore-step-4-next').show();*/
/*                                 $('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();*/
/*                             });*/
/*                         });*/
/*                     break;*/
/*                     case 'DatabaseRestore':*/
/*                         restoreDatabase(dbDeferer,file,dbProgress).done(function(){*/
/*                             $('#show-restore-progress').slideUp();*/
/*                             $('#show-restore-success').slideDown();*/
/*                             $('#restore-step-4-next').show();*/
/*                             $('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();*/
/*                         });*/
/*                     break;*/
/*                     case 'FilesRestore':*/
/*                         restoreFiles(restoreDeferer,index,file,totalFiles,tempTotalFiles).done(function(){*/
/*                             $('#show-restore-progress').slideUp();*/
/*                             $('#show-restore-success').slideDown();*/
/*                             $('#restore-step-4-next').show();*/
/*                             $('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();*/
/*                         });*/
/*                     break;*/
/*                 }*/
/*             });*/
/*         } else if(source == 'GoogleDrive'){*/
/*             googleDriveFile = $('#selected-file-id').val();*/
/*             size = $('#selected-file-size').val();*/
/*             googleDriveFileName = $('#selected-drive-file').val();*/
/*             downloadFromGoogleDrive(GoogleDriveDef, googleDriveFile, size, googleDriveFileName, chunkStart).done(function(){*/
/* */
/*                 setTimeout(function(){*/
/*                     $('#watch-restore-progress').width('0%');*/
/*                     $('#show-restore-percentage').html('0%');*/
/*                 },500);*/
/*                 switch(type){*/
/*                     case 'FullRestore':*/
/*                         restoreFiles(restoreDeferer,index,googleDriveFileName,totalFiles,tempTotalFiles).done(function(){*/
/*                             restoreDatabase(dbDeferer,googleDriveFileName,dbProgress).done(function(){*/
/*                                 $('#show-restore-progress').slideUp();*/
/*                                 $('#show-restore-success').slideDown();*/
/*                                 $('#restore-step-4-next').show();*/
/*                                 $('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();*/
/*                             });*/
/*                         });*/
/*                     break;*/
/*                     case 'DatabaseRestore':*/
/*                         restoreDatabase(dbDeferer,googleDriveFileName,dbProgress).done(function(){*/
/*                             $('#show-restore-progress').slideUp();*/
/*                             $('#show-restore-success').slideDown();*/
/*                             $('#restore-step-4-next').show();*/
/*                             $('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();*/
/*                         });*/
/*                     break;*/
/*                     case 'FilesRestore':*/
/*                         restoreFiles(restoreDeferer,index,googleDriveFileName,totalFiles,tempTotalFiles).done(function(){*/
/*                             $('#show-restore-progress').slideUp();*/
/*                             $('#show-restore-success').slideDown();*/
/*                             $('#restore-step-4-next').show();*/
/*                             $('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();*/
/*                         });*/
/*                     break;*/
/*                 }*/
/*             });*/
/*         } else {*/
/*             file = $('#anyport-restore-file').val();*/
/*             switch(type){*/
/*                 case 'FullRestore':*/
/*                     restoreFiles(restoreDeferer,index,file,totalFiles,tempTotalFiles).done(function(){*/
/*                         $('#watch-restore-progress').width('0%');*/
/*                         $('#show-restore-percentage').html('0%');*/
/*                         restoreDatabase(dbDeferer,file,dbProgress).done(function(){*/
/*                             $('#show-restore-progress').slideUp();*/
/*                             $('#show-restore-success').slideDown();*/
/*                             $('#restore-step-4-next').show();*/
/*                             $('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();*/
/*                         });*/
/*                     });*/
/*                 break;*/
/*                 case 'DatabaseRestore':*/
/*                     restoreDatabase(dbDeferer,file,dbProgress).done(function(){*/
/*                         $('#show-restore-progress').slideUp();*/
/*                         $('#show-restore-success').slideDown();*/
/*                         $('#restore-step-4-next').show();*/
/*                         $('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();*/
/*                     });*/
/*                 break;*/
/*                 case 'FilesRestore':*/
/*                     restoreFiles(restoreDeferer,index,file,totalFiles,tempTotalFiles).done(function(){*/
/*                         $('#show-restore-progress').slideUp();*/
/*                         $('#show-restore-success').slideDown();*/
/*                         $('#restore-step-4-next').show();*/
/*                         $('.choose-restore > li:nth-of-type(4) > a').addClass('completed').click();*/
/*                     });*/
/*                 break;*/
/*             }*/
/*         }*/
/*     });*/
/* */
/*     function downloadFromGoogleDrive(GoogleDriveDef,fileId,size,fileName,chunkStart){*/
/*         $('#google-drive-download').show();*/
/*         $.ajax({*/
/*             url: 'index.php?route={{ module_path }}/downloadFromGoogleDrive&user_token={{ user_token }}',*/
/*             type: "POST",*/
/*             dataType: "json",*/
/*             data: {fileId:fileId,size:size,fileName:fileName,chunkStart:chunkStart},*/
/*             success: function(json, status, xhr) {*/
/*                 response = json;*/
/*                 $('#watch-restore-progress').width(json.data.percentage);*/
/*                 $('#show-restore-percentage').html(response.data.percentage);*/
/*                 if (json.status != 'finished') {*/
/*                    setTimeout(function(){*/
/*                       return downloadFromGoogleDrive(GoogleDriveDef, json.data.fileId, json.data.size, json.data.fileName, json.data.chunkStart);*/
/*                    },10);*/
/*                 } else {*/
/*                     $('#watch-restore-progress').width(response.data.percentage);*/
/*                     $('#show-restore-percentage').html(response.data.percentage);*/
/*                     $('#google-download-progress').removeClass('fa-spinner');*/
/*                     $('#google-download-progress').removeClass('fa-spin');*/
/*                     $('#google-download-progress').addClass('fa-check');*/
/*                    GoogleDriveDef.resolve();*/
/*                 }*/
/*             }*/
/*         });*/
/*         return GoogleDriveDef;*/
/*     }*/
/* */
/*     function downloadFromDropbox(dropBoxDef,file,size,offset,limit,downloaded,remaining){*/
/*         $('#dropbox-download').show();*/
/*         $.ajax({*/
/*             url: 'index.php?route={{ module_path }}/downloadFromDropbox&user_token={{ user_token }}',*/
/*             type: "POST",*/
/*             dataType: "json",*/
/*             data: {file:file,offset:offset,limit:limit,downloaded:downloaded,remaining:remaining,size:size},*/
/*             success: function(json, status, xhr) {*/
/*                 response = json;*/
/*                 $('#watch-restore-progress').width(json.data.percentage);*/
/*                 $('#show-restore-percentage').html(response.data.percentage);*/
/*                 if (json.status != 'finished') {*/
/*                    setTimeout(function(){*/
/*                       return downloadFromDropbox(dropBoxDef,json.data.file,json.data.size,json.data.offset,json.data.limit,json.data.downloaded,json.data.remaining);*/
/*                    },10);*/
/*                 } else {*/
/*                     $('#watch-restore-progress').width(response.data.percentage);*/
/*                     $('#show-restore-percentage').html(response.data.percentage);*/
/*                     $('#dropbox-download-progress').removeClass('fa-spinner');*/
/*                     $('#dropbox-download-progress').removeClass('fa-spin');*/
/*                     $('#dropbox-download-progress').addClass('fa-check');*/
/*                    dropBoxDef.resolve();*/
/*                 }*/
/*             }*/
/*         });*/
/*         return dropBoxDef;*/
/*     }*/
/* */
/*     function restoreFiles(restoreDeferer,index,file,totalFiles,tempTotalFiles){*/
/*         $('#restored-files-counter').show();*/
/*         index = index || 0;*/
/*             $.ajax({*/
/*                 url: 'index.php?route={{ module_path }}/restoreFiles&user_token={{ user_token }}',*/
/*                 type: "POST",*/
/*                 dataType: "json",*/
/*                 data: {file:file,index:index,totalFiles:totalFiles,tempTotalFiles:tempTotalFiles},*/
/*                 success: function(json, status, xhr) {*/
/*                     response = json;*/
/*                     if (json.status != 'finished') {*/
/*                         $('#watch-restore-progress').width(json.data.percentage);*/
/*                         $('#show-restore-percentage').html(response.data.percentage);*/
/*                        setTimeout(function(){*/
/*                           return restoreFiles(restoreDeferer,json.data.index,json.data.zipFile,json.data.totalFiles,json.data.removedFiles);*/
/*                        },10);*/
/*                     } else {*/
/*                         $('#watch-restore-progress').width(json.data.percentage);*/
/*                         $('#show-restore-percentage').html(response.data.percentage);*/
/*                         $('#restored-files-progress').removeClass('fa-spinner');*/
/*                         $('#restored-files-progress').removeClass('fa-spin');*/
/*                         $('#restored-files-progress').addClass('fa-check');*/
/*                        restoreDeferer.resolve();*/
/*                     }*/
/*                 }*/
/*             });*/
/*         return restoreDeferer;*/
/*     };*/
/* */
/*     function restoreDatabase(dbDeferer,file,progress){*/
/* */
/*         $('#restored-tables-counter').show();*/
/*             $.ajax({*/
/*                 url: 'index.php?route={{ module_path }}/restoreDatabase&user_token={{ user_token }}',*/
/*                 type: "POST",*/
/*                 dataType: "json",*/
/*                 data: {file:file,progress:progress},*/
/*                 success: function(json, status, xhr) {*/
/*                     $('#watch-restore-progress').width("50%");*/
/*                     $('#show-restore-percentage').html("50%");*/
/*                     response = json;*/
/*                     if (json.status != 'finished') {*/
/*                        setTimeout(function(){*/
/*                             return restoreDatabase(dbDeferer,json.data.file,json.data.progress);*/
/*                        },10);*/
/*                     } else {*/
/*                         $('#watch-restore-progress').width("100%");*/
/*                         $('#show-restore-percentage').html("100%");*/
/*                         $('#restored-tables-progress').removeClass('fa-spinner');*/
/*                         $('#restored-tables-progress').removeClass('fa-spin');*/
/*                         $('#restored-tables-progress').addClass('fa-check');*/
/*                        dbDeferer.resolve();*/
/*                     }*/
/*                 }*/
/*             });*/
/*         return dbDeferer;*/
/*     };*/
/* </script>*/
/* */
