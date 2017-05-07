<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_453c1c06750722dbf46088ecbf7364e531a316a62c3ea98d7c29ef7b0489938e extends Twig_Template
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
        $__internal_8823ae39933119f916661287121b7e07749402406e8d8453d5eb85fba43a67e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8823ae39933119f916661287121b7e07749402406e8d8453d5eb85fba43a67e1->enter($__internal_8823ae39933119f916661287121b7e07749402406e8d8453d5eb85fba43a67e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_3c8a86b9bbe230ed137d5766ae5c379d3713455b190d7a08dc6d2e4134c8d233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c8a86b9bbe230ed137d5766ae5c379d3713455b190d7a08dc6d2e4134c8d233->enter($__internal_3c8a86b9bbe230ed137d5766ae5c379d3713455b190d7a08dc6d2e4134c8d233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_8823ae39933119f916661287121b7e07749402406e8d8453d5eb85fba43a67e1->leave($__internal_8823ae39933119f916661287121b7e07749402406e8d8453d5eb85fba43a67e1_prof);

        
        $__internal_3c8a86b9bbe230ed137d5766ae5c379d3713455b190d7a08dc6d2e4134c8d233->leave($__internal_3c8a86b9bbe230ed137d5766ae5c379d3713455b190d7a08dc6d2e4134c8d233_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
