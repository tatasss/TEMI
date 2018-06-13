<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0401a279fd24945d9fc83bf665faf72fd4810d06350e6175af0bf61165834f89 extends Twig_Template
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
        $__internal_e35bff90279947092931e55621429011ea947e3726b4f35889b9ed3d38e5b4b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35bff90279947092931e55621429011ea947e3726b4f35889b9ed3d38e5b4b9->enter($__internal_e35bff90279947092931e55621429011ea947e3726b4f35889b9ed3d38e5b4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_4409561f9454777c0133e565d340e765c29c707d334b260e9340406efcf94995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4409561f9454777c0133e565d340e765c29c707d334b260e9340406efcf94995->enter($__internal_4409561f9454777c0133e565d340e765c29c707d334b260e9340406efcf94995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e35bff90279947092931e55621429011ea947e3726b4f35889b9ed3d38e5b4b9->leave($__internal_e35bff90279947092931e55621429011ea947e3726b4f35889b9ed3d38e5b4b9_prof);

        
        $__internal_4409561f9454777c0133e565d340e765c29c707d334b260e9340406efcf94995->leave($__internal_4409561f9454777c0133e565d340e765c29c707d334b260e9340406efcf94995_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
