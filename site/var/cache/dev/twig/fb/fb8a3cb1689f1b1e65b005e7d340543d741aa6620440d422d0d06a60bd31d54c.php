<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_7123cc090c6ce378397a9994e45051fda49b8646d2fb30697ce7be617ad5ae3b extends Twig_Template
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
        $__internal_16d85416794a25fd8f8a721d50f382de96a3f825d08b555ff6859668a1a57095 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d85416794a25fd8f8a721d50f382de96a3f825d08b555ff6859668a1a57095->enter($__internal_16d85416794a25fd8f8a721d50f382de96a3f825d08b555ff6859668a1a57095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c398b1634db0ba30735496fb414dd8dc95a9f7b6eef599410feab24deaba9c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c398b1634db0ba30735496fb414dd8dc95a9f7b6eef599410feab24deaba9c37->enter($__internal_c398b1634db0ba30735496fb414dd8dc95a9f7b6eef599410feab24deaba9c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_16d85416794a25fd8f8a721d50f382de96a3f825d08b555ff6859668a1a57095->leave($__internal_16d85416794a25fd8f8a721d50f382de96a3f825d08b555ff6859668a1a57095_prof);

        
        $__internal_c398b1634db0ba30735496fb414dd8dc95a9f7b6eef599410feab24deaba9c37->leave($__internal_c398b1634db0ba30735496fb414dd8dc95a9f7b6eef599410feab24deaba9c37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
