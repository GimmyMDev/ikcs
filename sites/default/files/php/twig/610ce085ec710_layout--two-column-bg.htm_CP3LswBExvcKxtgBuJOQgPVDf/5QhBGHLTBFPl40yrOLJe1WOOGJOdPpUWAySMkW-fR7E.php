<?php

/* themes/magazine_lite/templates/layout--two-column-bg.html.twig */
class __TwigTemplate_a2e8e5f28dc02c33ce2431b74ab55fd5773fda669c41fba87fbce969a3086b8e extends Twig_Template
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
        $tags = array("set" => 13, "if" => 17);
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

        // line 13
        $context["classes"] = array(0 => "layout", 1 => "layout--twocol");
        // line 17
        if (($context["content"] ?? null)) {
            // line 18
            echo "    <div class=\"two-col-bg\">
        <div";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "addClass", array(0 => "container"), "method"), "html", null, true));
            echo ">";
            // line 20
            if ($this->getAttribute(($context["content"] ?? null), "first", array())) {
                // line 21
                echo "                    <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "first", array()), "addClass", array(0 => "layout__region", 1 => "layout__region--first"), "method"), "html", null, true));
                echo ">";
                // line 22
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "first", array()), "html", null, true));
                echo "
                    </div>";
            }
            // line 26
            if ($this->getAttribute(($context["content"] ?? null), "second", array())) {
                // line 27
                echo "                    <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["region_attributes"] ?? null), "second", array()), "addClass", array(0 => "layout__region", 1 => "layout__region--second", 2 => "text-center"), "method"), "html", null, true));
                echo ">";
                // line 28
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "second", array()), "html", null, true));
                echo "
                    </div>";
            }
            // line 31
            echo "        </div>
    </div>";
        }
    }

    public function getTemplateName()
    {
        return "themes/magazine_lite/templates/layout--two-column-bg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  70 => 28,  66 => 27,  64 => 26,  59 => 22,  55 => 21,  53 => 20,  50 => 19,  47 => 18,  45 => 17,  43 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magazine_lite/templates/layout--two-column-bg.html.twig", "/usr/www/users/ikcscfbryt/themes/magazine_lite/templates/layout--two-column-bg.html.twig");
    }
}
