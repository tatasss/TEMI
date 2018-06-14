<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_bf7671074708d373bc64c55a6cea35982403190cfb3f1e23067bdff532e87cf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a4d3dcfad650df0f890984ed0c84ad0efd9c2a23e943878e386ccbe31e22650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4d3dcfad650df0f890984ed0c84ad0efd9c2a23e943878e386ccbe31e22650->enter($__internal_0a4d3dcfad650df0f890984ed0c84ad0efd9c2a23e943878e386ccbe31e22650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c8244b180c7901eea7a82201d60ae25c2aa17d1fcdf54caa267df7dee82b39b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8244b180c7901eea7a82201d60ae25c2aa17d1fcdf54caa267df7dee82b39b6->enter($__internal_c8244b180c7901eea7a82201d60ae25c2aa17d1fcdf54caa267df7dee82b39b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a4d3dcfad650df0f890984ed0c84ad0efd9c2a23e943878e386ccbe31e22650->leave($__internal_0a4d3dcfad650df0f890984ed0c84ad0efd9c2a23e943878e386ccbe31e22650_prof);

        
        $__internal_c8244b180c7901eea7a82201d60ae25c2aa17d1fcdf54caa267df7dee82b39b6->leave($__internal_c8244b180c7901eea7a82201d60ae25c2aa17d1fcdf54caa267df7dee82b39b6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1a51d8f1455b72d5f7c6cb51dec651b7b6b06e161f2f16cf0dd112f2c9d0446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a51d8f1455b72d5f7c6cb51dec651b7b6b06e161f2f16cf0dd112f2c9d0446->enter($__internal_d1a51d8f1455b72d5f7c6cb51dec651b7b6b06e161f2f16cf0dd112f2c9d0446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2ee2ae5fd098c49b6e82c00d470c9073a7397b26566a5e8c4e76b640571b87cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ee2ae5fd098c49b6e82c00d470c9073a7397b26566a5e8c4e76b640571b87cb->enter($__internal_2ee2ae5fd098c49b6e82c00d470c9073a7397b26566a5e8c4e76b640571b87cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2ee2ae5fd098c49b6e82c00d470c9073a7397b26566a5e8c4e76b640571b87cb->leave($__internal_2ee2ae5fd098c49b6e82c00d470c9073a7397b26566a5e8c4e76b640571b87cb_prof);

        
        $__internal_d1a51d8f1455b72d5f7c6cb51dec651b7b6b06e161f2f16cf0dd112f2c9d0446->leave($__internal_d1a51d8f1455b72d5f7c6cb51dec651b7b6b06e161f2f16cf0dd112f2c9d0446_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_064f362111acb26394739bcd25dbbe904723afb42b63a7aee5ae6c3ced4ffe6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_064f362111acb26394739bcd25dbbe904723afb42b63a7aee5ae6c3ced4ffe6d->enter($__internal_064f362111acb26394739bcd25dbbe904723afb42b63a7aee5ae6c3ced4ffe6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_46b129841b2768bc9abb6cbbac4e6377b0f8a8e41ebfa7c34bcf625006625c60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b129841b2768bc9abb6cbbac4e6377b0f8a8e41ebfa7c34bcf625006625c60->enter($__internal_46b129841b2768bc9abb6cbbac4e6377b0f8a8e41ebfa7c34bcf625006625c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_46b129841b2768bc9abb6cbbac4e6377b0f8a8e41ebfa7c34bcf625006625c60->leave($__internal_46b129841b2768bc9abb6cbbac4e6377b0f8a8e41ebfa7c34bcf625006625c60_prof);

        
        $__internal_064f362111acb26394739bcd25dbbe904723afb42b63a7aee5ae6c3ced4ffe6d->leave($__internal_064f362111acb26394739bcd25dbbe904723afb42b63a7aee5ae6c3ced4ffe6d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_32e452568e098e6ca015492f6154bb39762017e6fcd0e82500f80f9fb695f736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32e452568e098e6ca015492f6154bb39762017e6fcd0e82500f80f9fb695f736->enter($__internal_32e452568e098e6ca015492f6154bb39762017e6fcd0e82500f80f9fb695f736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_986b23f540da2b5f780abc87a1ffe9a3bc875fe2ee6b88f72e88b4e4716ec9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986b23f540da2b5f780abc87a1ffe9a3bc875fe2ee6b88f72e88b4e4716ec9a1->enter($__internal_986b23f540da2b5f780abc87a1ffe9a3bc875fe2ee6b88f72e88b4e4716ec9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_986b23f540da2b5f780abc87a1ffe9a3bc875fe2ee6b88f72e88b4e4716ec9a1->leave($__internal_986b23f540da2b5f780abc87a1ffe9a3bc875fe2ee6b88f72e88b4e4716ec9a1_prof);

        
        $__internal_32e452568e098e6ca015492f6154bb39762017e6fcd0e82500f80f9fb695f736->leave($__internal_32e452568e098e6ca015492f6154bb39762017e6fcd0e82500f80f9fb695f736_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
