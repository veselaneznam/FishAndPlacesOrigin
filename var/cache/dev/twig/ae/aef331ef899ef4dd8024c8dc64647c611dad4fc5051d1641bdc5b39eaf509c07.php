<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_b49bcd6d9f91b2f21c78d0c59d699c53897c17d892385ef6a189ea4b06792c21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_53bbf3623bb50f1514a684737264b7ae2a3cebd9624c9ee2a208938862658a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53bbf3623bb50f1514a684737264b7ae2a3cebd9624c9ee2a208938862658a3c->enter($__internal_53bbf3623bb50f1514a684737264b7ae2a3cebd9624c9ee2a208938862658a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_b1980a7bd196d20abf1e780089cfa7a9fc26f2795619aa4bd8517e83a4e2c311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1980a7bd196d20abf1e780089cfa7a9fc26f2795619aa4bd8517e83a4e2c311->enter($__internal_b1980a7bd196d20abf1e780089cfa7a9fc26f2795619aa4bd8517e83a4e2c311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53bbf3623bb50f1514a684737264b7ae2a3cebd9624c9ee2a208938862658a3c->leave($__internal_53bbf3623bb50f1514a684737264b7ae2a3cebd9624c9ee2a208938862658a3c_prof);

        
        $__internal_b1980a7bd196d20abf1e780089cfa7a9fc26f2795619aa4bd8517e83a4e2c311->leave($__internal_b1980a7bd196d20abf1e780089cfa7a9fc26f2795619aa4bd8517e83a4e2c311_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_29b030359535925135c24cb493ad4ccfad226ee186bba5e55c02fdc7ada39462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29b030359535925135c24cb493ad4ccfad226ee186bba5e55c02fdc7ada39462->enter($__internal_29b030359535925135c24cb493ad4ccfad226ee186bba5e55c02fdc7ada39462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e8df2a94df4d483e2011d7dcd7cf9833b3095fd42c836e6f51a93aa2d913fe0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8df2a94df4d483e2011d7dcd7cf9833b3095fd42c836e6f51a93aa2d913fe0b->enter($__internal_e8df2a94df4d483e2011d7dcd7cf9833b3095fd42c836e6f51a93aa2d913fe0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e8df2a94df4d483e2011d7dcd7cf9833b3095fd42c836e6f51a93aa2d913fe0b->leave($__internal_e8df2a94df4d483e2011d7dcd7cf9833b3095fd42c836e6f51a93aa2d913fe0b_prof);

        
        $__internal_29b030359535925135c24cb493ad4ccfad226ee186bba5e55c02fdc7ada39462->leave($__internal_29b030359535925135c24cb493ad4ccfad226ee186bba5e55c02fdc7ada39462_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5cb9765c477727526d02e3e4d59ababa900396453724ffe7a8c24822ed0dd656 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb9765c477727526d02e3e4d59ababa900396453724ffe7a8c24822ed0dd656->enter($__internal_5cb9765c477727526d02e3e4d59ababa900396453724ffe7a8c24822ed0dd656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4a8ebb56f3e4e62e5f1c7705f8be09de1dbc88b7169ebc4b56c397bb80961f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8ebb56f3e4e62e5f1c7705f8be09de1dbc88b7169ebc4b56c397bb80961f31->enter($__internal_4a8ebb56f3e4e62e5f1c7705f8be09de1dbc88b7169ebc4b56c397bb80961f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4a8ebb56f3e4e62e5f1c7705f8be09de1dbc88b7169ebc4b56c397bb80961f31->leave($__internal_4a8ebb56f3e4e62e5f1c7705f8be09de1dbc88b7169ebc4b56c397bb80961f31_prof);

        
        $__internal_5cb9765c477727526d02e3e4d59ababa900396453724ffe7a8c24822ed0dd656->leave($__internal_5cb9765c477727526d02e3e4d59ababa900396453724ffe7a8c24822ed0dd656_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
