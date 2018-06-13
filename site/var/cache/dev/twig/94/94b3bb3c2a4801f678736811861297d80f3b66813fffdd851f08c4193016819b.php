<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_26e1a16d6d79f18f2deaef32309bbae231badb9160a5d4a10851195a38da530f extends Twig_Template
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
        $__internal_006c6270c019ed2503a46d5cf7fb1435b5c33bd39542c2174b37356afea8befd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006c6270c019ed2503a46d5cf7fb1435b5c33bd39542c2174b37356afea8befd->enter($__internal_006c6270c019ed2503a46d5cf7fb1435b5c33bd39542c2174b37356afea8befd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_068e42fa1251108ef964050fecb406aee25af96e800a244d573238c6405c7dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068e42fa1251108ef964050fecb406aee25af96e800a244d573238c6405c7dae->enter($__internal_068e42fa1251108ef964050fecb406aee25af96e800a244d573238c6405c7dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_006c6270c019ed2503a46d5cf7fb1435b5c33bd39542c2174b37356afea8befd->leave($__internal_006c6270c019ed2503a46d5cf7fb1435b5c33bd39542c2174b37356afea8befd_prof);

        
        $__internal_068e42fa1251108ef964050fecb406aee25af96e800a244d573238c6405c7dae->leave($__internal_068e42fa1251108ef964050fecb406aee25af96e800a244d573238c6405c7dae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
