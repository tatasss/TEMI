<?php

/* TEMImainBundle:Temi:index.html.twig */
class __TwigTemplate_2245f5d97b9c9252d26fb791fd73beb7b80c8d4b5f202c22908ec7d806b4db6a extends Twig_Template
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
        $__internal_72a00d065c7f581fbc14f933f4ed72a4e5d46bda3c14ef1a4f3640de446e5881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a00d065c7f581fbc14f933f4ed72a4e5d46bda3c14ef1a4f3640de446e5881->enter($__internal_72a00d065c7f581fbc14f933f4ed72a4e5d46bda3c14ef1a4f3640de446e5881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:index.html.twig"));

        $__internal_bd2718a6ad92ce408529c313d0850498d7c8935f7c0039c96b7fc2d0dce6f028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2718a6ad92ce408529c313d0850498d7c8935f7c0039c96b7fc2d0dce6f028->enter($__internal_bd2718a6ad92ce408529c313d0850498d7c8935f7c0039c96b7fc2d0dce6f028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:index.html.twig"));

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
<div id=\"menu\">
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("TEMImainBundle:Temi:menu"));
        echo "
</div>
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
        
        $__internal_72a00d065c7f581fbc14f933f4ed72a4e5d46bda3c14ef1a4f3640de446e5881->leave($__internal_72a00d065c7f581fbc14f933f4ed72a4e5d46bda3c14ef1a4f3640de446e5881_prof);

        
        $__internal_bd2718a6ad92ce408529c313d0850498d7c8935f7c0039c96b7fc2d0dce6f028->leave($__internal_bd2718a6ad92ce408529c313d0850498d7c8935f7c0039c96b7fc2d0dce6f028_prof);

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
        return array (  42 => 16,  25 => 1,);
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
<div id=\"menu\">
    {{ render(controller(\"TEMImainBundle:Temi:menu\")) }}
</div>
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
</html>", "TEMImainBundle:Temi:index.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle/Resources/views/Temi/index.html.twig");
    }
}
