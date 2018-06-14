<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c6dc804a407f5f31da199d7e77e047a59af06bb530116ff445fea5665f6fe827 extends Twig_Template
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
        $__internal_ed9ab07181defb629b3eacb2021d164fd96d89b2be3ba286785090f41c739e0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed9ab07181defb629b3eacb2021d164fd96d89b2be3ba286785090f41c739e0c->enter($__internal_ed9ab07181defb629b3eacb2021d164fd96d89b2be3ba286785090f41c739e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_eb543d03f6865feed465665f7352f67c7137a91cd3380777e5794edee9444738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb543d03f6865feed465665f7352f67c7137a91cd3380777e5794edee9444738->enter($__internal_eb543d03f6865feed465665f7352f67c7137a91cd3380777e5794edee9444738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_ed9ab07181defb629b3eacb2021d164fd96d89b2be3ba286785090f41c739e0c->leave($__internal_ed9ab07181defb629b3eacb2021d164fd96d89b2be3ba286785090f41c739e0c_prof);

        
        $__internal_eb543d03f6865feed465665f7352f67c7137a91cd3380777e5794edee9444738->leave($__internal_eb543d03f6865feed465665f7352f67c7137a91cd3380777e5794edee9444738_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
