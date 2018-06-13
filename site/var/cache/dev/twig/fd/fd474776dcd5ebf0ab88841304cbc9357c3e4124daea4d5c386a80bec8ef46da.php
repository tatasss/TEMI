<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_712878f5c5a26f06de1f18adf06c3a4f438ce6ec20506decb929c3fdda8d8b88 extends Twig_Template
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
        $__internal_1f07dde10ce8093a4f2c0815691b3fdeb832b77bcb69a46f7f5a38ae953349f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f07dde10ce8093a4f2c0815691b3fdeb832b77bcb69a46f7f5a38ae953349f4->enter($__internal_1f07dde10ce8093a4f2c0815691b3fdeb832b77bcb69a46f7f5a38ae953349f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_4bb1897f7e62c4231833c4bc6b113d8b1f16529f27b648ecd2391def76b5e7e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bb1897f7e62c4231833c4bc6b113d8b1f16529f27b648ecd2391def76b5e7e0->enter($__internal_4bb1897f7e62c4231833c4bc6b113d8b1f16529f27b648ecd2391def76b5e7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_1f07dde10ce8093a4f2c0815691b3fdeb832b77bcb69a46f7f5a38ae953349f4->leave($__internal_1f07dde10ce8093a4f2c0815691b3fdeb832b77bcb69a46f7f5a38ae953349f4_prof);

        
        $__internal_4bb1897f7e62c4231833c4bc6b113d8b1f16529f27b648ecd2391def76b5e7e0->leave($__internal_4bb1897f7e62c4231833c4bc6b113d8b1f16529f27b648ecd2391def76b5e7e0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
