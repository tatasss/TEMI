<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_5b2ea2165e89c6ec6d223e5e32f77ba38d1dbd45bfe56bdb226addca88053ecb extends Twig_Template
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
        $__internal_c0f371e936d96e906d1f13b8ccd34b9cc14d9b294f1d4cdc51c78546debba41f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f371e936d96e906d1f13b8ccd34b9cc14d9b294f1d4cdc51c78546debba41f->enter($__internal_c0f371e936d96e906d1f13b8ccd34b9cc14d9b294f1d4cdc51c78546debba41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_3a6d2dd96f791a067520037bb67ccc4e164aebee2861ff7dc181eb7112e5e70d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a6d2dd96f791a067520037bb67ccc4e164aebee2861ff7dc181eb7112e5e70d->enter($__internal_3a6d2dd96f791a067520037bb67ccc4e164aebee2861ff7dc181eb7112e5e70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c0f371e936d96e906d1f13b8ccd34b9cc14d9b294f1d4cdc51c78546debba41f->leave($__internal_c0f371e936d96e906d1f13b8ccd34b9cc14d9b294f1d4cdc51c78546debba41f_prof);

        
        $__internal_3a6d2dd96f791a067520037bb67ccc4e164aebee2861ff7dc181eb7112e5e70d->leave($__internal_3a6d2dd96f791a067520037bb67ccc4e164aebee2861ff7dc181eb7112e5e70d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
