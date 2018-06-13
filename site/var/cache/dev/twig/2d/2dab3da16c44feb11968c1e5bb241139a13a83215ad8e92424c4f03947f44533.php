<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6e4d89314752a173849abb5847f691a366e893444c7161b3f1b6c502680dd908 extends Twig_Template
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
        $__internal_120504d83d4c537a9255d3570130d9cebf7ea755b0507f49f4f6819ab0584abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_120504d83d4c537a9255d3570130d9cebf7ea755b0507f49f4f6819ab0584abe->enter($__internal_120504d83d4c537a9255d3570130d9cebf7ea755b0507f49f4f6819ab0584abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_8fad69065f1a32e0b04b4cd41d346e77c36107f65fef5a6f670fde16b96b5fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fad69065f1a32e0b04b4cd41d346e77c36107f65fef5a6f670fde16b96b5fab->enter($__internal_8fad69065f1a32e0b04b4cd41d346e77c36107f65fef5a6f670fde16b96b5fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_120504d83d4c537a9255d3570130d9cebf7ea755b0507f49f4f6819ab0584abe->leave($__internal_120504d83d4c537a9255d3570130d9cebf7ea755b0507f49f4f6819ab0584abe_prof);

        
        $__internal_8fad69065f1a32e0b04b4cd41d346e77c36107f65fef5a6f670fde16b96b5fab->leave($__internal_8fad69065f1a32e0b04b4cd41d346e77c36107f65fef5a6f670fde16b96b5fab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
