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
        $__internal_77e06594b071b38c156aa62156f8ed5c91965ceda027044322944c90d4dba502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e06594b071b38c156aa62156f8ed5c91965ceda027044322944c90d4dba502->enter($__internal_77e06594b071b38c156aa62156f8ed5c91965ceda027044322944c90d4dba502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_d0c420cb36717d10560cd4d48349f88066ee083d0ab5fa25a6258ec55937e489 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c420cb36717d10560cd4d48349f88066ee083d0ab5fa25a6258ec55937e489->enter($__internal_d0c420cb36717d10560cd4d48349f88066ee083d0ab5fa25a6258ec55937e489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_77e06594b071b38c156aa62156f8ed5c91965ceda027044322944c90d4dba502->leave($__internal_77e06594b071b38c156aa62156f8ed5c91965ceda027044322944c90d4dba502_prof);

        
        $__internal_d0c420cb36717d10560cd4d48349f88066ee083d0ab5fa25a6258ec55937e489->leave($__internal_d0c420cb36717d10560cd4d48349f88066ee083d0ab5fa25a6258ec55937e489_prof);

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
