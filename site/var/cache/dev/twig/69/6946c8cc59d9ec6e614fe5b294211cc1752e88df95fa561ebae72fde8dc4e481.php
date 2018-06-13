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
        $__internal_ab2ef9a4f9d46975bc9074be37ef1ba3ae8d681d4c908b6ede2c9a593056423c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab2ef9a4f9d46975bc9074be37ef1ba3ae8d681d4c908b6ede2c9a593056423c->enter($__internal_ab2ef9a4f9d46975bc9074be37ef1ba3ae8d681d4c908b6ede2c9a593056423c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_ad459a14650b3e19cb86a5e94a4329e2a9891abdba79a83e4206f617a4b307db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad459a14650b3e19cb86a5e94a4329e2a9891abdba79a83e4206f617a4b307db->enter($__internal_ad459a14650b3e19cb86a5e94a4329e2a9891abdba79a83e4206f617a4b307db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ab2ef9a4f9d46975bc9074be37ef1ba3ae8d681d4c908b6ede2c9a593056423c->leave($__internal_ab2ef9a4f9d46975bc9074be37ef1ba3ae8d681d4c908b6ede2c9a593056423c_prof);

        
        $__internal_ad459a14650b3e19cb86a5e94a4329e2a9891abdba79a83e4206f617a4b307db->leave($__internal_ad459a14650b3e19cb86a5e94a4329e2a9891abdba79a83e4206f617a4b307db_prof);

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
", "@Framework/Form/form_rest.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
