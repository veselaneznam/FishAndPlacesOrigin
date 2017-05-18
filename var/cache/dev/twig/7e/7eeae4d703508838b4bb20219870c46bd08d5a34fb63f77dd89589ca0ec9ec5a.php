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
        $__internal_2589f43370f77d2cb36b4a9859e73baeff42a53a337a68c5e43aefaafc5004f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2589f43370f77d2cb36b4a9859e73baeff42a53a337a68c5e43aefaafc5004f4->enter($__internal_2589f43370f77d2cb36b4a9859e73baeff42a53a337a68c5e43aefaafc5004f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_8b893ad258d493337a0a824b331a318b48bca994d42f19a935db75f64e4e7e7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b893ad258d493337a0a824b331a318b48bca994d42f19a935db75f64e4e7e7e->enter($__internal_8b893ad258d493337a0a824b331a318b48bca994d42f19a935db75f64e4e7e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_2589f43370f77d2cb36b4a9859e73baeff42a53a337a68c5e43aefaafc5004f4->leave($__internal_2589f43370f77d2cb36b4a9859e73baeff42a53a337a68c5e43aefaafc5004f4_prof);

        
        $__internal_8b893ad258d493337a0a824b331a318b48bca994d42f19a935db75f64e4e7e7e->leave($__internal_8b893ad258d493337a0a824b331a318b48bca994d42f19a935db75f64e4e7e7e_prof);

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
