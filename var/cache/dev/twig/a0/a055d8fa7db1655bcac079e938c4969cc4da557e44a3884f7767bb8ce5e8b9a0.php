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
        $__internal_1af990e72f2446b79bdaa1691141a4905a879f04555f11530164be006bcb7dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af990e72f2446b79bdaa1691141a4905a879f04555f11530164be006bcb7dfe->enter($__internal_1af990e72f2446b79bdaa1691141a4905a879f04555f11530164be006bcb7dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_90fcc5fc9e3d642e2f2d073191e8af49cda8d2223bc75154f30d16861979fde1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90fcc5fc9e3d642e2f2d073191e8af49cda8d2223bc75154f30d16861979fde1->enter($__internal_90fcc5fc9e3d642e2f2d073191e8af49cda8d2223bc75154f30d16861979fde1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1af990e72f2446b79bdaa1691141a4905a879f04555f11530164be006bcb7dfe->leave($__internal_1af990e72f2446b79bdaa1691141a4905a879f04555f11530164be006bcb7dfe_prof);

        
        $__internal_90fcc5fc9e3d642e2f2d073191e8af49cda8d2223bc75154f30d16861979fde1->leave($__internal_90fcc5fc9e3d642e2f2d073191e8af49cda8d2223bc75154f30d16861979fde1_prof);

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
