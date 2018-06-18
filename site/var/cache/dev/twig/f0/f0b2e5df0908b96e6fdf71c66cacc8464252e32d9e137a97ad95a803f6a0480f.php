<?php

/* TEMImainBundle:Temi:layout.html.twig */
class __TwigTemplate_68dc9c74467f123fde467b53e9fbd86179d1a4a072458309120d40417918aea1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" xmlns=\"http://www.w3.org/1999/html\">
<head>
    <title>index</title>
    <meta charset=\"utf-8\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"../image/logo_CERDI_UCA-01.png\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"../css/general.css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</head>
<body bgproperties=\"fixed\">
<div class=\"body\">
    <div id=\"menu\">

        <nav class=\"navbar navbar-static-top navbar-fixed-top\">

            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <a class=\" navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
        echo "\"><img class=\"img-rounded\"
                                                                                          src=\"../image/logo_CERDI_UCA-01.png\">Cerdi</a>
                </div>
                <ul class=\"nav navbar-nav\">
                    <li";
        // line 26
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "temi_platform_home")) {
            echo " class=\"active\"";
        }
        echo ">
                        <a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
        echo "\">Modèle</a>
                    </li>
                    <li ";
        // line 29
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "temi_platform_graph")) {
            echo " class=\"active\"";
        }
        echo ">
                        <a data-toggle=\"modal\" href=\"#myModal\">graphique</a>
                    </li>
                    <li ";
        // line 32
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "temi_platform_add")) {
            echo " class=\"active\"";
        }
        echo ">
                        <a id=\"ajoutButt\" href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_add");
        echo "\">Ajouter un pays
                            <span class=\"glyphicon glyphicon-plus-sign\"> </span>
                        </a>
                    </li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li ";
        // line 39
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "temi_user_sign_up")) {
            echo " class=\"active\"";
        }
        echo ">
                        <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_user_sign_up");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span>
                            Inscription</a>
                    </li>
                    <li ";
        // line 43
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "temi_user_login")) {
            echo " class=\"active\"";
        }
        echo ">
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_user_login");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span>
                            Connection</a>
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
                                    onclick=\"debutCompa(\$('#actualistionCompa').val(), \$('#REGIMECmpta').val());\">
                                continuer
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
        </div>
    </div>

    <div class=\"container-fluid myContain\">
        <div class=\"row\">
            <div class=\"col-sm-4\">

                <h2>LE CALCULATOR TEMI</h2>
                <div class=\"panel-group Borderhide\" id=\"accordion7\">
                    <div class=\"panel panel-default Borderhide\">
                        <div class=\"panel-heading Borderhide\">
                            <h4 class=\"panel-title Borderhide\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse50\" class=\"Borderhide\">
                                    C'EST QUOI ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse50\" class=\"panel-collapse collapse Borderhide\">
                            <div class=\"panel-body Borderhide\">C’est un outil de calcul du taux effectif moyen d’imposition d’une entreprise à partir de 4 impôts :
                                <ul>
                                    <li>Contributions forfaitaires employeurs (CFE) ;</li>
                                    <li>Impôt sur les sociétés (IS) ;</li>
                                    <li>Impôt minimum forfaitaire (IMF);</li>
                                    <li>Impôts sur le revenu des capitaux immobiliers (IRCM).</li>
                                </ul>
                                La charge fiscale est calculée sur 5 ans.
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide\">
                        <div class=\"panel-heading Borderhide\">
                            <h4 class=\"panel-title Borderhide\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse51\" class=\"Borderhide\">
                                    POUR QUOI FAIRE ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse51\" class=\"panel-collapse collapse Borderhide\">
                            <div class=\"panel-body Borderhide\">Evaluer et comparer la fiscalité sur les sociétés</div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide\">
                        <div class=\"panel-heading Borderhide\">
                            <h4 class=\"panel-title Borderhide\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse52\" class=\"Borderhide\">
                                    POUR QUI ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse52\" class=\"panel-collapse collapse Borderhide\">
                            <div class=\"panel-body Borderhide\">Politiques, gouvernements pour réfléchir à leur régime fiscal<br/>
                                Entrepreneurs pour évaluer quel régime fiscal est plus « intéressant »<br/>
                                Citoyens, associations…
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide\">
                        <div class=\"panel-heading Borderhide\">
                            <h4 class=\"panel-title Borderhide\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse53\" class=\"Borderhide\">
                                    QUELS PAYS ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse53\" class=\"panel-collapse collapse Borderhide\">
                            <div class=\"panel-body Borderhide\">Les pays de la zone Franc :
                                <ul>
                                    <li>
                                        Union Economique et Monétaire Ouest Africaine (UEMOA) : Bénin, Burkina Faso, Côte d’Ivoire, Mali, Niger, Sénégal, Togo
                                    </li>
                                    <li>
                                        Communauté Economique et Monétaire de l’Afrique Centrale (CEMAC) : Cameroun, Congo, Gabon, République de Centrafrique, Tchad).
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide\">
                        <div class=\"panel-heading Borderhide\">
                            <h4 class=\"panel-title Borderhide\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse54\" class=\"Borderhide\">
                                    COMMENT ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse54\" class=\"panel-collapse collapse Borderhide\">
                            <div class=\"panel-body Borderhide\">Le calcul suit la méthodologie de Djankov (2010) </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide\">
                        <div class=\"panel-heading Borderhide\">
                            <h4 class=\"panel-title Borderhide\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse55\" class=\"Borderhide\">
                                    SOURCES DES DONÉES</a>
                            </h4>
                        </div>
                        <div id=\"collapse55\" class=\"panel-collapse collapse Borderhide\">
                            <div class=\"panel-body Borderhide\">Banque mondiale : World Development Indicators pour le PNB/tête
                                FMI (PIB, taux d’inflation)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8\">
                ";
        // line 188
        $this->displayBlock('body', $context, $blocks);
        // line 190
        echo "            </div>
        </div>

    </div>
    ";
        // line 194
        $this->displayBlock('js', $context, $blocks);
        // line 197
        echo "
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 188
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 189
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 194
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 195
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "TEMImainBundle:Temi:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 195,  298 => 194,  288 => 189,  279 => 188,  266 => 197,  264 => 194,  258 => 190,  256 => 188,  109 => 44,  103 => 43,  97 => 40,  91 => 39,  82 => 33,  76 => 32,  68 => 29,  63 => 27,  57 => 26,  50 => 22,  27 => 1,);
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
<html lang=\"fr\" xmlns=\"http://www.w3.org/1999/html\">
<head>
    <title>index</title>
    <meta charset=\"utf-8\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"../image/logo_CERDI_UCA-01.png\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"../css/general.css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</head>
