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
        $__internal_3f780eb8bac1ee14b596a842a34ab83258b95b8190608b2e283ef835e851c0b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f780eb8bac1ee14b596a842a34ab83258b95b8190608b2e283ef835e851c0b5->enter($__internal_3f780eb8bac1ee14b596a842a34ab83258b95b8190608b2e283ef835e851c0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_6cc5add45b7e0ec3ea411bc72431dae68693b03fdb07153d76bf04af461ef498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc5add45b7e0ec3ea411bc72431dae68693b03fdb07153d76bf04af461ef498->enter($__internal_6cc5add45b7e0ec3ea411bc72431dae68693b03fdb07153d76bf04af461ef498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3f780eb8bac1ee14b596a842a34ab83258b95b8190608b2e283ef835e851c0b5->leave($__internal_3f780eb8bac1ee14b596a842a34ab83258b95b8190608b2e283ef835e851c0b5_prof);

        
        $__internal_6cc5add45b7e0ec3ea411bc72431dae68693b03fdb07153d76bf04af461ef498->leave($__internal_6cc5add45b7e0ec3ea411bc72431dae68693b03fdb07153d76bf04af461ef498_prof);

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
", "@Framework/Form/button_row.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
