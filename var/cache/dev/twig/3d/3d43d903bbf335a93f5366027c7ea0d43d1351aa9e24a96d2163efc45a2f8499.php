<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_1ccbcd87848b2bbae9b5158d74c5ee0a0485e5d537b1c6d64b935cc7d2199524 extends Twig_Template
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
        $__internal_e0b7889a3b1ea28bf94399c3d655d480c4c1e7c70f290052a9e04512d75d1f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0b7889a3b1ea28bf94399c3d655d480c4c1e7c70f290052a9e04512d75d1f05->enter($__internal_e0b7889a3b1ea28bf94399c3d655d480c4c1e7c70f290052a9e04512d75d1f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        $__internal_fcfaab209104b78d20e4c9fb1415e5589a99ac9d1c95055cc8230bf835afdd7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfaab209104b78d20e4c9fb1415e5589a99ac9d1c95055cc8230bf835afdd7b->enter($__internal_fcfaab209104b78d20e4c9fb1415e5589a99ac9d1c95055cc8230bf835afdd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_e0b7889a3b1ea28bf94399c3d655d480c4c1e7c70f290052a9e04512d75d1f05->leave($__internal_e0b7889a3b1ea28bf94399c3d655d480c4c1e7c70f290052a9e04512d75d1f05_prof);

        
        $__internal_fcfaab209104b78d20e4c9fb1415e5589a99ac9d1c95055cc8230bf835afdd7b->leave($__internal_fcfaab209104b78d20e4c9fb1415e5589a99ac9d1c95055cc8230bf835afdd7b_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.php");
    }
}
