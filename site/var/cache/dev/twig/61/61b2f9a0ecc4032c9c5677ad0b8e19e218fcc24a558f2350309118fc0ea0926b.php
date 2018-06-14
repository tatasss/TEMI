<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_662ccc4402379a5f7725f414b5710f752ca7815183e5b9a22be92efd408ac4db extends Twig_Template
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
        $__internal_958198477febe809d43da01cf458b62227696721198dfb48ba0d766bfdb226c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_958198477febe809d43da01cf458b62227696721198dfb48ba0d766bfdb226c8->enter($__internal_958198477febe809d43da01cf458b62227696721198dfb48ba0d766bfdb226c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_4aa2575737af2b8adb598246e4bfe7ce0a85c0d7e46bb1154546f5e32b8d77e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa2575737af2b8adb598246e4bfe7ce0a85c0d7e46bb1154546f5e32b8d77e3->enter($__internal_4aa2575737af2b8adb598246e4bfe7ce0a85c0d7e46bb1154546f5e32b8d77e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_958198477febe809d43da01cf458b62227696721198dfb48ba0d766bfdb226c8->leave($__internal_958198477febe809d43da01cf458b62227696721198dfb48ba0d766bfdb226c8_prof);

        
        $__internal_4aa2575737af2b8adb598246e4bfe7ce0a85c0d7e46bb1154546f5e32b8d77e3->leave($__internal_4aa2575737af2b8adb598246e4bfe7ce0a85c0d7e46bb1154546f5e32b8d77e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
