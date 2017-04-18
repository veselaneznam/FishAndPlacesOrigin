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
        $__internal_7cfa2b96213cb00a0d3ae0b05736c62d82151f5574bc96fe8fd376b041b6aca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cfa2b96213cb00a0d3ae0b05736c62d82151f5574bc96fe8fd376b041b6aca4->enter($__internal_7cfa2b96213cb00a0d3ae0b05736c62d82151f5574bc96fe8fd376b041b6aca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_3b08c7e27e334d9fe90823830343324469dc59881cd75bf183b5df7bd69e3293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b08c7e27e334d9fe90823830343324469dc59881cd75bf183b5df7bd69e3293->enter($__internal_3b08c7e27e334d9fe90823830343324469dc59881cd75bf183b5df7bd69e3293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_7cfa2b96213cb00a0d3ae0b05736c62d82151f5574bc96fe8fd376b041b6aca4->leave($__internal_7cfa2b96213cb00a0d3ae0b05736c62d82151f5574bc96fe8fd376b041b6aca4_prof);

        
        $__internal_3b08c7e27e334d9fe90823830343324469dc59881cd75bf183b5df7bd69e3293->leave($__internal_3b08c7e27e334d9fe90823830343324469dc59881cd75bf183b5df7bd69e3293_prof);

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
