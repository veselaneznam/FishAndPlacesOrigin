<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8af2250e4c39ad464967e0c5f07d191ad2a8b8c1c31958cf29241c2f1e99b059 extends Twig_Template
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
        $__internal_76378a6fd58d10ac455fc45b07a0e04e7b1dcdd8200c7e8a7345ed9592efe937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76378a6fd58d10ac455fc45b07a0e04e7b1dcdd8200c7e8a7345ed9592efe937->enter($__internal_76378a6fd58d10ac455fc45b07a0e04e7b1dcdd8200c7e8a7345ed9592efe937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a61798d1ef843ee95be214f556a14ea5333a9007a8cd3e7838655a4336c61df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a61798d1ef843ee95be214f556a14ea5333a9007a8cd3e7838655a4336c61df7->enter($__internal_a61798d1ef843ee95be214f556a14ea5333a9007a8cd3e7838655a4336c61df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_76378a6fd58d10ac455fc45b07a0e04e7b1dcdd8200c7e8a7345ed9592efe937->leave($__internal_76378a6fd58d10ac455fc45b07a0e04e7b1dcdd8200c7e8a7345ed9592efe937_prof);

        
        $__internal_a61798d1ef843ee95be214f556a14ea5333a9007a8cd3e7838655a4336c61df7->leave($__internal_a61798d1ef843ee95be214f556a14ea5333a9007a8cd3e7838655a4336c61df7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
