<?php

/* themes/magazine_lite/templates/bootstrap--simple--carousel--block.html.twig */
class __TwigTemplate_d918778eeea0708880ddcdbf6534a6ee182cd5ae63e08027cbc7080b87b45691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 2, "block" => 10, "if" => 16, "for" => 23);
        $filters = array("clean_class" => 4);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block', 'if', 'for'),
                array('clean_class'),
                array()
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

        // line 2
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 4
($context["configuration"] ?? null), "provider", array()))), 2 => "block-bootstrap-simple-carousel");
        // line 8
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "addClass", array(0 => "container"), "method"), "html", null, true));
        echo ">
    <div class=\"field field--name-title field--type-string field--label-above\" style=\"margin-bottom:30px;\">Some of our valued clients</div>";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "</div>
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "        <div
            id=\"carousel-block-generic\"
            class=\"carousel slide\"
            data-ride=\"carousel\"
            data-type=\"multi\"
            data-wrap=\"";
        // line 16
        if (($this->getAttribute(($context["settings"] ?? null), "get", array(0 => "wrap"), "method") == 1)) {
            echo "true";
        } else {
            echo "false";
        }
        echo "\"
            data-interval=\"";
        // line 17
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["settings"] ?? null), "get", array(0 => "interval"), "method"), "html", null, true));
        echo "\"
            data-pause=\"";
        // line 18
        if ($this->getAttribute(($context["settings"] ?? null), "get", array(0 => "pause"), "method")) {
            echo "hover";
        }
        echo "\"
        >
            <!-- Indicators -->";
        // line 21
        if ($this->getAttribute(($context["settings"] ?? null), "get", array(0 => "indicators"), "method")) {
            // line 22
            echo "                <ol class=\"carousel-indicators\">";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                echo "                        <li
                            data-target=\"#carousel-block-generic\" data-slide-to=\"";
                // line 25
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->getAttribute($context["loop"], "index", array()) - 1), "html", null, true));
                echo "\"
                            class=\"indicator-item";
                // line 26
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute($context["loop"], "first", array())) ? (" active") : (""))));
                echo "\">
                        </li>";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                </ol>";
        }
        // line 31
        echo "
            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\">";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 35
            echo "                    <div class=\"carousel-item item";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute($context["loop"], "first", array())) ? (" active") : (""))));
            echo "\">
                        <img
                                src=\"";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "image_url", array()), "html", null, true));
            echo "\"
                                class=\"carousel-image";
            // line 38
            if ($this->getAttribute(($context["settings"] ?? null), "get", array(0 => "image_fluid"), "method")) {
                echo " img-responsive";
            }
            echo "\"
                                alt=\"";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "image_alt", array()), "html", null, true));
            echo "\"
                                title=\"";
            // line 40
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "image_title", array()), "html", null, true));
            echo "\"
                        >
                    </div>";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </div>

            <!-- Controls -->";
        // line 47
        if ($this->getAttribute(($context["settings"] ?? null), "get", array(0 => "controls"), "method")) {
            // line 48
            echo "                <a class=\"left carousel-control carousel-control-prev\" href=\"#carousel-block-generic\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left carousel-control-prev-icon\"></span>
                </a>
                <a class=\"right carousel-control carousel-control-next\" href=\"#carousel-block-generic\" data-slide=\"next\">
                    <span class=\"glyphicon glyphicon-chevron-right carousel-control-next-icon\"></span>
                </a>";
        }
        // line 55
        echo "        </div>";
    }

    public function getTemplateName()
    {
        return "themes/magazine_lite/templates/bootstrap--simple--carousel--block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 55,  199 => 48,  197 => 47,  193 => 44,  176 => 40,  172 => 39,  166 => 38,  162 => 37,  156 => 35,  139 => 34,  135 => 31,  132 => 29,  116 => 26,  112 => 25,  109 => 24,  92 => 23,  90 => 22,  88 => 21,  81 => 18,  77 => 17,  69 => 16,  62 => 11,  59 => 10,  54 => 57,  52 => 10,  47 => 8,  45 => 4,  44 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magazine_lite/templates/bootstrap--simple--carousel--block.html.twig", "/usr/www/users/ikcscfbryt/themes/magazine_lite/templates/bootstrap--simple--carousel--block.html.twig");
    }
}
