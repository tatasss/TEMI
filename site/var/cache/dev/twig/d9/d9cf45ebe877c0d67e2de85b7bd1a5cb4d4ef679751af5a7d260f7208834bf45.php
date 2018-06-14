<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_dc985dafdb840713711c11b12f4a068e0a977cfc4c609fa2625b0926b11f3e8e extends Twig_Template
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
        $__internal_d4151c8ba4956a967ed8c5e1f22579c10d21cdcadbcab925ed42efc3062efc98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4151c8ba4956a967ed8c5e1f22579c10d21cdcadbcab925ed42efc3062efc98->enter($__internal_d4151c8ba4956a967ed8c5e1f22579c10d21cdcadbcab925ed42efc3062efc98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_2dc1e6ade438a14b4991c11ff8c08fba4b0a1c055180cda6354cd3eff35211c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dc1e6ade438a14b4991c11ff8c08fba4b0a1c055180cda6354cd3eff35211c4->enter($__internal_2dc1e6ade438a14b4991c11ff8c08fba4b0a1c055180cda6354cd3eff35211c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d4151c8ba4956a967ed8c5e1f22579c10d21cdcadbcab925ed42efc3062efc98->leave($__internal_d4151c8ba4956a967ed8c5e1f22579c10d21cdcadbcab925ed42efc3062efc98_prof);

        
        $__internal_2dc1e6ade438a14b4991c11ff8c08fba4b0a1c055180cda6354cd3eff35211c4->leave($__internal_2dc1e6ade438a14b4991c11ff8c08fba4b0a1c055180cda6354cd3eff35211c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
