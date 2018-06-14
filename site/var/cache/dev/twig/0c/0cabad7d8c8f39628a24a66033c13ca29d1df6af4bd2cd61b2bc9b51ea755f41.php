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
        $__internal_0c3830d34c9504e7d23630bb97c0f2fc984e1bacf486066a1f64c2bec52ee794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c3830d34c9504e7d23630bb97c0f2fc984e1bacf486066a1f64c2bec52ee794->enter($__internal_0c3830d34c9504e7d23630bb97c0f2fc984e1bacf486066a1f64c2bec52ee794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_1fc0a3183aab057f17d0e01024e2f88bc3e23f6c50fd0d25d18bd7adc28b6086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc0a3183aab057f17d0e01024e2f88bc3e23f6c50fd0d25d18bd7adc28b6086->enter($__internal_1fc0a3183aab057f17d0e01024e2f88bc3e23f6c50fd0d25d18bd7adc28b6086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c3830d34c9504e7d23630bb97c0f2fc984e1bacf486066a1f64c2bec52ee794->leave($__internal_0c3830d34c9504e7d23630bb97c0f2fc984e1bacf486066a1f64c2bec52ee794_prof);

        
        $__internal_1fc0a3183aab057f17d0e01024e2f88bc3e23f6c50fd0d25d18bd7adc28b6086->leave($__internal_1fc0a3183aab057f17d0e01024e2f88bc3e23f6c50fd0d25d18bd7adc28b6086_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9408996969a95b75c3e186fd1026b5b8748c65e857b475e4cea79f38fe9db527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9408996969a95b75c3e186fd1026b5b8748c65e857b475e4cea79f38fe9db527->enter($__internal_9408996969a95b75c3e186fd1026b5b8748c65e857b475e4cea79f38fe9db527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b34fc21ee364793d7ec3cd843c08c43221b67431b9b7acf92cde100a6115a6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34fc21ee364793d7ec3cd843c08c43221b67431b9b7acf92cde100a6115a6fa->enter($__internal_b34fc21ee364793d7ec3cd843c08c43221b67431b9b7acf92cde100a6115a6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_b34fc21ee364793d7ec3cd843c08c43221b67431b9b7acf92cde100a6115a6fa->leave($__internal_b34fc21ee364793d7ec3cd843c08c43221b67431b9b7acf92cde100a6115a6fa_prof);

        
        $__internal_9408996969a95b75c3e186fd1026b5b8748c65e857b475e4cea79f38fe9db527->leave($__internal_9408996969a95b75c3e186fd1026b5b8748c65e857b475e4cea79f38fe9db527_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_95836d3959a47efa4428a853f6fc6e748ac9b5fb89042adaf8eacec54fcc2dad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95836d3959a47efa4428a853f6fc6e748ac9b5fb89042adaf8eacec54fcc2dad->enter($__internal_95836d3959a47efa4428a853f6fc6e748ac9b5fb89042adaf8eacec54fcc2dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7585f97cc670d256c1285b4780d6cb86a844e444ac8007615d4dacd4c80ce5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7585f97cc670d256c1285b4780d6cb86a844e444ac8007615d4dacd4c80ce5b7->enter($__internal_7585f97cc670d256c1285b4780d6cb86a844e444ac8007615d4dacd4c80ce5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7585f97cc670d256c1285b4780d6cb86a844e444ac8007615d4dacd4c80ce5b7->leave($__internal_7585f97cc670d256c1285b4780d6cb86a844e444ac8007615d4dacd4c80ce5b7_prof);

        
        $__internal_95836d3959a47efa4428a853f6fc6e748ac9b5fb89042adaf8eacec54fcc2dad->leave($__internal_95836d3959a47efa4428a853f6fc6e748ac9b5fb89042adaf8eacec54fcc2dad_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
