<?php

/* TEMImainBundle:Temi:graphForm.html.twig */
class __TwigTemplate_253f6ad0c973fe4e752b75724c564178b23f69b902c16d40079524bc9a217e06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TEMImainBundle:Temi:layout.html.twig", "TEMImainBundle:Temi:graphForm.html.twig", 1);
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
        $__internal_59dd434565176e37e3798060d0b17a640d2a01035ac814f04d8340a90b3fa7db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59dd434565176e37e3798060d0b17a640d2a01035ac814f04d8340a90b3fa7db->enter($__internal_59dd434565176e37e3798060d0b17a640d2a01035ac814f04d8340a90b3fa7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:graphForm.html.twig"));

        $__internal_a30197e6a50db67aece565a149dcc610b5dd0a7073f98fcbc548c2bd04821ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30197e6a50db67aece565a149dcc610b5dd0a7073f98fcbc548c2bd04821ea5->enter($__internal_a30197e6a50db67aece565a149dcc610b5dd0a7073f98fcbc548c2bd04821ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:graphForm.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59dd434565176e37e3798060d0b17a640d2a01035ac814f04d8340a90b3fa7db->leave($__internal_59dd434565176e37e3798060d0b17a640d2a01035ac814f04d8340a90b3fa7db_prof);

        
        $__internal_a30197e6a50db67aece565a149dcc610b5dd0a7073f98fcbc548c2bd04821ea5->leave($__internal_a30197e6a50db67aece565a149dcc610b5dd0a7073f98fcbc548c2bd04821ea5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc1018835da98432e16997f9e827647088f62b4491e9cc9a34a053edb22a8a57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1018835da98432e16997f9e827647088f62b4491e9cc9a34a053edb22a8a57->enter($__internal_bc1018835da98432e16997f9e827647088f62b4491e9cc9a34a053edb22a8a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14c66ca1aea92690f4f8dcc2cb1a3300a34772bff601ba2398a67346e80ea490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c66ca1aea92690f4f8dcc2cb1a3300a34772bff601ba2398a67346e80ea490->enter($__internal_14c66ca1aea92690f4f8dcc2cb1a3300a34772bff601ba2398a67346e80ea490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <input type=\"text\" class=\"form-control\" id=\"marge\" title=\"marge\" placeholder=\"Ajouter un taux de marge\"/>
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
        
        $__internal_14c66ca1aea92690f4f8dcc2cb1a3300a34772bff601ba2398a67346e80ea490->leave($__internal_14c66ca1aea92690f4f8dcc2cb1a3300a34772bff601ba2398a67346e80ea490_prof);

        
        $__internal_bc1018835da98432e16997f9e827647088f62b4491e9cc9a34a053edb22a8a57->leave($__internal_bc1018835da98432e16997f9e827647088f62b4491e9cc9a34a053edb22a8a57_prof);

    }

    // line 55
    public function block_js($context, array $blocks = array())
    {
        $__internal_831abf740c21e84e0d1dd4fd91f262f908f97a3e654056eba0ec26554f4e4b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_831abf740c21e84e0d1dd4fd91f262f908f97a3e654056eba0ec26554f4e4b1b->enter($__internal_831abf740c21e84e0d1dd4fd91f262f908f97a3e654056eba0ec26554f4e4b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_20e9db360056a8df7fe1ef4494a3b6adc8721611dfd6113c37fa1d4bfe8d54b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20e9db360056a8df7fe1ef4494a3b6adc8721611dfd6113c37fa1d4bfe8d54b6->enter($__internal_20e9db360056a8df7fe1ef4494a3b6adc8721611dfd6113c37fa1d4bfe8d54b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 56
        echo "<script src=\"../javascript/model/anotherFunctiun/verification.js\"></script>
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
        
        $__internal_20e9db360056a8df7fe1ef4494a3b6adc8721611dfd6113c37fa1d4bfe8d54b6->leave($__internal_20e9db360056a8df7fe1ef4494a3b6adc8721611dfd6113c37fa1d4bfe8d54b6_prof);

        
        $__internal_831abf740c21e84e0d1dd4fd91f262f908f97a3e654056eba0ec26554f4e4b1b->leave($__internal_831abf740c21e84e0d1dd4fd91f262f908f97a3e654056eba0ec26554f4e4b1b_prof);

    }

    public function getTemplateName()
    {
        return "TEMImainBundle:Temi:graphForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 56,  111 => 55,  50 => 3,  41 => 2,  11 => 1,);
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
                        <input type=\"text\" class=\"form-control\" id=\"marge\" title=\"marge\" placeholder=\"Ajouter un taux de marge\"/>
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
{% endblock %}", "TEMImainBundle:Temi:graphForm.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle\\Resources\\views\\Temi\\graphForm.html.twig");
    }
}
