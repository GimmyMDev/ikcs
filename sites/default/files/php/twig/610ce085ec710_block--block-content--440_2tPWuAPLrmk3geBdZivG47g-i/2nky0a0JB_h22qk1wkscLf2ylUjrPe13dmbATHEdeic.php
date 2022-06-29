<?php

/* themes/magazine_lite/templates/block--block-content--440b8e9d-875a-41fc-908e-9503d983f912.html.twig */
class __TwigTemplate_403c567714bfa92a4b556074d416a5933b490ca32bbb14df17dfce034f25c3f5 extends Twig_Template
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
        $tags = array("set" => 34, "block" => 49);
        $filters = array("clean_class" => 36);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block'),
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

        // line 34
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 36
($context["configuration"] ?? null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 37
($context["plugin_id"] ?? null))));
        // line 41
        $context["title_classes"] = array(0 => "title");
        // line 45
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "addClass", array(0 => "container-fluid wrap-in-grey darker-grey"), "method"), "html", null, true));
        echo ">
    <div class=\"container no-padding\">";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "    </div>
</div>";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "        <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "content"), "method"), "addClass", array(0 => "text-left"), "method"), "html", null, true));
        echo ">
            <h3 class=\"h3-about\">";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_title", array()), 0, array()), "html", null, true));
        echo "</h3>
            <div class=\"compliance-body\">";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "body", array()), 0, array()), "html", null, true));
        echo "</div>
            <div class=\"row\">
                <div class=\"col-md-6 text-center\">
                    <a class=\"IKCS-black-btn about-btn\" href=\"";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_button_1_url", array()), 0, array()), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_button_1_text", array()), 0, array()), "html", null, true));
        echo "</a>
                </div>
                <div class=\"col-md-6 text-center\">
                    <a class=\"IKCS-black-btn about-btn\" href=\"";
        // line 58
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_button_2_url", array()), 0, array()), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_button_2_text", array()), 0, array()), "html", null, true));
        echo "</a>
                </div>
            </div>
        </div>
        <div>&nbsp;</div>";
    }

    public function getTemplateName()
    {
        return "themes/magazine_lite/templates/block--block-content--440b8e9d-875a-41fc-908e-9503d983f912.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 58,  84 => 55,  78 => 52,  74 => 51,  69 => 50,  66 => 49,  61 => 64,  59 => 49,  57 => 48,  55 => 47,  50 => 45,  48 => 41,  46 => 37,  45 => 36,  44 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magazine_lite/templates/block--block-content--440b8e9d-875a-41fc-908e-9503d983f912.html.twig", "/usr/www/users/ikcscfbryt/themes/magazine_lite/templates/block--block-content--440b8e9d-875a-41fc-908e-9503d983f912.html.twig");
    }
}
