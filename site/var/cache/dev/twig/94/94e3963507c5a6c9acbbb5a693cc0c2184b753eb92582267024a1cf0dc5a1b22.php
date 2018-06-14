<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_28af261784602a733934e4ab4f45d1ccf64fd4cc95259defed0bf2dd5cc44df5 extends Twig_Template
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
        $__internal_c30d2655214e0b80431981fc7ea03220f93f83522572223d4e33ceb91c3f7e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30d2655214e0b80431981fc7ea03220f93f83522572223d4e33ceb91c3f7e30->enter($__internal_c30d2655214e0b80431981fc7ea03220f93f83522572223d4e33ceb91c3f7e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_5c8ece45b0ebc30fe6968a4d99afc992735441ff9411460cf5966a6ccd0bc117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8ece45b0ebc30fe6968a4d99afc992735441ff9411460cf5966a6ccd0bc117->enter($__internal_5c8ece45b0ebc30fe6968a4d99afc992735441ff9411460cf5966a6ccd0bc117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c30d2655214e0b80431981fc7ea03220f93f83522572223d4e33ceb91c3f7e30->leave($__internal_c30d2655214e0b80431981fc7ea03220f93f83522572223d4e33ceb91c3f7e30_prof);

        
        $__internal_5c8ece45b0ebc30fe6968a4d99afc992735441ff9411460cf5966a6ccd0bc117->leave($__internal_5c8ece45b0ebc30fe6968a4d99afc992735441ff9411460cf5966a6ccd0bc117_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