<body bgproperties=\"fixed\">
<div class=\"body\">
    <div id=\"menu\">

        <nav class=\"navbar navbar-static-top navbar-fixed-top\">

            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <a class=\" navbar-brand\" href=\"{{ path('temi_platform_home') }}\"><img class=\"img-rounded\"
                                                                                          src=\"../image/logo_CERDI_UCA-01.png\">Cerdi</a>
                </div>
                <ul class=\"nav navbar-nav\">
                    <li{% if app.request.attributes.get(\"_route\")=='temi_platform_home' %} class=\"active\"{% endif %}>
                        <a href=\"{{ path('temi_platform_home') }}\">Modèle</a>
                    </li>
                    <li {% if app.request.attributes.get(\"_route\")=='temi_platform_graph' %} class=\"active\"{% endif %}>
                        <a data-toggle=\"modal\" href=\"#myModal\">graphique</a>
                    </li>
                    <li {% if app.request.attributes.get(\"_route\")=='temi_platform_add' %} class=\"active\"{% endif %}>
                        <a id=\"ajoutButt\" href=\"{{ path('temi_platform_add') }}\">Ajouter un pays
                            <span class=\"glyphicon glyphicon-plus-sign\"> </span>
                        </a>
                    </li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li {% if app.request.attributes.get(\"_route\")=='temi_user_sign_up' %} class=\"active\"{% endif %}>
                        <a href=\"{{ path('temi_user_sign_up') }}\"><span class=\"glyphicon glyphicon-user\"></span>
                            Inscription</a>
                    </li>
                    <li {% if app.request.attributes.get(\"_route\")=='temi_user_login' %} class=\"active\"{% endif %}>
                        <a href=\"{{ path('temi_user_login') }}\"><span class=\"glyphicon glyphicon-log-in\"></span>
                            Connection</a>
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
                                    onclick=\"debutCompa(\$('#actualistionCompa').val(), \$('#REGIMECmpta').val());\">
                                continuer
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
        </div>
    </div>

    <div class=\"container-fluid myContain\">
        <div class=\"row\">
            <div class=\"col-sm-4\">

                <h2>LE CALCULATOR TEMI</h2>
                <div class=\"panel-group Borderhide\" id=\"accordion7\">
                    <div class=\"panel panel-default Borderhide\">
                        <div class=\"panel-heading Borderhide\">
                            <h4 class=\"panel-title Borderhide\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse50\" class=\"Borderhide\">
                                    C'EST QUOI ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse50\" class=\"panel-collapse collapse Borderhide\">
                            <div class=\"panel-body Borderhide\">C’est un outil de calcul du taux effectif moyen d’imposition d’une entreprise à partir de 4 impôts :
                                <ul>
                                    <li>Contributions forfaitaires employeurs (CFE) ;</li>
                                    <li>Impôt sur les sociétés (IS) ;</li>
                                    <li>Impôt minimum forfaitaire (IMF);</li>
                                    <li>Impôts sur le revenu des capitaux immobiliers (IRCM).</li>
                                </ul>
                                La charge fiscale est calculée sur 5 ans.
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide\">
                        <div class=\"panel-heading Borderhide\">
                            <h4 class=\"panel-title Borderhide\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse51\" class=\"Borderhide\">
                                    POUR QUOI FAIRE ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse51\" class=\"panel-collapse collapse Borderhide\">
                            <div class=\"panel-body Borderhide\">Evaluer et comparer la fiscalité sur les sociétés</div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide\">
                        <div class=\"panel-heading Borderhide\">
                            <h4 class=\"panel-title Borderhide\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse52\" class=\"Borderhide\">
                                    POUR QUI ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse52\" class=\"panel-collapse collapse Borderhide\">
                            <div class=\"panel-body Borderhide\">Politiques, gouvernements pour réfléchir à leur régime fiscal<br/>
                                Entrepreneurs pour évaluer quel régime fiscal est plus « intéressant »<br/>
                                Citoyens, associations…
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide\">
                        <div class=\"panel-heading Borderhide\">
                            <h4 class=\"panel-title Borderhide\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse53\" class=\"Borderhide\">
                                    QUELS PAYS ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse53\" class=\"panel-collapse collapse Borderhide\">
                            <div class=\"panel-body Borderhide\">Les pays de la zone Franc :
                                <ul>
                                    <li>
                                        Union Economique et Monétaire Ouest Africaine (UEMOA) : Bénin, Burkina Faso, Côte d’Ivoire, Mali, Niger, Sénégal, Togo
                                    </li>
                                    <li>
                                        Communauté Economique et Monétaire de l’Afrique Centrale (CEMAC) : Cameroun, Congo, Gabon, République de Centrafrique, Tchad).
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide\">
                        <div class=\"panel-heading Borderhide\">
                            <h4 class=\"panel-title Borderhide\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse54\" class=\"Borderhide\">
                                    COMMENT ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse54\" class=\"panel-collapse collapse Borderhide\">
                            <div class=\"panel-body Borderhide\">Le calcul suit la méthodologie de Djankov (2010) </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide\">
                        <div class=\"panel-heading Borderhide\">
                            <h4 class=\"panel-title Borderhide\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse55\" class=\"Borderhide\">
                                    SOURCES DES DONÉES</a>
                            </h4>
                        </div>
                        <div id=\"collapse55\" class=\"panel-collapse collapse Borderhide\">
                            <div class=\"panel-body Borderhide\">Banque mondiale : World Development Indicators pour le PNB/tête
                                FMI (PIB, taux d’inflation)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8\">
                {% block body %}
                {% endblock %}
            </div>
        </div>

    </div>
    {% block js %}

    {% endblock %}

</div>
</body>
</html>", "TEMImainBundle:Temi:layout.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle/Resources/views/Temi/layout.html.twig");
    }
}
