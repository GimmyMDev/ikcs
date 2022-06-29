<?php

/* themes/magazine_lite/templates/page.html.twig */
class __TwigTemplate_38b956b8ce7c68582d742de9304824595c61bd8b1a284a64d0652ab40bbf8873 extends Twig_Template
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
        $tags = array("if" => 80);
        $filters = array("t" => 196);
        $functions = array("path" => 196);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 78
        echo "<div class=\"page-container\">";
        // line 80
        if ($this->getAttribute(($context["page"] ?? null), "pre_header", array())) {
            // line 82
            echo "    <div class=\"clearfix pre-header";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pre_header_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pre_header_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["pre_header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["pre_header_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 83
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pre_header_layout_container"] ?? null), "html", null, true));
            echo "\">";
            // line 85
            echo "        <div class=\"clearfix pre-header__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix pre-header__section\">";
            // line 89
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "pre_header", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>";
            // line 95
            echo "      </div>
    </div>";
        }
        // line 100
        if ((((((($this->getAttribute(($context["page"] ?? null), "header_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_second", array())) || $this->getAttribute(($context["page"] ?? null), "header_first", array())) || $this->getAttribute(($context["page"] ?? null), "header", array())) || $this->getAttribute(($context["page"] ?? null), "header_third", array())) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array())) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()))) {
            // line 102
            echo "    <div id=\"headerCarousel\" class=\"carousel container slide\" data-ride=\"carousel\"
         data-type=\"multi\"
         data-wrap=\"true\"
         data-interval=\"7000\"
         data-pause=\"false\">
      <div class=\"carousel-inner\">
        <div class=\"carousel-item item one active \"></div>
        <div class=\"carousel-item item two\"></div>
        <div class=\"carousel-item item three\"></div>
        <div class=\"carousel-item item four\"></div>
        <div class=\"carousel-item item five\"></div>
      </div>
    </div>
    <div class=\"header-container header--banner\">";
            // line 116
            if (($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()))) {
                // line 118
                echo "        <div class=\"clearfix header-top-highlighted";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_background_color"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                echo "\">
          <div class=\"";
                // line 119
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_layout_container"] ?? null), "html", null, true));
                echo "\">";
                // line 121
                echo "            <div class=\"clearfix header-top-highlighted__container";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"";
                // line 122
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 123
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_animation_effect"] ?? null), "html", null, true));
                    echo "\"";
                }
                // line 124
                echo ">
              <div class=\"row\">";
                // line 126
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array())) {
                    // line 127
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_first_grid_class"] ?? null), "html", null, true));
                    echo "\">";
                    // line 129
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">";
                    // line 130
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", array()), "html", null, true));
                    echo "
                    </div>";
                    // line 133
                    echo "                  </div>";
                }
                // line 135
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array())) {
                    // line 136
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_highlighted_second_grid_class"] ?? null), "html", null, true));
                    echo "\">";
                    // line 138
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">";
                    // line 139
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", array()), "html", null, true));
                    echo "
                    </div>";
                    // line 142
                    echo "                  </div>";
                }
                // line 144
                echo "              </div>
            </div>";
                // line 147
                echo "          </div>
        </div>";
            }
            // line 152
            if (($this->getAttribute(($context["page"] ?? null), "header_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "header_top_second", array()))) {
                // line 154
                echo "        <div class=\"clearfix header-top";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_background_color"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                echo "\">
          <div class=\"";
                // line 155
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_layout_container"] ?? null), "html", null, true));
                echo "\">";
                // line 157
                echo "            <div class=\"clearfix header-top__container";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"";
                // line 158
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 159
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_animation_effect"] ?? null), "html", null, true));
                    echo "\"";
                }
                // line 160
                echo ">
              <div class=\"row\">";
                // line 162
                if ($this->getAttribute(($context["page"] ?? null), "header_top_first", array())) {
                    // line 163
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_first_grid_class"] ?? null), "html", null, true));
                    echo "\">";
                    // line 165
                    echo "                    <div class=\"clearfix header-top__section header-top-first\">";
                    // line 166
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_first", array()), "html", null, true));
                    echo "
                    </div>";
                    // line 169
                    echo "                  </div>";
                }
                // line 171
                if ($this->getAttribute(($context["page"] ?? null), "header_top_second", array())) {
                    // line 172
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_top_second_grid_class"] ?? null), "html", null, true));
                    echo "\">";
                    // line 174
                    echo "                    <div class=\"clearfix header-top__section header-top-second\">";
                    // line 175
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_top_second", array()), "html", null, true));
                    echo "
                    </div>";
                    // line 178
                    echo "                  </div>";
                }
                // line 180
                echo "              </div>
            </div>";
                // line 183
                echo "          </div>
        </div>";
            }
            // line 188
            if ((($this->getAttribute(($context["page"] ?? null), "header_first", array()) || $this->getAttribute(($context["page"] ?? null), "header", array())) || $this->getAttribute(($context["page"] ?? null), "header_third", array()))) {
                // line 190
                echo "        <header role=\"banner\" class=\"clearfix header";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_background_color"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_container_class"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_columns_class"] ?? null), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
                echo "\">";
                // line 192
                if ((($context["mt_site_name"] ?? null) || ($context["mt_logo"] ?? null))) {
                    // line 193
                    echo "            <div class=\"onscroll-site-name-site-logo-container\">";
                    // line 194
                    if (($context["mt_logo"] ?? null)) {
                        // line 195
                        echo "                <div class=\"onscroll-logo\">
                  <a href=\"";
                        // line 196
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
                        echo "\" title=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
                        echo "\" rel=\"home\"><img class=\"img-responsive\" src=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["mt_logo"] ?? null), "html", null, true));
                        echo "\" /></a>
                </div>";
                    }
                    // line 199
                    if (($context["mt_site_name"] ?? null)) {
                        // line 200
                        echo "                <div class=\"onscroll-site-name site-name\">
                  <a href=\"";
                        // line 201
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
                        echo "\" title=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
                        echo "\" rel=\"home\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["mt_site_name"] ?? null), "html", null, true));
                        echo "</a>
                </div>";
                    }
                    // line 204
                    echo "            </div>";
                }
                // line 206
                echo "
          <div class=\"";
                // line 207
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_layout_container"] ?? null), "html", null, true));
                echo "\">";
                // line 209
                echo "            <div class=\"clearfix header__container\">
              <div class=\"row\">";
                // line 211
                if ($this->getAttribute(($context["page"] ?? null), "header_third", array())) {
                    // line 212
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_third_grid_class"] ?? null), "html", null, true));
                    echo "\">";
                    // line 214
                    echo "                    <div class=\"clearfix header__section header-third\">";
                    // line 215
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_third", array()), "html", null, true));
                    echo "
                    </div>";
                    // line 218
                    echo "                  </div>";
                }
                // line 220
                if ($this->getAttribute(($context["page"] ?? null), "header_first", array())) {
                    // line 221
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_first_grid_class"] ?? null), "html", null, true));
                    echo "\">";
                    // line 223
                    echo "                    <div class=\"clearfix header__section header-first\">";
                    // line 224
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_first", array()), "html", null, true));
                    echo "
                    </div>";
                    // line 227
                    echo "                  </div>";
                }
                // line 229
                if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
                    // line 230
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header_second_grid_class"] ?? null), "html", null, true));
                    echo "\">";
                    // line 232
                    echo "                    <div class=\"clearfix header__section header-second\">";
                    // line 233
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
                    echo "
                    </div>";
                    // line 236
                    echo "                  </div>";
                }
                // line 238
                echo "              </div>
            </div>";
                // line 241
                echo "          </div>
        </header>";
                // line 244
                echo "        <div class=\"call--to-action\"><a href=\"/form/request-a-quote-form\" class=\"call--to-action-a webform-dialog webform-dialog-wide\">REQUEST A QUOTE</a></div>";
            }
            // line 246
            echo "
    </div>";
        }
        // line 251
        if ($this->getAttribute(($context["page"] ?? null), "banner", array())) {
            // line 253
            echo "    <div class=\"clearfix banner";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["banner_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 254
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["banner_layout_container"] ?? null), "html", null, true));
            echo "\">";
            // line 256
            echo "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"banner__section\">";
            // line 260
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>";
            // line 266
            echo "      </div>
    </div>";
        }
        // line 272
        echo "  <div id=\"page-start\" class=\"clearfix page-start\"></div>";
        // line 274
        if ($this->getAttribute(($context["page"] ?? null), "system_messages", array())) {
            // line 275
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">";
            // line 279
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "system_messages", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </div>";
        }
        // line 286
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_top", array())) {
            // line 288
            echo "    <div class=\"clearfix highlighted-top";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 289
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_layout_container"] ?? null), "html", null, true));
            echo "\">";
            // line 291
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"";
            // line 292
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 293
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_top_animation_effect"] ?? null), "html", null, true));
                echo "\"";
            }
            // line 294
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted-top__section\">";
            // line 298
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted_top", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>";
            // line 304
            echo "      </div>
    </div>";
        }
        // line 309
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 311
            echo "    <div class=\"clearfix highlighted";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 312
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_layout_container"] ?? null), "html", null, true));
            echo "\">";
            // line 314
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"";
            // line 315
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 316
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["highlighted_animation_effect"] ?? null), "html", null, true));
                echo "\"";
            }
            // line 317
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix highlighted__section\">";
            // line 321
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>";
            // line 327
            echo "      </div>
    </div>";
        }
        // line 332
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 334
            echo "    <div class=\"clearfix content-top";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 335
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_layout_container"] ?? null), "html", null, true));
            echo "\">";
            // line 337
            echo "        <div class=\"clearfix content-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"";
            // line 338
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 339
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_animation_effect"] ?? null), "html", null, true));
                echo "\"";
            }
            // line 340
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top__section\">";
            // line 344
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>";
            // line 350
            echo "      </div>
    </div>";
        }
        // line 355
        if ($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", array())) {
            // line 357
            echo "    <div class=\"clearfix content-top-highlighted";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 358
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_layout_container"] ?? null), "html", null, true));
            echo "\">";
            // line 360
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"";
            // line 361
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 362
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_top_highlighted_animation_effect"] ?? null), "html", null, true));
                echo "\"";
            }
            // line 363
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"content-top-highlighted__section\">";
            // line 367
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top_highlighted", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>";
            // line 373
            echo "      </div>
    </div>";
        }
        // line 378
        if (($this->getAttribute(($context["page"] ?? null), "pre_content_first", array()) || $this->getAttribute(($context["page"] ?? null), "pre_content_second", array()))) {
            // line 380
            echo "    <div class=\"clearfix pre-content";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pre_content_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pre_content_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["pre_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["pre_content_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 381
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pre_content_layout_container"] ?? null), "html", null, true));
            echo "\">";
            // line 383
            echo "        <div class=\"clearfix pre-content__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["pre_content_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"";
            // line 384
            if ((($context["pre_content_animations"] ?? null) == "enabled")) {
                // line 385
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pre_content_animation_effect"] ?? null), "html", null, true));
                echo "\"";
            }
            // line 386
            echo ">
          <div class=\"row\">";
            // line 388
            if ($this->getAttribute(($context["page"] ?? null), "pre_content_first", array())) {
                // line 389
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pre_content_first_grid_class"] ?? null), "html", null, true));
                echo "\">";
                // line 391
                echo "                <div class=\"clearfix pre-content__section pre-content-first\">";
                // line 392
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "pre_content_first", array()), "html", null, true));
                echo "
                </div>";
                // line 395
                echo "              </div>";
            }
            // line 397
            if ($this->getAttribute(($context["page"] ?? null), "pre_content_second", array())) {
                // line 398
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pre_content_second_grid_class"] ?? null), "html", null, true));
                echo "\">";
                // line 400
                echo "                <div class=\"clearfix pre-content__section pre-content-second\">";
                // line 401
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "pre_content_second", array()), "html", null, true));
                echo "
                </div>";
                // line 404
                echo "              </div>";
            }
            // line 406
            echo "          </div>
        </div>";
            // line 409
            echo "      </div>
    </div>";
        }
        // line 415
        echo "  <div class=\"clearfix main-content region--dark-typography region--white-background";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_content_separator"] ?? null), "html", null, true));
        echo "\">";
        // line 417
        echo "      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"";
        // line 419
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_grid_class"] ?? null), "html", null, true));
        echo "\">";
        // line 421
        echo "            <div class=\"clearfix main-content__section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
        echo "\"";
        // line 422
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 423
            echo "                data-animate-effect=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_content_animation_effect"] ?? null), "html", null, true));
            echo "\"";
        }
        // line 424
        echo ">";
        // line 425
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 426
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        }
        // line 428
        echo "
            </div>";
        // line 431
        echo "          </section>";
        // line 432
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 433
            echo "            <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_grid_class"] ?? null), "html", null, true));
            echo "\">";
            // line 435
            echo "              <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\"";
            // line 436
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 437
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_first_animation_effect"] ?? null), "html", null, true));
                echo "\"";
            }
            // line 438
            echo ">";
            // line 439
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
              </section>";
            // line 442
            echo "            </aside>";
        }
        // line 444
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 445
            echo "            <aside class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_grid_class"] ?? null), "html", null, true));
            echo "\">";
            // line 447
            echo "              <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\"";
            // line 448
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 449
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sidebar_second_animation_effect"] ?? null), "html", null, true));
                echo "\"";
            }
            // line 450
            echo ">";
            // line 451
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
              </section>";
            // line 454
            echo "            </aside>";
        }
        // line 456
        echo "        </div>
      </div>";
        // line 459
        echo "  </div>";
        // line 462
        if (($this->getAttribute(($context["page"] ?? null), "content_bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "content_bottom_second", array()))) {
            // line 464
            echo "    <div class=\"clearfix content-bottom";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 465
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">";
            // line 467
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"";
            // line 468
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 469
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_animation_effect"] ?? null), "html", null, true));
                echo "\"";
            }
            // line 470
            echo ">
          <div class=\"row\">";
            // line 472
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_first", array())) {
                // line 473
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_first_grid_class"] ?? null), "html", null, true));
                echo "\">";
                // line 475
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">";
                // line 476
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom_first", array()), "html", null, true));
                echo "
                </div>";
                // line 479
                echo "              </div>";
            }
            // line 481
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_second", array())) {
                // line 482
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_bottom_second_grid_class"] ?? null), "html", null, true));
                echo "\">";
                // line 484
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">";
                // line 485
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom_second", array()), "html", null, true));
                echo "
                </div>";
                // line 488
                echo "              </div>";
            }
            // line 490
            echo "          </div>
        </div>";
            // line 493
            echo "      </div>
    </div>";
        }
        // line 498
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 500
            echo "    <div class=\"clearfix featured-top";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 501
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_layout_container"] ?? null), "html", null, true));
            echo "\">";
            // line 503
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"";
            // line 504
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 505
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_top_animation_effect"] ?? null), "html", null, true));
                echo "\"";
            }
            // line 506
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-top__section\">";
            // line 510
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>";
            // line 516
            echo "      </div>
    </div>";
        }
        // line 521
        if ($this->getAttribute(($context["page"] ?? null), "featured", array())) {
            // line 523
            echo "    <div class=\"clearfix featured";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 524
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_layout_container"] ?? null), "html", null, true));
            echo "\">";
            // line 526
            echo "        <div class=\"clearfix featured__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"";
            // line 527
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 528
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_animation_effect"] ?? null), "html", null, true));
                echo "\"";
            }
            // line 529
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured__section\">";
            // line 533
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>";
            // line 539
            echo "      </div>
    </div>";
        }
        // line 544
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", array())) {
            // line 546
            echo "    <div class=\"clearfix featured-bottom";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 547
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">";
            // line 549
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"";
            // line 550
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 551
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["featured_bottom_animation_effect"] ?? null), "html", null, true));
                echo "\"";
            }
            // line 552
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix featured-bottom__section\">";
            // line 556
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>";
            // line 562
            echo "      </div>
    </div>";
        }
        // line 567
        if ($this->getAttribute(($context["page"] ?? null), "sub_featured", array())) {
            // line 569
            echo "    <div class=\"clearfix sub-featured";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">
      <div class=\"";
            // line 570
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_layout_container"] ?? null), "html", null, true));
            echo "\">";
            // line 572
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"";
            // line 573
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 574
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sub_featured_animation_effect"] ?? null), "html", null, true));
                echo "\"";
            }
            // line 575
            echo ">
          <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"clearfix sub-featured__section\">";
            // line 579
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sub_featured", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>
        </div>";
            // line 585
            echo "      </div>
    </div>";
        }
        // line 590
        if (($this->getAttribute(($context["page"] ?? null), "footer_top_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_top_second", array()))) {
            // line 592
            echo "    <div class=\"clearfix footer-top";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_regions"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo " \">
      <div class=\"";
            // line 593
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_layout_container"] ?? null), "html", null, true));
            echo "\">";
            // line 595
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
            echo "\"";
            // line 596
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 597
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_animation_effect"] ?? null), "html", null, true));
                echo "\"";
            }
            // line 598
            echo ">
          <div class=\"row \">";
            // line 600
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_first", array())) {
                // line 601
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_first_grid_class"] ?? null), "html", null, true));
                echo " no-padding\">";
                // line 603
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">";
                // line 604
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_first", array()), "html", null, true));
                echo "
                </div>";
                // line 607
                echo "              </div>";
            }
            // line 609
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_second", array())) {
                // line 610
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_top_second_grid_class"] ?? null), "html", null, true));
                echo "\">";
                // line 612
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">";
                // line 613
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_second", array()), "html", null, true));
                echo "
                </div>";
                // line 616
                echo "              </div>";
            }
            // line 618
            echo "          </div>
        </div>";
            // line 621
            echo "      </div>
    </div>";
        }
        // line 626
        if ((((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()))) {
            // line 628
            echo "    <footer class=\"clearfix footer";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_background_color"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_region"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">";
            // line 629
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-to-top-enabled"))) {
                // line 630
                echo "        <div class=\"to-top\"><i class=\"fa";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_icon"] ?? null), "html", null, true));
                echo "\"></i></div>";
            }
            // line 632
            echo "      <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_layout_container"] ?? null), "html", null, true));
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">";
            // line 635
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
                // line 636
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_grid_class"] ?? null), "html", null, true));
                echo "\">";
                // line 638
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"";
                // line 639
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 640
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"";
                }
                // line 641
                echo ">";
                // line 642
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
                echo "
                </div>";
                // line 645
                echo "              </div>";
            }
            // line 647
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
                // line 648
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_second_grid_class"] ?? null), "html", null, true));
                echo "\">";
                // line 650
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"";
                // line 651
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 652
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"";
                }
                // line 653
                echo ">";
                // line 654
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
                echo "
                </div>";
                // line 657
                echo "              </div>";
            }
            // line 659
            echo "            <div class=\"clearfix";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_4_columns_clearfix_first"] ?? null), "html", null, true));
            echo "\"></div>";
            // line 660
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
                // line 661
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_third_grid_class"] ?? null), "html", null, true));
                echo "\">";
                // line 663
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"";
                // line 664
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 665
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"";
                }
                // line 666
                echo ">";
                // line 667
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
                echo "
                </div>";
                // line 670
                echo "              </div>";
            }
            // line 672
            echo "            <div class=\"clearfix";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_4_columns_clearfix_second"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_5_columns_clearfix"] ?? null), "html", null, true));
            echo "\"></div>";
            // line 673
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", array())) {
                // line 674
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_fourth_grid_class"] ?? null), "html", null, true));
                echo "\">";
                // line 676
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"";
                // line 677
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 678
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"";
                }
                // line 679
                echo ">";
                // line 680
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
                echo "
                </div>";
                // line 683
                echo "              </div>";
            }
            // line 685
            if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", array())) {
                // line 686
                echo "              <div class=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_fifth_grid_class"] ?? null), "html", null, true));
                echo "\">";
                // line 688
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" fade") : (""))));
                echo "\"";
                // line 689
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 690
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_animation_effect"] ?? null), "html", null, true));
                    echo "\"";
                }
                // line 691
                echo ">";
                // line 692
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()), "html", null, true));
                echo "
                </div>";
                // line 695
                echo "              </div>";
            }
            // line 697
            echo "          </div>
        </div>
      </div>
    </footer>";
        }
        // line 704
        if (($this->getAttribute(($context["page"] ?? null), "footer_bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_bottom_second", array()))) {
            // line 706
            echo "    <div class=\"clearfix footer-bottom";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_background_color"] ?? null), "html", null, true));
            echo " IKCS--dark-background";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_separator"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_region"] ?? null), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : (""))));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : (""))));
            echo "\">";
            // line 707
            if ((($context["scroll_to_top_display"] ?? null) && (($context["scroll_to_top_region"] ?? null) == "footer-bottom-to-top-enabled"))) {
                // line 708
                echo "        <div class=\"to-top\"><i class=\"fa";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["scroll_to_top_icon"] ?? null), "html", null, true));
                echo "\"></i></div>";
            }
            // line 710
            echo "      <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_bottom_layout_container"] ?? null), "html", null, true));
            echo "\">";
            // line 712
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">";
            // line 714
            if ($this->getAttribute(($context["page"] ?? null), "footer_bottom_first", array())) {
                // line 715
                echo "              <div class=\"col-md-3\">";
                // line 717
                echo "                <div class=\"clearfix footer-bottom__section footer-bottom-first\">";
                // line 718
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom_first", array()), "html", null, true));
                echo "
                </div>";
                // line 721
                echo "              </div>";
            }
            // line 723
            if ($this->getAttribute(($context["page"] ?? null), "footer_bottom_second", array())) {
                // line 724
                echo "              <div class=\"col-md-3 col-md-offset-6 \">";
                // line 726
                echo "                <div class=\"clearfix footer-bottom__section footer-bottom-first\">";
                // line 727
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom_second", array()), "html", null, true));
                echo "
                </div>";
                // line 730
                echo "              </div>";
            }
            // line 732
            echo "          </div>
        </div>";
            // line 735
            echo "      </div>
    </div>";
        }
        // line 739
        echo "
