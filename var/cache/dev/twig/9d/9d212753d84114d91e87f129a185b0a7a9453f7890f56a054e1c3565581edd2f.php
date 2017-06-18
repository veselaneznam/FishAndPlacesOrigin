<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6b38700bae4fcc1974419595a29b27d99ce81a55325f3472721359acd5182637 extends Twig_Template
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
        $__internal_7fe97ef9dab9555ca76e3f4b49b264ea7fa45e5624c5abf4c1135185aa64644e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe97ef9dab9555ca76e3f4b49b264ea7fa45e5624c5abf4c1135185aa64644e->enter($__internal_7fe97ef9dab9555ca76e3f4b49b264ea7fa45e5624c5abf4c1135185aa64644e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_f507c398e7f30909dd8458e424166aa31238ee41e5c3895d0ea2895410573e27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f507c398e7f30909dd8458e424166aa31238ee41e5c3895d0ea2895410573e27->enter($__internal_f507c398e7f30909dd8458e424166aa31238ee41e5c3895d0ea2895410573e27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_7fe97ef9dab9555ca76e3f4b49b264ea7fa45e5624c5abf4c1135185aa64644e->leave($__internal_7fe97ef9dab9555ca76e3f4b49b264ea7fa45e5624c5abf4c1135185aa64644e_prof);

        
        $__internal_f507c398e7f30909dd8458e424166aa31238ee41e5c3895d0ea2895410573e27->leave($__internal_f507c398e7f30909dd8458e424166aa31238ee41e5c3895d0ea2895410573e27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
