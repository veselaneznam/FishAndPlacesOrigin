<?php

/* @IvoryGoogleMap/Form/place_autocomplete_widget.html.php */
class __TwigTemplate_aa82b743efaf84ea6897fa6a0ca3d37606feddf1c4ac54f2216787fa4e0fd24c extends Twig_Template
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
        $__internal_a4ebaa8d435e414a931d6358cd1086ac8d67366a0e5e70c89c85eead825251d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4ebaa8d435e414a931d6358cd1086ac8d67366a0e5e70c89c85eead825251d6->enter($__internal_a4ebaa8d435e414a931d6358cd1086ac8d67366a0e5e70c89c85eead825251d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.php"));

        $__internal_d7ebe382286db8e034e01f0bccc6a1185039819e7af49144b89ba8b2f6c19fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ebe382286db8e034e01f0bccc6a1185039819e7af49144b89ba8b2f6c19fdf->enter($__internal_d7ebe382286db8e034e01f0bccc6a1185039819e7af49144b89ba8b2f6c19fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.php"));

        // line 1
        echo "<?php echo \$view['ivory_google_place_autocomplete']->render(\$autocomplete, \$attr) ?>
<?php if (\$api): ?>
    <?php echo \$view['ivory_google_api']->render([\$autocomplete]) ?>
<?php endif; ?>
";
        
        $__internal_a4ebaa8d435e414a931d6358cd1086ac8d67366a0e5e70c89c85eead825251d6->leave($__internal_a4ebaa8d435e414a931d6358cd1086ac8d67366a0e5e70c89c85eead825251d6_prof);

        
        $__internal_d7ebe382286db8e034e01f0bccc6a1185039819e7af49144b89ba8b2f6c19fdf->leave($__internal_d7ebe382286db8e034e01f0bccc6a1185039819e7af49144b89ba8b2f6c19fdf_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryGoogleMap/Form/place_autocomplete_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['ivory_google_place_autocomplete']->render(\$autocomplete, \$attr) ?>
<?php if (\$api): ?>
    <?php echo \$view['ivory_google_api']->render([\$autocomplete]) ?>
<?php endif; ?>
", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/egeloen/google-map-bundle/Resources/views/Form/place_autocomplete_widget.html.php");
    }
}
