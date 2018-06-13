<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_087bfe8cb0aab2ac0eb77069cb02f64f467d14a7b40971dc0501a522e6481bec extends Twig_Template
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
        $__internal_dab00c8fb7bdf3457960a7846b719bf17b0b3a49450ebed4f663bd2858262411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab00c8fb7bdf3457960a7846b719bf17b0b3a49450ebed4f663bd2858262411->enter($__internal_dab00c8fb7bdf3457960a7846b719bf17b0b3a49450ebed4f663bd2858262411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_dcb301898332d1673129c1072f581476d51c2af42dbced6f95ae4506516a7862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb301898332d1673129c1072f581476d51c2af42dbced6f95ae4506516a7862->enter($__internal_dcb301898332d1673129c1072f581476d51c2af42dbced6f95ae4506516a7862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_dab00c8fb7bdf3457960a7846b719bf17b0b3a49450ebed4f663bd2858262411->leave($__internal_dab00c8fb7bdf3457960a7846b719bf17b0b3a49450ebed4f663bd2858262411_prof);

        
        $__internal_dcb301898332d1673129c1072f581476d51c2af42dbced6f95ae4506516a7862->leave($__internal_dcb301898332d1673129c1072f581476d51c2af42dbced6f95ae4506516a7862_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
