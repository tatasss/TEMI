<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_519d16016b52120d9660fad5c4edb589f096e2b6d8fda7771de3504c861244cf extends Twig_Template
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
        $__internal_a990c4a3328c2379d04b8f36f52b286e285773e2821e49f7a809f1ac68a3e790 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a990c4a3328c2379d04b8f36f52b286e285773e2821e49f7a809f1ac68a3e790->enter($__internal_a990c4a3328c2379d04b8f36f52b286e285773e2821e49f7a809f1ac68a3e790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_a0e7b308baa350f9f921e245f7299a646dbd825c90a630840b40514af6eaacc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e7b308baa350f9f921e245f7299a646dbd825c90a630840b40514af6eaacc8->enter($__internal_a0e7b308baa350f9f921e245f7299a646dbd825c90a630840b40514af6eaacc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_a990c4a3328c2379d04b8f36f52b286e285773e2821e49f7a809f1ac68a3e790->leave($__internal_a990c4a3328c2379d04b8f36f52b286e285773e2821e49f7a809f1ac68a3e790_prof);

        
        $__internal_a0e7b308baa350f9f921e245f7299a646dbd825c90a630840b40514af6eaacc8->leave($__internal_a0e7b308baa350f9f921e245f7299a646dbd825c90a630840b40514af6eaacc8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
