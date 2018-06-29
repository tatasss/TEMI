<?php

/* @TEMImain/Temi/model.html.twig */
class __TwigTemplate_067e5bd6eaca408e00131b06c5348d44d2902ebe68d3273046053efa27304298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TEMImainBundle:Temi:layout.html.twig", "@TEMImain/Temi/model.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TEMImain/Temi/model.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TEMImain/Temi/model.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "Modèle
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h2>MODÈLE</h2>
    <div>pays selectionné :
        <strong id=\"param\">Pays non definit , bonne chance</strong>
    </div>
    <p> Le régime fiscal simulé peut être celui du Code général des impôts ou celui du Code des investissements.
        Le TEMI est évalué à partir d’un modèle de flux de trésorerie suivant la méthodologie développée par
        Djankov et
        al.
        (2010). Les différents régimes fiscaux sont appliqués aux données comptables d’une entreprise
        représentative.
        Cette entreprise est supposée être localisée dans la plus grande ville du pays, employer 60 salariés
        et vendre la totalité de sa production sur le marché local. La charge fiscale supportée par la société
        est
        calculée sur cinq ans et intègre quatre impôts (CFE, IS, IMF et IRCM). L’entreprise est modélisée
        d’après
        les coefficients de Djankov (2010). Ces coefficients sont multipliés par le PNB/tête des pays, dont les
        chiffres datent de 2014 et sont issus des World Development Indicators (Banque Mondiale). Le modèle
        ainsi
        construit permet de connaître le TEMI selon la législation de chaque pays. </p>
    <div class=\"panel-group\" id=\"accordion\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse25\">Résultat</a>
                </h4>
            </div>
            <div id=\"collapse25\" class=\"panel-collapse collapse in\">
                <div class=\"panel-body\">
                    <div class=\"panel-group\" id=\"accordion2\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse15\">Taux
                                        effectifs
                                        moyen
                                        d'imposition</a>

                                </h4>
                            </div>
                            <div id=\"collapse15\" class=\"panel-collapse collapse in\">
                                <div class=\"panel-body\" id=\"fluxeffmoyC\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse16\">Flux
                                        de
                                        trésorie sans
                                        impôts</a>

                                </h4>
                            </div>
                            <div id=\"collapse16\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"fluxTresSaImp\">

                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse17\">Flux
                                        de
                                        trésorie sans
                                        IS/IMF</a>
                                </h4>
                            </div>
                            <div id=\"collapse17\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"fluxTresSaISIMF\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse18\">Flux
                                        de
                                        trésorie après
                                        impôts</a>
                                </h4>
                            </div>
                            <div id=\"collapse18\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"fluxTresAvImpot\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse19\">Taux
                                        de
                                        rendement interne sans
                                        Impôts</a>
                                </h4>
                            </div>
                            <div id=\"collapse19\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"tauxRendInterneSi\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse20\">Taux
                                        de
                                        rendement interne sans
                                        IS/IMF</a>
                                </h4>
                            </div>
                            <div id=\"collapse20\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"tauxRendInterneSISIMF\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse21\">Taux
                                        de
                                        rendement interne
                                        après Impôts</a>
                                </h4>
                            </div>
                            <div id=\"collapse21\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"tauxRendInterneAi\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse22\">Taux
                                        effectifs
                                        marginaux
                                        d'imposition après IS/IMF</a>
                                </h4>
                            </div>
                            <div id=\"collapse22\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"tauxEffMargImpApIsImf\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse23\">Taux
                                        effectifs
                                        marginaux
                                        d'imposition après Impôts</a>
                                </h4>
                            </div>
                            <div id=\"collapse23\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"tauxEffMargImpApImp\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse24\">Détail</a>
                </h4>
            </div>
            <div id=\"collapse24\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                    <div class=\"panel-group\" id=\"accordion3\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\"
                                       href=\"#collapse1\">Investissement</a>
                                </h4>
                            </div>

                            <div id=\"collapse1\" class=\"panel-collapse collapse in\">
                                <div class=\"panel-body\" id=\"invest\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\"
                                       href=\"#collapse2\">Amortissement</a>
                                </h4>
                            </div>
                            <div id=\"collapse2\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"amortization\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse3\">Amortissement
                                        exceptionnel</a>
                                </h4>
                            </div>
                            <div id=\"collapse3\" class=\"panel-collapse collapse \">
                                <div class=\"panel-body\" id=\"ammortExp\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse4\">Taxe
                                        sur
                                        la
                                        valeur
                                        ajoutée
                                        pétrole</a>
                                </h4>
                            </div>
                            <div id=\"collapse4\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"pet\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse5\">Contribution
                                        forfaitaire
                                        employeurs</a>
                                </h4>
                            </div>
                            <div id=\"collapse5\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"emp\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse6\">Impôt
                                        sur
                                        le
                                        revenu
                                        des
                                        créances</a>
                                </h4>
                            </div>
                            <div id=\"collapse6\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"creance\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse7\">Résultat
                                        comptable</a>
                                </h4>
                            </div>
                            <div id=\"collapse7\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"compta\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse8\">Résultat
                                        imposable</a>
                                </h4>
                            </div>
                            <div id=\"collapse8\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"impot\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse9\">Impôt
                                        sur
                                        les
                                        sociétés</a>
                                </h4>
                            </div>
                            <div id=\"collapse9\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"impotSoc\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse10\">Impôt
                                        sur
                                        les
                                        minimum
                                        forfaitaires</a>
                                </h4>
                            </div>
                            <div id=\"collapse10\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"impotfor\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\"
                                       href=\"#collapse11\">IS/IMF</a>
                                </h4>
                            </div>
                            <div id=\"collapse11\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"ISIMF\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse12\">Impôt
                                        sur
                                        le
                                        revenu des
                                        valeurs mobiliéres</a>
                                </h4>
                            </div>
                            <div id=\"collapse12\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"irvm\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse13\">
                                        Actualisation</a>
                                </h4>
                            </div>
                            <div id=\"collapse13\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"topic\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse14\">Impôts
                                        et
                                        taxes</a>
                                </h4>
                            </div>
                            <div id=\"collapse14\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\">
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-6\">Courants</div>
                                                <div class=\"col-sm-4\"></div>
                                                <div class=\"col-sm-2\">VAN</div>
                                            </div>
                                        </div>
                                        <div class=\"panel-body\" id=\"impTaxeC\"></div>
                                    </div>
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-6\">Actualise</div>
                                                <div class=\"col-sm-4\"></div>
                                                <div class=\"col-sm-2\">Somme</div>
                                            </div>
                                        </div>
                                        <div class=\"panel-body\" id=\"impTaxeA\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
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
                                onclick=\"debutCompa(\$('#actualistionCompa').val(), \$('#REGIMECmpta').val());\">Continuer
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 410
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 411
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "78afcc5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78afcc5_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78afcc5_XMLRequest_1.js");
            // line 428
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78afcc5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78afcc5_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78afcc5_verification_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78afcc5_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78afcc5_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78afcc5_myMath_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78afcc5_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78afcc5_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78afcc5_Ref_4.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78afcc5_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78afcc5_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78afcc5_bootstrapView_5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78afcc5_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78afcc5_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78afcc5_manufact_6.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78afcc5_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78afcc5_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78afcc5_modelManager_7.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78afcc5_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78afcc5_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78afcc5_model_8.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78afcc5_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78afcc5_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78afcc5_graphGenerator_9.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78afcc5_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78afcc5_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78afcc5_ViewGenerator_10.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78afcc5_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78afcc5_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78afcc5_data_11.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78afcc5_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78afcc5_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78afcc5_PaysListe_12.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78afcc5_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78afcc5_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78afcc5_script_13.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "78afcc5_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78afcc5_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78afcc5_ModeleView_14.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "78afcc5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_78afcc5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/78afcc5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@TEMImain/Temi/model.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 428,  493 => 411,  484 => 410,  71 => 6,  62 => 5,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TEMImainBundle:Temi:layout.html.twig\" %}
{% block title %}
Modèle
{% endblock %}
{% block body %}
    <h2>MODÈLE</h2>
    <div>pays selectionné :
        <strong id=\"param\">Pays non definit , bonne chance</strong>
    </div>
    <p> Le régime fiscal simulé peut être celui du Code général des impôts ou celui du Code des investissements.
        Le TEMI est évalué à partir d’un modèle de flux de trésorerie suivant la méthodologie développée par
        Djankov et
        al.
        (2010). Les différents régimes fiscaux sont appliqués aux données comptables d’une entreprise
        représentative.
        Cette entreprise est supposée être localisée dans la plus grande ville du pays, employer 60 salariés
        et vendre la totalité de sa production sur le marché local. La charge fiscale supportée par la société
        est
        calculée sur cinq ans et intègre quatre impôts (CFE, IS, IMF et IRCM). L’entreprise est modélisée
        d’après
        les coefficients de Djankov (2010). Ces coefficients sont multipliés par le PNB/tête des pays, dont les
        chiffres datent de 2014 et sont issus des World Development Indicators (Banque Mondiale). Le modèle
        ainsi
        construit permet de connaître le TEMI selon la législation de chaque pays. </p>
    <div class=\"panel-group\" id=\"accordion\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse25\">Résultat</a>
                </h4>
            </div>
            <div id=\"collapse25\" class=\"panel-collapse collapse in\">
                <div class=\"panel-body\">
                    <div class=\"panel-group\" id=\"accordion2\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse15\">Taux
                                        effectifs
                                        moyen
                                        d'imposition</a>

                                </h4>
                            </div>
                            <div id=\"collapse15\" class=\"panel-collapse collapse in\">
                                <div class=\"panel-body\" id=\"fluxeffmoyC\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse16\">Flux
                                        de
                                        trésorie sans
                                        impôts</a>

                                </h4>
                            </div>
                            <div id=\"collapse16\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"fluxTresSaImp\">

                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse17\">Flux
                                        de
                                        trésorie sans
                                        IS/IMF</a>
                                </h4>
                            </div>
                            <div id=\"collapse17\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"fluxTresSaISIMF\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse18\">Flux
                                        de
                                        trésorie après
                                        impôts</a>
                                </h4>
                            </div>
                            <div id=\"collapse18\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"fluxTresAvImpot\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse19\">Taux
                                        de
                                        rendement interne sans
                                        Impôts</a>
                                </h4>
                            </div>
                            <div id=\"collapse19\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"tauxRendInterneSi\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse20\">Taux
                                        de
                                        rendement interne sans
                                        IS/IMF</a>
                                </h4>
                            </div>
                            <div id=\"collapse20\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"tauxRendInterneSISIMF\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse21\">Taux
                                        de
                                        rendement interne
                                        après Impôts</a>
                                </h4>
                            </div>
                            <div id=\"collapse21\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"tauxRendInterneAi\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse22\">Taux
                                        effectifs
                                        marginaux
                                        d'imposition après IS/IMF</a>
                                </h4>
                            </div>
                            <div id=\"collapse22\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"tauxEffMargImpApIsImf\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse23\">Taux
                                        effectifs
                                        marginaux
                                        d'imposition après Impôts</a>
                                </h4>
                            </div>
                            <div id=\"collapse23\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"tauxEffMargImpApImp\"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <h4 class=\"panel-title\">
                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse24\">Détail</a>
                </h4>
            </div>
            <div id=\"collapse24\" class=\"panel-collapse collapse\">
                <div class=\"panel-body\">
                    <div class=\"panel-group\" id=\"accordion3\">
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\"
                                       href=\"#collapse1\">Investissement</a>
                                </h4>
                            </div>

                            <div id=\"collapse1\" class=\"panel-collapse collapse in\">
                                <div class=\"panel-body\" id=\"invest\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\"
                                       href=\"#collapse2\">Amortissement</a>
                                </h4>
                            </div>
                            <div id=\"collapse2\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"amortization\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse3\">Amortissement
                                        exceptionnel</a>
                                </h4>
                            </div>
                            <div id=\"collapse3\" class=\"panel-collapse collapse \">
                                <div class=\"panel-body\" id=\"ammortExp\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse4\">Taxe
                                        sur
                                        la
                                        valeur
                                        ajoutée
                                        pétrole</a>
                                </h4>
                            </div>
                            <div id=\"collapse4\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"pet\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse5\">Contribution
                                        forfaitaire
                                        employeurs</a>
                                </h4>
                            </div>
                            <div id=\"collapse5\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"emp\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse6\">Impôt
                                        sur
                                        le
                                        revenu
                                        des
                                        créances</a>
                                </h4>
                            </div>
                            <div id=\"collapse6\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"creance\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse7\">Résultat
                                        comptable</a>
                                </h4>
                            </div>
                            <div id=\"collapse7\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"compta\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse8\">Résultat
                                        imposable</a>
                                </h4>
                            </div>
                            <div id=\"collapse8\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"impot\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse9\">Impôt
                                        sur
                                        les
                                        sociétés</a>
                                </h4>
                            </div>
                            <div id=\"collapse9\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"impotSoc\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse10\">Impôt
                                        sur
                                        les
                                        minimum
                                        forfaitaires</a>
                                </h4>
                            </div>
                            <div id=\"collapse10\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"impotfor\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\"
                                       href=\"#collapse11\">IS/IMF</a>
                                </h4>
                            </div>
                            <div id=\"collapse11\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"ISIMF\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse12\">Impôt
                                        sur
                                        le
                                        revenu des
                                        valeurs mobiliéres</a>
                                </h4>
                            </div>
                            <div id=\"collapse12\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"irvm\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse13\">
                                        Actualisation</a>
                                </h4>
                            </div>
                            <div id=\"collapse13\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"topic\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse14\">Impôts
                                        et
                                        taxes</a>
                                </h4>
                            </div>
                            <div id=\"collapse14\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\">
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-6\">Courants</div>
                                                <div class=\"col-sm-4\"></div>
                                                <div class=\"col-sm-2\">VAN</div>
                                            </div>
                                        </div>
                                        <div class=\"panel-body\" id=\"impTaxeC\"></div>
                                    </div>
                                    <div class=\"panel panel-default\">
                                        <div class=\"panel-heading\">
                                            <div class=\"row\">
                                                <div class=\"col-sm-6\">Actualise</div>
                                                <div class=\"col-sm-4\"></div>
                                                <div class=\"col-sm-2\">Somme</div>
                                            </div>
                                        </div>
                                        <div class=\"panel-body\" id=\"impTaxeA\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
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
                                onclick=\"debutCompa(\$('#actualistionCompa').val(), \$('#REGIMECmpta').val());\">Continuer
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
{% endblock %}
{% block js %}
    {% javascripts
        'bundles/temimain/javascript/model/anotherFunctiun/XMLRequest.js'
        'bundles/temimain/javascript/model/anotherFunctiun/verification.js'
        'bundles/temimain/javascript/model/anotherFunctiun/myMath.js'
        'bundles/temimain/javascript/model/anotherFunctiun/Ref.js'
        'bundles/temimain/javascript/view/viewGenerator/bootstrapView.js'
        'bundles/temimain/javascript/manufacturing/manufact.js'
        'bundles/temimain/javascript/model/modelManager.js'
        'bundles/temimain/javascript/model/model.js'
        'bundles/temimain/javascript/view/viewGenerator/graphGenerator.js'
        'bundles/temimain/javascript/view/viewGenerator/ViewGenerator.js'
        'bundles/temimain/javascript/data/data.js'
        'bundles/temimain/javascript/data/PaysListe.js'
        'bundles/temimain/javascript/start/script.js'
        'bundles/temimain/javascript/view/directlyChange/ModeleView.js'

    %}
        <script src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}
{%  endblock %}", "@TEMImain/Temi/model.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle\\Resources\\views\\Temi\\model.html.twig");
    }
}
