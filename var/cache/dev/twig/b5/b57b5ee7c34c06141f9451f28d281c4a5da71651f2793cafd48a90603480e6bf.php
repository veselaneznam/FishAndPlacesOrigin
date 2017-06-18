<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_133184936b8646668bb2f0541122d4f1c93d924d50c2461376f25ab296dc555a extends Twig_Template
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
        $__internal_bcc74ff7c36a119cc8997df563fecbb8d605ef59d236389bf30176ea437281f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc74ff7c36a119cc8997df563fecbb8d605ef59d236389bf30176ea437281f5->enter($__internal_bcc74ff7c36a119cc8997df563fecbb8d605ef59d236389bf30176ea437281f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_e7478c97684eccd09f16dbb0e118672429fa72bde4ed7aed73448841f90e7aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7478c97684eccd09f16dbb0e118672429fa72bde4ed7aed73448841f90e7aa7->enter($__internal_e7478c97684eccd09f16dbb0e118672429fa72bde4ed7aed73448841f90e7aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bcc74ff7c36a119cc8997df563fecbb8d605ef59d236389bf30176ea437281f5->leave($__internal_bcc74ff7c36a119cc8997df563fecbb8d605ef59d236389bf30176ea437281f5_prof);

        
        $__internal_e7478c97684eccd09f16dbb0e118672429fa72bde4ed7aed73448841f90e7aa7->leave($__internal_e7478c97684eccd09f16dbb0e118672429fa72bde4ed7aed73448841f90e7aa7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
