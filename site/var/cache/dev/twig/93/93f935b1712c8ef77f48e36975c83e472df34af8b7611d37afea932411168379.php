<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_bf7671074708d373bc64c55a6cea35982403190cfb3f1e23067bdff532e87cf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbb4962c0fe8d801abad05f439bc21036fd470f976c2395432733a23639626a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbb4962c0fe8d801abad05f439bc21036fd470f976c2395432733a23639626a2->enter($__internal_bbb4962c0fe8d801abad05f439bc21036fd470f976c2395432733a23639626a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_a81208374f3d930bbc854382e700db605eec6f1168d97c964c76e52c8836a2af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81208374f3d930bbc854382e700db605eec6f1168d97c964c76e52c8836a2af->enter($__internal_a81208374f3d930bbc854382e700db605eec6f1168d97c964c76e52c8836a2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbb4962c0fe8d801abad05f439bc21036fd470f976c2395432733a23639626a2->leave($__internal_bbb4962c0fe8d801abad05f439bc21036fd470f976c2395432733a23639626a2_prof);

        
        $__internal_a81208374f3d930bbc854382e700db605eec6f1168d97c964c76e52c8836a2af->leave($__internal_a81208374f3d930bbc854382e700db605eec6f1168d97c964c76e52c8836a2af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_375f0d53e080d4e13523fb039da02404d32c64c2c061271920bff467fb281d50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_375f0d53e080d4e13523fb039da02404d32c64c2c061271920bff467fb281d50->enter($__internal_375f0d53e080d4e13523fb039da02404d32c64c2c061271920bff467fb281d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9dbe6644bad43bc50c5e5bb11b3f6c31aebd40d9a459504423e1d8bfb8d114fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dbe6644bad43bc50c5e5bb11b3f6c31aebd40d9a459504423e1d8bfb8d114fe->enter($__internal_9dbe6644bad43bc50c5e5bb11b3f6c31aebd40d9a459504423e1d8bfb8d114fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9dbe6644bad43bc50c5e5bb11b3f6c31aebd40d9a459504423e1d8bfb8d114fe->leave($__internal_9dbe6644bad43bc50c5e5bb11b3f6c31aebd40d9a459504423e1d8bfb8d114fe_prof);

        
        $__internal_375f0d53e080d4e13523fb039da02404d32c64c2c061271920bff467fb281d50->leave($__internal_375f0d53e080d4e13523fb039da02404d32c64c2c061271920bff467fb281d50_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd18fa5dfe0269fe933eeb2e287d4968b384611e71ca49af4b56b9dc9d266a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd18fa5dfe0269fe933eeb2e287d4968b384611e71ca49af4b56b9dc9d266a56->enter($__internal_fd18fa5dfe0269fe933eeb2e287d4968b384611e71ca49af4b56b9dc9d266a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_769c94d866766a2421246f64b6ea82b9eeb040e4dff87e4024d36318401191e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_769c94d866766a2421246f64b6ea82b9eeb040e4dff87e4024d36318401191e2->enter($__internal_769c94d866766a2421246f64b6ea82b9eeb040e4dff87e4024d36318401191e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_769c94d866766a2421246f64b6ea82b9eeb040e4dff87e4024d36318401191e2->leave($__internal_769c94d866766a2421246f64b6ea82b9eeb040e4dff87e4024d36318401191e2_prof);

        
        $__internal_fd18fa5dfe0269fe933eeb2e287d4968b384611e71ca49af4b56b9dc9d266a56->leave($__internal_fd18fa5dfe0269fe933eeb2e287d4968b384611e71ca49af4b56b9dc9d266a56_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed22261e20d1024aaad0274a7d77b1c583c84af934113361f666afe59374d426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed22261e20d1024aaad0274a7d77b1c583c84af934113361f666afe59374d426->enter($__internal_ed22261e20d1024aaad0274a7d77b1c583c84af934113361f666afe59374d426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4985d9d7c4be6359088bc8f0105d4654f58ef80912dc308bd3e594ddf76de4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4985d9d7c4be6359088bc8f0105d4654f58ef80912dc308bd3e594ddf76de4e9->enter($__internal_4985d9d7c4be6359088bc8f0105d4654f58ef80912dc308bd3e594ddf76de4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4985d9d7c4be6359088bc8f0105d4654f58ef80912dc308bd3e594ddf76de4e9->leave($__internal_4985d9d7c4be6359088bc8f0105d4654f58ef80912dc308bd3e594ddf76de4e9_prof);

        
        $__internal_ed22261e20d1024aaad0274a7d77b1c583c84af934113361f666afe59374d426->leave($__internal_ed22261e20d1024aaad0274a7d77b1c583c84af934113361f666afe59374d426_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
