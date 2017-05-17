<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0f7a879e341904216607f653dade494a36c35b906ced9640612ff43c2ea7d592 extends Twig_Template
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
        $__internal_25d00a9c0b811f64a601a99f6e2a02fe637046bbab7c376f687bf2f14f86a9cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d00a9c0b811f64a601a99f6e2a02fe637046bbab7c376f687bf2f14f86a9cb->enter($__internal_25d00a9c0b811f64a601a99f6e2a02fe637046bbab7c376f687bf2f14f86a9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_4e2e860bf2ec15b8dbdaeb3980fb54804ad988bd281dc158f767997982d66777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2e860bf2ec15b8dbdaeb3980fb54804ad988bd281dc158f767997982d66777->enter($__internal_4e2e860bf2ec15b8dbdaeb3980fb54804ad988bd281dc158f767997982d66777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_25d00a9c0b811f64a601a99f6e2a02fe637046bbab7c376f687bf2f14f86a9cb->leave($__internal_25d00a9c0b811f64a601a99f6e2a02fe637046bbab7c376f687bf2f14f86a9cb_prof);

        
        $__internal_4e2e860bf2ec15b8dbdaeb3980fb54804ad988bd281dc158f767997982d66777->leave($__internal_4e2e860bf2ec15b8dbdaeb3980fb54804ad988bd281dc158f767997982d66777_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
