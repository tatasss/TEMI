<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_7b1d132fc9e84d51b2002d48d0347b95dad91c790ac18776d29caa598a2c4bb2 extends Twig_Template
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
        $__internal_ab593a9ea516e71a3ae1e0577411a3d5e5efeefc2c1393832673ed79a58e41f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab593a9ea516e71a3ae1e0577411a3d5e5efeefc2c1393832673ed79a58e41f6->enter($__internal_ab593a9ea516e71a3ae1e0577411a3d5e5efeefc2c1393832673ed79a58e41f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_0c3998d46fd2481abb42ba0a17a1c8d84cdd8fa6537b5aacdd28d18f550bf76a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c3998d46fd2481abb42ba0a17a1c8d84cdd8fa6537b5aacdd28d18f550bf76a->enter($__internal_0c3998d46fd2481abb42ba0a17a1c8d84cdd8fa6537b5aacdd28d18f550bf76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_ab593a9ea516e71a3ae1e0577411a3d5e5efeefc2c1393832673ed79a58e41f6->leave($__internal_ab593a9ea516e71a3ae1e0577411a3d5e5efeefc2c1393832673ed79a58e41f6_prof);

        
        $__internal_0c3998d46fd2481abb42ba0a17a1c8d84cdd8fa6537b5aacdd28d18f550bf76a->leave($__internal_0c3998d46fd2481abb42ba0a17a1c8d84cdd8fa6537b5aacdd28d18f550bf76a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
