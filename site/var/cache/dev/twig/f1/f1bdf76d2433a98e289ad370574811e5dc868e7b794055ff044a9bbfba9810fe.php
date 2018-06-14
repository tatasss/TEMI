<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_997d3eb9742480f1572a7421d09bbe71ada11c938082f5cb7e7ac6dc0c7473c9 extends Twig_Template
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
        $__internal_14bf43e302c518793feed21cd60966d242e216119bf6f1fca439e3828802f7da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14bf43e302c518793feed21cd60966d242e216119bf6f1fca439e3828802f7da->enter($__internal_14bf43e302c518793feed21cd60966d242e216119bf6f1fca439e3828802f7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_6ffd9b9af48cc97c797d33fb779a731de741f693bf01f4f8d8e032bb71da23c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ffd9b9af48cc97c797d33fb779a731de741f693bf01f4f8d8e032bb71da23c2->enter($__internal_6ffd9b9af48cc97c797d33fb779a731de741f693bf01f4f8d8e032bb71da23c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_14bf43e302c518793feed21cd60966d242e216119bf6f1fca439e3828802f7da->leave($__internal_14bf43e302c518793feed21cd60966d242e216119bf6f1fca439e3828802f7da_prof);

        
        $__internal_6ffd9b9af48cc97c797d33fb779a731de741f693bf01f4f8d8e032bb71da23c2->leave($__internal_6ffd9b9af48cc97c797d33fb779a731de741f693bf01f4f8d8e032bb71da23c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
