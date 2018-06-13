<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_b8019340d1af98d876ef92d1971cbbcec88f071351a2816c0e44fba4b4c43285 extends Twig_Template
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
        $__internal_17734b95c5b2b16d88bd8926fc26c4b44d7e830b26d553dca3a9b7f996bc9096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17734b95c5b2b16d88bd8926fc26c4b44d7e830b26d553dca3a9b7f996bc9096->enter($__internal_17734b95c5b2b16d88bd8926fc26c4b44d7e830b26d553dca3a9b7f996bc9096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_201dbfa52a492eb30ec165a2e1c908e5d9b170ca8906389db620ea3ca065adab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201dbfa52a492eb30ec165a2e1c908e5d9b170ca8906389db620ea3ca065adab->enter($__internal_201dbfa52a492eb30ec165a2e1c908e5d9b170ca8906389db620ea3ca065adab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_17734b95c5b2b16d88bd8926fc26c4b44d7e830b26d553dca3a9b7f996bc9096->leave($__internal_17734b95c5b2b16d88bd8926fc26c4b44d7e830b26d553dca3a9b7f996bc9096_prof);

        
        $__internal_201dbfa52a492eb30ec165a2e1c908e5d9b170ca8906389db620ea3ca065adab->leave($__internal_201dbfa52a492eb30ec165a2e1c908e5d9b170ca8906389db620ea3ca065adab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
", "@Twig/Exception/error.xml.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
