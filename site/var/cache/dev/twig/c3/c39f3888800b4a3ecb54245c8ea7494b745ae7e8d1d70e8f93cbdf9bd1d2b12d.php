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
        $__internal_aaae5c4778a36616dfbf89fc79d1a7e572a25509e66832a018578132256615c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaae5c4778a36616dfbf89fc79d1a7e572a25509e66832a018578132256615c1->enter($__internal_aaae5c4778a36616dfbf89fc79d1a7e572a25509e66832a018578132256615c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_32ef91012b7da2fe6871c3ecf021203668fdaa227e5e7ebb71a2ef86daa19c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ef91012b7da2fe6871c3ecf021203668fdaa227e5e7ebb71a2ef86daa19c0f->enter($__internal_32ef91012b7da2fe6871c3ecf021203668fdaa227e5e7ebb71a2ef86daa19c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_aaae5c4778a36616dfbf89fc79d1a7e572a25509e66832a018578132256615c1->leave($__internal_aaae5c4778a36616dfbf89fc79d1a7e572a25509e66832a018578132256615c1_prof);

        
        $__internal_32ef91012b7da2fe6871c3ecf021203668fdaa227e5e7ebb71a2ef86daa19c0f->leave($__internal_32ef91012b7da2fe6871c3ecf021203668fdaa227e5e7ebb71a2ef86daa19c0f_prof);

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
