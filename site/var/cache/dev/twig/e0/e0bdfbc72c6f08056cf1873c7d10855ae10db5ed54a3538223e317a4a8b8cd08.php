<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_e176fca54c7791b36a55c97bb82cf839a2c419e28d21c90e0acc1cd1bb6ea777 extends Twig_Template
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
        $__internal_32820dcc20540cd0eebd394f65544515f13357ecbbac0a50744d88af8f37da8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32820dcc20540cd0eebd394f65544515f13357ecbbac0a50744d88af8f37da8f->enter($__internal_32820dcc20540cd0eebd394f65544515f13357ecbbac0a50744d88af8f37da8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_4385b5a0f034e7e364aeca5f9edc681c69af05dd78fa4c3350f70b4c829aded9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4385b5a0f034e7e364aeca5f9edc681c69af05dd78fa4c3350f70b4c829aded9->enter($__internal_4385b5a0f034e7e364aeca5f9edc681c69af05dd78fa4c3350f70b4c829aded9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_32820dcc20540cd0eebd394f65544515f13357ecbbac0a50744d88af8f37da8f->leave($__internal_32820dcc20540cd0eebd394f65544515f13357ecbbac0a50744d88af8f37da8f_prof);

        
        $__internal_4385b5a0f034e7e364aeca5f9edc681c69af05dd78fa4c3350f70b4c829aded9->leave($__internal_4385b5a0f034e7e364aeca5f9edc681c69af05dd78fa4c3350f70b4c829aded9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
", "@Twig/Exception/error.txt.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
