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
        $__internal_0895f793a7ce360b15ac936e6532e3cafca94f6d740f6de067de8e76ed85ff74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0895f793a7ce360b15ac936e6532e3cafca94f6d740f6de067de8e76ed85ff74->enter($__internal_0895f793a7ce360b15ac936e6532e3cafca94f6d740f6de067de8e76ed85ff74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_abaf42116ab21a08e2b525373c44937ca1a485fc5076f41c8a13634c228ecd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abaf42116ab21a08e2b525373c44937ca1a485fc5076f41c8a13634c228ecd6e->enter($__internal_abaf42116ab21a08e2b525373c44937ca1a485fc5076f41c8a13634c228ecd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0895f793a7ce360b15ac936e6532e3cafca94f6d740f6de067de8e76ed85ff74->leave($__internal_0895f793a7ce360b15ac936e6532e3cafca94f6d740f6de067de8e76ed85ff74_prof);

        
        $__internal_abaf42116ab21a08e2b525373c44937ca1a485fc5076f41c8a13634c228ecd6e->leave($__internal_abaf42116ab21a08e2b525373c44937ca1a485fc5076f41c8a13634c228ecd6e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_00433d1e1571aa30fc139013bfebc61ddc3bbde0fcfd49189f06e8862c6f8edc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00433d1e1571aa30fc139013bfebc61ddc3bbde0fcfd49189f06e8862c6f8edc->enter($__internal_00433d1e1571aa30fc139013bfebc61ddc3bbde0fcfd49189f06e8862c6f8edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3496138177ae539fc8f2cf6862c118be6322d49779afec3e873f6f51b130abde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3496138177ae539fc8f2cf6862c118be6322d49779afec3e873f6f51b130abde->enter($__internal_3496138177ae539fc8f2cf6862c118be6322d49779afec3e873f6f51b130abde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_3496138177ae539fc8f2cf6862c118be6322d49779afec3e873f6f51b130abde->leave($__internal_3496138177ae539fc8f2cf6862c118be6322d49779afec3e873f6f51b130abde_prof);

        
        $__internal_00433d1e1571aa30fc139013bfebc61ddc3bbde0fcfd49189f06e8862c6f8edc->leave($__internal_00433d1e1571aa30fc139013bfebc61ddc3bbde0fcfd49189f06e8862c6f8edc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_14585e6995e5563f7fd66e84941f383b60a96f46e6cf98f399a82ea28d16abf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14585e6995e5563f7fd66e84941f383b60a96f46e6cf98f399a82ea28d16abf6->enter($__internal_14585e6995e5563f7fd66e84941f383b60a96f46e6cf98f399a82ea28d16abf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3cb55c313e135b855b11044a1d7bdc0d7d6e27044661c14a01f11ad079711cf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb55c313e135b855b11044a1d7bdc0d7d6e27044661c14a01f11ad079711cf4->enter($__internal_3cb55c313e135b855b11044a1d7bdc0d7d6e27044661c14a01f11ad079711cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3cb55c313e135b855b11044a1d7bdc0d7d6e27044661c14a01f11ad079711cf4->leave($__internal_3cb55c313e135b855b11044a1d7bdc0d7d6e27044661c14a01f11ad079711cf4_prof);

        
        $__internal_14585e6995e5563f7fd66e84941f383b60a96f46e6cf98f399a82ea28d16abf6->leave($__internal_14585e6995e5563f7fd66e84941f383b60a96f46e6cf98f399a82ea28d16abf6_prof);

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
