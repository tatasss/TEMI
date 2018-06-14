<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_4f796580e87d773d86bfaa3204e08716030fec932392b2fb4c541c12b41ce4a1 extends Twig_Template
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
        $__internal_8435d4e57b23c43865042c089b027a2b7b7a7036edebc907460c09b9bf3195a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8435d4e57b23c43865042c089b027a2b7b7a7036edebc907460c09b9bf3195a3->enter($__internal_8435d4e57b23c43865042c089b027a2b7b7a7036edebc907460c09b9bf3195a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c29d8016030d3736245791a1ecae63d9631f618b2c290f8f7a85ada1fb48c0a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29d8016030d3736245791a1ecae63d9631f618b2c290f8f7a85ada1fb48c0a4->enter($__internal_c29d8016030d3736245791a1ecae63d9631f618b2c290f8f7a85ada1fb48c0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8435d4e57b23c43865042c089b027a2b7b7a7036edebc907460c09b9bf3195a3->leave($__internal_8435d4e57b23c43865042c089b027a2b7b7a7036edebc907460c09b9bf3195a3_prof);

        
        $__internal_c29d8016030d3736245791a1ecae63d9631f618b2c290f8f7a85ada1fb48c0a4->leave($__internal_c29d8016030d3736245791a1ecae63d9631f618b2c290f8f7a85ada1fb48c0a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
