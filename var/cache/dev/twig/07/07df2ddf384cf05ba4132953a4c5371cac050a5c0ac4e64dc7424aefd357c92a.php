<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_1bb0bbd1d9055b53b8224e75cb9dd5f4c0233fd5737a870a5512dc03872e9265 extends Twig_Template
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
        $__internal_c711770bd2a452342e5212545e15f07097eed4148ea3b4d6e557d168353ea717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c711770bd2a452342e5212545e15f07097eed4148ea3b4d6e557d168353ea717->enter($__internal_c711770bd2a452342e5212545e15f07097eed4148ea3b4d6e557d168353ea717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_7803e9daad3de118eb9688465fa1c5dbb46d31ba135ad5a88040757fed516b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7803e9daad3de118eb9688465fa1c5dbb46d31ba135ad5a88040757fed516b66->enter($__internal_7803e9daad3de118eb9688465fa1c5dbb46d31ba135ad5a88040757fed516b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_c711770bd2a452342e5212545e15f07097eed4148ea3b4d6e557d168353ea717->leave($__internal_c711770bd2a452342e5212545e15f07097eed4148ea3b4d6e557d168353ea717_prof);

        
        $__internal_7803e9daad3de118eb9688465fa1c5dbb46d31ba135ad5a88040757fed516b66->leave($__internal_7803e9daad3de118eb9688465fa1c5dbb46d31ba135ad5a88040757fed516b66_prof);

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
