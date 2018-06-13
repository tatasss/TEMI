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
        $__internal_a5cfe9f14863d33889f064b92f7c2beefc59a234bd46247b68a3b4923e0108c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5cfe9f14863d33889f064b92f7c2beefc59a234bd46247b68a3b4923e0108c4->enter($__internal_a5cfe9f14863d33889f064b92f7c2beefc59a234bd46247b68a3b4923e0108c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_47ee2e5a634d2a2266f3835ffc92e15a42e19c0fb8ee6622cc0331ac8d12ffd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ee2e5a634d2a2266f3835ffc92e15a42e19c0fb8ee6622cc0331ac8d12ffd3->enter($__internal_47ee2e5a634d2a2266f3835ffc92e15a42e19c0fb8ee6622cc0331ac8d12ffd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_a5cfe9f14863d33889f064b92f7c2beefc59a234bd46247b68a3b4923e0108c4->leave($__internal_a5cfe9f14863d33889f064b92f7c2beefc59a234bd46247b68a3b4923e0108c4_prof);

        
        $__internal_47ee2e5a634d2a2266f3835ffc92e15a42e19c0fb8ee6622cc0331ac8d12ffd3->leave($__internal_47ee2e5a634d2a2266f3835ffc92e15a42e19c0fb8ee6622cc0331ac8d12ffd3_prof);

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
