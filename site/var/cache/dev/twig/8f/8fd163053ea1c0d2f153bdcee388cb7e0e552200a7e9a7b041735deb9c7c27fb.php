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
        $__internal_cfd41ba968b4e5fa7fb126e4e2a322bee85100146a4a2da06dc7e57b34a43dda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd41ba968b4e5fa7fb126e4e2a322bee85100146a4a2da06dc7e57b34a43dda->enter($__internal_cfd41ba968b4e5fa7fb126e4e2a322bee85100146a4a2da06dc7e57b34a43dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_cb5865fb331cab14b064e4f235efb1ee58a86be4c66a1e99b7d5a9545a28b6a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb5865fb331cab14b064e4f235efb1ee58a86be4c66a1e99b7d5a9545a28b6a9->enter($__internal_cb5865fb331cab14b064e4f235efb1ee58a86be4c66a1e99b7d5a9545a28b6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_cfd41ba968b4e5fa7fb126e4e2a322bee85100146a4a2da06dc7e57b34a43dda->leave($__internal_cfd41ba968b4e5fa7fb126e4e2a322bee85100146a4a2da06dc7e57b34a43dda_prof);

        
        $__internal_cb5865fb331cab14b064e4f235efb1ee58a86be4c66a1e99b7d5a9545a28b6a9->leave($__internal_cb5865fb331cab14b064e4f235efb1ee58a86be4c66a1e99b7d5a9545a28b6a9_prof);

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
