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
        $__internal_1b8f8987fa901481f565c7bd23a50ad405438fa2a03507068453a809ab386d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b8f8987fa901481f565c7bd23a50ad405438fa2a03507068453a809ab386d45->enter($__internal_1b8f8987fa901481f565c7bd23a50ad405438fa2a03507068453a809ab386d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_6bc087d5a93f57e5d13d9a5286248de7a171869b9cbb60ee01ff186400f20d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc087d5a93f57e5d13d9a5286248de7a171869b9cbb60ee01ff186400f20d77->enter($__internal_6bc087d5a93f57e5d13d9a5286248de7a171869b9cbb60ee01ff186400f20d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1b8f8987fa901481f565c7bd23a50ad405438fa2a03507068453a809ab386d45->leave($__internal_1b8f8987fa901481f565c7bd23a50ad405438fa2a03507068453a809ab386d45_prof);

        
        $__internal_6bc087d5a93f57e5d13d9a5286248de7a171869b9cbb60ee01ff186400f20d77->leave($__internal_6bc087d5a93f57e5d13d9a5286248de7a171869b9cbb60ee01ff186400f20d77_prof);

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
", "@Framework/Form/button_attributes.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
