<?php

/* journal2/template/journal2/quickview/quickview.twig */
class __TwigTemplate_9f1936a437030a43b8e50378da5f61e07b983f2ba63e90bb9236a93c4d619c41 extends Twig_Template
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
        echo "<html dir=\"";
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"product-page quickview ";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "html_classes", array()), "getAll", array(), "method");
        echo "\" style=\"overflow-y: auto\">
<head>
  <title>";
        // line 3
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</title>
  <meta name=\"robots\" content=\"noindex\">
  <base href=\"";
        // line 5
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\"/>
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "google_fonts", array()), "getFonts", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["font"]) {
            // line 7
            echo "    <link rel=\"stylesheet\" href=\"";
            echo $context["font"];
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['font'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/j-strap.css"), "method");
        // line 10
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/javascript/font-awesome/css/font-awesome.min.css"), "method");
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/icons.css"), "method");
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/hint.min.css"), "method");
        // line 13
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/journal.css"), "method");
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/module.css"), "method");
        // line 15
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/features.css"), "method");
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/product.css"), "method");
        // line 17
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/flex.css"), "method");
        // line 18
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addStyle", array(0 => "catalog/view/theme/journal2/css/rtl.css"), "method");
        // line 19
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "css", array(), "method");
        // line 20
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "cache", array()), "getDeveloperMode", array(), "method") ||  !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "getMinifyCss", array(), "method"))) {
            // line 21
            echo "    <link rel=\"stylesheet\" href=\"index.php?route=journal2/assets/css\"/>
  ";
        }
        // line 23
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "addScript", array(0 => "catalog/view/theme/journal2/js/journal.js", 1 => "header"), "method");
        // line 24
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "minifier", array()), "js", array(0 => "header"), "method");
        echo "
