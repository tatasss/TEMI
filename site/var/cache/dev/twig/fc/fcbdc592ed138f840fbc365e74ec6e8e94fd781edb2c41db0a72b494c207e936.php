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
        $__internal_e73e14a19011c6253d84abf0ad7f9001051829e814d9351998a995bee08f75b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73e14a19011c6253d84abf0ad7f9001051829e814d9351998a995bee08f75b1->enter($__internal_e73e14a19011c6253d84abf0ad7f9001051829e814d9351998a995bee08f75b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_972a34a6bb4748aa07064ecea7789deb8e3b90b59d5b467542d8fab23520fe43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972a34a6bb4748aa07064ecea7789deb8e3b90b59d5b467542d8fab23520fe43->enter($__internal_972a34a6bb4748aa07064ecea7789deb8e3b90b59d5b467542d8fab23520fe43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e73e14a19011c6253d84abf0ad7f9001051829e814d9351998a995bee08f75b1->leave($__internal_e73e14a19011c6253d84abf0ad7f9001051829e814d9351998a995bee08f75b1_prof);

        
        $__internal_972a34a6bb4748aa07064ecea7789deb8e3b90b59d5b467542d8fab23520fe43->leave($__internal_972a34a6bb4748aa07064ecea7789deb8e3b90b59d5b467542d8fab23520fe43_prof);

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
