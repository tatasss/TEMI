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
        $__internal_62e001833b1c0beae47bdbfe98facf938fb34748dc8f4c11f044c8733dfc481b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e001833b1c0beae47bdbfe98facf938fb34748dc8f4c11f044c8733dfc481b->enter($__internal_62e001833b1c0beae47bdbfe98facf938fb34748dc8f4c11f044c8733dfc481b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_f6eade048c8d3df5031ed49e7b2dbe41dfdaf6c290e4bcfa989f893812005510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6eade048c8d3df5031ed49e7b2dbe41dfdaf6c290e4bcfa989f893812005510->enter($__internal_f6eade048c8d3df5031ed49e7b2dbe41dfdaf6c290e4bcfa989f893812005510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_62e001833b1c0beae47bdbfe98facf938fb34748dc8f4c11f044c8733dfc481b->leave($__internal_62e001833b1c0beae47bdbfe98facf938fb34748dc8f4c11f044c8733dfc481b_prof);

        
        $__internal_f6eade048c8d3df5031ed49e7b2dbe41dfdaf6c290e4bcfa989f893812005510->leave($__internal_f6eade048c8d3df5031ed49e7b2dbe41dfdaf6c290e4bcfa989f893812005510_prof);

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
", "@Framework/Form/collection_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
