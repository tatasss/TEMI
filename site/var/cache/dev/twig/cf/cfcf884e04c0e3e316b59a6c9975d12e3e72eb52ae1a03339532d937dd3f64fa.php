<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_59b195687fbb6d5c0b89a3a56b8156ebb321b3f6445f70223726cd6d13fd32f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_575ad9c992d96f81f6370a251c5e6d79ad8addda3342956337daae4dbbc9b3e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575ad9c992d96f81f6370a251c5e6d79ad8addda3342956337daae4dbbc9b3e5->enter($__internal_575ad9c992d96f81f6370a251c5e6d79ad8addda3342956337daae4dbbc9b3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_d2fa4699dcc020647ab88958226df46e578f6321f87fbb4bad5d6ec2665a2b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2fa4699dcc020647ab88958226df46e578f6321f87fbb4bad5d6ec2665a2b9a->enter($__internal_d2fa4699dcc020647ab88958226df46e578f6321f87fbb4bad5d6ec2665a2b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_575ad9c992d96f81f6370a251c5e6d79ad8addda3342956337daae4dbbc9b3e5->leave($__internal_575ad9c992d96f81f6370a251c5e6d79ad8addda3342956337daae4dbbc9b3e5_prof);

        
        $__internal_d2fa4699dcc020647ab88958226df46e578f6321f87fbb4bad5d6ec2665a2b9a->leave($__internal_d2fa4699dcc020647ab88958226df46e578f6321f87fbb4bad5d6ec2665a2b9a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d71f3d26d77f21daec07c230fb70a00ad56c471367cb18694e0d78065979fb24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d71f3d26d77f21daec07c230fb70a00ad56c471367cb18694e0d78065979fb24->enter($__internal_d71f3d26d77f21daec07c230fb70a00ad56c471367cb18694e0d78065979fb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c432e72d28db9efdf675f37e6b606983a660d9154c039f125516c820b3cf6d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c432e72d28db9efdf675f37e6b606983a660d9154c039f125516c820b3cf6d5->enter($__internal_4c432e72d28db9efdf675f37e6b606983a660d9154c039f125516c820b3cf6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4c432e72d28db9efdf675f37e6b606983a660d9154c039f125516c820b3cf6d5->leave($__internal_4c432e72d28db9efdf675f37e6b606983a660d9154c039f125516c820b3cf6d5_prof);

        
        $__internal_d71f3d26d77f21daec07c230fb70a00ad56c471367cb18694e0d78065979fb24->leave($__internal_d71f3d26d77f21daec07c230fb70a00ad56c471367cb18694e0d78065979fb24_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
