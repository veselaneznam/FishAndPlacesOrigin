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
        $__internal_6343f64de13850900f7300fdf8eb199d0f29ce1bef45158682f278278cca3458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6343f64de13850900f7300fdf8eb199d0f29ce1bef45158682f278278cca3458->enter($__internal_6343f64de13850900f7300fdf8eb199d0f29ce1bef45158682f278278cca3458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_df410133cbd4978fdab40366287a2216eb7beee27912245fe8575315edd0286f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df410133cbd4978fdab40366287a2216eb7beee27912245fe8575315edd0286f->enter($__internal_df410133cbd4978fdab40366287a2216eb7beee27912245fe8575315edd0286f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_6343f64de13850900f7300fdf8eb199d0f29ce1bef45158682f278278cca3458->leave($__internal_6343f64de13850900f7300fdf8eb199d0f29ce1bef45158682f278278cca3458_prof);

        
        $__internal_df410133cbd4978fdab40366287a2216eb7beee27912245fe8575315edd0286f->leave($__internal_df410133cbd4978fdab40366287a2216eb7beee27912245fe8575315edd0286f_prof);

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
