<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_6582763ad11f77d1377cfede087e6d6bef5ca43febb14db49b8910609c1938bc extends Twig_Template
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
        $__internal_dd02593629b56afc2bf296e4885752e412a0bc876a6e1fdaf8a6b24815779bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd02593629b56afc2bf296e4885752e412a0bc876a6e1fdaf8a6b24815779bd9->enter($__internal_dd02593629b56afc2bf296e4885752e412a0bc876a6e1fdaf8a6b24815779bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_7322699dd2e5eac4fd4b57ac39d6a0264988c0ac3307a0b7e981f44a16fd92ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7322699dd2e5eac4fd4b57ac39d6a0264988c0ac3307a0b7e981f44a16fd92ba->enter($__internal_7322699dd2e5eac4fd4b57ac39d6a0264988c0ac3307a0b7e981f44a16fd92ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_dd02593629b56afc2bf296e4885752e412a0bc876a6e1fdaf8a6b24815779bd9->leave($__internal_dd02593629b56afc2bf296e4885752e412a0bc876a6e1fdaf8a6b24815779bd9_prof);

        
        $__internal_7322699dd2e5eac4fd4b57ac39d6a0264988c0ac3307a0b7e981f44a16fd92ba->leave($__internal_7322699dd2e5eac4fd4b57ac39d6a0264988c0ac3307a0b7e981f44a16fd92ba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
