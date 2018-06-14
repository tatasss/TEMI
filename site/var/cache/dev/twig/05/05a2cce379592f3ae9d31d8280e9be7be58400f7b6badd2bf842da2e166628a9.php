<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_336451892812f6966f1656279381796f952d5020be531b89f225e395f0118f91 extends Twig_Template
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
        $__internal_023bb5257c09b8335f03b8a0d4bdf59b9aa8e30afa72f42078048f7cd5f27740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023bb5257c09b8335f03b8a0d4bdf59b9aa8e30afa72f42078048f7cd5f27740->enter($__internal_023bb5257c09b8335f03b8a0d4bdf59b9aa8e30afa72f42078048f7cd5f27740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_7b2cb0475bd4e49127f2161783e317fe333df081fb52f9b528d0086bd7389675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2cb0475bd4e49127f2161783e317fe333df081fb52f9b528d0086bd7389675->enter($__internal_7b2cb0475bd4e49127f2161783e317fe333df081fb52f9b528d0086bd7389675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_023bb5257c09b8335f03b8a0d4bdf59b9aa8e30afa72f42078048f7cd5f27740->leave($__internal_023bb5257c09b8335f03b8a0d4bdf59b9aa8e30afa72f42078048f7cd5f27740_prof);

        
        $__internal_7b2cb0475bd4e49127f2161783e317fe333df081fb52f9b528d0086bd7389675->leave($__internal_7b2cb0475bd4e49127f2161783e317fe333df081fb52f9b528d0086bd7389675_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
