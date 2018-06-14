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
        $__internal_1f980819d34a40a371181998ca1d419bc0657d2703f4c1c69f008087bf0973e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f980819d34a40a371181998ca1d419bc0657d2703f4c1c69f008087bf0973e3->enter($__internal_1f980819d34a40a371181998ca1d419bc0657d2703f4c1c69f008087bf0973e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_8806275a9309b2a9599dc1239d728b69ad5869c634ea7c07bbddd118b7fa0a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8806275a9309b2a9599dc1239d728b69ad5869c634ea7c07bbddd118b7fa0a51->enter($__internal_8806275a9309b2a9599dc1239d728b69ad5869c634ea7c07bbddd118b7fa0a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_1f980819d34a40a371181998ca1d419bc0657d2703f4c1c69f008087bf0973e3->leave($__internal_1f980819d34a40a371181998ca1d419bc0657d2703f4c1c69f008087bf0973e3_prof);

        
        $__internal_8806275a9309b2a9599dc1239d728b69ad5869c634ea7c07bbddd118b7fa0a51->leave($__internal_8806275a9309b2a9599dc1239d728b69ad5869c634ea7c07bbddd118b7fa0a51_prof);

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
