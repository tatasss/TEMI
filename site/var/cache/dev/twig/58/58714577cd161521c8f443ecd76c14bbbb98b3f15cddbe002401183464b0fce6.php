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
        $__internal_8517d398c3e543027678ae4aa69080937b53f8cd1358cae3ca0580255ba8b65f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8517d398c3e543027678ae4aa69080937b53f8cd1358cae3ca0580255ba8b65f->enter($__internal_8517d398c3e543027678ae4aa69080937b53f8cd1358cae3ca0580255ba8b65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_967ebfe7a745af31822312e0295c6f3ecc9ee5b43e39d26c304b49973dc2e2c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967ebfe7a745af31822312e0295c6f3ecc9ee5b43e39d26c304b49973dc2e2c6->enter($__internal_967ebfe7a745af31822312e0295c6f3ecc9ee5b43e39d26c304b49973dc2e2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_8517d398c3e543027678ae4aa69080937b53f8cd1358cae3ca0580255ba8b65f->leave($__internal_8517d398c3e543027678ae4aa69080937b53f8cd1358cae3ca0580255ba8b65f_prof);

        
        $__internal_967ebfe7a745af31822312e0295c6f3ecc9ee5b43e39d26c304b49973dc2e2c6->leave($__internal_967ebfe7a745af31822312e0295c6f3ecc9ee5b43e39d26c304b49973dc2e2c6_prof);

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
