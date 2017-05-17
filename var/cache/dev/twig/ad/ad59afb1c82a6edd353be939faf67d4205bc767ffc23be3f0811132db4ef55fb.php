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
        $__internal_9e61d14bc4717914378f4d7ed3c36c7125828fe7f37d9201396cb530bd0fad7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e61d14bc4717914378f4d7ed3c36c7125828fe7f37d9201396cb530bd0fad7c->enter($__internal_9e61d14bc4717914378f4d7ed3c36c7125828fe7f37d9201396cb530bd0fad7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_50c95b9ab92298efea2c5fb0d725bfa254376fb73390f5a60ac2762831b3a83a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c95b9ab92298efea2c5fb0d725bfa254376fb73390f5a60ac2762831b3a83a->enter($__internal_50c95b9ab92298efea2c5fb0d725bfa254376fb73390f5a60ac2762831b3a83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9e61d14bc4717914378f4d7ed3c36c7125828fe7f37d9201396cb530bd0fad7c->leave($__internal_9e61d14bc4717914378f4d7ed3c36c7125828fe7f37d9201396cb530bd0fad7c_prof);

        
        $__internal_50c95b9ab92298efea2c5fb0d725bfa254376fb73390f5a60ac2762831b3a83a->leave($__internal_50c95b9ab92298efea2c5fb0d725bfa254376fb73390f5a60ac2762831b3a83a_prof);

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
