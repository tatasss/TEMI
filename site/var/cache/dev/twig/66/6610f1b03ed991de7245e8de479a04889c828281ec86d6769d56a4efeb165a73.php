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
        $__internal_bff3588397be82f97a2e7c5af4fc95472df00b734434a3ef63c2782156acf03f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bff3588397be82f97a2e7c5af4fc95472df00b734434a3ef63c2782156acf03f->enter($__internal_bff3588397be82f97a2e7c5af4fc95472df00b734434a3ef63c2782156acf03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_1f3e131ec4331cf6cc0267995381ac28efdb66e975c5265141cd64543aa620ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3e131ec4331cf6cc0267995381ac28efdb66e975c5265141cd64543aa620ee->enter($__internal_1f3e131ec4331cf6cc0267995381ac28efdb66e975c5265141cd64543aa620ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bff3588397be82f97a2e7c5af4fc95472df00b734434a3ef63c2782156acf03f->leave($__internal_bff3588397be82f97a2e7c5af4fc95472df00b734434a3ef63c2782156acf03f_prof);

        
        $__internal_1f3e131ec4331cf6cc0267995381ac28efdb66e975c5265141cd64543aa620ee->leave($__internal_1f3e131ec4331cf6cc0267995381ac28efdb66e975c5265141cd64543aa620ee_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
