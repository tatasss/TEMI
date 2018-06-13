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
        $__internal_0a2d6e14a2816d98e4143a936dbae44c6f72c74bbcc35c5abbb45432d201fb2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a2d6e14a2816d98e4143a936dbae44c6f72c74bbcc35c5abbb45432d201fb2b->enter($__internal_0a2d6e14a2816d98e4143a936dbae44c6f72c74bbcc35c5abbb45432d201fb2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d0e585739c49a334eedd4f8672499fa4a9bcdf1874e5497d533ffc3d1b346670 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e585739c49a334eedd4f8672499fa4a9bcdf1874e5497d533ffc3d1b346670->enter($__internal_d0e585739c49a334eedd4f8672499fa4a9bcdf1874e5497d533ffc3d1b346670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0a2d6e14a2816d98e4143a936dbae44c6f72c74bbcc35c5abbb45432d201fb2b->leave($__internal_0a2d6e14a2816d98e4143a936dbae44c6f72c74bbcc35c5abbb45432d201fb2b_prof);

        
        $__internal_d0e585739c49a334eedd4f8672499fa4a9bcdf1874e5497d533ffc3d1b346670->leave($__internal_d0e585739c49a334eedd4f8672499fa4a9bcdf1874e5497d533ffc3d1b346670_prof);

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
