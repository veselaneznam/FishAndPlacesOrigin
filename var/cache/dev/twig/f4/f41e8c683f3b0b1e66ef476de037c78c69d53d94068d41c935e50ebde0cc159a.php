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
        $__internal_af688ea5935c4b53b99e28c3c586f18799be6c9243f3d361c502dd19f2aae682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af688ea5935c4b53b99e28c3c586f18799be6c9243f3d361c502dd19f2aae682->enter($__internal_af688ea5935c4b53b99e28c3c586f18799be6c9243f3d361c502dd19f2aae682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_97f2da8254aefd57e3e3b5f41f9c8367d6613af1e7496b5350db6b1e410283ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f2da8254aefd57e3e3b5f41f9c8367d6613af1e7496b5350db6b1e410283ce->enter($__internal_97f2da8254aefd57e3e3b5f41f9c8367d6613af1e7496b5350db6b1e410283ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
        
        $__internal_af688ea5935c4b53b99e28c3c586f18799be6c9243f3d361c502dd19f2aae682->leave($__internal_af688ea5935c4b53b99e28c3c586f18799be6c9243f3d361c502dd19f2aae682_prof);

        
        $__internal_97f2da8254aefd57e3e3b5f41f9c8367d6613af1e7496b5350db6b1e410283ce->leave($__internal_97f2da8254aefd57e3e3b5f41f9c8367d6613af1e7496b5350db6b1e410283ce_prof);

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