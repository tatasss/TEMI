<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_5b2ea2165e89c6ec6d223e5e32f77ba38d1dbd45bfe56bdb226addca88053ecb extends Twig_Template
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
        $__internal_cc53a9df48827f9c0469b2e2d918d8aa2f55c252048585d86fed5ab6d23ef753 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc53a9df48827f9c0469b2e2d918d8aa2f55c252048585d86fed5ab6d23ef753->enter($__internal_cc53a9df48827f9c0469b2e2d918d8aa2f55c252048585d86fed5ab6d23ef753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_424ee3a2523156ed8cbef03749e089b5888e8d7ef4aa32fa723be3dfe075c271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_424ee3a2523156ed8cbef03749e089b5888e8d7ef4aa32fa723be3dfe075c271->enter($__internal_424ee3a2523156ed8cbef03749e089b5888e8d7ef4aa32fa723be3dfe075c271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_cc53a9df48827f9c0469b2e2d918d8aa2f55c252048585d86fed5ab6d23ef753->leave($__internal_cc53a9df48827f9c0469b2e2d918d8aa2f55c252048585d86fed5ab6d23ef753_prof);

        
        $__internal_424ee3a2523156ed8cbef03749e089b5888e8d7ef4aa32fa723be3dfe075c271->leave($__internal_424ee3a2523156ed8cbef03749e089b5888e8d7ef4aa32fa723be3dfe075c271_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
