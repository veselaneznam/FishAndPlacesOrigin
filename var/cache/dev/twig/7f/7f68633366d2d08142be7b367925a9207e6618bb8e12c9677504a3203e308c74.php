<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2696f5c6aa55ec42bb072d2f7307f3ed5af3f1e5ca6ad81bc067a735033ad965 extends Twig_Template
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
        $__internal_f5302b97f4e3b3d349b5a7e71f53b620acc2126496709d298efbc828156fa1df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5302b97f4e3b3d349b5a7e71f53b620acc2126496709d298efbc828156fa1df->enter($__internal_f5302b97f4e3b3d349b5a7e71f53b620acc2126496709d298efbc828156fa1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_373024600ae394e0a33f64a2c1e210cc6bbf86eb6907d44acf2a16ab4640c7ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_373024600ae394e0a33f64a2c1e210cc6bbf86eb6907d44acf2a16ab4640c7ce->enter($__internal_373024600ae394e0a33f64a2c1e210cc6bbf86eb6907d44acf2a16ab4640c7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f5302b97f4e3b3d349b5a7e71f53b620acc2126496709d298efbc828156fa1df->leave($__internal_f5302b97f4e3b3d349b5a7e71f53b620acc2126496709d298efbc828156fa1df_prof);

        
        $__internal_373024600ae394e0a33f64a2c1e210cc6bbf86eb6907d44acf2a16ab4640c7ce->leave($__internal_373024600ae394e0a33f64a2c1e210cc6bbf86eb6907d44acf2a16ab4640c7ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
