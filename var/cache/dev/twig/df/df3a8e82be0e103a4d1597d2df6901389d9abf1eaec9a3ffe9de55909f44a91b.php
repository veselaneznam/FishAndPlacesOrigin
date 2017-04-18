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
        $__internal_f339e14d64bf5f8d78d8e4c845a20c6ac1e4457fd00da5d5ac3ad248e8d8ac6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f339e14d64bf5f8d78d8e4c845a20c6ac1e4457fd00da5d5ac3ad248e8d8ac6b->enter($__internal_f339e14d64bf5f8d78d8e4c845a20c6ac1e4457fd00da5d5ac3ad248e8d8ac6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.php"));

        $__internal_638ad7d264898be1abfa397b536610eaa44727d8963f64968a00b647edf97865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_638ad7d264898be1abfa397b536610eaa44727d8963f64968a00b647edf97865->enter($__internal_638ad7d264898be1abfa397b536610eaa44727d8963f64968a00b647edf97865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryGoogleMap/Form/place_autocomplete_widget.html.php"));

        // line 1
        echo "<?php echo \$view['ivory_google_place_autocomplete']->render(\$autocomplete, \$attr) ?>
<?php if (\$api): ?>
    <?php echo \$view['ivory_google_api']->render([\$autocomplete]) ?>
<?php endif; ?>
";
        
        $__internal_f339e14d64bf5f8d78d8e4c845a20c6ac1e4457fd00da5d5ac3ad248e8d8ac6b->leave($__internal_f339e14d64bf5f8d78d8e4c845a20c6ac1e4457fd00da5d5ac3ad248e8d8ac6b_prof);

        
        $__internal_638ad7d264898be1abfa397b536610eaa44727d8963f64968a00b647edf97865->leave($__internal_638ad7d264898be1abfa397b536610eaa44727d8963f64968a00b647edf97865_prof);

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
