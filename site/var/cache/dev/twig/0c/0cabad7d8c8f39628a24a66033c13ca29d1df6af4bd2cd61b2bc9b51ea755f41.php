<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_1aadbcff202752c66319e5d55c70818dfbcd856abef7eade6bd45bb75ba0e77a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_20dfe71fee964cd1264ebce8e998ac2aebcaa5d41a4be11f1f8554031a1d2b88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20dfe71fee964cd1264ebce8e998ac2aebcaa5d41a4be11f1f8554031a1d2b88->enter($__internal_20dfe71fee964cd1264ebce8e998ac2aebcaa5d41a4be11f1f8554031a1d2b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_d3f64199b55c1aac93ef864048cd9711a3a0482585d108d045bc4075536508bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f64199b55c1aac93ef864048cd9711a3a0482585d108d045bc4075536508bd->enter($__internal_d3f64199b55c1aac93ef864048cd9711a3a0482585d108d045bc4075536508bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20dfe71fee964cd1264ebce8e998ac2aebcaa5d41a4be11f1f8554031a1d2b88->leave($__internal_20dfe71fee964cd1264ebce8e998ac2aebcaa5d41a4be11f1f8554031a1d2b88_prof);

        
        $__internal_d3f64199b55c1aac93ef864048cd9711a3a0482585d108d045bc4075536508bd->leave($__internal_d3f64199b55c1aac93ef864048cd9711a3a0482585d108d045bc4075536508bd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c48499377ac1a4e9f171bb8749912e3c7e07caa84fde6f96dddb05ca3aa05720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48499377ac1a4e9f171bb8749912e3c7e07caa84fde6f96dddb05ca3aa05720->enter($__internal_c48499377ac1a4e9f171bb8749912e3c7e07caa84fde6f96dddb05ca3aa05720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_78a3050637122e4fa99755488d724d95cbaae8ef91425a9e1a9cf3ad75b25957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a3050637122e4fa99755488d724d95cbaae8ef91425a9e1a9cf3ad75b25957->enter($__internal_78a3050637122e4fa99755488d724d95cbaae8ef91425a9e1a9cf3ad75b25957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_78a3050637122e4fa99755488d724d95cbaae8ef91425a9e1a9cf3ad75b25957->leave($__internal_78a3050637122e4fa99755488d724d95cbaae8ef91425a9e1a9cf3ad75b25957_prof);

        
        $__internal_c48499377ac1a4e9f171bb8749912e3c7e07caa84fde6f96dddb05ca3aa05720->leave($__internal_c48499377ac1a4e9f171bb8749912e3c7e07caa84fde6f96dddb05ca3aa05720_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b6f635f8bb12a2b956540fa7444bbe51297575f11c5660feccf0ac8c22b5c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6f635f8bb12a2b956540fa7444bbe51297575f11c5660feccf0ac8c22b5c8d->enter($__internal_5b6f635f8bb12a2b956540fa7444bbe51297575f11c5660feccf0ac8c22b5c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ab13bcd903bad3dd52594465b44d7a8cdf6adc3370bb5d9a8ce9010284cbe44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab13bcd903bad3dd52594465b44d7a8cdf6adc3370bb5d9a8ce9010284cbe44->enter($__internal_2ab13bcd903bad3dd52594465b44d7a8cdf6adc3370bb5d9a8ce9010284cbe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2ab13bcd903bad3dd52594465b44d7a8cdf6adc3370bb5d9a8ce9010284cbe44->leave($__internal_2ab13bcd903bad3dd52594465b44d7a8cdf6adc3370bb5d9a8ce9010284cbe44_prof);

        
        $__internal_5b6f635f8bb12a2b956540fa7444bbe51297575f11c5660feccf0ac8c22b5c8d->leave($__internal_5b6f635f8bb12a2b956540fa7444bbe51297575f11c5660feccf0ac8c22b5c8d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
