<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_0f4745c1714d5cfd72c08b9e6624032ae6f9bbf0aa8baed3941b80db0bc0a4d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_fc2b21fd375d6268ecef3cfca950215153da5868b9770d3edada0d366fd3d200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc2b21fd375d6268ecef3cfca950215153da5868b9770d3edada0d366fd3d200->enter($__internal_fc2b21fd375d6268ecef3cfca950215153da5868b9770d3edada0d366fd3d200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_73553c882d451843710ab9e1478503f9b884d0c5d5af9c8b278c7e6a0dd5c304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73553c882d451843710ab9e1478503f9b884d0c5d5af9c8b278c7e6a0dd5c304->enter($__internal_73553c882d451843710ab9e1478503f9b884d0c5d5af9c8b278c7e6a0dd5c304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc2b21fd375d6268ecef3cfca950215153da5868b9770d3edada0d366fd3d200->leave($__internal_fc2b21fd375d6268ecef3cfca950215153da5868b9770d3edada0d366fd3d200_prof);

        
        $__internal_73553c882d451843710ab9e1478503f9b884d0c5d5af9c8b278c7e6a0dd5c304->leave($__internal_73553c882d451843710ab9e1478503f9b884d0c5d5af9c8b278c7e6a0dd5c304_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7cd2193e5cc80a22a1a072903e6a35328e7f4d4d4cea83790dbf08c0ea78338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7cd2193e5cc80a22a1a072903e6a35328e7f4d4d4cea83790dbf08c0ea78338->enter($__internal_f7cd2193e5cc80a22a1a072903e6a35328e7f4d4d4cea83790dbf08c0ea78338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7042a7a214e9ca59771744843d99d2cbd20a1c5a626266d91f3db6e9cdd3c23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7042a7a214e9ca59771744843d99d2cbd20a1c5a626266d91f3db6e9cdd3c23c->enter($__internal_7042a7a214e9ca59771744843d99d2cbd20a1c5a626266d91f3db6e9cdd3c23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7042a7a214e9ca59771744843d99d2cbd20a1c5a626266d91f3db6e9cdd3c23c->leave($__internal_7042a7a214e9ca59771744843d99d2cbd20a1c5a626266d91f3db6e9cdd3c23c_prof);

        
        $__internal_f7cd2193e5cc80a22a1a072903e6a35328e7f4d4d4cea83790dbf08c0ea78338->leave($__internal_f7cd2193e5cc80a22a1a072903e6a35328e7f4d4d4cea83790dbf08c0ea78338_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fc1cc160476541076dfe74eab74cea4c1923ddd1e5358296798e999f1b85f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fc1cc160476541076dfe74eab74cea4c1923ddd1e5358296798e999f1b85f2b->enter($__internal_7fc1cc160476541076dfe74eab74cea4c1923ddd1e5358296798e999f1b85f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c07d929927a3fd92a600acbcf0d09aeccfde78b1d90afe57f2a121f49c192c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c07d929927a3fd92a600acbcf0d09aeccfde78b1d90afe57f2a121f49c192c4->enter($__internal_0c07d929927a3fd92a600acbcf0d09aeccfde78b1d90afe57f2a121f49c192c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0c07d929927a3fd92a600acbcf0d09aeccfde78b1d90afe57f2a121f49c192c4->leave($__internal_0c07d929927a3fd92a600acbcf0d09aeccfde78b1d90afe57f2a121f49c192c4_prof);

        
        $__internal_7fc1cc160476541076dfe74eab74cea4c1923ddd1e5358296798e999f1b85f2b->leave($__internal_7fc1cc160476541076dfe74eab74cea4c1923ddd1e5358296798e999f1b85f2b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
