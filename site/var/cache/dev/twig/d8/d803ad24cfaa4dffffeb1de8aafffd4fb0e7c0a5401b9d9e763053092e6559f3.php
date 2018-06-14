<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_48d6fcfb5619ce8ba5c6b5865aa9314e070904e0335cae6a6b5233d7a3ced4ca extends Twig_Template
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
        $__internal_de628da7908ae9cd71921a1c877ac35ab54765cecbfc0dcdf43409dc0d64a519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de628da7908ae9cd71921a1c877ac35ab54765cecbfc0dcdf43409dc0d64a519->enter($__internal_de628da7908ae9cd71921a1c877ac35ab54765cecbfc0dcdf43409dc0d64a519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_1afc7ef6c0d2f5f7f0d3e86c58e1ba956b098199ea640ba0c6b3aeefa72bec0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1afc7ef6c0d2f5f7f0d3e86c58e1ba956b098199ea640ba0c6b3aeefa72bec0d->enter($__internal_1afc7ef6c0d2f5f7f0d3e86c58e1ba956b098199ea640ba0c6b3aeefa72bec0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_de628da7908ae9cd71921a1c877ac35ab54765cecbfc0dcdf43409dc0d64a519->leave($__internal_de628da7908ae9cd71921a1c877ac35ab54765cecbfc0dcdf43409dc0d64a519_prof);

        
        $__internal_1afc7ef6c0d2f5f7f0d3e86c58e1ba956b098199ea640ba0c6b3aeefa72bec0d->leave($__internal_1afc7ef6c0d2f5f7f0d3e86c58e1ba956b098199ea640ba0c6b3aeefa72bec0d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
", "@Twig/Exception/error.js.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
