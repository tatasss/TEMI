<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_cc09717f96e0d8a8dee09e3c656e65ad7d1c9bd4eb44b1a9c8d1de292297e7e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_fccd4c461798c8e919eb37791158407cfed5a73bfe7fc2f5b65a078a2ab5da33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fccd4c461798c8e919eb37791158407cfed5a73bfe7fc2f5b65a078a2ab5da33->enter($__internal_fccd4c461798c8e919eb37791158407cfed5a73bfe7fc2f5b65a078a2ab5da33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_14e704b10d404c6ab09cacd34645b12321eb7735da50c53f5cfd645868526545 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e704b10d404c6ab09cacd34645b12321eb7735da50c53f5cfd645868526545->enter($__internal_14e704b10d404c6ab09cacd34645b12321eb7735da50c53f5cfd645868526545_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fccd4c461798c8e919eb37791158407cfed5a73bfe7fc2f5b65a078a2ab5da33->leave($__internal_fccd4c461798c8e919eb37791158407cfed5a73bfe7fc2f5b65a078a2ab5da33_prof);

        
        $__internal_14e704b10d404c6ab09cacd34645b12321eb7735da50c53f5cfd645868526545->leave($__internal_14e704b10d404c6ab09cacd34645b12321eb7735da50c53f5cfd645868526545_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea6334c905686ca2d9fc8a67ce3e527083ae9997c0cae63b1135a02b7bd84461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6334c905686ca2d9fc8a67ce3e527083ae9997c0cae63b1135a02b7bd84461->enter($__internal_ea6334c905686ca2d9fc8a67ce3e527083ae9997c0cae63b1135a02b7bd84461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3cf1fc94ecfd4ab02eee2d0e9b70cd1dd9eeedd982e5da1fa59ad0d3627248c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf1fc94ecfd4ab02eee2d0e9b70cd1dd9eeedd982e5da1fa59ad0d3627248c7->enter($__internal_3cf1fc94ecfd4ab02eee2d0e9b70cd1dd9eeedd982e5da1fa59ad0d3627248c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3cf1fc94ecfd4ab02eee2d0e9b70cd1dd9eeedd982e5da1fa59ad0d3627248c7->leave($__internal_3cf1fc94ecfd4ab02eee2d0e9b70cd1dd9eeedd982e5da1fa59ad0d3627248c7_prof);

        
        $__internal_ea6334c905686ca2d9fc8a67ce3e527083ae9997c0cae63b1135a02b7bd84461->leave($__internal_ea6334c905686ca2d9fc8a67ce3e527083ae9997c0cae63b1135a02b7bd84461_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae3342a17667f17182390837dcd5345d216bc383ffed4b56ae28d85f86c70442 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae3342a17667f17182390837dcd5345d216bc383ffed4b56ae28d85f86c70442->enter($__internal_ae3342a17667f17182390837dcd5345d216bc383ffed4b56ae28d85f86c70442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_076b7400c0df4d69926fae912fb0ce5bd2b82969e5020749034cc830dc97b3f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076b7400c0df4d69926fae912fb0ce5bd2b82969e5020749034cc830dc97b3f2->enter($__internal_076b7400c0df4d69926fae912fb0ce5bd2b82969e5020749034cc830dc97b3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_076b7400c0df4d69926fae912fb0ce5bd2b82969e5020749034cc830dc97b3f2->leave($__internal_076b7400c0df4d69926fae912fb0ce5bd2b82969e5020749034cc830dc97b3f2_prof);

        
        $__internal_ae3342a17667f17182390837dcd5345d216bc383ffed4b56ae28d85f86c70442->leave($__internal_ae3342a17667f17182390837dcd5345d216bc383ffed4b56ae28d85f86c70442_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_11f377f22cb57796784490d68b486ecef2c5f829112aa2a049a2b733277da956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f377f22cb57796784490d68b486ecef2c5f829112aa2a049a2b733277da956->enter($__internal_11f377f22cb57796784490d68b486ecef2c5f829112aa2a049a2b733277da956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91136f85122b4496881445fae56de01ce4ea9234c32c31874e782e1b209d13d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91136f85122b4496881445fae56de01ce4ea9234c32c31874e782e1b209d13d5->enter($__internal_91136f85122b4496881445fae56de01ce4ea9234c32c31874e782e1b209d13d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_91136f85122b4496881445fae56de01ce4ea9234c32c31874e782e1b209d13d5->leave($__internal_91136f85122b4496881445fae56de01ce4ea9234c32c31874e782e1b209d13d5_prof);

        
        $__internal_11f377f22cb57796784490d68b486ecef2c5f829112aa2a049a2b733277da956->leave($__internal_11f377f22cb57796784490d68b486ecef2c5f829112aa2a049a2b733277da956_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
