<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_33d93fb0f39ad913d2465ad814cc9c8c0e65b3160eb4cce214d340cc1037365b extends Twig_Template
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
        $__internal_f4b3edbef91d6187d21519dd3024b27b5a1d115bbcd2de705160010fce381841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4b3edbef91d6187d21519dd3024b27b5a1d115bbcd2de705160010fce381841->enter($__internal_f4b3edbef91d6187d21519dd3024b27b5a1d115bbcd2de705160010fce381841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1b601d5693f18a3e8648ff0dd9b4034fe51ac99e14beb922620b7bb3c3b2b226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b601d5693f18a3e8648ff0dd9b4034fe51ac99e14beb922620b7bb3c3b2b226->enter($__internal_1b601d5693f18a3e8648ff0dd9b4034fe51ac99e14beb922620b7bb3c3b2b226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4b3edbef91d6187d21519dd3024b27b5a1d115bbcd2de705160010fce381841->leave($__internal_f4b3edbef91d6187d21519dd3024b27b5a1d115bbcd2de705160010fce381841_prof);

        
        $__internal_1b601d5693f18a3e8648ff0dd9b4034fe51ac99e14beb922620b7bb3c3b2b226->leave($__internal_1b601d5693f18a3e8648ff0dd9b4034fe51ac99e14beb922620b7bb3c3b2b226_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ba616d328aac458f7582c4f18b1694f18963aa2f834ea4b04bd8b0cad90fd90d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba616d328aac458f7582c4f18b1694f18963aa2f834ea4b04bd8b0cad90fd90d->enter($__internal_ba616d328aac458f7582c4f18b1694f18963aa2f834ea4b04bd8b0cad90fd90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b544bc3d7f8f693c928639169863c8615708b59718e73540e984f143a8edb601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b544bc3d7f8f693c928639169863c8615708b59718e73540e984f143a8edb601->enter($__internal_b544bc3d7f8f693c928639169863c8615708b59718e73540e984f143a8edb601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b544bc3d7f8f693c928639169863c8615708b59718e73540e984f143a8edb601->leave($__internal_b544bc3d7f8f693c928639169863c8615708b59718e73540e984f143a8edb601_prof);

        
        $__internal_ba616d328aac458f7582c4f18b1694f18963aa2f834ea4b04bd8b0cad90fd90d->leave($__internal_ba616d328aac458f7582c4f18b1694f18963aa2f834ea4b04bd8b0cad90fd90d_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
