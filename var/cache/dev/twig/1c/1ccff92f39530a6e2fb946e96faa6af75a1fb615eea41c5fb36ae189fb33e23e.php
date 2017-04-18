<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_bec8bb01abf477c82ac8dd44166eff169140ed648e2b5804fdbf524606f8f983 extends Twig_Template
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
        $__internal_a012a07886a17d90c4e17884df6385a2ea9771e0adabdfeb8b3b0318ae984ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a012a07886a17d90c4e17884df6385a2ea9771e0adabdfeb8b3b0318ae984ea6->enter($__internal_a012a07886a17d90c4e17884df6385a2ea9771e0adabdfeb8b3b0318ae984ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_14f4c8d45fe8ebc7d7d563db11d6852eb85c972da4f373c76e0a52cdd3edd44a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f4c8d45fe8ebc7d7d563db11d6852eb85c972da4f373c76e0a52cdd3edd44a->enter($__internal_14f4c8d45fe8ebc7d7d563db11d6852eb85c972da4f373c76e0a52cdd3edd44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_a012a07886a17d90c4e17884df6385a2ea9771e0adabdfeb8b3b0318ae984ea6->leave($__internal_a012a07886a17d90c4e17884df6385a2ea9771e0adabdfeb8b3b0318ae984ea6_prof);

        
        $__internal_14f4c8d45fe8ebc7d7d563db11d6852eb85c972da4f373c76e0a52cdd3edd44a->leave($__internal_14f4c8d45fe8ebc7d7d563db11d6852eb85c972da4f373c76e0a52cdd3edd44a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
