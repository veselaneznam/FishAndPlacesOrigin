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
        $__internal_84f2ab2bf044ce1955bc849a15a3270eda2d82e484cbc95bb8a235f369fa21f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84f2ab2bf044ce1955bc849a15a3270eda2d82e484cbc95bb8a235f369fa21f4->enter($__internal_84f2ab2bf044ce1955bc849a15a3270eda2d82e484cbc95bb8a235f369fa21f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_13c5f9bb4461234211f25d5f64abebea8c952cc4685080bec9b7bb61813ef8eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13c5f9bb4461234211f25d5f64abebea8c952cc4685080bec9b7bb61813ef8eb->enter($__internal_13c5f9bb4461234211f25d5f64abebea8c952cc4685080bec9b7bb61813ef8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_84f2ab2bf044ce1955bc849a15a3270eda2d82e484cbc95bb8a235f369fa21f4->leave($__internal_84f2ab2bf044ce1955bc849a15a3270eda2d82e484cbc95bb8a235f369fa21f4_prof);

        
        $__internal_13c5f9bb4461234211f25d5f64abebea8c952cc4685080bec9b7bb61813ef8eb->leave($__internal_13c5f9bb4461234211f25d5f64abebea8c952cc4685080bec9b7bb61813ef8eb_prof);

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
