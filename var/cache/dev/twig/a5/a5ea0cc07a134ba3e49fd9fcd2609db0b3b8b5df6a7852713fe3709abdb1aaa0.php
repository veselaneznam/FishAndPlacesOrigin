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
        $__internal_10aa101b2e6ed99f0e25d1d6624b61c580898f62b094b48c756d153bcd442a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10aa101b2e6ed99f0e25d1d6624b61c580898f62b094b48c756d153bcd442a70->enter($__internal_10aa101b2e6ed99f0e25d1d6624b61c580898f62b094b48c756d153bcd442a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_0b661605d934d19544b4987fff31fa617dfc13b6bb3b8ac652b97c086bfdf490 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b661605d934d19544b4987fff31fa617dfc13b6bb3b8ac652b97c086bfdf490->enter($__internal_0b661605d934d19544b4987fff31fa617dfc13b6bb3b8ac652b97c086bfdf490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_10aa101b2e6ed99f0e25d1d6624b61c580898f62b094b48c756d153bcd442a70->leave($__internal_10aa101b2e6ed99f0e25d1d6624b61c580898f62b094b48c756d153bcd442a70_prof);

        
        $__internal_0b661605d934d19544b4987fff31fa617dfc13b6bb3b8ac652b97c086bfdf490->leave($__internal_0b661605d934d19544b4987fff31fa617dfc13b6bb3b8ac652b97c086bfdf490_prof);

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
