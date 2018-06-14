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
        $__internal_c74834604527e35445b57eb2530e49f0bb497d1e2c41cb4d6ce2cc214a2a8418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74834604527e35445b57eb2530e49f0bb497d1e2c41cb4d6ce2cc214a2a8418->enter($__internal_c74834604527e35445b57eb2530e49f0bb497d1e2c41cb4d6ce2cc214a2a8418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_ea1bcbc1c51c2cbc1a8d6d256e0f7486422f68d5c13b1bbd1461a2a7a7bc9384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1bcbc1c51c2cbc1a8d6d256e0f7486422f68d5c13b1bbd1461a2a7a7bc9384->enter($__internal_ea1bcbc1c51c2cbc1a8d6d256e0f7486422f68d5c13b1bbd1461a2a7a7bc9384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c74834604527e35445b57eb2530e49f0bb497d1e2c41cb4d6ce2cc214a2a8418->leave($__internal_c74834604527e35445b57eb2530e49f0bb497d1e2c41cb4d6ce2cc214a2a8418_prof);

        
        $__internal_ea1bcbc1c51c2cbc1a8d6d256e0f7486422f68d5c13b1bbd1461a2a7a7bc9384->leave($__internal_ea1bcbc1c51c2cbc1a8d6d256e0f7486422f68d5c13b1bbd1461a2a7a7bc9384_prof);

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
