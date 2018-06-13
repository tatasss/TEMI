<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d4089c4e374fa22a4ecc9d6cb6640ad2580b6a179230c6fabde44da95e266f8a extends Twig_Template
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
        $__internal_d3327d4dccdbcd67066e582830a6a6b71efc6a410bac7b93c3eb98bc8f55e369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3327d4dccdbcd67066e582830a6a6b71efc6a410bac7b93c3eb98bc8f55e369->enter($__internal_d3327d4dccdbcd67066e582830a6a6b71efc6a410bac7b93c3eb98bc8f55e369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_cce4caa4e9aca1c0611c3c520821e5d1fcd5d137438c8eaf4bd31d548e7d0388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce4caa4e9aca1c0611c3c520821e5d1fcd5d137438c8eaf4bd31d548e7d0388->enter($__internal_cce4caa4e9aca1c0611c3c520821e5d1fcd5d137438c8eaf4bd31d548e7d0388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d3327d4dccdbcd67066e582830a6a6b71efc6a410bac7b93c3eb98bc8f55e369->leave($__internal_d3327d4dccdbcd67066e582830a6a6b71efc6a410bac7b93c3eb98bc8f55e369_prof);

        
        $__internal_cce4caa4e9aca1c0611c3c520821e5d1fcd5d137438c8eaf4bd31d548e7d0388->leave($__internal_cce4caa4e9aca1c0611c3c520821e5d1fcd5d137438c8eaf4bd31d548e7d0388_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
