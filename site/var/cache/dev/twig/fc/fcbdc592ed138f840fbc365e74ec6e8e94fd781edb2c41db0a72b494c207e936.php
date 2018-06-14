<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_12fdd4c9b3a9cdf5a05eb719944fbacef76a4d3f7e2592c025dda7a70dda8bac extends Twig_Template
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
        $__internal_18e9cf76fbfeb8a897971d2f0501daa45d25ed765208af94798f8363bdaf8c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18e9cf76fbfeb8a897971d2f0501daa45d25ed765208af94798f8363bdaf8c8a->enter($__internal_18e9cf76fbfeb8a897971d2f0501daa45d25ed765208af94798f8363bdaf8c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_36cd9d91a81dbdb42bc2aca3d9e26104c9cd4147ffd73c6485852e969091e14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36cd9d91a81dbdb42bc2aca3d9e26104c9cd4147ffd73c6485852e969091e14f->enter($__internal_36cd9d91a81dbdb42bc2aca3d9e26104c9cd4147ffd73c6485852e969091e14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_18e9cf76fbfeb8a897971d2f0501daa45d25ed765208af94798f8363bdaf8c8a->leave($__internal_18e9cf76fbfeb8a897971d2f0501daa45d25ed765208af94798f8363bdaf8c8a_prof);

        
        $__internal_36cd9d91a81dbdb42bc2aca3d9e26104c9cd4147ffd73c6485852e969091e14f->leave($__internal_36cd9d91a81dbdb42bc2aca3d9e26104c9cd4147ffd73c6485852e969091e14f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
