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
        $__internal_0a4bce67982d270bde99421ca7897ac83ad6dfcb767ed12785c3eb7b691f53e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4bce67982d270bde99421ca7897ac83ad6dfcb767ed12785c3eb7b691f53e2->enter($__internal_0a4bce67982d270bde99421ca7897ac83ad6dfcb767ed12785c3eb7b691f53e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        $__internal_f9becf5293dcdf7cb292c8ac7bdf018c81f001967d82add6eb891fe4723d59a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9becf5293dcdf7cb292c8ac7bdf018c81f001967d82add6eb891fe4723d59a9->enter($__internal_f9becf5293dcdf7cb292c8ac7bdf018c81f001967d82add6eb891fe4723d59a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable && !\$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_0a4bce67982d270bde99421ca7897ac83ad6dfcb767ed12785c3eb7b691f53e2->leave($__internal_0a4bce67982d270bde99421ca7897ac83ad6dfcb767ed12785c3eb7b691f53e2_prof);

        
        $__internal_f9becf5293dcdf7cb292c8ac7bdf018c81f001967d82add6eb891fe4723d59a9->leave($__internal_f9becf5293dcdf7cb292c8ac7bdf018c81f001967d82add6eb891fe4723d59a9_prof);

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
