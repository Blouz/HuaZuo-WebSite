<?php

/* default/template/account/mp_accountpage.twig */
class __TwigTemplate_3a7091ad8dda6ecd47b1123a198e5db6ecba7c10a6a69036af474c53f83fe191 extends Twig_Template
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
        echo "
<div id=\"container\" class=\"container ";
        // line 2
        echo ((((isset($context["themeclass"]) ? $context["themeclass"] : null) == "journal-account")) ? ("j-container") : (""));
        echo "\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 12
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
    \t";
        // line 20
        echo ((((isset($context["themeclass"]) ? $context["themeclass"] : null) == "journal-account")) ? ((isset($context["column_right"]) ? $context["column_right"] : null)) : (""));
        echo "
     \t<div class=\"mpacc-dashboard\">
     \t\t";
        // line 22
        if ((((((isset($context["show_total_orders"]) ? $context["show_total_orders"] : null) || (isset($context["show_total_balance"]) ? $context["show_total_balance"] : null)) || (isset($context["show_total_wishlist"]) ? $context["show_total_wishlist"] : null)) || (isset($context["show_total_rewardpoints"]) ? $context["show_total_rewardpoints"] : null)) || (isset($context["show_total_downloads"]) ? $context["show_total_downloads"] : null))) {
            // line 23
            echo "\t      \t<div class=\"mpacc-stats\">
\t      \t\t<ul class=\"list-unstyled\">
\t      \t\t\t";
            // line 25
            if ((isset($context["show_total_orders"]) ? $context["show_total_orders"] : null)) {
                // line 26
                echo "\t      \t\t\t<li>
\t      \t\t\t\t<div class=\"inner-stats\">
\t\t      \t\t\t\t<div class=\"mpacc-stats-icon\"><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></div>
\t\t      \t\t\t\t<div class=\"stats-text\">
\t\t\t      \t\t\t\t<div class=\"totals\">
\t\t\t      \t\t\t\t\t<div class=\"border\"></div>
\t\t\t      \t\t\t\t\t<h3>";
                // line 32
                echo (isset($context["title_total_orders"]) ? $context["title_total_orders"] : null);
                echo "</h3>
\t\t\t      \t\t\t\t</div>
\t\t\t      \t\t\t\t<h2 class=\"hovicon effect-4 sub-b\"><span class=\"count\">";
                // line 34
                echo (isset($context["total_orders"]) ? $context["total_orders"] : null);
                echo "</span> <small>";
                echo (isset($context["text_orders"]) ? $context["text_orders"] : null);
                echo "</small></h2>
\t\t\t      \t\t\t\t<a href=\"";
                // line 35
                echo (isset($context["order_link"]) ? $context["order_link"] : null);
                echo "\" class=\"btn-vw\">";
                echo (isset($context["button_viewall"]) ? $context["button_viewall"] : null);
                echo "</a>
\t\t\t      \t\t\t</div>
\t      \t\t\t\t</div>
\t      \t\t\t</li>
\t      \t\t\t";
            }
            // line 40
            echo "\t      \t\t\t";
            if ((isset($context["show_total_balance"]) ? $context["show_total_balance"] : null)) {
                // line 41
                echo "\t      \t\t\t<li>
\t      \t\t\t\t<div class=\"inner-stats\">
\t\t      \t\t\t\t<div class=\"mpacc-stats-icon\"><i class=\"fa fa-usd\" aria-hidden=\"true\"></i></div>
\t\t      \t\t\t\t<div class=\"stats-text\">
\t\t\t      \t\t\t\t<div class=\"totals\">
\t\t\t      \t\t\t\t\t<div class=\"border\"></div>
\t\t\t      \t\t\t\t\t<h3>";
                // line 47
                echo (isset($context["title_total_transaction"]) ? $context["title_total_transaction"] : null);
                echo "</h3>
\t\t\t      \t\t\t\t</div>
\t\t\t      \t\t\t\t<h2 class=\"hovicon effect-4 sub-b\"><span class=\"\">";
                // line 49
                echo (isset($context["total_transactions"]) ? $context["total_transactions"] : null);
                echo "</span> <small>";
                echo (isset($context["text_balance"]) ? $context["text_balance"] : null);
                echo "</small></h2>
\t\t\t      \t\t\t\t<a href=\"";
                // line 50
                echo (isset($context["transaction_link"]) ? $context["transaction_link"] : null);
                echo "\" class=\"btn-vw\">";
                echo (isset($context["button_viewall"]) ? $context["button_viewall"] : null);
                echo "</a>
\t      \t\t\t\t\t</div>
\t      \t\t\t\t</div>
\t      \t\t\t</li>
\t      \t\t\t";
            }
            // line 55
            echo "\t      \t\t\t";
            if ((isset($context["show_total_wishlist"]) ? $context["show_total_wishlist"] : null)) {
                // line 56
                echo "\t      \t\t\t<li>
\t      \t\t\t\t<div class=\"inner-stats\">
\t\t      \t\t\t\t<div class=\"mpacc-stats-icon\"><i class=\"fa fa-heart\" aria-hidden=\"true\"></i></div>
\t\t      \t\t\t\t<div class=\"stats-text\">
\t\t\t      \t\t\t\t<div class=\"totals\">
\t\t\t      \t\t\t\t\t<div class=\"border\"></div>
\t\t\t      \t\t\t\t\t<h3>";
                // line 62
                echo (isset($context["title_total_wishlist"]) ? $context["title_total_wishlist"] : null);
                echo "</h3>
\t\t\t      \t\t\t\t</div>
\t\t\t      \t\t\t\t<h2 class=\"hovicon effect-4 sub-b\"><span class=\"count\">";
                // line 64
                echo (isset($context["total_wishlist"]) ? $context["total_wishlist"] : null);
                echo "</span> <small>";
                echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
                echo "</small></h2>
\t\t\t      \t\t\t\t<a href=\"";
                // line 65
                echo (isset($context["wishlist_link"]) ? $context["wishlist_link"] : null);
                echo "\" class=\"btn-vw\">";
                echo (isset($context["button_viewall"]) ? $context["button_viewall"] : null);
                echo "</a>
\t\t\t      \t\t\t</div>\t
\t      \t\t\t\t</div>
\t      \t\t\t</li>
\t      \t\t\t";
            }
            // line 70
            echo "\t      \t\t\t";
            if ((isset($context["show_total_rewardpoints"]) ? $context["show_total_rewardpoints"] : null)) {
                // line 71
                echo "\t      \t\t\t<li>
\t      \t\t\t\t<div class=\"inner-stats\">
\t\t      \t\t\t\t<div class=\"mpacc-stats-icon\"><i class=\"fa fa-gift\" aria-hidden=\"true\"></i></div>
\t\t      \t\t\t\t<div class=\"stats-text\">
\t\t\t      \t\t\t\t<div class=\"totals\">
\t\t\t      \t\t\t\t\t<div class=\"border\"></div>
\t\t\t      \t\t\t\t\t<h3>";
                // line 77
                echo (isset($context["title_total_reward_points"]) ? $context["title_total_reward_points"] : null);
                echo "</h3>
\t\t\t      \t\t\t\t</div>
\t\t\t      \t\t\t\t<h2 class=\"hovicon effect-4 sub-b\"><span class=\"count\">";
                // line 79
                echo (isset($context["total_reward_points"]) ? $context["total_reward_points"] : null);
                echo "</span> <small>";
                echo (isset($context["text_reward_points"]) ? $context["text_reward_points"] : null);
                echo "</small></h2>
\t\t\t      \t\t\t\t<a href=\"";
                // line 80
                echo (isset($context["reward_points_link"]) ? $context["reward_points_link"] : null);
                echo "\" class=\"btn-vw\">";
                echo (isset($context["button_viewall"]) ? $context["button_viewall"] : null);
                echo "</a>
\t\t\t      \t\t\t</div>\t
\t      \t\t\t\t</div>
\t      \t\t\t</li>
\t      \t\t\t";
            }
            // line 85
            echo "\t      \t\t\t";
            if ((isset($context["show_total_downloads"]) ? $context["show_total_downloads"] : null)) {
                // line 86
                echo "\t      \t\t\t<li>
\t      \t\t\t\t<div class=\"inner-stats\">
\t\t      \t\t\t\t<div class=\"mpacc-stats-icon\"><i class=\"fa fa-download\" aria-hidden=\"true\"></i></div>
\t\t      \t\t\t\t<div class=\"stats-text\">
\t\t\t      \t\t\t\t<div class=\"totals\">
\t\t\t      \t\t\t\t\t<div class=\"border\"></div>
\t\t\t      \t\t\t\t\t<h3>";
                // line 92
                echo (isset($context["title_total_downloads"]) ? $context["title_total_downloads"] : null);
                echo "</h3>
\t\t\t      \t\t\t\t</div>
\t\t\t      \t\t\t\t<h2 class=\"hovicon effect-4 sub-b\"><span class=\"count\">";
                // line 94
                echo (isset($context["total_downloads"]) ? $context["total_downloads"] : null);
                echo "</span> <small>";
                echo (isset($context["text_downloads"]) ? $context["text_downloads"] : null);
                echo "</small></h2>
\t\t\t      \t\t\t\t<a href=\"";
                // line 95
                echo (isset($context["download_link"]) ? $context["download_link"] : null);
                echo "\" class=\"btn-vw\">";
                echo (isset($context["button_viewall"]) ? $context["button_viewall"] : null);
                echo "</a>
\t\t\t      \t\t\t</div>\t
\t      \t\t\t\t</div>
\t      \t\t\t</li>
\t      \t\t\t";
            }
            // line 100
            echo "\t      \t\t</ul>
\t      \t</div>
\t      \t";
        }
        // line 103
        echo "\t      \t<div class=\"mpacc-orders-links\">
