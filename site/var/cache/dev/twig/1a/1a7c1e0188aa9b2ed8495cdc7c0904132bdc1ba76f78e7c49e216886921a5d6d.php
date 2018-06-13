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
        $__internal_cb5bfc736d7495abeee02c4bbcdcf6ac002a87efa1e60320b43192f2884f03ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb5bfc736d7495abeee02c4bbcdcf6ac002a87efa1e60320b43192f2884f03ab->enter($__internal_cb5bfc736d7495abeee02c4bbcdcf6ac002a87efa1e60320b43192f2884f03ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_ea60de5cfd115f4b0be4db4a1e226157de3358f227106dc3aa9837cd6b6c022f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea60de5cfd115f4b0be4db4a1e226157de3358f227106dc3aa9837cd6b6c022f->enter($__internal_ea60de5cfd115f4b0be4db4a1e226157de3358f227106dc3aa9837cd6b6c022f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_cb5bfc736d7495abeee02c4bbcdcf6ac002a87efa1e60320b43192f2884f03ab->leave($__internal_cb5bfc736d7495abeee02c4bbcdcf6ac002a87efa1e60320b43192f2884f03ab_prof);

        
        $__internal_ea60de5cfd115f4b0be4db4a1e226157de3358f227106dc3aa9837cd6b6c022f->leave($__internal_ea60de5cfd115f4b0be4db4a1e226157de3358f227106dc3aa9837cd6b6c022f_prof);

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
