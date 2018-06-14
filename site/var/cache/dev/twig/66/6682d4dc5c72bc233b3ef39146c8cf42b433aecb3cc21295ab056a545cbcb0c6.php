<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e11df7ac2887eabcfc8b514d4b9854eb81a9297169ec1a17aee20c848f7c0d06 extends Twig_Template
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
        $__internal_8e3046d3b15cf9324365bbee501402476a4a2c0ac3317a608acc2c4703cd2cf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3046d3b15cf9324365bbee501402476a4a2c0ac3317a608acc2c4703cd2cf9->enter($__internal_8e3046d3b15cf9324365bbee501402476a4a2c0ac3317a608acc2c4703cd2cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_94d3118c1e6eaaa5e669dba9409bb662e350da9abe165deeecef1310aaf28903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d3118c1e6eaaa5e669dba9409bb662e350da9abe165deeecef1310aaf28903->enter($__internal_94d3118c1e6eaaa5e669dba9409bb662e350da9abe165deeecef1310aaf28903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8e3046d3b15cf9324365bbee501402476a4a2c0ac3317a608acc2c4703cd2cf9->leave($__internal_8e3046d3b15cf9324365bbee501402476a4a2c0ac3317a608acc2c4703cd2cf9_prof);

        
        $__internal_94d3118c1e6eaaa5e669dba9409bb662e350da9abe165deeecef1310aaf28903->leave($__internal_94d3118c1e6eaaa5e669dba9409bb662e350da9abe165deeecef1310aaf28903_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
