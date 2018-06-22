<?php

/* TEMImainBundle:Temi:addLand.html.twig */
class __TwigTemplate_9ab8e48b4db2a70415a207370f9a43565418e81239701df44e7757cf0d3057f7 extends Twig_Template
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "equipement", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formAmm"]) ? $context["formAmm"] : $this->getContext($context, "formAmm")), "camion", array()), 'widget', array("attr" => array("class" => "form-control")));
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
                    <div class=\"item borderhide\">
                        <h3>Code des investissements</h3>
                        ";
        // line 160
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formCfe"]) ? $context["formCfe"] : $this->getContext($context, "formCfe")), 'form_start');
        echo "
                        ";
        // line 162
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formCfe"]) ? $context["formCfe"] : $this->getContext($context, "formCfe")), 'errors');
        echo "
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
        // line 172
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formCfe"]) ? $context["formCfe"] : $this->getContext($context, "formCfe")), "duree", array()), 'errors');
        echo "
                                            ";
        // line 173
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formCfe"]) ? $context["formCfe"] : $this->getContext($context, "formCfe")), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            ";
        // line 179
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formCfe"]) ? $context["formCfe"] : $this->getContext($context, "formCfe")), "taux", array()), 'errors');
        echo "
                                            ";
        // line 180
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formCfe"]) ? $context["formCfe"] : $this->getContext($context, "formCfe")), "taux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 186
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formCfe"]) ? $context["formCfe"] : $this->getContext($context, "formCfe")), 'rest');
        echo "
                        ";
        // line 188
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formCfe"]) ? $context["formCfe"] : $this->getContext($context, "formCfe")), 'form_end');
        echo "
                        ";
        // line 189
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formIs"]) ? $context["formIs"] : $this->getContext($context, "formIs")), 'form_start');
        echo "
                        ";
        // line 191
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formIs"]) ? $context["formIs"] : $this->getContext($context, "formIs")), 'errors');
        echo "
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
        // line 201
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formIs"]) ? $context["formIs"] : $this->getContext($context, "formIs")), "duree", array()), 'errors');
        echo "
                                            ";
        // line 202
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formIs"]) ? $context["formIs"] : $this->getContext($context, "formIs")), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            ";
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formIs"]) ? $context["formIs"] : $this->getContext($context, "formIs")), "taux", array()), 'errors');
        echo "
                                            ";
        // line 209
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formIs"]) ? $context["formIs"] : $this->getContext($context, "formIs")), "taux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 215
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formIs"]) ? $context["formIs"] : $this->getContext($context, "formIs")), 'rest');
        echo "
                        ";
        // line 217
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formIs"]) ? $context["formIs"] : $this->getContext($context, "formIs")), 'form_end');
        echo "
                        ";
        // line 218
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formImf"]) ? $context["formImf"] : $this->getContext($context, "formImf")), 'form_start');
        echo "
                        ";
        // line 220
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formImf"]) ? $context["formImf"] : $this->getContext($context, "formImf")), 'errors');
        echo "
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
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImf"]) ? $context["formImf"] : $this->getContext($context, "formImf")), "duree", array()), 'errors');
        echo "
                                            ";
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImf"]) ? $context["formImf"] : $this->getContext($context, "formImf")), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            ";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImf"]) ? $context["formImf"] : $this->getContext($context, "formImf")), "taux", array()), 'errors');
        echo "
                                            ";
        // line 238
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formImf"]) ? $context["formImf"] : $this->getContext($context, "formImf")), "taux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 244
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formImf"]) ? $context["formImf"] : $this->getContext($context, "formImf")), 'rest');
        echo "
                        ";
        // line 246
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formImf"]) ? $context["formImf"] : $this->getContext($context, "formImf")), 'form_end');
        echo "
                    </div>
                    <div class=\"item borderhide\">
                        <h3>Code des investissements</h3>
                        ";
        // line 250
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formIrvm"]) ? $context["formIrvm"] : $this->getContext($context, "formIrvm")), 'form_start');
        echo "
                        ";
        // line 252
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formIrvm"]) ? $context["formIrvm"] : $this->getContext($context, "formIrvm")), 'errors');
        echo "
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
        // line 262
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formIrvm"]) ? $context["formIrvm"] : $this->getContext($context, "formIrvm")), "duree", array()), 'errors');
        echo "
                                            ";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formIrvm"]) ? $context["formIrvm"] : $this->getContext($context, "formIrvm")), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            ";
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formIrvm"]) ? $context["formIrvm"] : $this->getContext($context, "formIrvm")), "taux", array()), 'errors');
        echo "
                                            ";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formIrvm"]) ? $context["formIrvm"] : $this->getContext($context, "formIrvm")), "taux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 276
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formIrvm"]) ? $context["formIrvm"] : $this->getContext($context, "formIrvm")), 'rest');
        echo "
                        ";
        // line 278
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formIrvm"]) ? $context["formIrvm"] : $this->getContext($context, "formIrvm")), 'form_end');
        echo "
                        ";
        // line 279
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formIrc"]) ? $context["formIrc"] : $this->getContext($context, "formIrc")), 'form_start');
        echo "
                        ";
        // line 281
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formIrc"]) ? $context["formIrc"] : $this->getContext($context, "formIrc")), 'errors');
        echo "
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
        // line 291
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formIrc"]) ? $context["formIrc"] : $this->getContext($context, "formIrc")), "duree", array()), 'errors');
        echo "
                                            ";
        // line 292
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formIrc"]) ? $context["formIrc"] : $this->getContext($context, "formIrc")), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            ";
        // line 298
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formIrc"]) ? $context["formIrc"] : $this->getContext($context, "formIrc")), "taux", array()), 'errors');
        echo "
                                            ";
        // line 299
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formIrc"]) ? $context["formIrc"] : $this->getContext($context, "formIrc")), "taux", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 305
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formIrc"]) ? $context["formIrc"] : $this->getContext($context, "formIrc")), 'rest');
        echo "
                        ";
        // line 307
        echo "                        ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formIrc"]) ? $context["formIrc"] : $this->getContext($context, "formIrc")), 'form_end');
        echo "
                    </div>
                    <div class=\"item borderhide\">
                        <h3>Code des investissements</h3>
                        <div class=\"form-group\">
                            <label>Description des dispositions :</label>
                            ";
        // line 313
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionDerog", array()), 'errors');
        echo "
                            ";
        // line 314
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descriptionDerog", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "5")));
        echo "

                        </div>
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Régime d'investissement :</p>
                            </div>
                            <div class=\"panel-body\">
                                ";
        // line 322
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formSource"]) ? $context["formSource"] : $this->getContext($context, "formSource")), 'form_start');
        echo "
                                ";
        // line 324
        echo "                                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formSource"]) ? $context["formSource"] : $this->getContext($context, "formSource")), 'errors');
        echo "
                                <div class=\"row\">
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Nom du code des investissements :</label>
                                            ";
        // line 329
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formSource"]) ? $context["formSource"] : $this->getContext($context, "formSource")), "nomCodeInvest", array()), 'errors');
        echo "
                                            ";
        // line 330
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formSource"]) ? $context["formSource"] : $this->getContext($context, "formSource")), "nomCodeInvest", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Nom du régime :</label>
                                            ";
        // line 336
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formSource"]) ? $context["formSource"] : $this->getContext($context, "formSource")), "nomRegimeInvest", array()), 'errors');
        echo "
                                            ";
        // line 337
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formSource"]) ? $context["formSource"] : $this->getContext($context, "formSource")), "nomRegimeInvest", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Zone :</label>
                                            ";
        // line 343
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formSource"]) ? $context["formSource"] : $this->getContext($context, "formSource")), "nomZonneRegime", array()), 'errors');
        echo "
                                            ";
        // line 344
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["formSource"]) ? $context["formSource"] : $this->getContext($context, "formSource")), "nomZonneRegime", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 348
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formSource"]) ? $context["formSource"] : $this->getContext($context, "formSource")), 'rest');
        echo "
                                ";
        // line 350
        echo "                                ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["formSource"]) ? $context["formSource"] : $this->getContext($context, "formSource")), 'form_end');
        echo "
                                ";
        // line 351
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ajouterLePays", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
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
        // line 373
        echo "



    ";
        // line 378
        echo "

    ";
        // line 383
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 386
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
        return array (  730 => 386,  724 => 383,  720 => 378,  714 => 373,  690 => 351,  685 => 350,  681 => 348,  674 => 344,  670 => 343,  661 => 337,  657 => 336,  648 => 330,  644 => 329,  635 => 324,  631 => 322,  620 => 314,  616 => 313,  606 => 307,  602 => 305,  593 => 299,  589 => 298,  580 => 292,  576 => 291,  562 => 281,  558 => 279,  553 => 278,  549 => 276,  540 => 270,  536 => 269,  527 => 263,  523 => 262,  509 => 252,  505 => 250,  497 => 246,  493 => 244,  484 => 238,  480 => 237,  471 => 231,  467 => 230,  453 => 220,  449 => 218,  444 => 217,  440 => 215,  431 => 209,  427 => 208,  418 => 202,  414 => 201,  400 => 191,  396 => 189,  391 => 188,  387 => 186,  378 => 180,  374 => 179,  365 => 173,  361 => 172,  347 => 162,  343 => 160,  331 => 152,  326 => 149,  321 => 147,  317 => 146,  310 => 142,  306 => 141,  299 => 137,  295 => 136,  288 => 132,  284 => 131,  277 => 127,  273 => 126,  266 => 122,  262 => 121,  255 => 118,  250 => 115,  236 => 105,  231 => 102,  226 => 100,  222 => 99,  215 => 95,  211 => 94,  204 => 90,  200 => 89,  193 => 85,  189 => 84,  182 => 80,  178 => 79,  171 => 75,  167 => 74,  160 => 71,  155 => 68,  140 => 56,  136 => 55,  115 => 37,  109 => 34,  105 => 33,  77 => 9,  72 => 6,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
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
                                            {{ form_widget(formAmm.equipement, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                        <div class=\"form-group\">
                                            <label>Camion</label>
                                            {{ form_errors(formAmm.camion) }}
                                            {{ form_widget(formAmm.camion, {'attr': {'class': 'form-control'}}) }}
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
                    <div class=\"item borderhide\">
                        <h3>Code des investissements</h3>
                        {{ form_start(formCfe) }}
                        {# Les erreurs générales du formulaire. #}
                        {{ form_errors(formCfe) }}
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Contributions forfaitaire employeurs :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée</label>
                                            {{ form_errors(formCfe.duree) }}
                                            {{ form_widget(formCfe.duree, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            {{ form_errors(formCfe.taux) }}
                                            {{ form_widget(formCfe.taux, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{ form_rest(formCfe) }}
                        {# Fermeture de la balise <form> du formulaire HTML #}
                        {{ form_end(formCfe) }}
                        {{ form_start(formIs) }}
                        {# Les erreurs générales du formulaire. #}
                        {{ form_errors(formIs) }}
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Impôt société:</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée</label>
                                            {{ form_errors(formIs.duree) }}
                                            {{ form_widget(formIs.duree, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            {{ form_errors(formIs.taux) }}
                                            {{ form_widget(formIs.taux, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{ form_rest(formIs) }}
                        {# Fermeture de la balise <form> du formulaire HTML #}
                        {{ form_end(formIs) }}
                        {{ form_start(formImf) }}
                        {# Les erreurs générales du formulaire. #}
                        {{ form_errors(formImf) }}
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Impôt minimum forfaitaire :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée</label>
                                            {{ form_errors(formImf.duree) }}
                                            {{ form_widget(formImf.duree, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            {{ form_errors(formImf.taux) }}
                                            {{ form_widget(formImf.taux, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{ form_rest(formImf) }}
                        {# Fermeture de la balise <form> du formulaire HTML #}
                        {{ form_end(formImf) }}
                    </div>
                    <div class=\"item borderhide\">
                        <h3>Code des investissements</h3>
                        {{ form_start(formIrvm) }}
                        {# Les erreurs générales du formulaire. #}
                        {{ form_errors(formIrvm) }}
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Impôt sur les revenus des valeurs mobilières :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée</label>
                                            {{ form_errors(formIrvm.duree) }}
                                            {{ form_widget(formIrvm.duree, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            {{ form_errors(formIrvm.taux) }}
                                            {{ form_widget(formIrvm.taux, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{ form_rest(formIrvm) }}
                        {# Fermeture de la balise <form> du formulaire HTML #}
                        {{ form_end(formIrvm) }}
                        {{ form_start(formIrc) }}
                        {# Les erreurs générales du formulaire. #}
                        {{ form_errors(formIrc) }}
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading\">
                                <p>Impôt sur le revenu des creances :</p>
                            </div>
                            <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Durée</label>
                                            {{ form_errors(formIrc.duree) }}
                                            {{ form_widget(formIrc.duree, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"col-sm-6\">
                                        <div class=\"form-group\">
                                            <label>Taux </label>
                                            {{ form_errors(formIrc.taux) }}
                                            {{ form_widget(formIrc.taux, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{ form_rest(formIrc) }}
                        {# Fermeture de la balise <form> du formulaire HTML #}
                        {{ form_end(formIrc) }}
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
                                {{ form_start(formSource) }}
                                {# Les erreurs générales du formulaire. #}
                                {{ form_errors(formSource) }}
                                <div class=\"row\">
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Nom du code des investissements :</label>
                                            {{ form_errors(formSource.nomCodeInvest) }}
                                            {{ form_widget(formSource.nomCodeInvest, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Nom du régime :</label>
                                            {{ form_errors(formSource.nomRegimeInvest) }}
                                            {{ form_widget(formSource.nomRegimeInvest, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"col-sm-4\">
                                        <div class=\"form-group\">
                                            <label>Zone :</label>
                                            {{ form_errors(formSource.nomZonneRegime) }}
                                            {{ form_widget(formSource.nomZonneRegime, {'attr': {'class': 'form-control'}}) }}
                                        </div>
                                    </div>
                                </div>
                                {{ form_rest(formSource) }}
                                {# Fermeture de la balise <form> du formulaire HTML #}
                                {{ form_end(formSource) }}
                                {{ form_widget(form.ajouterLePays, {'attr': {'class': 'btn btn-default'}}) }}
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


    {# Génération automatique des champs pas encore écrits.
       Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
       et tous les champs cachés (type « hidden »). #}
    {{ form_rest(form) }}

    {# Fermeture de la balise <form> du formulaire HTML #}
    {{ form_end(form) }}

{% endblock %}", "TEMImainBundle:Temi:addLand.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle\\Resources\\views\\Temi\\addLand.html.twig");
    }
}
