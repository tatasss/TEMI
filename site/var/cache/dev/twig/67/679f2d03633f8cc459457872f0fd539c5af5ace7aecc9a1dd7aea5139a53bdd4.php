<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_35ec3d6bd732403edb6c896fe1c336deee3265e7159f645205466b9da453b702 extends Twig_Template
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
        $__internal_53677b190a612bfbd375051722aea5a9c37dd2ff55f41f5c7df3692f4d862a6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53677b190a612bfbd375051722aea5a9c37dd2ff55f41f5c7df3692f4d862a6a->enter($__internal_53677b190a612bfbd375051722aea5a9c37dd2ff55f41f5c7df3692f4d862a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_2038531cc940865ad232fbbc9af26e44007b5441c0dc325d28ee43d84b544d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2038531cc940865ad232fbbc9af26e44007b5441c0dc325d28ee43d84b544d71->enter($__internal_2038531cc940865ad232fbbc9af26e44007b5441c0dc325d28ee43d84b544d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_53677b190a612bfbd375051722aea5a9c37dd2ff55f41f5c7df3692f4d862a6a->leave($__internal_53677b190a612bfbd375051722aea5a9c37dd2ff55f41f5c7df3692f4d862a6a_prof);

        
        $__internal_2038531cc940865ad232fbbc9af26e44007b5441c0dc325d28ee43d84b544d71->leave($__internal_2038531cc940865ad232fbbc9af26e44007b5441c0dc325d28ee43d84b544d71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
