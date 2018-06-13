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
        $__internal_792da3626cf1e17c1e62f80dd24bd919f47391f6961bfb34354890dad5ba26fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792da3626cf1e17c1e62f80dd24bd919f47391f6961bfb34354890dad5ba26fe->enter($__internal_792da3626cf1e17c1e62f80dd24bd919f47391f6961bfb34354890dad5ba26fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_a5711609a22bf334032d32645b7c2515e76b3bb91589ee4f3b63319eb0213f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5711609a22bf334032d32645b7c2515e76b3bb91589ee4f3b63319eb0213f26->enter($__internal_a5711609a22bf334032d32645b7c2515e76b3bb91589ee4f3b63319eb0213f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_792da3626cf1e17c1e62f80dd24bd919f47391f6961bfb34354890dad5ba26fe->leave($__internal_792da3626cf1e17c1e62f80dd24bd919f47391f6961bfb34354890dad5ba26fe_prof);

        
        $__internal_a5711609a22bf334032d32645b7c2515e76b3bb91589ee4f3b63319eb0213f26->leave($__internal_a5711609a22bf334032d32645b7c2515e76b3bb91589ee4f3b63319eb0213f26_prof);

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
