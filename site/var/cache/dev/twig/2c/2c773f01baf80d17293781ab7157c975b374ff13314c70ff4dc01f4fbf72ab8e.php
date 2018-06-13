<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_657c5fffd2b9b00181fb80b862d675320ae4f0ba7d76cccdfcb7394196dce994 extends Twig_Template
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
        $__internal_474169e64274e1cd2ac79474c434ea51636c27f06bc0e053c6bcb705fdacce50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_474169e64274e1cd2ac79474c434ea51636c27f06bc0e053c6bcb705fdacce50->enter($__internal_474169e64274e1cd2ac79474c434ea51636c27f06bc0e053c6bcb705fdacce50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_431ff4b09e0d40cfdc15eb335e870f1418fc67de29f47b0bd9f5910f0df21447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431ff4b09e0d40cfdc15eb335e870f1418fc67de29f47b0bd9f5910f0df21447->enter($__internal_431ff4b09e0d40cfdc15eb335e870f1418fc67de29f47b0bd9f5910f0df21447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_474169e64274e1cd2ac79474c434ea51636c27f06bc0e053c6bcb705fdacce50->leave($__internal_474169e64274e1cd2ac79474c434ea51636c27f06bc0e053c6bcb705fdacce50_prof);

        
        $__internal_431ff4b09e0d40cfdc15eb335e870f1418fc67de29f47b0bd9f5910f0df21447->leave($__internal_431ff4b09e0d40cfdc15eb335e870f1418fc67de29f47b0bd9f5910f0df21447_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
