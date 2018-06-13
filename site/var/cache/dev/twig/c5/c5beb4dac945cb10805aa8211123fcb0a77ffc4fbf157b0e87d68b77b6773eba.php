<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_14476ff75440635dcf97740763a551518bbcfa14b67b150c927240a3daa337fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2781b9902e5ed33c3d087aed1536f820339b227139e244ed13e1b6214891d769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2781b9902e5ed33c3d087aed1536f820339b227139e244ed13e1b6214891d769->enter($__internal_2781b9902e5ed33c3d087aed1536f820339b227139e244ed13e1b6214891d769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e6f11322a616862558b138c8e40f2131270f7e39073d311fc2dca66a285d7879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f11322a616862558b138c8e40f2131270f7e39073d311fc2dca66a285d7879->enter($__internal_e6f11322a616862558b138c8e40f2131270f7e39073d311fc2dca66a285d7879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2781b9902e5ed33c3d087aed1536f820339b227139e244ed13e1b6214891d769->leave($__internal_2781b9902e5ed33c3d087aed1536f820339b227139e244ed13e1b6214891d769_prof);

        
        $__internal_e6f11322a616862558b138c8e40f2131270f7e39073d311fc2dca66a285d7879->leave($__internal_e6f11322a616862558b138c8e40f2131270f7e39073d311fc2dca66a285d7879_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4af2e2b1775a7bcd9db304d0e6edbf06e529ccd15d0d782ee96b32b343da1a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4af2e2b1775a7bcd9db304d0e6edbf06e529ccd15d0d782ee96b32b343da1a35->enter($__internal_4af2e2b1775a7bcd9db304d0e6edbf06e529ccd15d0d782ee96b32b343da1a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bda57c0fa6f2d21b7a88ca7c2f944706e580bdf01e68cab3de4223b950b7aa59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bda57c0fa6f2d21b7a88ca7c2f944706e580bdf01e68cab3de4223b950b7aa59->enter($__internal_bda57c0fa6f2d21b7a88ca7c2f944706e580bdf01e68cab3de4223b950b7aa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_bda57c0fa6f2d21b7a88ca7c2f944706e580bdf01e68cab3de4223b950b7aa59->leave($__internal_bda57c0fa6f2d21b7a88ca7c2f944706e580bdf01e68cab3de4223b950b7aa59_prof);

        
        $__internal_4af2e2b1775a7bcd9db304d0e6edbf06e529ccd15d0d782ee96b32b343da1a35->leave($__internal_4af2e2b1775a7bcd9db304d0e6edbf06e529ccd15d0d782ee96b32b343da1a35_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
