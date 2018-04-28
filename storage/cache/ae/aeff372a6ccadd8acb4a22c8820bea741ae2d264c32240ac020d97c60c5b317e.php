<?php

/* journal2/template/product/category.twig */
class __TwigTemplate_12063bee9e32c6e086147de7d68adfe4a18c9c5b819f248b43e2d75b28e6441c extends Twig_Template
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
        echo "<!--catalog/view/theme/journal2/template/product/category.twig  -->
";
        // line 2
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"container\" class=\"container j-container\">
  <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "      <li itemscope itemtype=\"http://data-vocabulary.org/Breadcrumb\"><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</span></a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </ul>
  <div class=\"row\">";
        // line 9
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "
    ";
        // line 10
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 11
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 12
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\" style=\"margin-left:285px;\">
      <h1 class=\"heading-title\">";
        // line 18
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      ";
        // line 19
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      ";
        // line 20
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["description"]) ? $context["description"] : null))) {
            // line 21
            echo "        <div class=\"category-info\">
          ";
            // line 22
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 23
                echo "            <div class=\"image\"><img width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_width"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_height"), "method");
                echo "\" src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"/></div>
          ";
            }
            // line 25
            echo "          ";
            if ((isset($context["description"]) ? $context["description"] : null)) {
                // line 26
                echo "            ";
                echo (isset($context["description"]) ? $context["description"] : null);
                echo "
          ";
            }
            // line 28
            echo "        </div>
      ";
        }
        // line 30
        echo "
      ";
        // line 31
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category"), "method") == "grid") && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images", 1 => array()), "method")) > 0))) {
            // line 32
            echo "        <div class=\"refine-images\">
          ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 34
                echo "            <div class=\"refine-image ";
                echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProductGridClasses", array(0 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images_per_row"), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_columns_count"), "method"))));
                echo "\">
              <a href=\"";
                // line 35
                echo $this->getAttribute($context["category"], "href", array());
                echo "\"><img style=\"display: block\" width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_image_width", 1 => 175), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_image_height", 1 => 175), "method");
                echo "\" src=\"";
                echo $this->getAttribute($context["category"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\"/><span class=\"refine-category-name\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</span></a>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "          <script>
            if (!Journal.isFlexboxSupported) {
              Journal.equalHeight(\$(\".refine-images .refine-image\"), '.refine-category-name');
            }
          </script>
        </div>
      ";
        }
        // line 45
        echo "
      ";
        // line 46
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category"), "method") == "carousel") && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images", 1 => array()), "method")) > 0))) {
            // line 47
            echo "        <div id=\"refine-images\">
          <div class=\"swiper\">
            <div class=\"swiper-container\" ";
            // line 49
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                echo " dir=\"rtl\" ";
            }
            echo ">
              <div class=\"swiper-wrapper\">
                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 52
                echo "                  <div class=\"refine-image swiper-slide ";
                echo call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getProductGridClasses", array(0 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images_per_row"), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_columns_count"), "method"))));
                echo "\">
                    <a href=\"";
                // line 53
                echo $this->getAttribute($context["category"], "href", array());
                echo "\"><img style=\"display: block\" width=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_image_width", 1 => 175), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_image_height", 1 => 175), "method");
                echo "\" src=\"";
                echo $this->getAttribute($context["category"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["category"], "name", array());
                echo "\"/><span class=\"refine-category-name\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</span></a>
                  </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "              </div>
            </div>
            <div class=\"swiper-pagination\"></div>
          </div>
        </div>
        ";
            // line 61
            $context["grid"] = call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getItemGrid", array(0 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category_images_per_row"), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_columns_count"), "method"))));
            // line 62
            echo "        ";
            $context["grid"] = array(0 => array(0 => 0, 1 => $this->getAttribute(            // line 63
(isset($context["grid"]) ? $context["grid"] : null), "xs", array())), 1 => array(0 => 470, 1 => $this->getAttribute(            // line 64
(isset($context["grid"]) ? $context["grid"] : null), "sm", array())), 2 => array(0 => 760, 1 => $this->getAttribute(            // line 65
(isset($context["grid"]) ? $context["grid"] : null), "md", array())), 3 => array(0 => 980, 1 => $this->getAttribute(            // line 66
(isset($context["grid"]) ? $context["grid"] : null), "lg", array())), 4 => array(0 => 1100, 1 => $this->getAttribute(            // line 67
(isset($context["grid"]) ? $context["grid"] : null), "xl", array())));
            // line 69
            echo "        <script>
          (function () {
            var grid = \$.parseJSON('";
            // line 71
            echo twig_jsonencode_filter((isset($context["grid"]) ? $context["grid"] : null));
            echo "');

            var breakpoints = {
              470: {
                slidesPerView: grid[0][1],
                slidesPerGroup: grid[0][1]
              },
              760: {
                slidesPerView: grid[1][1],
                slidesPerGroup: grid[1][1]
              },
              980: {
                slidesPerView: grid[2][1],
                slidesPerGroup: grid[2][1]
              },
              1220: {
                slidesPerView: grid[3][1],
                slidesPerGroup: grid[3][1]
              }
            };

            var opts = {
              slidesPerView: grid[4][1],
              slidesPerGroup: grid[4][1],
              breakpoints: breakpoints,
              spaceBetween: parseInt('";
            // line 96
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_grid_item_spacing", 1 => "15"), "method");
            echo "', 10),
              pagination: \$('#refine-images .swiper-pagination'),
              paginationClickable: true,
              nextButton: \$('#refine-images .swiper-button-next'),
              prevButton: \$('#refine-images .swiper-button-prev'),
              autoplay: ";
            // line 101
            echo ((($this->getAttribute($this->getAttribute((isset($context["journal"]) ? $context["journal"] : null), "settings", array()), "get", array(0 => "refine_carousel_autoplay"), "method") > 0)) ? (4000) : ("false"));
            echo ",
              autoplayStopOnHover: ";
            // line 102
            echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_carousel_pause_on_hover"), "method") > 0)) ? (4000) : ("false"));
            echo ",
              speed: 400,
              touchEventsTarget: ";
            // line 104
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_carousel_touchdrag"), "method")) {
                echo " 'container' ";
            } else {
                echo " false ";
            }
            // line 105
            echo "            };

            \$('#refine-images .swiper-container').swiper(opts);
          })();
        </script>
      ";
        }
        // line 111
        echo "
      ";
        // line 112
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "refine_category"), "method") == "text") && (isset($context["categories"]) ? $context["categories"] : null))) {
            // line 113
            echo "        <h2 class=\"refine\">";
            echo (isset($context["text_refine"]) ? $context["text_refine"] : null);
            echo "</h2>
        <div class=\"category-list\">
          <ul>
            ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 117
                echo "              <li><a href=\"";
                echo $this->getAttribute($context["category"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["category"], "name", array());
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "          </ul>
        </div>
      ";
        }
        // line 122
        echo "
      ";
        // line 123
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 124
            echo "
        <div class=\"product-filter\">
          <div class=\"display\">
            <a onclick=\"Journal.gridView()\" class=\"grid-view\">";
            // line 127
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_grid_view_icon", 1 => (isset($context["button_grid"]) ? $context["button_grid"] : null)), "method");
            echo "</a>
            <a onclick=\"Journal.listView()\" class=\"list-view\">";
            // line 128
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "category_list_view_icon", 1 => (isset($context["button_list"]) ? $context["button_list"] : null)), "method");
            echo "</a>
          </div>
          <div class=\"product-compare\"><a href=\"";
            // line 130
            echo (isset($context["compare"]) ? $context["compare"] : null);
            echo "\" id=\"compare-total\">";
            echo (isset($context["text_compare"]) ? $context["text_compare"] : null);
            echo "</a></div>
          <div class=\"limit\"><b>";
            // line 131
            echo (isset($context["text_limit"]) ? $context["text_limit"] : null);
            echo "</b>
            <select onchange=\"location = this.value;\">
              ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 134
                echo "                ";
                if (($this->getAttribute($context["limits"], "value", array()) == (isset($context["limit"]) ? $context["limit"] : null))) {
                    // line 135
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                ";
                } else {
                    // line 137
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["limits"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["limits"], "text", array());
                    echo "</option>
                ";
                }
                // line 139
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
            echo "            </select>
          </div>
          <div class=\"sort\"><b>";
            // line 142
            echo (isset($context["text_sort"]) ? $context["text_sort"] : null);
            echo "</b>
            <select onchange=\"location = this.value;\">
              ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 145
                echo "                ";
                if (($this->getAttribute($context["sorts"], "value", array()) == sprintf("%s-%s", (isset($context["sort"]) ? $context["sort"] : null), (isset($context["order"]) ? $context["order"] : null)))) {
                    // line 146
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                ";
                } else {
                    // line 148
                    echo "                  <option value=\"";
                    echo $this->getAttribute($context["sorts"], "href", array());
                    echo "\">";
                    echo $this->getAttribute($context["sorts"], "text", array());
                    echo "</option>
                ";
                }
                // line 150
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "            </select>
          </div>
        </div>

        <div class=\"row main-products product-grid\" data-grid-classes=\"";
            // line 155
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
            echo " display-";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
            echo " ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
            echo "\">
          ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 157
                echo "            <div class=\"product-grid-item ";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_classes"), "method");
                echo "\">
              <div class=\"product-thumb product-wrapper ";
                // line 158
                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                    echo " outofstock ";
                }
                echo "\">
                <div class=\"image ";
                // line 159
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") && $this->getAttribute($context["product"], "date_end", array()))) {
                    echo " has-countdown ";
                }
                echo "\">
                  <a href=\"";
                // line 160
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" ";
                if ($this->getAttribute($context["product"], "thumb2", array())) {
                    echo " class=\"has-second-image\" style=\"background: url('";
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "') no-repeat\" ";
                }
                echo ">
                    <img class=\"lazy first-image\" width=\"";
                // line 161
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_width"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_height"), "method");
                echo "\" src=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_dummy_image"), "method");
                echo "\" data-src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" data-poip-product-id=\"";
                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                echo "\" ";
                if (((($this->getAttribute($context["product"], "poip_images", array(), "any", true, true) &&  !(null === $this->getAttribute($context["product"], "poip_images", array())))) ? ($this->getAttribute($context["product"], "poip_images", array())) : (false))) {
                    echo " data-poip-images=\"";
                    echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["product"], "poip_images", array())));
                    echo "\" ";
                }
                echo " title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"/>
                  </a>
                  ";
                // line 163
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                    // line 164
                    echo "                    <span class=\"label-";
                    echo $context["label"];
                    echo "\"><b>";
                    echo $context["name"];
                    echo "</b></span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 166
                echo "                  ";
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                    // line 167
                    echo "                    <div class=\"wishlist\"><a onclick=\"addToWishList('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></a></div>
                    <div class=\"compare\"><a onclick=\"addToCompare('";
                    // line 168
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></a></div>
                  ";
                }
                // line 170
                echo "                </div>
                <div class=\"product-details\">
                  <div class=\"caption\">
                    <h4 class=\"name\"><a href=\"";
                // line 173
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                    <p class=\"description\">";
                // line 174
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
                    ";
                // line 175
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 176
                    echo "                      <div class=\"price\">
                        ";
                    // line 177
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 178
                        echo "                          ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                        ";
                    } else {
                        // line 180
                        echo "                          <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> <span class=\"price-new\" ";
                        if ($this->getAttribute($context["product"], "date_end", array())) {
                            echo "data-end-date=\"";
                            echo $this->getAttribute($context["product"], "date_end", array());
                            echo "\"";
                        }
                        echo ">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span>
                        ";
                    }
                    // line 182
                    echo "                      </div>
                    ";
                }
                // line 184
                echo "                    ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 185
                    echo "                      <div class=\"rating\">
                        ";
                    // line 186
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 187
                        echo "                          ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 188
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        } else {
                            // line 190
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        }
                        // line 192
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 193
                    echo "                      </div>
                    ";
                }
                // line 195
                echo "                  </div>
                  <div class=\"button-group\">
                    ";
                // line 197
                if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                    // line 198
                    echo "                      <div class=\"cart enquiry-button\">
                        <a href=\"javascript:Journal.openPopup('";
                    // line 199
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_popup_code"), "method");
                    echo "', '";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" data-clk=\"addToCart('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"button hint--top\" data-hint=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_icon"), "method");
                    echo "<span class=\"button-cart-text\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "enquiry_button_text"), "method");
                    echo "</span></a>
                      </div>
                    ";
                } else {
                    // line 202
                    echo "                      <div class=\"cart ";
                    if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                        echo " outofstock ";
                    }
                    echo "\">
                        <a onclick=\"addToCart('";
                    // line 203
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"button hint--top\" data-hint=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\"><i class=\"button-left-icon\"></i><span class=\"button-cart-text\">";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span><i class=\"button-right-icon\"></i></a>
                      </div>
                    ";
                }
                // line 206
                echo "                    <div class=\"wishlist\"><a onclick=\"addToWishList('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></a></div>
                    <div class=\"compare\"><a onclick=\"addToCompare('";
                // line 207
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "</span></a></div>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            echo "        </div>

        <div class=\"row pagination\">
          <div class=\"col-sm-6 text-left links\">";
            // line 216
            echo (isset($context["pagination"]) ? $context["pagination"] : null);
            echo "</div>
          <div class=\"col-sm-6 text-right results\">";
            // line 217
            echo (isset($context["results"]) ? $context["results"] : null);
            echo "</div>
        </div>
      ";
        }
        // line 220
        echo "
      ";
        // line 221
        if (( !(isset($context["categories"]) ? $context["categories"] : null) &&  !(isset($context["products"]) ? $context["products"] : null))) {
            // line 222
            echo "        <p>";
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"pull-right\"><a href=\"";
            // line 224
            echo (isset($context["continue"]) ? $context["continue"] : null);
            echo "\" class=\"btn btn-primary button\">";
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "</a></div>
        </div>
      ";
        }
        // line 227
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
  <script>Journal.applyView('";
        // line 229
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_view", 1 => "grid"), "method");
        echo "');</script>
  ";
        // line 230
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never")) {
            // line 231
            echo "    <script>Journal.enableCountdown();</script>
  ";
        }
        // line 233
        echo "</div>
