<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a9371f57abcb570829ae19f8b3669e3e74df5265ab2b7543c5b3d058a9db4118 extends Twig_Template
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
        $__internal_5f1e12a64404d784f29f24a1031f028bfb95a50dc9df17a3f5677537b2bcb9a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f1e12a64404d784f29f24a1031f028bfb95a50dc9df17a3f5677537b2bcb9a9->enter($__internal_5f1e12a64404d784f29f24a1031f028bfb95a50dc9df17a3f5677537b2bcb9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_f0df42c3666a2a870f9a5550a0ef649a1e7f658b348e996be8e11476c2a76d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0df42c3666a2a870f9a5550a0ef649a1e7f658b348e996be8e11476c2a76d35->enter($__internal_f0df42c3666a2a870f9a5550a0ef649a1e7f658b348e996be8e11476c2a76d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5f1e12a64404d784f29f24a1031f028bfb95a50dc9df17a3f5677537b2bcb9a9->leave($__internal_5f1e12a64404d784f29f24a1031f028bfb95a50dc9df17a3f5677537b2bcb9a9_prof);

        
        $__internal_f0df42c3666a2a870f9a5550a0ef649a1e7f658b348e996be8e11476c2a76d35->leave($__internal_f0df42c3666a2a870f9a5550a0ef649a1e7f658b348e996be8e11476c2a76d35_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
