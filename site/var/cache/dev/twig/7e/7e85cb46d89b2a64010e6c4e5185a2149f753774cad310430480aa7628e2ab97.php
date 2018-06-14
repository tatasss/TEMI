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
        $__internal_a12d59b8d807802dc911b2593f50787c044b9586a210776c2cea6e02c17f90a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a12d59b8d807802dc911b2593f50787c044b9586a210776c2cea6e02c17f90a2->enter($__internal_a12d59b8d807802dc911b2593f50787c044b9586a210776c2cea6e02c17f90a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_acab012b48639c885683805e142976de20154ab72de717db6941210606568be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acab012b48639c885683805e142976de20154ab72de717db6941210606568be7->enter($__internal_acab012b48639c885683805e142976de20154ab72de717db6941210606568be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a12d59b8d807802dc911b2593f50787c044b9586a210776c2cea6e02c17f90a2->leave($__internal_a12d59b8d807802dc911b2593f50787c044b9586a210776c2cea6e02c17f90a2_prof);

        
        $__internal_acab012b48639c885683805e142976de20154ab72de717db6941210606568be7->leave($__internal_acab012b48639c885683805e142976de20154ab72de717db6941210606568be7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e1ea7ef3dfcacea434db3db9dc3d76d2db3aa42b14754a7ac66e79f6eaf74ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e1ea7ef3dfcacea434db3db9dc3d76d2db3aa42b14754a7ac66e79f6eaf74ec->enter($__internal_4e1ea7ef3dfcacea434db3db9dc3d76d2db3aa42b14754a7ac66e79f6eaf74ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_46c32f1fcae01efed47bc262b7f840900aa685da4165dd5264df4c81964279d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46c32f1fcae01efed47bc262b7f840900aa685da4165dd5264df4c81964279d3->enter($__internal_46c32f1fcae01efed47bc262b7f840900aa685da4165dd5264df4c81964279d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_46c32f1fcae01efed47bc262b7f840900aa685da4165dd5264df4c81964279d3->leave($__internal_46c32f1fcae01efed47bc262b7f840900aa685da4165dd5264df4c81964279d3_prof);

        
        $__internal_4e1ea7ef3dfcacea434db3db9dc3d76d2db3aa42b14754a7ac66e79f6eaf74ec->leave($__internal_4e1ea7ef3dfcacea434db3db9dc3d76d2db3aa42b14754a7ac66e79f6eaf74ec_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d40a617dca03a14a3266c644f461512f40b0b51b8be865455d52746bff0548f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d40a617dca03a14a3266c644f461512f40b0b51b8be865455d52746bff0548f2->enter($__internal_d40a617dca03a14a3266c644f461512f40b0b51b8be865455d52746bff0548f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f13b608e1843ff26c903266d2792f35f1e28cc8850ba8db6ec2b0e2eb372ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f13b608e1843ff26c903266d2792f35f1e28cc8850ba8db6ec2b0e2eb372ba1->enter($__internal_4f13b608e1843ff26c903266d2792f35f1e28cc8850ba8db6ec2b0e2eb372ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4f13b608e1843ff26c903266d2792f35f1e28cc8850ba8db6ec2b0e2eb372ba1->leave($__internal_4f13b608e1843ff26c903266d2792f35f1e28cc8850ba8db6ec2b0e2eb372ba1_prof);

        
        $__internal_d40a617dca03a14a3266c644f461512f40b0b51b8be865455d52746bff0548f2->leave($__internal_d40a617dca03a14a3266c644f461512f40b0b51b8be865455d52746bff0548f2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_4594dfcfe0a306ef0657297704e75a6e67f41c1e3302b9b9f04a2889da080d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4594dfcfe0a306ef0657297704e75a6e67f41c1e3302b9b9f04a2889da080d65->enter($__internal_4594dfcfe0a306ef0657297704e75a6e67f41c1e3302b9b9f04a2889da080d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_10d88d964deec02ffcdb6e870fcf2a6d2615c2187e931e3eff17adcc287ff722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d88d964deec02ffcdb6e870fcf2a6d2615c2187e931e3eff17adcc287ff722->enter($__internal_10d88d964deec02ffcdb6e870fcf2a6d2615c2187e931e3eff17adcc287ff722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_10d88d964deec02ffcdb6e870fcf2a6d2615c2187e931e3eff17adcc287ff722->leave($__internal_10d88d964deec02ffcdb6e870fcf2a6d2615c2187e931e3eff17adcc287ff722_prof);

        
        $__internal_4594dfcfe0a306ef0657297704e75a6e67f41c1e3302b9b9f04a2889da080d65->leave($__internal_4594dfcfe0a306ef0657297704e75a6e67f41c1e3302b9b9f04a2889da080d65_prof);

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
