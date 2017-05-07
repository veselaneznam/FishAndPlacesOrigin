<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_101dd164aca4075d2c833697c04e3b15d2240f5013ddc7b881809144b4e85672 extends Twig_Template
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
        $__internal_1b7c9eb35b5dc453e4085df309f5a348ebf1a28b89c8e0d3fc9417fd1e7d3ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b7c9eb35b5dc453e4085df309f5a348ebf1a28b89c8e0d3fc9417fd1e7d3ae2->enter($__internal_1b7c9eb35b5dc453e4085df309f5a348ebf1a28b89c8e0d3fc9417fd1e7d3ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_9941a2e532ac1bac224a96d40f556be6656f7319c86ec32d54e72b3f9428dab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9941a2e532ac1bac224a96d40f556be6656f7319c86ec32d54e72b3f9428dab7->enter($__internal_9941a2e532ac1bac224a96d40f556be6656f7319c86ec32d54e72b3f9428dab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1b7c9eb35b5dc453e4085df309f5a348ebf1a28b89c8e0d3fc9417fd1e7d3ae2->leave($__internal_1b7c9eb35b5dc453e4085df309f5a348ebf1a28b89c8e0d3fc9417fd1e7d3ae2_prof);

        
        $__internal_9941a2e532ac1bac224a96d40f556be6656f7319c86ec32d54e72b3f9428dab7->leave($__internal_9941a2e532ac1bac224a96d40f556be6656f7319c86ec32d54e72b3f9428dab7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
