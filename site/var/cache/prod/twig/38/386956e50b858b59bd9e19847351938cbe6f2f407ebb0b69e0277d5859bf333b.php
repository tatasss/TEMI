<?php

/* TEMImainBundle:Advert:index.html.twig */
class __TwigTemplate_446ecb5decf619f861b6fc4d5b8f1f2bedfbdbae2885a5f17a783ca71fb07022 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "TEMImainBundle:Advert:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TEMImainBundle:Advert:index.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\src\\TEMI\\mainBundle/Resources/views/Advert/index.html.twig");
    }
}
