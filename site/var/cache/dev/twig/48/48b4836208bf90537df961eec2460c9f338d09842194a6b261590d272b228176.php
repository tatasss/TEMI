<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3ea4b8004f81ac668e39c490c634f5383600c4ac9ce5148604a822c6f511537d extends Twig_Template
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
        $__internal_9560ebc3d8aa146fd485741e01dba83ca9f982257eeb3a00e547f7829437a06a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9560ebc3d8aa146fd485741e01dba83ca9f982257eeb3a00e547f7829437a06a->enter($__internal_9560ebc3d8aa146fd485741e01dba83ca9f982257eeb3a00e547f7829437a06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_a0bccbe33d8d29b27cc8d195d34ac715d42afc1d9d1a7dd66db1639bb5168b6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0bccbe33d8d29b27cc8d195d34ac715d42afc1d9d1a7dd66db1639bb5168b6e->enter($__internal_a0bccbe33d8d29b27cc8d195d34ac715d42afc1d9d1a7dd66db1639bb5168b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_9560ebc3d8aa146fd485741e01dba83ca9f982257eeb3a00e547f7829437a06a->leave($__internal_9560ebc3d8aa146fd485741e01dba83ca9f982257eeb3a00e547f7829437a06a_prof);

        
        $__internal_a0bccbe33d8d29b27cc8d195d34ac715d42afc1d9d1a7dd66db1639bb5168b6e->leave($__internal_a0bccbe33d8d29b27cc8d195d34ac715d42afc1d9d1a7dd66db1639bb5168b6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
