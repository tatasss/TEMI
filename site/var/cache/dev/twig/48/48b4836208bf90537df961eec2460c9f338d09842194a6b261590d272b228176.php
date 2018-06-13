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
        $__internal_116aff79dfb059129fba7a2aa1cb03afb716c8296d59572760a284ce604fe880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116aff79dfb059129fba7a2aa1cb03afb716c8296d59572760a284ce604fe880->enter($__internal_116aff79dfb059129fba7a2aa1cb03afb716c8296d59572760a284ce604fe880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_81e1d7f4e955bac80fd9c6b614f5f8360d3d9a4ebb7c1969cf9ec1c5522d4e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e1d7f4e955bac80fd9c6b614f5f8360d3d9a4ebb7c1969cf9ec1c5522d4e0b->enter($__internal_81e1d7f4e955bac80fd9c6b614f5f8360d3d9a4ebb7c1969cf9ec1c5522d4e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_116aff79dfb059129fba7a2aa1cb03afb716c8296d59572760a284ce604fe880->leave($__internal_116aff79dfb059129fba7a2aa1cb03afb716c8296d59572760a284ce604fe880_prof);

        
        $__internal_81e1d7f4e955bac80fd9c6b614f5f8360d3d9a4ebb7c1969cf9ec1c5522d4e0b->leave($__internal_81e1d7f4e955bac80fd9c6b614f5f8360d3d9a4ebb7c1969cf9ec1c5522d4e0b_prof);

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
", "@Framework/Form/form_end.html.php", "C:\\Users\\matthias\\Desktop\\stage\\TEMI\\site\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
