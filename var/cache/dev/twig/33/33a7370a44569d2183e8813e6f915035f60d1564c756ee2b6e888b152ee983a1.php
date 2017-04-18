<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_027602830842674326db7f8850d692d5129112432751b59ef7b4e7fa33b59732 extends Twig_Template
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
        $__internal_e85231d3d8b77b76f64362a014c89474d0923e89d85b9d7ad48b140a5e1298a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e85231d3d8b77b76f64362a014c89474d0923e89d85b9d7ad48b140a5e1298a0->enter($__internal_e85231d3d8b77b76f64362a014c89474d0923e89d85b9d7ad48b140a5e1298a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_61adb85b7042d7189e085e3018f2378032397851569aa332eadd0895d938d423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61adb85b7042d7189e085e3018f2378032397851569aa332eadd0895d938d423->enter($__internal_61adb85b7042d7189e085e3018f2378032397851569aa332eadd0895d938d423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e85231d3d8b77b76f64362a014c89474d0923e89d85b9d7ad48b140a5e1298a0->leave($__internal_e85231d3d8b77b76f64362a014c89474d0923e89d85b9d7ad48b140a5e1298a0_prof);

        
        $__internal_61adb85b7042d7189e085e3018f2378032397851569aa332eadd0895d938d423->leave($__internal_61adb85b7042d7189e085e3018f2378032397851569aa332eadd0895d938d423_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
