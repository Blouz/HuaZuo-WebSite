<?php

/* default/template/extension/module/mp_accountlinks.twig */
class __TwigTemplate_361dfea726c13c14d5ac8465bdf0080cd7075d91f62fd74e75a6b4e0be6070ad extends Twig_Template
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
        echo "<div class=\"mpacc-profile\">
  ";
        // line 2
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 3
            echo "    ";
            if ((((((isset($context["customer_thumb"]) ? $context["customer_thumb"] : null) || (isset($context["show_name"]) ? $context["show_name"] : null)) || (isset($context["show_group"]) ? $context["show_group"] : null)) || (isset($context["show_email"]) ? $context["show_email"] : null)) || ((isset($context["show_telephone"]) ? $context["show_telephone"] : null) && (isset($context["telephone"]) ? $context["telephone"] : null)))) {
                // line 4
                echo "    <div class=\"profile-info\">
      ";
                // line 5
                if ((isset($context["customer_thumb"]) ? $context["customer_thumb"] : null)) {
                    // line 6
                    echo "      <div class=\"profile-image\">
        <a class=\"pic-upload\"><img src=\"";
                    // line 7
                    echo (isset($context["customer_thumb"]) ? $context["customer_thumb"] : null);
                    echo "\" class=\"img-responsive\"/></a>
      </div>
      ";
                }
                // line 10
                echo "      ";
                if ((isset($context["show_name"]) ? $context["show_name"] : null)) {
                    // line 11
                    echo "      <h3 class=\"user-name\">";
                    echo (isset($context["name"]) ? $context["name"] : null);
                    echo "</h3>    
      ";
                }
                // line 13
                echo "      
      ";
                // line 14
                if ((isset($context["show_group"]) ? $context["show_group"] : null)) {
                    // line 15
                    echo "      <div class=\"email hidden-sm\">";
                    echo (isset($context["text_customer_group"]) ? $context["text_customer_group"] : null);
                    echo ": ";
                    echo (isset($context["customer_group"]) ? $context["customer_group"] : null);
                    echo "</div>
      ";
                }
                // line 17
                echo "
      ";
                // line 18
                if ((isset($context["show_email"]) ? $context["show_email"] : null)) {
                    // line 19
                    echo "      <div class=\"email hidden-sm\">";
                    echo (isset($context["email"]) ? $context["email"] : null);
                    echo "</div>
      ";
                }
                // line 21
                echo "
      ";
                // line 22
                if (((isset($context["show_telephone"]) ? $context["show_telephone"] : null) && (isset($context["telephone"]) ? $context["telephone"] : null))) {
                    // line 23
                    echo "      <div class=\"phone\">";
                    echo (isset($context["telephone"]) ? $context["telephone"] : null);
                    echo "</div>
      ";
                }
                // line 25
                echo "    </div>
    ";
            }
            // line 27
            echo "  ";
        } else {
            // line 28
            echo "    ";
            if (((isset($context["customer_thumb"]) ? $context["customer_thumb"] : null) || (isset($context["show_name"]) ? $context["show_name"] : null))) {
                // line 29
                echo "    <div class=\"profile-info\">
      ";
                // line 30
                if ((isset($context["customer_thumb"]) ? $context["customer_thumb"] : null)) {
                    // line 31
                    echo "      <div class=\"profile-image\">
        <a><img src=\"";
                    // line 32
                    echo (isset($context["customer_thumb"]) ? $context["customer_thumb"] : null);
                    echo "\" class=\"img-responsive\"/></a>
      </div>
      ";
                }
                // line 35
                echo "      ";
                if ((isset($context["show_name"]) ? $context["show_name"] : null)) {
                    // line 36
                    echo "      <h3 class=\"user-name\">";
                    echo (isset($context["name"]) ? $context["name"] : null);
                    echo "</h3>    
      ";
                }
                // line 38
                echo "    </div>
    ";
            }
            // line 40
            echo "  ";
        }
        // line 41
        echo "
  <div class=\"profile-links clearfix ";
        // line 42
        echo (((isset($context["logged"]) ? $context["logged"] : null)) ? ("mp-notlogged") : (""));
        echo "\">  
  ";
        // line 43
        if ((isset($context["links"]) ? $context["links"] : null)) {
            // line 44
            echo "  <ul class=\"list-unstyled clearfix\">
    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 46
                echo "    ";
                if (($this->getAttribute($context["link"], "icon", array()) || $this->getAttribute($context["link"], "title", array()))) {
                    // line 47
                    echo "    <li>
      <a href=\"";
                    // line 48
                    echo $this->getAttribute($context["link"], "link", array());
                    echo "\">
        ";
                    // line 49
                    if ($this->getAttribute($context["link"], "icon", array())) {
                        // line 50
                        echo "        <i class=\"fa ";
                        echo $this->getAttribute($context["link"], "icon", array());
                        echo "\" aria-hidden=\"true\"></i> 
        ";
                    }
                    // line 52
                    echo "
        ";
                    // line 53
                    if ($this->getAttribute($context["link"], "title", array())) {
                        // line 54
                        echo "        <span>";
                        echo $this->getAttribute($context["link"], "title", array());
                        echo "</span>
        ";
                    }
                    // line 56
                    echo "      </a>
    </li>
    ";
                }
                // line 59
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "  </ul>
  ";
        }
        // line 62
        echo "
  ";
        // line 63
        if ((isset($context["more_links"]) ? $context["more_links"] : null)) {
            // line 64
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["more_links"]) ? $context["more_links"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["more_link"]) {
                // line 65
                echo "  <div class=\"text-center\">
    <a href=\"";
                // line 66
                echo $this->getAttribute($context["more_link"], "link", array());
                echo "\" class=\"btn mpbtn-submit\">";
                echo $this->getAttribute($context["more_link"], "title", array());
                echo "</a>
  </div>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['more_link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "  ";
        }
        echo "  
  </div>
</div>

";
        // line 73
        if ((isset($context["contact_status"]) ? $context["contact_status"] : null)) {
            // line 74
            echo "<div class=\"mp-adminchat\">
  <a data-toggle=\"collapse\" data-target=\"#mpadmin-form\" role=\"button\" aria-expanded=\"true\">    
    ";
            // line 76
            if ((isset($context["contact_icon"]) ? $context["contact_icon"] : null)) {
                // line 77
                echo "    <i class=\"fa ";
                echo (isset($context["contact_icon"]) ? $context["contact_icon"] : null);
                echo "\" aria-hidden=\"true\"></i>
    ";
            }
            // line 79
            echo "    <h3>";
            echo (isset($context["contact_title"]) ? $context["contact_title"] : null);
            echo "</h3>
  </a>  
  <div class=\"mpadmin-form collapse\" id=\"mpadmin-form\">
    <form class=\"form-horizontal\" method=\"\" action=\"\">
      <div class=\"form-group\">
        <div class=\"col-sm-12\">
          <label class=\"control-label\">";
            // line 85
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "</label>
          <input type=\"text\" name=\"contact_name\" class=\"form-control\" value=\"";
            // line 86
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "\" />
        </div>
      </div>
      <div class=\"form-group\">
        <div class=\"col-sm-12\">
          <label class=\"control-label\">";
            // line 91
            echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
            echo "</label>
          <input type=\"text\" name=\"contact_email\" class=\"form-control\" value=\"";
            // line 92
            echo (isset($context["email"]) ? $context["email"] : null);
            echo "\" />
        </div>
      </div>
      <div class=\"form-group\">
        <div class=\"col-sm-12\">
          <label class=\"control-label\">";
            // line 97
            echo (isset($context["entry_enquiry"]) ? $context["entry_enquiry"] : null);
            echo "</label>
          <textarea class=\"form-control\" rows=\"5\" name=\"contact_enquiry\"></textarea>
        </div>
      </div>
      <div class=\"text-center\"><a class=\"btn mpbtn-submit\" id=\"contact-submit\">";
            // line 101
            echo (isset($context["button_submit"]) ? $context["button_submit"] : null);
            echo "</a></div>
    </form>
  </div>
</div>
";
        }
        // line 106
        echo "<script type=\"text/javascript\"><!--
\$('#contact-submit').on('click', function() {
  \$.ajax({
    url: 'index.php?route=extension/module/mp_accountlinks/send',
    dataType: 'json',
    type: 'post',
    data: \$('.mp-adminchat input, .mp-adminchat textarea'),
    beforeSend: function() {
      \$('#contact-submit').button('loading');
    },
    complete: function() {
      \$('#contact-submit').button('reset');
    },
    success: function(json) {
      \$('.alert, .text-danger').remove();
      \$('.form-group').removeClass('has-error');

      if(json['error']) {
        if(json['error']['contact_name']) {
          \$('input[name=\\'contact_name\\']').after('<div class=\"text-danger\">' + json['error']['contact_name'] + '</div>');
        }

        if(json['error']['contact_email']) {
          \$('input[name=\\'contact_email\\']').after('<div class=\"text-danger\">' + json['error']['contact_email'] + '</div>');
        }

        if(json['error']['contact_enquiry']) {
          \$('textarea[name=\\'contact_enquiry\\']').after('<div class=\"text-danger\">' + json['error']['contact_enquiry'] + '</div>');
        }

        \$('.text-danger').parent().parent().addClass('has-error');
      }

      if(json['success']) {
        \$('#contact-submit').after('<div class=\"alert alert-success success\" id=\"contact-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

        setTimeout(function() {
          \$('#contact-success').remove();
        }, 5000);

         \$('textarea[name=\\'contact_enquiry\\']').val('');
      }
    }
  });
});
//--></script>
";
        // line 152
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 153
            echo "<script type=\"text/javascript\"><!--
\$('.pic-upload').on('click', function() {
  var node = this;

  \$('#form-upload').remove();

  \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

  \$('#form-upload input[name=\\'file\\']').trigger('click');

  if (typeof timer != 'undefined') {
      clearInterval(timer);
  }

  timer = setInterval(function() {
    if (\$('#form-upload input[name=\\'file\\']').val() != '') {
      clearInterval(timer);

      \$.ajax({
        url: 'index.php?route=extension/module/mp_accountlinks/upload',
        type: 'post',
        dataType: 'json',
        data: new FormData(\$('#form-upload')[0]),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function() {
          \$(node).after('<div class=\"mpblur\"></div>');
        },
        complete: function() {
          \$('.mpblur').remove();
        },
        success: function(json) {
          if (json['error']) {
            alert(json['error']);
          }

          if (json['success']) {
            \$('.pic-upload img').attr('src', json['customer_thumb']);
          }
        }
      });
    }
  }, 500);
});
//--></script>
";
        }
        // line 200
        echo "<style type=\"text/css\">
";
        // line 201
        if ((isset($context["profile_info_bg"]) ? $context["profile_info_bg"] : null)) {
            // line 202
            echo ".mpacc-profile .profile-info{
  background: ";
            // line 203
            echo (isset($context["profile_info_bg"]) ? $context["profile_info_bg"] : null);
            echo ";
  ";
            // line 204
            if ((isset($context["profile_info_bg_shadow"]) ? $context["profile_info_bg_shadow"] : null)) {
                // line 205
                echo "  box-shadow: inset 0px -19px 36px ";
                echo (isset($context["profile_info_bg_shadow"]) ? $context["profile_info_bg_shadow"] : null);
                echo ";
  -webkit-box-shadow: inset 0px -19px 36px ";
                // line 206
                echo (isset($context["profile_info_bg_shadow"]) ? $context["profile_info_bg_shadow"] : null);
                echo ";
  ";
            }
            // line 208
            echo "}
";
        }
        // line 210
        echo "
";
        // line 211
        if ((isset($context["profile_text_color"]) ? $context["profile_text_color"] : null)) {
            // line 212
            echo ".mpacc-profile .user-name, .mpacc-profile .email, .mpacc-profile .phone{
  color: ";
            // line 213
            echo (isset($context["profile_text_color"]) ? $context["profile_text_color"] : null);
            echo ";
}
";
        }
        // line 216
        echo "
