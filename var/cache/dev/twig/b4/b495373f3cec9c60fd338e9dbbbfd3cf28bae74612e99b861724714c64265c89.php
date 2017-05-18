<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d64116a7c1c46b51a0a226147889b27de2fe587545c6e9e37d44559d0467a975 extends Twig_Template
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
        $__internal_223e9b7ee4e237b58e68c11528ad1928c9900b64e96c3015245abd4a6a603566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_223e9b7ee4e237b58e68c11528ad1928c9900b64e96c3015245abd4a6a603566->enter($__internal_223e9b7ee4e237b58e68c11528ad1928c9900b64e96c3015245abd4a6a603566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_057a5847a508e2706d46b6fcbdca645ffb5f10dd3246ff55ce0339d5a7ff43c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057a5847a508e2706d46b6fcbdca645ffb5f10dd3246ff55ce0339d5a7ff43c5->enter($__internal_057a5847a508e2706d46b6fcbdca645ffb5f10dd3246ff55ce0339d5a7ff43c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_223e9b7ee4e237b58e68c11528ad1928c9900b64e96c3015245abd4a6a603566->leave($__internal_223e9b7ee4e237b58e68c11528ad1928c9900b64e96c3015245abd4a6a603566_prof);

        
        $__internal_057a5847a508e2706d46b6fcbdca645ffb5f10dd3246ff55ce0339d5a7ff43c5->leave($__internal_057a5847a508e2706d46b6fcbdca645ffb5f10dd3246ff55ce0339d5a7ff43c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
