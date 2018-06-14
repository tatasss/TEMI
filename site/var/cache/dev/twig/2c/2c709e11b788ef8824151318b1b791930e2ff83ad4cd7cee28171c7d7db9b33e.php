<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e027e94076085726b4c6e13a0ab6a2d3ef58cd055c18d6b4232bf34f4d88bc9c extends Twig_Template
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
        $__internal_1566e13defee22cb862f569ca85a0e6b4d7125c6a66896f5e22d8ba8105ff4fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1566e13defee22cb862f569ca85a0e6b4d7125c6a66896f5e22d8ba8105ff4fa->enter($__internal_1566e13defee22cb862f569ca85a0e6b4d7125c6a66896f5e22d8ba8105ff4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_14e07d0279576cab88147938df9c316fe7b498fee0a2cac66959a8e12c9ef0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e07d0279576cab88147938df9c316fe7b498fee0a2cac66959a8e12c9ef0d6->enter($__internal_14e07d0279576cab88147938df9c316fe7b498fee0a2cac66959a8e12c9ef0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_1566e13defee22cb862f569ca85a0e6b4d7125c6a66896f5e22d8ba8105ff4fa->leave($__internal_1566e13defee22cb862f569ca85a0e6b4d7125c6a66896f5e22d8ba8105ff4fa_prof);

        
        $__internal_14e07d0279576cab88147938df9c316fe7b498fee0a2cac66959a8e12c9ef0d6->leave($__internal_14e07d0279576cab88147938df9c316fe7b498fee0a2cac66959a8e12c9ef0d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
