<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_4f796580e87d773d86bfaa3204e08716030fec932392b2fb4c541c12b41ce4a1 extends Twig_Template
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
        $__internal_933a05c2e088df97f0a10337465e31588256e68b52543854f9dc07b1bf2f6303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_933a05c2e088df97f0a10337465e31588256e68b52543854f9dc07b1bf2f6303->enter($__internal_933a05c2e088df97f0a10337465e31588256e68b52543854f9dc07b1bf2f6303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_55f8be09e595503c4a9d0492fdf034301b9f708afaf2cade9dbdb53591e0fffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55f8be09e595503c4a9d0492fdf034301b9f708afaf2cade9dbdb53591e0fffc->enter($__internal_55f8be09e595503c4a9d0492fdf034301b9f708afaf2cade9dbdb53591e0fffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_933a05c2e088df97f0a10337465e31588256e68b52543854f9dc07b1bf2f6303->leave($__internal_933a05c2e088df97f0a10337465e31588256e68b52543854f9dc07b1bf2f6303_prof);

        
        $__internal_55f8be09e595503c4a9d0492fdf034301b9f708afaf2cade9dbdb53591e0fffc->leave($__internal_55f8be09e595503c4a9d0492fdf034301b9f708afaf2cade9dbdb53591e0fffc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
