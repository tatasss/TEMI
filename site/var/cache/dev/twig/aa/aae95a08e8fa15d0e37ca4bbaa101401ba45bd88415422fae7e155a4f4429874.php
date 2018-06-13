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
        $__internal_6d93ef1093b5593838a2d96d885509c7cea49cca341a4ef50124f0c494c6caf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d93ef1093b5593838a2d96d885509c7cea49cca341a4ef50124f0c494c6caf6->enter($__internal_6d93ef1093b5593838a2d96d885509c7cea49cca341a4ef50124f0c494c6caf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_25877a9bc06cf1bf11562537d1cba7690725cf39e5dd1d1459335593bfa70b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25877a9bc06cf1bf11562537d1cba7690725cf39e5dd1d1459335593bfa70b33->enter($__internal_25877a9bc06cf1bf11562537d1cba7690725cf39e5dd1d1459335593bfa70b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6d93ef1093b5593838a2d96d885509c7cea49cca341a4ef50124f0c494c6caf6->leave($__internal_6d93ef1093b5593838a2d96d885509c7cea49cca341a4ef50124f0c494c6caf6_prof);

        
        $__internal_25877a9bc06cf1bf11562537d1cba7690725cf39e5dd1d1459335593bfa70b33->leave($__internal_25877a9bc06cf1bf11562537d1cba7690725cf39e5dd1d1459335593bfa70b33_prof);

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
