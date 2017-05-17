<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d292a328bfd0b4d8112ade16c2885d9b309377787ca380f0fcdf6c2d9e02fe35 extends Twig_Template
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
        $__internal_9fde520232d505bb156eb7654beca206faf407c8775c121430a086775c41f931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fde520232d505bb156eb7654beca206faf407c8775c121430a086775c41f931->enter($__internal_9fde520232d505bb156eb7654beca206faf407c8775c121430a086775c41f931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_bca3ee33841f7d308cc1e57e413f5a8396c4c4bc9b575e31e1d8f74651404eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca3ee33841f7d308cc1e57e413f5a8396c4c4bc9b575e31e1d8f74651404eff->enter($__internal_bca3ee33841f7d308cc1e57e413f5a8396c4c4bc9b575e31e1d8f74651404eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_9fde520232d505bb156eb7654beca206faf407c8775c121430a086775c41f931->leave($__internal_9fde520232d505bb156eb7654beca206faf407c8775c121430a086775c41f931_prof);

        
        $__internal_bca3ee33841f7d308cc1e57e413f5a8396c4c4bc9b575e31e1d8f74651404eff->leave($__internal_bca3ee33841f7d308cc1e57e413f5a8396c4c4bc9b575e31e1d8f74651404eff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
