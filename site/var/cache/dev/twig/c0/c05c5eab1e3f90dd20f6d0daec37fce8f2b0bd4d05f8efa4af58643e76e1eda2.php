<?php

/* TEMImainBundle:Connection:connection.html.twig */
class __TwigTemplate_4d320ddfcf096146168473395e6c23a0dbc744c9bafca043d01148a8992470a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TEMImainBundle:Temi:layout.html.twig", "TEMImainBundle:Connection:connection.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TEMImainBundle:Temi:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da7106894a4080914fed130f247b68460b1cf7199092269c67592fc016c2a29c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7106894a4080914fed130f247b68460b1cf7199092269c67592fc016c2a29c->enter($__internal_da7106894a4080914fed130f247b68460b1cf7199092269c67592fc016c2a29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Connection:connection.html.twig"));

        $__internal_d44efe4284235e1dbf8c56e40f9d88dee4e1a2e33fc0c33c284a97dbfbe2765f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44efe4284235e1dbf8c56e40f9d88dee4e1a2e33fc0c33c284a97dbfbe2765f->enter($__internal_d44efe4284235e1dbf8c56e40f9d88dee4e1a2e33fc0c33c284a97dbfbe2765f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Connection:connection.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da7106894a4080914fed130f247b68460b1cf7199092269c67592fc016c2a29c->leave($__internal_da7106894a4080914fed130f247b68460b1cf7199092269c67592fc016c2a29c_prof);

        
        $__internal_d44efe4284235e1dbf8c56e40f9d88dee4e1a2e33fc0c33c284a97dbfbe2765f->leave($__internal_d44efe4284235e1dbf8c56e40f9d88dee4e1a2e33fc0c33c284a97dbfbe2765f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8655d5a7cad09ec7d42e7af1516933ed7d5b52a3eae8386c5639fd69c7a2ec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8655d5a7cad09ec7d42e7af1516933ed7d5b52a3eae8386c5639fd69c7a2ec4->enter($__internal_c8655d5a7cad09ec7d42e7af1516933ed7d5b52a3eae8386c5639fd69c7a2ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88bf5128e1cdcc924aba61f637214628511bb331f6e5a8d8747a18bf552bcba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88bf5128e1cdcc924aba61f637214628511bb331f6e5a8d8747a18bf552bcba3->enter($__internal_88bf5128e1cdcc924aba61f637214628511bb331f6e5a8d8747a18bf552bcba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_88bf5128e1cdcc924aba61f637214628511bb331f6e5a8d8747a18bf552bcba3->leave($__internal_88bf5128e1cdcc924aba61f637214628511bb331f6e5a8d8747a18bf552bcba3_prof);

        
        $__internal_c8655d5a7cad09ec7d42e7af1516933ed7d5b52a3eae8386c5639fd69c7a2ec4->leave($__internal_c8655d5a7cad09ec7d42e7af1516933ed7d5b52a3eae8386c5639fd69c7a2ec4_prof);

    }

    public function getTemplateName()
    {
        return "TEMImainBundle:Connection:connection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TEMImainBundle:Temi:layout.html.twig\" %}
{% block body %}
{% endblock %}", "TEMImainBundle:Connection:connection.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle\\Resources\\views\\Connection\\connection.html.twig");
    }
}
