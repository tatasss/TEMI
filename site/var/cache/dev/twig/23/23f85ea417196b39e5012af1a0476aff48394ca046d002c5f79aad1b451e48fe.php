<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_dadd127a96dd7a91ffcb3f0cf440aed53fa5c882e505095f72312c599bbbf48d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92980ef4da203c4c1035d3b2b0a511dcfadd330d4c945e8254eb6e7fab7a9444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92980ef4da203c4c1035d3b2b0a511dcfadd330d4c945e8254eb6e7fab7a9444->enter($__internal_92980ef4da203c4c1035d3b2b0a511dcfadd330d4c945e8254eb6e7fab7a9444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_ac9005805234d1fdaa18e50d0922e7bec77214c79f26faa54d516a100f0c04ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9005805234d1fdaa18e50d0922e7bec77214c79f26faa54d516a100f0c04ad->enter($__internal_ac9005805234d1fdaa18e50d0922e7bec77214c79f26faa54d516a100f0c04ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_92980ef4da203c4c1035d3b2b0a511dcfadd330d4c945e8254eb6e7fab7a9444->leave($__internal_92980ef4da203c4c1035d3b2b0a511dcfadd330d4c945e8254eb6e7fab7a9444_prof);

        
        $__internal_ac9005805234d1fdaa18e50d0922e7bec77214c79f26faa54d516a100f0c04ad->leave($__internal_ac9005805234d1fdaa18e50d0922e7bec77214c79f26faa54d516a100f0c04ad_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_86b414102d7d054d47daec7c6f21065355e8f27da8532a11d27f8db62d9d7aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b414102d7d054d47daec7c6f21065355e8f27da8532a11d27f8db62d9d7aab->enter($__internal_86b414102d7d054d47daec7c6f21065355e8f27da8532a11d27f8db62d9d7aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2bc5461a9624fb855c841370486147a7f1dd5a7bd8796e58ec5e42af1071722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bc5461a9624fb855c841370486147a7f1dd5a7bd8796e58ec5e42af1071722->enter($__internal_d2bc5461a9624fb855c841370486147a7f1dd5a7bd8796e58ec5e42af1071722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d2bc5461a9624fb855c841370486147a7f1dd5a7bd8796e58ec5e42af1071722->leave($__internal_d2bc5461a9624fb855c841370486147a7f1dd5a7bd8796e58ec5e42af1071722_prof);

        
        $__internal_86b414102d7d054d47daec7c6f21065355e8f27da8532a11d27f8db62d9d7aab->leave($__internal_86b414102d7d054d47daec7c6f21065355e8f27da8532a11d27f8db62d9d7aab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
