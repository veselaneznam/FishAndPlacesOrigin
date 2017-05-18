<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_101dd164aca4075d2c833697c04e3b15d2240f5013ddc7b881809144b4e85672 extends Twig_Template
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
        $__internal_418786df2c705701b8f86f7ddf8f4dc87279308618ffd7c72a5065d393c8c072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_418786df2c705701b8f86f7ddf8f4dc87279308618ffd7c72a5065d393c8c072->enter($__internal_418786df2c705701b8f86f7ddf8f4dc87279308618ffd7c72a5065d393c8c072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_6783fe02372393624ff72733f62da148239d1869209dfddf089764fd4e8a74a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6783fe02372393624ff72733f62da148239d1869209dfddf089764fd4e8a74a5->enter($__internal_6783fe02372393624ff72733f62da148239d1869209dfddf089764fd4e8a74a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_418786df2c705701b8f86f7ddf8f4dc87279308618ffd7c72a5065d393c8c072->leave($__internal_418786df2c705701b8f86f7ddf8f4dc87279308618ffd7c72a5065d393c8c072_prof);

        
        $__internal_6783fe02372393624ff72733f62da148239d1869209dfddf089764fd4e8a74a5->leave($__internal_6783fe02372393624ff72733f62da148239d1869209dfddf089764fd4e8a74a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
