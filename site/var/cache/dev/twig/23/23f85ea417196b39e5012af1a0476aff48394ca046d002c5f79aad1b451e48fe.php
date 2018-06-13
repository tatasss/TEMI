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
        $__internal_edc8ca7f59d8bf3f249b009d5e0a5c8047940c15db58f2b2f687b2f2b3d8d822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edc8ca7f59d8bf3f249b009d5e0a5c8047940c15db58f2b2f687b2f2b3d8d822->enter($__internal_edc8ca7f59d8bf3f249b009d5e0a5c8047940c15db58f2b2f687b2f2b3d8d822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e53b3691106b222d5953ee17ee04e5e7bfdd3db4e33e58c9e6beca79d2a475c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53b3691106b222d5953ee17ee04e5e7bfdd3db4e33e58c9e6beca79d2a475c8->enter($__internal_e53b3691106b222d5953ee17ee04e5e7bfdd3db4e33e58c9e6beca79d2a475c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_edc8ca7f59d8bf3f249b009d5e0a5c8047940c15db58f2b2f687b2f2b3d8d822->leave($__internal_edc8ca7f59d8bf3f249b009d5e0a5c8047940c15db58f2b2f687b2f2b3d8d822_prof);

        
        $__internal_e53b3691106b222d5953ee17ee04e5e7bfdd3db4e33e58c9e6beca79d2a475c8->leave($__internal_e53b3691106b222d5953ee17ee04e5e7bfdd3db4e33e58c9e6beca79d2a475c8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e10afc0d7c37a1ee17fccdfffbe3fc571dafa2efba2793ad27075f8eb1d41906 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10afc0d7c37a1ee17fccdfffbe3fc571dafa2efba2793ad27075f8eb1d41906->enter($__internal_e10afc0d7c37a1ee17fccdfffbe3fc571dafa2efba2793ad27075f8eb1d41906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9c9df5e224cbb23e69f0e2033d28a0c63c325901f9ffc505dd8c15b1923ca035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9df5e224cbb23e69f0e2033d28a0c63c325901f9ffc505dd8c15b1923ca035->enter($__internal_9c9df5e224cbb23e69f0e2033d28a0c63c325901f9ffc505dd8c15b1923ca035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9c9df5e224cbb23e69f0e2033d28a0c63c325901f9ffc505dd8c15b1923ca035->leave($__internal_9c9df5e224cbb23e69f0e2033d28a0c63c325901f9ffc505dd8c15b1923ca035_prof);

        
        $__internal_e10afc0d7c37a1ee17fccdfffbe3fc571dafa2efba2793ad27075f8eb1d41906->leave($__internal_e10afc0d7c37a1ee17fccdfffbe3fc571dafa2efba2793ad27075f8eb1d41906_prof);

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
