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
        $__internal_1fccc9f73fc399e9c3ec11fdafc0e669296245ed8db57731ae5c18d12e3e2104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fccc9f73fc399e9c3ec11fdafc0e669296245ed8db57731ae5c18d12e3e2104->enter($__internal_1fccc9f73fc399e9c3ec11fdafc0e669296245ed8db57731ae5c18d12e3e2104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ea3517f453a0b9444fa1694eb0442929ed428481866d3ecfaaf93114ef50908c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3517f453a0b9444fa1694eb0442929ed428481866d3ecfaaf93114ef50908c->enter($__internal_ea3517f453a0b9444fa1694eb0442929ed428481866d3ecfaaf93114ef50908c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fccc9f73fc399e9c3ec11fdafc0e669296245ed8db57731ae5c18d12e3e2104->leave($__internal_1fccc9f73fc399e9c3ec11fdafc0e669296245ed8db57731ae5c18d12e3e2104_prof);

        
        $__internal_ea3517f453a0b9444fa1694eb0442929ed428481866d3ecfaaf93114ef50908c->leave($__internal_ea3517f453a0b9444fa1694eb0442929ed428481866d3ecfaaf93114ef50908c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_81733fa53058ee2a7f22506dcf0dd5fe757d8c4723c5ac284a85a879b15df9fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81733fa53058ee2a7f22506dcf0dd5fe757d8c4723c5ac284a85a879b15df9fb->enter($__internal_81733fa53058ee2a7f22506dcf0dd5fe757d8c4723c5ac284a85a879b15df9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e57a59857e99d1eae79ba33cd502fcb2482be87aa0a7c82742f91b225d97259f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e57a59857e99d1eae79ba33cd502fcb2482be87aa0a7c82742f91b225d97259f->enter($__internal_e57a59857e99d1eae79ba33cd502fcb2482be87aa0a7c82742f91b225d97259f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e57a59857e99d1eae79ba33cd502fcb2482be87aa0a7c82742f91b225d97259f->leave($__internal_e57a59857e99d1eae79ba33cd502fcb2482be87aa0a7c82742f91b225d97259f_prof);

        
        $__internal_81733fa53058ee2a7f22506dcf0dd5fe757d8c4723c5ac284a85a879b15df9fb->leave($__internal_81733fa53058ee2a7f22506dcf0dd5fe757d8c4723c5ac284a85a879b15df9fb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_080aab79a99768908295b6e0cca1ccca2f68a8262b4465ae9c1a6e82cd449f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_080aab79a99768908295b6e0cca1ccca2f68a8262b4465ae9c1a6e82cd449f3e->enter($__internal_080aab79a99768908295b6e0cca1ccca2f68a8262b4465ae9c1a6e82cd449f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_659a95091111c05d9421724eaae5e2df08ed23a07c8974b8b5697e539921e7e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_659a95091111c05d9421724eaae5e2df08ed23a07c8974b8b5697e539921e7e7->enter($__internal_659a95091111c05d9421724eaae5e2df08ed23a07c8974b8b5697e539921e7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_659a95091111c05d9421724eaae5e2df08ed23a07c8974b8b5697e539921e7e7->leave($__internal_659a95091111c05d9421724eaae5e2df08ed23a07c8974b8b5697e539921e7e7_prof);

        
        $__internal_080aab79a99768908295b6e0cca1ccca2f68a8262b4465ae9c1a6e82cd449f3e->leave($__internal_080aab79a99768908295b6e0cca1ccca2f68a8262b4465ae9c1a6e82cd449f3e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ca81d2c25f598f8f45ba8a9450ddb7d24cf120f34116b41fcad3c20d7fffa1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ca81d2c25f598f8f45ba8a9450ddb7d24cf120f34116b41fcad3c20d7fffa1b->enter($__internal_2ca81d2c25f598f8f45ba8a9450ddb7d24cf120f34116b41fcad3c20d7fffa1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_670982c711f2f7bf140a4a74b4bcf97080aca52b0ae64be5f50dd2ed89f96b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_670982c711f2f7bf140a4a74b4bcf97080aca52b0ae64be5f50dd2ed89f96b07->enter($__internal_670982c711f2f7bf140a4a74b4bcf97080aca52b0ae64be5f50dd2ed89f96b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_670982c711f2f7bf140a4a74b4bcf97080aca52b0ae64be5f50dd2ed89f96b07->leave($__internal_670982c711f2f7bf140a4a74b4bcf97080aca52b0ae64be5f50dd2ed89f96b07_prof);

        
        $__internal_2ca81d2c25f598f8f45ba8a9450ddb7d24cf120f34116b41fcad3c20d7fffa1b->leave($__internal_2ca81d2c25f598f8f45ba8a9450ddb7d24cf120f34116b41fcad3c20d7fffa1b_prof);

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
