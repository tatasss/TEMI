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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ammort", array()), "construction", array()), 'errors');
        echo "
                                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "ammort", array()), "construction", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Equipement</label>
                                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "ammort", array()), "equipement", array()), 'errors');
        echo "
                                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "ammort", array()), "equipement", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Camion</label>
                                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "ammort", array()), "camion", array()), 'errors');
        echo "
                                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "ammort", array()), "camion", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Matériel Informatique</label>
                                            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "ammort", array()), "matInformatique", array()), 'errors');
        echo "
                                            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "ammort", array()), "matInformatique", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Matériel de bureau</label>
                                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "ammort", array()), "matBureau", array()), 'errors');
        echo "
                                            ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "ammort", array()), "matBureau", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Coefficient Dégressif</label>
                                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "ammort", array()), "coefDegressif", array()), 'errors');
        echo "
                                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "ammort", array()), "coefDegressif", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
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
                                            ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "impot", array()), "cfe", array()), 'errors');
        echo "
                                            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "impot", array()), "cfe", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Impôt Société</label>
                                            ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "impot", array()), "isImp", array()), 'errors');
        echo "
                                            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "impot", array()), "isImp", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Impôt minimum forfaitaire</label>
                                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "impot", array()), "imf", array()), 'errors');
        echo "
                                            ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "impot", array()), "imf", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Impôt sur le revenu de la valeur mobilières</label>
                                            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "impot", array()), "irvm", array()), 'errors');
        echo "
                                            ";
        // line 128
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "impot", array()), "irvm", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Impôt sur le revenu des créances</label>
                                            ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "impot", array()), "irc", array()), 'errors');
        echo "
                                            ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "impot", array()), "irc", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Taxe sur la valeur ajoutée du pétrole</label>
                                            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "impot", array()), "tva_petrole", array()), 'errors');
        echo "
                                            ";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "impot", array()), "tva_petrole", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
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
                                            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "cfe", array()), "duree", array()), 'errors');
        echo "
                                            ";
        // line 159
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "cfe", array()), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            ";
        // line 165
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "cfe", array()), "taux", array()), 'errors');
        echo "
                                            ";
        // line 166
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "cfe", array()), "taux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
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
                                            ";
        // line 182
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "isInv", array()), "duree", array()), 'errors');
        echo "
                                            ";
        // line 183
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "isInv", array()), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            ";
        // line 189
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "isInv", array()), "taux", array()), 'errors');
        echo "
                                            ";
        // line 190
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "isInv", array()), "taux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
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
                                            ";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "imf", array()), "duree", array()), 'errors');
        echo "
                                            ";
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "imf", array()), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            ";
        // line 213
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "imf", array()), "taux", array()), 'errors');
        echo "
                                            ";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "imf", array()), "taux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"item borderhide\">
                        <h3>Code des investissements</h3>
                        ormulaire.
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Impôt sur les revenus des valeurs mobilières :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée</label>
                                            ";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "irvm", array()), "duree", array()), 'errors');
        echo "
                                            ";
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "irvm", array()), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            ";
        // line 241
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "irvm", array()), "taux", array()), 'errors');
        echo "
                                            ";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "irvm", array()), "taux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
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
                                            ";
        // line 258
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "irc", array()), "duree", array()), 'errors');
        echo "
                                            ";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "irc", array()), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            ";
        // line 265
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "irc", array()), "taux", array()), 'errors');
        echo "
                                            ";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invest", array()), "irc", array()), "taux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
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
                            ";
        // line 278
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionDerog", array()), 'errors');
        echo "
                            ";
        // line 279
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionDerog", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "5")));
        echo "

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
                                            ";
        // line 291
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "source", array()), "nomCodeInvest", array()), 'errors');
        echo "
                                            ";
        // line 292
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "source", array()), "nomCodeInvest", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Nom du régime :</label>
                                            ";
        // line 298
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "source", array()), "nomRegimeInvest", array()), 'errors');
        echo "
                                            ";
        // line 299
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "source", array()), "nomRegimeInvest", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Zone :</label>
                                            ";
        // line 305
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "source", array()), "nomZonneRegime", array()), 'errors');
        echo "
                                            ";
        // line 306
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "source", array()), "nomZonneRegime", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>

                            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ajouterLePays", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
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
        // line 334
        echo "



    ";
        // line 339
        echo "

    ";
        // line 344
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 347
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
        return array (  595 => 347,  589 => 344,  585 => 339,  579 => 334,  555 => 312,  546 => 306,  542 => 305,  533 => 299,  529 => 298,  520 => 292,  516 => 291,  501 => 279,  497 => 278,  482 => 266,  478 => 265,  469 => 259,  465 => 258,  446 => 242,  442 => 241,  433 => 235,  429 => 234,  406 => 214,  402 => 213,  393 => 207,  389 => 206,  370 => 190,  366 => 189,  357 => 183,  353 => 182,  334 => 166,  330 => 165,  321 => 159,  317 => 158,  294 => 138,  290 => 137,  283 => 133,  279 => 132,  272 => 128,  268 => 127,  261 => 123,  257 => 122,  250 => 118,  246 => 117,  239 => 113,  235 => 112,  217 => 97,  213 => 96,  206 => 92,  202 => 91,  195 => 87,  191 => 86,  184 => 82,  180 => 81,  173 => 77,  169 => 76,  162 => 72,  158 => 71,  140 => 56,  136 => 55,  115 => 37,  109 => 34,  105 => 33,  77 => 9,  72 => 6,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
                                            {{ form_errors(form.ammort.construction) }}
                                            {{ form_widget(formAmm.ammort.construction, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Equipement</label>
                                            {{ form_errors(formAmm.ammort.equipement) }}
                                            {{ form_widget(formAmm.ammort.equipement, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Camion</label>
                                            {{ form_errors(formAmm.ammort.camion) }}
                                            {{ form_widget(formAmm.ammort.camion, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Matériel Informatique</label>
                                            {{ form_errors(formAmm.ammort.matInformatique) }}
                                            {{ form_widget(formAmm.ammort.matInformatique, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Matériel de bureau</label>
                                            {{ form_errors(formAmm.ammort.matBureau) }}
                                            {{ form_widget(formAmm.ammort.matBureau, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Coefficient Dégressif</label>
                                            {{ form_errors(formAmm.ammort.coefDegressif) }}
                                            {{ form_widget(formAmm.ammort.coefDegressif, {'attr': {'class': 'form-control'}}) }}
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
                                            {{ form_errors(form.impot.tva_petrole) }}
                                            {{ form_widget(form.impot.tva_petrole, {'attr': {'class': 'form-control'}}) }}
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
                        ormulaire.
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
