<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_e03b45158083cc36b6bb4b276c162d0acf343fb7db3cb6bdf94390a85331d221 extends Twig_Template
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
        $__internal_ddbad3327db95bf9b2ebaa02c9caf9a1792858d7aa58e14d7febea17185fd6c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddbad3327db95bf9b2ebaa02c9caf9a1792858d7aa58e14d7febea17185fd6c1->enter($__internal_ddbad3327db95bf9b2ebaa02c9caf9a1792858d7aa58e14d7febea17185fd6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_245c3749fd4f2c5abcb69247a22bbbb92dbf203a1c4534e3e72296cdfac551b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_245c3749fd4f2c5abcb69247a22bbbb92dbf203a1c4534e3e72296cdfac551b8->enter($__internal_245c3749fd4f2c5abcb69247a22bbbb92dbf203a1c4534e3e72296cdfac551b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_ddbad3327db95bf9b2ebaa02c9caf9a1792858d7aa58e14d7febea17185fd6c1->leave($__internal_ddbad3327db95bf9b2ebaa02c9caf9a1792858d7aa58e14d7febea17185fd6c1_prof);

        
        $__internal_245c3749fd4f2c5abcb69247a22bbbb92dbf203a1c4534e3e72296cdfac551b8->leave($__internal_245c3749fd4f2c5abcb69247a22bbbb92dbf203a1c4534e3e72296cdfac551b8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_18fa7baf78800c475adc7def8a071995f32760f17f43966d5ade91996cc29356 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18fa7baf78800c475adc7def8a071995f32760f17f43966d5ade91996cc29356->enter($__internal_18fa7baf78800c475adc7def8a071995f32760f17f43966d5ade91996cc29356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79395ecf9ff95811e28003241827155ba48e68b343f54bcc850c61ce893ce561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79395ecf9ff95811e28003241827155ba48e68b343f54bcc850c61ce893ce561->enter($__internal_79395ecf9ff95811e28003241827155ba48e68b343f54bcc850c61ce893ce561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_79395ecf9ff95811e28003241827155ba48e68b343f54bcc850c61ce893ce561->leave($__internal_79395ecf9ff95811e28003241827155ba48e68b343f54bcc850c61ce893ce561_prof);

        
        $__internal_18fa7baf78800c475adc7def8a071995f32760f17f43966d5ade91996cc29356->leave($__internal_18fa7baf78800c475adc7def8a071995f32760f17f43966d5ade91996cc29356_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1cc5c498ec3a767e6a604928735f8137bfaa966c51e4c8aa06329e9bb624c7de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc5c498ec3a767e6a604928735f8137bfaa966c51e4c8aa06329e9bb624c7de->enter($__internal_1cc5c498ec3a767e6a604928735f8137bfaa966c51e4c8aa06329e9bb624c7de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7b8c4132d8471c6a51b4831dec8333368020b7b48234cc7d6f467b9a26b57ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8c4132d8471c6a51b4831dec8333368020b7b48234cc7d6f467b9a26b57ae7->enter($__internal_7b8c4132d8471c6a51b4831dec8333368020b7b48234cc7d6f467b9a26b57ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7b8c4132d8471c6a51b4831dec8333368020b7b48234cc7d6f467b9a26b57ae7->leave($__internal_7b8c4132d8471c6a51b4831dec8333368020b7b48234cc7d6f467b9a26b57ae7_prof);

        
        $__internal_1cc5c498ec3a767e6a604928735f8137bfaa966c51e4c8aa06329e9bb624c7de->leave($__internal_1cc5c498ec3a767e6a604928735f8137bfaa966c51e4c8aa06329e9bb624c7de_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_35567ffe135eb9242c5e28a02b7d9a5b5c1530b3d69ea4305f2b9d39ea9245bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35567ffe135eb9242c5e28a02b7d9a5b5c1530b3d69ea4305f2b9d39ea9245bf->enter($__internal_35567ffe135eb9242c5e28a02b7d9a5b5c1530b3d69ea4305f2b9d39ea9245bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9eca1bba9a60789c08a6922d10fd237411842f833597bcea9cf0697805e206f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eca1bba9a60789c08a6922d10fd237411842f833597bcea9cf0697805e206f6->enter($__internal_9eca1bba9a60789c08a6922d10fd237411842f833597bcea9cf0697805e206f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9eca1bba9a60789c08a6922d10fd237411842f833597bcea9cf0697805e206f6->leave($__internal_9eca1bba9a60789c08a6922d10fd237411842f833597bcea9cf0697805e206f6_prof);

        
        $__internal_35567ffe135eb9242c5e28a02b7d9a5b5c1530b3d69ea4305f2b9d39ea9245bf->leave($__internal_35567ffe135eb9242c5e28a02b7d9a5b5c1530b3d69ea4305f2b9d39ea9245bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
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
", "TwigBundle::layout.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
