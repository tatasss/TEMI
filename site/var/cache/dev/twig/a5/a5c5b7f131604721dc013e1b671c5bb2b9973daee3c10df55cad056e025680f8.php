<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_ef42fa3ca301703261e18ef2cacbca5760d8e0cc182fa31bdabdcbf57e03df7b extends Twig_Template
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
        $__internal_a33d5eed79b56223118977a60946177e640a308dd60a49f57c0dea8ba3133c65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33d5eed79b56223118977a60946177e640a308dd60a49f57c0dea8ba3133c65->enter($__internal_a33d5eed79b56223118977a60946177e640a308dd60a49f57c0dea8ba3133c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_7b539779e0efd2523c6ca553171b47c6b1e0b9c9e4c4b09ea7eb8e6bf9c2c24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b539779e0efd2523c6ca553171b47c6b1e0b9c9e4c4b09ea7eb8e6bf9c2c24d->enter($__internal_7b539779e0efd2523c6ca553171b47c6b1e0b9c9e4c4b09ea7eb8e6bf9c2c24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_a33d5eed79b56223118977a60946177e640a308dd60a49f57c0dea8ba3133c65->leave($__internal_a33d5eed79b56223118977a60946177e640a308dd60a49f57c0dea8ba3133c65_prof);

        
        $__internal_7b539779e0efd2523c6ca553171b47c6b1e0b9c9e4c4b09ea7eb8e6bf9c2c24d->leave($__internal_7b539779e0efd2523c6ca553171b47c6b1e0b9c9e4c4b09ea7eb8e6bf9c2c24d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
