<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c70c05b27d37c0edea3d3826acbd9420e04844a6a0d01d5bf50a4dfaff34b6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_5be03f2a668cb734d0805c2bb59dcb0059d1cd583dbf8dc69b9bd8e8f39096d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be03f2a668cb734d0805c2bb59dcb0059d1cd583dbf8dc69b9bd8e8f39096d9->enter($__internal_5be03f2a668cb734d0805c2bb59dcb0059d1cd583dbf8dc69b9bd8e8f39096d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_566607d22f873948a881a1b6eaaca083a24e2f0af9b0abe6a84c2f67026d27c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_566607d22f873948a881a1b6eaaca083a24e2f0af9b0abe6a84c2f67026d27c5->enter($__internal_566607d22f873948a881a1b6eaaca083a24e2f0af9b0abe6a84c2f67026d27c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5be03f2a668cb734d0805c2bb59dcb0059d1cd583dbf8dc69b9bd8e8f39096d9->leave($__internal_5be03f2a668cb734d0805c2bb59dcb0059d1cd583dbf8dc69b9bd8e8f39096d9_prof);

        
        $__internal_566607d22f873948a881a1b6eaaca083a24e2f0af9b0abe6a84c2f67026d27c5->leave($__internal_566607d22f873948a881a1b6eaaca083a24e2f0af9b0abe6a84c2f67026d27c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b9929813017c0ea0ea1256ff1793c45f3622427cd2fd4f19543d71dbd3ea4c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9929813017c0ea0ea1256ff1793c45f3622427cd2fd4f19543d71dbd3ea4c33->enter($__internal_b9929813017c0ea0ea1256ff1793c45f3622427cd2fd4f19543d71dbd3ea4c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_759db41c3cec8bc79cc84b427e52b6e24b323e940f62ed82ab87b7909a0e1441 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_759db41c3cec8bc79cc84b427e52b6e24b323e940f62ed82ab87b7909a0e1441->enter($__internal_759db41c3cec8bc79cc84b427e52b6e24b323e940f62ed82ab87b7909a0e1441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_759db41c3cec8bc79cc84b427e52b6e24b323e940f62ed82ab87b7909a0e1441->leave($__internal_759db41c3cec8bc79cc84b427e52b6e24b323e940f62ed82ab87b7909a0e1441_prof);

        
        $__internal_b9929813017c0ea0ea1256ff1793c45f3622427cd2fd4f19543d71dbd3ea4c33->leave($__internal_b9929813017c0ea0ea1256ff1793c45f3622427cd2fd4f19543d71dbd3ea4c33_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9c785812bc77734acce5717dd09e9e7958c5467bd7d765075d18fc777d2c52a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c785812bc77734acce5717dd09e9e7958c5467bd7d765075d18fc777d2c52a9->enter($__internal_9c785812bc77734acce5717dd09e9e7958c5467bd7d765075d18fc777d2c52a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4e4c55d3f6c66eb50fc1bff6967202a2f3311bc94078df293fd9b4d7dd8dc736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4c55d3f6c66eb50fc1bff6967202a2f3311bc94078df293fd9b4d7dd8dc736->enter($__internal_4e4c55d3f6c66eb50fc1bff6967202a2f3311bc94078df293fd9b4d7dd8dc736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4e4c55d3f6c66eb50fc1bff6967202a2f3311bc94078df293fd9b4d7dd8dc736->leave($__internal_4e4c55d3f6c66eb50fc1bff6967202a2f3311bc94078df293fd9b4d7dd8dc736_prof);

        
        $__internal_9c785812bc77734acce5717dd09e9e7958c5467bd7d765075d18fc777d2c52a9->leave($__internal_9c785812bc77734acce5717dd09e9e7958c5467bd7d765075d18fc777d2c52a9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_79e792f2724d8cdabf60a85e7a96f9e4d0bad134a94b021e08345ff6bcdfabb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79e792f2724d8cdabf60a85e7a96f9e4d0bad134a94b021e08345ff6bcdfabb6->enter($__internal_79e792f2724d8cdabf60a85e7a96f9e4d0bad134a94b021e08345ff6bcdfabb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f6111aa0f82b04aedc9ce848b03d96bd5da463add7323a63c6f6caef7748c9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6111aa0f82b04aedc9ce848b03d96bd5da463add7323a63c6f6caef7748c9e4->enter($__internal_f6111aa0f82b04aedc9ce848b03d96bd5da463add7323a63c6f6caef7748c9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f6111aa0f82b04aedc9ce848b03d96bd5da463add7323a63c6f6caef7748c9e4->leave($__internal_f6111aa0f82b04aedc9ce848b03d96bd5da463add7323a63c6f6caef7748c9e4_prof);

        
        $__internal_79e792f2724d8cdabf60a85e7a96f9e4d0bad134a94b021e08345ff6bcdfabb6->leave($__internal_79e792f2724d8cdabf60a85e7a96f9e4d0bad134a94b021e08345ff6bcdfabb6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
