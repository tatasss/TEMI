<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_dcf1a5437117ce41a357013b25ff33ab71d8fe5351a3af5a2898ae37a6995555 extends Twig_Template
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
        $__internal_137f2b139760e17e4ce8935a37bef47c5a70e6018184449888039c04cb69135c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_137f2b139760e17e4ce8935a37bef47c5a70e6018184449888039c04cb69135c->enter($__internal_137f2b139760e17e4ce8935a37bef47c5a70e6018184449888039c04cb69135c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_f3e9ff6c0aec2a20c83ae8cd1afb266ad50a8f55e9019936fbe334723270a2a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e9ff6c0aec2a20c83ae8cd1afb266ad50a8f55e9019936fbe334723270a2a4->enter($__internal_f3e9ff6c0aec2a20c83ae8cd1afb266ad50a8f55e9019936fbe334723270a2a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_137f2b139760e17e4ce8935a37bef47c5a70e6018184449888039c04cb69135c->leave($__internal_137f2b139760e17e4ce8935a37bef47c5a70e6018184449888039c04cb69135c_prof);

        
        $__internal_f3e9ff6c0aec2a20c83ae8cd1afb266ad50a8f55e9019936fbe334723270a2a4->leave($__internal_f3e9ff6c0aec2a20c83ae8cd1afb266ad50a8f55e9019936fbe334723270a2a4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
