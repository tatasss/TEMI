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
        $__internal_bb88c68d20be9972c5500e47e3ca1df43695c60313010a7834065e29345f70c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb88c68d20be9972c5500e47e3ca1df43695c60313010a7834065e29345f70c0->enter($__internal_bb88c68d20be9972c5500e47e3ca1df43695c60313010a7834065e29345f70c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a714324e9132cbf1ae380eba5a966b239e91ed44f91d270291210a05322a3352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a714324e9132cbf1ae380eba5a966b239e91ed44f91d270291210a05322a3352->enter($__internal_a714324e9132cbf1ae380eba5a966b239e91ed44f91d270291210a05322a3352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bb88c68d20be9972c5500e47e3ca1df43695c60313010a7834065e29345f70c0->leave($__internal_bb88c68d20be9972c5500e47e3ca1df43695c60313010a7834065e29345f70c0_prof);

        
        $__internal_a714324e9132cbf1ae380eba5a966b239e91ed44f91d270291210a05322a3352->leave($__internal_a714324e9132cbf1ae380eba5a966b239e91ed44f91d270291210a05322a3352_prof);

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
