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
        $__internal_5d7c5362d72b8ddf4669c8a6add1342d70555148ada2acac28a048b054955898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7c5362d72b8ddf4669c8a6add1342d70555148ada2acac28a048b054955898->enter($__internal_5d7c5362d72b8ddf4669c8a6add1342d70555148ada2acac28a048b054955898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5fad04c4ccd0fba1669bcc4adeb63de4906f659c1cbd5a2711d19dddfaf4b625 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fad04c4ccd0fba1669bcc4adeb63de4906f659c1cbd5a2711d19dddfaf4b625->enter($__internal_5fad04c4ccd0fba1669bcc4adeb63de4906f659c1cbd5a2711d19dddfaf4b625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d7c5362d72b8ddf4669c8a6add1342d70555148ada2acac28a048b054955898->leave($__internal_5d7c5362d72b8ddf4669c8a6add1342d70555148ada2acac28a048b054955898_prof);

        
        $__internal_5fad04c4ccd0fba1669bcc4adeb63de4906f659c1cbd5a2711d19dddfaf4b625->leave($__internal_5fad04c4ccd0fba1669bcc4adeb63de4906f659c1cbd5a2711d19dddfaf4b625_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6975ccefff68d1ea2786c86c21ffb22d775f427aa7254fc6d89ac3fa3c1a7657 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6975ccefff68d1ea2786c86c21ffb22d775f427aa7254fc6d89ac3fa3c1a7657->enter($__internal_6975ccefff68d1ea2786c86c21ffb22d775f427aa7254fc6d89ac3fa3c1a7657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_efd01e6dcd0564cc0accf37762cfaa446988c05b34bf59070f76323cfa699a9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd01e6dcd0564cc0accf37762cfaa446988c05b34bf59070f76323cfa699a9a->enter($__internal_efd01e6dcd0564cc0accf37762cfaa446988c05b34bf59070f76323cfa699a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_efd01e6dcd0564cc0accf37762cfaa446988c05b34bf59070f76323cfa699a9a->leave($__internal_efd01e6dcd0564cc0accf37762cfaa446988c05b34bf59070f76323cfa699a9a_prof);

        
        $__internal_6975ccefff68d1ea2786c86c21ffb22d775f427aa7254fc6d89ac3fa3c1a7657->leave($__internal_6975ccefff68d1ea2786c86c21ffb22d775f427aa7254fc6d89ac3fa3c1a7657_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee15f0ae0e1d2bebbc5f4263362738cc5a3aeec8657993d8f30a12efccf83d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee15f0ae0e1d2bebbc5f4263362738cc5a3aeec8657993d8f30a12efccf83d7a->enter($__internal_ee15f0ae0e1d2bebbc5f4263362738cc5a3aeec8657993d8f30a12efccf83d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d9f040b6bc8bd6bf9c7a1ab887965f933bb2111cd3bed7e75753851c36089d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f040b6bc8bd6bf9c7a1ab887965f933bb2111cd3bed7e75753851c36089d31->enter($__internal_d9f040b6bc8bd6bf9c7a1ab887965f933bb2111cd3bed7e75753851c36089d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d9f040b6bc8bd6bf9c7a1ab887965f933bb2111cd3bed7e75753851c36089d31->leave($__internal_d9f040b6bc8bd6bf9c7a1ab887965f933bb2111cd3bed7e75753851c36089d31_prof);

        
        $__internal_ee15f0ae0e1d2bebbc5f4263362738cc5a3aeec8657993d8f30a12efccf83d7a->leave($__internal_ee15f0ae0e1d2bebbc5f4263362738cc5a3aeec8657993d8f30a12efccf83d7a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dd28f011679daf33d6a7f3e7de85f2da91fc8b342522c3b3b4ea21978ac06191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd28f011679daf33d6a7f3e7de85f2da91fc8b342522c3b3b4ea21978ac06191->enter($__internal_dd28f011679daf33d6a7f3e7de85f2da91fc8b342522c3b3b4ea21978ac06191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c5410ab44e13c54c73cd5f18331995ef246b80e40931d9440fa4667af220a1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5410ab44e13c54c73cd5f18331995ef246b80e40931d9440fa4667af220a1a4->enter($__internal_c5410ab44e13c54c73cd5f18331995ef246b80e40931d9440fa4667af220a1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c5410ab44e13c54c73cd5f18331995ef246b80e40931d9440fa4667af220a1a4->leave($__internal_c5410ab44e13c54c73cd5f18331995ef246b80e40931d9440fa4667af220a1a4_prof);

        
        $__internal_dd28f011679daf33d6a7f3e7de85f2da91fc8b342522c3b3b4ea21978ac06191->leave($__internal_dd28f011679daf33d6a7f3e7de85f2da91fc8b342522c3b3b4ea21978ac06191_prof);

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
