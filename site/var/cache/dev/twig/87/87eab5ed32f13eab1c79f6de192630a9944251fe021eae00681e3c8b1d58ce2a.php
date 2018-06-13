<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d28e3bf5e89303216dc65eb71f36e879639dbc5effbea8ab405e40b761eeeedc extends Twig_Template
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
        $__internal_149d4c479b327bb4be215967f6d78b8cc732004be454f75dde1148cf91bccc0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_149d4c479b327bb4be215967f6d78b8cc732004be454f75dde1148cf91bccc0f->enter($__internal_149d4c479b327bb4be215967f6d78b8cc732004be454f75dde1148cf91bccc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_8c9a17f3ade4b6d704e7f1093b7f2ffc6734f31bc3dabf15ffd1baa5d5945c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c9a17f3ade4b6d704e7f1093b7f2ffc6734f31bc3dabf15ffd1baa5d5945c42->enter($__internal_8c9a17f3ade4b6d704e7f1093b7f2ffc6734f31bc3dabf15ffd1baa5d5945c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_149d4c479b327bb4be215967f6d78b8cc732004be454f75dde1148cf91bccc0f->leave($__internal_149d4c479b327bb4be215967f6d78b8cc732004be454f75dde1148cf91bccc0f_prof);

        
        $__internal_8c9a17f3ade4b6d704e7f1093b7f2ffc6734f31bc3dabf15ffd1baa5d5945c42->leave($__internal_8c9a17f3ade4b6d704e7f1093b7f2ffc6734f31bc3dabf15ffd1baa5d5945c42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
