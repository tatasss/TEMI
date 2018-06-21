<?php

/* TEMImainBundle:Temi:layout.html.twig */
class __TwigTemplate_68dc9c74467f123fde467b53e9fbd86179d1a4a072458309120d40417918aea1 extends Twig_Template
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
    <link rel=\"shortcut icon\"
          type=\"image/x-icon\" ";
        // line 10
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") != "fos_user_registration_register")) {
            echo " href=\"../image/logo_CERDI_UCA-01.png\"";
        } else {
            echo " href=\"../../image/logo_CERDI_UCA-01.png\"";
        }
        echo ">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" ";
        // line 13
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) {
            // line 14
            echo "        href=\"../../css/general.css\"";
        } else {
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_confirmed")) {
                // line 15
                echo "        href=\"../../css/general.css\"";
            } else {
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_show")) {
                    // line 16
                    echo "        href=\"../../css/general.css\"";
                } else {
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_edit")) {
                        // line 17
                        echo "        href=\"../../css/general.css\"";
                    } else {
                        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_change_password")) {
                            // line 18
                            echo "        href=\"../../css/general.css\"";
                        } else {
                            echo " href=\"../css/general.css\"";
                        }
                    }
                }
            }
        }
        echo ">
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
                    <a  class=\" navbar-brand\" href=\"./index.html\">
                        <img class=\"img-rounded\" id=\"cerdi\"
                                ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) {
            // line 34
            echo "                                    src=\"../../image/logo_CERDI_UCA-01.png\"
                                ";
        } else {
            // line 36
            echo "                                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_confirmed")) {
                // line 37
                echo "                                        src=\"../../image/logo_CERDI_UCA-01.png\"
                                    ";
            } else {
                // line 39
                echo "                                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_show")) {
                    // line 40
                    echo "                                            src=\"../../image/logo_CERDI_UCA-01.png\"
                                        ";
                } else {
                    // line 42
                    echo "                                            ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_edit")) {
                        // line 43
                        echo "                                                src=\"../../image/logo_CERDI_UCA-01.png\"
                                            ";
                    } else {
                        // line 45
                        echo "                                                ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_change_password")) {
                            // line 46
                            echo "                                                    src=\"../../image/logo_CERDI_UCA-01.png\"";
                        } else {
                            echo " src=\"../image/logo_CERDI_UCA-01.png\"
                                                ";
                        }
                        // line 48
                        echo "                                            ";
                    }
                    // line 49
                    echo "                                        ";
                }
                // line 50
                echo "                                    ";
            }
            // line 51
            echo "                                ";
        }
        echo "/>
                        Cerdi
                    </a>
                    <a class=\" navbar-brand\" href=\"./index.html\">
                        <img class=\"img-rounded\" id=\"logoTEMI\"
                                ";
        // line 56
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) {
            // line 57
            echo "                            src=\"../../image/Logo_Calculateur_TEMI_blanc.png\"
                        ";
        } else {
            // line 59
            echo "                            ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_confirmed")) {
                // line 60
                echo "                                src=\"../../image/Logo_Calculateur_TEMI_blanc.png\"
                            ";
            } else {
                // line 62
                echo "                                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_show")) {
                    // line 63
                    echo "                                    src=\"../../image/Logo_Calculateur_TEMI_blanc.png\"
                                ";
                } else {
                    // line 65
                    echo "                                    ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_edit")) {
                        // line 66
                        echo "                                        src=\"../../image/Logo_Calculateur_TEMI_blanc.png\"
                                    ";
                    } else {
                        // line 68
                        echo "                                        ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_change_password")) {
                            // line 69
                            echo "                                            src=\"../../image/logo_CERDI_UCA-01.png\"";
                        } else {
                            echo " src=\"../image/Logo_Calculateur_TEMI_blanc.png\"
                                        ";
                        }
                        // line 71
                        echo "                                    ";
                    }
                    // line 72
                    echo "                                ";
                }
                // line 73
                echo "                            ";
            }
            // line 74
            echo "                                ";
        }
        echo "/>
                    </a>

                </div>
                <ul class=\"nav navbar-nav\">
                    <li";
        // line 79
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "temi_platform_home")) {
            echo " class=\"active\"";
        }
        echo ">
                        <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
        echo "\">Modèle</a>
                    </li>
                    <li ";
        // line 82
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "temi_platform_graph")) {
            echo " class=\"active\"";
        }
        echo ">
                        <a data-toggle=\"modal\" href=\"#myModal\">Graphique</a>
                    </li>
                    <li ";
        // line 85
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "temi_platform_add")) {
            echo " class=\"active\"";
        }
        echo ">
                        <a id=\"ajoutButt\" href=\"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_add");
        echo "\">Ajouter un pays
                            <span class=\"glyphicon glyphicon-plus-sign\"> </span>
                        </a>
                    </li>
                </ul>
                ";
        // line 91
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 92
            echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        <li ";
            // line 93
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_show")) {
                echo " class=\"active\"";
            }
            echo ">
                            <a href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
            echo "\"><span
                                        class=\"glyphicon glyphicon-user\"></span>
                                ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "</a>
                        </li>
                        <li ";
            // line 98
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_security_logout")) {
                echo " class=\"active\"";
            }
            echo ">
                            <a href=\"";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><span
                                        class=\"glyphicon glyphicon-log-out\"></span>
                                Deconnection</a>
                        </li>
                    </ul>

                ";
        } else {
            // line 106
            echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        <li ";
            // line 107
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) {
                echo " class=\"active\"";
            }
            echo ">
                            <a href=\"";
            // line 108
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"><span
                                        class=\"glyphicon glyphicon-user\"></span>
                                Inscription</a>
                        </li>
                        <li ";
            // line 112
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_security_login")) {
                echo " class=\"active\"";
            }
            echo ">
                            <a href=\"";
            // line 113
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><span
                                        class=\"glyphicon glyphicon-log-in\"></span>
                                Connection</a>
                        </li>
                    </ul>
                ";
        }
        // line 119
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
                                continuer
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
                <img
                        ";
        // line 167
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) {
            // line 168
            echo "                    src=\"../../image/Logo_Calculateur_TEMI.png\"
                ";
        } else {
            // line 170
            echo "                    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_confirmed")) {
                // line 171
                echo "                        src=\"../../image/Logo_Calculateur_TEMI.png\"
                    ";
            } else {
                // line 173
                echo "                        ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_show")) {
                    // line 174
                    echo "                            src=\"../../image/Logo_Calculateur_TEMI.png\"
                        ";
                } else {
                    // line 176
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_edit")) {
                        // line 177
                        echo "                            src=\"../../image/Logo_Calculateur_TEMI.png\"
                        ";
                    } else {
                        // line 179
                        echo "                            ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_change_password")) {
                            // line 180
                            echo "                            src=\"../../image/Logo_Calculateur_TEMI.png\"
                        ";
                        } else {
                            // line 182
                            echo "                            src=\"../image/Logo_Calculateur_TEMI.png\"
                        ";
                        }
                    }
                    // line 183
                    echo " ";
                }
            }
        }
        echo " width=\"100%\" id=\"navImage\">
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
                                    SOURCES DES DONÉES</a>
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
        // line 288
        $this->displayBlock('body', $context, $blocks);
        // line 290
        echo "            </div>
        </div>

    </div>
    ";
        // line 294
        $this->displayBlock('js', $context, $blocks);
        // line 297
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

    // line 288
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 289
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 294
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 295
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
        return array (  573 => 295,  564 => 294,  554 => 289,  545 => 288,  535 => 6,  526 => 5,  513 => 297,  511 => 294,  505 => 290,  503 => 288,  392 => 183,  387 => 182,  383 => 180,  380 => 179,  376 => 177,  373 => 176,  369 => 174,  366 => 173,  362 => 171,  359 => 170,  355 => 168,  353 => 167,  303 => 119,  294 => 113,  288 => 112,  281 => 108,  275 => 107,  272 => 106,  262 => 99,  256 => 98,  251 => 96,  246 => 94,  240 => 93,  237 => 92,  235 => 91,  227 => 86,  221 => 85,  213 => 82,  208 => 80,  202 => 79,  193 => 74,  190 => 73,  187 => 72,  184 => 71,  178 => 69,  175 => 68,  171 => 66,  168 => 65,  164 => 63,  161 => 62,  157 => 60,  154 => 59,  150 => 57,  148 => 56,  139 => 51,  136 => 50,  133 => 49,  130 => 48,  124 => 46,  121 => 45,  117 => 43,  114 => 42,  110 => 40,  107 => 39,  103 => 37,  100 => 36,  96 => 34,  94 => 33,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  51 => 13,  41 => 10,  36 => 7,  34 => 5,  28 => 1,);
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
    <link rel=\"shortcut icon\"
          type=\"image/x-icon\" {% if app.request.attributes.get(\"_route\")!='fos_user_registration_register' %} href=\"../image/logo_CERDI_UCA-01.png\"{% else %} href=\"../../image/logo_CERDI_UCA-01.png\"{% endif %}>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" {% if app.request.attributes.get(\"_route\")=='fos_user_registration_register' %}
        href=\"../../css/general.css\"{% else %}{% if app.request.attributes.get(\"_route\")=='fos_user_registration_confirmed' %}
        href=\"../../css/general.css\"{% else %}{% if app.request.attributes.get(\"_route\")=='fos_user_profile_show' %}
        href=\"../../css/general.css\"{% else %}{% if app.request.attributes.get(\"_route\")=='fos_user_profile_edit' %}
        href=\"../../css/general.css\"{% else %}{% if app.request.attributes.get(\"_route\")=='fos_user_change_password' %}
        href=\"../../css/general.css\"{% else %} href=\"../css/general.css\"{% endif %}{% endif %}{% endif %}{% endif %}{% endif %}>
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
                    <a  class=\" navbar-brand\" href=\"./index.html\">
                        <img class=\"img-rounded\" id=\"cerdi\"
                                {% if app.request.attributes.get(\"_route\")=='fos_user_registration_register' %}
                                    src=\"../../image/logo_CERDI_UCA-01.png\"
                                {% else %}
                                    {% if app.request.attributes.get(\"_route\")=='fos_user_registration_confirmed' %}
                                        src=\"../../image/logo_CERDI_UCA-01.png\"
                                    {% else %}
                                        {% if app.request.attributes.get(\"_route\")=='fos_user_profile_show' %}
                                            src=\"../../image/logo_CERDI_UCA-01.png\"
                                        {% else %}
                                            {% if app.request.attributes.get(\"_route\")=='fos_user_profile_edit' %}
                                                src=\"../../image/logo_CERDI_UCA-01.png\"
                                            {% else %}
                                                {% if app.request.attributes.get(\"_route\")=='fos_user_change_password' %}
                                                    src=\"../../image/logo_CERDI_UCA-01.png\"{% else %} src=\"../image/logo_CERDI_UCA-01.png\"
                                                {% endif %}
                                            {% endif %}
                                        {% endif %}
                                    {% endif %}
                                {% endif %}/>
                        Cerdi
                    </a>
                    <a class=\" navbar-brand\" href=\"./index.html\">
                        <img class=\"img-rounded\" id=\"logoTEMI\"
                                {% if app.request.attributes.get(\"_route\")=='fos_user_registration_register' %}
                            src=\"../../image/Logo_Calculateur_TEMI_blanc.png\"
                        {% else %}
                            {% if app.request.attributes.get(\"_route\")=='fos_user_registration_confirmed' %}
                                src=\"../../image/Logo_Calculateur_TEMI_blanc.png\"
                            {% else %}
                                {% if app.request.attributes.get(\"_route\")=='fos_user_profile_show' %}
                                    src=\"../../image/Logo_Calculateur_TEMI_blanc.png\"
                                {% else %}
                                    {% if app.request.attributes.get(\"_route\")=='fos_user_profile_edit' %}
                                        src=\"../../image/Logo_Calculateur_TEMI_blanc.png\"
                                    {% else %}
                                        {% if app.request.attributes.get(\"_route\")=='fos_user_change_password' %}
                                            src=\"../../image/logo_CERDI_UCA-01.png\"{% else %} src=\"../image/Logo_Calculateur_TEMI_blanc.png\"
                                        {% endif %}
                                    {% endif %}
                                {% endif %}
                            {% endif %}
                                {% endif %}/>
                    </a>

                </div>
                <ul class=\"nav navbar-nav\">
                    <li{% if app.request.attributes.get(\"_route\")=='temi_platform_home' %} class=\"active\"{% endif %}>
                        <a href=\"{{ path('temi_platform_home') }}\">Modèle</a>
                    </li>
                    <li {% if app.request.attributes.get(\"_route\")=='temi_platform_graph' %} class=\"active\"{% endif %}>
                        <a data-toggle=\"modal\" href=\"#myModal\">Graphique</a>
                    </li>
                    <li {% if app.request.attributes.get(\"_route\")=='temi_platform_add' %} class=\"active\"{% endif %}>
                        <a id=\"ajoutButt\" href=\"{{ path('temi_platform_add') }}\">Ajouter un pays
                            <span class=\"glyphicon glyphicon-plus-sign\"> </span>
                        </a>
                    </li>
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
                                continuer
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
                <img
                        {% if app.request.attributes.get(\"_route\")=='fos_user_registration_register' %}
                    src=\"../../image/Logo_Calculateur_TEMI.png\"
                {% else %}
                    {% if app.request.attributes.get(\"_route\")=='fos_user_registration_confirmed' %}
                        src=\"../../image/Logo_Calculateur_TEMI.png\"
                    {% else %}
                        {% if app.request.attributes.get(\"_route\")=='fos_user_profile_show' %}
                            src=\"../../image/Logo_Calculateur_TEMI.png\"
                        {% else %}
                            {% if app.request.attributes.get(\"_route\")=='fos_user_profile_edit' %}
                            src=\"../../image/Logo_Calculateur_TEMI.png\"
                        {% else %}
                            {% if app.request.attributes.get(\"_route\")=='fos_user_change_password' %}
                            src=\"../../image/Logo_Calculateur_TEMI.png\"
                        {% else %}
                            src=\"../image/Logo_Calculateur_TEMI.png\"
                        {% endif %}{% endif %} {% endif %}{% endif %}{% endif %} width=\"100%\" id=\"navImage\">
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
                                    SOURCES DES DONÉES</a>
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

</div>
</body>
</html>", "TEMImainBundle:Temi:layout.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle/Resources/views/Temi/layout.html.twig");
    }
}
