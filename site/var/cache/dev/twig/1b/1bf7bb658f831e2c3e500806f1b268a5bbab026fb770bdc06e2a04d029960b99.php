<?php

/* ::base.html.twig */
class __TwigTemplate_e5aaa710ad05ff01d8c08fb3f7784e54091a35f64b96d647d3dca94f1a0868b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb8bd6984879bc22379d568f8ec65a7fbb3c12778475e72dd360f9c2c8318bc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8bd6984879bc22379d568f8ec65a7fbb3c12778475e72dd360f9c2c8318bc6->enter($__internal_cb8bd6984879bc22379d568f8ec65a7fbb3c12778475e72dd360f9c2c8318bc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_a467c4c05a4b87513b0a57134eea7dccbf0af63002470dfd660bf39bf057a9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a467c4c05a4b87513b0a57134eea7dccbf0af63002470dfd660bf39bf057a9e1->enter($__internal_a467c4c05a4b87513b0a57134eea7dccbf0af63002470dfd660bf39bf057a9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_cb8bd6984879bc22379d568f8ec65a7fbb3c12778475e72dd360f9c2c8318bc6->leave($__internal_cb8bd6984879bc22379d568f8ec65a7fbb3c12778475e72dd360f9c2c8318bc6_prof);

        
        $__internal_a467c4c05a4b87513b0a57134eea7dccbf0af63002470dfd660bf39bf057a9e1->leave($__internal_a467c4c05a4b87513b0a57134eea7dccbf0af63002470dfd660bf39bf057a9e1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1b78da3ea0485628cfc6d70f24f6787fbe78d10591927064955622ba9e3e048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b78da3ea0485628cfc6d70f24f6787fbe78d10591927064955622ba9e3e048->enter($__internal_c1b78da3ea0485628cfc6d70f24f6787fbe78d10591927064955622ba9e3e048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0c4f6925c3eb49d6c9afe1cd9c74842968e1f20b0e96eedbf2983546694a03a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4f6925c3eb49d6c9afe1cd9c74842968e1f20b0e96eedbf2983546694a03a0->enter($__internal_0c4f6925c3eb49d6c9afe1cd9c74842968e1f20b0e96eedbf2983546694a03a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0c4f6925c3eb49d6c9afe1cd9c74842968e1f20b0e96eedbf2983546694a03a0->leave($__internal_0c4f6925c3eb49d6c9afe1cd9c74842968e1f20b0e96eedbf2983546694a03a0_prof);

        
        $__internal_c1b78da3ea0485628cfc6d70f24f6787fbe78d10591927064955622ba9e3e048->leave($__internal_c1b78da3ea0485628cfc6d70f24f6787fbe78d10591927064955622ba9e3e048_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3376206acc7330b3a229318123b104cf28358ec368fbeb87e71ddad70b4de7f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3376206acc7330b3a229318123b104cf28358ec368fbeb87e71ddad70b4de7f4->enter($__internal_3376206acc7330b3a229318123b104cf28358ec368fbeb87e71ddad70b4de7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_74be5fac732dadcd9019f7b5ed9659139804c240f406c4937e400699b9c4d037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74be5fac732dadcd9019f7b5ed9659139804c240f406c4937e400699b9c4d037->enter($__internal_74be5fac732dadcd9019f7b5ed9659139804c240f406c4937e400699b9c4d037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_74be5fac732dadcd9019f7b5ed9659139804c240f406c4937e400699b9c4d037->leave($__internal_74be5fac732dadcd9019f7b5ed9659139804c240f406c4937e400699b9c4d037_prof);

        
        $__internal_3376206acc7330b3a229318123b104cf28358ec368fbeb87e71ddad70b4de7f4->leave($__internal_3376206acc7330b3a229318123b104cf28358ec368fbeb87e71ddad70b4de7f4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a52c6845fd6095a006c5e9d56da105d765bcf92e49404ff6659f03d2223fe1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a52c6845fd6095a006c5e9d56da105d765bcf92e49404ff6659f03d2223fe1e->enter($__internal_0a52c6845fd6095a006c5e9d56da105d765bcf92e49404ff6659f03d2223fe1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_86a83344c9bb326c5912bb3eff17a3fa4e79248305bc3a04e457215ffc20b9c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a83344c9bb326c5912bb3eff17a3fa4e79248305bc3a04e457215ffc20b9c9->enter($__internal_86a83344c9bb326c5912bb3eff17a3fa4e79248305bc3a04e457215ffc20b9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_86a83344c9bb326c5912bb3eff17a3fa4e79248305bc3a04e457215ffc20b9c9->leave($__internal_86a83344c9bb326c5912bb3eff17a3fa4e79248305bc3a04e457215ffc20b9c9_prof);

        
        $__internal_0a52c6845fd6095a006c5e9d56da105d765bcf92e49404ff6659f03d2223fe1e->leave($__internal_0a52c6845fd6095a006c5e9d56da105d765bcf92e49404ff6659f03d2223fe1e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d997b8837c095653bcdb46deffc660468497e1de6f93b4e31760489bd0ed7c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d997b8837c095653bcdb46deffc660468497e1de6f93b4e31760489bd0ed7c0c->enter($__internal_d997b8837c095653bcdb46deffc660468497e1de6f93b4e31760489bd0ed7c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_861e7302ed3d4bd8c92fa3eed24d565045a72edcc5239fdf62d832829fa06059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861e7302ed3d4bd8c92fa3eed24d565045a72edcc5239fdf62d832829fa06059->enter($__internal_861e7302ed3d4bd8c92fa3eed24d565045a72edcc5239fdf62d832829fa06059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_861e7302ed3d4bd8c92fa3eed24d565045a72edcc5239fdf62d832829fa06059->leave($__internal_861e7302ed3d4bd8c92fa3eed24d565045a72edcc5239fdf62d832829fa06059_prof);

        
        $__internal_d997b8837c095653bcdb46deffc660468497e1de6f93b4e31760489bd0ed7c0c->leave($__internal_d997b8837c095653bcdb46deffc660468497e1de6f93b4e31760489bd0ed7c0c_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\app/Resources\\views/base.html.twig");
    }
}
