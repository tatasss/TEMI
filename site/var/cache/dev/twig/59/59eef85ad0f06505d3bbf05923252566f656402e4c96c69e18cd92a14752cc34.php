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
        $__internal_8dd41d911d6b26fef96f6f677d2edcba789f10682c8c27b64e0acf2538dd90d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dd41d911d6b26fef96f6f677d2edcba789f10682c8c27b64e0acf2538dd90d1->enter($__internal_8dd41d911d6b26fef96f6f677d2edcba789f10682c8c27b64e0acf2538dd90d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_687dcb8af2afba5e6c97eb16cc12efb832e291c73fd853f0710422affa71934a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687dcb8af2afba5e6c97eb16cc12efb832e291c73fd853f0710422affa71934a->enter($__internal_687dcb8af2afba5e6c97eb16cc12efb832e291c73fd853f0710422affa71934a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8dd41d911d6b26fef96f6f677d2edcba789f10682c8c27b64e0acf2538dd90d1->leave($__internal_8dd41d911d6b26fef96f6f677d2edcba789f10682c8c27b64e0acf2538dd90d1_prof);

        
        $__internal_687dcb8af2afba5e6c97eb16cc12efb832e291c73fd853f0710422affa71934a->leave($__internal_687dcb8af2afba5e6c97eb16cc12efb832e291c73fd853f0710422affa71934a_prof);

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
", "@Framework/FormTable/button_row.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
