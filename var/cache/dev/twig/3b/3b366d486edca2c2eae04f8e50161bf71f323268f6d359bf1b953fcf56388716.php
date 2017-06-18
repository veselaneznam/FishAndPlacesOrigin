<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8117bac01443882b2cd4ee9f4240d314ef1f5403f4cc1db70360bf976071815e extends Twig_Template
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
        $__internal_417a0206025ccf55dda66349427bc633bf779c2415dc010acd5c95037d44925e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417a0206025ccf55dda66349427bc633bf779c2415dc010acd5c95037d44925e->enter($__internal_417a0206025ccf55dda66349427bc633bf779c2415dc010acd5c95037d44925e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3fd6c9077c47c6db5c7678ca2fbec5d9c100f280a5e4b86b0713fdb9c8d2cce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd6c9077c47c6db5c7678ca2fbec5d9c100f280a5e4b86b0713fdb9c8d2cce2->enter($__internal_3fd6c9077c47c6db5c7678ca2fbec5d9c100f280a5e4b86b0713fdb9c8d2cce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_417a0206025ccf55dda66349427bc633bf779c2415dc010acd5c95037d44925e->leave($__internal_417a0206025ccf55dda66349427bc633bf779c2415dc010acd5c95037d44925e_prof);

        
        $__internal_3fd6c9077c47c6db5c7678ca2fbec5d9c100f280a5e4b86b0713fdb9c8d2cce2->leave($__internal_3fd6c9077c47c6db5c7678ca2fbec5d9c100f280a5e4b86b0713fdb9c8d2cce2_prof);

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
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
