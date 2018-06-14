<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f135fcc9c859e593c2ad6b4f6ea9321094ebdd77ec5d005d4bc6f1212203f014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f316e7e366dfeb894fb31a551ab745a83bd3115b360db00512ebeb94587ae63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f316e7e366dfeb894fb31a551ab745a83bd3115b360db00512ebeb94587ae63->enter($__internal_1f316e7e366dfeb894fb31a551ab745a83bd3115b360db00512ebeb94587ae63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_9dad10c5a50774f2a76d1a1eb510ebcb300ac4b190a252b977ab718756d68acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dad10c5a50774f2a76d1a1eb510ebcb300ac4b190a252b977ab718756d68acb->enter($__internal_9dad10c5a50774f2a76d1a1eb510ebcb300ac4b190a252b977ab718756d68acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f316e7e366dfeb894fb31a551ab745a83bd3115b360db00512ebeb94587ae63->leave($__internal_1f316e7e366dfeb894fb31a551ab745a83bd3115b360db00512ebeb94587ae63_prof);

        
        $__internal_9dad10c5a50774f2a76d1a1eb510ebcb300ac4b190a252b977ab718756d68acb->leave($__internal_9dad10c5a50774f2a76d1a1eb510ebcb300ac4b190a252b977ab718756d68acb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_05b6b4eaadaff511311e86d494cb503f62843f0c1dd77ba710fc4af1adb206a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05b6b4eaadaff511311e86d494cb503f62843f0c1dd77ba710fc4af1adb206a1->enter($__internal_05b6b4eaadaff511311e86d494cb503f62843f0c1dd77ba710fc4af1adb206a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_90ed7b5b466afa0fbc67bd668e2e58f077772779ae6bfe7f650eacf48630a878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ed7b5b466afa0fbc67bd668e2e58f077772779ae6bfe7f650eacf48630a878->enter($__internal_90ed7b5b466afa0fbc67bd668e2e58f077772779ae6bfe7f650eacf48630a878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_90ed7b5b466afa0fbc67bd668e2e58f077772779ae6bfe7f650eacf48630a878->leave($__internal_90ed7b5b466afa0fbc67bd668e2e58f077772779ae6bfe7f650eacf48630a878_prof);

        
        $__internal_05b6b4eaadaff511311e86d494cb503f62843f0c1dd77ba710fc4af1adb206a1->leave($__internal_05b6b4eaadaff511311e86d494cb503f62843f0c1dd77ba710fc4af1adb206a1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9e755da0dfd6d75177a90052528b0946385675dadfb16e0ceaa3832ce97cd79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9e755da0dfd6d75177a90052528b0946385675dadfb16e0ceaa3832ce97cd79->enter($__internal_d9e755da0dfd6d75177a90052528b0946385675dadfb16e0ceaa3832ce97cd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c9af2747e1fc2a65adde5f5951fe051891e7403e973e2207b14701d3c95daf1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9af2747e1fc2a65adde5f5951fe051891e7403e973e2207b14701d3c95daf1c->enter($__internal_c9af2747e1fc2a65adde5f5951fe051891e7403e973e2207b14701d3c95daf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c9af2747e1fc2a65adde5f5951fe051891e7403e973e2207b14701d3c95daf1c->leave($__internal_c9af2747e1fc2a65adde5f5951fe051891e7403e973e2207b14701d3c95daf1c_prof);

        
        $__internal_d9e755da0dfd6d75177a90052528b0946385675dadfb16e0ceaa3832ce97cd79->leave($__internal_d9e755da0dfd6d75177a90052528b0946385675dadfb16e0ceaa3832ce97cd79_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
