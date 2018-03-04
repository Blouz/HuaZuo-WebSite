<?php

/* extension/module/anyport/tab_backup.twig */
class __TwigTemplate_c7bd1f8a29e9d83b402df2de5cde8e45fb61c705d962c80d12565e464e31e0ee extends Twig_Template
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
        echo "<div class=\"progress-steps\">
\t<div class=\"progress-track\">
    \t<span class=\"progress\"></span>
    </div>
    <ul class=\"nav nav-tabs progress-points choose-backup\">
        <li rel-index=\"0\" class=\"progress-point active\">
            <a href=\"#step-1\" aria-controls=\"step-1\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
            <span class=\"step-label\">1. ";
        // line 8
        echo (isset($context["text_select_backup_type"]) ? $context["text_select_backup_type"] : null);
        echo "</span>
        </li>
        <li rel-index=\"1\" class=\"progress-point\">
            <a href=\"#step-2\" class=\"disabled\" aria-controls=\"step-2\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
            <span class=\"step-label\">2. ";
        // line 12
        echo (isset($context["text_what_to_backup"]) ? $context["text_what_to_backup"] : null);
        echo "</span>
        </li>
        <li rel-index=\"2\" class=\"progress-point\">
            <a href=\"#step-3\" class=\"disabled\" aria-controls=\"step-3\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
            <span class=\"step-label\">3.";
        // line 16
        echo (isset($context["text_set_destination"]) ? $context["text_set_destination"] : null);
        echo "</span>
        </li>
        <li rel-index=\"3\" class=\"progress-point\">
            <a href=\"#step-4\" class=\"disabled\" aria-controls=\"step-4\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a>
            <span class=\"step-label\">4. ";
        // line 20
        echo (isset($context["text_backup_summary"]) ? $context["text_backup_summary"] : null);
        echo "</span>
        </li>
    </ul>
</div>
<div class=\"tab-content\">
    <div role=\"tabpanel\" class=\"tab-pane active\" id=\"step-1\">
        <div class=\"col-md-12\">
            <table class=\"tableWrapper\">
                <tr>
                    <td valign=\"top\">
                        <ul class=\"backupTypesList\">
                            <li class=\"sectionHeading\">
                                <h2>1. ";
        // line 32
        echo (isset($context["text_select_backup_type"]) ? $context["text_select_backup_type"] : null);
        echo "</h2>
                            </li>
                            <div class=\"row\">
                                 <div class=\"col-xs-5\">
                                <li class=\"fullBackup\">
                                    <input type=\"radio\" name=\"AnyPort[Backup][Type]\" id=\"FullBackup\" value=\"FullBackup\" />
                                    <label for=\"FullBackup\">";
        // line 38
        echo (isset($context["text_full_open_cart_backup"]) ? $context["text_full_open_cart_backup"] : null);
        echo "</label>
                                    <p>";
        // line 39
        echo (isset($context["text_full_open_cart_backup_desc"]) ? $context["text_full_open_cart_backup_desc"] : null);
        echo "</p>
                                </li>
                                <li class=\"databaseBackup\">
                                    <input type=\"radio\" name=\"AnyPort[Backup][Type]\" id=\"DatabaseBackup\" value=\"DatabaseBackup\" />
                                    <label for=\"DatabaseBackup\">";
        // line 43
        echo (isset($context["text_database_backup"]) ? $context["text_database_backup"] : null);
        echo "</label>
                                    <p>";
        // line 44
        echo (isset($context["text_database_backup_desc"]) ? $context["text_database_backup_desc"] : null);
        echo "</p>
                                </li>
                            </div>
                            <div class=\"col-xs-5 col-xs-offset-2\">
                                <li class=\"filesBackup\">
                                    <input type=\"radio\" name=\"AnyPort[Backup][Type]\" id=\"FilesBackup\" value=\"FilesBackup\" />
                                    <label for=\"FilesBackup\">";
        // line 50
        echo (isset($context["text_files_backup"]) ? $context["text_files_backup"] : null);
        echo "</label>
                                    <p>";
        // line 51
        echo (isset($context["text_files_backup_desc"]) ? $context["text_files_backup_desc"] : null);
        echo "</p>
                                </li>
                                <li class=\"customBackup\">
                                    <input type=\"radio\" name=\"AnyPort[Backup][Type]\" id=\"CustomBackup\" value=\"CustomBackup\" />
                                    <label for=\"CustomBackup\">";
        // line 55
        echo (isset($context["text_custom_backup"]) ? $context["text_custom_backup"] : null);
        echo "</label>
                                    <p>";
        // line 56
        echo (isset($context["text_custom_backup_desc"]) ? $context["text_custom_backup_desc"] : null);
        echo "</p>
                                </li>
                            </div>
                            </div>
                            <li class=\"clearfix\"></li>
                        </ul>
                    </td>
                </tr>
            </table>
            <button id=\"step-1-next\" class=\"btn btn-lg btn-primary nextBtn pull-right\">Next</button>
        </div>
    </div>
    <div role=\"tabpanel\" class=\"tab-pane\" id=\"step-2\">

        <div class=\"col-md-12\">
            <div id=\"overlay\" style=\"display:none\"><div id=\"loader\"><i class=\"fa fa-cog fa-spin\"></i></div></div>

            <div id=\"backup-summary\">

            </div>
            <button id=\"step-2-back\" class=\"btn btn-lg btn-primary nextBtn pull-left\">Back</button>
            <button id=\"step-2-next\" class=\"btn btn-lg btn-primary pull-right\">Next</button>
        </div>
    </div>
    <div role=\"tabpanel\" class=\"tab-pane\" id=\"step-3\">
        <div class=\"col-md-12\">
            <table class=\"tableWrapper ChooseBackupDestination\">
                <tr>
                    <td valign=\"top\">
                        <ul>
                            <li class=\"sectionHeading\"><h2>3. ";
        // line 86
        echo (isset($context["text_set_destination"]) ? $context["text_set_destination"] : null);
        echo "</h2></li>
                            ";
        // line 87
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "Dropbox", array()), "Enable", array())) {
            // line 88
            echo "                            <li class=\"dropboxService\">
                                <input type=\"radio\" name=\"AnyPort[Backup][Destination]\" id=\"Dropbox\" value=\"Dropbox\" />
                                <label for=\"Dropbox\"></label>
                                <p>";
            // line 91
            echo (isset($context["text_preconfigured_dropbox_folder"]) ? $context["text_preconfigured_dropbox_folder"] : null);
            echo "</p>
                            </li>
                            ";
        }
        // line 94
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "GoogleDrive", array()), "Enable", array())) {
            // line 95
            echo "                            <li class=\"googleDriveService\">
                                <input type=\"radio\" name=\"AnyPort[Backup][Destination]\" id=\"GoogleDrive\" value=\"GoogleDrive\" />
                                <label for=\"GoogleDrive\"></label>
                                <p>";
            // line 98
            echo (isset($context["text_preconfigured_google_drive_storage"]) ? $context["text_preconfigured_google_drive_storage"] : null);
            echo "</p>
                            </li>
                            ";
        }
        // line 101
        echo "                            ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "Settings", array()), "Dropbox", array()), "Enable", array()) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "AnyPort", array()), "GoogleDrive", array()), "Enable", array()))) {
            // line 102
            echo "                            <li>
                                <p>";
            // line 103
            echo (isset($context["text_no_could_storage"]) ? $context["text_no_could_storage"] : null);
            echo "</p>
                            </li>
                            ";
        }
        // line 106
        echo "                        </ul>
                    </td>
                    <td valign=\"top\">
                        <ul>
                            <li class=\"standardFile\">
                                <input type=\"radio\" name=\"AnyPort[Backup][Destination]\" id=\"FileStandard_Backup\" value=\"FileStandard\" />
                                <label for=\"FileStandard_Backup\">";
        // line 112
        echo (isset($context["text_zipped_files_for_download"]) ? $context["text_zipped_files_for_download"] : null);
        echo "</label>
                                <p>";
        // line 113
        echo (isset($context["text_zipped_files_for_download_desc"]) ? $context["text_zipped_files_for_download_desc"] : null);
        echo "</p>
                            </li>
                        </ul>
                    </td>
                </tr>
            </table>
            <button id=\"step-3-back\" class=\"btn btn-lg btn-primary nextBtn pull-left\">Back</button>
            <button id=\"step-3-next\" class=\"btn btn-lg btn-primary pull-right\">Next</button>
        </div>
    </div>
    <div role=\"tabpanel\" class=\"tab-pane\" id=\"step-4\">

        <div class=\"col-md-12\">
            <div id=\"show-progress\">
                <div class=\"progress\">
                    <div class=\"progress-bar\" role=\"progressbar\" id=\"watch-progress-bar\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                        <span id=\"show-percentage\">0</span>
                    </div>
                </div>
                <div id=\"files-counter\" style=\"display:none\">
                    <i id=\"files-progress\" class=\"fa fa-spinner fa-spin fa-fw\"></i>&nbsp;<small>Backing up files: </small><small><span id=\"zippedFiles\">0</span></small> out of <small><span id=\"totalFiles\"></span></small>
                </div>
                <div id=\"tables-counter\" style=\"display:none\">
                    <i id=\"tables-progress\" class=\"fa fa-spinner fa-spin fa-fw\"></i>&nbsp;<small>Backing up tables: </small><small><span id=\"zippedTables\">0</span></small> out of <small><span id=\"totalTables\"></span></small>
                </div>
                <div id=\"create-download\" style=\"display:none\">
                    <i id=\"create-download-progress\" class=\"fa fa-spinner fa-spin fa-fw\"></i>&nbsp;<small>Creating download link</small>
                </div>
                <div id=\"dropbox-upload\" style=\"display:none\">
                    <i id=\"dropbox-upload-progress\" class=\"fa fa-spinner fa-spin fa-fw\"></i>&nbsp;<small>Uploading to Dropbox</small>
                </div>
                <div id=\"google-drive-upload\" style=\"display:none\">
                    <i id=\"google-upload-progress\" class=\"fa fa-spinner fa-spin fa-fw\"></i>&nbsp;<small>Uploading to Google Drive</small>
                </div>
            </div>
            <div id=\"show-dropbox-success\" style=\"display:none\">
                <h2 class=\"backup-summary-title\" style=\"text-align:left\">4. Success</h2>
                <table class=\"table\">
                    <tr>
                        <td class=\"col-xs-3\">
                            <h5 class=\"option_title backup-summary\">Status:</h5>
                        </td>
                        <td class=\"col-xs-9 backup-text-align\">
                            <div class=\"col-xs-12\">
                            <span>Backup completed</span>
                        </div>
                        </td>
                    </tr>
                   <tr>
                        <td class=\"col-xs-3\">
                            <h5 class=\"option_title backup-summary\">File info:</h5>
                        </td>
                        <td class=\"col-xs-9 backup-text-align\">
                            <div class=\"col-xs-12\">
                            <span id=\"filename-placeholder\"></span>&nbsp;&nbsp;(<span id=\"fileSize-placeholder\"></span>)
                        </div>
                        </td>
                    </tr>
                </table>
                <div class=\"row\">
                    <div class=\"col-xs-12 text-center\">
                        <button class=\"btn btn-info\" onclick=\"location.reload();\">Finish</button>
                    </div>
                </div>
            </div>
            <div id=\"show-download-link\" style=\"display:none;\">
                <h2 class=\"backup-summary-title\" style=\"text-align:left\">4. Success</h2>
                 <table class=\"table\">
                    <tr>
                        <td class=\"col-xs-3\">
                            <h5 class=\"option_title backup-summary\">Status:</h5>
                        </td>
                        <td class=\"col-xs-12 backup-text-align\">
                            <div class=\"col-xs-12\">
                            <span> Backup completed</span>
                        </div>
                        </td>
                    </tr>
                   <tr>
                        <td class=\"col-xs-3\">
                            <h5 class=\"option_title backup-summary\">File info:</h5>
                        </td>
                        <td class=\"col-xs-9 backup-text-align\">
                            <div class=\"col-xs-12\">
                             <span id=\"download-name-placeholder\"></span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class=\"col-xs-3\">
                            <h5 class=\"option_title backup-summary\">Action:</h5>
                        </td>
                        <td class=\"col-xs-9 backup-text-align\">
                            <div class=\"col-xs-12\">
                                <a id=\"download-file\" href=\"\" class=\"btn btn-primary\">Download backup&nbsp;&nbsp;(<span id=\"download-size-placeholder\"></span>) </a>
                            </div>
                        </td>
                    </tr>
                </table>
                <div class=\"row\">
                    <div class=\"col-xs-12 text-center\">
                        <button class=\"btn btn-info\" onclick=\"location.reload();\">Finish</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
