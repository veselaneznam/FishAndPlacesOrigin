<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_4f22e0fd228d9ff89b2b87bf73adb22e80edba539da278e15ee4ac24b14d4ea7 extends Twig_Template
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
        $__internal_4c072fceefe3b9388563d5a02a36a538570fd435a897705b0a191326a3c65ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c072fceefe3b9388563d5a02a36a538570fd435a897705b0a191326a3c65ac6->enter($__internal_4c072fceefe3b9388563d5a02a36a538570fd435a897705b0a191326a3c65ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_2edbe8c8fc54a89f4f2f23e99cbc1089475b520c5567822a3624f5254c9e495e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2edbe8c8fc54a89f4f2f23e99cbc1089475b520c5567822a3624f5254c9e495e->enter($__internal_2edbe8c8fc54a89f4f2f23e99cbc1089475b520c5567822a3624f5254c9e495e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c072fceefe3b9388563d5a02a36a538570fd435a897705b0a191326a3c65ac6->leave($__internal_4c072fceefe3b9388563d5a02a36a538570fd435a897705b0a191326a3c65ac6_prof);

        
        $__internal_2edbe8c8fc54a89f4f2f23e99cbc1089475b520c5567822a3624f5254c9e495e->leave($__internal_2edbe8c8fc54a89f4f2f23e99cbc1089475b520c5567822a3624f5254c9e495e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aa8b3dd9b8366ee6e64461cc119127e8350f58c637b6f24679f74c87160f60d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa8b3dd9b8366ee6e64461cc119127e8350f58c637b6f24679f74c87160f60d0->enter($__internal_aa8b3dd9b8366ee6e64461cc119127e8350f58c637b6f24679f74c87160f60d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9775397735b94799ab8064163a5a9f9e2ef5172548bf6ffbc71e4c3bb3e2474d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9775397735b94799ab8064163a5a9f9e2ef5172548bf6ffbc71e4c3bb3e2474d->enter($__internal_9775397735b94799ab8064163a5a9f9e2ef5172548bf6ffbc71e4c3bb3e2474d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_9775397735b94799ab8064163a5a9f9e2ef5172548bf6ffbc71e4c3bb3e2474d->leave($__internal_9775397735b94799ab8064163a5a9f9e2ef5172548bf6ffbc71e4c3bb3e2474d_prof);

        
        $__internal_aa8b3dd9b8366ee6e64461cc119127e8350f58c637b6f24679f74c87160f60d0->leave($__internal_aa8b3dd9b8366ee6e64461cc119127e8350f58c637b6f24679f74c87160f60d0_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d37ca537c2912ff270168874777b42c4be09abd21fea43c396b62b3036ef9f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d37ca537c2912ff270168874777b42c4be09abd21fea43c396b62b3036ef9f4->enter($__internal_8d37ca537c2912ff270168874777b42c4be09abd21fea43c396b62b3036ef9f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8dff2bb9becf585724470841b6b040f775625ce3ba5636ceee7116d97766c0ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dff2bb9becf585724470841b6b040f775625ce3ba5636ceee7116d97766c0ce->enter($__internal_8dff2bb9becf585724470841b6b040f775625ce3ba5636ceee7116d97766c0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_8dff2bb9becf585724470841b6b040f775625ce3ba5636ceee7116d97766c0ce->leave($__internal_8dff2bb9becf585724470841b6b040f775625ce3ba5636ceee7116d97766c0ce_prof);

        
        $__internal_8d37ca537c2912ff270168874777b42c4be09abd21fea43c396b62b3036ef9f4->leave($__internal_8d37ca537c2912ff270168874777b42c4be09abd21fea43c396b62b3036ef9f4_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