</head>
<body>
<div id=\"container\">
  <div id=\"content\" class=\"product-page-content\">
    <h1 class=\"heading-title\">";
        // line 29
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
    <div class=\"product-info\">
      <div class=\"left\">
        ";
        // line 32
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 33
            echo "          <div class=\"image\">
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) ? $context["labels"] : null));
            foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                // line 35
                echo "              <span class=\"label-";
                echo $context["label"];
                echo "\"><b>";
                echo $context["name"];
                echo "</b></span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            <a href=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\"><img src=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" id=\"image\" data-largeimg=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" itemprop=\"image\"/></a>
          </div>
        ";
        }
        // line 40
        echo "        ";
        if ((isset($context["images"]) ? $context["images"] : null)) {
            // line 41
            echo "          <div id=\"product-gallery\" class=\"image-additional ";
            echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) ? ("journal-carousel") : ("image-additional-grid"));
            echo "\">
            ";
            // line 42
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 43
                echo "            <div class=\"swiper\">
              <div class=\"swiper-container\" ";
                // line 44
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                    echo " dir=\"rtl\" ";
                }
                echo ">
                <div class=\"swiper-wrapper\">
                  ";
            }
            // line 47
            echo "                  ";
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 48
                echo "                    <a class=\"swiper-slide\" ";
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                    echo " style=\"width: ";
                    echo (100 / $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => 5), "method"));
                    echo "%\" ";
                }
                echo " href=\"";
                echo (((isset($context["popup_fixed"]) ? $context["popup_fixed"] : null)) ? ((isset($context["popup_fixed"]) ? $context["popup_fixed"] : null)) : ((isset($context["popup"]) ? $context["popup"] : null)));
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img src=\"";
                echo (((isset($context["thumb_fixed"]) ? $context["thumb_fixed"] : null)) ? ((isset($context["thumb_fixed"]) ? $context["thumb_fixed"] : null)) : ((isset($context["thumb"]) ? $context["thumb"] : null)));
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"/></a>
                  ";
            }
            // line 50
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 51
                echo "                    <a class=\"swiper-slide\" ";
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                    echo " style=\"width: ";
                    echo (100 / $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => 5), "method"));
                    echo "%\" ";
                }
                echo " href=\"";
                echo $this->getAttribute($context["image"], "popup", array());
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img src=\"";
                echo $this->getAttribute($context["image"], "thumb", array());
                echo "\" title=\"";
                echo ((($this->getAttribute($context["image"], "title", array(), "any", true, true) &&  !(null === $this->getAttribute($context["image"], "title", array())))) ? ($this->getAttribute($context["image"], "title", array())) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                echo "\" alt=\"";
                echo ((($this->getAttribute($context["image"], "title", array(), "any", true, true) &&  !(null === $this->getAttribute($context["image"], "title", array())))) ? ($this->getAttribute($context["image"], "title", array())) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
                echo "\" itemprop=\"image\"/></a>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                  ";
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 54
                echo "                </div>
              </div>
              <div class=\"swiper-button-next\"></div>
              <div class=\"swiper-button-prev\"></div>
            </div>
            ";
            }
            // line 60
            echo "          </div>
        ";
            // line 61
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 62
                echo "          <script>
            (function () {
              var opts = {
                slidesPerView: parseInt('";
                // line 65
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => "5"), "method");
                echo "', 10),
                slidesPerGroup: parseInt('";
                // line 66
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => "5"), "method");
                echo "', 10),
                spaceBetween: parseInt('";
                // line 67
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_spacing", 1 => "15"), "method");
                echo "', 10),
                nextButton: \$('#product-gallery .swiper-button-next'),
                prevButton: \$('#product-gallery .swiper-button-prev'),
                autoplay: ";
                // line 70
                echo (($this->getAttribute($this->getAttribute((isset($context["journal"]) ? $context["journal"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_autoplay"), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_transition_delay", 1 => 4000), "method")) : ("false"));
                echo ",
                speed: parseInt('";
                // line 71
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_spacing", 1 => "15"), "method");
                echo "', 10),
                touchEventsTarget: ";
                // line 72
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_touchdrag"), "method")) {
                    echo " 'container' ";
                } else {
                    echo " false ";
                }
                // line 73
                echo "              };

              \$('#product-gallery .swiper-container').swiper(opts);
            })();
          </script>
        ";
            }
            // line 79
            echo "        ";
        }
        // line 80
        echo "        <div class=\"image-gallery\" style=\"display: none !important;\">
          ";
        // line 81
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 82
            echo "            <a href=\"";
            echo (isset($context["popup"]) ? $context["popup"] : null);
            echo "\" data-original=\"";
            echo (((isset($context["original"]) ? $context["original"] : null)) ? ((isset($context["original"]) ? $context["original"] : null)) : ((isset($context["popup"]) ? $context["popup"] : null)));
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"swipebox\"><img src=\"";
            echo (isset($context["thumb"]) ? $context["thumb"] : null);
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" alt=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\"/></a>
          ";
        }
        // line 84
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 85
            echo "            <a href=\"";
            echo $this->getAttribute($context["image"], "popup", array());
            echo "\" data-original=\"";
            echo (($this->getAttribute($context["image"], "original", array())) ? ($this->getAttribute($context["image"], "original", array())) : ($this->getAttribute($context["image"], "popup", array())));
            echo "\" title=\"";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "\" class=\"swipebox\"><img src=\"";
            echo $this->getAttribute($context["image"], "thumb", array());
            echo "\" title=\"";
            echo ((($this->getAttribute($context["image"], "title", array(), "any", true, true) &&  !(null === $this->getAttribute($context["image"], "title", array())))) ? ($this->getAttribute($context["image"], "title", array())) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
            echo "\" alt=\"";
            echo ((($this->getAttribute($context["image"], "title", array(), "any", true, true) &&  !(null === $this->getAttribute($context["image"], "title", array())))) ? ($this->getAttribute($context["image"], "title", array())) : ((isset($context["heading_title"]) ? $context["heading_title"] : null)));
            echo "\"/></a>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "        </div>
        ";
        // line 88
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_description_position"), "method") == "image")) {
            // line 89
            echo "        <div id=\"tab-description\" class=\"tab-content\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
        ";
        }
        // line 91
        echo "      </div>
      <div class=\"right\">
        ";
        // line 93
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_position", 1 => "top"), "method") == "right")) {
            // line 94
            echo "          <h1 class=\"heading-title\" itemprop=\"name\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
        ";
        }
        // line 96
        echo "        <div id=\"product\" class=\"product-options\">
          <ul class=\"list-unstyled description\">
            ";
        // line 98
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_views"), "method")) {
            // line 99
            echo "              <li class=\"product-views-count\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_views_text"), "method");
            echo ": ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_views"), "method");
            echo "</li>
            ";
        }
        // line 101
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "manufacturer_image"), "method") == "on")) {
            // line 102
            echo "              <li class=\"brand-logo\">
                <a href=\"";
            // line 103
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\" class=\"brand-image\">
                  <img src=\"";
            // line 104
            echo (isset($context["manufacturer_image"]) ? $context["manufacturer_image"] : null);
            echo "\" width=\"";
            echo (isset($context["manufacturer_image_width"]) ? $context["manufacturer_image_width"] : null);
            echo "\" height=\"";
            echo (isset($context["manufacturer_image_height"]) ? $context["manufacturer_image_height"] : null);
            echo "\" alt=\"";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "\"/>
                </a>
                ";
            // line 106
            if ((isset($context["manufacturer_image_name"]) ? $context["manufacturer_image_name"] : null)) {
                // line 107
                echo "                  <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\" class=\"brand-logo-text\">
                    ";
                // line 108
                echo (isset($context["manufacturer_image_name"]) ? $context["manufacturer_image_name"] : null);
                echo "
                  </a>
                ";
            }
            // line 111
            echo "              </li>
            ";
        } else {
            // line 113
            echo "              ";
            if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
                // line 114
                echo "                <li class=\"p-brand\">";
                echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
                echo " <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\">";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "</a></li>
              ";
            }
            // line 116
            echo "            ";
        }
        // line 117
        echo "            <li class=\"p-model\">";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " <span class=\"p-model\" itemprop=\"model\">";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</span></li>
            ";
        // line 118
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 119
            echo "              <li class=\"p-rewards\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " <span class=\"p-rewards\">";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</span></li>
            ";
        }
        // line 121
        echo "            <li class=\"p-stock\">";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " <span class=\"journal-stock ";
        echo (isset($context["stock_status"]) ? $context["stock_status"] : null);
        echo "\">";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</span></li>
          </ul>
          ";
        // line 123
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_sold"), "method")) {
            // line 124
            echo "            <div class=\"product-sold-count-text\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_sold"), "method");
            echo "</div>
          ";
        }
        // line 126
        echo "          ";
        if (((isset($context["date_end"]) ? $context["date_end"] : null) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown_product_page", 1 => "on"), "method") == "on"))) {
            // line 127
            echo "            <div class=\"countdown-wrapper\">
              <div class=\"expire-text\">";
            // line 128
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "countdown_product_page_title"), "method");
            echo "</div>
              <div class=\"countdown\"></div>
            </div>
            <script>Journal.countdown(\$('.right .countdown'), '";
            // line 131
            echo (isset($context["date_end"]) ? $context["date_end"] : null);
            echo "');</script>
          ";
        }
        // line 133
        echo "          ";
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 134
            echo "            <ul class=\"list-unstyled price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
              <meta itemprop=\"itemCondition\" content=\"http://schema.org/NewCondition\"/>
              <meta itemprop=\"priceCurrency\" content=\"";
            // line 136
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_price_currency"), "method");
            echo "\"/>
              <meta itemprop=\"price\" content=\"";
            // line 137
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_price"), "method");
            echo "\"/>
              ";
            // line 138
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_in_stock"), "method") == "yes")) {
                // line 139
                echo "                <link itemprop=\"availability\" href=\"http://schema.org/InStock\"/>
              ";
            }
            // line 141
            echo "              ";
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 142
                echo "                <li class=\"product-price\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</li>
              ";
            } else {
                // line 144
                echo "                <li class=\"price-old\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</li>
                <li class=\"price-new\">";
                // line 145
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</li>
              ";
            }
            // line 147
            echo "              ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 148
                echo "                <li class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>
              ";
            }
            // line 150
            echo "              ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 151
                echo "                <li class=\"reward\">
                  <small>";
                // line 152
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</small>
                </li>
              ";
            }
            // line 155
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 156
                echo "                <li class=\"discounts\">";
                echo $this->getAttribute($context["discount"], "quantity", array());
                echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                echo $this->getAttribute($context["discount"], "price", array());
                echo "</li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "            </ul>
          ";
        }
        // line 160
        echo "          ";
        if (((isset($context["options"]) ? $context["options"] : null) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_product_options"), "method") == "1"))) {
            // line 161
            echo "            <div class=\"options ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_push_classes"), "method");
            echo "\">
              <h3>";
            // line 162
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
              ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 164
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 165
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 166
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <select name=\"option[";
                    // line 167
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 168
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                      ";
                    // line 169
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 170
                        echo "                        <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                          ";
                        // line 171
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 172
                            echo "                            (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                          ";
                        }
                        // line 173
                        echo " </option>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 175
                    echo "                    </select>
                  </div>
                ";
                }
                // line 178
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 179
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\">";
                    // line 180
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div id=\"input-option";
                    // line 181
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 182
                        echo "                        <div class=\"radio\">
                          <label>
                            <input type=\"radio\" name=\"option[";
                        // line 184
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                            ";
                        // line 185
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/> ";
                        }
                        // line 186
                        echo "                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                            ";
                        // line 187
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 188
                            echo "                              (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                            ";
                        }
                        // line 189
                        echo " </label>
                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 191
                    echo " </div>
                  </div>
                ";
                }
                // line 194
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 195
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\">";
                    // line 196
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div id=\"input-option";
                    // line 197
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 198
                        echo "                        <div class=\"checkbox\">
                          <label>
                            <input type=\"checkbox\" name=\"option[";
                        // line 200
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>

\t\t\t\t";
                        // line 203
                        echo "\t
\t\t\t\t";
                        // line 204
                        if ((($this->getAttribute($context["option"], "type", array(), "array") == "checkbox") && ((($this->getAttribute($context["option_value"], "poip_image", array(), "array", true, true) &&  !(null === $this->getAttribute($context["option_value"], "poip_image", array(), "array")))) ? ($this->getAttribute($context["option_value"], "poip_image", array(), "array")) : (false)))) {
                            // line 205
                            echo "\t\t\t\t\t<img src=\"";
                            echo $this->getAttribute($context["option_value"], "poip_image", array(), "array");
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array(), "array");
                            echo (($this->getAttribute($context["option_value"], "price", array(), "array")) ? (((" " . $this->getAttribute($context["option_value"], "price_prefix", array(), "array")) . $this->getAttribute($context["option_value"], "price", array(), "array"))) : (""));
                            echo " \" class=\"img-thumbnail\" /> 
\t\t\t\t";
                        }
                        // line 207
                        echo "\t\t\t\t
