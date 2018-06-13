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
        $__internal_318f9e3824a0ed4e65d84bd8244509296bc48709a5554ae232832d8740674452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318f9e3824a0ed4e65d84bd8244509296bc48709a5554ae232832d8740674452->enter($__internal_318f9e3824a0ed4e65d84bd8244509296bc48709a5554ae232832d8740674452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1a3266ec12c667b9dd096b3bf291b035c9ff1c044098029e65d46a785fd7f0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3266ec12c667b9dd096b3bf291b035c9ff1c044098029e65d46a785fd7f0c9->enter($__internal_1a3266ec12c667b9dd096b3bf291b035c9ff1c044098029e65d46a785fd7f0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_318f9e3824a0ed4e65d84bd8244509296bc48709a5554ae232832d8740674452->leave($__internal_318f9e3824a0ed4e65d84bd8244509296bc48709a5554ae232832d8740674452_prof);

        
        $__internal_1a3266ec12c667b9dd096b3bf291b035c9ff1c044098029e65d46a785fd7f0c9->leave($__internal_1a3266ec12c667b9dd096b3bf291b035c9ff1c044098029e65d46a785fd7f0c9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0b05e16711610ae1fa57611fb6f64db5514703f1f1f3be4d31108a14120f069d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b05e16711610ae1fa57611fb6f64db5514703f1f1f3be4d31108a14120f069d->enter($__internal_0b05e16711610ae1fa57611fb6f64db5514703f1f1f3be4d31108a14120f069d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c164bccdda6429ebc694d1001bafc71041f4a5784e469e2d3b2f080e1b75fb5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c164bccdda6429ebc694d1001bafc71041f4a5784e469e2d3b2f080e1b75fb5b->enter($__internal_c164bccdda6429ebc694d1001bafc71041f4a5784e469e2d3b2f080e1b75fb5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c164bccdda6429ebc694d1001bafc71041f4a5784e469e2d3b2f080e1b75fb5b->leave($__internal_c164bccdda6429ebc694d1001bafc71041f4a5784e469e2d3b2f080e1b75fb5b_prof);

        
        $__internal_0b05e16711610ae1fa57611fb6f64db5514703f1f1f3be4d31108a14120f069d->leave($__internal_0b05e16711610ae1fa57611fb6f64db5514703f1f1f3be4d31108a14120f069d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_826793b449491d0e5ea1f7eb3792fd90426c0fd091a8d2b1105d754eef081a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_826793b449491d0e5ea1f7eb3792fd90426c0fd091a8d2b1105d754eef081a6b->enter($__internal_826793b449491d0e5ea1f7eb3792fd90426c0fd091a8d2b1105d754eef081a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e11e6ac8ed4eaf5074f75c77e04a4f748861bb5e0a011685c026f17d434b84f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e11e6ac8ed4eaf5074f75c77e04a4f748861bb5e0a011685c026f17d434b84f1->enter($__internal_e11e6ac8ed4eaf5074f75c77e04a4f748861bb5e0a011685c026f17d434b84f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e11e6ac8ed4eaf5074f75c77e04a4f748861bb5e0a011685c026f17d434b84f1->leave($__internal_e11e6ac8ed4eaf5074f75c77e04a4f748861bb5e0a011685c026f17d434b84f1_prof);

        
        $__internal_826793b449491d0e5ea1f7eb3792fd90426c0fd091a8d2b1105d754eef081a6b->leave($__internal_826793b449491d0e5ea1f7eb3792fd90426c0fd091a8d2b1105d754eef081a6b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10c9aea21e201c53d4a9be843fdb3c9a1787960c738c925aa6a3693fb884f8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10c9aea21e201c53d4a9be843fdb3c9a1787960c738c925aa6a3693fb884f8c0->enter($__internal_10c9aea21e201c53d4a9be843fdb3c9a1787960c738c925aa6a3693fb884f8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5688670c987074c5947c7a9b726b9aa671c67588c02f3fcd0d35cd8ab53385ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5688670c987074c5947c7a9b726b9aa671c67588c02f3fcd0d35cd8ab53385ac->enter($__internal_5688670c987074c5947c7a9b726b9aa671c67588c02f3fcd0d35cd8ab53385ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5688670c987074c5947c7a9b726b9aa671c67588c02f3fcd0d35cd8ab53385ac->leave($__internal_5688670c987074c5947c7a9b726b9aa671c67588c02f3fcd0d35cd8ab53385ac_prof);

        
        $__internal_10c9aea21e201c53d4a9be843fdb3c9a1787960c738c925aa6a3693fb884f8c0->leave($__internal_10c9aea21e201c53d4a9be843fdb3c9a1787960c738c925aa6a3693fb884f8c0_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
