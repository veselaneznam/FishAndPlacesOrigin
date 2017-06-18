<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_b208fc350cdbc475c362863e0edda61807bc5d717ae988060309eae13b4bab26 extends Twig_Template
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
        $__internal_b5b6f9bfc0b9735e67a42daefedeb17f2dd975f6c9aa23c16e837f01559e2170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b6f9bfc0b9735e67a42daefedeb17f2dd975f6c9aa23c16e837f01559e2170->enter($__internal_b5b6f9bfc0b9735e67a42daefedeb17f2dd975f6c9aa23c16e837f01559e2170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_3879d937e409131c0cd0a090d1d8b86e34e3074e96b72d0b700a66dbb2d08777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3879d937e409131c0cd0a090d1d8b86e34e3074e96b72d0b700a66dbb2d08777->enter($__internal_3879d937e409131c0cd0a090d1d8b86e34e3074e96b72d0b700a66dbb2d08777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_b5b6f9bfc0b9735e67a42daefedeb17f2dd975f6c9aa23c16e837f01559e2170->leave($__internal_b5b6f9bfc0b9735e67a42daefedeb17f2dd975f6c9aa23c16e837f01559e2170_prof);

        
        $__internal_3879d937e409131c0cd0a090d1d8b86e34e3074e96b72d0b700a66dbb2d08777->leave($__internal_3879d937e409131c0cd0a090d1d8b86e34e3074e96b72d0b700a66dbb2d08777_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
