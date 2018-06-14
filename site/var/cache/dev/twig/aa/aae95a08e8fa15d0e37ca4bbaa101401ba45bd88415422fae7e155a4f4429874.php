<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_604a9872c0bf5aa6873d038b21f631a1a312f27908d561fe25030d1c1ef60740 extends Twig_Template
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
        $__internal_38bada967b3f070aa8ed6ba9be9aa6521790cfee3921b6ec78223b35f988a842 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38bada967b3f070aa8ed6ba9be9aa6521790cfee3921b6ec78223b35f988a842->enter($__internal_38bada967b3f070aa8ed6ba9be9aa6521790cfee3921b6ec78223b35f988a842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_8f0b8aa55f6c5db78f2f931ce3eb6e2c53d8c99997cc3d04874c196a30923dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0b8aa55f6c5db78f2f931ce3eb6e2c53d8c99997cc3d04874c196a30923dc2->enter($__internal_8f0b8aa55f6c5db78f2f931ce3eb6e2c53d8c99997cc3d04874c196a30923dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_38bada967b3f070aa8ed6ba9be9aa6521790cfee3921b6ec78223b35f988a842->leave($__internal_38bada967b3f070aa8ed6ba9be9aa6521790cfee3921b6ec78223b35f988a842_prof);

        
        $__internal_8f0b8aa55f6c5db78f2f931ce3eb6e2c53d8c99997cc3d04874c196a30923dc2->leave($__internal_8f0b8aa55f6c5db78f2f931ce3eb6e2c53d8c99997cc3d04874c196a30923dc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
