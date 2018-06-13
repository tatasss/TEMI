<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_7b1d132fc9e84d51b2002d48d0347b95dad91c790ac18776d29caa598a2c4bb2 extends Twig_Template
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
        $__internal_3c939dafb8649766d4796f362120ddb792d403f32e18aad3d5dedcb01cd46791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c939dafb8649766d4796f362120ddb792d403f32e18aad3d5dedcb01cd46791->enter($__internal_3c939dafb8649766d4796f362120ddb792d403f32e18aad3d5dedcb01cd46791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_5eaeb4f14e455f86f75a33e500a8d7948226f6f491dab8da6ec99b9b78813f1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eaeb4f14e455f86f75a33e500a8d7948226f6f491dab8da6ec99b9b78813f1e->enter($__internal_5eaeb4f14e455f86f75a33e500a8d7948226f6f491dab8da6ec99b9b78813f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3c939dafb8649766d4796f362120ddb792d403f32e18aad3d5dedcb01cd46791->leave($__internal_3c939dafb8649766d4796f362120ddb792d403f32e18aad3d5dedcb01cd46791_prof);

        
        $__internal_5eaeb4f14e455f86f75a33e500a8d7948226f6f491dab8da6ec99b9b78813f1e->leave($__internal_5eaeb4f14e455f86f75a33e500a8d7948226f6f491dab8da6ec99b9b78813f1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
