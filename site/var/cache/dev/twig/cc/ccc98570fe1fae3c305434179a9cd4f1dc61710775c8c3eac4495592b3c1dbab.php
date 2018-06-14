<?php

/* base.html.twig */
class __TwigTemplate_3596e0743f6caebb4b1bf204a8165ae17ef42ac14157831b8276cacab8b268e3 extends Twig_Template
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
        $__internal_5c632e250aebc5b9d7f9b506ed91d8d6f038326e1e82ae5180438630378c2bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c632e250aebc5b9d7f9b506ed91d8d6f038326e1e82ae5180438630378c2bac->enter($__internal_5c632e250aebc5b9d7f9b506ed91d8d6f038326e1e82ae5180438630378c2bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_51508d358997e447717fe50f3e08cdbf66aff18b2b770f2abd5aa2182c70247d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51508d358997e447717fe50f3e08cdbf66aff18b2b770f2abd5aa2182c70247d->enter($__internal_51508d358997e447717fe50f3e08cdbf66aff18b2b770f2abd5aa2182c70247d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5c632e250aebc5b9d7f9b506ed91d8d6f038326e1e82ae5180438630378c2bac->leave($__internal_5c632e250aebc5b9d7f9b506ed91d8d6f038326e1e82ae5180438630378c2bac_prof);

        
        $__internal_51508d358997e447717fe50f3e08cdbf66aff18b2b770f2abd5aa2182c70247d->leave($__internal_51508d358997e447717fe50f3e08cdbf66aff18b2b770f2abd5aa2182c70247d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a75e24e1747265b5c2fad1c22ad1a25235d39f90ce50b362a6a70a544284e8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a75e24e1747265b5c2fad1c22ad1a25235d39f90ce50b362a6a70a544284e8b->enter($__internal_7a75e24e1747265b5c2fad1c22ad1a25235d39f90ce50b362a6a70a544284e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8266eed66f14f29c825c0ffe68f9a4e777f4dcac8914894b6eafbe09acdbbaa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8266eed66f14f29c825c0ffe68f9a4e777f4dcac8914894b6eafbe09acdbbaa9->enter($__internal_8266eed66f14f29c825c0ffe68f9a4e777f4dcac8914894b6eafbe09acdbbaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8266eed66f14f29c825c0ffe68f9a4e777f4dcac8914894b6eafbe09acdbbaa9->leave($__internal_8266eed66f14f29c825c0ffe68f9a4e777f4dcac8914894b6eafbe09acdbbaa9_prof);

        
        $__internal_7a75e24e1747265b5c2fad1c22ad1a25235d39f90ce50b362a6a70a544284e8b->leave($__internal_7a75e24e1747265b5c2fad1c22ad1a25235d39f90ce50b362a6a70a544284e8b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7e83af3e0a6020cddee36e48399746653c0b96083d92a399afb87752e6cff28c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e83af3e0a6020cddee36e48399746653c0b96083d92a399afb87752e6cff28c->enter($__internal_7e83af3e0a6020cddee36e48399746653c0b96083d92a399afb87752e6cff28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a60867c5c0ae0448746563289b10cfa2af69a59d8568cda7023775388b753ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a60867c5c0ae0448746563289b10cfa2af69a59d8568cda7023775388b753ff7->enter($__internal_a60867c5c0ae0448746563289b10cfa2af69a59d8568cda7023775388b753ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a60867c5c0ae0448746563289b10cfa2af69a59d8568cda7023775388b753ff7->leave($__internal_a60867c5c0ae0448746563289b10cfa2af69a59d8568cda7023775388b753ff7_prof);

        
        $__internal_7e83af3e0a6020cddee36e48399746653c0b96083d92a399afb87752e6cff28c->leave($__internal_7e83af3e0a6020cddee36e48399746653c0b96083d92a399afb87752e6cff28c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e203850e8c8281bf9ba935ecba69a0d08c4210f4c7bacc43d3a5f51be02385e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e203850e8c8281bf9ba935ecba69a0d08c4210f4c7bacc43d3a5f51be02385e6->enter($__internal_e203850e8c8281bf9ba935ecba69a0d08c4210f4c7bacc43d3a5f51be02385e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_827f39ba3ab46736ff17d12f3e5aeebf88048f16a853ae7cf56ff8af6aff7cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827f39ba3ab46736ff17d12f3e5aeebf88048f16a853ae7cf56ff8af6aff7cd5->enter($__internal_827f39ba3ab46736ff17d12f3e5aeebf88048f16a853ae7cf56ff8af6aff7cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_827f39ba3ab46736ff17d12f3e5aeebf88048f16a853ae7cf56ff8af6aff7cd5->leave($__internal_827f39ba3ab46736ff17d12f3e5aeebf88048f16a853ae7cf56ff8af6aff7cd5_prof);

        
        $__internal_e203850e8c8281bf9ba935ecba69a0d08c4210f4c7bacc43d3a5f51be02385e6->leave($__internal_e203850e8c8281bf9ba935ecba69a0d08c4210f4c7bacc43d3a5f51be02385e6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e020d667c1ab8ad20215c2fd78db26dce0c38d465e8f26c852cd65ebc54f1695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e020d667c1ab8ad20215c2fd78db26dce0c38d465e8f26c852cd65ebc54f1695->enter($__internal_e020d667c1ab8ad20215c2fd78db26dce0c38d465e8f26c852cd65ebc54f1695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d3d1c7f1ebea3ac77791ebd2b781625b73bbc906fcde75ec61cddda1da603ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d1c7f1ebea3ac77791ebd2b781625b73bbc906fcde75ec61cddda1da603ce4->enter($__internal_d3d1c7f1ebea3ac77791ebd2b781625b73bbc906fcde75ec61cddda1da603ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d3d1c7f1ebea3ac77791ebd2b781625b73bbc906fcde75ec61cddda1da603ce4->leave($__internal_d3d1c7f1ebea3ac77791ebd2b781625b73bbc906fcde75ec61cddda1da603ce4_prof);

        
        $__internal_e020d667c1ab8ad20215c2fd78db26dce0c38d465e8f26c852cd65ebc54f1695->leave($__internal_e020d667c1ab8ad20215c2fd78db26dce0c38d465e8f26c852cd65ebc54f1695_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\app\\Resources\\views\\base.html.twig");
    }
}
