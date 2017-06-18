<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_763f1f7b8b79352af46d78a079e5c4089888c7b11280896e275a79458ca8169c extends Twig_Template
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
        $__internal_2ac0b8e93af8b0b4714fa80678250cd31b429a1dc7f446f9a198a8e026a1d4ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac0b8e93af8b0b4714fa80678250cd31b429a1dc7f446f9a198a8e026a1d4ab->enter($__internal_2ac0b8e93af8b0b4714fa80678250cd31b429a1dc7f446f9a198a8e026a1d4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_9557079a5d71d523595312761061b3482085a57169c686660850a20387d53139 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9557079a5d71d523595312761061b3482085a57169c686660850a20387d53139->enter($__internal_9557079a5d71d523595312761061b3482085a57169c686660850a20387d53139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2ac0b8e93af8b0b4714fa80678250cd31b429a1dc7f446f9a198a8e026a1d4ab->leave($__internal_2ac0b8e93af8b0b4714fa80678250cd31b429a1dc7f446f9a198a8e026a1d4ab_prof);

        
        $__internal_9557079a5d71d523595312761061b3482085a57169c686660850a20387d53139->leave($__internal_9557079a5d71d523595312761061b3482085a57169c686660850a20387d53139_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
