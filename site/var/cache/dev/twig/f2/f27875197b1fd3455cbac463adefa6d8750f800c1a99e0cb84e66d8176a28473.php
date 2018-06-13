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
        $__internal_c6b79068a50d4c9d5932a315fb86789a7503b5a98187e17483439ddb8af9c5aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6b79068a50d4c9d5932a315fb86789a7503b5a98187e17483439ddb8af9c5aa->enter($__internal_c6b79068a50d4c9d5932a315fb86789a7503b5a98187e17483439ddb8af9c5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_3ef35c328d4372eb0a152c576011e7109bb493af5ee5c61503d3b58c78b8ddf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef35c328d4372eb0a152c576011e7109bb493af5ee5c61503d3b58c78b8ddf1->enter($__internal_3ef35c328d4372eb0a152c576011e7109bb493af5ee5c61503d3b58c78b8ddf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c6b79068a50d4c9d5932a315fb86789a7503b5a98187e17483439ddb8af9c5aa->leave($__internal_c6b79068a50d4c9d5932a315fb86789a7503b5a98187e17483439ddb8af9c5aa_prof);

        
        $__internal_3ef35c328d4372eb0a152c576011e7109bb493af5ee5c61503d3b58c78b8ddf1->leave($__internal_3ef35c328d4372eb0a152c576011e7109bb493af5ee5c61503d3b58c78b8ddf1_prof);

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
