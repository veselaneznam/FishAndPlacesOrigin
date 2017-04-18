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
        $__internal_abd49f0e0dada7b6e7f11f60a1b8bff2f0a9867db58d794f803e990f2f3448ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abd49f0e0dada7b6e7f11f60a1b8bff2f0a9867db58d794f803e990f2f3448ee->enter($__internal_abd49f0e0dada7b6e7f11f60a1b8bff2f0a9867db58d794f803e990f2f3448ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d24c4895d0a23700f1eeae5fd3169be34c417d1b8701e61fd078186eeee02343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d24c4895d0a23700f1eeae5fd3169be34c417d1b8701e61fd078186eeee02343->enter($__internal_d24c4895d0a23700f1eeae5fd3169be34c417d1b8701e61fd078186eeee02343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_abd49f0e0dada7b6e7f11f60a1b8bff2f0a9867db58d794f803e990f2f3448ee->leave($__internal_abd49f0e0dada7b6e7f11f60a1b8bff2f0a9867db58d794f803e990f2f3448ee_prof);

        
        $__internal_d24c4895d0a23700f1eeae5fd3169be34c417d1b8701e61fd078186eeee02343->leave($__internal_d24c4895d0a23700f1eeae5fd3169be34c417d1b8701e61fd078186eeee02343_prof);

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
