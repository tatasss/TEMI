<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b7478cacc288bd5ee1de1d083556ca8a8a5bd472f913783e54b0eec7137ee13d extends Twig_Template
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
        $__internal_0cb45d6f52adbe2b52dd4ab011efb1096b17569fd3066a690ab4fe8f7f0f155a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb45d6f52adbe2b52dd4ab011efb1096b17569fd3066a690ab4fe8f7f0f155a->enter($__internal_0cb45d6f52adbe2b52dd4ab011efb1096b17569fd3066a690ab4fe8f7f0f155a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_b3da8bd67565de68a3d041094450da0a9a90712a914eca428d7340b0708bbd86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3da8bd67565de68a3d041094450da0a9a90712a914eca428d7340b0708bbd86->enter($__internal_b3da8bd67565de68a3d041094450da0a9a90712a914eca428d7340b0708bbd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0cb45d6f52adbe2b52dd4ab011efb1096b17569fd3066a690ab4fe8f7f0f155a->leave($__internal_0cb45d6f52adbe2b52dd4ab011efb1096b17569fd3066a690ab4fe8f7f0f155a_prof);

        
        $__internal_b3da8bd67565de68a3d041094450da0a9a90712a914eca428d7340b0708bbd86->leave($__internal_b3da8bd67565de68a3d041094450da0a9a90712a914eca428d7340b0708bbd86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
