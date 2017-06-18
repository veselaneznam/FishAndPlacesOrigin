<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_66fd73370a6eba144cf5167418d2cb1b2c5595649dac2f9c0dd5a3cba8b2ad35 extends Twig_Template
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
        $__internal_16c392206afc6fba6fdc01096352a527c463853cd7bcb7c00ac61ad563c32a07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16c392206afc6fba6fdc01096352a527c463853cd7bcb7c00ac61ad563c32a07->enter($__internal_16c392206afc6fba6fdc01096352a527c463853cd7bcb7c00ac61ad563c32a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_ce44ff08678e517622695a0e4b61c9ce3a946c69d492a5aa953a30cf11f05f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce44ff08678e517622695a0e4b61c9ce3a946c69d492a5aa953a30cf11f05f4d->enter($__internal_ce44ff08678e517622695a0e4b61c9ce3a946c69d492a5aa953a30cf11f05f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_16c392206afc6fba6fdc01096352a527c463853cd7bcb7c00ac61ad563c32a07->leave($__internal_16c392206afc6fba6fdc01096352a527c463853cd7bcb7c00ac61ad563c32a07_prof);

        
        $__internal_ce44ff08678e517622695a0e4b61c9ce3a946c69d492a5aa953a30cf11f05f4d->leave($__internal_ce44ff08678e517622695a0e4b61c9ce3a946c69d492a5aa953a30cf11f05f4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
