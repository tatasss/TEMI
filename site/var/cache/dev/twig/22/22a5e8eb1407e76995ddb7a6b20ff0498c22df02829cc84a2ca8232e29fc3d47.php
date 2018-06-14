<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_8097782c0fea47233ef0bb4b6f0ddcb554ca104f05ba986f2db9d81820bbb2fc extends Twig_Template
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
        $__internal_5da6115013936330e889e5c3310c3639b19f2963c78440d67b734721df66d86c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da6115013936330e889e5c3310c3639b19f2963c78440d67b734721df66d86c->enter($__internal_5da6115013936330e889e5c3310c3639b19f2963c78440d67b734721df66d86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_a1d3d4d756f106b05bf7052807c634c2e19f027d432c90b790708d28eb1a4db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d3d4d756f106b05bf7052807c634c2e19f027d432c90b790708d28eb1a4db0->enter($__internal_a1d3d4d756f106b05bf7052807c634c2e19f027d432c90b790708d28eb1a4db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_5da6115013936330e889e5c3310c3639b19f2963c78440d67b734721df66d86c->leave($__internal_5da6115013936330e889e5c3310c3639b19f2963c78440d67b734721df66d86c_prof);

        
        $__internal_a1d3d4d756f106b05bf7052807c634c2e19f027d432c90b790708d28eb1a4db0->leave($__internal_a1d3d4d756f106b05bf7052807c634c2e19f027d432c90b790708d28eb1a4db0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
