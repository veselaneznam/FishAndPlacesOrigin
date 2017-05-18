<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_6ddef6336af61d833c34591fecee66d283cde8f253b2b06807045d6953e93572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c3756f9c360e173c1b3287c9a21f1dfbf87eb70d5cd908ddcf2e2f2e9f5b08c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c3756f9c360e173c1b3287c9a21f1dfbf87eb70d5cd908ddcf2e2f2e9f5b08c->enter($__internal_6c3756f9c360e173c1b3287c9a21f1dfbf87eb70d5cd908ddcf2e2f2e9f5b08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_079605742d83c463a16804e42687ba381eeff3491c2708ea3af76e47d83a773f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_079605742d83c463a16804e42687ba381eeff3491c2708ea3af76e47d83a773f->enter($__internal_079605742d83c463a16804e42687ba381eeff3491c2708ea3af76e47d83a773f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c3756f9c360e173c1b3287c9a21f1dfbf87eb70d5cd908ddcf2e2f2e9f5b08c->leave($__internal_6c3756f9c360e173c1b3287c9a21f1dfbf87eb70d5cd908ddcf2e2f2e9f5b08c_prof);

        
        $__internal_079605742d83c463a16804e42687ba381eeff3491c2708ea3af76e47d83a773f->leave($__internal_079605742d83c463a16804e42687ba381eeff3491c2708ea3af76e47d83a773f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f96297bbf7cb76794693715a6456e17222346f53c9c0f39c4069bf56b39044cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f96297bbf7cb76794693715a6456e17222346f53c9c0f39c4069bf56b39044cc->enter($__internal_f96297bbf7cb76794693715a6456e17222346f53c9c0f39c4069bf56b39044cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3b7359817693fc96602c192832350dd0d8bfe97129e05c3aa827933867355dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b7359817693fc96602c192832350dd0d8bfe97129e05c3aa827933867355dc->enter($__internal_d3b7359817693fc96602c192832350dd0d8bfe97129e05c3aa827933867355dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d3b7359817693fc96602c192832350dd0d8bfe97129e05c3aa827933867355dc->leave($__internal_d3b7359817693fc96602c192832350dd0d8bfe97129e05c3aa827933867355dc_prof);

        
        $__internal_f96297bbf7cb76794693715a6456e17222346f53c9c0f39c4069bf56b39044cc->leave($__internal_f96297bbf7cb76794693715a6456e17222346f53c9c0f39c4069bf56b39044cc_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7179b35dbdbaffad96874f463ae907233b86154baa50dc3cdd3de467f1faa109 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7179b35dbdbaffad96874f463ae907233b86154baa50dc3cdd3de467f1faa109->enter($__internal_7179b35dbdbaffad96874f463ae907233b86154baa50dc3cdd3de467f1faa109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2932b0317e5f3afcd27e8b50f8f1ff709ac7516d4960b70d6199563d72ba17a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2932b0317e5f3afcd27e8b50f8f1ff709ac7516d4960b70d6199563d72ba17a0->enter($__internal_2932b0317e5f3afcd27e8b50f8f1ff709ac7516d4960b70d6199563d72ba17a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_2932b0317e5f3afcd27e8b50f8f1ff709ac7516d4960b70d6199563d72ba17a0->leave($__internal_2932b0317e5f3afcd27e8b50f8f1ff709ac7516d4960b70d6199563d72ba17a0_prof);

        
        $__internal_7179b35dbdbaffad96874f463ae907233b86154baa50dc3cdd3de467f1faa109->leave($__internal_7179b35dbdbaffad96874f463ae907233b86154baa50dc3cdd3de467f1faa109_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  82 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>{{ file }} <small>line {{ line }}</small></h1>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
