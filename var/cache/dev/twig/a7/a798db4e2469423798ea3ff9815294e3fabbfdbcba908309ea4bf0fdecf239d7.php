<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_48cb658df213c36cca255f1ff59a381d617877bed8279481003d46e6b8d74673 extends Twig_Template
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
        $__internal_fa9cbfca97eec8878cf63a967418bc1ee21d6803a577ea5481a60b492c0b43b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9cbfca97eec8878cf63a967418bc1ee21d6803a577ea5481a60b492c0b43b7->enter($__internal_fa9cbfca97eec8878cf63a967418bc1ee21d6803a577ea5481a60b492c0b43b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c9fd9c3929d26942e1652806993aa52af24c38c8bb1b5e0857344bf6eb242102 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9fd9c3929d26942e1652806993aa52af24c38c8bb1b5e0857344bf6eb242102->enter($__internal_c9fd9c3929d26942e1652806993aa52af24c38c8bb1b5e0857344bf6eb242102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa9cbfca97eec8878cf63a967418bc1ee21d6803a577ea5481a60b492c0b43b7->leave($__internal_fa9cbfca97eec8878cf63a967418bc1ee21d6803a577ea5481a60b492c0b43b7_prof);

        
        $__internal_c9fd9c3929d26942e1652806993aa52af24c38c8bb1b5e0857344bf6eb242102->leave($__internal_c9fd9c3929d26942e1652806993aa52af24c38c8bb1b5e0857344bf6eb242102_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_914320f0a75cb7013617416dde2e1a0091fdb9ee8e995eb16e552534931f46da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_914320f0a75cb7013617416dde2e1a0091fdb9ee8e995eb16e552534931f46da->enter($__internal_914320f0a75cb7013617416dde2e1a0091fdb9ee8e995eb16e552534931f46da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ae0e74646eec829fd75a9094838758724a9a57847803d643c342a8fe3766bc2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0e74646eec829fd75a9094838758724a9a57847803d643c342a8fe3766bc2d->enter($__internal_ae0e74646eec829fd75a9094838758724a9a57847803d643c342a8fe3766bc2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ae0e74646eec829fd75a9094838758724a9a57847803d643c342a8fe3766bc2d->leave($__internal_ae0e74646eec829fd75a9094838758724a9a57847803d643c342a8fe3766bc2d_prof);

        
        $__internal_914320f0a75cb7013617416dde2e1a0091fdb9ee8e995eb16e552534931f46da->leave($__internal_914320f0a75cb7013617416dde2e1a0091fdb9ee8e995eb16e552534931f46da_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_33e8cb2338aa0fd2ade80e9d113003fd0f29baba35b27f5882e3e559f833cae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e8cb2338aa0fd2ade80e9d113003fd0f29baba35b27f5882e3e559f833cae7->enter($__internal_33e8cb2338aa0fd2ade80e9d113003fd0f29baba35b27f5882e3e559f833cae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e025281b1a79f0f861513c62f5b705bc76472af8ff8569d4b7199fcad91a1db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e025281b1a79f0f861513c62f5b705bc76472af8ff8569d4b7199fcad91a1db4->enter($__internal_e025281b1a79f0f861513c62f5b705bc76472af8ff8569d4b7199fcad91a1db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e025281b1a79f0f861513c62f5b705bc76472af8ff8569d4b7199fcad91a1db4->leave($__internal_e025281b1a79f0f861513c62f5b705bc76472af8ff8569d4b7199fcad91a1db4_prof);

        
        $__internal_33e8cb2338aa0fd2ade80e9d113003fd0f29baba35b27f5882e3e559f833cae7->leave($__internal_33e8cb2338aa0fd2ade80e9d113003fd0f29baba35b27f5882e3e559f833cae7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e5577b1fd87662b6bc7a0e1283f79bae617b54e74d08ad0559ce5aab9d9c0d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5577b1fd87662b6bc7a0e1283f79bae617b54e74d08ad0559ce5aab9d9c0d44->enter($__internal_e5577b1fd87662b6bc7a0e1283f79bae617b54e74d08ad0559ce5aab9d9c0d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5c5a949d0cf49e79ea709565448b315b8290dc98d7874354cde816a188ecff90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c5a949d0cf49e79ea709565448b315b8290dc98d7874354cde816a188ecff90->enter($__internal_5c5a949d0cf49e79ea709565448b315b8290dc98d7874354cde816a188ecff90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5c5a949d0cf49e79ea709565448b315b8290dc98d7874354cde816a188ecff90->leave($__internal_5c5a949d0cf49e79ea709565448b315b8290dc98d7874354cde816a188ecff90_prof);

        
        $__internal_e5577b1fd87662b6bc7a0e1283f79bae617b54e74d08ad0559ce5aab9d9c0d44->leave($__internal_e5577b1fd87662b6bc7a0e1283f79bae617b54e74d08ad0559ce5aab9d9c0d44_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