</div>";
        // line 742
        if ($this->getAttribute(($context["page"] ?? null), "sub_footer_first", array())) {
            // line 744
            echo "  <div class=\"modal fade\" id=\"leadFormModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Enquire Now\">
    <div class=\"modal-dialog\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\" style=\"border-bottom:0;\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        </div>
        <div class=\"modal-body\">";
            // line 751
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sub_footer_first", array()), "html", null, true));
            echo "
        </div>
      </div>
    </div>
  </div>";
        }
        // line 759
        if ($this->getAttribute(($context["page"] ?? null), "hidden_blocks_collection", array())) {
            // line 760
            echo "      <div class=\"modal fade\" id=\"mailchimpModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Newsletter\">
        <div class=\"modal-dialog\" role=\"document\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
              <h4 class=\"modal-title\">Newsletter Subscription</h4>
            </div>
            <div class=\"modal-body\">";
            // line 768
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "hidden_blocks_collection", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      </div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/magazine_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1241 => 768,  1232 => 760,  1230 => 759,  1222 => 751,  1214 => 744,  1212 => 742,  1209 => 739,  1205 => 735,  1202 => 732,  1199 => 730,  1195 => 727,  1193 => 726,  1191 => 724,  1189 => 723,  1186 => 721,  1182 => 718,  1180 => 717,  1178 => 715,  1176 => 714,  1173 => 712,  1169 => 710,  1164 => 708,  1162 => 707,  1153 => 706,  1151 => 704,  1145 => 697,  1142 => 695,  1138 => 692,  1136 => 691,  1131 => 690,  1129 => 689,  1125 => 688,  1121 => 686,  1119 => 685,  1116 => 683,  1112 => 680,  1110 => 679,  1105 => 678,  1103 => 677,  1099 => 676,  1095 => 674,  1093 => 673,  1088 => 672,  1085 => 670,  1081 => 667,  1079 => 666,  1074 => 665,  1072 => 664,  1068 => 663,  1064 => 661,  1062 => 660,  1058 => 659,  1055 => 657,  1051 => 654,  1049 => 653,  1044 => 652,  1042 => 651,  1038 => 650,  1034 => 648,  1032 => 647,  1029 => 645,  1025 => 642,  1023 => 641,  1018 => 640,  1016 => 639,  1012 => 638,  1008 => 636,  1006 => 635,  1000 => 632,  995 => 630,  993 => 629,  985 => 628,  983 => 626,  979 => 621,  976 => 618,  973 => 616,  969 => 613,  967 => 612,  963 => 610,  961 => 609,  958 => 607,  954 => 604,  952 => 603,  948 => 601,  946 => 600,  943 => 598,  938 => 597,  936 => 596,  932 => 595,  929 => 593,  920 => 592,  918 => 590,  914 => 585,  907 => 579,  902 => 575,  897 => 574,  895 => 573,  891 => 572,  888 => 570,  880 => 569,  878 => 567,  874 => 562,  867 => 556,  862 => 552,  857 => 551,  855 => 550,  851 => 549,  848 => 547,  840 => 546,  838 => 544,  834 => 539,  827 => 533,  822 => 529,  817 => 528,  815 => 527,  811 => 526,  808 => 524,  800 => 523,  798 => 521,  794 => 516,  787 => 510,  782 => 506,  777 => 505,  775 => 504,  771 => 503,  768 => 501,  760 => 500,  758 => 498,  754 => 493,  751 => 490,  748 => 488,  744 => 485,  742 => 484,  738 => 482,  736 => 481,  733 => 479,  729 => 476,  727 => 475,  723 => 473,  721 => 472,  718 => 470,  713 => 469,  711 => 468,  707 => 467,  704 => 465,  696 => 464,  694 => 462,  692 => 459,  689 => 456,  686 => 454,  682 => 451,  680 => 450,  675 => 449,  673 => 448,  667 => 447,  663 => 445,  661 => 444,  658 => 442,  654 => 439,  652 => 438,  647 => 437,  645 => 436,  639 => 435,  635 => 433,  633 => 432,  631 => 431,  628 => 428,  625 => 426,  623 => 425,  621 => 424,  616 => 423,  614 => 422,  608 => 421,  605 => 419,  601 => 417,  597 => 415,  593 => 409,  590 => 406,  587 => 404,  583 => 401,  581 => 400,  577 => 398,  575 => 397,  572 => 395,  568 => 392,  566 => 391,  562 => 389,  560 => 388,  557 => 386,  552 => 385,  550 => 384,  546 => 383,  543 => 381,  535 => 380,  533 => 378,  529 => 373,  522 => 367,  517 => 363,  512 => 362,  510 => 361,  506 => 360,  503 => 358,  495 => 357,  493 => 355,  489 => 350,  482 => 344,  477 => 340,  472 => 339,  470 => 338,  466 => 337,  463 => 335,  456 => 334,  454 => 332,  450 => 327,  443 => 321,  438 => 317,  433 => 316,  431 => 315,  427 => 314,  424 => 312,  416 => 311,  414 => 309,  410 => 304,  403 => 298,  398 => 294,  393 => 293,  391 => 292,  387 => 291,  384 => 289,  376 => 288,  374 => 286,  366 => 279,  361 => 275,  359 => 274,  357 => 272,  353 => 266,  346 => 260,  341 => 256,  338 => 254,  331 => 253,  329 => 251,  325 => 246,  322 => 244,  319 => 241,  316 => 238,  313 => 236,  309 => 233,  307 => 232,  303 => 230,  301 => 229,  298 => 227,  294 => 224,  292 => 223,  288 => 221,  286 => 220,  283 => 218,  279 => 215,  277 => 214,  273 => 212,  271 => 211,  268 => 209,  265 => 207,  262 => 206,  259 => 204,  250 => 201,  247 => 200,  245 => 199,  236 => 196,  233 => 195,  231 => 194,  229 => 193,  227 => 192,  219 => 190,  217 => 188,  213 => 183,  210 => 180,  207 => 178,  203 => 175,  201 => 174,  197 => 172,  195 => 171,  192 => 169,  188 => 166,  186 => 165,  182 => 163,  180 => 162,  177 => 160,  172 => 159,  170 => 158,  166 => 157,  163 => 155,  156 => 154,  154 => 152,  150 => 147,  147 => 144,  144 => 142,  140 => 139,  138 => 138,  134 => 136,  132 => 135,  129 => 133,  125 => 130,  123 => 129,  119 => 127,  117 => 126,  114 => 124,  109 => 123,  107 => 122,  103 => 121,  100 => 119,  93 => 118,  91 => 116,  76 => 102,  74 => 100,  70 => 95,  63 => 89,  58 => 85,  55 => 83,  47 => 82,  45 => 80,  43 => 78,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magazine_lite/templates/page.html.twig", "/usr/www/users/ikcscfbryt/themes/magazine_lite/templates/page.html.twig");
    }
}
