<?php

/* TEMImainBundle:Temi:graphForm.html.twig */
class __TwigTemplate_0c04908b3a02e18f8a8d351406707fc67816ee2e1f06f9a7acd08b6dc397eeb4 extends Twig_Template
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
        $__internal_6a3eb0ccf7a8e3fb2f71edf77e5373bba262145b8b4d2548913dfd418739061c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a3eb0ccf7a8e3fb2f71edf77e5373bba262145b8b4d2548913dfd418739061c->enter($__internal_6a3eb0ccf7a8e3fb2f71edf77e5373bba262145b8b4d2548913dfd418739061c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:graphForm.html.twig"));

        $__internal_875bfb1741a7285239038c2af26a854211319704cefd03250acc9adbe0319007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875bfb1741a7285239038c2af26a854211319704cefd03250acc9adbe0319007->enter($__internal_875bfb1741a7285239038c2af26a854211319704cefd03250acc9adbe0319007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:graphForm.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"UTF-8\">
    <title>Comparaison</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
   <!-- <link rel=\"stylesheet\" href=\"../css/general.css\">
    <link rel=\"stylesheet\" href=\"../css/tabCS.css\">-->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
   <!-- <script src=\"../node_modules/chart.js/dist/Chart.min.js\"></script>
    <script src=\"../node_modules/chart.js/dist/Chart.bundle.min.js\"></script>
    <script src=\"../node_modules/excellentexport/dist/excellentexport.js\"></script>-->


    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
</head>
<body>
<!--<nav class=\"navbar navbar-static-top navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\" navbar-brand\" href=\"./index.html\"><img class=\"img-rounded\" src=\"../image/logo_CERDI_UCA-01.png\">Cerdi</a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li><a href=\"./index.html\">modèle simple</a></li>
            <li class=\"active\"><a data-toggle=\"modal\" href=\"./graphForm.html\">graphique</a></li>
            <li><a id=\"ajoutButt\" href=\"./ajoutPays.html\">ajouter un pays  <span class=\"glyphicon glyphicon-plus-sign\"> </span> </a></li>
        </ul>
    </div>
</nav>-->
<div class=\"container\">
    <div class='row '>
        <div class='col-sm-10'>
            <div class='row vertical-form'>
                <div class='col-sm-10'>
                    <div class=\"form-group\">

                        <div id=\"formPays\"></div>
                    </div>
                    <div class=\"form-group\">

                        <label>Taux de marge de l'entreprise:</label>
                        <input type=\"text\" class=\"form-control\" id=\"marge\" title=\"marge\"/>


                    </div>
                </div>
                <div class='col-sm-2 '>
                    <div id=\"addPays\">
                        <button type=\"button\" class=\"btn btn-block\">
                            <div class='row'>

                                <div class='col-sm-8'>
                                    <p>ajouter un <br/>pays</p>
                                </div>
                                <div class='col-sm-2'>
                                    <p/><span class=\"glyphicon glyphicon-plus-sign\"/>
                                </div>
                            </div>
                        </button>
                    </div>
                    <p/>
                    <div id=\"addEnt\">
                        <button type=\"button\" class=\"btn btn-block\">
                            <div class='row'>

                                <div class='col-sm-8'>
                                    <p>ajouter<br/> une <br/>entreprise</p>
                                </div>
                                <div class='col-sm-2'>
                                    <br/>
                                    <span class=\"glyphicon glyphicon-plus-sign\"/>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div id=\"info\"></div>
            <div id=\"graph-container\"></div>
        </div>
        <div class=\"col-sm-2\">
            <div id=\"param\"></div>
        </div>
    </div>
</div>


<!--<script src=\"../javascript/model/anotherFunctiun/verification.js\"></script>
<script src=\"../javascript/model/anotherFunctiun/XMLRequest.js\"></script>
<script src=\"../javascript/model/anotherFunctiun/excel.js\"></script>
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
<script src=\"../javascript/view/directlyChange/graphFormView.js\"></script>-->

</body>
</html>";
        
        $__internal_6a3eb0ccf7a8e3fb2f71edf77e5373bba262145b8b4d2548913dfd418739061c->leave($__internal_6a3eb0ccf7a8e3fb2f71edf77e5373bba262145b8b4d2548913dfd418739061c_prof);

        
        $__internal_875bfb1741a7285239038c2af26a854211319704cefd03250acc9adbe0319007->leave($__internal_875bfb1741a7285239038c2af26a854211319704cefd03250acc9adbe0319007_prof);

    }

    public function getTemplateName()
    {
        return "TEMImainBundle:Temi:graphForm.html.twig";
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
<html lang=\"fr\" xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"UTF-8\">
    <title>Comparaison</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
   <!-- <link rel=\"stylesheet\" href=\"../css/general.css\">
    <link rel=\"stylesheet\" href=\"../css/tabCS.css\">-->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
   <!-- <script src=\"../node_modules/chart.js/dist/Chart.min.js\"></script>
    <script src=\"../node_modules/chart.js/dist/Chart.bundle.min.js\"></script>
    <script src=\"../node_modules/excellentexport/dist/excellentexport.js\"></script>-->


    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
</head>
<body>
<!--<nav class=\"navbar navbar-static-top navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\" navbar-brand\" href=\"./index.html\"><img class=\"img-rounded\" src=\"../image/logo_CERDI_UCA-01.png\">Cerdi</a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li><a href=\"./index.html\">modèle simple</a></li>
            <li class=\"active\"><a data-toggle=\"modal\" href=\"./graphForm.html\">graphique</a></li>
            <li><a id=\"ajoutButt\" href=\"./ajoutPays.html\">ajouter un pays  <span class=\"glyphicon glyphicon-plus-sign\"> </span> </a></li>
        </ul>
    </div>
</nav>-->
<div class=\"container\">
    <div class='row '>
        <div class='col-sm-10'>
            <div class='row vertical-form'>
                <div class='col-sm-10'>
                    <div class=\"form-group\">

                        <div id=\"formPays\"></div>
                    </div>
                    <div class=\"form-group\">

                        <label>Taux de marge de l'entreprise:</label>
                        <input type=\"text\" class=\"form-control\" id=\"marge\" title=\"marge\"/>


                    </div>
                </div>
                <div class='col-sm-2 '>
                    <div id=\"addPays\">
                        <button type=\"button\" class=\"btn btn-block\">
                            <div class='row'>

                                <div class='col-sm-8'>
                                    <p>ajouter un <br/>pays</p>
                                </div>
                                <div class='col-sm-2'>
                                    <p/><span class=\"glyphicon glyphicon-plus-sign\"/>
                                </div>
                            </div>
                        </button>
                    </div>
                    <p/>
                    <div id=\"addEnt\">
                        <button type=\"button\" class=\"btn btn-block\">
                            <div class='row'>

                                <div class='col-sm-8'>
                                    <p>ajouter<br/> une <br/>entreprise</p>
                                </div>
                                <div class='col-sm-2'>
                                    <br/>
                                    <span class=\"glyphicon glyphicon-plus-sign\"/>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div id=\"info\"></div>
            <div id=\"graph-container\"></div>
        </div>
        <div class=\"col-sm-2\">
            <div id=\"param\"></div>
        </div>
    </div>
</div>


<!--<script src=\"../javascript/model/anotherFunctiun/verification.js\"></script>
<script src=\"../javascript/model/anotherFunctiun/XMLRequest.js\"></script>
<script src=\"../javascript/model/anotherFunctiun/excel.js\"></script>
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
<script src=\"../javascript/view/directlyChange/graphFormView.js\"></script>-->

</body>
</html>", "TEMImainBundle:Temi:graphForm.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\src\\TEMI\\mainBundle/Resources/views/Temi/graphForm.html.twig");
    }
}
