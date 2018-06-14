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
        $__internal_c3802f8e051b3541b0d4109fda4946777aec0872af631a3c12f800e70bbfaa05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3802f8e051b3541b0d4109fda4946777aec0872af631a3c12f800e70bbfaa05->enter($__internal_c3802f8e051b3541b0d4109fda4946777aec0872af631a3c12f800e70bbfaa05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_ae6013b53bac11aa8f72ce02f58ba2e5a9a406d965ed71d850597103a1bf6eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6013b53bac11aa8f72ce02f58ba2e5a9a406d965ed71d850597103a1bf6eeb->enter($__internal_ae6013b53bac11aa8f72ce02f58ba2e5a9a406d965ed71d850597103a1bf6eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_c3802f8e051b3541b0d4109fda4946777aec0872af631a3c12f800e70bbfaa05->leave($__internal_c3802f8e051b3541b0d4109fda4946777aec0872af631a3c12f800e70bbfaa05_prof);

        
        $__internal_ae6013b53bac11aa8f72ce02f58ba2e5a9a406d965ed71d850597103a1bf6eeb->leave($__internal_ae6013b53bac11aa8f72ce02f58ba2e5a9a406d965ed71d850597103a1bf6eeb_prof);

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
