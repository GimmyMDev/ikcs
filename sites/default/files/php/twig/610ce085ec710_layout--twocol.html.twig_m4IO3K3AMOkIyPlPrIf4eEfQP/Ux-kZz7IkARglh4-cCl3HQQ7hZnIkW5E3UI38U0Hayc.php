<?php

/* themes/magazine_lite/templates/layout--twocol.html.twig */
class __TwigTemplate_2a5d340e9a7c1ab9f4018182fb163635140fe13d5911d586305f4e529ba6ce0f extends Twig_Template
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
        $tags = array("set" => 14, "if" => 19);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array(),
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

        // line 14
        $context["classes"] = array(0 => "layout", 1 => "layout--twocol");
        // line 19
        if (($context["content"] ?? null)) {
            // line 20
            echo "    <div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "addClass", array(0 => "container"), "method"), "html", null, true));
            echo ">";
            // line 21
            if ($this->getAttribute(($context["content"] ?? null), "top", array())) {
                // line 22
                echo "            <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "top", array()), "addClass", array(0 => "layout__region", 1 => "layout__region--top"), "method"), "html", null, true));
                echo ">";
                // line 23
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "top", array()), "html", null, true));
                echo "
            </div>";
            }
            // line 27
            if ($this->getAttribute(($context["content"] ?? null), "first", array())) {
                // line 28
                echo "            <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "first", array()), "addClass", array(0 => "layout__region", 1 => "layout__region--first"), "method"), "html", null, true));
                echo ">";
                // line 29
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "first", array()), "html", null, true));
                echo "
            </div>";
            }
            // line 33
            if ($this->getAttribute(($context["content"] ?? null), "second", array())) {
                // line 34
                echo "            <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "second", array()), "addClass", array(0 => "layout__region", 1 => "layout__region--second"), "method"), "html", null, true));
                echo ">";
                // line 35
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "second", array()), "html", null, true));
                echo "
            </div>";
            }
            // line 39
            if ($this->getAttribute(($context["content"] ?? null), "bottom", array())) {
                // line 40
                echo "            <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "bottom", array()), "addClass", array(0 => "layout__region", 1 => "layout__region--bottom"), "method"), "html", null, true));
                echo ">";
                // line 41
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "bottom", array()), "html", null, true));
                echo "
            </div>";
            }
            // line 44
            echo "    </div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/magazine_lite/templates/layout--twocol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 44,  90 => 41,  86 => 40,  84 => 39,  79 => 35,  75 => 34,  73 => 33,  68 => 29,  64 => 28,  62 => 27,  57 => 23,  53 => 22,  51 => 21,  47 => 20,  45 => 19,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magazine_lite/templates/layout--twocol.html.twig", "/usr/www/users/ikcscfbryt/themes/magazine_lite/templates/layout--twocol.html.twig");
    }
}
