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
        $__internal_e3054d8644f6cd065265452b5f024f0cec1dddd3a6f047efc5bb66770f25bd7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3054d8644f6cd065265452b5f024f0cec1dddd3a6f047efc5bb66770f25bd7c->enter($__internal_e3054d8644f6cd065265452b5f024f0cec1dddd3a6f047efc5bb66770f25bd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_57b0ebed698bfea861a58a1f219bbcaaaa77481a94731a8543e79adb32015d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57b0ebed698bfea861a58a1f219bbcaaaa77481a94731a8543e79adb32015d14->enter($__internal_57b0ebed698bfea861a58a1f219bbcaaaa77481a94731a8543e79adb32015d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_e3054d8644f6cd065265452b5f024f0cec1dddd3a6f047efc5bb66770f25bd7c->leave($__internal_e3054d8644f6cd065265452b5f024f0cec1dddd3a6f047efc5bb66770f25bd7c_prof);

        
        $__internal_57b0ebed698bfea861a58a1f219bbcaaaa77481a94731a8543e79adb32015d14->leave($__internal_57b0ebed698bfea861a58a1f219bbcaaaa77481a94731a8543e79adb32015d14_prof);

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
", "@Framework/FormTable/form_row.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
