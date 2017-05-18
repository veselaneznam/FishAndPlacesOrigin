<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_233bee39452427896fd736ad3b5bacba11d2af978ff15f427491b798ef8a8dde extends Twig_Template
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
        $__internal_a5d73db974934e0034f7000d2e3f08ba3cab0d28355aae11ce3644acb83242f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d73db974934e0034f7000d2e3f08ba3cab0d28355aae11ce3644acb83242f4->enter($__internal_a5d73db974934e0034f7000d2e3f08ba3cab0d28355aae11ce3644acb83242f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_42ead17a7288366a3f4b833a5026aaca72b76c0b222cd32c719d19497a4862d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ead17a7288366a3f4b833a5026aaca72b76c0b222cd32c719d19497a4862d0->enter($__internal_42ead17a7288366a3f4b833a5026aaca72b76c0b222cd32c719d19497a4862d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a5d73db974934e0034f7000d2e3f08ba3cab0d28355aae11ce3644acb83242f4->leave($__internal_a5d73db974934e0034f7000d2e3f08ba3cab0d28355aae11ce3644acb83242f4_prof);

        
        $__internal_42ead17a7288366a3f4b833a5026aaca72b76c0b222cd32c719d19497a4862d0->leave($__internal_42ead17a7288366a3f4b833a5026aaca72b76c0b222cd32c719d19497a4862d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
