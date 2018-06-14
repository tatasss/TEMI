<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_21d3f520f6efa296abe76470653160a8df9e8fb248de35fdd559482a1df73fb5 extends Twig_Template
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
        $__internal_5cde59fa6ddca61fc59e0bff9966214bd993993b18a28defa0a0b1ed1470d4b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cde59fa6ddca61fc59e0bff9966214bd993993b18a28defa0a0b1ed1470d4b0->enter($__internal_5cde59fa6ddca61fc59e0bff9966214bd993993b18a28defa0a0b1ed1470d4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_0facea5780669c114570a214f445b0bbb2b5f469a66ecd2ea9bc20ad10b5ec59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0facea5780669c114570a214f445b0bbb2b5f469a66ecd2ea9bc20ad10b5ec59->enter($__internal_0facea5780669c114570a214f445b0bbb2b5f469a66ecd2ea9bc20ad10b5ec59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_5cde59fa6ddca61fc59e0bff9966214bd993993b18a28defa0a0b1ed1470d4b0->leave($__internal_5cde59fa6ddca61fc59e0bff9966214bd993993b18a28defa0a0b1ed1470d4b0_prof);

        
        $__internal_0facea5780669c114570a214f445b0bbb2b5f469a66ecd2ea9bc20ad10b5ec59->leave($__internal_0facea5780669c114570a214f445b0bbb2b5f469a66ecd2ea9bc20ad10b5ec59_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
", "@WebProfiler/Collector/exception.css.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
