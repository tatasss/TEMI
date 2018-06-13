<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3195415766074774f7ca941c79533b9d8657dea54372d970ba14e6d7238221fa extends Twig_Template
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
        $__internal_15b3c41037f2fdf64a6681289b5456b0e572d4206f63bede1e93e8b4d6328e04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15b3c41037f2fdf64a6681289b5456b0e572d4206f63bede1e93e8b4d6328e04->enter($__internal_15b3c41037f2fdf64a6681289b5456b0e572d4206f63bede1e93e8b4d6328e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_93ce09a7b7eb26a96cc1830948c5e8d1bd3073830f379f13a6cfe8c6de46527a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ce09a7b7eb26a96cc1830948c5e8d1bd3073830f379f13a6cfe8c6de46527a->enter($__internal_93ce09a7b7eb26a96cc1830948c5e8d1bd3073830f379f13a6cfe8c6de46527a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_15b3c41037f2fdf64a6681289b5456b0e572d4206f63bede1e93e8b4d6328e04->leave($__internal_15b3c41037f2fdf64a6681289b5456b0e572d4206f63bede1e93e8b4d6328e04_prof);

        
        $__internal_93ce09a7b7eb26a96cc1830948c5e8d1bd3073830f379f13a6cfe8c6de46527a->leave($__internal_93ce09a7b7eb26a96cc1830948c5e8d1bd3073830f379f13a6cfe8c6de46527a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
