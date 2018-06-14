<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f91fbb8aaac3002b64d563a9116cc2b5dc907d03c2cc7ebd064d633d3bfe12ff extends Twig_Template
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
        $__internal_2efdd7292368a8cd62c003e17a51cf01baba947ebd0fae4b952177e20babf4d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efdd7292368a8cd62c003e17a51cf01baba947ebd0fae4b952177e20babf4d3->enter($__internal_2efdd7292368a8cd62c003e17a51cf01baba947ebd0fae4b952177e20babf4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_de593183b83d2dd4c5ea9557a6e9f84cb98ac9b0efb289f4224e8c22b0baa2fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de593183b83d2dd4c5ea9557a6e9f84cb98ac9b0efb289f4224e8c22b0baa2fc->enter($__internal_de593183b83d2dd4c5ea9557a6e9f84cb98ac9b0efb289f4224e8c22b0baa2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2efdd7292368a8cd62c003e17a51cf01baba947ebd0fae4b952177e20babf4d3->leave($__internal_2efdd7292368a8cd62c003e17a51cf01baba947ebd0fae4b952177e20babf4d3_prof);

        
        $__internal_de593183b83d2dd4c5ea9557a6e9f84cb98ac9b0efb289f4224e8c22b0baa2fc->leave($__internal_de593183b83d2dd4c5ea9557a6e9f84cb98ac9b0efb289f4224e8c22b0baa2fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
