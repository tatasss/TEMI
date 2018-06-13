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
        $__internal_5ba2228e81328dda36ea8918b8bd262e7b6202ecff1f6b289c98e58a98fc7491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ba2228e81328dda36ea8918b8bd262e7b6202ecff1f6b289c98e58a98fc7491->enter($__internal_5ba2228e81328dda36ea8918b8bd262e7b6202ecff1f6b289c98e58a98fc7491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_c59984a3980340b1b8839c008c69832e8c8354a2087a99c544a37a6160d60727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59984a3980340b1b8839c008c69832e8c8354a2087a99c544a37a6160d60727->enter($__internal_c59984a3980340b1b8839c008c69832e8c8354a2087a99c544a37a6160d60727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_5ba2228e81328dda36ea8918b8bd262e7b6202ecff1f6b289c98e58a98fc7491->leave($__internal_5ba2228e81328dda36ea8918b8bd262e7b6202ecff1f6b289c98e58a98fc7491_prof);

        
        $__internal_c59984a3980340b1b8839c008c69832e8c8354a2087a99c544a37a6160d60727->leave($__internal_c59984a3980340b1b8839c008c69832e8c8354a2087a99c544a37a6160d60727_prof);

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
