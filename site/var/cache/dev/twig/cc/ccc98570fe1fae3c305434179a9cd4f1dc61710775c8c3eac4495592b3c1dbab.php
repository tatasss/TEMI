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
        $__internal_051b2ea647a8e0ad88d3d7e8b2b5182f632c36021932f2bec47c8f1386d0472e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051b2ea647a8e0ad88d3d7e8b2b5182f632c36021932f2bec47c8f1386d0472e->enter($__internal_051b2ea647a8e0ad88d3d7e8b2b5182f632c36021932f2bec47c8f1386d0472e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_42e571255bdfd426e72b642d1a6dc266117826f8311a9dca327bd2161a6ea0db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e571255bdfd426e72b642d1a6dc266117826f8311a9dca327bd2161a6ea0db->enter($__internal_42e571255bdfd426e72b642d1a6dc266117826f8311a9dca327bd2161a6ea0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_051b2ea647a8e0ad88d3d7e8b2b5182f632c36021932f2bec47c8f1386d0472e->leave($__internal_051b2ea647a8e0ad88d3d7e8b2b5182f632c36021932f2bec47c8f1386d0472e_prof);

        
        $__internal_42e571255bdfd426e72b642d1a6dc266117826f8311a9dca327bd2161a6ea0db->leave($__internal_42e571255bdfd426e72b642d1a6dc266117826f8311a9dca327bd2161a6ea0db_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6223bad1c6a09cdd46d1ec6897b60b44d3d5acc2d98bc0cc2cbf140f48ba0add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6223bad1c6a09cdd46d1ec6897b60b44d3d5acc2d98bc0cc2cbf140f48ba0add->enter($__internal_6223bad1c6a09cdd46d1ec6897b60b44d3d5acc2d98bc0cc2cbf140f48ba0add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc82a2c0330f9b8703d913db52ef821ee9d1382bdd266fc3e8cbd0a43c960ae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc82a2c0330f9b8703d913db52ef821ee9d1382bdd266fc3e8cbd0a43c960ae9->enter($__internal_fc82a2c0330f9b8703d913db52ef821ee9d1382bdd266fc3e8cbd0a43c960ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fc82a2c0330f9b8703d913db52ef821ee9d1382bdd266fc3e8cbd0a43c960ae9->leave($__internal_fc82a2c0330f9b8703d913db52ef821ee9d1382bdd266fc3e8cbd0a43c960ae9_prof);

        
        $__internal_6223bad1c6a09cdd46d1ec6897b60b44d3d5acc2d98bc0cc2cbf140f48ba0add->leave($__internal_6223bad1c6a09cdd46d1ec6897b60b44d3d5acc2d98bc0cc2cbf140f48ba0add_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_17e59f24ecdd92adb1ebf86f6d73586deb3770fa479eb1fdfbc7131eaa93f85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17e59f24ecdd92adb1ebf86f6d73586deb3770fa479eb1fdfbc7131eaa93f85d->enter($__internal_17e59f24ecdd92adb1ebf86f6d73586deb3770fa479eb1fdfbc7131eaa93f85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6b895970a578a64606141ee8ac9216feac464f7d5e53dc2150dece0502096e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b895970a578a64606141ee8ac9216feac464f7d5e53dc2150dece0502096e96->enter($__internal_6b895970a578a64606141ee8ac9216feac464f7d5e53dc2150dece0502096e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6b895970a578a64606141ee8ac9216feac464f7d5e53dc2150dece0502096e96->leave($__internal_6b895970a578a64606141ee8ac9216feac464f7d5e53dc2150dece0502096e96_prof);

        
        $__internal_17e59f24ecdd92adb1ebf86f6d73586deb3770fa479eb1fdfbc7131eaa93f85d->leave($__internal_17e59f24ecdd92adb1ebf86f6d73586deb3770fa479eb1fdfbc7131eaa93f85d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8d7565bcdf0c54368ff373d26c750cad58e943e8192b7e03cc26f4c56120cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d7565bcdf0c54368ff373d26c750cad58e943e8192b7e03cc26f4c56120cfb->enter($__internal_c8d7565bcdf0c54368ff373d26c750cad58e943e8192b7e03cc26f4c56120cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7403e552b0b1083fcda6518e1cde38cc07a05fd902c63b735e48321db63accc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7403e552b0b1083fcda6518e1cde38cc07a05fd902c63b735e48321db63accc->enter($__internal_e7403e552b0b1083fcda6518e1cde38cc07a05fd902c63b735e48321db63accc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e7403e552b0b1083fcda6518e1cde38cc07a05fd902c63b735e48321db63accc->leave($__internal_e7403e552b0b1083fcda6518e1cde38cc07a05fd902c63b735e48321db63accc_prof);

        
        $__internal_c8d7565bcdf0c54368ff373d26c750cad58e943e8192b7e03cc26f4c56120cfb->leave($__internal_c8d7565bcdf0c54368ff373d26c750cad58e943e8192b7e03cc26f4c56120cfb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3a2168a8a8b7204b2b63fd86c6578235c0b823cf160c1b72662bb032ca912d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2168a8a8b7204b2b63fd86c6578235c0b823cf160c1b72662bb032ca912d61->enter($__internal_3a2168a8a8b7204b2b63fd86c6578235c0b823cf160c1b72662bb032ca912d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6890d129a9fb586e8a87e44cf3cbeaf4b38ad1bf257a98e907fd3c2b98981d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6890d129a9fb586e8a87e44cf3cbeaf4b38ad1bf257a98e907fd3c2b98981d70->enter($__internal_6890d129a9fb586e8a87e44cf3cbeaf4b38ad1bf257a98e907fd3c2b98981d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6890d129a9fb586e8a87e44cf3cbeaf4b38ad1bf257a98e907fd3c2b98981d70->leave($__internal_6890d129a9fb586e8a87e44cf3cbeaf4b38ad1bf257a98e907fd3c2b98981d70_prof);

        
        $__internal_3a2168a8a8b7204b2b63fd86c6578235c0b823cf160c1b72662bb032ca912d61->leave($__internal_3a2168a8a8b7204b2b63fd86c6578235c0b823cf160c1b72662bb032ca912d61_prof);

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
", "base.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\app\\Resources\\views\\base.html.twig");
    }
}
