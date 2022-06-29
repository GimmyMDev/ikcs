<?php

/* themes/magazine_lite/templates/node--service--teaser.html.twig */
class __TwigTemplate_e30c724e537e1fdc439b4a51be533e0fdc74f333398781cdb4b89067a1146abb extends Twig_Template
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
        $tags = array("set" => 69);
        $filters = array("clean_class" => 71);
        $functions = array("attach_library" => 78);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('clean_class'),
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

        // line 69
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 71
($context["node"] ?? null), "bundle", array()))), 2 => (($this->getAttribute(        // line 72
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 73
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 74
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 75
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 6 => "clearfix");
        // line 78
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true));
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazine_lite/node"), "html", null, true));
        echo "
<div";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "addClass", array(0 => "col-c"), "method"), "html", null, true));
        echo ">
    <a class=\"\" rel=\"bookmark\" href=\"";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\" style=\"text-align:center;display:block;\">";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_photo", array()), "html", null, true));
        echo "
        <div class=\"service-teaser-label\">";
        // line 83
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["label"] ?? null), 0, array()), "html", null, true));
        echo "</div>
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/magazine_lite/templates/node--service--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 83,  63 => 82,  60 => 81,  56 => 80,  52 => 79,  50 => 78,  48 => 75,  47 => 74,  46 => 73,  45 => 72,  44 => 71,  43 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magazine_lite/templates/node--service--teaser.html.twig", "/usr/www/users/ikcscfbryt/themes/magazine_lite/templates/node--service--teaser.html.twig");
    }
}
