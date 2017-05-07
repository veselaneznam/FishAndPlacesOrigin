<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3c488bbc05d1d83c01fca372394270b22d15b7d342acebddda9e818867f71184 extends Twig_Template
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
        $__internal_cc70a70970270e718b6b553b54ed942de8041b170f74f55eb1a6616efee55333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc70a70970270e718b6b553b54ed942de8041b170f74f55eb1a6616efee55333->enter($__internal_cc70a70970270e718b6b553b54ed942de8041b170f74f55eb1a6616efee55333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_a74f8157986ca4a66cd65c5ae2adf4989be278afc63d74247c7e56ebf421432e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74f8157986ca4a66cd65c5ae2adf4989be278afc63d74247c7e56ebf421432e->enter($__internal_a74f8157986ca4a66cd65c5ae2adf4989be278afc63d74247c7e56ebf421432e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_cc70a70970270e718b6b553b54ed942de8041b170f74f55eb1a6616efee55333->leave($__internal_cc70a70970270e718b6b553b54ed942de8041b170f74f55eb1a6616efee55333_prof);

        
        $__internal_a74f8157986ca4a66cd65c5ae2adf4989be278afc63d74247c7e56ebf421432e->leave($__internal_a74f8157986ca4a66cd65c5ae2adf4989be278afc63d74247c7e56ebf421432e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
