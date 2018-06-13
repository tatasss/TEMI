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
        $__internal_610959b77e6997cdcb29eeb0c800d8e68aa26fc4588630b9b3c6309f0f0447ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610959b77e6997cdcb29eeb0c800d8e68aa26fc4588630b9b3c6309f0f0447ef->enter($__internal_610959b77e6997cdcb29eeb0c800d8e68aa26fc4588630b9b3c6309f0f0447ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_3f33cb279a9fa8c523502087b2f9bddfd620c4aead967233c83e540b9058c10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f33cb279a9fa8c523502087b2f9bddfd620c4aead967233c83e540b9058c10d->enter($__internal_3f33cb279a9fa8c523502087b2f9bddfd620c4aead967233c83e540b9058c10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_610959b77e6997cdcb29eeb0c800d8e68aa26fc4588630b9b3c6309f0f0447ef->leave($__internal_610959b77e6997cdcb29eeb0c800d8e68aa26fc4588630b9b3c6309f0f0447ef_prof);

        
        $__internal_3f33cb279a9fa8c523502087b2f9bddfd620c4aead967233c83e540b9058c10d->leave($__internal_3f33cb279a9fa8c523502087b2f9bddfd620c4aead967233c83e540b9058c10d_prof);

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
