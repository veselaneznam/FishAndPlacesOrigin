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
        $__internal_a5eb18341f37006afab8d3efb0bcac37be41a27c435a01f24f167c0b60f3ee2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5eb18341f37006afab8d3efb0bcac37be41a27c435a01f24f167c0b60f3ee2a->enter($__internal_a5eb18341f37006afab8d3efb0bcac37be41a27c435a01f24f167c0b60f3ee2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9ac5a650298f78032fa353045cd3bacb799bf167e36e8ad3d11fd015cae0c629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac5a650298f78032fa353045cd3bacb799bf167e36e8ad3d11fd015cae0c629->enter($__internal_9ac5a650298f78032fa353045cd3bacb799bf167e36e8ad3d11fd015cae0c629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5eb18341f37006afab8d3efb0bcac37be41a27c435a01f24f167c0b60f3ee2a->leave($__internal_a5eb18341f37006afab8d3efb0bcac37be41a27c435a01f24f167c0b60f3ee2a_prof);

        
        $__internal_9ac5a650298f78032fa353045cd3bacb799bf167e36e8ad3d11fd015cae0c629->leave($__internal_9ac5a650298f78032fa353045cd3bacb799bf167e36e8ad3d11fd015cae0c629_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec51f90c5c4ddcb46ecf66a3e09bb3dd48d30a37b34f2f374f40c0d85f8d263d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec51f90c5c4ddcb46ecf66a3e09bb3dd48d30a37b34f2f374f40c0d85f8d263d->enter($__internal_ec51f90c5c4ddcb46ecf66a3e09bb3dd48d30a37b34f2f374f40c0d85f8d263d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_879062a0756bfdbfa6d57293eef7554aa04bb13571f0a2b7bf1d4e3374e8a6a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_879062a0756bfdbfa6d57293eef7554aa04bb13571f0a2b7bf1d4e3374e8a6a4->enter($__internal_879062a0756bfdbfa6d57293eef7554aa04bb13571f0a2b7bf1d4e3374e8a6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_879062a0756bfdbfa6d57293eef7554aa04bb13571f0a2b7bf1d4e3374e8a6a4->leave($__internal_879062a0756bfdbfa6d57293eef7554aa04bb13571f0a2b7bf1d4e3374e8a6a4_prof);

        
        $__internal_ec51f90c5c4ddcb46ecf66a3e09bb3dd48d30a37b34f2f374f40c0d85f8d263d->leave($__internal_ec51f90c5c4ddcb46ecf66a3e09bb3dd48d30a37b34f2f374f40c0d85f8d263d_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dcb5134ddd337901a9fe0176b8bb47a4b4c26564a83d6083334d43d9b70e44c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcb5134ddd337901a9fe0176b8bb47a4b4c26564a83d6083334d43d9b70e44c2->enter($__internal_dcb5134ddd337901a9fe0176b8bb47a4b4c26564a83d6083334d43d9b70e44c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_02348636f9bc0729e3d2d5952d196c7e69e8b917dad00ffa2e9958d2df6018cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02348636f9bc0729e3d2d5952d196c7e69e8b917dad00ffa2e9958d2df6018cb->enter($__internal_02348636f9bc0729e3d2d5952d196c7e69e8b917dad00ffa2e9958d2df6018cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_02348636f9bc0729e3d2d5952d196c7e69e8b917dad00ffa2e9958d2df6018cb->leave($__internal_02348636f9bc0729e3d2d5952d196c7e69e8b917dad00ffa2e9958d2df6018cb_prof);

        
        $__internal_dcb5134ddd337901a9fe0176b8bb47a4b4c26564a83d6083334d43d9b70e44c2->leave($__internal_dcb5134ddd337901a9fe0176b8bb47a4b4c26564a83d6083334d43d9b70e44c2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_724f2c3e0ccdb3e4439e572efb1d359d683a3c7199a48957df66886ed5bdae3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_724f2c3e0ccdb3e4439e572efb1d359d683a3c7199a48957df66886ed5bdae3b->enter($__internal_724f2c3e0ccdb3e4439e572efb1d359d683a3c7199a48957df66886ed5bdae3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_82f01252921754da1d1d2bea608f9f718053a0cb546680236529e238ffd832df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f01252921754da1d1d2bea608f9f718053a0cb546680236529e238ffd832df->enter($__internal_82f01252921754da1d1d2bea608f9f718053a0cb546680236529e238ffd832df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_82f01252921754da1d1d2bea608f9f718053a0cb546680236529e238ffd832df->leave($__internal_82f01252921754da1d1d2bea608f9f718053a0cb546680236529e238ffd832df_prof);

        
        $__internal_724f2c3e0ccdb3e4439e572efb1d359d683a3c7199a48957df66886ed5bdae3b->leave($__internal_724f2c3e0ccdb3e4439e572efb1d359d683a3c7199a48957df66886ed5bdae3b_prof);

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
