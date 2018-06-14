<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_0082082c1bc9fb0dec011fb60d7621f79315ff8bdc171c27c5b4dc8bfc64e5b4 extends Twig_Template
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
        $__internal_837c07d6141e569ce5d26cae50b0d42f6cabbf6e7c420e6395c28a4469328762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837c07d6141e569ce5d26cae50b0d42f6cabbf6e7c420e6395c28a4469328762->enter($__internal_837c07d6141e569ce5d26cae50b0d42f6cabbf6e7c420e6395c28a4469328762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_4c0a1f1fa306f2b260c4fa7d4f069e055b2975b0c4c034fe5dddf6ca2fd6eed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c0a1f1fa306f2b260c4fa7d4f069e055b2975b0c4c034fe5dddf6ca2fd6eed2->enter($__internal_4c0a1f1fa306f2b260c4fa7d4f069e055b2975b0c4c034fe5dddf6ca2fd6eed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_837c07d6141e569ce5d26cae50b0d42f6cabbf6e7c420e6395c28a4469328762->leave($__internal_837c07d6141e569ce5d26cae50b0d42f6cabbf6e7c420e6395c28a4469328762_prof);

        
        $__internal_4c0a1f1fa306f2b260c4fa7d4f069e055b2975b0c4c034fe5dddf6ca2fd6eed2->leave($__internal_4c0a1f1fa306f2b260c4fa7d4f069e055b2975b0c4c034fe5dddf6ca2fd6eed2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
