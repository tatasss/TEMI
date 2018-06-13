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
        $__internal_b908f8b6d4ce3e7241141636a5d776df220ff7d3f8edb8a83a6828314eeecea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b908f8b6d4ce3e7241141636a5d776df220ff7d3f8edb8a83a6828314eeecea9->enter($__internal_b908f8b6d4ce3e7241141636a5d776df220ff7d3f8edb8a83a6828314eeecea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_cc459f0bf60ffaa3d134f0acc89abeb615553989b6640163eaef51b9039095d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc459f0bf60ffaa3d134f0acc89abeb615553989b6640163eaef51b9039095d4->enter($__internal_cc459f0bf60ffaa3d134f0acc89abeb615553989b6640163eaef51b9039095d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b908f8b6d4ce3e7241141636a5d776df220ff7d3f8edb8a83a6828314eeecea9->leave($__internal_b908f8b6d4ce3e7241141636a5d776df220ff7d3f8edb8a83a6828314eeecea9_prof);

        
        $__internal_cc459f0bf60ffaa3d134f0acc89abeb615553989b6640163eaef51b9039095d4->leave($__internal_cc459f0bf60ffaa3d134f0acc89abeb615553989b6640163eaef51b9039095d4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6357c21034136bbc2d15f2faf6070d8c06de00b83b55cf4ab9bfb665f882ff12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6357c21034136bbc2d15f2faf6070d8c06de00b83b55cf4ab9bfb665f882ff12->enter($__internal_6357c21034136bbc2d15f2faf6070d8c06de00b83b55cf4ab9bfb665f882ff12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2b9a9b7dba6a912f5192f0921d821a41f31a44b20ae3a921ed8f8bb7214c3bfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9a9b7dba6a912f5192f0921d821a41f31a44b20ae3a921ed8f8bb7214c3bfb->enter($__internal_2b9a9b7dba6a912f5192f0921d821a41f31a44b20ae3a921ed8f8bb7214c3bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2b9a9b7dba6a912f5192f0921d821a41f31a44b20ae3a921ed8f8bb7214c3bfb->leave($__internal_2b9a9b7dba6a912f5192f0921d821a41f31a44b20ae3a921ed8f8bb7214c3bfb_prof);

        
        $__internal_6357c21034136bbc2d15f2faf6070d8c06de00b83b55cf4ab9bfb665f882ff12->leave($__internal_6357c21034136bbc2d15f2faf6070d8c06de00b83b55cf4ab9bfb665f882ff12_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_688159ff07faf8cbb299d9a627997e815f74f1b40915b9747572fb1ea156b34a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_688159ff07faf8cbb299d9a627997e815f74f1b40915b9747572fb1ea156b34a->enter($__internal_688159ff07faf8cbb299d9a627997e815f74f1b40915b9747572fb1ea156b34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6e7ce7a9cc83c0e4640745968f5afba87491442dc8be44bb7259f0671dd42097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7ce7a9cc83c0e4640745968f5afba87491442dc8be44bb7259f0671dd42097->enter($__internal_6e7ce7a9cc83c0e4640745968f5afba87491442dc8be44bb7259f0671dd42097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6e7ce7a9cc83c0e4640745968f5afba87491442dc8be44bb7259f0671dd42097->leave($__internal_6e7ce7a9cc83c0e4640745968f5afba87491442dc8be44bb7259f0671dd42097_prof);

        
        $__internal_688159ff07faf8cbb299d9a627997e815f74f1b40915b9747572fb1ea156b34a->leave($__internal_688159ff07faf8cbb299d9a627997e815f74f1b40915b9747572fb1ea156b34a_prof);

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
