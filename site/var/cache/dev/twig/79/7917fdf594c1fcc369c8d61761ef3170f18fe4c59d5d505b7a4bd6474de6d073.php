<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3379747899575c8f27cbcfaecff9311706b4538f5723275cc90d8bc6cedf152c extends Twig_Template
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
        $__internal_f9faa782419ff6a3726fc4f03892776002c5d1f63fcc0ecfd9cd65b35eb6b896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9faa782419ff6a3726fc4f03892776002c5d1f63fcc0ecfd9cd65b35eb6b896->enter($__internal_f9faa782419ff6a3726fc4f03892776002c5d1f63fcc0ecfd9cd65b35eb6b896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e81799a8635ac75ea149e9a4168506886c0904e6d4931b76594e3839eb8bce81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81799a8635ac75ea149e9a4168506886c0904e6d4931b76594e3839eb8bce81->enter($__internal_e81799a8635ac75ea149e9a4168506886c0904e6d4931b76594e3839eb8bce81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f9faa782419ff6a3726fc4f03892776002c5d1f63fcc0ecfd9cd65b35eb6b896->leave($__internal_f9faa782419ff6a3726fc4f03892776002c5d1f63fcc0ecfd9cd65b35eb6b896_prof);

        
        $__internal_e81799a8635ac75ea149e9a4168506886c0904e6d4931b76594e3839eb8bce81->leave($__internal_e81799a8635ac75ea149e9a4168506886c0904e6d4931b76594e3839eb8bce81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
