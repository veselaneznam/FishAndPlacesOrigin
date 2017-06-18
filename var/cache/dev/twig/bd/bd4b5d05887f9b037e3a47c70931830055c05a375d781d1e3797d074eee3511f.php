<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_f6fa6817f86ec7ea80cbd5358cb0c96b309e50a1791f66e0602b3dd77a3e60cb extends Twig_Template
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
        $__internal_9ddfc68f46fd4585bdbff435a9baae8990c51aee98fdcda7fc1d202ea9f9a98a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ddfc68f46fd4585bdbff435a9baae8990c51aee98fdcda7fc1d202ea9f9a98a->enter($__internal_9ddfc68f46fd4585bdbff435a9baae8990c51aee98fdcda7fc1d202ea9f9a98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_b7233ede5c246173257d8831777789bc2856b5f74ae54e22209b82c8a1bafba3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7233ede5c246173257d8831777789bc2856b5f74ae54e22209b82c8a1bafba3->enter($__internal_b7233ede5c246173257d8831777789bc2856b5f74ae54e22209b82c8a1bafba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_9ddfc68f46fd4585bdbff435a9baae8990c51aee98fdcda7fc1d202ea9f9a98a->leave($__internal_9ddfc68f46fd4585bdbff435a9baae8990c51aee98fdcda7fc1d202ea9f9a98a_prof);

        
        $__internal_b7233ede5c246173257d8831777789bc2856b5f74ae54e22209b82c8a1bafba3->leave($__internal_b7233ede5c246173257d8831777789bc2856b5f74ae54e22209b82c8a1bafba3_prof);

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
", "@Twig/Exception/exception.rdf.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
