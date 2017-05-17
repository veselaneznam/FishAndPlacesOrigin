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
        $__internal_a655e37c39c0c51a33c5f4c32e99754d63a5ef0bf436167d848dab748eda2973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a655e37c39c0c51a33c5f4c32e99754d63a5ef0bf436167d848dab748eda2973->enter($__internal_a655e37c39c0c51a33c5f4c32e99754d63a5ef0bf436167d848dab748eda2973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_206c8dd09e11bf81389f15405cdf9672ecfa0c71ba7619442f7c3f964e16f00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206c8dd09e11bf81389f15405cdf9672ecfa0c71ba7619442f7c3f964e16f00d->enter($__internal_206c8dd09e11bf81389f15405cdf9672ecfa0c71ba7619442f7c3f964e16f00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a655e37c39c0c51a33c5f4c32e99754d63a5ef0bf436167d848dab748eda2973->leave($__internal_a655e37c39c0c51a33c5f4c32e99754d63a5ef0bf436167d848dab748eda2973_prof);

        
        $__internal_206c8dd09e11bf81389f15405cdf9672ecfa0c71ba7619442f7c3f964e16f00d->leave($__internal_206c8dd09e11bf81389f15405cdf9672ecfa0c71ba7619442f7c3f964e16f00d_prof);

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
