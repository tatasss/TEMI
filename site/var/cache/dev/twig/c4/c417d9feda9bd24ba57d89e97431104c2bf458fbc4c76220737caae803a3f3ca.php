<?php

/* @TEMImain/Temi/ajoutPays.html.twig */
class __TwigTemplate_0eaf3b761ff2c48b40c2e76c551e0e3896e5b6f52737a8797816b1a3bb808108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TEMImainBundle:Temi:layout.html.twig", "@TEMImain/Temi/ajoutPays.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TEMImain/Temi/ajoutPays.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TEMImain/Temi/ajoutPays.html.twig"));

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

        echo " Ajout Pays";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ajouter un pays</h1>
    <p>Pour creer un nouveau pays, veuillez remplir le formulaire ci-dessous</p>
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
                            <label>Nom :</label>
                            <input type=\"text\" class=\"form-control\" id=\"nomPays\" title=\"nomPays\" placeholder=\"Veuillez saisir le nom du pays\"/>
                        </div>
                        <div id=\"errorNom\"></div>
                        <div class=\"form-group\">
                            <label>Code ISO3 :</label>
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
                            <input type=\"text\" class=\"form-control\" id=\"codePays\" title=\"codePays\" placeholder=\"Veuillez saisir le code ISO3 du pays\"/>
                        </div>
                        <div id=\"errorCode\"></div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>Code Général des Impôts</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <p><strong>Taux d'impôt :</strong></p>
                                    </div>
                                    <div class=\"panel-body\">
                                        <div class=\"form-group\">
                                            <label>Contributions forfaitaires employeurs :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"cfeImpPays\" title=\"cfeImpPays\" placeholder=\"Veuillez saisir le taux des CFE du pays\"/>
                                        </div>
                                        <div id=\"errorCFEImp\"></div>
                                        <div class=\"form-group\">
                                            <label>Impôt société :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"isImpPays\" title=\"isImpPays\" placeholder=\"Veuillez saisir le taux de l'IS du pays\"/>
                                        </div>
                                        <div id=\"errorISImp\"></div>
                                        <div class=\"form-group\">
                                            <label>Impôt minimum forfaitaire :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"imfImpPays\" title=\"imfImpPays\" placeholder=\"Veuillez saisir le taux de l'IMF du pays\"/>
                                        </div>
                                        <div id=\"errorIMFImp\"></div>
                                        <div class=\"form-group\">
                                            <label>Impôt sur le revenu de la valeur mobilières :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"irvmImpPays\"
                                                   title=\"irvmImpPays\" placeholder=\"Veuillez saisir le taux de l'IRVM du pays\"/>
                                        </div>
                                        <div id=\"errorIRVMImp\"></div>
                                        <div class=\"form-group\">
                                            <label>Impôt sur les revenus des créances :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"ircImpPays\" title=\"ircImpPays\" placeholder=\"Veuillez saisir le taux de l'IRC du pays\"/>
                                        </div>
                                        <div id=\"errorIRCImp\"></div>
                                        <div class=\"form-group\">
                                            <label>Taxe sur la valeur ajoutée du pétrole :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tvaPetroleImpPays\"
                                                   title=\"tvaPetroleImpPays\" placeholder=\"Veuillez saisir le taux de la TVA sur le pétrole du pays\"/>
                                        </div>
                                        <div id=\"errorTVAPETImp\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <p><strong>Durée d'amortissement :</strong></p>
                                    </div>
                                    <div class=\"panel-body\">
                                        <div class=\"form-group\">
                                            <label>Construction :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"cfeAmmortPays\"
                                                   title=\"cfeAmmortPays\" placeholder=\"Veuillez saisir la durée d'amortissement des constructions\"/>
                                        </div>
                                        <div id=\"errorCFEAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>Equipement :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"isAmmortPays\"
                                                   title=\"isAmmortPays\" placeholder=\"Veuillez saisir la durée d'amortissement des équipements\"/>
                                        </div>
                                        <div id=\"errorISAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>Camion :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"imfAmmortPays\"
                                                   title=\"imfAmmortPays\" placeholder=\"Veuillez saisir la durée d'amortissement des achats des camions\"/>
                                        </div>
                                        <div id=\"errorIMFAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>Matériel informatique :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"irvmAmmortPays\"
                                                   title=\"irvmAmmortPays\" placeholder=\"Veuillez saisir la durée d'amortissement des achats des matériaux informatiques\"/>
                                        </div>
                                        <div id=\"errorIRVMAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>Matériel de bureau :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"ircAmmortPays\"
                                                   title=\"ircAmmortPays\" placeholder=\"Veuillez saisir la durée d'amortissement des achats des matériaux de bureaux\"/>
                                        </div>
                                        <div id=\"errorIRCAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>Coefficient Dégressif :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tvaPetroleAmmortPays\"
                                                   title=\"tvaPetroleAmmortPays\" placeholder=\"Veuillez saisir le coefficient dégressif\"/>
                                        </div>
                                        <div id=\"errorTVAPETAmmort\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>Code des investissements</h3>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Contributions forfaitaire employeurs :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeCFEInvestPays\"
                                                   title=\"dureeCFEInvestPays\" placeholder=\"Veuillez saisir la durée du taux réduit du CFE dû à l'investissement\"/>
                                        </div>
                                        <div id=\"dureeCFEError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxCFEInvestPays\"
                                                   title=\"tauxCFEInvestPays\" placeholder=\"Veuillez saisir le taux réduit du CFE dû à l'investissement\"/>
                                        </div>
                                        <div id=\"tauxCFEError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default borderhide\">
                            <div class=\"panel-heading\">
                                <p>Impôt société :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeISInvestPays\"
                                                   title=\"dureeISInvestPays\" placeholder=\"Veuillez saisir la durée du taux réduit de l'IS dû à l'investissement\"/>
                                        </div>
                                        <div id=\"dureeISError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxISInvestPays\"
                                                   title=\"tauxISInvestPays\" placeholder=\"Veuillez saisir le taux réduit de l'IS dû à l'investissement\"/>
                                        </div>
                                        <div id=\"tauxISError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default \">
                            <div class=\"panel-heading\">
                                <p>Impôt minimum forfaitaire :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeIMFInvestPays\"
                                                   title=\"dureeIMFInvestPays\" placeholder=\"Veuillez saisir la durée du taux réduit de l'IMF dû à l'investissement\"/>
                                        </div>
                                        <div id=\"dureeIMFError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxIMFInvestPays\"
                                                   title=\"tauxIMFInvestPays\" placeholder=\"Veuillez saisir le taux réduit de l'IMF dû à l'investissement\"/>
                                        </div>
                                        <div id=\"tauxIMFError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>Code des investissements</h3>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Impôt sur les revenus des valeurs mobilières :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeIRVMInvestPays\"
                                                   title=\"dureeIRVMInvestPays\" placeholder=\"Veuillez saisir la durée du taux réduit de l'IRVM dû à l'investissement\"/>
                                        </div>
                                        <div id=\"dureeIRVMError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxIRVMInvestPays\"
                                                   title=\"tauxIRVMInvestPays\" placeholder=\"Veuillez saisir le taux réduit de l'IRVM dû à l'investissement\"/>
                                        </div>
                                        <div id=\"tauxIRVMError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Impôt sur le revenu des créances :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeIRCInvestPays\"
                                                   title=\"dureeIRCInvestPays\" placeholder=\"Veuillez saisir la durée du taux réduit de l'IRC dû à l'investissement\"/>
                                        </div>
                                        <div id=\"dureeIRCError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxIRCInvestPays\"
                                                   title=\"tauxIRCInvestPays\" placeholder=\"Veuillez saisir le taux réduit de l'IRC dû à l'investissement\"/>
                                        </div>
                                        <div id=\"tauxIRCError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>Code des investissements</h3>
                        <div class=\"form-group\">
                            <label>Description des dispositions :</label>
                            <textarea class=\"form-control\" rows=\"5\" id=\"descDispoInvestPays\"
                                      title=\"descDispoInvestPays\" >Veuillez saisir une description sur les différentes dispositions dérogatoires </textarea>
                        </div>
                        <div id=\"descDispoError\"></div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Régime d'investissement :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Nom du code des investissements :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"nomCodeInvestPays\"
                                                   title=\"nomCodeInvestPays\" placeholder=\"Veuillez saisir le nom du code des investissements étudié\"/>
                                        </div>
                                        <div id=\"nomCodeInvestError\"></div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Nom du régime :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"nomRegInvestPays\"
                                                   title=\"nomRegInvestPays\" placeholder=\"Veuillez saisir le nom du régime étudié\"/>
                                        </div>
                                        <div id=\"nomRegInvestError\"></div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Zone :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"zonneInvestPays\"
                                                   title=\"zonneInvestPays\" placeholder=\"Veuillez saisir le nom de la zone du régime étudié\"/>
                                        </div>
                                        <div id=\"zonneInvestError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type=\"submit\" onclick=\"ajout.addLand()\">Ajouter le pays</button>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 328
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 329
        echo "<script src=\"../javascript/model/anotherFunctiun/verification.js\"></script>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@TEMImain/Temi/ajoutPays.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 329,  402 => 328,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
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
{% block title %} Ajout Pays{% endblock %}
{% block body %}
    <h1>Ajouter un pays</h1>
    <p>Pour creer un nouveau pays, veuillez remplir le formulaire ci-dessous</p>
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
                            <label>Nom :</label>
                            <input type=\"text\" class=\"form-control\" id=\"nomPays\" title=\"nomPays\" placeholder=\"Veuillez saisir le nom du pays\"/>
                        </div>
                        <div id=\"errorNom\"></div>
                        <div class=\"form-group\">
                            <label>Code ISO3 :</label>
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
                            <input type=\"text\" class=\"form-control\" id=\"codePays\" title=\"codePays\" placeholder=\"Veuillez saisir le code ISO3 du pays\"/>
                        </div>
                        <div id=\"errorCode\"></div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>Code Général des Impôts</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <p><strong>Taux d'impôt :</strong></p>
                                    </div>
                                    <div class=\"panel-body\">
                                        <div class=\"form-group\">
                                            <label>Contributions forfaitaires employeurs :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"cfeImpPays\" title=\"cfeImpPays\" placeholder=\"Veuillez saisir le taux des CFE du pays\"/>
                                        </div>
                                        <div id=\"errorCFEImp\"></div>
                                        <div class=\"form-group\">
                                            <label>Impôt société :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"isImpPays\" title=\"isImpPays\" placeholder=\"Veuillez saisir le taux de l'IS du pays\"/>
                                        </div>
                                        <div id=\"errorISImp\"></div>
                                        <div class=\"form-group\">
                                            <label>Impôt minimum forfaitaire :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"imfImpPays\" title=\"imfImpPays\" placeholder=\"Veuillez saisir le taux de l'IMF du pays\"/>
                                        </div>
                                        <div id=\"errorIMFImp\"></div>
                                        <div class=\"form-group\">
                                            <label>Impôt sur le revenu de la valeur mobilières :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"irvmImpPays\"
                                                   title=\"irvmImpPays\" placeholder=\"Veuillez saisir le taux de l'IRVM du pays\"/>
                                        </div>
                                        <div id=\"errorIRVMImp\"></div>
                                        <div class=\"form-group\">
                                            <label>Impôt sur les revenus des créances :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"ircImpPays\" title=\"ircImpPays\" placeholder=\"Veuillez saisir le taux de l'IRC du pays\"/>
                                        </div>
                                        <div id=\"errorIRCImp\"></div>
                                        <div class=\"form-group\">
                                            <label>Taxe sur la valeur ajoutée du pétrole :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tvaPetroleImpPays\"
                                                   title=\"tvaPetroleImpPays\" placeholder=\"Veuillez saisir le taux de la TVA sur le pétrole du pays\"/>
                                        </div>
                                        <div id=\"errorTVAPETImp\"></div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <p><strong>Durée d'amortissement :</strong></p>
                                    </div>
                                    <div class=\"panel-body\">
                                        <div class=\"form-group\">
                                            <label>Construction :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"cfeAmmortPays\"
                                                   title=\"cfeAmmortPays\" placeholder=\"Veuillez saisir la durée d'amortissement des constructions\"/>
                                        </div>
                                        <div id=\"errorCFEAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>Equipement :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"isAmmortPays\"
                                                   title=\"isAmmortPays\" placeholder=\"Veuillez saisir la durée d'amortissement des équipements\"/>
                                        </div>
                                        <div id=\"errorISAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>Camion :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"imfAmmortPays\"
                                                   title=\"imfAmmortPays\" placeholder=\"Veuillez saisir la durée d'amortissement des achats des camions\"/>
                                        </div>
                                        <div id=\"errorIMFAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>Matériel informatique :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"irvmAmmortPays\"
                                                   title=\"irvmAmmortPays\" placeholder=\"Veuillez saisir la durée d'amortissement des achats des matériaux informatiques\"/>
                                        </div>
                                        <div id=\"errorIRVMAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>Matériel de bureau :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"ircAmmortPays\"
                                                   title=\"ircAmmortPays\" placeholder=\"Veuillez saisir la durée d'amortissement des achats des matériaux de bureaux\"/>
                                        </div>
                                        <div id=\"errorIRCAmmort\"></div>
                                        <div class=\"form-group\">
                                            <label>Coefficient Dégressif :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tvaPetroleAmmortPays\"
                                                   title=\"tvaPetroleAmmortPays\" placeholder=\"Veuillez saisir le coefficient dégressif\"/>
                                        </div>
                                        <div id=\"errorTVAPETAmmort\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>Code des investissements</h3>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Contributions forfaitaire employeurs :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeCFEInvestPays\"
                                                   title=\"dureeCFEInvestPays\" placeholder=\"Veuillez saisir la durée du taux réduit du CFE dû à l'investissement\"/>
                                        </div>
                                        <div id=\"dureeCFEError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxCFEInvestPays\"
                                                   title=\"tauxCFEInvestPays\" placeholder=\"Veuillez saisir le taux réduit du CFE dû à l'investissement\"/>
                                        </div>
                                        <div id=\"tauxCFEError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default borderhide\">
                            <div class=\"panel-heading\">
                                <p>Impôt société :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeISInvestPays\"
                                                   title=\"dureeISInvestPays\" placeholder=\"Veuillez saisir la durée du taux réduit de l'IS dû à l'investissement\"/>
                                        </div>
                                        <div id=\"dureeISError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxISInvestPays\"
                                                   title=\"tauxISInvestPays\" placeholder=\"Veuillez saisir le taux réduit de l'IS dû à l'investissement\"/>
                                        </div>
                                        <div id=\"tauxISError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default \">
                            <div class=\"panel-heading\">
                                <p>Impôt minimum forfaitaire :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeIMFInvestPays\"
                                                   title=\"dureeIMFInvestPays\" placeholder=\"Veuillez saisir la durée du taux réduit de l'IMF dû à l'investissement\"/>
                                        </div>
                                        <div id=\"dureeIMFError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxIMFInvestPays\"
                                                   title=\"tauxIMFInvestPays\" placeholder=\"Veuillez saisir le taux réduit de l'IMF dû à l'investissement\"/>
                                        </div>
                                        <div id=\"tauxIMFError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>Code des investissements</h3>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Impôt sur les revenus des valeurs mobilières :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeIRVMInvestPays\"
                                                   title=\"dureeIRVMInvestPays\" placeholder=\"Veuillez saisir la durée du taux réduit de l'IRVM dû à l'investissement\"/>
                                        </div>
                                        <div id=\"dureeIRVMError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxIRVMInvestPays\"
                                                   title=\"tauxIRVMInvestPays\" placeholder=\"Veuillez saisir le taux réduit de l'IRVM dû à l'investissement\"/>
                                        </div>
                                        <div id=\"tauxIRVMError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Impôt sur le revenu des créances :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"dureeIRCInvestPays\"
                                                   title=\"dureeIRCInvestPays\" placeholder=\"Veuillez saisir la durée du taux réduit de l'IRC dû à l'investissement\"/>
                                        </div>
                                        <div id=\"dureeIRCError\"></div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"tauxIRCInvestPays\"
                                                   title=\"tauxIRCInvestPays\" placeholder=\"Veuillez saisir le taux réduit de l'IRC dû à l'investissement\"/>
                                        </div>
                                        <div id=\"tauxIRCError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>Code des investissements</h3>
                        <div class=\"form-group\">
                            <label>Description des dispositions :</label>
                            <textarea class=\"form-control\" rows=\"5\" id=\"descDispoInvestPays\"
                                      title=\"descDispoInvestPays\" >Veuillez saisir une description sur les différentes dispositions dérogatoires </textarea>
                        </div>
                        <div id=\"descDispoError\"></div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Régime d'investissement :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Nom du code des investissements :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"nomCodeInvestPays\"
                                                   title=\"nomCodeInvestPays\" placeholder=\"Veuillez saisir le nom du code des investissements étudié\"/>
                                        </div>
                                        <div id=\"nomCodeInvestError\"></div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Nom du régime :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"nomRegInvestPays\"
                                                   title=\"nomRegInvestPays\" placeholder=\"Veuillez saisir le nom du régime étudié\"/>
                                        </div>
                                        <div id=\"nomRegInvestError\"></div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Zone :</label>
                                            <input type=\"text\" class=\"form-control\" id=\"zonneInvestPays\"
                                                   title=\"zonneInvestPays\" placeholder=\"Veuillez saisir le nom de la zone du régime étudié\"/>
                                        </div>
                                        <div id=\"zonneInvestError\"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type=\"submit\" onclick=\"ajout.addLand()\">Ajouter le pays</button>
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
<script src=\"../javascript/view/directlyChange/PaysAddView.js\"></script>
{% endblock %}", "@TEMImain/Temi/ajoutPays.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle\\Resources\\views\\Temi\\ajoutPays.html.twig");
    }
}
