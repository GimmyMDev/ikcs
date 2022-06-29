<?php

/* themes/magazine_lite/templates/field--node--field-image.html.twig */
class __TwigTemplate_3311e86912251d3d4f029d29e84794d5548764aa3308a9ebe3c5ce52981008d0 extends Twig_Template
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
        $tags = array("set" => 41, "if" => 55, "for" => 76);
        $filters = array("clean_class" => 43, "length" => 74);
        $functions = array("attach_library" => 54);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class', 'length'),
                array('attach_library')
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

        // line 41
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 43
($context["field_name"] ?? null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 44
($context["field_type"] ?? null))), 3 => ("field--label-" .         // line 45
($context["label_display"] ?? null)));
        // line 49
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 51
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazine_lite/node-images"), "html", null, true));
        // line 55
        if ((($context["view_mode"] ?? null) == "full")) {
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazine_lite/magnific-popup-field-image-init"), "html", null, true));
        }
        // line 58
        if (($context["label_hidden"] ?? null)) {
            // line 59
            if (($context["multiple"] ?? null)) {
                // line 60
                echo "    <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null), 1 => "field__items"), "method"), "html", null, true));
                echo ">
      <div class=\"images-container clearfix\">
        <div class=\"image-preview clearfix\">
          <div class=\"image-wrapper clearfix\">
            <div";
                // line 64
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                echo ">";
                // line 65
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "content", array()), "html", null, true));
                echo "
            </div>
          </div>";
                // line 68
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "content", array()), "#item", array(), "array"), "title", array()) && (($context["view_mode"] ?? null) == "full"))) {
                    // line 69
                    echo "            <div class=\"image-caption clearfix\">
              <h4>";
                    // line 70
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "content", array()), "#item", array(), "array"), "title", array()), "html", null, true));
                    echo "</h4>
            </div>";
                }
                // line 73
                echo "        </div>";
                // line 74
                if (((twig_length_filter($this->env, ($context["items"] ?? null)) > 1) && (($context["view_mode"] ?? null) == "full"))) {
                    // line 75
                    echo "          <div class=\"image-listing-items clearfix\">";
                    // line 76
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 77
                        if (($this->getAttribute(($context["items"] ?? null), 0, array(), "array") != $context["item"])) {
                            // line 78
                            echo "                <div class=\"image-listing-item\">
                  <div";
                            // line 79
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                            echo ">";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                            echo "</div>
                </div>";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    echo "          </div>";
                }
                // line 85
                echo "      </div>
    </div>";
            } else {
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 89
                    echo "      <div class=\"images-container clearfix\">
        <div class=\"image-preview clearfix\">
          <div class=\"image-wrapper clearfix\">
            <div";
                    // line 92
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null), 1 => "field__item"), "method"), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                    echo "</div>
          </div>";
                    // line 94
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "title", array()) && (($context["view_mode"] ?? null) == "full"))) {
                        // line 95
                        echo "            <div class=\"image-caption clearfix\">
              <h4>";
                        // line 96
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "title", array()), "html", null, true));
                        echo "</h4>
            </div>";
                    }
                    // line 99
                    echo "        </div>
      </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
        } else {
            // line 104
            echo "  <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
    <div";
            // line 105
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</div>";
            // line 106
            if (($context["multiple"] ?? null)) {
                // line 107
                echo "      <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null), 1 => "field__items"), "method"), "html", null, true));
                echo ">
        <div class=\"images-container clearfix\">
          <div class=\"image-preview clearfix\">
            <div class=\"image-wrapper clearfix\">
              <div";
                // line 111
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                echo ">";
                // line 112
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "content", array()), "html", null, true));
                echo "
              </div>
            </div>";
                // line 115
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "content", array()), "#item", array(), "array"), "title", array()) && (($context["view_mode"] ?? null) == "full"))) {
                    // line 116
                    echo "              <div class=\"image-caption clearfix\">
                <h4>";
                    // line 117
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "content", array()), "#item", array(), "array"), "title", array()), "html", null, true));
                    echo "</h4>
              </div>";
                }
                // line 120
                echo "          </div>";
                // line 121
                if (((twig_length_filter($this->env, ($context["items"] ?? null)) > 1) && (($context["view_mode"] ?? null) == "full"))) {
                    // line 122
                    echo "            <div class=\"image-listing-items clearfix\">";
                    // line 123
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 124
                        if (($this->getAttribute(($context["items"] ?? null), 0, array(), "array") != $context["item"])) {
                            // line 125
                            echo "                  <div class=\"image-listing-item\">
                    <div";
                            // line 126
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                            echo ">";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                            echo "</div>
                  </div>";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    echo "            </div>";
                }
                // line 132
                echo "        </div>
      </div>";
            } else {
                // line 135
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 136
                    echo "        <div class=\"images-container clearfix\">
          <div class=\"image-preview clearfix\">
            <div class=\"image-wrapper clearfix\">
              <div";
                    // line 139
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null), 1 => "field__item"), "method"), "html", null, true));
                    echo ">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                    echo "</div>
            </div>";
                    // line 141
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "title", array()) && (($context["view_mode"] ?? null) == "full"))) {
                        // line 142
                        echo "              <div class=\"image-caption clearfix\">
                <h4>";
                        // line 143
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#item", array(), "array"), "title", array()), "html", null, true));
                        echo "</h4>
              </div>";
                    }
                    // line 146
                    echo "          </div>
        </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 150
            echo "  </div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/magazine_lite/templates/field--node--field-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 150,  251 => 146,  246 => 143,  243 => 142,  241 => 141,  235 => 139,  230 => 136,  226 => 135,  222 => 132,  219 => 130,  208 => 126,  205 => 125,  203 => 124,  199 => 123,  197 => 122,  195 => 121,  193 => 120,  188 => 117,  185 => 116,  183 => 115,  178 => 112,  175 => 111,  167 => 107,  165 => 106,  160 => 105,  155 => 104,  146 => 99,  141 => 96,  138 => 95,  136 => 94,  130 => 92,  125 => 89,  121 => 88,  117 => 85,  114 => 83,  103 => 79,  100 => 78,  98 => 77,  94 => 76,  92 => 75,  90 => 74,  88 => 73,  83 => 70,  80 => 69,  78 => 68,  73 => 65,  70 => 64,  62 => 60,  60 => 59,  58 => 58,  55 => 56,  53 => 55,  51 => 54,  49 => 51,  48 => 49,  46 => 45,  45 => 44,  44 => 43,  43 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magazine_lite/templates/field--node--field-image.html.twig", "/usr/www/users/ikcscfbryt/themes/magazine_lite/templates/field--node--field-image.html.twig");
    }
}
