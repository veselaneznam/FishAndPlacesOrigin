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
        $__internal_6a08172ea3082867f3c13406e28c31ef62a2fa8ebd974e07de9b6e803dd416c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a08172ea3082867f3c13406e28c31ef62a2fa8ebd974e07de9b6e803dd416c0->enter($__internal_6a08172ea3082867f3c13406e28c31ef62a2fa8ebd974e07de9b6e803dd416c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_97c93f757a06a3e1993354a2a52dacb0d3d7f8cb7cd29499e88deeb9de5f4d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c93f757a06a3e1993354a2a52dacb0d3d7f8cb7cd29499e88deeb9de5f4d10->enter($__internal_97c93f757a06a3e1993354a2a52dacb0d3d7f8cb7cd29499e88deeb9de5f4d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a08172ea3082867f3c13406e28c31ef62a2fa8ebd974e07de9b6e803dd416c0->leave($__internal_6a08172ea3082867f3c13406e28c31ef62a2fa8ebd974e07de9b6e803dd416c0_prof);

        
        $__internal_97c93f757a06a3e1993354a2a52dacb0d3d7f8cb7cd29499e88deeb9de5f4d10->leave($__internal_97c93f757a06a3e1993354a2a52dacb0d3d7f8cb7cd29499e88deeb9de5f4d10_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_68315f6475e885dce1ff755f50fcf809f2ceb7b34e1cbd4e978efded40ac0cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68315f6475e885dce1ff755f50fcf809f2ceb7b34e1cbd4e978efded40ac0cc2->enter($__internal_68315f6475e885dce1ff755f50fcf809f2ceb7b34e1cbd4e978efded40ac0cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_20f6af659b475c187a0fa338f6aef1082eafa905a4db3045a0bd334501afdb70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f6af659b475c187a0fa338f6aef1082eafa905a4db3045a0bd334501afdb70->enter($__internal_20f6af659b475c187a0fa338f6aef1082eafa905a4db3045a0bd334501afdb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_20f6af659b475c187a0fa338f6aef1082eafa905a4db3045a0bd334501afdb70->leave($__internal_20f6af659b475c187a0fa338f6aef1082eafa905a4db3045a0bd334501afdb70_prof);

        
        $__internal_68315f6475e885dce1ff755f50fcf809f2ceb7b34e1cbd4e978efded40ac0cc2->leave($__internal_68315f6475e885dce1ff755f50fcf809f2ceb7b34e1cbd4e978efded40ac0cc2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c36038533d4a486018ded9ff0359d44f1321b5b6bc518666ec9140818d8473db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c36038533d4a486018ded9ff0359d44f1321b5b6bc518666ec9140818d8473db->enter($__internal_c36038533d4a486018ded9ff0359d44f1321b5b6bc518666ec9140818d8473db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_931520e522f8fd378714c528096183c9521d57d630d7c15a4232646d81403369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_931520e522f8fd378714c528096183c9521d57d630d7c15a4232646d81403369->enter($__internal_931520e522f8fd378714c528096183c9521d57d630d7c15a4232646d81403369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_931520e522f8fd378714c528096183c9521d57d630d7c15a4232646d81403369->leave($__internal_931520e522f8fd378714c528096183c9521d57d630d7c15a4232646d81403369_prof);

        
        $__internal_c36038533d4a486018ded9ff0359d44f1321b5b6bc518666ec9140818d8473db->leave($__internal_c36038533d4a486018ded9ff0359d44f1321b5b6bc518666ec9140818d8473db_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cbfc65a0937f7b2c4f200b5b3b4b30ac06880cebb4c7fad8d470a2f598920072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbfc65a0937f7b2c4f200b5b3b4b30ac06880cebb4c7fad8d470a2f598920072->enter($__internal_cbfc65a0937f7b2c4f200b5b3b4b30ac06880cebb4c7fad8d470a2f598920072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4d08ed9b3f22f5ef1dd3aafdaaadfce7609935d49a788b2101f8ac8bad491c44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d08ed9b3f22f5ef1dd3aafdaaadfce7609935d49a788b2101f8ac8bad491c44->enter($__internal_4d08ed9b3f22f5ef1dd3aafdaaadfce7609935d49a788b2101f8ac8bad491c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4d08ed9b3f22f5ef1dd3aafdaaadfce7609935d49a788b2101f8ac8bad491c44->leave($__internal_4d08ed9b3f22f5ef1dd3aafdaaadfce7609935d49a788b2101f8ac8bad491c44_prof);

        
        $__internal_cbfc65a0937f7b2c4f200b5b3b4b30ac06880cebb4c7fad8d470a2f598920072->leave($__internal_cbfc65a0937f7b2c4f200b5b3b4b30ac06880cebb4c7fad8d470a2f598920072_prof);

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
