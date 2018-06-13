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
        $__internal_540e935098d3cbaedb1fb4950c90eaf4ac330d25450627b4a978089b002b8963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_540e935098d3cbaedb1fb4950c90eaf4ac330d25450627b4a978089b002b8963->enter($__internal_540e935098d3cbaedb1fb4950c90eaf4ac330d25450627b4a978089b002b8963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_cf5a056dcf31a59812705dd04e97feb32b480407c9a186e23ad52f19850fe54d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5a056dcf31a59812705dd04e97feb32b480407c9a186e23ad52f19850fe54d->enter($__internal_cf5a056dcf31a59812705dd04e97feb32b480407c9a186e23ad52f19850fe54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_540e935098d3cbaedb1fb4950c90eaf4ac330d25450627b4a978089b002b8963->leave($__internal_540e935098d3cbaedb1fb4950c90eaf4ac330d25450627b4a978089b002b8963_prof);

        
        $__internal_cf5a056dcf31a59812705dd04e97feb32b480407c9a186e23ad52f19850fe54d->leave($__internal_cf5a056dcf31a59812705dd04e97feb32b480407c9a186e23ad52f19850fe54d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_213e14c39a117c47f3b6aa22ba76ba3c80c2ad32342578ae97fb8b9966d5d231 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213e14c39a117c47f3b6aa22ba76ba3c80c2ad32342578ae97fb8b9966d5d231->enter($__internal_213e14c39a117c47f3b6aa22ba76ba3c80c2ad32342578ae97fb8b9966d5d231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6131432f44371d482896af3ab69627c2a317a1b729161e9d336487017ffcd0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6131432f44371d482896af3ab69627c2a317a1b729161e9d336487017ffcd0fa->enter($__internal_6131432f44371d482896af3ab69627c2a317a1b729161e9d336487017ffcd0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6131432f44371d482896af3ab69627c2a317a1b729161e9d336487017ffcd0fa->leave($__internal_6131432f44371d482896af3ab69627c2a317a1b729161e9d336487017ffcd0fa_prof);

        
        $__internal_213e14c39a117c47f3b6aa22ba76ba3c80c2ad32342578ae97fb8b9966d5d231->leave($__internal_213e14c39a117c47f3b6aa22ba76ba3c80c2ad32342578ae97fb8b9966d5d231_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a329387d808216b4ff1810a0c9e05383f16f0ccf34d470eb9459a624b0c2c156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a329387d808216b4ff1810a0c9e05383f16f0ccf34d470eb9459a624b0c2c156->enter($__internal_a329387d808216b4ff1810a0c9e05383f16f0ccf34d470eb9459a624b0c2c156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7736e9a0c08e322950bf11861298b054864525c1560b0a7ad72a773e50711747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7736e9a0c08e322950bf11861298b054864525c1560b0a7ad72a773e50711747->enter($__internal_7736e9a0c08e322950bf11861298b054864525c1560b0a7ad72a773e50711747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7736e9a0c08e322950bf11861298b054864525c1560b0a7ad72a773e50711747->leave($__internal_7736e9a0c08e322950bf11861298b054864525c1560b0a7ad72a773e50711747_prof);

        
        $__internal_a329387d808216b4ff1810a0c9e05383f16f0ccf34d470eb9459a624b0c2c156->leave($__internal_a329387d808216b4ff1810a0c9e05383f16f0ccf34d470eb9459a624b0c2c156_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb682d1c7b57188b9a898ea2381a1f4fa1453ba313796abf9e3c0eb456cc3904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb682d1c7b57188b9a898ea2381a1f4fa1453ba313796abf9e3c0eb456cc3904->enter($__internal_bb682d1c7b57188b9a898ea2381a1f4fa1453ba313796abf9e3c0eb456cc3904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5ba473baeacd7023cf505be81881b96b81eea6e26f67eec5be9768b139f8bde2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba473baeacd7023cf505be81881b96b81eea6e26f67eec5be9768b139f8bde2->enter($__internal_5ba473baeacd7023cf505be81881b96b81eea6e26f67eec5be9768b139f8bde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5ba473baeacd7023cf505be81881b96b81eea6e26f67eec5be9768b139f8bde2->leave($__internal_5ba473baeacd7023cf505be81881b96b81eea6e26f67eec5be9768b139f8bde2_prof);

        
        $__internal_bb682d1c7b57188b9a898ea2381a1f4fa1453ba313796abf9e3c0eb456cc3904->leave($__internal_bb682d1c7b57188b9a898ea2381a1f4fa1453ba313796abf9e3c0eb456cc3904_prof);

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
