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
        $__internal_a0dca3386cb2d609b71f786e415ccc6a9435d3878fb52a36bb5c1cb1c17e0aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0dca3386cb2d609b71f786e415ccc6a9435d3878fb52a36bb5c1cb1c17e0aea->enter($__internal_a0dca3386cb2d609b71f786e415ccc6a9435d3878fb52a36bb5c1cb1c17e0aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_d93e94866f843d9a471b2d921aa233d110bd645489af4351baa916d73f1fe657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93e94866f843d9a471b2d921aa233d110bd645489af4351baa916d73f1fe657->enter($__internal_d93e94866f843d9a471b2d921aa233d110bd645489af4351baa916d73f1fe657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a0dca3386cb2d609b71f786e415ccc6a9435d3878fb52a36bb5c1cb1c17e0aea->leave($__internal_a0dca3386cb2d609b71f786e415ccc6a9435d3878fb52a36bb5c1cb1c17e0aea_prof);

        
        $__internal_d93e94866f843d9a471b2d921aa233d110bd645489af4351baa916d73f1fe657->leave($__internal_d93e94866f843d9a471b2d921aa233d110bd645489af4351baa916d73f1fe657_prof);

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