\t      \t\t";
        // line 104
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 105
            echo "\t\t      \t<div class=\"mpacc-other-links\">
\t\t      \t\t<ul class=\"list-unstyled\">
\t\t      \t\t\t";
            // line 107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 108
                echo "\t\t      \t\t\t<li><a href=\"";
                echo $this->getAttribute($context["link"], "link", array());
                echo "\" class=\"foo\"><i class=\"fa ";
                echo $this->getAttribute($context["link"], "icon", array());
                echo "\" aria-hiddem=\"true\"></i><span>";
                echo $this->getAttribute($context["link"], "title", array());
                echo "</span></a></li>
\t\t      \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "\t\t      \t\t</ul>
\t\t      \t</div>
\t\t      \t";
        }
        // line 113
        echo "\t\t      \t";
        if (((isset($context["orders"]) ? $context["orders"] : null) && (isset($context["show_recent_orders"]) ? $context["show_recent_orders"] : null))) {
            // line 114
            echo "\t\t      \t<div class=\"mpacc-orders\">
\t\t      \t\t<h3>";
            // line 115
            echo (isset($context["title_recent_orders"]) ? $context["title_recent_orders"] : null);
            echo "</h3>
\t\t      \t\t";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 117
                echo "\t\t      \t\t<div class=\"table-responsive\">
\t\t\t      \t\t<table class=\"table mpmain-table\">
\t\t\t\t          \t<tbody>
\t\t\t          \t\t<tr>
\t\t\t\t\t          \t<td colspan=\"2\">
\t\t\t\t\t          \t  <table class=\"table\">\t
\t\t\t\t\t\t\t          <thead>
\t\t\t\t\t\t\t          \t<tr>
\t\t\t\t\t      \t\t\t\t\t<th>";
                // line 125
                echo (isset($context["coulmn_order_id"]) ? $context["coulmn_order_id"] : null);
                echo "</th>
\t\t\t\t\t      \t\t\t\t\t<th class=\"text-center\">";
                // line 126
                echo (isset($context["coulmn_status"]) ? $context["coulmn_status"] : null);
                echo "</th>
\t\t\t\t\t      \t\t\t\t\t<th class=\"text-center\">";
                // line 127
                echo (isset($context["coulmn_total"]) ? $context["coulmn_total"] : null);
                echo "</th>
\t\t\t\t\t      \t\t\t\t\t<th class=\"text-center\">";
                // line 128
                echo (isset($context["coulmn_date"]) ? $context["coulmn_date"] : null);
                echo "</th>
\t\t\t\t\t      \t\t\t\t\t<th class=\"text-right\">";
                // line 129
                echo (isset($context["coulmn_action"]) ? $context["coulmn_action"] : null);
                echo "</th>
\t\t\t\t\t      \t\t\t\t</tr>
\t\t\t\t\t\t\t          </thead>
\t\t\t\t\t\t\t          <tbody>
\t\t\t\t\t\t\t            <tr>
\t\t\t\t\t      \t\t\t\t\t<td>#";
                // line 134
                echo $this->getAttribute($context["order"], "order_id", array());
                echo "</td>
\t\t\t\t\t      \t\t\t\t\t<td class=\"text-center\"><span class=\"mp-complete\">";
                // line 135
                echo $this->getAttribute($context["order"], "status", array());
                echo "</span></td>
\t\t\t\t\t      \t\t\t\t\t<td class=\"text-center\">";
                // line 136
                echo $this->getAttribute($context["order"], "total", array());
                echo "</td>
\t\t\t\t\t      \t\t\t\t\t<td class=\"text-center\">";
                // line 137
                echo $this->getAttribute($context["order"], "date_added", array());
                echo "</td>
\t\t\t\t\t      \t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t      \t\t\t\t\t\t<a  class=\"btn button\" class=\"prdct-detail\" data-toggle=\"collapse\" data-target=\"#prdct-detail-";
                // line 139
                echo $this->getAttribute($context["order"], "order_id", array());
                echo "\" role=\"button\" aria-expanded=\"true\"><i class=\"fa fa-eye\"></i></a> 
\t\t\t\t\t      \t\t\t\t\t</td>
\t\t\t\t\t      \t\t\t\t</tr>
\t\t\t\t\t\t\t          </tbody>
\t\t\t\t\t\t          </table>
\t\t\t\t\t\t        </td>
\t\t\t\t\t        </tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t  <td>
\t\t\t\t\t\t\t    <div id=\"prdct-detail-";
                // line 148
                echo $this->getAttribute($context["order"], "order_id", array());
                echo "\" class=\"panel-collapse collapse\">
\t\t\t\t\t\t\t      <table class=\"table complete-order\">
\t\t\t\t\t\t\t        <tbody>
\t\t\t\t\t\t\t          <tr>
\t\t\t\t\t\t\t            <td>
\t\t\t\t\t\t\t              <table class=\"table table-condensed\">
\t\t\t\t\t\t\t                <tbody>
\t\t\t\t\t\t\t                \t";
                // line 155
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["order"], "products", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 156
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <img src=\"";
                    // line 159
                    echo $this->getAttribute($context["product"], "image", array());
                    echo "\" class=\"img-responsiev\" alt=\"\" title=\"";
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "\" width=\"50\" height=\"50\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left caption acc-pro-name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"name\">";
                    // line 162
                    echo $this->getAttribute($context["product"], "name", array());
                    echo "</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"price\">";
                    // line 163
                    echo (isset($context["text_price"]) ? $context["text_price"] : null);
                    echo ": <span>";
                    echo $this->getAttribute($context["product"], "price", array());
                    echo "</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t  <div class=\"quantity\">";
                    // line 164
                    echo (isset($context["text_quantity"]) ? $context["text_quantity"] : null);
                    echo ": <span>";
                    echo $this->getAttribute($context["product"], "quantity", array());
                    echo "</span></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t  <a href=\"";
                    // line 167
                    echo $this->getAttribute($context["product"], "reorder", array());
                    echo "\" class=\"mp-button\">";
                    echo (isset($context["button_reorder"]) ? $context["button_reorder"] : null);
                    echo "</a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t  <a href=\"";
                    // line 168
                    echo $this->getAttribute($context["product"], "return", array());
                    echo "\" class=\"mp-return\">";
                    echo (isset($context["button_return"]) ? $context["button_return"] : null);
                    echo "</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 172
                echo "\t\t\t\t\t\t\t                </tbody>
\t\t\t\t\t\t\t              </table>
\t\t\t\t\t\t\t            </td>
\t\t\t\t\t\t\t            <td width=\"25%\" class=\"text-right\">
\t\t\t\t\t\t\t            <a href=\"";
                // line 176
                echo $this->getAttribute($context["order"], "view", array());
                echo "\" class=\"mp-button\">";
                echo (isset($context["button_order_details"]) ? $context["button_order_details"] : null);
                echo "</a>
\t\t\t\t\t\t\t            </td>
\t\t\t\t\t\t\t          </tr>
\t\t\t\t\t\t\t        </tbody>
\t\t\t\t\t\t\t      </table>
\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t  </td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t        \t</tbody>
\t\t\t\t    \t</table>
\t\t\t    \t</div>
\t\t\t    \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "\t\t      \t</div>
\t\t      \t";
        }
        // line 190
        echo "\t\t    </div>
