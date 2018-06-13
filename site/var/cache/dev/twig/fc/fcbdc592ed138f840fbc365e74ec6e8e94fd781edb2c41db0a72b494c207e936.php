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
        $__internal_35d66983775ee897ccf4b4661073e6719c08ef2859e6345b9bd70b4ea599597c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35d66983775ee897ccf4b4661073e6719c08ef2859e6345b9bd70b4ea599597c->enter($__internal_35d66983775ee897ccf4b4661073e6719c08ef2859e6345b9bd70b4ea599597c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_8b808f8aac4735ba303688c3922744c9406f52ac6ec94e723308cdddba3c9392 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b808f8aac4735ba303688c3922744c9406f52ac6ec94e723308cdddba3c9392->enter($__internal_8b808f8aac4735ba303688c3922744c9406f52ac6ec94e723308cdddba3c9392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_35d66983775ee897ccf4b4661073e6719c08ef2859e6345b9bd70b4ea599597c->leave($__internal_35d66983775ee897ccf4b4661073e6719c08ef2859e6345b9bd70b4ea599597c_prof);

        
        $__internal_8b808f8aac4735ba303688c3922744c9406f52ac6ec94e723308cdddba3c9392->leave($__internal_8b808f8aac4735ba303688c3922744c9406f52ac6ec94e723308cdddba3c9392_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
