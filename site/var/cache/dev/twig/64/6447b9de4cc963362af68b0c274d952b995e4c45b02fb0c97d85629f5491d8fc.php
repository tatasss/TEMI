<?php

/* TEMImainBundle:Temi:layout.html.twig */
class __TwigTemplate_fc5cba614b9b4c57a1530dd016137a202cad8af06692900ee27e5950599112f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
    <title>
        ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "    </title>
    <meta charset=\"utf-8\">
    ";
        // line 9
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "81953f2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_81953f2_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/81953f2_logo_CERDI_UCA-01_1.png");
            // line 10
            echo "    <link rel=\"shortcut icon\"
          type=\"image/x-icon\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
        } else {
            // asset "81953f2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_81953f2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/81953f2.png");
            // line 10
            echo "    <link rel=\"shortcut icon\"
          type=\"image/x-icon\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
    ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
   ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "c9335ea_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c9335ea_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c9335ea_general_1.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "c9335ea"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c9335ea") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/c9335ea.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "
    ";
        // line 25
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</head>
<body bgproperties=\"fixed\">
<div class=\"body\">
    <div id=\"menu\">

        <nav class=\"navbar navbar-static-top navbar-fixed-top\">

            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <a  class=\" navbar-brand\" href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
        echo "\">
                        ";
        // line 38
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "81953f2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_81953f2_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/81953f2_logo_CERDI_UCA-01_1.png");
            // line 39
            echo "                        <img class=\"img-rounded\" id=\"cerdi\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
                        Cerdi
                        ";
        } else {
            // asset "81953f2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_81953f2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/81953f2.png");
            echo "                        <img class=\"img-rounded\" id=\"cerdi\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
                        Cerdi
                        ";
        }
        unset($context["asset_url"]);
        // line 42
        echo "                    </a>
                </div>
                <ul class=\"nav navbar-nav\">
                    <li";
        // line 45
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "temi_platform_home")) {
            echo " class=\"active\"";
        }
        echo ">
                        <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
        echo "\">Modèle</a>
                    </li>
                    <li ";
        // line 48
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "temi_platform_graph")) {
            echo " class=\"active\"";
        }
        echo ">
                        <a data-toggle=\"modal\" href=\"#myModal\">Graphique</a>
                    </li>
                    ";
        // line 51
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 52
            echo "                    <li ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "temi_platform_add")) {
                echo " class=\"active\"";
            }
            echo ">
                        <a id=\"ajoutButt\" href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_add");
            echo "\">Ajouter un pays
                            <span class=\"glyphicon glyphicon-plus-sign\"> </span>
                        </a>
                    </li>
                    ";
        }
        // line 58
        echo "                </ul>
                ";
        // line 59
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 60
            echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        <li ";
            // line 61
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_show")) {
                echo " class=\"active\"";
            }
            echo ">
                            <a href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><span
                                        class=\"glyphicon glyphicon-user\"></span>
                                ";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "</a>
                        </li>
                        <li ";
            // line 66
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_security_logout")) {
                echo " class=\"active\"";
            }
            echo ">
                            <a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><span
                                        class=\"glyphicon glyphicon-log-out\"></span>
                                Deconnection</a>
                        </li>
                    </ul>

                ";
        } else {
            // line 74
            echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        <li ";
            // line 75
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) {
                echo " class=\"active\"";
            }
            echo ">
                            <a href=\"";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"><span
                                        class=\"glyphicon glyphicon-user\"></span>
                                Inscription</a>
                        </li>
                        <li ";
            // line 80
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_security_login")) {
                echo " class=\"active\"";
            }
            echo ">
                            <a href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><span
                                        class=\"glyphicon glyphicon-log-in\"></span>
                                Connection</a>
                        </li>
                    </ul>
                ";
        }
        // line 87
        echo "            </div>
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
                                Continuer
                            </button>
                        </form>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-danger pull-left\" onclick=\"retourModal()\"
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
                ";
        // line 135
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5c63501_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5c63501_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/5c63501_logo_Calculateur_TEMI_1.png");
            // line 136
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"
                         width=\"100%\" id=\"navImage\">
                ";
        } else {
            // asset "5c63501"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5c63501") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/images/5c63501.png");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"
                         width=\"100%\" id=\"navImage\">
                ";
        }
        unset($context["asset_url"]);
        // line 139
        echo "                <h2 class=\"navCote\" id=\"navTitle\">LE CALCULATEUR TEMI</h2>
                <div class=\"panel-group Borderhide navCote\" id=\"accordion7\">
                    <div class=\"panel panel-default Borderhide navCote\">
                        <div class=\"panel-heading Borderhide navCote\">
                            <h4 class=\"panel-title Borderhide navCote\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse50\"
                                   class=\"Borderhide\">
                                    C'EST QUOI ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse50\" class=\"panel-collapse collapse Borderhide navCote\">
                            <div class=\"panel-body Borderhide\">C’est un outil de calcul du taux effectif moyen
                                d’imposition d’une entreprise à partir de 4 impôts :
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
                    <div class=\"panel panel-default Borderhide navCote\">
                        <div class=\"panel-heading Borderhide navCote\">
                            <h4 class=\"panel-title Borderhide navCote\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse51\"
                                   class=\"Borderhide\">
                                    POUR QUOI FAIRE ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse51\" class=\"panel-collapse collapse Borderhide navCote\">
                            <div class=\"panel-body Borderhide\">Evaluer et comparer la fiscalité sur les sociétés</div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide navCote\">
                        <div class=\"panel-heading Borderhide navCote\">
                            <h4 class=\"panel-title Borderhide navCote\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse52\"
                                   class=\"Borderhide\">
                                    POUR QUI ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse52\" class=\"panel-collapse collapse Borderhide navCote\">
                            <div class=\"panel-body Borderhide navCote\">Politiques, gouvernements pour réfléchir à leur régime
                                fiscal<br/>
                                Entrepreneurs pour évaluer quel régime fiscal est plus « intéressant »<br/>
                                Citoyens, associations…
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide navCote\">
                        <div class=\"panel-heading Borderhide navCote\">
                            <h4 class=\"panel-title Borderhide navCote\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse53\"
                                   class=\"Borderhide navCote\">
                                    QUELS PAYS ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse53\" class=\"panel-collapse collapse Borderhide\">
                            <div class=\"panel-body Borderhide navCote\">Les pays de la zone Franc :
                                <ul>
                                    <li>
                                        Union Economique et Monétaire Ouest Africaine (UEMOA) : Bénin, Burkina Faso,
                                        Côte d’Ivoire, Mali, Niger, Sénégal, Togo
                                    </li>
                                    <li>
                                        Communauté Economique et Monétaire de l’Afrique Centrale (CEMAC) : Cameroun,
                                        Congo, Gabon, République de Centrafrique, Tchad).
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide navCote\">
                        <div class=\"panel-heading Borderhide navCote\">
                            <h4 class=\"panel-title Borderhide navCote\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse54\"
                                   class=\"Borderhide navCote\">
                                    COMMENT ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse54\" class=\"panel-collapse collapse Borderhide navCote\">
                            <div class=\"panel-body Borderhide navCote\">Le calcul suit la méthodologie de Djankov (2010)</div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide navCote\">
                        <div class=\"panel-heading Borderhide navCote\">
                            <h4 class=\"panel-title Borderhide navCote\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse55\"
                                   class=\"Borderhide navCote\">
                                    SOURCES DES DONNÉES</a>
                            </h4>
                        </div>
                        <div id=\"collapse55\" class=\"panel-collapse collapse Borderhide navCote\">
                            <div class=\"panel-body Borderhide navCote\">Banque mondiale : World Development Indicators pour le
                                PNB/tête
                                FMI (PIB, taux d’inflation)
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-8\">
                ";
        // line 243
        $this->displayBlock('body', $context, $blocks);
        // line 245
        echo "            </div>
        </div>

    </div>
    ";
        // line 249
        $this->displayBlock('js', $context, $blocks);
        // line 252
        echo "
    ";
        // line 253
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) {
            // line 254
            echo "    ";
        } else {
            // line 255
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_confirmed")) {
                // line 256
                echo "        ";
            } else {
                // line 257
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_show")) {
                    // line 258
                    echo "            ";
                } else {
                    // line 259
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_edit")) {
                        // line 260
                        echo "                ";
                    } else {
                        // line 261
                        echo "                    ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_change_password")) {
                            // line 262
                            echo "                    ";
                        } else {
                            // line 263
                            echo "                        ";
                            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_security_login")) {
                                // line 264
                                echo "                        ";
                            } else {
                                // line 265
                                echo "                            <div class=\"footer\">
                                <p>nombre de visiteur: ";
                                // line 266
                                echo twig_escape_filter($this->env, (isset($context["numVisit"]) ? $context["numVisit"] : $this->getContext($context, "numVisit")), "html", null, true);
                                echo "</p>
                            </div>
                    ";
                            }
                        }
                    }
                    // line 268
                    echo " ";
                }
            }
        }
        // line 269
        echo "