";
        // line 217
        if ((isset($context["links_bgcolor"]) ? $context["links_bgcolor"] : null)) {
            // line 218
            echo ".mpacc-profile .profile-links{
  background: ";
            // line 219
            echo (isset($context["links_bgcolor"]) ? $context["links_bgcolor"] : null);
            echo ";
}
";
        }
        // line 222
        echo "
";
        // line 223
        if ((isset($context["links_text_color"]) ? $context["links_text_color"] : null)) {
            // line 224
            echo ".mpacc-profile .profile-links ul li a{
  color: ";
            // line 225
            echo (isset($context["links_text_color"]) ? $context["links_text_color"] : null);
            echo ";
}
";
        }
        // line 228
        echo "
";
        // line 229
        if ((isset($context["links_text_hover_color"]) ? $context["links_text_hover_color"] : null)) {
            // line 230
            echo " .mpacc-profile .profile-links ul li a:hover{
  color: ";
            // line 231
            echo (isset($context["links_text_hover_color"]) ? $context["links_text_hover_color"] : null);
            echo ";
}
";
        }
        // line 234
        echo "
";
        // line 235
        if ((isset($context["links_icon_color"]) ? $context["links_icon_color"] : null)) {
            // line 236
            echo ".mpacc-profile .profile-links ul li i{
  box-shadow: inset 0px 0px 10px ";
            // line 237
            echo (isset($context["links_icon_color"]) ? $context["links_icon_color"] : null);
            echo ";
  -webkit-box-shadow: inset 0px 0px 10px ";
            // line 238
            echo (isset($context["links_icon_color"]) ? $context["links_icon_color"] : null);
            echo ";
}
";
        }
        // line 241
        echo "
