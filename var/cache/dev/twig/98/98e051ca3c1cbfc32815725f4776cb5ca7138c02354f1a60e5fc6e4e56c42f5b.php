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
        $__internal_e08a210831ab0ccb421fd7c63a464e3f4eee07ac2e60ec91759716404729c7c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08a210831ab0ccb421fd7c63a464e3f4eee07ac2e60ec91759716404729c7c4->enter($__internal_e08a210831ab0ccb421fd7c63a464e3f4eee07ac2e60ec91759716404729c7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_c43618d8c19da17ea3b563e0e27b1f23530d97fb235d51d003a484d008dc5c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43618d8c19da17ea3b563e0e27b1f23530d97fb235d51d003a484d008dc5c32->enter($__internal_c43618d8c19da17ea3b563e0e27b1f23530d97fb235d51d003a484d008dc5c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e08a210831ab0ccb421fd7c63a464e3f4eee07ac2e60ec91759716404729c7c4->leave($__internal_e08a210831ab0ccb421fd7c63a464e3f4eee07ac2e60ec91759716404729c7c4_prof);

        
        $__internal_c43618d8c19da17ea3b563e0e27b1f23530d97fb235d51d003a484d008dc5c32->leave($__internal_c43618d8c19da17ea3b563e0e27b1f23530d97fb235d51d003a484d008dc5c32_prof);

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
