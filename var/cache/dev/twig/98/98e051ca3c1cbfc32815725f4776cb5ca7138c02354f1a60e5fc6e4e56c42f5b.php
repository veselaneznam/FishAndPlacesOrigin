<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_02233614db4ea1aa0a30ad5b71b726698aca405e312777de7ae9f38d23ad46ee extends Twig_Template
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
        $__internal_79175e992a44810c9e8826c9dff79cd2182b1487377a1680c01c0f8911af7813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79175e992a44810c9e8826c9dff79cd2182b1487377a1680c01c0f8911af7813->enter($__internal_79175e992a44810c9e8826c9dff79cd2182b1487377a1680c01c0f8911af7813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_e755b05abb59b0cb4860c4c96a6fe30802c95527db141f178b72db0022f43623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e755b05abb59b0cb4860c4c96a6fe30802c95527db141f178b72db0022f43623->enter($__internal_e755b05abb59b0cb4860c4c96a6fe30802c95527db141f178b72db0022f43623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_79175e992a44810c9e8826c9dff79cd2182b1487377a1680c01c0f8911af7813->leave($__internal_79175e992a44810c9e8826c9dff79cd2182b1487377a1680c01c0f8911af7813_prof);

        
        $__internal_e755b05abb59b0cb4860c4c96a6fe30802c95527db141f178b72db0022f43623->leave($__internal_e755b05abb59b0cb4860c4c96a6fe30802c95527db141f178b72db0022f43623_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
