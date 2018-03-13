<?php

/* catalog/attribute_list.twig */
class __TwigTemplate_fd4fa3fb0733147929aeaf25880310695ce6192da078d21080a9debd8c66e5aa extends Twig_Template
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
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo (isset($context["add"]) ? $context["add"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_add"]) ? $context["button_add"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>

\t\t\t\t<a href=\"index.php?route=extension/module/excelport&user_token=";
        // line 7
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "\" class=\"btn btn-info\" data-toggle=\"tooltip\" title=\"Export / Import\"><i class=\"fa fa-file-excel-o\"></i></a> 
\t\t\t
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 9
        echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo (isset($context["text_confirm"]) ? $context["text_confirm"] : null);
        echo "') ? \$('#form-attribute').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 11
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 14
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
        // line 16
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 20
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 21
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 25
        echo "    ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 26
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 30
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 32
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 35
        echo (isset($context["delete"]) ? $context["delete"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-attribute\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 41
        if (((isset($context["sort"]) ? $context["sort"] : null) == "ad.name")) {
            // line 42
            echo "                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                    ";
        } else {
            // line 44
            echo "                    <a href=\"";
            echo (isset($context["sort_name"]) ? $context["sort_name"] : null);
            echo "\">";
            echo (isset($context["column_name"]) ? $context["column_name"] : null);
            echo "</a>
                    ";
        }
        // line 45
        echo "</td>
                  <td class=\"text-left\">";
        // line 46
        if (((isset($context["sort"]) ? $context["sort"] : null) == "attribute_group")) {
            // line 47
            echo "                    <a href=\"";
            echo (isset($context["sort_attribute_group"]) ? $context["sort_attribute_group"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_attribute_group"]) ? $context["column_attribute_group"] : null);
            echo "</a>
                    ";
        } else {
            // line 49
            echo "                    <a href=\"";
            echo (isset($context["sort_attribute_group"]) ? $context["sort_attribute_group"] : null);
            echo "\">";
            echo (isset($context["column_attribute_group"]) ? $context["column_attribute_group"] : null);
            echo "</a>
                    ";
        }
        // line 50
        echo "</td>
                  <td class=\"text-right\">";
        // line 51
        if (((isset($context["sort"]) ? $context["sort"] : null) == "a.sort_order")) {
            // line 52
            echo "                    <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, (isset($context["order"]) ? $context["order"] : null));
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                    ";
        } else {
            // line 54
            echo "                    <a href=\"";
            echo (isset($context["sort_sort_order"]) ? $context["sort_sort_order"] : null);
            echo "\">";
            echo (isset($context["column_sort_order"]) ? $context["column_sort_order"] : null);
            echo "</a>
                    ";
        }
        // line 55
        echo "</td>
                  <td class=\"text-right\">";
        // line 56
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 60
        if ((isset($context["attributes"]) ? $context["attributes"] : null)) {
            // line 61
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 62
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 63
                if (twig_in_filter($this->getAttribute($context["attribute"], "attribute_id", array()), (isset($context["selected"]) ? $context["selected"] : null))) {
                    // line 64
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["attribute"], "attribute_id", array());
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 66
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo $this->getAttribute($context["attribute"], "attribute_id", array());
                    echo "\" />
                    ";
                }
                // line 67
                echo "</td>
                  <td class=\"text-left\">";
                // line 68
                echo $this->getAttribute($context["attribute"], "name", array());
                echo "</td>
                  <td class=\"text-left\">";
                // line 69
                echo $this->getAttribute($context["attribute"], "attribute_group", array());
                echo "</td>
                  <td class=\"text-right\">";
                // line 70
                echo $this->getAttribute($context["attribute"], "sort_order", array());
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 71
                echo $this->getAttribute($context["attribute"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                ";
        } else {
            // line 75
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"5\">";
            // line 76
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 79
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 84
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 85
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 91
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/attribute_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 91,  261 => 85,  257 => 84,  250 => 79,  244 => 76,  241 => 75,  238 => 74,  227 => 71,  223 => 70,  219 => 69,  215 => 68,  212 => 67,  206 => 66,  200 => 64,  198 => 63,  195 => 62,  190 => 61,  188 => 60,  181 => 56,  178 => 55,  170 => 54,  160 => 52,  158 => 51,  155 => 50,  147 => 49,  137 => 47,  135 => 46,  132 => 45,  124 => 44,  114 => 42,  112 => 41,  103 => 35,  97 => 32,  93 => 30,  85 => 26,  82 => 25,  74 => 21,  72 => 20,  66 => 16,  55 => 14,  51 => 13,  46 => 11,  39 => 9,  34 => 7,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right"><a href="{{ add }}" data-toggle="tooltip" title="{{ button_add }}" class="btn btn-primary"><i class="fa fa-plus"></i></a>*/
/* */
/* 				<a href="index.php?route=extension/module/excelport&user_token={{ user_token }}" class="btn btn-info" data-toggle="tooltip" title="Export / Import"><i class="fa fa-file-excel-o"></i></a> */
/* 			*/
/*         <button type="button" data-toggle="tooltip" title="{{ button_delete }}" class="btn btn-danger" onclick="confirm('{{ text_confirm }}') ? $('#form-attribute').submit() : false;"><i class="fa fa-trash-o"></i></button>*/
/*       </div>*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     {% if success %}*/
/*     <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> {{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i> {{ text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{ delete }}" method="post" enctype="multipart/form-data" id="form-attribute">*/
/*           <div class="table-responsive">*/
/*             <table class="table table-bordered table-hover">*/
/*               <thead>*/
/*                 <tr>*/
/*                   <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>*/
/*                   <td class="text-left">{% if sort == 'ad.name' %}*/
/*                     <a href="{{ sort_name }}" class="{{ order|lower }}">{{ column_name }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_name }}">{{ column_name }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{% if sort == 'attribute_group' %}*/
/*                     <a href="{{ sort_attribute_group }}" class="{{ order|lower }}">{{ column_attribute_group }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_attribute_group }}">{{ column_attribute_group }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{% if sort == 'a.sort_order' %}*/
/*                     <a href="{{ sort_sort_order }}" class="{{ order|lower }}">{{ column_sort_order }}</a>*/
/*                     {% else %}*/
/*                     <a href="{{ sort_sort_order }}">{{ column_sort_order }}</a>*/
/*                     {% endif %}</td>*/
/*                   <td class="text-right">{{ column_action }}</td>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody>*/
/*                 {% if attributes %}*/
/*                 {% for attribute in attributes %}*/
/*                 <tr>*/
/*                   <td class="text-center">{% if attribute.attribute_id in selected %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ attribute.attribute_id }}" checked="checked" />*/
/*                     {% else %}*/
/*                     <input type="checkbox" name="selected[]" value="{{ attribute.attribute_id }}" />*/
/*                     {% endif %}</td>*/
/*                   <td class="text-left">{{ attribute.name }}</td>*/
/*                   <td class="text-left">{{ attribute.attribute_group }}</td>*/
/*                   <td class="text-right">{{ attribute.sort_order }}</td>*/
/*                   <td class="text-right"><a href="{{ attribute.edit }}" data-toggle="tooltip" title="{{ button_edit }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="5">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*                 {% endif %}*/
/*               </tbody>*/
/*             </table>*/
/*           </div>*/
/*         </form>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right">{{ results }}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {{ footer }}*/
/* */