";
        // line 234
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  715 => 234,  712 => 233,  708 => 231,  706 => 230,  702 => 229,  696 => 227,  688 => 224,  682 => 222,  680 => 221,  677 => 220,  671 => 217,  667 => 216,  662 => 213,  646 => 207,  637 => 206,  627 => 203,  620 => 202,  604 => 199,  601 => 198,  599 => 197,  595 => 195,  591 => 193,  585 => 192,  581 => 190,  577 => 188,  574 => 187,  570 => 186,  567 => 185,  564 => 184,  560 => 182,  546 => 180,  540 => 178,  538 => 177,  535 => 176,  533 => 175,  529 => 174,  523 => 173,  518 => 170,  509 => 168,  500 => 167,  497 => 166,  486 => 164,  482 => 163,  459 => 161,  449 => 160,  443 => 159,  437 => 158,  432 => 157,  428 => 156,  420 => 155,  414 => 151,  408 => 150,  400 => 148,  392 => 146,  389 => 145,  385 => 144,  380 => 142,  376 => 140,  370 => 139,  362 => 137,  354 => 135,  351 => 134,  347 => 133,  342 => 131,  336 => 130,  331 => 128,  327 => 127,  322 => 124,  320 => 123,  317 => 122,  312 => 119,  301 => 117,  297 => 116,  290 => 113,  288 => 112,  285 => 111,  277 => 105,  271 => 104,  266 => 102,  262 => 101,  254 => 96,  226 => 71,  222 => 69,  220 => 67,  219 => 66,  218 => 65,  217 => 64,  216 => 63,  214 => 62,  212 => 61,  205 => 56,  186 => 53,  181 => 52,  177 => 51,  170 => 49,  166 => 47,  164 => 46,  161 => 45,  152 => 38,  133 => 35,  128 => 34,  124 => 33,  121 => 32,  119 => 31,  116 => 30,  112 => 28,  106 => 26,  103 => 25,  91 => 23,  89 => 22,  86 => 21,  84 => 20,  80 => 19,  76 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  51 => 10,  46 => 9,  43 => 8,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <!--catalog/view/theme/journal2/template/product/category.twig  -->*/
/* {{ header }}*/
/* <div id="container" class="container j-container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ breadcrumb.href }}" itemprop="url"><span itemprop="title">{{ breadcrumb.text }}</span></a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}{{ column_right }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}" style="margin-left:285px;">*/
/*       <h1 class="heading-title">{{ heading_title }}</h1>*/
/*       {{ content_top }}*/
/*       {% if thumb or description %}*/
/*         <div class="category-info">*/
/*           {% if thumb %}*/
/*             <div class="image"><img width="{{ journal2.settings.get('config_image_width') }}" height="{{ journal2.settings.get('config_image_height') }}" src="{{ thumb }}" alt="{{ heading_title }}"/></div>*/
/*           {% endif %}*/
/*           {% if description %}*/
/*             {{ description }}*/
/*           {% endif %}*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if journal2.settings.get('refine_category') == 'grid' and journal2.settings.get('refine_category_images', []) | length > 0 %}*/
/*         <div class="refine-images">*/
/*           {% for category in journal2.settings.get('refine_category_images', []) %}*/
/*             <div class="refine-image {{ staticCall('Journal2Utils', 'getProductGridClasses', [journal2.settings.get('refine_category_images_per_row'), journal2.settings.get('site_width', 1024), journal2.settings.get('config_columns_count')]) }}">*/
/*               <a href="{{ category.href }}"><img style="display: block" width="{{ journal2.settings.get('refine_image_width', 175) }}" height="{{ journal2.settings.get('refine_image_height', 175) }}" src="{{ category.thumb }}" alt="{{ category.name }}"/><span class="refine-category-name">{{ category.name }}</span></a>*/
/*             </div>*/
/*           {% endfor %}*/
/*           <script>*/
/*             if (!Journal.isFlexboxSupported) {*/
/*               Journal.equalHeight($(".refine-images .refine-image"), '.refine-category-name');*/
/*             }*/
/*           </script>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if journal2.settings.get('refine_category') == 'carousel' and journal2.settings.get('refine_category_images', []) | length > 0 %}*/
/*         <div id="refine-images">*/
/*           <div class="swiper">*/
/*             <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*               <div class="swiper-wrapper">*/
/*                 {% for category in journal2.settings.get('refine_category_images', []) %}*/
/*                   <div class="refine-image swiper-slide {{ staticCall('Journal2Utils', 'getProductGridClasses', [journal2.settings.get('refine_category_images_per_row'), journal2.settings.get('site_width', 1024), journal2.settings.get('config_columns_count')]) }}">*/
/*                     <a href="{{ category.href }}"><img style="display: block" width="{{ journal2.settings.get('refine_image_width', 175) }}" height="{{ journal2.settings.get('refine_image_height', 175) }}" src="{{ category.thumb }}" alt="{{ category.name }}"/><span class="refine-category-name">{{ category.name }}</span></a>*/
/*                   </div>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*             <div class="swiper-pagination"></div>*/
/*           </div>*/
/*         </div>*/
/*         {% set grid = staticCall('Journal2Utils', 'getItemGrid', [journal2.settings.get('refine_category_images_per_row'), journal2.settings.get('site_width', 1024), journal2.settings.get('config_columns_count')]) %}*/
/*         {% set grid = [*/
/*         [0, grid.xs],*/
/*         [470, grid.sm],*/
/*         [760, grid.md],*/
/*         [980, grid.lg],*/
/*         [1100, grid.xl],*/
/*         ] %}*/
/*         <script>*/
/*           (function () {*/
/*             var grid = $.parseJSON('{{ grid | json_encode() }}');*/
/* */
/*             var breakpoints = {*/
/*               470: {*/
/*                 slidesPerView: grid[0][1],*/
/*                 slidesPerGroup: grid[0][1]*/
/*               },*/
/*               760: {*/
/*                 slidesPerView: grid[1][1],*/
/*                 slidesPerGroup: grid[1][1]*/
/*               },*/
/*               980: {*/
/*                 slidesPerView: grid[2][1],*/
/*                 slidesPerGroup: grid[2][1]*/
/*               },*/
/*               1220: {*/
/*                 slidesPerView: grid[3][1],*/
/*                 slidesPerGroup: grid[3][1]*/
/*               }*/
/*             };*/
/* */
/*             var opts = {*/
/*               slidesPerView: grid[4][1],*/
/*               slidesPerGroup: grid[4][1],*/
/*               breakpoints: breakpoints,*/
/*               spaceBetween: parseInt('{{ journal2.settings.get('refine_grid_item_spacing', '15') }}', 10),*/
/*               pagination: $('#refine-images .swiper-pagination'),*/
/*               paginationClickable: true,*/
/*               nextButton: $('#refine-images .swiper-button-next'),*/
/*               prevButton: $('#refine-images .swiper-button-prev'),*/
/*               autoplay: {{ journal.settings.get('refine_carousel_autoplay') > 0 ? 4000 : 'false' }},*/
/*               autoplayStopOnHover: {{ journal2.settings.get('refine_carousel_pause_on_hover') > 0 ? 4000 : 'false' }},*/
/*               speed: 400,*/
/*               touchEventsTarget: {% if journal2.settings.get('refine_carousel_touchdrag') %} 'container' {% else %} false {% endif %}*/
/*             };*/
/* */
/*             $('#refine-images .swiper-container').swiper(opts);*/
/*           })();*/
/*         </script>*/
/*       {% endif %}*/
/* */
/*       {% if journal2.settings.get('refine_category') == 'text' and categories %}*/
/*         <h2 class="refine">{{ text_refine }}</h2>*/
/*         <div class="category-list">*/
/*           <ul>*/
/*             {% for category in categories %}*/
/*               <li><a href="{{ category.href }}">{{ category.name }}</a></li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if products %}*/
/* */
/*         <div class="product-filter">*/
/*           <div class="display">*/
/*             <a onclick="Journal.gridView()" class="grid-view">{{ journal2.settings.get('category_grid_view_icon', button_grid) }}</a>*/
/*             <a onclick="Journal.listView()" class="list-view">{{ journal2.settings.get('category_list_view_icon', button_list) }}</a>*/
/*           </div>*/
/*           <div class="product-compare"><a href="{{ compare }}" id="compare-total">{{ text_compare }}</a></div>*/
/*           <div class="limit"><b>{{ text_limit }}</b>*/
/*             <select onchange="location = this.value;">*/
/*               {% for limits in limits %}*/
/*                 {% if limits.value == limit %}*/
/*                   <option value="{{ limits.href }}" selected="selected">{{ limits.text }}</option>*/
/*                 {% else %}*/
/*                   <option value="{{ limits.href }}">{{ limits.text }}</option>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*           <div class="sort"><b>{{ text_sort }}</b>*/
/*             <select onchange="location = this.value;">*/
/*               {% for sorts in sorts %}*/
/*                 {% if sorts.value == '%s-%s'|format(sort, order) %}*/
/*                   <option value="{{ sorts.href }}" selected="selected">{{ sorts.text }}</option>*/
/*                 {% else %}*/
/*                   <option value="{{ sorts.href }}">{{ sorts.text }}</option>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </select>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="row main-products product-grid" data-grid-classes="{{ journal2.settings.get('product_grid_classes') }} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*           {% for product in products %}*/
/*             <div class="product-grid-item {{ journal2.settings.get('product_grid_classes') }}">*/
/*               <div class="product-thumb product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                 <div class="image {% if journal2.settings.get('show_countdown', 'never') != 'never' and product.date_end %} has-countdown {% endif %}">*/
/*                   <a href="{{ product.href }}" {% if product.thumb2 %} class="has-second-image" style="background: url('{{ product.thumb2 }}') no-repeat" {% endif %}>*/
/*                     <img class="lazy first-image" width="{{ journal2.settings.get('config_image_width') }}" height="{{ journal2.settings.get('config_image_height') }}" src="{{ journal2.settings.get('product_dummy_image') }}" data-src="{{ product.thumb }}" data-poip-product-id="{{ product['product_id'] }}" {% if product.poip_images ?? false %} data-poip-images="{{ product.poip_images|json_encode|e }}" {% endif %} title="{{ product.name }}" alt="{{ product.name }}"/>*/
/*                   </a>*/
/*                   {% for label, name in product.labels %}*/
/*                     <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                   {% endfor %}*/
/*                   {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                     <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                     <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                   {% endif %}*/
/*                 </div>*/
/*                 <div class="product-details">*/
/*                   <div class="caption">*/
/*                     <h4 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                     <p class="description">{{ product.description }}</p>*/
/*                     {% if product.price %}*/
/*                       <div class="price">*/
/*                         {% if not product.special %}*/
/*                           {{ product.price }}*/
/*                         {% else %}*/
/*                           <span class="price-old">{{ product.price }}</span> <span class="price-new" {% if product.date_end %}data-end-date="{{ product.date_end }}"{% endif %}>{{ product.special }}</span>*/
/*                         {% endif %}*/
/*                       </div>*/
/*                     {% endif %}*/
/*                     {% if product.rating %}*/
/*                       <div class="rating">*/
/*                         {% for i in 1..5 %}*/
/*                           {% if product.rating < i %}*/
/*                             <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% else %}*/
/*                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                           {% endif %}*/
/*                         {% endfor %}*/
/*                       </div>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                   <div class="button-group">*/
/*                     {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                       <div class="cart enquiry-button">*/
/*                         <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                       </div>*/
/*                     {% else %}*/
/*                       <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                         <a onclick="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                       </div>*/
/*                     {% endif %}*/
/*                     <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                     <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           {% endfor %}*/
/*         </div>*/
/* */
/*         <div class="row pagination">*/
/*           <div class="col-sm-6 text-left links">{{ pagination }}</div>*/
/*           <div class="col-sm-6 text-right results">{{ results }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if not categories and not products %}*/
/*         <p>{{ text_empty }}</p>*/
/*         <div class="buttons">*/
/*           <div class="pull-right"><a href="{{ continue }}" class="btn btn-primary button">{{ button_continue }}</a></div>*/
/*         </div>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/*   <script>Journal.applyView('{{ journal2.settings.get('product_view', 'grid') }}');</script>*/
/*   {% if journal2.settings.get('show_countdown', 'never') != 'never' %}*/
/*     <script>Journal.enableCountdown();</script>*/
/*   {% endif %}*/
/* </div>*/
/* {{ footer }}*/
/* */
