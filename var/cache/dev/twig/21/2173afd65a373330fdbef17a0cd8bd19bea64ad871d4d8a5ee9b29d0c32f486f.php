<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_53a82dd7789198708ae395e22020bb5262cfa9be57db90a7731f6bffe5459118 extends Twig_Template
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
        $__internal_f77442ae9e74bb429e6379084f8ae898268efc2f6d483fa3e9c4d756b8b32d6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77442ae9e74bb429e6379084f8ae898268efc2f6d483fa3e9c4d756b8b32d6f->enter($__internal_f77442ae9e74bb429e6379084f8ae898268efc2f6d483fa3e9c4d756b8b32d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_369a57fae127a8177ee12bf023b9c86b2d77382a74c6b23864d71a62ee8b6975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369a57fae127a8177ee12bf023b9c86b2d77382a74c6b23864d71a62ee8b6975->enter($__internal_369a57fae127a8177ee12bf023b9c86b2d77382a74c6b23864d71a62ee8b6975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f77442ae9e74bb429e6379084f8ae898268efc2f6d483fa3e9c4d756b8b32d6f->leave($__internal_f77442ae9e74bb429e6379084f8ae898268efc2f6d483fa3e9c4d756b8b32d6f_prof);

        
        $__internal_369a57fae127a8177ee12bf023b9c86b2d77382a74c6b23864d71a62ee8b6975->leave($__internal_369a57fae127a8177ee12bf023b9c86b2d77382a74c6b23864d71a62ee8b6975_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