\t      </div>
      ";
        // line 192
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
      ";
        // line 193
        echo ((((isset($context["themeclass"]) ? $context["themeclass"] : null) == "default-account")) ? ((isset($context["column_right"]) ? $context["column_right"] : null)) : (""));
        echo "</div>
<script type=\"text/javascript\">
/* \$('.count').each(function () {
    \$(this).prop('Counter',0).animate({
        Counter: \$(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            \$(this).text(Math.ceil(now));
        }
    });
}); */
</script>
<style type=\"text/css\">
";
        // line 208
        if ((isset($context["acc_stats_icon_color"]) ? $context["acc_stats_icon_color"] : null)) {
            // line 209
            echo "\t.mpacc-stats .mpacc-stats-icon i{
\t\tcolor: ";
            // line 210
            echo (isset($context["acc_stats_icon_color"]) ? $context["acc_stats_icon_color"] : null);
            echo ";
\t}
";
        }
        // line 213
        if (((isset($context["acc_stats_heading_bg"]) ? $context["acc_stats_heading_bg"] : null) || (isset($context["acc_stats_heading_color"]) ? $context["acc_stats_heading_color"] : null))) {
            // line 214
            echo ".mpacc-stats ul li h3{
\t";
            // line 215
            if ((isset($context["acc_stats_heading_bg"]) ? $context["acc_stats_heading_bg"] : null)) {
                // line 216
                echo "\tbackground: ";
                echo (isset($context["acc_stats_heading_bg"]) ? $context["acc_stats_heading_bg"] : null);
                echo ";
\t";
            }
            // line 218
            echo "
\t";
            // line 219
            if ((isset($context["acc_stats_heading_color"]) ? $context["acc_stats_heading_color"] : null)) {
                // line 220
                echo "\tcolor: ";
                echo (isset($context["acc_stats_heading_color"]) ? $context["acc_stats_heading_color"] : null);
                echo ";
\t";
            }
            // line 222
            echo "}
";
        }
        // line 224
        echo "
