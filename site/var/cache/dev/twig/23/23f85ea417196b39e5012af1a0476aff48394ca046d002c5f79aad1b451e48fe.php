<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_dadd127a96dd7a91ffcb3f0cf440aed53fa5c882e505095f72312c599bbbf48d extends Twig_Template
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
        $__internal_ba896c51b67ff52607cd7ba3baab109b4836f51117cfe3effe090cfbb401f914 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba896c51b67ff52607cd7ba3baab109b4836f51117cfe3effe090cfbb401f914->enter($__internal_ba896c51b67ff52607cd7ba3baab109b4836f51117cfe3effe090cfbb401f914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e0593bc55c807c87794d7ed2cac5ad612e7c479cfb8f803cc36f5fecb1e37407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0593bc55c807c87794d7ed2cac5ad612e7c479cfb8f803cc36f5fecb1e37407->enter($__internal_e0593bc55c807c87794d7ed2cac5ad612e7c479cfb8f803cc36f5fecb1e37407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ba896c51b67ff52607cd7ba3baab109b4836f51117cfe3effe090cfbb401f914->leave($__internal_ba896c51b67ff52607cd7ba3baab109b4836f51117cfe3effe090cfbb401f914_prof);

        
        $__internal_e0593bc55c807c87794d7ed2cac5ad612e7c479cfb8f803cc36f5fecb1e37407->leave($__internal_e0593bc55c807c87794d7ed2cac5ad612e7c479cfb8f803cc36f5fecb1e37407_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5735408b40c0d329437ab07ab67a2bdb39254e0cae8e89d9cf022874926f5dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5735408b40c0d329437ab07ab67a2bdb39254e0cae8e89d9cf022874926f5dd->enter($__internal_a5735408b40c0d329437ab07ab67a2bdb39254e0cae8e89d9cf022874926f5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e587a6a3e49402c2d8c8ddd602f075d346a86ec796f314cb599851cb68d0d99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e587a6a3e49402c2d8c8ddd602f075d346a86ec796f314cb599851cb68d0d99c->enter($__internal_e587a6a3e49402c2d8c8ddd602f075d346a86ec796f314cb599851cb68d0d99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e587a6a3e49402c2d8c8ddd602f075d346a86ec796f314cb599851cb68d0d99c->leave($__internal_e587a6a3e49402c2d8c8ddd602f075d346a86ec796f314cb599851cb68d0d99c_prof);

        
        $__internal_a5735408b40c0d329437ab07ab67a2bdb39254e0cae8e89d9cf022874926f5dd->leave($__internal_a5735408b40c0d329437ab07ab67a2bdb39254e0cae8e89d9cf022874926f5dd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
