<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_5b2ea2165e89c6ec6d223e5e32f77ba38d1dbd45bfe56bdb226addca88053ecb extends Twig_Template
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
        $__internal_d289e74a41e41d92965d1bb920a7d5269db8dd940f6db738735d44150da39d53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d289e74a41e41d92965d1bb920a7d5269db8dd940f6db738735d44150da39d53->enter($__internal_d289e74a41e41d92965d1bb920a7d5269db8dd940f6db738735d44150da39d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_d551430b798660d45c5b6072973776058b14e54c9a6f6ff2f208f007b755a717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d551430b798660d45c5b6072973776058b14e54c9a6f6ff2f208f007b755a717->enter($__internal_d551430b798660d45c5b6072973776058b14e54c9a6f6ff2f208f007b755a717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_d289e74a41e41d92965d1bb920a7d5269db8dd940f6db738735d44150da39d53->leave($__internal_d289e74a41e41d92965d1bb920a7d5269db8dd940f6db738735d44150da39d53_prof);

        
        $__internal_d551430b798660d45c5b6072973776058b14e54c9a6f6ff2f208f007b755a717->leave($__internal_d551430b798660d45c5b6072973776058b14e54c9a6f6ff2f208f007b755a717_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
