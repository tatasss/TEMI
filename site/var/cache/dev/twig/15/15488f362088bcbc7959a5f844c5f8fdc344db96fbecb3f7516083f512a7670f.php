<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_962e36dd7239c1464884932fbb52a8753ea9421e99719a7f5bdad27552086077 extends Twig_Template
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
        $__internal_35025f839b6318034c9203a18aba0375b50bdce2492c688bd7e1e24127b7f413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35025f839b6318034c9203a18aba0375b50bdce2492c688bd7e1e24127b7f413->enter($__internal_35025f839b6318034c9203a18aba0375b50bdce2492c688bd7e1e24127b7f413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_6bc1006f218325130a7abd6ec18e7d8649114972394c4bf5618934cbd3ef9421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc1006f218325130a7abd6ec18e7d8649114972394c4bf5618934cbd3ef9421->enter($__internal_6bc1006f218325130a7abd6ec18e7d8649114972394c4bf5618934cbd3ef9421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_35025f839b6318034c9203a18aba0375b50bdce2492c688bd7e1e24127b7f413->leave($__internal_35025f839b6318034c9203a18aba0375b50bdce2492c688bd7e1e24127b7f413_prof);

        
        $__internal_6bc1006f218325130a7abd6ec18e7d8649114972394c4bf5618934cbd3ef9421->leave($__internal_6bc1006f218325130a7abd6ec18e7d8649114972394c4bf5618934cbd3ef9421_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
