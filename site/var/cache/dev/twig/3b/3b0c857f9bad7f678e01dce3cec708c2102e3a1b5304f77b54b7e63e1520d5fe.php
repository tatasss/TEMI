<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_0aba011db870084ed777737fda16141060fe4c5323694076669d316267841fd7 extends Twig_Template
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
        $__internal_3274f4febb039655ef88b9c06202b94c92cb54718445ffd44f0c0b6963ad65c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3274f4febb039655ef88b9c06202b94c92cb54718445ffd44f0c0b6963ad65c5->enter($__internal_3274f4febb039655ef88b9c06202b94c92cb54718445ffd44f0c0b6963ad65c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_bb2471c6f2dc34f2ac13b91b1ad0d1b570ca9f5a33244fece8e72fb70295d637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2471c6f2dc34f2ac13b91b1ad0d1b570ca9f5a33244fece8e72fb70295d637->enter($__internal_bb2471c6f2dc34f2ac13b91b1ad0d1b570ca9f5a33244fece8e72fb70295d637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_3274f4febb039655ef88b9c06202b94c92cb54718445ffd44f0c0b6963ad65c5->leave($__internal_3274f4febb039655ef88b9c06202b94c92cb54718445ffd44f0c0b6963ad65c5_prof);

        
        $__internal_bb2471c6f2dc34f2ac13b91b1ad0d1b570ca9f5a33244fece8e72fb70295d637->leave($__internal_bb2471c6f2dc34f2ac13b91b1ad0d1b570ca9f5a33244fece8e72fb70295d637_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
