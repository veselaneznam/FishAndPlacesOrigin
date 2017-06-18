<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_0286fda4203d73f2dd97559c736d8fbb66ff2bb80db22da45237ebe54154ccb2 extends Twig_Template
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
        $__internal_dc841eeef293f624e96f5e50caef465f5fbc419a39a070b229ff85720287044a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc841eeef293f624e96f5e50caef465f5fbc419a39a070b229ff85720287044a->enter($__internal_dc841eeef293f624e96f5e50caef465f5fbc419a39a070b229ff85720287044a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_6f19e67ea859fa1ad87194e6e8a09ae676f3f8a6132953d2ab7720faf5c10652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f19e67ea859fa1ad87194e6e8a09ae676f3f8a6132953d2ab7720faf5c10652->enter($__internal_6f19e67ea859fa1ad87194e6e8a09ae676f3f8a6132953d2ab7720faf5c10652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_dc841eeef293f624e96f5e50caef465f5fbc419a39a070b229ff85720287044a->leave($__internal_dc841eeef293f624e96f5e50caef465f5fbc419a39a070b229ff85720287044a_prof);

        
        $__internal_6f19e67ea859fa1ad87194e6e8a09ae676f3f8a6132953d2ab7720faf5c10652->leave($__internal_6f19e67ea859fa1ad87194e6e8a09ae676f3f8a6132953d2ab7720faf5c10652_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
