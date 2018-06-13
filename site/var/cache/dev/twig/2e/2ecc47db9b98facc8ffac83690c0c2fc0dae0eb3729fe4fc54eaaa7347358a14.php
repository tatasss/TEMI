<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_a8c2efc381ffc701e0a07b5dcc8db3c446f944c174229b25468dd224d9f64151 extends Twig_Template
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
        $__internal_b7cc5048c610d956a2f0627a967ec05f222d1ac50e7bad771778d20d29afe737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7cc5048c610d956a2f0627a967ec05f222d1ac50e7bad771778d20d29afe737->enter($__internal_b7cc5048c610d956a2f0627a967ec05f222d1ac50e7bad771778d20d29afe737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_5a77100482e77470a175fe8b91dc509e731144160191203892d43041e8d54348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a77100482e77470a175fe8b91dc509e731144160191203892d43041e8d54348->enter($__internal_5a77100482e77470a175fe8b91dc509e731144160191203892d43041e8d54348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_b7cc5048c610d956a2f0627a967ec05f222d1ac50e7bad771778d20d29afe737->leave($__internal_b7cc5048c610d956a2f0627a967ec05f222d1ac50e7bad771778d20d29afe737_prof);

        
        $__internal_5a77100482e77470a175fe8b91dc509e731144160191203892d43041e8d54348->leave($__internal_5a77100482e77470a175fe8b91dc509e731144160191203892d43041e8d54348_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
