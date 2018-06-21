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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Name", array()), 'errors');
        echo "
                            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Name", array()), 'widget', array("attr" => array("class" => "form-control")));
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
                                    ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), 'form_start');
        echo "

                                        ";
        // line 71
        echo "                                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), 'errors');
        echo "
                                        <div class=\"form-group\">
                                            <label>Construction</label>
                                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "construction", array()), 'errors');
        echo "
                                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "construction", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Equipement</label>
                                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "equipement", array()), 'errors');
        echo "
                                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), "equipement", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Camion</label>
                                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "camion", array()), 'errors');
        echo "
                                            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), "camion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Matériel Informatique</label>
                                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "matInformatique", array()), 'errors');
        echo "
                                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "matInformatique", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Matériel de bureau</label>
                                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "matBureau", array()), 'errors');
        echo "
                                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "matBureau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Coefficient Dégressif</label>
                                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "coefDegressif", array()), 'errors');
        echo "
                                            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "coefDegressif", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), 'rest');
        echo "

                                        ";
        // line 105
        echo "                                    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), 'form_end');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <p><strong>Taux d'impôt :</strong></p>
                                    </div>
                                    <div class=\"panel-body\">
                                        ";
        // line 115
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), 'form_start');
        echo "

                                        ";
        // line 118
        echo "                                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), 'errors');
        echo "
                                        <div class=\"form-group\">
                                            <label>Contributions forfaitaires employeurs</label>
                                            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), "cfe", array()), 'errors');
        echo "
                                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), "cfe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Impôt Société</label>
                                            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), "isImp", array()), 'errors');
        echo "
                                            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), "isImp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Impôt minimum forfaitaire</label>
                                            ";
        // line 131
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), "imf", array()), 'errors');
        echo "
                                            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), "imf", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Impôt sur le revenu de la valeur mobilières</label>
                                            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), "irvm", array()), 'errors');
        echo "
                                            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), "irvm", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Impôt sur le revenu des créances</label>
                                            ";
        // line 141
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), "irc", array()), 'errors');
        echo "
                                            ";
        // line 142
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), "irc", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Taxe sur la valeur ajoutée du pétrole</label>
                                            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), "tva_petrole", array()), 'errors');
        echo "
                                            ";
        // line 147
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), "tva_petrole", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        ";
        // line 149
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), 'rest');
        echo "

                                        ";
        // line 152
        echo "                                        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formImp"]) ? $context["formImp"] : $this->getContext($context, "formImp")), 'form_end');
        echo "
                                    </div>
                                </div>
                            </div>
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



    ";
        // line 176
        echo "



    ";
        // line 181
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

    ";
        // line 186
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 189
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
        return array (  376 => 189,  370 => 186,  364 => 181,  358 => 176,  331 => 152,  326 => 149,  321 => 147,  317 => 146,  310 => 142,  306 => 141,  299 => 137,  295 => 136,  288 => 132,  284 => 131,  277 => 127,  273 => 126,  266 => 122,  262 => 121,  255 => 118,  250 => 115,  236 => 105,  231 => 102,  226 => 100,  222 => 99,  215 => 95,  211 => 94,  204 => 90,  200 => 89,  193 => 85,  189 => 84,  182 => 80,  178 => 79,  171 => 75,  167 => 74,  160 => 71,  155 => 68,  140 => 56,  136 => 55,  115 => 37,  109 => 34,  105 => 33,  77 => 9,  72 => 6,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
                            {{ form_errors(form.Name) }}
                            {{ form_widget(form.Name, {'attr': {'class': 'form-control'}}) }}
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
                                    {{ form_start(formAmm) }}

                                        {# Les erreurs générales du formulaire. #}
                                        {{ form_errors(formAmm) }}
                                        <div class=\"form-group\">
                                            <label>Construction</label>
                                            {{ form_errors(formAmm.construction) }}
                                            {{ form_widget(formAmm.construction, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Equipement</label>
                                            {{ form_errors(formAmm.equipement) }}
                                            {{ form_widget(formImp.equipement, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Camion</label>
                                            {{ form_errors(formAmm.camion) }}
                                            {{ form_widget(formImp.camion, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Matériel Informatique</label>
                                            {{ form_errors(formAmm.matInformatique) }}
                                            {{ form_widget(formAmm.matInformatique, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Matériel de bureau</label>
                                            {{ form_errors(formAmm.matBureau) }}
                                            {{ form_widget(formAmm.matBureau, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Coefficient Dégressif</label>
                                            {{ form_errors(formAmm.coefDegressif) }}
                                            {{ form_widget(formAmm.coefDegressif, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        {{ form_rest(formAmm) }}

                                        {# Fermeture de la balise <form> du formulaire HTML #}
                                    {{ form_end(formAmm) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"panel panel-default\">
                                    <div class=\"panel-heading\">
                                        <p><strong>Taux d'impôt :</strong></p>
                                    </div>
                                    <div class=\"panel-body\">
                                        {{ form_start(formImp) }}

                                        {# Les erreurs générales du formulaire. #}
                                        {{ form_errors(formImp) }}
                                        <div class=\"form-group\">
                                            <label>Contributions forfaitaires employeurs</label>
                                            {{ form_errors(formImp.cfe) }}
                                            {{ form_widget(formImp.cfe, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Impôt Société</label>
                                            {{ form_errors(formImp.isImp) }}
                                            {{ form_widget(formImp.isImp, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Impôt minimum forfaitaire</label>
                                            {{ form_errors(formImp.imf) }}
                                            {{ form_widget(formImp.imf, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Impôt sur le revenu de la valeur mobilières</label>
                                            {{ form_errors(formImp.irvm) }}
                                            {{ form_widget(formImp.irvm, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Impôt sur le revenu des créances</label>
                                            {{ form_errors(formImp.irc) }}
                                            {{ form_widget(formImp.irc, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Taxe sur la valeur ajoutée du pétrole</label>
                                            {{ form_errors(formImp.tva_petrole) }}
                                            {{ form_widget(formImp.tva_petrole, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        {{ form_rest(formImp) }}

                                        {# Fermeture de la balise <form> du formulaire HTML #}
                                        {{ form_end(formImp) }}
                                    </div>
                                </div>
                            </div>
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
    {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}

    {# Génération automatique des champs pas encore écrits.
       Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
       et tous les champs cachés (type « hidden »). #}
    {{ form_rest(form) }}

    {# Fermeture de la balise <form> du formulaire HTML #}
    {{ form_end(form) }}

{% endblock %}", "TEMImainBundle:Temi:addLand.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle/Resources/views/Temi/addLand.html.twig");
    }
}
