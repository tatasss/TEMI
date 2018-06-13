<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_c5fe969f5e45bbd220df8f3e0b44720bc6b0d0179abc98928f0fa91e757b480a extends Twig_Template
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
        $__internal_79efe9403b23e02a2ccd0101a09c0a0ba78e06d92ba10cc6385c68809bfc5a69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79efe9403b23e02a2ccd0101a09c0a0ba78e06d92ba10cc6385c68809bfc5a69->enter($__internal_79efe9403b23e02a2ccd0101a09c0a0ba78e06d92ba10cc6385c68809bfc5a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_f85bf91701b21eb47c17b76c61af75e3f6e397617af2f763482b12bb9744b8a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85bf91701b21eb47c17b76c61af75e3f6e397617af2f763482b12bb9744b8a3->enter($__internal_f85bf91701b21eb47c17b76c61af75e3f6e397617af2f763482b12bb9744b8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_79efe9403b23e02a2ccd0101a09c0a0ba78e06d92ba10cc6385c68809bfc5a69->leave($__internal_79efe9403b23e02a2ccd0101a09c0a0ba78e06d92ba10cc6385c68809bfc5a69_prof);

        
        $__internal_f85bf91701b21eb47c17b76c61af75e3f6e397617af2f763482b12bb9744b8a3->leave($__internal_f85bf91701b21eb47c17b76c61af75e3f6e397617af2f763482b12bb9744b8a3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
