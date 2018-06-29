<?php

/* @TEMImain/Temi/layout.html.twig */
class __TwigTemplate_2ebaa25abfe9c36bd338a0c8a6e3b48f481db1b1e9e7ba9f9d96cd79c33e30dd extends Twig_Template
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_81953f2_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/81953f2_logo_CERDI_UCA-01_1.png");
            // line 10
            echo "    <link rel=\"shortcut icon\"
          type=\"image/x-icon\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\">
    ";
        } else {
            // asset "81953f2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_81953f2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/81953f2.png");
            // line 10
            echo "    <link rel=\"shortcut icon\"
          type=\"image/x-icon\" href=\"";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c9335ea_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/c9335ea_general_1.css");
            // line 16
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
    ";
        } else {
            // asset "c9335ea"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_c9335ea") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/c9335ea.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_81953f2_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/81953f2_logo_CERDI_UCA-01_1.png");
            // line 39
            echo "                        <img class=\"img-rounded\" id=\"cerdi\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
                        Cerdi
                        ";
        } else {
            // asset "81953f2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_81953f2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/81953f2.png");
            echo "                        <img class=\"img-rounded\" id=\"cerdi\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "temi_platform_home")) {
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "temi_platform_graph")) {
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
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "temi_platform_add")) {
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
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_show")) {
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "html", null, true);
            echo "</a>
                        </li>
                        <li ";
            // line 66
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_security_logout")) {
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
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) {
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
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_security_login")) {
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5c63501_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/5c63501_logo_Calculateur_TEMI_1.png");
            // line 136
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"
                         width=\"100%\" id=\"navImage\">
                ";
        } else {
            // asset "5c63501"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5c63501") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/5c63501.png");
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
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
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) {
            // line 254
            echo "    ";
        } else {
            // line 255
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_confirmed")) {
                // line 256
                echo "        ";
            } else {
                // line 257
                echo "            ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_show")) {
                    // line 258
                    echo "            ";
                } else {
                    // line 259
                    echo "                ";
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_profile_edit")) {
                        // line 260
                        echo "                ";
                    } else {
                        // line 261
                        echo "                    ";
                        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_change_password")) {
                            // line 262
                            echo "                    ";
                        } else {
                            // line 263
                            echo "                        ";
                            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_security_login")) {
                                // line 264
                                echo "                        ";
                            } else {
                                // line 265
                                echo "                            <div class=\"footer\">
                                <p>nombre de visiteur: ";
                                // line 266
                                echo twig_escape_filter($this->env, (isset($context["numVisit"]) ? $context["numVisit"] : null), "html", null, true);
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
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "        ";
    }

    // line 243
    public function block_body($context, array $blocks = array())
    {
        // line 244
        echo "                ";
    }

    // line 249
    public function block_js($context, array $blocks = array())
    {
        // line 250
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@TEMImain/Temi/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 250,  493 => 249,  489 => 244,  486 => 243,  482 => 6,  479 => 5,  472 => 269,  467 => 268,  459 => 266,  456 => 265,  453 => 264,  450 => 263,  447 => 262,  444 => 261,  441 => 260,  438 => 259,  435 => 258,  432 => 257,  429 => 256,  426 => 255,  423 => 254,  421 => 253,  418 => 252,  416 => 249,  410 => 245,  408 => 243,  302 => 139,  286 => 136,  282 => 135,  232 => 87,  223 => 81,  217 => 80,  210 => 76,  204 => 75,  201 => 74,  191 => 67,  185 => 66,  180 => 64,  175 => 62,  169 => 61,  166 => 60,  164 => 59,  161 => 58,  153 => 53,  146 => 52,  144 => 51,  136 => 48,  131 => 46,  125 => 45,  120 => 42,  104 => 39,  100 => 38,  96 => 37,  82 => 25,  79 => 18,  65 => 16,  61 => 15,  57 => 13,  51 => 11,  48 => 10,  41 => 11,  38 => 10,  34 => 9,  30 => 7,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@TEMImain/Temi/layout.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle\\Resources\\views\\Temi\\layout.html.twig");
    }
}
