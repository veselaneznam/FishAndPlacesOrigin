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
        $__internal_d62e92c79b8e5eb1cc01dcddd0da49b440c8c439b1f6ce13bb41c6306392c892 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d62e92c79b8e5eb1cc01dcddd0da49b440c8c439b1f6ce13bb41c6306392c892->enter($__internal_d62e92c79b8e5eb1cc01dcddd0da49b440c8c439b1f6ce13bb41c6306392c892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f35e669c8264e79e803b9bf92db9e4f23f451f6d2317f586f310fc5a16ced7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35e669c8264e79e803b9bf92db9e4f23f451f6d2317f586f310fc5a16ced7ad->enter($__internal_f35e669c8264e79e803b9bf92db9e4f23f451f6d2317f586f310fc5a16ced7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d62e92c79b8e5eb1cc01dcddd0da49b440c8c439b1f6ce13bb41c6306392c892->leave($__internal_d62e92c79b8e5eb1cc01dcddd0da49b440c8c439b1f6ce13bb41c6306392c892_prof);

        
        $__internal_f35e669c8264e79e803b9bf92db9e4f23f451f6d2317f586f310fc5a16ced7ad->leave($__internal_f35e669c8264e79e803b9bf92db9e4f23f451f6d2317f586f310fc5a16ced7ad_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5efba969e5abfecb8098f15aa8542405cd3cee0a650a7473d3de2cd49b00a375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5efba969e5abfecb8098f15aa8542405cd3cee0a650a7473d3de2cd49b00a375->enter($__internal_5efba969e5abfecb8098f15aa8542405cd3cee0a650a7473d3de2cd49b00a375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_562a379d8606f4a50f38b185bcd3e42c397c61914ddb9b65d0af60507619435e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562a379d8606f4a50f38b185bcd3e42c397c61914ddb9b65d0af60507619435e->enter($__internal_562a379d8606f4a50f38b185bcd3e42c397c61914ddb9b65d0af60507619435e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_562a379d8606f4a50f38b185bcd3e42c397c61914ddb9b65d0af60507619435e->leave($__internal_562a379d8606f4a50f38b185bcd3e42c397c61914ddb9b65d0af60507619435e_prof);

        
        $__internal_5efba969e5abfecb8098f15aa8542405cd3cee0a650a7473d3de2cd49b00a375->leave($__internal_5efba969e5abfecb8098f15aa8542405cd3cee0a650a7473d3de2cd49b00a375_prof);

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
