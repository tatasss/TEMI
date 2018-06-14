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
        $__internal_1a542c2067b9c3de7286099c84a41c089d9533b9e7af79ab381670b5e5dc1246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a542c2067b9c3de7286099c84a41c089d9533b9e7af79ab381670b5e5dc1246->enter($__internal_1a542c2067b9c3de7286099c84a41c089d9533b9e7af79ab381670b5e5dc1246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_6686b0016ed91b6c9fa55ff2012633d749892bfede4cfa0f7aa0ec345f4d406b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6686b0016ed91b6c9fa55ff2012633d749892bfede4cfa0f7aa0ec345f4d406b->enter($__internal_6686b0016ed91b6c9fa55ff2012633d749892bfede4cfa0f7aa0ec345f4d406b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1a542c2067b9c3de7286099c84a41c089d9533b9e7af79ab381670b5e5dc1246->leave($__internal_1a542c2067b9c3de7286099c84a41c089d9533b9e7af79ab381670b5e5dc1246_prof);

        
        $__internal_6686b0016ed91b6c9fa55ff2012633d749892bfede4cfa0f7aa0ec345f4d406b->leave($__internal_6686b0016ed91b6c9fa55ff2012633d749892bfede4cfa0f7aa0ec345f4d406b_prof);

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
