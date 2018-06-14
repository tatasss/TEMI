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
        $__internal_95cc5e069da7260ddd422dc87ba0e92cdb3c909d7b0a4b1369f77106d702368c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95cc5e069da7260ddd422dc87ba0e92cdb3c909d7b0a4b1369f77106d702368c->enter($__internal_95cc5e069da7260ddd422dc87ba0e92cdb3c909d7b0a4b1369f77106d702368c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_071c45a46ba1707d744a383388833c70b9eae05e25847c229ef6574f5451636f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071c45a46ba1707d744a383388833c70b9eae05e25847c229ef6574f5451636f->enter($__internal_071c45a46ba1707d744a383388833c70b9eae05e25847c229ef6574f5451636f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_95cc5e069da7260ddd422dc87ba0e92cdb3c909d7b0a4b1369f77106d702368c->leave($__internal_95cc5e069da7260ddd422dc87ba0e92cdb3c909d7b0a4b1369f77106d702368c_prof);

        
        $__internal_071c45a46ba1707d744a383388833c70b9eae05e25847c229ef6574f5451636f->leave($__internal_071c45a46ba1707d744a383388833c70b9eae05e25847c229ef6574f5451636f_prof);

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
", "@Twig/Exception/exception.json.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
