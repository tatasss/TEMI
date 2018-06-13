<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d763647cca385abbecb04ea3b37d336702df30e8da87a47012ac5bd88ad91456 extends Twig_Template
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
        $__internal_def032dee7ed22f13d81d1fdbb810a46681e1e39cfd765eb4fb73dc35db72bcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def032dee7ed22f13d81d1fdbb810a46681e1e39cfd765eb4fb73dc35db72bcb->enter($__internal_def032dee7ed22f13d81d1fdbb810a46681e1e39cfd765eb4fb73dc35db72bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_75e6c84c611a528910bac55572272184e9628b07c9f5dedb05e39711518b164e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e6c84c611a528910bac55572272184e9628b07c9f5dedb05e39711518b164e->enter($__internal_75e6c84c611a528910bac55572272184e9628b07c9f5dedb05e39711518b164e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_def032dee7ed22f13d81d1fdbb810a46681e1e39cfd765eb4fb73dc35db72bcb->leave($__internal_def032dee7ed22f13d81d1fdbb810a46681e1e39cfd765eb4fb73dc35db72bcb_prof);

        
        $__internal_75e6c84c611a528910bac55572272184e9628b07c9f5dedb05e39711518b164e->leave($__internal_75e6c84c611a528910bac55572272184e9628b07c9f5dedb05e39711518b164e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
