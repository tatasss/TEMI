<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_415b1b15156db4bc8bcc335a395d1cdd4ae89a027611d30c05707b22057412b5 extends Twig_Template
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
        $__internal_052cced3fbc52c27d36cab2b8ed3212ee991c6e51997ee4de00fcb33f6d85de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052cced3fbc52c27d36cab2b8ed3212ee991c6e51997ee4de00fcb33f6d85de2->enter($__internal_052cced3fbc52c27d36cab2b8ed3212ee991c6e51997ee4de00fcb33f6d85de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_b1d501268a6b041781d00d48f9b0e2f29ffadb1c385c708c6083b9719e4f52fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d501268a6b041781d00d48f9b0e2f29ffadb1c385c708c6083b9719e4f52fb->enter($__internal_b1d501268a6b041781d00d48f9b0e2f29ffadb1c385c708c6083b9719e4f52fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_052cced3fbc52c27d36cab2b8ed3212ee991c6e51997ee4de00fcb33f6d85de2->leave($__internal_052cced3fbc52c27d36cab2b8ed3212ee991c6e51997ee4de00fcb33f6d85de2_prof);

        
        $__internal_b1d501268a6b041781d00d48f9b0e2f29ffadb1c385c708c6083b9719e4f52fb->leave($__internal_b1d501268a6b041781d00d48f9b0e2f29ffadb1c385c708c6083b9719e4f52fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
