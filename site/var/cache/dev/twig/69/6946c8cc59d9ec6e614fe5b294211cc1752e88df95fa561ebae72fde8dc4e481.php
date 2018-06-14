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
        $__internal_137602bf07d99a62a9f60aa0b305079b2d550aac9f6dc8d3b34661205f12e7f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_137602bf07d99a62a9f60aa0b305079b2d550aac9f6dc8d3b34661205f12e7f6->enter($__internal_137602bf07d99a62a9f60aa0b305079b2d550aac9f6dc8d3b34661205f12e7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_498250532c51da156cd045f4853b793a90b54ba87a334d16106c63b89c79f075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_498250532c51da156cd045f4853b793a90b54ba87a334d16106c63b89c79f075->enter($__internal_498250532c51da156cd045f4853b793a90b54ba87a334d16106c63b89c79f075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_137602bf07d99a62a9f60aa0b305079b2d550aac9f6dc8d3b34661205f12e7f6->leave($__internal_137602bf07d99a62a9f60aa0b305079b2d550aac9f6dc8d3b34661205f12e7f6_prof);

        
        $__internal_498250532c51da156cd045f4853b793a90b54ba87a334d16106c63b89c79f075->leave($__internal_498250532c51da156cd045f4853b793a90b54ba87a334d16106c63b89c79f075_prof);

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
