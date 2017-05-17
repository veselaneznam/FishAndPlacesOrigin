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
        $__internal_13a26d466699d430a102f94085e5ad2b6dc4b21d7042beadf5f2bd00694f9d61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a26d466699d430a102f94085e5ad2b6dc4b21d7042beadf5f2bd00694f9d61->enter($__internal_13a26d466699d430a102f94085e5ad2b6dc4b21d7042beadf5f2bd00694f9d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_227f497409871d492dfc0ee1f24c259775bba62f75c5117874c626daa18f2aa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227f497409871d492dfc0ee1f24c259775bba62f75c5117874c626daa18f2aa7->enter($__internal_227f497409871d492dfc0ee1f24c259775bba62f75c5117874c626daa18f2aa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_13a26d466699d430a102f94085e5ad2b6dc4b21d7042beadf5f2bd00694f9d61->leave($__internal_13a26d466699d430a102f94085e5ad2b6dc4b21d7042beadf5f2bd00694f9d61_prof);

        
        $__internal_227f497409871d492dfc0ee1f24c259775bba62f75c5117874c626daa18f2aa7->leave($__internal_227f497409871d492dfc0ee1f24c259775bba62f75c5117874c626daa18f2aa7_prof);

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
