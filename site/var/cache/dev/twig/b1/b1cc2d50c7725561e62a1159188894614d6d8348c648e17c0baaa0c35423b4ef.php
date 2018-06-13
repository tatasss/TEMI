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
        $__internal_7e732c7e506cd71b5b3d36821c8cb8392db77ae9688a2e2eeb7daa1372a618d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e732c7e506cd71b5b3d36821c8cb8392db77ae9688a2e2eeb7daa1372a618d4->enter($__internal_7e732c7e506cd71b5b3d36821c8cb8392db77ae9688a2e2eeb7daa1372a618d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7c25a7f9084b125bcba24136a886046ee7a849dde99066016d776682a52d0d4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c25a7f9084b125bcba24136a886046ee7a849dde99066016d776682a52d0d4f->enter($__internal_7c25a7f9084b125bcba24136a886046ee7a849dde99066016d776682a52d0d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e732c7e506cd71b5b3d36821c8cb8392db77ae9688a2e2eeb7daa1372a618d4->leave($__internal_7e732c7e506cd71b5b3d36821c8cb8392db77ae9688a2e2eeb7daa1372a618d4_prof);

        
        $__internal_7c25a7f9084b125bcba24136a886046ee7a849dde99066016d776682a52d0d4f->leave($__internal_7c25a7f9084b125bcba24136a886046ee7a849dde99066016d776682a52d0d4f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6210558b122a02959636c3ee7e01de9e8c3ff4b121caf09d414cfa996b182989 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6210558b122a02959636c3ee7e01de9e8c3ff4b121caf09d414cfa996b182989->enter($__internal_6210558b122a02959636c3ee7e01de9e8c3ff4b121caf09d414cfa996b182989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8edf4b3be3a8830b35d2d7e93367f4cd41c344c4cff919ae06c2811de55fb520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8edf4b3be3a8830b35d2d7e93367f4cd41c344c4cff919ae06c2811de55fb520->enter($__internal_8edf4b3be3a8830b35d2d7e93367f4cd41c344c4cff919ae06c2811de55fb520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8edf4b3be3a8830b35d2d7e93367f4cd41c344c4cff919ae06c2811de55fb520->leave($__internal_8edf4b3be3a8830b35d2d7e93367f4cd41c344c4cff919ae06c2811de55fb520_prof);

        
        $__internal_6210558b122a02959636c3ee7e01de9e8c3ff4b121caf09d414cfa996b182989->leave($__internal_6210558b122a02959636c3ee7e01de9e8c3ff4b121caf09d414cfa996b182989_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_fdd7e43cb775a02493ac2503ea1651c71c4f4aa79208fd51512a5f56a16dfa43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdd7e43cb775a02493ac2503ea1651c71c4f4aa79208fd51512a5f56a16dfa43->enter($__internal_fdd7e43cb775a02493ac2503ea1651c71c4f4aa79208fd51512a5f56a16dfa43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_032aff0ec6184568a49c77dd057b486a2620ae668bd0cf06b4fa988ea45171df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_032aff0ec6184568a49c77dd057b486a2620ae668bd0cf06b4fa988ea45171df->enter($__internal_032aff0ec6184568a49c77dd057b486a2620ae668bd0cf06b4fa988ea45171df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_032aff0ec6184568a49c77dd057b486a2620ae668bd0cf06b4fa988ea45171df->leave($__internal_032aff0ec6184568a49c77dd057b486a2620ae668bd0cf06b4fa988ea45171df_prof);

        
        $__internal_fdd7e43cb775a02493ac2503ea1651c71c4f4aa79208fd51512a5f56a16dfa43->leave($__internal_fdd7e43cb775a02493ac2503ea1651c71c4f4aa79208fd51512a5f56a16dfa43_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_163fbf88160b730ac54641cc905814a22d8d98e26ec7886f3763534e9d61ab8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163fbf88160b730ac54641cc905814a22d8d98e26ec7886f3763534e9d61ab8c->enter($__internal_163fbf88160b730ac54641cc905814a22d8d98e26ec7886f3763534e9d61ab8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2c5faacbd6fbaaeb16691a61e8c153b73336c0e07e0ac282f2b762c7277718a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c5faacbd6fbaaeb16691a61e8c153b73336c0e07e0ac282f2b762c7277718a6->enter($__internal_2c5faacbd6fbaaeb16691a61e8c153b73336c0e07e0ac282f2b762c7277718a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2c5faacbd6fbaaeb16691a61e8c153b73336c0e07e0ac282f2b762c7277718a6->leave($__internal_2c5faacbd6fbaaeb16691a61e8c153b73336c0e07e0ac282f2b762c7277718a6_prof);

        
        $__internal_163fbf88160b730ac54641cc905814a22d8d98e26ec7886f3763534e9d61ab8c->leave($__internal_163fbf88160b730ac54641cc905814a22d8d98e26ec7886f3763534e9d61ab8c_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
