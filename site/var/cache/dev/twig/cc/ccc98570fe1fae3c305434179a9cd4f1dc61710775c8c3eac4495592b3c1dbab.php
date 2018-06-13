<?php

/* base.html.twig */
class __TwigTemplate_3596e0743f6caebb4b1bf204a8165ae17ef42ac14157831b8276cacab8b268e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71ce759d572e049fa79b5421e144b40461639c344db3641827753b12fcb64508 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71ce759d572e049fa79b5421e144b40461639c344db3641827753b12fcb64508->enter($__internal_71ce759d572e049fa79b5421e144b40461639c344db3641827753b12fcb64508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9ef64d21ecf60924ca6e1873b91ddd9fe62c79eca3ba14bf18eb6d8bdac19617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef64d21ecf60924ca6e1873b91ddd9fe62c79eca3ba14bf18eb6d8bdac19617->enter($__internal_9ef64d21ecf60924ca6e1873b91ddd9fe62c79eca3ba14bf18eb6d8bdac19617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_71ce759d572e049fa79b5421e144b40461639c344db3641827753b12fcb64508->leave($__internal_71ce759d572e049fa79b5421e144b40461639c344db3641827753b12fcb64508_prof);

        
        $__internal_9ef64d21ecf60924ca6e1873b91ddd9fe62c79eca3ba14bf18eb6d8bdac19617->leave($__internal_9ef64d21ecf60924ca6e1873b91ddd9fe62c79eca3ba14bf18eb6d8bdac19617_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_726e262c7829a43209f85236ed8d11d3c971e5e1bad18d4ae34d9356634b0944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_726e262c7829a43209f85236ed8d11d3c971e5e1bad18d4ae34d9356634b0944->enter($__internal_726e262c7829a43209f85236ed8d11d3c971e5e1bad18d4ae34d9356634b0944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_764231fd4c7a67084b5333ed87465df679a090a44df6dd78befc4017f51499e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764231fd4c7a67084b5333ed87465df679a090a44df6dd78befc4017f51499e0->enter($__internal_764231fd4c7a67084b5333ed87465df679a090a44df6dd78befc4017f51499e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_764231fd4c7a67084b5333ed87465df679a090a44df6dd78befc4017f51499e0->leave($__internal_764231fd4c7a67084b5333ed87465df679a090a44df6dd78befc4017f51499e0_prof);

        
        $__internal_726e262c7829a43209f85236ed8d11d3c971e5e1bad18d4ae34d9356634b0944->leave($__internal_726e262c7829a43209f85236ed8d11d3c971e5e1bad18d4ae34d9356634b0944_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_98ce83abf8aab9690382bbe8e2fc2d470e9156ed9b4cbbbf28a98c7e7f89f47c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ce83abf8aab9690382bbe8e2fc2d470e9156ed9b4cbbbf28a98c7e7f89f47c->enter($__internal_98ce83abf8aab9690382bbe8e2fc2d470e9156ed9b4cbbbf28a98c7e7f89f47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4eb140c37ca56aba6376b5078c15d3fc63807502753329c799e8315f57a5f77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb140c37ca56aba6376b5078c15d3fc63807502753329c799e8315f57a5f77b->enter($__internal_4eb140c37ca56aba6376b5078c15d3fc63807502753329c799e8315f57a5f77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4eb140c37ca56aba6376b5078c15d3fc63807502753329c799e8315f57a5f77b->leave($__internal_4eb140c37ca56aba6376b5078c15d3fc63807502753329c799e8315f57a5f77b_prof);

        
        $__internal_98ce83abf8aab9690382bbe8e2fc2d470e9156ed9b4cbbbf28a98c7e7f89f47c->leave($__internal_98ce83abf8aab9690382bbe8e2fc2d470e9156ed9b4cbbbf28a98c7e7f89f47c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5586a4236824c4cf974cf62fc447366eeace33a993dea4551279885a240ae5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5586a4236824c4cf974cf62fc447366eeace33a993dea4551279885a240ae5c->enter($__internal_e5586a4236824c4cf974cf62fc447366eeace33a993dea4551279885a240ae5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8c77808fb43ca5d7be825d8e6604797cfa3b145960cda357939f26b6c4a02d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c77808fb43ca5d7be825d8e6604797cfa3b145960cda357939f26b6c4a02d6->enter($__internal_d8c77808fb43ca5d7be825d8e6604797cfa3b145960cda357939f26b6c4a02d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d8c77808fb43ca5d7be825d8e6604797cfa3b145960cda357939f26b6c4a02d6->leave($__internal_d8c77808fb43ca5d7be825d8e6604797cfa3b145960cda357939f26b6c4a02d6_prof);

        
        $__internal_e5586a4236824c4cf974cf62fc447366eeace33a993dea4551279885a240ae5c->leave($__internal_e5586a4236824c4cf974cf62fc447366eeace33a993dea4551279885a240ae5c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3133cae0fab7d6d487e7a230975f79287892836f38cc90dcf2086a5f24cefec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3133cae0fab7d6d487e7a230975f79287892836f38cc90dcf2086a5f24cefec8->enter($__internal_3133cae0fab7d6d487e7a230975f79287892836f38cc90dcf2086a5f24cefec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3b9df122efa92f5be0964fd1053919145b3c4bf5a16dfe057c501bda90ea256f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b9df122efa92f5be0964fd1053919145b3c4bf5a16dfe057c501bda90ea256f->enter($__internal_3b9df122efa92f5be0964fd1053919145b3c4bf5a16dfe057c501bda90ea256f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3b9df122efa92f5be0964fd1053919145b3c4bf5a16dfe057c501bda90ea256f->leave($__internal_3b9df122efa92f5be0964fd1053919145b3c4bf5a16dfe057c501bda90ea256f_prof);

        
        $__internal_3133cae0fab7d6d487e7a230975f79287892836f38cc90dcf2086a5f24cefec8->leave($__internal_3133cae0fab7d6d487e7a230975f79287892836f38cc90dcf2086a5f24cefec8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
