<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_cf785cdfe65c9c9e2e6de0ae91f41ebdbd9a7a190b6a1141582a07c9aeeceb00 extends Twig_Template
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
        $__internal_f24c73329a41aebee2052ce4ef1192ac7df0436659d98e64d950999ff1fa9205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f24c73329a41aebee2052ce4ef1192ac7df0436659d98e64d950999ff1fa9205->enter($__internal_f24c73329a41aebee2052ce4ef1192ac7df0436659d98e64d950999ff1fa9205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_47b85d408b494a7bf2eac57073e7c26f03cd143b81ffc65017de84afb8f173b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b85d408b494a7bf2eac57073e7c26f03cd143b81ffc65017de84afb8f173b7->enter($__internal_47b85d408b494a7bf2eac57073e7c26f03cd143b81ffc65017de84afb8f173b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f24c73329a41aebee2052ce4ef1192ac7df0436659d98e64d950999ff1fa9205->leave($__internal_f24c73329a41aebee2052ce4ef1192ac7df0436659d98e64d950999ff1fa9205_prof);

        
        $__internal_47b85d408b494a7bf2eac57073e7c26f03cd143b81ffc65017de84afb8f173b7->leave($__internal_47b85d408b494a7bf2eac57073e7c26f03cd143b81ffc65017de84afb8f173b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
