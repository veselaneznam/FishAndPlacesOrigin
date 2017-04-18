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
        $__internal_54ab4608f6d7e06a882e0fb72e60b5e8d6b3ef209d86fc720ca42009d5ff3215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ab4608f6d7e06a882e0fb72e60b5e8d6b3ef209d86fc720ca42009d5ff3215->enter($__internal_54ab4608f6d7e06a882e0fb72e60b5e8d6b3ef209d86fc720ca42009d5ff3215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_75c76eb73c460e78f440765b1c2acc35f7a2a19d4afd15cdb7dc38d0de874c66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c76eb73c460e78f440765b1c2acc35f7a2a19d4afd15cdb7dc38d0de874c66->enter($__internal_75c76eb73c460e78f440765b1c2acc35f7a2a19d4afd15cdb7dc38d0de874c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_54ab4608f6d7e06a882e0fb72e60b5e8d6b3ef209d86fc720ca42009d5ff3215->leave($__internal_54ab4608f6d7e06a882e0fb72e60b5e8d6b3ef209d86fc720ca42009d5ff3215_prof);

        
        $__internal_75c76eb73c460e78f440765b1c2acc35f7a2a19d4afd15cdb7dc38d0de874c66->leave($__internal_75c76eb73c460e78f440765b1c2acc35f7a2a19d4afd15cdb7dc38d0de874c66_prof);

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
