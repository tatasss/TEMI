<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_af86f0cb8b4738c9200f637cca83358d6f7dba2632b0a13dc96759d1b8d11862 extends Twig_Template
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
        $__internal_3c50b265b81b1c8457d7e18e760161633d5486e2432e4703f99b48ad725c6b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c50b265b81b1c8457d7e18e760161633d5486e2432e4703f99b48ad725c6b27->enter($__internal_3c50b265b81b1c8457d7e18e760161633d5486e2432e4703f99b48ad725c6b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_b57b0fc3173932bee7bb0b29aa3437184de6c6c314fde1556f2c931f450524e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57b0fc3173932bee7bb0b29aa3437184de6c6c314fde1556f2c931f450524e0->enter($__internal_b57b0fc3173932bee7bb0b29aa3437184de6c6c314fde1556f2c931f450524e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_3c50b265b81b1c8457d7e18e760161633d5486e2432e4703f99b48ad725c6b27->leave($__internal_3c50b265b81b1c8457d7e18e760161633d5486e2432e4703f99b48ad725c6b27_prof);

        
        $__internal_b57b0fc3173932bee7bb0b29aa3437184de6c6c314fde1556f2c931f450524e0->leave($__internal_b57b0fc3173932bee7bb0b29aa3437184de6c6c314fde1556f2c931f450524e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
