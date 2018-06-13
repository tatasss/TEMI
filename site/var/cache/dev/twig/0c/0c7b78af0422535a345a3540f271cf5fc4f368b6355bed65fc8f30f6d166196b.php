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
        $__internal_03105260433578c019ee10dcb01d44fd06da6a7c83ce874d5bac3461f2aa918d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03105260433578c019ee10dcb01d44fd06da6a7c83ce874d5bac3461f2aa918d->enter($__internal_03105260433578c019ee10dcb01d44fd06da6a7c83ce874d5bac3461f2aa918d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_e253b65d413961d605b8054e6c27620505824a2d957b3ee68b2e84d8717754de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e253b65d413961d605b8054e6c27620505824a2d957b3ee68b2e84d8717754de->enter($__internal_e253b65d413961d605b8054e6c27620505824a2d957b3ee68b2e84d8717754de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_03105260433578c019ee10dcb01d44fd06da6a7c83ce874d5bac3461f2aa918d->leave($__internal_03105260433578c019ee10dcb01d44fd06da6a7c83ce874d5bac3461f2aa918d_prof);

        
        $__internal_e253b65d413961d605b8054e6c27620505824a2d957b3ee68b2e84d8717754de->leave($__internal_e253b65d413961d605b8054e6c27620505824a2d957b3ee68b2e84d8717754de_prof);

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
", "@Framework/Form/form_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
