<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_85e1e648f6b606b8662682dcff40eefaca6e8ac83299b7ca82b4a05783b92831 extends Twig_Template
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
        $__internal_dd531eb699659fa7ca9881f409769555dad5d60f5f48a79b35397aa36fa1dd06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd531eb699659fa7ca9881f409769555dad5d60f5f48a79b35397aa36fa1dd06->enter($__internal_dd531eb699659fa7ca9881f409769555dad5d60f5f48a79b35397aa36fa1dd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e754938b219faffc79a983ce3b9790b4fe782d05d4ee98d040eff3f10b340c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e754938b219faffc79a983ce3b9790b4fe782d05d4ee98d040eff3f10b340c21->enter($__internal_e754938b219faffc79a983ce3b9790b4fe782d05d4ee98d040eff3f10b340c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_dd531eb699659fa7ca9881f409769555dad5d60f5f48a79b35397aa36fa1dd06->leave($__internal_dd531eb699659fa7ca9881f409769555dad5d60f5f48a79b35397aa36fa1dd06_prof);

        
        $__internal_e754938b219faffc79a983ce3b9790b4fe782d05d4ee98d040eff3f10b340c21->leave($__internal_e754938b219faffc79a983ce3b9790b4fe782d05d4ee98d040eff3f10b340c21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
