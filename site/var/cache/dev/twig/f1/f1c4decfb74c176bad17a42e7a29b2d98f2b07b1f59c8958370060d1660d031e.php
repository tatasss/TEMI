<?php

/* TEMImainBundle:Temi:index.html.twig */
class __TwigTemplate_e6310a153ab50d9cfc0a06b023b40db4b882eb96e2954384d00d755de5164fd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TEMImainBundle:Temi:layout.html.twig", "TEMImainBundle:Temi:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TEMImainBundle:Temi:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:index.html.twig"));

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

        echo " acceuil ";
        
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
        echo "    <div class=\"form-group\">
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
    <button type=\"submit\" class=\"btn btn-default\" onclick=\"validateForm()\">Valider</button>
    <button type=\"submit\" class=\"btn btn-default hide\" id=\"myBtn\" onclick=\"showModal()\" disabled>Demarrer Comparaison
    </button>
    <div>
        <br/>
        <div id=\"result\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 35
        echo "    <script src=\"../javascript/start/index.js\"></script>
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

    <script>


        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabLand"]) ? $context["tabLand"] : $this->getContext($context, "tabLand")));
        foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
            // line 55
            echo "        land.ajouterPays(
            maker.land(
                '";
            // line 57
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["land"], "code", array())), "html", null, true);
            echo "',
                '";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["land"], "name", array()), "html", null, true);
            echo "',
                maker.impot(";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "impot", array()), "cfe", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "impot", array()), "isImp", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "impot", array()), "imf", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "impot", array()), "irvm", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "impot", array()), "irc", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "impot", array()), "tvaPetrole", array()), "html", null, true);
            echo "),
                maker.ammortissement(";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "ammort", array()), "construction", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "ammort", array()), "equipement", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "ammort", array()), "coefdegressif", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "ammort", array()), "camion", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "ammort", array()), "matInformatique", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "ammort", array()), "matBureau", array()), "html", null, true);
            echo "),
                maker.investir(
                    maker.impotPays(
                            ";
            // line 63
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "duree", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "duree", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 64
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "taux", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "taux", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 65
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "reducexo", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "reducexo", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo "),
                    maker.isImpotPays(
                            ";
            // line 67
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "IsInv", array()), "duree", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "isInv", array()), "duree", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 68
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "IsInv", array()), "taux", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "isInv", array()), "taux", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 69
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "IsInv", array()), "reducexo", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "isInv", array()), "reducexo", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 70
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "IsInv", array()), "ammortTauxEx", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "isInv", array()), "ammortTauxEx", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 71
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "IsInv", array()), "ammortLimit", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "isInv", array()), "ammortLimit", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo "),
                    maker.impotPays(
                            ";
            // line 73
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "duree", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "duree", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 74
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "taux", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "taux", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 75
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "reducexo", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "reducexo", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo "),
                    maker.impotPays(
                            ";
            // line 77
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "duree", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "duree", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 78
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "taux", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "taux", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 79
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "reducexo", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "reducexo", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo "),
                    maker.impotPays(
                            ";
            // line 81
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "duree", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "duree", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 82
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "taux", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "taux", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 83
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "reducexo", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "reducexo", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo "),
                    ";
            // line 84
            if (($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()) != null)) {
                // line 85
                echo "                    maker.impotPays(
                            ";
                // line 86
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "duree", array()) != null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "duree", array()), "html", null, true);
                } else {
                    echo "null";
                }
                echo ",
                            ";
                // line 87
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "taux", array()) != null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "taux", array()), "html", null, true);
                } else {
                    echo "null";
                }
                echo ",
                            ";
                // line 88
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "reducexo", array()) != null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "reducexo", array()), "html", null, true);
                } else {
                    echo "null";
                }
                echo "),
                    ";
            } else {
                // line 90
                echo "                    maker.impotPays(null,null,null),
                    ";
            }
            // line 92
            echo "                ),
                '";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["land"], "descriptionDerog", array()), "html", null, true);
            echo "',
                '";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "source", array()), "nomCodeInvest", array()), "html", null, true);
            echo " <br/> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "source", array()), "nomRegimeInvest", array()), "html", null, true);
            echo " <br/> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["land"], "source", array()), "nomZonneRegime", array()), "html", null, true);
            echo "'
            ));
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['land'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
    </script>

    <script src=\"../javascript/view/directlyChange/ViewManufacturing.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  378 => 97,  365 => 94,  361 => 93,  358 => 92,  354 => 90,  345 => 88,  337 => 87,  329 => 86,  326 => 85,  324 => 84,  316 => 83,  308 => 82,  300 => 81,  291 => 79,  283 => 78,  275 => 77,  266 => 75,  258 => 74,  250 => 73,  241 => 71,  233 => 70,  225 => 69,  217 => 68,  209 => 67,  200 => 65,  192 => 64,  184 => 63,  168 => 60,  154 => 59,  150 => 58,  146 => 57,  142 => 55,  138 => 54,  117 => 35,  108 => 34,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
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
{% block title %} acceuil {% endblock %}
{% block body %}
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
    <button type=\"submit\" class=\"btn btn-default\" onclick=\"validateForm()\">Valider</button>
    <button type=\"submit\" class=\"btn btn-default hide\" id=\"myBtn\" onclick=\"showModal()\" disabled>Demarrer Comparaison
    </button>
    <div>
        <br/>
        <div id=\"result\"></div>
    </div>
{% endblock %}
{% block js %}
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

    <script>


        {% for land in tabLand %}
        land.ajouterPays(
            maker.land(
                '{{ land.code|upper }}',
                '{{ land.name }}',
                maker.impot({{ land.impot.cfe }},{{ land.impot.isImp }},{{ land.impot.imf }},{{ land.impot.irvm }},{{ land.impot.irc }},{{ land.impot.tvaPetrole }}),
                maker.ammortissement({{ land.ammort.construction }},{{ land.ammort.equipement }},{{ land.ammort.coefdegressif }},{{ land.ammort.camion }},{{ land.ammort.matInformatique }},{{ land.ammort.matBureau }}),
                maker.investir(
                    maker.impotPays(
                            {% if land.invest.cfe.duree != null %}{{ land.invest.cfe.duree }}{% else %}null{% endif %},
                            {% if land.invest.cfe.taux != null %}{{ land.invest.cfe.taux }}{% else %}null{% endif %},
                            {% if land.invest.cfe.reducexo != null %}{{ land.invest.cfe.reducexo }}{% else %}null{% endif %}),
                    maker.isImpotPays(
                            {% if land.invest.IsInv.duree != null %}{{ land.invest.isInv.duree }}{% else %}null{% endif %},
                            {% if land.invest.IsInv.taux != null %}{{  land.invest.isInv.taux }}{% else %}null{% endif %},
                            {% if land.invest.IsInv.reducexo != null %}{{ land.invest.isInv.reducexo }}{% else %}null{% endif %},
                            {% if land.invest.IsInv.ammortTauxEx != null %}{{ land.invest.isInv.ammortTauxEx }}{% else %}null{% endif %},
                            {% if land.invest.IsInv.ammortLimit != null %}{{ land.invest.isInv.ammortLimit }}{% else %}null{% endif %}),
                    maker.impotPays(
                            {% if land.invest.imf.duree != null %}{{ land.invest.imf.duree }}{% else %}null{% endif %},
                            {% if land.invest.imf.taux != null %}{{ land.invest.imf.taux }}{% else %}null{% endif %},
                            {% if land.invest.imf.reducexo != null %}{{ land.invest.imf.reducexo }}{% else %}null{% endif %}),
                    maker.impotPays(
                            {% if land.invest.irvm.duree != null %}{{ land.invest.irvm.duree }}{% else %}null{% endif %},
                            {% if land.invest.irvm.taux != null %}{{ land.invest.irvm.taux }}{% else %}null{% endif %},
                            {% if land.invest.irvm.reducexo != null %}{{ land.invest.irvm.reducexo }}{% else %}null{% endif %}),
                    maker.impotPays(
                            {% if land.invest.irc.duree != null %}{{ land.invest.irc.duree }}{% else %}null{% endif %},
                            {% if land.invest.irc.taux != null %}{{ land.invest.irc.taux }}{% else %}null{% endif %},
                            {% if land.invest.irc.reducexo != null %}{{ land.invest.irc.reducexo }}{% else %}null{% endif %}),
                    {% if land.invest.tvaPetrole!= null %}
                    maker.impotPays(
                            {% if land.invest.tvaPetrole.duree != null %}{{ land.invest.tvaPetrole.duree }}{% else %}null{% endif %},
                            {% if land.invest.tvaPetrole.taux != null %}{{ land.invest.tvaPetrole.taux }}{% else %}null{% endif %},
                            {% if land.invest.tvaPetrole.reducexo != null %}{{ land.invest.tvaPetrole.reducexo }}{% else %}null{% endif %}),
                    {% else %}
                    maker.impotPays(null,null,null),
                    {% endif %}
                ),
                '{{ land.descriptionDerog }}',
                '{{ land.source.nomCodeInvest }} <br/> {{ land.source.nomRegimeInvest }} <br/> {{ land.source.nomZonneRegime }}'
            ));
        {% endfor %}

    </script>

    <script src=\"../javascript/view/directlyChange/ViewManufacturing.js\"></script>
{% endblock %}", "TEMImainBundle:Temi:index.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle/Resources/views/Temi/index.html.twig");
    }
}
