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
        $__internal_fac2b737e11c5a1a3715f8ff28e845400e8e8cc85e046103e51ab621f36e6a10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fac2b737e11c5a1a3715f8ff28e845400e8e8cc85e046103e51ab621f36e6a10->enter($__internal_fac2b737e11c5a1a3715f8ff28e845400e8e8cc85e046103e51ab621f36e6a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2140a669c7972301315dd34e06e18cc5dcf0d3a3d7e98c76d36407f9654a8696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2140a669c7972301315dd34e06e18cc5dcf0d3a3d7e98c76d36407f9654a8696->enter($__internal_2140a669c7972301315dd34e06e18cc5dcf0d3a3d7e98c76d36407f9654a8696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fac2b737e11c5a1a3715f8ff28e845400e8e8cc85e046103e51ab621f36e6a10->leave($__internal_fac2b737e11c5a1a3715f8ff28e845400e8e8cc85e046103e51ab621f36e6a10_prof);

        
        $__internal_2140a669c7972301315dd34e06e18cc5dcf0d3a3d7e98c76d36407f9654a8696->leave($__internal_2140a669c7972301315dd34e06e18cc5dcf0d3a3d7e98c76d36407f9654a8696_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_112d953a49cd893a222f38fdc6687097bad561717f5e0fbb7e84fb5520f373e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112d953a49cd893a222f38fdc6687097bad561717f5e0fbb7e84fb5520f373e3->enter($__internal_112d953a49cd893a222f38fdc6687097bad561717f5e0fbb7e84fb5520f373e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_50ca5c2dc63f0db5c37ff5d7fcff34f982964f8a5d16a751520f7c6c35301673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ca5c2dc63f0db5c37ff5d7fcff34f982964f8a5d16a751520f7c6c35301673->enter($__internal_50ca5c2dc63f0db5c37ff5d7fcff34f982964f8a5d16a751520f7c6c35301673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_50ca5c2dc63f0db5c37ff5d7fcff34f982964f8a5d16a751520f7c6c35301673->leave($__internal_50ca5c2dc63f0db5c37ff5d7fcff34f982964f8a5d16a751520f7c6c35301673_prof);

        
        $__internal_112d953a49cd893a222f38fdc6687097bad561717f5e0fbb7e84fb5520f373e3->leave($__internal_112d953a49cd893a222f38fdc6687097bad561717f5e0fbb7e84fb5520f373e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be2cc43a92b7253831c473511818cb23d5114a5486e3172fa3f2fd0b2cedc3d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be2cc43a92b7253831c473511818cb23d5114a5486e3172fa3f2fd0b2cedc3d0->enter($__internal_be2cc43a92b7253831c473511818cb23d5114a5486e3172fa3f2fd0b2cedc3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e2b529d422a9283955acd612f79af52691d31fe72febd61d348c11dbc4209c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b529d422a9283955acd612f79af52691d31fe72febd61d348c11dbc4209c25->enter($__internal_e2b529d422a9283955acd612f79af52691d31fe72febd61d348c11dbc4209c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e2b529d422a9283955acd612f79af52691d31fe72febd61d348c11dbc4209c25->leave($__internal_e2b529d422a9283955acd612f79af52691d31fe72febd61d348c11dbc4209c25_prof);

        
        $__internal_be2cc43a92b7253831c473511818cb23d5114a5486e3172fa3f2fd0b2cedc3d0->leave($__internal_be2cc43a92b7253831c473511818cb23d5114a5486e3172fa3f2fd0b2cedc3d0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_16a357e53b0b24c4ea377e9ccb213e84f8c6d1c1a3667b87843816bd75681aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a357e53b0b24c4ea377e9ccb213e84f8c6d1c1a3667b87843816bd75681aac->enter($__internal_16a357e53b0b24c4ea377e9ccb213e84f8c6d1c1a3667b87843816bd75681aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_71deec59fbd6761492fd61fb91d69fda59873c52c80e32b142463cc61efaa5dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71deec59fbd6761492fd61fb91d69fda59873c52c80e32b142463cc61efaa5dd->enter($__internal_71deec59fbd6761492fd61fb91d69fda59873c52c80e32b142463cc61efaa5dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_71deec59fbd6761492fd61fb91d69fda59873c52c80e32b142463cc61efaa5dd->leave($__internal_71deec59fbd6761492fd61fb91d69fda59873c52c80e32b142463cc61efaa5dd_prof);

        
        $__internal_16a357e53b0b24c4ea377e9ccb213e84f8c6d1c1a3667b87843816bd75681aac->leave($__internal_16a357e53b0b24c4ea377e9ccb213e84f8c6d1c1a3667b87843816bd75681aac_prof);

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
