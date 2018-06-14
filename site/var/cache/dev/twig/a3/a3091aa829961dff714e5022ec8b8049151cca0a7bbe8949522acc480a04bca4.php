<?php

/* TEMImainBundle:Temi:menu.html.twig */
class __TwigTemplate_a689fbb97fa00508ee085ec672a8300aa60d29997d9d8ba8b4a57d716a75cd48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e000436ce640a2d619cd53eff4c10849d47cae66db73d57d00e34d22717c5757 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e000436ce640a2d619cd53eff4c10849d47cae66db73d57d00e34d22717c5757->enter($__internal_e000436ce640a2d619cd53eff4c10849d47cae66db73d57d00e34d22717c5757_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:menu.html.twig"));

        $__internal_c79a331eb9b6acb3f2d01569637063cf8fb757af62b44e6ebae1abc9df4a1585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79a331eb9b6acb3f2d01569637063cf8fb757af62b44e6ebae1abc9df4a1585->enter($__internal_c79a331eb9b6acb3f2d01569637063cf8fb757af62b44e6ebae1abc9df4a1585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:menu.html.twig"));

        // line 2
        echo "
<nav class=\"navbar navbar-static-top navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\" navbar-brand\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
        echo "\"><img class=\"img-rounded\" src=\"../image/logo_CERDI_UCA-01.png\">Cerdi</a>
        </div>
        <ul class=\"nav navbar-nav\">
            ";
        // line 9
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "temi_platform_home")) {
            // line 10
            echo "                <li class=\"active\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
            echo "\">Modèle</a></li>
            ";
        } else {
            // line 12
            echo "                <li ><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
            echo "\">Modèle</a></li>
            ";
        }
        // line 14
        echo "            <li><a data-toggle=\"modal\" href=\"#myModal\">graphique</a></li>
            <li><a id=\"ajoutButt\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_add");
        echo "\">Ajouter un pays <span class=\"glyphicon glyphicon-plus-sign\"> </span> </a></li>
        </ul>
        ";
        // line 18
        echo "        <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_user_sign_up");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> Inscription</a></li>
            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_user_login");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Connection</a></li>
        </ul>
        ";
        // line 27
        echo "    </div>
</nav>
";
        
        $__internal_e000436ce640a2d619cd53eff4c10849d47cae66db73d57d00e34d22717c5757->leave($__internal_e000436ce640a2d619cd53eff4c10849d47cae66db73d57d00e34d22717c5757_prof);

        
        $__internal_c79a331eb9b6acb3f2d01569637063cf8fb757af62b44e6ebae1abc9df4a1585->leave($__internal_c79a331eb9b6acb3f2d01569637063cf8fb757af62b44e6ebae1abc9df4a1585_prof);

    }

    public function getTemplateName()
    {
        return "TEMImainBundle:Temi:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 27,  66 => 20,  62 => 19,  59 => 18,  54 => 15,  51 => 14,  45 => 12,  39 => 10,  37 => 9,  31 => 6,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

<nav class=\"navbar navbar-static-top navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\" navbar-brand\" href=\"{{ path('temi_platform_home') }}\"><img class=\"img-rounded\" src=\"../image/logo_CERDI_UCA-01.png\">Cerdi</a>
        </div>
        <ul class=\"nav navbar-nav\">
            {%if app.request.attributes.get('_route')=='temi_platform_home'%}
                <li class=\"active\"><a href=\"{{ path('temi_platform_home') }}\">Modèle</a></li>
            {% else %}
                <li ><a href=\"{{ path('temi_platform_home') }}\">Modèle</a></li>
            {% endif %}
            <li><a data-toggle=\"modal\" href=\"#myModal\">graphique</a></li>
            <li><a id=\"ajoutButt\" href=\"{{ path('temi_platform_add') }}\">Ajouter un pays <span class=\"glyphicon glyphicon-plus-sign\"> </span> </a></li>
        </ul>
        {#{%if app.session[\"user_conected\"]!=true  %}#}
        <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"{{ path('temi_user_sign_up') }}\"><span class=\"glyphicon glyphicon-user\"></span> Inscription</a></li>
            <li><a href=\"{{ path('temi_user_login') }}\"><span class=\"glyphicon glyphicon-log-in\"></span> Connection</a></li>
        </ul>
        {#{% else %}
        <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"{{ path('temi_user_logout') }}\"><span class=\"glyphicon glyphicon-log-out\"></span> Deconnection</a></li>
        </ul>
        {% endif %}#}
    </div>
</nav>
", "TEMImainBundle:Temi:menu.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle/Resources/views/Temi/menu.html.twig");
    }
}
