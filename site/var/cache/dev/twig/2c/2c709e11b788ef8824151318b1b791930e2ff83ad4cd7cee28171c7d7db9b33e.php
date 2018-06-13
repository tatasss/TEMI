<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e027e94076085726b4c6e13a0ab6a2d3ef58cd055c18d6b4232bf34f4d88bc9c extends Twig_Template
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
        $__internal_245610a6c3d1de8fa05fca0b9a9a7bc60f78679a292af5dc6013721713a142ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245610a6c3d1de8fa05fca0b9a9a7bc60f78679a292af5dc6013721713a142ac->enter($__internal_245610a6c3d1de8fa05fca0b9a9a7bc60f78679a292af5dc6013721713a142ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_56f9d6bb71bc71efc6738c4827724e08bca8cd52d8dd41e9a86bc232cdecbe53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f9d6bb71bc71efc6738c4827724e08bca8cd52d8dd41e9a86bc232cdecbe53->enter($__internal_56f9d6bb71bc71efc6738c4827724e08bca8cd52d8dd41e9a86bc232cdecbe53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_245610a6c3d1de8fa05fca0b9a9a7bc60f78679a292af5dc6013721713a142ac->leave($__internal_245610a6c3d1de8fa05fca0b9a9a7bc60f78679a292af5dc6013721713a142ac_prof);

        
        $__internal_56f9d6bb71bc71efc6738c4827724e08bca8cd52d8dd41e9a86bc232cdecbe53->leave($__internal_56f9d6bb71bc71efc6738c4827724e08bca8cd52d8dd41e9a86bc232cdecbe53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
