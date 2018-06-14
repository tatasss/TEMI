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
        $__internal_546ca43e18e710498a925e805b05f9502935ef40f0ee15280fafcbe3d22145a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_546ca43e18e710498a925e805b05f9502935ef40f0ee15280fafcbe3d22145a9->enter($__internal_546ca43e18e710498a925e805b05f9502935ef40f0ee15280fafcbe3d22145a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_dd1924cd28509681a23a788d55cf48f3b877c6c17464c37a7cddc25a71e8bef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1924cd28509681a23a788d55cf48f3b877c6c17464c37a7cddc25a71e8bef3->enter($__internal_dd1924cd28509681a23a788d55cf48f3b877c6c17464c37a7cddc25a71e8bef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_546ca43e18e710498a925e805b05f9502935ef40f0ee15280fafcbe3d22145a9->leave($__internal_546ca43e18e710498a925e805b05f9502935ef40f0ee15280fafcbe3d22145a9_prof);

        
        $__internal_dd1924cd28509681a23a788d55cf48f3b877c6c17464c37a7cddc25a71e8bef3->leave($__internal_dd1924cd28509681a23a788d55cf48f3b877c6c17464c37a7cddc25a71e8bef3_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
