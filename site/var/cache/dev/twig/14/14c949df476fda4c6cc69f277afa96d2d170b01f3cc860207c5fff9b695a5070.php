<?php

/* TEMImainBundle:Temi:index.html.twig */
class __TwigTemplate_7f101169f40660af3a81c4512e655bea38f00ebb069e6ac157fdd95aa48d1127 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TEMImainBundle:Temi:layout.html.twig", "TEMImainBundle:Temi:index.html.twig", 1);
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
        $__internal_114e074c3b19a05a6f14cc718c39a6ef00108ad1355f572efb9c2e5438349262 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_114e074c3b19a05a6f14cc718c39a6ef00108ad1355f572efb9c2e5438349262->enter($__internal_114e074c3b19a05a6f14cc718c39a6ef00108ad1355f572efb9c2e5438349262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:index.html.twig"));

        $__internal_efa06aa9901cedba60ecdb6cd16ba4ddfd7bb12c66ec75b6ce5dd86b2a3f3e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa06aa9901cedba60ecdb6cd16ba4ddfd7bb12c66ec75b6ce5dd86b2a3f3e28->enter($__internal_efa06aa9901cedba60ecdb6cd16ba4ddfd7bb12c66ec75b6ce5dd86b2a3f3e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_114e074c3b19a05a6f14cc718c39a6ef00108ad1355f572efb9c2e5438349262->leave($__internal_114e074c3b19a05a6f14cc718c39a6ef00108ad1355f572efb9c2e5438349262_prof);

        
        $__internal_efa06aa9901cedba60ecdb6cd16ba4ddfd7bb12c66ec75b6ce5dd86b2a3f3e28->leave($__internal_efa06aa9901cedba60ecdb6cd16ba4ddfd7bb12c66ec75b6ce5dd86b2a3f3e28_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a46a7d8d082e6333f4a84a4fca5c20bf9d9442c5cd6bc0a202733edd275cb0c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46a7d8d082e6333f4a84a4fca5c20bf9d9442c5cd6bc0a202733edd275cb0c3->enter($__internal_a46a7d8d082e6333f4a84a4fca5c20bf9d9442c5cd6bc0a202733edd275cb0c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd2e7a3e936e23d1e87d92d90af44f06d7425c2a3695c44656bb2d28dcdc67c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2e7a3e936e23d1e87d92d90af44f06d7425c2a3695c44656bb2d28dcdc67c4->enter($__internal_cd2e7a3e936e23d1e87d92d90af44f06d7425c2a3695c44656bb2d28dcdc67c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
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
    <button type=\"submit\" class=\"btn btn-default\" onclick=\"validateForm()\">valider</button>
    <button type=\"submit\" class=\"btn btn-default hide\" id=\"myBtn\" onclick=\"showModal()\" disabled>Demarrer Comparaison
    </button>
    <div>
        <br/>
        <div id=\"result\"></div>
    </div>
";
        
        $__internal_cd2e7a3e936e23d1e87d92d90af44f06d7425c2a3695c44656bb2d28dcdc67c4->leave($__internal_cd2e7a3e936e23d1e87d92d90af44f06d7425c2a3695c44656bb2d28dcdc67c4_prof);

        
        $__internal_a46a7d8d082e6333f4a84a4fca5c20bf9d9442c5cd6bc0a202733edd275cb0c3->leave($__internal_a46a7d8d082e6333f4a84a4fca5c20bf9d9442c5cd6bc0a202733edd275cb0c3_prof);

    }

    // line 33
    public function block_js($context, array $blocks = array())
    {
        $__internal_63e421ee5e46a9b07bcef4b2e0b5099b008456152fa7fcd287959bae31c92c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e421ee5e46a9b07bcef4b2e0b5099b008456152fa7fcd287959bae31c92c8c->enter($__internal_63e421ee5e46a9b07bcef4b2e0b5099b008456152fa7fcd287959bae31c92c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_84a42fc6180b300315a0dcb8c475f74ac799ea4ec31414751f24e0c16b65c681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84a42fc6180b300315a0dcb8c475f74ac799ea4ec31414751f24e0c16b65c681->enter($__internal_84a42fc6180b300315a0dcb8c475f74ac799ea4ec31414751f24e0c16b65c681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 34
        echo "<script src=\"../javascript/start/index.js\"></script>
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
";
        
        $__internal_84a42fc6180b300315a0dcb8c475f74ac799ea4ec31414751f24e0c16b65c681->leave($__internal_84a42fc6180b300315a0dcb8c475f74ac799ea4ec31414751f24e0c16b65c681_prof);

        
        $__internal_63e421ee5e46a9b07bcef4b2e0b5099b008456152fa7fcd287959bae31c92c8c->leave($__internal_63e421ee5e46a9b07bcef4b2e0b5099b008456152fa7fcd287959bae31c92c8c_prof);

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
        return array (  98 => 34,  89 => 33,  50 => 3,  41 => 2,  11 => 1,);
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


<script src=\"../javascript/view/directlyChange/ViewManufacturing.js\"></script>
{% endblock %}", "TEMImainBundle:Temi:index.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle\\Resources\\views\\Temi\\index.html.twig");
    }
}
