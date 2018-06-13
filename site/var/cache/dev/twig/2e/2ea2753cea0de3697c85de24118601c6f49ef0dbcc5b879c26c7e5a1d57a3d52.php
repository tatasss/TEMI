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
        $__internal_c4245c018cb613daae491242892254ad1d7e6dd29bd200c666c83e801bf6dbfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4245c018cb613daae491242892254ad1d7e6dd29bd200c666c83e801bf6dbfc->enter($__internal_c4245c018cb613daae491242892254ad1d7e6dd29bd200c666c83e801bf6dbfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_37e55788f561b0b621daa402ce5c39e09b74d3386b70e0ee93672e4c3c7fa067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37e55788f561b0b621daa402ce5c39e09b74d3386b70e0ee93672e4c3c7fa067->enter($__internal_37e55788f561b0b621daa402ce5c39e09b74d3386b70e0ee93672e4c3c7fa067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_c4245c018cb613daae491242892254ad1d7e6dd29bd200c666c83e801bf6dbfc->leave($__internal_c4245c018cb613daae491242892254ad1d7e6dd29bd200c666c83e801bf6dbfc_prof);

        
        $__internal_37e55788f561b0b621daa402ce5c39e09b74d3386b70e0ee93672e4c3c7fa067->leave($__internal_37e55788f561b0b621daa402ce5c39e09b74d3386b70e0ee93672e4c3c7fa067_prof);

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
", "@Twig/Exception/error.xml.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
