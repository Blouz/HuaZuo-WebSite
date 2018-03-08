<?php

/* extension/module/excelport.twig */
class __TwigTemplate_641571eb0284d9f76bd79c5dd3c519a3a73f2b19af224eb2c1b59b6f0225e694 extends Twig_Template
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
<div id=\"content\">
  <form action=\"";
        // line 3
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary save-changes\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 8
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 9
        echo (isset($context["heading_title_version"]) ? $context["heading_title_version"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if ((isset($context["error_excelport_licensed_on"]) ? $context["error_excelport_licensed_on"] : null)) {
            // line 19
            echo "      <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_excelport_licensed_on"]) ? $context["error_excelport_licensed_on"] : null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 23
        echo "    ";
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 24
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    ";
        if ((isset($context["success_message"]) ? $context["success_message"] : null)) {
            // line 29
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["success_message"]) ? $context["success_message"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 33
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <ul class=\"nav nav-tabs\">
          ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 37
            echo "          <li><a class=\"excelport_tab\" href=\"#tab-";
            echo $this->getAttribute($context["tab"], "id", array());
            echo "\" data-toggle=\"tab\">";
            echo $this->getAttribute($context["tab"], "name", array());
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </ul>
        
          <div class=\"tab-content\">
          ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 43
            echo "            <div class=\"tab-pane\" id=\"tab-";
            echo $this->getAttribute($context["tab"], "id", array());
            echo "\">
              ";
            // line 44
            echo twig_include($this->env, $context, $this->getAttribute($context["tab"], "file", array()));
            echo "
            </div>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "          </div>
        
      </div>
    </div>
  </div>
  </form>
</div>

<div id=\"progress-dialog\" class=\"modal\" data-backdrop=\"static\" style=\"display: none;\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content padding20\">
      <div id=\"progressbar\">
        <div class=\"progress\">
          <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
          </div>
        </div>
      </div>
      <div id=\"progressinfo\"></div>
      <button class=\"btn btn-default finishActionButton\" style=\"display: none;\">Abort</button>
    </div>
  </div>
</div>

<script type=\"text/javascript\">

var jq = jQuery; // Intended for MijoShop

jq('li[id^=\"toolbar-popup\"]').remove();

var xhr;
var loopXHR;
var pageTitle = jq('title').html();
var abort = false;
var sending = false;
var updateTimeout = null;
var loopXHR = null;
var site_url = null;
var lastMemory = 0;
var unidentifiedError = false;

var closeDialog = function() {
  jq(\"#progress-dialog\").modal(\"hide\");
  jq('#progressinfo').empty();
  jq('#progressbar .progress-bar').attr('aria-valuenow', '0');
  jq('#progressbar .progress-bar').css('width', '0%');
  jq('.finishActionButton').hide();
}

jq('.finishActionButton').click(function() {
  abort = true;
  loopXHR.abort();
  clearTimeout(updateTimeout);
  jq(this).html('<img src=\"./view/image/excelport/ajax-loader.gif\" class=\"loadingImage2\"/>');
  jq(this).attr('disabled', 'disabled');
  jq('#progressinfo').html('Aborting... Please wait...');
  jq('title').html(pageTitle);
  if (!sending) closeDialog();
});

jq(document).ajaxSend(function() {
  sending = true; 
});

jq(document).ajaxStop(function() {
  sending = false;
  if (abort) {
    closeDialog();
  }
});

var dependable = 'input[name=\"ExcelPort[Export][DataType]\"], input[name=\"ExcelPort[Import][DataType]\"]';

jq(dependable).each(function() {
  jq(this).change(function() {
    jq('*[data-depends-on]').each(function() {
      if (jq(jq(this).attr('data-depends-on')).is(':checked') || jq(jq(this).attr('data-depends-on')).is(':selected')) {
        jq(this).slideDown(100);
      } else {
        jq(this).hide();
      }
    });
  });
  jq(this).trigger('change');
});

jq( \"#progress-dialog\" ).modal({
  backdrop : 'static',
  show : false
});

switch (location.protocol) {
  case 'https:': 
    site_url = '";
        // line 139
        echo (isset($context["https_server"]) ? $context["https_server"] : null);
        echo "';
    break;
  default:
    site_url = '";
        // line 142
        echo (isset($context["http_server"]) ? $context["http_server"] : null);
        echo "';
    break;
}

if (document.location.href.indexOf('com_mijoshop') != -1) site_url += '/components/com_mijoshop/opencart';

if (document.location.href.indexOf('com_opencart') != -1) site_url += '/components/com_opencart';

var selected_tab = function() {
  var tab_id = localStorage.getItem('excelport_tab');

  if (!tab_id) {
    tab_id = jq('.excelport_tab').first().attr('href');
    localStorage.setItem('excelport_tab', tab_id);
  }

  return tab_id;
}

jq('.excelport_tab').click(function() {
  localStorage.setItem('excelport_tab', jq(this).attr('href'));
});

jq('.excelport_tab[href=\"' + selected_tab() + '\"]').trigger('click');

jq(window).load(function() {

  var downloaded = false;
  var importing = false;
  var ajaxgenerate = ";
        // line 171
        echo (isset($context["ajaxgenerate"]) ? $context["ajaxgenerate"] : null);
        echo ";
  var ajaximport = ";
        // line 172
        echo (isset($context["ajaximport"]) ? $context["ajaximport"] : null);
        echo ";
  var token = '';
  var vars = window.location.search.split('&');
  var progressText = ['', ''];
  var progressRegime = ajaxgenerate ? 'Export' : 'Import';
  
  var conditions = ";
        // line 178
        echo (isset($context["conditions"]) ? $context["conditions"] : null);
        echo ";
  var operations = ";
        // line 179
        echo (isset($context["operations"]) ? $context["operations"] : null);
        echo ";
  var enabled_conditions = ";
        // line 180
        echo (isset($context["enabled_conditions"]) ? $context["enabled_conditions"] : null);
        echo ";
  
  var conditionsIndexes = {};
  for (var i in conditions) {
    conditionsIndexes[i] = 0;
  }

  if (jq('input[name=\"ExcelPort[' + progressRegime + '][DataType]\"]:checked').val() == 'Products') {
    progressText = [
      '";
        // line 189
        echo (isset($context["text_datatype_option_products"]) ? $context["text_datatype_option_products"] : null);
        echo "',
      '";
        // line 190
        echo (isset($context["text_datatype_option_products_lowercase"]) ? $context["text_datatype_option_products_lowercase"] : null);
        echo "'
    ];  
  } else if (jq('input[name=\"ExcelPort[' + progressRegime + '][DataType]\"]:checked').val() == 'Categories') {
    progressText = [
      '";
        // line 194
        echo (isset($context["text_datatype_option_categories"]) ? $context["text_datatype_option_categories"] : null);
        echo "',
      '";
        // line 195
        echo (isset($context["text_datatype_option_categories_lowercase"]) ? $context["text_datatype_option_categories_lowercase"] : null);
        echo "'
    ];    
  } else if (jq('input[name=\"ExcelPort[' + progressRegime + '][DataType]\"]:checked').val() == 'Options') {
    progressText = [
      '";
        // line 199
        echo (isset($context["text_datatype_option_options"]) ? $context["text_datatype_option_options"] : null);
        echo "',
      '";
        // line 200
        echo (isset($context["text_datatype_option_options_lowercase"]) ? $context["text_datatype_option_options_lowercase"] : null);
        echo "',
    ];    
  } else if (jq('input[name=\"ExcelPort[' + progressRegime + '][DataType]\"]:checked').val() == 'Attributes') {
    progressText = [
      '";
        // line 204
        echo (isset($context["text_datatype_option_attributes"]) ? $context["text_datatype_option_attributes"] : null);
        echo "',
      '";
        // line 205
        echo (isset($context["text_datatype_option_attributes_lowercase"]) ? $context["text_datatype_option_attributes_lowercase"] : null);
        echo "'
    ];    
  } else if (jq('input[name=\"ExcelPort[' + progressRegime + '][DataType]\"]:checked').val() == 'Customers') {
    progressText = [
      '";
        // line 209
        echo (isset($context["text_datatype_option_customers"]) ? $context["text_datatype_option_customers"] : null);
        echo "',
      '";
        // line 210
        echo (isset($context["text_datatype_option_customers_lowercase"]) ? $context["text_datatype_option_customers_lowercase"] : null);
        echo "'
    ];    
  } else if (jq('input[name=\"ExcelPort[' + progressRegime + '][DataType]\"]:checked').val() == 'CustomerGroups') {
    progressText = [
      '";
        // line 214
        echo (isset($context["text_datatype_option_customer_groups"]) ? $context["text_datatype_option_customer_groups"] : null);
        echo "',
      '";
        // line 215
        echo (isset($context["text_datatype_option_customer_groups_lowercase"]) ? $context["text_datatype_option_customer_groups_lowercase"] : null);
        echo "'
    ];    
  } else if (jq('input[name=\"ExcelPort[' + progressRegime + '][DataType]\"]:checked').val() == 'Options') {
    progressText = [
            '";
        // line 219
        echo (isset($context["text_datatype_option_options"]) ? $context["text_datatype_option_options"] : null);
        echo "',
      '";
        // line 220
        echo (isset($context["text_datatype_option_options_lowercase"]) ? $context["text_datatype_option_options_lowercase"] : null);
        echo "'
        ];      
    } else if (jq('input[name=\"ExcelPort[' + progressRegime + '][DataType]\"]:checked').val() == 'Manufacturers') {
    progressText = [
            '";
        // line 224
        echo (isset($context["text_datatype_option_manufacturers"]) ? $context["text_datatype_option_manufacturers"] : null);
        echo "',
      '";
        // line 225
        echo (isset($context["text_datatype_option_manufacturers_lowercase"]) ? $context["text_datatype_option_manufacturers_lowercase"] : null);
        echo "'
        ];      
    } else if (jq('input[name=\"ExcelPort[' + progressRegime + '][DataType]\"]:checked').val() == 'Coupons') {
    progressText = [
            '";
        // line 229
        echo (isset($context["text_datatype_option_coupons"]) ? $context["text_datatype_option_coupons"] : null);
        echo "',
      '";
        // line 230
        echo (isset($context["text_datatype_option_coupons_lowercase"]) ? $context["text_datatype_option_coupons_lowercase"] : null);
        echo "'
        ];      
    } else if (jq('input[name=\"ExcelPort[' + progressRegime + '][DataType]\"]:checked').val() == 'Vouchers') {
    progressText = [
            '";
        // line 234
        echo (isset($context["text_datatype_option_vouchers"]) ? $context["text_datatype_option_vouchers"] : null);
        echo "',
      '";
        // line 235
        echo (isset($context["text_datatype_option_vouchers_lowercase"]) ? $context["text_datatype_option_vouchers_lowercase"] : null);
        echo "'
        ];      
    }

  for (var i = 0; i < vars.length; i++) {
    var parts = vars[i].split('=');
    if (parts[0] == 'user_token') token = parts[1];  
  }
  var timer = null;
  var seconds;
  
  var zeroPad = function (num, places) {
    var zero = places - num.toString().length + 1;
    return Array(+(zero > 0 && zero)).join(\"0\") + num;
  }
  
    var basename = function(path) {
        return path.replace(/^.*\\/(.*?)\$/g, '\$1');
    }

    var setLastImport = function(text) {
        jq('#last_import').hide();

        if (typeof text == 'undefined') {
            text = jq('#last_import').attr('data-text');
        }

        text = basename(text);

        if (text != '') {
            var value = jq('#last_import').attr('data-template').replace('{FILE}', text);
            jq('#last_import').html(value);
            jq('#last_import_input').val(text);
            jq('#last_import').show();
        }
    }

    setLastImport();

  var progress = function(message, isError) {
    if (isError !== false) {
      jq('#progressbar .progress-bar').attr('aria-valuenow', message.percent);
      jq('#progressbar .progress-bar').css('width', message.percent + '%');
      if ((message.current === message.all && !importing && typeof(message.populateAll) == 'undefined') || message.finishedImport) {
        jq('.finishActionButton').html('Finish');
        jq('.finishActionButton').removeAttr('disabled');
        clearInterval(timer);
        clearTimeout(updateTimeout);
        loopXHR.abort();
        if (!downloaded) {
          jq('#progressinfo').html('";
        // line 285
        echo (isset($context["text_file_downloading"]) ? $context["text_file_downloading"] : null);
        echo "');

          setTimeout(function() {
            document.location.href = \"index.php?user_token=\" + token + \"&route=extension/module/excelport/download\";
          }, 2000);

          downloaded = true;
        }
        if (importing) {
          jq('#progressinfo').html('";
        // line 294
        echo (isset($context["text_import_done"]) ? $context["text_import_done"] : null);
        echo "'.replace('{COUNT}', message.current).replace('{TYPE}', progressText[1]));
          setLastImport(message.importingFile);
        }
      } else if (importing) {
        if (message.current > 0) {
          var pps = Math.round((message.current)/seconds);
          jq('#progressinfo').html('Importing. Please wait...<br />Reading from: ' + message.importingFile + '<br />' + progressText[0] + ' per second: ' + pps + \"<br />Imported: \" + message.current);
          setLastImport(message.importingFile);
        } else {
          jq('#progressbar .progress-bar').attr('aria-valuenow', '100');
          jq('#progressbar .progress-bar').css('width', '100%');
          jq('#progressinfo').html('";
        // line 305
        echo (isset($context["text_preparing_data"]) ? $context["text_preparing_data"] : null);
        echo "');  
        }
      } else {
        if (message.current > 0) {
          if (message.percent != 100) {
            var pps = message.current/seconds;
            var allSecondsRemaining = Math.round((message.all - message.current)/pps);
            var hoursRemaining =  zeroPad(Math.floor(allSecondsRemaining/3600), 2);
            var minutesRemaining = zeroPad(Math.floor((allSecondsRemaining%3600)/60), 2);
            var secondsRemaining = zeroPad(Math.floor((allSecondsRemaining%60)), 2);
            jq('#progressinfo').html(\"Progress: \" + message.percent + \"%<br />\" + message.current + \" \" + progressText[1] + \" were \" + (importing ? \"imported\" : \"exported\") + \"...<br />\" + Math.ceil(pps) + \" \" + progressText[1] + \" per second<br />\" + \"Estimated time left: \" + hoursRemaining + ':' + minutesRemaining + ':' + secondsRemaining);
          } else {
            jq('#progressinfo').html('";
        // line 317
        echo (isset($context["text_file_generating"]) ? $context["text_file_generating"] : null);
        echo "'); 
          }
        } else {
          jq('#progressinfo').html('";
        // line 320
        echo (isset($context["text_preparing_data"]) ? $context["text_preparing_data"] : null);
        echo "');    
        }
      }
    } else {
      jq('.finishActionButton').html('Finish');
      jq('.finishActionButton').removeAttr('disabled');
      jq('#progressbar .progress-bar').css('width', '0%');
      jq('#progressbar .progress-bar').attr('aria-valuenow', '0');
      jq('#progressinfo').html(message);
      clearInterval(timer);
      clearTimeout(updateTimeout);
    }
  }
  
  var countSeconds = function() {
    seconds++;
  }
  
  var updateProgressBar = function(site_root, countinueChecking, callback) {
    countinueChecking = typeof countinueChecking == 'undefined' ? true : countinueChecking;
    if (abort) return;
    loopXHR = jq.ajax({
      url: site_root+'/";
        // line 342
        echo (isset($context["temp_dir"]) ? $context["temp_dir"] : null);
        echo "/";
        echo (isset($context["progress_name"]) ? $context["progress_name"] : null);
        echo "',
      type: 'GET',
      timeout: null,
      dataType: 'json',
      cache: false,
      success: function(returnData, textStatus, jqXHR) {
        if (jq( \"#progress-dialog\" ).is(':visible')) {
          if (returnData != null && returnData.error == false) {
            if (lastMemory == returnData.memory_get_usage && unidentifiedError) {
              var megabytes = Math.round(parseInt(returnData.memory_get_usage)/1048576);
              var errorMessage = 'Error: The server may be out of memory. Currently, the script is using ' + megabytes + ' MB';
              progress(errorMessage, false);
              return;
            } else {
              lastMemory = returnData.memory_get_usage;
            }
            progress(returnData, true);
            
            if (!importing) document.title = returnData.percent + '% ' + pageTitle;
            
            if ((returnData != null && returnData.current !== returnData.all && !importing) || (!returnData.finishedImport && importing)) {
              if (!countinueChecking) {
                return;
              }
              
              updateTimeout = setTimeout(function (){
                
                updateProgressBar(site_root);
              }, 1000);
            }
          } else {
            if (returnData != null) {
              progress(returnData.message, false);
              if (!countinueChecking || (returnData.current == returnData.all && !importing)) {
                return;
              }
              
              updateTimeout = setTimeout(function (){
                
                updateProgressBar(site_root);
              }, 1000); 
            } else {
              if (!countinueChecking) {
                return;
              }
              
              updateTimeout = setTimeout(function (){
                
                updateProgressBar(site_root);
              }, 1000);
            }
          }
        } else {
          
          clearTimeout(updateTimeout);
        }
      },
      error: function() {
        if (!countinueChecking) {
          
          return;
        }
        
        updateTimeout = setTimeout(function (){
          
          updateProgressBar(site_root);
        }, 1000);
      }
    });

    if (typeof callback != 'undefined') {
      callback();
    }
  }
  
  var startAjaxGenerate = function(path, data) {
    downloaded = false;
    importing = false;
    unidentifiedError = false;
    if (abort) return;
    if (!jq( \"#progress-dialog\" ).is(\":visible\")) {
      jq( \"#progress-dialog\" ).modal( \"show\" );
      jq('.loadingImage').show(); 
      jq('.finishActionButton').show();
    }
    if (timer == null) {
      seconds = 1;
      timer = setInterval(countSeconds, 1000);
    }
    
    xhr = jq.ajax({
      url: path,
      data: data,
      async: true,
      type: 'POST',
      timeout: null,
      dataType: 'json',
      cache: false,
      statusCode: {
        500: function(){
          progress('Server error 500 has occured.', false);
        }
      },
      success: function(successData) {
        if (successData == null) {
          unidentifiedError = true;
        } else {
          if (successData.current < successData.all && successData.done) {
            startAjaxGenerate(path, data);  
          }
        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        clearTimeout(updateTimeout);
        error = true;
        
        if (textStatus == 'timeout') {
          progress('A server timeout has occured.', false);
        } else if (textStatus == 'error') {
          console.log('A server error has occured.'); 
        } else if (textStatus == 'parsererror') {
          progress(jqXHR.responseText.replace(\"<br />\", ''), false);
        }
      }
    });
  }
  
  var startAjaxImport = function(path, data) {
    importing = true;
    downloaded = true;
    unidentifiedError = false;
    if (abort) return;
    if (!jq( \"#progress-dialog\" ).is(':visible')) {
      jq( \"#progress-dialog\" ).modal( \"show\" );
      jq('.loadingImage').show(); 
      jq('.finishActionButton').show();
    }
    if (timer == null) {
      seconds = 1;
      timer = setInterval(countSeconds, 1000);
    }
    
    xhr = jq.ajax({
      url: path,
      data: data,
      async: true,
      type: 'POST',
      timeout: null,
      dataType: 'json',
      cache: false,
      statusCode: {
        500: function(){
          progress('Server error 500 has occured.', false);
        }
      },
      success: function(successData) {
        if (successData == null) {
          unidentifiedError = true;
        } else {
          if (successData.error) {
            progress(successData.message, false);
          } else {
            if (successData.done && !successData.finishedImport) {
              startAjaxImport(path, data);  
            }
          }
        }
      },
      error: function(jqXHR, textStatus, errorThrown) {
        clearTimeout(updateTimeout);
        error = true;
        
        if (textStatus == 'timeout') {
          progress('A server timeout has occured.', false);
        } else if (textStatus == 'error') {
          console.log('A server error has occured.'); 
        } else if (textStatus == 'parsererror') {
          progress(jqXHR.responseText.replace(\"<br />\", ''), false);
        }
      }
    });
  }
  
  var triggerFiltersDisplay = function() {
    var checked = jq('input[name=\"ExcelPort[Export][DataType]\"]:checked').val();
    
    if (jq('#toggle_filter').val() == '1') {
      jq('.dataTypeFilter').each(function(index, element) {
        if (jq(element).attr('data-type') == checked) jq(element).slideDown();
        else jq(element).slideUp();
      });
    } else {
      jq('.dataTypeFilter').slideUp();
    }
  }
  
  var getOperations = function(category, operation, index) {
    var html = '<select name=\"ExcelPort[Export][Filters][' + category + '][' + index + '][Condition]\">';
    
    for (var i in operations) {
      html  += '<option value=\"' + i + '\"' + ((typeof(operation) != 'undefined' && operation == i) ? ' selected=\"selected\"' : '') + '>' + operations[i].html + '</option>';
    }
    
    html    += '</select>';
    
    return html;
  }
  
  var refreshOperation = function(field, type, predefine) {
    jq(field).find('option').attr('disabled', 'disabled');
    if (typeof(type) != 'undefined') {
      jq(field).closest('.hideable').show();
      
      if (type == 'text') jq(field).find('option[value^=\"text_\"]').removeAttr('disabled');
      else if (type=='number') jq(field).find('option[value^=\"number_\"]').removeAttr('disabled');
      else jq(field).find('option').removeAttr('disabled');
      
      if (predefine) {
        jq(field).find('option').removeAttr('selected');
        jq(field).find('option[disabled!=\"disabled\"]:first').attr('selected', 'selected');
      }
    }

    if (jq(field).find('option[selected][disabled!=\"disabled\"]').length == 0) {
        jq(field).find('option[disabled!=\"disabled\"]:first').attr('selected', 'selected');
    }
  }
  
  var getFields = function(category, field_name, index) {
    var html = '<select name=\"ExcelPort[Export][Filters][' + category + '][' + index + '][Field]\">';
    for (var i in conditions[category]) {
      html += '<option value=\"' + i + '\"' + ((typeof(field_name) != 'undefined' && i == field_name) ? ' selected=\"selected\"' : '') + '>' + conditions[category][i].label + '</option>';
    }
    html    += '</select>';
    
    return html;
  }
  
  var addCondition = function(category, field_name, operation, value) {
    if (typeof(category) != 'undefined') {
      html  = '<tr>';
      html += ' <td>' + getFields(category, field_name, conditionsIndexes[category]) + '';
      
      html += ' <span class=\"hideable\">' + getOperations(category, operation, conditionsIndexes[category]) +'';
      html += ' ";
        // line 586
        echo (isset($context["text_the_value"]) ? $context["text_the_value"] : null);
        echo " <input type=\"text\"' + ((typeof(value) != 'undefined') ? ' value=\"' + value + '\"' : '') + ' name=\"ExcelPort[Export][Filters][' + category + '][' + conditionsIndexes[category] + '][Value]\" /></span></td>';
      html += ' <td class=\"right\"><a class=\"btn btn-danger discardCondition\"><i class=\"icon-trash icon-white\"></i> ";
        // line 587
        echo (isset($context["button_discard_condition"]) ? $context["button_discard_condition"] : null);
        echo "</a></td>';
      html += '</tr>';
      
      jq('.dataTypeFilter[data-type=\"' + category + '\"] table tbody').append(html);
      if (typeof(field_name) != 'undefined') {
        if (typeof(conditions[category][field_name]) != 'undefined') {
        refreshOperation('select[name=\"ExcelPort[Export][Filters][' + category + '][' + conditionsIndexes[category] + '][Condition]\"]', conditions[category][field_name].type, false);
        }
      } else {
        for (var j in conditions[category]) { refreshOperation('select[name=\"ExcelPort[Export][' + category + '][' + conditionsIndexes[category] + '][Condition]\"]', conditions[category][j].type, true); break; }
      }
      jq('select[name=\"ExcelPort[Export][Filters][' + category + '][' + conditionsIndexes[category] + '][Field]\"]').change({index: conditionsIndexes[category]}, function(e, data) {
        refreshOperation('select[name=\"ExcelPort[Export][Filters][' + category + '][' + e.data.index + '][Condition]\"]', conditions[category][jq(this).val()].type, false);
      }).trigger('change');
      
      jq('.discardCondition').unbind('click').click(function() {
        jq(this).closest('tr').remove();
      });
      
      conditionsIndexes[category]++;
    }
  }
  
  for (var i in enabled_conditions) {
    var added = false;
    for (var j in enabled_conditions[i]) {
      if (typeof(enabled_conditions[i][j].Field) != 'undefined') {
        addCondition(i, enabled_conditions[i][j].Field, enabled_conditions[i][j].Condition, enabled_conditions[i][j].Value);
        added = true;
      }
    }
    if (!added) addCondition(i);
  }
  
  if (ajaxgenerate) {
    jq('#generateLoading').show();

    var exportData = {
      ExcelPort : {
        Export : {
          DataType : jq('input[name=\"ExcelPort[Export][DataType]\"]:checked').val(),
          Store : jq('input[name=\"ExcelPort[Export][Store]\"]:checked').val(),
          Language : jq('input[name=\"ExcelPort[Export][Language]\"]:checked').val(),
          ProductExportMode : jq('input[name=\"ExcelPort[Export][ProductExportMode]\"]:checked').val(),
          Filter : jq('input[name=\"ExcelPort[Export][Filter]\"]').val(),
          Filters : {}
        },
        LastImport : jq('#last_import_input').val(),
        Settings : {
          ExportLimit : jq('input[name=\"ExcelPort[Settings][ExportLimit]\"]').val(),
          DescriptionEncoding : jq('select[name=\"ExcelPort[Settings][DescriptionEncoding]\"]').val()
        }
      }
    };
    
    jq('*[name^=\"ExcelPort[Export][Filters]\"]').each(function (index, element) {
      var regex = /ExcelPort\\[Export\\]\\[Filters\\]\\[(.*?)\\]\\[(.*?)\\]\\[(.*?)\\]/gi;
      match = regex.exec(jq(element).attr('name'));
      if (match == null) {
        regex = /ExcelPort\\[Export\\]\\[Filters\\]\\[(.*?)\\]\\[(.*?)\\]/gi;
        match = regex.exec(jq(element).attr('name'));
        if (typeof(exportData.ExcelPort.Export.Filters[match[1]]) == 'undefined') exportData.ExcelPort.Export.Filters[match[1]] = {};
        exportData.ExcelPort.Export.Filters[match[1]][match[2]] = jq(element).val();
      } else {
        if (typeof(exportData.ExcelPort.Export.Filters[match[1]]) == 'undefined') exportData.ExcelPort.Export.Filters[match[1]] = {};
        if (typeof(exportData.ExcelPort.Export.Filters[match[1]][match[2]]) == 'undefined') exportData.ExcelPort.Export.Filters[match[1]][match[2]] = {};
        exportData.ExcelPort.Export.Filters[match[1]][match[2]][match[3]] = jq(element).val();
      }
    });

    updateProgressBar(site_url, true, function() {
      startAjaxGenerate('index.php?user_token='+token+'&route=extension/module/excelport/ajaxgenerate&_=' + (new Date()).getTime(), exportData);
    });
  }
  
  if (ajaximport) {
    jq('#generateLoading').show();
    updateProgressBar(site_url);
    startAjaxImport('index.php?user_token='+token+'&route=extension/module/excelport/ajaximport&_=' + Date.now(), {
      ExcelPort : {
        Import : {
          DataType : jq('input[name=\"ExcelPort[Import][DataType]\"]:checked').val(),
          Language : jq('input[name=\"ExcelPort[Import][Language]\"]:checked').val(),
          Delete : jq('input[name=\"ExcelPort[Import][Delete]\"]:checked').val(),
          AddAsNew : jq('input[name=\"ExcelPort[Import][AddAsNew]\"]:checked').val()
        },
        LastImport : jq('#last_import_input').val(),
        Settings : {
          ImportLimit : jq('input[name=\"ExcelPort[Settings][ImportLimit]\"]').val()
        }
      }
    });
  }

  jq('.needMoreSize').click(function() {
    window.open(site_url + '/system/library/vendor/isenselabs/excelport/excelport/help_increase_size.php', '_blank', 'location=no,width=830,height=580,resizable=no');
  });

  jq('.ExcelPortSubmitButton').click(function(e) {
    abort = false;
    var action = jq(this).attr('data-action');
    if (action == 'import' && jq('#checkboxDelete').is(':checked')) {
      if (!confirm('";
        // line 689
        echo (isset($context["text_confirm_delete_other"]) ? $context["text_confirm_delete_other"] : null);
        echo "')) return;  
    }
    jq('#form').attr('action',jq('#form').attr('action').replace(/&submitAction=.*(\$|&)/g, ''));
    if (action != undefined && action != '') {
      jq('#form').attr('action',jq('#form').attr('action')+'&submitAction='+action);
    }
    jq('#form').submit();
  });

  jq('#filter_popover').popover({ trigger: 'hover' }).click(function() {
    jq(this).toggleClass('active');
    if (jq(this).hasClass('active')) {
      jq('#toggle_filter').val('1');
    } else {
      jq('#toggle_filter').val('0');
    }
    triggerFiltersDisplay();
  });
  
  jq('input[name=\"ExcelPort[Export][DataType]\"]').change(triggerFiltersDisplay);
  triggerFiltersDisplay();
  
  jq('.addCondition').click(function() {
    addCondition(jq(this).closest('.dataTypeFilter').attr('data-type'));
  });
  
  jq('a[data-toggle=\"tooltip\"]').tooltip({placement:'right'});

});

</script>

";
        // line 721
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/excelport.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  950 => 721,  915 => 689,  810 => 587,  806 => 586,  557 => 342,  532 => 320,  526 => 317,  511 => 305,  497 => 294,  485 => 285,  432 => 235,  428 => 234,  421 => 230,  417 => 229,  410 => 225,  406 => 224,  399 => 220,  395 => 219,  388 => 215,  384 => 214,  377 => 210,  373 => 209,  366 => 205,  362 => 204,  355 => 200,  351 => 199,  344 => 195,  340 => 194,  333 => 190,  329 => 189,  317 => 180,  313 => 179,  309 => 178,  300 => 172,  296 => 171,  264 => 142,  258 => 139,  164 => 47,  147 => 44,  142 => 43,  125 => 42,  120 => 39,  109 => 37,  105 => 36,  100 => 33,  92 => 29,  89 => 28,  81 => 24,  78 => 23,  70 => 19,  68 => 18,  62 => 14,  51 => 12,  47 => 11,  42 => 9,  36 => 8,  32 => 7,  25 => 3,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <form action="{{ action }}" method="post" enctype="multipart/form-data" id="form">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/*         <button type="submit" form="form" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary save-changes"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title_version }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_excelport_licensed_on %}*/
/*       <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_excelport_licensed_on }}*/
/*         <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success_message %}*/
/*     <div class="alert alert-success"><i class="fa fa-exclamation-circle"></i> {{ success_message }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-body">*/
/*         <ul class="nav nav-tabs">*/
/*           {% for tab in tabs %}*/
/*           <li><a class="excelport_tab" href="#tab-{{ tab.id }}" data-toggle="tab">{{ tab.name }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*         */
/*           <div class="tab-content">*/
/*           {% for tab in tabs %}*/
/*             <div class="tab-pane" id="tab-{{ tab.id }}">*/
/*               {{ include(tab.file) }}*/
/*             </div>*/
/*           {% endfor %}*/
/*           </div>*/
/*         */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   </form>*/
/* </div>*/
/* */
/* <div id="progress-dialog" class="modal" data-backdrop="static" style="display: none;">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content padding20">*/
/*       <div id="progressbar">*/
/*         <div class="progress">*/
/*           <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       <div id="progressinfo"></div>*/
/*       <button class="btn btn-default finishActionButton" style="display: none;">Abort</button>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/* */
/* var jq = jQuery; // Intended for MijoShop*/
/* */
/* jq('li[id^="toolbar-popup"]').remove();*/
/* */
/* var xhr;*/
/* var loopXHR;*/
/* var pageTitle = jq('title').html();*/
/* var abort = false;*/
/* var sending = false;*/
/* var updateTimeout = null;*/
/* var loopXHR = null;*/
/* var site_url = null;*/
/* var lastMemory = 0;*/
/* var unidentifiedError = false;*/
/* */
/* var closeDialog = function() {*/
/*   jq("#progress-dialog").modal("hide");*/
/*   jq('#progressinfo').empty();*/
/*   jq('#progressbar .progress-bar').attr('aria-valuenow', '0');*/
/*   jq('#progressbar .progress-bar').css('width', '0%');*/
/*   jq('.finishActionButton').hide();*/
/* }*/
/* */
/* jq('.finishActionButton').click(function() {*/
/*   abort = true;*/
/*   loopXHR.abort();*/
/*   clearTimeout(updateTimeout);*/
/*   jq(this).html('<img src="./view/image/excelport/ajax-loader.gif" class="loadingImage2"/>');*/
/*   jq(this).attr('disabled', 'disabled');*/
/*   jq('#progressinfo').html('Aborting... Please wait...');*/
/*   jq('title').html(pageTitle);*/
/*   if (!sending) closeDialog();*/
/* });*/
/* */
/* jq(document).ajaxSend(function() {*/
/*   sending = true; */
/* });*/
/* */
/* jq(document).ajaxStop(function() {*/
/*   sending = false;*/
/*   if (abort) {*/
/*     closeDialog();*/
/*   }*/
/* });*/
/* */
/* var dependable = 'input[name="ExcelPort[Export][DataType]"], input[name="ExcelPort[Import][DataType]"]';*/
/* */
/* jq(dependable).each(function() {*/
/*   jq(this).change(function() {*/
/*     jq('*[data-depends-on]').each(function() {*/
/*       if (jq(jq(this).attr('data-depends-on')).is(':checked') || jq(jq(this).attr('data-depends-on')).is(':selected')) {*/
/*         jq(this).slideDown(100);*/
/*       } else {*/
/*         jq(this).hide();*/
/*       }*/
/*     });*/
/*   });*/
/*   jq(this).trigger('change');*/
/* });*/
/* */
/* jq( "#progress-dialog" ).modal({*/
/*   backdrop : 'static',*/
/*   show : false*/
/* });*/
/* */
/* switch (location.protocol) {*/
/*   case 'https:': */
/*     site_url = '{{ https_server }}';*/
/*     break;*/
/*   default:*/
/*     site_url = '{{ http_server }}';*/
/*     break;*/
/* }*/
/* */
/* if (document.location.href.indexOf('com_mijoshop') != -1) site_url += '/components/com_mijoshop/opencart';*/
/* */
/* if (document.location.href.indexOf('com_opencart') != -1) site_url += '/components/com_opencart';*/
/* */
/* var selected_tab = function() {*/
/*   var tab_id = localStorage.getItem('excelport_tab');*/
/* */
/*   if (!tab_id) {*/
/*     tab_id = jq('.excelport_tab').first().attr('href');*/
/*     localStorage.setItem('excelport_tab', tab_id);*/
/*   }*/
/* */
/*   return tab_id;*/
/* }*/
/* */
/* jq('.excelport_tab').click(function() {*/
/*   localStorage.setItem('excelport_tab', jq(this).attr('href'));*/
/* });*/
/* */
/* jq('.excelport_tab[href="' + selected_tab() + '"]').trigger('click');*/
/* */
/* jq(window).load(function() {*/
/* */
/*   var downloaded = false;*/
/*   var importing = false;*/
/*   var ajaxgenerate = {{ ajaxgenerate }};*/
/*   var ajaximport = {{ ajaximport }};*/
/*   var token = '';*/
/*   var vars = window.location.search.split('&');*/
/*   var progressText = ['', ''];*/
/*   var progressRegime = ajaxgenerate ? 'Export' : 'Import';*/
/*   */
/*   var conditions = {{ conditions }};*/
/*   var operations = {{ operations }};*/
/*   var enabled_conditions = {{ enabled_conditions }};*/
/*   */
/*   var conditionsIndexes = {};*/
/*   for (var i in conditions) {*/
/*     conditionsIndexes[i] = 0;*/
/*   }*/
/* */
/*   if (jq('input[name="ExcelPort[' + progressRegime + '][DataType]"]:checked').val() == 'Products') {*/
/*     progressText = [*/
/*       '{{ text_datatype_option_products }}',*/
/*       '{{ text_datatype_option_products_lowercase }}'*/
/*     ];  */
/*   } else if (jq('input[name="ExcelPort[' + progressRegime + '][DataType]"]:checked').val() == 'Categories') {*/
/*     progressText = [*/
/*       '{{ text_datatype_option_categories }}',*/
/*       '{{ text_datatype_option_categories_lowercase }}'*/
/*     ];    */
/*   } else if (jq('input[name="ExcelPort[' + progressRegime + '][DataType]"]:checked').val() == 'Options') {*/
/*     progressText = [*/
/*       '{{ text_datatype_option_options }}',*/
/*       '{{ text_datatype_option_options_lowercase }}',*/
/*     ];    */
/*   } else if (jq('input[name="ExcelPort[' + progressRegime + '][DataType]"]:checked').val() == 'Attributes') {*/
/*     progressText = [*/
/*       '{{ text_datatype_option_attributes }}',*/
/*       '{{ text_datatype_option_attributes_lowercase }}'*/
/*     ];    */
/*   } else if (jq('input[name="ExcelPort[' + progressRegime + '][DataType]"]:checked').val() == 'Customers') {*/
/*     progressText = [*/
/*       '{{ text_datatype_option_customers }}',*/
/*       '{{ text_datatype_option_customers_lowercase }}'*/
/*     ];    */
/*   } else if (jq('input[name="ExcelPort[' + progressRegime + '][DataType]"]:checked').val() == 'CustomerGroups') {*/
/*     progressText = [*/
/*       '{{ text_datatype_option_customer_groups }}',*/
/*       '{{ text_datatype_option_customer_groups_lowercase }}'*/
/*     ];    */
/*   } else if (jq('input[name="ExcelPort[' + progressRegime + '][DataType]"]:checked').val() == 'Options') {*/
/*     progressText = [*/
/*             '{{ text_datatype_option_options }}',*/
/*       '{{ text_datatype_option_options_lowercase }}'*/
/*         ];      */
/*     } else if (jq('input[name="ExcelPort[' + progressRegime + '][DataType]"]:checked').val() == 'Manufacturers') {*/
/*     progressText = [*/
/*             '{{ text_datatype_option_manufacturers }}',*/
/*       '{{ text_datatype_option_manufacturers_lowercase }}'*/
/*         ];      */
/*     } else if (jq('input[name="ExcelPort[' + progressRegime + '][DataType]"]:checked').val() == 'Coupons') {*/
/*     progressText = [*/
/*             '{{ text_datatype_option_coupons }}',*/
/*       '{{ text_datatype_option_coupons_lowercase }}'*/
/*         ];      */
/*     } else if (jq('input[name="ExcelPort[' + progressRegime + '][DataType]"]:checked').val() == 'Vouchers') {*/
/*     progressText = [*/
/*             '{{ text_datatype_option_vouchers }}',*/
/*       '{{ text_datatype_option_vouchers_lowercase }}'*/
/*         ];      */
/*     }*/
/* */
/*   for (var i = 0; i < vars.length; i++) {*/
/*     var parts = vars[i].split('=');*/
/*     if (parts[0] == 'user_token') token = parts[1];  */
/*   }*/
/*   var timer = null;*/
/*   var seconds;*/
/*   */
/*   var zeroPad = function (num, places) {*/
/*     var zero = places - num.toString().length + 1;*/
/*     return Array(+(zero > 0 && zero)).join("0") + num;*/
/*   }*/
/*   */
/*     var basename = function(path) {*/
/*         return path.replace(/^.*\/(.*?)$/g, '$1');*/
/*     }*/
/* */
/*     var setLastImport = function(text) {*/
/*         jq('#last_import').hide();*/
/* */
/*         if (typeof text == 'undefined') {*/
/*             text = jq('#last_import').attr('data-text');*/
/*         }*/
/* */
/*         text = basename(text);*/
/* */
/*         if (text != '') {*/
/*             var value = jq('#last_import').attr('data-template').replace('{FILE}', text);*/
/*             jq('#last_import').html(value);*/
/*             jq('#last_import_input').val(text);*/
/*             jq('#last_import').show();*/
/*         }*/
/*     }*/
/* */
/*     setLastImport();*/
/* */
/*   var progress = function(message, isError) {*/
/*     if (isError !== false) {*/
/*       jq('#progressbar .progress-bar').attr('aria-valuenow', message.percent);*/
/*       jq('#progressbar .progress-bar').css('width', message.percent + '%');*/
/*       if ((message.current === message.all && !importing && typeof(message.populateAll) == 'undefined') || message.finishedImport) {*/
/*         jq('.finishActionButton').html('Finish');*/
/*         jq('.finishActionButton').removeAttr('disabled');*/
/*         clearInterval(timer);*/
/*         clearTimeout(updateTimeout);*/
/*         loopXHR.abort();*/
/*         if (!downloaded) {*/
/*           jq('#progressinfo').html('{{ text_file_downloading }}');*/
/* */
/*           setTimeout(function() {*/
/*             document.location.href = "index.php?user_token=" + token + "&route=extension/module/excelport/download";*/
/*           }, 2000);*/
/* */
/*           downloaded = true;*/
/*         }*/
/*         if (importing) {*/
/*           jq('#progressinfo').html('{{ text_import_done }}'.replace('{COUNT}', message.current).replace('{TYPE}', progressText[1]));*/
/*           setLastImport(message.importingFile);*/
/*         }*/
/*       } else if (importing) {*/
/*         if (message.current > 0) {*/
/*           var pps = Math.round((message.current)/seconds);*/
/*           jq('#progressinfo').html('Importing. Please wait...<br />Reading from: ' + message.importingFile + '<br />' + progressText[0] + ' per second: ' + pps + "<br />Imported: " + message.current);*/
/*           setLastImport(message.importingFile);*/
/*         } else {*/
/*           jq('#progressbar .progress-bar').attr('aria-valuenow', '100');*/
/*           jq('#progressbar .progress-bar').css('width', '100%');*/
/*           jq('#progressinfo').html('{{ text_preparing_data }}');  */
/*         }*/
/*       } else {*/
/*         if (message.current > 0) {*/
/*           if (message.percent != 100) {*/
/*             var pps = message.current/seconds;*/
/*             var allSecondsRemaining = Math.round((message.all - message.current)/pps);*/
/*             var hoursRemaining =  zeroPad(Math.floor(allSecondsRemaining/3600), 2);*/
/*             var minutesRemaining = zeroPad(Math.floor((allSecondsRemaining%3600)/60), 2);*/
/*             var secondsRemaining = zeroPad(Math.floor((allSecondsRemaining%60)), 2);*/
/*             jq('#progressinfo').html("Progress: " + message.percent + "%<br />" + message.current + " " + progressText[1] + " were " + (importing ? "imported" : "exported") + "...<br />" + Math.ceil(pps) + " " + progressText[1] + " per second<br />" + "Estimated time left: " + hoursRemaining + ':' + minutesRemaining + ':' + secondsRemaining);*/
/*           } else {*/
/*             jq('#progressinfo').html('{{ text_file_generating }}'); */
/*           }*/
/*         } else {*/
/*           jq('#progressinfo').html('{{ text_preparing_data }}');    */
/*         }*/
/*       }*/
/*     } else {*/
/*       jq('.finishActionButton').html('Finish');*/
/*       jq('.finishActionButton').removeAttr('disabled');*/
/*       jq('#progressbar .progress-bar').css('width', '0%');*/
/*       jq('#progressbar .progress-bar').attr('aria-valuenow', '0');*/
/*       jq('#progressinfo').html(message);*/
/*       clearInterval(timer);*/
/*       clearTimeout(updateTimeout);*/
/*     }*/
/*   }*/
/*   */
/*   var countSeconds = function() {*/
/*     seconds++;*/
/*   }*/
/*   */
/*   var updateProgressBar = function(site_root, countinueChecking, callback) {*/
/*     countinueChecking = typeof countinueChecking == 'undefined' ? true : countinueChecking;*/
/*     if (abort) return;*/
/*     loopXHR = jq.ajax({*/
/*       url: site_root+'/{{ temp_dir }}/{{ progress_name }}',*/
/*       type: 'GET',*/
/*       timeout: null,*/
/*       dataType: 'json',*/
/*       cache: false,*/
/*       success: function(returnData, textStatus, jqXHR) {*/
/*         if (jq( "#progress-dialog" ).is(':visible')) {*/
/*           if (returnData != null && returnData.error == false) {*/
/*             if (lastMemory == returnData.memory_get_usage && unidentifiedError) {*/
/*               var megabytes = Math.round(parseInt(returnData.memory_get_usage)/1048576);*/
/*               var errorMessage = 'Error: The server may be out of memory. Currently, the script is using ' + megabytes + ' MB';*/
/*               progress(errorMessage, false);*/
/*               return;*/
/*             } else {*/
/*               lastMemory = returnData.memory_get_usage;*/
/*             }*/
/*             progress(returnData, true);*/
/*             */
/*             if (!importing) document.title = returnData.percent + '% ' + pageTitle;*/
/*             */
/*             if ((returnData != null && returnData.current !== returnData.all && !importing) || (!returnData.finishedImport && importing)) {*/
/*               if (!countinueChecking) {*/
/*                 return;*/
/*               }*/
/*               */
/*               updateTimeout = setTimeout(function (){*/
/*                 */
/*                 updateProgressBar(site_root);*/
/*               }, 1000);*/
/*             }*/
/*           } else {*/
/*             if (returnData != null) {*/
/*               progress(returnData.message, false);*/
/*               if (!countinueChecking || (returnData.current == returnData.all && !importing)) {*/
/*                 return;*/
/*               }*/
/*               */
/*               updateTimeout = setTimeout(function (){*/
/*                 */
/*                 updateProgressBar(site_root);*/
/*               }, 1000); */
/*             } else {*/
/*               if (!countinueChecking) {*/
/*                 return;*/
/*               }*/
/*               */
/*               updateTimeout = setTimeout(function (){*/
/*                 */
/*                 updateProgressBar(site_root);*/
/*               }, 1000);*/
/*             }*/
/*           }*/
/*         } else {*/
/*           */
/*           clearTimeout(updateTimeout);*/
/*         }*/
/*       },*/
/*       error: function() {*/
/*         if (!countinueChecking) {*/
/*           */
/*           return;*/
/*         }*/
/*         */
/*         updateTimeout = setTimeout(function (){*/
/*           */
/*           updateProgressBar(site_root);*/
/*         }, 1000);*/
/*       }*/
/*     });*/
/* */
/*     if (typeof callback != 'undefined') {*/
/*       callback();*/
/*     }*/
/*   }*/
/*   */
/*   var startAjaxGenerate = function(path, data) {*/
/*     downloaded = false;*/
/*     importing = false;*/
/*     unidentifiedError = false;*/
/*     if (abort) return;*/
/*     if (!jq( "#progress-dialog" ).is(":visible")) {*/
/*       jq( "#progress-dialog" ).modal( "show" );*/
/*       jq('.loadingImage').show(); */
/*       jq('.finishActionButton').show();*/
/*     }*/
/*     if (timer == null) {*/
/*       seconds = 1;*/
/*       timer = setInterval(countSeconds, 1000);*/
/*     }*/
/*     */
/*     xhr = jq.ajax({*/
/*       url: path,*/
/*       data: data,*/
/*       async: true,*/
/*       type: 'POST',*/
/*       timeout: null,*/
/*       dataType: 'json',*/
/*       cache: false,*/
/*       statusCode: {*/
/*         500: function(){*/
/*           progress('Server error 500 has occured.', false);*/
/*         }*/
/*       },*/
/*       success: function(successData) {*/
/*         if (successData == null) {*/
/*           unidentifiedError = true;*/
/*         } else {*/
/*           if (successData.current < successData.all && successData.done) {*/
/*             startAjaxGenerate(path, data);  */
/*           }*/
/*         }*/
/*       },*/
/*       error: function(jqXHR, textStatus, errorThrown) {*/
/*         clearTimeout(updateTimeout);*/
/*         error = true;*/
/*         */
/*         if (textStatus == 'timeout') {*/
/*           progress('A server timeout has occured.', false);*/
/*         } else if (textStatus == 'error') {*/
/*           console.log('A server error has occured.'); */
/*         } else if (textStatus == 'parsererror') {*/
/*           progress(jqXHR.responseText.replace("<br />", ''), false);*/
/*         }*/
/*       }*/
/*     });*/
/*   }*/
/*   */
/*   var startAjaxImport = function(path, data) {*/
/*     importing = true;*/
/*     downloaded = true;*/
/*     unidentifiedError = false;*/
/*     if (abort) return;*/
/*     if (!jq( "#progress-dialog" ).is(':visible')) {*/
/*       jq( "#progress-dialog" ).modal( "show" );*/
/*       jq('.loadingImage').show(); */
/*       jq('.finishActionButton').show();*/
/*     }*/
/*     if (timer == null) {*/
/*       seconds = 1;*/
/*       timer = setInterval(countSeconds, 1000);*/
/*     }*/
/*     */
/*     xhr = jq.ajax({*/
/*       url: path,*/
/*       data: data,*/
/*       async: true,*/
/*       type: 'POST',*/
/*       timeout: null,*/
/*       dataType: 'json',*/
/*       cache: false,*/
/*       statusCode: {*/
/*         500: function(){*/
/*           progress('Server error 500 has occured.', false);*/
/*         }*/
/*       },*/
/*       success: function(successData) {*/
/*         if (successData == null) {*/
/*           unidentifiedError = true;*/
/*         } else {*/
/*           if (successData.error) {*/
/*             progress(successData.message, false);*/
/*           } else {*/
/*             if (successData.done && !successData.finishedImport) {*/
/*               startAjaxImport(path, data);  */
/*             }*/
/*           }*/
/*         }*/
/*       },*/
/*       error: function(jqXHR, textStatus, errorThrown) {*/
/*         clearTimeout(updateTimeout);*/
/*         error = true;*/
/*         */
/*         if (textStatus == 'timeout') {*/
/*           progress('A server timeout has occured.', false);*/
/*         } else if (textStatus == 'error') {*/
/*           console.log('A server error has occured.'); */
/*         } else if (textStatus == 'parsererror') {*/
/*           progress(jqXHR.responseText.replace("<br />", ''), false);*/
/*         }*/
/*       }*/
/*     });*/
/*   }*/
/*   */
/*   var triggerFiltersDisplay = function() {*/
/*     var checked = jq('input[name="ExcelPort[Export][DataType]"]:checked').val();*/
/*     */
/*     if (jq('#toggle_filter').val() == '1') {*/
/*       jq('.dataTypeFilter').each(function(index, element) {*/
/*         if (jq(element).attr('data-type') == checked) jq(element).slideDown();*/
/*         else jq(element).slideUp();*/
/*       });*/
/*     } else {*/
/*       jq('.dataTypeFilter').slideUp();*/
/*     }*/
/*   }*/
/*   */
/*   var getOperations = function(category, operation, index) {*/
/*     var html = '<select name="ExcelPort[Export][Filters][' + category + '][' + index + '][Condition]">';*/
/*     */
/*     for (var i in operations) {*/
/*       html  += '<option value="' + i + '"' + ((typeof(operation) != 'undefined' && operation == i) ? ' selected="selected"' : '') + '>' + operations[i].html + '</option>';*/
/*     }*/
/*     */
/*     html    += '</select>';*/
/*     */
/*     return html;*/
/*   }*/
/*   */
/*   var refreshOperation = function(field, type, predefine) {*/
/*     jq(field).find('option').attr('disabled', 'disabled');*/
/*     if (typeof(type) != 'undefined') {*/
/*       jq(field).closest('.hideable').show();*/
/*       */
/*       if (type == 'text') jq(field).find('option[value^="text_"]').removeAttr('disabled');*/
/*       else if (type=='number') jq(field).find('option[value^="number_"]').removeAttr('disabled');*/
/*       else jq(field).find('option').removeAttr('disabled');*/
/*       */
/*       if (predefine) {*/
/*         jq(field).find('option').removeAttr('selected');*/
/*         jq(field).find('option[disabled!="disabled"]:first').attr('selected', 'selected');*/
/*       }*/
/*     }*/
/* */
/*     if (jq(field).find('option[selected][disabled!="disabled"]').length == 0) {*/
/*         jq(field).find('option[disabled!="disabled"]:first').attr('selected', 'selected');*/
/*     }*/
/*   }*/
/*   */
/*   var getFields = function(category, field_name, index) {*/
/*     var html = '<select name="ExcelPort[Export][Filters][' + category + '][' + index + '][Field]">';*/
/*     for (var i in conditions[category]) {*/
/*       html += '<option value="' + i + '"' + ((typeof(field_name) != 'undefined' && i == field_name) ? ' selected="selected"' : '') + '>' + conditions[category][i].label + '</option>';*/
/*     }*/
/*     html    += '</select>';*/
/*     */
/*     return html;*/
/*   }*/
/*   */
/*   var addCondition = function(category, field_name, operation, value) {*/
/*     if (typeof(category) != 'undefined') {*/
/*       html  = '<tr>';*/
/*       html += ' <td>' + getFields(category, field_name, conditionsIndexes[category]) + '';*/
/*       */
/*       html += ' <span class="hideable">' + getOperations(category, operation, conditionsIndexes[category]) +'';*/
/*       html += ' {{ text_the_value }} <input type="text"' + ((typeof(value) != 'undefined') ? ' value="' + value + '"' : '') + ' name="ExcelPort[Export][Filters][' + category + '][' + conditionsIndexes[category] + '][Value]" /></span></td>';*/
/*       html += ' <td class="right"><a class="btn btn-danger discardCondition"><i class="icon-trash icon-white"></i> {{ button_discard_condition }}</a></td>';*/
/*       html += '</tr>';*/
/*       */
/*       jq('.dataTypeFilter[data-type="' + category + '"] table tbody').append(html);*/
/*       if (typeof(field_name) != 'undefined') {*/
/*         if (typeof(conditions[category][field_name]) != 'undefined') {*/
/*         refreshOperation('select[name="ExcelPort[Export][Filters][' + category + '][' + conditionsIndexes[category] + '][Condition]"]', conditions[category][field_name].type, false);*/
/*         }*/
/*       } else {*/
/*         for (var j in conditions[category]) { refreshOperation('select[name="ExcelPort[Export][' + category + '][' + conditionsIndexes[category] + '][Condition]"]', conditions[category][j].type, true); break; }*/
/*       }*/
/*       jq('select[name="ExcelPort[Export][Filters][' + category + '][' + conditionsIndexes[category] + '][Field]"]').change({index: conditionsIndexes[category]}, function(e, data) {*/
/*         refreshOperation('select[name="ExcelPort[Export][Filters][' + category + '][' + e.data.index + '][Condition]"]', conditions[category][jq(this).val()].type, false);*/
/*       }).trigger('change');*/
/*       */
/*       jq('.discardCondition').unbind('click').click(function() {*/
/*         jq(this).closest('tr').remove();*/
/*       });*/
/*       */
/*       conditionsIndexes[category]++;*/
/*     }*/
/*   }*/
/*   */
/*   for (var i in enabled_conditions) {*/
/*     var added = false;*/
/*     for (var j in enabled_conditions[i]) {*/
/*       if (typeof(enabled_conditions[i][j].Field) != 'undefined') {*/
/*         addCondition(i, enabled_conditions[i][j].Field, enabled_conditions[i][j].Condition, enabled_conditions[i][j].Value);*/
/*         added = true;*/
/*       }*/
/*     }*/
/*     if (!added) addCondition(i);*/
/*   }*/
/*   */
/*   if (ajaxgenerate) {*/
/*     jq('#generateLoading').show();*/
/* */
/*     var exportData = {*/
/*       ExcelPort : {*/
/*         Export : {*/
/*           DataType : jq('input[name="ExcelPort[Export][DataType]"]:checked').val(),*/
/*           Store : jq('input[name="ExcelPort[Export][Store]"]:checked').val(),*/
/*           Language : jq('input[name="ExcelPort[Export][Language]"]:checked').val(),*/
/*           ProductExportMode : jq('input[name="ExcelPort[Export][ProductExportMode]"]:checked').val(),*/
/*           Filter : jq('input[name="ExcelPort[Export][Filter]"]').val(),*/
/*           Filters : {}*/
/*         },*/
/*         LastImport : jq('#last_import_input').val(),*/
/*         Settings : {*/
/*           ExportLimit : jq('input[name="ExcelPort[Settings][ExportLimit]"]').val(),*/
/*           DescriptionEncoding : jq('select[name="ExcelPort[Settings][DescriptionEncoding]"]').val()*/
/*         }*/
/*       }*/
/*     };*/
/*     */
/*     jq('*[name^="ExcelPort[Export][Filters]"]').each(function (index, element) {*/
/*       var regex = /ExcelPort\[Export\]\[Filters\]\[(.*?)\]\[(.*?)\]\[(.*?)\]/gi;*/
/*       match = regex.exec(jq(element).attr('name'));*/
/*       if (match == null) {*/
/*         regex = /ExcelPort\[Export\]\[Filters\]\[(.*?)\]\[(.*?)\]/gi;*/
/*         match = regex.exec(jq(element).attr('name'));*/
/*         if (typeof(exportData.ExcelPort.Export.Filters[match[1]]) == 'undefined') exportData.ExcelPort.Export.Filters[match[1]] = {};*/
/*         exportData.ExcelPort.Export.Filters[match[1]][match[2]] = jq(element).val();*/
/*       } else {*/
/*         if (typeof(exportData.ExcelPort.Export.Filters[match[1]]) == 'undefined') exportData.ExcelPort.Export.Filters[match[1]] = {};*/
/*         if (typeof(exportData.ExcelPort.Export.Filters[match[1]][match[2]]) == 'undefined') exportData.ExcelPort.Export.Filters[match[1]][match[2]] = {};*/
/*         exportData.ExcelPort.Export.Filters[match[1]][match[2]][match[3]] = jq(element).val();*/
/*       }*/
/*     });*/
/* */
/*     updateProgressBar(site_url, true, function() {*/
/*       startAjaxGenerate('index.php?user_token='+token+'&route=extension/module/excelport/ajaxgenerate&_=' + (new Date()).getTime(), exportData);*/
/*     });*/
/*   }*/
/*   */
/*   if (ajaximport) {*/
/*     jq('#generateLoading').show();*/
/*     updateProgressBar(site_url);*/
/*     startAjaxImport('index.php?user_token='+token+'&route=extension/module/excelport/ajaximport&_=' + Date.now(), {*/
/*       ExcelPort : {*/
/*         Import : {*/
/*           DataType : jq('input[name="ExcelPort[Import][DataType]"]:checked').val(),*/
/*           Language : jq('input[name="ExcelPort[Import][Language]"]:checked').val(),*/
/*           Delete : jq('input[name="ExcelPort[Import][Delete]"]:checked').val(),*/
/*           AddAsNew : jq('input[name="ExcelPort[Import][AddAsNew]"]:checked').val()*/
/*         },*/
/*         LastImport : jq('#last_import_input').val(),*/
/*         Settings : {*/
/*           ImportLimit : jq('input[name="ExcelPort[Settings][ImportLimit]"]').val()*/
/*         }*/
/*       }*/
/*     });*/
/*   }*/
/* */
/*   jq('.needMoreSize').click(function() {*/
/*     window.open(site_url + '/system/library/vendor/isenselabs/excelport/excelport/help_increase_size.php', '_blank', 'location=no,width=830,height=580,resizable=no');*/
/*   });*/
/* */
/*   jq('.ExcelPortSubmitButton').click(function(e) {*/
/*     abort = false;*/
/*     var action = jq(this).attr('data-action');*/
/*     if (action == 'import' && jq('#checkboxDelete').is(':checked')) {*/
/*       if (!confirm('{{ text_confirm_delete_other }}')) return;  */
/*     }*/
/*     jq('#form').attr('action',jq('#form').attr('action').replace(/&submitAction=.*($|&)/g, ''));*/
/*     if (action != undefined && action != '') {*/
/*       jq('#form').attr('action',jq('#form').attr('action')+'&submitAction='+action);*/
/*     }*/
/*     jq('#form').submit();*/
/*   });*/
/* */
/*   jq('#filter_popover').popover({ trigger: 'hover' }).click(function() {*/
/*     jq(this).toggleClass('active');*/
/*     if (jq(this).hasClass('active')) {*/
/*       jq('#toggle_filter').val('1');*/
/*     } else {*/
/*       jq('#toggle_filter').val('0');*/
/*     }*/
/*     triggerFiltersDisplay();*/
/*   });*/
/*   */
/*   jq('input[name="ExcelPort[Export][DataType]"]').change(triggerFiltersDisplay);*/
/*   triggerFiltersDisplay();*/
/*   */
/*   jq('.addCondition').click(function() {*/
/*     addCondition(jq(this).closest('.dataTypeFilter').attr('data-type'));*/
/*   });*/
/*   */
/*   jq('a[data-toggle="tooltip"]').tooltip({placement:'right'});*/
/* */
/* });*/
/* */
/* </script>*/
/* */
/* {{ footer }}*/
