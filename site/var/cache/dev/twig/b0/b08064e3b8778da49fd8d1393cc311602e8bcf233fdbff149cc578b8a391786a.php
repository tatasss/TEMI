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
        $__internal_848a020449db7bcb98e5bf91710c090060c23266bf9585533ef82b6b4bb95ec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848a020449db7bcb98e5bf91710c090060c23266bf9585533ef82b6b4bb95ec2->enter($__internal_848a020449db7bcb98e5bf91710c090060c23266bf9585533ef82b6b4bb95ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c93b092e81b22c6a5053f27252b6d90e0b17252ac9484eb56a92e032ff439856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93b092e81b22c6a5053f27252b6d90e0b17252ac9484eb56a92e032ff439856->enter($__internal_c93b092e81b22c6a5053f27252b6d90e0b17252ac9484eb56a92e032ff439856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_848a020449db7bcb98e5bf91710c090060c23266bf9585533ef82b6b4bb95ec2->leave($__internal_848a020449db7bcb98e5bf91710c090060c23266bf9585533ef82b6b4bb95ec2_prof);

        
        $__internal_c93b092e81b22c6a5053f27252b6d90e0b17252ac9484eb56a92e032ff439856->leave($__internal_c93b092e81b22c6a5053f27252b6d90e0b17252ac9484eb56a92e032ff439856_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6dbc854d06fee3e65a2931c5d0e3cbde81b60f1ac527661296bfc4feab575e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dbc854d06fee3e65a2931c5d0e3cbde81b60f1ac527661296bfc4feab575e6e->enter($__internal_6dbc854d06fee3e65a2931c5d0e3cbde81b60f1ac527661296bfc4feab575e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3c4feb909a1c7cec5904ca7637f9cd7c09cb9bf960ad5282a606c3816d1cd4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4feb909a1c7cec5904ca7637f9cd7c09cb9bf960ad5282a606c3816d1cd4bd->enter($__internal_3c4feb909a1c7cec5904ca7637f9cd7c09cb9bf960ad5282a606c3816d1cd4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3c4feb909a1c7cec5904ca7637f9cd7c09cb9bf960ad5282a606c3816d1cd4bd->leave($__internal_3c4feb909a1c7cec5904ca7637f9cd7c09cb9bf960ad5282a606c3816d1cd4bd_prof);

        
        $__internal_6dbc854d06fee3e65a2931c5d0e3cbde81b60f1ac527661296bfc4feab575e6e->leave($__internal_6dbc854d06fee3e65a2931c5d0e3cbde81b60f1ac527661296bfc4feab575e6e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d583438b3848cd1bc2a87e9ff8e3546bd605ec636a1f0d54a1fbef131023163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d583438b3848cd1bc2a87e9ff8e3546bd605ec636a1f0d54a1fbef131023163->enter($__internal_7d583438b3848cd1bc2a87e9ff8e3546bd605ec636a1f0d54a1fbef131023163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a0191179cbae446f484c2577746d141bb71b06f2fe8aa4b759c8ec6419588adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0191179cbae446f484c2577746d141bb71b06f2fe8aa4b759c8ec6419588adf->enter($__internal_a0191179cbae446f484c2577746d141bb71b06f2fe8aa4b759c8ec6419588adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a0191179cbae446f484c2577746d141bb71b06f2fe8aa4b759c8ec6419588adf->leave($__internal_a0191179cbae446f484c2577746d141bb71b06f2fe8aa4b759c8ec6419588adf_prof);

        
        $__internal_7d583438b3848cd1bc2a87e9ff8e3546bd605ec636a1f0d54a1fbef131023163->leave($__internal_7d583438b3848cd1bc2a87e9ff8e3546bd605ec636a1f0d54a1fbef131023163_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_73e3cd45c1bad53a550b3590bdd1ab13038ea22da4e152e49ad89b4d93da4d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73e3cd45c1bad53a550b3590bdd1ab13038ea22da4e152e49ad89b4d93da4d7f->enter($__internal_73e3cd45c1bad53a550b3590bdd1ab13038ea22da4e152e49ad89b4d93da4d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0ab2747b452048071c356402de6c8a42956988d9993e2a2ebc5ca42eaf582768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab2747b452048071c356402de6c8a42956988d9993e2a2ebc5ca42eaf582768->enter($__internal_0ab2747b452048071c356402de6c8a42956988d9993e2a2ebc5ca42eaf582768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0ab2747b452048071c356402de6c8a42956988d9993e2a2ebc5ca42eaf582768->leave($__internal_0ab2747b452048071c356402de6c8a42956988d9993e2a2ebc5ca42eaf582768_prof);

        
        $__internal_73e3cd45c1bad53a550b3590bdd1ab13038ea22da4e152e49ad89b4d93da4d7f->leave($__internal_73e3cd45c1bad53a550b3590bdd1ab13038ea22da4e152e49ad89b4d93da4d7f_prof);

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