\t\t\t\t";
                        // line 209
                        echo "\t\t\t
                            ";
                        // line 210
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/> ";
                        }
                        // line 211
                        echo "                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                            ";
                        // line 212
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 213
                            echo "                              (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                            ";
                        }
                        // line 214
                        echo " </label>
                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 216
                    echo " </div>
                  </div>
                ";
                }
                // line 219
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 220
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 221
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <input type=\"text\" name=\"option[";
                    // line 222
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                  </div>
                ";
                }
                // line 225
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 226
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 227
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <textarea name=\"option[";
                    // line 228
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
                  </div>
                ";
                }
                // line 231
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 232
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\">";
                    // line 233
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <button type=\"button\" id=\"button-upload";
                    // line 234
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                    <input type=\"hidden\" name=\"option[";
                    // line 235
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"/>
                  </div>
                ";
                }
                // line 238
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 239
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 240
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"option[";
                    // line 242
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                      <span class=\"input-group-btn\">
                <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                  </div>
                ";
                }
                // line 248
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 249
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 250
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"option[";
                    // line 252
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                      <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                  </div>
                ";
                }
                // line 258
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 259
                    echo "                  <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 260
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"option[";
                    // line 262
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                      <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                </span></div>
                  </div>
                ";
                }
                // line 268
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            echo "            </div>
            <script>Journal.enableSelectOptionAsButtonsList();</script>
          ";
        }
        // line 272
        echo "          ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 273
            echo "            <hr>
            <h3>";
            // line 274
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
            <div class=\"form-group required\">
              <select name=\"recurring_id\" class=\"form-control\">
                <option value=\"\">";
            // line 277
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                ";
            // line 278
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 279
                echo "                  <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 281
            echo "              </select>
              <div class=\"help-block\" id=\"recurring-description\"></div>
            </div>
          ";
        }
        // line 285
        echo "          <div class=\"form-group cart ";
        if (((isset($context["labels"]) ? $context["labels"] : null) && $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "outofstock", array()))) {
            echo " outofstock ";
        }
        echo "\">
            <div>
              ";
        // line 287
        if ( !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_add_to_cart_button"), "method")) {
            // line 288
            echo "              <span class=\"qty\">
                <label class=\"control-label text-qty\" for=\"input-quantity\">";
            // line 289
            echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
            echo "</label>
                <input type=\"text\" name=\"quantity\" value=\"";
            // line 290
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo "\" size=\"2\" data-min-value=\"";
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo "\" id=\"input-quantity\" class=\"form-control\" />
                <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 291
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\" />
              </span>
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
            // line 293
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"button\"><span class=\"button-cart-text\">";
            echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
            echo "</span></button>
              <a id=\"more-details\" class=\"button hint--top\" data-hint=\"";
            // line 294
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_more_details_text"), "method");
            echo "\" target=\"_top\" href=\"";
            echo $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "link", array(0 => ("product/product&product_id=" . (isset($context["product_id"]) ? $context["product_id"] : null))), "method");
            echo "\"><i></i></a>
              ";
        } else {
            // line 296
            echo "              <a id=\"more-details\" class=\"button enquiry-button\" target=\"_top\" href=\"";
            echo $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "link", array(0 => ("product/product&product_id=" . (isset($context["product_id"]) ? $context["product_id"] : null))), "method");
            echo "\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_more_details_text"), "method");
            echo "</a>
              ";
        }
        // line 298
        echo "              <script>
                /* quantity buttons */
                var \$input = \$('.cart input[name=\"quantity\"]');
                function up() {
                  var val = parseInt(\$input.val(), 10) + 1 || parseInt(\$input.attr('data-min-value'), 10);
                  \$input.val(val);
                }
                function down() {
                  var val = parseInt(\$input.val(), 10) - 1 || 0;
                  var min = parseInt(\$input.attr('data-min-value'), 10) || 1;
                  \$input.val(Math.max(val, min));
                }
                \$('<a href=\"javascript:;\" class=\"journal-stepper\">-</a>').insertBefore(\$input).click(down);
                \$('<a href=\"javascript:;\" class=\"journal-stepper\">+</a>').insertAfter(\$input).click(up);
                \$input.keydown(function (e) {
                  if (e.which === 38) {
                    up();
                    return false;
                  }
                  if (e.which === 40) {
                    down();
                    return false;
                  }
                });
              </script>
            </div>
          </div>
          ";
        // line 325
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 326
            echo "            <div class=\"alert alert-info information\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
          ";
        }
        // line 328
        echo "          <div class=\"wishlist-compare\">
              <span class=\"links\">
                  <a onclick=\"parent.addToWishList('";
        // line 330
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "</a>
                  <a onclick=\"parent.addToCompare('";
        // line 331
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "</a>
              </span>
          </div>
          ";
        // line 334
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_description_position"), "method") == "options")) {
            // line 335
            echo "            <div id=\"tab-description\" class=\"tab-content\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
          ";
        }
        // line 337
        echo "        </div>
      </div>
    </div>
    ";
        // line 340
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_description_position"), "method") == "bottom")) {
            // line 341
            echo "      <div id=\"tab-description\" class=\"tab-content\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
    ";
        }
        // line 343
        echo "  </div>
</div>
<script type=\"text/javascript\"><!--
  \$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function () {
    \$.ajax({
      url: 'index.php?route=product/product/getRecurringDescription',
      type: 'post',
      data: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
      dataType: 'json',
      beforeSend: function () {
        \$('#recurring-description').html('');
      },
      success: function (json) {
        \$('.alert-dismissible, .text-danger').remove();

        if (json['success']) {
          \$('#recurring-description').html(json['success']);
        }
      }
    });
  });
  //--></script>
<script type=\"text/javascript\"><!--
  \$('#button-cart').on('click', function () {
    \$.ajax({
      url: 'index.php?route=checkout/cart/add',
      type: 'post',
      data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
      dataType: 'json',
      beforeSend: function () {
        \$('#button-cart').button('loading');
      },
      complete: function () {
        \$('#button-cart').button('reset');
      },
      success: function (json) {
        \$('.alert-dismissible, .text-danger').remove();
        \$('.form-group').removeClass('has-error');

        if (json['error']) {
          if (json['error']['option']) {
            for (i in json['error']['option']) {
              var element = \$('#input-option' + i.replace('_', '-'));

              if (element.parent().hasClass('input-group')) {
                element.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
              } else {
                element.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
              }
            }
          }

          if (json['error']['recurring']) {
            \$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
          }

          // Highlight any found errors
          \$('.text-danger').parent().addClass('has-error');
        }

        if (json['success']) {
          if (!parent.Journal.showNotification(json['success'], json['image'], true)) {
            parent.\$('#notification').html('<div class=\"success\" style=\"display: none;\">' + json['success'] + '<img src=\"catalog/view/theme/default/image/close.png\" alt=\"\" class=\"close\" /></div>');
          }

          parent.\$('.success').fadeIn('slow');

          parent.\$('#cart-total').html(json['total']);

          parent.\$('#cart ul').load('index.php?route=common/cart/info ul li');

          if (json['redirect']) {
            top.location.href = json['redirect'];
          }
        }
      },
      error: function (xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
  //--></script>
<script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickTime: false
  });

  \$('.datetime').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickDate: true,
    pickTime: true
  });

  \$('.time').datetimepicker({
    language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],
    pickDate: false
  });

  \$('button[id^=\\'button-upload\\']').on('click', function () {
    var node = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    if (typeof timer != 'undefined') {
      clearInterval(timer);
    }

    timer = setInterval(function () {
      if (\$('#form-upload input[name=\\'file\\']').val() != '') {
        clearInterval(timer);

        \$.ajax({
          url: 'index.php?route=tool/upload',
          type: 'post',
          dataType: 'json',
          data: new FormData(\$('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function () {
            \$(node).button('loading');
          },
          complete: function () {
            \$(node).button('reset');
          },
          success: function (json) {
            \$('.text-danger').remove();

            if (json['error']) {
              \$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);

              \$(node).parent().find('input').val(json['code']);
            }
          },
          error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
        });
      }
    }, 500);
  });
  //--></script>
