<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cb073b442a5f62042976b2c9b29265f0f102533d761b12f2080d6a9b91b47fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f87b59c21dec92349ef549755c71819c0d3841745aa63d170661829d70d82f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f87b59c21dec92349ef549755c71819c0d3841745aa63d170661829d70d82f2->enter($__internal_5f87b59c21dec92349ef549755c71819c0d3841745aa63d170661829d70d82f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_bb9b30715939c31e0d68bfbd5c5c6dcdbd3a520e18d7c6a485b53f35f3d8e49a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9b30715939c31e0d68bfbd5c5c6dcdbd3a520e18d7c6a485b53f35f3d8e49a->enter($__internal_bb9b30715939c31e0d68bfbd5c5c6dcdbd3a520e18d7c6a485b53f35f3d8e49a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_5f87b59c21dec92349ef549755c71819c0d3841745aa63d170661829d70d82f2->leave($__internal_5f87b59c21dec92349ef549755c71819c0d3841745aa63d170661829d70d82f2_prof);

        
        $__internal_bb9b30715939c31e0d68bfbd5c5c6dcdbd3a520e18d7c6a485b53f35f3d8e49a->leave($__internal_bb9b30715939c31e0d68bfbd5c5c6dcdbd3a520e18d7c6a485b53f35f3d8e49a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_017f8cf8af9722030a93c7db2da47a7bc347a21b7ec88b42cce8538601963421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_017f8cf8af9722030a93c7db2da47a7bc347a21b7ec88b42cce8538601963421->enter($__internal_017f8cf8af9722030a93c7db2da47a7bc347a21b7ec88b42cce8538601963421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e55c473ef1f9731fb65b82d1a7310c646241c5a5ca6c4e618f7c94054d4bf37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e55c473ef1f9731fb65b82d1a7310c646241c5a5ca6c4e618f7c94054d4bf37->enter($__internal_1e55c473ef1f9731fb65b82d1a7310c646241c5a5ca6c4e618f7c94054d4bf37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1e55c473ef1f9731fb65b82d1a7310c646241c5a5ca6c4e618f7c94054d4bf37->leave($__internal_1e55c473ef1f9731fb65b82d1a7310c646241c5a5ca6c4e618f7c94054d4bf37_prof);

        
        $__internal_017f8cf8af9722030a93c7db2da47a7bc347a21b7ec88b42cce8538601963421->leave($__internal_017f8cf8af9722030a93c7db2da47a7bc347a21b7ec88b42cce8538601963421_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9813ca142eaefb5b835a4fd3cef361a9a0d8318272c7bc96fd39a4f9050bd3b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9813ca142eaefb5b835a4fd3cef361a9a0d8318272c7bc96fd39a4f9050bd3b2->enter($__internal_9813ca142eaefb5b835a4fd3cef361a9a0d8318272c7bc96fd39a4f9050bd3b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73793bed725bf721751efef3dcd2d228d173e6bc4dfa059f4e6c47cea36dfd28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73793bed725bf721751efef3dcd2d228d173e6bc4dfa059f4e6c47cea36dfd28->enter($__internal_73793bed725bf721751efef3dcd2d228d173e6bc4dfa059f4e6c47cea36dfd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_73793bed725bf721751efef3dcd2d228d173e6bc4dfa059f4e6c47cea36dfd28->leave($__internal_73793bed725bf721751efef3dcd2d228d173e6bc4dfa059f4e6c47cea36dfd28_prof);

        
        $__internal_9813ca142eaefb5b835a4fd3cef361a9a0d8318272c7bc96fd39a4f9050bd3b2->leave($__internal_9813ca142eaefb5b835a4fd3cef361a9a0d8318272c7bc96fd39a4f9050bd3b2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a73ea6590d5c71fd923d6aa5eca3340f66e782870a831aa37482ebf8094fef75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73ea6590d5c71fd923d6aa5eca3340f66e782870a831aa37482ebf8094fef75->enter($__internal_a73ea6590d5c71fd923d6aa5eca3340f66e782870a831aa37482ebf8094fef75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_30a1b87fea5d75724bc90a3069e1c03d82fa67f55f7390981bc14917b69a4bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30a1b87fea5d75724bc90a3069e1c03d82fa67f55f7390981bc14917b69a4bfc->enter($__internal_30a1b87fea5d75724bc90a3069e1c03d82fa67f55f7390981bc14917b69a4bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_30a1b87fea5d75724bc90a3069e1c03d82fa67f55f7390981bc14917b69a4bfc->leave($__internal_30a1b87fea5d75724bc90a3069e1c03d82fa67f55f7390981bc14917b69a4bfc_prof);

        
        $__internal_a73ea6590d5c71fd923d6aa5eca3340f66e782870a831aa37482ebf8094fef75->leave($__internal_a73ea6590d5c71fd923d6aa5eca3340f66e782870a831aa37482ebf8094fef75_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
