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
        $__internal_4cca62f6345e06d63d392324ede51d379dcd7fd0e732ce4c9915ad82c0713dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cca62f6345e06d63d392324ede51d379dcd7fd0e732ce4c9915ad82c0713dca->enter($__internal_4cca62f6345e06d63d392324ede51d379dcd7fd0e732ce4c9915ad82c0713dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_106b362f308adb9792a06a648815b60fa110685465aa332aab9510924059a738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106b362f308adb9792a06a648815b60fa110685465aa332aab9510924059a738->enter($__internal_106b362f308adb9792a06a648815b60fa110685465aa332aab9510924059a738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4cca62f6345e06d63d392324ede51d379dcd7fd0e732ce4c9915ad82c0713dca->leave($__internal_4cca62f6345e06d63d392324ede51d379dcd7fd0e732ce4c9915ad82c0713dca_prof);

        
        $__internal_106b362f308adb9792a06a648815b60fa110685465aa332aab9510924059a738->leave($__internal_106b362f308adb9792a06a648815b60fa110685465aa332aab9510924059a738_prof);

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
", "@Framework/Form/form_row.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
