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
        $__internal_b385352e9be316f59c494e947cacb4413e209c364f37b83a291a49200f793006 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b385352e9be316f59c494e947cacb4413e209c364f37b83a291a49200f793006->enter($__internal_b385352e9be316f59c494e947cacb4413e209c364f37b83a291a49200f793006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_def43be9acc0800d797158260db2d4cf5a5da119d3a43152b6696f2402e604dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_def43be9acc0800d797158260db2d4cf5a5da119d3a43152b6696f2402e604dc->enter($__internal_def43be9acc0800d797158260db2d4cf5a5da119d3a43152b6696f2402e604dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_b385352e9be316f59c494e947cacb4413e209c364f37b83a291a49200f793006->leave($__internal_b385352e9be316f59c494e947cacb4413e209c364f37b83a291a49200f793006_prof);

        
        $__internal_def43be9acc0800d797158260db2d4cf5a5da119d3a43152b6696f2402e604dc->leave($__internal_def43be9acc0800d797158260db2d4cf5a5da119d3a43152b6696f2402e604dc_prof);

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
