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
        $__internal_96f71df5e0d75f6c8fa9d4bb030ce9eea8d8df6037a1a0b02bb896d172d41dd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f71df5e0d75f6c8fa9d4bb030ce9eea8d8df6037a1a0b02bb896d172d41dd3->enter($__internal_96f71df5e0d75f6c8fa9d4bb030ce9eea8d8df6037a1a0b02bb896d172d41dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d8512278dfdb38f2b5e5e0a175ca5f1f95cf7795e22e4785777ac493165d2eea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8512278dfdb38f2b5e5e0a175ca5f1f95cf7795e22e4785777ac493165d2eea->enter($__internal_d8512278dfdb38f2b5e5e0a175ca5f1f95cf7795e22e4785777ac493165d2eea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_96f71df5e0d75f6c8fa9d4bb030ce9eea8d8df6037a1a0b02bb896d172d41dd3->leave($__internal_96f71df5e0d75f6c8fa9d4bb030ce9eea8d8df6037a1a0b02bb896d172d41dd3_prof);

        
        $__internal_d8512278dfdb38f2b5e5e0a175ca5f1f95cf7795e22e4785777ac493165d2eea->leave($__internal_d8512278dfdb38f2b5e5e0a175ca5f1f95cf7795e22e4785777ac493165d2eea_prof);

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
", "@Framework/Form/hidden_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
