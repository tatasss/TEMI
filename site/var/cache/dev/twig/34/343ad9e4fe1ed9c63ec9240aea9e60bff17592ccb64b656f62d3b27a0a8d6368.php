<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_fe7fe160a3bbbe56bd0e7f877579c8aca5f8796033a23b5bf7bb64c3f3971ee8 extends Twig_Template
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
        $__internal_12db61955a0c33d14793877676db274bb08e3238edc613e6299ef04c7852109a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12db61955a0c33d14793877676db274bb08e3238edc613e6299ef04c7852109a->enter($__internal_12db61955a0c33d14793877676db274bb08e3238edc613e6299ef04c7852109a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_86e3f137e4cb805aed0e7a769ca7e0169396c325e21281d2e6b8e811b91cc997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e3f137e4cb805aed0e7a769ca7e0169396c325e21281d2e6b8e811b91cc997->enter($__internal_86e3f137e4cb805aed0e7a769ca7e0169396c325e21281d2e6b8e811b91cc997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_12db61955a0c33d14793877676db274bb08e3238edc613e6299ef04c7852109a->leave($__internal_12db61955a0c33d14793877676db274bb08e3238edc613e6299ef04c7852109a_prof);

        
        $__internal_86e3f137e4cb805aed0e7a769ca7e0169396c325e21281d2e6b8e811b91cc997->leave($__internal_86e3f137e4cb805aed0e7a769ca7e0169396c325e21281d2e6b8e811b91cc997_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
