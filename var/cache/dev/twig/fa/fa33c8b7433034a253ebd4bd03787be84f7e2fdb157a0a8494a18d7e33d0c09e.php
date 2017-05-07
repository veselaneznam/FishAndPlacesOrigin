<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c2f4e28a24e9996c24a2f4794cdbbbb56e2e11cb1843bccebf8327752707a4f4 extends Twig_Template
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
        $__internal_dd21b90ffe94700b52f47f97d1123193cfc43326f82a4dd88354dce016fb08be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd21b90ffe94700b52f47f97d1123193cfc43326f82a4dd88354dce016fb08be->enter($__internal_dd21b90ffe94700b52f47f97d1123193cfc43326f82a4dd88354dce016fb08be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_e15edd14aa4913c0d302367218c9bdf2e0e1c4a146438d53020c12a4d43f4696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15edd14aa4913c0d302367218c9bdf2e0e1c4a146438d53020c12a4d43f4696->enter($__internal_e15edd14aa4913c0d302367218c9bdf2e0e1c4a146438d53020c12a4d43f4696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_dd21b90ffe94700b52f47f97d1123193cfc43326f82a4dd88354dce016fb08be->leave($__internal_dd21b90ffe94700b52f47f97d1123193cfc43326f82a4dd88354dce016fb08be_prof);

        
        $__internal_e15edd14aa4913c0d302367218c9bdf2e0e1c4a146438d53020c12a4d43f4696->leave($__internal_e15edd14aa4913c0d302367218c9bdf2e0e1c4a146438d53020c12a4d43f4696_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
