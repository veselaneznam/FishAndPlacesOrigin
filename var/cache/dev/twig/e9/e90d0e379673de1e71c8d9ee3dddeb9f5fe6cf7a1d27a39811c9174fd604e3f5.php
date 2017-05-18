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
        $__internal_5e1a4bd127dab81ed0ca813b4cb02151c4d15ad2eba2242ce024f8b69cb2db00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e1a4bd127dab81ed0ca813b4cb02151c4d15ad2eba2242ce024f8b69cb2db00->enter($__internal_5e1a4bd127dab81ed0ca813b4cb02151c4d15ad2eba2242ce024f8b69cb2db00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_6c9804cbf0c5163318b88135a12afac20c3260f5d34cca3d8c04d896d99c0a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9804cbf0c5163318b88135a12afac20c3260f5d34cca3d8c04d896d99c0a2e->enter($__internal_6c9804cbf0c5163318b88135a12afac20c3260f5d34cca3d8c04d896d99c0a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e1a4bd127dab81ed0ca813b4cb02151c4d15ad2eba2242ce024f8b69cb2db00->leave($__internal_5e1a4bd127dab81ed0ca813b4cb02151c4d15ad2eba2242ce024f8b69cb2db00_prof);

        
        $__internal_6c9804cbf0c5163318b88135a12afac20c3260f5d34cca3d8c04d896d99c0a2e->leave($__internal_6c9804cbf0c5163318b88135a12afac20c3260f5d34cca3d8c04d896d99c0a2e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5221ef171235f924d7a581472a9cfa037b47690e8fcd09e2be5490304bd0076e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5221ef171235f924d7a581472a9cfa037b47690e8fcd09e2be5490304bd0076e->enter($__internal_5221ef171235f924d7a581472a9cfa037b47690e8fcd09e2be5490304bd0076e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_04ae32649c30d68a7dbc2114f288f80070eee295d61ba78a75d3c48740afb5ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ae32649c30d68a7dbc2114f288f80070eee295d61ba78a75d3c48740afb5ec->enter($__internal_04ae32649c30d68a7dbc2114f288f80070eee295d61ba78a75d3c48740afb5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_04ae32649c30d68a7dbc2114f288f80070eee295d61ba78a75d3c48740afb5ec->leave($__internal_04ae32649c30d68a7dbc2114f288f80070eee295d61ba78a75d3c48740afb5ec_prof);

        
        $__internal_5221ef171235f924d7a581472a9cfa037b47690e8fcd09e2be5490304bd0076e->leave($__internal_5221ef171235f924d7a581472a9cfa037b47690e8fcd09e2be5490304bd0076e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1b554f0591d9f4d0f5e38ccffd1aff9e213eae1cf2b4d775fa52f24de0edeeb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b554f0591d9f4d0f5e38ccffd1aff9e213eae1cf2b4d775fa52f24de0edeeb3->enter($__internal_1b554f0591d9f4d0f5e38ccffd1aff9e213eae1cf2b4d775fa52f24de0edeeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_feb7aa1f8045200ed27da85775b9282a39e22094c9feaafc73e5abae7547211f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb7aa1f8045200ed27da85775b9282a39e22094c9feaafc73e5abae7547211f->enter($__internal_feb7aa1f8045200ed27da85775b9282a39e22094c9feaafc73e5abae7547211f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_feb7aa1f8045200ed27da85775b9282a39e22094c9feaafc73e5abae7547211f->leave($__internal_feb7aa1f8045200ed27da85775b9282a39e22094c9feaafc73e5abae7547211f_prof);

        
        $__internal_1b554f0591d9f4d0f5e38ccffd1aff9e213eae1cf2b4d775fa52f24de0edeeb3->leave($__internal_1b554f0591d9f4d0f5e38ccffd1aff9e213eae1cf2b4d775fa52f24de0edeeb3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_19a68c7b657f807b0fc5527fa0d575543a10a67c1be3d708551519526c16009b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a68c7b657f807b0fc5527fa0d575543a10a67c1be3d708551519526c16009b->enter($__internal_19a68c7b657f807b0fc5527fa0d575543a10a67c1be3d708551519526c16009b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c949061416cc07ea047b1286db74546091736042d281dd595c7fc082c446787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c949061416cc07ea047b1286db74546091736042d281dd595c7fc082c446787->enter($__internal_1c949061416cc07ea047b1286db74546091736042d281dd595c7fc082c446787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1c949061416cc07ea047b1286db74546091736042d281dd595c7fc082c446787->leave($__internal_1c949061416cc07ea047b1286db74546091736042d281dd595c7fc082c446787_prof);

        
        $__internal_19a68c7b657f807b0fc5527fa0d575543a10a67c1be3d708551519526c16009b->leave($__internal_19a68c7b657f807b0fc5527fa0d575543a10a67c1be3d708551519526c16009b_prof);

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
