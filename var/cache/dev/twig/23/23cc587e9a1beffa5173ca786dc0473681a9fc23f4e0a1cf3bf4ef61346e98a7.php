<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_264bd7f6d249330c4780751b890d49cca1dcb77d8e85db0c8a3592d76bc7065e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8430d92c525c016108386a0034c6d0172c071445bb8a3b43d019383a6644cef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8430d92c525c016108386a0034c6d0172c071445bb8a3b43d019383a6644cef2->enter($__internal_8430d92c525c016108386a0034c6d0172c071445bb8a3b43d019383a6644cef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_b91c6db29e3a48d7f5e6750c9443cb5fb0143f7c93ad7a8b23f2ea3528a330dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91c6db29e3a48d7f5e6750c9443cb5fb0143f7c93ad7a8b23f2ea3528a330dd->enter($__internal_b91c6db29e3a48d7f5e6750c9443cb5fb0143f7c93ad7a8b23f2ea3528a330dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8430d92c525c016108386a0034c6d0172c071445bb8a3b43d019383a6644cef2->leave($__internal_8430d92c525c016108386a0034c6d0172c071445bb8a3b43d019383a6644cef2_prof);

        
        $__internal_b91c6db29e3a48d7f5e6750c9443cb5fb0143f7c93ad7a8b23f2ea3528a330dd->leave($__internal_b91c6db29e3a48d7f5e6750c9443cb5fb0143f7c93ad7a8b23f2ea3528a330dd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a2334865359d15e787c090d4f7591697575327a1eba0ea83963982c258ac18a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2334865359d15e787c090d4f7591697575327a1eba0ea83963982c258ac18a->enter($__internal_2a2334865359d15e787c090d4f7591697575327a1eba0ea83963982c258ac18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5cc1a49bb4320d781abc389d9f397661478538d75b5b957640eba3166da89566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc1a49bb4320d781abc389d9f397661478538d75b5b957640eba3166da89566->enter($__internal_5cc1a49bb4320d781abc389d9f397661478538d75b5b957640eba3166da89566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5cc1a49bb4320d781abc389d9f397661478538d75b5b957640eba3166da89566->leave($__internal_5cc1a49bb4320d781abc389d9f397661478538d75b5b957640eba3166da89566_prof);

        
        $__internal_2a2334865359d15e787c090d4f7591697575327a1eba0ea83963982c258ac18a->leave($__internal_2a2334865359d15e787c090d4f7591697575327a1eba0ea83963982c258ac18a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7def5730d90856e2eca7e85001b0ba268613501424c7d7437fd9a5d942869a14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7def5730d90856e2eca7e85001b0ba268613501424c7d7437fd9a5d942869a14->enter($__internal_7def5730d90856e2eca7e85001b0ba268613501424c7d7437fd9a5d942869a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1abb495e5adc647db03e2ccfbac52f78becae753bc2d67aa87cb5b123da21c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1abb495e5adc647db03e2ccfbac52f78becae753bc2d67aa87cb5b123da21c41->enter($__internal_1abb495e5adc647db03e2ccfbac52f78becae753bc2d67aa87cb5b123da21c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1abb495e5adc647db03e2ccfbac52f78becae753bc2d67aa87cb5b123da21c41->leave($__internal_1abb495e5adc647db03e2ccfbac52f78becae753bc2d67aa87cb5b123da21c41_prof);

        
        $__internal_7def5730d90856e2eca7e85001b0ba268613501424c7d7437fd9a5d942869a14->leave($__internal_7def5730d90856e2eca7e85001b0ba268613501424c7d7437fd9a5d942869a14_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_910fd13d1d3b19fa7d76b66f9296a0eb17019683ccfe5df15fb4c3925f32b772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_910fd13d1d3b19fa7d76b66f9296a0eb17019683ccfe5df15fb4c3925f32b772->enter($__internal_910fd13d1d3b19fa7d76b66f9296a0eb17019683ccfe5df15fb4c3925f32b772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_084b4c21f7e88b1440e07222e61d32cc6a234dd8e28f8395aac1c925002bfbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084b4c21f7e88b1440e07222e61d32cc6a234dd8e28f8395aac1c925002bfbd3->enter($__internal_084b4c21f7e88b1440e07222e61d32cc6a234dd8e28f8395aac1c925002bfbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_084b4c21f7e88b1440e07222e61d32cc6a234dd8e28f8395aac1c925002bfbd3->leave($__internal_084b4c21f7e88b1440e07222e61d32cc6a234dd8e28f8395aac1c925002bfbd3_prof);

        
        $__internal_910fd13d1d3b19fa7d76b66f9296a0eb17019683ccfe5df15fb4c3925f32b772->leave($__internal_910fd13d1d3b19fa7d76b66f9296a0eb17019683ccfe5df15fb4c3925f32b772_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
