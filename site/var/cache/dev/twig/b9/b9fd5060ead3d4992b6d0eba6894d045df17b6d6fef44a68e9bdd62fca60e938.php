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
        $__internal_3af9045dbc2a5900ab25c0cbb3836a3f5af82a56b36628b249a04162e9c57758 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af9045dbc2a5900ab25c0cbb3836a3f5af82a56b36628b249a04162e9c57758->enter($__internal_3af9045dbc2a5900ab25c0cbb3836a3f5af82a56b36628b249a04162e9c57758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_09ebd3ab6ce2acbe8d97b81ec3b4b36692f9389add0024a8bc523881fbb6fa5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ebd3ab6ce2acbe8d97b81ec3b4b36692f9389add0024a8bc523881fbb6fa5b->enter($__internal_09ebd3ab6ce2acbe8d97b81ec3b4b36692f9389add0024a8bc523881fbb6fa5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3af9045dbc2a5900ab25c0cbb3836a3f5af82a56b36628b249a04162e9c57758->leave($__internal_3af9045dbc2a5900ab25c0cbb3836a3f5af82a56b36628b249a04162e9c57758_prof);

        
        $__internal_09ebd3ab6ce2acbe8d97b81ec3b4b36692f9389add0024a8bc523881fbb6fa5b->leave($__internal_09ebd3ab6ce2acbe8d97b81ec3b4b36692f9389add0024a8bc523881fbb6fa5b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_34d184aa3b14a14b1ebc7b0bb04964b40b26b89514079c1ba189adcbbbe65e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d184aa3b14a14b1ebc7b0bb04964b40b26b89514079c1ba189adcbbbe65e67->enter($__internal_34d184aa3b14a14b1ebc7b0bb04964b40b26b89514079c1ba189adcbbbe65e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e2c14097b15658458beb5787dd3aee37a129778e3f43b7776cb935158f70d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2c14097b15658458beb5787dd3aee37a129778e3f43b7776cb935158f70d87->enter($__internal_2e2c14097b15658458beb5787dd3aee37a129778e3f43b7776cb935158f70d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2e2c14097b15658458beb5787dd3aee37a129778e3f43b7776cb935158f70d87->leave($__internal_2e2c14097b15658458beb5787dd3aee37a129778e3f43b7776cb935158f70d87_prof);

        
        $__internal_34d184aa3b14a14b1ebc7b0bb04964b40b26b89514079c1ba189adcbbbe65e67->leave($__internal_34d184aa3b14a14b1ebc7b0bb04964b40b26b89514079c1ba189adcbbbe65e67_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d16ff8f0c6bb59e8986a26bde5f5fbeb5c38c09fe524bb3385e5fb1ad088fef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d16ff8f0c6bb59e8986a26bde5f5fbeb5c38c09fe524bb3385e5fb1ad088fef5->enter($__internal_d16ff8f0c6bb59e8986a26bde5f5fbeb5c38c09fe524bb3385e5fb1ad088fef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f130b3a93108200bcf15a32cf2f117e560c267e0154fb72c02ed32b13395fbfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f130b3a93108200bcf15a32cf2f117e560c267e0154fb72c02ed32b13395fbfd->enter($__internal_f130b3a93108200bcf15a32cf2f117e560c267e0154fb72c02ed32b13395fbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f130b3a93108200bcf15a32cf2f117e560c267e0154fb72c02ed32b13395fbfd->leave($__internal_f130b3a93108200bcf15a32cf2f117e560c267e0154fb72c02ed32b13395fbfd_prof);

        
        $__internal_d16ff8f0c6bb59e8986a26bde5f5fbeb5c38c09fe524bb3385e5fb1ad088fef5->leave($__internal_d16ff8f0c6bb59e8986a26bde5f5fbeb5c38c09fe524bb3385e5fb1ad088fef5_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
