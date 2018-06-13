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
        $__internal_cba381036b8aec4569b9abee4a179a5e25a509043d5384959c1d40510c86c091 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cba381036b8aec4569b9abee4a179a5e25a509043d5384959c1d40510c86c091->enter($__internal_cba381036b8aec4569b9abee4a179a5e25a509043d5384959c1d40510c86c091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3a171c8f8d0ec471271f9220eaec882ee52ed56a6061cbab9d6ab3bd44107e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a171c8f8d0ec471271f9220eaec882ee52ed56a6061cbab9d6ab3bd44107e7f->enter($__internal_3a171c8f8d0ec471271f9220eaec882ee52ed56a6061cbab9d6ab3bd44107e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cba381036b8aec4569b9abee4a179a5e25a509043d5384959c1d40510c86c091->leave($__internal_cba381036b8aec4569b9abee4a179a5e25a509043d5384959c1d40510c86c091_prof);

        
        $__internal_3a171c8f8d0ec471271f9220eaec882ee52ed56a6061cbab9d6ab3bd44107e7f->leave($__internal_3a171c8f8d0ec471271f9220eaec882ee52ed56a6061cbab9d6ab3bd44107e7f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_96fd91d9135186893f61b84ac0cd2908e30dd81a23c32074786282fe4f64a140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96fd91d9135186893f61b84ac0cd2908e30dd81a23c32074786282fe4f64a140->enter($__internal_96fd91d9135186893f61b84ac0cd2908e30dd81a23c32074786282fe4f64a140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f9970d3b6b9c2116aa50e33c0e66a9321a9feaa5078d9b08ef53604ca0da1382 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9970d3b6b9c2116aa50e33c0e66a9321a9feaa5078d9b08ef53604ca0da1382->enter($__internal_f9970d3b6b9c2116aa50e33c0e66a9321a9feaa5078d9b08ef53604ca0da1382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f9970d3b6b9c2116aa50e33c0e66a9321a9feaa5078d9b08ef53604ca0da1382->leave($__internal_f9970d3b6b9c2116aa50e33c0e66a9321a9feaa5078d9b08ef53604ca0da1382_prof);

        
        $__internal_96fd91d9135186893f61b84ac0cd2908e30dd81a23c32074786282fe4f64a140->leave($__internal_96fd91d9135186893f61b84ac0cd2908e30dd81a23c32074786282fe4f64a140_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_445763cbf4bb9f43e7b85e19b44e11adb9ff64ef66a58fde13c91f14f8598603 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445763cbf4bb9f43e7b85e19b44e11adb9ff64ef66a58fde13c91f14f8598603->enter($__internal_445763cbf4bb9f43e7b85e19b44e11adb9ff64ef66a58fde13c91f14f8598603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f907b6efd5f87942b4c0d0f784856dfa897bda1dad9d062bcb96d0e6c6a59c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f907b6efd5f87942b4c0d0f784856dfa897bda1dad9d062bcb96d0e6c6a59c6e->enter($__internal_f907b6efd5f87942b4c0d0f784856dfa897bda1dad9d062bcb96d0e6c6a59c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f907b6efd5f87942b4c0d0f784856dfa897bda1dad9d062bcb96d0e6c6a59c6e->leave($__internal_f907b6efd5f87942b4c0d0f784856dfa897bda1dad9d062bcb96d0e6c6a59c6e_prof);

        
        $__internal_445763cbf4bb9f43e7b85e19b44e11adb9ff64ef66a58fde13c91f14f8598603->leave($__internal_445763cbf4bb9f43e7b85e19b44e11adb9ff64ef66a58fde13c91f14f8598603_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_feb6d6e1e9713c7ebac87d3eca7e64b48b934878462615aa97f7a41231948b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_feb6d6e1e9713c7ebac87d3eca7e64b48b934878462615aa97f7a41231948b7c->enter($__internal_feb6d6e1e9713c7ebac87d3eca7e64b48b934878462615aa97f7a41231948b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_db1778af1e3befa4ef5abe4042b5e58c8962654261abd1641f667db00acedce0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1778af1e3befa4ef5abe4042b5e58c8962654261abd1641f667db00acedce0->enter($__internal_db1778af1e3befa4ef5abe4042b5e58c8962654261abd1641f667db00acedce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_db1778af1e3befa4ef5abe4042b5e58c8962654261abd1641f667db00acedce0->leave($__internal_db1778af1e3befa4ef5abe4042b5e58c8962654261abd1641f667db00acedce0_prof);

        
        $__internal_feb6d6e1e9713c7ebac87d3eca7e64b48b934878462615aa97f7a41231948b7c->leave($__internal_feb6d6e1e9713c7ebac87d3eca7e64b48b934878462615aa97f7a41231948b7c_prof);

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