";
        // line 225
        if ((isset($context["acc_stats_bg"]) ? $context["acc_stats_bg"] : null)) {
            // line 226
            echo ".mpacc-stats ul li .inner-stats{
\tbackground: ";
            // line 227
            echo (isset($context["acc_stats_bg"]) ? $context["acc_stats_bg"] : null);
            echo ";
}
";
        }
        // line 230
        echo "
";
        // line 231
        if ((isset($context["acc_stats_icon_border_color"]) ? $context["acc_stats_icon_border_color"] : null)) {
            // line 232
            echo ".hovicon.effect-4{
\tbox-shadow: 0 0 0 4px ";
            // line 233
            echo (isset($context["acc_stats_icon_border_color"]) ? $context["acc_stats_icon_border_color"] : null);
            echo ";
}
.hovicon.effect-4::after{
\tborder-color: ";
            // line 236
            echo (isset($context["acc_stats_icon_border_color"]) ? $context["acc_stats_icon_border_color"] : null);
            echo ";
}
";
        }
        // line 239
        echo "
";
        // line 240
        if ((isset($context["acc_stats_text_color"]) ? $context["acc_stats_text_color"] : null)) {
            // line 241
            echo ".mpacc-stats .inner-stats .stats-text h2, .mpacc-stats ul li h2 small, .mpacc-stats ul li .btn-vw{
\tcolor: ";
            // line 242
            echo (isset($context["acc_stats_text_color"]) ? $context["acc_stats_text_color"] : null);
            echo ";
}
";
        }
        // line 245
        echo "
";
        // line 246
        if ((isset($context["acc_other_links_border_color"]) ? $context["acc_other_links_border_color"] : null)) {
            // line 247
            echo ".mpacc-other-links ul li a{
\tborder-color: ";
            // line 248
            echo (isset($context["acc_other_links_border_color"]) ? $context["acc_other_links_border_color"] : null);
            echo ";
}
";
        }
        // line 251
        echo "
";
        // line 252
        if ((isset($context["acc_other_links_border_hovcolor"]) ? $context["acc_other_links_border_hovcolor"] : null)) {
            // line 253
            echo ".foo::before, .foo::after{
\tborder-color: ";
            // line 254
            echo (isset($context["acc_other_links_border_hovcolor"]) ? $context["acc_other_links_border_hovcolor"] : null);
            echo ";
}
";
        }
        // line 257
        echo "
";
        // line 258
        if (((isset($context["acc_other_links_border_hovcolor"]) ? $context["acc_other_links_border_hovcolor"] : null) || (isset($context["acc_other_links_icon_color"]) ? $context["acc_other_links_icon_color"] : null))) {
            // line 259
            echo ".mpacc-other-links ul li i{
\t";
            // line 260
            if ((isset($context["acc_other_links_border_hovcolor"]) ? $context["acc_other_links_border_hovcolor"] : null)) {
                // line 261
                echo "\tbackground: ";
                echo (isset($context["acc_other_links_border_hovcolor"]) ? $context["acc_other_links_border_hovcolor"] : null);
                echo ";
\t";
            }
            // line 263
            echo "
\t";
            // line 264
            if ((isset($context["acc_other_links_icon_color"]) ? $context["acc_other_links_icon_color"] : null)) {
                // line 265
                echo "\tcolor: ";
                echo (isset($context["acc_other_links_icon_color"]) ? $context["acc_other_links_icon_color"] : null);
                echo ";
\t";
            }
            // line 267
            echo "}
";
        }
        // line 269
        echo "
";
        // line 270
        if ((isset($context["acc_other_links_text_color"]) ? $context["acc_other_links_text_color"] : null)) {
            // line 271
            echo ".mpacc-other-links ul li a span{
\tcolor: ";
            // line 272
            echo (isset($context["acc_other_links_text_color"]) ? $context["acc_other_links_text_color"] : null);
            echo ";
}
";
        }
        // line 275
        echo "
