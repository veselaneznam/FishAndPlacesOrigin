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
        $__internal_a24fe1d7b15089170f8b4e710d7203c95afa88f6b46f2228c0656d0995f78faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a24fe1d7b15089170f8b4e710d7203c95afa88f6b46f2228c0656d0995f78faa->enter($__internal_a24fe1d7b15089170f8b4e710d7203c95afa88f6b46f2228c0656d0995f78faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_c2bef427d7e7a5eb237bf329166f60e7b66cbcd659ecd233ea1dfae75502930e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2bef427d7e7a5eb237bf329166f60e7b66cbcd659ecd233ea1dfae75502930e->enter($__internal_c2bef427d7e7a5eb237bf329166f60e7b66cbcd659ecd233ea1dfae75502930e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a24fe1d7b15089170f8b4e710d7203c95afa88f6b46f2228c0656d0995f78faa->leave($__internal_a24fe1d7b15089170f8b4e710d7203c95afa88f6b46f2228c0656d0995f78faa_prof);

        
        $__internal_c2bef427d7e7a5eb237bf329166f60e7b66cbcd659ecd233ea1dfae75502930e->leave($__internal_c2bef427d7e7a5eb237bf329166f60e7b66cbcd659ecd233ea1dfae75502930e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e9ac06d3f5f3f68f7081e0339492c511659592e79d017ec769e4d48974ced183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ac06d3f5f3f68f7081e0339492c511659592e79d017ec769e4d48974ced183->enter($__internal_e9ac06d3f5f3f68f7081e0339492c511659592e79d017ec769e4d48974ced183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_69a27643a49e38fbd104fd03f07fbb488d7b6d88955be1a77a026a81e13744be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a27643a49e38fbd104fd03f07fbb488d7b6d88955be1a77a026a81e13744be->enter($__internal_69a27643a49e38fbd104fd03f07fbb488d7b6d88955be1a77a026a81e13744be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_69a27643a49e38fbd104fd03f07fbb488d7b6d88955be1a77a026a81e13744be->leave($__internal_69a27643a49e38fbd104fd03f07fbb488d7b6d88955be1a77a026a81e13744be_prof);

        
        $__internal_e9ac06d3f5f3f68f7081e0339492c511659592e79d017ec769e4d48974ced183->leave($__internal_e9ac06d3f5f3f68f7081e0339492c511659592e79d017ec769e4d48974ced183_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_62fc21263e5b2609acd544addae6dac381ce1f2d9d12162babc9fb2613c3dc9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62fc21263e5b2609acd544addae6dac381ce1f2d9d12162babc9fb2613c3dc9b->enter($__internal_62fc21263e5b2609acd544addae6dac381ce1f2d9d12162babc9fb2613c3dc9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_05c85c1871b2d57bf931112985fff076a1870d86c6b8294c180cd3c6a439260b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c85c1871b2d57bf931112985fff076a1870d86c6b8294c180cd3c6a439260b->enter($__internal_05c85c1871b2d57bf931112985fff076a1870d86c6b8294c180cd3c6a439260b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_05c85c1871b2d57bf931112985fff076a1870d86c6b8294c180cd3c6a439260b->leave($__internal_05c85c1871b2d57bf931112985fff076a1870d86c6b8294c180cd3c6a439260b_prof);

        
        $__internal_62fc21263e5b2609acd544addae6dac381ce1f2d9d12162babc9fb2613c3dc9b->leave($__internal_62fc21263e5b2609acd544addae6dac381ce1f2d9d12162babc9fb2613c3dc9b_prof);

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
