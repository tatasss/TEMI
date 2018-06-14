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
        $__internal_d8865f7e22312d13f4ca5e4e85b48d9a3136c4fefed1f9ebbf82ecce07bf6902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8865f7e22312d13f4ca5e4e85b48d9a3136c4fefed1f9ebbf82ecce07bf6902->enter($__internal_d8865f7e22312d13f4ca5e4e85b48d9a3136c4fefed1f9ebbf82ecce07bf6902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_23cddcd15f361819f9d9fde6db4c93dbb3b4131761f8657ce56f5f6cdfb03969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23cddcd15f361819f9d9fde6db4c93dbb3b4131761f8657ce56f5f6cdfb03969->enter($__internal_23cddcd15f361819f9d9fde6db4c93dbb3b4131761f8657ce56f5f6cdfb03969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d8865f7e22312d13f4ca5e4e85b48d9a3136c4fefed1f9ebbf82ecce07bf6902->leave($__internal_d8865f7e22312d13f4ca5e4e85b48d9a3136c4fefed1f9ebbf82ecce07bf6902_prof);

        
        $__internal_23cddcd15f361819f9d9fde6db4c93dbb3b4131761f8657ce56f5f6cdfb03969->leave($__internal_23cddcd15f361819f9d9fde6db4c93dbb3b4131761f8657ce56f5f6cdfb03969_prof);

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
