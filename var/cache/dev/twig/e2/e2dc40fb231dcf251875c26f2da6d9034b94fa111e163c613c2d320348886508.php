<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_26579f2b53f45e8c74c7e561899207878fbb723712328afcc787ae0b9bf91e72 extends Twig_Template
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
        $__internal_e35ccd038c4b2bc382aa85f7e60c02989c339de5a43b5c9741b7654630b307f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35ccd038c4b2bc382aa85f7e60c02989c339de5a43b5c9741b7654630b307f0->enter($__internal_e35ccd038c4b2bc382aa85f7e60c02989c339de5a43b5c9741b7654630b307f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_66e2ab7be5b5f4fc840843a322cef689ed4c631f27d226d0d0674f267d84d507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e2ab7be5b5f4fc840843a322cef689ed4c631f27d226d0d0674f267d84d507->enter($__internal_66e2ab7be5b5f4fc840843a322cef689ed4c631f27d226d0d0674f267d84d507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e35ccd038c4b2bc382aa85f7e60c02989c339de5a43b5c9741b7654630b307f0->leave($__internal_e35ccd038c4b2bc382aa85f7e60c02989c339de5a43b5c9741b7654630b307f0_prof);

        
        $__internal_66e2ab7be5b5f4fc840843a322cef689ed4c631f27d226d0d0674f267d84d507->leave($__internal_66e2ab7be5b5f4fc840843a322cef689ed4c631f27d226d0d0674f267d84d507_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
