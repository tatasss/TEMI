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
        $__internal_306c50be7bac6a46f26c7461584f523179d16844574328c14af77fbaf3572d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306c50be7bac6a46f26c7461584f523179d16844574328c14af77fbaf3572d0b->enter($__internal_306c50be7bac6a46f26c7461584f523179d16844574328c14af77fbaf3572d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_b6d0b4105bc00ece6d54375e00f7984da2be06fba33ad7a57faae598f4a76132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d0b4105bc00ece6d54375e00f7984da2be06fba33ad7a57faae598f4a76132->enter($__internal_b6d0b4105bc00ece6d54375e00f7984da2be06fba33ad7a57faae598f4a76132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_306c50be7bac6a46f26c7461584f523179d16844574328c14af77fbaf3572d0b->leave($__internal_306c50be7bac6a46f26c7461584f523179d16844574328c14af77fbaf3572d0b_prof);

        
        $__internal_b6d0b4105bc00ece6d54375e00f7984da2be06fba33ad7a57faae598f4a76132->leave($__internal_b6d0b4105bc00ece6d54375e00f7984da2be06fba33ad7a57faae598f4a76132_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0c4c322bd0142f81e8d0a25d23356742410fd1cdfc96b9e5286efb65021f45b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4c322bd0142f81e8d0a25d23356742410fd1cdfc96b9e5286efb65021f45b7->enter($__internal_0c4c322bd0142f81e8d0a25d23356742410fd1cdfc96b9e5286efb65021f45b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f7535e6f08b8961193205bc0245cda6941b22e43c8c837aa2b3a1527e1f4babf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7535e6f08b8961193205bc0245cda6941b22e43c8c837aa2b3a1527e1f4babf->enter($__internal_f7535e6f08b8961193205bc0245cda6941b22e43c8c837aa2b3a1527e1f4babf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f7535e6f08b8961193205bc0245cda6941b22e43c8c837aa2b3a1527e1f4babf->leave($__internal_f7535e6f08b8961193205bc0245cda6941b22e43c8c837aa2b3a1527e1f4babf_prof);

        
        $__internal_0c4c322bd0142f81e8d0a25d23356742410fd1cdfc96b9e5286efb65021f45b7->leave($__internal_0c4c322bd0142f81e8d0a25d23356742410fd1cdfc96b9e5286efb65021f45b7_prof);

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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
