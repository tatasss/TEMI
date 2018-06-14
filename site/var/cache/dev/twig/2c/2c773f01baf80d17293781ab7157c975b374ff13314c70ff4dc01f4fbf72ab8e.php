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
        $__internal_6f04cb6934437bce64e276344ce94d451a0fd6e47b44c9b3758ce1fcf484cecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f04cb6934437bce64e276344ce94d451a0fd6e47b44c9b3758ce1fcf484cecf->enter($__internal_6f04cb6934437bce64e276344ce94d451a0fd6e47b44c9b3758ce1fcf484cecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_fd1ea27d42e797bb72ec564b1c2228b044c57d9bd020fb0e4302bab5bc8d92dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1ea27d42e797bb72ec564b1c2228b044c57d9bd020fb0e4302bab5bc8d92dd->enter($__internal_fd1ea27d42e797bb72ec564b1c2228b044c57d9bd020fb0e4302bab5bc8d92dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_6f04cb6934437bce64e276344ce94d451a0fd6e47b44c9b3758ce1fcf484cecf->leave($__internal_6f04cb6934437bce64e276344ce94d451a0fd6e47b44c9b3758ce1fcf484cecf_prof);

        
        $__internal_fd1ea27d42e797bb72ec564b1c2228b044c57d9bd020fb0e4302bab5bc8d92dd->leave($__internal_fd1ea27d42e797bb72ec564b1c2228b044c57d9bd020fb0e4302bab5bc8d92dd_prof);

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
", "@Framework/Form/url_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
