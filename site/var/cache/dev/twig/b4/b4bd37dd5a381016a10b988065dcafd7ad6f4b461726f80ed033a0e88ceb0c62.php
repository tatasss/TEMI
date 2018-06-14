<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_85e1e648f6b606b8662682dcff40eefaca6e8ac83299b7ca82b4a05783b92831 extends Twig_Template
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
        $__internal_7817e54fe360437b563663a4f0e685b10d9faa75820f572210f7820aed1cc956 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7817e54fe360437b563663a4f0e685b10d9faa75820f572210f7820aed1cc956->enter($__internal_7817e54fe360437b563663a4f0e685b10d9faa75820f572210f7820aed1cc956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d708ffa28ef4ff87827e0503d4abf20a9bcf850f23c80b3fe4ee60191c326d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d708ffa28ef4ff87827e0503d4abf20a9bcf850f23c80b3fe4ee60191c326d0e->enter($__internal_d708ffa28ef4ff87827e0503d4abf20a9bcf850f23c80b3fe4ee60191c326d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7817e54fe360437b563663a4f0e685b10d9faa75820f572210f7820aed1cc956->leave($__internal_7817e54fe360437b563663a4f0e685b10d9faa75820f572210f7820aed1cc956_prof);

        
        $__internal_d708ffa28ef4ff87827e0503d4abf20a9bcf850f23c80b3fe4ee60191c326d0e->leave($__internal_d708ffa28ef4ff87827e0503d4abf20a9bcf850f23c80b3fe4ee60191c326d0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
