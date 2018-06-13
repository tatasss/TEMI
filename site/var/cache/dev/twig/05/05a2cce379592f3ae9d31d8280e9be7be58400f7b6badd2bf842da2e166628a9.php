<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_336451892812f6966f1656279381796f952d5020be531b89f225e395f0118f91 extends Twig_Template
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
        $__internal_d84a6bc098294bb6189b5723e4515257fce2084567325e1080f515d754150234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84a6bc098294bb6189b5723e4515257fce2084567325e1080f515d754150234->enter($__internal_d84a6bc098294bb6189b5723e4515257fce2084567325e1080f515d754150234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4d4e8ca0221f0ebeea825e72eebefd6e0e0c1879f0661fc78d20be846a5ada75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d4e8ca0221f0ebeea825e72eebefd6e0e0c1879f0661fc78d20be846a5ada75->enter($__internal_4d4e8ca0221f0ebeea825e72eebefd6e0e0c1879f0661fc78d20be846a5ada75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d84a6bc098294bb6189b5723e4515257fce2084567325e1080f515d754150234->leave($__internal_d84a6bc098294bb6189b5723e4515257fce2084567325e1080f515d754150234_prof);

        
        $__internal_4d4e8ca0221f0ebeea825e72eebefd6e0e0c1879f0661fc78d20be846a5ada75->leave($__internal_4d4e8ca0221f0ebeea825e72eebefd6e0e0c1879f0661fc78d20be846a5ada75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
