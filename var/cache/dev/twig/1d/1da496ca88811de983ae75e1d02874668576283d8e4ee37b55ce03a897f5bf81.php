<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_4a1eda53d227a3953bc1a8e3f17dc4b378a2510d717726e4154575314baa186b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50b35d1cd436521d6e22e2fd0f294dd4af0af0cc8106103784964c3cb60a3865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50b35d1cd436521d6e22e2fd0f294dd4af0af0cc8106103784964c3cb60a3865->enter($__internal_50b35d1cd436521d6e22e2fd0f294dd4af0af0cc8106103784964c3cb60a3865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_78096d811e87aebbdd4a7c9cf0d1f03c7ed12c0ee8ac4bde355d3b14666aecc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78096d811e87aebbdd4a7c9cf0d1f03c7ed12c0ee8ac4bde355d3b14666aecc6->enter($__internal_78096d811e87aebbdd4a7c9cf0d1f03c7ed12c0ee8ac4bde355d3b14666aecc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50b35d1cd436521d6e22e2fd0f294dd4af0af0cc8106103784964c3cb60a3865->leave($__internal_50b35d1cd436521d6e22e2fd0f294dd4af0af0cc8106103784964c3cb60a3865_prof);

        
        $__internal_78096d811e87aebbdd4a7c9cf0d1f03c7ed12c0ee8ac4bde355d3b14666aecc6->leave($__internal_78096d811e87aebbdd4a7c9cf0d1f03c7ed12c0ee8ac4bde355d3b14666aecc6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fb1b0021a2c8b13ea568462c75ef0ef9163d8a0393e6976d5c13040a658535b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fb1b0021a2c8b13ea568462c75ef0ef9163d8a0393e6976d5c13040a658535b->enter($__internal_1fb1b0021a2c8b13ea568462c75ef0ef9163d8a0393e6976d5c13040a658535b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c7dc82388414b206dbb66032762fa26db6a499448f6d9786b2fac39e6186056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7dc82388414b206dbb66032762fa26db6a499448f6d9786b2fac39e6186056->enter($__internal_5c7dc82388414b206dbb66032762fa26db6a499448f6d9786b2fac39e6186056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5c7dc82388414b206dbb66032762fa26db6a499448f6d9786b2fac39e6186056->leave($__internal_5c7dc82388414b206dbb66032762fa26db6a499448f6d9786b2fac39e6186056_prof);

        
        $__internal_1fb1b0021a2c8b13ea568462c75ef0ef9163d8a0393e6976d5c13040a658535b->leave($__internal_1fb1b0021a2c8b13ea568462c75ef0ef9163d8a0393e6976d5c13040a658535b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d42cedd7b400f2fcae8595c769e3977e876392f54e20ed7c4fac58364dc69f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d42cedd7b400f2fcae8595c769e3977e876392f54e20ed7c4fac58364dc69f0e->enter($__internal_d42cedd7b400f2fcae8595c769e3977e876392f54e20ed7c4fac58364dc69f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0f8492adced6f388052a74619c83611279fbd2aaa894c3589102302e88a068e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8492adced6f388052a74619c83611279fbd2aaa894c3589102302e88a068e1->enter($__internal_0f8492adced6f388052a74619c83611279fbd2aaa894c3589102302e88a068e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0f8492adced6f388052a74619c83611279fbd2aaa894c3589102302e88a068e1->leave($__internal_0f8492adced6f388052a74619c83611279fbd2aaa894c3589102302e88a068e1_prof);

        
        $__internal_d42cedd7b400f2fcae8595c769e3977e876392f54e20ed7c4fac58364dc69f0e->leave($__internal_d42cedd7b400f2fcae8595c769e3977e876392f54e20ed7c4fac58364dc69f0e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Users/vferdinandova/veselaProjects/fishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
