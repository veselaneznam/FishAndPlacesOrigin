<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_221d8b791d23efe53a8b4a1ca3ccf565d07d72cee18fc19da0b9d1ea2a9a5a9d extends Twig_Template
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
        $__internal_3474f0f5d1a6c52f112f2b4ec624ab5b0cef06b7c34f4851e459be07efafea39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3474f0f5d1a6c52f112f2b4ec624ab5b0cef06b7c34f4851e459be07efafea39->enter($__internal_3474f0f5d1a6c52f112f2b4ec624ab5b0cef06b7c34f4851e459be07efafea39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b1d18739f65cf1a173046fad3a29c450c9f8aeeb73ffbda974b7cab5d32b0219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d18739f65cf1a173046fad3a29c450c9f8aeeb73ffbda974b7cab5d32b0219->enter($__internal_b1d18739f65cf1a173046fad3a29c450c9f8aeeb73ffbda974b7cab5d32b0219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3474f0f5d1a6c52f112f2b4ec624ab5b0cef06b7c34f4851e459be07efafea39->leave($__internal_3474f0f5d1a6c52f112f2b4ec624ab5b0cef06b7c34f4851e459be07efafea39_prof);

        
        $__internal_b1d18739f65cf1a173046fad3a29c450c9f8aeeb73ffbda974b7cab5d32b0219->leave($__internal_b1d18739f65cf1a173046fad3a29c450c9f8aeeb73ffbda974b7cab5d32b0219_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