<script type=\"text/javascript\"><!--
  \$('#review').delegate('.pagination a', 'click', function (e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
  });

  \$('#review').load('index.php?route=product/product/review&product_id=";
        // line 505
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

  \$('#button-review').on('click', function () {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 509
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
      type: 'post',
      dataType: 'json',
      data: \$(\"#form-review\").serialize(),
      beforeSend: function () {
        \$('#button-review').button('loading');
      },
      complete: function () {
        \$('#button-review').button('reset');
      },
      success: function (json) {
        \$('.alert-dismissible').remove();

        if (json['error']) {
          \$('#review').after('<div class=\"alert alert-danger alert-dismissible warning\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
        }

        if (json['success']) {
          \$('#review').after('<div class=\"alert alert-success alert-dismissible success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

          \$('input[name=\\'name\\']').val('');
          \$('textarea[name=\\'text\\']').val('');
          \$('input[name=\\'rating\\']:checked').prop('checked', false);
        }
      }
    });
  });

  \$(document).ready(function () {
    \$('.thumbnails').magnificPopup({
      type: 'image',
      delegate: 'a',
      gallery: {
        enabled: true
      }
    });
  });
  //--></script>
<script>
  Journal.productPage();
  ";
        // line 549
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_auto_update_price", 1 => "1"), "method") == "1")) {
            // line 550
            echo "  Journal.enableProductOptions();
  Journal.updatePrice = true;
  ";
        }
        // line 553
        echo "  ";
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "quickview_cloud_zoom"), "method") == "1")) {
            // line 554
            echo "  Journal.enableCloudZoom('inner');
  ";
        }
        // line 556
        echo "  \$('.image > a').live('click', function () {
    top.location.href = \"index.php?route=product/product&product_id=";
        // line 557
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\";
    return false;
  });
  ";
        // line 560
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "custom_js"), "method");
        echo "
</script>

\t\t\t\t<!-- << Live Price -->
\t\t\t\t
\t\t\t\t";
        // line 565
        if ((((array_key_exists("liveprice_installed", $context) &&  !(null === (isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)))) ? ((isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)) : (0))) {
            // line 566
            echo "\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t(function(\$){
\t\t\t\t\t\t\tvar lp_product_id = ";
            // line 568
            echo (isset($context["lp_product_id"]) ? $context["lp_product_id"] : null);
            echo ";
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tif ( lp_product_id ) {
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tvar params = {
\t\t\t\t\t\t\t\t\t'lp_settings' \t\t\t\t: ";
            // line 573
            echo (((((array_key_exists("liveprice_settings", $context) &&  !(null === (isset($context["liveprice_settings"]) ? $context["liveprice_settings"] : null)))) ? ((isset($context["liveprice_settings"]) ? $context["liveprice_settings"] : null)) : (0))) ? (twig_jsonencode_filter((isset($context["liveprice_settings"]) ? $context["liveprice_settings"] : null))) : ("[]"));
            echo ",
\t\t\t\t\t\t\t\t\t'theme_name'\t\t\t\t\t: '";
            // line 574
            echo (((array_key_exists("lp_theme_name", $context) &&  !(null === (isset($context["lp_theme_name"]) ? $context["lp_theme_name"] : null)))) ? ((isset($context["lp_theme_name"]) ? $context["lp_theme_name"] : null)) : (""));
            echo "',
\t\t\t\t\t\t\t\t\t'product_id'\t\t\t\t\t: lp_product_id,
\t\t\t\t\t\t\t\t\t'get_custom_methods'\t: ( typeof(liveprice_getCustomMethodsOfTheme) == 'function' ? liveprice_getCustomMethodsOfTheme : false ),
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t// standard for most of themes
\t\t\t\t\t\t\t\t\$container = \$('body, div:first').first();
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tvar liveprice = \$container.liveopencart_LivePrice( params );
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t}
\t\t\t\t\t\t})(jQuery);
\t\t\t\t\t</script>
\t\t\t\t";
        }
        // line 588
        echo "\t\t
\t\t\t\t<!-- >> Live Price -->
\t\t\t

