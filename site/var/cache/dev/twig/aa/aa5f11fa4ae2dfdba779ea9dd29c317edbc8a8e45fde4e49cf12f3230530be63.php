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
        $__internal_d5b453596fbe4d02537fe2b296078a5b3c59ab0feb91e7ce9d211d5f651a81fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b453596fbe4d02537fe2b296078a5b3c59ab0feb91e7ce9d211d5f651a81fa->enter($__internal_d5b453596fbe4d02537fe2b296078a5b3c59ab0feb91e7ce9d211d5f651a81fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_b5b33774d56bb7b4ad96e4fd660783f2d3bdb7d01d643adfb98f3056a99ed938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b33774d56bb7b4ad96e4fd660783f2d3bdb7d01d643adfb98f3056a99ed938->enter($__internal_b5b33774d56bb7b4ad96e4fd660783f2d3bdb7d01d643adfb98f3056a99ed938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d5b453596fbe4d02537fe2b296078a5b3c59ab0feb91e7ce9d211d5f651a81fa->leave($__internal_d5b453596fbe4d02537fe2b296078a5b3c59ab0feb91e7ce9d211d5f651a81fa_prof);

        
        $__internal_b5b33774d56bb7b4ad96e4fd660783f2d3bdb7d01d643adfb98f3056a99ed938->leave($__internal_b5b33774d56bb7b4ad96e4fd660783f2d3bdb7d01d643adfb98f3056a99ed938_prof);

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
", "@Twig/Exception/error.atom.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
