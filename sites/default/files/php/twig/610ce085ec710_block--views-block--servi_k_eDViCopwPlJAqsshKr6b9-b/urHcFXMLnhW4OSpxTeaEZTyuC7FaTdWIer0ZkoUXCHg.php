<?php

/* themes/magazine_lite/templates/block--views-block--service-block-block-1.html.twig */
class __TwigTemplate_5ef29aa2611e01b9c2df8dc6430a6c7c7bd2fb2ca233eb4189eec8075732f4a6 extends Twig_Template
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
        $tags = array("set" => 34, "block" => 48);
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
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "addClass", array(0 => "container-fluid wrap-in-grey"), "method"), "html", null, true));
        echo ">
    <div class=\"container no-padding\">";
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 53
        echo "    </div>
</div>";
    }

    // line 48
    public function block_content($context, array $blocks = array())
    {
        // line 49
        echo "            <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "content", 1 => "col-centered"), "method"), "html", null, true));
        echo ">";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
            </div>";
    }

    public function getTemplateName()
    {
        return "themes/magazine_lite/templates/block--views-block--service-block-block-1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 50,  67 => 49,  64 => 48,  59 => 53,  57 => 48,  55 => 47,  50 => 45,  48 => 41,  46 => 37,  45 => 36,  44 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magazine_lite/templates/block--views-block--service-block-block-1.html.twig", "/usr/www/users/ikcscfbryt/themes/magazine_lite/templates/block--views-block--service-block-block-1.html.twig");
    }
}
