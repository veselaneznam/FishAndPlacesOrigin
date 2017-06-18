<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_823bdd52d3e62cbc020d486080b5286ed3e619248124b10bb88a5e3d6b11221f extends Twig_Template
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
        $__internal_6940747bd6f256ff3761b1339e5b70d55c249d97ccd1b48dc412e85224c3e70c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6940747bd6f256ff3761b1339e5b70d55c249d97ccd1b48dc412e85224c3e70c->enter($__internal_6940747bd6f256ff3761b1339e5b70d55c249d97ccd1b48dc412e85224c3e70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5edbbc1d7a4eaf245be3c61fa836bb37bf05d71e721422c524ab2f06ad73afd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5edbbc1d7a4eaf245be3c61fa836bb37bf05d71e721422c524ab2f06ad73afd5->enter($__internal_5edbbc1d7a4eaf245be3c61fa836bb37bf05d71e721422c524ab2f06ad73afd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6940747bd6f256ff3761b1339e5b70d55c249d97ccd1b48dc412e85224c3e70c->leave($__internal_6940747bd6f256ff3761b1339e5b70d55c249d97ccd1b48dc412e85224c3e70c_prof);

        
        $__internal_5edbbc1d7a4eaf245be3c61fa836bb37bf05d71e721422c524ab2f06ad73afd5->leave($__internal_5edbbc1d7a4eaf245be3c61fa836bb37bf05d71e721422c524ab2f06ad73afd5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cc5975089310d92511fb475d14961615048dbbca09e57a127988331027624e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc5975089310d92511fb475d14961615048dbbca09e57a127988331027624e11->enter($__internal_cc5975089310d92511fb475d14961615048dbbca09e57a127988331027624e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_68af14b19188d07a2937f6eefcc8dd4bb2033ac2f5495fd4527f7101876dd037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68af14b19188d07a2937f6eefcc8dd4bb2033ac2f5495fd4527f7101876dd037->enter($__internal_68af14b19188d07a2937f6eefcc8dd4bb2033ac2f5495fd4527f7101876dd037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_68af14b19188d07a2937f6eefcc8dd4bb2033ac2f5495fd4527f7101876dd037->leave($__internal_68af14b19188d07a2937f6eefcc8dd4bb2033ac2f5495fd4527f7101876dd037_prof);

        
        $__internal_cc5975089310d92511fb475d14961615048dbbca09e57a127988331027624e11->leave($__internal_cc5975089310d92511fb475d14961615048dbbca09e57a127988331027624e11_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_79f1830e2f3c4f6c2fa8a618ec1961e7a5ec59d2086947439be3d4ad91e06dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79f1830e2f3c4f6c2fa8a618ec1961e7a5ec59d2086947439be3d4ad91e06dd1->enter($__internal_79f1830e2f3c4f6c2fa8a618ec1961e7a5ec59d2086947439be3d4ad91e06dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cb81b451bc97dc3d37834b1acaf7267028a507c0d07b6cbadfb05d99ba93f658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb81b451bc97dc3d37834b1acaf7267028a507c0d07b6cbadfb05d99ba93f658->enter($__internal_cb81b451bc97dc3d37834b1acaf7267028a507c0d07b6cbadfb05d99ba93f658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cb81b451bc97dc3d37834b1acaf7267028a507c0d07b6cbadfb05d99ba93f658->leave($__internal_cb81b451bc97dc3d37834b1acaf7267028a507c0d07b6cbadfb05d99ba93f658_prof);

        
        $__internal_79f1830e2f3c4f6c2fa8a618ec1961e7a5ec59d2086947439be3d4ad91e06dd1->leave($__internal_79f1830e2f3c4f6c2fa8a618ec1961e7a5ec59d2086947439be3d4ad91e06dd1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3b14e60e870fbf0916c0a2222f3f8ecd9663a7144949089fcf89af0ca69846f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3b14e60e870fbf0916c0a2222f3f8ecd9663a7144949089fcf89af0ca69846f->enter($__internal_c3b14e60e870fbf0916c0a2222f3f8ecd9663a7144949089fcf89af0ca69846f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_daf80c52173ddf00fcc7df8a31ae341003af2a7b5b648a7850ddfbfb47b3e5f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daf80c52173ddf00fcc7df8a31ae341003af2a7b5b648a7850ddfbfb47b3e5f6->enter($__internal_daf80c52173ddf00fcc7df8a31ae341003af2a7b5b648a7850ddfbfb47b3e5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_daf80c52173ddf00fcc7df8a31ae341003af2a7b5b648a7850ddfbfb47b3e5f6->leave($__internal_daf80c52173ddf00fcc7df8a31ae341003af2a7b5b648a7850ddfbfb47b3e5f6_prof);

        
        $__internal_c3b14e60e870fbf0916c0a2222f3f8ecd9663a7144949089fcf89af0ca69846f->leave($__internal_c3b14e60e870fbf0916c0a2222f3f8ecd9663a7144949089fcf89af0ca69846f_prof);

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
