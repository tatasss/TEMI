<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0401a279fd24945d9fc83bf665faf72fd4810d06350e6175af0bf61165834f89 extends Twig_Template
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
        $__internal_acd0d85fa7ede58aa09602c26c6d5a4368b9a643c006370eaca24dbf043ef6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd0d85fa7ede58aa09602c26c6d5a4368b9a643c006370eaca24dbf043ef6f4->enter($__internal_acd0d85fa7ede58aa09602c26c6d5a4368b9a643c006370eaca24dbf043ef6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_63548c15b8f9e4cb87c01bbd7b75131b44772a9020b003be4c33ca01d75b41a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63548c15b8f9e4cb87c01bbd7b75131b44772a9020b003be4c33ca01d75b41a1->enter($__internal_63548c15b8f9e4cb87c01bbd7b75131b44772a9020b003be4c33ca01d75b41a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_acd0d85fa7ede58aa09602c26c6d5a4368b9a643c006370eaca24dbf043ef6f4->leave($__internal_acd0d85fa7ede58aa09602c26c6d5a4368b9a643c006370eaca24dbf043ef6f4_prof);

        
        $__internal_63548c15b8f9e4cb87c01bbd7b75131b44772a9020b003be4c33ca01d75b41a1->leave($__internal_63548c15b8f9e4cb87c01bbd7b75131b44772a9020b003be4c33ca01d75b41a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
