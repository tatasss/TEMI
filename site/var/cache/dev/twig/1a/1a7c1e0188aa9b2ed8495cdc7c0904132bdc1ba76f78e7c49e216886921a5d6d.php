<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_14078ac77447ef8c1183dc2470c26f802f8e3353eb77b32f590d6c4e623168df extends Twig_Template
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
        $__internal_4ff1bd8ee526528f5c07c5bd3f55e650e23b10921cbb208e5c6a4a0bd7ffb31b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ff1bd8ee526528f5c07c5bd3f55e650e23b10921cbb208e5c6a4a0bd7ffb31b->enter($__internal_4ff1bd8ee526528f5c07c5bd3f55e650e23b10921cbb208e5c6a4a0bd7ffb31b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_5776fc91259766850e1939a9a6a1d0b4c054eb0fbe477dcef5a76e4efe2b088a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5776fc91259766850e1939a9a6a1d0b4c054eb0fbe477dcef5a76e4efe2b088a->enter($__internal_5776fc91259766850e1939a9a6a1d0b4c054eb0fbe477dcef5a76e4efe2b088a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_4ff1bd8ee526528f5c07c5bd3f55e650e23b10921cbb208e5c6a4a0bd7ffb31b->leave($__internal_4ff1bd8ee526528f5c07c5bd3f55e650e23b10921cbb208e5c6a4a0bd7ffb31b_prof);

        
        $__internal_5776fc91259766850e1939a9a6a1d0b4c054eb0fbe477dcef5a76e4efe2b088a->leave($__internal_5776fc91259766850e1939a9a6a1d0b4c054eb0fbe477dcef5a76e4efe2b088a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
