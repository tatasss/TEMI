<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_657c5fffd2b9b00181fb80b862d675320ae4f0ba7d76cccdfcb7394196dce994 extends Twig_Template
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
        $__internal_95d0282cc6c95105a63796d01fd2fef141d718f7139d966247bbc8f9245f6600 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d0282cc6c95105a63796d01fd2fef141d718f7139d966247bbc8f9245f6600->enter($__internal_95d0282cc6c95105a63796d01fd2fef141d718f7139d966247bbc8f9245f6600_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_8ed8ae0cc1d6bb989fb783cac4c533d34ac1862e9bed6dc8e62c05d1617fd47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed8ae0cc1d6bb989fb783cac4c533d34ac1862e9bed6dc8e62c05d1617fd47b->enter($__internal_8ed8ae0cc1d6bb989fb783cac4c533d34ac1862e9bed6dc8e62c05d1617fd47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_95d0282cc6c95105a63796d01fd2fef141d718f7139d966247bbc8f9245f6600->leave($__internal_95d0282cc6c95105a63796d01fd2fef141d718f7139d966247bbc8f9245f6600_prof);

        
        $__internal_8ed8ae0cc1d6bb989fb783cac4c533d34ac1862e9bed6dc8e62c05d1617fd47b->leave($__internal_8ed8ae0cc1d6bb989fb783cac4c533d34ac1862e9bed6dc8e62c05d1617fd47b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
