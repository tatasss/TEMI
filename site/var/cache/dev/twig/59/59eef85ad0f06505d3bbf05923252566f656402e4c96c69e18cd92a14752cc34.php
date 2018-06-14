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
        $__internal_6a579a20a0d78119e3724bec6772af862cc27ebbb8e51672c6df2ac627a252af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a579a20a0d78119e3724bec6772af862cc27ebbb8e51672c6df2ac627a252af->enter($__internal_6a579a20a0d78119e3724bec6772af862cc27ebbb8e51672c6df2ac627a252af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_742d3bb3c2f1e01418f891d02ca8bad12e48bb2ce3578582e1e44a9b19998d66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742d3bb3c2f1e01418f891d02ca8bad12e48bb2ce3578582e1e44a9b19998d66->enter($__internal_742d3bb3c2f1e01418f891d02ca8bad12e48bb2ce3578582e1e44a9b19998d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6a579a20a0d78119e3724bec6772af862cc27ebbb8e51672c6df2ac627a252af->leave($__internal_6a579a20a0d78119e3724bec6772af862cc27ebbb8e51672c6df2ac627a252af_prof);

        
        $__internal_742d3bb3c2f1e01418f891d02ca8bad12e48bb2ce3578582e1e44a9b19998d66->leave($__internal_742d3bb3c2f1e01418f891d02ca8bad12e48bb2ce3578582e1e44a9b19998d66_prof);

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
