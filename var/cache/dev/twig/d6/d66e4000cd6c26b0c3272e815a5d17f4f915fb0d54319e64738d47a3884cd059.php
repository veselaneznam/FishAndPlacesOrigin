<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_b608223ecb1adc869f85e89cb76bd7e9f1356b8a74a1ed465fd85c4957845f5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_847816779a760b5dca1056a3c8707ed99d1aad0ae4a0591b6ed11ecb20c6aef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_847816779a760b5dca1056a3c8707ed99d1aad0ae4a0591b6ed11ecb20c6aef8->enter($__internal_847816779a760b5dca1056a3c8707ed99d1aad0ae4a0591b6ed11ecb20c6aef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6da76e5fe672b9cfa4eb1711024e58e2b8b48eed8a2b19e01028495edcd772ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da76e5fe672b9cfa4eb1711024e58e2b8b48eed8a2b19e01028495edcd772ba->enter($__internal_6da76e5fe672b9cfa4eb1711024e58e2b8b48eed8a2b19e01028495edcd772ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_847816779a760b5dca1056a3c8707ed99d1aad0ae4a0591b6ed11ecb20c6aef8->leave($__internal_847816779a760b5dca1056a3c8707ed99d1aad0ae4a0591b6ed11ecb20c6aef8_prof);

        
        $__internal_6da76e5fe672b9cfa4eb1711024e58e2b8b48eed8a2b19e01028495edcd772ba->leave($__internal_6da76e5fe672b9cfa4eb1711024e58e2b8b48eed8a2b19e01028495edcd772ba_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7ca88867a24f206ecc7fbfe2046f9fdb2b5343f4463522f03db239d4a8b95c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ca88867a24f206ecc7fbfe2046f9fdb2b5343f4463522f03db239d4a8b95c10->enter($__internal_7ca88867a24f206ecc7fbfe2046f9fdb2b5343f4463522f03db239d4a8b95c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_743520764e4cf616c8df0bf30d3c32c95cf12a355ad2db3e048bed9586725cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_743520764e4cf616c8df0bf30d3c32c95cf12a355ad2db3e048bed9586725cc7->enter($__internal_743520764e4cf616c8df0bf30d3c32c95cf12a355ad2db3e048bed9586725cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_743520764e4cf616c8df0bf30d3c32c95cf12a355ad2db3e048bed9586725cc7->leave($__internal_743520764e4cf616c8df0bf30d3c32c95cf12a355ad2db3e048bed9586725cc7_prof);

        
        $__internal_7ca88867a24f206ecc7fbfe2046f9fdb2b5343f4463522f03db239d4a8b95c10->leave($__internal_7ca88867a24f206ecc7fbfe2046f9fdb2b5343f4463522f03db239d4a8b95c10_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
