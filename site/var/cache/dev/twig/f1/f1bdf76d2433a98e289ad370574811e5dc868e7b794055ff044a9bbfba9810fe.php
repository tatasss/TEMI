<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_997d3eb9742480f1572a7421d09bbe71ada11c938082f5cb7e7ac6dc0c7473c9 extends Twig_Template
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
        $__internal_af2a2af63f4d5c7209bcd372f6dc467918aa156a618ed0a0a69eaabd365abeac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af2a2af63f4d5c7209bcd372f6dc467918aa156a618ed0a0a69eaabd365abeac->enter($__internal_af2a2af63f4d5c7209bcd372f6dc467918aa156a618ed0a0a69eaabd365abeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_e32c55a288d8c39df89b8b049b9da5725d8188a39281483b728640fc289452ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32c55a288d8c39df89b8b049b9da5725d8188a39281483b728640fc289452ae->enter($__internal_e32c55a288d8c39df89b8b049b9da5725d8188a39281483b728640fc289452ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_af2a2af63f4d5c7209bcd372f6dc467918aa156a618ed0a0a69eaabd365abeac->leave($__internal_af2a2af63f4d5c7209bcd372f6dc467918aa156a618ed0a0a69eaabd365abeac_prof);

        
        $__internal_e32c55a288d8c39df89b8b049b9da5725d8188a39281483b728640fc289452ae->leave($__internal_e32c55a288d8c39df89b8b049b9da5725d8188a39281483b728640fc289452ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
