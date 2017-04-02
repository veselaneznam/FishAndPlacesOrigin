<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4e417801207baf09e51ca47a12ac24d984b670cd2a384a102a2eb2cbcebc1d3c extends Twig_Template
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
        $__internal_aa6106f13cda561f5c908c6beef83f84e93cba99704830e1fee05eacd13d3c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa6106f13cda561f5c908c6beef83f84e93cba99704830e1fee05eacd13d3c65->enter($__internal_aa6106f13cda561f5c908c6beef83f84e93cba99704830e1fee05eacd13d3c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa6106f13cda561f5c908c6beef83f84e93cba99704830e1fee05eacd13d3c65->leave($__internal_aa6106f13cda561f5c908c6beef83f84e93cba99704830e1fee05eacd13d3c65_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64630d2e768055e97742dd69665a029e5171d33e87314cd71ef3b0912a794a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64630d2e768055e97742dd69665a029e5171d33e87314cd71ef3b0912a794a1c->enter($__internal_64630d2e768055e97742dd69665a029e5171d33e87314cd71ef3b0912a794a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_64630d2e768055e97742dd69665a029e5171d33e87314cd71ef3b0912a794a1c->leave($__internal_64630d2e768055e97742dd69665a029e5171d33e87314cd71ef3b0912a794a1c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8339ef789413ee834aa814c8794bc4bfc31d8ab74b64e2e228c29adc13f7cd3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8339ef789413ee834aa814c8794bc4bfc31d8ab74b64e2e228c29adc13f7cd3a->enter($__internal_8339ef789413ee834aa814c8794bc4bfc31d8ab74b64e2e228c29adc13f7cd3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8339ef789413ee834aa814c8794bc4bfc31d8ab74b64e2e228c29adc13f7cd3a->leave($__internal_8339ef789413ee834aa814c8794bc4bfc31d8ab74b64e2e228c29adc13f7cd3a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d3b346f89138271b02d18af502eaf368621e430f4c0c29804fd92b2c2dda18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3b346f89138271b02d18af502eaf368621e430f4c0c29804fd92b2c2dda18e->enter($__internal_0d3b346f89138271b02d18af502eaf368621e430f4c0c29804fd92b2c2dda18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0d3b346f89138271b02d18af502eaf368621e430f4c0c29804fd92b2c2dda18e->leave($__internal_0d3b346f89138271b02d18af502eaf368621e430f4c0c29804fd92b2c2dda18e_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
