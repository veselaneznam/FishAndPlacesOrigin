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
        $__internal_13ce43f6e4c897f94920b98e7b71f61b4e2cd9282110ddd59ce30c535d0ac76a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ce43f6e4c897f94920b98e7b71f61b4e2cd9282110ddd59ce30c535d0ac76a->enter($__internal_13ce43f6e4c897f94920b98e7b71f61b4e2cd9282110ddd59ce30c535d0ac76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_eb1acb83f8edfacb487295e9085a2f6dede592fde0e181fdb3b775b3c6250429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1acb83f8edfacb487295e9085a2f6dede592fde0e181fdb3b775b3c6250429->enter($__internal_eb1acb83f8edfacb487295e9085a2f6dede592fde0e181fdb3b775b3c6250429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_13ce43f6e4c897f94920b98e7b71f61b4e2cd9282110ddd59ce30c535d0ac76a->leave($__internal_13ce43f6e4c897f94920b98e7b71f61b4e2cd9282110ddd59ce30c535d0ac76a_prof);

        
        $__internal_eb1acb83f8edfacb487295e9085a2f6dede592fde0e181fdb3b775b3c6250429->leave($__internal_eb1acb83f8edfacb487295e9085a2f6dede592fde0e181fdb3b775b3c6250429_prof);

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
