<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_dcf1a5437117ce41a357013b25ff33ab71d8fe5351a3af5a2898ae37a6995555 extends Twig_Template
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
        $__internal_a6536e35a095f95e978d32e1b9b00f15c5a944cad362d543784478b5c1c2bed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6536e35a095f95e978d32e1b9b00f15c5a944cad362d543784478b5c1c2bed8->enter($__internal_a6536e35a095f95e978d32e1b9b00f15c5a944cad362d543784478b5c1c2bed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_c655905cc6e9f24c18686c9fe80f8f71b65b205939d60dd1fc91a3ed6fc4292a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c655905cc6e9f24c18686c9fe80f8f71b65b205939d60dd1fc91a3ed6fc4292a->enter($__internal_c655905cc6e9f24c18686c9fe80f8f71b65b205939d60dd1fc91a3ed6fc4292a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a6536e35a095f95e978d32e1b9b00f15c5a944cad362d543784478b5c1c2bed8->leave($__internal_a6536e35a095f95e978d32e1b9b00f15c5a944cad362d543784478b5c1c2bed8_prof);

        
        $__internal_c655905cc6e9f24c18686c9fe80f8f71b65b205939d60dd1fc91a3ed6fc4292a->leave($__internal_c655905cc6e9f24c18686c9fe80f8f71b65b205939d60dd1fc91a3ed6fc4292a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
