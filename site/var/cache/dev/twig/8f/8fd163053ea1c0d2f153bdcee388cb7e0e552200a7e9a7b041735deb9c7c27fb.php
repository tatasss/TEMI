<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_567a207026c5541abeea390c2dee98c6fb867c915aa886bb88ec46f6fa256257 extends Twig_Template
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
        $__internal_48af1cfd6b9f540c80c1815c09ad04309663add7baa8cafe91fb2245a0a94558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48af1cfd6b9f540c80c1815c09ad04309663add7baa8cafe91fb2245a0a94558->enter($__internal_48af1cfd6b9f540c80c1815c09ad04309663add7baa8cafe91fb2245a0a94558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_afa8b6d1070a3fe3a39b04c804166e16e6630ead648515d5568202c7334bbf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa8b6d1070a3fe3a39b04c804166e16e6630ead648515d5568202c7334bbf89->enter($__internal_afa8b6d1070a3fe3a39b04c804166e16e6630ead648515d5568202c7334bbf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_48af1cfd6b9f540c80c1815c09ad04309663add7baa8cafe91fb2245a0a94558->leave($__internal_48af1cfd6b9f540c80c1815c09ad04309663add7baa8cafe91fb2245a0a94558_prof);

        
        $__internal_afa8b6d1070a3fe3a39b04c804166e16e6630ead648515d5568202c7334bbf89->leave($__internal_afa8b6d1070a3fe3a39b04c804166e16e6630ead648515d5568202c7334bbf89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
