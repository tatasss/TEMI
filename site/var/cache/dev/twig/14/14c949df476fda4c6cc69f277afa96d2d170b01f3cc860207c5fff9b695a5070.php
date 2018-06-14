<?php

/* TEMImainBundle:Temi:index.html.twig */
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
        $__internal_a13c156ac6c78b9f1486c17af645d9f6d1c1f7ca9beece9f7630638b95ae1765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13c156ac6c78b9f1486c17af645d9f6d1c1f7ca9beece9f7630638b95ae1765->enter($__internal_a13c156ac6c78b9f1486c17af645d9f6d1c1f7ca9beece9f7630638b95ae1765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:index.html.twig"));

        $__internal_75dccce3541ed4d071d0623782f5c7aeb33d7071f67cac0a256d0dee544e36a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75dccce3541ed4d071d0623782f5c7aeb33d7071f67cac0a256d0dee544e36a4->enter($__internal_75dccce3541ed4d071d0623782f5c7aeb33d7071f67cac0a256d0dee544e36a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:index.html.twig"));

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
        <input type=\"text\" class=\"form-control\" id=\"actualisation\" title=\"actualisation\"
               placeholder=\"Veuillez entrer un taux d'actualisation\"/>
    </div>
    <div class=\"form-group\">
        <label>Taux de marge de l'entreprise:</label>
        <input type=\"text\" class=\"form-control\" id=\"marge\" title=\"marge\"
               placeholder=\"Veuillez entrer un taux de marge\"/>
    </div>
    <button type=\"submit\" class=\"btn btn-default\" onclick=\"validateForm()\">valider</button>
    <button type=\"submit\" class=\"btn btn-default hide\" id=\"myBtn\" onclick=\"showModal()\" disabled>Demarrer Comparaison
    </button>
    <div>
        <br/>
        <div id=\"result\"></div>
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
        
        $__internal_a13c156ac6c78b9f1486c17af645d9f6d1c1f7ca9beece9f7630638b95ae1765->leave($__internal_a13c156ac6c78b9f1486c17af645d9f6d1c1f7ca9beece9f7630638b95ae1765_prof);

        
        $__internal_75dccce3541ed4d071d0623782f5c7aeb33d7071f67cac0a256d0dee544e36a4->leave($__internal_75dccce3541ed4d071d0623782f5c7aeb33d7071f67cac0a256d0dee544e36a4_prof);

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
        <input type=\"text\" class=\"form-control\" id=\"actualisation\" title=\"actualisation\"
               placeholder=\"Veuillez entrer un taux d'actualisation\"/>
    </div>
    <div class=\"form-group\">
        <label>Taux de marge de l'entreprise:</label>
        <input type=\"text\" class=\"form-control\" id=\"marge\" title=\"marge\"
               placeholder=\"Veuillez entrer un taux de marge\"/>
    </div>
    <button type=\"submit\" class=\"btn btn-default\" onclick=\"validateForm()\">valider</button>
    <button type=\"submit\" class=\"btn btn-default hide\" id=\"myBtn\" onclick=\"showModal()\" disabled>Demarrer Comparaison
    </button>
    <div>
        <br/>
        <div id=\"result\"></div>
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
</html>", "TEMImainBundle:Temi:index.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle\\Resources\\views\\Temi\\index.html.twig");
    }
}
