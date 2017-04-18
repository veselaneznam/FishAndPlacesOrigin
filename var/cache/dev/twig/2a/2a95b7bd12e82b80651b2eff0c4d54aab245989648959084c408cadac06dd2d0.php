<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_da18a18bff670b5a41f79eb5cc7d44473f6abd54007a6a48d9296def9ab5f995 extends Twig_Template
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
        $__internal_809d5ecfa01d5f64579a9d76ff2184e4b59351d6af491e99b5ef3c90cf7fe6f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_809d5ecfa01d5f64579a9d76ff2184e4b59351d6af491e99b5ef3c90cf7fe6f7->enter($__internal_809d5ecfa01d5f64579a9d76ff2184e4b59351d6af491e99b5ef3c90cf7fe6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_573bfa8a927f62b045fa9469b51a4331b642429b1f1ae9fcc10e7517c008e089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_573bfa8a927f62b045fa9469b51a4331b642429b1f1ae9fcc10e7517c008e089->enter($__internal_573bfa8a927f62b045fa9469b51a4331b642429b1f1ae9fcc10e7517c008e089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_809d5ecfa01d5f64579a9d76ff2184e4b59351d6af491e99b5ef3c90cf7fe6f7->leave($__internal_809d5ecfa01d5f64579a9d76ff2184e4b59351d6af491e99b5ef3c90cf7fe6f7_prof);

        
        $__internal_573bfa8a927f62b045fa9469b51a4331b642429b1f1ae9fcc10e7517c008e089->leave($__internal_573bfa8a927f62b045fa9469b51a4331b642429b1f1ae9fcc10e7517c008e089_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
