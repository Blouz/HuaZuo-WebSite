<?php

/* extension/module/pim.twig */
class __TwigTemplate_b47cfef51be5e3c5f3219eb39a4557d304f1321c8abf90447546f69fb93254f2 extends Twig_Template
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
        echo " ";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
    ";
        // line 5
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 6
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 9
        echo " 
    ";
        // line 10
        if ((isset($context["success"]) ? $context["success"] : null)) {
            echo " 
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 11
            echo (isset($context["success"]) ? $context["success"] : null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 14
        echo "     
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-ppexpress\" data-toggle=\"tooltip\" title=\"";
        // line 16
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo " \" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 17
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo " \" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo " \" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 18
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo " </h1>
      <ul class=\"breadcrumb\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
        <li><a href=\"";
            // line 21
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo " \">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo " </a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo " 
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 27
        if ($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_warning", array())) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 28
            echo $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "error_warning", array());
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 31
        echo " 
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i>Module settings</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 37
        echo (isset($context["action"]) ? $context["action"] : null);
        echo " \" method=\"post\" enctype=\"multipart/form-data\" id=\"form-multiimage\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 39
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo " </a></li>
            <li><a href=\"#tab-volumes\" data-toggle=\"tab\">";
        // line 40
        echo (isset($context["tab_volume"]) ? $context["tab_volume"] : null);
        echo " </a></li>
            <li><a href=\"#tab-modules\" data-toggle=\"tab\">";
        // line 41
        echo (isset($context["tab_module"]) ? $context["tab_module"] : null);
        echo " </a></li>  
            <li><a href=\"#tab-about\" data-toggle=\"tab\">";
        // line 42
        echo (isset($context["tab_help"]) ? $context["tab_help"] : null);
        echo " </a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
             <fieldset>
              <legend>";
        // line 47
        echo "General Settings";
        echo " </legend>

              <div class=\"tab-pane active\" id=\"tab-api-details\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 51
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo " </label>
                <div class=\"col-sm-2\">
                  <select name=\"pim_status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 54
        if ((isset($context["pim_status"]) ? $context["pim_status"] : null)) {
            echo " 
                    <option value=\"1\" selected=\"selected\">";
            // line 55
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo " </option>
                    <option value=\"0\">";
            // line 56
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo " </option>
                    ";
        } else {
            // line 57
            echo "   
                    <option value=\"1\">";
            // line 58
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo " </option>
                    <option value=\"0\" selected=\"selected\">";
            // line 59
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo " </option>
                    ";
        }
        // line 60
        echo "  
                  </select>
                </div>
              </div>                  
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 65
        echo (isset($context["entry_miu_patch"]) ? $context["entry_miu_patch"] : null);
        echo " </label>
                <div class=\"col-sm-2\">
                  <select name=\"pim_miu\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 68
        if ((isset($context["pim_miu"]) ? $context["pim_miu"] : null)) {
            echo " 
                    <option value=\"1\" selected=\"selected\">";
            // line 69
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo " </option>
                    <option value=\"0\">";
            // line 70
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo " </option>
                    ";
        } else {
            // line 71
            echo "   
                    <option value=\"1\">";
            // line 72
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo " </option>
                    <option value=\"0\" selected=\"selected\">";
            // line 73
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo " </option>
                    ";
        }
        // line 74
        echo "  
                  </select>
                </div>
              </div>          
              </div>
              </fieldset>
              <fieldset>
              <legend>";
        // line 81
        echo "Server Settings";
        echo " </legend>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 83
        echo (isset($context["entry_delete_def_image"]) ? $context["entry_delete_def_image"] : null);
        echo " </label>
                <div class=\"col-sm-4\">
                  <select name=\"pim_deletedef\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t";
        // line 86
        if ((isset($context["pim_deletedef"]) ? $context["pim_deletedef"] : null)) {
            echo " 
                    <option value=\"1\" selected=\"selected\">";
            // line 87
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo " </option>
                    <option value=\"0\">";
            // line 88
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo " </option>
                    ";
        } else {
            // line 89
            echo "   
                    <option value=\"1\">";
            // line 90
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo " </option>
                    <option value=\"0\" selected=\"selected\">";
            // line 91
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo " </option>
                    ";
        }
        // line 92
        echo "  \t\t\t\t\t\t\t\t
                  
                  </select>
                </div>
              </div>                  
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 98
        echo (isset($context["entry_copyOverwrite"]) ? $context["entry_copyOverwrite"] : null);
        echo " </label>
                <div class=\"col-sm-4\">
                  <select name=\"pim_copyOverwrite\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 101
        if ((isset($context["pim_copyOverwrite"]) ? $context["pim_copyOverwrite"] : null)) {
            echo " 
                  <option value=\"1\" selected=\"selected\">";
            // line 102
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo " </option>
                  <option value=\"0\">";
            // line 103
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo " </option>
                  ";
        } else {
            // line 104
            echo "   
                  <option value=\"1\">";
            // line 105
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo " </option>
                  <option value=\"0\" selected=\"selected\">";
            // line 106
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo " </option>
                  ";
        }
        // line 107
        echo "  
                  </select>
                </div>
              </div>          
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 112
        echo (isset($context["entry_uploadOverwrite"]) ? $context["entry_uploadOverwrite"] : null);
        echo " </label>
                <div class=\"col-sm-4\">
                  <select name=\"pim_uploadOverwrite\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 115
        if ((isset($context["pim_uploadOverwrite"]) ? $context["pim_uploadOverwrite"] : null)) {
            echo " 
                  <option value=\"1\" selected=\"selected\">";
            // line 116
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo " </option>
                  <option value=\"0\">";
            // line 117
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo " </option>
                  ";
        } else {
            // line 118
            echo "   
                  <option value=\"1\">";
            // line 119
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo " </option>
                  <option value=\"0\" selected=\"selected\">";
            // line 120
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo " </option>
                  ";
        }
        // line 121
        echo "  
                  </select>
                </div>
              </div>                  
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 126
        echo (isset($context["entry_uploadMaxSize"]) ? $context["entry_uploadMaxSize"] : null);
        echo " </label>
                <div class=\"col-sm-2\">
                   <input type=\"text\" class=\"form-control\" name=\"pim_uploadMaxSize\" value=\"";
        // line 128
        echo (isset($context["pim_uploadMaxSize"]) ? $context["pim_uploadMaxSize"] : null);
        echo " \" size=\"4\" />
                </div>
                <div class=\"col-sm-2\"><select name=\"pim_uploadMaxType\" id=\"input-status\" class=\"form-control\">
                  ";
        // line 131
        if ((((isset($context["pim_uploadMaxType"]) ? $context["pim_uploadMaxType"] : null) == "M") ||  !(isset($context["pim_uploadMaxType"]) ? $context["pim_uploadMaxType"] : null))) {
            echo " 
                  <option value=\"M\" selected>MegaBytes (MB)</option>
                  <option value=\"K\">KiloBytes (KB)</option>
                  ";
        } else {
            // line 134
            echo "   
                  <option value=\"M\" >MegaBytes (MB)</option>
                  <option value=\"K\" selected>KiloBytes (KB)</option>
                  ";
        }
        // line 137
        echo " \t\t\t\t\t\t\t\t
                  </select>
                </div>                
              </div>                   
              </fieldset>
              <fieldset>
                <legend>";
        // line 143
        echo "View Settings";
        echo " </legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 145
        echo (isset($context["entry_language"]) ? $context["entry_language"] : null);
        echo " </label>
                  <div class=\"col-sm-4\">
                    <select name=\"pim_language\"  class=\"form-control\">
                    <option value=\"\"> EN </option>
                    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langs"]) ? $context["langs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 150
            echo "                        <option value=\"";
            echo $context["l"];
            echo "\" ";
            if (($context["l"] == (isset($context["pim_language"]) ? $context["pim_language"] : null))) {
                echo " ";
                echo " selected";
            }
            echo ">";
            echo twig_upper_filter($this->env, $context["l"]);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                     
                  </select>
                  </div>
                </div>  
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 157
        echo (isset($context["entry_dimensions"]) ? $context["entry_dimensions"] : null);
        echo " </label>
                  <div class=\"col-sm-6\">
                     <div class=\"col-sm-3\">
                    <input type=\"text\" class=\"form-control\" name=\"pim_width\" value=\"";
        // line 160
        echo (isset($context["pim_width"]) ? $context["pim_width"] : null);
        echo " \" size=\"4\" /> </div> <div class=\"col-sm-1\">x</div> <div class=\"col-sm-3\"><input type=\"text\" class=\"form-control\" name=\"pim_height\" value=\"";
        echo (isset($context["pim_height"]) ? $context["pim_height"] : null);
        echo " \" size=\"4\" /></div>
                  </div>
                </div>                     
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-volumes\">
              <div class=\"tab-pane\">
                <div class=\"table-responsive\">
                  <table class=\"table table-bordered table-hover\">
                    <thead>
                      <tr>
                        <td class=\"text-left\">";
        // line 171
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo " </td>
                        <td class=\"text-left\">";
        // line 172
        echo (isset($context["column_description"]) ? $context["column_description"] : null);
        echo "</td>
                        <td class=\"text-right\">";
        // line 173
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo " </td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
        // line 177
        if ((isset($context["volumes"]) ? $context["volumes"] : null)) {
            echo " 
                      ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["volumes"]) ? $context["volumes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                echo " 
                      <tr>
                        <td>";
                // line 180
                echo $this->getAttribute($context["extension"], "name", array());
                echo " </td>
                        <td>";
                // line 181
                echo $this->getAttribute($context["extension"], "text", array());
                echo " </td>
                        <td class=\"text-right\">";
                // line 182
                if ( !$this->getAttribute($context["extension"], "installed", array())) {
                    echo " 
                          <a href=\"";
                    // line 183
                    echo $this->getAttribute($context["extension"], "install", array());
                    echo " \" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_install"]) ? $context["button_install"] : null);
                    echo " \" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 184
                    echo "   
                          <a onclick=\"confirm('";
                    // line 185
                    echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
                    echo " ') ? location.href='";
                    echo $this->getAttribute($context["extension"], "uninstall", array());
                    echo " ' : false;\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_uninstall"]) ? $context["button_uninstall"] : null);
                    echo " \" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                          ";
                }
                // line 186
                echo " 
                          ";
                // line 187
                if ($this->getAttribute($context["extension"], "installed", array())) {
                    echo " 
                          <a href=\"";
                    // line 188
                    echo $this->getAttribute($context["extension"], "edit", array());
                    echo " \" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_add"]) ? $context["button_add"] : null);
                    echo " \" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
                          ";
                } else {
                    // line 189
                    echo "   
                          <button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa fa-pencil\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 191
                echo " 
                           </td>
                      </tr>
                        ";
                // line 194
                if ( !twig_test_empty($this->getAttribute($context["extension"], "childs", array()))) {
                    // line 195
                    echo "                          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["extension"], "childs", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        echo " 
                            <tr>
                              <td colspan=\"2\">";
                        // line 197
                        echo $this->getAttribute($context["extension"], "name", array());
                        echo "  > <b>(";
                        echo $this->getAttribute($context["child"], "name", array());
                        echo ")</b></td>
                              <td class=\"text-right\">
                                <a onclick=\"confirm('";
                        // line 199
                        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
                        echo " ') ? location.href='";
                        echo $this->getAttribute($context["child"], "delete", array());
                        echo " ' : false;\" data-toggle=\"tooltip\" title=\"";
                        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
                        echo " \" class=\"btn btn-danger\"><i class=\"fa fa-trash-o\"></i></a>
                                <a href=\"";
                        // line 200
                        echo $this->getAttribute($context["child"], "edit", array());
                        echo " \" data-toggle=\"tooltip\" title=\"";
                        echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                        echo " \" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                            
                              </td>
                            </tr>
                          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 205
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                echo "                          
                       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 206
            echo "\t\t\t\t\t\t\t\t\t\t\t 
                       ";
        } else {
            // line 207
            echo "   
                      <tr>
                        <td class=\"text-center\" colspan=\"2\">";
            // line 209
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo " </td>
                      </tr>
                      ";
        }
        // line 211
        echo "    
                    </tbody>
                  </table>
                </div>                                 
            </div>
          </div>            
          <div class=\"tab-pane\" id=\"tab-modules\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 222
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo " </td>
                  <td class=\"text-left\">";
        // line 223
        echo (isset($context["column_description"]) ? $context["column_description"] : null);
        echo "</td>
                  <td class=\"text-right\">";
        // line 224
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo " </td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 228
        if ((isset($context["extensions"]) ? $context["extensions"] : null)) {
            echo " 
                ";
            // line 229
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["extensions"]) ? $context["extensions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                echo " 
                <tr>
                  <td>";
                // line 231
                echo $this->getAttribute($context["extension"], "name", array());
                echo " </td>
                  <td>";
                // line 232
                echo $this->getAttribute($context["extension"], "text", array());
                echo " </td>
                  <td class=\"text-right\">";
                // line 233
                if ( !$this->getAttribute($context["extension"], "installed", array())) {
                    echo " 
                    <a href=\"";
                    // line 234
                    echo $this->getAttribute($context["extension"], "install", array());
                    echo " \" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_install"]) ? $context["button_install"] : null);
                    echo " \" class=\"btn btn-success\"><i class=\"fa fa-plus-circle\"></i></a>
                    ";
                } else {
                    // line 235
                    echo "   
                    <a onclick=\"confirm('";
                    // line 236
                    echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
                    echo " ') ? location.href='";
                    echo $this->getAttribute($context["extension"], "uninstall", array());
                    echo " ' : false;\" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_uninstall"]) ? $context["button_uninstall"] : null);
                    echo " \" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></a>
                    ";
                }
                // line 237
                echo " 
                    ";
                // line 238
                if ($this->getAttribute($context["extension"], "installed", array())) {
                    echo " 
                    <a href=\"";
                    // line 239
                    echo $this->getAttribute($context["extension"], "edit", array());
                    echo " \" data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                    echo " \" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                    ";
                } else {
                    // line 240
                    echo "   
                    <button type=\"button\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fa fa-pencil\"></i></button>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 242
                echo " 
                     </td>
                </tr>
                 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "                 ";
        } else {
            echo "   
                <tr>
                  <td class=\"text-center\" colspan=\"2\">";
            // line 248
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo " </td>
                </tr>
                 ";
        }
        // line 250
        echo " 
              </tbody>
            </table>
          </div>                                 
          </div>
            
            <div class=\"tab-pane\" id=\"tab-about\">
      \t\t\t  <h3>Welcome and thank you for purchsing our module!</h3>
      \t\t\t  <div class=\"panel panel-default\">
      \t\t\t    <div class=\"panel-heading\"><h4 class=\"panel-title\">About This Module</h4></div>
      \t\t\t    <div class=\"panel-body\"><strong>Power Image Manager</strong> is another great module developed by <a href=\"http://bit.ly/1vHShWu\" target=\"_blank\">Sharley's</a></div>
      \t\t\t  </div>
      \t\t\t  <div class=\"panel panel-default\">
      \t\t\t    <div class=\"panel-heading\"><h4 class=\"panel-title\">Need Support?</h4></div>
      \t\t\t    <div class=\"panel-body\">
      \t\t\t      <a href=\"mailto: support@sharleys.co.uk?subject=Power Image Manager (OCV2) support on <?php echo HTTP_CATALOG; ?>\" class=\"btn btn-success\"> <i class=\"fa fa-life-ring fa-lg\"></i> Contact Us</a>
      \t\t\t      <a href=\"http://on.fb.me/1inp4Ik\" target=\"_blank\" class=\"btn btn-primary\"> <i class=\"fa fa-thumbs-up\"></i> Follow us on Facebook</a>
      \t\t\t    </div>
      \t\t\t  </div>
      \t\t\t  <div class=\"panel panel-default\">
      \t\t\t    <div class=\"panel-heading\"><h4 class=\"panel-title\">Happy about our modules?</h4></div>
      \t\t\t    <div class=\"panel-body\">Please give as your vote &amp; comment on <a href=\"http://bit.ly/1vHShWu\" target=\"_blank\">Opencart Extension Store</a></div>
      \t\t\t  </div>
              </div>            
            </div>
          </div> 
        </form>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "extension/module/pim.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  689 => 250,  683 => 248,  677 => 246,  668 => 242,  663 => 240,  656 => 239,  652 => 238,  649 => 237,  640 => 236,  637 => 235,  630 => 234,  626 => 233,  622 => 232,  618 => 231,  611 => 229,  607 => 228,  600 => 224,  596 => 223,  592 => 222,  579 => 211,  573 => 209,  569 => 207,  565 => 206,  556 => 205,  543 => 200,  535 => 199,  528 => 197,  520 => 195,  518 => 194,  513 => 191,  508 => 189,  501 => 188,  497 => 187,  494 => 186,  485 => 185,  482 => 184,  475 => 183,  471 => 182,  467 => 181,  463 => 180,  456 => 178,  452 => 177,  445 => 173,  441 => 172,  437 => 171,  421 => 160,  415 => 157,  408 => 152,  392 => 150,  388 => 149,  381 => 145,  376 => 143,  368 => 137,  362 => 134,  355 => 131,  349 => 128,  344 => 126,  337 => 121,  332 => 120,  328 => 119,  325 => 118,  320 => 117,  316 => 116,  312 => 115,  306 => 112,  299 => 107,  294 => 106,  290 => 105,  287 => 104,  282 => 103,  278 => 102,  274 => 101,  268 => 98,  260 => 92,  255 => 91,  251 => 90,  248 => 89,  243 => 88,  239 => 87,  235 => 86,  229 => 83,  224 => 81,  215 => 74,  210 => 73,  206 => 72,  203 => 71,  198 => 70,  194 => 69,  190 => 68,  184 => 65,  177 => 60,  172 => 59,  168 => 58,  165 => 57,  160 => 56,  156 => 55,  152 => 54,  146 => 51,  139 => 47,  131 => 42,  127 => 41,  123 => 40,  119 => 39,  114 => 37,  106 => 31,  99 => 28,  95 => 27,  88 => 22,  78 => 21,  72 => 20,  67 => 18,  61 => 17,  57 => 16,  53 => 14,  46 => 11,  42 => 10,  39 => 9,  32 => 6,  28 => 5,  19 => 1,);
    }
}
/* {{ header }} {{ column_left }} */
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*     {% if error_warning %} */
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }} */
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %} */
/*     {% if success %} */
/*     <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }} */
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}     */
/*       <div class="pull-right">*/
/*         <button type="submit" form="form-ppexpress" data-toggle="tooltip" title="{{ button_save }} " class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/*         <a href="{{ cancel }} " data-toggle="tooltip" title="{{ button_cancel }} " class="btn btn-default"><i class="fa fa-reply"></i></a></div>*/
/*       <h1>{{ heading_title }} </h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %} */
/*         <li><a href="{{ breadcrumb.href }} ">{{ breadcrumb.text }} </a></li>*/
/*         {% endfor %} */
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error.error_warning %} */
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error.error_warning }} */
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %} */
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i>Module settings</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ action }} " method="post" enctype="multipart/form-data" id="form-multiimage" class="form-horizontal">*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab">{{ tab_general }} </a></li>*/
/*             <li><a href="#tab-volumes" data-toggle="tab">{{ tab_volume }} </a></li>*/
/*             <li><a href="#tab-modules" data-toggle="tab">{{ tab_module }} </a></li>  */
/*             <li><a href="#tab-about" data-toggle="tab">{{ tab_help }} </a></li>*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/*              <fieldset>*/
/*               <legend>{{ 'General Settings' }} </legend>*/
/* */
/*               <div class="tab-pane active" id="tab-api-details">*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_status }} </label>*/
/*                 <div class="col-sm-2">*/
/*                   <select name="pim_status" id="input-status" class="form-control">*/
/*                     {% if pim_status %} */
/*                     <option value="1" selected="selected">{{ text_enabled }} </option>*/
/*                     <option value="0">{{ text_disabled }} </option>*/
/*                     {% else %}   */
/*                     <option value="1">{{ text_enabled }} </option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }} </option>*/
/*                     {% endif %}  */
/*                   </select>*/
/*                 </div>*/
/*               </div>                  */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_miu_patch }} </label>*/
/*                 <div class="col-sm-2">*/
/*                   <select name="pim_miu" id="input-status" class="form-control">*/
/*                     {% if pim_miu %} */
/*                     <option value="1" selected="selected">{{ text_enabled }} </option>*/
/*                     <option value="0">{{ text_disabled }} </option>*/
/*                     {% else %}   */
/*                     <option value="1">{{ text_enabled }} </option>*/
/*                     <option value="0" selected="selected">{{ text_disabled }} </option>*/
/*                     {% endif %}  */
/*                   </select>*/
/*                 </div>*/
/*               </div>          */
/*               </div>*/
/*               </fieldset>*/
/*               <fieldset>*/
/*               <legend>{{ 'Server Settings' }} </legend>*/
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_delete_def_image }} </label>*/
/*                 <div class="col-sm-4">*/
/*                   <select name="pim_deletedef" id="input-status" class="form-control">*/
/* 										{% if pim_deletedef %} */
/*                     <option value="1" selected="selected">{{ text_yes }} </option>*/
/*                     <option value="0">{{ text_no }} </option>*/
/*                     {% else %}   */
/*                     <option value="1">{{ text_yes }} </option>*/
/*                     <option value="0" selected="selected">{{ text_no }} </option>*/
/*                     {% endif %}  								*/
/*                   */
/*                   </select>*/
/*                 </div>*/
/*               </div>                  */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_copyOverwrite }} </label>*/
/*                 <div class="col-sm-4">*/
/*                   <select name="pim_copyOverwrite" id="input-status" class="form-control">*/
/*                   {% if pim_copyOverwrite %} */
/*                   <option value="1" selected="selected">{{ text_yes }} </option>*/
/*                   <option value="0">{{ text_no }} </option>*/
/*                   {% else %}   */
/*                   <option value="1">{{ text_yes }} </option>*/
/*                   <option value="0" selected="selected">{{ text_no }} </option>*/
/*                   {% endif %}  */
/*                   </select>*/
/*                 </div>*/
/*               </div>          */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_uploadOverwrite }} </label>*/
/*                 <div class="col-sm-4">*/
/*                   <select name="pim_uploadOverwrite" id="input-status" class="form-control">*/
/*                   {% if pim_uploadOverwrite %} */
/*                   <option value="1" selected="selected">{{ text_yes }} </option>*/
/*                   <option value="0">{{ text_no }} </option>*/
/*                   {% else %}   */
/*                   <option value="1">{{ text_yes }} </option>*/
/*                   <option value="0" selected="selected">{{ text_no }} </option>*/
/*                   {% endif %}  */
/*                   </select>*/
/*                 </div>*/
/*               </div>                  */
/*               <div class="form-group">*/
/*                 <label class="col-sm-2 control-label" for="input-status">{{ entry_uploadMaxSize }} </label>*/
/*                 <div class="col-sm-2">*/
/*                    <input type="text" class="form-control" name="pim_uploadMaxSize" value="{{ pim_uploadMaxSize }} " size="4" />*/
/*                 </div>*/
/*                 <div class="col-sm-2"><select name="pim_uploadMaxType" id="input-status" class="form-control">*/
/*                   {% if (pim_uploadMaxType == 'M' or not pim_uploadMaxType) %} */
/*                   <option value="M" selected>MegaBytes (MB)</option>*/
/*                   <option value="K">KiloBytes (KB)</option>*/
/*                   {% else %}   */
/*                   <option value="M" >MegaBytes (MB)</option>*/
/*                   <option value="K" selected>KiloBytes (KB)</option>*/
/*                   {% endif %} 								*/
/*                   </select>*/
/*                 </div>                */
/*               </div>                   */
/*               </fieldset>*/
/*               <fieldset>*/
/*                 <legend>{{ 'View Settings' }} </legend>*/
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-status">{{ entry_language }} </label>*/
/*                   <div class="col-sm-4">*/
/*                     <select name="pim_language"  class="form-control">*/
/*                     <option value=""> EN </option>*/
/*                     {% for l in langs %}*/
/*                         <option value="{{ l }}" {% if l == pim_language%} {{ " selected" }}{% endif %}>{{ l|upper  }}</option>*/
/* 										{% endfor %}*/
/*                      */
/*                   </select>*/
/*                   </div>*/
/*                 </div>  */
/*                 <div class="form-group">*/
/*                   <label class="col-sm-2 control-label" for="input-status">{{ entry_dimensions }} </label>*/
/*                   <div class="col-sm-6">*/
/*                      <div class="col-sm-3">*/
/*                     <input type="text" class="form-control" name="pim_width" value="{{ pim_width }} " size="4" /> </div> <div class="col-sm-1">x</div> <div class="col-sm-3"><input type="text" class="form-control" name="pim_height" value="{{ pim_height }} " size="4" /></div>*/
/*                   </div>*/
/*                 </div>                     */
/*               </fieldset>*/
/*             </div>*/
/*             <div class="tab-pane" id="tab-volumes">*/
/*               <div class="tab-pane">*/
/*                 <div class="table-responsive">*/
/*                   <table class="table table-bordered table-hover">*/
/*                     <thead>*/
/*                       <tr>*/
/*                         <td class="text-left">{{ column_name }} </td>*/
/*                         <td class="text-left">{{ column_description }}</td>*/
/*                         <td class="text-right">{{ column_action }} </td>*/
/*                       </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                       {% if volumes %} */
/*                       {% for extension in volumes %} */
/*                       <tr>*/
/*                         <td>{{ extension.name }} </td>*/
/*                         <td>{{ extension.text }} </td>*/
/*                         <td class="text-right">{% if not extension.installed %} */
/*                           <a href="{{ extension.install }} " data-toggle="tooltip" title="{{ button_install }} " class="btn btn-success"><i class="fa fa-plus-circle"></i></a>*/
/* 													{% else %}   */
/*                           <a onclick="confirm('{{ text_confirm }} ') ? location.href='{{ extension.uninstall }} ' : false;" data-toggle="tooltip" title="{{ button_uninstall }} " class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>*/
/*                           {% endif %} */
/*                           {% if extension.installed %} */
/*                           <a href="{{ extension.edit }} " data-toggle="tooltip" title="{{ button_add }} " class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/*                           {% else %}   */
/*                           <button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-pencil"></i></button>*/
/* 													{% endif %} */
/*                            </td>*/
/*                       </tr>*/
/*                         {% if extension.childs is not empty %}*/
/*                           {% for child in extension.childs %} */
/*                             <tr>*/
/*                               <td colspan="2">{{ extension.name }}  > <b>({{ child.name }})</b></td>*/
/*                               <td class="text-right">*/
/*                                 <a onclick="confirm('{{ text_confirm }} ') ? location.href='{{ child.delete }} ' : false;" data-toggle="tooltip" title="{{ button_delete }} " class="btn btn-danger"><i class="fa fa-trash-o"></i></a>*/
/*                                 <a href="{{ child.edit }} " data-toggle="tooltip" title="{{ button_edit }} " class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                             */
/*                               </td>*/
/*                             </tr>*/
/*                           {% endfor %}*/
/* 												{% endif %}                          */
/*                        {% endfor %}											 */
/*                        {% else %}   */
/*                       <tr>*/
/*                         <td class="text-center" colspan="2">{{ text_no_results }} </td>*/
/*                       </tr>*/
/*                       {% endif %}    */
/*                     </tbody>*/
/*                   </table>*/
/*                 </div>                                 */
/*             </div>*/
/*           </div>            */
/*           <div class="tab-pane" id="tab-modules">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td class="text-left">{{ column_name }} </td>*/
/*                   <td class="text-left">{{ column_description }}</td>*/
/*                   <td class="text-right">{{ column_action }} </td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if extensions %} */
/*                 {% for extension in extensions %} */
/*                 <tr>*/
/*                   <td>{{ extension.name }} </td>*/
/*                   <td>{{ extension.text }} </td>*/
/*                   <td class="text-right">{% if not extension.installed %} */
/*                     <a href="{{ extension.install }} " data-toggle="tooltip" title="{{ button_install }} " class="btn btn-success"><i class="fa fa-plus-circle"></i></a>*/
/*                     {% else %}   */
/*                     <a onclick="confirm('{{ text_confirm }} ') ? location.href='{{ extension.uninstall }} ' : false;" data-toggle="tooltip" title="{{ button_uninstall }} " class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>*/
/*                     {% endif %} */
/*                     {% if extension.installed %} */
/*                     <a href="{{ extension.edit }} " data-toggle="tooltip" title="{{ button_edit }} " class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                     {% else %}   */
/*                     <button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-pencil"></i></button>*/
/* 										{% endif %} */
/*                      </td>*/
/*                 </tr>*/
/*                  {% endfor %}*/
/*                  {% else %}   */
/*                 <tr>*/
/*                   <td class="text-center" colspan="2">{{ text_no_results }} </td>*/
/*                 </tr>*/
/*                  {% endif %} */
/*               </tbody>*/
/*             </table>*/
/*           </div>                                 */
/*           </div>*/
/*             */
/*             <div class="tab-pane" id="tab-about">*/
/*       			  <h3>Welcome and thank you for purchsing our module!</h3>*/
/*       			  <div class="panel panel-default">*/
/*       			    <div class="panel-heading"><h4 class="panel-title">About This Module</h4></div>*/
/*       			    <div class="panel-body"><strong>Power Image Manager</strong> is another great module developed by <a href="http://bit.ly/1vHShWu" target="_blank">Sharley's</a></div>*/
/*       			  </div>*/
/*       			  <div class="panel panel-default">*/
/*       			    <div class="panel-heading"><h4 class="panel-title">Need Support?</h4></div>*/
/*       			    <div class="panel-body">*/
/*       			      <a href="mailto: support@sharleys.co.uk?subject=Power Image Manager (OCV2) support on <?php echo HTTP_CATALOG; ?>" class="btn btn-success"> <i class="fa fa-life-ring fa-lg"></i> Contact Us</a>*/
/*       			      <a href="http://on.fb.me/1inp4Ik" target="_blank" class="btn btn-primary"> <i class="fa fa-thumbs-up"></i> Follow us on Facebook</a>*/
/*       			    </div>*/
/*       			  </div>*/
/*       			  <div class="panel panel-default">*/
/*       			    <div class="panel-heading"><h4 class="panel-title">Happy about our modules?</h4></div>*/
/*       			    <div class="panel-body">Please give as your vote &amp; comment on <a href="http://bit.ly/1vHShWu" target="_blank">Opencart Extension Store</a></div>*/
/*       			  </div>*/
/*               </div>            */
/*             </div>*/
/*           </div> */
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
