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
        $__internal_b734dbf46e055ec74f49f7862f247a0e44554e8adf15350aee7e2c0429759024 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b734dbf46e055ec74f49f7862f247a0e44554e8adf15350aee7e2c0429759024->enter($__internal_b734dbf46e055ec74f49f7862f247a0e44554e8adf15350aee7e2c0429759024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_46f047a55c56493e2855ddbde422835ab9fcc244557caf937a0f8758fd39c7a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f047a55c56493e2855ddbde422835ab9fcc244557caf937a0f8758fd39c7a0->enter($__internal_46f047a55c56493e2855ddbde422835ab9fcc244557caf937a0f8758fd39c7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b734dbf46e055ec74f49f7862f247a0e44554e8adf15350aee7e2c0429759024->leave($__internal_b734dbf46e055ec74f49f7862f247a0e44554e8adf15350aee7e2c0429759024_prof);

        
        $__internal_46f047a55c56493e2855ddbde422835ab9fcc244557caf937a0f8758fd39c7a0->leave($__internal_46f047a55c56493e2855ddbde422835ab9fcc244557caf937a0f8758fd39c7a0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5ae2f6422ba49d80af0663eb7afe2dcff4c63e8590097a93a083f17d21e8b168 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ae2f6422ba49d80af0663eb7afe2dcff4c63e8590097a93a083f17d21e8b168->enter($__internal_5ae2f6422ba49d80af0663eb7afe2dcff4c63e8590097a93a083f17d21e8b168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a3051815666d9482951e3ffdc21138d76101c41ebeca694ca2daa60a586c827e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3051815666d9482951e3ffdc21138d76101c41ebeca694ca2daa60a586c827e->enter($__internal_a3051815666d9482951e3ffdc21138d76101c41ebeca694ca2daa60a586c827e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a3051815666d9482951e3ffdc21138d76101c41ebeca694ca2daa60a586c827e->leave($__internal_a3051815666d9482951e3ffdc21138d76101c41ebeca694ca2daa60a586c827e_prof);

        
        $__internal_5ae2f6422ba49d80af0663eb7afe2dcff4c63e8590097a93a083f17d21e8b168->leave($__internal_5ae2f6422ba49d80af0663eb7afe2dcff4c63e8590097a93a083f17d21e8b168_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84a23c0bec6eb8b415ecd706e84f6fadd0cad6025260247fecf54cb2a4258b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a23c0bec6eb8b415ecd706e84f6fadd0cad6025260247fecf54cb2a4258b10->enter($__internal_84a23c0bec6eb8b415ecd706e84f6fadd0cad6025260247fecf54cb2a4258b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_57dbf3a24c786d2d96f01b8cc4dc12e1da7c638f864e563e2393380b6e8b9ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57dbf3a24c786d2d96f01b8cc4dc12e1da7c638f864e563e2393380b6e8b9ec6->enter($__internal_57dbf3a24c786d2d96f01b8cc4dc12e1da7c638f864e563e2393380b6e8b9ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_57dbf3a24c786d2d96f01b8cc4dc12e1da7c638f864e563e2393380b6e8b9ec6->leave($__internal_57dbf3a24c786d2d96f01b8cc4dc12e1da7c638f864e563e2393380b6e8b9ec6_prof);

        
        $__internal_84a23c0bec6eb8b415ecd706e84f6fadd0cad6025260247fecf54cb2a4258b10->leave($__internal_84a23c0bec6eb8b415ecd706e84f6fadd0cad6025260247fecf54cb2a4258b10_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e38de59384f3b23cd945b7e18479714af56cb49414313380dde3d6cd369ce3c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38de59384f3b23cd945b7e18479714af56cb49414313380dde3d6cd369ce3c4->enter($__internal_e38de59384f3b23cd945b7e18479714af56cb49414313380dde3d6cd369ce3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b9f8557343325cee52a0e5b7e97049659acb72cb4cde9ca606378c5088507971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9f8557343325cee52a0e5b7e97049659acb72cb4cde9ca606378c5088507971->enter($__internal_b9f8557343325cee52a0e5b7e97049659acb72cb4cde9ca606378c5088507971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b9f8557343325cee52a0e5b7e97049659acb72cb4cde9ca606378c5088507971->leave($__internal_b9f8557343325cee52a0e5b7e97049659acb72cb4cde9ca606378c5088507971_prof);

        
        $__internal_e38de59384f3b23cd945b7e18479714af56cb49414313380dde3d6cd369ce3c4->leave($__internal_e38de59384f3b23cd945b7e18479714af56cb49414313380dde3d6cd369ce3c4_prof);

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
