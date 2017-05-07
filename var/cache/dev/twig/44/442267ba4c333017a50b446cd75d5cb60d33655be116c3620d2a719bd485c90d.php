<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_52bc5ebd3164b3bd3b88cab5a50547c47f0786246c3dcc77913e719525eb7e8e extends Twig_Template
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
        $__internal_a636398e9be8fa08142e5936cba2e916d542373944b74d53a64b02ff110236d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a636398e9be8fa08142e5936cba2e916d542373944b74d53a64b02ff110236d1->enter($__internal_a636398e9be8fa08142e5936cba2e916d542373944b74d53a64b02ff110236d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_2f0b65d4a75d94bdecc5899a34940d9d1d5b9973a6c0001f90c3e9098ec5113a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0b65d4a75d94bdecc5899a34940d9d1d5b9973a6c0001f90c3e9098ec5113a->enter($__internal_2f0b65d4a75d94bdecc5899a34940d9d1d5b9973a6c0001f90c3e9098ec5113a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_a636398e9be8fa08142e5936cba2e916d542373944b74d53a64b02ff110236d1->leave($__internal_a636398e9be8fa08142e5936cba2e916d542373944b74d53a64b02ff110236d1_prof);

        
        $__internal_2f0b65d4a75d94bdecc5899a34940d9d1d5b9973a6c0001f90c3e9098ec5113a->leave($__internal_2f0b65d4a75d94bdecc5899a34940d9d1d5b9973a6c0001f90c3e9098ec5113a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
