<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_7f68c45ab86d303794e48fde0794afb3b9c78715edc60826faea3035e7032305 extends Twig_Template
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
        $__internal_46807d2f0f0b7e4ffc4dc60529c66c4ac1fcdd94f729d403e049c5922f294079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46807d2f0f0b7e4ffc4dc60529c66c4ac1fcdd94f729d403e049c5922f294079->enter($__internal_46807d2f0f0b7e4ffc4dc60529c66c4ac1fcdd94f729d403e049c5922f294079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_de895ab65a01290220afab2ed64a6adecce2c6d2e58b722cb51767773f85ab35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de895ab65a01290220afab2ed64a6adecce2c6d2e58b722cb51767773f85ab35->enter($__internal_de895ab65a01290220afab2ed64a6adecce2c6d2e58b722cb51767773f85ab35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_46807d2f0f0b7e4ffc4dc60529c66c4ac1fcdd94f729d403e049c5922f294079->leave($__internal_46807d2f0f0b7e4ffc4dc60529c66c4ac1fcdd94f729d403e049c5922f294079_prof);

        
        $__internal_de895ab65a01290220afab2ed64a6adecce2c6d2e58b722cb51767773f85ab35->leave($__internal_de895ab65a01290220afab2ed64a6adecce2c6d2e58b722cb51767773f85ab35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
