<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_a310c7cb144bb2ddce2bd55e76f6c6d273b5f3cbcbcd4b1c15595cbf16b81bd1 extends Twig_Template
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
        $__internal_f352aa6c00555e8368f0db89ff072e766bd58f5bc9451d26b6c68b1905b62d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f352aa6c00555e8368f0db89ff072e766bd58f5bc9451d26b6c68b1905b62d76->enter($__internal_f352aa6c00555e8368f0db89ff072e766bd58f5bc9451d26b6c68b1905b62d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_9da7ce7ca4665bcb79fe9a662655f1d1a6bc84ff3f6daa3f72641204a95e3097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da7ce7ca4665bcb79fe9a662655f1d1a6bc84ff3f6daa3f72641204a95e3097->enter($__internal_9da7ce7ca4665bcb79fe9a662655f1d1a6bc84ff3f6daa3f72641204a95e3097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f352aa6c00555e8368f0db89ff072e766bd58f5bc9451d26b6c68b1905b62d76->leave($__internal_f352aa6c00555e8368f0db89ff072e766bd58f5bc9451d26b6c68b1905b62d76_prof);

        
        $__internal_9da7ce7ca4665bcb79fe9a662655f1d1a6bc84ff3f6daa3f72641204a95e3097->leave($__internal_9da7ce7ca4665bcb79fe9a662655f1d1a6bc84ff3f6daa3f72641204a95e3097_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d714b6a0c5cb3f3953b47d04554e43985694398009bae89273768515fc761c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d714b6a0c5cb3f3953b47d04554e43985694398009bae89273768515fc761c9->enter($__internal_3d714b6a0c5cb3f3953b47d04554e43985694398009bae89273768515fc761c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_086da579b7496d290e5fe28737bb60b835fac098316ccabbee9ee19e6df015f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086da579b7496d290e5fe28737bb60b835fac098316ccabbee9ee19e6df015f6->enter($__internal_086da579b7496d290e5fe28737bb60b835fac098316ccabbee9ee19e6df015f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_086da579b7496d290e5fe28737bb60b835fac098316ccabbee9ee19e6df015f6->leave($__internal_086da579b7496d290e5fe28737bb60b835fac098316ccabbee9ee19e6df015f6_prof);

        
        $__internal_3d714b6a0c5cb3f3953b47d04554e43985694398009bae89273768515fc761c9->leave($__internal_3d714b6a0c5cb3f3953b47d04554e43985694398009bae89273768515fc761c9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4bcb2e9a3c16133e1760056d15072e3a98a9a73b7b8583fefa888979a20b2c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4bcb2e9a3c16133e1760056d15072e3a98a9a73b7b8583fefa888979a20b2c2->enter($__internal_c4bcb2e9a3c16133e1760056d15072e3a98a9a73b7b8583fefa888979a20b2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_35ccc043c389dd795d88bce0cb1c413b1c0ce84413cad0f4313c6272cb0c8ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35ccc043c389dd795d88bce0cb1c413b1c0ce84413cad0f4313c6272cb0c8ea0->enter($__internal_35ccc043c389dd795d88bce0cb1c413b1c0ce84413cad0f4313c6272cb0c8ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_35ccc043c389dd795d88bce0cb1c413b1c0ce84413cad0f4313c6272cb0c8ea0->leave($__internal_35ccc043c389dd795d88bce0cb1c413b1c0ce84413cad0f4313c6272cb0c8ea0_prof);

        
        $__internal_c4bcb2e9a3c16133e1760056d15072e3a98a9a73b7b8583fefa888979a20b2c2->leave($__internal_c4bcb2e9a3c16133e1760056d15072e3a98a9a73b7b8583fefa888979a20b2c2_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/var/www/FishAndPlaces/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
