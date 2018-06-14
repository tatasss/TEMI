<?php

/* TEMImainBundle:Connection:inscription.html.twig */
class __TwigTemplate_1ee8932b6a122149572771121cb3ce34e9567d6543475f2bbac3b681e0eb6bea extends Twig_Template
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
        $__internal_bad365926f9e68b07f22fbcc761db8024660a96e375e96646f3748dc8481575a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bad365926f9e68b07f22fbcc761db8024660a96e375e96646f3748dc8481575a->enter($__internal_bad365926f9e68b07f22fbcc761db8024660a96e375e96646f3748dc8481575a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Connection:inscription.html.twig"));

        $__internal_cadae7deda7401b0d292cf69c9d9020fb7ff7ddb8e6e7da37ea5a56e0d709152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cadae7deda7401b0d292cf69c9d9020fb7ff7ddb8e6e7da37ea5a56e0d709152->enter($__internal_cadae7deda7401b0d292cf69c9d9020fb7ff7ddb8e6e7da37ea5a56e0d709152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Connection:inscription.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" xmlns=\"http://www.w3.org/1999/html\">
<head>
    <title>Inscription</title>
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
            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_home");
        echo "\">Modèle</a></li>
            <li><a data-toggle=\"modal\" href=\"#myModal\">graphique</a></li>
            <li><a id=\"ajoutButt\" href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_platform_add");
        echo "\">Ajouter un pays <span class=\"glyphicon glyphicon-plus-sign\"> </span> </a></li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"active\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_user_sign_up");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> Inscription</a></li>
            <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("temi_user_login");
        echo "\"><span class=\"glyphicon glyphicon-log-in\"></span> Connection</a></li>
        </ul>
    </div>
</nav>
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
<div class=\"container\">
    <div class=\"form-group\">
        <label>Nom :</label>
        <input type=\"text\" class=\"form-control\" id=\"nomUser\" title=\"nomUser\" placeholder=\"Veuillez saisir votre nom\"/>
    </div>
    <div class=\"form-group\">
        <label>Prenom :</label>
        <input type=\"text\" class=\"form-control\" id=\"prenomUser\" title=\"prenomUser\" placeholder=\"Veuillez saisir votre prenom\"/>
    </div>
    <div class=\"form-group\">
        <label>Email :</label>
        <input type=\"email\" class=\"form-control\" id=\"mailUser\" title=\"mailUser\" placeholder=\"Veuillez saisir votre Email\"/>
    </div>
    <div class=\"form-group\">
        <label>Mot de passe :</label>
        <input type=\"password\" class=\"form-control\" id=\"mdpUser\" title=\"mdpUser\" placeholder=\"Veuillez saisir votre mot de passe\"/>
    </div>
    <div class=\"form-group\">
        <label>Confirmer mot de passe :</label>
        <input type=\"password\" class=\"form-control\" id=\"mdpUser\" title=\"mdpUser\" placeholder=\"Veuillez encore saisir votre mot de passe\"/>
    </div>
</div>
</body>
</html>";
        
        $__internal_bad365926f9e68b07f22fbcc761db8024660a96e375e96646f3748dc8481575a->leave($__internal_bad365926f9e68b07f22fbcc761db8024660a96e375e96646f3748dc8481575a_prof);

        
        $__internal_cadae7deda7401b0d292cf69c9d9020fb7ff7ddb8e6e7da37ea5a56e0d709152->leave($__internal_cadae7deda7401b0d292cf69c9d9020fb7ff7ddb8e6e7da37ea5a56e0d709152_prof);

    }

    public function getTemplateName()
    {
        return "TEMImainBundle:Connection:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 27,  61 => 26,  55 => 23,  50 => 21,  44 => 18,  25 => 1,);
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
    <title>Inscription</title>
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
            <li><a href=\"{{ path('temi_platform_home') }}\">Modèle</a></li>
            <li><a data-toggle=\"modal\" href=\"#myModal\">graphique</a></li>
            <li><a id=\"ajoutButt\" href=\"{{ path('temi_platform_add') }}\">Ajouter un pays <span class=\"glyphicon glyphicon-plus-sign\"> </span> </a></li>
        </ul>
        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"active\"><a href=\"{{ path('temi_user_sign_up') }}\"><span class=\"glyphicon glyphicon-user\"></span> Inscription</a></li>
            <li><a href=\"{{ path('temi_user_login') }}\"><span class=\"glyphicon glyphicon-log-in\"></span> Connection</a></li>
        </ul>
    </div>
</nav>
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
<div class=\"container\">
    <div class=\"form-group\">
        <label>Nom :</label>
        <input type=\"text\" class=\"form-control\" id=\"nomUser\" title=\"nomUser\" placeholder=\"Veuillez saisir votre nom\"/>
    </div>
    <div class=\"form-group\">
        <label>Prenom :</label>
        <input type=\"text\" class=\"form-control\" id=\"prenomUser\" title=\"prenomUser\" placeholder=\"Veuillez saisir votre prenom\"/>
    </div>
    <div class=\"form-group\">
        <label>Email :</label>
        <input type=\"email\" class=\"form-control\" id=\"mailUser\" title=\"mailUser\" placeholder=\"Veuillez saisir votre Email\"/>
    </div>
    <div class=\"form-group\">
        <label>Mot de passe :</label>
        <input type=\"password\" class=\"form-control\" id=\"mdpUser\" title=\"mdpUser\" placeholder=\"Veuillez saisir votre mot de passe\"/>
    </div>
    <div class=\"form-group\">
        <label>Confirmer mot de passe :</label>
        <input type=\"password\" class=\"form-control\" id=\"mdpUser\" title=\"mdpUser\" placeholder=\"Veuillez encore saisir votre mot de passe\"/>
    </div>
</div>
</body>
</html>", "TEMImainBundle:Connection:inscription.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle/Resources/views/Connection/inscription.html.twig");
    }
}
