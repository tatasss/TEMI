<?php

/* TEMImainBundle:Connection:inscription.html.twig */
class __TwigTemplate_a9b51bf84ce42b7dd9496189a8cce2f7a826f43ad3a098d3049e6f215805c493 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Connection:inscription.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Connection:inscription.html.twig"));

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
        echo "    <div class=\"form-group\">
        <label>Nom :</label>
        <input type=\"text\" class=\"form-control\" id=\"nomUser\" title=\"nomUser\" placeholder=\"Veuillez saisir votre nom\"/>
    </div>
    <div class=\"form-group\">
        <label>Prenom :</label>
        <input type=\"text\" class=\"form-control\" id=\"prenomUser\" title=\"prenomUser\"
               placeholder=\"Veuillez saisir votre prenom\"/>
    </div>
    <div class=\"form-group\">
        <label>Email :</label>
        <input type=\"email\" class=\"form-control\" id=\"mailUser\" title=\"mailUser\"
               placeholder=\"Veuillez saisir votre Email\"/>
    </div>
    <div class=\"form-group\">
        <label>Mot de passe :</label>
        <input type=\"password\" class=\"form-control\" id=\"mdpUser\" title=\"mdpUser\"
               placeholder=\"Veuillez saisir votre mot de passe\"/>
    </div>
    <div class=\"form-group\">
        <label>Confirmer mot de passe :</label>
        <input type=\"password\" class=\"form-control\" id=\"mdpUser\" title=\"mdpUser\"
               placeholder=\"Veuillez encore saisir votre mot de passe\"/>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        <input type=\"text\" class=\"form-control\" id=\"prenomUser\" title=\"prenomUser\"
               placeholder=\"Veuillez saisir votre prenom\"/>
    </div>
    <div class=\"form-group\">
        <label>Email :</label>
        <input type=\"email\" class=\"form-control\" id=\"mailUser\" title=\"mailUser\"
               placeholder=\"Veuillez saisir votre Email\"/>
    </div>
    <div class=\"form-group\">
        <label>Mot de passe :</label>
        <input type=\"password\" class=\"form-control\" id=\"mdpUser\" title=\"mdpUser\"
               placeholder=\"Veuillez saisir votre mot de passe\"/>
    </div>
    <div class=\"form-group\">
        <label>Confirmer mot de passe :</label>
        <input type=\"password\" class=\"form-control\" id=\"mdpUser\" title=\"mdpUser\"
               placeholder=\"Veuillez encore saisir votre mot de passe\"/>
    </div>
{% endblock %}", "TEMImainBundle:Connection:inscription.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle\\Resources\\views\\Connection\\inscription.html.twig");
    }
}
