<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_619e42e3a088944d07528424c013fd8fb03ed4666931f10d1c00be0810e1af6b extends Twig_Template
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
        $__internal_4b4572e9247ce500ac4ac1139fcef483e3cd3d4d6648ea851e3f053abcdb5cec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b4572e9247ce500ac4ac1139fcef483e3cd3d4d6648ea851e3f053abcdb5cec->enter($__internal_4b4572e9247ce500ac4ac1139fcef483e3cd3d4d6648ea851e3f053abcdb5cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        $__internal_765b9c064d3480b36a862a32d4d8b934a87e96c3e625c2bb3c57eaa89343451d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765b9c064d3480b36a862a32d4d8b934a87e96c3e625c2bb3c57eaa89343451d->enter($__internal_765b9c064d3480b36a862a32d4d8b934a87e96c3e625c2bb3c57eaa89343451d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_4b4572e9247ce500ac4ac1139fcef483e3cd3d4d6648ea851e3f053abcdb5cec->leave($__internal_4b4572e9247ce500ac4ac1139fcef483e3cd3d4d6648ea851e3f053abcdb5cec_prof);

        
        $__internal_765b9c064d3480b36a862a32d4d8b934a87e96c3e625c2bb3c57eaa89343451d->leave($__internal_765b9c064d3480b36a862a32d4d8b934a87e96c3e625c2bb3c57eaa89343451d_prof);

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
", "@IvoryCKEditor/Form/ckeditor_widget.html.php", "/var/www/FishAndPlaces/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_widget.html.php");
    }
}
