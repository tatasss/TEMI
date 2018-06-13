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
        $__internal_364fbd5085bc8ead138f7d852804b35d849e1904f70840573ac224d0e1ee6c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364fbd5085bc8ead138f7d852804b35d849e1904f70840573ac224d0e1ee6c53->enter($__internal_364fbd5085bc8ead138f7d852804b35d849e1904f70840573ac224d0e1ee6c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4115e01fea9724be7b2fa15ce198657018335be0416e254bd2d3cae9daa2b518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4115e01fea9724be7b2fa15ce198657018335be0416e254bd2d3cae9daa2b518->enter($__internal_4115e01fea9724be7b2fa15ce198657018335be0416e254bd2d3cae9daa2b518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_364fbd5085bc8ead138f7d852804b35d849e1904f70840573ac224d0e1ee6c53->leave($__internal_364fbd5085bc8ead138f7d852804b35d849e1904f70840573ac224d0e1ee6c53_prof);

        
        $__internal_4115e01fea9724be7b2fa15ce198657018335be0416e254bd2d3cae9daa2b518->leave($__internal_4115e01fea9724be7b2fa15ce198657018335be0416e254bd2d3cae9daa2b518_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ca565b7a174a192329a1402a9b4fb1609f354ab969de674dda3992e20e821d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ca565b7a174a192329a1402a9b4fb1609f354ab969de674dda3992e20e821d0->enter($__internal_9ca565b7a174a192329a1402a9b4fb1609f354ab969de674dda3992e20e821d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_998ed65f41f11de4d55d8ba23087425469c9cabfe845d02cff1679b337b43ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998ed65f41f11de4d55d8ba23087425469c9cabfe845d02cff1679b337b43ab3->enter($__internal_998ed65f41f11de4d55d8ba23087425469c9cabfe845d02cff1679b337b43ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_998ed65f41f11de4d55d8ba23087425469c9cabfe845d02cff1679b337b43ab3->leave($__internal_998ed65f41f11de4d55d8ba23087425469c9cabfe845d02cff1679b337b43ab3_prof);

        
        $__internal_9ca565b7a174a192329a1402a9b4fb1609f354ab969de674dda3992e20e821d0->leave($__internal_9ca565b7a174a192329a1402a9b4fb1609f354ab969de674dda3992e20e821d0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec6907f0dbdd9385326214df0a74c8ecb0fe44bf557db2e87887cd01abb4e675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6907f0dbdd9385326214df0a74c8ecb0fe44bf557db2e87887cd01abb4e675->enter($__internal_ec6907f0dbdd9385326214df0a74c8ecb0fe44bf557db2e87887cd01abb4e675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_04933d26a6ce17ff88aba5111591f7d55993fe58538edd06c0009becae01bca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04933d26a6ce17ff88aba5111591f7d55993fe58538edd06c0009becae01bca1->enter($__internal_04933d26a6ce17ff88aba5111591f7d55993fe58538edd06c0009becae01bca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_04933d26a6ce17ff88aba5111591f7d55993fe58538edd06c0009becae01bca1->leave($__internal_04933d26a6ce17ff88aba5111591f7d55993fe58538edd06c0009becae01bca1_prof);

        
        $__internal_ec6907f0dbdd9385326214df0a74c8ecb0fe44bf557db2e87887cd01abb4e675->leave($__internal_ec6907f0dbdd9385326214df0a74c8ecb0fe44bf557db2e87887cd01abb4e675_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f11e2aef3a0d4e338570fc06b56ed5a98dd6b6937b2d2280647c5f9d6af1f85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f11e2aef3a0d4e338570fc06b56ed5a98dd6b6937b2d2280647c5f9d6af1f85f->enter($__internal_f11e2aef3a0d4e338570fc06b56ed5a98dd6b6937b2d2280647c5f9d6af1f85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_621a48adfe29641e82ca6e3f89edc71e84e6bfdb816077267f5037496f4cdf4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621a48adfe29641e82ca6e3f89edc71e84e6bfdb816077267f5037496f4cdf4f->enter($__internal_621a48adfe29641e82ca6e3f89edc71e84e6bfdb816077267f5037496f4cdf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_621a48adfe29641e82ca6e3f89edc71e84e6bfdb816077267f5037496f4cdf4f->leave($__internal_621a48adfe29641e82ca6e3f89edc71e84e6bfdb816077267f5037496f4cdf4f_prof);

        
        $__internal_f11e2aef3a0d4e338570fc06b56ed5a98dd6b6937b2d2280647c5f9d6af1f85f->leave($__internal_f11e2aef3a0d4e338570fc06b56ed5a98dd6b6937b2d2280647c5f9d6af1f85f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7491d7d4233fb50faaedf41f57f95c2b92191777c6b91c84541fb72b9e91f243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7491d7d4233fb50faaedf41f57f95c2b92191777c6b91c84541fb72b9e91f243->enter($__internal_7491d7d4233fb50faaedf41f57f95c2b92191777c6b91c84541fb72b9e91f243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0b6bfb53944134d744f726cfc396e7da533429c0f518f9eb53fa8f41e8127db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b6bfb53944134d744f726cfc396e7da533429c0f518f9eb53fa8f41e8127db4->enter($__internal_0b6bfb53944134d744f726cfc396e7da533429c0f518f9eb53fa8f41e8127db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0b6bfb53944134d744f726cfc396e7da533429c0f518f9eb53fa8f41e8127db4->leave($__internal_0b6bfb53944134d744f726cfc396e7da533429c0f518f9eb53fa8f41e8127db4_prof);

        
        $__internal_7491d7d4233fb50faaedf41f57f95c2b92191777c6b91c84541fb72b9e91f243->leave($__internal_7491d7d4233fb50faaedf41f57f95c2b92191777c6b91c84541fb72b9e91f243_prof);

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
