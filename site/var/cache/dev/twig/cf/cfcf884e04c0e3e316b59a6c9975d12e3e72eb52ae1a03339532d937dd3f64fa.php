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
        $__internal_cda91f858091ff709578eeb039a581a4ca853405402f98348cc97d12183a43da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cda91f858091ff709578eeb039a581a4ca853405402f98348cc97d12183a43da->enter($__internal_cda91f858091ff709578eeb039a581a4ca853405402f98348cc97d12183a43da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_a34c3e48657f6d88ba1b7cf5c334dd1d7b000b257f7048c8e0f2bde28b3da753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a34c3e48657f6d88ba1b7cf5c334dd1d7b000b257f7048c8e0f2bde28b3da753->enter($__internal_a34c3e48657f6d88ba1b7cf5c334dd1d7b000b257f7048c8e0f2bde28b3da753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cda91f858091ff709578eeb039a581a4ca853405402f98348cc97d12183a43da->leave($__internal_cda91f858091ff709578eeb039a581a4ca853405402f98348cc97d12183a43da_prof);

        
        $__internal_a34c3e48657f6d88ba1b7cf5c334dd1d7b000b257f7048c8e0f2bde28b3da753->leave($__internal_a34c3e48657f6d88ba1b7cf5c334dd1d7b000b257f7048c8e0f2bde28b3da753_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fbd5fc520845cf2052198a618759a34dd985255e9d093e4441b84f04ae8a1e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbd5fc520845cf2052198a618759a34dd985255e9d093e4441b84f04ae8a1e4b->enter($__internal_fbd5fc520845cf2052198a618759a34dd985255e9d093e4441b84f04ae8a1e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_569f018d113328dcabae7e2696285d0cab474b828144e4b646db1f77ac212124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_569f018d113328dcabae7e2696285d0cab474b828144e4b646db1f77ac212124->enter($__internal_569f018d113328dcabae7e2696285d0cab474b828144e4b646db1f77ac212124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_569f018d113328dcabae7e2696285d0cab474b828144e4b646db1f77ac212124->leave($__internal_569f018d113328dcabae7e2696285d0cab474b828144e4b646db1f77ac212124_prof);

        
        $__internal_fbd5fc520845cf2052198a618759a34dd985255e9d093e4441b84f04ae8a1e4b->leave($__internal_fbd5fc520845cf2052198a618759a34dd985255e9d093e4441b84f04ae8a1e4b_prof);

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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
