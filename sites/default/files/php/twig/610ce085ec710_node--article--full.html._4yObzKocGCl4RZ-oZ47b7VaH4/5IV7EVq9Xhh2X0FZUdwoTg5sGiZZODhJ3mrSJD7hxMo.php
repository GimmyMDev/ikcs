<?php

/* themes/magazine_lite/templates/node--article--full.html.twig */
class __TwigTemplate_3bd3153a60233489454e2aa0ed3de5d2fd55e3b15d50b2f1a2f6c9f662217463 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'node_side' => array($this, 'block_node_side'),
            'header_top' => array($this, 'block_header_top'),
            'title_area' => array($this, 'block_title_area'),
            'content' => array($this, 'block_content'),
            'content_bottom' => array($this, 'block_content_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 70, "block" => 84);
        $filters = array("clean_class" => 72);
        $functions = array("attach_library" => 80);

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

        // line 70
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 72
($context["node"] ?? null), "bundle", array()))), 2 => (($this->getAttribute(        // line 73
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 74
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 75
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 76
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 6 => "clearfix");
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true));
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazine_lite/node"), "html", null, true));
        echo "
<article";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
    <div class=\"node__container container\">";
        // line 84
        $this->displayBlock('node_side', $context, $blocks);
        // line 86
        echo "        <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "node__main-content", 1 => "clearfix", 2 => "text-center"), "method"), "html", null, true));
        echo ">";
        // line 87
        $this->displayBlock('header_top', $context, $blocks);
        // line 89
        echo "            <header class=\"node__header\">";
        // line 90
        $this->displayBlock('title_area', $context, $blocks);
        // line 97
        echo "
            </header>";
        // line 99
        $this->displayBlock('content', $context, $blocks);
        // line 102
        $this->displayBlock('content_bottom', $context, $blocks);
        // line 104
        echo "        </div>
    </div>
</article>
";
    }

    // line 84
    public function block_node_side($context, array $blocks = array())
    {
    }

    // line 87
    public function block_header_top($context, array $blocks = array())
    {
    }

    // line 90
    public function block_title_area($context, array $blocks = array())
    {
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
                        <h2";
        // line 92
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "node__title"), "method"), "html", null, true));
        echo ">
                            <a href=\"";
        // line 93
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\" rel=\"bookmark\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
        echo "</a>
                        </h2>";
        // line 95
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
        // line 100
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
    }

    // line 102
    public function block_content_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "themes/magazine_lite/templates/node--article--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 102,  125 => 100,  122 => 99,  118 => 95,  112 => 93,  108 => 92,  104 => 91,  101 => 90,  96 => 87,  91 => 84,  84 => 104,  82 => 102,  80 => 99,  77 => 97,  75 => 90,  73 => 89,  71 => 87,  67 => 86,  65 => 84,  61 => 82,  57 => 81,  55 => 80,  53 => 76,  52 => 75,  51 => 74,  50 => 73,  49 => 72,  48 => 70,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magazine_lite/templates/node--article--full.html.twig", "/usr/www/users/ikcscfbryt/themes/magazine_lite/templates/node--article--full.html.twig");
    }
}
