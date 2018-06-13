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
        $__internal_30237e4bb0759e3c6658003c08e18764fe126fa18f3598c266a72fe5433b47fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30237e4bb0759e3c6658003c08e18764fe126fa18f3598c266a72fe5433b47fb->enter($__internal_30237e4bb0759e3c6658003c08e18764fe126fa18f3598c266a72fe5433b47fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_6daecaf93f0c548dcfbc031ea924abb39d312c84107c41b8582f7c886780b3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6daecaf93f0c548dcfbc031ea924abb39d312c84107c41b8582f7c886780b3f9->enter($__internal_6daecaf93f0c548dcfbc031ea924abb39d312c84107c41b8582f7c886780b3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_30237e4bb0759e3c6658003c08e18764fe126fa18f3598c266a72fe5433b47fb->leave($__internal_30237e4bb0759e3c6658003c08e18764fe126fa18f3598c266a72fe5433b47fb_prof);

        
        $__internal_6daecaf93f0c548dcfbc031ea924abb39d312c84107c41b8582f7c886780b3f9->leave($__internal_6daecaf93f0c548dcfbc031ea924abb39d312c84107c41b8582f7c886780b3f9_prof);

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
