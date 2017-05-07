<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_f87d6bcbad03a53b0a2aeb860081ea6c171adfa98e8adc335536389fbe1f9a2e extends Twig_Template
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
        $__internal_24be99f6b554c5bd0af3ac1b5a2cc797d7d8c26a2efd7d8b15f53294a02273c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24be99f6b554c5bd0af3ac1b5a2cc797d7d8c26a2efd7d8b15f53294a02273c4->enter($__internal_24be99f6b554c5bd0af3ac1b5a2cc797d7d8c26a2efd7d8b15f53294a02273c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_e5c8c84c04ee361f9beb449b37e1111fd8a7fa61bea3458b38305fd01421c950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5c8c84c04ee361f9beb449b37e1111fd8a7fa61bea3458b38305fd01421c950->enter($__internal_e5c8c84c04ee361f9beb449b37e1111fd8a7fa61bea3458b38305fd01421c950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_24be99f6b554c5bd0af3ac1b5a2cc797d7d8c26a2efd7d8b15f53294a02273c4->leave($__internal_24be99f6b554c5bd0af3ac1b5a2cc797d7d8c26a2efd7d8b15f53294a02273c4_prof);

        
        $__internal_e5c8c84c04ee361f9beb449b37e1111fd8a7fa61bea3458b38305fd01421c950->leave($__internal_e5c8c84c04ee361f9beb449b37e1111fd8a7fa61bea3458b38305fd01421c950_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
