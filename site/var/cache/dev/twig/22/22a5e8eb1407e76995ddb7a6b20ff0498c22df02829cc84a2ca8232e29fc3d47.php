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
        $__internal_578d75a58a4d1d3428de5b00e8cd6b9fb0cca2c6773abaaa7538663202e039dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578d75a58a4d1d3428de5b00e8cd6b9fb0cca2c6773abaaa7538663202e039dd->enter($__internal_578d75a58a4d1d3428de5b00e8cd6b9fb0cca2c6773abaaa7538663202e039dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_6ece481fe4a7df5b04ea477c63ebce0ec0c9577ddf4fb8d80b6acc9f79b5cb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ece481fe4a7df5b04ea477c63ebce0ec0c9577ddf4fb8d80b6acc9f79b5cb14->enter($__internal_6ece481fe4a7df5b04ea477c63ebce0ec0c9577ddf4fb8d80b6acc9f79b5cb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_578d75a58a4d1d3428de5b00e8cd6b9fb0cca2c6773abaaa7538663202e039dd->leave($__internal_578d75a58a4d1d3428de5b00e8cd6b9fb0cca2c6773abaaa7538663202e039dd_prof);

        
        $__internal_6ece481fe4a7df5b04ea477c63ebce0ec0c9577ddf4fb8d80b6acc9f79b5cb14->leave($__internal_6ece481fe4a7df5b04ea477c63ebce0ec0c9577ddf4fb8d80b6acc9f79b5cb14_prof);

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
