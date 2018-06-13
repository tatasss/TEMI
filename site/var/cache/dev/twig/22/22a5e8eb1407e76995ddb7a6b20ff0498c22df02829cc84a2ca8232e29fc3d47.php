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
        $__internal_32c850aa5ab268b429d6e46cac0dfb488d56f2ed4c7a37f18ab82c99cd4115a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c850aa5ab268b429d6e46cac0dfb488d56f2ed4c7a37f18ab82c99cd4115a2->enter($__internal_32c850aa5ab268b429d6e46cac0dfb488d56f2ed4c7a37f18ab82c99cd4115a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_532e606c780dfd8299443d9d3e522df6899d406127c1ca923768b7bffe4f4bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532e606c780dfd8299443d9d3e522df6899d406127c1ca923768b7bffe4f4bc2->enter($__internal_532e606c780dfd8299443d9d3e522df6899d406127c1ca923768b7bffe4f4bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_32c850aa5ab268b429d6e46cac0dfb488d56f2ed4c7a37f18ab82c99cd4115a2->leave($__internal_32c850aa5ab268b429d6e46cac0dfb488d56f2ed4c7a37f18ab82c99cd4115a2_prof);

        
        $__internal_532e606c780dfd8299443d9d3e522df6899d406127c1ca923768b7bffe4f4bc2->leave($__internal_532e606c780dfd8299443d9d3e522df6899d406127c1ca923768b7bffe4f4bc2_prof);

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
", "@Twig/Exception/exception.rdf.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
