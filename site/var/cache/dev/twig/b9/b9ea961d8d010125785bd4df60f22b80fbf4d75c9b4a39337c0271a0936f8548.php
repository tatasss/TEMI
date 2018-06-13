<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4909e32202005780f4c87bd803f8bf3a1e6aafd235c462d2d2dad687b192aa9f extends Twig_Template
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
        $__internal_1717364c1209df328649df159f2e673df72860ed71c3e4e0f010e53826c037fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1717364c1209df328649df159f2e673df72860ed71c3e4e0f010e53826c037fc->enter($__internal_1717364c1209df328649df159f2e673df72860ed71c3e4e0f010e53826c037fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4339b829a73f8b894cc564ba3c465547f10cbfdb76f613e93d441cb153170ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4339b829a73f8b894cc564ba3c465547f10cbfdb76f613e93d441cb153170ba4->enter($__internal_4339b829a73f8b894cc564ba3c465547f10cbfdb76f613e93d441cb153170ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1717364c1209df328649df159f2e673df72860ed71c3e4e0f010e53826c037fc->leave($__internal_1717364c1209df328649df159f2e673df72860ed71c3e4e0f010e53826c037fc_prof);

        
        $__internal_4339b829a73f8b894cc564ba3c465547f10cbfdb76f613e93d441cb153170ba4->leave($__internal_4339b829a73f8b894cc564ba3c465547f10cbfdb76f613e93d441cb153170ba4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
