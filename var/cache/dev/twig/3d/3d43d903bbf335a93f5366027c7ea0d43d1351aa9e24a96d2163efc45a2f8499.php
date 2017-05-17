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
        $__internal_aecd678bb7ae1d47a2d7c010d78669ec58d0fb05ce479540fcaa1398d1bb7bab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aecd678bb7ae1d47a2d7c010d78669ec58d0fb05ce479540fcaa1398d1bb7bab->enter($__internal_aecd678bb7ae1d47a2d7c010d78669ec58d0fb05ce479540fcaa1398d1bb7bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        $__internal_6f711f037ff8acefae0196d32ad58941689241da09a6e3e0cf79cdbb1fe0c253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f711f037ff8acefae0196d32ad58941689241da09a6e3e0cf79cdbb1fe0c253->enter($__internal_6f711f037ff8acefae0196d32ad58941689241da09a6e3e0cf79cdbb1fe0c253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_aecd678bb7ae1d47a2d7c010d78669ec58d0fb05ce479540fcaa1398d1bb7bab->leave($__internal_aecd678bb7ae1d47a2d7c010d78669ec58d0fb05ce479540fcaa1398d1bb7bab_prof);

        
        $__internal_6f711f037ff8acefae0196d32ad58941689241da09a6e3e0cf79cdbb1fe0c253->leave($__internal_6f711f037ff8acefae0196d32ad58941689241da09a6e3e0cf79cdbb1fe0c253_prof);

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