";
        // line 276
        if (((isset($context["acc_table_heading_bg"]) ? $context["acc_table_heading_bg"] : null) || (isset($context["acc_table_heading_color"]) ? $context["acc_table_heading_color"] : null))) {
            // line 277
            echo ".mpacc-orders h3{
\t";
            // line 278
            if ((isset($context["acc_table_heading_bg"]) ? $context["acc_table_heading_bg"] : null)) {
                // line 279
                echo "\tbackground: ";
                echo (isset($context["acc_table_heading_bg"]) ? $context["acc_table_heading_bg"] : null);
                echo ";
\t";
            }
            // line 281
            echo "
\t";
            // line 282
            if ((isset($context["acc_table_heading_color"]) ? $context["acc_table_heading_color"] : null)) {
                // line 283
                echo "\tcolor: ";
                echo (isset($context["acc_table_heading_color"]) ? $context["acc_table_heading_color"] : null);
                echo ";
\t";
            }
            // line 285
            echo "}
";
        }
        // line 287
        echo "
";
        // line 288
        if ((isset($context["acc_table_text_color"]) ? $context["acc_table_text_color"] : null)) {
            // line 289
            echo ".mpacc-orders .mpmain-table{
\tcolor: ";
            // line 290
            echo (isset($context["acc_table_text_color"]) ? $context["acc_table_text_color"] : null);
            echo ";
}
";
        }
        // line 293
        echo "
";
        // line 294
        if ((isset($context["acc_table_thead_bodr_color"]) ? $context["acc_table_thead_bodr_color"] : null)) {
            // line 295
            echo ".mpacc-orders .table > thead > tr > th{
\tborder-color: ";
            // line 296
            echo (isset($context["acc_table_thead_bodr_color"]) ? $context["acc_table_thead_bodr_color"] : null);
            echo " !important;
}
";
        }
        // line 299
        echo "
";
        // line 300
        if (((isset($context["order_label_complete_bg"]) ? $context["order_label_complete_bg"] : null) || (isset($context["order_label_complete_color"]) ? $context["order_label_complete_color"] : null))) {
            // line 301
            echo ".mp-complete{
\t";
            // line 302
            if ((isset($context["order_label_complete_bg"]) ? $context["order_label_complete_bg"] : null)) {
                // line 303
                echo "\tbackground: ";
                echo (isset($context["order_label_complete_bg"]) ? $context["order_label_complete_bg"] : null);
                echo ";
\t";
            }
            // line 305
            echo "
\t";
            // line 306
            if ((isset($context["order_label_complete_color"]) ? $context["order_label_complete_color"] : null)) {
                // line 307
                echo "\tcolor: ";
                echo (isset($context["order_label_complete_color"]) ? $context["order_label_complete_color"] : null);
                echo ";
\t";
            }
            // line 309
            echo "}
";
        }
        // line 311
        echo "
";
        // line 312
        if (((isset($context["order_table_complete_bg"]) ? $context["order_table_complete_bg"] : null) || (isset($context["order_table_complete_color"]) ? $context["order_table_complete_color"] : null))) {
            // line 313
            echo ".mpacc-orders .complete-order{
\t";
            // line 314
            if ((isset($context["order_table_complete_bg"]) ? $context["order_table_complete_bg"] : null)) {
                // line 315
                echo "\tbackground: ";
                echo (isset($context["order_table_complete_bg"]) ? $context["order_table_complete_bg"] : null);
                echo " !important;
\t";
            }
            // line 317
            echo "
\t";
            // line 318
            if ((isset($context["order_table_complete_color"]) ? $context["order_table_complete_color"] : null)) {
                // line 319
                echo "\tcolor: ";
                echo (isset($context["order_table_complete_color"]) ? $context["order_table_complete_color"] : null);
                echo ";
\t";
            }
            // line 321
            echo "}
";
        }
        // line 323
        echo "
