<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_bdd8e2616b3be946fb63111656f295334bea3ca471c02e15a81c0880981742be extends Twig_Template
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
        $__internal_289c77692293d31cf71320dbede8c7d4d429a3f2ccc1e9c9c106f6102722c8ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289c77692293d31cf71320dbede8c7d4d429a3f2ccc1e9c9c106f6102722c8ce->enter($__internal_289c77692293d31cf71320dbede8c7d4d429a3f2ccc1e9c9c106f6102722c8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_717f644397447518a80b3c587a903161a69f5197caafc6e71589c1ff245dcc84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_717f644397447518a80b3c587a903161a69f5197caafc6e71589c1ff245dcc84->enter($__internal_717f644397447518a80b3c587a903161a69f5197caafc6e71589c1ff245dcc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_289c77692293d31cf71320dbede8c7d4d429a3f2ccc1e9c9c106f6102722c8ce->leave($__internal_289c77692293d31cf71320dbede8c7d4d429a3f2ccc1e9c9c106f6102722c8ce_prof);

        
        $__internal_717f644397447518a80b3c587a903161a69f5197caafc6e71589c1ff245dcc84->leave($__internal_717f644397447518a80b3c587a903161a69f5197caafc6e71589c1ff245dcc84_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
