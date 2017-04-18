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
        $__internal_16bd38a62dd15b645a8d447aba4403ccecf2863c72b207477cec483112bcf716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16bd38a62dd15b645a8d447aba4403ccecf2863c72b207477cec483112bcf716->enter($__internal_16bd38a62dd15b645a8d447aba4403ccecf2863c72b207477cec483112bcf716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_d8c79b71f28b8fcfcb8e1c8e49f351941fdef7f145c6d04d19084b45f7e7429c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c79b71f28b8fcfcb8e1c8e49f351941fdef7f145c6d04d19084b45f7e7429c->enter($__internal_d8c79b71f28b8fcfcb8e1c8e49f351941fdef7f145c6d04d19084b45f7e7429c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_16bd38a62dd15b645a8d447aba4403ccecf2863c72b207477cec483112bcf716->leave($__internal_16bd38a62dd15b645a8d447aba4403ccecf2863c72b207477cec483112bcf716_prof);

        
        $__internal_d8c79b71f28b8fcfcb8e1c8e49f351941fdef7f145c6d04d19084b45f7e7429c->leave($__internal_d8c79b71f28b8fcfcb8e1c8e49f351941fdef7f145c6d04d19084b45f7e7429c_prof);

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
