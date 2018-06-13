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
        $__internal_29f326a7a3d8e8ea70817724994ae8690ba9068e97bca72c8f171dd95bc9daf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f326a7a3d8e8ea70817724994ae8690ba9068e97bca72c8f171dd95bc9daf7->enter($__internal_29f326a7a3d8e8ea70817724994ae8690ba9068e97bca72c8f171dd95bc9daf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_3e7a610b1f59b90ca592c6dbb1a5d8ad0cd4f5ad2e91d04ba35bc9cf86629c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7a610b1f59b90ca592c6dbb1a5d8ad0cd4f5ad2e91d04ba35bc9cf86629c42->enter($__internal_3e7a610b1f59b90ca592c6dbb1a5d8ad0cd4f5ad2e91d04ba35bc9cf86629c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_29f326a7a3d8e8ea70817724994ae8690ba9068e97bca72c8f171dd95bc9daf7->leave($__internal_29f326a7a3d8e8ea70817724994ae8690ba9068e97bca72c8f171dd95bc9daf7_prof);

        
        $__internal_3e7a610b1f59b90ca592c6dbb1a5d8ad0cd4f5ad2e91d04ba35bc9cf86629c42->leave($__internal_3e7a610b1f59b90ca592c6dbb1a5d8ad0cd4f5ad2e91d04ba35bc9cf86629c42_prof);

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
", "@Twig/Exception/error.rdf.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
