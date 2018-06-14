<?php

/* @TEMImain/Temi/index.html.twig */
class __TwigTemplate_7f101169f40660af3a81c4512e655bea38f00ebb069e6ac157fdd95aa48d1127 extends Twig_Template
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
        $__internal_ec59dc2d985f065777486f7e70a25bc963ee8fb76bf7651c11ec31983dbc7e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec59dc2d985f065777486f7e70a25bc963ee8fb76bf7651c11ec31983dbc7e3b->enter($__internal_ec59dc2d985f065777486f7e70a25bc963ee8fb76bf7651c11ec31983dbc7e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TEMImain/Temi/index.html.twig"));

        $__internal_d7cee4923e0d4c57339ac1b1e10ccbff463515537c89abf076d97101d8c51f70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7cee4923e0d4c57339ac1b1e10ccbff463515537c89abf076d97101d8c51f70->enter($__internal_d7cee4923e0d4c57339ac1b1e10ccbff463515537c89abf076d97101d8c51f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TEMImain/Temi/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" xmlns=\"http://www.w3.org/1999/html\">
<head>
    <title>index</title>
    <meta charset=\"utf-8\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"../css/general.css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</head>
<body>
<nav class=\"navbar navbar-static-top navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\" navbar-brand\" href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
        echo "\"><img class=\"img-rounded\" src=\"../image/logo_CERDI_UCA-01.png\">Cerdi</a>
    </div>
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
        echo "\">Modèle</a></li>
            <li><a data-toggle=\"modal\" href=\"#myModal\">graphique</a></li>
            <li><a id=\"ajoutButt\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_add");
        echo "\">Ajouter un pays <span class=\"glyphicon glyphicon-plus-sign\"> </span> </a></li>
        </ul>
    </div>
</nav>
<div class=\"container\">
    <div class=\"form-group\">
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
        <input type=\"text\" class=\"form-control\" id=\"actualisation\" title=\"actualisation\" placeholder=\"Veuillez entrer un taux d'actualisation\"/>
    </div>
    <div class=\"form-group\">
        <label>Taux de marge de l'entreprise:</label>
        <input type=\"text\" class=\"form-control\" id=\"marge\" title=\"marge\" placeholder=\"Veuillez entrer un taux de marge\"/>
    </div>
    <button type=\"submit\" class=\"btn btn-default\" onclick=\"validateForm()\">valider</button>
    <button type=\"submit\" class=\"btn btn-default hide\" id=\"myBtn\" onclick=\"showModal()\" disabled>Demarrer Comparaison
    </button>
    <div>
        <br/>
        <div id=\"result\"></div>
    </div>
    <!-- Modal -->
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
                                onclick=\"debutCompa(\$('#actualistionCompa').val(), \$('#REGIMECmpta').val());\">continuer
                        </button>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-danger btn-default pull-left\" onclick=\"retourModal()\"
                            data-dismiss=\"modal\">
                        <span class=\"glyphicon glyphicon-remove\">
                        </span> Annuler
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"../javascript/start/index.js\"></script>
<script src=\"../javascript/model/anotherFunctiun/XMLRequest.js\"></script>
<script src=\"../javascript/model/anotherFunctiun/verification.js\"></script>
<script src=\"../javascript/model/anotherFunctiun/myMath.js\"></script>
<script src=\"../javascript/model/anotherFunctiun/Ref.js\"></script>
<script src=\"../javascript/view/viewGenerator/bootstrapView.js\"></script>
<script src=\"../javascript/manufacturing/manufact.js\"></script>
<script src=\"../javascript/data/startingLand.js\"></script>
<script src=\"../javascript/model/modelManager.js\"></script>
<script src=\"../javascript/view/viewGenerator/graphGenerator.js\"></script>
<script src=\"../javascript/model/model.js\"></script>
<script src=\"../javascript/view/viewGenerator/ViewGenerator.js\"></script>
<script src=\"../javascript/data/data.js\"></script>
<script src=\"../javascript/data/PaysListe.js\"></script>
<script src=\"../javascript/start/script.js\"></script>


<script src=\"../javascript/view/directlyChange/ViewManufacturing.js\"></script>
</body>
</html>";
        
        $__internal_ec59dc2d985f065777486f7e70a25bc963ee8fb76bf7651c11ec31983dbc7e3b->leave($__internal_ec59dc2d985f065777486f7e70a25bc963ee8fb76bf7651c11ec31983dbc7e3b_prof);

        
        $__internal_d7cee4923e0d4c57339ac1b1e10ccbff463515537c89abf076d97101d8c51f70->leave($__internal_d7cee4923e0d4c57339ac1b1e10ccbff463515537c89abf076d97101d8c51f70_prof);

    }

    public function getTemplateName()
    {
        return "@TEMImain/Temi/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 23,  50 => 21,  44 => 18,  25 => 1,);
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
    <title>index</title>
    <meta charset=\"utf-8\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"../css/general.css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</head>
<body>
<nav class=\"navbar navbar-static-top navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\" navbar-brand\" href=\"{{ path('temi_platform_home') }}\"><img class=\"img-rounded\" src=\"../image/logo_CERDI_UCA-01.png\">Cerdi</a>
    </div>
        <ul class=\"nav navbar-nav\">
            <li class=\"active\"><a href=\"{{ path('temi_platform_home') }}\">Modèle</a></li>
            <li><a data-toggle=\"modal\" href=\"#myModal\">graphique</a></li>
            <li><a id=\"ajoutButt\" href=\"{{ path('temi_platform_add') }}\">Ajouter un pays <span class=\"glyphicon glyphicon-plus-sign\"> </span> </a></li>
        </ul>
    </div>
</nav>
<div class=\"container\">
    <div class=\"form-group\">
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
        <input type=\"text\" class=\"form-control\" id=\"actualisation\" title=\"actualisation\" placeholder=\"Veuillez entrer un taux d'actualisation\"/>
    </div>
    <div class=\"form-group\">
        <label>Taux de marge de l'entreprise:</label>
        <input type=\"text\" class=\"form-control\" id=\"marge\" title=\"marge\" placeholder=\"Veuillez entrer un taux de marge\"/>
    </div>
    <button type=\"submit\" class=\"btn btn-default\" onclick=\"validateForm()\">valider</button>
    <button type=\"submit\" class=\"btn btn-default hide\" id=\"myBtn\" onclick=\"showModal()\" disabled>Demarrer Comparaison
    </button>
    <div>
        <br/>
        <div id=\"result\"></div>
    </div>
    <!-- Modal -->
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
                                onclick=\"debutCompa(\$('#actualistionCompa').val(), \$('#REGIMECmpta').val());\">continuer
                        </button>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"submit\" class=\"btn btn-danger btn-default pull-left\" onclick=\"retourModal()\"
                            data-dismiss=\"modal\">
                        <span class=\"glyphicon glyphicon-remove\">
                        </span> Annuler
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src=\"../javascript/start/index.js\"></script>
<script src=\"../javascript/model/anotherFunctiun/XMLRequest.js\"></script>
<script src=\"../javascript/model/anotherFunctiun/verification.js\"></script>
<script src=\"../javascript/model/anotherFunctiun/myMath.js\"></script>
<script src=\"../javascript/model/anotherFunctiun/Ref.js\"></script>
<script src=\"../javascript/view/viewGenerator/bootstrapView.js\"></script>
<script src=\"../javascript/manufacturing/manufact.js\"></script>
<script src=\"../javascript/data/startingLand.js\"></script>
<script src=\"../javascript/model/modelManager.js\"></script>
<script src=\"../javascript/view/viewGenerator/graphGenerator.js\"></script>
<script src=\"../javascript/model/model.js\"></script>
<script src=\"../javascript/view/viewGenerator/ViewGenerator.js\"></script>
<script src=\"../javascript/data/data.js\"></script>
<script src=\"../javascript/data/PaysListe.js\"></script>
<script src=\"../javascript/start/script.js\"></script>


<script src=\"../javascript/view/directlyChange/ViewManufacturing.js\"></script>
</body>
</html>", "@TEMImain/Temi/index.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle\\Resources\\views\\Temi\\index.html.twig");
    }
}
