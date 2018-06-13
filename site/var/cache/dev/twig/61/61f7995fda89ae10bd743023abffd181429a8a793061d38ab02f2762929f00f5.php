<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_9e82fc96aef4e6fa3c5347eef4aa12caf92be36eaff438db3f89e3c53fe321e7 extends Twig_Template
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
        $__internal_3b309d25d6e395c127476c6856d1f5029c3a404de3e20aabea3a4aa9f5618825 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b309d25d6e395c127476c6856d1f5029c3a404de3e20aabea3a4aa9f5618825->enter($__internal_3b309d25d6e395c127476c6856d1f5029c3a404de3e20aabea3a4aa9f5618825_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_05634eea5e31a58e70e354c9a2ac8f3d0758f01df12b583ee7bba7c2f2687eb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05634eea5e31a58e70e354c9a2ac8f3d0758f01df12b583ee7bba7c2f2687eb2->enter($__internal_05634eea5e31a58e70e354c9a2ac8f3d0758f01df12b583ee7bba7c2f2687eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3b309d25d6e395c127476c6856d1f5029c3a404de3e20aabea3a4aa9f5618825->leave($__internal_3b309d25d6e395c127476c6856d1f5029c3a404de3e20aabea3a4aa9f5618825_prof);

        
        $__internal_05634eea5e31a58e70e354c9a2ac8f3d0758f01df12b583ee7bba7c2f2687eb2->leave($__internal_05634eea5e31a58e70e354c9a2ac8f3d0758f01df12b583ee7bba7c2f2687eb2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
