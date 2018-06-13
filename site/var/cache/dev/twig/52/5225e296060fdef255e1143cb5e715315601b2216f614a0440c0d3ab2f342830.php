<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_dbbad891d282d4a7141ddd5efc38ad469747b1dce2ccf29384fe774004b3bcac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_6a2f0523d3f944e8579e6c6eeca8800510bf403415af71af171f5a6b30bb9dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2f0523d3f944e8579e6c6eeca8800510bf403415af71af171f5a6b30bb9dc2->enter($__internal_6a2f0523d3f944e8579e6c6eeca8800510bf403415af71af171f5a6b30bb9dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_dd80394a84922fa7d86a2de4368a5f81a9872604afe16983a6265b521adafbe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd80394a84922fa7d86a2de4368a5f81a9872604afe16983a6265b521adafbe1->enter($__internal_dd80394a84922fa7d86a2de4368a5f81a9872604afe16983a6265b521adafbe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a2f0523d3f944e8579e6c6eeca8800510bf403415af71af171f5a6b30bb9dc2->leave($__internal_6a2f0523d3f944e8579e6c6eeca8800510bf403415af71af171f5a6b30bb9dc2_prof);

        
        $__internal_dd80394a84922fa7d86a2de4368a5f81a9872604afe16983a6265b521adafbe1->leave($__internal_dd80394a84922fa7d86a2de4368a5f81a9872604afe16983a6265b521adafbe1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c51ec1d762f0fdd2f311d1626cef984c340d0710eba8da569af6436ed6399fa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c51ec1d762f0fdd2f311d1626cef984c340d0710eba8da569af6436ed6399fa3->enter($__internal_c51ec1d762f0fdd2f311d1626cef984c340d0710eba8da569af6436ed6399fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_41c59a99e06e1a4f2f4f872290d6f8500b1c6d5b35a207cea4ab23ef5616a424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c59a99e06e1a4f2f4f872290d6f8500b1c6d5b35a207cea4ab23ef5616a424->enter($__internal_41c59a99e06e1a4f2f4f872290d6f8500b1c6d5b35a207cea4ab23ef5616a424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_41c59a99e06e1a4f2f4f872290d6f8500b1c6d5b35a207cea4ab23ef5616a424->leave($__internal_41c59a99e06e1a4f2f4f872290d6f8500b1c6d5b35a207cea4ab23ef5616a424_prof);

        
        $__internal_c51ec1d762f0fdd2f311d1626cef984c340d0710eba8da569af6436ed6399fa3->leave($__internal_c51ec1d762f0fdd2f311d1626cef984c340d0710eba8da569af6436ed6399fa3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
