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
        $__internal_462018d99640759276366900714b5614cef9d7df284fd2a9f1dcb76ed79ca8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462018d99640759276366900714b5614cef9d7df284fd2a9f1dcb76ed79ca8e5->enter($__internal_462018d99640759276366900714b5614cef9d7df284fd2a9f1dcb76ed79ca8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_59631e76f1ed4d5c85363da128ee77a74252513a5f34d986f259126493293b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59631e76f1ed4d5c85363da128ee77a74252513a5f34d986f259126493293b26->enter($__internal_59631e76f1ed4d5c85363da128ee77a74252513a5f34d986f259126493293b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_462018d99640759276366900714b5614cef9d7df284fd2a9f1dcb76ed79ca8e5->leave($__internal_462018d99640759276366900714b5614cef9d7df284fd2a9f1dcb76ed79ca8e5_prof);

        
        $__internal_59631e76f1ed4d5c85363da128ee77a74252513a5f34d986f259126493293b26->leave($__internal_59631e76f1ed4d5c85363da128ee77a74252513a5f34d986f259126493293b26_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29311d92240f79346372965e689032053cb07afb98e94e0726e55c657a8e8239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29311d92240f79346372965e689032053cb07afb98e94e0726e55c657a8e8239->enter($__internal_29311d92240f79346372965e689032053cb07afb98e94e0726e55c657a8e8239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a4cdd77952ebf99c4a48f7daff07dfdbafa36933b49aacffc3abfa677f93fa8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4cdd77952ebf99c4a48f7daff07dfdbafa36933b49aacffc3abfa677f93fa8b->enter($__internal_a4cdd77952ebf99c4a48f7daff07dfdbafa36933b49aacffc3abfa677f93fa8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a4cdd77952ebf99c4a48f7daff07dfdbafa36933b49aacffc3abfa677f93fa8b->leave($__internal_a4cdd77952ebf99c4a48f7daff07dfdbafa36933b49aacffc3abfa677f93fa8b_prof);

        
        $__internal_29311d92240f79346372965e689032053cb07afb98e94e0726e55c657a8e8239->leave($__internal_29311d92240f79346372965e689032053cb07afb98e94e0726e55c657a8e8239_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7196884a0808f24d171cfb79ef5099eaee1f4567cdf84076762ecfe9369fcef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7196884a0808f24d171cfb79ef5099eaee1f4567cdf84076762ecfe9369fcef->enter($__internal_a7196884a0808f24d171cfb79ef5099eaee1f4567cdf84076762ecfe9369fcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6de485305db2a595aea647a5a2a3a4adc119b17b00d45dd236df51304de4c444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de485305db2a595aea647a5a2a3a4adc119b17b00d45dd236df51304de4c444->enter($__internal_6de485305db2a595aea647a5a2a3a4adc119b17b00d45dd236df51304de4c444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6de485305db2a595aea647a5a2a3a4adc119b17b00d45dd236df51304de4c444->leave($__internal_6de485305db2a595aea647a5a2a3a4adc119b17b00d45dd236df51304de4c444_prof);

        
        $__internal_a7196884a0808f24d171cfb79ef5099eaee1f4567cdf84076762ecfe9369fcef->leave($__internal_a7196884a0808f24d171cfb79ef5099eaee1f4567cdf84076762ecfe9369fcef_prof);

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
