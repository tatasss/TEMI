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
        $__internal_22aea2874fcab8516e7f442df72d07dca9cbfb5a0e2b150600cb745c208b65bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22aea2874fcab8516e7f442df72d07dca9cbfb5a0e2b150600cb745c208b65bd->enter($__internal_22aea2874fcab8516e7f442df72d07dca9cbfb5a0e2b150600cb745c208b65bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b675945f3174c32b37bfcbd6f0fb6a009dee73a8e5165cfbcfb42f1d310fb47b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b675945f3174c32b37bfcbd6f0fb6a009dee73a8e5165cfbcfb42f1d310fb47b->enter($__internal_b675945f3174c32b37bfcbd6f0fb6a009dee73a8e5165cfbcfb42f1d310fb47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_22aea2874fcab8516e7f442df72d07dca9cbfb5a0e2b150600cb745c208b65bd->leave($__internal_22aea2874fcab8516e7f442df72d07dca9cbfb5a0e2b150600cb745c208b65bd_prof);

        
        $__internal_b675945f3174c32b37bfcbd6f0fb6a009dee73a8e5165cfbcfb42f1d310fb47b->leave($__internal_b675945f3174c32b37bfcbd6f0fb6a009dee73a8e5165cfbcfb42f1d310fb47b_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
