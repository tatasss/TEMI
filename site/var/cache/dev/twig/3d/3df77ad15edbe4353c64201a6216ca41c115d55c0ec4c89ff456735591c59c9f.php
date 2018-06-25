<?php

/* TEMImainBundle:Temi:addLand.html.twig */
class __TwigTemplate_93c27d9b29aeb0a2297009cd9960a598734fba812fd386541221e28a8964fa28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TEMImainBundle:Temi:layout.html.twig", "TEMImainBundle:Temi:addLand.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TEMImainBundle:Temi:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:addLand.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:addLand.html.twig"));

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
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 9
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "


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
                            <label>Nom </label>
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'label');
        echo "
                            <p>Le code ISO est une codification internationale créé par l'International
                                Standardization
                                Organization (ISO)
                                qui attribue un code unique de trois lettres à toute devise de la planète pour
                                éviter
                                toute
                                ambiguïté dans
                                leurs identifications et leurs désignations. Les deux premières lettres
                                correspondent au
                                nom du
                                pays, la
                                dernière au nom de la monnaie nationale. En cas de changement de monnaie
                                nationale,
                                seule la
                                dernière lettre
                                varie.
                            </p>
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'errors');
        echo "
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "code", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>Code Général des Impôts</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <p><strong>Durée d'amortissment :</strong></p>
                                    </div>
                                    <div class=\"panel-body\">

                                        <div class=\"form-group\">
                                            <label>Construction</label>
                                            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ammort", array()), 'errors');
        echo "
                                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ammort", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                       ";
        // line 333
        echo "



    ";
        // line 338
        echo "

    ";
        // line 343
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 346
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "TEMImainBundle:Temi:addLand.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 346,  177 => 343,  173 => 338,  167 => 333,  162 => 72,  158 => 71,  140 => 56,  136 => 55,  115 => 37,  109 => 34,  105 => 33,  77 => 9,  72 => 6,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
    {{ form_start(form) }}

    {# Les erreurs générales du formulaire. #}
    {{ form_errors(form) }}


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
                            <label>Nom </label>
                            {{ form_errors(form.name) }}
                            {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_label(form.code) }}
                            <p>Le code ISO est une codification internationale créé par l'International
                                Standardization
                                Organization (ISO)
                                qui attribue un code unique de trois lettres à toute devise de la planète pour
                                éviter
                                toute
                                ambiguïté dans
                                leurs identifications et leurs désignations. Les deux premières lettres
                                correspondent au
                                nom du
                                pays, la
                                dernière au nom de la monnaie nationale. En cas de changement de monnaie
                                nationale,
                                seule la
                                dernière lettre
                                varie.
                            </p>
                            {{ form_errors(form.code) }}
                            {{ form_widget(form.code, {'attr': {'class': 'form-control'}}) }}
                        </div>
                    </div>
                    <div class=\"item borderhide\">
                        <h3>Code Général des Impôts</h3>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <p><strong>Durée d'amortissment :</strong></p>
                                    </div>
                                    <div class=\"panel-body\">

                                        <div class=\"form-group\">
                                            <label>Construction</label>
                                            {{ form_errors(form.ammort) }}
                                            {{ form_widget(form.ammort, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                       {# <div class=\"form-group\">
                                            <label>Equipement</label>
                                            {{ form_errors(form.ammort.equipement) }}
                                            {{ form_widget(form.ammort.equipement, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Camion</label>
                                            {{ form_errors(form.ammort.camion) }}
                                            {{ form_widget(form.ammort.camion, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Matériel Informatique</label>
                                            {{ form_errors(form.ammort.matInformatique) }}
                                            {{ form_widget(form.ammort.matInformatique, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Matériel de bureau</label>
                                            {{ form_errors(form.ammort.matBureau) }}
                                            {{ form_widget(form.ammort.matBureau, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Coefficient Dégressif</label>
                                            {{ form_errors(form.ammort.coefdegressif) }}
                                            {{ form_widget(form.ammort.coefdegressif, {'attr': {'class': 'form-control'}}) }}
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <p><strong>Taux d'impôt :</strong></p>
                                    </div>
                                    <div class=\"panel-body\">

                                        <div class=\"form-group\">
                                            <label>Contributions forfaitaires employeurs</label>
                                            {{ form_errors(form.impot.cfe) }}
                                            {{ form_widget(form.impot.cfe, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Impôt Société</label>
                                            {{ form_errors(form.impot.isImp) }}
                                            {{ form_widget(form.impot.isImp, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Impôt minimum forfaitaire</label>
                                            {{ form_errors(form.impot.imf) }}
                                            {{ form_widget(form.impot.imf, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Impôt sur le revenu de la valeur mobilières</label>
                                            {{ form_errors(form.impot.irvm) }}
                                            {{ form_widget(form.impot.irvm, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Impôt sur le revenu des créances</label>
                                            {{ form_errors(form.impot.irc) }}
                                            {{ form_widget(form.impot.irc, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Taxe sur la valeur ajoutée du pétrole</label>
                                            {{ form_errors(form.impot.tvaPetrole) }}
                                            {{ form_widget(form.impot.tvaPetrole, {'attr': {'class': 'form-control'}}) }}
                                        </div>

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
                                            <label>Durée</label>
                                            {{ form_errors(form.invest.cfe.duree) }}
                                            {{ form_widget(form.invest.cfe.duree, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            {{ form_errors(form.invest.cfe.taux) }}
                                            {{ form_widget(form.invest.cfe.taux, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Impôt société:</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée</label>
                                            {{ form_errors(form.invest.isInv.duree) }}
                                            {{ form_widget(form.invest.isInv.duree, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            {{ form_errors(form.invest.isInv.taux) }}
                                            {{ form_widget(form.invest.isInv.taux, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Impôt minimum forfaitaire :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée</label>
                                            {{ form_errors(form.invest.imf.duree) }}
                                            {{ form_widget(form.invest.imf.duree, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            {{ form_errors(form.invest.imf.taux) }}
                                            {{ form_widget(form.invest.imf.taux, {'attr': {'class': 'form-control'}}) }}
                                        </div>
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
                                            <label>Durée</label>
                                            {{ form_errors(form.invest.irvm.duree) }}
                                            {{ form_widget(form.invest.irvm.duree, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            {{ form_errors(form.invest.irvm.taux) }}
                                            {{ form_widget(form.invest.irvm.taux, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Impôt sur le revenu des creances :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée</label>
                                            {{ form_errors(form.invest.irc.duree) }}
                                            {{ form_widget(form.invest.irc.duree, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            {{ form_errors(form.invest.irc.taux) }}
                                            {{ form_widget(form.invest.irc.taux, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"item borderhide\">
                        <h3>Code des investissements</h3>
                        <div class=\"form-group\">
                            <label>Description des dispositions :</label>
                            {{ form_errors(form.descriptionDerog) }}
                            {{ form_widget(form.descriptionDerog, {'attr': {'class': 'form-control','rows':'5'}}) }}

                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Régime d'investissement :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Nom du code des investissements :</label>
                                            {{ form_errors(form.source.nomCodeInvest) }}
                                            {{ form_widget(form.source.nomCodeInvest, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Nom du régime :</label>
                                            {{ form_errors(form.source.nomRegimeInvest) }}
                                            {{ form_widget(form.source.nomRegimeInvest, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Zone :</label>
                                            {{ form_errors(form.source.nomZonneRegime) }}
                                            {{ form_widget(form.source.nomZonneRegime, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{ form_widget(form.ajouterLePays, {'attr': {'class': 'btn btn-default'}}) }}
                        </div>
                    </div>
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



    {# Idem pour un autre champ. #}




    {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}


    {# Génération automatique des champs pas encore écrits.
       Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
       et tous les champs cachés (type « hidden »). #}
    {{ form_rest(form) }}

    {# Fermeture de la balise <form> du formulaire HTML #}
    {{ form_end(form) }}

{% endblock %}", "TEMImainBundle:Temi:addLand.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle/Resources/views/Temi/addLand.html.twig");
    }
}