";
        // line 242
        if ((isset($context["links_border_color"]) ? $context["links_border_color"] : null)) {
            // line 243
            echo ".mpacc-profile .profile-links ul li{
  border-color: ";
            // line 244
            echo (isset($context["links_border_color"]) ? $context["links_border_color"] : null);
            echo ";
}
";
        }
        // line 247
        echo "
";
        // line 248
        if (((isset($context["button_color"]) ? $context["button_color"] : null) && (isset($context["buttons_shadow"]) ? $context["buttons_shadow"] : null))) {
            // line 249
            echo ".mpbtn-submit{
  box-shadow: inset 0px 0px 10px ";
            // line 250
            echo (isset($context["buttons_shadow"]) ? $context["buttons_shadow"] : null);
            echo ";
  -webkit-box-shadow: inset 0px 0px 10px ";
            // line 251
            echo (isset($context["buttons_shadow"]) ? $context["buttons_shadow"] : null);
            echo ";
  color: ";
            // line 252
            echo (isset($context["button_color"]) ? $context["button_color"] : null);
            echo "
}
";
        }
        // line 255
        echo "
";
        // line 256
        if ((isset($context["button_hover_color"]) ? $context["button_hover_color"] : null)) {
            // line 257
            echo ".mpbtn-submit:hover{
  color: ";
            // line 258
            echo (isset($context["button_hover_color"]) ? $context["button_hover_color"] : null);
            echo ";
}
";
        }
        // line 261
        echo "