\t\t\t\t<!-- << Product Option Image PRO module -->
\t\t\t\t";
        // line 593
        if ((((array_key_exists("poip_installed", $context) &&  !(null === (isset($context["poip_installed"]) ? $context["poip_installed"] : null)))) ? ((isset($context["poip_installed"]) ? $context["poip_installed"] : null)) : (false))) {
            // line 594
            echo "\t\t\t\t\t<script  type = \"text/javascript\" ><!--
\t\t\t\t\t\t(function(){
\t\t\t\t\t\t\tvar poip_product_settings = {
\t\t\t\t\t\t\t\tproduct_option_ids \t: ";
            // line 597
            echo twig_jsonencode_filter((isset($context["poip_product_option_ids"]) ? $context["poip_product_option_ids"] : null));
            echo ",
\t\t\t\t\t\t\t\timages \t\t\t\t\t\t\t: ";
            // line 598
            echo twig_jsonencode_filter((isset($context["poip_images"]) ? $context["poip_images"] : null));
            echo ",
\t\t\t\t\t\t\t\timages_by_povs\t\t\t: ";
            // line 599
            echo twig_jsonencode_filter((isset($context["poip_images_by_povs"]) ? $context["poip_images_by_povs"] : null));
            echo ",
\t\t\t\t\t\t\t\tmodule_settings \t\t: ";
            // line 600
            echo twig_jsonencode_filter((isset($context["poip_settings"]) ? $context["poip_settings"] : null));
            echo ",
\t\t\t\t\t\t\t\toptions_settings \t\t: ";
            // line 601
            echo twig_jsonencode_filter((isset($context["poip_product_settings"]) ? $context["poip_product_settings"] : null));
            echo ",
\t\t\t\t\t\t\t\tpoip_ov \t\t\t\t\t\t: ";
            // line 602
            echo (((array_key_exists("poip_ov", $context) &&  !(null === (isset($context["poip_ov"]) ? $context["poip_ov"] : null)))) ? ((isset($context["poip_ov"]) ? $context["poip_ov"] : null)) : (0));
            echo ",
\t\t\t\t\t\t\t\tdefault_image_title : '";
            // line 603
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "',
\t\t\t\t\t\t\t};
\t\t\t\t\t\t
\t\t\t\t\t\t\tvar poip_product = getPoipProduct();
\t\t\t\t\t\t\tif ( setPoipProductCustomMethods ) {
\t\t\t\t\t\t\t\tsetPoipProductCustomMethods(poip_product);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tpoip_common.initObject(poip_product, poip_product_settings);
\t\t\t\t\t\t})();
\t\t\t\t\t//--></script>
\t\t\t\t";
        }
        // line 615
        echo "\t\t\t\t
      <!-- >> Product Option Image PRO module -->
      

        ";
        // line 619
        if ((((array_key_exists("pcop_data", $context) &&  !(null === (isset($context["pcop_data"]) ? $context["pcop_data"] : null)))) ? ((isset($context["pcop_data"]) ? $context["pcop_data"] : null)) : (false))) {
            // line 620
            echo "\t\t\t\t\t<!-- << Parent-child Options -->
\t\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\t
\t\t\t\t\t\tvar pcop_data = ";
            // line 623
            echo (((((array_key_exists("pcop_data", $context) &&  !(null === (isset($context["pcop_data"]) ? $context["pcop_data"] : null)))) ? ((isset($context["pcop_data"]) ? $context["pcop_data"] : null)) : (0))) ? (twig_jsonencode_filter((isset($context["pcop_data"]) ? $context["pcop_data"] : null))) : ("[]"));
            echo ";
\t\t\t\t\t\tvar pcop_theme_name = '";
            // line 624
            echo (((array_key_exists("pcop_theme_name", $context) &&  !(null === (isset($context["pcop_theme_name"]) ? $context["pcop_theme_name"] : null)))) ? ((isset($context["pcop_theme_name"]) ? $context["pcop_theme_name"] : null)) : (""));
            echo "';
\t\t\t\t\t\t
\t\t\t\t\t\tif ( typeof(pcop_front) != 'undefined' ) {
\t\t\t\t\t\t\tpcop_front.init(pcop_data, pcop_theme_name);
\t\t\t\t\t\t}
\t\t\t\t\t
\t\t\t\t\t//--></script>
\t\t\t\t\t<!-- >> Parent-child Options -->
        ";
        }
        // line 633
        echo "      
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "journal2/template/journal2/quickview/quickview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1507 => 633,  1495 => 624,  1491 => 623,  1486 => 620,  1484 => 619,  1478 => 615,  1463 => 603,  1459 => 602,  1455 => 601,  1451 => 600,  1447 => 599,  1443 => 598,  1439 => 597,  1434 => 594,  1432 => 593,  1425 => 588,  1408 => 574,  1404 => 573,  1396 => 568,  1392 => 566,  1390 => 565,  1382 => 560,  1376 => 557,  1373 => 556,  1369 => 554,  1366 => 553,  1361 => 550,  1359 => 549,  1316 => 509,  1309 => 505,  1145 => 343,  1139 => 341,  1137 => 340,  1132 => 337,  1126 => 335,  1124 => 334,  1116 => 331,  1110 => 330,  1106 => 328,  1100 => 326,  1098 => 325,  1069 => 298,  1061 => 296,  1054 => 294,  1048 => 293,  1043 => 291,  1037 => 290,  1033 => 289,  1030 => 288,  1028 => 287,  1020 => 285,  1014 => 281,  1003 => 279,  999 => 278,  995 => 277,  989 => 274,  986 => 273,  983 => 272,  978 => 269,  972 => 268,  959 => 262,  952 => 260,  943 => 259,  940 => 258,  927 => 252,  920 => 250,  911 => 249,  908 => 248,  895 => 242,  888 => 240,  879 => 239,  876 => 238,  868 => 235,  860 => 234,  856 => 233,  847 => 232,  844 => 231,  832 => 228,  826 => 227,  817 => 226,  814 => 225,  802 => 222,  796 => 221,  787 => 220,  784 => 219,  779 => 216,  771 => 214,  764 => 213,  762 => 212,  757 => 211,  741 => 210,  738 => 209,  735 => 207,  726 => 205,  724 => 204,  721 => 203,  714 => 200,  710 => 198,  704 => 197,  700 => 196,  691 => 195,  688 => 194,  683 => 191,  675 => 189,  668 => 188,  666 => 187,  661 => 186,  645 => 185,  639 => 184,  635 => 182,  629 => 181,  625 => 180,  616 => 179,  613 => 178,  608 => 175,  601 => 173,  594 => 172,  592 => 171,  585 => 170,  581 => 169,  577 => 168,  571 => 167,  565 => 166,  556 => 165,  553 => 164,  549 => 163,  545 => 162,  540 => 161,  537 => 160,  533 => 158,  522 => 156,  517 => 155,  509 => 152,  506 => 151,  503 => 150,  495 => 148,  492 => 147,  487 => 145,  482 => 144,  476 => 142,  473 => 141,  469 => 139,  467 => 138,  463 => 137,  459 => 136,  455 => 134,  452 => 133,  447 => 131,  441 => 128,  438 => 127,  435 => 126,  429 => 124,  427 => 123,  417 => 121,  409 => 119,  407 => 118,  400 => 117,  397 => 116,  387 => 114,  384 => 113,  380 => 111,  374 => 108,  369 => 107,  367 => 106,  356 => 104,  352 => 103,  349 => 102,  346 => 101,  338 => 99,  336 => 98,  332 => 96,  326 => 94,  324 => 93,  320 => 91,  314 => 89,  312 => 88,  309 => 87,  290 => 85,  285 => 84,  269 => 82,  267 => 81,  264 => 80,  261 => 79,  253 => 73,  247 => 72,  243 => 71,  239 => 70,  233 => 67,  229 => 66,  225 => 65,  220 => 62,  218 => 61,  215 => 60,  207 => 54,  204 => 53,  181 => 51,  176 => 50,  156 => 48,  153 => 47,  145 => 44,  142 => 43,  140 => 42,  135 => 41,  132 => 40,  115 => 37,  104 => 35,  100 => 34,  97 => 33,  95 => 32,  89 => 29,  81 => 24,  79 => 23,  75 => 21,  73 => 20,  71 => 19,  69 => 18,  67 => 17,  65 => 16,  63 => 15,  61 => 14,  59 => 13,  57 => 12,  55 => 11,  53 => 10,  51 => 9,  42 => 7,  38 => 6,  34 => 5,  29 => 3,  19 => 1,);
    }
}
/* <html dir="{{ direction }}" lang="{{ lang }}" class="product-page quickview {{ journal2.html_classes.getAll() }}" style="overflow-y: auto">*/
/* <head>*/
/*   <title>{{ heading_title }}</title>*/
/*   <meta name="robots" content="noindex">*/
/*   <base href="{{ base }}"/>*/
/*   {% for font in journal2.google_fonts.getFonts() %}*/
/*     <link rel="stylesheet" href="{{ font }}"/>*/
/*   {% endfor %}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/j-strap.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/javascript/font-awesome/css/font-awesome.min.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/icons.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/hint.min.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/journal.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/module.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/features.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/product.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/flex.css') -}}*/
/*   {{- journal2.minifier.addStyle('catalog/view/theme/journal2/css/rtl.css') -}}*/
/*   {{- journal2.minifier.css() -}}*/
/*   {% if journal2.cache.getDeveloperMode() or not journal2.minifier.getMinifyCss() %}*/
/*     <link rel="stylesheet" href="index.php?route=journal2/assets/css"/>*/
/*   {% endif %}*/
/*   {{- journal2.minifier.addScript('catalog/view/theme/journal2/js/journal.js', 'header') -}}*/
/*   {{ journal2.minifier.js('header') }}*/
/* </head>*/
/* <body>*/
/* <div id="container">*/
/*   <div id="content" class="product-page-content">*/
/*     <h1 class="heading-title">{{ heading_title }}</h1>*/
/*     <div class="product-info">*/
/*       <div class="left">*/
/*         {% if thumb %}*/
/*           <div class="image">*/
/*             {% for label, name in labels %}*/
/*               <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*             {% endfor %}*/
/*             <a href="{{ popup }}" title="{{ heading_title }}"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" id="image" data-largeimg="{{ popup }}" itemprop="image"/></a>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if images %}*/
/*           <div id="product-gallery" class="image-additional {{ journal2.settings.get('product_page_gallery_carousel') ? 'journal-carousel' : 'image-additional-grid' }}">*/
/*             {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*             <div class="swiper">*/
/*               <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*                 <div class="swiper-wrapper">*/
/*                   {% endif %}*/
/*                   {% if thumb %}*/
/*                     <a class="swiper-slide" {% if journal2.settings.get('product_page_gallery_carousel') %} style="width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%" {% endif %} href="{{ popup_fixed ? popup_fixed : popup }}" title="{{ heading_title }}"><img src="{{ thumb_fixed ? thumb_fixed : thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*                   {% endif %}*/
/*                   {% for image in images %}*/
/*                     <a class="swiper-slide" {% if journal2.settings.get('product_page_gallery_carousel') %} style="width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%" {% endif %} href="{{ image.popup }}" title="{{ heading_title }}"><img src="{{ image.thumb }}" title="{{ image.title ?? heading_title }}" alt="{{ image.title ?? heading_title }}" itemprop="image"/></a>*/
/*                   {% endfor %}*/
/*                   {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*                 </div>*/
/*               </div>*/
/*               <div class="swiper-button-next"></div>*/
/*               <div class="swiper-button-prev"></div>*/
/*             </div>*/
/*             {% endif %}*/
/*           </div>*/
/*         {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*           <script>*/
/*             (function () {*/
/*               var opts = {*/
/*                 slidesPerView: parseInt('{{ journal2.settings.get('product_page_additional_width', '5') }}', 10),*/
/*                 slidesPerGroup: parseInt('{{ journal2.settings.get('product_page_additional_width', '5') }}', 10),*/
/*                 spaceBetween: parseInt('{{ journal2.settings.get('product_page_additional_spacing', '15') }}', 10),*/
/*                 nextButton: $('#product-gallery .swiper-button-next'),*/
/*                 prevButton: $('#product-gallery .swiper-button-prev'),*/
/*                 autoplay: {{ journal.settings.get('product_page_gallery_carousel_autoplay') ? journal2.settings.get('product_page_gallery_carousel_transition_delay', 4000) : 'false' }},*/
/*                 speed: parseInt('{{ journal2.settings.get('product_page_additional_spacing', '15') }}', 10),*/
/*                 touchEventsTarget: {% if journal2.settings.get('product_page_gallery_carousel_touchdrag') %} 'container' {% else %} false {% endif %}*/
/*               };*/
/* */
/*               $('#product-gallery .swiper-container').swiper(opts);*/
/*             })();*/
/*           </script>*/
/*         {% endif %}*/
/*         {% endif %}*/
/*         <div class="image-gallery" style="display: none !important;">*/
/*           {% if thumb %}*/
/*             <a href="{{ popup }}" data-original="{{ original ? original : popup }}" title="{{ heading_title }}" class="swipebox"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*           {% endif %}*/
/*           {% for image in images %}*/
/*             <a href="{{ image.popup }}" data-original="{{ image.original ? image.original : image.popup }}" title="{{ heading_title }}" class="swipebox"><img src="{{ image.thumb }}" title="{{ image.title ?? heading_title }}" alt="{{ image.title ?? heading_title }}"/></a>*/
/*           {% endfor %}*/
/*         </div>*/
/*         {% if journal2.settings.get('quickview_description_position') == 'image' %}*/
/*         <div id="tab-description" class="tab-content">{{ description }}</div>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="right">*/
/*         {% if journal2.settings.get('product_page_title_position', 'top') == 'right' %}*/
/*           <h1 class="heading-title" itemprop="name">{{ heading_title }}</h1>*/
/*         {% endif %}*/
/*         <div id="product" class="product-options">*/
/*           <ul class="list-unstyled description">*/
/*             {% if journal2.settings.get('product_views') %}*/
/*               <li class="product-views-count">{{ journal2.settings.get('product_page_options_views_text') }}: {{ journal2.settings.get('product_views') }}</li>*/
/*             {% endif %}*/
/*             {% if journal2.settings.get('manufacturer_image') == 'on' %}*/
/*               <li class="brand-logo">*/
/*                 <a href="{{ manufacturers }}" class="brand-image">*/
/*                   <img src="{{ manufacturer_image }}" width="{{ manufacturer_image_width }}" height="{{ manufacturer_image_height }}" alt="{{ manufacturer }}"/>*/
/*                 </a>*/
/*                 {% if manufacturer_image_name %}*/
/*                   <a href="{{ manufacturers }}" class="brand-logo-text">*/
/*                     {{ manufacturer_image_name }}*/
/*                   </a>*/
/*                 {% endif %}*/
/*               </li>*/
/*             {% else %}*/
/*               {% if manufacturer %}*/
/*                 <li class="p-brand">{{ text_manufacturer }} <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*               {% endif %}*/
/*             {% endif %}*/
/*             <li class="p-model">{{ text_model }} <span class="p-model" itemprop="model">{{ model }}</span></li>*/
/*             {% if reward %}*/
/*               <li class="p-rewards">{{ text_reward }} <span class="p-rewards">{{ reward }}</span></li>*/
/*             {% endif %}*/
/*             <li class="p-stock">{{ text_stock }} <span class="journal-stock {{ stock_status }}">{{ stock }}</span></li>*/
/*           </ul>*/
/*           {% if journal2.settings.get('product_sold') %}*/
/*             <div class="product-sold-count-text">{{ journal2.settings.get('product_sold') }}</div>*/
/*           {% endif %}*/
/*           {% if date_end and journal2.settings.get('show_countdown_product_page', 'on') == 'on' %}*/
/*             <div class="countdown-wrapper">*/
/*               <div class="expire-text">{{ journal2.settings.get('countdown_product_page_title') }}</div>*/
/*               <div class="countdown"></div>*/
/*             </div>*/
/*             <script>Journal.countdown($('.right .countdown'), '{{ date_end }}');</script>*/
/*           {% endif %}*/
/*           {% if price %}*/
/*             <ul class="list-unstyled price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">*/
/*               <meta itemprop="itemCondition" content="http://schema.org/NewCondition"/>*/
/*               <meta itemprop="priceCurrency" content="{{ journal2.settings.get('product_price_currency') }}"/>*/
/*               <meta itemprop="price" content="{{ journal2.settings.get('product_price') }}"/>*/
/*               {% if journal2.settings.get('product_in_stock') == 'yes' %}*/
/*                 <link itemprop="availability" href="http://schema.org/InStock"/>*/
/*               {% endif %}*/
/*               {% if not special %}*/
/*                 <li class="product-price">{{ price }}</li>*/
/*               {% else %}*/
/*                 <li class="price-old">{{ price }}</li>*/
/*                 <li class="price-new">{{ special }}</li>*/
/*               {% endif %}*/
/*               {% if tax %}*/
/*                 <li class="price-tax">{{ text_tax }} {{ tax }}</li>*/
/*               {% endif %}*/
/*               {% if points %}*/
/*                 <li class="reward">*/
/*                   <small>{{ text_points }} {{ points }}</small>*/
/*                 </li>*/
/*               {% endif %}*/
/*               {% for discount in discounts %}*/
/*                 <li class="discounts">{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*               {% endfor %}*/
/*             </ul>*/
/*           {% endif %}*/
/*           {% if options and journal2.settings.get('quickview_product_options') == '1' %}*/
/*             <div class="options {{ journal2.settings.get('product_page_options_push_classes') }}">*/
/*               <h3>{{ text_option }}</h3>*/
/*               {% for option in options %}*/
/*                 {% if option.type == 'select' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                       <option value="">{{ text_select }}</option>*/
/*                       {% for option_value in option.product_option_value %}*/
/*                         <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                           {% if option_value.price %}*/
/*                             ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                           {% endif %} </option>*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'radio' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label">{{ option.name }}</label>*/
/*                     <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                         <div class="radio">*/
/*                           <label>*/
/*                             <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}"/>*/
/*                             {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail"/> {% endif %}*/
/*                             {{ option_value.name }}*/
/*                             {% if option_value.price %}*/
/*                               ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                             {% endif %} </label>*/
/*                         </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'checkbox' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label">{{ option.name }}</label>*/
/*                     <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                         <div class="checkbox">*/
/*                           <label>*/
/*                             <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}"/>*/
/* */
/* 				{# // << Product Option Image PRO module #}*/
/* 	*/
/* 				{% if option['type'] == 'checkbox' and (option_value['poip_image'] ?? false ) %}*/
/* 					<img src="{{ option_value['poip_image'] }}" alt="{{ option_value['name'] }}{{ (option_value['price'] ? ' '~option_value['price_prefix']~option_value['price'] : '') }} " class="img-thumbnail" /> */
/* 				{% endif %}*/
/* 				*/
/* 				{# // >> Product Option Image PRO module #}*/
/* 			*/
/*                             {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail"/> {% endif %}*/
/*                             {{ option_value.name }}*/
/*                             {% if option_value.price %}*/
/*                               ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                             {% endif %} </label>*/
/*                         </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'text' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'textarea' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'file' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label">{{ option.name }}</label>*/
/*                     <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                     <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}"/>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'date' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <div class="input-group date">*/
/*                       <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'datetime' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <div class="input-group datetime">*/
/*                       <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'time' %}*/
/*                   <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <div class="input-group time">*/
/*                       <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                       <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </div>*/
/*             <script>Journal.enableSelectOptionAsButtonsList();</script>*/
/*           {% endif %}*/
/*           {% if recurrings %}*/
/*             <hr>*/
/*             <h3>{{ text_payment_recurring }}</h3>*/
/*             <div class="form-group required">*/
/*               <select name="recurring_id" class="form-control">*/
/*                 <option value="">{{ text_select }}</option>*/
/*                 {% for recurring in recurrings %}*/
/*                   <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*               <div class="help-block" id="recurring-description"></div>*/
/*             </div>*/
/*           {% endif %}*/
/*           <div class="form-group cart {% if labels and labels.outofstock %} outofstock {% endif %}">*/
/*             <div>*/
/*               {% if not journal2.settings.get('hide_add_to_cart_button') %}*/
/*               <span class="qty">*/
/*                 <label class="control-label text-qty" for="input-quantity">{{ entry_qty }}</label>*/
/*                 <input type="text" name="quantity" value="{{ minimum }}" size="2" data-min-value="{{ minimum }}" id="input-quantity" class="form-control" />*/
/*                 <input type="hidden" name="product_id" value="{{ product_id }}" />*/
/*               </span>*/
/*               <button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="button"><span class="button-cart-text">{{ button_cart }}</span></button>*/
/*               <a id="more-details" class="button hint--top" data-hint="{{ journal2.settings.get('quickview_more_details_text') }}" target="_top" href="{{ url.link('product/product&product_id=' ~ product_id) }}"><i></i></a>*/
/*               {% else %}*/
/*               <a id="more-details" class="button enquiry-button" target="_top" href="{{ url.link('product/product&product_id=' ~ product_id) }}">{{ journal2.settings.get('quickview_more_details_text') }}</a>*/
/*               {% endif %}*/
/*               <script>*/
/*                 /* quantity buttons *//* */
/*                 var $input = $('.cart input[name="quantity"]');*/
/*                 function up() {*/
/*                   var val = parseInt($input.val(), 10) + 1 || parseInt($input.attr('data-min-value'), 10);*/
/*                   $input.val(val);*/
/*                 }*/
/*                 function down() {*/
/*                   var val = parseInt($input.val(), 10) - 1 || 0;*/
/*                   var min = parseInt($input.attr('data-min-value'), 10) || 1;*/
/*                   $input.val(Math.max(val, min));*/
/*                 }*/
/*                 $('<a href="javascript:;" class="journal-stepper">-</a>').insertBefore($input).click(down);*/
/*                 $('<a href="javascript:;" class="journal-stepper">+</a>').insertAfter($input).click(up);*/
/*                 $input.keydown(function (e) {*/
/*                   if (e.which === 38) {*/
/*                     up();*/
/*                     return false;*/
/*                   }*/
/*                   if (e.which === 40) {*/
/*                     down();*/
/*                     return false;*/
/*                   }*/
/*                 });*/
/*               </script>*/
/*             </div>*/
/*           </div>*/
/*           {% if minimum > 1 %}*/
/*             <div class="alert alert-info information"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*           {% endif %}*/
/*           <div class="wishlist-compare">*/
/*               <span class="links">*/
/*                   <a onclick="parent.addToWishList('{{ product_id }}');">{{ button_wishlist }}</a>*/
/*                   <a onclick="parent.addToCompare('{{ product_id }}');">{{ button_compare }}</a>*/
/*               </span>*/
/*           </div>*/
/*           {% if journal2.settings.get('quickview_description_position') == 'options' %}*/
/*             <div id="tab-description" class="tab-content">{{ description }}</div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% if journal2.settings.get('quickview_description_position') == 'bottom' %}*/
/*       <div id="tab-description" class="tab-content">{{ description }}</div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/*   $('select[name=\'recurring_id\'], input[name="quantity"]').change(function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=product/product/getRecurringDescription',*/
/*       type: 'post',*/
/*       data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/*       dataType: 'json',*/
/*       beforeSend: function () {*/
/*         $('#recurring-description').html('');*/
/*       },*/
/*       success: function (json) {*/
/*         $('.alert-dismissible, .text-danger').remove();*/
/* */
/*         if (json['success']) {*/
/*           $('#recurring-description').html(json['success']);*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/*   //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('#button-cart').on('click', function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=checkout/cart/add',*/
/*       type: 'post',*/
/*       data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/*       dataType: 'json',*/
/*       beforeSend: function () {*/
/*         $('#button-cart').button('loading');*/
/*       },*/
/*       complete: function () {*/
/*         $('#button-cart').button('reset');*/
/*       },*/
/*       success: function (json) {*/
/*         $('.alert-dismissible, .text-danger').remove();*/
/*         $('.form-group').removeClass('has-error');*/
/* */
/*         if (json['error']) {*/
/*           if (json['error']['option']) {*/
/*             for (i in json['error']['option']) {*/
/*               var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/*               if (element.parent().hasClass('input-group')) {*/
/*                 element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*               } else {*/
/*                 element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/*               }*/
/*             }*/
/*           }*/
/* */
/*           if (json['error']['recurring']) {*/
/*             $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/*           }*/
/* */
/*           // Highlight any found errors*/
/*           $('.text-danger').parent().addClass('has-error');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           if (!parent.Journal.showNotification(json['success'], json['image'], true)) {*/
/*             parent.$('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');*/
/*           }*/
/* */
/*           parent.$('.success').fadeIn('slow');*/
/* */
/*           parent.$('#cart-total').html(json['total']);*/
/* */
/*           parent.$('#cart ul').load('index.php?route=common/cart/info ul li');*/
/* */
/*           if (json['redirect']) {*/
/*             top.location.href = json['redirect'];*/
/*           }*/
/*         }*/
/*       },*/
/*       error: function (xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/*   //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('.date').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickTime: false*/
/*   });*/
/* */
/*   $('.datetime').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickDate: true,*/
/*     pickTime: true*/
/*   });*/
/* */
/*   $('.time').datetimepicker({*/
/*     language: document.cookie.match(new RegExp('language=([^;]+)')) && document.cookie.match(new RegExp('language=([^;]+)'))[1],*/
/*     pickDate: false*/
/*   });*/
/* */
/*   $('button[id^=\'button-upload\']').on('click', function () {*/
/*     var node = this;*/
/* */
/*     $('#form-upload').remove();*/
/* */
/*     $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*     $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*     if (typeof timer != 'undefined') {*/
/*       clearInterval(timer);*/
/*     }*/
/* */
/*     timer = setInterval(function () {*/
/*       if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*         clearInterval(timer);*/
/* */
/*         $.ajax({*/
/*           url: 'index.php?route=tool/upload',*/
/*           type: 'post',*/
/*           dataType: 'json',*/
/*           data: new FormData($('#form-upload')[0]),*/
/*           cache: false,*/
/*           contentType: false,*/
/*           processData: false,*/
/*           beforeSend: function () {*/
/*             $(node).button('loading');*/
/*           },*/
/*           complete: function () {*/
/*             $(node).button('reset');*/
/*           },*/
/*           success: function (json) {*/
/*             $('.text-danger').remove();*/
/* */
/*             if (json['error']) {*/
/*               $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/*             }*/
/* */
/*             if (json['success']) {*/
/*               alert(json['success']);*/
/* */
/*               $(node).parent().find('input').val(json['code']);*/
/*             }*/
/*           },*/
/*           error: function (xhr, ajaxOptions, thrownError) {*/
/*             alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*           }*/
/*         });*/
/*       }*/
/*     }, 500);*/
/*   });*/
/*   //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('#review').delegate('.pagination a', 'click', function (e) {*/
/*     e.preventDefault();*/
/* */
/*     $('#review').fadeOut('slow');*/
/* */
/*     $('#review').load(this.href);*/
/* */
/*     $('#review').fadeIn('slow');*/
/*   });*/
/* */
/*   $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/*   $('#button-review').on('click', function () {*/
/*     $.ajax({*/
/*       url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/*       type: 'post',*/
/*       dataType: 'json',*/
/*       data: $("#form-review").serialize(),*/
/*       beforeSend: function () {*/
/*         $('#button-review').button('loading');*/
/*       },*/
/*       complete: function () {*/
/*         $('#button-review').button('reset');*/
/*       },*/
/*       success: function (json) {*/
/*         $('.alert-dismissible').remove();*/
/* */
/*         if (json['error']) {*/
/*           $('#review').after('<div class="alert alert-danger alert-dismissible warning"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/*         }*/
/* */
/*         if (json['success']) {*/
/*           $('#review').after('<div class="alert alert-success alert-dismissible success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/*           $('input[name=\'name\']').val('');*/
/*           $('textarea[name=\'text\']').val('');*/
/*           $('input[name=\'rating\']:checked').prop('checked', false);*/
/*         }*/
/*       }*/
/*     });*/
/*   });*/
/* */
/*   $(document).ready(function () {*/
/*     $('.thumbnails').magnificPopup({*/
/*       type: 'image',*/
/*       delegate: 'a',*/
/*       gallery: {*/
/*         enabled: true*/
/*       }*/
/*     });*/
/*   });*/
/*   //--></script>*/
/* <script>*/
/*   Journal.productPage();*/
/*   {% if journal2.settings.get('product_page_auto_update_price', '1') == '1' %}*/
/*   Journal.enableProductOptions();*/
/*   Journal.updatePrice = true;*/
/*   {% endif %}*/
/*   {% if journal2.settings.get('quickview_cloud_zoom') == '1' %}*/
/*   Journal.enableCloudZoom('inner');*/
/*   {% endif %}*/
/*   $('.image > a').live('click', function () {*/
/*     top.location.href = "index.php?route=product/product&product_id={{ product_id }}";*/
/*     return false;*/
/*   });*/
/*   {{ journal2.settings.get('custom_js') }}*/
/* </script>*/
/* */
/* 				<!-- << Live Price -->*/
/* 				*/
/* 				{% if liveprice_installed ?? 0 %}*/
/* 					<script type="text/javascript">*/
/* 						(function($){*/
/* 							var lp_product_id = {{ lp_product_id }};*/
/* 							*/
/* 							if ( lp_product_id ) {*/
/* 							*/
/* 								var params = {*/
/* 									'lp_settings' 				: {{ ( liveprice_settings ?? 0 ) ? liveprice_settings|json_encode : '[]' }},*/
/* 									'theme_name'					: '{{ lp_theme_name ?? '' }}',*/
/* 									'product_id'					: lp_product_id,*/
/* 									'get_custom_methods'	: ( typeof(liveprice_getCustomMethodsOfTheme) == 'function' ? liveprice_getCustomMethodsOfTheme : false ),*/
/* 								};*/
/* 								*/
/* 								// standard for most of themes*/
/* 								$container = $('body, div:first').first();*/
/* 								*/
/* 								var liveprice = $container.liveopencart_LivePrice( params );*/
/* 								*/
/* 							}*/
/* 						})(jQuery);*/
/* 					</script>*/
/* 				{% endif %}*/
/* 		*/
/* 				<!-- >> Live Price -->*/
/* 			*/
/* */
/* 				<!-- << Product Option Image PRO module -->*/
/* 				{% if poip_installed ?? false %}*/
/* 					<script  type = "text/javascript" ><!--*/
/* 						(function(){*/
/* 							var poip_product_settings = {*/
/* 								product_option_ids 	: {{ poip_product_option_ids|json_encode }},*/
/* 								images 							: {{ poip_images|json_encode }},*/
/* 								images_by_povs			: {{ poip_images_by_povs|json_encode }},*/
/* 								module_settings 		: {{ poip_settings|json_encode }},*/
/* 								options_settings 		: {{ poip_product_settings|json_encode }},*/
/* 								poip_ov 						: {{ poip_ov ?? 0 }},*/
/* 								default_image_title : '{{ heading_title }}',*/
/* 							};*/
/* 						*/
/* 							var poip_product = getPoipProduct();*/
/* 							if ( setPoipProductCustomMethods ) {*/
/* 								setPoipProductCustomMethods(poip_product);*/
/* 							}*/
/* 							*/
/* 							poip_common.initObject(poip_product, poip_product_settings);*/
/* 						})();*/
/* 					//--></script>*/
/* 				{% endif %}*/
/* 				*/
/*       <!-- >> Product Option Image PRO module -->*/
/*       */
/* */
/*         {% if ( pcop_data ?? false ) %}*/
/* 					<!-- << Parent-child Options -->*/
/* 					<script type="text/javascript"><!--*/
/* 					*/
/* 						var pcop_data = {{ (pcop_data ?? 0) ? pcop_data|json_encode : '[]' }};*/
/* 						var pcop_theme_name = '{{ pcop_theme_name ?? '' }}';*/
/* 						*/
/* 						if ( typeof(pcop_front) != 'undefined' ) {*/
/* 							pcop_front.init(pcop_data, pcop_theme_name);*/
/* 						}*/
/* 					*/
/* 					//--></script>*/
/* 					<!-- >> Parent-child Options -->*/
/*         {% endif %}*/
/*       */
/* </body>*/
/* </html>*/
/* */