</div>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 243
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 244
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 249
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 250
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
        return array (  538 => 250,  529 => 249,  519 => 244,  510 => 243,  500 => 6,  491 => 5,  478 => 269,  473 => 268,  465 => 266,  462 => 265,  459 => 264,  456 => 263,  453 => 262,  450 => 261,  447 => 260,  444 => 259,  441 => 258,  438 => 257,  435 => 256,  432 => 255,  429 => 254,  427 => 253,  424 => 252,  422 => 249,  416 => 245,  414 => 243,  308 => 139,  292 => 136,  288 => 135,  238 => 87,  229 => 81,  223 => 80,  216 => 76,  210 => 75,  207 => 74,  197 => 67,  191 => 66,  186 => 64,  181 => 62,  175 => 61,  172 => 60,  170 => 59,  167 => 58,  159 => 53,  152 => 52,  150 => 51,  142 => 48,  137 => 46,  131 => 45,  126 => 42,  110 => 39,  106 => 38,  102 => 37,  88 => 25,  85 => 18,  71 => 16,  67 => 15,  63 => 13,  57 => 11,  54 => 10,  47 => 11,  44 => 10,  40 => 9,  36 => 7,  34 => 5,  28 => 1,);
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
    <title>
        {% block title %}
        {% endblock %}
    </title>
    <meta charset=\"utf-8\">
    {% image  'bundles/temimain/image/logo_CERDI_UCA-01.png'%}
    <link rel=\"shortcut icon\"
          type=\"image/x-icon\" href=\"{{ asset_url }}\">
    {% endimage %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
   {% stylesheets 'bundles/temimain/css/general.css' %}
        <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
    {% endstylesheets %}

    {#<link rel=\"stylesheet\" {% if app.request.attributes.get(\"_route\")=='fos_user_registration_register' %}
        href=\"../../css/general.css\"{% else %}{% if app.request.attributes.get(\"_route\")=='fos_user_registration_confirmed' %}
        href=\"../../css/general.css\"{% else %}{% if app.request.attributes.get(\"_route\")=='fos_user_profile_show' %}
        href=\"../../css/general.css\"{% else %}{% if app.request.attributes.get(\"_route\")=='fos_user_profile_edit' %}
        href=\"../../css/general.css\"{% else %}{% if app.request.attributes.get(\"_route\")=='fos_user_change_password' %}
        href=\"../../css/general.css\"{% else %} href=\"../css/general.css\"{% endif %}{% endif %}{% endif %}{% endif %}{% endif %}>#}
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
                    <a  class=\" navbar-brand\" href=\"{{ path('temi_platform_home') }}\">
                        {% image  'bundles/temimain/image/logo_CERDI_UCA-01.png'%}
                        <img class=\"img-rounded\" id=\"cerdi\" src=\"{{ asset_url }}\"/>
                        Cerdi
                        {% endimage %}
                    </a>
                </div>
                <ul class=\"nav navbar-nav\">
                    <li{% if app.request.attributes.get(\"_route\")=='temi_platform_home' %} class=\"active\"{% endif %}>
                        <a href=\"{{ path('temi_platform_home') }}\">Modèle</a>
                    </li>
                    <li {% if app.request.attributes.get(\"_route\")=='temi_platform_graph' %} class=\"active\"{% endif %}>
                        <a data-toggle=\"modal\" href=\"#myModal\">Graphique</a>
                    </li>
                    {% if  is_granted(\"IS_AUTHENTICATED_FULLY\") %}
                    <li {% if app.request.attributes.get(\"_route\")=='temi_platform_add' %} class=\"active\"{% endif %}>
                        <a id=\"ajoutButt\" href=\"{{ path('temi_platform_add') }}\">Ajouter un pays
                            <span class=\"glyphicon glyphicon-plus-sign\"> </span>
                        </a>
                    </li>
                    {% endif %}
                </ul>
                {% if  is_granted(\"IS_AUTHENTICATED_FULLY\") %}
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li {% if app.request.attributes.get(\"_route\")=='fos_user_profile_show' %} class=\"active\"{% endif %}>
                            <a href=\"{{ path('fos_user_profile_show') }}\"><span
                                        class=\"glyphicon glyphicon-user\"></span>
                                {{ app.user }}</a>
                        </li>
                        <li {% if app.request.attributes.get(\"_route\")=='fos_user_security_logout' %} class=\"active\"{% endif %}>
                            <a href=\"{{ path('fos_user_security_logout') }}\"><span
                                        class=\"glyphicon glyphicon-log-out\"></span>
                                Deconnection</a>
                        </li>
                    </ul>

                {% else %}
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li {% if app.request.attributes.get(\"_route\")=='fos_user_registration_register' %} class=\"active\"{% endif %}>
                            <a href=\"{{ path('fos_user_registration_register') }}\"><span
                                        class=\"glyphicon glyphicon-user\"></span>
                                Inscription</a>
                        </li>
                        <li {% if app.request.attributes.get(\"_route\")=='fos_user_security_login' %} class=\"active\"{% endif %}>
                            <a href=\"{{ path('fos_user_security_login') }}\"><span
                                        class=\"glyphicon glyphicon-log-in\"></span>
                                Connection</a>
                        </li>
                    </ul>
                {% endif %}
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
                                Continuer
                            </button>
                        </form>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"submit\" class=\"btn btn-danger pull-left\" onclick=\"retourModal()\"
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
                {% image  'bundles/temimain/image/logo_Calculateur_TEMI.png'%}
                <img src=\"{{ asset_url}}\"
                         width=\"100%\" id=\"navImage\">
                {%  endimage%}
                <h2 class=\"navCote\" id=\"navTitle\">LE CALCULATEUR TEMI</h2>
                <div class=\"panel-group Borderhide navCote\" id=\"accordion7\">
                    <div class=\"panel panel-default Borderhide navCote\">
                        <div class=\"panel-heading Borderhide navCote\">
                            <h4 class=\"panel-title Borderhide navCote\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse50\"
                                   class=\"Borderhide\">
                                    C'EST QUOI ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse50\" class=\"panel-collapse collapse Borderhide navCote\">
                            <div class=\"panel-body Borderhide\">C’est un outil de calcul du taux effectif moyen
                                d’imposition d’une entreprise à partir de 4 impôts :
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
                    <div class=\"panel panel-default Borderhide navCote\">
                        <div class=\"panel-heading Borderhide navCote\">
                            <h4 class=\"panel-title Borderhide navCote\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse51\"
                                   class=\"Borderhide\">
                                    POUR QUOI FAIRE ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse51\" class=\"panel-collapse collapse Borderhide navCote\">
                            <div class=\"panel-body Borderhide\">Evaluer et comparer la fiscalité sur les sociétés</div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide navCote\">
                        <div class=\"panel-heading Borderhide navCote\">
                            <h4 class=\"panel-title Borderhide navCote\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse52\"
                                   class=\"Borderhide\">
                                    POUR QUI ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse52\" class=\"panel-collapse collapse Borderhide navCote\">
                            <div class=\"panel-body Borderhide navCote\">Politiques, gouvernements pour réfléchir à leur régime
                                fiscal<br/>
                                Entrepreneurs pour évaluer quel régime fiscal est plus « intéressant »<br/>
                                Citoyens, associations…
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide navCote\">
                        <div class=\"panel-heading Borderhide navCote\">
                            <h4 class=\"panel-title Borderhide navCote\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse53\"
                                   class=\"Borderhide navCote\">
                                    QUELS PAYS ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse53\" class=\"panel-collapse collapse Borderhide\">
                            <div class=\"panel-body Borderhide navCote\">Les pays de la zone Franc :
                                <ul>
                                    <li>
                                        Union Economique et Monétaire Ouest Africaine (UEMOA) : Bénin, Burkina Faso,
                                        Côte d’Ivoire, Mali, Niger, Sénégal, Togo
                                    </li>
                                    <li>
                                        Communauté Economique et Monétaire de l’Afrique Centrale (CEMAC) : Cameroun,
                                        Congo, Gabon, République de Centrafrique, Tchad).
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide navCote\">
                        <div class=\"panel-heading Borderhide navCote\">
                            <h4 class=\"panel-title Borderhide navCote\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse54\"
                                   class=\"Borderhide navCote\">
                                    COMMENT ?</a>
                            </h4>
                        </div>
                        <div id=\"collapse54\" class=\"panel-collapse collapse Borderhide navCote\">
                            <div class=\"panel-body Borderhide navCote\">Le calcul suit la méthodologie de Djankov (2010)</div>
                        </div>
                    </div>
                    <div class=\"panel panel-default Borderhide navCote\">
                        <div class=\"panel-heading Borderhide navCote\">
                            <h4 class=\"panel-title Borderhide navCote\">
                                <a data-toggle=\"collapse\" data-parent=\"#accordion7\" href=\"#collapse55\"
                                   class=\"Borderhide navCote\">
                                    SOURCES DES DONNÉES</a>
                            </h4>
                        </div>
                        <div id=\"collapse55\" class=\"panel-collapse collapse Borderhide navCote\">
                            <div class=\"panel-body Borderhide navCote\">Banque mondiale : World Development Indicators pour le
                                PNB/tête
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

    {% if app.request.attributes.get(\"_route\")=='fos_user_registration_register' %}
    {% else %}
        {% if app.request.attributes.get(\"_route\")=='fos_user_registration_confirmed' %}
        {% else %}
            {% if app.request.attributes.get(\"_route\")=='fos_user_profile_show' %}
            {% else %}
                {% if app.request.attributes.get(\"_route\")=='fos_user_profile_edit' %}
                {% else %}
                    {% if app.request.attributes.get(\"_route\")=='fos_user_change_password' %}
                    {% else %}
                        {% if app.request.attributes.get(\"_route\")=='fos_user_security_login' %}
                        {% else %}
                            <div class=\"footer\">
                                <p>nombre de visiteur: {{ numVisit }}</p>
                            </div>
                    {% endif %}{% endif %}{% endif %} {% endif %}{% endif %}{% endif %}

</div>
</body>
</html>", "TEMImainBundle:Temi:layout.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle/Resources/views/Temi/layout.html.twig");
    }
}
