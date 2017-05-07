<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8e3728b7867b472a9653db4a3624c4ff706ae05a4cecbb66507ea031435914ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_498b40d8514f0ab6a3c9cc7de13f78a6b440c218cbdff1a7cd72f9a45f9ff735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498b40d8514f0ab6a3c9cc7de13f78a6b440c218cbdff1a7cd72f9a45f9ff735->enter($__internal_498b40d8514f0ab6a3c9cc7de13f78a6b440c218cbdff1a7cd72f9a45f9ff735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_92b5eee304fd823e912deab2e39b64ed6a8de81b613e0baf8248054866918f25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b5eee304fd823e912deab2e39b64ed6a8de81b613e0baf8248054866918f25->enter($__internal_92b5eee304fd823e912deab2e39b64ed6a8de81b613e0baf8248054866918f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_498b40d8514f0ab6a3c9cc7de13f78a6b440c218cbdff1a7cd72f9a45f9ff735->leave($__internal_498b40d8514f0ab6a3c9cc7de13f78a6b440c218cbdff1a7cd72f9a45f9ff735_prof);

        
        $__internal_92b5eee304fd823e912deab2e39b64ed6a8de81b613e0baf8248054866918f25->leave($__internal_92b5eee304fd823e912deab2e39b64ed6a8de81b613e0baf8248054866918f25_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_744a9eb9c939166c6af80b6a484b6d615c71aedbe75df534d02fcff6bbc41286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_744a9eb9c939166c6af80b6a484b6d615c71aedbe75df534d02fcff6bbc41286->enter($__internal_744a9eb9c939166c6af80b6a484b6d615c71aedbe75df534d02fcff6bbc41286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0fa7500f2580f5f3ca2b710bb5dfac9889ba14dc2f9bbad8ba88b8d1feef3d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa7500f2580f5f3ca2b710bb5dfac9889ba14dc2f9bbad8ba88b8d1feef3d13->enter($__internal_0fa7500f2580f5f3ca2b710bb5dfac9889ba14dc2f9bbad8ba88b8d1feef3d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0fa7500f2580f5f3ca2b710bb5dfac9889ba14dc2f9bbad8ba88b8d1feef3d13->leave($__internal_0fa7500f2580f5f3ca2b710bb5dfac9889ba14dc2f9bbad8ba88b8d1feef3d13_prof);

        
        $__internal_744a9eb9c939166c6af80b6a484b6d615c71aedbe75df534d02fcff6bbc41286->leave($__internal_744a9eb9c939166c6af80b6a484b6d615c71aedbe75df534d02fcff6bbc41286_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f9cc439b5187310ce5a9786e7ae2b33d761067df2191e6329bd080aba80d112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f9cc439b5187310ce5a9786e7ae2b33d761067df2191e6329bd080aba80d112->enter($__internal_2f9cc439b5187310ce5a9786e7ae2b33d761067df2191e6329bd080aba80d112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f0caf316a99de61705e00e73c0c08391aeaac68df0f06c90197d57a7b796d521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0caf316a99de61705e00e73c0c08391aeaac68df0f06c90197d57a7b796d521->enter($__internal_f0caf316a99de61705e00e73c0c08391aeaac68df0f06c90197d57a7b796d521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f0caf316a99de61705e00e73c0c08391aeaac68df0f06c90197d57a7b796d521->leave($__internal_f0caf316a99de61705e00e73c0c08391aeaac68df0f06c90197d57a7b796d521_prof);

        
        $__internal_2f9cc439b5187310ce5a9786e7ae2b33d761067df2191e6329bd080aba80d112->leave($__internal_2f9cc439b5187310ce5a9786e7ae2b33d761067df2191e6329bd080aba80d112_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9908f29b6ae77410c043af124d138673c29aa43ff538b0191f01a2c501c507cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9908f29b6ae77410c043af124d138673c29aa43ff538b0191f01a2c501c507cd->enter($__internal_9908f29b6ae77410c043af124d138673c29aa43ff538b0191f01a2c501c507cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bfd0c8463102a874b68dd9bb5f0c768e8e68ada85cfc11487c868a57213380bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd0c8463102a874b68dd9bb5f0c768e8e68ada85cfc11487c868a57213380bb->enter($__internal_bfd0c8463102a874b68dd9bb5f0c768e8e68ada85cfc11487c868a57213380bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bfd0c8463102a874b68dd9bb5f0c768e8e68ada85cfc11487c868a57213380bb->leave($__internal_bfd0c8463102a874b68dd9bb5f0c768e8e68ada85cfc11487c868a57213380bb_prof);

        
        $__internal_9908f29b6ae77410c043af124d138673c29aa43ff538b0191f01a2c501c507cd->leave($__internal_9908f29b6ae77410c043af124d138673c29aa43ff538b0191f01a2c501c507cd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
