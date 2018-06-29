<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_2c944e720cb4eefbb1eaa8a9fc79c530b3ad0023ae65dc02dfacedd39cfaff5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "
<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 8
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : null)) {
            // line 9
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
            echo "\"/>
    ";
        }
        // line 11
        echo "    <div class=\"form-group\">
        <label for=\"username\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Nom", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\"
               autocomplete=\"username\"/>
    </div>
    <div class=\"form-group\">
        <label for=\"password\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mot de passe :", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"password\" class=\"form-control\"  id=\"password\" name=\"_password\" required=\"required\" autocomplete=\"current-password\"/>
    </div>
    <div class=\"form-group\">
        <input type=\"checkbox\"  id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
        <label for=\"remember_me\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Se souvenir de moi", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    </div>

    <input type=\"submit\" class=\"btn btn-default\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Valider", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 25,  67 => 22,  59 => 17,  52 => 13,  48 => 12,  45 => 11,  39 => 9,  37 => 8,  33 => 7,  30 => 6,  24 => 4,  22 => 3,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login_content.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
