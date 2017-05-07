<?php

/* @IvoryCKEditor/Form/ckeditor_javascript.html.php */
class __TwigTemplate_ba743e819a8d674d4c6cb4a0b4233017383714caf3b1314d163180bc165f5274 extends Twig_Template
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
        $__internal_2985fb41d9461f121f6819924768b559a0d084f352b357b2e2420abfd2cbdf6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2985fb41d9461f121f6819924768b559a0d084f352b357b2e2420abfd2cbdf6d->enter($__internal_2985fb41d9461f121f6819924768b559a0d084f352b357b2e2420abfd2cbdf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        $__internal_7e1af5eeedd72edfb0414914aca43584dcc157332410d59442c2776ee5a82ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1af5eeedd72edfb0414914aca43584dcc157332410d59442c2776ee5a82ca2->enter($__internal_7e1af5eeedd72edfb0414914aca43584dcc157332410d59442c2776ee5a82ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_javascript.html.php"));

        // line 1
        echo "<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
";
        
        $__internal_2985fb41d9461f121f6819924768b559a0d084f352b357b2e2420abfd2cbdf6d->leave($__internal_2985fb41d9461f121f6819924768b559a0d084f352b357b2e2420abfd2cbdf6d_prof);

        
        $__internal_7e1af5eeedd72edfb0414914aca43584dcc157332410d59442c2776ee5a82ca2->leave($__internal_7e1af5eeedd72edfb0414914aca43584dcc157332410d59442c2776ee5a82ca2_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_javascript.html.php";
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
        return new Twig_Source("<?php if (\$enable && \$async) : ?>
    <?php include __DIR__.'/_ckeditor_javascript.html.php' ?>
<?php endif; ?>
", "@IvoryCKEditor/Form/ckeditor_javascript.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/egeloen/ckeditor-bundle/Resources/views/Form/ckeditor_javascript.html.php");
    }
}
