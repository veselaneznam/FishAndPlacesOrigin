<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_72a46afa566ed2f94620773f303903b47165ed39f7664a8681a15cf41e45b97d extends Twig_Template
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
        $__internal_61b88a9ee6516e7e381d2dba5c5889d6b15e38703cb65abc2d26fc154f268bca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b88a9ee6516e7e381d2dba5c5889d6b15e38703cb65abc2d26fc154f268bca->enter($__internal_61b88a9ee6516e7e381d2dba5c5889d6b15e38703cb65abc2d26fc154f268bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_99c6f2ad6a45dcc6c21fd9b1227bb09527d0cb0faa9523aa8c5743d7d3898911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c6f2ad6a45dcc6c21fd9b1227bb09527d0cb0faa9523aa8c5743d7d3898911->enter($__internal_99c6f2ad6a45dcc6c21fd9b1227bb09527d0cb0faa9523aa8c5743d7d3898911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61b88a9ee6516e7e381d2dba5c5889d6b15e38703cb65abc2d26fc154f268bca->leave($__internal_61b88a9ee6516e7e381d2dba5c5889d6b15e38703cb65abc2d26fc154f268bca_prof);

        
        $__internal_99c6f2ad6a45dcc6c21fd9b1227bb09527d0cb0faa9523aa8c5743d7d3898911->leave($__internal_99c6f2ad6a45dcc6c21fd9b1227bb09527d0cb0faa9523aa8c5743d7d3898911_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4868c3c42649bce2e33347f946d3c53d9cfac8718005e4e6ffdb5d285a7ae406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4868c3c42649bce2e33347f946d3c53d9cfac8718005e4e6ffdb5d285a7ae406->enter($__internal_4868c3c42649bce2e33347f946d3c53d9cfac8718005e4e6ffdb5d285a7ae406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_496e905846c0e6c7f575015f2193c1a9fc96d811ff1e507c17bd946892540d8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496e905846c0e6c7f575015f2193c1a9fc96d811ff1e507c17bd946892540d8c->enter($__internal_496e905846c0e6c7f575015f2193c1a9fc96d811ff1e507c17bd946892540d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_496e905846c0e6c7f575015f2193c1a9fc96d811ff1e507c17bd946892540d8c->leave($__internal_496e905846c0e6c7f575015f2193c1a9fc96d811ff1e507c17bd946892540d8c_prof);

        
        $__internal_4868c3c42649bce2e33347f946d3c53d9cfac8718005e4e6ffdb5d285a7ae406->leave($__internal_4868c3c42649bce2e33347f946d3c53d9cfac8718005e4e6ffdb5d285a7ae406_prof);

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
