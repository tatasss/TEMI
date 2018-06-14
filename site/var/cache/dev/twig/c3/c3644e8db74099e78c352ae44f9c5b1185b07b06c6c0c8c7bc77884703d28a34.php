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
        $__internal_bb3dad9cb1935819f84e7abc30dab624278b1d74e99480d22d80f74fc549e39c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3dad9cb1935819f84e7abc30dab624278b1d74e99480d22d80f74fc549e39c->enter($__internal_bb3dad9cb1935819f84e7abc30dab624278b1d74e99480d22d80f74fc549e39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_0c2fa77b3479017212a3678057554e238cd12ed8d9cd4b6c058e905ec9757367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2fa77b3479017212a3678057554e238cd12ed8d9cd4b6c058e905ec9757367->enter($__internal_0c2fa77b3479017212a3678057554e238cd12ed8d9cd4b6c058e905ec9757367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb3dad9cb1935819f84e7abc30dab624278b1d74e99480d22d80f74fc549e39c->leave($__internal_bb3dad9cb1935819f84e7abc30dab624278b1d74e99480d22d80f74fc549e39c_prof);

        
        $__internal_0c2fa77b3479017212a3678057554e238cd12ed8d9cd4b6c058e905ec9757367->leave($__internal_0c2fa77b3479017212a3678057554e238cd12ed8d9cd4b6c058e905ec9757367_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e6335bde480833309ce86a7a4e5faeb481c34848c1c813a33c7a0d0468d54820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6335bde480833309ce86a7a4e5faeb481c34848c1c813a33c7a0d0468d54820->enter($__internal_e6335bde480833309ce86a7a4e5faeb481c34848c1c813a33c7a0d0468d54820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e9160ef39b63878b367e2a4da8ad4bce4e42e3d959ee016365feb2cc6cc91011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9160ef39b63878b367e2a4da8ad4bce4e42e3d959ee016365feb2cc6cc91011->enter($__internal_e9160ef39b63878b367e2a4da8ad4bce4e42e3d959ee016365feb2cc6cc91011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e9160ef39b63878b367e2a4da8ad4bce4e42e3d959ee016365feb2cc6cc91011->leave($__internal_e9160ef39b63878b367e2a4da8ad4bce4e42e3d959ee016365feb2cc6cc91011_prof);

        
        $__internal_e6335bde480833309ce86a7a4e5faeb481c34848c1c813a33c7a0d0468d54820->leave($__internal_e6335bde480833309ce86a7a4e5faeb481c34848c1c813a33c7a0d0468d54820_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac47ceba2d685e46b1c2955f2f53860aa5053ed9a2c0aee32c9d2abddc0b87a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac47ceba2d685e46b1c2955f2f53860aa5053ed9a2c0aee32c9d2abddc0b87a3->enter($__internal_ac47ceba2d685e46b1c2955f2f53860aa5053ed9a2c0aee32c9d2abddc0b87a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3c11a6c8d1b2d465938d8ee8b4f5b7be1b52cbdc842970a6281d8d0ce0f6a911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c11a6c8d1b2d465938d8ee8b4f5b7be1b52cbdc842970a6281d8d0ce0f6a911->enter($__internal_3c11a6c8d1b2d465938d8ee8b4f5b7be1b52cbdc842970a6281d8d0ce0f6a911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3c11a6c8d1b2d465938d8ee8b4f5b7be1b52cbdc842970a6281d8d0ce0f6a911->leave($__internal_3c11a6c8d1b2d465938d8ee8b4f5b7be1b52cbdc842970a6281d8d0ce0f6a911_prof);

        
        $__internal_ac47ceba2d685e46b1c2955f2f53860aa5053ed9a2c0aee32c9d2abddc0b87a3->leave($__internal_ac47ceba2d685e46b1c2955f2f53860aa5053ed9a2c0aee32c9d2abddc0b87a3_prof);

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
