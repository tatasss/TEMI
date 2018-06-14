<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_37b84cc9d2ae3a5fdb9615553724a2695ff54b4b001906a4b68ae2fe0319eef7 extends Twig_Template
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
        $__internal_7c725b64ff14b5ed1c4ddfceec58393602359749edff867c049c818f0ab4f1ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c725b64ff14b5ed1c4ddfceec58393602359749edff867c049c818f0ab4f1ec->enter($__internal_7c725b64ff14b5ed1c4ddfceec58393602359749edff867c049c818f0ab4f1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a9dbe585adcc1d6371817ce2d1e1c6f46769c8ab98ea33a1296cde1cacaa83c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9dbe585adcc1d6371817ce2d1e1c6f46769c8ab98ea33a1296cde1cacaa83c7->enter($__internal_a9dbe585adcc1d6371817ce2d1e1c6f46769c8ab98ea33a1296cde1cacaa83c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7c725b64ff14b5ed1c4ddfceec58393602359749edff867c049c818f0ab4f1ec->leave($__internal_7c725b64ff14b5ed1c4ddfceec58393602359749edff867c049c818f0ab4f1ec_prof);

        
        $__internal_a9dbe585adcc1d6371817ce2d1e1c6f46769c8ab98ea33a1296cde1cacaa83c7->leave($__internal_a9dbe585adcc1d6371817ce2d1e1c6f46769c8ab98ea33a1296cde1cacaa83c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
