<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6be566e0432cae9bc3c59b5e6a1015044395f3983390c9a0c781f471d9b10ce7 extends Twig_Template
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
        $__internal_3a117fa8e3caf15fb9e5b10ad5f97b8c14baa2daaf62e19457685f8ef917aee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a117fa8e3caf15fb9e5b10ad5f97b8c14baa2daaf62e19457685f8ef917aee7->enter($__internal_3a117fa8e3caf15fb9e5b10ad5f97b8c14baa2daaf62e19457685f8ef917aee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c02d5d65c868bd165360589b11a09cda494b518577fcc74efd4be416bdadf3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02d5d65c868bd165360589b11a09cda494b518577fcc74efd4be416bdadf3a8->enter($__internal_c02d5d65c868bd165360589b11a09cda494b518577fcc74efd4be416bdadf3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a117fa8e3caf15fb9e5b10ad5f97b8c14baa2daaf62e19457685f8ef917aee7->leave($__internal_3a117fa8e3caf15fb9e5b10ad5f97b8c14baa2daaf62e19457685f8ef917aee7_prof);

        
        $__internal_c02d5d65c868bd165360589b11a09cda494b518577fcc74efd4be416bdadf3a8->leave($__internal_c02d5d65c868bd165360589b11a09cda494b518577fcc74efd4be416bdadf3a8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_35b1c9c251aae2f81390edc0178accb1afc699b28a0055791dc859ea31f30d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b1c9c251aae2f81390edc0178accb1afc699b28a0055791dc859ea31f30d4b->enter($__internal_35b1c9c251aae2f81390edc0178accb1afc699b28a0055791dc859ea31f30d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8117af895ed1640a1fc96719064cdf98703793aaff360388e3bcf324a0585326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8117af895ed1640a1fc96719064cdf98703793aaff360388e3bcf324a0585326->enter($__internal_8117af895ed1640a1fc96719064cdf98703793aaff360388e3bcf324a0585326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8117af895ed1640a1fc96719064cdf98703793aaff360388e3bcf324a0585326->leave($__internal_8117af895ed1640a1fc96719064cdf98703793aaff360388e3bcf324a0585326_prof);

        
        $__internal_35b1c9c251aae2f81390edc0178accb1afc699b28a0055791dc859ea31f30d4b->leave($__internal_35b1c9c251aae2f81390edc0178accb1afc699b28a0055791dc859ea31f30d4b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_054b99ca1b65b732d142a27d877c8f809e54f1c4cd2c3bdcdb931e377eb30290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054b99ca1b65b732d142a27d877c8f809e54f1c4cd2c3bdcdb931e377eb30290->enter($__internal_054b99ca1b65b732d142a27d877c8f809e54f1c4cd2c3bdcdb931e377eb30290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e82b7fcb521a966b1074b2b7c80cab33f99d1d81f43129d442ae71c36f58a499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e82b7fcb521a966b1074b2b7c80cab33f99d1d81f43129d442ae71c36f58a499->enter($__internal_e82b7fcb521a966b1074b2b7c80cab33f99d1d81f43129d442ae71c36f58a499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e82b7fcb521a966b1074b2b7c80cab33f99d1d81f43129d442ae71c36f58a499->leave($__internal_e82b7fcb521a966b1074b2b7c80cab33f99d1d81f43129d442ae71c36f58a499_prof);

        
        $__internal_054b99ca1b65b732d142a27d877c8f809e54f1c4cd2c3bdcdb931e377eb30290->leave($__internal_054b99ca1b65b732d142a27d877c8f809e54f1c4cd2c3bdcdb931e377eb30290_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebb274bf859f43875707f37c99409946cbc457d5d513e1f7554768a03dcbbb19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebb274bf859f43875707f37c99409946cbc457d5d513e1f7554768a03dcbbb19->enter($__internal_ebb274bf859f43875707f37c99409946cbc457d5d513e1f7554768a03dcbbb19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a8b805c130c271abe74992f9ad3c1a9c20b51a18fdec29d3a6b72eb35c386211 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b805c130c271abe74992f9ad3c1a9c20b51a18fdec29d3a6b72eb35c386211->enter($__internal_a8b805c130c271abe74992f9ad3c1a9c20b51a18fdec29d3a6b72eb35c386211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a8b805c130c271abe74992f9ad3c1a9c20b51a18fdec29d3a6b72eb35c386211->leave($__internal_a8b805c130c271abe74992f9ad3c1a9c20b51a18fdec29d3a6b72eb35c386211_prof);

        
        $__internal_ebb274bf859f43875707f37c99409946cbc457d5d513e1f7554768a03dcbbb19->leave($__internal_ebb274bf859f43875707f37c99409946cbc457d5d513e1f7554768a03dcbbb19_prof);

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
