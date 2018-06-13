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
        $__internal_2c9b1b8d86765baebf567f08b7b5bfbe60d87872d4e3394b5044d7a70818eb8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9b1b8d86765baebf567f08b7b5bfbe60d87872d4e3394b5044d7a70818eb8f->enter($__internal_2c9b1b8d86765baebf567f08b7b5bfbe60d87872d4e3394b5044d7a70818eb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_2f69d7e923092496cad070b02d40dd0169fe374284c67950a35f03b794d5febc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f69d7e923092496cad070b02d40dd0169fe374284c67950a35f03b794d5febc->enter($__internal_2f69d7e923092496cad070b02d40dd0169fe374284c67950a35f03b794d5febc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_2c9b1b8d86765baebf567f08b7b5bfbe60d87872d4e3394b5044d7a70818eb8f->leave($__internal_2c9b1b8d86765baebf567f08b7b5bfbe60d87872d4e3394b5044d7a70818eb8f_prof);

        
        $__internal_2f69d7e923092496cad070b02d40dd0169fe374284c67950a35f03b794d5febc->leave($__internal_2f69d7e923092496cad070b02d40dd0169fe374284c67950a35f03b794d5febc_prof);

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
