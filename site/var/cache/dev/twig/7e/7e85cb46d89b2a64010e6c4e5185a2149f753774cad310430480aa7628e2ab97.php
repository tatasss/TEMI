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
        $__internal_779a71f897e627c1f281e2ddd06ad569fac595c9d8664294f29277a584b276c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_779a71f897e627c1f281e2ddd06ad569fac595c9d8664294f29277a584b276c7->enter($__internal_779a71f897e627c1f281e2ddd06ad569fac595c9d8664294f29277a584b276c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_d946d6ace8394840583578ebcde7840819248560691640eade34f4edb79cf2f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d946d6ace8394840583578ebcde7840819248560691640eade34f4edb79cf2f6->enter($__internal_d946d6ace8394840583578ebcde7840819248560691640eade34f4edb79cf2f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_779a71f897e627c1f281e2ddd06ad569fac595c9d8664294f29277a584b276c7->leave($__internal_779a71f897e627c1f281e2ddd06ad569fac595c9d8664294f29277a584b276c7_prof);

        
        $__internal_d946d6ace8394840583578ebcde7840819248560691640eade34f4edb79cf2f6->leave($__internal_d946d6ace8394840583578ebcde7840819248560691640eade34f4edb79cf2f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d95858838f88b7f72911d88f578de72d7011967e0556abbe9114b8b20fe3d1fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d95858838f88b7f72911d88f578de72d7011967e0556abbe9114b8b20fe3d1fc->enter($__internal_d95858838f88b7f72911d88f578de72d7011967e0556abbe9114b8b20fe3d1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b28ff5c43bd768813c91e61d89127f0957ec203d394a4a56904681bf2c4e514b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b28ff5c43bd768813c91e61d89127f0957ec203d394a4a56904681bf2c4e514b->enter($__internal_b28ff5c43bd768813c91e61d89127f0957ec203d394a4a56904681bf2c4e514b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b28ff5c43bd768813c91e61d89127f0957ec203d394a4a56904681bf2c4e514b->leave($__internal_b28ff5c43bd768813c91e61d89127f0957ec203d394a4a56904681bf2c4e514b_prof);

        
        $__internal_d95858838f88b7f72911d88f578de72d7011967e0556abbe9114b8b20fe3d1fc->leave($__internal_d95858838f88b7f72911d88f578de72d7011967e0556abbe9114b8b20fe3d1fc_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_56c06ab871db40498fde63c705a38afb981751ab4053206e33283c8c4659e4fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56c06ab871db40498fde63c705a38afb981751ab4053206e33283c8c4659e4fd->enter($__internal_56c06ab871db40498fde63c705a38afb981751ab4053206e33283c8c4659e4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d9646e65a77d069777c437fb2caf4b7cf7295efa6c228b4891f57a36d317935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9646e65a77d069777c437fb2caf4b7cf7295efa6c228b4891f57a36d317935->enter($__internal_7d9646e65a77d069777c437fb2caf4b7cf7295efa6c228b4891f57a36d317935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7d9646e65a77d069777c437fb2caf4b7cf7295efa6c228b4891f57a36d317935->leave($__internal_7d9646e65a77d069777c437fb2caf4b7cf7295efa6c228b4891f57a36d317935_prof);

        
        $__internal_56c06ab871db40498fde63c705a38afb981751ab4053206e33283c8c4659e4fd->leave($__internal_56c06ab871db40498fde63c705a38afb981751ab4053206e33283c8c4659e4fd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9806b6fe96c7cd64da359815c3da7784b5b0c02b262dc7832615cf02e2845964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9806b6fe96c7cd64da359815c3da7784b5b0c02b262dc7832615cf02e2845964->enter($__internal_9806b6fe96c7cd64da359815c3da7784b5b0c02b262dc7832615cf02e2845964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_430f81a74b855d5faf4d12f8af29a584d63c1c81c14d4d8d028eb2ca4ab2cf09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430f81a74b855d5faf4d12f8af29a584d63c1c81c14d4d8d028eb2ca4ab2cf09->enter($__internal_430f81a74b855d5faf4d12f8af29a584d63c1c81c14d4d8d028eb2ca4ab2cf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_430f81a74b855d5faf4d12f8af29a584d63c1c81c14d4d8d028eb2ca4ab2cf09->leave($__internal_430f81a74b855d5faf4d12f8af29a584d63c1c81c14d4d8d028eb2ca4ab2cf09_prof);

        
        $__internal_9806b6fe96c7cd64da359815c3da7784b5b0c02b262dc7832615cf02e2845964->leave($__internal_9806b6fe96c7cd64da359815c3da7784b5b0c02b262dc7832615cf02e2845964_prof);

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
