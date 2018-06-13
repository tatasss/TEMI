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
        $__internal_851d279ea52d68e32099b426300012f9af11c4c0aa5fdb6d845e7fa574161922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_851d279ea52d68e32099b426300012f9af11c4c0aa5fdb6d845e7fa574161922->enter($__internal_851d279ea52d68e32099b426300012f9af11c4c0aa5fdb6d845e7fa574161922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_be07ee069765e0a3fa9e03f97ec170f47264ab7700882519ecf60b88e754fca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be07ee069765e0a3fa9e03f97ec170f47264ab7700882519ecf60b88e754fca6->enter($__internal_be07ee069765e0a3fa9e03f97ec170f47264ab7700882519ecf60b88e754fca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_851d279ea52d68e32099b426300012f9af11c4c0aa5fdb6d845e7fa574161922->leave($__internal_851d279ea52d68e32099b426300012f9af11c4c0aa5fdb6d845e7fa574161922_prof);

        
        $__internal_be07ee069765e0a3fa9e03f97ec170f47264ab7700882519ecf60b88e754fca6->leave($__internal_be07ee069765e0a3fa9e03f97ec170f47264ab7700882519ecf60b88e754fca6_prof);

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
", "@Framework/Form/email_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
