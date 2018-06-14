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
        $__internal_5d7a634049e31dbae900a67f746602b97b9655dc5a2985d08b1f18b77a1a2d3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7a634049e31dbae900a67f746602b97b9655dc5a2985d08b1f18b77a1a2d3a->enter($__internal_5d7a634049e31dbae900a67f746602b97b9655dc5a2985d08b1f18b77a1a2d3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b271fd57a9325af4d2e513f47168d32683e607b9760328e94565db19ffca5c5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b271fd57a9325af4d2e513f47168d32683e607b9760328e94565db19ffca5c5b->enter($__internal_b271fd57a9325af4d2e513f47168d32683e607b9760328e94565db19ffca5c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_5d7a634049e31dbae900a67f746602b97b9655dc5a2985d08b1f18b77a1a2d3a->leave($__internal_5d7a634049e31dbae900a67f746602b97b9655dc5a2985d08b1f18b77a1a2d3a_prof);

        
        $__internal_b271fd57a9325af4d2e513f47168d32683e607b9760328e94565db19ffca5c5b->leave($__internal_b271fd57a9325af4d2e513f47168d32683e607b9760328e94565db19ffca5c5b_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
