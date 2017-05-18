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
        $__internal_2bb3801b62882d45acb0a9c5a7f826c1f6226e5e499f57a108cf4364bcb9158d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb3801b62882d45acb0a9c5a7f826c1f6226e5e499f57a108cf4364bcb9158d->enter($__internal_2bb3801b62882d45acb0a9c5a7f826c1f6226e5e499f57a108cf4364bcb9158d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_22bcac594717e6909bc0e94faa01968fe8aaa858b9cc9789569058327a491967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bcac594717e6909bc0e94faa01968fe8aaa858b9cc9789569058327a491967->enter($__internal_22bcac594717e6909bc0e94faa01968fe8aaa858b9cc9789569058327a491967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_2bb3801b62882d45acb0a9c5a7f826c1f6226e5e499f57a108cf4364bcb9158d->leave($__internal_2bb3801b62882d45acb0a9c5a7f826c1f6226e5e499f57a108cf4364bcb9158d_prof);

        
        $__internal_22bcac594717e6909bc0e94faa01968fe8aaa858b9cc9789569058327a491967->leave($__internal_22bcac594717e6909bc0e94faa01968fe8aaa858b9cc9789569058327a491967_prof);

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
