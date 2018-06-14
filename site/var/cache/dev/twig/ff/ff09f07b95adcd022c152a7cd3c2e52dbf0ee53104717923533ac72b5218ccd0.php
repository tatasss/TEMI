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
        $__internal_354ea0b15a64e3738668a0d6e0fc454b611e10e3553dd1bad51f6ed22d9e67c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_354ea0b15a64e3738668a0d6e0fc454b611e10e3553dd1bad51f6ed22d9e67c5->enter($__internal_354ea0b15a64e3738668a0d6e0fc454b611e10e3553dd1bad51f6ed22d9e67c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_f51c70350626db099a571f1a79b6341c1eb6038e83f158c4a5afd27d7e851b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f51c70350626db099a571f1a79b6341c1eb6038e83f158c4a5afd27d7e851b1a->enter($__internal_f51c70350626db099a571f1a79b6341c1eb6038e83f158c4a5afd27d7e851b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_354ea0b15a64e3738668a0d6e0fc454b611e10e3553dd1bad51f6ed22d9e67c5->leave($__internal_354ea0b15a64e3738668a0d6e0fc454b611e10e3553dd1bad51f6ed22d9e67c5_prof);

        
        $__internal_f51c70350626db099a571f1a79b6341c1eb6038e83f158c4a5afd27d7e851b1a->leave($__internal_f51c70350626db099a571f1a79b6341c1eb6038e83f158c4a5afd27d7e851b1a_prof);

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
