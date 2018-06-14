<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_d707bb79568e9c601f86413b23f44b9ad42e8c22eb42e47f9c715ece8d0397f2 extends Twig_Template
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
        $__internal_80cb3871f4013fd9c53958aa0c096185130f5e3f06bac2d83dc490919c90c72e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80cb3871f4013fd9c53958aa0c096185130f5e3f06bac2d83dc490919c90c72e->enter($__internal_80cb3871f4013fd9c53958aa0c096185130f5e3f06bac2d83dc490919c90c72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_675810d440cfcd49b3c96dd1a61fdd71ebe23c60b37035714b0fdde2661fd2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675810d440cfcd49b3c96dd1a61fdd71ebe23c60b37035714b0fdde2661fd2b8->enter($__internal_675810d440cfcd49b3c96dd1a61fdd71ebe23c60b37035714b0fdde2661fd2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_80cb3871f4013fd9c53958aa0c096185130f5e3f06bac2d83dc490919c90c72e->leave($__internal_80cb3871f4013fd9c53958aa0c096185130f5e3f06bac2d83dc490919c90c72e_prof);

        
        $__internal_675810d440cfcd49b3c96dd1a61fdd71ebe23c60b37035714b0fdde2661fd2b8->leave($__internal_675810d440cfcd49b3c96dd1a61fdd71ebe23c60b37035714b0fdde2661fd2b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
