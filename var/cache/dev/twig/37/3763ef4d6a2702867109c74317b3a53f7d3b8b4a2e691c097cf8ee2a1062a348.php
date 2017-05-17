<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_e40801c2a5e29c188a7d9ce454e12ddd421b3a37693820cf6aa89c4ece696010 extends Twig_Template
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
        $__internal_6dbd6466804158bc979551295b88034bf3fc956a868e5bb3924365ed124e2952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dbd6466804158bc979551295b88034bf3fc956a868e5bb3924365ed124e2952->enter($__internal_6dbd6466804158bc979551295b88034bf3fc956a868e5bb3924365ed124e2952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_1d94eb7572e34fc93d3358573c56b255e3a8caf4945423d15dd7eba2e63b0996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d94eb7572e34fc93d3358573c56b255e3a8caf4945423d15dd7eba2e63b0996->enter($__internal_1d94eb7572e34fc93d3358573c56b255e3a8caf4945423d15dd7eba2e63b0996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6dbd6466804158bc979551295b88034bf3fc956a868e5bb3924365ed124e2952->leave($__internal_6dbd6466804158bc979551295b88034bf3fc956a868e5bb3924365ed124e2952_prof);

        
        $__internal_1d94eb7572e34fc93d3358573c56b255e3a8caf4945423d15dd7eba2e63b0996->leave($__internal_1d94eb7572e34fc93d3358573c56b255e3a8caf4945423d15dd7eba2e63b0996_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
