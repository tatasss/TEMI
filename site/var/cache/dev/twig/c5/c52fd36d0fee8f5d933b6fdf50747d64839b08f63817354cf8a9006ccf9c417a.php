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
        $__internal_62c9e9741de2cf7383a7a0d5accc46af6e73b9a8a0834cfd31ec9888ff551563 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62c9e9741de2cf7383a7a0d5accc46af6e73b9a8a0834cfd31ec9888ff551563->enter($__internal_62c9e9741de2cf7383a7a0d5accc46af6e73b9a8a0834cfd31ec9888ff551563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_99b3c1615c236bdd934248212d2a539f3a598e37cbf84965b4189bae7aa979b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99b3c1615c236bdd934248212d2a539f3a598e37cbf84965b4189bae7aa979b0->enter($__internal_99b3c1615c236bdd934248212d2a539f3a598e37cbf84965b4189bae7aa979b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_62c9e9741de2cf7383a7a0d5accc46af6e73b9a8a0834cfd31ec9888ff551563->leave($__internal_62c9e9741de2cf7383a7a0d5accc46af6e73b9a8a0834cfd31ec9888ff551563_prof);

        
        $__internal_99b3c1615c236bdd934248212d2a539f3a598e37cbf84965b4189bae7aa979b0->leave($__internal_99b3c1615c236bdd934248212d2a539f3a598e37cbf84965b4189bae7aa979b0_prof);

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
", "@Framework/Form/search_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
