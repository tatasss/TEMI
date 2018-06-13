<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c6dc804a407f5f31da199d7e77e047a59af06bb530116ff445fea5665f6fe827 extends Twig_Template
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
        $__internal_6726d81354eaed9cc46c991878ef8211e5fc323641cc1cf2d0d4bdcf423866c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6726d81354eaed9cc46c991878ef8211e5fc323641cc1cf2d0d4bdcf423866c4->enter($__internal_6726d81354eaed9cc46c991878ef8211e5fc323641cc1cf2d0d4bdcf423866c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_a7f2e7ab021f9d176e929a8df77bef27b60804ca99cdbb9a2f99d665bfb5f667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f2e7ab021f9d176e929a8df77bef27b60804ca99cdbb9a2f99d665bfb5f667->enter($__internal_a7f2e7ab021f9d176e929a8df77bef27b60804ca99cdbb9a2f99d665bfb5f667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6726d81354eaed9cc46c991878ef8211e5fc323641cc1cf2d0d4bdcf423866c4->leave($__internal_6726d81354eaed9cc46c991878ef8211e5fc323641cc1cf2d0d4bdcf423866c4_prof);

        
        $__internal_a7f2e7ab021f9d176e929a8df77bef27b60804ca99cdbb9a2f99d665bfb5f667->leave($__internal_a7f2e7ab021f9d176e929a8df77bef27b60804ca99cdbb9a2f99d665bfb5f667_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
