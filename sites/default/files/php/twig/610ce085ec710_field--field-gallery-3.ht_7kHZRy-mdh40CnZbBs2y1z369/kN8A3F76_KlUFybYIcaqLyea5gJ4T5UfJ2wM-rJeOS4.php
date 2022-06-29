<?php

/* themes/magazine_lite/templates/field--field-gallery-3.html.twig */
class __TwigTemplate_67b112c06dc68dc5280fefae4d03c072666d53125cb10f1251beae9d723090cd extends Twig_Template
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
        $tags = array("set" => 45, "if" => 56, "for" => 63);
        $filters = array("clean_class" => 47, "length" => 62);
        $functions = array("attach_library" => 55);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class', 'length'),
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

        // line 45
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 47
($context["field_name"] ?? null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 48
($context["field_type"] ?? null))), 3 => ("field--label-" .         // line 49
($context["label_display"] ?? null)));
        // line 51
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 53
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazine_lite/node-images"), "html", null, true));
        // line 56
        if ((($context["view_mode"] ?? null) == "full")) {
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("magazine_lite/magnific-popup-field-image-init"), "html", null, true));
        }
        // line 59
        echo "<div>&nbsp;</div>
<div";
        // line 60
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null), 1 => "field__items"), "method"), "html", null, true));
        echo ">
    <div class=\"row\">";
        // line 62
        if ((twig_length_filter($this->env, ($context["items"] ?? null)) > 0)) {
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 64
                echo "                    <div class=\"col-md-4\" style=\"padding-top:10px;\">";
                // line 65
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
                echo "
                    </div>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 69
        echo "    </div>
</div>
<div>&nbsp;</div>";
    }

    public function getTemplateName()
    {
        return "themes/magazine_lite/templates/field--field-gallery-3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 69,  73 => 65,  71 => 64,  67 => 63,  65 => 62,  61 => 60,  58 => 59,  55 => 57,  53 => 56,  51 => 55,  49 => 53,  48 => 51,  46 => 49,  45 => 48,  44 => 47,  43 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/magazine_lite/templates/field--field-gallery-3.html.twig", "/usr/www/users/ikcscfbryt/themes/magazine_lite/templates/field--field-gallery-3.html.twig");
    }
}
