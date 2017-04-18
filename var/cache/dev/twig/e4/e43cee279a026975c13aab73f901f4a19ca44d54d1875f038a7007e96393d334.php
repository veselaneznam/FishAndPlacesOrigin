<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_fa1b08da805120562764dc37af4954d94d9e95269b1f5ad6f02e95fec07e4a3b extends Twig_Template
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
        $__internal_425bd6a3d84d6a11476490fd457a9da2cbbae7a791e4777120cc7679f60251f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425bd6a3d84d6a11476490fd457a9da2cbbae7a791e4777120cc7679f60251f8->enter($__internal_425bd6a3d84d6a11476490fd457a9da2cbbae7a791e4777120cc7679f60251f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a903f27ba5261bb413b9b1c380930b44dede49c22acb621a05fcd8e090944fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a903f27ba5261bb413b9b1c380930b44dede49c22acb621a05fcd8e090944fb0->enter($__internal_a903f27ba5261bb413b9b1c380930b44dede49c22acb621a05fcd8e090944fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_425bd6a3d84d6a11476490fd457a9da2cbbae7a791e4777120cc7679f60251f8->leave($__internal_425bd6a3d84d6a11476490fd457a9da2cbbae7a791e4777120cc7679f60251f8_prof);

        
        $__internal_a903f27ba5261bb413b9b1c380930b44dede49c22acb621a05fcd8e090944fb0->leave($__internal_a903f27ba5261bb413b9b1c380930b44dede49c22acb621a05fcd8e090944fb0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
