<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_af86f0cb8b4738c9200f637cca83358d6f7dba2632b0a13dc96759d1b8d11862 extends Twig_Template
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
        $__internal_8bd291f57cc0fb5c719bc24e162685ee837697672a7d22b3237ee75e44c8ba93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd291f57cc0fb5c719bc24e162685ee837697672a7d22b3237ee75e44c8ba93->enter($__internal_8bd291f57cc0fb5c719bc24e162685ee837697672a7d22b3237ee75e44c8ba93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_a77b002bbd49ea2492b0219474379a1846e10155866b0eb8c3c4a8ef095f6f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a77b002bbd49ea2492b0219474379a1846e10155866b0eb8c3c4a8ef095f6f97->enter($__internal_a77b002bbd49ea2492b0219474379a1846e10155866b0eb8c3c4a8ef095f6f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8bd291f57cc0fb5c719bc24e162685ee837697672a7d22b3237ee75e44c8ba93->leave($__internal_8bd291f57cc0fb5c719bc24e162685ee837697672a7d22b3237ee75e44c8ba93_prof);

        
        $__internal_a77b002bbd49ea2492b0219474379a1846e10155866b0eb8c3c4a8ef095f6f97->leave($__internal_a77b002bbd49ea2492b0219474379a1846e10155866b0eb8c3c4a8ef095f6f97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
