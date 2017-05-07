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
        $__internal_4b844e813feb58ef57c5f3b6a2097995867820b7d77a57b1265dfac3addfc8ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b844e813feb58ef57c5f3b6a2097995867820b7d77a57b1265dfac3addfc8ae->enter($__internal_4b844e813feb58ef57c5f3b6a2097995867820b7d77a57b1265dfac3addfc8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_14e75edcebb60571a994756fd8656050c6a0f635cfe084431c1684d2ef6d3dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e75edcebb60571a994756fd8656050c6a0f635cfe084431c1684d2ef6d3dfa->enter($__internal_14e75edcebb60571a994756fd8656050c6a0f635cfe084431c1684d2ef6d3dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b844e813feb58ef57c5f3b6a2097995867820b7d77a57b1265dfac3addfc8ae->leave($__internal_4b844e813feb58ef57c5f3b6a2097995867820b7d77a57b1265dfac3addfc8ae_prof);

        
        $__internal_14e75edcebb60571a994756fd8656050c6a0f635cfe084431c1684d2ef6d3dfa->leave($__internal_14e75edcebb60571a994756fd8656050c6a0f635cfe084431c1684d2ef6d3dfa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91c9c4fed4549f146c0103023f45a463b2d6c6aebc027122c2dfcf409efe4be6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c9c4fed4549f146c0103023f45a463b2d6c6aebc027122c2dfcf409efe4be6->enter($__internal_91c9c4fed4549f146c0103023f45a463b2d6c6aebc027122c2dfcf409efe4be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d3b141dcde1f79a425fd6233bf21376b6fe9d6b77fc113a63ba8d62874a4b124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b141dcde1f79a425fd6233bf21376b6fe9d6b77fc113a63ba8d62874a4b124->enter($__internal_d3b141dcde1f79a425fd6233bf21376b6fe9d6b77fc113a63ba8d62874a4b124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d3b141dcde1f79a425fd6233bf21376b6fe9d6b77fc113a63ba8d62874a4b124->leave($__internal_d3b141dcde1f79a425fd6233bf21376b6fe9d6b77fc113a63ba8d62874a4b124_prof);

        
        $__internal_91c9c4fed4549f146c0103023f45a463b2d6c6aebc027122c2dfcf409efe4be6->leave($__internal_91c9c4fed4549f146c0103023f45a463b2d6c6aebc027122c2dfcf409efe4be6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_3831b054bebb551f86742bc94d3ba11040281a088defc89ceaa411bdd932ba86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3831b054bebb551f86742bc94d3ba11040281a088defc89ceaa411bdd932ba86->enter($__internal_3831b054bebb551f86742bc94d3ba11040281a088defc89ceaa411bdd932ba86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_259410ff43d2eaa248845ef83a303afe194b87d5f8ba03802f675ff027c33ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_259410ff43d2eaa248845ef83a303afe194b87d5f8ba03802f675ff027c33ae7->enter($__internal_259410ff43d2eaa248845ef83a303afe194b87d5f8ba03802f675ff027c33ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_259410ff43d2eaa248845ef83a303afe194b87d5f8ba03802f675ff027c33ae7->leave($__internal_259410ff43d2eaa248845ef83a303afe194b87d5f8ba03802f675ff027c33ae7_prof);

        
        $__internal_3831b054bebb551f86742bc94d3ba11040281a088defc89ceaa411bdd932ba86->leave($__internal_3831b054bebb551f86742bc94d3ba11040281a088defc89ceaa411bdd932ba86_prof);

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
