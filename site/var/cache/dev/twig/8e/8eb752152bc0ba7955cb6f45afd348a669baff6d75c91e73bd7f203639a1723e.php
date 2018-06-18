<?php

/* TEMImainBundle:Temi:model.html.twig */
class __TwigTemplate_87cfba8372bd84551c6f069cd7cee6825e401d9e0fc734c5d546d4ba8bd45512 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TEMImainBundle:Temi:layout.html.twig", "TEMImainBundle:Temi:model.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:model.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:model.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h2>Modèle</h2>
    <div>pays selectionné :
        <strong id=\"param\">Pays non definit , bonne chance</strong>
    </div>
    <p> Le régime fiscal simulé peut être celui du Code général des impôts ou celui du Code des investissements.
        Le TEMI est évalué à partir d’un modèle de flux de trésorerie suivant la méthodologie développée par Djankov et
        al.
        (2010). Les différents régimes fiscaux sont appliqués aux données comptables d’une entreprise représentative.
        Cette entreprise est supposée être localisée dans la plus grande ville du pays, employer 60 salariés
        et vendre la totalité de sa production sur le marché local. La charge fiscale supportée par la société est
        calculée sur cinq ans et intègre quatre impôts (CFE, IS, IMF et IRCM). L’entreprise est modélisée d’après
        les coefficients de Djankov (2010). Ces coefficients sont multipliés par le PNB/tête des pays, dont les
        chiffres datent de 2014 et sont issus des World Development Indicators (Banque Mondiale). Le modèle ainsi
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse16\">Flux de
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse17\">Flux de
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse18\">Flux de
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse19\">Taux de
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse20\">Taux de
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse21\">Taux de
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse4\">Taxe sur
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse6\">Impôt sur
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse9\">Impôt sur
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse10\">Impôt sur
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse12\">Impôt sur
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse14\">Impôts et
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 349
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 350
        echo "
    <script src=\"../javascript/model/anotherFunctiun/verification.js\"></script>
    <script src=\"../javascript/model/anotherFunctiun/XMLRequest.js\"></script>
    <script src=\"../javascript/model/anotherFunctiun/myMath.js\"></script>
    <script src=\"../javascript/model/anotherFunctiun/Ref.js\"></script>
    <script src=\"../javascript/view/viewGenerator/bootstrapView.js\"></script>
    <script src=\"../javascript/manufacturing/manufact.js\"></script>
    <script src=\"../javascript/model/modelManager.js\"></script>
    <script src=\"../javascript/view/viewGenerator/graphGenerator.js\"></script>
    <script src=\"../javascript/view/viewGenerator/ViewGenerator.js\"></script>
    <script src=\"../javascript/model/model.js\"></script>
    <script src=\"../javascript/data/PaysListe.js\"></script>
    <script src=\"../javascript/data/data.js\"></script>
    <script src=\"../javascript/start/script.js\"></script>
    <script src=\"../javascript/view/directlyChange/ModeleView.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "TEMImainBundle:Temi:model.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 350,  405 => 349,  50 => 3,  41 => 2,  11 => 1,);
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
{% block body %}
    <h2>Modèle</h2>
    <div>pays selectionné :
        <strong id=\"param\">Pays non definit , bonne chance</strong>
    </div>
    <p> Le régime fiscal simulé peut être celui du Code général des impôts ou celui du Code des investissements.
        Le TEMI est évalué à partir d’un modèle de flux de trésorerie suivant la méthodologie développée par Djankov et
        al.
        (2010). Les différents régimes fiscaux sont appliqués aux données comptables d’une entreprise représentative.
        Cette entreprise est supposée être localisée dans la plus grande ville du pays, employer 60 salariés
        et vendre la totalité de sa production sur le marché local. La charge fiscale supportée par la société est
        calculée sur cinq ans et intègre quatre impôts (CFE, IS, IMF et IRCM). L’entreprise est modélisée d’après
        les coefficients de Djankov (2010). Ces coefficients sont multipliés par le PNB/tête des pays, dont les
        chiffres datent de 2014 et sont issus des World Development Indicators (Banque Mondiale). Le modèle ainsi
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse16\">Flux de
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse17\">Flux de
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse18\">Flux de
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse19\">Taux de
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse20\">Taux de
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion2\" href=\"#collapse21\">Taux de
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse4\">Taxe sur
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse6\">Impôt sur
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse9\">Impôt sur
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse10\">Impôt sur
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse12\">Impôt sur
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse14\">Impôts et
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
{% endblock %}
{% block js %}

    <script src=\"../javascript/model/anotherFunctiun/verification.js\"></script>
    <script src=\"../javascript/model/anotherFunctiun/XMLRequest.js\"></script>
    <script src=\"../javascript/model/anotherFunctiun/myMath.js\"></script>
    <script src=\"../javascript/model/anotherFunctiun/Ref.js\"></script>
    <script src=\"../javascript/view/viewGenerator/bootstrapView.js\"></script>
    <script src=\"../javascript/manufacturing/manufact.js\"></script>
    <script src=\"../javascript/model/modelManager.js\"></script>
    <script src=\"../javascript/view/viewGenerator/graphGenerator.js\"></script>
    <script src=\"../javascript/view/viewGenerator/ViewGenerator.js\"></script>
    <script src=\"../javascript/model/model.js\"></script>
    <script src=\"../javascript/data/PaysListe.js\"></script>
    <script src=\"../javascript/data/data.js\"></script>
    <script src=\"../javascript/start/script.js\"></script>
    <script src=\"../javascript/view/directlyChange/ModeleView.js\"></script>
{% endblock %}", "TEMImainBundle:Temi:model.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle/Resources/views/Temi/model.html.twig");
    }
}
