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
        $__internal_ea6a51e119271f2923eb3b94587f6e8f1307d02617eb948f5156990ce15fc68b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6a51e119271f2923eb3b94587f6e8f1307d02617eb948f5156990ce15fc68b->enter($__internal_ea6a51e119271f2923eb3b94587f6e8f1307d02617eb948f5156990ce15fc68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_32d64e23635e55b5e21555594e53184d12ab0387ee0e50fbdfad8bdb25ea6ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d64e23635e55b5e21555594e53184d12ab0387ee0e50fbdfad8bdb25ea6ef3->enter($__internal_32d64e23635e55b5e21555594e53184d12ab0387ee0e50fbdfad8bdb25ea6ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_ea6a51e119271f2923eb3b94587f6e8f1307d02617eb948f5156990ce15fc68b->leave($__internal_ea6a51e119271f2923eb3b94587f6e8f1307d02617eb948f5156990ce15fc68b_prof);

        
        $__internal_32d64e23635e55b5e21555594e53184d12ab0387ee0e50fbdfad8bdb25ea6ef3->leave($__internal_32d64e23635e55b5e21555594e53184d12ab0387ee0e50fbdfad8bdb25ea6ef3_prof);

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
", "@Framework/Form/choice_options.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
