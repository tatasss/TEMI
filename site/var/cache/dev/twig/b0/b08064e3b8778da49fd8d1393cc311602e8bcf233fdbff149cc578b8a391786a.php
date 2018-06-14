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
        $__internal_9b032aa2e6118996f502e43a7910a49799bc5956b49e5915915c3b74c6ea9938 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b032aa2e6118996f502e43a7910a49799bc5956b49e5915915c3b74c6ea9938->enter($__internal_9b032aa2e6118996f502e43a7910a49799bc5956b49e5915915c3b74c6ea9938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5a56773c71be054062156b37b8478fb092e02ecc2e051f15e74db319c0f639a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a56773c71be054062156b37b8478fb092e02ecc2e051f15e74db319c0f639a2->enter($__internal_5a56773c71be054062156b37b8478fb092e02ecc2e051f15e74db319c0f639a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b032aa2e6118996f502e43a7910a49799bc5956b49e5915915c3b74c6ea9938->leave($__internal_9b032aa2e6118996f502e43a7910a49799bc5956b49e5915915c3b74c6ea9938_prof);

        
        $__internal_5a56773c71be054062156b37b8478fb092e02ecc2e051f15e74db319c0f639a2->leave($__internal_5a56773c71be054062156b37b8478fb092e02ecc2e051f15e74db319c0f639a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a8300c25a0a0e0936ade2f8a0f9b8f85b67c82e444f6593ba53020de684c8b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a8300c25a0a0e0936ade2f8a0f9b8f85b67c82e444f6593ba53020de684c8b6->enter($__internal_2a8300c25a0a0e0936ade2f8a0f9b8f85b67c82e444f6593ba53020de684c8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_69f56a94865972ca95ccc7e32171abe01902ac3a05596adba126742007baf065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69f56a94865972ca95ccc7e32171abe01902ac3a05596adba126742007baf065->enter($__internal_69f56a94865972ca95ccc7e32171abe01902ac3a05596adba126742007baf065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_69f56a94865972ca95ccc7e32171abe01902ac3a05596adba126742007baf065->leave($__internal_69f56a94865972ca95ccc7e32171abe01902ac3a05596adba126742007baf065_prof);

        
        $__internal_2a8300c25a0a0e0936ade2f8a0f9b8f85b67c82e444f6593ba53020de684c8b6->leave($__internal_2a8300c25a0a0e0936ade2f8a0f9b8f85b67c82e444f6593ba53020de684c8b6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_374fb1603c309680b755f2ae6fd6daf8a3837cb0531c7ffa19541678057fddb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_374fb1603c309680b755f2ae6fd6daf8a3837cb0531c7ffa19541678057fddb6->enter($__internal_374fb1603c309680b755f2ae6fd6daf8a3837cb0531c7ffa19541678057fddb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_63a3454da7c042fe3c93fd6a1d2eee44e658c39b4a3f609bbd9e96ec4cea9e6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a3454da7c042fe3c93fd6a1d2eee44e658c39b4a3f609bbd9e96ec4cea9e6a->enter($__internal_63a3454da7c042fe3c93fd6a1d2eee44e658c39b4a3f609bbd9e96ec4cea9e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_63a3454da7c042fe3c93fd6a1d2eee44e658c39b4a3f609bbd9e96ec4cea9e6a->leave($__internal_63a3454da7c042fe3c93fd6a1d2eee44e658c39b4a3f609bbd9e96ec4cea9e6a_prof);

        
        $__internal_374fb1603c309680b755f2ae6fd6daf8a3837cb0531c7ffa19541678057fddb6->leave($__internal_374fb1603c309680b755f2ae6fd6daf8a3837cb0531c7ffa19541678057fddb6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_249708b087f71566c586d7ce8798dc867bc24872b8217ee83f0e756ce0c97698 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_249708b087f71566c586d7ce8798dc867bc24872b8217ee83f0e756ce0c97698->enter($__internal_249708b087f71566c586d7ce8798dc867bc24872b8217ee83f0e756ce0c97698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_22039c6e983656acde1cba96914727d72c2dcfa505cca1de6004c7d45ffd6e09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22039c6e983656acde1cba96914727d72c2dcfa505cca1de6004c7d45ffd6e09->enter($__internal_22039c6e983656acde1cba96914727d72c2dcfa505cca1de6004c7d45ffd6e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_22039c6e983656acde1cba96914727d72c2dcfa505cca1de6004c7d45ffd6e09->leave($__internal_22039c6e983656acde1cba96914727d72c2dcfa505cca1de6004c7d45ffd6e09_prof);

        
        $__internal_249708b087f71566c586d7ce8798dc867bc24872b8217ee83f0e756ce0c97698->leave($__internal_249708b087f71566c586d7ce8798dc867bc24872b8217ee83f0e756ce0c97698_prof);

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
