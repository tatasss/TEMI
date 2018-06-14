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
        $__internal_346962fd5a5628ecadec0e9f4b657815e2f4b6c58d442b4e598584cd94ccf6fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_346962fd5a5628ecadec0e9f4b657815e2f4b6c58d442b4e598584cd94ccf6fa->enter($__internal_346962fd5a5628ecadec0e9f4b657815e2f4b6c58d442b4e598584cd94ccf6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_cf73b2a707255a95a247419ce160eba5e5bd744ddbb854f3e4db0ea203abbfb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf73b2a707255a95a247419ce160eba5e5bd744ddbb854f3e4db0ea203abbfb5->enter($__internal_cf73b2a707255a95a247419ce160eba5e5bd744ddbb854f3e4db0ea203abbfb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_346962fd5a5628ecadec0e9f4b657815e2f4b6c58d442b4e598584cd94ccf6fa->leave($__internal_346962fd5a5628ecadec0e9f4b657815e2f4b6c58d442b4e598584cd94ccf6fa_prof);

        
        $__internal_cf73b2a707255a95a247419ce160eba5e5bd744ddbb854f3e4db0ea203abbfb5->leave($__internal_cf73b2a707255a95a247419ce160eba5e5bd744ddbb854f3e4db0ea203abbfb5_prof);

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
", "@Framework/Form/form_enctype.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
