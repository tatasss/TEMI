<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_fda4e9ea93f9274252214e7d4258eb8ad784d74345c492365dfa2716f6fc8259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_6705ba97d014822fc1856d609141fb7511be9cd25c69592f9a58219647ecf0f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6705ba97d014822fc1856d609141fb7511be9cd25c69592f9a58219647ecf0f1->enter($__internal_6705ba97d014822fc1856d609141fb7511be9cd25c69592f9a58219647ecf0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d6e8616d39ef523c4c8fc75e0f805737d2769c30d0011193e1ce16f0f829cd3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e8616d39ef523c4c8fc75e0f805737d2769c30d0011193e1ce16f0f829cd3d->enter($__internal_d6e8616d39ef523c4c8fc75e0f805737d2769c30d0011193e1ce16f0f829cd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6705ba97d014822fc1856d609141fb7511be9cd25c69592f9a58219647ecf0f1->leave($__internal_6705ba97d014822fc1856d609141fb7511be9cd25c69592f9a58219647ecf0f1_prof);

        
        $__internal_d6e8616d39ef523c4c8fc75e0f805737d2769c30d0011193e1ce16f0f829cd3d->leave($__internal_d6e8616d39ef523c4c8fc75e0f805737d2769c30d0011193e1ce16f0f829cd3d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7e17b4fb936eebb02baf0034949adc790ec04c5cdae572f340a6d1c9959a8e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7e17b4fb936eebb02baf0034949adc790ec04c5cdae572f340a6d1c9959a8e3->enter($__internal_a7e17b4fb936eebb02baf0034949adc790ec04c5cdae572f340a6d1c9959a8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a98591ccccb135f4c743ce7b709061f991402143a5ca31a5e41d2a3b3df28005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98591ccccb135f4c743ce7b709061f991402143a5ca31a5e41d2a3b3df28005->enter($__internal_a98591ccccb135f4c743ce7b709061f991402143a5ca31a5e41d2a3b3df28005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a98591ccccb135f4c743ce7b709061f991402143a5ca31a5e41d2a3b3df28005->leave($__internal_a98591ccccb135f4c743ce7b709061f991402143a5ca31a5e41d2a3b3df28005_prof);

        
        $__internal_a7e17b4fb936eebb02baf0034949adc790ec04c5cdae572f340a6d1c9959a8e3->leave($__internal_a7e17b4fb936eebb02baf0034949adc790ec04c5cdae572f340a6d1c9959a8e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21fe1dad12716b3f4c588b0c66474cc116cccf05d1eedf901cfb414fbbf2ad3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21fe1dad12716b3f4c588b0c66474cc116cccf05d1eedf901cfb414fbbf2ad3e->enter($__internal_21fe1dad12716b3f4c588b0c66474cc116cccf05d1eedf901cfb414fbbf2ad3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_36af0358bf058dd18e3feb647de10046123881baa4200978e605ace9cfe8b578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36af0358bf058dd18e3feb647de10046123881baa4200978e605ace9cfe8b578->enter($__internal_36af0358bf058dd18e3feb647de10046123881baa4200978e605ace9cfe8b578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_36af0358bf058dd18e3feb647de10046123881baa4200978e605ace9cfe8b578->leave($__internal_36af0358bf058dd18e3feb647de10046123881baa4200978e605ace9cfe8b578_prof);

        
        $__internal_21fe1dad12716b3f4c588b0c66474cc116cccf05d1eedf901cfb414fbbf2ad3e->leave($__internal_21fe1dad12716b3f4c588b0c66474cc116cccf05d1eedf901cfb414fbbf2ad3e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa31b7b706e39b8523d960ebdd0f005ada15423d4432d0d38d3b15823a33864b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa31b7b706e39b8523d960ebdd0f005ada15423d4432d0d38d3b15823a33864b->enter($__internal_fa31b7b706e39b8523d960ebdd0f005ada15423d4432d0d38d3b15823a33864b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_02b8eb6dc0d2c4fc48fa3b325233c7fb11867f6926540c2e20eb46e122c351df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b8eb6dc0d2c4fc48fa3b325233c7fb11867f6926540c2e20eb46e122c351df->enter($__internal_02b8eb6dc0d2c4fc48fa3b325233c7fb11867f6926540c2e20eb46e122c351df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_02b8eb6dc0d2c4fc48fa3b325233c7fb11867f6926540c2e20eb46e122c351df->leave($__internal_02b8eb6dc0d2c4fc48fa3b325233c7fb11867f6926540c2e20eb46e122c351df_prof);

        
        $__internal_fa31b7b706e39b8523d960ebdd0f005ada15423d4432d0d38d3b15823a33864b->leave($__internal_fa31b7b706e39b8523d960ebdd0f005ada15423d4432d0d38d3b15823a33864b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
