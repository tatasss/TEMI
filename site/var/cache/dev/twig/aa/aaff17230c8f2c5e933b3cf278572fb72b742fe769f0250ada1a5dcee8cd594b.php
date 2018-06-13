<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_70b9cea358859dc31ffdf7b9b360fc65703746c8744ba28748e04d55ed31ef9b extends Twig_Template
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
        $__internal_0bcbf50127ceb2ad0656c0fcca45eee56bfec341a6f7b5c3d3f5afcd3974525b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bcbf50127ceb2ad0656c0fcca45eee56bfec341a6f7b5c3d3f5afcd3974525b->enter($__internal_0bcbf50127ceb2ad0656c0fcca45eee56bfec341a6f7b5c3d3f5afcd3974525b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f9aa5a3f7bb9d488fe08e75aa2571aec7707975314abf483f49c5d6fe408eacb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9aa5a3f7bb9d488fe08e75aa2571aec7707975314abf483f49c5d6fe408eacb->enter($__internal_f9aa5a3f7bb9d488fe08e75aa2571aec7707975314abf483f49c5d6fe408eacb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_0bcbf50127ceb2ad0656c0fcca45eee56bfec341a6f7b5c3d3f5afcd3974525b->leave($__internal_0bcbf50127ceb2ad0656c0fcca45eee56bfec341a6f7b5c3d3f5afcd3974525b_prof);

        
        $__internal_f9aa5a3f7bb9d488fe08e75aa2571aec7707975314abf483f49c5d6fe408eacb->leave($__internal_f9aa5a3f7bb9d488fe08e75aa2571aec7707975314abf483f49c5d6fe408eacb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
