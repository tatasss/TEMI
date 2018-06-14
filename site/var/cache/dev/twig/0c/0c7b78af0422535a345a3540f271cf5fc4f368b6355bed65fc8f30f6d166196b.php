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
        $__internal_79f55a2b9fdbc660e5cc075fd26562a0eb19399150d70f1c26da9a107926fad2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f55a2b9fdbc660e5cc075fd26562a0eb19399150d70f1c26da9a107926fad2->enter($__internal_79f55a2b9fdbc660e5cc075fd26562a0eb19399150d70f1c26da9a107926fad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f3ef77da0bf879e6b3401635325b9da73a756b5f0500513125cd0986cb79a727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3ef77da0bf879e6b3401635325b9da73a756b5f0500513125cd0986cb79a727->enter($__internal_f3ef77da0bf879e6b3401635325b9da73a756b5f0500513125cd0986cb79a727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_79f55a2b9fdbc660e5cc075fd26562a0eb19399150d70f1c26da9a107926fad2->leave($__internal_79f55a2b9fdbc660e5cc075fd26562a0eb19399150d70f1c26da9a107926fad2_prof);

        
        $__internal_f3ef77da0bf879e6b3401635325b9da73a756b5f0500513125cd0986cb79a727->leave($__internal_f3ef77da0bf879e6b3401635325b9da73a756b5f0500513125cd0986cb79a727_prof);

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
