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
        $__internal_86ca175fb6aa8bd52a6417ff8460c2315769e602f4b87c79d94982fecf261477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ca175fb6aa8bd52a6417ff8460c2315769e602f4b87c79d94982fecf261477->enter($__internal_86ca175fb6aa8bd52a6417ff8460c2315769e602f4b87c79d94982fecf261477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_0fb914490944b742fe177fcc656c0aa3553fe4c81ad0fe4d6cef10dc4a5c4fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb914490944b742fe177fcc656c0aa3553fe4c81ad0fe4d6cef10dc4a5c4fa9->enter($__internal_0fb914490944b742fe177fcc656c0aa3553fe4c81ad0fe4d6cef10dc4a5c4fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_86ca175fb6aa8bd52a6417ff8460c2315769e602f4b87c79d94982fecf261477->leave($__internal_86ca175fb6aa8bd52a6417ff8460c2315769e602f4b87c79d94982fecf261477_prof);

        
        $__internal_0fb914490944b742fe177fcc656c0aa3553fe4c81ad0fe4d6cef10dc4a5c4fa9->leave($__internal_0fb914490944b742fe177fcc656c0aa3553fe4c81ad0fe4d6cef10dc4a5c4fa9_prof);

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
