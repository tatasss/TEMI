<?php

/* @TEMImain/Temi/graphForm.html.twig */
class __TwigTemplate_63cb8311f3d329e6976b42b3f3bf61a2579ce924d039292fb5416ddbe44a341e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TEMImainBundle:Temi:layout.html.twig", "@TEMImain/Temi/graphForm.html.twig", 1);
        $this->blocks = array(
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TEMImain/Temi/graphForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TEMImain/Temi/graphForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class='row '>
        <div class='col-sm-10'>
            <div class='row vertical-form'>
                <div class='col-sm-10'>
                    <div class=\"form-group\">

                        <div id=\"formPays\"></div>
                    </div>
                    <div class=\"form-group\">
                        <label>Taux de marge de l'entreprise:</label>
                        <input type=\"text\" class=\"form-control\" id=\"marge\" title=\"marge\"
                               placeholder=\"Ajouter un taux de marge\"/>
                    </div>
                </div>
                <div class='col-sm-2 '>
                    <div id=\"addPays\">
                        <button type=\"button\" class=\"btn btn-block\">
                            <div class='row'>
                                <div class='col-sm-8'>
                                    <p>ajouter un <br/>pays</p>
                                </div>
                                <div class='col-sm-2'>
                                    <p><span class=\"glyphicon glyphicon-plus-sign\"> </span></p>
                                </div>
                            </div>
                        </button>
                    </div>
                    <p>

                    </p>
                    <div id=\"addEnt\">
                        <button type=\"button\" class=\"btn btn-block\">
                            <div class='row'>
                                <div class='col-sm-8'>
                                    <p>ajouter<br/> une <br/>entreprise</p>
                                </div>
                                <div class='col-sm-2'>
                                    <br/>
                                    <span class=\"glyphicon glyphicon-plus-sign\"> </span>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div id=\"info\"></div>
            <div id=\"graph-container\"></div>
        </div>
        <div class=\"col-sm-2\">
            <div id=\"param\"></div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 56
    public function block_js($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 57
        echo "    <script src=\"../node_modules/chart.js/dist/Chart.min.js\"></script>
    <script src=\"../node_modules/chart.js/dist/Chart.bundle.min.js\"></script>
    <script src=\"../node_modules/excellentexport/dist/excellentexport.js\"></script>
    <script src=\"../javascript/model/anotherFunctiun/verification.js\"></script>
    <script src=\"../javascript/model/anotherFunctiun/XMLRequest.js\"></script>
    <script src=\"../javascript/model/anotherFunctiun/excel.js\"></script>
    <script src=\"../javascript/model/anotherFunctiun/myMath.js\"></script>
    <script src=\"../javascript/model/anotherFunctiun/Ref.js\"></script>
    <script src=\"../javascript/view/viewGenerator/bootstrapView.js\"></script>
    <script src=\"../javascript/manufacturing/manufact.js\"></script>
    <script src=\"../javascript/model/modelManager.js\"></script>
    <script src=\"../javascript/view/viewGenerator/graphGenerator.js\"></script>
    <script src=\"../javascript/view/viewGenerator/ViewGenerator.js\"></script>
    <script src=\"../javascript/model/model.js\"></script>
    <script src=\"../javascript/data/PaysListe.js\"></script>
    <script src=\"../javascript/data/data.js\"></script>
    <script src=\"../javascript/start/script.js\"></script>
    <script src=\"../javascript/view/directlyChange/graphFormView.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@TEMImain/Temi/graphForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 57,  112 => 56,  50 => 3,  41 => 2,  11 => 1,);
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
{% block body %}
    <div class='row '>
        <div class='col-sm-10'>
            <div class='row vertical-form'>
                <div class='col-sm-10'>
                    <div class=\"form-group\">

                        <div id=\"formPays\"></div>
                    </div>
                    <div class=\"form-group\">
                        <label>Taux de marge de l'entreprise:</label>
                        <input type=\"text\" class=\"form-control\" id=\"marge\" title=\"marge\"
                               placeholder=\"Ajouter un taux de marge\"/>
                    </div>
                </div>
                <div class='col-sm-2 '>
                    <div id=\"addPays\">
                        <button type=\"button\" class=\"btn btn-block\">
                            <div class='row'>
                                <div class='col-sm-8'>
                                    <p>ajouter un <br/>pays</p>
                                </div>
                                <div class='col-sm-2'>
                                    <p><span class=\"glyphicon glyphicon-plus-sign\"> </span></p>
                                </div>
                            </div>
                        </button>
                    </div>
                    <p>

                    </p>
                    <div id=\"addEnt\">
                        <button type=\"button\" class=\"btn btn-block\">
                            <div class='row'>
                                <div class='col-sm-8'>
                                    <p>ajouter<br/> une <br/>entreprise</p>
                                </div>
                                <div class='col-sm-2'>
                                    <br/>
                                    <span class=\"glyphicon glyphicon-plus-sign\"> </span>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
            <div id=\"info\"></div>
            <div id=\"graph-container\"></div>
        </div>
        <div class=\"col-sm-2\">
            <div id=\"param\"></div>
        </div>
    </div>
{% endblock %}
{% block js %}
    <script src=\"../node_modules/chart.js/dist/Chart.min.js\"></script>
    <script src=\"../node_modules/chart.js/dist/Chart.bundle.min.js\"></script>
    <script src=\"../node_modules/excellentexport/dist/excellentexport.js\"></script>
    <script src=\"../javascript/model/anotherFunctiun/verification.js\"></script>
    <script src=\"../javascript/model/anotherFunctiun/XMLRequest.js\"></script>
    <script src=\"../javascript/model/anotherFunctiun/excel.js\"></script>
    <script src=\"../javascript/model/anotherFunctiun/myMath.js\"></script>
    <script src=\"../javascript/model/anotherFunctiun/Ref.js\"></script>
    <script src=\"../javascript/view/viewGenerator/bootstrapView.js\"></script>
    <script src=\"../javascript/manufacturing/manufact.js\"></script>
    <script src=\"../javascript/model/modelManager.js\"></script>
    <script src=\"../javascript/view/viewGenerator/graphGenerator.js\"></script>
    <script src=\"../javascript/view/viewGenerator/ViewGenerator.js\"></script>
    <script src=\"../javascript/model/model.js\"></script>
    <script src=\"../javascript/data/PaysListe.js\"></script>
    <script src=\"../javascript/data/data.js\"></script>
    <script src=\"../javascript/start/script.js\"></script>
    <script src=\"../javascript/view/directlyChange/graphFormView.js\"></script>
{% endblock %}", "@TEMImain/Temi/graphForm.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle\\Resources\\views\\Temi\\graphForm.html.twig");
    }
}
