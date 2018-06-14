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
        $__internal_51509289f8f479e68b0a6d9ea652a8441be47d46d5555772f9a2b18c7fd5f3a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51509289f8f479e68b0a6d9ea652a8441be47d46d5555772f9a2b18c7fd5f3a8->enter($__internal_51509289f8f479e68b0a6d9ea652a8441be47d46d5555772f9a2b18c7fd5f3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_147568274e0259acbe79ef15dd6473a24d270211b2b1ca4138be1f01268dafc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_147568274e0259acbe79ef15dd6473a24d270211b2b1ca4138be1f01268dafc2->enter($__internal_147568274e0259acbe79ef15dd6473a24d270211b2b1ca4138be1f01268dafc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_51509289f8f479e68b0a6d9ea652a8441be47d46d5555772f9a2b18c7fd5f3a8->leave($__internal_51509289f8f479e68b0a6d9ea652a8441be47d46d5555772f9a2b18c7fd5f3a8_prof);

        
        $__internal_147568274e0259acbe79ef15dd6473a24d270211b2b1ca4138be1f01268dafc2->leave($__internal_147568274e0259acbe79ef15dd6473a24d270211b2b1ca4138be1f01268dafc2_prof);

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
