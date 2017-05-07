<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_8af2250e4c39ad464967e0c5f07d191ad2a8b8c1c31958cf29241c2f1e99b059 extends Twig_Template
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
        $__internal_5de12a955ae9d878c5da7e428cc851a6609375017c50bf25fe858e57b9491af4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5de12a955ae9d878c5da7e428cc851a6609375017c50bf25fe858e57b9491af4->enter($__internal_5de12a955ae9d878c5da7e428cc851a6609375017c50bf25fe858e57b9491af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_4a0d19bbf948a6b985b1650c8026af9b863c62a040999666edcd36bf8abe15c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a0d19bbf948a6b985b1650c8026af9b863c62a040999666edcd36bf8abe15c7->enter($__internal_4a0d19bbf948a6b985b1650c8026af9b863c62a040999666edcd36bf8abe15c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_5de12a955ae9d878c5da7e428cc851a6609375017c50bf25fe858e57b9491af4->leave($__internal_5de12a955ae9d878c5da7e428cc851a6609375017c50bf25fe858e57b9491af4_prof);

        
        $__internal_4a0d19bbf948a6b985b1650c8026af9b863c62a040999666edcd36bf8abe15c7->leave($__internal_4a0d19bbf948a6b985b1650c8026af9b863c62a040999666edcd36bf8abe15c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
