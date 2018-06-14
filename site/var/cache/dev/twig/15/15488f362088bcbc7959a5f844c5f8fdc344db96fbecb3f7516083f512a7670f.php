<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_962e36dd7239c1464884932fbb52a8753ea9421e99719a7f5bdad27552086077 extends Twig_Template
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
        $__internal_d01fe515ac7a20254b113ddda788d948873bd6c696c2298d64e8e0e1d27f0583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01fe515ac7a20254b113ddda788d948873bd6c696c2298d64e8e0e1d27f0583->enter($__internal_d01fe515ac7a20254b113ddda788d948873bd6c696c2298d64e8e0e1d27f0583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_cfdb0038063687840fc0a992704c6f6d2f6a8a07035068767d0201d50a30a92e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdb0038063687840fc0a992704c6f6d2f6a8a07035068767d0201d50a30a92e->enter($__internal_cfdb0038063687840fc0a992704c6f6d2f6a8a07035068767d0201d50a30a92e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d01fe515ac7a20254b113ddda788d948873bd6c696c2298d64e8e0e1d27f0583->leave($__internal_d01fe515ac7a20254b113ddda788d948873bd6c696c2298d64e8e0e1d27f0583_prof);

        
        $__internal_cfdb0038063687840fc0a992704c6f6d2f6a8a07035068767d0201d50a30a92e->leave($__internal_cfdb0038063687840fc0a992704c6f6d2f6a8a07035068767d0201d50a30a92e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
