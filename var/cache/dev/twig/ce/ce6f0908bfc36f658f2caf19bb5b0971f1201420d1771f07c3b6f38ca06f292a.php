<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_fffdbbebfdacda49019b73cdd69859d051044c358153e6083097a95d64f875a5 extends Twig_Template
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
        $__internal_1b0dccd83f8374bd794a0dbb536ceea18de984fe5b5f5b99d057ea32c03e0d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0dccd83f8374bd794a0dbb536ceea18de984fe5b5f5b99d057ea32c03e0d0e->enter($__internal_1b0dccd83f8374bd794a0dbb536ceea18de984fe5b5f5b99d057ea32c03e0d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_f48a2832ffcf09a91739817a573e099cdcb2f2e23e4bfd5a2f5e7275c697695d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f48a2832ffcf09a91739817a573e099cdcb2f2e23e4bfd5a2f5e7275c697695d->enter($__internal_f48a2832ffcf09a91739817a573e099cdcb2f2e23e4bfd5a2f5e7275c697695d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1b0dccd83f8374bd794a0dbb536ceea18de984fe5b5f5b99d057ea32c03e0d0e->leave($__internal_1b0dccd83f8374bd794a0dbb536ceea18de984fe5b5f5b99d057ea32c03e0d0e_prof);

        
        $__internal_f48a2832ffcf09a91739817a573e099cdcb2f2e23e4bfd5a2f5e7275c697695d->leave($__internal_f48a2832ffcf09a91739817a573e099cdcb2f2e23e4bfd5a2f5e7275c697695d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
