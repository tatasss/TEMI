<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7a6961870f6169fbcf2537da657022208443860fb56a3d37286b328109763aac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3b876f4e3c8922e3fbed7906c072a61195d66e4d5f728d044cbca72262937e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b876f4e3c8922e3fbed7906c072a61195d66e4d5f728d044cbca72262937e3->enter($__internal_b3b876f4e3c8922e3fbed7906c072a61195d66e4d5f728d044cbca72262937e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d6becfb6813cc3de813c8a557d3142ee2e095ac3052a1c1ba1b25ed1480611c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6becfb6813cc3de813c8a557d3142ee2e095ac3052a1c1ba1b25ed1480611c1->enter($__internal_d6becfb6813cc3de813c8a557d3142ee2e095ac3052a1c1ba1b25ed1480611c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b3b876f4e3c8922e3fbed7906c072a61195d66e4d5f728d044cbca72262937e3->leave($__internal_b3b876f4e3c8922e3fbed7906c072a61195d66e4d5f728d044cbca72262937e3_prof);

        
        $__internal_d6becfb6813cc3de813c8a557d3142ee2e095ac3052a1c1ba1b25ed1480611c1->leave($__internal_d6becfb6813cc3de813c8a557d3142ee2e095ac3052a1c1ba1b25ed1480611c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
