<?php

/* TEMImainBundle:Temi:ajoutPays.html.twig */
class __TwigTemplate_ec8e2f62fe33f8dbdb15c33920ed1d0219ac3cd4584a3982d032be0faefd6cc8 extends Twig_Template
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
        $__internal_043ad5cf781e55df812d35560ebd6c5bcc3a43732fe0baf58bdfc509b04a4463 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_043ad5cf781e55df812d35560ebd6c5bcc3a43732fe0baf58bdfc509b04a4463->enter($__internal_043ad5cf781e55df812d35560ebd6c5bcc3a43732fe0baf58bdfc509b04a4463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:ajoutPays.html.twig"));

        $__internal_ff30ba2262435665fd3d83c37fd161b27996c1d60b72bc1b651b01961e513982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff30ba2262435665fd3d83c37fd161b27996c1d60b72bc1b651b01961e513982->enter($__internal_ff30ba2262435665fd3d83c37fd161b27996c1d60b72bc1b651b01961e513982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:ajoutPays.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>ajouter un Pays</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
   <link rel=\"stylesheet\" href=\"../css/general.css\">
    <link rel=\"stylesheet\" href=\"../css/tabCS.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"../node_modules/chart.js/dist/Chart.min.js\"></script>
    <script src=\"../node_modules/chart.js/dist/Chart.bundle.min.js\"></script>
    <script src=\"../node_modules/excellentexport/dist/excellentexport.js\"></script>
    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
</head>
<body>
<nav class=\"navbar navbar-static-top navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\" navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
        echo "\"><img class=\"img-rounded\" src=\"../image/logo_CERDI_UCA-01.png\">Cerdi</a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
        echo "\">modèle simple</a></li>
            <li><a data-toggle=\"modal\" href=\"#myModal\">graphique</a></li>
            <li class=\"active\"><a id=\"ajoutButt\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_add");
        echo "\">ajouter un pays  <span class=\"glyphicon glyphicon-plus-sign\"> </span> </a></li>
        </ul>
    </div>
</nav>

<div class=\"container\">
    <h1>Ajouter un pays</h1>
    <p>Pour creer un nouveau pays, veuillez remplir le formulaire si dessous</p>
    <div id=\"formError\"></div>
    <div id=\"myCarousel\" class=\"carousel slide w3-container borderhide\" data-interval=\"false\">
        <ol class=\"carousel-indicators lol\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\">
            </li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\">
            </li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\">
            </li>
            <li data-target=\"#myCarousel\" data-slide-to=\"3\">
            </li>
            <li data-target=\"#myCarousel\" data-slide-to=\"4\">
            </li>
        </ol>
        <div class=\" borderhide\">
            <div class=\" borderhide\" id=\"mapage\">
                <div class=\"carousel-inner borderhide\">
                    <div class=\"item active borderhide\">
                        <h3>Général</h3>
                        <div class=\"form-group\">
                            <label>nom</label>
                            <input type=\"text\" class=\"form-control\" id=\"nomPays\" title=\"nomPays\"/>
                        </div>
                        <div id=\"errorNom\"></div>
                        <div class=\"form-group\">
                            <label>code ISO3</label>
                            <p>Le code ISO est une codification internationale créé par l'International Standardization
                                Organization (ISO)
                                qui attribue un code unique de trois lettres à toute devise de la planète pour éviter
                                toute
                                ambiguïté dans
                                leurs identifications et leurs désignations. Les deux premières lettres correspondent au
                                nom du
                                pays, la
                                dernière au nom de la monnaie nationale. En cas de changement de monnaie nationale,
                                seule la
                                dernière lettre
                                varie.</p>
                            <input type=\"text\" class=\"form-control\" id=\"codePays\" title=\"codePays\"/>
                        </div>
                        <div id=\"errorCode\"></div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>code Général des Impots</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <p><strong>taux d'impot :</strong></p>
                                    </div>
                                    <div class=\"panel-body\">
                                        <div class=\"form-group\">
                                            <label>cotisation foncière des entreprises</label>
                                            <input type=\"text\" class=\"form-control\" id=\"cfeImpPays\" title=\"cfeImpPays\"/>
                                        </div>
                                        <div id=\"errorCFEImp\"></div>
                                        <div class=\"form-group\">
                                            <label>impôts société</label>
                                            <input type=\"text\" class=\"form-control\" id=\"isImpPays\" title=\"isImpPays\"/>
                                        </div>
                                        <div id=\"errorISImp\"></div>
                                        <div class=\"form-group\">
                                            <label>impôts minimum forfaitaire</label>
                                            <input type=\"text\" class=\"form-control\" id=\"imfImpPays\" title=\"imfImpPays\"/>
                                        </div>
                                        <div id=\"errorIMFImp\"></div>
                                        <div class=\"form-group\">
                                            <label>impôts sur le revenu de la valeur mobilières</label>
                                            <input type=\"text\" class=\"form-control\" id=\"irvmImpPays\"
                                                   title=\"irvmImpPays\"/>
                                        </div>
                                        <div id=\"errorIRVMImp\"></div>
                                        <div class=\"form-group\">
                                            <label>impôts sur les revenu des creances</label>
                                            <input type=\"text\" class=\"form-control\" id=\"ircImpPays\" title=\"ircImpPays\"/>
                                        </div>
                                        <div id=\"errorIRCImp\"></div>
                                        <div class=\"form-group\">
                                            <label>taxe sur la valeur ajoutée du pétrole</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tvaPetroleImpPays\"
                                                   title=\"tvaPetroleImpPays\"/>
                                        </div>
                                        <div id=\"errorTVAPETImp\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <p><strong>duree d'ammortissement :</strong></p>
                                    </div>
                                    <div class=\"panel-body\">
                                        <div class=\"form-group\">
                                            <label>construction</label>
                                            <input type=\"text\" class=\"form-control\" id=\"cfeAmmortPays\"
                                                   title=\"cfeAmmortPays\"/>
                                        </div>
                                        <div id=\"errorCFEAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>equipement</label>
                                            <input type=\"text\" class=\"form-control\" id=\"isAmmortPays\"
                                                   title=\"isAmmortPays\"/>
                                        </div>
                                        <div id=\"errorISAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label> camion</label>
                                            <input type=\"text\" class=\"form-control\" id=\"imfAmmortPays\"
                                                   title=\"imfAmmortPays\"/>
                                        </div>
                                        <div id=\"errorIMFAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>matériel informatique</label>
                                            <input type=\"text\" class=\"form-control\" id=\"irvmAmmortPays\"
                                                   title=\"irvmAmmortPays\"/>
                                        </div>
                                        <div id=\"errorIRVMAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>matériel de bureau</label>
                                            <input type=\"text\" class=\"form-control\" id=\"ircAmmortPays\"
                                                   title=\"ircAmmortPays\"/>
                                        </div>
                                        <div id=\"errorIRCAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>coefficient Degressif</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tvaPetroleAmmortPays\"
                                                   title=\"tvaPetroleAmmortPays\"/>
                                        </div>
                                        <div id=\"errorTVAPETAmmort\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>code des investissements</h3>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>cfe</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>duree</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeCFEInvestPays\"
                                                   title=\"dureeCFEInvestPays\"/>
                                        </div>
                                        <div id=\"dureeCFEError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>taux</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxCFEInvestPays\"
                                                   title=\"tauxCFEInvestPays\"/>
                                        </div>
                                        <div id=\"tauxCFEError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default borderhide\">
                            <div class=\"panel-heading\">
                                <p>IS</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>duree</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeISInvestPays\"
                                                   title=\"dureeISInvestPays\"/>
                                        </div>
                                        <div id=\"dureeISError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>taux</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxISInvestPays\"
                                                   title=\"tauxISInvestPays\"/>
                                        </div>
                                        <div id=\"tauxISError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default \">
                            <div class=\"panel-heading\">
                                <p>IMF</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>duree</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeIMFInvestPays\"
                                                   title=\"dureeIMFInvestPays\"/>
                                        </div>
                                        <div id=\"dureeIMFError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>taux</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxIMFInvestPays\"
                                                   title=\"tauxIMFInvestPays\"/>
                                        </div>
                                        <div id=\"tauxIMFError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>code des investissements</h3>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>IRVM</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>duree</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeIRVMInvestPays\"
                                                   title=\"dureeIRVMInvestPays\"/>
                                        </div>
                                        <div id=\"dureeIRVMError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>taux</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxIRVMInvestPays\"
                                                   title=\"tauxIRVMInvestPays\"/>
                                        </div>
                                        <div id=\"tauxIRVMError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>IRC</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>duree</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeIRCInvestPays\"
                                                   title=\"dureeIRCInvestPays\"/>
                                        </div>
                                        <div id=\"dureeIRCError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>taux</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxIRCInvestPays\"
                                                   title=\"tauxIRCInvestPays\"/>
                                        </div>
                                        <div id=\"tauxIRCError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>code des investissements</h3>
                        <div class=\"form-group\">
                            <label>description des disposition</label>
                            <textarea class=\"form-control\" rows=\"5\" id=\"descDispoInvestPays\"
                                      title=\"descDispoInvestPays\"> </textarea>
                        </div>
                        <div id=\"descDispoError\"></div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>regime d'investissement</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>nom du code</label>
                                            <input type=\"text\" class=\"form-control\" id=\"nomCodeInvestPays\"
                                                   title=\"nomCodeInvestPays\"/>
                                        </div>
                                        <div id=\"nomCodeInvestError\"></div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>nom du régime</label>
                                            <input type=\"text\" class=\"form-control\" id=\"nomRegInvestPays\"
                                                   title=\"nomRegInvestPays\"/>
                                        </div>
                                        <div id=\"nomRegInvestError\"></div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>zone</label>
                                            <input type=\"text\" class=\"form-control\" id=\"zonneInvestPays\"
                                                   title=\"zonneInvestPays\"/>
                                        </div>
                                        <div id=\"zonneInvestError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type=\"submit\" onclick=\"ajout.addLand()\"> ajouter le pays</button>
                    </div>
                </div>
            </div>
            <div class=\" borderhide\">
                <button class=\"left\" href=\"#myCarousel\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"> </span>
                    avant
                </button>
                <button id=\"suivant\" class=\"right\" href=\"#myCarousel\" data-slide=\"next\">
                    suivant
                    <span class=\"glyphicon glyphicon-chevron-right\"> </span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
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
                        <input type=\"text\" class=\"form-control\" id=\"actualistionCompa\" title=\"actualisation\"
                               value=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Regime fiscale:</label>
                        <select class=\"form-control\" id=\"REGIMECmpta\" title=\"regime fiscale\">
                            <option value=\"gen\">code général des impots</option>
                            <option value=\"nongen\">code des investissements</option>
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
                        data-dismiss=\"modal\"><span
                            class=\"glyphicon glyphicon-remove\"/> Annuler
                </button>
            </div>
        </div>
    </div>
</div>
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
<script src=\"../javascript/view/directlyChange/PaysAddView.js\"></script>
</body>
</html>";
        
        $__internal_043ad5cf781e55df812d35560ebd6c5bcc3a43732fe0baf58bdfc509b04a4463->leave($__internal_043ad5cf781e55df812d35560ebd6c5bcc3a43732fe0baf58bdfc509b04a4463_prof);

        
        $__internal_ff30ba2262435665fd3d83c37fd161b27996c1d60b72bc1b651b01961e513982->leave($__internal_ff30ba2262435665fd3d83c37fd161b27996c1d60b72bc1b651b01961e513982_prof);

    }

    public function getTemplateName()
    {
        return "TEMImainBundle:Temi:ajoutPays.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 27,  54 => 25,  48 => 22,  25 => 1,);
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
    <title>ajouter un Pays</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
   <link rel=\"stylesheet\" href=\"../css/general.css\">
    <link rel=\"stylesheet\" href=\"../css/tabCS.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"../node_modules/chart.js/dist/Chart.min.js\"></script>
    <script src=\"../node_modules/chart.js/dist/Chart.bundle.min.js\"></script>
    <script src=\"../node_modules/excellentexport/dist/excellentexport.js\"></script>
    <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
</head>
<body>
<nav class=\"navbar navbar-static-top navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\" navbar-brand\" href=\"{{ path('temi_platform_home') }}\"><img class=\"img-rounded\" src=\"../image/logo_CERDI_UCA-01.png\">Cerdi</a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li><a href=\"{{ path('temi_platform_home') }}\">modèle simple</a></li>
            <li><a data-toggle=\"modal\" href=\"#myModal\">graphique</a></li>
            <li class=\"active\"><a id=\"ajoutButt\" href=\"{{ path('temi_platform_add') }}\">ajouter un pays  <span class=\"glyphicon glyphicon-plus-sign\"> </span> </a></li>
        </ul>
    </div>
</nav>

<div class=\"container\">
    <h1>Ajouter un pays</h1>
    <p>Pour creer un nouveau pays, veuillez remplir le formulaire si dessous</p>
    <div id=\"formError\"></div>
    <div id=\"myCarousel\" class=\"carousel slide w3-container borderhide\" data-interval=\"false\">
        <ol class=\"carousel-indicators lol\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\">
            </li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\">
            </li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\">
            </li>
            <li data-target=\"#myCarousel\" data-slide-to=\"3\">
            </li>
            <li data-target=\"#myCarousel\" data-slide-to=\"4\">
            </li>
        </ol>
        <div class=\" borderhide\">
            <div class=\" borderhide\" id=\"mapage\">
                <div class=\"carousel-inner borderhide\">
                    <div class=\"item active borderhide\">
                        <h3>Général</h3>
                        <div class=\"form-group\">
                            <label>nom</label>
                            <input type=\"text\" class=\"form-control\" id=\"nomPays\" title=\"nomPays\"/>
                        </div>
                        <div id=\"errorNom\"></div>
                        <div class=\"form-group\">
                            <label>code ISO3</label>
                            <p>Le code ISO est une codification internationale créé par l'International Standardization
                                Organization (ISO)
                                qui attribue un code unique de trois lettres à toute devise de la planète pour éviter
                                toute
                                ambiguïté dans
                                leurs identifications et leurs désignations. Les deux premières lettres correspondent au
                                nom du
                                pays, la
                                dernière au nom de la monnaie nationale. En cas de changement de monnaie nationale,
                                seule la
                                dernière lettre
                                varie.</p>
                            <input type=\"text\" class=\"form-control\" id=\"codePays\" title=\"codePays\"/>
                        </div>
                        <div id=\"errorCode\"></div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>code Général des Impots</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <p><strong>taux d'impot :</strong></p>
                                    </div>
                                    <div class=\"panel-body\">
                                        <div class=\"form-group\">
                                            <label>cotisation foncière des entreprises</label>
                                            <input type=\"text\" class=\"form-control\" id=\"cfeImpPays\" title=\"cfeImpPays\"/>
                                        </div>
                                        <div id=\"errorCFEImp\"></div>
                                        <div class=\"form-group\">
                                            <label>impôts société</label>
                                            <input type=\"text\" class=\"form-control\" id=\"isImpPays\" title=\"isImpPays\"/>
                                        </div>
                                        <div id=\"errorISImp\"></div>
                                        <div class=\"form-group\">
                                            <label>impôts minimum forfaitaire</label>
                                            <input type=\"text\" class=\"form-control\" id=\"imfImpPays\" title=\"imfImpPays\"/>
                                        </div>
                                        <div id=\"errorIMFImp\"></div>
                                        <div class=\"form-group\">
                                            <label>impôts sur le revenu de la valeur mobilières</label>
                                            <input type=\"text\" class=\"form-control\" id=\"irvmImpPays\"
                                                   title=\"irvmImpPays\"/>
                                        </div>
                                        <div id=\"errorIRVMImp\"></div>
                                        <div class=\"form-group\">
                                            <label>impôts sur les revenu des creances</label>
                                            <input type=\"text\" class=\"form-control\" id=\"ircImpPays\" title=\"ircImpPays\"/>
                                        </div>
                                        <div id=\"errorIRCImp\"></div>
                                        <div class=\"form-group\">
                                            <label>taxe sur la valeur ajoutée du pétrole</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tvaPetroleImpPays\"
                                                   title=\"tvaPetroleImpPays\"/>
                                        </div>
                                        <div id=\"errorTVAPETImp\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <p><strong>duree d'ammortissement :</strong></p>
                                    </div>
                                    <div class=\"panel-body\">
                                        <div class=\"form-group\">
                                            <label>construction</label>
                                            <input type=\"text\" class=\"form-control\" id=\"cfeAmmortPays\"
                                                   title=\"cfeAmmortPays\"/>
                                        </div>
                                        <div id=\"errorCFEAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>equipement</label>
                                            <input type=\"text\" class=\"form-control\" id=\"isAmmortPays\"
                                                   title=\"isAmmortPays\"/>
                                        </div>
                                        <div id=\"errorISAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label> camion</label>
                                            <input type=\"text\" class=\"form-control\" id=\"imfAmmortPays\"
                                                   title=\"imfAmmortPays\"/>
                                        </div>
                                        <div id=\"errorIMFAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>matériel informatique</label>
                                            <input type=\"text\" class=\"form-control\" id=\"irvmAmmortPays\"
                                                   title=\"irvmAmmortPays\"/>
                                        </div>
                                        <div id=\"errorIRVMAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>matériel de bureau</label>
                                            <input type=\"text\" class=\"form-control\" id=\"ircAmmortPays\"
                                                   title=\"ircAmmortPays\"/>
                                        </div>
                                        <div id=\"errorIRCAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>coefficient Degressif</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tvaPetroleAmmortPays\"
                                                   title=\"tvaPetroleAmmortPays\"/>
                                        </div>
                                        <div id=\"errorTVAPETAmmort\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>code des investissements</h3>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>cfe</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>duree</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeCFEInvestPays\"
                                                   title=\"dureeCFEInvestPays\"/>
                                        </div>
                                        <div id=\"dureeCFEError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>taux</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxCFEInvestPays\"
                                                   title=\"tauxCFEInvestPays\"/>
                                        </div>
                                        <div id=\"tauxCFEError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default borderhide\">
                            <div class=\"panel-heading\">
                                <p>IS</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>duree</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeISInvestPays\"
                                                   title=\"dureeISInvestPays\"/>
                                        </div>
                                        <div id=\"dureeISError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>taux</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxISInvestPays\"
                                                   title=\"tauxISInvestPays\"/>
                                        </div>
                                        <div id=\"tauxISError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default \">
                            <div class=\"panel-heading\">
                                <p>IMF</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>duree</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeIMFInvestPays\"
                                                   title=\"dureeIMFInvestPays\"/>
                                        </div>
                                        <div id=\"dureeIMFError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>taux</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxIMFInvestPays\"
                                                   title=\"tauxIMFInvestPays\"/>
                                        </div>
                                        <div id=\"tauxIMFError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>code des investissements</h3>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>IRVM</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>duree</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeIRVMInvestPays\"
                                                   title=\"dureeIRVMInvestPays\"/>
                                        </div>
                                        <div id=\"dureeIRVMError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>taux</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxIRVMInvestPays\"
                                                   title=\"tauxIRVMInvestPays\"/>
                                        </div>
                                        <div id=\"tauxIRVMError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>IRC</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>duree</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeIRCInvestPays\"
                                                   title=\"dureeIRCInvestPays\"/>
                                        </div>
                                        <div id=\"dureeIRCError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>taux</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxIRCInvestPays\"
                                                   title=\"tauxIRCInvestPays\"/>
                                        </div>
                                        <div id=\"tauxIRCError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>code des investissements</h3>
                        <div class=\"form-group\">
                            <label>description des disposition</label>
                            <textarea class=\"form-control\" rows=\"5\" id=\"descDispoInvestPays\"
                                      title=\"descDispoInvestPays\"> </textarea>
                        </div>
                        <div id=\"descDispoError\"></div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>regime d'investissement</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>nom du code</label>
                                            <input type=\"text\" class=\"form-control\" id=\"nomCodeInvestPays\"
                                                   title=\"nomCodeInvestPays\"/>
                                        </div>
                                        <div id=\"nomCodeInvestError\"></div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>nom du régime</label>
                                            <input type=\"text\" class=\"form-control\" id=\"nomRegInvestPays\"
                                                   title=\"nomRegInvestPays\"/>
                                        </div>
                                        <div id=\"nomRegInvestError\"></div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>zone</label>
                                            <input type=\"text\" class=\"form-control\" id=\"zonneInvestPays\"
                                                   title=\"zonneInvestPays\"/>
                                        </div>
                                        <div id=\"zonneInvestError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type=\"submit\" onclick=\"ajout.addLand()\"> ajouter le pays</button>
                    </div>
                </div>
            </div>
            <div class=\" borderhide\">
                <button class=\"left\" href=\"#myCarousel\" data-slide=\"prev\">
                    <span class=\"glyphicon glyphicon-chevron-left\"> </span>
                    avant
                </button>
                <button id=\"suivant\" class=\"right\" href=\"#myCarousel\" data-slide=\"next\">
                    suivant
                    <span class=\"glyphicon glyphicon-chevron-right\"> </span>
                </button>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\">
    <div class=\"modal-dialog\">
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
                        <input type=\"text\" class=\"form-control\" id=\"actualistionCompa\" title=\"actualisation\"
                               value=\"\">
                    </div>
                    <div class=\"form-group\">
                        <label>Regime fiscale:</label>
                        <select class=\"form-control\" id=\"REGIMECmpta\" title=\"regime fiscale\">
                            <option value=\"gen\">code général des impots</option>
                            <option value=\"nongen\">code des investissements</option>
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
                        data-dismiss=\"modal\"><span
                            class=\"glyphicon glyphicon-remove\"/> Annuler
                </button>
            </div>
        </div>
    </div>
</div>
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
<script src=\"../javascript/view/directlyChange/PaysAddView.js\"></script>
</body>
</html>", "TEMImainBundle:Temi:ajoutPays.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\src\\TEMI\\mainBundle/Resources/views/Temi/ajoutPays.html.twig");
    }
}