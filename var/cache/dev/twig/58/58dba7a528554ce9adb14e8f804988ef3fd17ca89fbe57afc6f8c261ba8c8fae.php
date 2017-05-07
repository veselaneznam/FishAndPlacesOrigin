<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_02f5c55a3c201fe840cd604c0e612d41c7580929cb3d73e9b2a7ca2cb60da310 extends Twig_Template
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
        $__internal_950df02c4f14a699c57e5a307fffe005bd209e7cc22b3e76566a3e676fca90a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_950df02c4f14a699c57e5a307fffe005bd209e7cc22b3e76566a3e676fca90a4->enter($__internal_950df02c4f14a699c57e5a307fffe005bd209e7cc22b3e76566a3e676fca90a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_4874e451b9276b2c6f3af608154734532b92bf8b0a2eee019909679ef5c0966f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4874e451b9276b2c6f3af608154734532b92bf8b0a2eee019909679ef5c0966f->enter($__internal_4874e451b9276b2c6f3af608154734532b92bf8b0a2eee019909679ef5c0966f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_950df02c4f14a699c57e5a307fffe005bd209e7cc22b3e76566a3e676fca90a4->leave($__internal_950df02c4f14a699c57e5a307fffe005bd209e7cc22b3e76566a3e676fca90a4_prof);

        
        $__internal_4874e451b9276b2c6f3af608154734532b92bf8b0a2eee019909679ef5c0966f->leave($__internal_4874e451b9276b2c6f3af608154734532b92bf8b0a2eee019909679ef5c0966f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
