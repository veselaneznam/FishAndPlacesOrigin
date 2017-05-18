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
        $__internal_b9e411a2599abd29145b7cf4a4ff27e307f9dde888d9c31e563f8d984d850d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9e411a2599abd29145b7cf4a4ff27e307f9dde888d9c31e563f8d984d850d09->enter($__internal_b9e411a2599abd29145b7cf4a4ff27e307f9dde888d9c31e563f8d984d850d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_081807ff9c9cccf1361f467c319df7ca74d4d12bed0081e87cc37550d7a4bd94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_081807ff9c9cccf1361f467c319df7ca74d4d12bed0081e87cc37550d7a4bd94->enter($__internal_081807ff9c9cccf1361f467c319df7ca74d4d12bed0081e87cc37550d7a4bd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9e411a2599abd29145b7cf4a4ff27e307f9dde888d9c31e563f8d984d850d09->leave($__internal_b9e411a2599abd29145b7cf4a4ff27e307f9dde888d9c31e563f8d984d850d09_prof);

        
        $__internal_081807ff9c9cccf1361f467c319df7ca74d4d12bed0081e87cc37550d7a4bd94->leave($__internal_081807ff9c9cccf1361f467c319df7ca74d4d12bed0081e87cc37550d7a4bd94_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eac5b966e3c7c587ce1f0757898f0995d0e7fd1497b7c37053ba0a397b771c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eac5b966e3c7c587ce1f0757898f0995d0e7fd1497b7c37053ba0a397b771c8c->enter($__internal_eac5b966e3c7c587ce1f0757898f0995d0e7fd1497b7c37053ba0a397b771c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f4062799cc8e6395bc333cc3889631f64cd732d8257888448332faacceb9159c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4062799cc8e6395bc333cc3889631f64cd732d8257888448332faacceb9159c->enter($__internal_f4062799cc8e6395bc333cc3889631f64cd732d8257888448332faacceb9159c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f4062799cc8e6395bc333cc3889631f64cd732d8257888448332faacceb9159c->leave($__internal_f4062799cc8e6395bc333cc3889631f64cd732d8257888448332faacceb9159c_prof);

        
        $__internal_eac5b966e3c7c587ce1f0757898f0995d0e7fd1497b7c37053ba0a397b771c8c->leave($__internal_eac5b966e3c7c587ce1f0757898f0995d0e7fd1497b7c37053ba0a397b771c8c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5f927e1bb223788cf2fb398ee36caf8d3d259e7f51168e344dd491901fb1c577 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f927e1bb223788cf2fb398ee36caf8d3d259e7f51168e344dd491901fb1c577->enter($__internal_5f927e1bb223788cf2fb398ee36caf8d3d259e7f51168e344dd491901fb1c577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_121b739722058791ea931df66c3728006f1333d035cc16677c527d12d91ad450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121b739722058791ea931df66c3728006f1333d035cc16677c527d12d91ad450->enter($__internal_121b739722058791ea931df66c3728006f1333d035cc16677c527d12d91ad450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_121b739722058791ea931df66c3728006f1333d035cc16677c527d12d91ad450->leave($__internal_121b739722058791ea931df66c3728006f1333d035cc16677c527d12d91ad450_prof);

        
        $__internal_5f927e1bb223788cf2fb398ee36caf8d3d259e7f51168e344dd491901fb1c577->leave($__internal_5f927e1bb223788cf2fb398ee36caf8d3d259e7f51168e344dd491901fb1c577_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5243bc228777e228523bfada1e68bbba90a10dc29cee7ca7e2931f6a9e0f507b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5243bc228777e228523bfada1e68bbba90a10dc29cee7ca7e2931f6a9e0f507b->enter($__internal_5243bc228777e228523bfada1e68bbba90a10dc29cee7ca7e2931f6a9e0f507b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a110f266394f67639c0245c3e995223e6098a4f96ea348c958e87165c9b87754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a110f266394f67639c0245c3e995223e6098a4f96ea348c958e87165c9b87754->enter($__internal_a110f266394f67639c0245c3e995223e6098a4f96ea348c958e87165c9b87754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a110f266394f67639c0245c3e995223e6098a4f96ea348c958e87165c9b87754->leave($__internal_a110f266394f67639c0245c3e995223e6098a4f96ea348c958e87165c9b87754_prof);

        
        $__internal_5243bc228777e228523bfada1e68bbba90a10dc29cee7ca7e2931f6a9e0f507b->leave($__internal_5243bc228777e228523bfada1e68bbba90a10dc29cee7ca7e2931f6a9e0f507b_prof);

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
