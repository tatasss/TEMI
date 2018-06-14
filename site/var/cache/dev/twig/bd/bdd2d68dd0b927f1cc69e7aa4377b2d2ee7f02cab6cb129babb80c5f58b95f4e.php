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
        $__internal_f9e27f2506a3a93bd4f34b68c25a9fd7f1a5161a96f7238eb445e4b9edcb6e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e27f2506a3a93bd4f34b68c25a9fd7f1a5161a96f7238eb445e4b9edcb6e76->enter($__internal_f9e27f2506a3a93bd4f34b68c25a9fd7f1a5161a96f7238eb445e4b9edcb6e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d9825abe2ccef9db3768a32f21542a4fccb42c8fb465ef13823e3d8672d94ebb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9825abe2ccef9db3768a32f21542a4fccb42c8fb465ef13823e3d8672d94ebb->enter($__internal_d9825abe2ccef9db3768a32f21542a4fccb42c8fb465ef13823e3d8672d94ebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9e27f2506a3a93bd4f34b68c25a9fd7f1a5161a96f7238eb445e4b9edcb6e76->leave($__internal_f9e27f2506a3a93bd4f34b68c25a9fd7f1a5161a96f7238eb445e4b9edcb6e76_prof);

        
        $__internal_d9825abe2ccef9db3768a32f21542a4fccb42c8fb465ef13823e3d8672d94ebb->leave($__internal_d9825abe2ccef9db3768a32f21542a4fccb42c8fb465ef13823e3d8672d94ebb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f175fa5644dd54391439998878e098c0165fd687edade4d4dad916a95bd06beb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f175fa5644dd54391439998878e098c0165fd687edade4d4dad916a95bd06beb->enter($__internal_f175fa5644dd54391439998878e098c0165fd687edade4d4dad916a95bd06beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d02279aaab3e21254232b9f7e8fb21204fba5b76ad0e5e04a3c9b9150239fb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02279aaab3e21254232b9f7e8fb21204fba5b76ad0e5e04a3c9b9150239fb6a->enter($__internal_d02279aaab3e21254232b9f7e8fb21204fba5b76ad0e5e04a3c9b9150239fb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d02279aaab3e21254232b9f7e8fb21204fba5b76ad0e5e04a3c9b9150239fb6a->leave($__internal_d02279aaab3e21254232b9f7e8fb21204fba5b76ad0e5e04a3c9b9150239fb6a_prof);

        
        $__internal_f175fa5644dd54391439998878e098c0165fd687edade4d4dad916a95bd06beb->leave($__internal_f175fa5644dd54391439998878e098c0165fd687edade4d4dad916a95bd06beb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ffb19c88551ed24638fd3afb7c9acfa03a4e7eb855e581da801021628f985ba1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffb19c88551ed24638fd3afb7c9acfa03a4e7eb855e581da801021628f985ba1->enter($__internal_ffb19c88551ed24638fd3afb7c9acfa03a4e7eb855e581da801021628f985ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_41a22cd39c0428c31b428bc3ee5e513e7e20883308d8b15f312897b03f3a9739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41a22cd39c0428c31b428bc3ee5e513e7e20883308d8b15f312897b03f3a9739->enter($__internal_41a22cd39c0428c31b428bc3ee5e513e7e20883308d8b15f312897b03f3a9739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_41a22cd39c0428c31b428bc3ee5e513e7e20883308d8b15f312897b03f3a9739->leave($__internal_41a22cd39c0428c31b428bc3ee5e513e7e20883308d8b15f312897b03f3a9739_prof);

        
        $__internal_ffb19c88551ed24638fd3afb7c9acfa03a4e7eb855e581da801021628f985ba1->leave($__internal_ffb19c88551ed24638fd3afb7c9acfa03a4e7eb855e581da801021628f985ba1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_abea38f5386205a43395573cd644904609b3fb498c4229b38a14eab511dd105a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abea38f5386205a43395573cd644904609b3fb498c4229b38a14eab511dd105a->enter($__internal_abea38f5386205a43395573cd644904609b3fb498c4229b38a14eab511dd105a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ad50b4cc3f902a55bebe2b3a03ec39b666172a5f37320a70ef466746e698f49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad50b4cc3f902a55bebe2b3a03ec39b666172a5f37320a70ef466746e698f49a->enter($__internal_ad50b4cc3f902a55bebe2b3a03ec39b666172a5f37320a70ef466746e698f49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ad50b4cc3f902a55bebe2b3a03ec39b666172a5f37320a70ef466746e698f49a->leave($__internal_ad50b4cc3f902a55bebe2b3a03ec39b666172a5f37320a70ef466746e698f49a_prof);

        
        $__internal_abea38f5386205a43395573cd644904609b3fb498c4229b38a14eab511dd105a->leave($__internal_abea38f5386205a43395573cd644904609b3fb498c4229b38a14eab511dd105a_prof);

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
