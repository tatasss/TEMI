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
        $__internal_b47c0f09d89946eff2a1c3973a656e174a8ff34b960a2bb33efd040afefba11f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b47c0f09d89946eff2a1c3973a656e174a8ff34b960a2bb33efd040afefba11f->enter($__internal_b47c0f09d89946eff2a1c3973a656e174a8ff34b960a2bb33efd040afefba11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5d72b774e529dfd8528c203abc9c5b2c74c0f8389f2bdb392215e6e640163970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d72b774e529dfd8528c203abc9c5b2c74c0f8389f2bdb392215e6e640163970->enter($__internal_5d72b774e529dfd8528c203abc9c5b2c74c0f8389f2bdb392215e6e640163970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b47c0f09d89946eff2a1c3973a656e174a8ff34b960a2bb33efd040afefba11f->leave($__internal_b47c0f09d89946eff2a1c3973a656e174a8ff34b960a2bb33efd040afefba11f_prof);

        
        $__internal_5d72b774e529dfd8528c203abc9c5b2c74c0f8389f2bdb392215e6e640163970->leave($__internal_5d72b774e529dfd8528c203abc9c5b2c74c0f8389f2bdb392215e6e640163970_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d79f85571a5e6d163ed0e1789a2d7d6b3d99f553352b15a422bddaf63aeda6ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d79f85571a5e6d163ed0e1789a2d7d6b3d99f553352b15a422bddaf63aeda6ea->enter($__internal_d79f85571a5e6d163ed0e1789a2d7d6b3d99f553352b15a422bddaf63aeda6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3132e9fee29a2053a84a4bfe303605766902bc609e1087e9752dc3236abc2694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3132e9fee29a2053a84a4bfe303605766902bc609e1087e9752dc3236abc2694->enter($__internal_3132e9fee29a2053a84a4bfe303605766902bc609e1087e9752dc3236abc2694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3132e9fee29a2053a84a4bfe303605766902bc609e1087e9752dc3236abc2694->leave($__internal_3132e9fee29a2053a84a4bfe303605766902bc609e1087e9752dc3236abc2694_prof);

        
        $__internal_d79f85571a5e6d163ed0e1789a2d7d6b3d99f553352b15a422bddaf63aeda6ea->leave($__internal_d79f85571a5e6d163ed0e1789a2d7d6b3d99f553352b15a422bddaf63aeda6ea_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c52bf4b5c823ffb8263913afd4114d1d7afa359ed36f99c5b3380afa8d988ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c52bf4b5c823ffb8263913afd4114d1d7afa359ed36f99c5b3380afa8d988ef->enter($__internal_8c52bf4b5c823ffb8263913afd4114d1d7afa359ed36f99c5b3380afa8d988ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_953bc52189e243d7a6a58e0b21d9dd5822d7269485611884556e692dd30d189e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953bc52189e243d7a6a58e0b21d9dd5822d7269485611884556e692dd30d189e->enter($__internal_953bc52189e243d7a6a58e0b21d9dd5822d7269485611884556e692dd30d189e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_953bc52189e243d7a6a58e0b21d9dd5822d7269485611884556e692dd30d189e->leave($__internal_953bc52189e243d7a6a58e0b21d9dd5822d7269485611884556e692dd30d189e_prof);

        
        $__internal_8c52bf4b5c823ffb8263913afd4114d1d7afa359ed36f99c5b3380afa8d988ef->leave($__internal_8c52bf4b5c823ffb8263913afd4114d1d7afa359ed36f99c5b3380afa8d988ef_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1de59470d3c5b951f44aa366eb2669a1745325f1257404d633a7e94b383b8edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de59470d3c5b951f44aa366eb2669a1745325f1257404d633a7e94b383b8edf->enter($__internal_1de59470d3c5b951f44aa366eb2669a1745325f1257404d633a7e94b383b8edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92815544fed07c90eafc419e1e507806ca091b0a591ad726afe0c7a2ecb51693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92815544fed07c90eafc419e1e507806ca091b0a591ad726afe0c7a2ecb51693->enter($__internal_92815544fed07c90eafc419e1e507806ca091b0a591ad726afe0c7a2ecb51693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_92815544fed07c90eafc419e1e507806ca091b0a591ad726afe0c7a2ecb51693->leave($__internal_92815544fed07c90eafc419e1e507806ca091b0a591ad726afe0c7a2ecb51693_prof);

        
        $__internal_1de59470d3c5b951f44aa366eb2669a1745325f1257404d633a7e94b383b8edf->leave($__internal_1de59470d3c5b951f44aa366eb2669a1745325f1257404d633a7e94b383b8edf_prof);

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
