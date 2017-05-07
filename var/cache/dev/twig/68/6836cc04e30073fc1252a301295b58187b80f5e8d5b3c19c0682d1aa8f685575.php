<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e1b4fc25ff77ecf1107a71466320a7b658311083842a75ba7b83c0d14467edfd extends Twig_Template
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
        $__internal_c71ab5849b3ad20bfca8d9f115e95c85b9863aa460750832db7d5c46428203dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71ab5849b3ad20bfca8d9f115e95c85b9863aa460750832db7d5c46428203dd->enter($__internal_c71ab5849b3ad20bfca8d9f115e95c85b9863aa460750832db7d5c46428203dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_e208bd24bdf586aa3a94ebf41d6caa17a7272f0d1e9130f11e3530f45fa7132f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e208bd24bdf586aa3a94ebf41d6caa17a7272f0d1e9130f11e3530f45fa7132f->enter($__internal_e208bd24bdf586aa3a94ebf41d6caa17a7272f0d1e9130f11e3530f45fa7132f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c71ab5849b3ad20bfca8d9f115e95c85b9863aa460750832db7d5c46428203dd->leave($__internal_c71ab5849b3ad20bfca8d9f115e95c85b9863aa460750832db7d5c46428203dd_prof);

        
        $__internal_e208bd24bdf586aa3a94ebf41d6caa17a7272f0d1e9130f11e3530f45fa7132f->leave($__internal_e208bd24bdf586aa3a94ebf41d6caa17a7272f0d1e9130f11e3530f45fa7132f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
