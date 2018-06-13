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
        $__internal_785de82dcd7d03ae3bf85656bed2e2e1cc13e3a8052b9a5348365964b1cdc459 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_785de82dcd7d03ae3bf85656bed2e2e1cc13e3a8052b9a5348365964b1cdc459->enter($__internal_785de82dcd7d03ae3bf85656bed2e2e1cc13e3a8052b9a5348365964b1cdc459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_a28343ebeba3887d6aaf70416d576ffbbabaf89f9546de3f8e33c16c06d5e458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a28343ebeba3887d6aaf70416d576ffbbabaf89f9546de3f8e33c16c06d5e458->enter($__internal_a28343ebeba3887d6aaf70416d576ffbbabaf89f9546de3f8e33c16c06d5e458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_785de82dcd7d03ae3bf85656bed2e2e1cc13e3a8052b9a5348365964b1cdc459->leave($__internal_785de82dcd7d03ae3bf85656bed2e2e1cc13e3a8052b9a5348365964b1cdc459_prof);

        
        $__internal_a28343ebeba3887d6aaf70416d576ffbbabaf89f9546de3f8e33c16c06d5e458->leave($__internal_a28343ebeba3887d6aaf70416d576ffbbabaf89f9546de3f8e33c16c06d5e458_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a36cce21be26d932c750eecaddf46d59273286264705493d7bd692bbf2d89a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a36cce21be26d932c750eecaddf46d59273286264705493d7bd692bbf2d89a4->enter($__internal_0a36cce21be26d932c750eecaddf46d59273286264705493d7bd692bbf2d89a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_08ece9c05d61f0d7d1a33c48e4bc2401f731fc0251163f26aa490897a5d917c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ece9c05d61f0d7d1a33c48e4bc2401f731fc0251163f26aa490897a5d917c4->enter($__internal_08ece9c05d61f0d7d1a33c48e4bc2401f731fc0251163f26aa490897a5d917c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_08ece9c05d61f0d7d1a33c48e4bc2401f731fc0251163f26aa490897a5d917c4->leave($__internal_08ece9c05d61f0d7d1a33c48e4bc2401f731fc0251163f26aa490897a5d917c4_prof);

        
        $__internal_0a36cce21be26d932c750eecaddf46d59273286264705493d7bd692bbf2d89a4->leave($__internal_0a36cce21be26d932c750eecaddf46d59273286264705493d7bd692bbf2d89a4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_719c56d7d0ae307abd2bee2a15573c114d8bc19172de9f069190894fabbfd758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719c56d7d0ae307abd2bee2a15573c114d8bc19172de9f069190894fabbfd758->enter($__internal_719c56d7d0ae307abd2bee2a15573c114d8bc19172de9f069190894fabbfd758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_842f8af1039e22cbeab9a74f7633aa0d4bb4ae99ef680045afd9fa132c7b005f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_842f8af1039e22cbeab9a74f7633aa0d4bb4ae99ef680045afd9fa132c7b005f->enter($__internal_842f8af1039e22cbeab9a74f7633aa0d4bb4ae99ef680045afd9fa132c7b005f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_842f8af1039e22cbeab9a74f7633aa0d4bb4ae99ef680045afd9fa132c7b005f->leave($__internal_842f8af1039e22cbeab9a74f7633aa0d4bb4ae99ef680045afd9fa132c7b005f_prof);

        
        $__internal_719c56d7d0ae307abd2bee2a15573c114d8bc19172de9f069190894fabbfd758->leave($__internal_719c56d7d0ae307abd2bee2a15573c114d8bc19172de9f069190894fabbfd758_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab2f0f80bed6893eae046aff6c9127c8a95d90d9408aac83f97c6d809919efcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab2f0f80bed6893eae046aff6c9127c8a95d90d9408aac83f97c6d809919efcf->enter($__internal_ab2f0f80bed6893eae046aff6c9127c8a95d90d9408aac83f97c6d809919efcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59a5352f75d5aa55f52ca762516a6bc894e0304f84b6e172611b008ba7c78458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a5352f75d5aa55f52ca762516a6bc894e0304f84b6e172611b008ba7c78458->enter($__internal_59a5352f75d5aa55f52ca762516a6bc894e0304f84b6e172611b008ba7c78458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_59a5352f75d5aa55f52ca762516a6bc894e0304f84b6e172611b008ba7c78458->leave($__internal_59a5352f75d5aa55f52ca762516a6bc894e0304f84b6e172611b008ba7c78458_prof);

        
        $__internal_ab2f0f80bed6893eae046aff6c9127c8a95d90d9408aac83f97c6d809919efcf->leave($__internal_ab2f0f80bed6893eae046aff6c9127c8a95d90d9408aac83f97c6d809919efcf_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
