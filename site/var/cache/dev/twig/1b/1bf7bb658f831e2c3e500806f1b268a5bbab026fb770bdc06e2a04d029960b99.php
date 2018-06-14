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
        $__internal_2f8a7360271d8baef381a237cfef8298119c5e5270bc89d7edd3b6fd506b33d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f8a7360271d8baef381a237cfef8298119c5e5270bc89d7edd3b6fd506b33d2->enter($__internal_2f8a7360271d8baef381a237cfef8298119c5e5270bc89d7edd3b6fd506b33d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_374601cb929730c47d83917afb3ce5a40bc50e66dfaa01d7173371c82e2fde04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374601cb929730c47d83917afb3ce5a40bc50e66dfaa01d7173371c82e2fde04->enter($__internal_374601cb929730c47d83917afb3ce5a40bc50e66dfaa01d7173371c82e2fde04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2f8a7360271d8baef381a237cfef8298119c5e5270bc89d7edd3b6fd506b33d2->leave($__internal_2f8a7360271d8baef381a237cfef8298119c5e5270bc89d7edd3b6fd506b33d2_prof);

        
        $__internal_374601cb929730c47d83917afb3ce5a40bc50e66dfaa01d7173371c82e2fde04->leave($__internal_374601cb929730c47d83917afb3ce5a40bc50e66dfaa01d7173371c82e2fde04_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9447e10125788e421c636df0a489c35a449decfa646d2490eb10e1a6a2f164ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9447e10125788e421c636df0a489c35a449decfa646d2490eb10e1a6a2f164ca->enter($__internal_9447e10125788e421c636df0a489c35a449decfa646d2490eb10e1a6a2f164ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7941ee630b723524a878416877a1ed16fea0f670660ecc0f490ffa4b19c0f40d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7941ee630b723524a878416877a1ed16fea0f670660ecc0f490ffa4b19c0f40d->enter($__internal_7941ee630b723524a878416877a1ed16fea0f670660ecc0f490ffa4b19c0f40d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7941ee630b723524a878416877a1ed16fea0f670660ecc0f490ffa4b19c0f40d->leave($__internal_7941ee630b723524a878416877a1ed16fea0f670660ecc0f490ffa4b19c0f40d_prof);

        
        $__internal_9447e10125788e421c636df0a489c35a449decfa646d2490eb10e1a6a2f164ca->leave($__internal_9447e10125788e421c636df0a489c35a449decfa646d2490eb10e1a6a2f164ca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f88a3451fabfb04b3b90b2f4661f8163aada96804730f4fb11430611ed05793 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f88a3451fabfb04b3b90b2f4661f8163aada96804730f4fb11430611ed05793->enter($__internal_9f88a3451fabfb04b3b90b2f4661f8163aada96804730f4fb11430611ed05793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cac8d751c4660de6472175019d48a31fbd28551f9496f84345398ac82f0f3905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cac8d751c4660de6472175019d48a31fbd28551f9496f84345398ac82f0f3905->enter($__internal_cac8d751c4660de6472175019d48a31fbd28551f9496f84345398ac82f0f3905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cac8d751c4660de6472175019d48a31fbd28551f9496f84345398ac82f0f3905->leave($__internal_cac8d751c4660de6472175019d48a31fbd28551f9496f84345398ac82f0f3905_prof);

        
        $__internal_9f88a3451fabfb04b3b90b2f4661f8163aada96804730f4fb11430611ed05793->leave($__internal_9f88a3451fabfb04b3b90b2f4661f8163aada96804730f4fb11430611ed05793_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f85eda91ecfcdc3110ac48095058d3192829576d6fe9bbbf95d6c0881bc38a49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85eda91ecfcdc3110ac48095058d3192829576d6fe9bbbf95d6c0881bc38a49->enter($__internal_f85eda91ecfcdc3110ac48095058d3192829576d6fe9bbbf95d6c0881bc38a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_56ee3fdd5b65c3df2c2860754dd1321ba3490f9a44d7ee6f17ae8581122580fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ee3fdd5b65c3df2c2860754dd1321ba3490f9a44d7ee6f17ae8581122580fd->enter($__internal_56ee3fdd5b65c3df2c2860754dd1321ba3490f9a44d7ee6f17ae8581122580fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_56ee3fdd5b65c3df2c2860754dd1321ba3490f9a44d7ee6f17ae8581122580fd->leave($__internal_56ee3fdd5b65c3df2c2860754dd1321ba3490f9a44d7ee6f17ae8581122580fd_prof);

        
        $__internal_f85eda91ecfcdc3110ac48095058d3192829576d6fe9bbbf95d6c0881bc38a49->leave($__internal_f85eda91ecfcdc3110ac48095058d3192829576d6fe9bbbf95d6c0881bc38a49_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8c636fc7ed4b6a02d7e6e4596433b9ae49def4999bf514292a02ec9116582ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c636fc7ed4b6a02d7e6e4596433b9ae49def4999bf514292a02ec9116582ebc->enter($__internal_8c636fc7ed4b6a02d7e6e4596433b9ae49def4999bf514292a02ec9116582ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a0148dcdedf3665e343bc396e9b97fb5342387b1e7d50c682afc41d0d5063367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0148dcdedf3665e343bc396e9b97fb5342387b1e7d50c682afc41d0d5063367->enter($__internal_a0148dcdedf3665e343bc396e9b97fb5342387b1e7d50c682afc41d0d5063367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a0148dcdedf3665e343bc396e9b97fb5342387b1e7d50c682afc41d0d5063367->leave($__internal_a0148dcdedf3665e343bc396e9b97fb5342387b1e7d50c682afc41d0d5063367_prof);

        
        $__internal_8c636fc7ed4b6a02d7e6e4596433b9ae49def4999bf514292a02ec9116582ebc->leave($__internal_8c636fc7ed4b6a02d7e6e4596433b9ae49def4999bf514292a02ec9116582ebc_prof);

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
