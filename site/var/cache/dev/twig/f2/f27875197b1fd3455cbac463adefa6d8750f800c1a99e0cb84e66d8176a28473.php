<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b6ebbe1b449110e074fe1f318578a9c6b371e852e06a070a543aea8986667b98 extends Twig_Template
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
        $__internal_2ece2b0893ff08ed67aba89acbf1d1619babc93a8ceac9226af4aafe82206e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ece2b0893ff08ed67aba89acbf1d1619babc93a8ceac9226af4aafe82206e63->enter($__internal_2ece2b0893ff08ed67aba89acbf1d1619babc93a8ceac9226af4aafe82206e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_5ccdda19f2e71447cb1a87a0cbf1ba9be6400b264208082d101fd58cdf7a6316 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ccdda19f2e71447cb1a87a0cbf1ba9be6400b264208082d101fd58cdf7a6316->enter($__internal_5ccdda19f2e71447cb1a87a0cbf1ba9be6400b264208082d101fd58cdf7a6316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_2ece2b0893ff08ed67aba89acbf1d1619babc93a8ceac9226af4aafe82206e63->leave($__internal_2ece2b0893ff08ed67aba89acbf1d1619babc93a8ceac9226af4aafe82206e63_prof);

        
        $__internal_5ccdda19f2e71447cb1a87a0cbf1ba9be6400b264208082d101fd58cdf7a6316->leave($__internal_5ccdda19f2e71447cb1a87a0cbf1ba9be6400b264208082d101fd58cdf7a6316_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
