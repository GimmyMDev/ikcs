<?php

/* themes/magazine_lite/templates/field--node--title--page.html.twig */
class __TwigTemplate_30476237f828399dd7dc91aec1d906603cc275b7d773c74752dea1af7b5ad438 extends Twig_Template
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
        $tags = array("set" => 40);
        $filters = array("clean_class" => 42, "raw" => 51, "replace" => 51);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set'),
                array('clean_class', 'raw', 'replace'),
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

        // line 40
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 42
($context["field_name"] ?? null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 43
($context["field_type"] ?? null))), 3 => ("field--label-" .         // line 44
($context["label_display"] ?? null)));
        // line 46
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 48
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 50
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(twig_replace_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["items"] ?? null), 0, array(), "array"), "content", array()), "#context", array(), "array"), "value", array(), "array"), array("\\n" => "<br/>"))));
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "themes/magazine_lite/templates/field--node--title--page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 51,  51 => 50,  49 => 48,  48 => 46,  46 => 44,  45 => 43,  44 => 42,  43 => 40,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magazine_lite/templates/field--node--title--page.html.twig", "/usr/www/users/ikcscfbryt/themes/magazine_lite/templates/field--node--title--page.html.twig");
    }
}
