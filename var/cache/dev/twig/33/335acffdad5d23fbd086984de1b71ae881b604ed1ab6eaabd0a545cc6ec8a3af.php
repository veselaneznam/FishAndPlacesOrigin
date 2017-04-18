<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_32892aa38b61f3ffee9ebff342c8f8a92fe25a307fea63748840349cf569734f extends Twig_Template
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
        $__internal_e6a2bf69ed5ae7aca79c61a2cd454b510456d08c709da90cf57adf0509fe647f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6a2bf69ed5ae7aca79c61a2cd454b510456d08c709da90cf57adf0509fe647f->enter($__internal_e6a2bf69ed5ae7aca79c61a2cd454b510456d08c709da90cf57adf0509fe647f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_fb1bcf49df8e0d4b5816d80789fc836d5fffa33bdb93a52b424da3a71d584c3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1bcf49df8e0d4b5816d80789fc836d5fffa33bdb93a52b424da3a71d584c3a->enter($__internal_fb1bcf49df8e0d4b5816d80789fc836d5fffa33bdb93a52b424da3a71d584c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e6a2bf69ed5ae7aca79c61a2cd454b510456d08c709da90cf57adf0509fe647f->leave($__internal_e6a2bf69ed5ae7aca79c61a2cd454b510456d08c709da90cf57adf0509fe647f_prof);

        
        $__internal_fb1bcf49df8e0d4b5816d80789fc836d5fffa33bdb93a52b424da3a71d584c3a->leave($__internal_fb1bcf49df8e0d4b5816d80789fc836d5fffa33bdb93a52b424da3a71d584c3a_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
