<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_b3eea5658d371baf432e0acc2a63b6b64484a8bed519c05c3b2df3694ae1b388 extends Twig_Template
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
        $__internal_67d5470933d4f0069f2119c4988f9f3502073071474daad6739940221fb064a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67d5470933d4f0069f2119c4988f9f3502073071474daad6739940221fb064a1->enter($__internal_67d5470933d4f0069f2119c4988f9f3502073071474daad6739940221fb064a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_5e2222c5d98ae43b3947bc09b6d83abf35f768b0bbca42ad826b282242662a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2222c5d98ae43b3947bc09b6d83abf35f768b0bbca42ad826b282242662a5a->enter($__internal_5e2222c5d98ae43b3947bc09b6d83abf35f768b0bbca42ad826b282242662a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_67d5470933d4f0069f2119c4988f9f3502073071474daad6739940221fb064a1->leave($__internal_67d5470933d4f0069f2119c4988f9f3502073071474daad6739940221fb064a1_prof);

        
        $__internal_5e2222c5d98ae43b3947bc09b6d83abf35f768b0bbca42ad826b282242662a5a->leave($__internal_5e2222c5d98ae43b3947bc09b6d83abf35f768b0bbca42ad826b282242662a5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
