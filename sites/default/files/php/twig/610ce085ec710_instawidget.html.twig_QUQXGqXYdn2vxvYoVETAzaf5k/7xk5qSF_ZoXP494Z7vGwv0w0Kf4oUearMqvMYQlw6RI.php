<?php

/* themes/magazine_lite/templates/instawidget.html.twig */
class __TwigTemplate_9c0f0816a8d2659fb081edefa645cb45caed6c093b55d1c90840fea7acced40a extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<div id=\"instawidget_instagram\" class=\"insta insta_col_6 insta_medium\" style=\"width: 100%; padding-bottom: 0px;\"
     data-id=\"\" data-num=\"6\" data-res=\"auto\" data-cols=\"6\"
     data-options=\"{&quot;sortby&quot;: &quot;none&quot;, &quot;showbio&quot;: &quot;false&quot;, &quot;headercolor&quot;: &quot;&quot;, &quot;imagepadding&quot;: &quot;0&quot;}\"
     data-insta-index=\"0\">
    <div id=\"insta_images\" style=\"padding: 0px;\">
    </div>
    <div id=\"insta_load\">
        <div class=\"insta_follow_btn\"><a href=\"\" style=\"\" target=\"_blank\">@industrial_kitchen_solutions</a></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/magazine_lite/templates/instawidget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magazine_lite/templates/instawidget.html.twig", "/usr/www/users/ikcscfbryt/themes/magazine_lite/templates/instawidget.html.twig");
    }
}
