<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_8f0e57b68e281161d1322f9e89f46ec98dd61179e22df1e5684b2046838696a4 extends Twig_Template
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
        $__internal_b2a0922ea2c2be1ed4fa4ae679f7aa188172d4b19a9b437a85b7083709bb80ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a0922ea2c2be1ed4fa4ae679f7aa188172d4b19a9b437a85b7083709bb80ea->enter($__internal_b2a0922ea2c2be1ed4fa4ae679f7aa188172d4b19a9b437a85b7083709bb80ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_725e3134340f5c7d1054760513927c04a64e38a63bca4524322a7666827378e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725e3134340f5c7d1054760513927c04a64e38a63bca4524322a7666827378e1->enter($__internal_725e3134340f5c7d1054760513927c04a64e38a63bca4524322a7666827378e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_b2a0922ea2c2be1ed4fa4ae679f7aa188172d4b19a9b437a85b7083709bb80ea->leave($__internal_b2a0922ea2c2be1ed4fa4ae679f7aa188172d4b19a9b437a85b7083709bb80ea_prof);

        
        $__internal_725e3134340f5c7d1054760513927c04a64e38a63bca4524322a7666827378e1->leave($__internal_725e3134340f5c7d1054760513927c04a64e38a63bca4524322a7666827378e1_prof);

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
