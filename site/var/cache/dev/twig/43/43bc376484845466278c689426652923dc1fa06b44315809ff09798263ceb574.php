<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_5e7d61704fcb35117469edf91b898c13ba31b6c541174daec9290a6589447da1 extends Twig_Template
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
        $__internal_91186fe8eede6e9027a929dfa0973486fd3b76e1e93855c808d52a60742556aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91186fe8eede6e9027a929dfa0973486fd3b76e1e93855c808d52a60742556aa->enter($__internal_91186fe8eede6e9027a929dfa0973486fd3b76e1e93855c808d52a60742556aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_ad12a5e6f2bd485531bf87b8276a3d48bd243e62100c8acc7003b82ae2bbc733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad12a5e6f2bd485531bf87b8276a3d48bd243e62100c8acc7003b82ae2bbc733->enter($__internal_ad12a5e6f2bd485531bf87b8276a3d48bd243e62100c8acc7003b82ae2bbc733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_91186fe8eede6e9027a929dfa0973486fd3b76e1e93855c808d52a60742556aa->leave($__internal_91186fe8eede6e9027a929dfa0973486fd3b76e1e93855c808d52a60742556aa_prof);

        
        $__internal_ad12a5e6f2bd485531bf87b8276a3d48bd243e62100c8acc7003b82ae2bbc733->leave($__internal_ad12a5e6f2bd485531bf87b8276a3d48bd243e62100c8acc7003b82ae2bbc733_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
