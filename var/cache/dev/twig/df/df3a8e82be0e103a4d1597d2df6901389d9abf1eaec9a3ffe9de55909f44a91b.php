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
        $__internal_3951f191cfa8af1c7b7f28534a950c47b11d64204670efb463c042d554a54c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3951f191cfa8af1c7b7f28534a950c47b11d64204670efb463c042d554a54c1f->enter($__internal_3951f191cfa8af1c7b7f28534a950c47b11d64204670efb463c042d554a54c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.php"));

        $__internal_e69f9b6fd785fa029b6ed643d2481bac33b57c1e1d27fa29706be2fc21b5b1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69f9b6fd785fa029b6ed643d2481bac33b57c1e1d27fa29706be2fc21b5b1cf->enter($__internal_e69f9b6fd785fa029b6ed643d2481bac33b57c1e1d27fa29706be2fc21b5b1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.php"));

        // line 1
        echo "<?php echo \$view['ivory_google_place_autocomplete']->render(\$autocomplete, \$attr) ?>
<?php if (\$api): ?>
    <?php echo \$view['ivory_google_api']->render([\$autocomplete]) ?>
<?php endif; ?>
";
        
        $__internal_3951f191cfa8af1c7b7f28534a950c47b11d64204670efb463c042d554a54c1f->leave($__internal_3951f191cfa8af1c7b7f28534a950c47b11d64204670efb463c042d554a54c1f_prof);

        
        $__internal_e69f9b6fd785fa029b6ed643d2481bac33b57c1e1d27fa29706be2fc21b5b1cf->leave($__internal_e69f9b6fd785fa029b6ed643d2481bac33b57c1e1d27fa29706be2fc21b5b1cf_prof);

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
