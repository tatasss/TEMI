<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_afcd855cf6907a24781f62c7ae14eb8a6e62094b155e63d3bc1b0680c66ebf19 extends Twig_Template
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
        $__internal_af853a4e217fcb0a9ebb4bce36056ac95390daa734f8f483ae0edacabdb301bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af853a4e217fcb0a9ebb4bce36056ac95390daa734f8f483ae0edacabdb301bc->enter($__internal_af853a4e217fcb0a9ebb4bce36056ac95390daa734f8f483ae0edacabdb301bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_344b4cb2f88b0600bdd91ba3a8fefc066c4295fb5de932f716ea67cac3c372be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344b4cb2f88b0600bdd91ba3a8fefc066c4295fb5de932f716ea67cac3c372be->enter($__internal_344b4cb2f88b0600bdd91ba3a8fefc066c4295fb5de932f716ea67cac3c372be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_af853a4e217fcb0a9ebb4bce36056ac95390daa734f8f483ae0edacabdb301bc->leave($__internal_af853a4e217fcb0a9ebb4bce36056ac95390daa734f8f483ae0edacabdb301bc_prof);

        
        $__internal_344b4cb2f88b0600bdd91ba3a8fefc066c4295fb5de932f716ea67cac3c372be->leave($__internal_344b4cb2f88b0600bdd91ba3a8fefc066c4295fb5de932f716ea67cac3c372be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
