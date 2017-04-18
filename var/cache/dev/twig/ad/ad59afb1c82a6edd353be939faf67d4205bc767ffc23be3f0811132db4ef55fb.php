<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_6d1ff9c155277378f88ea33816d30c58427321f280edff160801d165d4b7860e extends Twig_Template
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
        $__internal_089ba16f4314ecde2c5c5526fb05d98a70d672f912dd56706016e9777c246d0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089ba16f4314ecde2c5c5526fb05d98a70d672f912dd56706016e9777c246d0f->enter($__internal_089ba16f4314ecde2c5c5526fb05d98a70d672f912dd56706016e9777c246d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_fad8357937846c11980f88d2118210e56d99685b9e9d8691d22feca006711565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad8357937846c11980f88d2118210e56d99685b9e9d8691d22feca006711565->enter($__internal_fad8357937846c11980f88d2118210e56d99685b9e9d8691d22feca006711565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_089ba16f4314ecde2c5c5526fb05d98a70d672f912dd56706016e9777c246d0f->leave($__internal_089ba16f4314ecde2c5c5526fb05d98a70d672f912dd56706016e9777c246d0f_prof);

        
        $__internal_fad8357937846c11980f88d2118210e56d99685b9e9d8691d22feca006711565->leave($__internal_fad8357937846c11980f88d2118210e56d99685b9e9d8691d22feca006711565_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
