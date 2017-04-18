<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_c9f6c08aec834a4d98064316297b67acfde6c0d160cbad17da32fe1a677f7414 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/memory.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0a9e034dd2280eb90a7b90e58e8b5fe103b5bcedec22c4761e9efd2cd4a924e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0a9e034dd2280eb90a7b90e58e8b5fe103b5bcedec22c4761e9efd2cd4a924e->enter($__internal_e0a9e034dd2280eb90a7b90e58e8b5fe103b5bcedec22c4761e9efd2cd4a924e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $__internal_aaad5286582d476e4a94e88ded77b47fd7b31a4622cadd4f97d620ec09b6c044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaad5286582d476e4a94e88ded77b47fd7b31a4622cadd4f97d620ec09b6c044->enter($__internal_aaad5286582d476e4a94e88ded77b47fd7b31a4622cadd4f97d620ec09b6c044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0a9e034dd2280eb90a7b90e58e8b5fe103b5bcedec22c4761e9efd2cd4a924e->leave($__internal_e0a9e034dd2280eb90a7b90e58e8b5fe103b5bcedec22c4761e9efd2cd4a924e_prof);

        
        $__internal_aaad5286582d476e4a94e88ded77b47fd7b31a4622cadd4f97d620ec09b6c044->leave($__internal_aaad5286582d476e4a94e88ded77b47fd7b31a4622cadd4f97d620ec09b6c044_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_53b39fffcf21c70d7b8126a283843f0498389c24dcf05b15a34823bd48e881f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b39fffcf21c70d7b8126a283843f0498389c24dcf05b15a34823bd48e881f7->enter($__internal_53b39fffcf21c70d7b8126a283843f0498389c24dcf05b15a34823bd48e881f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_318a9bdfcf9fba5376234493ace1f15af4596316e8b4467e0823729846bd98fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318a9bdfcf9fba5376234493ace1f15af4596316e8b4467e0823729846bd98fb->enter($__internal_318a9bdfcf9fba5376234493ace1f15af4596316e8b4467e0823729846bd98fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $context["status_color"] = ((((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024) > 50)) ? ("yellow") : (""));
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/memory.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">MB</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) ==  -1)) ? ("Unlimited") : (sprintf("%.0f MB", (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "memoryLimit", array()) / 1024) / 1024)))), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 23
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "name" => "time", "status" => (isset($context["status_color"]) ? $context["status_color"] : $this->getContext($context, "status_color"))));
        echo "
";
        
        $__internal_318a9bdfcf9fba5376234493ace1f15af4596316e8b4467e0823729846bd98fb->leave($__internal_318a9bdfcf9fba5376234493ace1f15af4596316e8b4467e0823729846bd98fb_prof);

        
        $__internal_53b39fffcf21c70d7b8126a283843f0498389c24dcf05b15a34823bd48e881f7->leave($__internal_53b39fffcf21c70d7b8126a283843f0498389c24dcf05b15a34823bd48e881f7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  89 => 22,  83 => 19,  75 => 14,  71 => 12,  69 => 11,  66 => 10,  60 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {% set status_color = (collector.memory / 1024 / 1024) > 50 ? 'yellow' : '' %}
        {{ include('@WebProfiler/Icon/memory.svg') }}
        <span class=\"sf-toolbar-value\">{{ '%.1f'|format(collector.memory / 1024 / 1024) }}</span>
        <span class=\"sf-toolbar-label\">MB</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>{{ collector.memoryLimit == -1 ? 'Unlimited' : '%.0f MB'|format(collector.memoryLimit / 1024 / 1024) }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, name: 'time', status: status_color }) }}
{% endblock %}
", "@WebProfiler/Collector/memory.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/memory.html.twig");
    }
}
