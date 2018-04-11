<?php

/* extension/module/anyport/backup/database_backup.twig */
class __TwigTemplate_cdb524957ccdb38ce465fcbfa0fb50ee6228534a4d82d71a532c8475d1d8b73b extends Twig_Template
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
        echo "<table class=\"tableWrapper\">
\t<tr>
\t\t<td valign=\"top\">
    \t\t<ul class=\"databaseTablesList\">
    \t\t<li class=\"sectionHeading\">
                <h2>";
        // line 6
        echo (isset($context["text_select_tables"]) ? $context["text_select_tables"] : null);
        echo "</h2>
            </li>
\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tables_to_backup"]) ? $context["tables_to_backup"] : null));
        foreach ($context['_seq'] as $context["i"] => $context["tableName"]) {
            // line 9
            echo "\t\t\t\t\t";
            $context["className"] = " allTable";
            // line 10
            echo "\t\t\t\t\t";
            $context["found"] = false;
            // line 11
            echo "\t\t\t\t\t";
            $context["break"] = false;
            // line 12
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tables_to_backup"]) ? $context["tables_to_backup"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 13
                echo "\t\t\t\t\t\t";
                if (((twig_in_filter($context["category"], $context["tableName"]) == 0) &&  !(isset($context["break"]) ? $context["break"] : null))) {
                    // line 14
                    echo "\t\t\t\t\t\t\t";
                    $context["className"] = ((" " . $context["category"]) . "Table");
                    // line 15
                    echo "\t\t\t\t\t\t\t";
                    $context["found"] = true;
                    // line 16
                    echo "\t\t\t\t\t\t\t";
                    $context["break"] = true;
                    // line 17
                    echo "\t\t\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t\t\t\t";
            if (((isset($context["found"]) ? $context["found"] : null) == false)) {
                // line 20
                echo "\t\t\t\t\t\t";
                $context["className"] = " otherTable";
                // line 21
                echo "\t\t\t\t\t";
            }
            // line 22
            echo "\t\t        <li>
                \t<div class=\"tableName";
            // line 23
            echo (isset($context["className"]) ? $context["className"] : null);
            echo "\">
                    \t<input type=\"checkbox\" class=\"select-table\" value=\"";
            // line 24
            echo $context["tableName"];
            echo "\" id=\"BackupTable";
            echo $context["i"];
            echo "\" name=\"AnyPort[Backup][Tables][BackupTable";
            echo $context["i"];
            echo "]\" />
                        <label for=\"BackupTable";
            // line 25
            echo $context["i"];
            echo "\">";
            echo $context["tableName"];
            echo "</label>
\t\t            </div>
               \t</li>
            \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['tableName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                <li class=\"actionButtons\">
                \t<a href=\"javascript:void(0)\" class=\"selectAllTables btn btn-success\">Select All</a>
\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"deselectAllTables btn btn-warning\">Deselect All</a>
                </li>
    \t\t</ul>
    \t</td>
\t</tr>
</table>

<script>
\t\$('.selectAllTables').click(function() {
\t\t\$('input[class*=\\'select-table\\']').attr('checked', true);
\t});

\t\$('.deselectAllTables').click(function() {
\t\t\$('input[class*=\\'select-table\\']').attr('checked', false);
\t});

</script>
";
    }

    public function getTemplateName()
    {
        return "extension/module/anyport/backup/database_backup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 29,  94 => 25,  86 => 24,  82 => 23,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  64 => 18,  61 => 17,  58 => 16,  55 => 15,  52 => 14,  49 => 13,  44 => 12,  41 => 11,  38 => 10,  35 => 9,  31 => 8,  26 => 6,  19 => 1,);
    }
}
/* <table class="tableWrapper">*/
/* 	<tr>*/
/* 		<td valign="top">*/
/*     		<ul class="databaseTablesList">*/
/*     		<li class="sectionHeading">*/
/*                 <h2>{{ text_select_tables }}</h2>*/
/*             </li>*/
/* 				{% for i,tableName in tables_to_backup %}*/
/* 					{% set className = ' allTable' %}*/
/* 					{% set found = false %}*/
/* 					{% set break = false %}*/
/* 					{% for category in tables_to_backup %}*/
/* 						{% if category in tableName == 0 and not break %}*/
/* 							{% set className = ' ' ~ category ~ 'Table' %}*/
/* 							{% set found = true %}*/
/* 							{% set break = true %}*/
/* 						{% endif %}*/
/* 					{% endfor %}*/
/* 					{% if found == false %}*/
/* 						{% set className = ' otherTable'%}*/
/* 					{% endif %}*/
/* 		        <li>*/
/*                 	<div class="tableName{{ className }}">*/
/*                     	<input type="checkbox" class="select-table" value="{{ tableName }}" id="BackupTable{{ i }}" name="AnyPort[Backup][Tables][BackupTable{{ i }}]" />*/
/*                         <label for="BackupTable{{ i }}">{{ tableName }}</label>*/
/* 		            </div>*/
/*                	</li>*/
/*             	{% endfor %}*/
/*                 <li class="actionButtons">*/
/*                 	<a href="javascript:void(0)" class="selectAllTables btn btn-success">Select All</a>*/
/* 					<a href="javascript:void(0)" class="deselectAllTables btn btn-warning">Deselect All</a>*/
/*                 </li>*/
/*     		</ul>*/
/*     	</td>*/
/* 	</tr>*/
/* </table>*/
/* */
/* <script>*/
/* 	$('.selectAllTables').click(function() {*/
/* 		$('input[class*=\'select-table\']').attr('checked', true);*/
/* 	});*/
/* */
/* 	$('.deselectAllTables').click(function() {*/
/* 		$('input[class*=\'select-table\']').attr('checked', false);*/
/* 	});*/
/* */
/* </script>*/
/* */
