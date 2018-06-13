<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0aea75d665dc1a0c1ead1d62b1b2ae9fb9d0962565c9b2752540b9172abeb48b extends Twig_Template
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
        $__internal_10100078a019b8ee04d12ab821aa7ec8328a3225f252573883799ba42c5b4c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10100078a019b8ee04d12ab821aa7ec8328a3225f252573883799ba42c5b4c31->enter($__internal_10100078a019b8ee04d12ab821aa7ec8328a3225f252573883799ba42c5b4c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_35f8c471d5b7c96c26441b814d8def20865deae902d636c6054c0719d779ff6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35f8c471d5b7c96c26441b814d8def20865deae902d636c6054c0719d779ff6c->enter($__internal_35f8c471d5b7c96c26441b814d8def20865deae902d636c6054c0719d779ff6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_10100078a019b8ee04d12ab821aa7ec8328a3225f252573883799ba42c5b4c31->leave($__internal_10100078a019b8ee04d12ab821aa7ec8328a3225f252573883799ba42c5b4c31_prof);

        
        $__internal_35f8c471d5b7c96c26441b814d8def20865deae902d636c6054c0719d779ff6c->leave($__internal_35f8c471d5b7c96c26441b814d8def20865deae902d636c6054c0719d779ff6c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
