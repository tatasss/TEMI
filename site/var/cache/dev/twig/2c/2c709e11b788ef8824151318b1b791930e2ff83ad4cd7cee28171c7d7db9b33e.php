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
        $__internal_0e4b13fba8256ecc8fb46a504acd58ec9a437b0bc4c1da40a175cbd65c784289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e4b13fba8256ecc8fb46a504acd58ec9a437b0bc4c1da40a175cbd65c784289->enter($__internal_0e4b13fba8256ecc8fb46a504acd58ec9a437b0bc4c1da40a175cbd65c784289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_7243d10292d403d9b5ca85361b76944dbd94539057b993261f902ea79bd60914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7243d10292d403d9b5ca85361b76944dbd94539057b993261f902ea79bd60914->enter($__internal_7243d10292d403d9b5ca85361b76944dbd94539057b993261f902ea79bd60914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_0e4b13fba8256ecc8fb46a504acd58ec9a437b0bc4c1da40a175cbd65c784289->leave($__internal_0e4b13fba8256ecc8fb46a504acd58ec9a437b0bc4c1da40a175cbd65c784289_prof);

        
        $__internal_7243d10292d403d9b5ca85361b76944dbd94539057b993261f902ea79bd60914->leave($__internal_7243d10292d403d9b5ca85361b76944dbd94539057b993261f902ea79bd60914_prof);

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
