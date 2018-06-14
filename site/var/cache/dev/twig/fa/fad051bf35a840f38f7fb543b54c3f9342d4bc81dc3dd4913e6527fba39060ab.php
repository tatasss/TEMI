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
        $__internal_c9b7cf29c92062c5a76df48a017ab0c9ace6890ddf78ea1d5e078ee4e86f7f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b7cf29c92062c5a76df48a017ab0c9ace6890ddf78ea1d5e078ee4e86f7f8d->enter($__internal_c9b7cf29c92062c5a76df48a017ab0c9ace6890ddf78ea1d5e078ee4e86f7f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_d6db0153bfc5464a26ed9d1b3126e882efeb12fdf9e56fa4f7c1d8aa949f4940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6db0153bfc5464a26ed9d1b3126e882efeb12fdf9e56fa4f7c1d8aa949f4940->enter($__internal_d6db0153bfc5464a26ed9d1b3126e882efeb12fdf9e56fa4f7c1d8aa949f4940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c9b7cf29c92062c5a76df48a017ab0c9ace6890ddf78ea1d5e078ee4e86f7f8d->leave($__internal_c9b7cf29c92062c5a76df48a017ab0c9ace6890ddf78ea1d5e078ee4e86f7f8d_prof);

        
        $__internal_d6db0153bfc5464a26ed9d1b3126e882efeb12fdf9e56fa4f7c1d8aa949f4940->leave($__internal_d6db0153bfc5464a26ed9d1b3126e882efeb12fdf9e56fa4f7c1d8aa949f4940_prof);

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
