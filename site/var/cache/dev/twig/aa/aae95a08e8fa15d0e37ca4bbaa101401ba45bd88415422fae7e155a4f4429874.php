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
        $__internal_097869384c4596d10233c14053a03469aca07a679628f5ab16ffa3a9ccfc9f5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_097869384c4596d10233c14053a03469aca07a679628f5ab16ffa3a9ccfc9f5f->enter($__internal_097869384c4596d10233c14053a03469aca07a679628f5ab16ffa3a9ccfc9f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_4f5a0d7d78e67fe575ce6a770d6c039cbba0c33a545da2ac20772c30b10cac8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f5a0d7d78e67fe575ce6a770d6c039cbba0c33a545da2ac20772c30b10cac8c->enter($__internal_4f5a0d7d78e67fe575ce6a770d6c039cbba0c33a545da2ac20772c30b10cac8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_097869384c4596d10233c14053a03469aca07a679628f5ab16ffa3a9ccfc9f5f->leave($__internal_097869384c4596d10233c14053a03469aca07a679628f5ab16ffa3a9ccfc9f5f_prof);

        
        $__internal_4f5a0d7d78e67fe575ce6a770d6c039cbba0c33a545da2ac20772c30b10cac8c->leave($__internal_4f5a0d7d78e67fe575ce6a770d6c039cbba0c33a545da2ac20772c30b10cac8c_prof);

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
", "@Framework/Form/choice_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
