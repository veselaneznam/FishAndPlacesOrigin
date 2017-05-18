<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_4ca865f66c2cd260b40aaaf239495a9155f69f97615bf843da03f1525fba62f3 extends Twig_Template
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
        $__internal_fef9776b15b249fe8357382849dad081a038eca3efaa49fa24fd8ccb21cf2200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef9776b15b249fe8357382849dad081a038eca3efaa49fa24fd8ccb21cf2200->enter($__internal_fef9776b15b249fe8357382849dad081a038eca3efaa49fa24fd8ccb21cf2200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_1120c20ef811609962a0ba3a56b797abf9825837ccb4e4a3e7528f7e8e998c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1120c20ef811609962a0ba3a56b797abf9825837ccb4e4a3e7528f7e8e998c93->enter($__internal_1120c20ef811609962a0ba3a56b797abf9825837ccb4e4a3e7528f7e8e998c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_fef9776b15b249fe8357382849dad081a038eca3efaa49fa24fd8ccb21cf2200->leave($__internal_fef9776b15b249fe8357382849dad081a038eca3efaa49fa24fd8ccb21cf2200_prof);

        
        $__internal_1120c20ef811609962a0ba3a56b797abf9825837ccb4e4a3e7528f7e8e998c93->leave($__internal_1120c20ef811609962a0ba3a56b797abf9825837ccb4e4a3e7528f7e8e998c93_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
