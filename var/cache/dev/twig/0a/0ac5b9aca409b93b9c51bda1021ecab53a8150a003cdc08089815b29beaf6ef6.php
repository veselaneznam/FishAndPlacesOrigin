<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_abe29cac46a6d7d4af5b326e33cedea8150b8453c1f0ef57f874f3f8a1fa5998 extends Twig_Template
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
        $__internal_9911ffadef1fa7e5d7cc4ca762746e6cb8b06acc9f41168836a7c3dd80655730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9911ffadef1fa7e5d7cc4ca762746e6cb8b06acc9f41168836a7c3dd80655730->enter($__internal_9911ffadef1fa7e5d7cc4ca762746e6cb8b06acc9f41168836a7c3dd80655730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_7a7710d3c952236a808ba193ef52c1b00eaf65f126eb66a3ae69c1a7ea725a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7710d3c952236a808ba193ef52c1b00eaf65f126eb66a3ae69c1a7ea725a6b->enter($__internal_7a7710d3c952236a808ba193ef52c1b00eaf65f126eb66a3ae69c1a7ea725a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_9911ffadef1fa7e5d7cc4ca762746e6cb8b06acc9f41168836a7c3dd80655730->leave($__internal_9911ffadef1fa7e5d7cc4ca762746e6cb8b06acc9f41168836a7c3dd80655730_prof);

        
        $__internal_7a7710d3c952236a808ba193ef52c1b00eaf65f126eb66a3ae69c1a7ea725a6b->leave($__internal_7a7710d3c952236a808ba193ef52c1b00eaf65f126eb66a3ae69c1a7ea725a6b_prof);

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
", "@Framework/Form/form_widget_simple.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
