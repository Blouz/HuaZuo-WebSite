<?php

/* journal2/template/product/product.twig */
class __TwigTemplate_f99e8f6878290a1412e608a58247551594d48cbac149cfb123e3bce08fabca71 extends Twig_Template
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
        echo "<!--catalog/view/theme/journal2/template/product/product.twig  -->
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
        echo " product-page-content\" itemscope itemtype=\"http://schema.org/Product\">
      ";
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_position", 1 => "top"), "method") == "top")) {
            // line 19
            echo "        <h1 class=\"heading-title\" itemprop=\"name\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
      ";
        }
        // line 21
        echo "      ";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row product-info ";
        // line 22
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "split_ratio"), "method");
        echo "\">
        <div class=\"left\" style=\"height:550px;position:relative;\">
          ";
        // line 24
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 25
            echo "            <div class=\"image\">
              ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) ? $context["labels"] : null));
            foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                // line 27
                echo "                <span class=\"label-";
                echo $context["label"];
                echo "\"><b>";
                echo $context["name"];
                echo "</b></span>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "              <a href=\"";
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
            // line 31
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery"), "method")) {
                // line 32
                echo "              <div class=\"gallery-text\"><span>";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_text"), "method");
                echo "</span></div>
            ";
            }
            // line 34
            echo "          ";
        }
        // line 35
        echo "          ";
        if ((isset($context["images"]) ? $context["images"] : null)) {
            // line 36
            echo "            <div id=\"product-gallery\" class=\"image-additional ";
            echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) ? ("journal-carousel") : ("image-additional-grid"));
            echo "\">
              ";
            // line 37
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 38
                echo "              <div class=\"swiper\">
                <div class=\"swiper-container swiper-container-vertical\">
                  <div class=\"swiper-wrapper\">
                    ";
            }
            // line 42
            echo "                    ";
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 43
                echo "                      <a class=\"swiper-slide\" ";
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
            // line 45
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 46
                echo "                      <a class=\"swiper-slide\" ";
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
            // line 48
            echo "                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 49
                echo "                  </div>
                </div>
                ";
                // line 51
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_arrows"), "method") != "never")) {
                    // line 52
                    echo "                ";
                }
                // line 53
                echo "              </div>
              ";
            }
            // line 55
            echo "            </div>
          ";
            // line 56
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel"), "method")) {
                // line 57
                echo "            <script>
              (function () {
                var opts = {
                  slidesPerView: parseInt('";
                // line 60
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => "5"), "method");
                echo "', 10),
                  slidesPerGroup: parseInt('";
                // line 61
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_width", 1 => "5"), "method");
                echo "', 10),
                  spaceBetween: parseInt('";
                // line 62
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_additional_spacing", 1 => "15"), "method");
                echo "', 10),
                  ";
                // line 63
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_arrows"), "method") != "never")) {
                    // line 64
                    echo "                  nextButton: \$('#product-gallery .swiper-button-next'),
                  prevButton: \$('#product-gallery .swiper-button-prev'),
                  ";
                }
                // line 67
                echo "                  autoplay: ";
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_autoplay"), "method")) ? ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_transition_delay", 1 => 4000), "method")) : ("false"));
                echo ",
                  speed: 400,
                  touchEventsTarget: ";
                // line 69
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_gallery_carousel_touchdrag"), "method")) {
                    echo " 'container' ";
                } else {
                    echo " false ";
                }
                // line 70
                echo "                };

                \$('#product-gallery .swiper-container').swiper(opts);
              })();
            </script>
          ";
            }
            // line 76
            echo "          ";
        }
        // line 77
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_description_image", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 78
            echo "            <div class=\"journal-custom-tab\">
              ";
            // line 79
            if ($this->getAttribute($context["tab"], "has_icon", array())) {
                // line 80
                echo "                <div class=\"block-icon block-icon-left\" style=\"";
                echo $this->getAttribute($context["tab"], "icon_css", array());
                echo "\">";
                echo $this->getAttribute($context["tab"], "icon", array());
                echo "</div>
              ";
            }
            // line 82
            echo "              ";
            if ($this->getAttribute($context["tab"], "name", array())) {
                // line 83
                echo "                <h3>";
                echo $this->getAttribute($context["tab"], "name", array());
                echo "</h3>
              ";
            }
            // line 85
            echo "              ";
            echo $this->getAttribute($context["tab"], "content", array());
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "          <div class=\"image-gallery\" style=\"display: none !important;\">
            ";
        // line 89
        if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
            // line 90
            echo "              <a href=\"";
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
        // line 92
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 93
            echo "              <a href=\"";
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
        // line 95
        echo "          </div>
          ";
        // line 96
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_status"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_position"), "method") == "left")) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method")) > 0))) {
            // line 97
            echo "            <div class=\"social share-this\">
              <div class=\"social-loaded\">
                <script type=\"text/javascript\">var switchTo5x = true;</script>
                <script type=\"text/javascript\" src=\"https://ws.sharethis.com/button/buttons.js\"></script>
                <script type=\"text/javascript\">stLight.options({publisher: \"";
            // line 101
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_account_key"), "method");
            echo "\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
                ";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 103
                echo "                  <span class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method");
                echo "\" displayText=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method")) ? ($this->getAttribute($context["item"], "name", array())) : (""));
                echo "\"></span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "              </div>
            </div>
          ";
        }
        // line 108
        echo "          <meta itemprop=\"description\" content=\"";
        echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_description"), "method");
        echo "\"/>

          <!-- 评论 -->
          <div class=\"product-tabs\">
          <div class=\"recommend\" style=\"background-color:#F3F3F3;height:280px\">
            <div class=\"recommendTop\">
              <span>推荐装裱</span>
            </div>
            <!-- 推荐装裱 -->
            <div class=\"recommendCon\">
                
            </div>
          </div>
            ";
        // line 121
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_status"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_position"), "method") == "bottom")) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method")) > 0))) {
            // line 122
            echo "              <div class=\"social share-this\">
                <div class=\"social-loaded\">
                  <script type=\"text/javascript\">var switchTo5x = true;</script>
                  <script type=\"text/javascript\" src=\"https://ws.sharethis.com/button/buttons.js\"></script>
                  <script type=\"text/javascript\">stLight.options({publisher: \"";
            // line 126
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_account_key"), "method");
            echo "\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
                  ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 128
                echo "                    <span class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method");
                echo "\" displayText=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method")) ? ($this->getAttribute($context["item"], "name", array())) : (""));
                echo "\"></span>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "                </div>
              </div>
            ";
        }
        // line 133
        echo "            <ul id=\"tabs\" class=\"nav nav-tabs htabs\" style=\"margin-top:50px\">
              ";
        // line 134
        $context["is_active"] = true;
        // line 135
        echo "              ";
        if (((isset($context["description"]) ? $context["description"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_product_description"), "method"))) {
            // line 136
            echo "                <li ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " class=\"active\" ";
                $context["is_active"] = false;
                echo " ";
            }
            echo "><a href=\"#tab-description\" data-toggle=\"tab\">";
            echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
            echo "</a></li>
              ";
        }
        // line 138
        echo "              ";
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 139
            echo "                <li ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " class=\"active\" ";
                $context["is_active"] = false;
                echo " ";
            }
            echo "><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
              ";
        }
        // line 141
        echo "              ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 142
            echo "                <li ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " class=\"active\" ";
                $context["is_active"] = false;
                echo " ";
            }
            echo "><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
              ";
        }
        // line 144
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_tabs", 1 => array()), "method"));
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
            // line 145
            echo "                <li ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " class=\"active\" ";
                $context["is_active"] = false;
                echo " ";
            }
            echo "><a href=\"#additional-product-tab-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" data-toggle=\"tab\">";
            echo $this->getAttribute($context["tab"], "name", array());
            echo "</a></li>
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
        // line 147
        echo "            </ul>
            <div class=\"tabs-content\">
              ";
        // line 149
        $context["is_active"] = true;
        // line 150
        echo "              ";
        if (((isset($context["description"]) ? $context["description"] : null) &&  !$this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_product_description"), "method"))) {
            // line 151
            echo "                <div class=\"tab-pane tab-content ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active ";
                $context["is_active"] = false;
            }
            echo "\" id=\"tab-description\">";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "</div>
              ";
        }
        // line 153
        echo "              ";
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 154
            echo "                <div class=\"tab-pane tab-content ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active ";
                $context["is_active"] = false;
            }
            echo "\" id=\"tab-specification\">
                  <table class=\"table table-bordered attribute\">
                    ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 157
                echo "                      <thead>
                      <tr>
                        <td colspan=\"2\"><strong>";
                // line 159
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                      </tr>
                      </thead>
                      <tbody>
                      ";
                // line 163
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 164
                    echo "                        <tr>
                          <td>";
                    // line 165
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                          <td>";
                    // line 166
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                        </tr>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 169
                echo "                      </tbody>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "                  </table>
                </div>
              ";
        }
        // line 174
        echo "              ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 175
            echo "                <div class=\"tab-pane tab-content ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active ";
                $context["is_active"] = false;
            }
            echo "\" id=\"tab-review\" ";
            if ((isset($context["rating"]) ? $context["rating"] : null)) {
                echo " itemprop=\"aggregateRating\" itemscope itemtype=\"http://schema.org/AggregateRating\" ";
            }
            echo ">
                  ";
            // line 176
            if ((isset($context["rating"]) ? $context["rating"] : null)) {
                // line 177
                echo "                    <meta itemprop=\"ratingValue\" content=\"";
                echo (isset($context["rating"]) ? $context["rating"] : null);
                echo "\"/>
                    <meta itemprop=\"reviewCount\" content=\"";
                // line 178
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_num_reviews"), "method");
                echo "\"/>
                    <meta itemprop=\"bestRating\" content=\"5\"/>
                    <meta itemprop=\"worstRating\" content=\"1\"/>
                  ";
            }
            // line 182
            echo "                  <form class=\"form-horizontal\" id=\"form-review\">
                    <div id=\"review\"></div>
                    <h2 id=\"review-title\">";
            // line 184
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                    ";
            // line 185
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 186
                echo "                      <div class=\"form-group required\">
                        <div class=\"col-sm-12\">
                          <label class=\"control-label\" for=\"input-name\">";
                // line 188
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label>
                          <input type=\"text\" name=\"name\" value=\"";
                // line 189
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <div class=\"col-sm-12\">
                          <label class=\"control-label\" for=\"input-review\">";
                // line 194
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label>
                          <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                          <div class=\"help-block\">";
                // line 196
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                        </div>
                      </div>
                      <div class=\"form-group required\">
                        <div class=\"col-sm-12\">
                          <label class=\"control-label\">";
                // line 201
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                          &nbsp;&nbsp;&nbsp; ";
                // line 202
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                          <input type=\"radio\" name=\"rating\" value=\"1\"/>
                          &nbsp;
                          <input type=\"radio\" name=\"rating\" value=\"2\"/>
                          &nbsp;
                          <input type=\"radio\" name=\"rating\" value=\"3\"/>
                          &nbsp;
                          <input type=\"radio\" name=\"rating\" value=\"4\"/>
                          &nbsp;
                          <input type=\"radio\" name=\"rating\" value=\"5\"/>
                          &nbsp;";
                // line 212
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                      </div>
                      ";
                // line 214
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                      <div class=\"buttons clearfix\">
                        <div class=\"pull-right\">
                          <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 217
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary button\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                        </div>
                      </div>
                    ";
            } else {
                // line 221
                echo "                      ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                    ";
            }
            // line 223
            echo "                  </form>
                </div>
              ";
        }
        // line 226
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_tabs", 1 => array()), "method"));
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
            // line 227
            echo "                <div id=\"additional-product-tab-";
            echo $this->getAttribute($context["loop"], "index", array());
            echo "\" class=\"tab-pane tab-content journal-custom-tab ";
            if ((isset($context["is_active"]) ? $context["is_active"] : null)) {
                echo " active ";
                $context["is_active"] = false;
            }
            echo "\">";
            echo $this->getAttribute($context["tab"], "content", array());
            echo "</div>
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
        // line 229
        echo "            </div>
          </div>
        </div>
        ";
        // line 232
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 233
            echo "          ";
            $context["class"] = "col-sm-6";
            // line 234
            echo "        ";
        } else {
            // line 235
            echo "          ";
            $context["class"] = "col-sm-4";
            // line 236
            echo "        ";
        }
        // line 237
        echo "        <div class=\"right\">
          ";
        // line 238
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_title_position", 1 => "top"), "method") == "right")) {
            // line 239
            echo "            <h1 class=\"heading-title\" itemprop=\"name\">";
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "</h1>
          ";
        }
        // line 241
        echo "          <div id=\"product\" class=\"product-options\">
            ";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_description_top", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 243
            echo "              <div class=\"journal-custom-tab\">
                ";
            // line 244
            if ($this->getAttribute($context["tab"], "has_icon", array())) {
                // line 245
                echo "                  <div class=\"block-icon block-icon-left\" style=\"";
                echo $this->getAttribute($context["tab"], "icon_css", array());
                echo "\">";
                echo $this->getAttribute($context["tab"], "icon", array());
                echo "</div>
                ";
            }
            // line 247
            echo "                ";
            if ($this->getAttribute($context["tab"], "name", array())) {
                // line 248
                echo "                  <h3>";
                echo $this->getAttribute($context["tab"], "name", array());
                echo "</h3>
                ";
            }
            // line 250
            echo "                ";
            echo $this->getAttribute($context["tab"], "content", array());
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "            <ul class=\"list-unstyled description\">
              ";
        // line 254
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_views"), "method")) {
            // line 255
            echo "                <li class=\"product-views-count\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_views_text"), "method");
            echo ": ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_views"), "method");
            echo "</li>
              ";
        }
        // line 257
        echo "              ";
        if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "manufacturer_image"), "method") == "on")) {
            // line 258
            echo "                <li class=\"brand-logo\">
                  <a href=\"";
            // line 259
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\" class=\"brand-image\">
                    <img src=\"";
            // line 260
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
            // line 262
            if ((isset($context["manufacturer_image_name"]) ? $context["manufacturer_image_name"] : null)) {
                // line 263
                echo "                    <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\" class=\"brand-logo-text\">
                      ";
                // line 264
                echo (isset($context["manufacturer_image_name"]) ? $context["manufacturer_image_name"] : null);
                echo "
                    </a>
                  ";
            }
            // line 267
            echo "                </li>
              ";
        } else {
            // line 269
            echo "                ";
            if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
                // line 270
                echo "                  <li class=\"p-brand\">";
                echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
                echo " <a href=\"";
                echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
                echo "\">";
                echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
                echo "</a></li>
                ";
            }
            // line 272
            echo "              ";
        }
        // line 273
        echo "              <li class=\"p-model\">";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " <span class=\"p-model\" itemprop=\"model\">";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</span></li>
              ";
        // line 274
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 275
            echo "                <li class=\"p-rewards\">";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " <span class=\"p-rewards\">";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</span></li>
              ";
        }
        // line 277
        echo "              <li class=\"p-stock\">";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " <span class=\"journal-stock ";
        echo (isset($context["stock_status"]) ? $context["stock_status"] : null);
        echo "\">";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</span></li>
            </ul>
            ";
        // line 279
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_sold"), "method")) {
            // line 280
            echo "              <div class=\"product-sold-count-text\">";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_sold"), "method");
            echo "</div>
            ";
        }
        // line 282
        echo "            ";
        if (((isset($context["date_end"]) ? $context["date_end"] : null) && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown_product_page", 1 => "on"), "method") == "on"))) {
            // line 283
            echo "              <div class=\"countdown-wrapper\">
                <div class=\"expire-text\">";
            // line 284
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "countdown_product_page_title"), "method");
            echo "</div>
                <div class=\"countdown\"></div>
              </div>
              <script>Journal.countdown(\$('.right .countdown'), '";
            // line 287
            echo (isset($context["date_end"]) ? $context["date_end"] : null);
            echo "');</script>
            ";
        }
        // line 289
        echo "            ";
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 290
            echo "              <ul class=\"list-unstyled price\" itemprop=\"offers\" itemscope itemtype=\"http://schema.org/Offer\">
                <meta itemprop=\"itemCondition\" content=\"http://schema.org/NewCondition\"/>
                <meta itemprop=\"priceCurrency\" content=\"";
            // line 292
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_price_currency"), "method");
            echo "\"/>
                <meta itemprop=\"price\" content=\"";
            // line 293
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_price"), "method");
            echo "\"/>
                ";
            // line 294
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_in_stock"), "method") == "yes")) {
                // line 295
                echo "                  <link itemprop=\"availability\" href=\"http://schema.org/InStock\"/>
                ";
            }
            // line 297
            echo "                ";
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 298
                echo "                  <li class=\"product-price\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</li>
                ";
            } else {
                // line 300
                echo "                  <li class=\"price-old\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</li>
                  <li class=\"price-new\" ";
                // line 301
                if ((isset($context["date_end"]) ? $context["date_end"] : null)) {
                    echo "data-end-date=\"";
                    echo (isset($context["date_end"]) ? $context["date_end"] : null);
                    echo "\"";
                }
                echo ">";
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</li>
                ";
            }
            // line 303
            echo "                ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 304
                echo "                  <li class=\"price-tax\">";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>
                ";
            }
            // line 306
            echo "                ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 307
                echo "                  <li class=\"reward\">
                    <small>";
                // line 308
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</small>
                  </li>
                ";
            }
            // line 311
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                // line 312
                echo "                  <li class=\"discounts\">";
                echo $this->getAttribute($context["discount"], "quantity", array());
                echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                echo $this->getAttribute($context["discount"], "price", array());
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 314
            echo "              </ul>
            ";
        }
        // line 316
        echo "            ";
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 317
            echo "              <div class=\"options ";
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_page_options_push_classes"), "method");
            echo "\">
                ";
            // line 318
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 319
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 320
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                     
                      <select name=\"option[";
                    // line 322
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                        <option value=\"\">";
                    // line 323
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                        ";
                    // line 324
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 325
                        echo "                          <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                            ";
                        // line 326
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 327
                            echo "                              (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                            ";
                        }
                        // line 328
                        echo " </option>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 330
                    echo "                      </select>
                    </div>
                  ";
                }
                // line 333
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 334
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                     
                      <div id=\"input-option";
                    // line 336
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 337
                        echo "                          <div class=\"radio\">
                            <label>
                              <input type=\"radio\" name=\"option[";
                        // line 339
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                              ";
                        // line 340
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
                        // line 341
                        echo "                              ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                              ";
                        // line 342
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 343
                            echo "                                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                              ";
                        }
                        // line 344
                        echo " </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 346
                    echo " </div>
                    </div>
                  ";
                }
                // line 349
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 350
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\">";
                    // line 351
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <div id=\"input-option";
                    // line 352
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 353
                        echo "                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" name=\"option[";
                        // line 355
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>

