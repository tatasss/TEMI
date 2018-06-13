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
        $__internal_b7b82d8813c0c92ba947d00e91216c837ae385bc11152d61dc451a8e166c8cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7b82d8813c0c92ba947d00e91216c837ae385bc11152d61dc451a8e166c8cab->enter($__internal_b7b82d8813c0c92ba947d00e91216c837ae385bc11152d61dc451a8e166c8cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_c7a2bcbb2c3961175abd9afc347c15a2150f2f18d9680007463df08763c09de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a2bcbb2c3961175abd9afc347c15a2150f2f18d9680007463df08763c09de3->enter($__internal_c7a2bcbb2c3961175abd9afc347c15a2150f2f18d9680007463df08763c09de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b7b82d8813c0c92ba947d00e91216c837ae385bc11152d61dc451a8e166c8cab->leave($__internal_b7b82d8813c0c92ba947d00e91216c837ae385bc11152d61dc451a8e166c8cab_prof);

        
        $__internal_c7a2bcbb2c3961175abd9afc347c15a2150f2f18d9680007463df08763c09de3->leave($__internal_c7a2bcbb2c3961175abd9afc347c15a2150f2f18d9680007463df08763c09de3_prof);

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
