<?php

/* TEMImainBundle:Temi:index.html.twig */
class __TwigTemplate_e76e8d4ce0ea1d31e1af00231c12c18fbd491e101b02e41b14e7573b4b0b0b9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TEMImainBundle:Temi:layout.html.twig", "TEMImainBundle:Temi:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TEMImainBundle:Temi:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo " acceuil ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"form-group\">
        <div id=\"formPays\">
        </div>
    </div>
    <div class=\"form-group\">
        <label>Régime fiscal:</label>

        <select class=\"form-control\" id=\"REGIME\" title=\"regime Fiscale\">
            <option value=\"gen\">Code général des impôts</option>
            <option value=\"nongen\">Code des investissements</option>
        </select>
    </div>
    <div class=\"form-group\">
        <label>Taux d'actualisation:</label>
        <input type=\"text\" class=\"form-control\" id=\"actualisation\" title=\"actualisation\"
               placeholder=\"Veuillez entrer un taux d'actualisation\"/>
    </div>
    <div class=\"form-group\">
        <label>Taux de marge de l'entreprise:</label>
        <input type=\"text\" class=\"form-control\" id=\"marge\" title=\"marge\"
               placeholder=\"Veuillez entrer un taux de marge\"/>
    </div>
    <button type=\"submit\" class=\"btn btn-default\" onclick=\"validateForm()\">Valider</button>
    <button type=\"submit\" class=\"btn btn-default hide\" id=\"myBtn\" onclick=\"showModal()\" disabled>Demarrer Comparaison
    </button>
    <div>
        <br/>
        <div id=\"result\"></div>
    </div>
";
    }

    // line 34
    public function block_js($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5300c02_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5300c02_index_1.js");
            // line 53
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5300c02_XMLRequest_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5300c02_verification_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5300c02_myMath_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5300c02_Ref_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5300c02_bootstrapView_6.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5300c02_manufact_7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5300c02_startingLand_8.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5300c02_modelManager_9.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5300c02_model_10.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5300c02_graphGenerator_11.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5300c02_ViewGenerator_12.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5300c02_data_13.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5300c02_PaysListe_14.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5300c02_script_15.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "5300c02"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/5300c02.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 55
        echo "

    <script>
        ";
        // line 58
        if ((twig_length_filter($this->env, (isset($context["tabLand"]) ? $context["tabLand"] : null)) == 0)) {
            // line 59
            echo "            sessionStorage.clear();
            createDebutPAys();
            land=new Land();
            //window.location.reload(true);
        ";
        }
        // line 64
        echo "
        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabLand"]) ? $context["tabLand"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
            // line 66
            echo "        land.ajouterPays(
            maker.land(
                '";
            // line 68
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["land"], "code", array())), "html", null, true);
            echo "',
                '";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["land"], "name", array()), "html", null, true);
            echo "',
                maker.impot(";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "impot", array()), "cfe", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "impot", array()), "isImp", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "impot", array()), "imf", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "impot", array()), "irvm", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "impot", array()), "irc", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "impot", array()), "tvaPetrole", array()), "html", null, true);
            echo "),
                maker.ammortissement(";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "ammort", array()), "construction", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "ammort", array()), "equipement", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "ammort", array()), "coefdegressif", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "ammort", array()), "camion", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "ammort", array()), "matInformatique", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "ammort", array()), "matBureau", array()), "html", null, true);
            echo "),
                maker.investir(
                    maker.impotPays(
                            ";
            // line 74
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "duree", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "duree", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 75
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "taux", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "taux", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 76
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "reducexo", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "reducexo", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo "),
                    maker.isImpotPays(
                            ";
            // line 78
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "IsInv", array()), "duree", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "isInv", array()), "duree", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 79
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "IsInv", array()), "taux", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "isInv", array()), "taux", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 80
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "IsInv", array()), "reducexo", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "isInv", array()), "reducexo", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 81
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "IsInv", array()), "ammortTauxEx", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "isInv", array()), "ammortTauxEx", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 82
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "IsInv", array()), "ammortLimit", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "isInv", array()), "ammortLimit", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo "),
                    maker.impotPays(
                            ";
            // line 84
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "duree", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "duree", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 85
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "taux", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "taux", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 86
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "reducexo", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "reducexo", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo "),
                    maker.impotPays(
                            ";
            // line 88
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "duree", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "duree", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 89
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "taux", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "taux", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 90
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "reducexo", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "reducexo", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo "),
                    maker.impotPays(
                            ";
            // line 92
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "duree", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "duree", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 93
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "taux", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "taux", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 94
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "reducexo", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "reducexo", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo "),
                    ";
            // line 95
            if (($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()) != null)) {
                // line 96
                echo "                    maker.impotPays(
                            ";
                // line 97
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "duree", array()) != null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "duree", array()), "html", null, true);
                } else {
                    echo "null";
                }
                echo ",
                            ";
                // line 98
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "taux", array()) != null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "taux", array()), "html", null, true);
                } else {
                    echo "null";
                }
                echo ",
                            ";
                // line 99
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "reducexo", array()) != null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "reducexo", array()), "html", null, true);
                } else {
                    echo "null";
                }
                echo "),
                    ";
            } else {
                // line 101
                echo "                    maker.impotPays(null,null,null),
                    ";
            }
            // line 103
            echo "                ),
                '";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["land"], "descriptionDerog", array()), "html", null, true);
            echo "',
                '";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "source", array()), "nomCodeInvest", array()), "html", null, true);
            echo " <br/> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "source", array()), "nomRegimeInvest", array()), "html", null, true);
            echo " <br/> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "source", array()), "nomZonneRegime", array()), "html", null, true);
            echo "'
            ));
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "
    </script>

    <script src=\"../javascript/view/directlyChange/ViewManufacturing.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "TEMImainBundle:Temi:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 108,  422 => 105,  418 => 104,  415 => 103,  411 => 101,  402 => 99,  394 => 98,  386 => 97,  383 => 96,  381 => 95,  373 => 94,  365 => 93,  357 => 92,  348 => 90,  340 => 89,  332 => 88,  323 => 86,  315 => 85,  307 => 84,  298 => 82,  290 => 81,  282 => 80,  274 => 79,  266 => 78,  257 => 76,  249 => 75,  241 => 74,  225 => 71,  211 => 70,  207 => 69,  203 => 68,  199 => 66,  195 => 65,  192 => 64,  185 => 59,  183 => 58,  178 => 55,  80 => 53,  75 => 35,  72 => 34,  39 => 4,  36 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TEMImainBundle:Temi:index.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle/Resources/views/Temi/index.html.twig");
    }
}
