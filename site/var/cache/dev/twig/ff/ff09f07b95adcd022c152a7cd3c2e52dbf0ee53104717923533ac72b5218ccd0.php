<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7020c4d2459021e8056db397883c656b936d37943dfe53c2f3bc8d1395c6c51e extends Twig_Template
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
        $__internal_68452c9d64901a2860a960224c858decf3223080550d45daf98e8f747da63681 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68452c9d64901a2860a960224c858decf3223080550d45daf98e8f747da63681->enter($__internal_68452c9d64901a2860a960224c858decf3223080550d45daf98e8f747da63681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_5fd048a03875fe93c393524670c38e619f439f5b2c73eee0a9904694fef756e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd048a03875fe93c393524670c38e619f439f5b2c73eee0a9904694fef756e9->enter($__internal_5fd048a03875fe93c393524670c38e619f439f5b2c73eee0a9904694fef756e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_68452c9d64901a2860a960224c858decf3223080550d45daf98e8f747da63681->leave($__internal_68452c9d64901a2860a960224c858decf3223080550d45daf98e8f747da63681_prof);

        
        $__internal_5fd048a03875fe93c393524670c38e619f439f5b2c73eee0a9904694fef756e9->leave($__internal_5fd048a03875fe93c393524670c38e619f439f5b2c73eee0a9904694fef756e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
