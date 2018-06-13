<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_afcd855cf6907a24781f62c7ae14eb8a6e62094b155e63d3bc1b0680c66ebf19 extends Twig_Template
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
        $__internal_fdf74348aa177b0548790135448ed68fdb84741e0903fbb01dd896b54619adc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdf74348aa177b0548790135448ed68fdb84741e0903fbb01dd896b54619adc7->enter($__internal_fdf74348aa177b0548790135448ed68fdb84741e0903fbb01dd896b54619adc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_2bbec76cd81aa349972388742e385b9a9a8eea37463efda1dcd47992f5bf7971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbec76cd81aa349972388742e385b9a9a8eea37463efda1dcd47992f5bf7971->enter($__internal_2bbec76cd81aa349972388742e385b9a9a8eea37463efda1dcd47992f5bf7971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_fdf74348aa177b0548790135448ed68fdb84741e0903fbb01dd896b54619adc7->leave($__internal_fdf74348aa177b0548790135448ed68fdb84741e0903fbb01dd896b54619adc7_prof);

        
        $__internal_2bbec76cd81aa349972388742e385b9a9a8eea37463efda1dcd47992f5bf7971->leave($__internal_2bbec76cd81aa349972388742e385b9a9a8eea37463efda1dcd47992f5bf7971_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
