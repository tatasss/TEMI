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
        $__internal_13a972480eab02b40802eb744f1d1f11280bc97aa584b3d9d85911e39afe2285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a972480eab02b40802eb744f1d1f11280bc97aa584b3d9d85911e39afe2285->enter($__internal_13a972480eab02b40802eb744f1d1f11280bc97aa584b3d9d85911e39afe2285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_40b651b1d580ca1729f15479de65e7d1fe6863d6277cf1b3abe98cb8721e39d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40b651b1d580ca1729f15479de65e7d1fe6863d6277cf1b3abe98cb8721e39d2->enter($__internal_40b651b1d580ca1729f15479de65e7d1fe6863d6277cf1b3abe98cb8721e39d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13a972480eab02b40802eb744f1d1f11280bc97aa584b3d9d85911e39afe2285->leave($__internal_13a972480eab02b40802eb744f1d1f11280bc97aa584b3d9d85911e39afe2285_prof);

        
        $__internal_40b651b1d580ca1729f15479de65e7d1fe6863d6277cf1b3abe98cb8721e39d2->leave($__internal_40b651b1d580ca1729f15479de65e7d1fe6863d6277cf1b3abe98cb8721e39d2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c52afefce99ae9e4460a67d379c9f33ad7bae0423ed1159621d489509af2cd3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52afefce99ae9e4460a67d379c9f33ad7bae0423ed1159621d489509af2cd3f->enter($__internal_c52afefce99ae9e4460a67d379c9f33ad7bae0423ed1159621d489509af2cd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c55e520ff2b90353142b446dfccee854e0df6d7688c9d047b34e1f4786600515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55e520ff2b90353142b446dfccee854e0df6d7688c9d047b34e1f4786600515->enter($__internal_c55e520ff2b90353142b446dfccee854e0df6d7688c9d047b34e1f4786600515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c55e520ff2b90353142b446dfccee854e0df6d7688c9d047b34e1f4786600515->leave($__internal_c55e520ff2b90353142b446dfccee854e0df6d7688c9d047b34e1f4786600515_prof);

        
        $__internal_c52afefce99ae9e4460a67d379c9f33ad7bae0423ed1159621d489509af2cd3f->leave($__internal_c52afefce99ae9e4460a67d379c9f33ad7bae0423ed1159621d489509af2cd3f_prof);

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
