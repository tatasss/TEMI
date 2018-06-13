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
        $__internal_be7cdeb6fa1685783e0bb5abaea6107663ae44f44550fed36350db7b3a41aae1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be7cdeb6fa1685783e0bb5abaea6107663ae44f44550fed36350db7b3a41aae1->enter($__internal_be7cdeb6fa1685783e0bb5abaea6107663ae44f44550fed36350db7b3a41aae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_60763b2628b52cee60ffdcb671f9214c3aecb53b13c04c5c967a80526b17f4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60763b2628b52cee60ffdcb671f9214c3aecb53b13c04c5c967a80526b17f4cb->enter($__internal_60763b2628b52cee60ffdcb671f9214c3aecb53b13c04c5c967a80526b17f4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be7cdeb6fa1685783e0bb5abaea6107663ae44f44550fed36350db7b3a41aae1->leave($__internal_be7cdeb6fa1685783e0bb5abaea6107663ae44f44550fed36350db7b3a41aae1_prof);

        
        $__internal_60763b2628b52cee60ffdcb671f9214c3aecb53b13c04c5c967a80526b17f4cb->leave($__internal_60763b2628b52cee60ffdcb671f9214c3aecb53b13c04c5c967a80526b17f4cb_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4ded36e148ce4f2844e9d1de65ab690c150f6ef70ac5e4827bffbf2c752d3bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ded36e148ce4f2844e9d1de65ab690c150f6ef70ac5e4827bffbf2c752d3bbf->enter($__internal_4ded36e148ce4f2844e9d1de65ab690c150f6ef70ac5e4827bffbf2c752d3bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_080757021b4566d997c554c9b074e85fbcfbd352ac3f899f5e83ed13f8a060ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_080757021b4566d997c554c9b074e85fbcfbd352ac3f899f5e83ed13f8a060ac->enter($__internal_080757021b4566d997c554c9b074e85fbcfbd352ac3f899f5e83ed13f8a060ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_080757021b4566d997c554c9b074e85fbcfbd352ac3f899f5e83ed13f8a060ac->leave($__internal_080757021b4566d997c554c9b074e85fbcfbd352ac3f899f5e83ed13f8a060ac_prof);

        
        $__internal_4ded36e148ce4f2844e9d1de65ab690c150f6ef70ac5e4827bffbf2c752d3bbf->leave($__internal_4ded36e148ce4f2844e9d1de65ab690c150f6ef70ac5e4827bffbf2c752d3bbf_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b5793b4861b99a1fa0cae62a258eb0b9a65894fe1efb988ea0c8169c60e5bd4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5793b4861b99a1fa0cae62a258eb0b9a65894fe1efb988ea0c8169c60e5bd4d->enter($__internal_b5793b4861b99a1fa0cae62a258eb0b9a65894fe1efb988ea0c8169c60e5bd4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c778a7d876d4cd72754fb1edcf1b82c37c4f4b673a317bac4a53e68b13845419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c778a7d876d4cd72754fb1edcf1b82c37c4f4b673a317bac4a53e68b13845419->enter($__internal_c778a7d876d4cd72754fb1edcf1b82c37c4f4b673a317bac4a53e68b13845419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c778a7d876d4cd72754fb1edcf1b82c37c4f4b673a317bac4a53e68b13845419->leave($__internal_c778a7d876d4cd72754fb1edcf1b82c37c4f4b673a317bac4a53e68b13845419_prof);

        
        $__internal_b5793b4861b99a1fa0cae62a258eb0b9a65894fe1efb988ea0c8169c60e5bd4d->leave($__internal_b5793b4861b99a1fa0cae62a258eb0b9a65894fe1efb988ea0c8169c60e5bd4d_prof);

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
