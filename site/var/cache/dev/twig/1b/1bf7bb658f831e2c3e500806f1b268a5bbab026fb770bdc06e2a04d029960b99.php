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
        $__internal_393228a861fb203a51d49cf213964470dbd7776e2a20ece0b2a20acbcc2d0498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_393228a861fb203a51d49cf213964470dbd7776e2a20ece0b2a20acbcc2d0498->enter($__internal_393228a861fb203a51d49cf213964470dbd7776e2a20ece0b2a20acbcc2d0498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d859388f7afcdc3dc1fd2bdb958291f3f0c06cc92e10aeaf4163aa8606902cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d859388f7afcdc3dc1fd2bdb958291f3f0c06cc92e10aeaf4163aa8606902cbe->enter($__internal_d859388f7afcdc3dc1fd2bdb958291f3f0c06cc92e10aeaf4163aa8606902cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_393228a861fb203a51d49cf213964470dbd7776e2a20ece0b2a20acbcc2d0498->leave($__internal_393228a861fb203a51d49cf213964470dbd7776e2a20ece0b2a20acbcc2d0498_prof);

        
        $__internal_d859388f7afcdc3dc1fd2bdb958291f3f0c06cc92e10aeaf4163aa8606902cbe->leave($__internal_d859388f7afcdc3dc1fd2bdb958291f3f0c06cc92e10aeaf4163aa8606902cbe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e4e374af488b1cfd3e10c5e7449ff0f63f06ff778ca2001eea157f53613c1d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4e374af488b1cfd3e10c5e7449ff0f63f06ff778ca2001eea157f53613c1d6->enter($__internal_7e4e374af488b1cfd3e10c5e7449ff0f63f06ff778ca2001eea157f53613c1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1edde6706d1423be8256b1b75fc16332c0e0f4a47847ce1899d2042fc0827dac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1edde6706d1423be8256b1b75fc16332c0e0f4a47847ce1899d2042fc0827dac->enter($__internal_1edde6706d1423be8256b1b75fc16332c0e0f4a47847ce1899d2042fc0827dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1edde6706d1423be8256b1b75fc16332c0e0f4a47847ce1899d2042fc0827dac->leave($__internal_1edde6706d1423be8256b1b75fc16332c0e0f4a47847ce1899d2042fc0827dac_prof);

        
        $__internal_7e4e374af488b1cfd3e10c5e7449ff0f63f06ff778ca2001eea157f53613c1d6->leave($__internal_7e4e374af488b1cfd3e10c5e7449ff0f63f06ff778ca2001eea157f53613c1d6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4292392f5bbc7101dce07c7029353eeb3672582065b46c7e106c52919f8d279f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4292392f5bbc7101dce07c7029353eeb3672582065b46c7e106c52919f8d279f->enter($__internal_4292392f5bbc7101dce07c7029353eeb3672582065b46c7e106c52919f8d279f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_97629cdf7933445a971bafba10b0dd341f1a4ca217b8f1d1ffeae3204747dd0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97629cdf7933445a971bafba10b0dd341f1a4ca217b8f1d1ffeae3204747dd0f->enter($__internal_97629cdf7933445a971bafba10b0dd341f1a4ca217b8f1d1ffeae3204747dd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_97629cdf7933445a971bafba10b0dd341f1a4ca217b8f1d1ffeae3204747dd0f->leave($__internal_97629cdf7933445a971bafba10b0dd341f1a4ca217b8f1d1ffeae3204747dd0f_prof);

        
        $__internal_4292392f5bbc7101dce07c7029353eeb3672582065b46c7e106c52919f8d279f->leave($__internal_4292392f5bbc7101dce07c7029353eeb3672582065b46c7e106c52919f8d279f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae1d6b69cdf4ab02080d93e48dd0771e405b76328b1ed0c27176e494592e47fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae1d6b69cdf4ab02080d93e48dd0771e405b76328b1ed0c27176e494592e47fb->enter($__internal_ae1d6b69cdf4ab02080d93e48dd0771e405b76328b1ed0c27176e494592e47fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3e514666457c3bfc87fa1e88cd83888f6f054d151ca35e12c50b35b6ad0389f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e514666457c3bfc87fa1e88cd83888f6f054d151ca35e12c50b35b6ad0389f6->enter($__internal_3e514666457c3bfc87fa1e88cd83888f6f054d151ca35e12c50b35b6ad0389f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3e514666457c3bfc87fa1e88cd83888f6f054d151ca35e12c50b35b6ad0389f6->leave($__internal_3e514666457c3bfc87fa1e88cd83888f6f054d151ca35e12c50b35b6ad0389f6_prof);

        
        $__internal_ae1d6b69cdf4ab02080d93e48dd0771e405b76328b1ed0c27176e494592e47fb->leave($__internal_ae1d6b69cdf4ab02080d93e48dd0771e405b76328b1ed0c27176e494592e47fb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_20ad76ef434bf62601e9dd351aec9489106152db1ce2904b2ddf0acf501ca30b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20ad76ef434bf62601e9dd351aec9489106152db1ce2904b2ddf0acf501ca30b->enter($__internal_20ad76ef434bf62601e9dd351aec9489106152db1ce2904b2ddf0acf501ca30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_221b6fbda20fe36fb7132809157e96824af3db80fadf5bc354f656a794bd59bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221b6fbda20fe36fb7132809157e96824af3db80fadf5bc354f656a794bd59bb->enter($__internal_221b6fbda20fe36fb7132809157e96824af3db80fadf5bc354f656a794bd59bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_221b6fbda20fe36fb7132809157e96824af3db80fadf5bc354f656a794bd59bb->leave($__internal_221b6fbda20fe36fb7132809157e96824af3db80fadf5bc354f656a794bd59bb_prof);

        
        $__internal_20ad76ef434bf62601e9dd351aec9489106152db1ce2904b2ddf0acf501ca30b->leave($__internal_20ad76ef434bf62601e9dd351aec9489106152db1ce2904b2ddf0acf501ca30b_prof);

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
", "::base.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\app/Resources\\views/base.html.twig");
    }
}
