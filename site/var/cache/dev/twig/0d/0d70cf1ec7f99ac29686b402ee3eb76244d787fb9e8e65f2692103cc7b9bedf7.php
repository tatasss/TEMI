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
        $__internal_155ffa6ef37570e639f670a10aa319fedb84984a67a27129e815d73c2f19111a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155ffa6ef37570e639f670a10aa319fedb84984a67a27129e815d73c2f19111a->enter($__internal_155ffa6ef37570e639f670a10aa319fedb84984a67a27129e815d73c2f19111a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_cece9128f56fd58ef89509a863b3f962d0240eef750b2d50d92d2714e2e3772b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cece9128f56fd58ef89509a863b3f962d0240eef750b2d50d92d2714e2e3772b->enter($__internal_cece9128f56fd58ef89509a863b3f962d0240eef750b2d50d92d2714e2e3772b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_155ffa6ef37570e639f670a10aa319fedb84984a67a27129e815d73c2f19111a->leave($__internal_155ffa6ef37570e639f670a10aa319fedb84984a67a27129e815d73c2f19111a_prof);

        
        $__internal_cece9128f56fd58ef89509a863b3f962d0240eef750b2d50d92d2714e2e3772b->leave($__internal_cece9128f56fd58ef89509a863b3f962d0240eef750b2d50d92d2714e2e3772b_prof);

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