var tables  = [];
var folders = [];
var progress= 0;
var dropBoxUploadOffset = 0;
var dropBoxUploadSessionId = 0;
var dropBoxUploadChunkSize = 0;
var dropBoxUploadRemaining = 0;
var googleProgress = 0;
var googleResumeUri = '';
var googlePercentage = '0%';


var dataBaseOffset = 0;
var completedTables = 0;
var finished= false;
var destination;

    \$('#step-2-back').on('click', function(e){
        e.preventDefault();
        \$('a[aria-controls=\"step-1\"]').click();
    });
    \$('#backup a[data-toggle=\"tab\"]').on('click', function(){
        if (\$(this).hasClass('disabled')){
            return false;
        }
    });
    \$('#backup a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
      var tab = \$(e.target).attr(\"href\") // activated tab
      updateBackupNavigation(tab);
    });

    function updateBackupNavigation(tab){
         \$('a[href=\"'+tab+'\"]').removeClass('completed');
         switch(tab){
                case '#step-1':
                    \$('.progress-track .progress').css('width','0%');
                    \$('a[href=\"#step-2\"]').removeClass('completed');
                    \$('a[href=\"#step-3\"]').removeClass('completed');
                    break;
                case '#step-2':
                     \$('.progress-track .progress').css('width','33.3%');
                     \$('a[href=\"#step-3\"]').removeClass('completed');
                     \$('a[href=\"#step-1\"]').addClass('completed');
                     break;
                case '#step-3':
                    \$('.progress-track .progress').css('width','66.6%');
                    \$('a[href=\"#step-1\"]').addClass('completed');
                    \$('a[href=\"#step-2\"]').addClass('completed');
                    break;
            }
    };

    \$('#step-1-next').click(function(e) {
        e.preventDefault();
        var isValid = true;
        var type = \$(\"input[type='radio'][name*='AnyPort[Backup][Type]']:checked\").val();
        if (typeof type == 'undefined') {
                isValid = false
        }
        \$.ajax({
            url: 'index.php?route=";
        // line 283
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/cleanTempFolder&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
            type: \"GET\",
            dataType: \"json\",
            success: function(json, status, xhr) {

            }
        });
        if (type == 'FullBackup') {
            \$('#step-2-next').click();
\t\t\t\$('.choose-backup > li:nth-of-type(1) > a, .choose-backup > li:nth-of-type(2) > a').addClass('completed');
        } else {
            \$('#overlay').css('display','block');
            \$('#overlay').toggleClass('active');

            \$.ajax({
              type: 'GET',
              url: 'index.php?route=";
        // line 299
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/getBackupInfo&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&type='+encodeURIComponent(type),
              data: {type:type},
              success: function(json){
                \$('#overlay').css('display','none');
                \$('#overlay').toggleClass('active');
                \$('#backup-summary').html(json);
              }
            });


            if(isValid) {
\t\t\t\t\$('.choose-backup > li:nth-of-type(0) > a').addClass('completed');
\t\t\t\t\$('.progress-track .progress').css('width','33.3%');
                \$('.choose-backup > li:nth-of-type(2) > a').removeClass('disabled').click();
            } else {
                alert('Please select a backup type');
            }
        }
    });

    \$('#step-2-next').click(function(e) {

         e.preventDefault();

         \$('.select-table:checkbox:checked').each(function(){
            tables.push(\$(this).val());
         });
          \$('.selected-to-zip:checkbox:checked').each(function(){;
            folders.push(\$(this).val());
         });
        // Check values here
        var isValid = true;
        if(isValid) {
            \$('.choose-backup > li:nth-of-type(2) > a').addClass('completed');
            \$('.progress-track .progress').css('width','66.6%');
            \$('.choose-backup > li:nth-of-type(3) > a').removeClass('disabled').click();
        }
    });

    \$('#step-3-back').on('click', function(e){
        e.preventDefault();
        var type = \$(\"input[type='radio'][name*='AnyPort[Backup][Type]']:checked\").val();
        if (type == 'FullBackup') {
            \$('a[aria-controls=\"step-1\"]').click();
        } else {
            \$('a[aria-controls=\"step-2\"]').click();
        }

    });

    \$('#step-3-next').click(function(e) {
        e.preventDefault();
        var isValid = true;
        destination = \$(\"input[type='radio'][name*='AnyPort[Backup][Destination]']:checked\").val();
        if (typeof destination == 'undefined') {
            isValid = false;
        }
        if (isValid) {
            \$('.choose-backup > li:nth-of-type(4) > a').removeClass('disabled').click();
        } else {
            alert('Please choose destination!');
        }
        \$('.choose-backup > li:nth-of-type(3) > a').addClass('completed');
        \$('.progress-track .progress').css('width','100%');



        destination = \$(\"input[type='radio'][name*='AnyPort[Backup][Destination]']:checked\").val();


        var type = \$(\"input[type='radio'][name*='AnyPort[Backup][Type]']:checked\").val();
        var listCreated;

        dfd = \$.Deferred();
        dropboxUpload = \$.Deferred();
        dataBase = \$.Deferred();
        googleDrive = \$.Deferred();


        switch(type){
            case 'FullBackup':
                createBackupList(function(){
                    ajaxExecution(dfd,progress,type).done(function() {
                        createDatabaseZip(dataBase,tables,dataBaseOffset,completedTables).done(function(){
                            \$('#watch-progress-bar').width('100%');
                            switch(destination){
                                case 'FileStandard':
                                    createDownloadLink();
                                    \$('.choose-backup > li:nth-of-type(4) > a').addClass('completed');
                                    break;
                                case 'Dropbox' :
                                    sendToDropbox(dropboxUpload,dropBoxUploadOffset,dropBoxUploadSessionId,dropBoxUploadChunkSize,dropBoxUploadRemaining,progress).done(function(){
                                        \$('#show-progress').slideUp();
                                        \$('#show-dropbox-success').slideDown();
                                        \$('.choose-backup > li:nth-of-type(4) > a').addClass('completed');
                                    });
                                break;
                                case 'GoogleDrive' :
                                    sendToGoogleDrive(googleDrive,googleProgress,googleResumeUri,googlePercentage).done(function(){
                                        \$('#show-progress').slideUp();
                                        \$('#show-dropbox-success').slideDown();
                                        \$('.choose-backup > li:nth-of-type(4) > a').addClass('completed');
                                    });
                                break;
                            }
                        });
                    });
                });
            break;
            case 'DatabaseBackup':
                createDatabaseZip(dataBase,tables,dataBaseOffset,type,completedTables).done(function(){
                    \$('#watch-progress-bar').width('100%');
                    switch(destination){
                        case 'FileStandard':
                            createDownloadLink();
                            \$('.choose-backup > li:nth-of-type(4) > a').addClass('completed');
                            break;
                        case 'Dropbox' :
                            sendToDropbox(dropboxUpload,dropBoxUploadOffset,dropBoxUploadSessionId,dropBoxUploadChunkSize,dropBoxUploadRemaining,progress).done(function(){
                                \$('.choose-backup > li:nth-of-type(4) > a').addClass('completed');
                            });
                        break;
                        case 'GoogleDrive' :
                            sendToGoogleDrive(googleDrive,googleProgress,googleResumeUri,googlePercentage).done(function(){
                                \$('#show-progress').slideUp();
                                \$('#show-dropbox-success').slideDown();
                                \$('.choose-backup > li:nth-of-type(4) > a').addClass('completed');
                            });
                        break;
                    }
                });
            break;
            case 'FilesBackup':
                createBackupList(function(){
                    ajaxExecution(dfd,progress,type).done(function() {
                        switch(destination){
                            case 'FileStandard':
                                createDownloadLink();
                                \$('.choose-backup > li:nth-of-type(4) > a').addClass('completed');
                                break;
                            case 'Dropbox' :
                                sendToDropbox(dropboxUpload,dropBoxUploadOffset,dropBoxUploadSessionId,dropBoxUploadChunkSize,dropBoxUploadRemaining).done(function(){
                                   \$('.choose-backup > li:nth-of-type(4) > a').addClass('completed');
                                });
                            break;
                            case 'GoogleDrive' :
                                sendToGoogleDrive(googleDrive,googleProgress,googleResumeUri,googlePercentage).done(function(){
                                    \$('#show-progress').slideUp();
                                    \$('#show-dropbox-success').slideDown();
                                    \$('.choose-backup > li:nth-of-type(4) > a').addClass('completed');
                                });
                            break;
                        }
                    });
                });
            break;
            case 'CustomBackup':
                createBackupList(function(){
                    ajaxExecution(dfd,progress,type).done(function() {
                        createDatabaseZip(dataBase,tables,dataBaseOffset,completedTables).done(function(){

                            switch(destination){
                                case 'FileStandard':
                                    createDownloadLink();
                                    \$('.choose-backup > li:nth-of-type(4) > a').addClass('completed');
                                    break;
                                case 'Dropbox' :
                                    sendToDropbox(dropboxUpload,dropBoxUploadOffset,dropBoxUploadSessionId,dropBoxUploadChunkSize,dropBoxUploadRemaining,progress).done(function(){
                                        \$('.choose-backup > li:nth-of-type(4) > a').addClass('completed');
                                    });
                                break;
                                case 'GoogleDrive' :
                                    sendToGoogleDrive(googleDrive,googleProgress,googleResumeUri,googlePercentage).done(function(){
                                        \$('#show-progress').slideUp();
                                        \$('#show-dropbox-success').slideDown();
                                        \$('.choose-backup > li:nth-of-type(4) > a').addClass('completed');
                                    });
                                break;
                            }
                        });
                    });
                });
            break;
        }
        // var isValid = true;
        // if(isValid) {
        //     \$('.choose-backup > li:nth-of-type(4) > a').removeClass('disabled').click();
        // }
    });

    function createDatabaseZip(dataBase,tables,offset,type,completedTables){
        \$('#tables-counter').fadeIn();
        if (tables.length > 0) {
            \$('#totalTables').html(tables.length);
        }
            \$.ajax({
                url: 'index.php?route=";
        // line 495
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/backupTables&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
                type: \"POST\",
                dataType: \"json\",
                data: {tables:tables,offset:offset,type:type,completedTables:completedTables},
                success: function(json, status, xhr) {
                    response = json;

                    if (json.status != 'finished') {
                        \$('#zippedTables').html(response.data.completedTables);
                        \$('#show-percentage').html(response.data.percentage);
                       setTimeout(function(){
                          return createDatabaseZip(dataBase,json.data.tables,json.data.offset,json.data.completedTables);
                       },100);
                    } else {
                        \$('#zippedTables').html(response.data.completedTables);
                        \$('#show-percentage').html(response.data.percentage);
                        \$('#tables-progress').removeClass('fa-spinner');
                        \$('#tables-progress').removeClass('fa-spin');
                        \$('#tables-progress').addClass('fa-check');
                       dataBase.resolve();
                    }
                }
            });
        return dataBase;
    };


    function ajaxExecution(dfd,progress,type,filesZipped) {

        \$('#files-counter').show();
        progress = progress || 0;
        filesZipped = filesZipped || 0;
        \$.ajax({
            url: 'index.php?route=";
        // line 528
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/backupFiles&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
            type: \"POST\",
            dataType: \"json\",
            data: {progress: progress,type:type,filesZipped:filesZipped},
            success: function(json, status, xhr) {
                response = json;
                if (json.status != 'finished') {
                   \$('#show-percentage').html(response.data.percentage);
                   \$('#zippedFiles').html(response.data.filesZipped);
                   \$('#watch-progress-bar').width(json.data.percentage);
                   setTimeout(function(){
                      return ajaxExecution(dfd,json.data.progress,json.data.backupType,json.data.filesZipped);
                   },100);
                } else {
                   \$('#show-percentage').html(response.data.percentage);
                   \$('#zippedFiles').html(response.data.filesZipped);
                   \$('#watch-progress-bar').width('100%');
                   \$('#files-progress').removeClass('fa-spinner');
                   \$('#files-progress').removeClass('fa-spin');
                   \$('#files-progress').addClass('fa-check');
                   \$('#totalTables').html(response.data.totalTables);
                   dfd.resolve();
                }
            }
        });
        return dfd;
    };

    function createBackupList(callback){
        \$.ajax({
          type: 'POST',
          datatype : \"application/json\",
          url: 'index.php?route=";
        // line 560
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/createBackupList&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
          data: {folders:folders},
          success: function(json){
             \$('#totalFiles').html(json.data.totalLines);
            callback(json);
          }
        });
    };

    function createDownloadLink(callback){
        \$('#create-download').fadeIn();
            \$.ajax({
              type: 'GET',
              datatype : \"application/json\",
              url: 'index.php?route=";
        // line 574
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/createDownloadLink&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
              success: function(json){
                \$('#create-download-progress').removeClass('fa-spinner');
                \$('#create-download-progress').removeClass('fa-spin');
                \$('#create-download-progress').addClass('fa-check');
                \$('#download-file').attr('href', json.data.file);
                \$('#download-name-placeholder').html(json.data.fileName);
                \$('#download-size-placeholder').html(json.data.fileSize);
                \$('#show-progress').slideUp();
                \$('#show-download-link').slideDown();
              }
            });

    };

    function sendToGoogleDrive(googleDrive,progress,resumeUri,percentage){
        progress = progress || '0%';
        \$('#google-drive-upload').show();
        \$('#show-percentage').html(percentage);
        \$('#watch-progress-bar').width(percentage);
        \$.ajax({
          type: 'GET',
          dataType: \"json\",
          url: 'index.php?route=";
        // line 597
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/sendToGoogleDrive&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
          data:{progress:progress, resumeUri:resumeUri},
          success: function(json, status, xhr) {
                response = json;
                if (json.status != 'finished') {
                   setTimeout(function(){
                      return sendToGoogleDrive(googleDrive,json.data.progress,json.data.resumeUri,json.data.percentage);
                   },1000);
                } else {
                    \$('#show-percentage').html('100%');
                    \$('#watch-progress-bar').width('100%');
                    \$('#google-upload-progress').removeClass('fa-spinner');
                    \$('#google-upload-progress').removeClass('fa-spin');
                    \$('#google-upload-progress').addClass('fa-check');
                    \$('#filename-placeholder').html(json.data.fileName);
                    \$('#fileSize-placeholder').html(json.data.fileSize);
                    \$('#show-progress').slideUp();
                    \$('#show-dropbox-success').slideDown();
                    googleDrive.resolve();
                }
            }
        });
        return googleDrive;
    };

    function sendToDropbox(dropboxUpload,offset,session_id,chunkSize,remaining,progress){
        progress = progress || '0%';
        \$('#dropbox-upload').show();
        \$('#show-percentage').html(progress);
        \$('#watch-progress-bar').width(progress);
        \$.ajax({
          type: 'GET',
          dataType: \"json\",
          url: 'index.php?route=";
        // line 630
        echo (isset($context["module_path"]) ? $context["module_path"] : null);
        echo "/sendToDropbox&user_token=";
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
          data:{offset:offset,session_id:session_id,chunkSize:chunkSize,remaining:remaining},
          success: function(json, status, xhr) {
                response = json;
                if (json.status != 'finished') {
                   setTimeout(function(){
                      return sendToDropbox(dropboxUpload,json.data.uploaded,json.data.session_id,json.data.chunkSize,json.data.remaining,json.data.percentage);
                   },500);
                } else {
                    \$('#show-percentage').html('100%');
                    \$('#watch-progress-bar').width('100%');
                    \$('#dropbox-upload-progress').removeClass('fa-spinner');
                    \$('#dropbox-upload-progress').removeClass('fa-spin');
                    \$('#dropbox-upload-progress').addClass('fa-check');
                    \$('#filename-placeholder').html(json.data.fileName);
                    \$('#fileSize-placeholder').html(json.data.fileSize);
                    \$('#show-progress').slideUp();
                    \$('#show-dropbox-success').slideDown();
                    dropboxUpload.resolve();
                }
            }
        });
        return dropboxUpload;
    };

    (function(window){
      window.utils = {
        parseQueryString: function(str) {
          var ret = Object.create(null);

          if (typeof str !== 'string') {
            return ret;
          }

          str = str.trim().replace(/^(\\?|#|&)/, '');

          if (!str) {
            return ret;
          }

          str.split('&').forEach(function (param) {
            var parts = param.replace(/\\+/g, ' ').split('=');
            // Firefox (pre 40) decodes `%3D` to `=`
            // https://github.com/sindresorhus/query-string/pull/37
            var key = parts.shift();
            var val = parts.length > 0 ? parts.join('=') : undefined;

            key = decodeURIComponent(key);

            // missing `=` should be `null`:
            // http://w3.org/TR/2012/WD-url-20120524/#collect-url-parameters
            val = val === undefined ? null : decodeURIComponent(val);

            if (ret[key] === undefined) {
              ret[key] = val;
            } else if (Array.isArray(ret[key])) {
              ret[key].push(val);
            } else {
              ret[key] = [ret[key], val];
            }
          });

          return ret;
        }
      };
    })(window);
</script>
";
    }

    public function getTemplateName()
    {
        return "extension/module/anyport/tab_backup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  755 => 630,  717 => 597,  689 => 574,  670 => 560,  633 => 528,  595 => 495,  394 => 299,  373 => 283,  200 => 113,  196 => 112,  188 => 106,  182 => 103,  179 => 102,  176 => 101,  170 => 98,  165 => 95,  162 => 94,  156 => 91,  151 => 88,  149 => 87,  145 => 86,  112 => 56,  108 => 55,  101 => 51,  97 => 50,  88 => 44,  84 => 43,  77 => 39,  73 => 38,  64 => 32,  49 => 20,  42 => 16,  35 => 12,  28 => 8,  19 => 1,);
    }
}
/* <div class="progress-steps">*/
/* 	<div class="progress-track">*/
/*     	<span class="progress"></span>*/
/*     </div>*/
/*     <ul class="nav nav-tabs progress-points choose-backup">*/
/*         <li rel-index="0" class="progress-point active">*/
/*             <a href="#step-1" aria-controls="step-1" role="tab" data-toggle="tab"><i class="fa fa-check" aria-hidden="true"></i></a>*/
/*             <span class="step-label">1. {{ text_select_backup_type }}</span>*/
/*         </li>*/
/*         <li rel-index="1" class="progress-point">*/
/*             <a href="#step-2" class="disabled" aria-controls="step-2" role="tab" data-toggle="tab"><i class="fa fa-check" aria-hidden="true"></i></a>*/
/*             <span class="step-label">2. {{ text_what_to_backup }}</span>*/
/*         </li>*/
/*         <li rel-index="2" class="progress-point">*/
/*             <a href="#step-3" class="disabled" aria-controls="step-3" role="tab" data-toggle="tab"><i class="fa fa-check" aria-hidden="true"></i></a>*/
/*             <span class="step-label">3.{{ text_set_destination }}</span>*/
/*         </li>*/
/*         <li rel-index="3" class="progress-point">*/
/*             <a href="#step-4" class="disabled" aria-controls="step-4" role="tab" data-toggle="tab"><i class="fa fa-check" aria-hidden="true"></i></a>*/
/*             <span class="step-label">4. {{ text_backup_summary }}</span>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* <div class="tab-content">*/
/*     <div role="tabpanel" class="tab-pane active" id="step-1">*/
/*         <div class="col-md-12">*/
/*             <table class="tableWrapper">*/
/*                 <tr>*/
/*                     <td valign="top">*/
/*                         <ul class="backupTypesList">*/
/*                             <li class="sectionHeading">*/
/*                                 <h2>1. {{ text_select_backup_type }}</h2>*/
/*                             </li>*/
/*                             <div class="row">*/
/*                                  <div class="col-xs-5">*/
/*                                 <li class="fullBackup">*/
/*                                     <input type="radio" name="AnyPort[Backup][Type]" id="FullBackup" value="FullBackup" />*/
/*                                     <label for="FullBackup">{{ text_full_open_cart_backup }}</label>*/
/*                                     <p>{{ text_full_open_cart_backup_desc }}</p>*/
/*                                 </li>*/
/*                                 <li class="databaseBackup">*/
/*                                     <input type="radio" name="AnyPort[Backup][Type]" id="DatabaseBackup" value="DatabaseBackup" />*/
/*                                     <label for="DatabaseBackup">{{ text_database_backup }}</label>*/
/*                                     <p>{{ text_database_backup_desc }}</p>*/
/*                                 </li>*/
/*                             </div>*/
/*                             <div class="col-xs-5 col-xs-offset-2">*/
/*                                 <li class="filesBackup">*/
/*                                     <input type="radio" name="AnyPort[Backup][Type]" id="FilesBackup" value="FilesBackup" />*/
/*                                     <label for="FilesBackup">{{ text_files_backup }}</label>*/
/*                                     <p>{{ text_files_backup_desc }}</p>*/
/*                                 </li>*/
/*                                 <li class="customBackup">*/
/*                                     <input type="radio" name="AnyPort[Backup][Type]" id="CustomBackup" value="CustomBackup" />*/
/*                                     <label for="CustomBackup">{{ text_custom_backup }}</label>*/
/*                                     <p>{{ text_custom_backup_desc }}</p>*/
/*                                 </li>*/
/*                             </div>*/
/*                             </div>*/
/*                             <li class="clearfix"></li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/*             <button id="step-1-next" class="btn btn-lg btn-primary nextBtn pull-right">Next</button>*/
/*         </div>*/
/*     </div>*/
/*     <div role="tabpanel" class="tab-pane" id="step-2">*/
/* */
/*         <div class="col-md-12">*/
/*             <div id="overlay" style="display:none"><div id="loader"><i class="fa fa-cog fa-spin"></i></div></div>*/
/* */
/*             <div id="backup-summary">*/
/* */
/*             </div>*/
/*             <button id="step-2-back" class="btn btn-lg btn-primary nextBtn pull-left">Back</button>*/
/*             <button id="step-2-next" class="btn btn-lg btn-primary pull-right">Next</button>*/
/*         </div>*/
/*     </div>*/
/*     <div role="tabpanel" class="tab-pane" id="step-3">*/
/*         <div class="col-md-12">*/
/*             <table class="tableWrapper ChooseBackupDestination">*/
/*                 <tr>*/
/*                     <td valign="top">*/
/*                         <ul>*/
/*                             <li class="sectionHeading"><h2>3. {{ text_set_destination }}</h2></li>*/
/*                             {% if data.AnyPort.Settings.Dropbox.Enable %}*/
/*                             <li class="dropboxService">*/
/*                                 <input type="radio" name="AnyPort[Backup][Destination]" id="Dropbox" value="Dropbox" />*/
/*                                 <label for="Dropbox"></label>*/
/*                                 <p>{{ text_preconfigured_dropbox_folder }}</p>*/
/*                             </li>*/
/*                             {% endif %}*/
/*                             {% if data.AnyPort.Settings.GoogleDrive.Enable %}*/
/*                             <li class="googleDriveService">*/
/*                                 <input type="radio" name="AnyPort[Backup][Destination]" id="GoogleDrive" value="GoogleDrive" />*/
/*                                 <label for="GoogleDrive"></label>*/
/*                                 <p>{{ text_preconfigured_google_drive_storage }}</p>*/
/*                             </li>*/
/*                             {% endif %}*/
/*                             {% if data.AnyPort.Settings.Dropbox.Enable and data.AnyPort.GoogleDrive.Enable %}*/
/*                             <li>*/
/*                                 <p>{{ text_no_could_storage }}</p>*/
/*                             </li>*/
/*                             {% endif %}*/
/*                         </ul>*/
/*                     </td>*/
/*                     <td valign="top">*/
/*                         <ul>*/
/*                             <li class="standardFile">*/
/*                                 <input type="radio" name="AnyPort[Backup][Destination]" id="FileStandard_Backup" value="FileStandard" />*/
/*                                 <label for="FileStandard_Backup">{{ text_zipped_files_for_download }}</label>*/
/*                                 <p>{{ text_zipped_files_for_download_desc }}</p>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             </table>*/
/*             <button id="step-3-back" class="btn btn-lg btn-primary nextBtn pull-left">Back</button>*/
/*             <button id="step-3-next" class="btn btn-lg btn-primary pull-right">Next</button>*/
/*         </div>*/
/*     </div>*/
/*     <div role="tabpanel" class="tab-pane" id="step-4">*/
/* */
/*         <div class="col-md-12">*/
/*             <div id="show-progress">*/
/*                 <div class="progress">*/
/*                     <div class="progress-bar" role="progressbar" id="watch-progress-bar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">*/
/*                         <span id="show-percentage">0</span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="files-counter" style="display:none">*/
/*                     <i id="files-progress" class="fa fa-spinner fa-spin fa-fw"></i>&nbsp;<small>Backing up files: </small><small><span id="zippedFiles">0</span></small> out of <small><span id="totalFiles"></span></small>*/
/*                 </div>*/
/*                 <div id="tables-counter" style="display:none">*/
/*                     <i id="tables-progress" class="fa fa-spinner fa-spin fa-fw"></i>&nbsp;<small>Backing up tables: </small><small><span id="zippedTables">0</span></small> out of <small><span id="totalTables"></span></small>*/
/*                 </div>*/
/*                 <div id="create-download" style="display:none">*/
/*                     <i id="create-download-progress" class="fa fa-spinner fa-spin fa-fw"></i>&nbsp;<small>Creating download link</small>*/
/*                 </div>*/
/*                 <div id="dropbox-upload" style="display:none">*/
/*                     <i id="dropbox-upload-progress" class="fa fa-spinner fa-spin fa-fw"></i>&nbsp;<small>Uploading to Dropbox</small>*/
/*                 </div>*/
/*                 <div id="google-drive-upload" style="display:none">*/
/*                     <i id="google-upload-progress" class="fa fa-spinner fa-spin fa-fw"></i>&nbsp;<small>Uploading to Google Drive</small>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="show-dropbox-success" style="display:none">*/
/*                 <h2 class="backup-summary-title" style="text-align:left">4. Success</h2>*/
/*                 <table class="table">*/
/*                     <tr>*/
/*                         <td class="col-xs-3">*/
/*                             <h5 class="option_title backup-summary">Status:</h5>*/
/*                         </td>*/
/*                         <td class="col-xs-9 backup-text-align">*/
/*                             <div class="col-xs-12">*/
/*                             <span>Backup completed</span>*/
/*                         </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                    <tr>*/
/*                         <td class="col-xs-3">*/
/*                             <h5 class="option_title backup-summary">File info:</h5>*/
/*                         </td>*/
/*                         <td class="col-xs-9 backup-text-align">*/
/*                             <div class="col-xs-12">*/
/*                             <span id="filename-placeholder"></span>&nbsp;&nbsp;(<span id="fileSize-placeholder"></span>)*/
/*                         </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                 </table>*/
/*                 <div class="row">*/
/*                     <div class="col-xs-12 text-center">*/
/*                         <button class="btn btn-info" onclick="location.reload();">Finish</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div id="show-download-link" style="display:none;">*/
/*                 <h2 class="backup-summary-title" style="text-align:left">4. Success</h2>*/
/*                  <table class="table">*/
/*                     <tr>*/
/*                         <td class="col-xs-3">*/
/*                             <h5 class="option_title backup-summary">Status:</h5>*/
/*                         </td>*/
/*                         <td class="col-xs-12 backup-text-align">*/
/*                             <div class="col-xs-12">*/
/*                             <span> Backup completed</span>*/
/*                         </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                    <tr>*/
/*                         <td class="col-xs-3">*/
/*                             <h5 class="option_title backup-summary">File info:</h5>*/
/*                         </td>*/
/*                         <td class="col-xs-9 backup-text-align">*/
/*                             <div class="col-xs-12">*/
/*                              <span id="download-name-placeholder"></span>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <td class="col-xs-3">*/
/*                             <h5 class="option_title backup-summary">Action:</h5>*/
/*                         </td>*/
/*                         <td class="col-xs-9 backup-text-align">*/
/*                             <div class="col-xs-12">*/
/*                                 <a id="download-file" href="" class="btn btn-primary">Download backup&nbsp;&nbsp;(<span id="download-size-placeholder"></span>) </a>*/
/*                             </div>*/
/*                         </td>*/
/*                     </tr>*/
/*                 </table>*/
/*                 <div class="row">*/
/*                     <div class="col-xs-12 text-center">*/
/*                         <button class="btn btn-info" onclick="location.reload();">Finish</button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <script>*/
/* var tables  = [];*/
/* var folders = [];*/
/* var progress= 0;*/
/* var dropBoxUploadOffset = 0;*/
/* var dropBoxUploadSessionId = 0;*/
/* var dropBoxUploadChunkSize = 0;*/
/* var dropBoxUploadRemaining = 0;*/
/* var googleProgress = 0;*/
/* var googleResumeUri = '';*/
/* var googlePercentage = '0%';*/
/* */
/* */
/* var dataBaseOffset = 0;*/
/* var completedTables = 0;*/
/* var finished= false;*/
/* var destination;*/
/* */
/*     $('#step-2-back').on('click', function(e){*/
/*         e.preventDefault();*/
/*         $('a[aria-controls="step-1"]').click();*/
/*     });*/
/*     $('#backup a[data-toggle="tab"]').on('click', function(){*/
/*         if ($(this).hasClass('disabled')){*/
/*             return false;*/
/*         }*/
/*     });*/
/*     $('#backup a[data-toggle="tab"]').on('shown.bs.tab', function (e) {*/
/*       var tab = $(e.target).attr("href") // activated tab*/
/*       updateBackupNavigation(tab);*/
/*     });*/
/* */
/*     function updateBackupNavigation(tab){*/
/*          $('a[href="'+tab+'"]').removeClass('completed');*/
/*          switch(tab){*/
/*                 case '#step-1':*/
/*                     $('.progress-track .progress').css('width','0%');*/
/*                     $('a[href="#step-2"]').removeClass('completed');*/
/*                     $('a[href="#step-3"]').removeClass('completed');*/
/*                     break;*/
/*                 case '#step-2':*/
/*                      $('.progress-track .progress').css('width','33.3%');*/
/*                      $('a[href="#step-3"]').removeClass('completed');*/
/*                      $('a[href="#step-1"]').addClass('completed');*/
/*                      break;*/
/*                 case '#step-3':*/
/*                     $('.progress-track .progress').css('width','66.6%');*/
/*                     $('a[href="#step-1"]').addClass('completed');*/
/*                     $('a[href="#step-2"]').addClass('completed');*/
/*                     break;*/
/*             }*/
/*     };*/
/* */
/*     $('#step-1-next').click(function(e) {*/
/*         e.preventDefault();*/
/*         var isValid = true;*/
/*         var type = $("input[type='radio'][name*='AnyPort[Backup][Type]']:checked").val();*/
/*         if (typeof type == 'undefined') {*/
/*                 isValid = false*/
/*         }*/
/*         $.ajax({*/
/*             url: 'index.php?route={{ module_path }}/cleanTempFolder&user_token={{ user_token }}',*/
/*             type: "GET",*/
/*             dataType: "json",*/
/*             success: function(json, status, xhr) {*/
/* */
/*             }*/
/*         });*/
/*         if (type == 'FullBackup') {*/
/*             $('#step-2-next').click();*/
/* 			$('.choose-backup > li:nth-of-type(1) > a, .choose-backup > li:nth-of-type(2) > a').addClass('completed');*/
/*         } else {*/
/*             $('#overlay').css('display','block');*/
/*             $('#overlay').toggleClass('active');*/
/* */
/*             $.ajax({*/
/*               type: 'GET',*/
/*               url: 'index.php?route={{ module_path }}/getBackupInfo&user_token={{ user_token }}&type='+encodeURIComponent(type),*/
/*               data: {type:type},*/
/*               success: function(json){*/
/*                 $('#overlay').css('display','none');*/
/*                 $('#overlay').toggleClass('active');*/
/*                 $('#backup-summary').html(json);*/
/*               }*/
/*             });*/
/* */
/* */
/*             if(isValid) {*/
/* 				$('.choose-backup > li:nth-of-type(0) > a').addClass('completed');*/
/* 				$('.progress-track .progress').css('width','33.3%');*/
/*                 $('.choose-backup > li:nth-of-type(2) > a').removeClass('disabled').click();*/
/*             } else {*/
/*                 alert('Please select a backup type');*/
/*             }*/
/*         }*/
/*     });*/
/* */
/*     $('#step-2-next').click(function(e) {*/
/* */
/*          e.preventDefault();*/
/* */
/*          $('.select-table:checkbox:checked').each(function(){*/
/*             tables.push($(this).val());*/
/*          });*/
/*           $('.selected-to-zip:checkbox:checked').each(function(){;*/
/*             folders.push($(this).val());*/
/*          });*/
/*         // Check values here*/
/*         var isValid = true;*/
/*         if(isValid) {*/
/*             $('.choose-backup > li:nth-of-type(2) > a').addClass('completed');*/
/*             $('.progress-track .progress').css('width','66.6%');*/
/*             $('.choose-backup > li:nth-of-type(3) > a').removeClass('disabled').click();*/
/*         }*/
/*     });*/
/* */
/*     $('#step-3-back').on('click', function(e){*/
/*         e.preventDefault();*/
/*         var type = $("input[type='radio'][name*='AnyPort[Backup][Type]']:checked").val();*/
/*         if (type == 'FullBackup') {*/
/*             $('a[aria-controls="step-1"]').click();*/
/*         } else {*/
/*             $('a[aria-controls="step-2"]').click();*/
/*         }*/
/* */
/*     });*/
/* */
/*     $('#step-3-next').click(function(e) {*/
/*         e.preventDefault();*/
/*         var isValid = true;*/
/*         destination = $("input[type='radio'][name*='AnyPort[Backup][Destination]']:checked").val();*/
/*         if (typeof destination == 'undefined') {*/
/*             isValid = false;*/
/*         }*/
/*         if (isValid) {*/
/*             $('.choose-backup > li:nth-of-type(4) > a').removeClass('disabled').click();*/
/*         } else {*/
/*             alert('Please choose destination!');*/
/*         }*/
/*         $('.choose-backup > li:nth-of-type(3) > a').addClass('completed');*/
/*         $('.progress-track .progress').css('width','100%');*/
/* */
/* */
/* */
/*         destination = $("input[type='radio'][name*='AnyPort[Backup][Destination]']:checked").val();*/
/* */
/* */
/*         var type = $("input[type='radio'][name*='AnyPort[Backup][Type]']:checked").val();*/
/*         var listCreated;*/
/* */
/*         dfd = $.Deferred();*/
/*         dropboxUpload = $.Deferred();*/
/*         dataBase = $.Deferred();*/
/*         googleDrive = $.Deferred();*/
/* */
/* */
/*         switch(type){*/
/*             case 'FullBackup':*/
/*                 createBackupList(function(){*/
/*                     ajaxExecution(dfd,progress,type).done(function() {*/
/*                         createDatabaseZip(dataBase,tables,dataBaseOffset,completedTables).done(function(){*/
/*                             $('#watch-progress-bar').width('100%');*/
/*                             switch(destination){*/
/*                                 case 'FileStandard':*/
/*                                     createDownloadLink();*/
/*                                     $('.choose-backup > li:nth-of-type(4) > a').addClass('completed');*/
/*                                     break;*/
/*                                 case 'Dropbox' :*/
/*                                     sendToDropbox(dropboxUpload,dropBoxUploadOffset,dropBoxUploadSessionId,dropBoxUploadChunkSize,dropBoxUploadRemaining,progress).done(function(){*/
/*                                         $('#show-progress').slideUp();*/
/*                                         $('#show-dropbox-success').slideDown();*/
/*                                         $('.choose-backup > li:nth-of-type(4) > a').addClass('completed');*/
/*                                     });*/
/*                                 break;*/
/*                                 case 'GoogleDrive' :*/
/*                                     sendToGoogleDrive(googleDrive,googleProgress,googleResumeUri,googlePercentage).done(function(){*/
/*                                         $('#show-progress').slideUp();*/
/*                                         $('#show-dropbox-success').slideDown();*/
/*                                         $('.choose-backup > li:nth-of-type(4) > a').addClass('completed');*/
/*                                     });*/
/*                                 break;*/
/*                             }*/
/*                         });*/
/*                     });*/
/*                 });*/
/*             break;*/
/*             case 'DatabaseBackup':*/
/*                 createDatabaseZip(dataBase,tables,dataBaseOffset,type,completedTables).done(function(){*/
/*                     $('#watch-progress-bar').width('100%');*/
/*                     switch(destination){*/
/*                         case 'FileStandard':*/
/*                             createDownloadLink();*/
/*                             $('.choose-backup > li:nth-of-type(4) > a').addClass('completed');*/
/*                             break;*/
/*                         case 'Dropbox' :*/
/*                             sendToDropbox(dropboxUpload,dropBoxUploadOffset,dropBoxUploadSessionId,dropBoxUploadChunkSize,dropBoxUploadRemaining,progress).done(function(){*/
/*                                 $('.choose-backup > li:nth-of-type(4) > a').addClass('completed');*/
/*                             });*/
/*                         break;*/
/*                         case 'GoogleDrive' :*/
/*                             sendToGoogleDrive(googleDrive,googleProgress,googleResumeUri,googlePercentage).done(function(){*/
/*                                 $('#show-progress').slideUp();*/
/*                                 $('#show-dropbox-success').slideDown();*/
/*                                 $('.choose-backup > li:nth-of-type(4) > a').addClass('completed');*/
/*                             });*/
/*                         break;*/
/*                     }*/
/*                 });*/
/*             break;*/
/*             case 'FilesBackup':*/
/*                 createBackupList(function(){*/
/*                     ajaxExecution(dfd,progress,type).done(function() {*/
/*                         switch(destination){*/
/*                             case 'FileStandard':*/
/*                                 createDownloadLink();*/
/*                                 $('.choose-backup > li:nth-of-type(4) > a').addClass('completed');*/
/*                                 break;*/
/*                             case 'Dropbox' :*/
/*                                 sendToDropbox(dropboxUpload,dropBoxUploadOffset,dropBoxUploadSessionId,dropBoxUploadChunkSize,dropBoxUploadRemaining).done(function(){*/
/*                                    $('.choose-backup > li:nth-of-type(4) > a').addClass('completed');*/
/*                                 });*/
/*                             break;*/
/*                             case 'GoogleDrive' :*/
/*                                 sendToGoogleDrive(googleDrive,googleProgress,googleResumeUri,googlePercentage).done(function(){*/
/*                                     $('#show-progress').slideUp();*/
/*                                     $('#show-dropbox-success').slideDown();*/
/*                                     $('.choose-backup > li:nth-of-type(4) > a').addClass('completed');*/
/*                                 });*/
/*                             break;*/
/*                         }*/
/*                     });*/
/*                 });*/
/*             break;*/
/*             case 'CustomBackup':*/
/*                 createBackupList(function(){*/
/*                     ajaxExecution(dfd,progress,type).done(function() {*/
/*                         createDatabaseZip(dataBase,tables,dataBaseOffset,completedTables).done(function(){*/
/* */
/*                             switch(destination){*/
/*                                 case 'FileStandard':*/
/*                                     createDownloadLink();*/
/*                                     $('.choose-backup > li:nth-of-type(4) > a').addClass('completed');*/
/*                                     break;*/
/*                                 case 'Dropbox' :*/
/*                                     sendToDropbox(dropboxUpload,dropBoxUploadOffset,dropBoxUploadSessionId,dropBoxUploadChunkSize,dropBoxUploadRemaining,progress).done(function(){*/
/*                                         $('.choose-backup > li:nth-of-type(4) > a').addClass('completed');*/
/*                                     });*/
/*                                 break;*/
/*                                 case 'GoogleDrive' :*/
/*                                     sendToGoogleDrive(googleDrive,googleProgress,googleResumeUri,googlePercentage).done(function(){*/
/*                                         $('#show-progress').slideUp();*/
/*                                         $('#show-dropbox-success').slideDown();*/
/*                                         $('.choose-backup > li:nth-of-type(4) > a').addClass('completed');*/
/*                                     });*/
/*                                 break;*/
/*                             }*/
/*                         });*/
/*                     });*/
/*                 });*/
/*             break;*/
/*         }*/
/*         // var isValid = true;*/
/*         // if(isValid) {*/
/*         //     $('.choose-backup > li:nth-of-type(4) > a').removeClass('disabled').click();*/
/*         // }*/
/*     });*/
/* */
/*     function createDatabaseZip(dataBase,tables,offset,type,completedTables){*/
/*         $('#tables-counter').fadeIn();*/
/*         if (tables.length > 0) {*/
/*             $('#totalTables').html(tables.length);*/
/*         }*/
/*             $.ajax({*/
/*                 url: 'index.php?route={{ module_path }}/backupTables&user_token={{ user_token }}',*/
/*                 type: "POST",*/
/*                 dataType: "json",*/
/*                 data: {tables:tables,offset:offset,type:type,completedTables:completedTables},*/
/*                 success: function(json, status, xhr) {*/
/*                     response = json;*/
/* */
/*                     if (json.status != 'finished') {*/
/*                         $('#zippedTables').html(response.data.completedTables);*/
/*                         $('#show-percentage').html(response.data.percentage);*/
/*                        setTimeout(function(){*/
/*                           return createDatabaseZip(dataBase,json.data.tables,json.data.offset,json.data.completedTables);*/
/*                        },100);*/
/*                     } else {*/
/*                         $('#zippedTables').html(response.data.completedTables);*/
/*                         $('#show-percentage').html(response.data.percentage);*/
/*                         $('#tables-progress').removeClass('fa-spinner');*/
/*                         $('#tables-progress').removeClass('fa-spin');*/
/*                         $('#tables-progress').addClass('fa-check');*/
/*                        dataBase.resolve();*/
/*                     }*/
/*                 }*/
/*             });*/
/*         return dataBase;*/
/*     };*/
/* */
/* */
/*     function ajaxExecution(dfd,progress,type,filesZipped) {*/
/* */
/*         $('#files-counter').show();*/
/*         progress = progress || 0;*/
/*         filesZipped = filesZipped || 0;*/
/*         $.ajax({*/
/*             url: 'index.php?route={{ module_path }}/backupFiles&user_token={{ user_token }}',*/
/*             type: "POST",*/
/*             dataType: "json",*/
/*             data: {progress: progress,type:type,filesZipped:filesZipped},*/
/*             success: function(json, status, xhr) {*/
/*                 response = json;*/
/*                 if (json.status != 'finished') {*/
/*                    $('#show-percentage').html(response.data.percentage);*/
/*                    $('#zippedFiles').html(response.data.filesZipped);*/
/*                    $('#watch-progress-bar').width(json.data.percentage);*/
/*                    setTimeout(function(){*/
/*                       return ajaxExecution(dfd,json.data.progress,json.data.backupType,json.data.filesZipped);*/
/*                    },100);*/
/*                 } else {*/
/*                    $('#show-percentage').html(response.data.percentage);*/
/*                    $('#zippedFiles').html(response.data.filesZipped);*/
/*                    $('#watch-progress-bar').width('100%');*/
/*                    $('#files-progress').removeClass('fa-spinner');*/
/*                    $('#files-progress').removeClass('fa-spin');*/
/*                    $('#files-progress').addClass('fa-check');*/
/*                    $('#totalTables').html(response.data.totalTables);*/
/*                    dfd.resolve();*/
/*                 }*/
/*             }*/
/*         });*/
/*         return dfd;*/
/*     };*/
/* */
/*     function createBackupList(callback){*/
/*         $.ajax({*/
/*           type: 'POST',*/
/*           datatype : "application/json",*/
/*           url: 'index.php?route={{ module_path }}/createBackupList&user_token={{ user_token }}',*/
/*           data: {folders:folders},*/
/*           success: function(json){*/
/*              $('#totalFiles').html(json.data.totalLines);*/
/*             callback(json);*/
/*           }*/
/*         });*/
/*     };*/
/* */
/*     function createDownloadLink(callback){*/
/*         $('#create-download').fadeIn();*/
/*             $.ajax({*/
/*               type: 'GET',*/
/*               datatype : "application/json",*/
/*               url: 'index.php?route={{ module_path }}/createDownloadLink&user_token={{ user_token }}',*/
/*               success: function(json){*/
/*                 $('#create-download-progress').removeClass('fa-spinner');*/
/*                 $('#create-download-progress').removeClass('fa-spin');*/
/*                 $('#create-download-progress').addClass('fa-check');*/
/*                 $('#download-file').attr('href', json.data.file);*/
/*                 $('#download-name-placeholder').html(json.data.fileName);*/
/*                 $('#download-size-placeholder').html(json.data.fileSize);*/
/*                 $('#show-progress').slideUp();*/
/*                 $('#show-download-link').slideDown();*/
/*               }*/
/*             });*/
/* */
/*     };*/
/* */
/*     function sendToGoogleDrive(googleDrive,progress,resumeUri,percentage){*/
/*         progress = progress || '0%';*/
/*         $('#google-drive-upload').show();*/
/*         $('#show-percentage').html(percentage);*/
/*         $('#watch-progress-bar').width(percentage);*/
/*         $.ajax({*/
/*           type: 'GET',*/
/*           dataType: "json",*/
/*           url: 'index.php?route={{ module_path }}/sendToGoogleDrive&user_token={{ user_token }}',*/
/*           data:{progress:progress, resumeUri:resumeUri},*/
/*           success: function(json, status, xhr) {*/
/*                 response = json;*/
/*                 if (json.status != 'finished') {*/
/*                    setTimeout(function(){*/
/*                       return sendToGoogleDrive(googleDrive,json.data.progress,json.data.resumeUri,json.data.percentage);*/
/*                    },1000);*/
/*                 } else {*/
/*                     $('#show-percentage').html('100%');*/
/*                     $('#watch-progress-bar').width('100%');*/
/*                     $('#google-upload-progress').removeClass('fa-spinner');*/
/*                     $('#google-upload-progress').removeClass('fa-spin');*/
/*                     $('#google-upload-progress').addClass('fa-check');*/
/*                     $('#filename-placeholder').html(json.data.fileName);*/
/*                     $('#fileSize-placeholder').html(json.data.fileSize);*/
/*                     $('#show-progress').slideUp();*/
/*                     $('#show-dropbox-success').slideDown();*/
/*                     googleDrive.resolve();*/
/*                 }*/
/*             }*/
/*         });*/
/*         return googleDrive;*/
/*     };*/
/* */
/*     function sendToDropbox(dropboxUpload,offset,session_id,chunkSize,remaining,progress){*/
/*         progress = progress || '0%';*/
/*         $('#dropbox-upload').show();*/
/*         $('#show-percentage').html(progress);*/
/*         $('#watch-progress-bar').width(progress);*/
/*         $.ajax({*/
/*           type: 'GET',*/
/*           dataType: "json",*/
/*           url: 'index.php?route={{ module_path }}/sendToDropbox&user_token={{ user_token }}',*/
/*           data:{offset:offset,session_id:session_id,chunkSize:chunkSize,remaining:remaining},*/
/*           success: function(json, status, xhr) {*/
/*                 response = json;*/
/*                 if (json.status != 'finished') {*/
/*                    setTimeout(function(){*/
/*                       return sendToDropbox(dropboxUpload,json.data.uploaded,json.data.session_id,json.data.chunkSize,json.data.remaining,json.data.percentage);*/
/*                    },500);*/
/*                 } else {*/
/*                     $('#show-percentage').html('100%');*/
/*                     $('#watch-progress-bar').width('100%');*/
/*                     $('#dropbox-upload-progress').removeClass('fa-spinner');*/
/*                     $('#dropbox-upload-progress').removeClass('fa-spin');*/
/*                     $('#dropbox-upload-progress').addClass('fa-check');*/
/*                     $('#filename-placeholder').html(json.data.fileName);*/
/*                     $('#fileSize-placeholder').html(json.data.fileSize);*/
/*                     $('#show-progress').slideUp();*/
/*                     $('#show-dropbox-success').slideDown();*/
/*                     dropboxUpload.resolve();*/
/*                 }*/
/*             }*/
/*         });*/
/*         return dropboxUpload;*/
/*     };*/
/* */
/*     (function(window){*/
/*       window.utils = {*/
/*         parseQueryString: function(str) {*/
/*           var ret = Object.create(null);*/
/* */
/*           if (typeof str !== 'string') {*/
/*             return ret;*/
/*           }*/
/* */
/*           str = str.trim().replace(/^(\?|#|&)/, '');*/
/* */
/*           if (!str) {*/
/*             return ret;*/
/*           }*/
/* */
/*           str.split('&').forEach(function (param) {*/
/*             var parts = param.replace(/\+/g, ' ').split('=');*/
/*             // Firefox (pre 40) decodes `%3D` to `=`*/
/*             // https://github.com/sindresorhus/query-string/pull/37*/
/*             var key = parts.shift();*/
/*             var val = parts.length > 0 ? parts.join('=') : undefined;*/
/* */
/*             key = decodeURIComponent(key);*/
/* */
/*             // missing `=` should be `null`:*/
/*             // http://w3.org/TR/2012/WD-url-20120524/#collect-url-parameters*/
/*             val = val === undefined ? null : decodeURIComponent(val);*/
/* */
/*             if (ret[key] === undefined) {*/
/*               ret[key] = val;*/
/*             } else if (Array.isArray(ret[key])) {*/
/*               ret[key].push(val);*/
/*             } else {*/
/*               ret[key] = [ret[key], val];*/
/*             }*/
/*           });*/
/* */
/*           return ret;*/
/*         }*/
/*       };*/
/*     })(window);*/
/* </script>*/
/* */
