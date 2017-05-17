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
        $__internal_b555c368ade59204ec48f804ed0221299821c033b89b931c21eb007effb01d30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b555c368ade59204ec48f804ed0221299821c033b89b931c21eb007effb01d30->enter($__internal_b555c368ade59204ec48f804ed0221299821c033b89b931c21eb007effb01d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_01c51d9a7d3ea4c3dfbbe9c85308018924db78f75f9a2f1569b1630a7f76f261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01c51d9a7d3ea4c3dfbbe9c85308018924db78f75f9a2f1569b1630a7f76f261->enter($__internal_01c51d9a7d3ea4c3dfbbe9c85308018924db78f75f9a2f1569b1630a7f76f261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b555c368ade59204ec48f804ed0221299821c033b89b931c21eb007effb01d30->leave($__internal_b555c368ade59204ec48f804ed0221299821c033b89b931c21eb007effb01d30_prof);

        
        $__internal_01c51d9a7d3ea4c3dfbbe9c85308018924db78f75f9a2f1569b1630a7f76f261->leave($__internal_01c51d9a7d3ea4c3dfbbe9c85308018924db78f75f9a2f1569b1630a7f76f261_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_95413d86825910e7f29573c445e74c71137840b5ae3412898ffd9efcac8baeed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95413d86825910e7f29573c445e74c71137840b5ae3412898ffd9efcac8baeed->enter($__internal_95413d86825910e7f29573c445e74c71137840b5ae3412898ffd9efcac8baeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7c94f29c5d878e566a3f38bd7e5873966a91d82c402a86fb1cc5406f774edf8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c94f29c5d878e566a3f38bd7e5873966a91d82c402a86fb1cc5406f774edf8b->enter($__internal_7c94f29c5d878e566a3f38bd7e5873966a91d82c402a86fb1cc5406f774edf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7c94f29c5d878e566a3f38bd7e5873966a91d82c402a86fb1cc5406f774edf8b->leave($__internal_7c94f29c5d878e566a3f38bd7e5873966a91d82c402a86fb1cc5406f774edf8b_prof);

        
        $__internal_95413d86825910e7f29573c445e74c71137840b5ae3412898ffd9efcac8baeed->leave($__internal_95413d86825910e7f29573c445e74c71137840b5ae3412898ffd9efcac8baeed_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_b11d21035eaf0fc9e965ad06ba28925b2eb6e231f5e2da6ed91ff8d67334f07f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b11d21035eaf0fc9e965ad06ba28925b2eb6e231f5e2da6ed91ff8d67334f07f->enter($__internal_b11d21035eaf0fc9e965ad06ba28925b2eb6e231f5e2da6ed91ff8d67334f07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0d5cd37425523f308ca82fc6e895d42f3c604ffff46d4a5f6bd09ca63c0b72f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d5cd37425523f308ca82fc6e895d42f3c604ffff46d4a5f6bd09ca63c0b72f->enter($__internal_f0d5cd37425523f308ca82fc6e895d42f3c604ffff46d4a5f6bd09ca63c0b72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f0d5cd37425523f308ca82fc6e895d42f3c604ffff46d4a5f6bd09ca63c0b72f->leave($__internal_f0d5cd37425523f308ca82fc6e895d42f3c604ffff46d4a5f6bd09ca63c0b72f_prof);

        
        $__internal_b11d21035eaf0fc9e965ad06ba28925b2eb6e231f5e2da6ed91ff8d67334f07f->leave($__internal_b11d21035eaf0fc9e965ad06ba28925b2eb6e231f5e2da6ed91ff8d67334f07f_prof);

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
