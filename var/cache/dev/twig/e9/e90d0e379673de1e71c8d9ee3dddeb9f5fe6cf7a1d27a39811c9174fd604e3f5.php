<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a0c670f835defb9f69e0c19b4f94e52b6fa7e24bb7d63503e974f902a9eafe45 extends Twig_Template
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
        $__internal_0369a2c7c5f8a59e372ee1a08fb30a14dec8f112ba5474a82e7632fc88901569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0369a2c7c5f8a59e372ee1a08fb30a14dec8f112ba5474a82e7632fc88901569->enter($__internal_0369a2c7c5f8a59e372ee1a08fb30a14dec8f112ba5474a82e7632fc88901569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a6d3c9f721f70b0e477871760ca245730ff6849cbeafcbf52f757ea1183f3456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6d3c9f721f70b0e477871760ca245730ff6849cbeafcbf52f757ea1183f3456->enter($__internal_a6d3c9f721f70b0e477871760ca245730ff6849cbeafcbf52f757ea1183f3456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0369a2c7c5f8a59e372ee1a08fb30a14dec8f112ba5474a82e7632fc88901569->leave($__internal_0369a2c7c5f8a59e372ee1a08fb30a14dec8f112ba5474a82e7632fc88901569_prof);

        
        $__internal_a6d3c9f721f70b0e477871760ca245730ff6849cbeafcbf52f757ea1183f3456->leave($__internal_a6d3c9f721f70b0e477871760ca245730ff6849cbeafcbf52f757ea1183f3456_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8306df957cdf529c87e0997abb458d070ddb2777d75ecf43c7d8278708fc6a2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8306df957cdf529c87e0997abb458d070ddb2777d75ecf43c7d8278708fc6a2f->enter($__internal_8306df957cdf529c87e0997abb458d070ddb2777d75ecf43c7d8278708fc6a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7df87296c435face2a5ba9708330e0619659d075cea44fb1b1312adb93f83d80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df87296c435face2a5ba9708330e0619659d075cea44fb1b1312adb93f83d80->enter($__internal_7df87296c435face2a5ba9708330e0619659d075cea44fb1b1312adb93f83d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7df87296c435face2a5ba9708330e0619659d075cea44fb1b1312adb93f83d80->leave($__internal_7df87296c435face2a5ba9708330e0619659d075cea44fb1b1312adb93f83d80_prof);

        
        $__internal_8306df957cdf529c87e0997abb458d070ddb2777d75ecf43c7d8278708fc6a2f->leave($__internal_8306df957cdf529c87e0997abb458d070ddb2777d75ecf43c7d8278708fc6a2f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_78fdff4e69b3177b9041322614dc2bedab5b5c5cfc18f31f900edcf07e9ffdea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78fdff4e69b3177b9041322614dc2bedab5b5c5cfc18f31f900edcf07e9ffdea->enter($__internal_78fdff4e69b3177b9041322614dc2bedab5b5c5cfc18f31f900edcf07e9ffdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0ad1cc951f8f467b4db7765e4747c712dc6b82630bb881f2a7791d8f321f2345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad1cc951f8f467b4db7765e4747c712dc6b82630bb881f2a7791d8f321f2345->enter($__internal_0ad1cc951f8f467b4db7765e4747c712dc6b82630bb881f2a7791d8f321f2345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0ad1cc951f8f467b4db7765e4747c712dc6b82630bb881f2a7791d8f321f2345->leave($__internal_0ad1cc951f8f467b4db7765e4747c712dc6b82630bb881f2a7791d8f321f2345_prof);

        
        $__internal_78fdff4e69b3177b9041322614dc2bedab5b5c5cfc18f31f900edcf07e9ffdea->leave($__internal_78fdff4e69b3177b9041322614dc2bedab5b5c5cfc18f31f900edcf07e9ffdea_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f3a393f8c22cb27eab0fae67be84383878daebaf3315e96f8292a1e542343ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3a393f8c22cb27eab0fae67be84383878daebaf3315e96f8292a1e542343ab->enter($__internal_7f3a393f8c22cb27eab0fae67be84383878daebaf3315e96f8292a1e542343ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b2c00c64cffe44948dc6e8b3aae21e84e717ab017b1239f5f88557f3ca98f66c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c00c64cffe44948dc6e8b3aae21e84e717ab017b1239f5f88557f3ca98f66c->enter($__internal_b2c00c64cffe44948dc6e8b3aae21e84e717ab017b1239f5f88557f3ca98f66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b2c00c64cffe44948dc6e8b3aae21e84e717ab017b1239f5f88557f3ca98f66c->leave($__internal_b2c00c64cffe44948dc6e8b3aae21e84e717ab017b1239f5f88557f3ca98f66c_prof);

        
        $__internal_7f3a393f8c22cb27eab0fae67be84383878daebaf3315e96f8292a1e542343ab->leave($__internal_7f3a393f8c22cb27eab0fae67be84383878daebaf3315e96f8292a1e542343ab_prof);

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
