<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_2ce148a2f76d08e07b8acfcdaf3c63e5086c29e33f48ec19f8c83d0dcd815c6b extends Twig_Template
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
        $__internal_367b04640c0069fd53ede566987d985c8e3de95315db9d659c77f8b7e84980b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367b04640c0069fd53ede566987d985c8e3de95315db9d659c77f8b7e84980b2->enter($__internal_367b04640c0069fd53ede566987d985c8e3de95315db9d659c77f8b7e84980b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_240fc502e2e17cd4a7b0f2b780febe1e5319cd0506bf7b387568c82a0f11e87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240fc502e2e17cd4a7b0f2b780febe1e5319cd0506bf7b387568c82a0f11e87e->enter($__internal_240fc502e2e17cd4a7b0f2b780febe1e5319cd0506bf7b387568c82a0f11e87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
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
        
        $__internal_367b04640c0069fd53ede566987d985c8e3de95315db9d659c77f8b7e84980b2->leave($__internal_367b04640c0069fd53ede566987d985c8e3de95315db9d659c77f8b7e84980b2_prof);

        
        $__internal_240fc502e2e17cd4a7b0f2b780febe1e5319cd0506bf7b387568c82a0f11e87e->leave($__internal_240fc502e2e17cd4a7b0f2b780febe1e5319cd0506bf7b387568c82a0f11e87e_prof);

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
", "@Twig/Exception/traces.txt.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
