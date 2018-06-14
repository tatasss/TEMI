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
        $__internal_a945f70f8a7ac547dec91f9e58c38de51ac3a2ef240790e4d0f2a551a69caf7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a945f70f8a7ac547dec91f9e58c38de51ac3a2ef240790e4d0f2a551a69caf7f->enter($__internal_a945f70f8a7ac547dec91f9e58c38de51ac3a2ef240790e4d0f2a551a69caf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_e0ee27ab8c1be476bc3d5c0dea88377ed9167ed1d63b623854ad91ce9654070b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0ee27ab8c1be476bc3d5c0dea88377ed9167ed1d63b623854ad91ce9654070b->enter($__internal_e0ee27ab8c1be476bc3d5c0dea88377ed9167ed1d63b623854ad91ce9654070b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a945f70f8a7ac547dec91f9e58c38de51ac3a2ef240790e4d0f2a551a69caf7f->leave($__internal_a945f70f8a7ac547dec91f9e58c38de51ac3a2ef240790e4d0f2a551a69caf7f_prof);

        
        $__internal_e0ee27ab8c1be476bc3d5c0dea88377ed9167ed1d63b623854ad91ce9654070b->leave($__internal_e0ee27ab8c1be476bc3d5c0dea88377ed9167ed1d63b623854ad91ce9654070b_prof);

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
