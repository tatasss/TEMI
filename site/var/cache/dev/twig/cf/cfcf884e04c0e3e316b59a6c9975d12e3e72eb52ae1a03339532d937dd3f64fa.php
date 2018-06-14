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
        $__internal_ceb9abc2c1b77216cd7ec74818f43538d2dab1a23e719320d80497a63a6b9b84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb9abc2c1b77216cd7ec74818f43538d2dab1a23e719320d80497a63a6b9b84->enter($__internal_ceb9abc2c1b77216cd7ec74818f43538d2dab1a23e719320d80497a63a6b9b84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_d4acc77b516f74db3b243c613cfa6cb5c3bb4c20e5a1963c2f065fbb066b503d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4acc77b516f74db3b243c613cfa6cb5c3bb4c20e5a1963c2f065fbb066b503d->enter($__internal_d4acc77b516f74db3b243c613cfa6cb5c3bb4c20e5a1963c2f065fbb066b503d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ceb9abc2c1b77216cd7ec74818f43538d2dab1a23e719320d80497a63a6b9b84->leave($__internal_ceb9abc2c1b77216cd7ec74818f43538d2dab1a23e719320d80497a63a6b9b84_prof);

        
        $__internal_d4acc77b516f74db3b243c613cfa6cb5c3bb4c20e5a1963c2f065fbb066b503d->leave($__internal_d4acc77b516f74db3b243c613cfa6cb5c3bb4c20e5a1963c2f065fbb066b503d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8f8bc3ce8a02a62e85b0e9444729b6d02032460e8ab75276be429f3adc55d19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8f8bc3ce8a02a62e85b0e9444729b6d02032460e8ab75276be429f3adc55d19->enter($__internal_f8f8bc3ce8a02a62e85b0e9444729b6d02032460e8ab75276be429f3adc55d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3c6a870475929e1b0ebeb2e28ea7cad5c87b4667e57fbfe8d19e131fba11a8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c6a870475929e1b0ebeb2e28ea7cad5c87b4667e57fbfe8d19e131fba11a8b0->enter($__internal_3c6a870475929e1b0ebeb2e28ea7cad5c87b4667e57fbfe8d19e131fba11a8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3c6a870475929e1b0ebeb2e28ea7cad5c87b4667e57fbfe8d19e131fba11a8b0->leave($__internal_3c6a870475929e1b0ebeb2e28ea7cad5c87b4667e57fbfe8d19e131fba11a8b0_prof);

        
        $__internal_f8f8bc3ce8a02a62e85b0e9444729b6d02032460e8ab75276be429f3adc55d19->leave($__internal_f8f8bc3ce8a02a62e85b0e9444729b6d02032460e8ab75276be429f3adc55d19_prof);

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
