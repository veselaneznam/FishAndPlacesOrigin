<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_3e5f0f3bbff02f41f71cbc91aa1092d64776e7f1f3b55b4eabbb6b417a763685 extends Twig_Template
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
        $__internal_2847dd478d0fac23e6e5c6c13a29f8312d02c22dc6137db3deaa42fb0ad18bac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2847dd478d0fac23e6e5c6c13a29f8312d02c22dc6137db3deaa42fb0ad18bac->enter($__internal_2847dd478d0fac23e6e5c6c13a29f8312d02c22dc6137db3deaa42fb0ad18bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a5f499927da46408c4e6a5f3fff8f75226c6cf372f28b211bd8c8b3b5ccd350a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f499927da46408c4e6a5f3fff8f75226c6cf372f28b211bd8c8b3b5ccd350a->enter($__internal_a5f499927da46408c4e6a5f3fff8f75226c6cf372f28b211bd8c8b3b5ccd350a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2847dd478d0fac23e6e5c6c13a29f8312d02c22dc6137db3deaa42fb0ad18bac->leave($__internal_2847dd478d0fac23e6e5c6c13a29f8312d02c22dc6137db3deaa42fb0ad18bac_prof);

        
        $__internal_a5f499927da46408c4e6a5f3fff8f75226c6cf372f28b211bd8c8b3b5ccd350a->leave($__internal_a5f499927da46408c4e6a5f3fff8f75226c6cf372f28b211bd8c8b3b5ccd350a_prof);

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
", "@Framework/Form/form.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
