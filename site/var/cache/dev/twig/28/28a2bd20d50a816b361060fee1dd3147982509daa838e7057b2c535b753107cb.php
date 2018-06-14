<?php

/* @TEMImain/Temi/graphForm.html.twig */
class __TwigTemplate_253f6ad0c973fe4e752b75724c564178b23f69b902c16d40079524bc9a217e06 extends Twig_Template
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
        $__internal_657ff5cdeceef7a1b83f763e2302cc3addcd77a18a7685a5bf726651bc962fb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_657ff5cdeceef7a1b83f763e2302cc3addcd77a18a7685a5bf726651bc962fb7->enter($__internal_657ff5cdeceef7a1b83f763e2302cc3addcd77a18a7685a5bf726651bc962fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TEMImain/Temi/graphForm.html.twig"));

        $__internal_5312c62fe6b308138bbecede2cddbe256bf693e2e76c7a71700521b0faaadbd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5312c62fe6b308138bbecede2cddbe256bf693e2e76c7a71700521b0faaadbd5->enter($__internal_5312c62fe6b308138bbecede2cddbe256bf693e2e76c7a71700521b0faaadbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TEMImain/Temi/graphForm.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta charset=\"UTF-8\">
    <title>Comparaison</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
   <link rel=\"stylesheet\" href=\"../css/general.css\">
    <link rel=\"stylesheet\" href=\"../css/tabCS.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"../node_modules/chart.js/dist/Chart.min.js\"></script>
    <script src=\"../node_modules/chart.js/dist/Chart.bundle.min.js\"></script>
    <script src=\"../node_modules/excellentexport/dist/excellentexport.js\"></script>


    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
</head>
<body>
<nav class=\"navbar navbar-static-top navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\" navbar-brand\" href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
        echo "\"><img class=\"img-rounded\" src=\"../image/logo_CERDI_UCA-01.png\">Cerdi</a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
        echo "\">Modèle</a></li>
            <li class=\"active\"><a data-toggle=\"modal\" href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_graph");
        echo "\">Graphique</a></li>
            <li><a id=\"ajoutButt\" href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
        echo "\">Ajouter un pays  <span class=\"glyphicon glyphicon-plus-sign\"> </span> </a></li>
        </ul>
    </div>
</nav>
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
                        <input type=\"text\" class=\"form-control\" id=\"marge\" title=\"marge\" placeholder=\"Ajouter un taux de marge\"/>
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
                                    <p><span class=\"glyphicon glyphicon-plus-sign\"> </span></p>
                                </div>
                            </div>
                        </button>
                    </div>
                    <p>

                    </p>
                    <div id=\"addEnt\">
                        <button type=\"button\" class=\"btn btn-block\">
                            <div class='row'>
                                <div class='col-sm-8'>
                                    <p>ajouter<br/> une <br/>entreprise</p>
                                </div>
                                <div class='col-sm-2'>
                                    <br/>
                                    <span class=\"glyphicon glyphicon-plus-sign\"> </span>
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


<script src=\"../javascript/model/anotherFunctiun/verification.js\"></script>
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
<script src=\"../javascript/view/directlyChange/graphFormView.js\"></script>

</body>
</html>";
        
        $__internal_657ff5cdeceef7a1b83f763e2302cc3addcd77a18a7685a5bf726651bc962fb7->leave($__internal_657ff5cdeceef7a1b83f763e2302cc3addcd77a18a7685a5bf726651bc962fb7_prof);

        
        $__internal_5312c62fe6b308138bbecede2cddbe256bf693e2e76c7a71700521b0faaadbd5->leave($__internal_5312c62fe6b308138bbecede2cddbe256bf693e2e76c7a71700521b0faaadbd5_prof);

    }

    public function getTemplateName()
    {
        return "@TEMImain/Temi/graphForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 29,  60 => 28,  56 => 27,  50 => 24,  25 => 1,);
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
   <link rel=\"stylesheet\" href=\"../css/general.css\">
    <link rel=\"stylesheet\" href=\"../css/tabCS.css\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"../node_modules/chart.js/dist/Chart.min.js\"></script>
    <script src=\"../node_modules/chart.js/dist/Chart.bundle.min.js\"></script>
    <script src=\"../node_modules/excellentexport/dist/excellentexport.js\"></script>


    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
</head>
<body>
<nav class=\"navbar navbar-static-top navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\" navbar-brand\" href=\"{{ path('temi_platform_home') }}\"><img class=\"img-rounded\" src=\"../image/logo_CERDI_UCA-01.png\">Cerdi</a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li><a href=\"{{ path('temi_platform_home') }}\">Modèle</a></li>
            <li class=\"active\"><a data-toggle=\"modal\" href=\"{{ path('temi_platform_graph') }}\">Graphique</a></li>
            <li><a id=\"ajoutButt\" href=\"{{ path('temi_platform_home') }}\">Ajouter un pays  <span class=\"glyphicon glyphicon-plus-sign\"> </span> </a></li>
        </ul>
    </div>
</nav>
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
                        <input type=\"text\" class=\"form-control\" id=\"marge\" title=\"marge\" placeholder=\"Ajouter un taux de marge\"/>
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
                                    <p><span class=\"glyphicon glyphicon-plus-sign\"> </span></p>
                                </div>
                            </div>
                        </button>
                    </div>
                    <p>

                    </p>
                    <div id=\"addEnt\">
                        <button type=\"button\" class=\"btn btn-block\">
                            <div class='row'>
                                <div class='col-sm-8'>
                                    <p>ajouter<br/> une <br/>entreprise</p>
                                </div>
                                <div class='col-sm-2'>
                                    <br/>
                                    <span class=\"glyphicon glyphicon-plus-sign\"> </span>
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


<script src=\"../javascript/model/anotherFunctiun/verification.js\"></script>
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
<script src=\"../javascript/view/directlyChange/graphFormView.js\"></script>

</body>
</html>", "@TEMImain/Temi/graphForm.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle\\Resources\\views\\Temi\\graphForm.html.twig");
    }
}
