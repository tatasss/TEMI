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
        $__internal_3d23ed40464252ba4417348960f26c3490d9a129977493883438fc4b2453d23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d23ed40464252ba4417348960f26c3490d9a129977493883438fc4b2453d23f->enter($__internal_3d23ed40464252ba4417348960f26c3490d9a129977493883438fc4b2453d23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_592637e0b722a4c86045adf1ed0ad75db1d017bf6a228e9b8e6cf249cd544119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592637e0b722a4c86045adf1ed0ad75db1d017bf6a228e9b8e6cf249cd544119->enter($__internal_592637e0b722a4c86045adf1ed0ad75db1d017bf6a228e9b8e6cf249cd544119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d23ed40464252ba4417348960f26c3490d9a129977493883438fc4b2453d23f->leave($__internal_3d23ed40464252ba4417348960f26c3490d9a129977493883438fc4b2453d23f_prof);

        
        $__internal_592637e0b722a4c86045adf1ed0ad75db1d017bf6a228e9b8e6cf249cd544119->leave($__internal_592637e0b722a4c86045adf1ed0ad75db1d017bf6a228e9b8e6cf249cd544119_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8760a29824e08034038371870984726cee264f48717ca472e61d8b66b25d403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8760a29824e08034038371870984726cee264f48717ca472e61d8b66b25d403->enter($__internal_f8760a29824e08034038371870984726cee264f48717ca472e61d8b66b25d403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_944299309fc95004f8a153e628323b3964978f566dc8b82abaff78c01a457fba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_944299309fc95004f8a153e628323b3964978f566dc8b82abaff78c01a457fba->enter($__internal_944299309fc95004f8a153e628323b3964978f566dc8b82abaff78c01a457fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_944299309fc95004f8a153e628323b3964978f566dc8b82abaff78c01a457fba->leave($__internal_944299309fc95004f8a153e628323b3964978f566dc8b82abaff78c01a457fba_prof);

        
        $__internal_f8760a29824e08034038371870984726cee264f48717ca472e61d8b66b25d403->leave($__internal_f8760a29824e08034038371870984726cee264f48717ca472e61d8b66b25d403_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b6ddf969f5fde957272cbebddb5b1f787acffc6b9b29cb8b7cbcc8bd11a3622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b6ddf969f5fde957272cbebddb5b1f787acffc6b9b29cb8b7cbcc8bd11a3622->enter($__internal_2b6ddf969f5fde957272cbebddb5b1f787acffc6b9b29cb8b7cbcc8bd11a3622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ffdd3bc7346a1825de920c7547ff095852acb99a9da244a4fec693a673333ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffdd3bc7346a1825de920c7547ff095852acb99a9da244a4fec693a673333ba->enter($__internal_3ffdd3bc7346a1825de920c7547ff095852acb99a9da244a4fec693a673333ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3ffdd3bc7346a1825de920c7547ff095852acb99a9da244a4fec693a673333ba->leave($__internal_3ffdd3bc7346a1825de920c7547ff095852acb99a9da244a4fec693a673333ba_prof);

        
        $__internal_2b6ddf969f5fde957272cbebddb5b1f787acffc6b9b29cb8b7cbcc8bd11a3622->leave($__internal_2b6ddf969f5fde957272cbebddb5b1f787acffc6b9b29cb8b7cbcc8bd11a3622_prof);

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
