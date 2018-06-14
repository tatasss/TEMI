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
        $__internal_763cd9eb8205cf8bb253af2a286153ecff167a62db5c916002efc140f13039e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763cd9eb8205cf8bb253af2a286153ecff167a62db5c916002efc140f13039e8->enter($__internal_763cd9eb8205cf8bb253af2a286153ecff167a62db5c916002efc140f13039e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_ab2313d00d2e1a735e981d3c86fbb698164c3bc1f73a544e69bb380ec9df467d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2313d00d2e1a735e981d3c86fbb698164c3bc1f73a544e69bb380ec9df467d->enter($__internal_ab2313d00d2e1a735e981d3c86fbb698164c3bc1f73a544e69bb380ec9df467d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_763cd9eb8205cf8bb253af2a286153ecff167a62db5c916002efc140f13039e8->leave($__internal_763cd9eb8205cf8bb253af2a286153ecff167a62db5c916002efc140f13039e8_prof);

        
        $__internal_ab2313d00d2e1a735e981d3c86fbb698164c3bc1f73a544e69bb380ec9df467d->leave($__internal_ab2313d00d2e1a735e981d3c86fbb698164c3bc1f73a544e69bb380ec9df467d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_80238c0bb7273edcb94c979b34cbf4e1e37a30285867ed8372500f281a74bfb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80238c0bb7273edcb94c979b34cbf4e1e37a30285867ed8372500f281a74bfb2->enter($__internal_80238c0bb7273edcb94c979b34cbf4e1e37a30285867ed8372500f281a74bfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a68eb70d6faa70c7169edd7820680b80071f9c624b82732c4008b8d56de36067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a68eb70d6faa70c7169edd7820680b80071f9c624b82732c4008b8d56de36067->enter($__internal_a68eb70d6faa70c7169edd7820680b80071f9c624b82732c4008b8d56de36067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a68eb70d6faa70c7169edd7820680b80071f9c624b82732c4008b8d56de36067->leave($__internal_a68eb70d6faa70c7169edd7820680b80071f9c624b82732c4008b8d56de36067_prof);

        
        $__internal_80238c0bb7273edcb94c979b34cbf4e1e37a30285867ed8372500f281a74bfb2->leave($__internal_80238c0bb7273edcb94c979b34cbf4e1e37a30285867ed8372500f281a74bfb2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ec9559527966cc85acb0676415251aa9bfb87237c4414f8130417beee1261aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec9559527966cc85acb0676415251aa9bfb87237c4414f8130417beee1261aca->enter($__internal_ec9559527966cc85acb0676415251aa9bfb87237c4414f8130417beee1261aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ef5f77fe5ade07ab22e7bc7bf57c4d91827d67f2084a3cb5008c49a3aaff93b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5f77fe5ade07ab22e7bc7bf57c4d91827d67f2084a3cb5008c49a3aaff93b5->enter($__internal_ef5f77fe5ade07ab22e7bc7bf57c4d91827d67f2084a3cb5008c49a3aaff93b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ef5f77fe5ade07ab22e7bc7bf57c4d91827d67f2084a3cb5008c49a3aaff93b5->leave($__internal_ef5f77fe5ade07ab22e7bc7bf57c4d91827d67f2084a3cb5008c49a3aaff93b5_prof);

        
        $__internal_ec9559527966cc85acb0676415251aa9bfb87237c4414f8130417beee1261aca->leave($__internal_ec9559527966cc85acb0676415251aa9bfb87237c4414f8130417beee1261aca_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4d5a2a8f2ff34654f9233e36936f7ef9200fe6dbe98a5760059de7cc64ccba3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d5a2a8f2ff34654f9233e36936f7ef9200fe6dbe98a5760059de7cc64ccba3->enter($__internal_c4d5a2a8f2ff34654f9233e36936f7ef9200fe6dbe98a5760059de7cc64ccba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_548bb038b81838096c222b38faed774a24226613888be24138c90ed4eba277b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548bb038b81838096c222b38faed774a24226613888be24138c90ed4eba277b8->enter($__internal_548bb038b81838096c222b38faed774a24226613888be24138c90ed4eba277b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_548bb038b81838096c222b38faed774a24226613888be24138c90ed4eba277b8->leave($__internal_548bb038b81838096c222b38faed774a24226613888be24138c90ed4eba277b8_prof);

        
        $__internal_c4d5a2a8f2ff34654f9233e36936f7ef9200fe6dbe98a5760059de7cc64ccba3->leave($__internal_c4d5a2a8f2ff34654f9233e36936f7ef9200fe6dbe98a5760059de7cc64ccba3_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
