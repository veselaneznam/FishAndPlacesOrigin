<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_f87d6bcbad03a53b0a2aeb860081ea6c171adfa98e8adc335536389fbe1f9a2e extends Twig_Template
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
        $__internal_ae26b8df72ebfaefe5102f62f0aaec336ad23e68ccfd90393477d8103b312113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae26b8df72ebfaefe5102f62f0aaec336ad23e68ccfd90393477d8103b312113->enter($__internal_ae26b8df72ebfaefe5102f62f0aaec336ad23e68ccfd90393477d8103b312113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_d09fd7543f12da9a224bf968c654b7dc87d1921a92a926844e5e4336b45902ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09fd7543f12da9a224bf968c654b7dc87d1921a92a926844e5e4336b45902ef->enter($__internal_d09fd7543f12da9a224bf968c654b7dc87d1921a92a926844e5e4336b45902ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ae26b8df72ebfaefe5102f62f0aaec336ad23e68ccfd90393477d8103b312113->leave($__internal_ae26b8df72ebfaefe5102f62f0aaec336ad23e68ccfd90393477d8103b312113_prof);

        
        $__internal_d09fd7543f12da9a224bf968c654b7dc87d1921a92a926844e5e4336b45902ef->leave($__internal_d09fd7543f12da9a224bf968c654b7dc87d1921a92a926844e5e4336b45902ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
