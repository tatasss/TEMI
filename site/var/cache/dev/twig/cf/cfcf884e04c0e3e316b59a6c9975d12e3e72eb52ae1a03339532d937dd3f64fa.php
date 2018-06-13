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
        $__internal_a66ea74ceecfb68d17ea4662b9b1fd755d504fcd5de8fcb51c80b56c75264506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a66ea74ceecfb68d17ea4662b9b1fd755d504fcd5de8fcb51c80b56c75264506->enter($__internal_a66ea74ceecfb68d17ea4662b9b1fd755d504fcd5de8fcb51c80b56c75264506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_b6206c07002aeaeb6559d71ab5a828c1a8d835c080789a9236fc1ecb4843bbd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6206c07002aeaeb6559d71ab5a828c1a8d835c080789a9236fc1ecb4843bbd9->enter($__internal_b6206c07002aeaeb6559d71ab5a828c1a8d835c080789a9236fc1ecb4843bbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a66ea74ceecfb68d17ea4662b9b1fd755d504fcd5de8fcb51c80b56c75264506->leave($__internal_a66ea74ceecfb68d17ea4662b9b1fd755d504fcd5de8fcb51c80b56c75264506_prof);

        
        $__internal_b6206c07002aeaeb6559d71ab5a828c1a8d835c080789a9236fc1ecb4843bbd9->leave($__internal_b6206c07002aeaeb6559d71ab5a828c1a8d835c080789a9236fc1ecb4843bbd9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6369195c57eeab0e6085eb0703e748d5fc485080806805ac3ba0a97636b8994b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6369195c57eeab0e6085eb0703e748d5fc485080806805ac3ba0a97636b8994b->enter($__internal_6369195c57eeab0e6085eb0703e748d5fc485080806805ac3ba0a97636b8994b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9dc1ef25c64e120e08f71e4de683ba620100e2c637a3e73639eca975105b95f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc1ef25c64e120e08f71e4de683ba620100e2c637a3e73639eca975105b95f9->enter($__internal_9dc1ef25c64e120e08f71e4de683ba620100e2c637a3e73639eca975105b95f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9dc1ef25c64e120e08f71e4de683ba620100e2c637a3e73639eca975105b95f9->leave($__internal_9dc1ef25c64e120e08f71e4de683ba620100e2c637a3e73639eca975105b95f9_prof);

        
        $__internal_6369195c57eeab0e6085eb0703e748d5fc485080806805ac3ba0a97636b8994b->leave($__internal_6369195c57eeab0e6085eb0703e748d5fc485080806805ac3ba0a97636b8994b_prof);

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
