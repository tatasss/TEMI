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
        $__internal_938bf1450bd293d52c1dc82c81347098e986c2405d7e3b6602783dd27f07cec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_938bf1450bd293d52c1dc82c81347098e986c2405d7e3b6602783dd27f07cec8->enter($__internal_938bf1450bd293d52c1dc82c81347098e986c2405d7e3b6602783dd27f07cec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_9238b8e562e8387476ffefe3b87e55814838aa9c7a2f3e3f6de5cc468e40553e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9238b8e562e8387476ffefe3b87e55814838aa9c7a2f3e3f6de5cc468e40553e->enter($__internal_9238b8e562e8387476ffefe3b87e55814838aa9c7a2f3e3f6de5cc468e40553e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_938bf1450bd293d52c1dc82c81347098e986c2405d7e3b6602783dd27f07cec8->leave($__internal_938bf1450bd293d52c1dc82c81347098e986c2405d7e3b6602783dd27f07cec8_prof);

        
        $__internal_9238b8e562e8387476ffefe3b87e55814838aa9c7a2f3e3f6de5cc468e40553e->leave($__internal_9238b8e562e8387476ffefe3b87e55814838aa9c7a2f3e3f6de5cc468e40553e_prof);

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
", "TwigBundle:Exception:error.atom.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
