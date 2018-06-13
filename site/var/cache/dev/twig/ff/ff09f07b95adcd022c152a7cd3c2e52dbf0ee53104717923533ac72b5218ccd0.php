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
        $__internal_4639155362e1f85c7348f556ff348ecad15330e818241694b28c7cb1dd42b32c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4639155362e1f85c7348f556ff348ecad15330e818241694b28c7cb1dd42b32c->enter($__internal_4639155362e1f85c7348f556ff348ecad15330e818241694b28c7cb1dd42b32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_30d68c215f3fe4dafb79f8f96484e65ff6912dac3fc38ad5c1ef696f730a8c3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d68c215f3fe4dafb79f8f96484e65ff6912dac3fc38ad5c1ef696f730a8c3b->enter($__internal_30d68c215f3fe4dafb79f8f96484e65ff6912dac3fc38ad5c1ef696f730a8c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_4639155362e1f85c7348f556ff348ecad15330e818241694b28c7cb1dd42b32c->leave($__internal_4639155362e1f85c7348f556ff348ecad15330e818241694b28c7cb1dd42b32c_prof);

        
        $__internal_30d68c215f3fe4dafb79f8f96484e65ff6912dac3fc38ad5c1ef696f730a8c3b->leave($__internal_30d68c215f3fe4dafb79f8f96484e65ff6912dac3fc38ad5c1ef696f730a8c3b_prof);

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
