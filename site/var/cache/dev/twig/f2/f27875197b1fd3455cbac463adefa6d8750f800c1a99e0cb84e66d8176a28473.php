<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_b6ebbe1b449110e074fe1f318578a9c6b371e852e06a070a543aea8986667b98 extends Twig_Template
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
        $__internal_3a8548345d38e6c0250e169df8139bfa301c2553d2fb0dd185040bfc011c6fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a8548345d38e6c0250e169df8139bfa301c2553d2fb0dd185040bfc011c6fd5->enter($__internal_3a8548345d38e6c0250e169df8139bfa301c2553d2fb0dd185040bfc011c6fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_0822f6b35d6c08248a38faae37e342fdf7559246ec49ad4309a25217c7a4c779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0822f6b35d6c08248a38faae37e342fdf7559246ec49ad4309a25217c7a4c779->enter($__internal_0822f6b35d6c08248a38faae37e342fdf7559246ec49ad4309a25217c7a4c779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_3a8548345d38e6c0250e169df8139bfa301c2553d2fb0dd185040bfc011c6fd5->leave($__internal_3a8548345d38e6c0250e169df8139bfa301c2553d2fb0dd185040bfc011c6fd5_prof);

        
        $__internal_0822f6b35d6c08248a38faae37e342fdf7559246ec49ad4309a25217c7a4c779->leave($__internal_0822f6b35d6c08248a38faae37e342fdf7559246ec49ad4309a25217c7a4c779_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
