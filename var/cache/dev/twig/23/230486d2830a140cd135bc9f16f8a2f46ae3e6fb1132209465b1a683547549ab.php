<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_1f5fdaac922d592a5df7641e3b1949c24c34f68178e4d1a20c239f36541784fd extends Twig_Template
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
        $__internal_f04842b5b0bcb4e6689636ac9c97f32948dc4778e31849f8de9654d8423e1717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04842b5b0bcb4e6689636ac9c97f32948dc4778e31849f8de9654d8423e1717->enter($__internal_f04842b5b0bcb4e6689636ac9c97f32948dc4778e31849f8de9654d8423e1717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d7065e1493154ec303ca48cefb6eaa03b017ee7c3c2e576a1601ab5273f28756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7065e1493154ec303ca48cefb6eaa03b017ee7c3c2e576a1601ab5273f28756->enter($__internal_d7065e1493154ec303ca48cefb6eaa03b017ee7c3c2e576a1601ab5273f28756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_f04842b5b0bcb4e6689636ac9c97f32948dc4778e31849f8de9654d8423e1717->leave($__internal_f04842b5b0bcb4e6689636ac9c97f32948dc4778e31849f8de9654d8423e1717_prof);

        
        $__internal_d7065e1493154ec303ca48cefb6eaa03b017ee7c3c2e576a1601ab5273f28756->leave($__internal_d7065e1493154ec303ca48cefb6eaa03b017ee7c3c2e576a1601ab5273f28756_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
