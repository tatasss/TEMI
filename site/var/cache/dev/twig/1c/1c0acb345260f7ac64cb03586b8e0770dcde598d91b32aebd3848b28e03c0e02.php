<?php

/* TEMImainBundle:Temi:layout.html.twig */
class __TwigTemplate_f8b32cd76eed22ccd5b036b965de488b274518653bc1a5e82841a640b1482fe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_588a34708e4ab46a8fc25fe97c89a91bafa1c2b188514c46671b5a85ae98c06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588a34708e4ab46a8fc25fe97c89a91bafa1c2b188514c46671b5a85ae98c06c->enter($__internal_588a34708e4ab46a8fc25fe97c89a91bafa1c2b188514c46671b5a85ae98c06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:layout.html.twig"));

        $__internal_580ebf76898b30de64136e04f91ea91f5cfb047d8adb2df445803064fbe230a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580ebf76898b30de64136e04f91ea91f5cfb047d8adb2df445803064fbe230a6->enter($__internal_580ebf76898b30de64136e04f91ea91f5cfb047d8adb2df445803064fbe230a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Temi:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\" xmlns=\"http://www.w3.org/1999/html\">
<head>
    <title>index</title>
    <meta charset=\"utf-8\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"../image/logo_CERDI_UCA-01.png\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"../css/general.css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</head>
<body>
<div id=\"menu\">
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("TEMImainBundle:Temi:menu"));
        echo "
</div>
<div class=\"container\">
";
        // line 19
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "</div>
";
        // line 22
        $this->displayBlock('js', $context, $blocks);
        // line 25
        echo "

</body>
</html>";
        
        $__internal_588a34708e4ab46a8fc25fe97c89a91bafa1c2b188514c46671b5a85ae98c06c->leave($__internal_588a34708e4ab46a8fc25fe97c89a91bafa1c2b188514c46671b5a85ae98c06c_prof);

        
        $__internal_580ebf76898b30de64136e04f91ea91f5cfb047d8adb2df445803064fbe230a6->leave($__internal_580ebf76898b30de64136e04f91ea91f5cfb047d8adb2df445803064fbe230a6_prof);

    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9dc052558fac7a4b8a82eb30644cc5c6722eda8dcde5f16191e46f9b5208cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9dc052558fac7a4b8a82eb30644cc5c6722eda8dcde5f16191e46f9b5208cba->enter($__internal_c9dc052558fac7a4b8a82eb30644cc5c6722eda8dcde5f16191e46f9b5208cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_29b967cb2a8bda43cb3736a6327c69e371a640bf4e7cdda41b0efbdb6a89379b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b967cb2a8bda43cb3736a6327c69e371a640bf4e7cdda41b0efbdb6a89379b->enter($__internal_29b967cb2a8bda43cb3736a6327c69e371a640bf4e7cdda41b0efbdb6a89379b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_29b967cb2a8bda43cb3736a6327c69e371a640bf4e7cdda41b0efbdb6a89379b->leave($__internal_29b967cb2a8bda43cb3736a6327c69e371a640bf4e7cdda41b0efbdb6a89379b_prof);

        
        $__internal_c9dc052558fac7a4b8a82eb30644cc5c6722eda8dcde5f16191e46f9b5208cba->leave($__internal_c9dc052558fac7a4b8a82eb30644cc5c6722eda8dcde5f16191e46f9b5208cba_prof);

    }

    // line 22
    public function block_js($context, array $blocks = array())
    {
        $__internal_290902ceb8eb6751cd20fca7468fd58b34d862408fff1d5dd9d7b4cee17e9214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290902ceb8eb6751cd20fca7468fd58b34d862408fff1d5dd9d7b4cee17e9214->enter($__internal_290902ceb8eb6751cd20fca7468fd58b34d862408fff1d5dd9d7b4cee17e9214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        $__internal_b4519e23defbd59eea6460366e601bf54a95e128ea49168705af91d3d19890b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4519e23defbd59eea6460366e601bf54a95e128ea49168705af91d3d19890b9->enter($__internal_b4519e23defbd59eea6460366e601bf54a95e128ea49168705af91d3d19890b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 23
        echo "
";
        
        $__internal_b4519e23defbd59eea6460366e601bf54a95e128ea49168705af91d3d19890b9->leave($__internal_b4519e23defbd59eea6460366e601bf54a95e128ea49168705af91d3d19890b9_prof);

        
        $__internal_290902ceb8eb6751cd20fca7468fd58b34d862408fff1d5dd9d7b4cee17e9214->leave($__internal_290902ceb8eb6751cd20fca7468fd58b34d862408fff1d5dd9d7b4cee17e9214_prof);

    }

    public function getTemplateName()
    {
        return "TEMImainBundle:Temi:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 23,  87 => 22,  70 => 19,  57 => 25,  55 => 22,  52 => 21,  50 => 19,  44 => 16,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\" xmlns=\"http://www.w3.org/1999/html\">
<head>
    <title>index</title>
    <meta charset=\"utf-8\">
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"../image/logo_CERDI_UCA-01.png\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"../css/general.css\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</head>
<body>
<div id=\"menu\">
    {{ render(controller(\"TEMImainBundle:Temi:menu\")) }}
</div>
<div class=\"container\">
{% block body %}
{% endblock %}
</div>
{% block js %}

{% endblock %}


</body>
</html>", "TEMImainBundle:Temi:layout.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle/Resources/views/Temi/layout.html.twig");
    }
}
