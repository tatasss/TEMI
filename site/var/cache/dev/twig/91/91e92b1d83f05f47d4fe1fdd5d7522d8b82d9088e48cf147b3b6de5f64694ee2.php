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
        $__internal_b9b6938d38b08c2067a283625dc8ebab6fe97ac469e811ef2c7fc3270ce791fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b6938d38b08c2067a283625dc8ebab6fe97ac469e811ef2c7fc3270ce791fa->enter($__internal_b9b6938d38b08c2067a283625dc8ebab6fe97ac469e811ef2c7fc3270ce791fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9b79ff797cedc149b3264ece643176bf9d2cf04b88d90f209ae02ddf932cac58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b79ff797cedc149b3264ece643176bf9d2cf04b88d90f209ae02ddf932cac58->enter($__internal_9b79ff797cedc149b3264ece643176bf9d2cf04b88d90f209ae02ddf932cac58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_b9b6938d38b08c2067a283625dc8ebab6fe97ac469e811ef2c7fc3270ce791fa->leave($__internal_b9b6938d38b08c2067a283625dc8ebab6fe97ac469e811ef2c7fc3270ce791fa_prof);

        
        $__internal_9b79ff797cedc149b3264ece643176bf9d2cf04b88d90f209ae02ddf932cac58->leave($__internal_9b79ff797cedc149b3264ece643176bf9d2cf04b88d90f209ae02ddf932cac58_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d92dd61befe97e9dc9fadd153e03983a5d3a270010371f9acf9832911186c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d92dd61befe97e9dc9fadd153e03983a5d3a270010371f9acf9832911186c87->enter($__internal_2d92dd61befe97e9dc9fadd153e03983a5d3a270010371f9acf9832911186c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba0a92ba7f41075b108cf793a20ce63a323d083af27f43d681141d3a58afaa56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0a92ba7f41075b108cf793a20ce63a323d083af27f43d681141d3a58afaa56->enter($__internal_ba0a92ba7f41075b108cf793a20ce63a323d083af27f43d681141d3a58afaa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ba0a92ba7f41075b108cf793a20ce63a323d083af27f43d681141d3a58afaa56->leave($__internal_ba0a92ba7f41075b108cf793a20ce63a323d083af27f43d681141d3a58afaa56_prof);

        
        $__internal_2d92dd61befe97e9dc9fadd153e03983a5d3a270010371f9acf9832911186c87->leave($__internal_2d92dd61befe97e9dc9fadd153e03983a5d3a270010371f9acf9832911186c87_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_50b692339c2c4f3647c1582450ffff990fc6cb9eebc6eae234bab68a9323ae6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b692339c2c4f3647c1582450ffff990fc6cb9eebc6eae234bab68a9323ae6d->enter($__internal_50b692339c2c4f3647c1582450ffff990fc6cb9eebc6eae234bab68a9323ae6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8f2d01c66e604fdef0266446fa93dbd41d57e53c36a9cd8f69c689c10be8ebd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2d01c66e604fdef0266446fa93dbd41d57e53c36a9cd8f69c689c10be8ebd1->enter($__internal_8f2d01c66e604fdef0266446fa93dbd41d57e53c36a9cd8f69c689c10be8ebd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8f2d01c66e604fdef0266446fa93dbd41d57e53c36a9cd8f69c689c10be8ebd1->leave($__internal_8f2d01c66e604fdef0266446fa93dbd41d57e53c36a9cd8f69c689c10be8ebd1_prof);

        
        $__internal_50b692339c2c4f3647c1582450ffff990fc6cb9eebc6eae234bab68a9323ae6d->leave($__internal_50b692339c2c4f3647c1582450ffff990fc6cb9eebc6eae234bab68a9323ae6d_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0156545af2a23bebb852f0165d000835549a4dc1bd081ebeff1e8134d6da68c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0156545af2a23bebb852f0165d000835549a4dc1bd081ebeff1e8134d6da68c->enter($__internal_b0156545af2a23bebb852f0165d000835549a4dc1bd081ebeff1e8134d6da68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4df861566ec5850b962acc66fb242cfca443828c6d0847437d8a0170b7411c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df861566ec5850b962acc66fb242cfca443828c6d0847437d8a0170b7411c91->enter($__internal_4df861566ec5850b962acc66fb242cfca443828c6d0847437d8a0170b7411c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4df861566ec5850b962acc66fb242cfca443828c6d0847437d8a0170b7411c91->leave($__internal_4df861566ec5850b962acc66fb242cfca443828c6d0847437d8a0170b7411c91_prof);

        
        $__internal_b0156545af2a23bebb852f0165d000835549a4dc1bd081ebeff1e8134d6da68c->leave($__internal_b0156545af2a23bebb852f0165d000835549a4dc1bd081ebeff1e8134d6da68c_prof);

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
