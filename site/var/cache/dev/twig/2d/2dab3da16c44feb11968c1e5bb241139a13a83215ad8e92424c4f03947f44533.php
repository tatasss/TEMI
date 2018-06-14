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
        $__internal_87bfb4b92a0d405f4dc64e3822d40941f7421790c107a293bd3161937280f66c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87bfb4b92a0d405f4dc64e3822d40941f7421790c107a293bd3161937280f66c->enter($__internal_87bfb4b92a0d405f4dc64e3822d40941f7421790c107a293bd3161937280f66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_d9c23729a21a9bbdafc6e59105435da1f226828b50c7ca3d5907dcb163533a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9c23729a21a9bbdafc6e59105435da1f226828b50c7ca3d5907dcb163533a5b->enter($__internal_d9c23729a21a9bbdafc6e59105435da1f226828b50c7ca3d5907dcb163533a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_87bfb4b92a0d405f4dc64e3822d40941f7421790c107a293bd3161937280f66c->leave($__internal_87bfb4b92a0d405f4dc64e3822d40941f7421790c107a293bd3161937280f66c_prof);

        
        $__internal_d9c23729a21a9bbdafc6e59105435da1f226828b50c7ca3d5907dcb163533a5b->leave($__internal_d9c23729a21a9bbdafc6e59105435da1f226828b50c7ca3d5907dcb163533a5b_prof);

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
