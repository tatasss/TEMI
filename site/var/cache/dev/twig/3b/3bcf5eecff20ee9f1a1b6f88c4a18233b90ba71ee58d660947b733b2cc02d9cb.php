<?php

/* TEMImainBundle:Connection:inscription.html.twig */
class __TwigTemplate_57c4332dcb6b53d671c6b7abeac690be4f5a67624b5db4ecda4458ec880aafa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TEMImainBundle:Temi:layout.html.twig", "TEMImainBundle:Connection:inscription.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TEMImainBundle:Temi:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69b6b7aadcb3e60d991af7ecc681be4c234603a7d22d76a6f201d3a88ab8a2c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b6b7aadcb3e60d991af7ecc681be4c234603a7d22d76a6f201d3a88ab8a2c9->enter($__internal_69b6b7aadcb3e60d991af7ecc681be4c234603a7d22d76a6f201d3a88ab8a2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Connection:inscription.html.twig"));

        $__internal_27b0ec3ccda6c8c62b456df84cf9b2b33d8ffc02e944cf24b21c5ce6d8f0fd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b0ec3ccda6c8c62b456df84cf9b2b33d8ffc02e944cf24b21c5ce6d8f0fd03->enter($__internal_27b0ec3ccda6c8c62b456df84cf9b2b33d8ffc02e944cf24b21c5ce6d8f0fd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Connection:inscription.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69b6b7aadcb3e60d991af7ecc681be4c234603a7d22d76a6f201d3a88ab8a2c9->leave($__internal_69b6b7aadcb3e60d991af7ecc681be4c234603a7d22d76a6f201d3a88ab8a2c9_prof);

        
        $__internal_27b0ec3ccda6c8c62b456df84cf9b2b33d8ffc02e944cf24b21c5ce6d8f0fd03->leave($__internal_27b0ec3ccda6c8c62b456df84cf9b2b33d8ffc02e944cf24b21c5ce6d8f0fd03_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f114d413225bf1bab8d46bb1fd823da882e7bb75af6b0e8603d929f35862931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f114d413225bf1bab8d46bb1fd823da882e7bb75af6b0e8603d929f35862931->enter($__internal_2f114d413225bf1bab8d46bb1fd823da882e7bb75af6b0e8603d929f35862931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3dbf776dd7a86a4221d237d8a355d6be53d4af0c93d574b6d24a21699ae6ecb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dbf776dd7a86a4221d237d8a355d6be53d4af0c93d574b6d24a21699ae6ecb6->enter($__internal_3dbf776dd7a86a4221d237d8a355d6be53d4af0c93d574b6d24a21699ae6ecb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"form-group\">
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
";
        
        $__internal_3dbf776dd7a86a4221d237d8a355d6be53d4af0c93d574b6d24a21699ae6ecb6->leave($__internal_3dbf776dd7a86a4221d237d8a355d6be53d4af0c93d574b6d24a21699ae6ecb6_prof);

        
        $__internal_2f114d413225bf1bab8d46bb1fd823da882e7bb75af6b0e8603d929f35862931->leave($__internal_2f114d413225bf1bab8d46bb1fd823da882e7bb75af6b0e8603d929f35862931_prof);

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
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
{% endblock %}", "TEMImainBundle:Connection:inscription.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle\\Resources\\views\\Connection\\inscription.html.twig");
    }
}
