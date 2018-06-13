<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f61fd54696004b9c8edb194c7c2a4a91ab3c46a746f6ce731dd45c2ae77db7f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_a8603b9b08c7759885655b13d237139e70b05825bd2ec65cb2fd268a27f01824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8603b9b08c7759885655b13d237139e70b05825bd2ec65cb2fd268a27f01824->enter($__internal_a8603b9b08c7759885655b13d237139e70b05825bd2ec65cb2fd268a27f01824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_031b5daa7a163f188db5e4a54fb0ad38692dc401c47cb0ec20b0e88a9fa76e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_031b5daa7a163f188db5e4a54fb0ad38692dc401c47cb0ec20b0e88a9fa76e07->enter($__internal_031b5daa7a163f188db5e4a54fb0ad38692dc401c47cb0ec20b0e88a9fa76e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8603b9b08c7759885655b13d237139e70b05825bd2ec65cb2fd268a27f01824->leave($__internal_a8603b9b08c7759885655b13d237139e70b05825bd2ec65cb2fd268a27f01824_prof);

        
        $__internal_031b5daa7a163f188db5e4a54fb0ad38692dc401c47cb0ec20b0e88a9fa76e07->leave($__internal_031b5daa7a163f188db5e4a54fb0ad38692dc401c47cb0ec20b0e88a9fa76e07_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8a92211f8f536b32e7f6840a9eb59a6805b0c8b3c6ae4205a5898aee5956721c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a92211f8f536b32e7f6840a9eb59a6805b0c8b3c6ae4205a5898aee5956721c->enter($__internal_8a92211f8f536b32e7f6840a9eb59a6805b0c8b3c6ae4205a5898aee5956721c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_249b45321ec981057d7271d92c735009ab729d08907e2ca0c7e6b97de0d92644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_249b45321ec981057d7271d92c735009ab729d08907e2ca0c7e6b97de0d92644->enter($__internal_249b45321ec981057d7271d92c735009ab729d08907e2ca0c7e6b97de0d92644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_249b45321ec981057d7271d92c735009ab729d08907e2ca0c7e6b97de0d92644->leave($__internal_249b45321ec981057d7271d92c735009ab729d08907e2ca0c7e6b97de0d92644_prof);

        
        $__internal_8a92211f8f536b32e7f6840a9eb59a6805b0c8b3c6ae4205a5898aee5956721c->leave($__internal_8a92211f8f536b32e7f6840a9eb59a6805b0c8b3c6ae4205a5898aee5956721c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_91a4565c125f4fef31c07e0ee64b55f771372ba09e5a3d954653c9633a069732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91a4565c125f4fef31c07e0ee64b55f771372ba09e5a3d954653c9633a069732->enter($__internal_91a4565c125f4fef31c07e0ee64b55f771372ba09e5a3d954653c9633a069732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b23bcce3122dbf29fbf6c094c8e079b12e17e19af7a9e30ae98d872196dba371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23bcce3122dbf29fbf6c094c8e079b12e17e19af7a9e30ae98d872196dba371->enter($__internal_b23bcce3122dbf29fbf6c094c8e079b12e17e19af7a9e30ae98d872196dba371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b23bcce3122dbf29fbf6c094c8e079b12e17e19af7a9e30ae98d872196dba371->leave($__internal_b23bcce3122dbf29fbf6c094c8e079b12e17e19af7a9e30ae98d872196dba371_prof);

        
        $__internal_91a4565c125f4fef31c07e0ee64b55f771372ba09e5a3d954653c9633a069732->leave($__internal_91a4565c125f4fef31c07e0ee64b55f771372ba09e5a3d954653c9633a069732_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_d257958e4a7da9079c5f848cd2922e87f1004105203526dae1a083d24eb803fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d257958e4a7da9079c5f848cd2922e87f1004105203526dae1a083d24eb803fa->enter($__internal_d257958e4a7da9079c5f848cd2922e87f1004105203526dae1a083d24eb803fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3df7261b8f1ef12c42ada68a5b2bc3470e9c63d28962eb794318ab7d1d47311c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df7261b8f1ef12c42ada68a5b2bc3470e9c63d28962eb794318ab7d1d47311c->enter($__internal_3df7261b8f1ef12c42ada68a5b2bc3470e9c63d28962eb794318ab7d1d47311c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_3df7261b8f1ef12c42ada68a5b2bc3470e9c63d28962eb794318ab7d1d47311c->leave($__internal_3df7261b8f1ef12c42ada68a5b2bc3470e9c63d28962eb794318ab7d1d47311c_prof);

        
        $__internal_d257958e4a7da9079c5f848cd2922e87f1004105203526dae1a083d24eb803fa->leave($__internal_d257958e4a7da9079c5f848cd2922e87f1004105203526dae1a083d24eb803fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
