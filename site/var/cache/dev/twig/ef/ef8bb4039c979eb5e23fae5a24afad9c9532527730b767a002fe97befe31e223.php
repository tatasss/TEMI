<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_0d3c3c330d5b3f1c98694b8737b1ae142600fa832521aa6953265dc33937df0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb236edbd1b4286bb7016658bc6f292e06b9055c61ff561463b10828753767a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb236edbd1b4286bb7016658bc6f292e06b9055c61ff561463b10828753767a9->enter($__internal_eb236edbd1b4286bb7016658bc6f292e06b9055c61ff561463b10828753767a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_da4f52ad8be412a61e35cde9616dfb426a93a4baaac85a7309fe2f0c56a17196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4f52ad8be412a61e35cde9616dfb426a93a4baaac85a7309fe2f0c56a17196->enter($__internal_da4f52ad8be412a61e35cde9616dfb426a93a4baaac85a7309fe2f0c56a17196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb236edbd1b4286bb7016658bc6f292e06b9055c61ff561463b10828753767a9->leave($__internal_eb236edbd1b4286bb7016658bc6f292e06b9055c61ff561463b10828753767a9_prof);

        
        $__internal_da4f52ad8be412a61e35cde9616dfb426a93a4baaac85a7309fe2f0c56a17196->leave($__internal_da4f52ad8be412a61e35cde9616dfb426a93a4baaac85a7309fe2f0c56a17196_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_fcbd32e77db705a3f22b66b7c3d1892b9d3f3e8e716768e5b87c21da2f9d9968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcbd32e77db705a3f22b66b7c3d1892b9d3f3e8e716768e5b87c21da2f9d9968->enter($__internal_fcbd32e77db705a3f22b66b7c3d1892b9d3f3e8e716768e5b87c21da2f9d9968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_014894ecc6368dcf7f2514886af22bfabff6377ee90dcc6c35295ad55b86587b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_014894ecc6368dcf7f2514886af22bfabff6377ee90dcc6c35295ad55b86587b->enter($__internal_014894ecc6368dcf7f2514886af22bfabff6377ee90dcc6c35295ad55b86587b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_014894ecc6368dcf7f2514886af22bfabff6377ee90dcc6c35295ad55b86587b->leave($__internal_014894ecc6368dcf7f2514886af22bfabff6377ee90dcc6c35295ad55b86587b_prof);

        
        $__internal_fcbd32e77db705a3f22b66b7c3d1892b9d3f3e8e716768e5b87c21da2f9d9968->leave($__internal_fcbd32e77db705a3f22b66b7c3d1892b9d3f3e8e716768e5b87c21da2f9d9968_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6c31b178fd55df86965901a963ca5d99e4109741b7c8f5e57875d6d67deb02af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c31b178fd55df86965901a963ca5d99e4109741b7c8f5e57875d6d67deb02af->enter($__internal_6c31b178fd55df86965901a963ca5d99e4109741b7c8f5e57875d6d67deb02af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c8a7249f5f8cef356fa369b90cc2fcaa2b7d07182002ac0d0a24944e6f2e3c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a7249f5f8cef356fa369b90cc2fcaa2b7d07182002ac0d0a24944e6f2e3c11->enter($__internal_c8a7249f5f8cef356fa369b90cc2fcaa2b7d07182002ac0d0a24944e6f2e3c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c8a7249f5f8cef356fa369b90cc2fcaa2b7d07182002ac0d0a24944e6f2e3c11->leave($__internal_c8a7249f5f8cef356fa369b90cc2fcaa2b7d07182002ac0d0a24944e6f2e3c11_prof);

        
        $__internal_6c31b178fd55df86965901a963ca5d99e4109741b7c8f5e57875d6d67deb02af->leave($__internal_6c31b178fd55df86965901a963ca5d99e4109741b7c8f5e57875d6d67deb02af_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
