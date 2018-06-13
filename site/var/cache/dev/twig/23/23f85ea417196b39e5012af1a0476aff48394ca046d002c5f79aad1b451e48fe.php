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
        $__internal_a4c4829e04472c93d2a9e0a251b05df086b5c5699a82ee80c1f7a6160e565eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4c4829e04472c93d2a9e0a251b05df086b5c5699a82ee80c1f7a6160e565eb0->enter($__internal_a4c4829e04472c93d2a9e0a251b05df086b5c5699a82ee80c1f7a6160e565eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_3ec074ebf523a9455a4495d0e5b4c8f78e6323be653129ff3240c63f9e38a907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec074ebf523a9455a4495d0e5b4c8f78e6323be653129ff3240c63f9e38a907->enter($__internal_3ec074ebf523a9455a4495d0e5b4c8f78e6323be653129ff3240c63f9e38a907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a4c4829e04472c93d2a9e0a251b05df086b5c5699a82ee80c1f7a6160e565eb0->leave($__internal_a4c4829e04472c93d2a9e0a251b05df086b5c5699a82ee80c1f7a6160e565eb0_prof);

        
        $__internal_3ec074ebf523a9455a4495d0e5b4c8f78e6323be653129ff3240c63f9e38a907->leave($__internal_3ec074ebf523a9455a4495d0e5b4c8f78e6323be653129ff3240c63f9e38a907_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_610bdd2585bb247b484dc71b53a8f9a4b0d3ee28095f2a52fca87d0aa3b542e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610bdd2585bb247b484dc71b53a8f9a4b0d3ee28095f2a52fca87d0aa3b542e2->enter($__internal_610bdd2585bb247b484dc71b53a8f9a4b0d3ee28095f2a52fca87d0aa3b542e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee290a86c12963b87e04a50af313e5608db157ca41e2f2c0bd6ed2e4d12e6ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee290a86c12963b87e04a50af313e5608db157ca41e2f2c0bd6ed2e4d12e6ab4->enter($__internal_ee290a86c12963b87e04a50af313e5608db157ca41e2f2c0bd6ed2e4d12e6ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ee290a86c12963b87e04a50af313e5608db157ca41e2f2c0bd6ed2e4d12e6ab4->leave($__internal_ee290a86c12963b87e04a50af313e5608db157ca41e2f2c0bd6ed2e4d12e6ab4_prof);

        
        $__internal_610bdd2585bb247b484dc71b53a8f9a4b0d3ee28095f2a52fca87d0aa3b542e2->leave($__internal_610bdd2585bb247b484dc71b53a8f9a4b0d3ee28095f2a52fca87d0aa3b542e2_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
