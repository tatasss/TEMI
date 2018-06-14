<?php

/* TEMImainBundle:Temi:menu.html.twig */
class __TwigTemplate_d7e8124c650085b63ce6a483e5b8b777b95d1445ca3210a4820663b496c130af extends Twig_Template
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
        $__internal_2aef0156e248e0c8f81179f879f067f21faa530bb24ae508a9045647e2d06179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aef0156e248e0c8f81179f879f067f21faa530bb24ae508a9045647e2d06179->enter($__internal_2aef0156e248e0c8f81179f879f067f21faa530bb24ae508a9045647e2d06179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:menu.html.twig"));

        $__internal_6b9bbbf2090a8a166b575e70584fae44f86b727a90de6bc3c4ed0661a0e15de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9bbbf2090a8a166b575e70584fae44f86b727a90de6bc3c4ed0661a0e15de4->enter($__internal_6b9bbbf2090a8a166b575e70584fae44f86b727a90de6bc3c4ed0661a0e15de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:menu.html.twig"));

        // line 2
        echo "
<nav class=\"navbar navbar-static-top navbar-fixed-top\">

    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\" navbar-brand\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
        echo "\"><img class=\"img-rounded\"
                                                                                  src=\"../image/logo_CERDI_UCA-01.png\">Cerdi</a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
        echo "\">Modèle</a></li>
            <li><a data-toggle=\"modal\" href=\"#myModal\">graphique</a></li>
            <li><a id=\"ajoutButt\" href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_add");
        echo "\">Ajouter un pays <span
                            class=\"glyphicon glyphicon-plus-sign\"> </span> </a></li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_user_sign_up");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> Inscription</a>
            </li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_user_login");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Connection</a>
            </li>
        </ul>
    </div>
</nav>
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"padding:35px 50px;\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"></button>
                <h4>Comparaison</h4>
                <p>Vous avez lancé une comparaison entre des entreprises ayant des marges différentes
                </p>
            </div>
            <div class=\"modal-body\" style=\"padding:40px 50px;\">
                <form role=\"form\">
                    <div class=\"form-group\">
                        <label>Taux d'actualisation :</label>
                        <input type=\"text\" class=\"form-control\" id=\"actualistionCompa\" title=\"actualisation\"
                               value=\"\" placeholder=\"Veuillez entrer un taux d'actualisation\">
                    </div>
                    <div class=\"form-group\">
                        <label>Régime fiscale:</label>
                        <select class=\"form-control\" id=\"REGIMECmpta\" title=\"regime fiscale\">
                            <option value=\"gen\">Code général des impôts</option>
                            <option value=\"nongen\">Code des investissements</option>
                        </select>
                    </div>
                    <button type=\"submit\" class=\"btn btn-success btn-block\" id=\"myCont\"
                            onclick=\"debutCompa(\$('#actualistionCompa').val(), \$('#REGIMECmpta').val());\">continuer
                    </button>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-danger btn-default pull-left\" onclick=\"retourModal()\"
                        data-dismiss=\"modal\">
                        <span class=\"glyphicon glyphicon-remove\">
                        </span> Annuler
                </button>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_2aef0156e248e0c8f81179f879f067f21faa530bb24ae508a9045647e2d06179->leave($__internal_2aef0156e248e0c8f81179f879f067f21faa530bb24ae508a9045647e2d06179_prof);

        
        $__internal_6b9bbbf2090a8a166b575e70584fae44f86b727a90de6bc3c4ed0661a0e15de4->leave($__internal_6b9bbbf2090a8a166b575e70584fae44f86b727a90de6bc3c4ed0661a0e15de4_prof);

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
        return array (  56 => 19,  51 => 17,  44 => 13,  39 => 11,  32 => 7,  25 => 2,);
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
            <a class=\" navbar-brand\" href=\"{{ path('temi_platform_home') }}\"><img class=\"img-rounded\"
                                                                                  src=\"../image/logo_CERDI_UCA-01.png\">Cerdi</a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li><a href=\"{{ path('temi_platform_home') }}\">Modèle</a></li>
            <li><a data-toggle=\"modal\" href=\"#myModal\">graphique</a></li>
            <li><a id=\"ajoutButt\" href=\"{{ path('temi_platform_add') }}\">Ajouter un pays <span
                            class=\"glyphicon glyphicon-plus-sign\"> </span> </a></li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"{{ path('temi_user_sign_up') }}\"><span class=\"glyphicon glyphicon-user\"></span> Inscription</a>
            </li>
            <li><a href=\"{{ path('temi_user_login') }}\"><span class=\"glyphicon glyphicon-log-in\"></span> Connection</a>
            </li>
        </ul>
    </div>
</nav>
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"padding:35px 50px;\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"></button>
                <h4>Comparaison</h4>
                <p>Vous avez lancé une comparaison entre des entreprises ayant des marges différentes
                </p>
            </div>
            <div class=\"modal-body\" style=\"padding:40px 50px;\">
                <form role=\"form\">
                    <div class=\"form-group\">
                        <label>Taux d'actualisation :</label>
                        <input type=\"text\" class=\"form-control\" id=\"actualistionCompa\" title=\"actualisation\"
                               value=\"\" placeholder=\"Veuillez entrer un taux d'actualisation\">
                    </div>
                    <div class=\"form-group\">
                        <label>Régime fiscale:</label>
                        <select class=\"form-control\" id=\"REGIMECmpta\" title=\"regime fiscale\">
                            <option value=\"gen\">Code général des impôts</option>
                            <option value=\"nongen\">Code des investissements</option>
                        </select>
                    </div>
                    <button type=\"submit\" class=\"btn btn-success btn-block\" id=\"myCont\"
                            onclick=\"debutCompa(\$('#actualistionCompa').val(), \$('#REGIMECmpta').val());\">continuer
                    </button>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-danger btn-default pull-left\" onclick=\"retourModal()\"
                        data-dismiss=\"modal\">
                        <span class=\"glyphicon glyphicon-remove\">
                        </span> Annuler
                </button>
            </div>
        </div>
    </div>
</div>", "TEMImainBundle:Temi:menu.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle\\Resources\\views\\Temi\\menu.html.twig");
    }
}
