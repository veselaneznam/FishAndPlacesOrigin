<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_0936387e507e8058bfcdf4bb058c68e26eb3e17890b27be3d351c5e172b9ea73 extends Twig_Template
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
        $__internal_e3e07248dcfa925b1475e7cc6ebd409d36fbeeb6320a86a5b38d996310800558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e07248dcfa925b1475e7cc6ebd409d36fbeeb6320a86a5b38d996310800558->enter($__internal_e3e07248dcfa925b1475e7cc6ebd409d36fbeeb6320a86a5b38d996310800558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_0c4ab08856424a08afc729093b5cd33b0dff83748337b0359002ce3e68d5f3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4ab08856424a08afc729093b5cd33b0dff83748337b0359002ce3e68d5f3db->enter($__internal_0c4ab08856424a08afc729093b5cd33b0dff83748337b0359002ce3e68d5f3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_e3e07248dcfa925b1475e7cc6ebd409d36fbeeb6320a86a5b38d996310800558->leave($__internal_e3e07248dcfa925b1475e7cc6ebd409d36fbeeb6320a86a5b38d996310800558_prof);

        
        $__internal_0c4ab08856424a08afc729093b5cd33b0dff83748337b0359002ce3e68d5f3db->leave($__internal_0c4ab08856424a08afc729093b5cd33b0dff83748337b0359002ce3e68d5f3db_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
