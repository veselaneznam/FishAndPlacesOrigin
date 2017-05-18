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
        $__internal_d28630b9e654954fb2c5525b3b6d539d5403c0e2783fc122367592b0c7ba81c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d28630b9e654954fb2c5525b3b6d539d5403c0e2783fc122367592b0c7ba81c2->enter($__internal_d28630b9e654954fb2c5525b3b6d539d5403c0e2783fc122367592b0c7ba81c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_7df13ce0b7c0166fae5a6bdd48dc1605059f4ff2c513fc61cc45d634bdb99caf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df13ce0b7c0166fae5a6bdd48dc1605059f4ff2c513fc61cc45d634bdb99caf->enter($__internal_7df13ce0b7c0166fae5a6bdd48dc1605059f4ff2c513fc61cc45d634bdb99caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d28630b9e654954fb2c5525b3b6d539d5403c0e2783fc122367592b0c7ba81c2->leave($__internal_d28630b9e654954fb2c5525b3b6d539d5403c0e2783fc122367592b0c7ba81c2_prof);

        
        $__internal_7df13ce0b7c0166fae5a6bdd48dc1605059f4ff2c513fc61cc45d634bdb99caf->leave($__internal_7df13ce0b7c0166fae5a6bdd48dc1605059f4ff2c513fc61cc45d634bdb99caf_prof);

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
