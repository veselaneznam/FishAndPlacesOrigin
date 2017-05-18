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
        $__internal_f9195d40339cc4ca3b9ed6e98c1dc4ed4a4f35cf57caf38d83daf85707545870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9195d40339cc4ca3b9ed6e98c1dc4ed4a4f35cf57caf38d83daf85707545870->enter($__internal_f9195d40339cc4ca3b9ed6e98c1dc4ed4a4f35cf57caf38d83daf85707545870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_dc61d589be99659acab427d1826379c279eb9a0ecc22794f0a671ce7b0d3d592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc61d589be99659acab427d1826379c279eb9a0ecc22794f0a671ce7b0d3d592->enter($__internal_dc61d589be99659acab427d1826379c279eb9a0ecc22794f0a671ce7b0d3d592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f9195d40339cc4ca3b9ed6e98c1dc4ed4a4f35cf57caf38d83daf85707545870->leave($__internal_f9195d40339cc4ca3b9ed6e98c1dc4ed4a4f35cf57caf38d83daf85707545870_prof);

        
        $__internal_dc61d589be99659acab427d1826379c279eb9a0ecc22794f0a671ce7b0d3d592->leave($__internal_dc61d589be99659acab427d1826379c279eb9a0ecc22794f0a671ce7b0d3d592_prof);

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
