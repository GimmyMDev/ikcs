<?php

/* themes/magazine_lite/templates/image-formatter--media--image--thumbnail.html.twig */
class __TwigTemplate_b7fea118a7fb102717bbb373845289e3c3a8cd5bce0c2f5ba9cf9fe4e4b5199e extends Twig_Template
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
        $tags = array("if" => 1);
        $filters = array();
        $functions = array("file_url" => 11);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array('file_url')
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
        if (($context["url"] ?? null)) {
            // line 2
            echo "    <div class=\"overlay-container\">
    <span class=\"overlay overlay--colored\">
      <span class=\"overlay-inner\">
        <span class=\"overlay-icon overlay-icon--button overlay-icon--white overlay-animated overlay-fade-top\">
          <i class=\"fa fa-plus\"></i>
        </span>
      </span>
      <a class=\"overlay-target-link image-popup\" href=\"";
            // line 9
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\"></a>
    </span>
        <a href=\"";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute(($context["image"] ?? null), "#uri", array(), "array"))), "html", null, true));
            echo "\">";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["image"] ?? null), "html", null, true));
            echo "
        </a>
    </div>";
        } else {
            // line 17
            echo "    <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute(($context["image"] ?? null), "#uri", array(), "array"))), "html", null, true));
            echo "\" data-toggle=\"lightbox\" data-gallery=\"gen-gallery\" data-type=\"image\">";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["image"] ?? null), "html", null, true));
            echo "
    </a>";
        }
    }

    public function getTemplateName()
    {
        return "themes/magazine_lite/templates/image-formatter--media--image--thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  68 => 17,  62 => 12,  59 => 11,  54 => 9,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magazine_lite/templates/image-formatter--media--image--thumbnail.html.twig", "/usr/www/users/ikcscfbryt/themes/magazine_lite/templates/image-formatter--media--image--thumbnail.html.twig");
    }
}