";
        // line 262
        if ((isset($context["adminchat_bgcolor"]) ? $context["adminchat_bgcolor"] : null)) {
            // line 263
            echo ".mp-adminchat{
  background: ";
            // line 264
            echo (isset($context["adminchat_bgcolor"]) ? $context["adminchat_bgcolor"] : null);
            echo ";
}
";
        }
        // line 267
        echo "
";
        // line 268
        if ((isset($context["adminchat_icon_color"]) ? $context["adminchat_icon_color"] : null)) {
            // line 269
            echo ".mp-adminchat i{
  color: ";
            // line 270
            echo (isset($context["adminchat_icon_color"]) ? $context["adminchat_icon_color"] : null);
            echo "
}
";
        }
        // line 273
        echo "
";
        // line 274
        if ((isset($context["adminchat_heading_color"]) ? $context["adminchat_heading_color"] : null)) {
            // line 275
            echo ".mp-adminchat h3{
  color: ";
            // line 276
            echo (isset($context["adminchat_heading_color"]) ? $context["adminchat_heading_color"] : null);
            echo "
}
";
        }
        // line 279
        echo "
";
        // line 280
        if ((isset($context["adminchat_form_color"]) ? $context["adminchat_form_color"] : null)) {
            // line 281
            echo ".mp-adminchat .mpadmin-form{
  color: ";
            // line 282
            echo (isset($context["adminchat_form_color"]) ? $context["adminchat_form_color"] : null);
            echo "
}
";
        }
        // line 285
        echo "
