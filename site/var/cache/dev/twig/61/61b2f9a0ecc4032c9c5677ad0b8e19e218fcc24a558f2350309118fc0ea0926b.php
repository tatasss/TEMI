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
        $__internal_028a4dd7cf6a46ed9e2cf5bcf3f53c380063a02e0d6cde9b76acb25fc895cdc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_028a4dd7cf6a46ed9e2cf5bcf3f53c380063a02e0d6cde9b76acb25fc895cdc6->enter($__internal_028a4dd7cf6a46ed9e2cf5bcf3f53c380063a02e0d6cde9b76acb25fc895cdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_670b0a9deca9af959168460429321cb1fafd39cdd269f6c6bbfea972d2da67e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670b0a9deca9af959168460429321cb1fafd39cdd269f6c6bbfea972d2da67e4->enter($__internal_670b0a9deca9af959168460429321cb1fafd39cdd269f6c6bbfea972d2da67e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_028a4dd7cf6a46ed9e2cf5bcf3f53c380063a02e0d6cde9b76acb25fc895cdc6->leave($__internal_028a4dd7cf6a46ed9e2cf5bcf3f53c380063a02e0d6cde9b76acb25fc895cdc6_prof);

        
        $__internal_670b0a9deca9af959168460429321cb1fafd39cdd269f6c6bbfea972d2da67e4->leave($__internal_670b0a9deca9af959168460429321cb1fafd39cdd269f6c6bbfea972d2da67e4_prof);

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
", "@Framework/FormTable/hidden_row.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
