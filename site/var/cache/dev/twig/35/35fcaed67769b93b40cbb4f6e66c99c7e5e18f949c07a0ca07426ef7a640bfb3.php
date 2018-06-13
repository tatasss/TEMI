<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_bb92366d35700dc6ea1864e0c343a17cd7fa44fc69457517ef1e36dfbc67993b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
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
        $__internal_c12557de56e53810f1d76bb38577e017211d30122f21189c827b35d547108807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c12557de56e53810f1d76bb38577e017211d30122f21189c827b35d547108807->enter($__internal_c12557de56e53810f1d76bb38577e017211d30122f21189c827b35d547108807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0e2fef2b3d589a5bcb81ac43d092ed0cf35739b6358d12297d0514061b7b5989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2fef2b3d589a5bcb81ac43d092ed0cf35739b6358d12297d0514061b7b5989->enter($__internal_0e2fef2b3d589a5bcb81ac43d092ed0cf35739b6358d12297d0514061b7b5989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c12557de56e53810f1d76bb38577e017211d30122f21189c827b35d547108807->leave($__internal_c12557de56e53810f1d76bb38577e017211d30122f21189c827b35d547108807_prof);

        
        $__internal_0e2fef2b3d589a5bcb81ac43d092ed0cf35739b6358d12297d0514061b7b5989->leave($__internal_0e2fef2b3d589a5bcb81ac43d092ed0cf35739b6358d12297d0514061b7b5989_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_81592b3107d73d98e8ec605c931c2bede324621f32062eb537ba5185d779881c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81592b3107d73d98e8ec605c931c2bede324621f32062eb537ba5185d779881c->enter($__internal_81592b3107d73d98e8ec605c931c2bede324621f32062eb537ba5185d779881c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_aac736b9bd61d9214e594eb964ebf555aaa4768270d05a7d46949189f84f8c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac736b9bd61d9214e594eb964ebf555aaa4768270d05a7d46949189f84f8c83->enter($__internal_aac736b9bd61d9214e594eb964ebf555aaa4768270d05a7d46949189f84f8c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_aac736b9bd61d9214e594eb964ebf555aaa4768270d05a7d46949189f84f8c83->leave($__internal_aac736b9bd61d9214e594eb964ebf555aaa4768270d05a7d46949189f84f8c83_prof);

        
        $__internal_81592b3107d73d98e8ec605c931c2bede324621f32062eb537ba5185d779881c->leave($__internal_81592b3107d73d98e8ec605c931c2bede324621f32062eb537ba5185d779881c_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1db0d5752a1acc06630dd043d8db83f3565e023057446b4ec206607455bbf081 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1db0d5752a1acc06630dd043d8db83f3565e023057446b4ec206607455bbf081->enter($__internal_1db0d5752a1acc06630dd043d8db83f3565e023057446b4ec206607455bbf081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d4f72b2311db0ea562e3138e52270e3b0825475dde3aa58a000172979619a848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f72b2311db0ea562e3138e52270e3b0825475dde3aa58a000172979619a848->enter($__internal_d4f72b2311db0ea562e3138e52270e3b0825475dde3aa58a000172979619a848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d4f72b2311db0ea562e3138e52270e3b0825475dde3aa58a000172979619a848->leave($__internal_d4f72b2311db0ea562e3138e52270e3b0825475dde3aa58a000172979619a848_prof);

        
        $__internal_1db0d5752a1acc06630dd043d8db83f3565e023057446b4ec206607455bbf081->leave($__internal_1db0d5752a1acc06630dd043d8db83f3565e023057446b4ec206607455bbf081_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
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
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
