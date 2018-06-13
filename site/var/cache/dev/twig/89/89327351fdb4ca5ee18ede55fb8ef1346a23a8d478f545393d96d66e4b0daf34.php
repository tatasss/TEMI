<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_6a5d8c08107115fba59a443f9d7ad442b34a11bfe17b0ad3e760a1b58a2b3b55 extends Twig_Template
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
        $__internal_5f281f4f2c725928eaa3132628b0553ea1c895b3d680790fba8ba29a41231592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f281f4f2c725928eaa3132628b0553ea1c895b3d680790fba8ba29a41231592->enter($__internal_5f281f4f2c725928eaa3132628b0553ea1c895b3d680790fba8ba29a41231592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_bd09ab6e785cf31992dcc551a27673109f1bd5fc3f697f45d0fb2f4dec9ab8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd09ab6e785cf31992dcc551a27673109f1bd5fc3f697f45d0fb2f4dec9ab8ae->enter($__internal_bd09ab6e785cf31992dcc551a27673109f1bd5fc3f697f45d0fb2f4dec9ab8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5f281f4f2c725928eaa3132628b0553ea1c895b3d680790fba8ba29a41231592->leave($__internal_5f281f4f2c725928eaa3132628b0553ea1c895b3d680790fba8ba29a41231592_prof);

        
        $__internal_bd09ab6e785cf31992dcc551a27673109f1bd5fc3f697f45d0fb2f4dec9ab8ae->leave($__internal_bd09ab6e785cf31992dcc551a27673109f1bd5fc3f697f45d0fb2f4dec9ab8ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
