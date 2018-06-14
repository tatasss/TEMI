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
        $__internal_4a1c57138184b6a0a8632bbcb498545c694fcb7e1dffeef0ca24208028b2dff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a1c57138184b6a0a8632bbcb498545c694fcb7e1dffeef0ca24208028b2dff8->enter($__internal_4a1c57138184b6a0a8632bbcb498545c694fcb7e1dffeef0ca24208028b2dff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_1082b1406f2eb8841be160720b996912f70094a8a02defe158e4db8b72a756f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1082b1406f2eb8841be160720b996912f70094a8a02defe158e4db8b72a756f3->enter($__internal_1082b1406f2eb8841be160720b996912f70094a8a02defe158e4db8b72a756f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4a1c57138184b6a0a8632bbcb498545c694fcb7e1dffeef0ca24208028b2dff8->leave($__internal_4a1c57138184b6a0a8632bbcb498545c694fcb7e1dffeef0ca24208028b2dff8_prof);

        
        $__internal_1082b1406f2eb8841be160720b996912f70094a8a02defe158e4db8b72a756f3->leave($__internal_1082b1406f2eb8841be160720b996912f70094a8a02defe158e4db8b72a756f3_prof);

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
