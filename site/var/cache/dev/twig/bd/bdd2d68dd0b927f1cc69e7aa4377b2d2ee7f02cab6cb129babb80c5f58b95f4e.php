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
        $__internal_4c9027171e15bfdf96b1ee3f9027b1ecc515d9e5b46c1498a355b6b41e889b59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9027171e15bfdf96b1ee3f9027b1ecc515d9e5b46c1498a355b6b41e889b59->enter($__internal_4c9027171e15bfdf96b1ee3f9027b1ecc515d9e5b46c1498a355b6b41e889b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_0a3850540e72e2a6270336c247113a96d3f2d63e0e74160e2c214cf1ad5c459f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3850540e72e2a6270336c247113a96d3f2d63e0e74160e2c214cf1ad5c459f->enter($__internal_0a3850540e72e2a6270336c247113a96d3f2d63e0e74160e2c214cf1ad5c459f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c9027171e15bfdf96b1ee3f9027b1ecc515d9e5b46c1498a355b6b41e889b59->leave($__internal_4c9027171e15bfdf96b1ee3f9027b1ecc515d9e5b46c1498a355b6b41e889b59_prof);

        
        $__internal_0a3850540e72e2a6270336c247113a96d3f2d63e0e74160e2c214cf1ad5c459f->leave($__internal_0a3850540e72e2a6270336c247113a96d3f2d63e0e74160e2c214cf1ad5c459f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_17ad78d4816f021e0f8a19a1688aaeea44f60ba1feb4baf32c1fd19923badb69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17ad78d4816f021e0f8a19a1688aaeea44f60ba1feb4baf32c1fd19923badb69->enter($__internal_17ad78d4816f021e0f8a19a1688aaeea44f60ba1feb4baf32c1fd19923badb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_074bc8062f350d7f917ac5ce40474bc5ca50256e6046b6d7c5d9edc1d1ee85a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074bc8062f350d7f917ac5ce40474bc5ca50256e6046b6d7c5d9edc1d1ee85a7->enter($__internal_074bc8062f350d7f917ac5ce40474bc5ca50256e6046b6d7c5d9edc1d1ee85a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_074bc8062f350d7f917ac5ce40474bc5ca50256e6046b6d7c5d9edc1d1ee85a7->leave($__internal_074bc8062f350d7f917ac5ce40474bc5ca50256e6046b6d7c5d9edc1d1ee85a7_prof);

        
        $__internal_17ad78d4816f021e0f8a19a1688aaeea44f60ba1feb4baf32c1fd19923badb69->leave($__internal_17ad78d4816f021e0f8a19a1688aaeea44f60ba1feb4baf32c1fd19923badb69_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ebc17f92b047d0010c81852c1d19f45429e3eb569e33cde3fd1e4d4f71b9ea5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ebc17f92b047d0010c81852c1d19f45429e3eb569e33cde3fd1e4d4f71b9ea5->enter($__internal_8ebc17f92b047d0010c81852c1d19f45429e3eb569e33cde3fd1e4d4f71b9ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_181594f1860bdfc827c7650883e98bfd8ffeb888e9435aa088fd2192469b6cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181594f1860bdfc827c7650883e98bfd8ffeb888e9435aa088fd2192469b6cc6->enter($__internal_181594f1860bdfc827c7650883e98bfd8ffeb888e9435aa088fd2192469b6cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_181594f1860bdfc827c7650883e98bfd8ffeb888e9435aa088fd2192469b6cc6->leave($__internal_181594f1860bdfc827c7650883e98bfd8ffeb888e9435aa088fd2192469b6cc6_prof);

        
        $__internal_8ebc17f92b047d0010c81852c1d19f45429e3eb569e33cde3fd1e4d4f71b9ea5->leave($__internal_8ebc17f92b047d0010c81852c1d19f45429e3eb569e33cde3fd1e4d4f71b9ea5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1fdbb92bb9ce9d91ff82dd55800405629fd7f866d69dbaf9efcd367505475c02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fdbb92bb9ce9d91ff82dd55800405629fd7f866d69dbaf9efcd367505475c02->enter($__internal_1fdbb92bb9ce9d91ff82dd55800405629fd7f866d69dbaf9efcd367505475c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e79f961153e7e0969a60ed5edbb77a4a390ad12a86ba00356926624480ff200f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e79f961153e7e0969a60ed5edbb77a4a390ad12a86ba00356926624480ff200f->enter($__internal_e79f961153e7e0969a60ed5edbb77a4a390ad12a86ba00356926624480ff200f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e79f961153e7e0969a60ed5edbb77a4a390ad12a86ba00356926624480ff200f->leave($__internal_e79f961153e7e0969a60ed5edbb77a4a390ad12a86ba00356926624480ff200f_prof);

        
        $__internal_1fdbb92bb9ce9d91ff82dd55800405629fd7f866d69dbaf9efcd367505475c02->leave($__internal_1fdbb92bb9ce9d91ff82dd55800405629fd7f866d69dbaf9efcd367505475c02_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
