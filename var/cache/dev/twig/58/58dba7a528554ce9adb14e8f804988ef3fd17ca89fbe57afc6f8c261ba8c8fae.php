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
        $__internal_4db4ea90882e70fa32d9f0a7f487ab19c7fea8d38488d6a3534a43dd0019e61a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4db4ea90882e70fa32d9f0a7f487ab19c7fea8d38488d6a3534a43dd0019e61a->enter($__internal_4db4ea90882e70fa32d9f0a7f487ab19c7fea8d38488d6a3534a43dd0019e61a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_968743270f1165ee8151f95b5d8d9b9b571bf87e4dc41d78c93b2050170a0fd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_968743270f1165ee8151f95b5d8d9b9b571bf87e4dc41d78c93b2050170a0fd8->enter($__internal_968743270f1165ee8151f95b5d8d9b9b571bf87e4dc41d78c93b2050170a0fd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4db4ea90882e70fa32d9f0a7f487ab19c7fea8d38488d6a3534a43dd0019e61a->leave($__internal_4db4ea90882e70fa32d9f0a7f487ab19c7fea8d38488d6a3534a43dd0019e61a_prof);

        
        $__internal_968743270f1165ee8151f95b5d8d9b9b571bf87e4dc41d78c93b2050170a0fd8->leave($__internal_968743270f1165ee8151f95b5d8d9b9b571bf87e4dc41d78c93b2050170a0fd8_prof);

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
