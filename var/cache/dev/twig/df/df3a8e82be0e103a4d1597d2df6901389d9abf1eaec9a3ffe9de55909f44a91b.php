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
        $__internal_009d4fa375e71ba5d64dfb4eb5ddb33b8f05aa4102293712fecd288c8a4969a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009d4fa375e71ba5d64dfb4eb5ddb33b8f05aa4102293712fecd288c8a4969a8->enter($__internal_009d4fa375e71ba5d64dfb4eb5ddb33b8f05aa4102293712fecd288c8a4969a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.php"));

        $__internal_5876e65de5750f9e44e04050f5f04fa33a504f636496c27240cf27011e1301d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5876e65de5750f9e44e04050f5f04fa33a504f636496c27240cf27011e1301d7->enter($__internal_5876e65de5750f9e44e04050f5f04fa33a504f636496c27240cf27011e1301d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.php"));

        // line 1
        echo "<?php echo \$view['ivory_google_place_autocomplete']->render(\$autocomplete, \$attr) ?>
<?php if (\$api): ?>
    <?php echo \$view['ivory_google_api']->render([\$autocomplete]) ?>
<?php endif; ?>
";
        
        $__internal_009d4fa375e71ba5d64dfb4eb5ddb33b8f05aa4102293712fecd288c8a4969a8->leave($__internal_009d4fa375e71ba5d64dfb4eb5ddb33b8f05aa4102293712fecd288c8a4969a8_prof);

        
        $__internal_5876e65de5750f9e44e04050f5f04fa33a504f636496c27240cf27011e1301d7->leave($__internal_5876e65de5750f9e44e04050f5f04fa33a504f636496c27240cf27011e1301d7_prof);

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
