<?php

/* @TEMImain/Temi/model.html.twig */
class __TwigTemplate_5f1290b8f9f4408809e66aa7e117a5eeb8cddbd49ca187c535df2d714f4656bd extends Twig_Template
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
        $__internal_d50e12bb5ba6d389db60d31c2e34d73a1653ff0ff89d586baff2d0ab93bec824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d50e12bb5ba6d389db60d31c2e34d73a1653ff0ff89d586baff2d0ab93bec824->enter($__internal_d50e12bb5ba6d389db60d31c2e34d73a1653ff0ff89d586baff2d0ab93bec824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TEMImain/Temi/model.html.twig"));

        $__internal_37864bbac005765262d73e9a178bb57eb695fd4bccf847dba3d78df4b7302779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37864bbac005765262d73e9a178bb57eb695fd4bccf847dba3d78df4b7302779->enter($__internal_37864bbac005765262d73e9a178bb57eb695fd4bccf847dba3d78df4b7302779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TEMImain/Temi/model.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>modele</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <!--<link rel=\"stylesheet\" href=\"../css/general.css\">-->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</head>
<body>
<!--<nav class=\"navbar navbar-static-top navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\" navbar-brand\" href=\"./index.html\"><img class=\"img-rounded\" src=\"../image/logo_CERDI_UCA-01.png\">Cerdi</a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"./index.html\">modèle simple</a></li>
            <li><a data-toggle=\"modal\" href=\"#myModal\">graphique</a>
            <li><a id=\"ajoutButt\" href=\"./ajoutPays.html\">ajouter un pays  <span class=\"glyphicon glyphicon-plus-sign\"> </span> </a></li>
        </ul>
    </div>
</nav>-->
<div class=\"container\">
    <h2>Modèle</h2>
    <div>mon pays est :
        <strong id=\"param\">Pays non definit , bonne chance</strong>
    </div>
    <p> Le régime fiscal simulé peut être celui du code général des impôts ou celui du code des investissements.
        Le TEMI est évalué à partir d’un modèle de flux de trésorerie suivant la méthodologie développée par Djankov et
        al.
        (2010). Les différents régimes fiscaux sont appliqués aux données comptables d’une entreprise représentative .
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
                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse25\">Resultat</a>
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
                                        tresorie sans
                                        Impôts</a>

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
                                        tresorie sans
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
                                        tresorie après
                                        Impôts</a>

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
                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse24\">Detail</a>
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse6\">Impot sur
                                        le
                                        revenu
                                        des
                                        creances</a>
                                </h4>
                            </div>
                            <div id=\"collapse6\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"creance\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse7\">Resultat
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse8\">Resultat
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse9\">Impot sur
                                        les
                                        societes</a>
                                </h4>
                            </div>
                            <div id=\"collapse9\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"impotSoc\">lol</div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse10\">Impot sur
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse12\">Impot sur
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
</div>
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"padding:35px 50px;\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"/>
                <h4>Comparaison</h4>
                <p>Vous avez engagé une comparaison entre des entreprises ayant des marges différentes
                </p>
            </div>
            <div class=\"modal-body\" style=\"padding:40px 50px;\">
                <form role=\"form\">
                    <div class=\"form-group\">
                        <label>Veuillez saisir le taux d'actualisation</label>
                        <input type=\"text\" class=\"form-control\" id=\"actualistionCompa\" title=\"actualisation\" value=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Regime fiscale:</label>
                        <select class=\"form-control\" id=\"REGIMECmpta\" title=\"regime fiscale\">
                            <option value=\"gen\">code général des impots</option>
                            <option value=\"nongen\">code des investissements</option>
                        </select>
                    </div>

                    <button type=\"submit\" class=\"btn btn-success btn-block\" id=\"myCont\"
                            onclick=\"debutCompa(\$('#actualistionCompa').val(), \$('#REGIMECmpta').val());\">continuer
                    </button>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-danger btn-default pull-left\" onclick=\"retourModal()\"
                        data-dismiss=\"modal\"><span
                            class=\"glyphicon glyphicon-remove\"/> Annuler
                </button>
            </div>
        </div>

    </div>
</div>


<!--<script src=\"../javascript/model/anotherFunctiun/verification.js\"></script>
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


<script src=\"../javascript/view/directlyChange/ModeleView.js\"></script>-->
</body>
</html>";
        
        $__internal_d50e12bb5ba6d389db60d31c2e34d73a1653ff0ff89d586baff2d0ab93bec824->leave($__internal_d50e12bb5ba6d389db60d31c2e34d73a1653ff0ff89d586baff2d0ab93bec824_prof);

        
        $__internal_37864bbac005765262d73e9a178bb57eb695fd4bccf847dba3d78df4b7302779->leave($__internal_37864bbac005765262d73e9a178bb57eb695fd4bccf847dba3d78df4b7302779_prof);

    }

    public function getTemplateName()
    {
        return "@TEMImain/Temi/model.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>modele</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <!--<link rel=\"stylesheet\" href=\"../css/general.css\">-->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</head>
<body>
<!--<nav class=\"navbar navbar-static-top navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\" navbar-brand\" href=\"./index.html\"><img class=\"img-rounded\" src=\"../image/logo_CERDI_UCA-01.png\">Cerdi</a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"./index.html\">modèle simple</a></li>
            <li><a data-toggle=\"modal\" href=\"#myModal\">graphique</a>
            <li><a id=\"ajoutButt\" href=\"./ajoutPays.html\">ajouter un pays  <span class=\"glyphicon glyphicon-plus-sign\"> </span> </a></li>
        </ul>
    </div>
</nav>-->
<div class=\"container\">
    <h2>Modèle</h2>
    <div>mon pays est :
        <strong id=\"param\">Pays non definit , bonne chance</strong>
    </div>
    <p> Le régime fiscal simulé peut être celui du code général des impôts ou celui du code des investissements.
        Le TEMI est évalué à partir d’un modèle de flux de trésorerie suivant la méthodologie développée par Djankov et
        al.
        (2010). Les différents régimes fiscaux sont appliqués aux données comptables d’une entreprise représentative .
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
                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse25\">Resultat</a>
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
                                        tresorie sans
                                        Impôts</a>

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
                                        tresorie sans
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
                                        tresorie après
                                        Impôts</a>

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
                    <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse24\">Detail</a>
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse6\">Impot sur
                                        le
                                        revenu
                                        des
                                        creances</a>
                                </h4>
                            </div>
                            <div id=\"collapse6\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"creance\"></div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse7\">Resultat
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse8\">Resultat
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse9\">Impot sur
                                        les
                                        societes</a>
                                </h4>
                            </div>
                            <div id=\"collapse9\" class=\"panel-collapse collapse\">
                                <div class=\"panel-body\" id=\"impotSoc\">lol</div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <h4 class=\"panel-title\">
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse10\">Impot sur
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
                                    <a data-toggle=\"collapse\" data-parent=\"#accordion3\" href=\"#collapse12\">Impot sur
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
</div>
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\" style=\"padding:35px 50px;\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\"/>
                <h4>Comparaison</h4>
                <p>Vous avez engagé une comparaison entre des entreprises ayant des marges différentes
                </p>
            </div>
            <div class=\"modal-body\" style=\"padding:40px 50px;\">
                <form role=\"form\">
                    <div class=\"form-group\">
                        <label>Veuillez saisir le taux d'actualisation</label>
                        <input type=\"text\" class=\"form-control\" id=\"actualistionCompa\" title=\"actualisation\" value=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Regime fiscale:</label>
                        <select class=\"form-control\" id=\"REGIMECmpta\" title=\"regime fiscale\">
                            <option value=\"gen\">code général des impots</option>
                            <option value=\"nongen\">code des investissements</option>
                        </select>
                    </div>

                    <button type=\"submit\" class=\"btn btn-success btn-block\" id=\"myCont\"
                            onclick=\"debutCompa(\$('#actualistionCompa').val(), \$('#REGIMECmpta').val());\">continuer
                    </button>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"submit\" class=\"btn btn-danger btn-default pull-left\" onclick=\"retourModal()\"
                        data-dismiss=\"modal\"><span
                            class=\"glyphicon glyphicon-remove\"/> Annuler
                </button>
            </div>
        </div>

    </div>
</div>


<!--<script src=\"../javascript/model/anotherFunctiun/verification.js\"></script>
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


<script src=\"../javascript/view/directlyChange/ModeleView.js\"></script>-->
</body>
</html>", "@TEMImain/Temi/model.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\src\\TEMI\\mainBundle\\Resources\\views\\Temi\\model.html.twig");
    }
}
