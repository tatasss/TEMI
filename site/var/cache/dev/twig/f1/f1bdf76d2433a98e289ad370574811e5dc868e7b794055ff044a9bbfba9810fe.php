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
        $__internal_c1d86d483c86ea0969ff51cfe3452efde077c53e12f4ab1e1e4200c4963d5419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1d86d483c86ea0969ff51cfe3452efde077c53e12f4ab1e1e4200c4963d5419->enter($__internal_c1d86d483c86ea0969ff51cfe3452efde077c53e12f4ab1e1e4200c4963d5419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_f401c719056a95d2bb77dbe767800b9d3daf4bba253ac4fcaf29a15d9756acd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f401c719056a95d2bb77dbe767800b9d3daf4bba253ac4fcaf29a15d9756acd2->enter($__internal_f401c719056a95d2bb77dbe767800b9d3daf4bba253ac4fcaf29a15d9756acd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c1d86d483c86ea0969ff51cfe3452efde077c53e12f4ab1e1e4200c4963d5419->leave($__internal_c1d86d483c86ea0969ff51cfe3452efde077c53e12f4ab1e1e4200c4963d5419_prof);

        
        $__internal_f401c719056a95d2bb77dbe767800b9d3daf4bba253ac4fcaf29a15d9756acd2->leave($__internal_f401c719056a95d2bb77dbe767800b9d3daf4bba253ac4fcaf29a15d9756acd2_prof);

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
", "@Framework/Form/checkbox_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}