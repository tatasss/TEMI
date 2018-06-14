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
        $__internal_d04fdd95e0ed35e83913bf2fd014f3dae79675d1243f22efe80dac691b2bbbf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04fdd95e0ed35e83913bf2fd014f3dae79675d1243f22efe80dac691b2bbbf7->enter($__internal_d04fdd95e0ed35e83913bf2fd014f3dae79675d1243f22efe80dac691b2bbbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_e5840996ee14c3d8653122608759b7739e8c864451c53435c3302431c23634f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5840996ee14c3d8653122608759b7739e8c864451c53435c3302431c23634f4->enter($__internal_e5840996ee14c3d8653122608759b7739e8c864451c53435c3302431c23634f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d04fdd95e0ed35e83913bf2fd014f3dae79675d1243f22efe80dac691b2bbbf7->leave($__internal_d04fdd95e0ed35e83913bf2fd014f3dae79675d1243f22efe80dac691b2bbbf7_prof);

        
        $__internal_e5840996ee14c3d8653122608759b7739e8c864451c53435c3302431c23634f4->leave($__internal_e5840996ee14c3d8653122608759b7739e8c864451c53435c3302431c23634f4_prof);

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
