<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6be566e0432cae9bc3c59b5e6a1015044395f3983390c9a0c781f471d9b10ce7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb9c757d2f48c3ef851b3b452d7415ec55317565e80666970d503630de60f50c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb9c757d2f48c3ef851b3b452d7415ec55317565e80666970d503630de60f50c->enter($__internal_eb9c757d2f48c3ef851b3b452d7415ec55317565e80666970d503630de60f50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d28d83d3d2d75e79384a259632a9957305c82b4bec442d6c7847aac8c5b57a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28d83d3d2d75e79384a259632a9957305c82b4bec442d6c7847aac8c5b57a32->enter($__internal_d28d83d3d2d75e79384a259632a9957305c82b4bec442d6c7847aac8c5b57a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb9c757d2f48c3ef851b3b452d7415ec55317565e80666970d503630de60f50c->leave($__internal_eb9c757d2f48c3ef851b3b452d7415ec55317565e80666970d503630de60f50c_prof);

        
        $__internal_d28d83d3d2d75e79384a259632a9957305c82b4bec442d6c7847aac8c5b57a32->leave($__internal_d28d83d3d2d75e79384a259632a9957305c82b4bec442d6c7847aac8c5b57a32_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_176b371fb35177f483f381c71b75a1d5f4f1bc03bcf03078a07461f77e395460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176b371fb35177f483f381c71b75a1d5f4f1bc03bcf03078a07461f77e395460->enter($__internal_176b371fb35177f483f381c71b75a1d5f4f1bc03bcf03078a07461f77e395460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_668698762cdc7eebf56986b467c3013ae5963e5a8cb02f4ba28dd51090733904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668698762cdc7eebf56986b467c3013ae5963e5a8cb02f4ba28dd51090733904->enter($__internal_668698762cdc7eebf56986b467c3013ae5963e5a8cb02f4ba28dd51090733904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_668698762cdc7eebf56986b467c3013ae5963e5a8cb02f4ba28dd51090733904->leave($__internal_668698762cdc7eebf56986b467c3013ae5963e5a8cb02f4ba28dd51090733904_prof);

        
        $__internal_176b371fb35177f483f381c71b75a1d5f4f1bc03bcf03078a07461f77e395460->leave($__internal_176b371fb35177f483f381c71b75a1d5f4f1bc03bcf03078a07461f77e395460_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47c813c63ff52712eefbafe2ef81b90ea185ac15e8432b3987dca07dddddf57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47c813c63ff52712eefbafe2ef81b90ea185ac15e8432b3987dca07dddddf57b->enter($__internal_47c813c63ff52712eefbafe2ef81b90ea185ac15e8432b3987dca07dddddf57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_27838b4b5741716bde477692d27166adfa49cdc9ac6afd85811392290323833e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27838b4b5741716bde477692d27166adfa49cdc9ac6afd85811392290323833e->enter($__internal_27838b4b5741716bde477692d27166adfa49cdc9ac6afd85811392290323833e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_27838b4b5741716bde477692d27166adfa49cdc9ac6afd85811392290323833e->leave($__internal_27838b4b5741716bde477692d27166adfa49cdc9ac6afd85811392290323833e_prof);

        
        $__internal_47c813c63ff52712eefbafe2ef81b90ea185ac15e8432b3987dca07dddddf57b->leave($__internal_47c813c63ff52712eefbafe2ef81b90ea185ac15e8432b3987dca07dddddf57b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b12b88ea244f205cb1b038921f563ef25836f27a3ca6ff931f777e0de00d4db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b12b88ea244f205cb1b038921f563ef25836f27a3ca6ff931f777e0de00d4db->enter($__internal_9b12b88ea244f205cb1b038921f563ef25836f27a3ca6ff931f777e0de00d4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3fb9dabe2c360555271723c8fdaf35fae60c508ad450e470ba8bace99b4a561d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fb9dabe2c360555271723c8fdaf35fae60c508ad450e470ba8bace99b4a561d->enter($__internal_3fb9dabe2c360555271723c8fdaf35fae60c508ad450e470ba8bace99b4a561d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3fb9dabe2c360555271723c8fdaf35fae60c508ad450e470ba8bace99b4a561d->leave($__internal_3fb9dabe2c360555271723c8fdaf35fae60c508ad450e470ba8bace99b4a561d_prof);

        
        $__internal_9b12b88ea244f205cb1b038921f563ef25836f27a3ca6ff931f777e0de00d4db->leave($__internal_9b12b88ea244f205cb1b038921f563ef25836f27a3ca6ff931f777e0de00d4db_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
