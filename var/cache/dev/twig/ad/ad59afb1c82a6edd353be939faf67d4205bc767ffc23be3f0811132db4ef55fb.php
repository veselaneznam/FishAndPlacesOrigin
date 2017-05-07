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
        $__internal_981fd86a29e9a87af9a791194c37602636ffdea49666d5f18525db94cab18e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_981fd86a29e9a87af9a791194c37602636ffdea49666d5f18525db94cab18e5f->enter($__internal_981fd86a29e9a87af9a791194c37602636ffdea49666d5f18525db94cab18e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_d150330290ccc98f510026f26e0688dedf9ba5ecc3fcfb154ea5a47d49153518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d150330290ccc98f510026f26e0688dedf9ba5ecc3fcfb154ea5a47d49153518->enter($__internal_d150330290ccc98f510026f26e0688dedf9ba5ecc3fcfb154ea5a47d49153518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_981fd86a29e9a87af9a791194c37602636ffdea49666d5f18525db94cab18e5f->leave($__internal_981fd86a29e9a87af9a791194c37602636ffdea49666d5f18525db94cab18e5f_prof);

        
        $__internal_d150330290ccc98f510026f26e0688dedf9ba5ecc3fcfb154ea5a47d49153518->leave($__internal_d150330290ccc98f510026f26e0688dedf9ba5ecc3fcfb154ea5a47d49153518_prof);

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
