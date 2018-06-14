<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2a0436dd2a9f53c23f00170b2c5da711c543b368dd900f9f1d6defcf1f6bdf85 extends Twig_Template
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
        $__internal_3546b1b28d1aa2528308319b2a1da6c8cae0ffa657233ed4dd4d310455f59192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3546b1b28d1aa2528308319b2a1da6c8cae0ffa657233ed4dd4d310455f59192->enter($__internal_3546b1b28d1aa2528308319b2a1da6c8cae0ffa657233ed4dd4d310455f59192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_bdb2fd3f5c98eec1047d0b8703636fa3e3bb45e83521cfe8faf8902258b639ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb2fd3f5c98eec1047d0b8703636fa3e3bb45e83521cfe8faf8902258b639ff->enter($__internal_bdb2fd3f5c98eec1047d0b8703636fa3e3bb45e83521cfe8faf8902258b639ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3546b1b28d1aa2528308319b2a1da6c8cae0ffa657233ed4dd4d310455f59192->leave($__internal_3546b1b28d1aa2528308319b2a1da6c8cae0ffa657233ed4dd4d310455f59192_prof);

        
        $__internal_bdb2fd3f5c98eec1047d0b8703636fa3e3bb45e83521cfe8faf8902258b639ff->leave($__internal_bdb2fd3f5c98eec1047d0b8703636fa3e3bb45e83521cfe8faf8902258b639ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
