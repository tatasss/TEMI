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
        $__internal_3ca9b6ede27175ac0694a18faf924f014c17d45a2a2bc4429e183b42dde88246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca9b6ede27175ac0694a18faf924f014c17d45a2a2bc4429e183b42dde88246->enter($__internal_3ca9b6ede27175ac0694a18faf924f014c17d45a2a2bc4429e183b42dde88246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_b7ac160ccadde1839a5c2cda2ade91a4cc11ecced2861bc2f360b18347d53111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ac160ccadde1839a5c2cda2ade91a4cc11ecced2861bc2f360b18347d53111->enter($__internal_b7ac160ccadde1839a5c2cda2ade91a4cc11ecced2861bc2f360b18347d53111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_3ca9b6ede27175ac0694a18faf924f014c17d45a2a2bc4429e183b42dde88246->leave($__internal_3ca9b6ede27175ac0694a18faf924f014c17d45a2a2bc4429e183b42dde88246_prof);

        
        $__internal_b7ac160ccadde1839a5c2cda2ade91a4cc11ecced2861bc2f360b18347d53111->leave($__internal_b7ac160ccadde1839a5c2cda2ade91a4cc11ecced2861bc2f360b18347d53111_prof);

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
", "@Twig/Exception/error.css.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
