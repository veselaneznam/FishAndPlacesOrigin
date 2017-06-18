<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5b1e72944fe3cfe1a1e99dc7fc051c61db4b769a1f85ae95275d595d82612a07 extends Twig_Template
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
        $__internal_06ceba2459c141ad5bd64b88c8ff2379ff666b5b9daafa2d1e8a28713f8b52b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ceba2459c141ad5bd64b88c8ff2379ff666b5b9daafa2d1e8a28713f8b52b0->enter($__internal_06ceba2459c141ad5bd64b88c8ff2379ff666b5b9daafa2d1e8a28713f8b52b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_1ef79e642417288b84aa3aac98d7c9a17d3973b3cd0fdfecf9fc444aec427551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef79e642417288b84aa3aac98d7c9a17d3973b3cd0fdfecf9fc444aec427551->enter($__internal_1ef79e642417288b84aa3aac98d7c9a17d3973b3cd0fdfecf9fc444aec427551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_06ceba2459c141ad5bd64b88c8ff2379ff666b5b9daafa2d1e8a28713f8b52b0->leave($__internal_06ceba2459c141ad5bd64b88c8ff2379ff666b5b9daafa2d1e8a28713f8b52b0_prof);

        
        $__internal_1ef79e642417288b84aa3aac98d7c9a17d3973b3cd0fdfecf9fc444aec427551->leave($__internal_1ef79e642417288b84aa3aac98d7c9a17d3973b3cd0fdfecf9fc444aec427551_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
