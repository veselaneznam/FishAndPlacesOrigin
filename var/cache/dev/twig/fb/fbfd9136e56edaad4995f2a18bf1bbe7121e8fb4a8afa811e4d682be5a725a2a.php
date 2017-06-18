<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9340b72c4eb5628f0ba358a9b900a064b59bc213840a60db610e28e3b4a6a143 extends Twig_Template
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
        $__internal_0a4afc4fd07959e450c866c8fdd0599a8578fc0ecbf1b73bb938a6d08f7dacff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a4afc4fd07959e450c866c8fdd0599a8578fc0ecbf1b73bb938a6d08f7dacff->enter($__internal_0a4afc4fd07959e450c866c8fdd0599a8578fc0ecbf1b73bb938a6d08f7dacff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0d274ebf37fcd91d06023e56a370b60476e4020e244b70c241d3d0f91687681b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d274ebf37fcd91d06023e56a370b60476e4020e244b70c241d3d0f91687681b->enter($__internal_0d274ebf37fcd91d06023e56a370b60476e4020e244b70c241d3d0f91687681b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a4afc4fd07959e450c866c8fdd0599a8578fc0ecbf1b73bb938a6d08f7dacff->leave($__internal_0a4afc4fd07959e450c866c8fdd0599a8578fc0ecbf1b73bb938a6d08f7dacff_prof);

        
        $__internal_0d274ebf37fcd91d06023e56a370b60476e4020e244b70c241d3d0f91687681b->leave($__internal_0d274ebf37fcd91d06023e56a370b60476e4020e244b70c241d3d0f91687681b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_23719c4bdbbcc516cf927a9edf3444bb7b6b093b4d14a8f0addeda5f92fa7b02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23719c4bdbbcc516cf927a9edf3444bb7b6b093b4d14a8f0addeda5f92fa7b02->enter($__internal_23719c4bdbbcc516cf927a9edf3444bb7b6b093b4d14a8f0addeda5f92fa7b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_379fe77403bda00064e0b6cbd2d6f61dacc8a29cb489d58811b05866ec59534d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379fe77403bda00064e0b6cbd2d6f61dacc8a29cb489d58811b05866ec59534d->enter($__internal_379fe77403bda00064e0b6cbd2d6f61dacc8a29cb489d58811b05866ec59534d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_379fe77403bda00064e0b6cbd2d6f61dacc8a29cb489d58811b05866ec59534d->leave($__internal_379fe77403bda00064e0b6cbd2d6f61dacc8a29cb489d58811b05866ec59534d_prof);

        
        $__internal_23719c4bdbbcc516cf927a9edf3444bb7b6b093b4d14a8f0addeda5f92fa7b02->leave($__internal_23719c4bdbbcc516cf927a9edf3444bb7b6b093b4d14a8f0addeda5f92fa7b02_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_71b82198787a558020cb0122ee7966960a565ef2aae2c843a8f6aed1c605b47c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71b82198787a558020cb0122ee7966960a565ef2aae2c843a8f6aed1c605b47c->enter($__internal_71b82198787a558020cb0122ee7966960a565ef2aae2c843a8f6aed1c605b47c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a619c59891b49dab049c99ab7e5c4020a50d906103b7862d4e457d1f507b3a25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a619c59891b49dab049c99ab7e5c4020a50d906103b7862d4e457d1f507b3a25->enter($__internal_a619c59891b49dab049c99ab7e5c4020a50d906103b7862d4e457d1f507b3a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a619c59891b49dab049c99ab7e5c4020a50d906103b7862d4e457d1f507b3a25->leave($__internal_a619c59891b49dab049c99ab7e5c4020a50d906103b7862d4e457d1f507b3a25_prof);

        
        $__internal_71b82198787a558020cb0122ee7966960a565ef2aae2c843a8f6aed1c605b47c->leave($__internal_71b82198787a558020cb0122ee7966960a565ef2aae2c843a8f6aed1c605b47c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_53cccfbafd6e54ceb3973ee46f3e743f3b9866de31becb44eb794523a8b4e81c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53cccfbafd6e54ceb3973ee46f3e743f3b9866de31becb44eb794523a8b4e81c->enter($__internal_53cccfbafd6e54ceb3973ee46f3e743f3b9866de31becb44eb794523a8b4e81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3e92402cacdfce2a9748432e8a8b6113fe4ff10fc57495dd1d94e301978c6826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e92402cacdfce2a9748432e8a8b6113fe4ff10fc57495dd1d94e301978c6826->enter($__internal_3e92402cacdfce2a9748432e8a8b6113fe4ff10fc57495dd1d94e301978c6826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3e92402cacdfce2a9748432e8a8b6113fe4ff10fc57495dd1d94e301978c6826->leave($__internal_3e92402cacdfce2a9748432e8a8b6113fe4ff10fc57495dd1d94e301978c6826_prof);

        
        $__internal_53cccfbafd6e54ceb3973ee46f3e743f3b9866de31becb44eb794523a8b4e81c->leave($__internal_53cccfbafd6e54ceb3973ee46f3e743f3b9866de31becb44eb794523a8b4e81c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
