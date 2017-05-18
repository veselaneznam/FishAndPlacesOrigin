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
        $__internal_fc697148d02b510145a7961d0842d734d3f8aa02117fafd58c8cb86cf72ce58b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc697148d02b510145a7961d0842d734d3f8aa02117fafd58c8cb86cf72ce58b->enter($__internal_fc697148d02b510145a7961d0842d734d3f8aa02117fafd58c8cb86cf72ce58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2940a9195bf199ab62173c3ab93f8a3e38b1239d915cdbda8ee870a29a878e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2940a9195bf199ab62173c3ab93f8a3e38b1239d915cdbda8ee870a29a878e8d->enter($__internal_2940a9195bf199ab62173c3ab93f8a3e38b1239d915cdbda8ee870a29a878e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc697148d02b510145a7961d0842d734d3f8aa02117fafd58c8cb86cf72ce58b->leave($__internal_fc697148d02b510145a7961d0842d734d3f8aa02117fafd58c8cb86cf72ce58b_prof);

        
        $__internal_2940a9195bf199ab62173c3ab93f8a3e38b1239d915cdbda8ee870a29a878e8d->leave($__internal_2940a9195bf199ab62173c3ab93f8a3e38b1239d915cdbda8ee870a29a878e8d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_711206c09ddac54b8ca473ef0d0959cf4b42d09a13aeaec9ea0c5deb1590fd93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711206c09ddac54b8ca473ef0d0959cf4b42d09a13aeaec9ea0c5deb1590fd93->enter($__internal_711206c09ddac54b8ca473ef0d0959cf4b42d09a13aeaec9ea0c5deb1590fd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_912713064dda80cf12457db3fdaf23b12d1252337892be3e0f078404ff96f0ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912713064dda80cf12457db3fdaf23b12d1252337892be3e0f078404ff96f0ff->enter($__internal_912713064dda80cf12457db3fdaf23b12d1252337892be3e0f078404ff96f0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_912713064dda80cf12457db3fdaf23b12d1252337892be3e0f078404ff96f0ff->leave($__internal_912713064dda80cf12457db3fdaf23b12d1252337892be3e0f078404ff96f0ff_prof);

        
        $__internal_711206c09ddac54b8ca473ef0d0959cf4b42d09a13aeaec9ea0c5deb1590fd93->leave($__internal_711206c09ddac54b8ca473ef0d0959cf4b42d09a13aeaec9ea0c5deb1590fd93_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_eaae2d305c9f66b0eb243c0eb103842a9a87487f5b87e1d849db42ac190a4418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaae2d305c9f66b0eb243c0eb103842a9a87487f5b87e1d849db42ac190a4418->enter($__internal_eaae2d305c9f66b0eb243c0eb103842a9a87487f5b87e1d849db42ac190a4418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_93ed2c6e5df85e3ffdec28a7f13a3ddf172c59a979453e38d67621df0ef3ff1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ed2c6e5df85e3ffdec28a7f13a3ddf172c59a979453e38d67621df0ef3ff1f->enter($__internal_93ed2c6e5df85e3ffdec28a7f13a3ddf172c59a979453e38d67621df0ef3ff1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_93ed2c6e5df85e3ffdec28a7f13a3ddf172c59a979453e38d67621df0ef3ff1f->leave($__internal_93ed2c6e5df85e3ffdec28a7f13a3ddf172c59a979453e38d67621df0ef3ff1f_prof);

        
        $__internal_eaae2d305c9f66b0eb243c0eb103842a9a87487f5b87e1d849db42ac190a4418->leave($__internal_eaae2d305c9f66b0eb243c0eb103842a9a87487f5b87e1d849db42ac190a4418_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0bed6dad4fe81bfc26f53ab30494f85e14161abaa549e407d686052d64d44f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bed6dad4fe81bfc26f53ab30494f85e14161abaa549e407d686052d64d44f39->enter($__internal_0bed6dad4fe81bfc26f53ab30494f85e14161abaa549e407d686052d64d44f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f5d5c8764645716a5062d35328e0d303dcfcb488ecd97aa525c7c5f6ed082bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d5c8764645716a5062d35328e0d303dcfcb488ecd97aa525c7c5f6ed082bc1->enter($__internal_f5d5c8764645716a5062d35328e0d303dcfcb488ecd97aa525c7c5f6ed082bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_f5d5c8764645716a5062d35328e0d303dcfcb488ecd97aa525c7c5f6ed082bc1->leave($__internal_f5d5c8764645716a5062d35328e0d303dcfcb488ecd97aa525c7c5f6ed082bc1_prof);

        
        $__internal_0bed6dad4fe81bfc26f53ab30494f85e14161abaa549e407d686052d64d44f39->leave($__internal_0bed6dad4fe81bfc26f53ab30494f85e14161abaa549e407d686052d64d44f39_prof);

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
