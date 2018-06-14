<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_b8019340d1af98d876ef92d1971cbbcec88f071351a2816c0e44fba4b4c43285 extends Twig_Template
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
        $__internal_266ace92eedabf1a74968787e36defc49b2cd9abe2794006b78c95d81d8fde39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266ace92eedabf1a74968787e36defc49b2cd9abe2794006b78c95d81d8fde39->enter($__internal_266ace92eedabf1a74968787e36defc49b2cd9abe2794006b78c95d81d8fde39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_987fa1c07a8fa02fe351e4d596f8cd4290be44f1143bf952bcd4ce3f2f47896a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987fa1c07a8fa02fe351e4d596f8cd4290be44f1143bf952bcd4ce3f2f47896a->enter($__internal_987fa1c07a8fa02fe351e4d596f8cd4290be44f1143bf952bcd4ce3f2f47896a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_266ace92eedabf1a74968787e36defc49b2cd9abe2794006b78c95d81d8fde39->leave($__internal_266ace92eedabf1a74968787e36defc49b2cd9abe2794006b78c95d81d8fde39_prof);

        
        $__internal_987fa1c07a8fa02fe351e4d596f8cd4290be44f1143bf952bcd4ce3f2f47896a->leave($__internal_987fa1c07a8fa02fe351e4d596f8cd4290be44f1143bf952bcd4ce3f2f47896a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
", "@Twig/Exception/error.xml.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
