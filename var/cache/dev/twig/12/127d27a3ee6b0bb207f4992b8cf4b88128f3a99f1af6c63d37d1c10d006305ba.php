<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_a8298c4089b93d80e4c526f16a8d1d9d98c11757ba6b4ec6290726d48ac12b08 extends Twig_Template
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
        $__internal_2b5e86557b484c3655dc5a44927404f4055c3bd2098883a9b0ab07b247feeee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b5e86557b484c3655dc5a44927404f4055c3bd2098883a9b0ab07b247feeee9->enter($__internal_2b5e86557b484c3655dc5a44927404f4055c3bd2098883a9b0ab07b247feeee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d38fdce83162614fede3fa0353fd173a3a4d2da2a5d2c4d2c02c64b84101456c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38fdce83162614fede3fa0353fd173a3a4d2da2a5d2c4d2c02c64b84101456c->enter($__internal_d38fdce83162614fede3fa0353fd173a3a4d2da2a5d2c4d2c02c64b84101456c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2b5e86557b484c3655dc5a44927404f4055c3bd2098883a9b0ab07b247feeee9->leave($__internal_2b5e86557b484c3655dc5a44927404f4055c3bd2098883a9b0ab07b247feeee9_prof);

        
        $__internal_d38fdce83162614fede3fa0353fd173a3a4d2da2a5d2c4d2c02c64b84101456c->leave($__internal_d38fdce83162614fede3fa0353fd173a3a4d2da2a5d2c4d2c02c64b84101456c_prof);

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
", "@Framework/Form/form_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
