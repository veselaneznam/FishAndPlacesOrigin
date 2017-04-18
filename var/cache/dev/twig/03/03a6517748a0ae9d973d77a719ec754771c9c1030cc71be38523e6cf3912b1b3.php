<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d292a328bfd0b4d8112ade16c2885d9b309377787ca380f0fcdf6c2d9e02fe35 extends Twig_Template
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
        $__internal_8d06fccfe6514870d6df9897aabe850db2efaef574b7fb1c1fe87099acd55e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d06fccfe6514870d6df9897aabe850db2efaef574b7fb1c1fe87099acd55e15->enter($__internal_8d06fccfe6514870d6df9897aabe850db2efaef574b7fb1c1fe87099acd55e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_292abe02e83abdeb351f2a228d3fca8270d2f85458dbcb17206763d6b0a499eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292abe02e83abdeb351f2a228d3fca8270d2f85458dbcb17206763d6b0a499eb->enter($__internal_292abe02e83abdeb351f2a228d3fca8270d2f85458dbcb17206763d6b0a499eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8d06fccfe6514870d6df9897aabe850db2efaef574b7fb1c1fe87099acd55e15->leave($__internal_8d06fccfe6514870d6df9897aabe850db2efaef574b7fb1c1fe87099acd55e15_prof);

        
        $__internal_292abe02e83abdeb351f2a228d3fca8270d2f85458dbcb17206763d6b0a499eb->leave($__internal_292abe02e83abdeb351f2a228d3fca8270d2f85458dbcb17206763d6b0a499eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
