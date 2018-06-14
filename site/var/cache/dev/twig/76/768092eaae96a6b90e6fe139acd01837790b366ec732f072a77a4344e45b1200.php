<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_fea448fcf1965c795590efb223484868ece3b87ec8740277275ae2c6b3859252 extends Twig_Template
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
        $__internal_3ce9480eaa40b29cfe84565f45f2de8b043d8006ad96687df82a014ada4f26d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce9480eaa40b29cfe84565f45f2de8b043d8006ad96687df82a014ada4f26d5->enter($__internal_3ce9480eaa40b29cfe84565f45f2de8b043d8006ad96687df82a014ada4f26d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_64021bc89223097423bebed299b2803989456f00bb8d7cdc938ed02b4ab596c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64021bc89223097423bebed299b2803989456f00bb8d7cdc938ed02b4ab596c0->enter($__internal_64021bc89223097423bebed299b2803989456f00bb8d7cdc938ed02b4ab596c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_3ce9480eaa40b29cfe84565f45f2de8b043d8006ad96687df82a014ada4f26d5->leave($__internal_3ce9480eaa40b29cfe84565f45f2de8b043d8006ad96687df82a014ada4f26d5_prof);

        
        $__internal_64021bc89223097423bebed299b2803989456f00bb8d7cdc938ed02b4ab596c0->leave($__internal_64021bc89223097423bebed299b2803989456f00bb8d7cdc938ed02b4ab596c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
