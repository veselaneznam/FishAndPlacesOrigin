<?php

/* @IvoryGoogleMap/Form/place_autocomplete_widget.html.php */
class __TwigTemplate_28253df6fff15532c13d6e45ac8e4370bbb79cc04bcc97a590bc1e3d0dfc454d extends Twig_Template
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
        $__internal_8fac77155a503971c2a70f892f95b4c6a426af0fef31003d6769c0108765d0b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fac77155a503971c2a70f892f95b4c6a426af0fef31003d6769c0108765d0b4->enter($__internal_8fac77155a503971c2a70f892f95b4c6a426af0fef31003d6769c0108765d0b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.php"));

        $__internal_bbd7caaefe74d829766d49cc4f91cbedf1e0e83cbfc045e7becf4031a74e994b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbd7caaefe74d829766d49cc4f91cbedf1e0e83cbfc045e7becf4031a74e994b->enter($__internal_bbd7caaefe74d829766d49cc4f91cbedf1e0e83cbfc045e7becf4031a74e994b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.php"));

        // line 1
        echo "<?php echo \$view['ivory_google_place_autocomplete']->render(\$autocomplete, \$attr) ?>
<?php if (\$api): ?>
    <?php echo \$view['ivory_google_api']->render([\$autocomplete]) ?>
<?php endif; ?>
";
        
        $__internal_8fac77155a503971c2a70f892f95b4c6a426af0fef31003d6769c0108765d0b4->leave($__internal_8fac77155a503971c2a70f892f95b4c6a426af0fef31003d6769c0108765d0b4_prof);

        
        $__internal_bbd7caaefe74d829766d49cc4f91cbedf1e0e83cbfc045e7becf4031a74e994b->leave($__internal_bbd7caaefe74d829766d49cc4f91cbedf1e0e83cbfc045e7becf4031a74e994b_prof);

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
", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.php", "/var/www/FishAndPlaces/vendor/egeloen/google-map-bundle/Resources/views/Form/place_autocomplete_widget.html.php");
    }
}
