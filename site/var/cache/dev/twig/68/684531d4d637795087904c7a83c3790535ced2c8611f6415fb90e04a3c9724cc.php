<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f135fcc9c859e593c2ad6b4f6ea9321094ebdd77ec5d005d4bc6f1212203f014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a586ed0a98cd641056982b1178248042a03e12ef7724fe8ac7808598ded165d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a586ed0a98cd641056982b1178248042a03e12ef7724fe8ac7808598ded165d7->enter($__internal_a586ed0a98cd641056982b1178248042a03e12ef7724fe8ac7808598ded165d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_9aaeff86be08c8204c74208986304b00aeb61323e5e44a7278bee36090c36cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aaeff86be08c8204c74208986304b00aeb61323e5e44a7278bee36090c36cbd->enter($__internal_9aaeff86be08c8204c74208986304b00aeb61323e5e44a7278bee36090c36cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a586ed0a98cd641056982b1178248042a03e12ef7724fe8ac7808598ded165d7->leave($__internal_a586ed0a98cd641056982b1178248042a03e12ef7724fe8ac7808598ded165d7_prof);

        
        $__internal_9aaeff86be08c8204c74208986304b00aeb61323e5e44a7278bee36090c36cbd->leave($__internal_9aaeff86be08c8204c74208986304b00aeb61323e5e44a7278bee36090c36cbd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_19f780027464a1cacdff63e6940c8b159c5124c85d54bd00f899fd53be22a1ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f780027464a1cacdff63e6940c8b159c5124c85d54bd00f899fd53be22a1ac->enter($__internal_19f780027464a1cacdff63e6940c8b159c5124c85d54bd00f899fd53be22a1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_caf3281aea2390719517f8bb4d5e71ecf93c2a61c9936ea9c2ff2f7c3974f73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf3281aea2390719517f8bb4d5e71ecf93c2a61c9936ea9c2ff2f7c3974f73d->enter($__internal_caf3281aea2390719517f8bb4d5e71ecf93c2a61c9936ea9c2ff2f7c3974f73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_caf3281aea2390719517f8bb4d5e71ecf93c2a61c9936ea9c2ff2f7c3974f73d->leave($__internal_caf3281aea2390719517f8bb4d5e71ecf93c2a61c9936ea9c2ff2f7c3974f73d_prof);

        
        $__internal_19f780027464a1cacdff63e6940c8b159c5124c85d54bd00f899fd53be22a1ac->leave($__internal_19f780027464a1cacdff63e6940c8b159c5124c85d54bd00f899fd53be22a1ac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0da4389d705f9a3dc8fa67f9feebec8951218155d7c8e34cddd362ecaa7ca8f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da4389d705f9a3dc8fa67f9feebec8951218155d7c8e34cddd362ecaa7ca8f1->enter($__internal_0da4389d705f9a3dc8fa67f9feebec8951218155d7c8e34cddd362ecaa7ca8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5bc7f6a28fd72f34b406612d5598283a419f8428cc9834646ef66e5bc943ef25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc7f6a28fd72f34b406612d5598283a419f8428cc9834646ef66e5bc943ef25->enter($__internal_5bc7f6a28fd72f34b406612d5598283a419f8428cc9834646ef66e5bc943ef25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5bc7f6a28fd72f34b406612d5598283a419f8428cc9834646ef66e5bc943ef25->leave($__internal_5bc7f6a28fd72f34b406612d5598283a419f8428cc9834646ef66e5bc943ef25_prof);

        
        $__internal_0da4389d705f9a3dc8fa67f9feebec8951218155d7c8e34cddd362ecaa7ca8f1->leave($__internal_0da4389d705f9a3dc8fa67f9feebec8951218155d7c8e34cddd362ecaa7ca8f1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
