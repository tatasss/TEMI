<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_dc985dafdb840713711c11b12f4a068e0a977cfc4c609fa2625b0926b11f3e8e extends Twig_Template
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
        $__internal_322d9b0f1dedb9383c1562ee27934b10d5c5bc1e3a76bf129746f18ea06660a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322d9b0f1dedb9383c1562ee27934b10d5c5bc1e3a76bf129746f18ea06660a8->enter($__internal_322d9b0f1dedb9383c1562ee27934b10d5c5bc1e3a76bf129746f18ea06660a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f99456623c4496f83262c88702bbe11113c4b8d9eb7ad56f689744dcb02a62f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99456623c4496f83262c88702bbe11113c4b8d9eb7ad56f689744dcb02a62f6->enter($__internal_f99456623c4496f83262c88702bbe11113c4b8d9eb7ad56f689744dcb02a62f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_322d9b0f1dedb9383c1562ee27934b10d5c5bc1e3a76bf129746f18ea06660a8->leave($__internal_322d9b0f1dedb9383c1562ee27934b10d5c5bc1e3a76bf129746f18ea06660a8_prof);

        
        $__internal_f99456623c4496f83262c88702bbe11113c4b8d9eb7ad56f689744dcb02a62f6->leave($__internal_f99456623c4496f83262c88702bbe11113c4b8d9eb7ad56f689744dcb02a62f6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
