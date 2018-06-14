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
        $__internal_e9da3a9f65b63423d51f31c9f244095c44d30f15b1fb576b7604ad9688a7ecf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9da3a9f65b63423d51f31c9f244095c44d30f15b1fb576b7604ad9688a7ecf2->enter($__internal_e9da3a9f65b63423d51f31c9f244095c44d30f15b1fb576b7604ad9688a7ecf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_8a00eea7f911cf8bbdd77bbcac0c8ca1d8b4641862df97a5ee1be321fb282a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a00eea7f911cf8bbdd77bbcac0c8ca1d8b4641862df97a5ee1be321fb282a0e->enter($__internal_8a00eea7f911cf8bbdd77bbcac0c8ca1d8b4641862df97a5ee1be321fb282a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e9da3a9f65b63423d51f31c9f244095c44d30f15b1fb576b7604ad9688a7ecf2->leave($__internal_e9da3a9f65b63423d51f31c9f244095c44d30f15b1fb576b7604ad9688a7ecf2_prof);

        
        $__internal_8a00eea7f911cf8bbdd77bbcac0c8ca1d8b4641862df97a5ee1be321fb282a0e->leave($__internal_8a00eea7f911cf8bbdd77bbcac0c8ca1d8b4641862df97a5ee1be321fb282a0e_prof);

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
