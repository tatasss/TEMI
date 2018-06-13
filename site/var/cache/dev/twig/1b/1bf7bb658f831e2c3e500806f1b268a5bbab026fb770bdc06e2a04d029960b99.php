<?php

/* ::base.html.twig */
class __TwigTemplate_e5aaa710ad05ff01d8c08fb3f7784e54091a35f64b96d647d3dca94f1a0868b7 extends Twig_Template
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
        $__internal_c878f5b725f18f9037bd6691e48269f9b43de3d484e1170aaf81655bd79b64f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c878f5b725f18f9037bd6691e48269f9b43de3d484e1170aaf81655bd79b64f5->enter($__internal_c878f5b725f18f9037bd6691e48269f9b43de3d484e1170aaf81655bd79b64f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_6735e0fd356ef67d414d04693856a32154c03a3160f8205ab8c15a0b28336c0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6735e0fd356ef67d414d04693856a32154c03a3160f8205ab8c15a0b28336c0e->enter($__internal_6735e0fd356ef67d414d04693856a32154c03a3160f8205ab8c15a0b28336c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c878f5b725f18f9037bd6691e48269f9b43de3d484e1170aaf81655bd79b64f5->leave($__internal_c878f5b725f18f9037bd6691e48269f9b43de3d484e1170aaf81655bd79b64f5_prof);

        
        $__internal_6735e0fd356ef67d414d04693856a32154c03a3160f8205ab8c15a0b28336c0e->leave($__internal_6735e0fd356ef67d414d04693856a32154c03a3160f8205ab8c15a0b28336c0e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1a992475119d89f69c454fa30f41b31d932b0a75e820ba9ce63a563ec090579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1a992475119d89f69c454fa30f41b31d932b0a75e820ba9ce63a563ec090579->enter($__internal_d1a992475119d89f69c454fa30f41b31d932b0a75e820ba9ce63a563ec090579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_94183c5c0f0a39381b2ea275b1a89db4666681a980f5441c71199b256f9f69e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94183c5c0f0a39381b2ea275b1a89db4666681a980f5441c71199b256f9f69e6->enter($__internal_94183c5c0f0a39381b2ea275b1a89db4666681a980f5441c71199b256f9f69e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_94183c5c0f0a39381b2ea275b1a89db4666681a980f5441c71199b256f9f69e6->leave($__internal_94183c5c0f0a39381b2ea275b1a89db4666681a980f5441c71199b256f9f69e6_prof);

        
        $__internal_d1a992475119d89f69c454fa30f41b31d932b0a75e820ba9ce63a563ec090579->leave($__internal_d1a992475119d89f69c454fa30f41b31d932b0a75e820ba9ce63a563ec090579_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_09409fbb9ba139bebbbe2e495783acd50926e1d0dbe4d6374291e32e72734707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09409fbb9ba139bebbbe2e495783acd50926e1d0dbe4d6374291e32e72734707->enter($__internal_09409fbb9ba139bebbbe2e495783acd50926e1d0dbe4d6374291e32e72734707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1e5ef05b090425524f3de7ca58685fb0f983368f4dc50ad24c9f3e1b6230f024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e5ef05b090425524f3de7ca58685fb0f983368f4dc50ad24c9f3e1b6230f024->enter($__internal_1e5ef05b090425524f3de7ca58685fb0f983368f4dc50ad24c9f3e1b6230f024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1e5ef05b090425524f3de7ca58685fb0f983368f4dc50ad24c9f3e1b6230f024->leave($__internal_1e5ef05b090425524f3de7ca58685fb0f983368f4dc50ad24c9f3e1b6230f024_prof);

        
        $__internal_09409fbb9ba139bebbbe2e495783acd50926e1d0dbe4d6374291e32e72734707->leave($__internal_09409fbb9ba139bebbbe2e495783acd50926e1d0dbe4d6374291e32e72734707_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a46b166a4fbbbc5358963ff7ff83733ac844bc3e787e841c154b00e28d6e444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a46b166a4fbbbc5358963ff7ff83733ac844bc3e787e841c154b00e28d6e444->enter($__internal_2a46b166a4fbbbc5358963ff7ff83733ac844bc3e787e841c154b00e28d6e444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8098686c6a6714157489af95b29673f9529ae44e5ee84f6da111b0d43482df18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8098686c6a6714157489af95b29673f9529ae44e5ee84f6da111b0d43482df18->enter($__internal_8098686c6a6714157489af95b29673f9529ae44e5ee84f6da111b0d43482df18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8098686c6a6714157489af95b29673f9529ae44e5ee84f6da111b0d43482df18->leave($__internal_8098686c6a6714157489af95b29673f9529ae44e5ee84f6da111b0d43482df18_prof);

        
        $__internal_2a46b166a4fbbbc5358963ff7ff83733ac844bc3e787e841c154b00e28d6e444->leave($__internal_2a46b166a4fbbbc5358963ff7ff83733ac844bc3e787e841c154b00e28d6e444_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce326214986c369fc1597eba1bc1c391d4f1c537f648753aa907222917022fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce326214986c369fc1597eba1bc1c391d4f1c537f648753aa907222917022fd1->enter($__internal_ce326214986c369fc1597eba1bc1c391d4f1c537f648753aa907222917022fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cd8ac4832af0e075c131100a4ca4844d2223f847b6a765489d966962c60efc04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd8ac4832af0e075c131100a4ca4844d2223f847b6a765489d966962c60efc04->enter($__internal_cd8ac4832af0e075c131100a4ca4844d2223f847b6a765489d966962c60efc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cd8ac4832af0e075c131100a4ca4844d2223f847b6a765489d966962c60efc04->leave($__internal_cd8ac4832af0e075c131100a4ca4844d2223f847b6a765489d966962c60efc04_prof);

        
        $__internal_ce326214986c369fc1597eba1bc1c391d4f1c537f648753aa907222917022fd1->leave($__internal_ce326214986c369fc1597eba1bc1c391d4f1c537f648753aa907222917022fd1_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\app/Resources\\views/base.html.twig");
    }
}
