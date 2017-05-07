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
        $__internal_3250eb488456272d79fb7ab26b9e7d8b9e9a20d502e82a4aa8e7f80d7b651f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3250eb488456272d79fb7ab26b9e7d8b9e9a20d502e82a4aa8e7f80d7b651f75->enter($__internal_3250eb488456272d79fb7ab26b9e7d8b9e9a20d502e82a4aa8e7f80d7b651f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_0b9cafe0bb1e7980367a3837924613cb80dd59be5b8da7ea3cc45fcf2597763d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9cafe0bb1e7980367a3837924613cb80dd59be5b8da7ea3cc45fcf2597763d->enter($__internal_0b9cafe0bb1e7980367a3837924613cb80dd59be5b8da7ea3cc45fcf2597763d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3250eb488456272d79fb7ab26b9e7d8b9e9a20d502e82a4aa8e7f80d7b651f75->leave($__internal_3250eb488456272d79fb7ab26b9e7d8b9e9a20d502e82a4aa8e7f80d7b651f75_prof);

        
        $__internal_0b9cafe0bb1e7980367a3837924613cb80dd59be5b8da7ea3cc45fcf2597763d->leave($__internal_0b9cafe0bb1e7980367a3837924613cb80dd59be5b8da7ea3cc45fcf2597763d_prof);

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
