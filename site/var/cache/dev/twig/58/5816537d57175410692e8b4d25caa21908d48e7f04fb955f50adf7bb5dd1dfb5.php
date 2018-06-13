<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_13d4e97318029372ef3dada98248c839fb469eaf7aa916d94e8f7abf88357afd extends Twig_Template
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
        $__internal_f74175314c4b8eeaffba8d3740968c9fedada9273f2a514110da16acfe8e8496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74175314c4b8eeaffba8d3740968c9fedada9273f2a514110da16acfe8e8496->enter($__internal_f74175314c4b8eeaffba8d3740968c9fedada9273f2a514110da16acfe8e8496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_4b4fe93b0cb31c217215b21800bff0327ffd0c2cdc64fb9047b666371d52bb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4fe93b0cb31c217215b21800bff0327ffd0c2cdc64fb9047b666371d52bb90->enter($__internal_4b4fe93b0cb31c217215b21800bff0327ffd0c2cdc64fb9047b666371d52bb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f74175314c4b8eeaffba8d3740968c9fedada9273f2a514110da16acfe8e8496->leave($__internal_f74175314c4b8eeaffba8d3740968c9fedada9273f2a514110da16acfe8e8496_prof);

        
        $__internal_4b4fe93b0cb31c217215b21800bff0327ffd0c2cdc64fb9047b666371d52bb90->leave($__internal_4b4fe93b0cb31c217215b21800bff0327ffd0c2cdc64fb9047b666371d52bb90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
