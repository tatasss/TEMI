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
        $__internal_2ccdf93cafff2b3dc22b0b8595c970ef6f20d64142d0da27354460b9ab42b1e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ccdf93cafff2b3dc22b0b8595c970ef6f20d64142d0da27354460b9ab42b1e9->enter($__internal_2ccdf93cafff2b3dc22b0b8595c970ef6f20d64142d0da27354460b9ab42b1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_7d9cfd048ca5834080246b348ef1061806f7e3f54bd833868f121b4a6b9b06fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d9cfd048ca5834080246b348ef1061806f7e3f54bd833868f121b4a6b9b06fa->enter($__internal_7d9cfd048ca5834080246b348ef1061806f7e3f54bd833868f121b4a6b9b06fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_2ccdf93cafff2b3dc22b0b8595c970ef6f20d64142d0da27354460b9ab42b1e9->leave($__internal_2ccdf93cafff2b3dc22b0b8595c970ef6f20d64142d0da27354460b9ab42b1e9_prof);

        
        $__internal_7d9cfd048ca5834080246b348ef1061806f7e3f54bd833868f121b4a6b9b06fa->leave($__internal_7d9cfd048ca5834080246b348ef1061806f7e3f54bd833868f121b4a6b9b06fa_prof);

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
