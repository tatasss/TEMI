<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_657c5fffd2b9b00181fb80b862d675320ae4f0ba7d76cccdfcb7394196dce994 extends Twig_Template
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
        $__internal_2f5f326290d75c06f5b313fb0ad1c795e2c22cd20299e85186af221e40b55339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5f326290d75c06f5b313fb0ad1c795e2c22cd20299e85186af221e40b55339->enter($__internal_2f5f326290d75c06f5b313fb0ad1c795e2c22cd20299e85186af221e40b55339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1775a8460c280ea96774383e314f964ee26d56fbe8bde58d3f17c238b3f400eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1775a8460c280ea96774383e314f964ee26d56fbe8bde58d3f17c238b3f400eb->enter($__internal_1775a8460c280ea96774383e314f964ee26d56fbe8bde58d3f17c238b3f400eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_2f5f326290d75c06f5b313fb0ad1c795e2c22cd20299e85186af221e40b55339->leave($__internal_2f5f326290d75c06f5b313fb0ad1c795e2c22cd20299e85186af221e40b55339_prof);

        
        $__internal_1775a8460c280ea96774383e314f964ee26d56fbe8bde58d3f17c238b3f400eb->leave($__internal_1775a8460c280ea96774383e314f964ee26d56fbe8bde58d3f17c238b3f400eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
