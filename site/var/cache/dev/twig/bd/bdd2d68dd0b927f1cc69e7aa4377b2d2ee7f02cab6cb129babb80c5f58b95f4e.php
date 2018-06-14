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
        $__internal_e5aae9187ce2e7619fe7c436a8c8fb3b4abcffcc4059b2db5b09cc4650cbaab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5aae9187ce2e7619fe7c436a8c8fb3b4abcffcc4059b2db5b09cc4650cbaab3->enter($__internal_e5aae9187ce2e7619fe7c436a8c8fb3b4abcffcc4059b2db5b09cc4650cbaab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_acdf48f04b95009406110401589aca76a2673883b831720c4866bd303e73d881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acdf48f04b95009406110401589aca76a2673883b831720c4866bd303e73d881->enter($__internal_acdf48f04b95009406110401589aca76a2673883b831720c4866bd303e73d881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5aae9187ce2e7619fe7c436a8c8fb3b4abcffcc4059b2db5b09cc4650cbaab3->leave($__internal_e5aae9187ce2e7619fe7c436a8c8fb3b4abcffcc4059b2db5b09cc4650cbaab3_prof);

        
        $__internal_acdf48f04b95009406110401589aca76a2673883b831720c4866bd303e73d881->leave($__internal_acdf48f04b95009406110401589aca76a2673883b831720c4866bd303e73d881_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d0396ef9686dc3bde38a52ba59441bc12d0f95ff9d69c834fae3cc2b3863eed9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0396ef9686dc3bde38a52ba59441bc12d0f95ff9d69c834fae3cc2b3863eed9->enter($__internal_d0396ef9686dc3bde38a52ba59441bc12d0f95ff9d69c834fae3cc2b3863eed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_49cdd0000b69ea6c3b11a5fa9c8f609e0f13c7051d8292faa2ab2b79cef49c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49cdd0000b69ea6c3b11a5fa9c8f609e0f13c7051d8292faa2ab2b79cef49c92->enter($__internal_49cdd0000b69ea6c3b11a5fa9c8f609e0f13c7051d8292faa2ab2b79cef49c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_49cdd0000b69ea6c3b11a5fa9c8f609e0f13c7051d8292faa2ab2b79cef49c92->leave($__internal_49cdd0000b69ea6c3b11a5fa9c8f609e0f13c7051d8292faa2ab2b79cef49c92_prof);

        
        $__internal_d0396ef9686dc3bde38a52ba59441bc12d0f95ff9d69c834fae3cc2b3863eed9->leave($__internal_d0396ef9686dc3bde38a52ba59441bc12d0f95ff9d69c834fae3cc2b3863eed9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d446c224f5704c157ab6ddc53e63a52475fb8f03c0873caa3df6258e05ac95f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d446c224f5704c157ab6ddc53e63a52475fb8f03c0873caa3df6258e05ac95f9->enter($__internal_d446c224f5704c157ab6ddc53e63a52475fb8f03c0873caa3df6258e05ac95f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e0f7753fad4607dbbc8682180f2e6de1fa4624c8636614dd03f92d0e382f4f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f7753fad4607dbbc8682180f2e6de1fa4624c8636614dd03f92d0e382f4f70->enter($__internal_e0f7753fad4607dbbc8682180f2e6de1fa4624c8636614dd03f92d0e382f4f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e0f7753fad4607dbbc8682180f2e6de1fa4624c8636614dd03f92d0e382f4f70->leave($__internal_e0f7753fad4607dbbc8682180f2e6de1fa4624c8636614dd03f92d0e382f4f70_prof);

        
        $__internal_d446c224f5704c157ab6ddc53e63a52475fb8f03c0873caa3df6258e05ac95f9->leave($__internal_d446c224f5704c157ab6ddc53e63a52475fb8f03c0873caa3df6258e05ac95f9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95370900343ef0f21e66349995f3b2916fca50d144ef8596be5e916d37ecf231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95370900343ef0f21e66349995f3b2916fca50d144ef8596be5e916d37ecf231->enter($__internal_95370900343ef0f21e66349995f3b2916fca50d144ef8596be5e916d37ecf231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dee2627bb2ff40b544de2cd8365ab8ef02e6a91772bfab8b528415516626cec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dee2627bb2ff40b544de2cd8365ab8ef02e6a91772bfab8b528415516626cec5->enter($__internal_dee2627bb2ff40b544de2cd8365ab8ef02e6a91772bfab8b528415516626cec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dee2627bb2ff40b544de2cd8365ab8ef02e6a91772bfab8b528415516626cec5->leave($__internal_dee2627bb2ff40b544de2cd8365ab8ef02e6a91772bfab8b528415516626cec5_prof);

        
        $__internal_95370900343ef0f21e66349995f3b2916fca50d144ef8596be5e916d37ecf231->leave($__internal_95370900343ef0f21e66349995f3b2916fca50d144ef8596be5e916d37ecf231_prof);

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