\t\t\t\t";
                        // line 358
                        echo "\t
\t\t\t\t";
                        // line 359
                        if ((($this->getAttribute($context["option"], "type", array(), "array") == "checkbox") && ((($this->getAttribute($context["option_value"], "poip_image", array(), "array", true, true) &&  !(null === $this->getAttribute($context["option_value"], "poip_image", array(), "array")))) ? ($this->getAttribute($context["option_value"], "poip_image", array(), "array")) : (false)))) {
                            // line 360
                            echo "\t\t\t\t\t<img src=\"";
                            echo $this->getAttribute($context["option_value"], "poip_image", array(), "array");
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array(), "array");
                            echo (($this->getAttribute($context["option_value"], "price", array(), "array")) ? (((" " . $this->getAttribute($context["option_value"], "price_prefix", array(), "array")) . $this->getAttribute($context["option_value"], "price", array(), "array"))) : (""));
                            echo " \" class=\"img-thumbnail\" /> 
\t\t\t\t";
                        }
                        // line 362
                        echo "\t\t\t\t
\t\t\t\t";
                        // line 364
                        echo "\t\t\t
                              ";
                        // line 365
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
                        // line 366
                        echo "                              ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                              ";
                        // line 367
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 368
                            echo "                                (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                              ";
                        }
                        // line 369
                        echo " </label>
                          </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 371
                    echo " </div>
                    </div>
                  ";
                }
                // line 374
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 375
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 376
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <input type=\"text\" name=\"option[";
                    // line 377
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
                // line 380
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 381
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 382
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <textarea name=\"option[";
                    // line 383
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
                // line 386
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 387
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\">";
                    // line 388
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <button type=\"button\" id=\"button-upload";
                    // line 389
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                      <input type=\"hidden\" name=\"option[";
                    // line 390
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"/>
                    </div>
                  ";
                }
                // line 393
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 394
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 395
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <div class=\"input-group date\">
                        <input type=\"text\" name=\"option[";
                    // line 397
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
                // line 403
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 404
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 405
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <div class=\"input-group datetime\">
                        <input type=\"text\" name=\"option[";
                    // line 407
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
                // line 413
                echo "                  ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 414
                    echo "                    <div class=\"option form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo " option-";
                    echo $this->getAttribute($context["option"], "type", array());
                    echo "\">
                      <label class=\"control-label\" for=\"input-option";
                    // line 415
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                      <div class=\"input-group time\">
                        <input type=\"text\" name=\"option[";
                    // line 417
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
                // line 423
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 424
            echo "              </div>
              <script>Journal.enableSelectOptionAsButtonsList();</script>
            ";
        }
        // line 427
        echo "            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 428
            echo "              <hr>
              <h3>";
            // line 429
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
              <div class=\"form-group required\">
                <select name=\"recurring_id\" class=\"form-control\">
                  <option value=\"\">";
            // line 432
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                  ";
            // line 433
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 434
                echo "                    <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 436
            echo "                </select>
                <div class=\"help-block\" id=\"recurring-description\"></div>
              </div>
            ";
        }
        // line 440
        echo "            <div class=\"form-group cart ";
        if (((isset($context["labels"]) ? $context["labels"] : null) && $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "outofstock", array()))) {
            echo " outofstock ";
        }
        echo "\">
              <div>
                ";
        // line 442
        if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "hide_add_to_cart_button"), "method")) {
            // line 443
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_enquiry", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 444
                echo "                    <div>";
                echo $this->getAttribute($context["tab"], "content", array());
                echo "</div>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 446
            echo "                  <input type=\"hidden\" name=\"product_id\" value=\"";
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\"/>
                ";
        } else {
            // line 448
            echo "                  <span class=\"qty\">
              <label class=\"control-label text-qty\" for=\"input-quantity\">";
            // line 449
            echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
            echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
            // line 450
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo "\" size=\"2\" data-min-value=\"";
            echo (isset($context["minimum"]) ? $context["minimum"] : null);
            echo "\" id=\"input-quantity\" class=\"form-control\"/>
              <input type=\"hidden\" name=\"product_id\" value=\"";
            // line 451
            echo (isset($context["product_id"]) ? $context["product_id"] : null);
            echo "\"/>
              <script>
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
              </span>
             
                ";
        }
        // line 480
        echo "              </div>
            </div>
             <div class=\"butt1\">
              <button type=\"button\" id=\"button-buy\" style=\"width:180px;height:40px;font-size:16px;color: black;border-radius:2px;border:2px solid black;position:relative;top:2px;cursor: pointer;\">立即购买</button>
                      <button style=\"width:180px;height:40px;\" type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 484
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"button\"><span class=\"button-cart-text\">";
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</span></button>
                    </div>
            ";
        // line 486
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 487
            echo "              <div class=\"alert alert-info information\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
            ";
        }
        // line 489
        echo "            <div class=\"wishlist-compare\">
              <span class=\"links\">
                  <a onclick=\"addToWishList('";
        // line 491
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "</a>
                  <a onclick=\"addToCompare('";
        // line 492
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\">";
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "</a>
              </span>
            </div>
            ";
        // line 495
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 496
            echo "             
            ";
        }
        // line 498
        echo "            ";
        if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_status"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_position"), "method") == "right")) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method")) > 0))) {
            // line 499
            echo "              <div class=\"social share-this\">
                <div class=\"social-loaded\">
                  <script type=\"text/javascript\">var switchTo5x = true;</script>
                  <script type=\"text/javascript\" src=\"https://ws.sharethis.com/button/buttons.js\"></script>
                  <script type=\"text/javascript\">stLight.options({publisher: \"";
            // line 503
            echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_account_key"), "method");
            echo "\", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
                  ";
            // line 504
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_share_buttons", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 505
                echo "                    <span class=\"";
                echo $this->getAttribute($context["item"], "class", array());
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method");
                echo "\" displayText=\"";
                echo (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "share_buttons_style"), "method")) ? ($this->getAttribute($context["item"], "name", array())) : (""));
                echo "\"></span>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 507
            echo "                </div>
              </div>
            ";
        }
        // line 510
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "additional_product_description_bottom", 1 => array()), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 511
            echo "              <div class=\"journal-custom-tab\">
                ";
            // line 512
            if ($this->getAttribute($context["tab"], "has_icon", array())) {
                // line 513
                echo "                  <div class=\"block-icon block-icon-left\" style=\"";
                echo $this->getAttribute($context["tab"], "icon_css", array());
                echo "\">";
                echo $this->getAttribute($context["tab"], "icon", array());
                echo "</div>
                ";
            }
            // line 515
            echo "                ";
            if ($this->getAttribute($context["tab"], "name", array())) {
                // line 516
                echo "                  <h3>";
                echo $this->getAttribute($context["tab"], "name", array());
                echo "</h3>
                ";
            }
            // line 518
            echo "                ";
            echo $this->getAttribute($context["tab"], "content", array());
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 521
        echo "          </div>
        </div>
      </div>
      ";
        // line 524
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 525
            echo "        <p class=\"tags\"><b>";
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "</b>
          ";
            // line 526
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 527
                echo "            ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
            ";
                } else {
                    // line 528
                    echo " <a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a> ";
                }
                // line 529
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
      ";
        }
        // line 531
        echo "      ";
        if (((isset($context["products"]) ? $context["products"] : null) && $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_status"), "method"))) {
            // line 532
            echo "        <div class=\"box related-products ";
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                echo " journal-carousel ";
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") == "top")) {
                    echo " arrows-top ";
                }
                echo " ";
            }
            echo "\">
          <div>
            <div class=\"box-heading\">";
            // line 534
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</div>
            <div class=\"box-content\">
              ";
            // line 536
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                // line 537
                echo "              <div class=\"swiper\">
                <div class=\"swiper-container\" ";
                // line 538
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "rtl"), "method")) {
                    echo " dir=\"rtl\" ";
                }
                echo ">
                  <div class=\"swiper-wrapper\">
                    ";
            }
            // line 541
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 542
                echo "                      <div class=\"product-grid-item ";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_grid_classes"), "method");
                echo " ";
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                    echo " swiper-slide ";
                }
                echo " display-";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method");
                echo " ";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_button_block_button"), "method");
                echo "\">
                        <div class=\"product-thumb product-wrapper ";
                // line 543
                if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                    echo " outofstock ";
                }
                echo "\">
                          <div class=\"image ";
                // line 544
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never") && $this->getAttribute($context["product"], "date_end", array()))) {
                    echo " has-countdown ";
                }
                echo "\">
                            <a href=\"";
                // line 545
                echo $this->getAttribute($context["product"], "href", array());
                echo "\" ";
                if ($this->getAttribute($context["product"], "thumb2", array())) {
                    echo " class=\"has-second-image\" style=\"background: url('";
                    echo $this->getAttribute($context["product"], "thumb2", array());
                    echo "') no-repeat\" ";
                }
                echo ">
                              <img class=\"lazy first-image\" width=\"";
                // line 546
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_width"), "method");
                echo "\" height=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_image_height"), "method");
                echo "\" src=\"";
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_dummy_image"), "method");
                echo "\" data-src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" data-poip-product-id=\"";
                echo $this->getAttribute($context["product"], "product_id", array(), "array");
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\"/>
                            </a>
                            ";
                // line 548
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["product"], "labels", array()));
                foreach ($context['_seq'] as $context["label"] => $context["name"]) {
                    // line 549
                    echo "                              <span class=\"label-";
                    echo $context["label"];
                    echo "\"><b>";
                    echo $context["name"];
                    echo "</b></span>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['label'], $context['name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 551
                echo "                            ";
                if ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_position"), "method") == "image") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_wishlist_icon_display"), "method") == "icon"))) {
                    // line 552
                    echo "                              <div class=\"wishlist\"><a onclick=\"addToWishList('";
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                    echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                    echo "</span></a></div>
                              <div class=\"compare\"><a onclick=\"addToCompare('";
                    // line 553
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"hint--top\" data-hint=\"";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "\"><i class=\"compare-icon\"></i><span class=\"button-compare-text\">";
                    echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                    echo "</span></a></div>
                            ";
                }
                // line 555
                echo "                          </div>
                          <div class=\"product-details\">
                            <div class=\"caption\">
                              <h4 class=\"name\"><a href=\"";
                // line 558
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                              <p class=\"description\">";
                // line 559
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
                              ";
                // line 560
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 561
                    echo "                                <div class=\"price\">
                                  ";
                    // line 562
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 563
                        echo "                                    ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                                  ";
                    } else {
                        // line 565
                        echo "                                    <span class=\"price-old\">";
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
                    // line 567
                    echo "                                </div>
                              ";
                }
                // line 569
                echo "                              ";
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 570
                    echo "                                <div class=\"rating\">
                                  ";
                    // line 571
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 572
                        echo "                                    ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["i"])) {
                            // line 573
                            echo "                                      <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                    ";
                        } else {
                            // line 575
                            echo "                                      <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                                    ";
                        }
                        // line 577
                        echo "                                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 578
                    echo "                                </div>
                              ";
                }
                // line 580
                echo "                            </div>
                            <div class=\"button-group\">
                              ";
                // line 582
                if (call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "isEnquiryProduct", array(0 => null, 1 => $context["product"])))) {
                    // line 583
                    echo "                                <div class=\"cart enquiry-button\">
                                  <a href=\"javascript:Journal.openPopup('";
                    // line 584
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
                    // line 587
                    echo "                                <div class=\"cart ";
                    if (($this->getAttribute($context["product"], "labels", array()) && $this->getAttribute($this->getAttribute($context["product"], "labels", array()), "outofstock", array()))) {
                        echo " outofstock ";
                    }
                    echo "\">
                                  <a onclick=\"addToCart('";
                    // line 588
                    echo $this->getAttribute($context["product"], "product_id", array());
                    echo "');\" class=\"button hint--top\" data-hint=\"";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "\"><i class=\"button-left-icon\"></i><span class=\"button-cart-text\">";
                    echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                    echo "</span><i class=\"button-right-icon\"></i></a>
                                </div>
                              ";
                }
                // line 591
                echo "                              <div class=\"wishlist\"><a onclick=\"addToWishList('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\" class=\"hint--top\" data-hint=\"";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\"><i class=\"wishlist-icon\"></i><span class=\"button-wishlist-text\">";
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "</span></a></div>
                              <div class=\"compare\"><a onclick=\"addToCompare('";
                // line 592
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
            // line 598
            echo "                    ";
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                // line 599
                echo "                  </div>
                </div>
                ";
                // line 601
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method") && ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") != "none"))) {
                    // line 602
                    echo "                  <div class=\"swiper-button-next\"></div>
                  <div class=\"swiper-button-prev\"></div>
                ";
                }
                // line 605
                echo "                ";
            }
            // line 606
            echo "              </div>
              ";
            // line 607
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method") && $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_bullets"), "method"))) {
                // line 608
                echo "                <div class=\"swiper-pagination\"></div>
              ";
            }
            // line 610
            echo "            </div>
          </div>
        </div>

      ";
            // line 614
            if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "show_countdown", 1 => "never"), "method") != "never")) {
                // line 615
                echo "        <script>
          \$('.related-products .product-grid-item > div').each(function () {
            var \$new = \$(this).find('.price-new');
            if (\$new.length && \$new.attr('data-end-date')) {
              \$(this).find('.image').append('<div class=\"countdown\"></div>');
            }
            Journal.countdown(\$(this).find('.countdown'), \$new.attr('data-end-date'));
          });
        </script>
      ";
            }
            // line 625
            echo "      ";
            if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel"), "method")) {
                // line 626
                echo "        ";
                $context["grid"] = call_user_func_array($this->env->getFunction('staticCall')->getCallable(), array("Journal2Utils", "getItemGrid", array(0 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_items_per_row"), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "site_width", 1 => 1024), "method"), 2 => $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "config_columns_count", 1 => 0), "method"))));
                // line 627
                echo "        ";
                $context["grid"] = array(0 => array(0 => 0, 1 => $this->getAttribute(                // line 628
(isset($context["grid"]) ? $context["grid"] : null), "xs", array())), 1 => array(0 => 470, 1 => $this->getAttribute(                // line 629
(isset($context["grid"]) ? $context["grid"] : null), "sm", array())), 2 => array(0 => 760, 1 => $this->getAttribute(                // line 630
(isset($context["grid"]) ? $context["grid"] : null), "md", array())), 3 => array(0 => 980, 1 => $this->getAttribute(                // line 631
(isset($context["grid"]) ? $context["grid"] : null), "lg", array())), 4 => array(0 => 1100, 1 => $this->getAttribute(                // line 632
(isset($context["grid"]) ? $context["grid"] : null), "xl", array())));
                // line 634
                echo "        <script>
          (function () {
            var grid = \$.parseJSON('";
                // line 636
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
                // line 661
                echo $this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "product_grid_item_spacing", 1 => "15"), "method");
                echo "', 10),
              pagination: ";
                // line 662
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_bullets"), "method")) {
                    echo " \$('.related-products .swiper-pagination') ";
                } else {
                    echo " false ";
                }
                echo ",
              paginationClickable: true,
              nextButton: ";
                // line 664
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") != "none")) {
                    echo " \$('.related-products .swiper-button-next') ";
                } else {
                    echo " false ";
                }
                echo ",
              prevButton: ";
                // line 665
                if (($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_arrows"), "method") != "none")) {
                    echo " \$('.related-products .swiper-button-prev') ";
                } else {
                    echo " false ";
                }
                echo ",
              autoplay: ";
                // line 666
                echo ((($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_autoplay"), "method") > 0)) ? (4000) : ("false"));
                echo ",
              autoplayStopOnHover: ";
                // line 667
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_pause_on_hover"), "method")) {
                    echo " true ";
                } else {
                    echo " false ";
                }
                echo ",
              speed: 400,
              touchEventsTarget: ";
                // line 669
                if ($this->getAttribute($this->getAttribute((isset($context["journal2"]) ? $context["journal2"] : null), "settings", array()), "get", array(0 => "related_products_carousel_touchdrag"), "method")) {
                    echo " 'container' ";
                } else {
                    echo " false ";
                }
                // line 670
                echo "            };

            \$('.related-products .swiper-container').swiper(opts);
          })();
        </script>
      ";
            }
            // line 676
            echo "      ";
        }
        // line 677
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
  </div>
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
  \$('#button-cart').on('click', function() {
    \$.ajax({
      url: 'index.php?route=checkout/cart/add',
      type: 'post',
      data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
      dataType: 'json',
      beforeSend: function() {
        \$('#button-cart').button('loading');
      },
      complete: function() {
        \$('#button-cart').button('reset');
      },
      success: function(json) {
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
          if (!Journal.showNotification(json['success'], json['image'], true)) {
            \$('.breadcrumb').after('<div class=\"alert alert-success success\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
          }

          \$('#cart-total').html(json['total']);

          if (Journal.scrollToTop) {
            \$('html, body').animate({ scrollTop: 0 }, 'slow');
          }

          \$('#cart ul').load('index.php?route=common/cart/info ul li');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
      }
    });
  });
    \$('#button-buy').on('click', function() {
    \$.ajax({
      url: 'index.php?route=checkout/cart/add',
      type: 'post',
      data: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
      dataType: 'json',
      beforeSend: function() {
        \$('#button-cart').button('loading');
      },
      complete: function() {
        \$('#button-cart').button('reset');
      },
      success: function(json) {
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
         

          \$('#cart-total').html(json['total']);

          if (Journal.scrollToTop) {
            \$('html, body').animate({ scrollTop: 0 }, 'slow');
          }

          \$('#cart ul').load('index.php?route=common/cart/info ul li');
          window.location.href=\"index.php?route=checkout/checkout\"
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
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
        // line 894
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

  \$('#button-review').on('click', function () {
    \$.ajax({
      url: 'index.php?route=product/product/write&product_id=";
        // line 898
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
<!-- << Live Price -->
\t\t\t\t
\t\t\t\t";
        // line 938
        if ((((array_key_exists("liveprice_installed", $context) &&  !(null === (isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)))) ? ((isset($context["liveprice_installed"]) ? $context["liveprice_installed"] : null)) : (0))) {
            // line 939
            echo "\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t(function(\$){
\t\t\t\t\t\t\tvar lp_product_id = ";
            // line 941
            echo (isset($context["lp_product_id"]) ? $context["lp_product_id"] : null);
            echo ";
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tif ( lp_product_id ) {
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\tvar params = {
\t\t\t\t\t\t\t\t\t'lp_settings' \t\t\t\t: ";
            // line 946
            echo (((((array_key_exists("liveprice_settings", $context) &&  !(null === (isset($context["liveprice_settings"]) ? $context["liveprice_settings"] : null)))) ? ((isset($context["liveprice_settings"]) ? $context["liveprice_settings"] : null)) : (0))) ? (twig_jsonencode_filter((isset($context["liveprice_settings"]) ? $context["liveprice_settings"] : null))) : ("[]"));
            echo ",
\t\t\t\t\t\t\t\t\t'theme_name'\t\t\t\t\t: '";
            // line 947
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
        // line 961
        echo "\t\t
\t\t\t\t<!-- >> Live Price -->
\t\t\t\t";
        // line 963
        if ((((array_key_exists("pcop_data", $context) &&  !(null === (isset($context["pcop_data"]) ? $context["pcop_data"] : null)))) ? ((isset($context["pcop_data"]) ? $context["pcop_data"] : null)) : (false))) {
            // line 964
            echo "\t\t\t\t\t<!-- << Parent-child Options -->
\t\t\t\t\t<script type=\"text/javascript\"><!--
\t\t\t\t\t
\t\t\t\t\t\tvar pcop_data = ";
            // line 967
            echo (((((array_key_exists("pcop_data", $context) &&  !(null === (isset($context["pcop_data"]) ? $context["pcop_data"] : null)))) ? ((isset($context["pcop_data"]) ? $context["pcop_data"] : null)) : (0))) ? (twig_jsonencode_filter((isset($context["pcop_data"]) ? $context["pcop_data"] : null))) : ("[]"));
            echo ";
\t\t\t\t\t\tvar pcop_theme_name = '";
            // line 968
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
        // line 977
        echo "
\t\t\t\t<!-- << Product Option Image PRO module -->
\t\t\t\t";
        // line 979
        if ((((array_key_exists("poip_theme_script", $context) &&  !(null === (isset($context["poip_theme_script"]) ? $context["poip_theme_script"] : null)))) ? ((isset($context["poip_theme_script"]) ? $context["poip_theme_script"] : null)) : (false))) {
            // line 980
            echo "\t\t\t\t\t";
            echo (isset($context["poip_theme_script"]) ? $context["poip_theme_script"] : null);
            echo "
\t\t\t\t";
        }
        // line 982
        echo "\t\t\t\t
\t\t\t\t";
        // line 983
        if ((((array_key_exists("poip_installed", $context) &&  !(null === (isset($context["poip_installed"]) ? $context["poip_installed"] : null)))) ? ((isset($context["poip_installed"]) ? $context["poip_installed"] : null)) : (false))) {
            // line 984
            echo "\t\t\t\t\t<script  type = \"text/javascript\" ><!--
\t\t\t\t\t\t(function(){\t
\t\t\t\t\t\t\tvar poip_product_settings = {
\t\t\t\t\t\t\t\tproduct_option_ids \t: ";
            // line 987
            echo twig_jsonencode_filter((isset($context["poip_product_option_ids"]) ? $context["poip_product_option_ids"] : null));
            echo ",
\t\t\t\t\t\t\t\timages \t\t\t\t\t\t\t: ";
            // line 988
            echo twig_jsonencode_filter((isset($context["poip_images"]) ? $context["poip_images"] : null));
            echo ",
\t\t\t\t\t\t\t\timages_by_povs\t\t\t: ";
            // line 989
            echo twig_jsonencode_filter((isset($context["poip_images_by_povs"]) ? $context["poip_images_by_povs"] : null));
            echo ",
\t\t\t\t\t\t\t\tmodule_settings \t\t: ";
            // line 990
            echo twig_jsonencode_filter((isset($context["poip_settings"]) ? $context["poip_settings"] : null));
            echo ",
\t\t\t\t\t\t\t\toptions_settings \t\t: ";
            // line 991
            echo twig_jsonencode_filter((isset($context["poip_product_settings"]) ? $context["poip_product_settings"] : null));
            echo ",
\t\t\t\t\t\t\t\tpoip_ov \t\t\t\t\t\t: ";
            // line 992
            echo (((array_key_exists("poip_ov", $context) &&  !(null === (isset($context["poip_ov"]) ? $context["poip_ov"] : null)))) ? ((isset($context["poip_ov"]) ? $context["poip_ov"] : null)) : (0));
            echo ",
\t\t\t\t\t\t\t\tdefault_image_title : '";
            // line 993
            echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
            echo "',
\t\t\t\t\t\t\t};
\t\t\t\t\t\t
\t\t\t\t\t\t\tvar poip_product = getPoipProduct();
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tpoip_common.initObject(poip_product, poip_product_settings);
\t\t\t\t\t\t})();
\t\t\t\t\t//--></script>
\t\t\t\t";
        }
        // line 1002
        echo "\t\t\t\t
      <!-- >> Product Option Image PRO module -->
      
\t\t\t\t";
        // line 1005
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "journal2/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2574 => 1005,  2569 => 1002,  2557 => 993,  2553 => 992,  2549 => 991,  2545 => 990,  2541 => 989,  2537 => 988,  2533 => 987,  2528 => 984,  2526 => 983,  2523 => 982,  2517 => 980,  2515 => 979,  2511 => 977,  2499 => 968,  2495 => 967,  2490 => 964,  2488 => 963,  2484 => 961,  2467 => 947,  2463 => 946,  2455 => 941,  2451 => 939,  2449 => 938,  2406 => 898,  2399 => 894,  2178 => 677,  2175 => 676,  2167 => 670,  2161 => 669,  2152 => 667,  2148 => 666,  2140 => 665,  2132 => 664,  2123 => 662,  2119 => 661,  2091 => 636,  2087 => 634,  2085 => 632,  2084 => 631,  2083 => 630,  2082 => 629,  2081 => 628,  2079 => 627,  2076 => 626,  2073 => 625,  2061 => 615,  2059 => 614,  2053 => 610,  2049 => 608,  2047 => 607,  2044 => 606,  2041 => 605,  2036 => 602,  2034 => 601,  2030 => 599,  2027 => 598,  2011 => 592,  2002 => 591,  1992 => 588,  1985 => 587,  1969 => 584,  1966 => 583,  1964 => 582,  1960 => 580,  1956 => 578,  1950 => 577,  1946 => 575,  1942 => 573,  1939 => 572,  1935 => 571,  1932 => 570,  1929 => 569,  1925 => 567,  1911 => 565,  1905 => 563,  1903 => 562,  1900 => 561,  1898 => 560,  1894 => 559,  1888 => 558,  1883 => 555,  1874 => 553,  1865 => 552,  1862 => 551,  1851 => 549,  1847 => 548,  1830 => 546,  1820 => 545,  1814 => 544,  1808 => 543,  1795 => 542,  1790 => 541,  1782 => 538,  1779 => 537,  1777 => 536,  1772 => 534,  1760 => 532,  1757 => 531,  1748 => 529,  1741 => 528,  1731 => 527,  1727 => 526,  1722 => 525,  1720 => 524,  1715 => 521,  1705 => 518,  1699 => 516,  1696 => 515,  1688 => 513,  1686 => 512,  1683 => 511,  1678 => 510,  1673 => 507,  1661 => 505,  1657 => 504,  1653 => 503,  1647 => 499,  1644 => 498,  1640 => 496,  1638 => 495,  1630 => 492,  1624 => 491,  1620 => 489,  1614 => 487,  1612 => 486,  1605 => 484,  1599 => 480,  1567 => 451,  1561 => 450,  1557 => 449,  1554 => 448,  1548 => 446,  1539 => 444,  1534 => 443,  1532 => 442,  1524 => 440,  1518 => 436,  1507 => 434,  1503 => 433,  1499 => 432,  1493 => 429,  1490 => 428,  1487 => 427,  1482 => 424,  1476 => 423,  1463 => 417,  1456 => 415,  1447 => 414,  1444 => 413,  1431 => 407,  1424 => 405,  1415 => 404,  1412 => 403,  1399 => 397,  1392 => 395,  1383 => 394,  1380 => 393,  1372 => 390,  1364 => 389,  1360 => 388,  1351 => 387,  1348 => 386,  1336 => 383,  1330 => 382,  1321 => 381,  1318 => 380,  1306 => 377,  1300 => 376,  1291 => 375,  1288 => 374,  1283 => 371,  1275 => 369,  1268 => 368,  1266 => 367,  1261 => 366,  1245 => 365,  1242 => 364,  1239 => 362,  1230 => 360,  1228 => 359,  1225 => 358,  1218 => 355,  1214 => 353,  1208 => 352,  1204 => 351,  1195 => 350,  1192 => 349,  1187 => 346,  1179 => 344,  1172 => 343,  1170 => 342,  1165 => 341,  1149 => 340,  1143 => 339,  1139 => 337,  1133 => 336,  1123 => 334,  1120 => 333,  1115 => 330,  1108 => 328,  1101 => 327,  1099 => 326,  1092 => 325,  1088 => 324,  1084 => 323,  1078 => 322,  1068 => 320,  1065 => 319,  1061 => 318,  1056 => 317,  1053 => 316,  1049 => 314,  1038 => 312,  1033 => 311,  1025 => 308,  1022 => 307,  1019 => 306,  1011 => 304,  1008 => 303,  997 => 301,  992 => 300,  986 => 298,  983 => 297,  979 => 295,  977 => 294,  973 => 293,  969 => 292,  965 => 290,  962 => 289,  957 => 287,  951 => 284,  948 => 283,  945 => 282,  939 => 280,  937 => 279,  927 => 277,  919 => 275,  917 => 274,  910 => 273,  907 => 272,  897 => 270,  894 => 269,  890 => 267,  884 => 264,  879 => 263,  877 => 262,  866 => 260,  862 => 259,  859 => 258,  856 => 257,  848 => 255,  846 => 254,  843 => 253,  833 => 250,  827 => 248,  824 => 247,  816 => 245,  814 => 244,  811 => 243,  807 => 242,  804 => 241,  798 => 239,  796 => 238,  793 => 237,  790 => 236,  787 => 235,  784 => 234,  781 => 233,  779 => 232,  774 => 229,  750 => 227,  732 => 226,  727 => 223,  721 => 221,  712 => 217,  706 => 214,  701 => 212,  688 => 202,  684 => 201,  676 => 196,  671 => 194,  663 => 189,  659 => 188,  655 => 186,  653 => 185,  649 => 184,  645 => 182,  638 => 178,  633 => 177,  631 => 176,  619 => 175,  616 => 174,  611 => 171,  604 => 169,  595 => 166,  591 => 165,  588 => 164,  584 => 163,  577 => 159,  573 => 157,  569 => 156,  560 => 154,  557 => 153,  546 => 151,  543 => 150,  541 => 149,  537 => 147,  512 => 145,  494 => 144,  482 => 142,  479 => 141,  467 => 139,  464 => 138,  452 => 136,  449 => 135,  447 => 134,  444 => 133,  439 => 130,  427 => 128,  423 => 127,  419 => 126,  413 => 122,  411 => 121,  394 => 108,  389 => 105,  377 => 103,  373 => 102,  369 => 101,  363 => 97,  361 => 96,  358 => 95,  339 => 93,  334 => 92,  318 => 90,  316 => 89,  313 => 88,  303 => 85,  297 => 83,  294 => 82,  286 => 80,  284 => 79,  281 => 78,  276 => 77,  273 => 76,  265 => 70,  259 => 69,  253 => 67,  248 => 64,  246 => 63,  242 => 62,  238 => 61,  234 => 60,  229 => 57,  227 => 56,  224 => 55,  220 => 53,  217 => 52,  215 => 51,  211 => 49,  208 => 48,  185 => 46,  180 => 45,  160 => 43,  157 => 42,  151 => 38,  149 => 37,  144 => 36,  141 => 35,  138 => 34,  132 => 32,  130 => 31,  114 => 29,  103 => 27,  99 => 26,  96 => 25,  94 => 24,  89 => 22,  84 => 21,  78 => 19,  76 => 18,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  51 => 10,  46 => 9,  43 => 8,  32 => 6,  28 => 5,  22 => 2,  19 => 1,);
    }
}
/* <!--catalog/view/theme/journal2/template/product/product.twig  -->*/
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
/*     <div id="content" class="{{ class }} product-page-content" itemscope itemtype="http://schema.org/Product">*/
/*       {% if journal2.settings.get('product_page_title_position', 'top') == 'top' %}*/
/*         <h1 class="heading-title" itemprop="name">{{ heading_title }}</h1>*/
/*       {% endif %}*/
/*       {{ content_top }}*/
/*       <div class="row product-info {{ journal2.settings.get('split_ratio') }}">*/
/*         <div class="left" style="height:550px;position:relative;">*/
/*           {% if thumb %}*/
/*             <div class="image">*/
/*               {% for label, name in labels %}*/
/*                 <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*               {% endfor %}*/
/*               <a href="{{ popup }}" title="{{ heading_title }}"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}" id="image" data-largeimg="{{ popup }}" itemprop="image"/></a>*/
/*             </div>*/
/*             {% if journal2.settings.get('product_page_gallery') %}*/
/*               <div class="gallery-text"><span>{{ journal2.settings.get('product_page_gallery_text') }}</span></div>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*           {% if images %}*/
/*             <div id="product-gallery" class="image-additional {{ journal2.settings.get('product_page_gallery_carousel') ? 'journal-carousel' : 'image-additional-grid' }}">*/
/*               {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*               <div class="swiper">*/
/*                 <div class="swiper-container swiper-container-vertical">*/
/*                   <div class="swiper-wrapper">*/
/*                     {% endif %}*/
/*                     {% if thumb %}*/
/*                       <a class="swiper-slide" {% if journal2.settings.get('product_page_gallery_carousel') %} style="width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%" {% endif %} href="{{ popup_fixed ? popup_fixed : popup }}" title="{{ heading_title }}"><img src="{{ thumb_fixed ? thumb_fixed : thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*                     {% endif %}*/
/*                     {% for image in images %}*/
/*                       <a class="swiper-slide" {% if journal2.settings.get('product_page_gallery_carousel') %} style="width: {{ 100 / journal2.settings.get('product_page_additional_width', 5) }}%" {% endif %} href="{{ image.popup }}" title="{{ heading_title }}"><img src="{{ image.thumb }}" title="{{ image.title ?? heading_title }}" alt="{{ image.title ?? heading_title }}" itemprop="image"/></a>*/
/*                     {% endfor %}*/
/*                     {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if journal2.settings.get('product_page_gallery_carousel_arrows') != 'never' %}*/
/*                 {% endif %}*/
/*               </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           {% if journal2.settings.get('product_page_gallery_carousel') %}*/
/*             <script>*/
/*               (function () {*/
/*                 var opts = {*/
/*                   slidesPerView: parseInt('{{ journal2.settings.get('product_page_additional_width', '5') }}', 10),*/
/*                   slidesPerGroup: parseInt('{{ journal2.settings.get('product_page_additional_width', '5') }}', 10),*/
/*                   spaceBetween: parseInt('{{ journal2.settings.get('product_page_additional_spacing', '15') }}', 10),*/
/*                   {% if journal2.settings.get('product_page_gallery_carousel_arrows') != 'never' %}*/
/*                   nextButton: $('#product-gallery .swiper-button-next'),*/
/*                   prevButton: $('#product-gallery .swiper-button-prev'),*/
/*                   {% endif %}*/
/*                   autoplay: {{ journal2.settings.get('product_page_gallery_carousel_autoplay') ? journal2.settings.get('product_page_gallery_carousel_transition_delay', 4000) : 'false' }},*/
/*                   speed: 400,*/
/*                   touchEventsTarget: {% if journal2.settings.get('product_page_gallery_carousel_touchdrag') %} 'container' {% else %} false {% endif %}*/
/*                 };*/
/* */
/*                 $('#product-gallery .swiper-container').swiper(opts);*/
/*               })();*/
/*             </script>*/
/*           {% endif %}*/
/*           {% endif %}*/
/*           {% for tab in journal2.settings.get('additional_product_description_image', []) %}*/
/*             <div class="journal-custom-tab">*/
/*               {% if tab.has_icon %}*/
/*                 <div class="block-icon block-icon-left" style="{{ tab.icon_css }}">{{ tab.icon }}</div>*/
/*               {% endif %}*/
/*               {% if tab.name %}*/
/*                 <h3>{{ tab.name }}</h3>*/
/*               {% endif %}*/
/*               {{ tab.content }}*/
/*             </div>*/
/*           {% endfor %}*/
/*           <div class="image-gallery" style="display: none !important;">*/
/*             {% if thumb %}*/
/*               <a href="{{ popup }}" data-original="{{ original ? original : popup }}" title="{{ heading_title }}" class="swipebox"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a>*/
/*             {% endif %}*/
/*             {% for image in images %}*/
/*               <a href="{{ image.popup }}" data-original="{{ image.original ? image.original : image.popup }}" title="{{ heading_title }}" class="swipebox"><img src="{{ image.thumb }}" title="{{ image.title ?? heading_title }}" alt="{{ image.title ?? heading_title }}"/></a>*/
/*             {% endfor %}*/
/*           </div>*/
/*           {% if journal2.settings.get('share_buttons_status') and journal2.settings.get('share_buttons_position') == 'left' and (journal2.settings.get('config_share_buttons', []) | length > 0) %}*/
/*             <div class="social share-this">*/
/*               <div class="social-loaded">*/
/*                 <script type="text/javascript">var switchTo5x = true;</script>*/
/*                 <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>*/
/*                 <script type="text/javascript">stLight.options({publisher: "{{ journal2.settings.get('share_buttons_account_key') }}", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>*/
/*                 {% for item in journal2.settings.get('config_share_buttons', []) %}*/
/*                   <span class="{{ item.class }}{{ journal2.settings.get('share_buttons_style') }}" displayText="{{ journal2.settings.get('share_buttons_style') ? item.name : '' }}"></span>*/
/*                 {% endfor %}*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/*           <meta itemprop="description" content="{{ journal2.settings.get('product_description') }}"/>*/
/* */
/*           <!-- 评论 -->*/
/*           <div class="product-tabs">*/
/*           <div class="recommend" style="background-color:#F3F3F3;height:280px">*/
/*             <div class="recommendTop">*/
/*               <span>推荐装裱</span>*/
/*             </div>*/
/*             <!-- 推荐装裱 -->*/
/*             <div class="recommendCon">*/
/*                 */
/*             </div>*/
/*           </div>*/
/*             {% if journal2.settings.get('share_buttons_status') and journal2.settings.get('share_buttons_position') == 'bottom' and (journal2.settings.get('config_share_buttons', []) | length > 0) %}*/
/*               <div class="social share-this">*/
/*                 <div class="social-loaded">*/
/*                   <script type="text/javascript">var switchTo5x = true;</script>*/
/*                   <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>*/
/*                   <script type="text/javascript">stLight.options({publisher: "{{ journal2.settings.get('share_buttons_account_key') }}", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>*/
/*                   {% for item in journal2.settings.get('config_share_buttons', []) %}*/
/*                     <span class="{{ item.class }}{{ journal2.settings.get('share_buttons_style') }}" displayText="{{ journal2.settings.get('share_buttons_style') ? item.name : '' }}"></span>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*             {% endif %}*/
/*             <ul id="tabs" class="nav nav-tabs htabs" style="margin-top:50px">*/
/*               {% set is_active = true %}*/
/*               {% if description and not journal2.settings.get('hide_product_description') %}*/
/*                 <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*               {% endif %}*/
/*               {% if attribute_groups %}*/
/*                 <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*               {% endif %}*/
/*               {% if review_status %}*/
/*                 <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*               {% endif %}*/
/*               {% for tab in journal2.settings.get('additional_product_tabs', []) %}*/
/*                 <li {% if is_active %} class="active" {% set is_active = false %} {% endif %}><a href="#additional-product-tab-{{ loop.index }}" data-toggle="tab">{{ tab.name }}</a></li>*/
/*               {% endfor %}*/
/*             </ul>*/
/*             <div class="tabs-content">*/
/*               {% set is_active = true %}*/
/*               {% if description and not journal2.settings.get('hide_product_description') %}*/
/*                 <div class="tab-pane tab-content {% if is_active %} active {% set is_active = false %}{% endif %}" id="tab-description">{{ description }}</div>*/
/*               {% endif %}*/
/*               {% if attribute_groups %}*/
/*                 <div class="tab-pane tab-content {% if is_active %} active {% set is_active = false %}{% endif %}" id="tab-specification">*/
/*                   <table class="table table-bordered attribute">*/
/*                     {% for attribute_group in attribute_groups %}*/
/*                       <thead>*/
/*                       <tr>*/
/*                         <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                       </tr>*/
/*                       </thead>*/
/*                       <tbody>*/
/*                       {% for attribute in attribute_group.attribute %}*/
/*                         <tr>*/
/*                           <td>{{ attribute.name }}</td>*/
/*                           <td>{{ attribute.text }}</td>*/
/*                         </tr>*/
/*                       {% endfor %}*/
/*                       </tbody>*/
/*                     {% endfor %}*/
/*                   </table>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% if review_status %}*/
/*                 <div class="tab-pane tab-content {% if is_active %} active {% set is_active = false %}{% endif %}" id="tab-review" {% if rating %} itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" {% endif %}>*/
/*                   {% if rating %}*/
/*                     <meta itemprop="ratingValue" content="{{ rating }}"/>*/
/*                     <meta itemprop="reviewCount" content="{{ journal2.settings.get('product_num_reviews') }}"/>*/
/*                     <meta itemprop="bestRating" content="5"/>*/
/*                     <meta itemprop="worstRating" content="1"/>*/
/*                   {% endif %}*/
/*                   <form class="form-horizontal" id="form-review">*/
/*                     <div id="review"></div>*/
/*                     <h2 id="review-title">{{ text_write }}</h2>*/
/*                     {% if review_guest %}*/
/*                       <div class="form-group required">*/
/*                         <div class="col-sm-12">*/
/*                           <label class="control-label" for="input-name">{{ entry_name }}</label>*/
/*                           <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control"/>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <div class="col-sm-12">*/
/*                           <label class="control-label" for="input-review">{{ entry_review }}</label>*/
/*                           <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                           <div class="help-block">{{ text_note }}</div>*/
/*                         </div>*/
/*                       </div>*/
/*                       <div class="form-group required">*/
/*                         <div class="col-sm-12">*/
/*                           <label class="control-label">{{ entry_rating }}</label>*/
/*                           &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                           <input type="radio" name="rating" value="1"/>*/
/*                           &nbsp;*/
/*                           <input type="radio" name="rating" value="2"/>*/
/*                           &nbsp;*/
/*                           <input type="radio" name="rating" value="3"/>*/
/*                           &nbsp;*/
/*                           <input type="radio" name="rating" value="4"/>*/
/*                           &nbsp;*/
/*                           <input type="radio" name="rating" value="5"/>*/
/*                           &nbsp;{{ entry_good }}</div>*/
/*                       </div>*/
/*                       {{ captcha }}*/
/*                       <div class="buttons clearfix">*/
/*                         <div class="pull-right">*/
/*                           <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary button">{{ button_continue }}</button>*/
/*                         </div>*/
/*                       </div>*/
/*                     {% else %}*/
/*                       {{ text_login }}*/
/*                     {% endif %}*/
/*                   </form>*/
/*                 </div>*/
/*               {% endif %}*/
/*               {% for tab in journal2.settings.get('additional_product_tabs', []) %}*/
/*                 <div id="additional-product-tab-{{ loop.index }}" class="tab-pane tab-content journal-custom-tab {% if is_active %} active {% set is_active = false %}{% endif %}">{{ tab.content }}</div>*/
/*               {% endfor %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {% if column_left or column_right %}*/
/*           {% set class = 'col-sm-6' %}*/
/*         {% else %}*/
/*           {% set class = 'col-sm-4' %}*/
/*         {% endif %}*/
/*         <div class="right">*/
/*           {% if journal2.settings.get('product_page_title_position', 'top') == 'right' %}*/
/*             <h1 class="heading-title" itemprop="name">{{ heading_title }}</h1>*/
/*           {% endif %}*/
/*           <div id="product" class="product-options">*/
/*             {% for tab in journal2.settings.get('additional_product_description_top', []) %}*/
/*               <div class="journal-custom-tab">*/
/*                 {% if tab.has_icon %}*/
/*                   <div class="block-icon block-icon-left" style="{{ tab.icon_css }}">{{ tab.icon }}</div>*/
/*                 {% endif %}*/
/*                 {% if tab.name %}*/
/*                   <h3>{{ tab.name }}</h3>*/
/*                 {% endif %}*/
/*                 {{ tab.content }}*/
/*               </div>*/
/*             {% endfor %}*/
/*             <ul class="list-unstyled description">*/
/*               {% if journal2.settings.get('product_views') %}*/
/*                 <li class="product-views-count">{{ journal2.settings.get('product_page_options_views_text') }}: {{ journal2.settings.get('product_views') }}</li>*/
/*               {% endif %}*/
/*               {% if journal2.settings.get('manufacturer_image') == 'on' %}*/
/*                 <li class="brand-logo">*/
/*                   <a href="{{ manufacturers }}" class="brand-image">*/
/*                     <img src="{{ manufacturer_image }}" width="{{ manufacturer_image_width }}" height="{{ manufacturer_image_height }}" alt="{{ manufacturer }}"/>*/
/*                   </a>*/
/*                   {% if manufacturer_image_name %}*/
/*                     <a href="{{ manufacturers }}" class="brand-logo-text">*/
/*                       {{ manufacturer_image_name }}*/
/*                     </a>*/
/*                   {% endif %}*/
/*                 </li>*/
/*               {% else %}*/
/*                 {% if manufacturer %}*/
/*                   <li class="p-brand">{{ text_manufacturer }} <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*               <li class="p-model">{{ text_model }} <span class="p-model" itemprop="model">{{ model }}</span></li>*/
/*               {% if reward %}*/
/*                 <li class="p-rewards">{{ text_reward }} <span class="p-rewards">{{ reward }}</span></li>*/
/*               {% endif %}*/
/*               <li class="p-stock">{{ text_stock }} <span class="journal-stock {{ stock_status }}">{{ stock }}</span></li>*/
/*             </ul>*/
/*             {% if journal2.settings.get('product_sold') %}*/
/*               <div class="product-sold-count-text">{{ journal2.settings.get('product_sold') }}</div>*/
/*             {% endif %}*/
/*             {% if date_end and journal2.settings.get('show_countdown_product_page', 'on') == 'on' %}*/
/*               <div class="countdown-wrapper">*/
/*                 <div class="expire-text">{{ journal2.settings.get('countdown_product_page_title') }}</div>*/
/*                 <div class="countdown"></div>*/
/*               </div>*/
/*               <script>Journal.countdown($('.right .countdown'), '{{ date_end }}');</script>*/
/*             {% endif %}*/
/*             {% if price %}*/
/*               <ul class="list-unstyled price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">*/
/*                 <meta itemprop="itemCondition" content="http://schema.org/NewCondition"/>*/
/*                 <meta itemprop="priceCurrency" content="{{ journal2.settings.get('product_price_currency') }}"/>*/
/*                 <meta itemprop="price" content="{{ journal2.settings.get('product_price') }}"/>*/
/*                 {% if journal2.settings.get('product_in_stock') == 'yes' %}*/
/*                   <link itemprop="availability" href="http://schema.org/InStock"/>*/
/*                 {% endif %}*/
/*                 {% if not special %}*/
/*                   <li class="product-price">{{ price }}</li>*/
/*                 {% else %}*/
/*                   <li class="price-old">{{ price }}</li>*/
/*                   <li class="price-new" {% if date_end %}data-end-date="{{ date_end }}"{% endif %}>{{ special }}</li>*/
/*                 {% endif %}*/
/*                 {% if tax %}*/
/*                   <li class="price-tax">{{ text_tax }} {{ tax }}</li>*/
/*                 {% endif %}*/
/*                 {% if points %}*/
/*                   <li class="reward">*/
/*                     <small>{{ text_points }} {{ points }}</small>*/
/*                   </li>*/
/*                 {% endif %}*/
/*                 {% for discount in discounts %}*/
/*                   <li class="discounts">{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*             {% endif %}*/
/*             {% if options %}*/
/*               <div class="options {{ journal2.settings.get('product_page_options_push_classes') }}">*/
/*                 {% for option in options %}*/
/*                   {% if option.type == 'select' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                      */
/*                       <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                         <option value="">{{ text_select }}</option>*/
/*                         {% for option_value in option.product_option_value %}*/
/*                           <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                             {% if option_value.price %}*/
/*                               ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                             {% endif %} </option>*/
/*                         {% endfor %}*/
/*                       </select>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'radio' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                      */
/*                       <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                           <div class="radio">*/
/*                             <label>*/
/*                               <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}"/>*/
/*                               {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail"/> {% endif %}*/
/*                               {{ option_value.name }}*/
/*                               {% if option_value.price %}*/
/*                                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                               {% endif %} </label>*/
/*                           </div>*/
/*                         {% endfor %} </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'checkbox' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label">{{ option.name }}</label>*/
/*                       <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                           <div class="checkbox">*/
/*                             <label>*/
/*                               <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}"/>*/
/* */
/* 				{# // << Product Option Image PRO module #}*/
/* 	*/
/* 				{% if option['type'] == 'checkbox' and (option_value['poip_image'] ?? false ) %}*/
/* 					<img src="{{ option_value['poip_image'] }}" alt="{{ option_value['name'] }}{{ (option_value['price'] ? ' '~option_value['price_prefix']~option_value['price'] : '') }} " class="img-thumbnail" /> */
/* 				{% endif %}*/
/* 				*/
/* 				{# // >> Product Option Image PRO module #}*/
/* 			*/
/*                               {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail"/> {% endif %}*/
/*                               {{ option_value.name }}*/
/*                               {% if option_value.price %}*/
/*                                 ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                               {% endif %} </label>*/
/*                           </div>*/
/*                         {% endfor %} </div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'text' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'textarea' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'file' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label">{{ option.name }}</label>*/
/*                       <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                       <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}"/>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'date' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <div class="input-group date">*/
/*                         <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                         <span class="input-group-btn">*/
/*                 <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'datetime' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <div class="input-group datetime">*/
/*                         <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                         <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                   {% if option.type == 'time' %}*/
/*                     <div class="option form-group{% if option.required %} required {% endif %} option-{{ option.type }}">*/
/*                       <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                       <div class="input-group time">*/
/*                         <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                         <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                 </span></div>*/
/*                     </div>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               </div>*/
/*               <script>Journal.enableSelectOptionAsButtonsList();</script>*/
/*             {% endif %}*/
/*             {% if recurrings %}*/
/*               <hr>*/
/*               <h3>{{ text_payment_recurring }}</h3>*/
/*               <div class="form-group required">*/
/*                 <select name="recurring_id" class="form-control">*/
/*                   <option value="">{{ text_select }}</option>*/
/*                   {% for recurring in recurrings %}*/
/*                     <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                   {% endfor %}*/
/*                 </select>*/
/*                 <div class="help-block" id="recurring-description"></div>*/
/*               </div>*/
/*             {% endif %}*/
/*             <div class="form-group cart {% if labels and labels.outofstock %} outofstock {% endif %}">*/
/*               <div>*/
/*                 {% if journal2.settings.get('hide_add_to_cart_button') %}*/
/*                   {% for tab in journal2.settings.get('additional_product_enquiry', []) %}*/
/*                     <div>{{ tab.content }}</div>*/
/*                   {% endfor %}*/
/*                   <input type="hidden" name="product_id" value="{{ product_id }}"/>*/
/*                 {% else %}*/
/*                   <span class="qty">*/
/*               <label class="control-label text-qty" for="input-quantity">{{ entry_qty }}</label>*/
/*               <input type="text" name="quantity" value="{{ minimum }}" size="2" data-min-value="{{ minimum }}" id="input-quantity" class="form-control"/>*/
/*               <input type="hidden" name="product_id" value="{{ product_id }}"/>*/
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
/*               </span>*/
/*              */
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*              <div class="butt1">*/
/*               <button type="button" id="button-buy" style="width:180px;height:40px;font-size:16px;color: black;border-radius:2px;border:2px solid black;position:relative;top:2px;cursor: pointer;">立即购买</button>*/
/*                       <button style="width:180px;height:40px;" type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="button"><span class="button-cart-text">{{ button_cart }}</span></button>*/
/*                     </div>*/
/*             {% if minimum > 1 %}*/
/*               <div class="alert alert-info information"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*             {% endif %}*/
/*             <div class="wishlist-compare">*/
/*               <span class="links">*/
/*                   <a onclick="addToWishList('{{ product_id }}');">{{ button_wishlist }}</a>*/
/*                   <a onclick="addToCompare('{{ product_id }}');">{{ button_compare }}</a>*/
/*               </span>*/
/*             </div>*/
/*             {% if review_status %}*/
/*              */
/*             {% endif %}*/
/*             {% if journal2.settings.get('share_buttons_status') and journal2.settings.get('share_buttons_position') == 'right' and (journal2.settings.get('config_share_buttons', []) | length > 0) %}*/
/*               <div class="social share-this">*/
/*                 <div class="social-loaded">*/
/*                   <script type="text/javascript">var switchTo5x = true;</script>*/
/*                   <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>*/
/*                   <script type="text/javascript">stLight.options({publisher: "{{ journal2.settings.get('share_buttons_account_key') }}", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>*/
/*                   {% for item in journal2.settings.get('config_share_buttons', []) %}*/
/*                     <span class="{{ item.class }}{{ journal2.settings.get('share_buttons_style') }}" displayText="{{ journal2.settings.get('share_buttons_style') ? item.name : '' }}"></span>*/
/*                   {% endfor %}*/
/*                 </div>*/
/*               </div>*/
/*             {% endif %}*/
/*             {% for tab in journal2.settings.get('additional_product_description_bottom', []) %}*/
/*               <div class="journal-custom-tab">*/
/*                 {% if tab.has_icon %}*/
/*                   <div class="block-icon block-icon-left" style="{{ tab.icon_css }}">{{ tab.icon }}</div>*/
/*                 {% endif %}*/
/*                 {% if tab.name %}*/
/*                   <h3>{{ tab.name }}</h3>*/
/*                 {% endif %}*/
/*                 {{ tab.content }}*/
/*               </div>*/
/*             {% endfor %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {% if tags %}*/
/*         <p class="tags"><b>{{ text_tags }}</b>*/
/*           {% for i in 0..tags|length %}*/
/*             {% if i < (tags|length - 1) %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/*             {% else %} <a href="{{ tags[i].href }}">{{ tags[i].tag }}</a> {% endif %}*/
/*           {% endfor %} </p>*/
/*       {% endif %}*/
/*       {% if products and journal2.settings.get('related_products_status') %}*/
/*         <div class="box related-products {% if journal2.settings.get('related_products_carousel') %} journal-carousel {% if journal2.settings.get('related_products_carousel_arrows') == 'top' %} arrows-top {% endif %} {% endif %}">*/
/*           <div>*/
/*             <div class="box-heading">{{ text_related }}</div>*/
/*             <div class="box-content">*/
/*               {% if journal2.settings.get('related_products_carousel') %}*/
/*               <div class="swiper">*/
/*                 <div class="swiper-container" {% if journal2.settings.get('rtl') %} dir="rtl" {% endif %}>*/
/*                   <div class="swiper-wrapper">*/
/*                     {% endif %}*/
/*                     {% for product in products %}*/
/*                       <div class="product-grid-item {{ journal2.settings.get('related_products_grid_classes') }} {% if journal2.settings.get('related_products_carousel') %} swiper-slide {% endif %} display-{{ journal2.settings.get('product_grid_wishlist_icon_display') }} {{ journal2.settings.get('product_grid_button_block_button') }}">*/
/*                         <div class="product-thumb product-wrapper {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                           <div class="image {% if journal2.settings.get('show_countdown', 'never') != 'never' and product.date_end %} has-countdown {% endif %}">*/
/*                             <a href="{{ product.href }}" {% if product.thumb2 %} class="has-second-image" style="background: url('{{ product.thumb2 }}') no-repeat" {% endif %}>*/
/*                               <img class="lazy first-image" width="{{ journal2.settings.get('config_image_width') }}" height="{{ journal2.settings.get('config_image_height') }}" src="{{ journal2.settings.get('product_dummy_image') }}" data-src="{{ product.thumb }}" data-poip-product-id="{{ product['product_id'] }}" title="{{ product.name }}" alt="{{ product.name }}"/>*/
/*                             </a>*/
/*                             {% for label, name in product.labels %}*/
/*                               <span class="label-{{ label }}"><b>{{ name }}</b></span>*/
/*                             {% endfor %}*/
/*                             {% if journal2.settings.get('product_grid_wishlist_icon_position') == 'image' and journal2.settings.get('product_grid_wishlist_icon_display') == 'icon' %}*/
/*                               <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                               <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                             {% endif %}*/
/*                           </div>*/
/*                           <div class="product-details">*/
/*                             <div class="caption">*/
/*                               <h4 class="name"><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                               <p class="description">{{ product.description }}</p>*/
/*                               {% if product.price %}*/
/*                                 <div class="price">*/
/*                                   {% if not product.special %}*/
/*                                     {{ product.price }}*/
/*                                   {% else %}*/
/*                                     <span class="price-old">{{ product.price }}</span> <span class="price-new" {% if product.date_end %}data-end-date="{{ product.date_end }}"{% endif %}>{{ product.special }}</span>*/
/*                                   {% endif %}*/
/*                                 </div>*/
/*                               {% endif %}*/
/*                               {% if product.rating %}*/
/*                                 <div class="rating">*/
/*                                   {% for i in 1..5 %}*/
/*                                     {% if product.rating < i %}*/
/*                                       <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                     {% else %}*/
/*                                       <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                                     {% endif %}*/
/*                                   {% endfor %}*/
/*                                 </div>*/
/*                               {% endif %}*/
/*                             </div>*/
/*                             <div class="button-group">*/
/*                               {% if staticCall('Journal2Utils', 'isEnquiryProduct', [null, product]) %}*/
/*                                 <div class="cart enquiry-button">*/
/*                                   <a href="javascript:Journal.openPopup('{{ journal2.settings.get('enquiry_popup_code') }}', '{{ product.product_id }}');" data-clk="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ journal2.settings.get('enquiry_button_text') }}">{{ journal2.settings.get('enquiry_button_icon') }}<span class="button-cart-text">{{ journal2.settings.get('enquiry_button_text') }}</span></a>*/
/*                                 </div>*/
/*                               {% else %}*/
/*                                 <div class="cart {% if product.labels and product.labels.outofstock %} outofstock {% endif %}">*/
/*                                   <a onclick="addToCart('{{ product.product_id }}');" class="button hint--top" data-hint="{{ button_cart }}"><i class="button-left-icon"></i><span class="button-cart-text">{{ button_cart }}</span><i class="button-right-icon"></i></a>*/
/*                                 </div>*/
/*                               {% endif %}*/
/*                               <div class="wishlist"><a onclick="addToWishList('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_wishlist }}"><i class="wishlist-icon"></i><span class="button-wishlist-text">{{ button_wishlist }}</span></a></div>*/
/*                               <div class="compare"><a onclick="addToCompare('{{ product.product_id }}');" class="hint--top" data-hint="{{ button_compare }}"><i class="compare-icon"></i><span class="button-compare-text">{{ button_compare }}</span></a></div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     {% endfor %}*/
/*                     {% if journal2.settings.get('related_products_carousel') %}*/
/*                   </div>*/
/*                 </div>*/
/*                 {% if journal2.settings.get('related_products_carousel') and journal2.settings.get('related_products_carousel_arrows') != 'none' %}*/
/*                   <div class="swiper-button-next"></div>*/
/*                   <div class="swiper-button-prev"></div>*/
/*                 {% endif %}*/
/*                 {% endif %}*/
/*               </div>*/
/*               {% if journal2.settings.get('related_products_carousel') and journal2.settings.get('related_products_carousel_bullets') %}*/
/*                 <div class="swiper-pagination"></div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/* */
/*       {% if journal2.settings.get('show_countdown', 'never') != 'never' %}*/
/*         <script>*/
/*           $('.related-products .product-grid-item > div').each(function () {*/
/*             var $new = $(this).find('.price-new');*/
/*             if ($new.length && $new.attr('data-end-date')) {*/
/*               $(this).find('.image').append('<div class="countdown"></div>');*/
/*             }*/
/*             Journal.countdown($(this).find('.countdown'), $new.attr('data-end-date'));*/
/*           });*/
/*         </script>*/
/*       {% endif %}*/
/*       {% if journal2.settings.get('related_products_carousel') %}*/
/*         {% set grid = staticCall('Journal2Utils', 'getItemGrid', [journal2.settings.get('related_products_items_per_row'), journal2.settings.get('site_width', 1024), journal2.settings.get('config_columns_count', 0)]) %}*/
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
/*               spaceBetween: parseInt('{{ journal2.settings.get('product_grid_item_spacing', '15') }}', 10),*/
/*               pagination: {% if journal2.settings.get('related_products_carousel_bullets') %} $('.related-products .swiper-pagination') {% else %} false {% endif %},*/
/*               paginationClickable: true,*/
/*               nextButton: {% if journal2.settings.get('related_products_carousel_arrows') != 'none' %} $('.related-products .swiper-button-next') {% else %} false {% endif %},*/
/*               prevButton: {% if journal2.settings.get('related_products_carousel_arrows') != 'none' %} $('.related-products .swiper-button-prev') {% else %} false {% endif %},*/
/*               autoplay: {{ journal2.settings.get('related_products_carousel_autoplay') > 0 ? 4000 : 'false' }},*/
/*               autoplayStopOnHover: {% if journal2.settings.get('related_products_carousel_pause_on_hover') %} true {% else %} false {% endif %},*/
/*               speed: 400,*/
/*               touchEventsTarget: {% if journal2.settings.get('related_products_carousel_touchdrag') %} 'container' {% else %} false {% endif %}*/
/*             };*/
/* */
/*             $('.related-products .swiper-container').swiper(opts);*/
/*           })();*/
/*         </script>*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*   </div>*/
/* </div>*/
/* */
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
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/*   $('#button-cart').on('click', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=checkout/cart/add',*/
/*       type: 'post',*/
/*       data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/*       dataType: 'json',*/
/*       beforeSend: function() {*/
/*         $('#button-cart').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-cart').button('reset');*/
/*       },*/
/*       success: function(json) {*/
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
/*           if (!Journal.showNotification(json['success'], json['image'], true)) {*/
/*             $('.breadcrumb').after('<div class="alert alert-success success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*           }*/
/* */
/*           $('#cart-total').html(json['total']);*/
/* */
/*           if (Journal.scrollToTop) {*/
/*             $('html, body').animate({ scrollTop: 0 }, 'slow');*/
/*           }*/
/* */
/*           $('#cart ul').load('index.php?route=common/cart/info ul li');*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/*     $('#button-buy').on('click', function() {*/
/*     $.ajax({*/
/*       url: 'index.php?route=checkout/cart/add',*/
/*       type: 'post',*/
/*       data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/*       dataType: 'json',*/
/*       beforeSend: function() {*/
/*         $('#button-cart').button('loading');*/
/*       },*/
/*       complete: function() {*/
/*         $('#button-cart').button('reset');*/
/*       },*/
/*       success: function(json) {*/
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
/*          */
/* */
/*           $('#cart-total').html(json['total']);*/
/* */
/*           if (Journal.scrollToTop) {*/
/*             $('html, body').animate({ scrollTop: 0 }, 'slow');*/
/*           }*/
/* */
/*           $('#cart ul').load('index.php?route=common/cart/info ul li');*/
/*           window.location.href="index.php?route=checkout/checkout"*/
/*         }*/
/*       },*/
/*       error: function(xhr, ajaxOptions, thrownError) {*/
/*         alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/*       }*/
/*     });*/
/*   });*/
/* //--></script>*/
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
/* //--></script>*/
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
/* //--></script>*/
/* <!-- << Live Price -->*/
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
/* 				{% if ( pcop_data ?? false ) %}*/
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
/* */
/* 				<!-- << Product Option Image PRO module -->*/
/* 				{% if ( poip_theme_script ?? false ) %}*/
/* 					{{ poip_theme_script }}*/
/* 				{% endif %}*/
/* 				*/
/* 				{% if poip_installed ?? false %}*/
/* 					<script  type = "text/javascript" ><!--*/
/* 						(function(){	*/
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
/* 							*/
/* 							poip_common.initObject(poip_product, poip_product_settings);*/
/* 						})();*/
/* 					//--></script>*/
/* 				{% endif %}*/
/* 				*/
/*       <!-- >> Product Option Image PRO module -->*/
/*       */
/* 				{{ footer }}*/
/* */
