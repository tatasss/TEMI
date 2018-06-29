<?php

/* @TEMImain/Temi/index.html.twig */
class __TwigTemplate_354382d2ec8c59af0594c0707697646e3ed69f272f217bdcb5af2151a6f62feb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TEMImainBundle:Temi:layout.html.twig", "@TEMImain/Temi/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TEMImain/Temi/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TEMImain/Temi/index.html.twig"));

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
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5300c02_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5300c02_index_1.js");
            // line 53
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5300c02_XMLRequest_2.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5300c02_verification_3.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_3") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5300c02_myMath_4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_4") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5300c02_Ref_5.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5300c02_bootstrapView_6.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_6") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5300c02_manufact_7.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_7") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5300c02_startingLand_8.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_8") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5300c02_modelManager_9.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_9") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5300c02_model_10.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_10") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5300c02_graphGenerator_11.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_11") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5300c02_ViewGenerator_12.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_12") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5300c02_data_13.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_13") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5300c02_PaysListe_14.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "5300c02_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02_14") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5300c02_script_15.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "5300c02"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5300c02") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/5300c02.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 55
        echo "

    <script>
        ";
        // line 58
        if ((twig_length_filter($this->env, (isset($context["tabLand"]) ? $context["tabLand"] : $this->getContext($context, "tabLand"))) == 0)) {
            // line 59
            echo "            sessionStorage.clear();
            createDebutPAys();
            land=new Land();
            //window.location.reload(true);
        ";
        }
        // line 64
        echo "
        ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabLand"]) ? $context["tabLand"] : $this->getContext($context, "tabLand")));
        foreach ($context['_seq'] as $context["_key"] => $context["land"]) {
            // line 66
            echo "        land.ajouterPays(
            maker.land(
                '";
            // line 68
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["land"], "code", array())), "html", null, true);
            echo "',
                '";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["land"], "name", array()), "html", null, true);
            echo "',
                maker.impot(";
            // line 70
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
            // line 71
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
            // line 74
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "duree", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "duree", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 75
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "taux", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "taux", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 76
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "reducexo", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "cfe", array()), "reducexo", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo "),
                    maker.isImpotPays(
                            ";
            // line 78
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "IsInv", array()), "duree", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "isInv", array()), "duree", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 79
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "IsInv", array()), "taux", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "isInv", array()), "taux", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 80
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "IsInv", array()), "reducexo", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "isInv", array()), "reducexo", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 81
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "IsInv", array()), "ammortTauxEx", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "isInv", array()), "ammortTauxEx", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 82
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "IsInv", array()), "ammortLimit", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "isInv", array()), "ammortLimit", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo "),
                    maker.impotPays(
                            ";
            // line 84
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "duree", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "duree", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 85
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "taux", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "taux", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 86
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "reducexo", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "imf", array()), "reducexo", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo "),
                    maker.impotPays(
                            ";
            // line 88
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "duree", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "duree", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 89
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "taux", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "taux", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 90
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "reducexo", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irvm", array()), "reducexo", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo "),
                    maker.impotPays(
                            ";
            // line 92
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "duree", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "duree", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 93
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "taux", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "taux", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo ",
                            ";
            // line 94
            if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "reducexo", array()) != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "irc", array()), "reducexo", array()), "html", null, true);
            } else {
                echo "null";
            }
            echo "),
                    ";
            // line 95
            if (($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()) != null)) {
                // line 96
                echo "                    maker.impotPays(
                            ";
                // line 97
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "duree", array()) != null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "duree", array()), "html", null, true);
                } else {
                    echo "null";
                }
                echo ",
                            ";
                // line 98
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "taux", array()) != null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "taux", array()), "html", null, true);
                } else {
                    echo "null";
                }
                echo ",
                            ";
                // line 99
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "reducexo", array()) != null)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["land"], "invest", array()), "tvaPetrole", array()), "reducexo", array()), "html", null, true);
                } else {
                    echo "null";
                }
                echo "),
                    ";
            } else {
                // line 101
                echo "                    maker.impotPays(null,null,null),
                    ";
            }
            // line 103
            echo "                ),
                '";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["land"], "descriptionDerog", array()), "html", null, true);
            echo "',
                '";
            // line 105
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
        // line 108
        echo "
    </script>

    <script src=\"../javascript/view/directlyChange/ViewManufacturing.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  477 => 108,  464 => 105,  460 => 104,  457 => 103,  453 => 101,  444 => 99,  436 => 98,  428 => 97,  425 => 96,  423 => 95,  415 => 94,  407 => 93,  399 => 92,  390 => 90,  382 => 89,  374 => 88,  365 => 86,  357 => 85,  349 => 84,  340 => 82,  332 => 81,  324 => 80,  316 => 79,  308 => 78,  299 => 76,  291 => 75,  283 => 74,  267 => 71,  253 => 70,  249 => 69,  245 => 68,  241 => 66,  237 => 65,  234 => 64,  227 => 59,  225 => 58,  220 => 55,  122 => 53,  117 => 35,  108 => 34,  69 => 4,  60 => 3,  42 => 2,  11 => 1,);
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
    {% javascripts
        'bundles/temimain/javascript/start/index.js'
        'bundles/temimain/javascript/model/anotherFunctiun/XMLRequest.js'
        'bundles/temimain/javascript/model/anotherFunctiun/verification.js'
        'bundles/temimain/javascript/model/anotherFunctiun/myMath.js'
        'bundles/temimain/javascript/model/anotherFunctiun/Ref.js'
        'bundles/temimain/javascript/view/viewGenerator/bootstrapView.js'
        'bundles/temimain/javascript/manufacturing/manufact.js'
        'bundles/temimain/javascript/data/startingLand.js'
        'bundles/temimain/javascript/model/modelManager.js'
        'bundles/temimain/javascript/model/model.js'
        'bundles/temimain/javascript/view/viewGenerator/graphGenerator.js'
        'bundles/temimain/javascript/view/viewGenerator/ViewGenerator.js'
        'bundles/temimain/javascript/data/data.js'
        'bundles/temimain/javascript/data/PaysListe.js'
        'bundles/temimain/javascript/start/script.js'

    %}
    <script src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}


    <script>
        {% if tabLand|length ==0 %}
            sessionStorage.clear();
            createDebutPAys();
            land=new Land();
            //window.location.reload(true);
        {% endif %}

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
{% endblock %}", "@TEMImain/Temi/index.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle\\Resources\\views\\Temi\\index.html.twig");
    }
}
