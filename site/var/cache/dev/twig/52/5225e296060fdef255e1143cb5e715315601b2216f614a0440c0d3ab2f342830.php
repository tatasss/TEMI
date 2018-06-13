<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_dbbad891d282d4a7141ddd5efc38ad469747b1dce2ccf29384fe774004b3bcac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82ced361353ed46251df7ad5f6f0687b2050fd5c5e22fc8737fa797c67662e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ced361353ed46251df7ad5f6f0687b2050fd5c5e22fc8737fa797c67662e01->enter($__internal_82ced361353ed46251df7ad5f6f0687b2050fd5c5e22fc8737fa797c67662e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_a91a8b223343c22fd1d7f5515b68410b9a4ed0baf41cc5928ac73940eba3fd58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91a8b223343c22fd1d7f5515b68410b9a4ed0baf41cc5928ac73940eba3fd58->enter($__internal_a91a8b223343c22fd1d7f5515b68410b9a4ed0baf41cc5928ac73940eba3fd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82ced361353ed46251df7ad5f6f0687b2050fd5c5e22fc8737fa797c67662e01->leave($__internal_82ced361353ed46251df7ad5f6f0687b2050fd5c5e22fc8737fa797c67662e01_prof);

        
        $__internal_a91a8b223343c22fd1d7f5515b68410b9a4ed0baf41cc5928ac73940eba3fd58->leave($__internal_a91a8b223343c22fd1d7f5515b68410b9a4ed0baf41cc5928ac73940eba3fd58_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e1b7cb1b31e9d9c6612d29f527720ca7ea7ebe8752bac6b95ecd144416bb2f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b7cb1b31e9d9c6612d29f527720ca7ea7ebe8752bac6b95ecd144416bb2f51->enter($__internal_e1b7cb1b31e9d9c6612d29f527720ca7ea7ebe8752bac6b95ecd144416bb2f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_812224805dc6dc2f932134c723607a154c36b3b964a73c99e21bdd42a604bf44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812224805dc6dc2f932134c723607a154c36b3b964a73c99e21bdd42a604bf44->enter($__internal_812224805dc6dc2f932134c723607a154c36b3b964a73c99e21bdd42a604bf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_812224805dc6dc2f932134c723607a154c36b3b964a73c99e21bdd42a604bf44->leave($__internal_812224805dc6dc2f932134c723607a154c36b3b964a73c99e21bdd42a604bf44_prof);

        
        $__internal_e1b7cb1b31e9d9c6612d29f527720ca7ea7ebe8752bac6b95ecd144416bb2f51->leave($__internal_e1b7cb1b31e9d9c6612d29f527720ca7ea7ebe8752bac6b95ecd144416bb2f51_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
