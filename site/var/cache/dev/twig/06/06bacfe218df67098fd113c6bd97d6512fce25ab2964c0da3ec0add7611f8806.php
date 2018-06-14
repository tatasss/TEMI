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
        $__internal_9e3fc9ebbe804e9fb92ace0f04088f3fd2f3c42c0ce1eb4ea51e6b900b8f1483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3fc9ebbe804e9fb92ace0f04088f3fd2f3c42c0ce1eb4ea51e6b900b8f1483->enter($__internal_9e3fc9ebbe804e9fb92ace0f04088f3fd2f3c42c0ce1eb4ea51e6b900b8f1483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_3760f1184085b91141d879213b18b4fa7606e23675f74b14b069fee5d6a610d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3760f1184085b91141d879213b18b4fa7606e23675f74b14b069fee5d6a610d9->enter($__internal_3760f1184085b91141d879213b18b4fa7606e23675f74b14b069fee5d6a610d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9e3fc9ebbe804e9fb92ace0f04088f3fd2f3c42c0ce1eb4ea51e6b900b8f1483->leave($__internal_9e3fc9ebbe804e9fb92ace0f04088f3fd2f3c42c0ce1eb4ea51e6b900b8f1483_prof);

        
        $__internal_3760f1184085b91141d879213b18b4fa7606e23675f74b14b069fee5d6a610d9->leave($__internal_3760f1184085b91141d879213b18b4fa7606e23675f74b14b069fee5d6a610d9_prof);

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
