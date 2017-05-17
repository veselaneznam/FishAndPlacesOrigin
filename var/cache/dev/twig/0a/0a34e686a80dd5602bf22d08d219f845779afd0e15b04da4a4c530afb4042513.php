<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0c44c30705bbcc9796680a78452fd12740c6161be8409f6330969c2fa4eeb528 extends Twig_Template
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
        $__internal_d72fa030338ccc3567f168786d986309c453ccec67085a60df942eb10a7876a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72fa030338ccc3567f168786d986309c453ccec67085a60df942eb10a7876a8->enter($__internal_d72fa030338ccc3567f168786d986309c453ccec67085a60df942eb10a7876a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0fa8562fcd69df91fb3fa20f211a6671643fdd21628e2ee456084e559c29cf33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa8562fcd69df91fb3fa20f211a6671643fdd21628e2ee456084e559c29cf33->enter($__internal_0fa8562fcd69df91fb3fa20f211a6671643fdd21628e2ee456084e559c29cf33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d72fa030338ccc3567f168786d986309c453ccec67085a60df942eb10a7876a8->leave($__internal_d72fa030338ccc3567f168786d986309c453ccec67085a60df942eb10a7876a8_prof);

        
        $__internal_0fa8562fcd69df91fb3fa20f211a6671643fdd21628e2ee456084e559c29cf33->leave($__internal_0fa8562fcd69df91fb3fa20f211a6671643fdd21628e2ee456084e559c29cf33_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_65da01eb8336db00641a175d63db6b6566ca66ad475462879415eade92ae9305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65da01eb8336db00641a175d63db6b6566ca66ad475462879415eade92ae9305->enter($__internal_65da01eb8336db00641a175d63db6b6566ca66ad475462879415eade92ae9305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_757838da2e6a0bf66e626c146ff5f11e5f210856132df216d1186db1c49d5eb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_757838da2e6a0bf66e626c146ff5f11e5f210856132df216d1186db1c49d5eb0->enter($__internal_757838da2e6a0bf66e626c146ff5f11e5f210856132df216d1186db1c49d5eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_757838da2e6a0bf66e626c146ff5f11e5f210856132df216d1186db1c49d5eb0->leave($__internal_757838da2e6a0bf66e626c146ff5f11e5f210856132df216d1186db1c49d5eb0_prof);

        
        $__internal_65da01eb8336db00641a175d63db6b6566ca66ad475462879415eade92ae9305->leave($__internal_65da01eb8336db00641a175d63db6b6566ca66ad475462879415eade92ae9305_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1bc6717f577e015764e0f5585474542cfb348c5c6cb31db3cb166781f5393267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc6717f577e015764e0f5585474542cfb348c5c6cb31db3cb166781f5393267->enter($__internal_1bc6717f577e015764e0f5585474542cfb348c5c6cb31db3cb166781f5393267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_318d1549fc2bd1f4729b2144b8631fc989e591c385a1f8d02a475603b9a2356c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318d1549fc2bd1f4729b2144b8631fc989e591c385a1f8d02a475603b9a2356c->enter($__internal_318d1549fc2bd1f4729b2144b8631fc989e591c385a1f8d02a475603b9a2356c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_318d1549fc2bd1f4729b2144b8631fc989e591c385a1f8d02a475603b9a2356c->leave($__internal_318d1549fc2bd1f4729b2144b8631fc989e591c385a1f8d02a475603b9a2356c_prof);

        
        $__internal_1bc6717f577e015764e0f5585474542cfb348c5c6cb31db3cb166781f5393267->leave($__internal_1bc6717f577e015764e0f5585474542cfb348c5c6cb31db3cb166781f5393267_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c44a2f9cc6ced93c19b7e72e7d14fd67101b296e9fa23b258464d0e0347ab339 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c44a2f9cc6ced93c19b7e72e7d14fd67101b296e9fa23b258464d0e0347ab339->enter($__internal_c44a2f9cc6ced93c19b7e72e7d14fd67101b296e9fa23b258464d0e0347ab339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e67fc661e5c1303902b44ed85c599c90f1768e62b6a3ec31e9a15e289c929c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67fc661e5c1303902b44ed85c599c90f1768e62b6a3ec31e9a15e289c929c1b->enter($__internal_e67fc661e5c1303902b44ed85c599c90f1768e62b6a3ec31e9a15e289c929c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e67fc661e5c1303902b44ed85c599c90f1768e62b6a3ec31e9a15e289c929c1b->leave($__internal_e67fc661e5c1303902b44ed85c599c90f1768e62b6a3ec31e9a15e289c929c1b_prof);

        
        $__internal_c44a2f9cc6ced93c19b7e72e7d14fd67101b296e9fa23b258464d0e0347ab339->leave($__internal_c44a2f9cc6ced93c19b7e72e7d14fd67101b296e9fa23b258464d0e0347ab339_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
