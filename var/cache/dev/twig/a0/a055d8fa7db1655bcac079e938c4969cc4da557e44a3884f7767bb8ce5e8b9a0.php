<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_941ffd42f19206d962ad9fcd228c104a219c60741395e871fa67316a8ada7e47 extends Twig_Template
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
        $__internal_bdd1a0d15ade1575636ea0857c22111e9b182f8df95aad0c6aba53d0838e3033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdd1a0d15ade1575636ea0857c22111e9b182f8df95aad0c6aba53d0838e3033->enter($__internal_bdd1a0d15ade1575636ea0857c22111e9b182f8df95aad0c6aba53d0838e3033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_570a3b272a93913a994d4283601af122675b0c2292b441e5eb1901170609db58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570a3b272a93913a994d4283601af122675b0c2292b441e5eb1901170609db58->enter($__internal_570a3b272a93913a994d4283601af122675b0c2292b441e5eb1901170609db58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bdd1a0d15ade1575636ea0857c22111e9b182f8df95aad0c6aba53d0838e3033->leave($__internal_bdd1a0d15ade1575636ea0857c22111e9b182f8df95aad0c6aba53d0838e3033_prof);

        
        $__internal_570a3b272a93913a994d4283601af122675b0c2292b441e5eb1901170609db58->leave($__internal_570a3b272a93913a994d4283601af122675b0c2292b441e5eb1901170609db58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
