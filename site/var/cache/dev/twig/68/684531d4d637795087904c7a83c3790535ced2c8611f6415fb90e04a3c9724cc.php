<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f135fcc9c859e593c2ad6b4f6ea9321094ebdd77ec5d005d4bc6f1212203f014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_3c19c726df1add75c57e03938f871432f5da885b4acbee4d9174aeaa323e4c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c19c726df1add75c57e03938f871432f5da885b4acbee4d9174aeaa323e4c53->enter($__internal_3c19c726df1add75c57e03938f871432f5da885b4acbee4d9174aeaa323e4c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_364a4219a530704cb046568fc6781a52f5831b3d6add5d7bcdaf0aa7cc8036f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364a4219a530704cb046568fc6781a52f5831b3d6add5d7bcdaf0aa7cc8036f2->enter($__internal_364a4219a530704cb046568fc6781a52f5831b3d6add5d7bcdaf0aa7cc8036f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c19c726df1add75c57e03938f871432f5da885b4acbee4d9174aeaa323e4c53->leave($__internal_3c19c726df1add75c57e03938f871432f5da885b4acbee4d9174aeaa323e4c53_prof);

        
        $__internal_364a4219a530704cb046568fc6781a52f5831b3d6add5d7bcdaf0aa7cc8036f2->leave($__internal_364a4219a530704cb046568fc6781a52f5831b3d6add5d7bcdaf0aa7cc8036f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3623dc5fb9e412812e13608818c33661382f84002abc80c77ef2a1d93b07f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3623dc5fb9e412812e13608818c33661382f84002abc80c77ef2a1d93b07f8f->enter($__internal_c3623dc5fb9e412812e13608818c33661382f84002abc80c77ef2a1d93b07f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31d63aa0d2ee21ea5f91f29f2bcf575cecdf9789735d03eb8a2b4aebde58ef56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d63aa0d2ee21ea5f91f29f2bcf575cecdf9789735d03eb8a2b4aebde58ef56->enter($__internal_31d63aa0d2ee21ea5f91f29f2bcf575cecdf9789735d03eb8a2b4aebde58ef56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_31d63aa0d2ee21ea5f91f29f2bcf575cecdf9789735d03eb8a2b4aebde58ef56->leave($__internal_31d63aa0d2ee21ea5f91f29f2bcf575cecdf9789735d03eb8a2b4aebde58ef56_prof);

        
        $__internal_c3623dc5fb9e412812e13608818c33661382f84002abc80c77ef2a1d93b07f8f->leave($__internal_c3623dc5fb9e412812e13608818c33661382f84002abc80c77ef2a1d93b07f8f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4aab2abf6ea50c32c571b0be8ec7614e2f9c5a78917b9eba92a6b5412667f07e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aab2abf6ea50c32c571b0be8ec7614e2f9c5a78917b9eba92a6b5412667f07e->enter($__internal_4aab2abf6ea50c32c571b0be8ec7614e2f9c5a78917b9eba92a6b5412667f07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_68cae3ce7e6d8cc9700e2ef3206663f2ce17ad6884321cd46652a7067d02f654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68cae3ce7e6d8cc9700e2ef3206663f2ce17ad6884321cd46652a7067d02f654->enter($__internal_68cae3ce7e6d8cc9700e2ef3206663f2ce17ad6884321cd46652a7067d02f654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_68cae3ce7e6d8cc9700e2ef3206663f2ce17ad6884321cd46652a7067d02f654->leave($__internal_68cae3ce7e6d8cc9700e2ef3206663f2ce17ad6884321cd46652a7067d02f654_prof);

        
        $__internal_4aab2abf6ea50c32c571b0be8ec7614e2f9c5a78917b9eba92a6b5412667f07e->leave($__internal_4aab2abf6ea50c32c571b0be8ec7614e2f9c5a78917b9eba92a6b5412667f07e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
