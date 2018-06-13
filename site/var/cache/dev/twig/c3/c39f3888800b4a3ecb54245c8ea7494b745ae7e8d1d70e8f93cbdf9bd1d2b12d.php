<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_08d80608ec3de0cb205cfaf08d5bda717c43cdff2fcc21c4c3fbd4b04909f10b extends Twig_Template
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
        $__internal_dfc97f02e194d5a6c2b6e7e20d080df030040f2747c2b79487e75f1eaf65274e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc97f02e194d5a6c2b6e7e20d080df030040f2747c2b79487e75f1eaf65274e->enter($__internal_dfc97f02e194d5a6c2b6e7e20d080df030040f2747c2b79487e75f1eaf65274e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_5f9b43200d07d412f4d3ea2802f9cd7cbf2563dea927dd349a2e274244a07235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9b43200d07d412f4d3ea2802f9cd7cbf2563dea927dd349a2e274244a07235->enter($__internal_5f9b43200d07d412f4d3ea2802f9cd7cbf2563dea927dd349a2e274244a07235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_dfc97f02e194d5a6c2b6e7e20d080df030040f2747c2b79487e75f1eaf65274e->leave($__internal_dfc97f02e194d5a6c2b6e7e20d080df030040f2747c2b79487e75f1eaf65274e_prof);

        
        $__internal_5f9b43200d07d412f4d3ea2802f9cd7cbf2563dea927dd349a2e274244a07235->leave($__internal_5f9b43200d07d412f4d3ea2802f9cd7cbf2563dea927dd349a2e274244a07235_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_attributes.html.php");
    }
}
