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
        $__internal_867e994d2dd6e665595e5a38dbc9080b7ad8c878d6d52a6c5c696550ea530069 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867e994d2dd6e665595e5a38dbc9080b7ad8c878d6d52a6c5c696550ea530069->enter($__internal_867e994d2dd6e665595e5a38dbc9080b7ad8c878d6d52a6c5c696550ea530069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_7563850222c55c8b855c55cea69c42548a2d4ff0e92960bd9896d6e5e7982071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7563850222c55c8b855c55cea69c42548a2d4ff0e92960bd9896d6e5e7982071->enter($__internal_7563850222c55c8b855c55cea69c42548a2d4ff0e92960bd9896d6e5e7982071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_867e994d2dd6e665595e5a38dbc9080b7ad8c878d6d52a6c5c696550ea530069->leave($__internal_867e994d2dd6e665595e5a38dbc9080b7ad8c878d6d52a6c5c696550ea530069_prof);

        
        $__internal_7563850222c55c8b855c55cea69c42548a2d4ff0e92960bd9896d6e5e7982071->leave($__internal_7563850222c55c8b855c55cea69c42548a2d4ff0e92960bd9896d6e5e7982071_prof);

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
", "@WebProfiler/Collector/exception.css.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}