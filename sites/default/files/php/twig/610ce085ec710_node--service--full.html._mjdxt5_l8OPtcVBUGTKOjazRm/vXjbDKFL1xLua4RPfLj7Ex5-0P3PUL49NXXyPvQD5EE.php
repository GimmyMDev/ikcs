<?php

/* themes/magazine_lite/templates/node--service--full.html.twig */
class __TwigTemplate_fe3e354e308793211a8df6e204fd2640503034a62b61b95e2e945332a38d2f25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'node_side' => array($this, 'block_node_side'),
            'header_top' => array($this, 'block_header_top'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 69, "block" => 82);
        $filters = array("clean_class" => 71);
        $functions = array("attach_library" => 78);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'block'),
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
<article";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    <div class=\"node__container container\">";
        // line 82
        $this->displayBlock('node_side', $context, $blocks);
        // line 84
        echo "        <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "node__main-content", 1 => "clearfix"), "method"), "html", null, true));
        echo ">";
        // line 85
        $this->displayBlock('header_top', $context, $blocks);
        // line 87
        echo "            <div style=\"text-align:center;\">
                <h2";
        // line 88
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title", 1 => "field--name-title"), "method"), "html", null, true));
        echo ">
                    <a href=\"";
        // line 89
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\" rel=\"bookmark\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "</a>
                </h2>
            </div>
            <div style=\"text-align:center;\">";
        // line 93
        $this->displayBlock('content', $context, $blocks);
        // line 97
        echo "            </div>

        </div>
    </div>
</article>";
    }

    // line 82
    public function block_node_side($context, array $blocks = array())
    {
    }

    // line 85
    public function block_header_top($context, array $blocks = array())
    {
    }

    // line 93
    public function block_content($context, array $blocks = array())
    {
        // line 94
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "body", array()), "html", null, true));
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_footer_banner", array()), "html", null, true));
    }

    public function getTemplateName()
    {
        return "themes/magazine_lite/templates/node--service--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 95,  109 => 94,  106 => 93,  101 => 85,  96 => 82,  88 => 97,  86 => 93,  78 => 89,  74 => 88,  71 => 87,  69 => 85,  65 => 84,  63 => 82,  59 => 80,  55 => 79,  53 => 78,  51 => 75,  50 => 74,  49 => 73,  48 => 72,  47 => 71,  46 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magazine_lite/templates/node--service--full.html.twig", "/usr/www/users/ikcscfbryt/themes/magazine_lite/templates/node--service--full.html.twig");
    }
}
