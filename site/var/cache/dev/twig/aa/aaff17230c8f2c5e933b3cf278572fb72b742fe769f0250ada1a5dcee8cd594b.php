<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_70b9cea358859dc31ffdf7b9b360fc65703746c8744ba28748e04d55ed31ef9b extends Twig_Template
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
        $__internal_26069c0ded8c61e71ec542baa181e52ed9b7533711ea63bab100cc8e8cfde2cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26069c0ded8c61e71ec542baa181e52ed9b7533711ea63bab100cc8e8cfde2cc->enter($__internal_26069c0ded8c61e71ec542baa181e52ed9b7533711ea63bab100cc8e8cfde2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_acdd742c992f74991e5cc02e04b2381be81c69188b8266b12d8a9bb0848f9033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acdd742c992f74991e5cc02e04b2381be81c69188b8266b12d8a9bb0848f9033->enter($__internal_acdd742c992f74991e5cc02e04b2381be81c69188b8266b12d8a9bb0848f9033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_26069c0ded8c61e71ec542baa181e52ed9b7533711ea63bab100cc8e8cfde2cc->leave($__internal_26069c0ded8c61e71ec542baa181e52ed9b7533711ea63bab100cc8e8cfde2cc_prof);

        
        $__internal_acdd742c992f74991e5cc02e04b2381be81c69188b8266b12d8a9bb0848f9033->leave($__internal_acdd742c992f74991e5cc02e04b2381be81c69188b8266b12d8a9bb0848f9033_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
