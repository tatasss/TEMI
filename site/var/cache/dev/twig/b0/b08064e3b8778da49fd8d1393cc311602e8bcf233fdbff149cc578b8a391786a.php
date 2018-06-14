<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b95f7ab30d76a04980f24bd0199c881ce189c1a769f07275d0dfd7c1b15da1bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_5541009335e265266879051f3bf12d5a09cbf810dc0e6874c2fb2fa0f5b1dbfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5541009335e265266879051f3bf12d5a09cbf810dc0e6874c2fb2fa0f5b1dbfc->enter($__internal_5541009335e265266879051f3bf12d5a09cbf810dc0e6874c2fb2fa0f5b1dbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_99b9cf68ad6aa103cb01d0fe36a942924b4e079d6bc8138bad3ae43ddf5e0d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b9cf68ad6aa103cb01d0fe36a942924b4e079d6bc8138bad3ae43ddf5e0d2f->enter($__internal_99b9cf68ad6aa103cb01d0fe36a942924b4e079d6bc8138bad3ae43ddf5e0d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5541009335e265266879051f3bf12d5a09cbf810dc0e6874c2fb2fa0f5b1dbfc->leave($__internal_5541009335e265266879051f3bf12d5a09cbf810dc0e6874c2fb2fa0f5b1dbfc_prof);

        
        $__internal_99b9cf68ad6aa103cb01d0fe36a942924b4e079d6bc8138bad3ae43ddf5e0d2f->leave($__internal_99b9cf68ad6aa103cb01d0fe36a942924b4e079d6bc8138bad3ae43ddf5e0d2f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_043286f520f3cd7e650b043779ae402c64cf88988a34465fc61110a80cbfec93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043286f520f3cd7e650b043779ae402c64cf88988a34465fc61110a80cbfec93->enter($__internal_043286f520f3cd7e650b043779ae402c64cf88988a34465fc61110a80cbfec93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_13c80765cc39bebbc3fa922b5a11c1212ffa85be16654cab8f670cb9cbcb76e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c80765cc39bebbc3fa922b5a11c1212ffa85be16654cab8f670cb9cbcb76e7->enter($__internal_13c80765cc39bebbc3fa922b5a11c1212ffa85be16654cab8f670cb9cbcb76e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_13c80765cc39bebbc3fa922b5a11c1212ffa85be16654cab8f670cb9cbcb76e7->leave($__internal_13c80765cc39bebbc3fa922b5a11c1212ffa85be16654cab8f670cb9cbcb76e7_prof);

        
        $__internal_043286f520f3cd7e650b043779ae402c64cf88988a34465fc61110a80cbfec93->leave($__internal_043286f520f3cd7e650b043779ae402c64cf88988a34465fc61110a80cbfec93_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c68757ee20e0be933186cc7b1c71aef9a0fa4cad8e45d553b9288bccef1c96b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68757ee20e0be933186cc7b1c71aef9a0fa4cad8e45d553b9288bccef1c96b7->enter($__internal_c68757ee20e0be933186cc7b1c71aef9a0fa4cad8e45d553b9288bccef1c96b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3ecbd2e42b063f70709aec1501b91ee81861d83a8c33646d0c875c362950ce7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ecbd2e42b063f70709aec1501b91ee81861d83a8c33646d0c875c362950ce7c->enter($__internal_3ecbd2e42b063f70709aec1501b91ee81861d83a8c33646d0c875c362950ce7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3ecbd2e42b063f70709aec1501b91ee81861d83a8c33646d0c875c362950ce7c->leave($__internal_3ecbd2e42b063f70709aec1501b91ee81861d83a8c33646d0c875c362950ce7c_prof);

        
        $__internal_c68757ee20e0be933186cc7b1c71aef9a0fa4cad8e45d553b9288bccef1c96b7->leave($__internal_c68757ee20e0be933186cc7b1c71aef9a0fa4cad8e45d553b9288bccef1c96b7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ddb9b748fc5998b19572b64edfb9cd8534ea642dbbec6bade2ae487d9d19200d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb9b748fc5998b19572b64edfb9cd8534ea642dbbec6bade2ae487d9d19200d->enter($__internal_ddb9b748fc5998b19572b64edfb9cd8534ea642dbbec6bade2ae487d9d19200d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_884294d8f0c3bc2ab66f1caac020dc5242d3080a498da129cdff88949d572029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884294d8f0c3bc2ab66f1caac020dc5242d3080a498da129cdff88949d572029->enter($__internal_884294d8f0c3bc2ab66f1caac020dc5242d3080a498da129cdff88949d572029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_884294d8f0c3bc2ab66f1caac020dc5242d3080a498da129cdff88949d572029->leave($__internal_884294d8f0c3bc2ab66f1caac020dc5242d3080a498da129cdff88949d572029_prof);

        
        $__internal_ddb9b748fc5998b19572b64edfb9cd8534ea642dbbec6bade2ae487d9d19200d->leave($__internal_ddb9b748fc5998b19572b64edfb9cd8534ea642dbbec6bade2ae487d9d19200d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
