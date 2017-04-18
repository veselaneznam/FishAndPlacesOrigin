<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7a1f751f539df3bf1752f0f5da84b400d280f55ea362fc7e72d7c2e391ce9755 extends Twig_Template
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
        $__internal_3db39cfdf9ca337c1362efe7ea61eef520db86877621fa8430b2d28e4346366d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3db39cfdf9ca337c1362efe7ea61eef520db86877621fa8430b2d28e4346366d->enter($__internal_3db39cfdf9ca337c1362efe7ea61eef520db86877621fa8430b2d28e4346366d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b0dc1ee4f56c9d6d484c5bfcd53ea8b6c162c9265443594d5e4bfe4f8ecfe37e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0dc1ee4f56c9d6d484c5bfcd53ea8b6c162c9265443594d5e4bfe4f8ecfe37e->enter($__internal_b0dc1ee4f56c9d6d484c5bfcd53ea8b6c162c9265443594d5e4bfe4f8ecfe37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3db39cfdf9ca337c1362efe7ea61eef520db86877621fa8430b2d28e4346366d->leave($__internal_3db39cfdf9ca337c1362efe7ea61eef520db86877621fa8430b2d28e4346366d_prof);

        
        $__internal_b0dc1ee4f56c9d6d484c5bfcd53ea8b6c162c9265443594d5e4bfe4f8ecfe37e->leave($__internal_b0dc1ee4f56c9d6d484c5bfcd53ea8b6c162c9265443594d5e4bfe4f8ecfe37e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f102e8a487370ff566c9edbec13a08338e877e703921f2545f1c9df2181d993e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f102e8a487370ff566c9edbec13a08338e877e703921f2545f1c9df2181d993e->enter($__internal_f102e8a487370ff566c9edbec13a08338e877e703921f2545f1c9df2181d993e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2ef894cca4034e30c97c634bd69c884b315e6f45818611ab52fce8287add1107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef894cca4034e30c97c634bd69c884b315e6f45818611ab52fce8287add1107->enter($__internal_2ef894cca4034e30c97c634bd69c884b315e6f45818611ab52fce8287add1107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2ef894cca4034e30c97c634bd69c884b315e6f45818611ab52fce8287add1107->leave($__internal_2ef894cca4034e30c97c634bd69c884b315e6f45818611ab52fce8287add1107_prof);

        
        $__internal_f102e8a487370ff566c9edbec13a08338e877e703921f2545f1c9df2181d993e->leave($__internal_f102e8a487370ff566c9edbec13a08338e877e703921f2545f1c9df2181d993e_prof);

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
