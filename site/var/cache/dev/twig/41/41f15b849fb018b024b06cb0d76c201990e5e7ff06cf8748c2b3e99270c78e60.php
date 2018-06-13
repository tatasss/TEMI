<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3195415766074774f7ca941c79533b9d8657dea54372d970ba14e6d7238221fa extends Twig_Template
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
        $__internal_e00e0768b12d7987fb8087f86990566c017691924d14a6c35fc470d90412640d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e00e0768b12d7987fb8087f86990566c017691924d14a6c35fc470d90412640d->enter($__internal_e00e0768b12d7987fb8087f86990566c017691924d14a6c35fc470d90412640d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_24595d2b34eec1953b9b48197d47eb2f5604d8ca6b96915ca699675b7c72de63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24595d2b34eec1953b9b48197d47eb2f5604d8ca6b96915ca699675b7c72de63->enter($__internal_24595d2b34eec1953b9b48197d47eb2f5604d8ca6b96915ca699675b7c72de63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_e00e0768b12d7987fb8087f86990566c017691924d14a6c35fc470d90412640d->leave($__internal_e00e0768b12d7987fb8087f86990566c017691924d14a6c35fc470d90412640d_prof);

        
        $__internal_24595d2b34eec1953b9b48197d47eb2f5604d8ca6b96915ca699675b7c72de63->leave($__internal_24595d2b34eec1953b9b48197d47eb2f5604d8ca6b96915ca699675b7c72de63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
