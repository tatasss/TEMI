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
        $__internal_8cbffe2ceb7e18083b0be0391ba3229d3f81ae014323857e484933b06604443a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cbffe2ceb7e18083b0be0391ba3229d3f81ae014323857e484933b06604443a->enter($__internal_8cbffe2ceb7e18083b0be0391ba3229d3f81ae014323857e484933b06604443a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_79027bcb9482640d008b32d53830bec43e177b8770c287b6eebfff422886e923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79027bcb9482640d008b32d53830bec43e177b8770c287b6eebfff422886e923->enter($__internal_79027bcb9482640d008b32d53830bec43e177b8770c287b6eebfff422886e923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_8cbffe2ceb7e18083b0be0391ba3229d3f81ae014323857e484933b06604443a->leave($__internal_8cbffe2ceb7e18083b0be0391ba3229d3f81ae014323857e484933b06604443a_prof);

        
        $__internal_79027bcb9482640d008b32d53830bec43e177b8770c287b6eebfff422886e923->leave($__internal_79027bcb9482640d008b32d53830bec43e177b8770c287b6eebfff422886e923_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c164059799488c883aa06fa8717e7f6104d29368e4482fc6ed0fa20e52a5df1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c164059799488c883aa06fa8717e7f6104d29368e4482fc6ed0fa20e52a5df1f->enter($__internal_c164059799488c883aa06fa8717e7f6104d29368e4482fc6ed0fa20e52a5df1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_160f25bd45ef1df193419729771f676031875abde8647d101340ab4b89af4049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160f25bd45ef1df193419729771f676031875abde8647d101340ab4b89af4049->enter($__internal_160f25bd45ef1df193419729771f676031875abde8647d101340ab4b89af4049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_160f25bd45ef1df193419729771f676031875abde8647d101340ab4b89af4049->leave($__internal_160f25bd45ef1df193419729771f676031875abde8647d101340ab4b89af4049_prof);

        
        $__internal_c164059799488c883aa06fa8717e7f6104d29368e4482fc6ed0fa20e52a5df1f->leave($__internal_c164059799488c883aa06fa8717e7f6104d29368e4482fc6ed0fa20e52a5df1f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c0de5a450bc45e32930a2e26e160af70e0ed697210fe904778065f22f51155e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0de5a450bc45e32930a2e26e160af70e0ed697210fe904778065f22f51155e->enter($__internal_7c0de5a450bc45e32930a2e26e160af70e0ed697210fe904778065f22f51155e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a29e9e6171476e810260ab9690c6bed53e691febf109b0a1675a9f9f9056f79a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29e9e6171476e810260ab9690c6bed53e691febf109b0a1675a9f9f9056f79a->enter($__internal_a29e9e6171476e810260ab9690c6bed53e691febf109b0a1675a9f9f9056f79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a29e9e6171476e810260ab9690c6bed53e691febf109b0a1675a9f9f9056f79a->leave($__internal_a29e9e6171476e810260ab9690c6bed53e691febf109b0a1675a9f9f9056f79a_prof);

        
        $__internal_7c0de5a450bc45e32930a2e26e160af70e0ed697210fe904778065f22f51155e->leave($__internal_7c0de5a450bc45e32930a2e26e160af70e0ed697210fe904778065f22f51155e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1cb127d836f73900c46d93c0dc8a81f8ed69b8f2baea7db0881a7a8e70ed9546 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb127d836f73900c46d93c0dc8a81f8ed69b8f2baea7db0881a7a8e70ed9546->enter($__internal_1cb127d836f73900c46d93c0dc8a81f8ed69b8f2baea7db0881a7a8e70ed9546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41ed4200e99eb71a9e7fd4d74325c33b57dd3452c1c6ec441dfbc5447bf08b4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ed4200e99eb71a9e7fd4d74325c33b57dd3452c1c6ec441dfbc5447bf08b4f->enter($__internal_41ed4200e99eb71a9e7fd4d74325c33b57dd3452c1c6ec441dfbc5447bf08b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_41ed4200e99eb71a9e7fd4d74325c33b57dd3452c1c6ec441dfbc5447bf08b4f->leave($__internal_41ed4200e99eb71a9e7fd4d74325c33b57dd3452c1c6ec441dfbc5447bf08b4f_prof);

        
        $__internal_1cb127d836f73900c46d93c0dc8a81f8ed69b8f2baea7db0881a7a8e70ed9546->leave($__internal_1cb127d836f73900c46d93c0dc8a81f8ed69b8f2baea7db0881a7a8e70ed9546_prof);

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
", "@Twig/layout.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
