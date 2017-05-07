<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_1275c13fab7c3fde9c505ee42320f9f26bdafeeaef0d994a54eb89a7d70035e2 extends Twig_Template
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
        $__internal_f21ef448f0d54d8ad15e88f13068d976509d96f223d9c9d5ae660982e03997d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21ef448f0d54d8ad15e88f13068d976509d96f223d9c9d5ae660982e03997d6->enter($__internal_f21ef448f0d54d8ad15e88f13068d976509d96f223d9c9d5ae660982e03997d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_0cc1f7b4581d1ca0d781578bb191cef53226a63182b84b712fa49641c025867b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc1f7b4581d1ca0d781578bb191cef53226a63182b84b712fa49641c025867b->enter($__internal_0cc1f7b4581d1ca0d781578bb191cef53226a63182b84b712fa49641c025867b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f21ef448f0d54d8ad15e88f13068d976509d96f223d9c9d5ae660982e03997d6->leave($__internal_f21ef448f0d54d8ad15e88f13068d976509d96f223d9c9d5ae660982e03997d6_prof);

        
        $__internal_0cc1f7b4581d1ca0d781578bb191cef53226a63182b84b712fa49641c025867b->leave($__internal_0cc1f7b4581d1ca0d781578bb191cef53226a63182b84b712fa49641c025867b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
