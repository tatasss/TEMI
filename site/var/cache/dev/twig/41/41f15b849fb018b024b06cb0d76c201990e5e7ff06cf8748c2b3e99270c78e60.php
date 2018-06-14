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
        $__internal_1a2b006a1f316684f33712c11f572725b0879e973cff2f20d3507531ebd2cf8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2b006a1f316684f33712c11f572725b0879e973cff2f20d3507531ebd2cf8c->enter($__internal_1a2b006a1f316684f33712c11f572725b0879e973cff2f20d3507531ebd2cf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_d22aee8cf0033e260fd5d6175e070e3c958e60eab170ce11eae94f25082e3c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d22aee8cf0033e260fd5d6175e070e3c958e60eab170ce11eae94f25082e3c7a->enter($__internal_d22aee8cf0033e260fd5d6175e070e3c958e60eab170ce11eae94f25082e3c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_1a2b006a1f316684f33712c11f572725b0879e973cff2f20d3507531ebd2cf8c->leave($__internal_1a2b006a1f316684f33712c11f572725b0879e973cff2f20d3507531ebd2cf8c_prof);

        
        $__internal_d22aee8cf0033e260fd5d6175e070e3c958e60eab170ce11eae94f25082e3c7a->leave($__internal_d22aee8cf0033e260fd5d6175e070e3c958e60eab170ce11eae94f25082e3c7a_prof);

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
