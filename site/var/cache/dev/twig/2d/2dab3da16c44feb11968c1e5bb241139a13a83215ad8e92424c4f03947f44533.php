<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6e4d89314752a173849abb5847f691a366e893444c7161b3f1b6c502680dd908 extends Twig_Template
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
        $__internal_c99f2c72dcc56c6141cd08b2496bc3218daf3bca51fe51a1d3717c9f2356bc8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c99f2c72dcc56c6141cd08b2496bc3218daf3bca51fe51a1d3717c9f2356bc8f->enter($__internal_c99f2c72dcc56c6141cd08b2496bc3218daf3bca51fe51a1d3717c9f2356bc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_965d62a6603323004fbb4c43093a664df0ef1017ce7289e7e65abcee665ec167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965d62a6603323004fbb4c43093a664df0ef1017ce7289e7e65abcee665ec167->enter($__internal_965d62a6603323004fbb4c43093a664df0ef1017ce7289e7e65abcee665ec167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c99f2c72dcc56c6141cd08b2496bc3218daf3bca51fe51a1d3717c9f2356bc8f->leave($__internal_c99f2c72dcc56c6141cd08b2496bc3218daf3bca51fe51a1d3717c9f2356bc8f_prof);

        
        $__internal_965d62a6603323004fbb4c43093a664df0ef1017ce7289e7e65abcee665ec167->leave($__internal_965d62a6603323004fbb4c43093a664df0ef1017ce7289e7e65abcee665ec167_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
