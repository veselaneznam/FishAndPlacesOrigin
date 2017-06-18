<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_9c6b0c145c29f0865bc1d22d60aeb347c71fc3f2bd72ea6607d9c19c9cb332aa extends Twig_Template
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
        $__internal_9bec8fe45f51b57e86966b0494fb36d3682f0496d2f9210c11a70aea602c747e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bec8fe45f51b57e86966b0494fb36d3682f0496d2f9210c11a70aea602c747e->enter($__internal_9bec8fe45f51b57e86966b0494fb36d3682f0496d2f9210c11a70aea602c747e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_dcb7c0f1fa9de9582fc8b3af47625d48a93c8d3860e786fe7a46177f85406b44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb7c0f1fa9de9582fc8b3af47625d48a93c8d3860e786fe7a46177f85406b44->enter($__internal_dcb7c0f1fa9de9582fc8b3af47625d48a93c8d3860e786fe7a46177f85406b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_9bec8fe45f51b57e86966b0494fb36d3682f0496d2f9210c11a70aea602c747e->leave($__internal_9bec8fe45f51b57e86966b0494fb36d3682f0496d2f9210c11a70aea602c747e_prof);

        
        $__internal_dcb7c0f1fa9de9582fc8b3af47625d48a93c8d3860e786fe7a46177f85406b44->leave($__internal_dcb7c0f1fa9de9582fc8b3af47625d48a93c8d3860e786fe7a46177f85406b44_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
