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
        $__internal_62d6836d7c4bd0703e633e68370449a72d03eb6de6876c63291673b17121cad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62d6836d7c4bd0703e633e68370449a72d03eb6de6876c63291673b17121cad3->enter($__internal_62d6836d7c4bd0703e633e68370449a72d03eb6de6876c63291673b17121cad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_cecda37dffa0b403df1d201273963c6d31339220908bbd9ce19806c041fdfd8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cecda37dffa0b403df1d201273963c6d31339220908bbd9ce19806c041fdfd8b->enter($__internal_cecda37dffa0b403df1d201273963c6d31339220908bbd9ce19806c041fdfd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62d6836d7c4bd0703e633e68370449a72d03eb6de6876c63291673b17121cad3->leave($__internal_62d6836d7c4bd0703e633e68370449a72d03eb6de6876c63291673b17121cad3_prof);

        
        $__internal_cecda37dffa0b403df1d201273963c6d31339220908bbd9ce19806c041fdfd8b->leave($__internal_cecda37dffa0b403df1d201273963c6d31339220908bbd9ce19806c041fdfd8b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3415c62afab8d90f936c313b946127786886f7a0cd91772e630e6a078c48cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3415c62afab8d90f936c313b946127786886f7a0cd91772e630e6a078c48cab->enter($__internal_f3415c62afab8d90f936c313b946127786886f7a0cd91772e630e6a078c48cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d3fe774a6e2ca96fcdd9af08138b40f966a4f8190f13c2939b14d28f53486fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3fe774a6e2ca96fcdd9af08138b40f966a4f8190f13c2939b14d28f53486fa->enter($__internal_8d3fe774a6e2ca96fcdd9af08138b40f966a4f8190f13c2939b14d28f53486fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8d3fe774a6e2ca96fcdd9af08138b40f966a4f8190f13c2939b14d28f53486fa->leave($__internal_8d3fe774a6e2ca96fcdd9af08138b40f966a4f8190f13c2939b14d28f53486fa_prof);

        
        $__internal_f3415c62afab8d90f936c313b946127786886f7a0cd91772e630e6a078c48cab->leave($__internal_f3415c62afab8d90f936c313b946127786886f7a0cd91772e630e6a078c48cab_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ce8d02f5fe1d79cc3e07878ab3f783e87f784986f0b31855976fc4371a20b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce8d02f5fe1d79cc3e07878ab3f783e87f784986f0b31855976fc4371a20b47->enter($__internal_1ce8d02f5fe1d79cc3e07878ab3f783e87f784986f0b31855976fc4371a20b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_658c9e753c6369abe2510b29ccf5c26b7b897d4ecf5f3fa59e0f176f439ef114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658c9e753c6369abe2510b29ccf5c26b7b897d4ecf5f3fa59e0f176f439ef114->enter($__internal_658c9e753c6369abe2510b29ccf5c26b7b897d4ecf5f3fa59e0f176f439ef114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_658c9e753c6369abe2510b29ccf5c26b7b897d4ecf5f3fa59e0f176f439ef114->leave($__internal_658c9e753c6369abe2510b29ccf5c26b7b897d4ecf5f3fa59e0f176f439ef114_prof);

        
        $__internal_1ce8d02f5fe1d79cc3e07878ab3f783e87f784986f0b31855976fc4371a20b47->leave($__internal_1ce8d02f5fe1d79cc3e07878ab3f783e87f784986f0b31855976fc4371a20b47_prof);

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
