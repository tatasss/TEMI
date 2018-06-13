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
        $__internal_ea569af5068e7922d60ecf3be3a48eaa0a95e54cd06b143bc09b4215df70dd16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea569af5068e7922d60ecf3be3a48eaa0a95e54cd06b143bc09b4215df70dd16->enter($__internal_ea569af5068e7922d60ecf3be3a48eaa0a95e54cd06b143bc09b4215df70dd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_fe3765e683d23457aff628c28a2abd42790f97a9f5e9e08d74552878ff6a1609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3765e683d23457aff628c28a2abd42790f97a9f5e9e08d74552878ff6a1609->enter($__internal_fe3765e683d23457aff628c28a2abd42790f97a9f5e9e08d74552878ff6a1609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_ea569af5068e7922d60ecf3be3a48eaa0a95e54cd06b143bc09b4215df70dd16->leave($__internal_ea569af5068e7922d60ecf3be3a48eaa0a95e54cd06b143bc09b4215df70dd16_prof);

        
        $__internal_fe3765e683d23457aff628c28a2abd42790f97a9f5e9e08d74552878ff6a1609->leave($__internal_fe3765e683d23457aff628c28a2abd42790f97a9f5e9e08d74552878ff6a1609_prof);

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
", "@Framework/Form/reset_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
