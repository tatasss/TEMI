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
        $__internal_a2363236f347301439800f9460248b718537c65b0b3e64816268f200e15352fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2363236f347301439800f9460248b718537c65b0b3e64816268f200e15352fc->enter($__internal_a2363236f347301439800f9460248b718537c65b0b3e64816268f200e15352fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_02d84f27ebfe9ed380491099e03dc76b45586029efbe7f50b7fec51a2022f8d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d84f27ebfe9ed380491099e03dc76b45586029efbe7f50b7fec51a2022f8d6->enter($__internal_02d84f27ebfe9ed380491099e03dc76b45586029efbe7f50b7fec51a2022f8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_a2363236f347301439800f9460248b718537c65b0b3e64816268f200e15352fc->leave($__internal_a2363236f347301439800f9460248b718537c65b0b3e64816268f200e15352fc_prof);

        
        $__internal_02d84f27ebfe9ed380491099e03dc76b45586029efbe7f50b7fec51a2022f8d6->leave($__internal_02d84f27ebfe9ed380491099e03dc76b45586029efbe7f50b7fec51a2022f8d6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_586ec564f61141e960b8dcf71cbcec0b7c01449ae6492c5c423237ec94f9c24a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586ec564f61141e960b8dcf71cbcec0b7c01449ae6492c5c423237ec94f9c24a->enter($__internal_586ec564f61141e960b8dcf71cbcec0b7c01449ae6492c5c423237ec94f9c24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c6e34f10294e8be6da737b9bb2fd559bac210cc4bdd1fe5a8627ee196a015e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e34f10294e8be6da737b9bb2fd559bac210cc4bdd1fe5a8627ee196a015e77->enter($__internal_c6e34f10294e8be6da737b9bb2fd559bac210cc4bdd1fe5a8627ee196a015e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c6e34f10294e8be6da737b9bb2fd559bac210cc4bdd1fe5a8627ee196a015e77->leave($__internal_c6e34f10294e8be6da737b9bb2fd559bac210cc4bdd1fe5a8627ee196a015e77_prof);

        
        $__internal_586ec564f61141e960b8dcf71cbcec0b7c01449ae6492c5c423237ec94f9c24a->leave($__internal_586ec564f61141e960b8dcf71cbcec0b7c01449ae6492c5c423237ec94f9c24a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c899ae8ca784e593da1fadec92dd316aca173e0b5d9489a6bf8aaa9cfdaed73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c899ae8ca784e593da1fadec92dd316aca173e0b5d9489a6bf8aaa9cfdaed73->enter($__internal_6c899ae8ca784e593da1fadec92dd316aca173e0b5d9489a6bf8aaa9cfdaed73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_023d8bc72dbd13b5903d06ffded89134fee82a1b4225a5f2e0fd48bed12b19c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023d8bc72dbd13b5903d06ffded89134fee82a1b4225a5f2e0fd48bed12b19c6->enter($__internal_023d8bc72dbd13b5903d06ffded89134fee82a1b4225a5f2e0fd48bed12b19c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_023d8bc72dbd13b5903d06ffded89134fee82a1b4225a5f2e0fd48bed12b19c6->leave($__internal_023d8bc72dbd13b5903d06ffded89134fee82a1b4225a5f2e0fd48bed12b19c6_prof);

        
        $__internal_6c899ae8ca784e593da1fadec92dd316aca173e0b5d9489a6bf8aaa9cfdaed73->leave($__internal_6c899ae8ca784e593da1fadec92dd316aca173e0b5d9489a6bf8aaa9cfdaed73_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cefb1dd3599295ece75ff50bd68fdfdb97e307ad7b155c48577df5aa532864f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cefb1dd3599295ece75ff50bd68fdfdb97e307ad7b155c48577df5aa532864f->enter($__internal_9cefb1dd3599295ece75ff50bd68fdfdb97e307ad7b155c48577df5aa532864f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a143b5a511ae1f30726d4c5a489dfa8f283fd560f2fed0227725ea58a3aea3c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a143b5a511ae1f30726d4c5a489dfa8f283fd560f2fed0227725ea58a3aea3c6->enter($__internal_a143b5a511ae1f30726d4c5a489dfa8f283fd560f2fed0227725ea58a3aea3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a143b5a511ae1f30726d4c5a489dfa8f283fd560f2fed0227725ea58a3aea3c6->leave($__internal_a143b5a511ae1f30726d4c5a489dfa8f283fd560f2fed0227725ea58a3aea3c6_prof);

        
        $__internal_9cefb1dd3599295ece75ff50bd68fdfdb97e307ad7b155c48577df5aa532864f->leave($__internal_9cefb1dd3599295ece75ff50bd68fdfdb97e307ad7b155c48577df5aa532864f_prof);

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