";
        // line 286
        if ((isset($context["adminchat_fields_shadow"]) ? $context["adminchat_fields_shadow"] : null)) {
            // line 287
            echo ".mp-adminchat .mpadmin-form .form-control{
  \tbox-shadow: inset 0px 0px 5px ";
            // line 288
            echo (isset($context["adminchat_fields_shadow"]) ? $context["adminchat_fields_shadow"] : null);
            echo ";
  \t-webkit-box-shadow: inset 0px 0px 5px ";
            // line 289
            echo (isset($context["adminchat_fields_shadow"]) ? $context["adminchat_fields_shadow"] : null);
            echo ";
\t";
            // line 290
            if ((isset($context["adminchat_form_color"]) ? $context["adminchat_form_color"] : null)) {
                // line 291
                echo "\tcolor: ";
                echo (isset($context["adminchat_form_color"]) ? $context["adminchat_form_color"] : null);
                echo "
\t";
            }
            // line 293
            echo "}
";
        }
        // line 295
        echo "
";
        // line 296
        if ((isset($context["adminchat_fields_error_shadow"]) ? $context["adminchat_fields_error_shadow"] : null)) {
            // line 297
            echo ".mp-adminchat .mpadmin-form .has-error .form-control{
  box-shadow: inset 0px 0px 5px ";
            // line 298
            echo (isset($context["adminchat_fields_error_shadow"]) ? $context["adminchat_fields_error_shadow"] : null);
            echo ";
  -webkit-box-shadow: inset 0px 0px 5px ";
            // line 299
            echo (isset($context["adminchat_fields_error_shadow"]) ? $context["adminchat_fields_error_shadow"] : null);
            echo ";
}
";
        }
        // line 302
        echo "
";
        // line 303
        if ((isset($context["adminchat_fields_error_color"]) ? $context["adminchat_fields_error_color"] : null)) {
            // line 304
            echo ".mp-adminchat .mpadmin-form .has-error .control-label, .mp-adminchat .mpadmin-form .has-error .text-danger{
  border-color: ";
            // line 305
            echo (isset($context["adminchat_fields_error_color"]) ? $context["adminchat_fields_error_color"] : null);
            echo ";
  color: ";
            // line 306
            echo (isset($context["adminchat_fields_error_color"]) ? $context["adminchat_fields_error_color"] : null);
            echo ";
}
";
        }
        // line 309
        echo "
";
        // line 310
        echo (isset($context["css"]) ? $context["css"] : null);
        echo "
