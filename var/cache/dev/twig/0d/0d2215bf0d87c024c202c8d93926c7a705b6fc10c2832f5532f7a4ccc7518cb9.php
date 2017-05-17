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
        $__internal_05beb382ca0d3e64388a5b1b89a6f352bcc11594ec29478c41fcdba92fdbe5e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05beb382ca0d3e64388a5b1b89a6f352bcc11594ec29478c41fcdba92fdbe5e7->enter($__internal_05beb382ca0d3e64388a5b1b89a6f352bcc11594ec29478c41fcdba92fdbe5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_ec3081c11fbd6e9cba2e58625247d99622565309a6cd2015b098fd686b407eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3081c11fbd6e9cba2e58625247d99622565309a6cd2015b098fd686b407eb8->enter($__internal_ec3081c11fbd6e9cba2e58625247d99622565309a6cd2015b098fd686b407eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_05beb382ca0d3e64388a5b1b89a6f352bcc11594ec29478c41fcdba92fdbe5e7->leave($__internal_05beb382ca0d3e64388a5b1b89a6f352bcc11594ec29478c41fcdba92fdbe5e7_prof);

        
        $__internal_ec3081c11fbd6e9cba2e58625247d99622565309a6cd2015b098fd686b407eb8->leave($__internal_ec3081c11fbd6e9cba2e58625247d99622565309a6cd2015b098fd686b407eb8_prof);

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
