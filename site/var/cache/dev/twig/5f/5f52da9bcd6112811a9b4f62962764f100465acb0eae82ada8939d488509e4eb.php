<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_f39ae8d3e8a4de028d1bb55c9d89566e6ee04bb994be66845e96c7227d32d1e7 extends Twig_Template
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
        $__internal_3e96aa1db1c1f507b2e097eb24a602938600dd1a762d6fabb0a047d78166bae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e96aa1db1c1f507b2e097eb24a602938600dd1a762d6fabb0a047d78166bae0->enter($__internal_3e96aa1db1c1f507b2e097eb24a602938600dd1a762d6fabb0a047d78166bae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_13aa4dc1707f852944919d95286aef102c3e63eb6a51030ea4d53868d2b7b92b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13aa4dc1707f852944919d95286aef102c3e63eb6a51030ea4d53868d2b7b92b->enter($__internal_13aa4dc1707f852944919d95286aef102c3e63eb6a51030ea4d53868d2b7b92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_3e96aa1db1c1f507b2e097eb24a602938600dd1a762d6fabb0a047d78166bae0->leave($__internal_3e96aa1db1c1f507b2e097eb24a602938600dd1a762d6fabb0a047d78166bae0_prof);

        
        $__internal_13aa4dc1707f852944919d95286aef102c3e63eb6a51030ea4d53868d2b7b92b->leave($__internal_13aa4dc1707f852944919d95286aef102c3e63eb6a51030ea4d53868d2b7b92b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
