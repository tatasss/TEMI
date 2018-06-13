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
        $__internal_f880b67cfc60dd666f6dc5ef92b9369dffc9616dde1a55b30a9e9b0a728c8d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f880b67cfc60dd666f6dc5ef92b9369dffc9616dde1a55b30a9e9b0a728c8d8d->enter($__internal_f880b67cfc60dd666f6dc5ef92b9369dffc9616dde1a55b30a9e9b0a728c8d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d5f9eae53fe035ac234b7b6e5cc90c60aa90ad7ccd461c491fb5749760fd7a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f9eae53fe035ac234b7b6e5cc90c60aa90ad7ccd461c491fb5749760fd7a07->enter($__internal_d5f9eae53fe035ac234b7b6e5cc90c60aa90ad7ccd461c491fb5749760fd7a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f880b67cfc60dd666f6dc5ef92b9369dffc9616dde1a55b30a9e9b0a728c8d8d->leave($__internal_f880b67cfc60dd666f6dc5ef92b9369dffc9616dde1a55b30a9e9b0a728c8d8d_prof);

        
        $__internal_d5f9eae53fe035ac234b7b6e5cc90c60aa90ad7ccd461c491fb5749760fd7a07->leave($__internal_d5f9eae53fe035ac234b7b6e5cc90c60aa90ad7ccd461c491fb5749760fd7a07_prof);

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
", "@Twig/Exception/exception.atom.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
