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
        $__internal_b3d22ed588e89567b7e2dbe93bff405d3cc1b25c88cb8adc8f3f2f43ab1da1ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3d22ed588e89567b7e2dbe93bff405d3cc1b25c88cb8adc8f3f2f43ab1da1ee->enter($__internal_b3d22ed588e89567b7e2dbe93bff405d3cc1b25c88cb8adc8f3f2f43ab1da1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_20d330c92f656aef747a9a3d86e5112865070be1334b5660a24ccd90d9bec0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20d330c92f656aef747a9a3d86e5112865070be1334b5660a24ccd90d9bec0ed->enter($__internal_20d330c92f656aef747a9a3d86e5112865070be1334b5660a24ccd90d9bec0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b3d22ed588e89567b7e2dbe93bff405d3cc1b25c88cb8adc8f3f2f43ab1da1ee->leave($__internal_b3d22ed588e89567b7e2dbe93bff405d3cc1b25c88cb8adc8f3f2f43ab1da1ee_prof);

        
        $__internal_20d330c92f656aef747a9a3d86e5112865070be1334b5660a24ccd90d9bec0ed->leave($__internal_20d330c92f656aef747a9a3d86e5112865070be1334b5660a24ccd90d9bec0ed_prof);

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
", "@Framework/Form/form_rows.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
