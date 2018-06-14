<?php

/* TEMImainBundle:Advert:index.html.twig */
class __TwigTemplate_0ee0bc22718b56bbb5546546f0b5c4faec38ae3575d5bf9548987d1ac2f1758a extends Twig_Template
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
        $__internal_a9b94afc581aa877a84a920131341370b343f1bae821817733f2c748b255974a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b94afc581aa877a84a920131341370b343f1bae821817733f2c748b255974a->enter($__internal_a9b94afc581aa877a84a920131341370b343f1bae821817733f2c748b255974a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Advert:index.html.twig"));

        $__internal_2577289374c37e364bd411124290a82e1f7ad07ed85294d9834fb4f91ea950bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2577289374c37e364bd411124290a82e1f7ad07ed85294d9834fb4f91ea950bd->enter($__internal_2577289374c37e364bd411124290a82e1f7ad07ed85294d9834fb4f91ea950bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TEMImainBundle:Advert:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <title>Ma première page symfony</title>
    <meta charset=\"utf-8\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
</head>
<body>
<p>
    Voici la première page ma geule
</p>
</body>
</html>";
        
        $__internal_a9b94afc581aa877a84a920131341370b343f1bae821817733f2c748b255974a->leave($__internal_a9b94afc581aa877a84a920131341370b343f1bae821817733f2c748b255974a_prof);

        
        $__internal_2577289374c37e364bd411124290a82e1f7ad07ed85294d9834fb4f91ea950bd->leave($__internal_2577289374c37e364bd411124290a82e1f7ad07ed85294d9834fb4f91ea950bd_prof);

    }

    public function getTemplateName()
    {
        return "TEMImainBundle:Advert:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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
<html lang=\"fr\">
<head>
    <title>Ma première page symfony</title>
    <meta charset=\"utf-8\">

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
</head>
<body>
<p>
    Voici la première page ma geule
</p>
</body>
</html>", "TEMImainBundle:Advert:index.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle/Resources/views/Advert/index.html.twig");
    }
}
