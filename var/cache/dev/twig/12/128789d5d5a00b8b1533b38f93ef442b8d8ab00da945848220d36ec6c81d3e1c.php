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
        $__internal_6eb5cfba099998608ceaf4e5b50b19405b8afda10019e6a68c1b88ea2a159ca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb5cfba099998608ceaf4e5b50b19405b8afda10019e6a68c1b88ea2a159ca6->enter($__internal_6eb5cfba099998608ceaf4e5b50b19405b8afda10019e6a68c1b88ea2a159ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_288e787fdba0d950f9ff651639a20701a3fcdf51815c7d14048bdf2606534be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_288e787fdba0d950f9ff651639a20701a3fcdf51815c7d14048bdf2606534be9->enter($__internal_288e787fdba0d950f9ff651639a20701a3fcdf51815c7d14048bdf2606534be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6eb5cfba099998608ceaf4e5b50b19405b8afda10019e6a68c1b88ea2a159ca6->leave($__internal_6eb5cfba099998608ceaf4e5b50b19405b8afda10019e6a68c1b88ea2a159ca6_prof);

        
        $__internal_288e787fdba0d950f9ff651639a20701a3fcdf51815c7d14048bdf2606534be9->leave($__internal_288e787fdba0d950f9ff651639a20701a3fcdf51815c7d14048bdf2606534be9_prof);

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
