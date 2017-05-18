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
        $__internal_9f569315d1f9044c756e29db6f091c0d7655b0ba446ebbebd23a1e156746c409 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f569315d1f9044c756e29db6f091c0d7655b0ba446ebbebd23a1e156746c409->enter($__internal_9f569315d1f9044c756e29db6f091c0d7655b0ba446ebbebd23a1e156746c409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_729ec57a08256f9121c36f98c2819fd7e8a99781cef98efd6f2af5d7e196001c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729ec57a08256f9121c36f98c2819fd7e8a99781cef98efd6f2af5d7e196001c->enter($__internal_729ec57a08256f9121c36f98c2819fd7e8a99781cef98efd6f2af5d7e196001c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f569315d1f9044c756e29db6f091c0d7655b0ba446ebbebd23a1e156746c409->leave($__internal_9f569315d1f9044c756e29db6f091c0d7655b0ba446ebbebd23a1e156746c409_prof);

        
        $__internal_729ec57a08256f9121c36f98c2819fd7e8a99781cef98efd6f2af5d7e196001c->leave($__internal_729ec57a08256f9121c36f98c2819fd7e8a99781cef98efd6f2af5d7e196001c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7540b19d96cfd5dc8e17a512913e84ec2a373bb63cf5ae473027d492ee83347e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7540b19d96cfd5dc8e17a512913e84ec2a373bb63cf5ae473027d492ee83347e->enter($__internal_7540b19d96cfd5dc8e17a512913e84ec2a373bb63cf5ae473027d492ee83347e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b04d0986eeb75313081ca685ef93ef663049a2abc2c0a512d900a97e6795d89a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04d0986eeb75313081ca685ef93ef663049a2abc2c0a512d900a97e6795d89a->enter($__internal_b04d0986eeb75313081ca685ef93ef663049a2abc2c0a512d900a97e6795d89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b04d0986eeb75313081ca685ef93ef663049a2abc2c0a512d900a97e6795d89a->leave($__internal_b04d0986eeb75313081ca685ef93ef663049a2abc2c0a512d900a97e6795d89a_prof);

        
        $__internal_7540b19d96cfd5dc8e17a512913e84ec2a373bb63cf5ae473027d492ee83347e->leave($__internal_7540b19d96cfd5dc8e17a512913e84ec2a373bb63cf5ae473027d492ee83347e_prof);

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
