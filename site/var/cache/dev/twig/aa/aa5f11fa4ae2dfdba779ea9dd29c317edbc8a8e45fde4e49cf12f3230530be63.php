<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a9371f57abcb570829ae19f8b3669e3e74df5265ab2b7543c5b3d058a9db4118 extends Twig_Template
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
        $__internal_208704af2cc0de98673c02334cf530c7e5b47e464199bc7f30791429d0cdb67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_208704af2cc0de98673c02334cf530c7e5b47e464199bc7f30791429d0cdb67d->enter($__internal_208704af2cc0de98673c02334cf530c7e5b47e464199bc7f30791429d0cdb67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_23af9efc735ddbf7092518cda7bcd7fd95577bdeffd2b10ce0ff6847c6810328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23af9efc735ddbf7092518cda7bcd7fd95577bdeffd2b10ce0ff6847c6810328->enter($__internal_23af9efc735ddbf7092518cda7bcd7fd95577bdeffd2b10ce0ff6847c6810328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_208704af2cc0de98673c02334cf530c7e5b47e464199bc7f30791429d0cdb67d->leave($__internal_208704af2cc0de98673c02334cf530c7e5b47e464199bc7f30791429d0cdb67d_prof);

        
        $__internal_23af9efc735ddbf7092518cda7bcd7fd95577bdeffd2b10ce0ff6847c6810328->leave($__internal_23af9efc735ddbf7092518cda7bcd7fd95577bdeffd2b10ce0ff6847c6810328_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
