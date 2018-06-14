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
        $__internal_f199bffa85221c7b4f87cf6fe3742289129e1294d89784136c2154b5b472b5e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f199bffa85221c7b4f87cf6fe3742289129e1294d89784136c2154b5b472b5e3->enter($__internal_f199bffa85221c7b4f87cf6fe3742289129e1294d89784136c2154b5b472b5e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f9f21d306124ef17478480ddf4a3644ad1e6db7815a7b23d1f796c9c903845a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9f21d306124ef17478480ddf4a3644ad1e6db7815a7b23d1f796c9c903845a3->enter($__internal_f9f21d306124ef17478480ddf4a3644ad1e6db7815a7b23d1f796c9c903845a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f199bffa85221c7b4f87cf6fe3742289129e1294d89784136c2154b5b472b5e3->leave($__internal_f199bffa85221c7b4f87cf6fe3742289129e1294d89784136c2154b5b472b5e3_prof);

        
        $__internal_f9f21d306124ef17478480ddf4a3644ad1e6db7815a7b23d1f796c9c903845a3->leave($__internal_f9f21d306124ef17478480ddf4a3644ad1e6db7815a7b23d1f796c9c903845a3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac182bd1f898b7f4c2a18b0f7fa1dbe533dcf40d2c508898922ee95a3fdc1743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac182bd1f898b7f4c2a18b0f7fa1dbe533dcf40d2c508898922ee95a3fdc1743->enter($__internal_ac182bd1f898b7f4c2a18b0f7fa1dbe533dcf40d2c508898922ee95a3fdc1743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bf8381806f566fdde8b885a4010c0c95e7ab65c8bc2035ebf5881c5045385987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8381806f566fdde8b885a4010c0c95e7ab65c8bc2035ebf5881c5045385987->enter($__internal_bf8381806f566fdde8b885a4010c0c95e7ab65c8bc2035ebf5881c5045385987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_bf8381806f566fdde8b885a4010c0c95e7ab65c8bc2035ebf5881c5045385987->leave($__internal_bf8381806f566fdde8b885a4010c0c95e7ab65c8bc2035ebf5881c5045385987_prof);

        
        $__internal_ac182bd1f898b7f4c2a18b0f7fa1dbe533dcf40d2c508898922ee95a3fdc1743->leave($__internal_ac182bd1f898b7f4c2a18b0f7fa1dbe533dcf40d2c508898922ee95a3fdc1743_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c78db10ff21e6eb44eb46ca3bf18d5f162a6d14116d3664f16ee725b63742ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78db10ff21e6eb44eb46ca3bf18d5f162a6d14116d3664f16ee725b63742ace->enter($__internal_c78db10ff21e6eb44eb46ca3bf18d5f162a6d14116d3664f16ee725b63742ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b706d94d4e642623d89f1923bfacd87b729419f1c22ea72422e1d863c4ce9b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b706d94d4e642623d89f1923bfacd87b729419f1c22ea72422e1d863c4ce9b0->enter($__internal_3b706d94d4e642623d89f1923bfacd87b729419f1c22ea72422e1d863c4ce9b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3b706d94d4e642623d89f1923bfacd87b729419f1c22ea72422e1d863c4ce9b0->leave($__internal_3b706d94d4e642623d89f1923bfacd87b729419f1c22ea72422e1d863c4ce9b0_prof);

        
        $__internal_c78db10ff21e6eb44eb46ca3bf18d5f162a6d14116d3664f16ee725b63742ace->leave($__internal_c78db10ff21e6eb44eb46ca3bf18d5f162a6d14116d3664f16ee725b63742ace_prof);

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
