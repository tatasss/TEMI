<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c70c05b27d37c0edea3d3826acbd9420e04844a6a0d01d5bf50a4dfaff34b6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96f2fd02bdab286434817c50d938016ac0c6f1fcbdfba9b68407ac1ac7c060f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f2fd02bdab286434817c50d938016ac0c6f1fcbdfba9b68407ac1ac7c060f1->enter($__internal_96f2fd02bdab286434817c50d938016ac0c6f1fcbdfba9b68407ac1ac7c060f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f36fd355100d92a27488f5be86939b10291ed752ad786b6802964d6d66598b85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f36fd355100d92a27488f5be86939b10291ed752ad786b6802964d6d66598b85->enter($__internal_f36fd355100d92a27488f5be86939b10291ed752ad786b6802964d6d66598b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96f2fd02bdab286434817c50d938016ac0c6f1fcbdfba9b68407ac1ac7c060f1->leave($__internal_96f2fd02bdab286434817c50d938016ac0c6f1fcbdfba9b68407ac1ac7c060f1_prof);

        
        $__internal_f36fd355100d92a27488f5be86939b10291ed752ad786b6802964d6d66598b85->leave($__internal_f36fd355100d92a27488f5be86939b10291ed752ad786b6802964d6d66598b85_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3df3a572a56e4b1dbcce89ce1cc2c43f95b0b699ecff4c2f3c37481ac3aeafe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df3a572a56e4b1dbcce89ce1cc2c43f95b0b699ecff4c2f3c37481ac3aeafe3->enter($__internal_3df3a572a56e4b1dbcce89ce1cc2c43f95b0b699ecff4c2f3c37481ac3aeafe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dafdd2902adf58228000b8cddadfdcf1816c42551c308571ce57641be987b52f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafdd2902adf58228000b8cddadfdcf1816c42551c308571ce57641be987b52f->enter($__internal_dafdd2902adf58228000b8cddadfdcf1816c42551c308571ce57641be987b52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_dafdd2902adf58228000b8cddadfdcf1816c42551c308571ce57641be987b52f->leave($__internal_dafdd2902adf58228000b8cddadfdcf1816c42551c308571ce57641be987b52f_prof);

        
        $__internal_3df3a572a56e4b1dbcce89ce1cc2c43f95b0b699ecff4c2f3c37481ac3aeafe3->leave($__internal_3df3a572a56e4b1dbcce89ce1cc2c43f95b0b699ecff4c2f3c37481ac3aeafe3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_32a7264ae99b0e5c16223d5cb64b8ee0cfaee8c2e926877cef5cfcb7dbeca4c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32a7264ae99b0e5c16223d5cb64b8ee0cfaee8c2e926877cef5cfcb7dbeca4c0->enter($__internal_32a7264ae99b0e5c16223d5cb64b8ee0cfaee8c2e926877cef5cfcb7dbeca4c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d47f7b2fc363f23a0785dbe95ee087160c6d32e9886e21b29dda6e7692b5f461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47f7b2fc363f23a0785dbe95ee087160c6d32e9886e21b29dda6e7692b5f461->enter($__internal_d47f7b2fc363f23a0785dbe95ee087160c6d32e9886e21b29dda6e7692b5f461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d47f7b2fc363f23a0785dbe95ee087160c6d32e9886e21b29dda6e7692b5f461->leave($__internal_d47f7b2fc363f23a0785dbe95ee087160c6d32e9886e21b29dda6e7692b5f461_prof);

        
        $__internal_32a7264ae99b0e5c16223d5cb64b8ee0cfaee8c2e926877cef5cfcb7dbeca4c0->leave($__internal_32a7264ae99b0e5c16223d5cb64b8ee0cfaee8c2e926877cef5cfcb7dbeca4c0_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb1ec8adf5df6511d48043941564ec961f6f1b9b471aa7607e405dad1b5af9f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb1ec8adf5df6511d48043941564ec961f6f1b9b471aa7607e405dad1b5af9f1->enter($__internal_fb1ec8adf5df6511d48043941564ec961f6f1b9b471aa7607e405dad1b5af9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e9481a39db4c4ea611808e9eb1b847cf3f0488c70090ee26878532b3e377e5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9481a39db4c4ea611808e9eb1b847cf3f0488c70090ee26878532b3e377e5a9->enter($__internal_e9481a39db4c4ea611808e9eb1b847cf3f0488c70090ee26878532b3e377e5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e9481a39db4c4ea611808e9eb1b847cf3f0488c70090ee26878532b3e377e5a9->leave($__internal_e9481a39db4c4ea611808e9eb1b847cf3f0488c70090ee26878532b3e377e5a9_prof);

        
        $__internal_fb1ec8adf5df6511d48043941564ec961f6f1b9b471aa7607e405dad1b5af9f1->leave($__internal_fb1ec8adf5df6511d48043941564ec961f6f1b9b471aa7607e405dad1b5af9f1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
