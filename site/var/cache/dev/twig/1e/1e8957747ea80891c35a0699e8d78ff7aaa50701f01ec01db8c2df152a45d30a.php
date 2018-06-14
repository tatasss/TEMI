<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_301bccaeaf2ad492eef5aa9bb4a39f06fb915f54bc083720cb4be61d2a04e7a3 extends Twig_Template
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
        $__internal_810ae27c5623540c8b5ce34f470bfa4699b8a0263c35ff6f68525956119fe205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_810ae27c5623540c8b5ce34f470bfa4699b8a0263c35ff6f68525956119fe205->enter($__internal_810ae27c5623540c8b5ce34f470bfa4699b8a0263c35ff6f68525956119fe205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_3301405f1af3f6fba8f3a5898c7d95499a94d91addb4065ec39c55ba69844473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3301405f1af3f6fba8f3a5898c7d95499a94d91addb4065ec39c55ba69844473->enter($__internal_3301405f1af3f6fba8f3a5898c7d95499a94d91addb4065ec39c55ba69844473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_810ae27c5623540c8b5ce34f470bfa4699b8a0263c35ff6f68525956119fe205->leave($__internal_810ae27c5623540c8b5ce34f470bfa4699b8a0263c35ff6f68525956119fe205_prof);

        
        $__internal_3301405f1af3f6fba8f3a5898c7d95499a94d91addb4065ec39c55ba69844473->leave($__internal_3301405f1af3f6fba8f3a5898c7d95499a94d91addb4065ec39c55ba69844473_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
