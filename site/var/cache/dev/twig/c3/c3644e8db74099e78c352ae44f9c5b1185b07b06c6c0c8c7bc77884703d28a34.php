<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_b59dc6c72091c9c852636259a4a7e537fd79d7b5f22ac2166e2ba6acd0f2df3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_224bdde433475eeec50c698c7f7e60cd4b1b88d01f37c690b3bb14df84918848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_224bdde433475eeec50c698c7f7e60cd4b1b88d01f37c690b3bb14df84918848->enter($__internal_224bdde433475eeec50c698c7f7e60cd4b1b88d01f37c690b3bb14df84918848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_a0a16b849bbd007129ef17072ce15882b1ab9bd92a17babb0d3b5d28de9accb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a16b849bbd007129ef17072ce15882b1ab9bd92a17babb0d3b5d28de9accb9->enter($__internal_a0a16b849bbd007129ef17072ce15882b1ab9bd92a17babb0d3b5d28de9accb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_224bdde433475eeec50c698c7f7e60cd4b1b88d01f37c690b3bb14df84918848->leave($__internal_224bdde433475eeec50c698c7f7e60cd4b1b88d01f37c690b3bb14df84918848_prof);

        
        $__internal_a0a16b849bbd007129ef17072ce15882b1ab9bd92a17babb0d3b5d28de9accb9->leave($__internal_a0a16b849bbd007129ef17072ce15882b1ab9bd92a17babb0d3b5d28de9accb9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ce99f4abf378408a30158f621bcb692a635d22fb53d8ad0908d3f3d2167bee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ce99f4abf378408a30158f621bcb692a635d22fb53d8ad0908d3f3d2167bee3->enter($__internal_6ce99f4abf378408a30158f621bcb692a635d22fb53d8ad0908d3f3d2167bee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1a541a21a09d37ede6585b1031c0cb051399d0d134c9691d764eb15d22d1a5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a541a21a09d37ede6585b1031c0cb051399d0d134c9691d764eb15d22d1a5ea->enter($__internal_1a541a21a09d37ede6585b1031c0cb051399d0d134c9691d764eb15d22d1a5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_1a541a21a09d37ede6585b1031c0cb051399d0d134c9691d764eb15d22d1a5ea->leave($__internal_1a541a21a09d37ede6585b1031c0cb051399d0d134c9691d764eb15d22d1a5ea_prof);

        
        $__internal_6ce99f4abf378408a30158f621bcb692a635d22fb53d8ad0908d3f3d2167bee3->leave($__internal_6ce99f4abf378408a30158f621bcb692a635d22fb53d8ad0908d3f3d2167bee3_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_28711abb30b6606bcc11b6c869cf41ee52eafe124d7513cd1e486df26874e5bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28711abb30b6606bcc11b6c869cf41ee52eafe124d7513cd1e486df26874e5bf->enter($__internal_28711abb30b6606bcc11b6c869cf41ee52eafe124d7513cd1e486df26874e5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a12d785949922202eb126b66c4c47e2573d74ee6244f125204b909065ee94ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a12d785949922202eb126b66c4c47e2573d74ee6244f125204b909065ee94ea->enter($__internal_8a12d785949922202eb126b66c4c47e2573d74ee6244f125204b909065ee94ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_8a12d785949922202eb126b66c4c47e2573d74ee6244f125204b909065ee94ea->leave($__internal_8a12d785949922202eb126b66c4c47e2573d74ee6244f125204b909065ee94ea_prof);

        
        $__internal_28711abb30b6606bcc11b6c869cf41ee52eafe124d7513cd1e486df26874e5bf->leave($__internal_28711abb30b6606bcc11b6c869cf41ee52eafe124d7513cd1e486df26874e5bf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
