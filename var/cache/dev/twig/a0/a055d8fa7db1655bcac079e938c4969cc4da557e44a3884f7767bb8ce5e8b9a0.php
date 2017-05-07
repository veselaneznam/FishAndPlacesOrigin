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
        $__internal_1a10af6f41baaa80c3dd3287380c3d69262e72448ef497d74213dc1f67993943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a10af6f41baaa80c3dd3287380c3d69262e72448ef497d74213dc1f67993943->enter($__internal_1a10af6f41baaa80c3dd3287380c3d69262e72448ef497d74213dc1f67993943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_3ad480acd64ac29f91d7226aac127c0044a89504589f7767da533c54b6393c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad480acd64ac29f91d7226aac127c0044a89504589f7767da533c54b6393c39->enter($__internal_3ad480acd64ac29f91d7226aac127c0044a89504589f7767da533c54b6393c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_1a10af6f41baaa80c3dd3287380c3d69262e72448ef497d74213dc1f67993943->leave($__internal_1a10af6f41baaa80c3dd3287380c3d69262e72448ef497d74213dc1f67993943_prof);

        
        $__internal_3ad480acd64ac29f91d7226aac127c0044a89504589f7767da533c54b6393c39->leave($__internal_3ad480acd64ac29f91d7226aac127c0044a89504589f7767da533c54b6393c39_prof);

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
