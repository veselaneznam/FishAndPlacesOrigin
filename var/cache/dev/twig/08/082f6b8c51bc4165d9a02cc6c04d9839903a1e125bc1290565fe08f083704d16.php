<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_9a022a5a42ef88c58a85e93a26f1f587abad7f60ba4d722dc158f1466597d134 extends Twig_Template
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
        $__internal_4cec12f9612d052364f2707abc2c50079eb0f2de983ff0ad478b7c04e399faba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cec12f9612d052364f2707abc2c50079eb0f2de983ff0ad478b7c04e399faba->enter($__internal_4cec12f9612d052364f2707abc2c50079eb0f2de983ff0ad478b7c04e399faba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_a7ca7f54c3fdbce1515450b7fc52e0b57bd7ceab2295d5b20ca0dc1b76c01895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7ca7f54c3fdbce1515450b7fc52e0b57bd7ceab2295d5b20ca0dc1b76c01895->enter($__internal_a7ca7f54c3fdbce1515450b7fc52e0b57bd7ceab2295d5b20ca0dc1b76c01895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4cec12f9612d052364f2707abc2c50079eb0f2de983ff0ad478b7c04e399faba->leave($__internal_4cec12f9612d052364f2707abc2c50079eb0f2de983ff0ad478b7c04e399faba_prof);

        
        $__internal_a7ca7f54c3fdbce1515450b7fc52e0b57bd7ceab2295d5b20ca0dc1b76c01895->leave($__internal_a7ca7f54c3fdbce1515450b7fc52e0b57bd7ceab2295d5b20ca0dc1b76c01895_prof);

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
", "@Twig/Exception/exception.css.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
