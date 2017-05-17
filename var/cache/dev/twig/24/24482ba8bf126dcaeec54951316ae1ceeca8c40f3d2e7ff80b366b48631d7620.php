<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7c9f8eb59aa8cc789485d6d4b6c32c573fb11bf524537932cb04bd8215e2313d extends Twig_Template
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
        $__internal_e893442cf69be6fa53bd686f05b8c01857f1fd10a998798ed55de27da1b585bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e893442cf69be6fa53bd686f05b8c01857f1fd10a998798ed55de27da1b585bd->enter($__internal_e893442cf69be6fa53bd686f05b8c01857f1fd10a998798ed55de27da1b585bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_2cff675413eeaea22cb49bba8ba76d3369cc2d09a9edeaad364462e8bf4525e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cff675413eeaea22cb49bba8ba76d3369cc2d09a9edeaad364462e8bf4525e0->enter($__internal_2cff675413eeaea22cb49bba8ba76d3369cc2d09a9edeaad364462e8bf4525e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e893442cf69be6fa53bd686f05b8c01857f1fd10a998798ed55de27da1b585bd->leave($__internal_e893442cf69be6fa53bd686f05b8c01857f1fd10a998798ed55de27da1b585bd_prof);

        
        $__internal_2cff675413eeaea22cb49bba8ba76d3369cc2d09a9edeaad364462e8bf4525e0->leave($__internal_2cff675413eeaea22cb49bba8ba76d3369cc2d09a9edeaad364462e8bf4525e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