";
        // line 324
        if (((isset($context["order_innertable_color"]) ? $context["order_innertable_color"] : null) || (isset($context["order_innertable_bordercolor"]) ? $context["order_innertable_bordercolor"] : null))) {
            // line 325
            echo ".mpacc-orders .mpmain-table .mp-button, .mpacc-orders .mpmain-table .mp-return{
\t";
            // line 326
            if ((isset($context["order_innertable_color"]) ? $context["order_innertable_color"] : null)) {
                // line 327
                echo "\tcolor: ";
                echo (isset($context["order_innertable_color"]) ? $context["order_innertable_color"] : null);
                echo ";
\t";
            }
            // line 329
            echo "
\t";
            // line 330
            if ((isset($context["order_innertable_bordercolor"]) ? $context["order_innertable_bordercolor"] : null)) {
                // line 331
                echo "\tborder-color: ";
                echo (isset($context["order_innertable_bordercolor"]) ? $context["order_innertable_bordercolor"] : null);
                echo ";
\t";
            }
            // line 333
            echo "}
";
        }
        // line 335
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "
</style>
</div>
";
        // line 338
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/account/mp_accountpage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  806 => 338,  800 => 335,  796 => 333,  790 => 331,  788 => 330,  785 => 329,  779 => 327,  777 => 326,  774 => 325,  772 => 324,  769 => 323,  765 => 321,  759 => 319,  757 => 318,  754 => 317,  748 => 315,  746 => 314,  743 => 313,  741 => 312,  738 => 311,  734 => 309,  728 => 307,  726 => 306,  723 => 305,  717 => 303,  715 => 302,  712 => 301,  710 => 300,  707 => 299,  701 => 296,  698 => 295,  696 => 294,  693 => 293,  687 => 290,  684 => 289,  682 => 288,  679 => 287,  675 => 285,  669 => 283,  667 => 282,  664 => 281,  658 => 279,  656 => 278,  653 => 277,  651 => 276,  648 => 275,  642 => 272,  639 => 271,  637 => 270,  634 => 269,  630 => 267,  624 => 265,  622 => 264,  619 => 263,  613 => 261,  611 => 260,  608 => 259,  606 => 258,  603 => 257,  597 => 254,  594 => 253,  592 => 252,  589 => 251,  583 => 248,  580 => 247,  578 => 246,  575 => 245,  569 => 242,  566 => 241,  564 => 240,  561 => 239,  555 => 236,  549 => 233,  546 => 232,  544 => 231,  541 => 230,  535 => 227,  532 => 226,  530 => 225,  527 => 224,  523 => 222,  517 => 220,  515 => 219,  512 => 218,  506 => 216,  504 => 215,  501 => 214,  499 => 213,  493 => 210,  490 => 209,  488 => 208,  470 => 193,  466 => 192,  462 => 190,  458 => 188,  438 => 176,  432 => 172,  420 => 168,  414 => 167,  406 => 164,  400 => 163,  396 => 162,  388 => 159,  383 => 156,  379 => 155,  369 => 148,  357 => 139,  352 => 137,  348 => 136,  344 => 135,  340 => 134,  332 => 129,  328 => 128,  324 => 127,  320 => 126,  316 => 125,  306 => 117,  302 => 116,  298 => 115,  295 => 114,  292 => 113,  287 => 110,  274 => 108,  270 => 107,  266 => 105,  264 => 104,  261 => 103,  256 => 100,  246 => 95,  240 => 94,  235 => 92,  227 => 86,  224 => 85,  214 => 80,  208 => 79,  203 => 77,  195 => 71,  192 => 70,  182 => 65,  176 => 64,  171 => 62,  163 => 56,  160 => 55,  150 => 50,  144 => 49,  139 => 47,  131 => 41,  128 => 40,  118 => 35,  112 => 34,  107 => 32,  99 => 26,  97 => 25,  93 => 23,  91 => 22,  86 => 20,  79 => 19,  76 => 18,  73 => 17,  70 => 16,  67 => 15,  64 => 14,  61 => 13,  59 => 12,  54 => 11,  48 => 9,  46 => 8,  43 => 7,  32 => 5,  28 => 4,  23 => 2,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="container" class="container {{ themeclass == 'journal-account' ? 'j-container' : '' }}">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if success %}*/
/*   <div class="alert alert-success"><i class="fa fa-check-circle"></i> {{ success }}</div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*     	{{ themeclass == 'journal-account' ? column_right : '' }}*/
/*      	<div class="mpacc-dashboard">*/
/*      		{% if show_total_orders or show_total_balance or show_total_wishlist or show_total_rewardpoints or show_total_downloads %}*/
/* 	      	<div class="mpacc-stats">*/
/* 	      		<ul class="list-unstyled">*/
/* 	      			{% if show_total_orders %}*/
/* 	      			<li>*/
/* 	      				<div class="inner-stats">*/
/* 		      				<div class="mpacc-stats-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>*/
/* 		      				<div class="stats-text">*/
/* 			      				<div class="totals">*/
/* 			      					<div class="border"></div>*/
/* 			      					<h3>{{ title_total_orders }}</h3>*/
/* 			      				</div>*/
/* 			      				<h2 class="hovicon effect-4 sub-b"><span class="count">{{ total_orders }}</span> <small>{{ text_orders }}</small></h2>*/
/* 			      				<a href="{{ order_link }}" class="btn-vw">{{ button_viewall }}</a>*/
/* 			      			</div>*/
/* 	      				</div>*/
/* 	      			</li>*/
/* 	      			{% endif %}*/
/* 	      			{% if show_total_balance %}*/
/* 	      			<li>*/
/* 	      				<div class="inner-stats">*/
/* 		      				<div class="mpacc-stats-icon"><i class="fa fa-usd" aria-hidden="true"></i></div>*/
/* 		      				<div class="stats-text">*/
/* 			      				<div class="totals">*/
/* 			      					<div class="border"></div>*/
/* 			      					<h3>{{ title_total_transaction }}</h3>*/
/* 			      				</div>*/
/* 			      				<h2 class="hovicon effect-4 sub-b"><span class="">{{ total_transactions }}</span> <small>{{ text_balance }}</small></h2>*/
/* 			      				<a href="{{ transaction_link }}" class="btn-vw">{{ button_viewall }}</a>*/
/* 	      					</div>*/
/* 	      				</div>*/
/* 	      			</li>*/
/* 	      			{% endif %}*/
/* 	      			{% if show_total_wishlist %}*/
/* 	      			<li>*/
/* 	      				<div class="inner-stats">*/
/* 		      				<div class="mpacc-stats-icon"><i class="fa fa-heart" aria-hidden="true"></i></div>*/
/* 		      				<div class="stats-text">*/
/* 			      				<div class="totals">*/
/* 			      					<div class="border"></div>*/
/* 			      					<h3>{{ title_total_wishlist }}</h3>*/
/* 			      				</div>*/
/* 			      				<h2 class="hovicon effect-4 sub-b"><span class="count">{{ total_wishlist }}</span> <small>{{ text_wishlist }}</small></h2>*/
/* 			      				<a href="{{ wishlist_link }}" class="btn-vw">{{ button_viewall }}</a>*/
/* 			      			</div>	*/
/* 	      				</div>*/
/* 	      			</li>*/
/* 	      			{% endif %}*/
/* 	      			{% if show_total_rewardpoints %}*/
/* 	      			<li>*/
/* 	      				<div class="inner-stats">*/
/* 		      				<div class="mpacc-stats-icon"><i class="fa fa-gift" aria-hidden="true"></i></div>*/
/* 		      				<div class="stats-text">*/
/* 			      				<div class="totals">*/
/* 			      					<div class="border"></div>*/
/* 			      					<h3>{{ title_total_reward_points }}</h3>*/
/* 			      				</div>*/
/* 			      				<h2 class="hovicon effect-4 sub-b"><span class="count">{{ total_reward_points }}</span> <small>{{ text_reward_points }}</small></h2>*/
/* 			      				<a href="{{ reward_points_link }}" class="btn-vw">{{ button_viewall }}</a>*/
/* 			      			</div>	*/
/* 	      				</div>*/
/* 	      			</li>*/
/* 	      			{% endif %}*/
/* 	      			{% if show_total_downloads %}*/
/* 	      			<li>*/
/* 	      				<div class="inner-stats">*/
/* 		      				<div class="mpacc-stats-icon"><i class="fa fa-download" aria-hidden="true"></i></div>*/
/* 		      				<div class="stats-text">*/
/* 			      				<div class="totals">*/
/* 			      					<div class="border"></div>*/
/* 			      					<h3>{{ title_total_downloads }}</h3>*/
/* 			      				</div>*/
/* 			      				<h2 class="hovicon effect-4 sub-b"><span class="count">{{ total_downloads }}</span> <small>{{ text_downloads }}</small></h2>*/
/* 			      				<a href="{{ download_link }}" class="btn-vw">{{ button_viewall }}</a>*/
/* 			      			</div>	*/
/* 	      				</div>*/
/* 	      			</li>*/
/* 	      			{% endif %}*/
/* 	      		</ul>*/
/* 	      	</div>*/
/* 	      	{% endif %}*/
/* 	      	<div class="mpacc-orders-links">*/
/* 	      		{% if links %}*/
/* 		      	<div class="mpacc-other-links">*/
/* 		      		<ul class="list-unstyled">*/
/* 		      			{% for link in links %}*/
/* 		      			<li><a href="{{ link.link }}" class="foo"><i class="fa {{ link.icon }}" aria-hiddem="true"></i><span>{{ link.title }}</span></a></li>*/
/* 		      			{% endfor %}*/
/* 		      		</ul>*/
/* 		      	</div>*/
/* 		      	{% endif %}*/
/* 		      	{% if orders and show_recent_orders %}*/
/* 		      	<div class="mpacc-orders">*/
/* 		      		<h3>{{ title_recent_orders }}</h3>*/
/* 		      		{% for order in orders %}*/
/* 		      		<div class="table-responsive">*/
/* 			      		<table class="table mpmain-table">*/
/* 				          	<tbody>*/
/* 			          		<tr>*/
/* 					          	<td colspan="2">*/
/* 					          	  <table class="table">	*/
/* 							          <thead>*/
/* 							          	<tr>*/
/* 					      					<th>{{ coulmn_order_id }}</th>*/
/* 					      					<th class="text-center">{{ coulmn_status }}</th>*/
/* 					      					<th class="text-center">{{ coulmn_total }}</th>*/
/* 					      					<th class="text-center">{{ coulmn_date }}</th>*/
/* 					      					<th class="text-right">{{ coulmn_action }}</th>*/
/* 					      				</tr>*/
/* 							          </thead>*/
/* 							          <tbody>*/
/* 							            <tr>*/
/* 					      					<td>#{{ order.order_id }}</td>*/
/* 					      					<td class="text-center"><span class="mp-complete">{{ order.status }}</span></td>*/
/* 					      					<td class="text-center">{{ order.total }}</td>*/
/* 					      					<td class="text-center">{{ order.date_added }}</td>*/
/* 					      					<td class="text-right">*/
/* 					      						<a  class="btn button" class="prdct-detail" data-toggle="collapse" data-target="#prdct-detail-{{ order.order_id }}" role="button" aria-expanded="true"><i class="fa fa-eye"></i></a> */
/* 					      					</td>*/
/* 					      				</tr>*/
/* 							          </tbody>*/
/* 						          </table>*/
/* 						        </td>*/
/* 					        </tr>*/
/* 							<tr>*/
/* 							  <td>*/
/* 							    <div id="prdct-detail-{{ order.order_id }}" class="panel-collapse collapse">*/
/* 							      <table class="table complete-order">*/
/* 							        <tbody>*/
/* 							          <tr>*/
/* 							            <td>*/
/* 							              <table class="table table-condensed">*/
/* 							                <tbody>*/
/* 							                	{% for product in order.products %}*/
/* 												<tr>*/
/* 													<td></td>*/
/* 													<td class="text-left">*/
/* 													  <img src="{{ product.image }}" class="img-responsiev" alt="" title="{{ product.name }}" width="50" height="50">*/
/* 													</td>*/
/* 													<td class="text-left caption acc-pro-name">*/
/* 													  <div class="name">{{ product.name }}</div>*/
/* 													  <div class="price">{{ text_price }}: <span>{{ product.price }}</span></div>*/
/* 													  <div class="quantity">{{ text_quantity }}: <span>{{ product.quantity }}</span></div>*/
/* 													</td>*/
/* 													<td class="text-left">*/
/* 													  <a href="{{ product.reorder }}" class="mp-button">{{ button_reorder }}</a> */
/* 													  <a href="{{ product.return }}" class="mp-return">{{ button_return }}</a>*/
/* 													</td>*/
/* 												</tr>*/
/* 												{% endfor %}*/
/* 							                </tbody>*/
/* 							              </table>*/
/* 							            </td>*/
/* 							            <td width="25%" class="text-right">*/
/* 							            <a href="{{ order.view }}" class="mp-button">{{ button_order_details }}</a>*/
/* 							            </td>*/
/* 							          </tr>*/
/* 							        </tbody>*/
/* 							      </table>*/
/* 							    </div>*/
/* 							  </td>*/
/* 							</tr>*/
/* 				        	</tbody>*/
/* 				    	</table>*/
/* 			    	</div>*/
/* 			    	{% endfor %}*/
/* 		      	</div>*/
/* 		      	{% endif %}*/
/* 		    </div>*/
/* 	      </div>*/
/*       {{ content_bottom }}</div>*/
/*       {{ themeclass == 'default-account' ? column_right : '' }}</div>*/
/* <script type="text/javascript">*/
/* /* $('.count').each(function () {*/
/*     $(this).prop('Counter',0).animate({*/
/*         Counter: $(this).text()*/
/*     }, {*/
/*         duration: 4000,*/
/*         easing: 'swing',*/
/*         step: function (now) {*/
/*             $(this).text(Math.ceil(now));*/
/*         }*/
/*     });*/
/* }); *//* */
/* </script>*/
/* <style type="text/css">*/
/* {% if acc_stats_icon_color %}*/
/* 	.mpacc-stats .mpacc-stats-icon i{*/
/* 		color: {{ acc_stats_icon_color }};*/
/* 	}*/
/* {% endif %}*/
/* {% if acc_stats_heading_bg or acc_stats_heading_color %}*/
/* .mpacc-stats ul li h3{*/
/* 	{% if acc_stats_heading_bg %}*/
/* 	background: {{ acc_stats_heading_bg }};*/
/* 	{% endif %}*/
/* */
/* 	{% if acc_stats_heading_color %}*/
/* 	color: {{ acc_stats_heading_color }};*/
/* 	{% endif %}*/
/* }*/
/* {% endif %}*/
/* */
/* {% if acc_stats_bg %}*/
/* .mpacc-stats ul li .inner-stats{*/
/* 	background: {{ acc_stats_bg }};*/
/* }*/
/* {% endif %}*/
/* */
/* {% if acc_stats_icon_border_color %}*/
/* .hovicon.effect-4{*/
/* 	box-shadow: 0 0 0 4px {{ acc_stats_icon_border_color }};*/
/* }*/
/* .hovicon.effect-4::after{*/
/* 	border-color: {{ acc_stats_icon_border_color }};*/
/* }*/
/* {% endif %}*/
/* */
/* {% if acc_stats_text_color %}*/
/* .mpacc-stats .inner-stats .stats-text h2, .mpacc-stats ul li h2 small, .mpacc-stats ul li .btn-vw{*/
/* 	color: {{ acc_stats_text_color }};*/
/* }*/
/* {% endif %}*/
/* */
/* {% if acc_other_links_border_color %}*/
/* .mpacc-other-links ul li a{*/
/* 	border-color: {{ acc_other_links_border_color }};*/
/* }*/
/* {% endif %}*/
/* */
/* {% if acc_other_links_border_hovcolor %}*/
/* .foo::before, .foo::after{*/
/* 	border-color: {{ acc_other_links_border_hovcolor }};*/
/* }*/
/* {% endif %}*/
/* */
/* {% if acc_other_links_border_hovcolor or acc_other_links_icon_color %}*/
/* .mpacc-other-links ul li i{*/
/* 	{% if acc_other_links_border_hovcolor %}*/
/* 	background: {{ acc_other_links_border_hovcolor }};*/
/* 	{% endif %}*/
/* */
/* 	{% if acc_other_links_icon_color %}*/
/* 	color: {{ acc_other_links_icon_color }};*/
/* 	{% endif %}*/
/* }*/
/* {% endif %}*/
/* */
/* {% if acc_other_links_text_color %}*/
/* .mpacc-other-links ul li a span{*/
/* 	color: {{ acc_other_links_text_color }};*/
/* }*/
/* {% endif %}*/
/* */
/* {% if acc_table_heading_bg or acc_table_heading_color %}*/
/* .mpacc-orders h3{*/
/* 	{% if acc_table_heading_bg %}*/
/* 	background: {{ acc_table_heading_bg }};*/
/* 	{% endif %}*/
/* */
/* 	{% if acc_table_heading_color %}*/
/* 	color: {{ acc_table_heading_color }};*/
/* 	{% endif %}*/
/* }*/
/* {% endif %}*/
/* */
/* {% if acc_table_text_color %}*/
/* .mpacc-orders .mpmain-table{*/
/* 	color: {{ acc_table_text_color }};*/
/* }*/
/* {% endif %}*/
/* */
/* {% if acc_table_thead_bodr_color %}*/
/* .mpacc-orders .table > thead > tr > th{*/
/* 	border-color: {{ acc_table_thead_bodr_color }} !important;*/
/* }*/
/* {% endif %}*/
/* */
/* {% if order_label_complete_bg or order_label_complete_color %}*/
/* .mp-complete{*/
/* 	{% if order_label_complete_bg %}*/
/* 	background: {{ order_label_complete_bg }};*/
/* 	{% endif %}*/
/* */
/* 	{% if order_label_complete_color %}*/
/* 	color: {{ order_label_complete_color }};*/
/* 	{% endif %}*/
/* }*/
/* {% endif %}*/
/* */
/* {% if order_table_complete_bg or order_table_complete_color %}*/
/* .mpacc-orders .complete-order{*/
/* 	{% if order_table_complete_bg %}*/
/* 	background: {{ order_table_complete_bg }} !important;*/
/* 	{% endif %}*/
/* */
/* 	{% if order_table_complete_color %}*/
/* 	color: {{ order_table_complete_color }};*/
/* 	{% endif %}*/
/* }*/
/* {% endif %}*/
/* */
/* {% if order_innertable_color or order_innertable_bordercolor %}*/
/* .mpacc-orders .mpmain-table .mp-button, .mpacc-orders .mpmain-table .mp-return{*/
/* 	{% if order_innertable_color %}*/
/* 	color: {{ order_innertable_color }};*/
/* 	{% endif %}*/
/* */
/* 	{% if order_innertable_bordercolor %}*/
/* 	border-color: {{ order_innertable_bordercolor }};*/
/* 	{% endif %}*/
/* }*/
/* {% endif %}*/
/* {{ css }}*/
/* </style>*/
/* </div>*/
/* {{ footer }} */
