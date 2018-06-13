<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_dc985dafdb840713711c11b12f4a068e0a977cfc4c609fa2625b0926b11f3e8e extends Twig_Template
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
        $__internal_90086c70fad8509d95f509a2b46fe1ce20dc55f2b8a78928dcc35be52b3ffbb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90086c70fad8509d95f509a2b46fe1ce20dc55f2b8a78928dcc35be52b3ffbb2->enter($__internal_90086c70fad8509d95f509a2b46fe1ce20dc55f2b8a78928dcc35be52b3ffbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_95ed228ca4859af30aa43e73a7920f3e430ec374d0938b3db2880528599be5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ed228ca4859af30aa43e73a7920f3e430ec374d0938b3db2880528599be5bc->enter($__internal_95ed228ca4859af30aa43e73a7920f3e430ec374d0938b3db2880528599be5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_90086c70fad8509d95f509a2b46fe1ce20dc55f2b8a78928dcc35be52b3ffbb2->leave($__internal_90086c70fad8509d95f509a2b46fe1ce20dc55f2b8a78928dcc35be52b3ffbb2_prof);

        
        $__internal_95ed228ca4859af30aa43e73a7920f3e430ec374d0938b3db2880528599be5bc->leave($__internal_95ed228ca4859af30aa43e73a7920f3e430ec374d0938b3db2880528599be5bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