</style>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/mp_accountlinks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  654 => 310,  651 => 309,  645 => 306,  641 => 305,  638 => 304,  636 => 303,  633 => 302,  627 => 299,  623 => 298,  620 => 297,  618 => 296,  615 => 295,  611 => 293,  605 => 291,  603 => 290,  599 => 289,  595 => 288,  592 => 287,  590 => 286,  587 => 285,  581 => 282,  578 => 281,  576 => 280,  573 => 279,  567 => 276,  564 => 275,  562 => 274,  559 => 273,  553 => 270,  550 => 269,  548 => 268,  545 => 267,  539 => 264,  536 => 263,  534 => 262,  531 => 261,  525 => 258,  522 => 257,  520 => 256,  517 => 255,  511 => 252,  507 => 251,  503 => 250,  500 => 249,  498 => 248,  495 => 247,  489 => 244,  486 => 243,  484 => 242,  481 => 241,  475 => 238,  471 => 237,  468 => 236,  466 => 235,  463 => 234,  457 => 231,  454 => 230,  452 => 229,  449 => 228,  443 => 225,  440 => 224,  438 => 223,  435 => 222,  429 => 219,  426 => 218,  424 => 217,  421 => 216,  415 => 213,  412 => 212,  410 => 211,  407 => 210,  403 => 208,  398 => 206,  393 => 205,  391 => 204,  387 => 203,  384 => 202,  382 => 201,  379 => 200,  330 => 153,  328 => 152,  280 => 106,  272 => 101,  265 => 97,  257 => 92,  253 => 91,  245 => 86,  241 => 85,  231 => 79,  225 => 77,  223 => 76,  219 => 74,  217 => 73,  209 => 69,  198 => 66,  195 => 65,  190 => 64,  188 => 63,  185 => 62,  181 => 60,  175 => 59,  170 => 56,  164 => 54,  162 => 53,  159 => 52,  153 => 50,  151 => 49,  147 => 48,  144 => 47,  141 => 46,  137 => 45,  134 => 44,  132 => 43,  128 => 42,  125 => 41,  122 => 40,  118 => 38,  112 => 36,  109 => 35,  103 => 32,  100 => 31,  98 => 30,  95 => 29,  92 => 28,  89 => 27,  85 => 25,  79 => 23,  77 => 22,  74 => 21,  68 => 19,  66 => 18,  63 => 17,  55 => 15,  53 => 14,  50 => 13,  44 => 11,  41 => 10,  35 => 7,  32 => 6,  30 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="mpacc-profile">*/
/*   {% if logged %}*/
/*     {% if customer_thumb or show_name or show_group or show_email or (show_telephone and telephone) %}*/
/*     <div class="profile-info">*/
/*       {% if customer_thumb %}*/
/*       <div class="profile-image">*/
/*         <a class="pic-upload"><img src="{{ customer_thumb }}" class="img-responsive"/></a>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if show_name %}*/
/*       <h3 class="user-name">{{ name }}</h3>    */
/*       {% endif %}*/
/*       */
/*       {% if show_group %}*/
/*       <div class="email hidden-sm">{{ text_customer_group }}: {{ customer_group }}</div>*/
/*       {% endif %}*/
/* */
/*       {% if show_email %}*/
/*       <div class="email hidden-sm">{{ email }}</div>*/
/*       {% endif %}*/
/* */
/*       {% if show_telephone and telephone %}*/
/*       <div class="phone">{{ telephone }}</div>*/
/*       {% endif %}*/
/*     </div>*/
/*     {% endif %}*/
/*   {% else %}*/
/*     {% if customer_thumb or show_name %}*/
/*     <div class="profile-info">*/
/*       {% if customer_thumb %}*/
/*       <div class="profile-image">*/
/*         <a><img src="{{ customer_thumb }}" class="img-responsive"/></a>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if show_name %}*/
/*       <h3 class="user-name">{{ name }}</h3>    */
/*       {% endif %}*/
/*     </div>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* */
/*   <div class="profile-links clearfix {{ logged ? 'mp-notlogged' : '' }}">  */
/*   {% if links %}*/
/*   <ul class="list-unstyled clearfix">*/
/*     {% for link in links %}*/
/*     {% if link.icon or link.title %}*/
/*     <li>*/
/*       <a href="{{ link.link }}">*/
/*         {% if link.icon %}*/
/*         <i class="fa {{ link.icon }}" aria-hidden="true"></i> */
/*         {% endif %}*/
/* */
/*         {% if link.title %}*/
/*         <span>{{ link.title }}</span>*/
/*         {% endif %}*/
/*       </a>*/
/*     </li>*/
/*     {% endif %}*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% endif %}*/
/* */
/*   {% if more_links %}*/
/*   {% for more_link in more_links %}*/
/*   <div class="text-center">*/
/*     <a href="{{ more_link.link }}" class="btn mpbtn-submit">{{ more_link.title }}</a>*/
/*   </div>*/
/*   {% endfor %}*/
/*   {% endif %}  */
/*   </div>*/
/* </div>*/
/* */
/* {% if contact_status %}*/
/* <div class="mp-adminchat">*/
/*   <a data-toggle="collapse" data-target="#mpadmin-form" role="button" aria-expanded="true">    */
/*     {% if contact_icon %}*/
/*     <i class="fa {{ contact_icon }}" aria-hidden="true"></i>*/
/*     {% endif %}*/
/*     <h3>{{ contact_title }}</h3>*/
/*   </a>  */
/*   <div class="mpadmin-form collapse" id="mpadmin-form">*/
/*     <form class="form-horizontal" method="" action="">*/
/*       <div class="form-group">*/
/*         <div class="col-sm-12">*/
/*           <label class="control-label">{{ entry_name }}</label>*/
/*           <input type="text" name="contact_name" class="form-control" value="{{ name }}" />*/
/*         </div>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <div class="col-sm-12">*/
/*           <label class="control-label">{{ entry_email }}</label>*/
/*           <input type="text" name="contact_email" class="form-control" value="{{ email }}" />*/
/*         </div>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <div class="col-sm-12">*/
/*           <label class="control-label">{{ entry_enquiry }}</label>*/
/*           <textarea class="form-control" rows="5" name="contact_enquiry"></textarea>*/
/*         </div>*/
/*       </div>*/
/*       <div class="text-center"><a class="btn mpbtn-submit" id="contact-submit">{{ button_submit }}</a></div>*/
/*     </form>*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
/* <script type="text/javascript"><!--*/
/* $('#contact-submit').on('click', function() {*/
/*   $.ajax({*/
/*     url: 'index.php?route=extension/module/mp_accountlinks/send',*/
/*     dataType: 'json',*/
/*     type: 'post',*/
/*     data: $('.mp-adminchat input, .mp-adminchat textarea'),*/
/*     beforeSend: function() {*/
/*       $('#contact-submit').button('loading');*/
/*     },*/
/*     complete: function() {*/
/*       $('#contact-submit').button('reset');*/
/*     },*/
/*     success: function(json) {*/
/*       $('.alert, .text-danger').remove();*/
/*       $('.form-group').removeClass('has-error');*/
/* */
/*       if(json['error']) {*/
/*         if(json['error']['contact_name']) {*/
/*           $('input[name=\'contact_name\']').after('<div class="text-danger">' + json['error']['contact_name'] + '</div>');*/
/*         }*/
/* */
/*         if(json['error']['contact_email']) {*/
/*           $('input[name=\'contact_email\']').after('<div class="text-danger">' + json['error']['contact_email'] + '</div>');*/
/*         }*/
/* */
/*         if(json['error']['contact_enquiry']) {*/
/*           $('textarea[name=\'contact_enquiry\']').after('<div class="text-danger">' + json['error']['contact_enquiry'] + '</div>');*/
/*         }*/
/* */
/*         $('.text-danger').parent().parent().addClass('has-error');*/
/*       }*/
/* */
/*       if(json['success']) {*/
/*         $('#contact-submit').after('<div class="alert alert-success success" id="contact-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/*         setTimeout(function() {*/
/*           $('#contact-success').remove();*/
/*         }, 5000);*/
/* */
/*          $('textarea[name=\'contact_enquiry\']').val('');*/
/*       }*/
/*     }*/
/*   });*/
/* });*/
/* //--></script>*/
/* {% if logged %}*/
/* <script type="text/javascript"><!--*/
/* $('.pic-upload').on('click', function() {*/
/*   var node = this;*/
/* */
/*   $('#form-upload').remove();*/
/* */
/*   $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/*   $('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/*   if (typeof timer != 'undefined') {*/
/*       clearInterval(timer);*/
/*   }*/
/* */
/*   timer = setInterval(function() {*/
/*     if ($('#form-upload input[name=\'file\']').val() != '') {*/
/*       clearInterval(timer);*/
/* */
/*       $.ajax({*/
/*         url: 'index.php?route=extension/module/mp_accountlinks/upload',*/
/*         type: 'post',*/
/*         dataType: 'json',*/
/*         data: new FormData($('#form-upload')[0]),*/
/*         cache: false,*/
/*         contentType: false,*/
/*         processData: false,*/
/*         beforeSend: function() {*/
/*           $(node).after('<div class="mpblur"></div>');*/
/*         },*/
/*         complete: function() {*/
/*           $('.mpblur').remove();*/
/*         },*/
/*         success: function(json) {*/
/*           if (json['error']) {*/
/*             alert(json['error']);*/
/*           }*/
/* */
/*           if (json['success']) {*/
/*             $('.pic-upload img').attr('src', json['customer_thumb']);*/
/*           }*/
/*         }*/
/*       });*/
/*     }*/
/*   }, 500);*/
/* });*/
/* //--></script>*/
/* {% endif %}*/
/* <style type="text/css">*/
/* {% if profile_info_bg %}*/
/* .mpacc-profile .profile-info{*/
/*   background: {{ profile_info_bg }};*/
/*   {% if profile_info_bg_shadow %}*/
/*   box-shadow: inset 0px -19px 36px {{ profile_info_bg_shadow }};*/
/*   -webkit-box-shadow: inset 0px -19px 36px {{ profile_info_bg_shadow }};*/
/*   {% endif %}*/
/* }*/
/* {% endif %}*/
/* */
/* {% if profile_text_color %}*/
/* .mpacc-profile .user-name, .mpacc-profile .email, .mpacc-profile .phone{*/
/*   color: {{ profile_text_color }};*/
/* }*/
/* {% endif %}*/
/* */
/* {% if links_bgcolor %}*/
/* .mpacc-profile .profile-links{*/
/*   background: {{ links_bgcolor }};*/
/* }*/
/* {% endif %}*/
/* */
/* {% if links_text_color %}*/
/* .mpacc-profile .profile-links ul li a{*/
/*   color: {{ links_text_color }};*/
/* }*/
/* {% endif %}*/
/* */
/* {% if links_text_hover_color %}*/
/*  .mpacc-profile .profile-links ul li a:hover{*/
/*   color: {{ links_text_hover_color }};*/
/* }*/
/* {% endif %}*/
/* */
/* {% if links_icon_color %}*/
/* .mpacc-profile .profile-links ul li i{*/
/*   box-shadow: inset 0px 0px 10px {{ links_icon_color }};*/
/*   -webkit-box-shadow: inset 0px 0px 10px {{ links_icon_color }};*/
/* }*/
/* {% endif %}*/
/* */
/* {% if links_border_color %}*/
/* .mpacc-profile .profile-links ul li{*/
/*   border-color: {{ links_border_color }};*/
/* }*/
/* {% endif %}*/
/* */
/* {% if button_color and buttons_shadow %}*/
/* .mpbtn-submit{*/
/*   box-shadow: inset 0px 0px 10px {{ buttons_shadow }};*/
/*   -webkit-box-shadow: inset 0px 0px 10px {{ buttons_shadow }};*/
/*   color: {{ button_color }}*/
/* }*/
/* {% endif %}*/
/* */
/* {% if button_hover_color %}*/
/* .mpbtn-submit:hover{*/
/*   color: {{ button_hover_color }};*/
/* }*/
/* {% endif %}*/
/* */
/* {% if adminchat_bgcolor %}*/
/* .mp-adminchat{*/
/*   background: {{ adminchat_bgcolor }};*/
/* }*/
/* {% endif %}*/
/* */
/* {% if adminchat_icon_color %}*/
/* .mp-adminchat i{*/
/*   color: {{ adminchat_icon_color }}*/
/* }*/
/* {% endif %}*/
/* */
/* {% if adminchat_heading_color %}*/
/* .mp-adminchat h3{*/
/*   color: {{ adminchat_heading_color }}*/
/* }*/
/* {% endif %}*/
/* */
/* {% if adminchat_form_color %}*/
/* .mp-adminchat .mpadmin-form{*/
/*   color: {{ adminchat_form_color }}*/
/* }*/
/* {% endif %}*/
/* */
/* {% if adminchat_fields_shadow %}*/
/* .mp-adminchat .mpadmin-form .form-control{*/
/*   	box-shadow: inset 0px 0px 5px {{ adminchat_fields_shadow }};*/
/*   	-webkit-box-shadow: inset 0px 0px 5px {{ adminchat_fields_shadow }};*/
/* 	{% if adminchat_form_color %}*/
/* 	color: {{ adminchat_form_color }}*/
/* 	{% endif %}*/
/* }*/
/* {% endif %}*/
/* */
/* {% if adminchat_fields_error_shadow %}*/
/* .mp-adminchat .mpadmin-form .has-error .form-control{*/
/*   box-shadow: inset 0px 0px 5px {{ adminchat_fields_error_shadow }};*/
/*   -webkit-box-shadow: inset 0px 0px 5px {{ adminchat_fields_error_shadow }};*/
/* }*/
/* {% endif %}*/
/* */
/* {% if adminchat_fields_error_color %}*/
/* .mp-adminchat .mpadmin-form .has-error .control-label, .mp-adminchat .mpadmin-form .has-error .text-danger{*/
/*   border-color: {{ adminchat_fields_error_color }};*/
/*   color: {{ adminchat_fields_error_color }};*/
/* }*/
/* {% endif %}*/
/* */
/* {{ css }}*/
/* </style>*/
