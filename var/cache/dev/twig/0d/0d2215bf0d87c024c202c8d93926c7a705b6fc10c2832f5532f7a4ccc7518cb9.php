<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a668dd753033e48af54330c0f007e2bfe23308d063bfeab134453542bbee0340 extends Twig_Template
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
        $__internal_58bf7a7ec5b0af3c659ce83e5280d7d180c896e94943c9cac1f6904db4dac25b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58bf7a7ec5b0af3c659ce83e5280d7d180c896e94943c9cac1f6904db4dac25b->enter($__internal_58bf7a7ec5b0af3c659ce83e5280d7d180c896e94943c9cac1f6904db4dac25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_1f222ae871c554c9dbca8f24a006823af7f1a0be424224e3a09167da6cda0798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f222ae871c554c9dbca8f24a006823af7f1a0be424224e3a09167da6cda0798->enter($__internal_1f222ae871c554c9dbca8f24a006823af7f1a0be424224e3a09167da6cda0798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_58bf7a7ec5b0af3c659ce83e5280d7d180c896e94943c9cac1f6904db4dac25b->leave($__internal_58bf7a7ec5b0af3c659ce83e5280d7d180c896e94943c9cac1f6904db4dac25b_prof);

        
        $__internal_1f222ae871c554c9dbca8f24a006823af7f1a0be424224e3a09167da6cda0798->leave($__internal_1f222ae871c554c9dbca8f24a006823af7f1a0be424224e3a09167da6cda0798_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
