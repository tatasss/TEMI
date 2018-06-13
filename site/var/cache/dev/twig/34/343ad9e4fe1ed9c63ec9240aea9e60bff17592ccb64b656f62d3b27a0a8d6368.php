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
        $__internal_56164dab66dd6f90a94af128e68ddea5e549c449fb25e1fca9ab44e9df43374d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56164dab66dd6f90a94af128e68ddea5e549c449fb25e1fca9ab44e9df43374d->enter($__internal_56164dab66dd6f90a94af128e68ddea5e549c449fb25e1fca9ab44e9df43374d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b888a062a6ac7b01d9e2f7131e84836607bd2b93b253855f01c282e982e5b358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b888a062a6ac7b01d9e2f7131e84836607bd2b93b253855f01c282e982e5b358->enter($__internal_b888a062a6ac7b01d9e2f7131e84836607bd2b93b253855f01c282e982e5b358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_56164dab66dd6f90a94af128e68ddea5e549c449fb25e1fca9ab44e9df43374d->leave($__internal_56164dab66dd6f90a94af128e68ddea5e549c449fb25e1fca9ab44e9df43374d_prof);

        
        $__internal_b888a062a6ac7b01d9e2f7131e84836607bd2b93b253855f01c282e982e5b358->leave($__internal_b888a062a6ac7b01d9e2f7131e84836607bd2b93b253855f01c282e982e5b358_prof);

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
", "@Framework/Form/radio_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
