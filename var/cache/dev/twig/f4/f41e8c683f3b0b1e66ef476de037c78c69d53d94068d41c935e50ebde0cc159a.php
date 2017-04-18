<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_452d327d8f851a8954f8f94c5386765320bf98e71986048c93715de742645fbb extends Twig_Template
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
        $__internal_c6d368120d97ca6cb223bada6051806b4d3e4dbbf43cb680cd485a3b3f8a7235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6d368120d97ca6cb223bada6051806b4d3e4dbbf43cb680cd485a3b3f8a7235->enter($__internal_c6d368120d97ca6cb223bada6051806b4d3e4dbbf43cb680cd485a3b3f8a7235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_eab547c1a0b6ab91545a7ceb77849229f0fe3b2ef29341b3b343facae0fd0da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eab547c1a0b6ab91545a7ceb77849229f0fe3b2ef29341b3b343facae0fd0da6->enter($__internal_eab547c1a0b6ab91545a7ceb77849229f0fe3b2ef29341b3b343facae0fd0da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
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
        
        $__internal_c6d368120d97ca6cb223bada6051806b4d3e4dbbf43cb680cd485a3b3f8a7235->leave($__internal_c6d368120d97ca6cb223bada6051806b4d3e4dbbf43cb680cd485a3b3f8a7235_prof);

        
        $__internal_eab547c1a0b6ab91545a7ceb77849229f0fe3b2ef29341b3b343facae0fd0da6->leave($__internal_eab547c1a0b6ab91545a7ceb77849229f0fe3b2ef29341b3b343facae0fd0da6_prof);

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
", "@Twig/Exception/traces.xml.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
