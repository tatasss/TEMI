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
        $__internal_3b087aa9ca195f003a045428b89ae99c8b75bbb37009dac857573083887aeb4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b087aa9ca195f003a045428b89ae99c8b75bbb37009dac857573083887aeb4a->enter($__internal_3b087aa9ca195f003a045428b89ae99c8b75bbb37009dac857573083887aeb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_ed776d76fbe333075950b2810dbf01f19135a6d91e13a67e098f720efdf653fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed776d76fbe333075950b2810dbf01f19135a6d91e13a67e098f720efdf653fb->enter($__internal_ed776d76fbe333075950b2810dbf01f19135a6d91e13a67e098f720efdf653fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3b087aa9ca195f003a045428b89ae99c8b75bbb37009dac857573083887aeb4a->leave($__internal_3b087aa9ca195f003a045428b89ae99c8b75bbb37009dac857573083887aeb4a_prof);

        
        $__internal_ed776d76fbe333075950b2810dbf01f19135a6d91e13a67e098f720efdf653fb->leave($__internal_ed776d76fbe333075950b2810dbf01f19135a6d91e13a67e098f720efdf653fb_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
