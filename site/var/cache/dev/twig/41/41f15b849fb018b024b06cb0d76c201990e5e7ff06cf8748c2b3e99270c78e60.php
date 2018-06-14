<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3195415766074774f7ca941c79533b9d8657dea54372d970ba14e6d7238221fa extends Twig_Template
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
        $__internal_a71892aba51858edb889bffb854b878b124a723710d273771fd5344ec223e94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71892aba51858edb889bffb854b878b124a723710d273771fd5344ec223e94a->enter($__internal_a71892aba51858edb889bffb854b878b124a723710d273771fd5344ec223e94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_3d312f2a189222a59409464e238c47e8bc98e82933d5798da27bc8bb647c67bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d312f2a189222a59409464e238c47e8bc98e82933d5798da27bc8bb647c67bd->enter($__internal_3d312f2a189222a59409464e238c47e8bc98e82933d5798da27bc8bb647c67bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_a71892aba51858edb889bffb854b878b124a723710d273771fd5344ec223e94a->leave($__internal_a71892aba51858edb889bffb854b878b124a723710d273771fd5344ec223e94a_prof);

        
        $__internal_3d312f2a189222a59409464e238c47e8bc98e82933d5798da27bc8bb647c67bd->leave($__internal_3d312f2a189222a59409464e238c47e8bc98e82933d5798da27bc8bb647c67bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
