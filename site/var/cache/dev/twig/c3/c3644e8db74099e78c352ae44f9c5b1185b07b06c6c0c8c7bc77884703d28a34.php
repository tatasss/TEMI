<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_b59dc6c72091c9c852636259a4a7e537fd79d7b5f22ac2166e2ba6acd0f2df3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc5df668902fa16b60f4535cc7a35141a6b9fd851f3540a08ea8619cff36fdd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc5df668902fa16b60f4535cc7a35141a6b9fd851f3540a08ea8619cff36fdd6->enter($__internal_fc5df668902fa16b60f4535cc7a35141a6b9fd851f3540a08ea8619cff36fdd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_4131ccf2550d16b879114d60218cb56fa4bba781a65800b37544a868984c9c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4131ccf2550d16b879114d60218cb56fa4bba781a65800b37544a868984c9c11->enter($__internal_4131ccf2550d16b879114d60218cb56fa4bba781a65800b37544a868984c9c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc5df668902fa16b60f4535cc7a35141a6b9fd851f3540a08ea8619cff36fdd6->leave($__internal_fc5df668902fa16b60f4535cc7a35141a6b9fd851f3540a08ea8619cff36fdd6_prof);

        
        $__internal_4131ccf2550d16b879114d60218cb56fa4bba781a65800b37544a868984c9c11->leave($__internal_4131ccf2550d16b879114d60218cb56fa4bba781a65800b37544a868984c9c11_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8bc36c787bd4d22247978ec93e30e061015768edf03ab61ae9051b352c7c823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8bc36c787bd4d22247978ec93e30e061015768edf03ab61ae9051b352c7c823->enter($__internal_c8bc36c787bd4d22247978ec93e30e061015768edf03ab61ae9051b352c7c823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_88c3e3ac31da86089e2e6f354143374697d9936f20b6fee6c9a0a5a0abc5eb93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c3e3ac31da86089e2e6f354143374697d9936f20b6fee6c9a0a5a0abc5eb93->enter($__internal_88c3e3ac31da86089e2e6f354143374697d9936f20b6fee6c9a0a5a0abc5eb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_88c3e3ac31da86089e2e6f354143374697d9936f20b6fee6c9a0a5a0abc5eb93->leave($__internal_88c3e3ac31da86089e2e6f354143374697d9936f20b6fee6c9a0a5a0abc5eb93_prof);

        
        $__internal_c8bc36c787bd4d22247978ec93e30e061015768edf03ab61ae9051b352c7c823->leave($__internal_c8bc36c787bd4d22247978ec93e30e061015768edf03ab61ae9051b352c7c823_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_28f16ae74138d253f199ee41e7bd6dbe6f7bd0ab527aa2f251a0b95f1585696f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f16ae74138d253f199ee41e7bd6dbe6f7bd0ab527aa2f251a0b95f1585696f->enter($__internal_28f16ae74138d253f199ee41e7bd6dbe6f7bd0ab527aa2f251a0b95f1585696f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da6e09f9f5073fe0bb2fa2a26675bf77159931052d04b90ef879647bd6a0fa1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da6e09f9f5073fe0bb2fa2a26675bf77159931052d04b90ef879647bd6a0fa1b->enter($__internal_da6e09f9f5073fe0bb2fa2a26675bf77159931052d04b90ef879647bd6a0fa1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_da6e09f9f5073fe0bb2fa2a26675bf77159931052d04b90ef879647bd6a0fa1b->leave($__internal_da6e09f9f5073fe0bb2fa2a26675bf77159931052d04b90ef879647bd6a0fa1b_prof);

        
        $__internal_28f16ae74138d253f199ee41e7bd6dbe6f7bd0ab527aa2f251a0b95f1585696f->leave($__internal_28f16ae74138d253f199ee41e7bd6dbe6f7bd0ab527aa2f251a0b95f1585696f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
