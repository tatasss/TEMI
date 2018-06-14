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
        $__internal_654164473ea81c8027de1b0c8a9fa0f96cdc4d407d41d00fdc2c622d0caba722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_654164473ea81c8027de1b0c8a9fa0f96cdc4d407d41d00fdc2c622d0caba722->enter($__internal_654164473ea81c8027de1b0c8a9fa0f96cdc4d407d41d00fdc2c622d0caba722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_a39b13fd87a69f30628dadd866a540b4a23f1747a882ad92ee9e42a26cdf85dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a39b13fd87a69f30628dadd866a540b4a23f1747a882ad92ee9e42a26cdf85dc->enter($__internal_a39b13fd87a69f30628dadd866a540b4a23f1747a882ad92ee9e42a26cdf85dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_654164473ea81c8027de1b0c8a9fa0f96cdc4d407d41d00fdc2c622d0caba722->leave($__internal_654164473ea81c8027de1b0c8a9fa0f96cdc4d407d41d00fdc2c622d0caba722_prof);

        
        $__internal_a39b13fd87a69f30628dadd866a540b4a23f1747a882ad92ee9e42a26cdf85dc->leave($__internal_a39b13fd87a69f30628dadd866a540b4a23f1747a882ad92ee9e42a26cdf85dc_prof);

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
