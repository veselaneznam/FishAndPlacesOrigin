<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_998cfe2be9e04cb25a44f0b294a549f44b6af7b3c0c1a8cd7f0267ae57ab7a67 extends Twig_Template
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
        $__internal_e82cbd74c1a5365dd703e2207d2a72676d9a77e71e1e74a7cbdc8736e2fb788e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82cbd74c1a5365dd703e2207d2a72676d9a77e71e1e74a7cbdc8736e2fb788e->enter($__internal_e82cbd74c1a5365dd703e2207d2a72676d9a77e71e1e74a7cbdc8736e2fb788e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_5935af8fecc37c3afedc246dea23d1d8f832119882be1db8e0778298d9623570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5935af8fecc37c3afedc246dea23d1d8f832119882be1db8e0778298d9623570->enter($__internal_5935af8fecc37c3afedc246dea23d1d8f832119882be1db8e0778298d9623570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e82cbd74c1a5365dd703e2207d2a72676d9a77e71e1e74a7cbdc8736e2fb788e->leave($__internal_e82cbd74c1a5365dd703e2207d2a72676d9a77e71e1e74a7cbdc8736e2fb788e_prof);

        
        $__internal_5935af8fecc37c3afedc246dea23d1d8f832119882be1db8e0778298d9623570->leave($__internal_5935af8fecc37c3afedc246dea23d1d8f832119882be1db8e0778298d9623570_prof);

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
", "@Framework/Form/form_widget_compound.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
