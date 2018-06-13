<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_13f23646833ee0fd37748bf6bda7679a1a20c44b03ea9c9b6d84b6242da095c1 extends Twig_Template
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
        $__internal_78cd1bfc5743f6a31e7508d7b7dbe8442965251d35d222a663686801e0f4fd61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78cd1bfc5743f6a31e7508d7b7dbe8442965251d35d222a663686801e0f4fd61->enter($__internal_78cd1bfc5743f6a31e7508d7b7dbe8442965251d35d222a663686801e0f4fd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_1f97c8aa67b91e194acf4ac8b4ff33e7569deaeaa16c9ee9decd7f9c83e8880e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f97c8aa67b91e194acf4ac8b4ff33e7569deaeaa16c9ee9decd7f9c83e8880e->enter($__internal_1f97c8aa67b91e194acf4ac8b4ff33e7569deaeaa16c9ee9decd7f9c83e8880e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_78cd1bfc5743f6a31e7508d7b7dbe8442965251d35d222a663686801e0f4fd61->leave($__internal_78cd1bfc5743f6a31e7508d7b7dbe8442965251d35d222a663686801e0f4fd61_prof);

        
        $__internal_1f97c8aa67b91e194acf4ac8b4ff33e7569deaeaa16c9ee9decd7f9c83e8880e->leave($__internal_1f97c8aa67b91e194acf4ac8b4ff33e7569deaeaa16c9ee9decd7f9c83e8880e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
