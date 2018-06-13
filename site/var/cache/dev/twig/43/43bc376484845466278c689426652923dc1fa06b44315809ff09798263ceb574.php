<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_5e7d61704fcb35117469edf91b898c13ba31b6c541174daec9290a6589447da1 extends Twig_Template
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
        $__internal_20e90eae467843042312870374e526e0c387c971f9c84b41e36d5ed3824e0fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20e90eae467843042312870374e526e0c387c971f9c84b41e36d5ed3824e0fea->enter($__internal_20e90eae467843042312870374e526e0c387c971f9c84b41e36d5ed3824e0fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_98ab0c1e557225b108bb8ea82fa1f1fac1a78ae837d56e7e9a9444e4a24270dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ab0c1e557225b108bb8ea82fa1f1fac1a78ae837d56e7e9a9444e4a24270dd->enter($__internal_98ab0c1e557225b108bb8ea82fa1f1fac1a78ae837d56e7e9a9444e4a24270dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_20e90eae467843042312870374e526e0c387c971f9c84b41e36d5ed3824e0fea->leave($__internal_20e90eae467843042312870374e526e0c387c971f9c84b41e36d5ed3824e0fea_prof);

        
        $__internal_98ab0c1e557225b108bb8ea82fa1f1fac1a78ae837d56e7e9a9444e4a24270dd->leave($__internal_98ab0c1e557225b108bb8ea82fa1f1fac1a78ae837d56e7e9a9444e4a24270dd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
